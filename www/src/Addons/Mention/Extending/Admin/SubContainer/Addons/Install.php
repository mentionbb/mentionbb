<?php

namespace ComponentBundle\Extending\Admin\SubContainer\Addons;

use App\Uuid;
use App\Util\File;
use App\Util\Zip;

class Install
{
    public static function doInstall($file)
    {
        if (is_object($file))
        {
            $file = \App\Repository\Set::setArray($file);
        }

        $uploadOk = 1;

        $target_file = basename($file['name']);
		$mimeType = \mb_strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

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
            $uuid = Uuid::v4();
            $dir = APPLICATION_SELF . "/Addons/{$uuid}.zip";
            move_uploaded_file($file["tmp_name"], $dir);

            (new Zip())->extract($dir, APPLICATION_SELF . "/Addons");
            (new File())->remove($dir);

            return true;
        }
    }
}
