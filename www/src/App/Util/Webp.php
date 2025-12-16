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
        else if ($fileType == IMAGETYPE_GIF)
        {
            $image = imagecreatefromgif($path);
        }
        else if ($fileType == IMAGETYPE_WEBP || $fileType == IMAGETYPE_AVIF)
        {
            return true;
        }

        \imagewebp($image, $target, $quality);

        return true;
    }
}
