<?php

namespace App\Hook\Filter;

use Symfony\Component\DomCrawler\Crawler;

class FilterTag
{
    /**
     * filterSingleTags
     * 
     * Fix specification mandate value for attribute required.
     *
     * @param  mixed $content
     * @return string
     */
    public static function filterSingleTags($content): string
    {
        $content = preg_replace('/<(br|hr)>/si', '<$1 />', $content);
        $content = preg_replace('/<img(.*?)>/si', '<img$1 />', $content);

        $content = preg_replace('/(disabled|selected|required)>/si', '$1="$2">', $content);

        return $content;
    }
}
