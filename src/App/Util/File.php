<?php

namespace App\Util;

use Symfony\Component\Filesystem\Filesystem;

class File
{
    protected $filesystem;

    public function __construct()
    {
        $this->filesystem = new Filesystem;
    }

    public function exist($filename)
    {
        return $this->filesystem->exists($filename);
    }

    public function mkdir($foldername)
    {
        return $this->filesystem->mkdir($foldername);
    }

    public function dumpFile($path, $data)
    {
        return $this->filesystem->dumpFile($path, $data);
    }

    public function appendToFile($path, $data)
    {
        return $this->filesystem->appendToFile($path, $data);
    }

    public function remove($path)
    {
        return $this->filesystem->remove($path);
    }

    public function rename($path, $newPath)
    {
        return $this->filesystem->rename($path, $newPath, true);
    }

    public function copy($target, $path)
    {
        if (is_file($target))
        {
            return $this->filesystem->copy($target, $path);
        }
        else if (is_dir($target))
        {
            return $this->filesystem->mirror($target, $path);
        }

        return false;
    }

    public function backup($path)
    {
        if (file_exists($path))
        {
            $name = basename($path);
            $encryptionFilename = \App\Repository\Crypto::encryptionStaticIv($name, '#MENTION_BACKUP-UWDxBWLqierTf') . '.par';

            return $this->filesystem->copy(
                $path,
                BACKUP_DIR . DIRECTORY_SEPARATOR . $encryptionFilename,
                true
            );
        }

        return true;
    }

    public function getBackup($name)
    {
        $encryptionFilename = \App\Repository\Crypto::encryptionStaticIv($name, '#MENTION_BACKUP-UWDxBWLqierTf') . '.par';

        return \file_get_contents(BACKUP_DIR . DIRECTORY_SEPARATOR . $encryptionFilename);
    }
}
