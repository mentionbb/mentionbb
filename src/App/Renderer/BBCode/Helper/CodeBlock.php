<?php

namespace App\Renderer\BBCode\Helper;

class CodeBlock
{
	public static function Render($string)
	{
		$source = preg_replace_callback('/\[code=(.*?)\](.*?)\[\/code\]/is', function ($matches)
		{
			return "[code={$matches[1]}]" . (new \Laminas\Escaper\Escaper('utf-8'))->escapeHtml($matches[2]) . "[/code]";
		}, $string);

		return $source;
	}
}
