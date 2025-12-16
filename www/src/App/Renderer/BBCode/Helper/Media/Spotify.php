<?php

namespace App\Renderer\BBCode\Helper\Media;

class Spotify
{
    public static function Render($url, $media, $string)
    {
        $url = \App\Renderer\BBCode\Helper\Media::replaceGlobalVariables($url);
        return preg_replace_callback("/(?:http(?:s)?:\/\/)?(?:www\.)?{$url}(?:\?si=([a-zA-Z0-9]+))?/", function ($matches) use ($media)
        {
            $type = str_replace('{name}', 'playlist', $media['bb_key']);

            if (preg_match('/(track|album|playlist|artist|user)/', $matches[0], $matchType))
            {
                $type = str_replace('{name}', $matchType[1], $media['bb_key']);
            }

            $bbcode_Key = preg_replace('/([a-zA-Z0-9]+)\=\{name\}/', '$1', $media['bb_key']);

            return "[{$type}]{$matches[1]}[/{$bbcode_Key}]";
        }, $string);
    }
}
