<?php

namespace App\SubContainer\Post;

use App\Entity\Posts;

class Like
{
	public static function Like(array $data)
	{
		$input = \App\Repository\Set::setObject($data);

		$posts = new Posts;

		if ($posts->postLike($input->post_id, $input->user_id, $input->reaction))
		{
			return true;
		}
	}

	public static function UnLike(array $data)
	{
		$input = \App\Repository\Set::setObject($data);

		$posts = new Posts;

		if ($posts->postUnLike($input->post_id, $input->user_id))
		{
			return true;
		}
	}
}
