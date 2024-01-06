<?php

namespace App\Util;

class Webp
{
    public static function convertToWebp($path, $target, $quality = 80)
    {
        if (!file_exists($path))
        {
            return false;
        }

        $fileType = \exif_imagetype($path);

        if ($fileType == IMAGETYPE_JPEG)
        {
            $image = imagecreatefromjpeg($path);
        }
        else if ($fileType == IMAGETYPE_PNG)
        {
            $image = imagecreatefrompng($path);
        }
        if ($fileType == IMAGETYPE_GIF)
        {
            $image = imagecreatefromgif($path);
        }
        if ($fileType == IMAGETYPE_WEBP)
        {
            $image = imagecreatefromwebp($path);
        }

        \imagewebp($image, $target, $quality);
        \imagedestroy($image);

        (new \App\Util\File())->remove($path);

        return true;
    }
}
