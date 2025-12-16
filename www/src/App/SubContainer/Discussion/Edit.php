<?php

namespace App\SubContainer\Discussion;

use App\Entity\Discussion;

use Laminas\Escaper\Escaper;

class Edit
{
	public static function Title(array $data)
	{
		$escaper = new Escaper('utf-8');
		
		$input = \App\Repository\Set::setObject($data);

		$discussion = new Discussion;

		$title = $escaper->escapeHtml($input->title);

		if ($discussion->discussionChangeTitle($input->firstpost_id, $title))
		{
			return true;
		}
	}
}
