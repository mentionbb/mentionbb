<?php

namespace App\Util;

use PhpZip\ZipFile;

class Zip
{
    protected $zip;

    public function __construct()
    {
        $this->zip = new ZipFile();;
    }

    public function extract($file, $path)
    {
        try
        {
            $this->zip
                ->openFile($file)
                ->extractTo($path);
        }
        catch (\PhpZip\Exception\ZipException $e)
        {
            echo $e->getMessage();
        }
        finally
        {
            $this->zip->close();
        }

        return true;
    }

    public function compress($files = [], $outputFilename)
    {
        try
        {
            foreach ($files as $name => $file)
            {
                if (!is_dir($file))
                {
                    $this->zip->addFile($file, $name);
                }
                else
                {
                    $this->zip->addDirRecursive($file, $name);
                }
            }

            $this->zip->saveAsFile($outputFilename)
                ->close();
        }
        catch (\PhpZip\Exception\ZipException $e)
        {
            echo $e->getMessage();
        }
    }
}
