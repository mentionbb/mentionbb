<?php

namespace App\SubContainer\Post;

use App\Entity\Posts;

class Bookmark
{
	public static function Operation(array $data)
	{
		$input = \App\Repository\Set::setObject($data);

		$posts = new Posts;

		if ($posts->postBookmark($input->post_id, $input->user_id))
		{
			return true;
		}
	}

	public static function UnBookmark(array $data)
	{
		$input = \App\Repository\Set::setObject($data);

		$posts = new Posts;

		if ($posts->postUnBookmark($input->post_id, $input->user_id))
		{
			return true;
		}
	}
}
