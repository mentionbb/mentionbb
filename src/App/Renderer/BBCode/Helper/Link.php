<?php

namespace App\Renderer\BBCode\Helper;

class Link
{
	public static function Render($string)
	{
		$render = preg_replace_callback("/^((?:https?:\/\/|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}\/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:'\".,<>?«»“”‘’]))/si", function ($matches)
		{
			return "[url={$matches[1]}]{$matches[1]}[/url]";
		}, $string);

		return $render;
	}
}
