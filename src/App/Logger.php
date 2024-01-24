<?php

namespace App;

use App\Util\File;
use App\Renderer\Response\Json;
use App\Repository\Request;

class Logger
{
    protected static $errorReporting_File = 'PHPError_Last.log';

    public static function ErrorLogger()
    {
        if (!is_null(\error_get_last()))
        {
            $filesystem = new File();

            $filename = APPLICATION_SELF . '/Logs/' . self::$errorReporting_File;

            if (!$filesystem->exist($filename))
            {
                $data = [
                    'created_at' => \time(),
                    'filename' => 'src/Logs/' . self::$errorReporting_File
                ];

                $filesystem->dumpFile($filename, \json_encode($data));
            }

            $data = [
                'data' => \error_get_last(),
                'route' => (new Request())->getRequestUri(),
                'time' => \time()
            ];

            $filesystem->appendToFile($filename, "\r\n" . \json_encode($data));
        }
    }

    public static function doLogAdv(array $data)
    {
        $filesystem = new File();

        $filename = APPLICATION_SELF . '/Logs/' . "PHPError_" . time() . "_" . \App\Uuid::v4() . ".log";

        $data = [
            'created_at' => time(),
            'where_page' => (new \App\Repository\Request())->getRequestUri(),
            'log' => $data
        ];

        $filesystem->dumpFile($filename, \json_encode($data, JSON_PRETTY_PRINT));
    }
}
