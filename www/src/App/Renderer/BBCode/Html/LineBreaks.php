<?php

namespace App\Renderer\BBCode\Html;

class LineBreaks
{
    public static function needToAddLineBreaks($string)
    {
        $source = preg_replace_callback('/\[list(.*?)\](.+?)\[\/list\]/si', function ($matches)
        {
            return "[list{$matches[0]}]" . str_replace('<br />', '', $matches[1]) . "[/list]";
        }, $string);

        $source = preg_replace_callback('/\[\/list\]\s*\<br \/\>/i', function ($matches)
        {
            return "[/list]";
        }, $string);

        $source = preg_replace_callback('/\[code=(.*?)\](.+?)\[\/code\]/si', function ($matches)
        {
            return "[code={$matches[1]}]" . str_replace('<br />', '', $matches[2]) . "[/code]";
        }, $string);

        $source = preg_replace_callback('/\[\/code\]\s*\<br \/\>/i', function ($matches)
        {
            return "[/code]";
        }, $string);

        $source = preg_replace_callback('/\[\/quote\]\s*\<br \/\>/i', function ($matches)
        {
            return "[/quote]";
        }, $string);

        $source = preg_replace_callback('/\[\/p\]\s*\<br \/\>/i', function ($matches)
        {
            return "[/p]";
        }, $string);

        $source = preg_replace_callback('/\[\/center\]\s*\<br \/\>/i', function ($matches)
        {
            return "[/center]";
        }, $string);

        return $source;
    }

    public static function addBreak($string)
    {
        return nl2br($string);
    }

    public static function brToN($string)
    {
        $source = preg_replace('/<br\s?(\/)?>/si', "\r\n", $string);

        return $source;
    }
}
