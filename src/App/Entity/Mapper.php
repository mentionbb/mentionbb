<?php

/**
 * This Abstract class use a App run on Object-Relational-Mapping.
 *
 * Utilized for ORM: Doctrine DBAL | https://www.doctrine-project.org/projects/doctrine-dbal/en/current/index.html
 */

namespace App\Entity;

use Doctrine\DBAL\Configuration as DoctrineConfiguration;
use Doctrine\DBAL\DriverManager as DoctrineDriverManager;
use Doctrine\DBAL\Logging\Middleware as DoctrineMiddleware;
use Doctrine\DBAL\Types\Type as DoctrineTypes;

abstract class Mapper
{
	/**
	 * [$table Current selected table]
	 * @var [string]
	 */
	protected $table;

	/**
	 * logger
	 * Doctrine logger
	 * @var mixed
	 */
	protected $logger;

	protected $conn;

	private $query;

	public function __construct()
	{
		$connectionParams = null;
		if (\Release\DbConfig::DB_Params['driver'] == 'pdo_mysql')
		{
			$connectionParams = \Release\DbConfig::DB_Params_PDO_MySQL;
		}
		else if (\Release\DbConfig::DB_Params['driver'] == 'pdo_sqlite')
		{
			$connectionParams = \Release\DbConfig::DB_PARAMS_PDO_SQLite;
		}
		else if (\Release\DbConfig::DB_Params['driver'] == 'pdo_pgsql' && \Release\DbConfig::DB_Params['driver'] == 'pgsql')
		{
			$connectionParams = \Release\DbConfig::DB_PARAMS_PgSQL;
		}
		else if (\Release\DbConfig::DB_Params['driver'] == 'pdo_sqlsrv' && \Release\DbConfig::DB_Params['driver'] == 'sqlsrv')
		{
			$connectionParams = \Release\DbConfig::DB_PARAMS_SQLSrv;
		}
		else if (\Release\DbConfig::DB_Params['driver'] == 'mysqli')
		{
			$connectionParams = \Release\DbConfig::DB_PARAMS_MySQLi;
		}
		else if (\Release\DbConfig::DB_Params['driver'] == 'sqlite3')
		{
			$connectionParams = \Release\DbConfig::DB_PARAMS_SQLite3;
		}

		if (is_null($connectionParams))
		{
			throw new \Exception('Make sure you have entered the correct database driver settings.');
		}

		$connectionParams = \array_merge(
			$connectionParams,
			\Release\DbConfig::DB_Params
		);

		/**
		 * [$this->conn Connect to MySQL with parameters.]
		 * @var [object]
		 */
		$this->conn = DoctrineDriverManager::getConnection($connectionParams, new DoctrineConfiguration());

		$this->conn->getConfiguration()
			->setMiddlewares([
				new DoctrineMiddleware(new \Psr\Log\NullLogger())
			]);

		$cacheConfig = [
			'namespace' => 'DBQuaries'
		];

		$cache = null;

		if (\Release\InitialConfig::Cache_Standard['adapter'] == 'ApcuAdapter')
		{
			$cache = new \Symfony\Component\Cache\Adapter\ApcuAdapter(
				$cacheConfig['namespace'],
				\Release\InitialConfig::Cache_Standard['config']['defaultLifetime'],
				\Release\InitialConfig::Cache_Standard['config']['version']
			);
		}
		else if (\Release\InitialConfig::Cache_Standard['adapter'] == 'ArrayAdapter')
		{
			$cache = new \Symfony\Component\Cache\Adapter\ArrayAdapter(
				\Release\InitialConfig::Cache_Standard['config']['defaultLifetime'],
				\Release\InitialConfig::Cache_Standard['config']['storeSerialized'],
				\Release\InitialConfig::Cache_Standard['config']['maxLifetime'],
				\Release\InitialConfig::Cache_Standard['config']['maxItems']
			);
		}
		else if (\Release\InitialConfig::Cache_Standard['adapter'] == 'MemcachedAdapter')
		{
			$cache = new \Symfony\Component\Cache\Adapter\MemcachedAdapter(
				\Symfony\Component\Cache\Adapter\MemcachedAdapter::createConnection(
					\Release\InitialConfig::Cache_Standard['config']['url']
				),
				$cacheConfig['namespace'],
				\Release\InitialConfig::Cache_Standard['config']['defaultLifetime']
			);
		}
		else if (
			\Release\InitialConfig::Cache_Standard['adapter'] == 'DoctrineDbalAdapter'
			|| \Release\InitialConfig::Cache_Standard['adapter'] == 'default'
		)
		{
			$cache = new \Symfony\Component\Cache\Adapter\DoctrineDbalAdapter(
				$this->conn,
				$cacheConfig['namespace'],
				\Release\InitialConfig::Cache_Standard['config']['defaultLifetime'],
				[
					'db_table' => 'dbquery_cache_items',
					'db_id_col' => 'item_id',
					'db_item_col' => 'item_data',
					'db_lifetime_col' => 'item_lifetime',
					'db_time_col' => 'item_time'
				]
			);
		}
		else if (\Release\InitialConfig::Cache_Standard['adapter'] == 'PhpFilesAdapter')
		{
			$cache = new \Symfony\Component\Cache\Adapter\PhpFilesAdapter(
				$cacheConfig['namespace'],
				\Release\InitialConfig::Cache_Standard['config']['defaultLifetime'],
				APPLICATION_SELF . '/Cache'
			);
		}
		else if (\Release\InitialConfig::Cache_Standard['adapter'] == 'RedisAdapter')
		{
			$cache = new \Symfony\Component\Cache\Adapter\RedisAdapter(
				\Symfony\Component\Cache\Adapter\RedisAdapter::createConnection(
					\Release\InitialConfig::Cache_Standard['config']['url']
				),
				$cacheConfig['namespace'],
				\Release\InitialConfig::Cache_Standard['config']['defaultLifetime']
			);
		}

		if (empty(\Release\InitialConfig::Cache_Standard['adapter']) || is_null($cache))
		{
			throw new \Exception('Cache not set. Please use a cacher or set it by default.');
		}

		$this->conn->getConfiguration()->setResultCache($cache);
	}

	/**
	 * [setTable Set current table]
	 * @param [string] $table
	 */
	public function setTable($table)
	{
		$this->table = $table;
	}

	/**
	 * [findAll Find all data in table without params]
	 * @return [array]
	 */
	public function findAll()
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table);

		$fetch = $query->executeQuery()->fetchAllAssociative();

		$this->conn->close();

		return $fetch;
	}

	/**
	 * [findByName Get name column]
	 * @param  [string] $name
	 * @return [string]
	 */
	public function findByName($name)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('name = ?')
			->setParameter(0, $name);

		$fetch = $this->setQuery($query)
			->executeQuery()
			->fetchAssociative();

		$this->conn->close();

		return $fetch;
	}

	public function getType($type)
	{
		return DoctrineTypes::getType($type);
	}

	/**
	 * setQuery
	 *
	 * @param  \Doctrine\DBAL\Query\QueryBuilder $query
	 * @return \App\Entity\Mapper
	 */
	public function setQuery(\Doctrine\DBAL\Query\QueryBuilder $query): \App\Entity\Mapper
	{
		$this->query = $query;

		return $this;
	}

	/**
	 * executeQuery
	 * 
	 * This is an additional function for cache queries written to be shortened and more understandable.
	 *
	 * @return \Doctrine\DBAL\Result
	 */
	public function executeQuery(): \Doctrine\DBAL\Result
	{
		return $this->conn->executeCacheQuery(
			$this->query->getSQL(),
			$this->query->getParameters(),
			$this->query->getParameterTypes(),
			new \Doctrine\DBAL\Cache\QueryCacheProfile(3600, "MentionApp_DbQuery_CacheImpl_" . \ucwords($this->query->getQueryPart('from')[0]['table']) . "_" . sha1($this->query->getSQL()))
		);
	}
}
