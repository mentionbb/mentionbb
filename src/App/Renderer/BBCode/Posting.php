<?php

namespace App\Renderer\BBCode;

use App\Renderer\BBCode\Html\LineBreaks;
use App\Renderer\BBCode\Str\Emoticons;
use App\Renderer\BBCode\Helper\Link;
use App\Renderer\BBCode\Helper\Media;

class Posting
{
	public static function Render($content)
	{
		$content = LineBreaks::brToN($content);
		
		$content = (new Emoticons())->asciiToUnicode($content);
		$content = Media::Render($content);
		$content = Link::Render($content);

		return $content;
	}
}
