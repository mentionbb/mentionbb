<?php

namespace App\Renderer\BBCode\Html;

use Laminas\Escaper\Escaper;

class Escape
{
	public static function escapeHtml($string)
	{
		return (new Escaper('utf-8'))->escapeHtml($string);
	}
}
