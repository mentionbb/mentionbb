<?php

namespace ComponentBundle\Extending\Admin\SubContainer;

use App\Util\File;

class Logs
{
    public static function isExistNewErrorLog()
    {
        $filesystem = new File();

        if ($filesystem->exist(APPLICATION_SELF . '/Logs/PHPError_Last.log'))
        {
            return true;
        }

        return false;
    }

    public static function ignoreErrorLog()
    {
        $filesystem = new File();

        $file = APPLICATION_SELF . '/Logs/PHPError_Last.log';
        if ($filesystem->exist($file))
        {
            $filesystem->rename($file, APPLICATION_SELF . '/Logs/PHPError_Last_ ' . date('Y-m-d H:i', time()) . '.log');
        }

        return true;
    }
}
