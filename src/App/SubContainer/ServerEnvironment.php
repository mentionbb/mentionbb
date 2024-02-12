<?php

namespace App\SubContainer;

use App\App;

class ServerEnvironment
{
    protected $nativeConnection;
    protected $server;

    public function __construct()
    {
        $this->nativeConnection = (new \App\Entity\Native())->getNativeConnection();
        $this->server = new \App\Repository\Server();
    }

    public function getPHPVersion()
    {
        return phpversion();
    }

    public function getPHPInfo()
    {
        return phpinfo();
    }

    public function getServerVersion()
    {
        return $this->nativeConnection['server_version'];
    }

    public function getServerInfo()
    {
        return $this->nativeConnection['server_info'];
    }

    public function getMemoryLimit()
    {
        return ini_get('memory_limit');
    }

    public function getPostMaxSize()
    {
        return ini_get('post_max_size');
    }

    public function getUploadMaxFilesize()
    {
        return ini_get('upload_max_filesize');
    }

    public function getMaxInputVars()
    {
        return ini_get('max_input_vars');
    }

    public function getMaxExecutionTime()
    {
        return ini_get('max_execution_time');
    }

    public function getCurlVersion()
    {
        return curl_version()['version'];
    }

    public function isSupportGZip()
    {
        if (App::isLoadExtension('zlib'))
        {
            return true;
        }

        return false;
    }

    public function isMbstringEnabled()
    {
        if (App::isLoadExtension('mbstring'))
        {
            return true;
        }

        return false;
    }

    public function isPDOEnabled()
    {
        if (App::isLoadExtension('pdo_mysql'))
        {
            return true;
        }

        return false;
    }

    public function isIconvEnabled()
    {
        if (App::isLoadExtension('iconv'))
        {
            return true;
        }

        return false;
    }

    public function isCurlEnabled()
    {
        if (App::isLoadExtension('curl'))
        {
            return true;
        }

        return false;
    }

    public function isZipEnabled()
    {
        if (App::isLoadExtension('zip'))
        {
            return true;
        }

        return false;
    }

    public function getServerSoftware()
    {
        $serverSoftwareExplode = \explode('/', $this->server->get('SERVER_SOFTWARE'));

        return [
            'text' => \sprintf('%s/%s', $serverSoftwareExplode[0], $serverSoftwareExplode[1]),
            'name' => $serverSoftwareExplode[0],
            'version' => $serverSoftwareExplode[1]
        ];
    }

    public function checkRequirement()
    {
        if (version_compare($this->getPHPVersion(), App::$_supportPhpVersion, '>='))
        {
            $message['php'] = [
                'status' => 'ok',
                'error' => false
            ];
        }
        else
        {
            $message['php'] = [
                'status' => 'fail',
                'error' => 'php'
            ];
        }

        if ($this->isMbstringEnabled())
        {
            $message['mbstring'] = [
                'status' => 'ok',
                'error' => false
            ];
        }
        else
        {
            $message['mbstring'] = [
                'status' => 'fail',
                'error' => 'mbstring'
            ];
        }

        if ($this->isZipEnabled())
        {
            $message['zip'] = [
                'status' => 'ok',
                'error' => false
            ];
        }
        else
        {
            $message['zip'] = [
                'status' => 'fail',
                'error' => 'zip'
            ];
        }

        if ($this->isCurlEnabled())
        {
            $message['curl'] = [
                'status' => 'ok',
                'error' => false
            ];
        }
        else
        {
            $message['curl'] = [
                'status' => 'fail',
                'error' => 'curl'
            ];
        }

        foreach ($message as $requirement)
        {
            if ($requirement['status'] == 'fail')
            {
                $req[] = $requirement;
            }
        }

        if (isset($req))
        {
            return $req;
        }

        return true;
    }
}
