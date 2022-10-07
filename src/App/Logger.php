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
}
