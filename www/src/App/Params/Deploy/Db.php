<?php

namespace App\Params\Deploy;

use App\Params\Env as EnvParams;

class Db
{
    private $env;
    
    public function __construct()
    {
        $this->env = new EnvParams();
    }
    
    public function deployConnectParams()
    {
        return [
            'global' => [
                'driver' => $this->env->getDbconfigAdapter(),
                'user' => $this->env->getDbconfigUser(),
                'password' => $this->env->getDbconfigUserPassword()
            ],
            'driver:pdo_mysql|mysqli' => [
                'host' => $this->env->getDbconfigHost(),
                'port' => $this->env->getDbconfigPort(),
                'dbname' => $this->env->getDbconfigDbname(),
                'charset' => 'utf8mb4'
            ],
            'driver:pdo_pgsql|pgsql|pdo_sqlsrv|sqlsrv' => [
                'host' => $this->env->getDbconfigHost(),
                'port' => $this->env->getDbconfigPort(),
                'dbname' => $this->env->getDbconfigDbname()
            ],
            'driver:pdo_sqlite|sqlite' => [
                'path' => null,
                'memory' => false
            ]
        ];
    }

    public function deployCacheParams()
    {
        return [
            'namespace' => 'DBQuaries',
            'adapter' => $this->env->getCacheAdapter(),
            'defaultLifetime' => $this->env->getCacheDefaultLifetime(),
            'cache-adapter:ApcuAdapter' => [
                'version' => $this->env->getCacheApcuVersion()
            ],
            'cache-adapter:ArrayAdapter' => [
                'storeSerialized' => $this->env->getCacheArrayStoreSerialized(),
                'maxItems' => $this->env->getCacheArrayMaxItems()
            ],
            'cache-adapter:MemcachedAdapter' => [
                'url' => $this->env->getCacheMemcachedUrl()
            ],
            'cache-adapter:DoctrineDbalAdapter,default' => [
                'tables' => [
                    [
                        'db_table' => 'dbquery_cache_items',
                        'db_id_col' => 'item_id',
                        'db_item_col' => 'item_data',
                        'db_lifetime_col' => 'item_lifetime',
                        'db_time_col' => 'item_time'
                    ]
                ]
            ],
            'cache-adapter:PhpFilesAdapter' => [
                'directory' => APPLICATION_SELF . '/Cache'
            ],
            'cache-adapter:RedisAdapter' => [
                'url' => $this->env->getCacheRedisUrl()
            ]
        ];
    }
}
