<?php

namespace App\Renderer\BBCode\Html;

class ClearBBCode
{
	public static function Process($string, $nl2br = true, $html = true)
	{
		if (!$nl2br)
		{
			$string = preg_replace("/[\n\r]/", "", $string);
		}

		if ($html)
		{
			foreach (\App\Renderer\BBCode\Helper\Media::getSites() as $media)
			{
				if (preg_match('/([a-zA-Z0-9]+)\=\{name\}/', $media['bb_key'], $matchExtraKey))
				{
					$media['bb_key'] = $matchExtraKey[1];
				}

				$string = preg_replace_callback("/<div class=\"bbWrapper_{$media['bb_key']}\">(.*)><\/div>/", function ($matches) use ($media)
				{
					return "<i class=\"bbIcon fab fa-{$media['bb_key']}\"></i>";
				}, $string);
			}

			$string = preg_replace_callback("/<img class=\"js-Twemoji_MentionEditor\" src=\"(?:.*?)\" alt=\"(.*?)\"[^>]*>/", function ($matches)
			{
				return $matches[1];
			}, $string);

			$string = preg_replace_callback("/<img class=\"app-AttachmentImage\"[^>]*>/", function ($matches)
			{
				return "<i class=\"bbIcon fas fa-image\"></i>";
			}, $string);

			$string = preg_replace_callback("/<div class=\"quote-external quote(.*)\">(.*)<\/div>/", function ($matches)
			{
				return "<i class=\"bbIcon fas fa-quote-left\"></i>";
			}, $string);

			$string = preg_replace_callback("/<div class=\"quote(.*)\">(.*)<\/div>/", function ($matches)
			{
				return "";
			}, $string);

			$string = preg_replace_callback("/<div class=\"table-responsive\">(.*)<\/div>/", function ($matches)
			{
				return "<i class=\"bbIcon fas fa-table\"></i>";
			}, $string);

			$string = preg_replace_callback("/<div class=\"js-Spoiler(.*)\"(.*)>(.*)<\/div>/", function ($matches)
			{
				return "<i class=\"bbIcon fas fa-eye\"></i>";
			}, $string);

			$string = preg_replace_callback("/<div class=\"bbContainer_appCodeBlock\">(.*)<\/div>/", function ($matches)
			{
				return "&nbsp;<i class=\"bbIcon fas fa-code\"></i>&nbsp;";
			}, $string);

			$string = preg_replace_callback("/<ol style=\"list-style-type: (none|disc|decimal);\">(.*?)<\/ol>/", function ($matches)
			{
				return preg_replace("/<li>(.*?)<\/li>/", "&nbsp;$1,", $matches[2]);
			}, $string);

			$string = rtrim($string, ',');
			$string = strip_tags($string, '<i>|<img>');
		}
		else
		{
			$string = preg_replace_callback("/<img class=\"js-Twemoji_MentionEditor\" src=\"(?:.*?)\" alt=\"(.*?)\"[^>]*>/", function ($matches)
			{
				return $matches[1];
			}, $string);
			
			$string = strip_tags($string);
			$string = trim($string);
		}

		$string = preg_replace_callback(
			'/&lt;([\s\S]*?)&gt;/s',
			function ($matches)
			{
				return '';
			},
			$string
		);

		return $string;
	}
}
