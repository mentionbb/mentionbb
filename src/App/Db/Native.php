<?php

namespace App\Db;

use App\Db\Layer;

class Native extends Layer
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getNativeConnection()
    {
        if (
            $this->getParams()['driver'] == 'pdo_mysql'
            || $this->getParams()['driver'] == 'pdo_sqlite'
            || $this->getParams()['driver'] == 'pdo_pgsql'
        )
        {
            $response['server_info'] = $this->getNative()->getAttribute(constant('PDO::ATTR_SERVER_INFO'));
            $response['server_version'] = $this->getNative()->getAttribute(constant('PDO::ATTR_SERVER_VERSION'));
        }
        else if ($this->getParams()['driver'] == 'mysqli')
        {
            $stats = $this->getNative()->get_connection_stats();

            $response['server_info'] = "Bytes sent: {$stats['bytes_sent']}, bytes received: {$stats['bytes_received']}.";
            $response['server_version'] = $this->getNative()->get_server_info();
        }
        else if ($this->getParams()['driver'] == 'sqlite3')
        {
            $response['server_info'] = null;
            $response['server_version'] = \SQLite3::version()['versionString'];
        }
        else if ($this->getParams()['driver'] == 'sqlsrv')
        {
            $sqlsrv_Info = \sqlsrv_server_info($this->getNative());

            $response['server_info'] = null;
            $response['server_version'] = $sqlsrv_Info['SQLServerVersion'];
        }
        else
        {
            $response['server_info'] = null;
            $response['server_version'] = null;
        }

        return $response;
    }

    public function isPlatform($platform)
    {
        if ($platform == 'mysql' || $platform == 'mysqli')
        {
            if (
                $this->getParams()['driver'] == 'pdo_mysql'
                || $this->getParams()['driver'] == 'mysqli'
            )
            {
                return true;
            }
        }
        else if ($platform == 'sqlite')
        {
            if (
                $this->getParams()['driver'] == 'pdo_sqlite'
                || $this->getParams()['driver'] == 'sqlite3'
            )
            {
                return true;
            }
        }
        else if ($platform == 'pgsql')
        {
            if (
                $this->getParams()['driver'] == 'pdo_pgsql'
                || $this->getParams()['driver'] == 'pgsql'
            )
            {
                return true;
            }
        }
        else if ($platform == 'sqlsrv')
        {
            if (
                $this->getParams()['driver'] == 'pdo_sqlsrv'
                || $this->getParams()['driver'] == 'sqlsrv'
            )
            {
                return true;
            }
        }

        return false;
    }
}
