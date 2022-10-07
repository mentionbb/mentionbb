<?php

namespace ComponentBundle\Extending\Admin\SubContainer\Languages;

use App\Util\File;
use App\Util\Zip;

class Import
{
    public static function doImport($file)
    {
        if (is_object($file))
        {
            $file = \App\Repository\Set::setArray($file);
        }

        $uploadOk = 1;

        $target_file = basename($file['name']);
        $mimeType = \mb_strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $filename = pathinfo($target_file, PATHINFO_FILENAME);

        if (!in_array($mimeType, ['zip']))
        {
            $uploadOk = 0;
        }

        if ($uploadOk == 0)
        {
            return false;
        }
        else
        {
            if (file_exists(APPLICATION_SELF . "/Languages/{$filename}.yaml"))
            {
                return [
                    'status' => 'language-is-exist'
                ];
            }

            $dir = APPLICATION_SELF . "/Languages/{$filename}.zip";
            move_uploaded_file($file["tmp_name"], $dir);

            (new Zip())->extract($dir, APPLICATION_SELF . "/Languages");
            (new File())->remove($dir);

            return true;
        }
    }
}
