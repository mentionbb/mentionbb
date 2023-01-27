<?php

namespace App\Hook\Filter;

class FilterTag
{
    public static function filterSingleTags($content)
    {
        $content = preg_replace('/<(br|hr)>/si', '<$1 />', $content);
        $content = preg_replace('/<img(.*?)>/si', '<img$1 />', $content);

        return $content;
    }
}
