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
use Doctrine\DBAL\Schema\Table as TableSchema;

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
		else if (\Release\DbConfig::DB_Params['driver'] == 'pdo_oci' && \Release\DbConfig::DB_Params['driver'] == 'oci8')
		{
			$connectionParams = \Release\DbConfig::DB_PARAMS_OCI;
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
		else if (\Release\DbConfig::DB_Params['driver'] == 'ibm_db2')
		{
			$connectionParams = \Release\DbConfig::DB_PARAMS_IMB_DB2;
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

		$cache = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
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
			->from($this->table)
			->executeQuery()->fetchAllAssociative();

		$this->conn->close();

		return $query;
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
			->setParameter(0, $name)
			->executeQuery()->fetchAssociative();

		$this->conn->close();

		return $query;
	}

	public function getSchemaManager()
	{
		return $this->conn->createSchemaManager();
	}

	public function createTableSchema($name)
	{
		return new TableSchema($name);
	}

	public function getType($type)
	{
		return DoctrineTypes::getType($type);
	}
}
