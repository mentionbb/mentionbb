<?php

namespace App\Renderer\BBCode\Helper;

class Media
{
	public static function getSites()
	{
		return (new \App\Entity\BBMedias())->getBBMedias();
	}

	public static function findMedia($bb_key)
	{
		return (new \App\Entity\BBMedias())->findMedia($bb_key);
	}

	public static function Render($string)
	{
		foreach (self::getSites() as $media)
		{
			$urls = preg_split("/\r\n|\n|\r/", $media['matching_url']);

			foreach ($urls as $matchingUrl)
			{
				if (\mb_strlen($media['callback']) > 0)
				{
					$string = $media['callback']::Render($matchingUrl, $media, $string);
				}
				else
				{
					$matchingUrl = str_replace(['{id}', '{number}', '/', '.', '?', '*', '\//'], ['([a-zA-Z0-9_/?=-]+)', '([0-9]+)', '\/', '\.', '\?', '(?:.*)', '\/'], $matchingUrl);
					$string = preg_replace_callback("/(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?{$matchingUrl}/", function ($matches) use ($media)
					{
						$bbcode_Key = preg_replace('/([a-zA-Z0-9]+)\=\{([a-zA-Z0-9]+)\}/', '$1', $media['bb_key']);
						if (isset($matches[2]))
						{
							$type = str_replace('{number}', $matches[2], $media['bb_key']);
							return "[{$type}]{$matches[1]}[/{$bbcode_Key}]";
						}
						else
						{
							return "[{$bbcode_Key}]{$matches[1]}[/{$bbcode_Key}]";
						}
					}, $string);
				}
			}
		}

		return $string;
	}

	public static function replacedEmbed($embedHtml, $id, $more = null)
	{
		if (!is_null($more))
		{
			$embedHtml = str_replace('{name}', $more, $embedHtml);
			$embedHtml = str_replace('{number}', $more, $embedHtml);
		}
		else
		{
			$embedHtml = str_replace('{number}', 0, $embedHtml);
		}

		return str_replace(
			['{id}', '{url}', '{url|host}'],
			[$id, \App\SubContainer\AppSub::getPublicDir(), (new \App\Repository\Request())->getServerName()],
			$embedHtml
		);
	}
}
