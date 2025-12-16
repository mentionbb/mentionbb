<?php

namespace ComponentBundle\Extending\Admin\SubContainer;

class Modification
{
    public static function isExist($namespace)
    {
        $namespaceToBackupName = self::getCache($namespace);
        $file = BACKUP_DIR . "/Modification/{$namespaceToBackupName}.par";

        if (file_exists($file))
        {
            return \file_get_contents($file);
        }

        return false;
    }

    public static function isRealExist($namespace)
    {
        $namespaceToBackupName = self::getCache($namespace);
        $file = BACKUP_DIR . "/Modification/{$namespaceToBackupName}.par";

        if (file_exists($file))
        {
            return true;
        }

        return false;
    }

    public static function writeModification($namespace)
    {
        $namespaceToBackupName = self::getCache($namespace);
        $file = BACKUP_DIR . "/Modification/{$namespaceToBackupName}.par";

        return $file;
    }

    private static function getCache($namespace)
    {
        return str_replace(['\\', '/'], ['_', '_'], $namespace);
    }
}
