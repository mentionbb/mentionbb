<?php

namespace App\Renderer\BBCode\Helper\Media;

class Twitch
{
	public static function Render($url, $media, $string)
	{
		$url = str_replace(['{id}', '/', '.', '?', '*', '\//'], ['([a-zA-Z0-9]+)', '\/', '\.', '\?', '(?:.*)', '\/'], $url);
		return preg_replace_callback("/(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:clips\.)?{$url}/", function ($matches) use ($media)
		{
			$type = str_replace('{name}', 'channel', $media['bb_key']);

			if (preg_match('/(clips|videos)/', $matches[0], $matchType))
			{
				if ($matchType[1] == 'clips')
				{
					$type = 'collection';
				}
				elseif ($matchType[1] == 'videos')
				{
					$type = 'video';
				}

				$type = str_replace('{name}', $type, $media['bb_key']);
			}

			$bbcode_Key = preg_replace('/([a-zA-Z0-9]+)\=\{name\}/', '$1', $media['bb_key']);

			return "[{$type}]{$matches[1]}[/{$bbcode_Key}]";
		}, $string);
	}
}
