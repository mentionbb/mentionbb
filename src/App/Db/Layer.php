<?php

/**
 * This Abstract class use a App run on Object-Relational-Mapping.
 *
 * Utilized for ORM: Doctrine DBAL | https://www.doctrine-project.org/projects/doctrine-dbal/en/current/index.html
 */

namespace App\Db;

use App\Params\Deploy\Db as DbDeploy;

use Doctrine\DBAL\Configuration as DoctrineConfiguration;
use Doctrine\DBAL\DriverManager as DoctrineDriverManager;
use Doctrine\DBAL\Logging\Middleware as DoctrineMiddleware;
use Doctrine\DBAL\Types\Type as DoctrineTypes;

abstract class Layer
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

    private $conn;

    private $query;

    private $cache;

    private $cacheItemTemplate = "MentionApp_DbQuery_CacheImpl_%s_%s";

    public function __construct()
    {
        $dbDeploy = new DbDeploy();
        $dbConfig = $dbDeploy->deployConnectParams();

        $connectionParams = null;
        if ($dbConfig['global']['driver'] == 'pdo_mysql')
        {
            $connectionParams = $dbConfig['driver:pdo_mysql|mysqli'];
        }
        else if ($dbConfig['global']['driver'] == 'pdo_sqlite')
        {
            $connectionParams = $dbConfig['driver:pdo_sqlite|sqlite'];
        }
        else if ($dbConfig['global']['driver'] == 'pdo_pgsql' && $dbConfig['global']['driver'] == 'pgsql')
        {
            $connectionParams = $dbConfig['driver:pdo_pgsql|pgsql|pdo_sqlsrv|sqlsrv'];
        }
        else if ($dbConfig['global']['driver'] == 'pdo_sqlsrv' && $dbConfig['global']['driver'] == 'sqlsrv')
        {
            $connectionParams = $dbConfig['driver:pdo_pgsql|pgsql|pdo_sqlsrv|sqlsrv'];
        }
        else if ($dbConfig['global']['driver'] == 'mysqli')
        {
            $connectionParams = $dbConfig['driver:pdo_mysql|mysqli'];
        }
        else if ($dbConfig['global']['driver'] == 'sqlite3')
        {
            $connectionParams = $dbConfig['driver:pdo_sqlite|sqlite'];
        }

        if (is_null($connectionParams))
        {
            throw new \Exception('Make sure you have entered the correct database driver settings.');
        }

        $connectionParams = \array_merge(
            $connectionParams,
            $dbConfig['global']
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

        $cacheConfig = $dbDeploy->deployCacheParams();

        $cache = null;
        if ($cacheConfig['adapter'] == 'ApcuAdapter')
        {
            $cache = new \Symfony\Component\Cache\Adapter\ApcuAdapter(
                $cacheConfig['namespace'],
                $cacheConfig['defaultLifetime'],
                $cacheConfig['cache-adapter:ApcuAdapter']['version']
            );
        }
        else if ($cacheConfig['adapter'] == 'ArrayAdapter')
        {
            $cache = new \Symfony\Component\Cache\Adapter\ArrayAdapter(
                $cacheConfig['defaultLifetime'],
                $cacheConfig['cache-adapter:ArrayAdapter']['storeSerialized'],
                $cacheConfig['maxLifetime'],
                $cacheConfig['cache-adapter:ArrayAdapter']['maxItems']
            );
        }
        else if ($cacheConfig['adapter'] == 'MemcachedAdapter')
        {
            $cache = new \Symfony\Component\Cache\Adapter\MemcachedAdapter(
                \Symfony\Component\Cache\Adapter\MemcachedAdapter::createConnection(
                    $cacheConfig['cache-adapter:MemcachedAdapter']['url']
                ),
                $cacheConfig['namespace'],
                $cacheConfig['defaultLifetime']
            );
        }
        else if (
            $cacheConfig['adapter'] == 'DoctrineDbalAdapter'
            || $cacheConfig['adapter'] == 'default'
        )
        {
            $cache = new \Symfony\Component\Cache\Adapter\DoctrineDbalAdapter(
                $this->conn,
                $cacheConfig['namespace'],
                $cacheConfig['defaultLifetime'],
                $cacheConfig['cache-adapter:DoctrineDbalAdapter,default']['tables']
            );
        }
        else if ($cacheConfig['adapter'] == 'PhpFilesAdapter')
        {
            $cache = new \Symfony\Component\Cache\Adapter\PhpFilesAdapter(
                $cacheConfig['namespace'],
                $cacheConfig['defaultLifetime'],
                $cacheConfig['cache-adapter:PhpFilesAdapter']['directory']
            );
        }
        else if ($cacheConfig['adapter'] == 'RedisAdapter')
        {
            $cache = new \Symfony\Component\Cache\Adapter\RedisAdapter(
                \Symfony\Component\Cache\Adapter\RedisAdapter::createConnection(
                    $cacheConfig['cache-adapter:RedisAdapter']['url']
                ),
                $cacheConfig['namespace'],
                $cacheConfig['defaultLifetime']
            );
        }

        if (empty($cacheConfig['adapter']) || is_null($cache))
        {
            throw new \Exception('Cache not set. Please use a cacher or set it by default.');
        }

        $this->conn->getConfiguration()->setResultCache($cache);
        $this->cache = $cache;
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
    public function findAll($cache = true)
    {
        $query = $this->conn->createQueryBuilder()
            ->select('*')
            ->from($this->table);

        if (!$cache)
        {
            $fetch = $query->executeQuery()->fetchAllAssociative();
        }
        else
        {
            $fetch = $this->setQuery($query)
                ->executeQuery()
                ->fetchAssociative();
        }

        $this->conn->close();

        return $fetch;
    }

    /**
     * [findByName Get name column]
     * @return [string]
     */
    public function findByName($name, $cache = true)
    {
        $query = $this->conn->createQueryBuilder()
            ->select('*')
            ->from($this->table)
            ->where('name = ?')
            ->setParameter(0, $name);

        if (!$cache)
        {
            $fetch = $query->executeQuery()->fetchAllAssociative();
        }
        else
        {
            $fetch = $this->setQuery($query)
                ->executeQuery()
                ->fetchAssociative();
        }

        $this->conn->close();

        return $fetch;
    }

    /**
     * createQueryBuilder
     *
     * @return \Doctrine\DBAL\Query\QueryBuilder
     */
    public function createQueryBuilder()
    {
        $builder = new \App\Db\QueryBuilder\Builder($this->conn);
        $builder->getCacheLayer($this->cache);
        $builder->getTable($this->table);

        return $builder;
    }

    /**
     * setQuery
     *
     * @param  \Doctrine\DBAL\Query\QueryBuilder $query
     * @return \App\Db\Layer
     */
    public function setQuery(\Doctrine\DBAL\Query\QueryBuilder $query): \App\Db\Layer
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
            new \Doctrine\DBAL\Cache\QueryCacheProfile(
                3600,
                $this->getCacheItem()
            )
        );
    }

    public function getCacheItem()
    {
        return \sprintf(
            $this->cacheItemTemplate,
            \ucwords($this->table),
            \ucwords(
                \sha1($this->query->getSQL())
            )
        );
    }

    public function getType($type)
    {
        return DoctrineTypes::getType($type);
    }

    public function getParams()
    {
        return $this->conn->getParams();
    }

    public function getNative()
    {
        return $this->conn->getNativeConnection();
    }

    public function close()
    {
        return $this->conn->close();
    }

    public function lastInsertId($name = null)
    {
        return $this->conn->lastInsertId();
    }

    public function createSchemaManager()
    {
        return $this->conn->createSchemaManager();
    }
}
