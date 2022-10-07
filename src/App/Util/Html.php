<?php

namespace App\Util;

class Html
{
    public static function isHtml($string)
    {
        if ($string != strip_tags($string))
        {
            return true;
        }

        return false;
    }
}
