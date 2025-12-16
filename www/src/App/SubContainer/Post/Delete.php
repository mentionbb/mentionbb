<?php

namespace App\SubContainer\Post;

use App\Entity\Posts;
use App\Entity\Discussion;

class Delete
{
	public static function Operation(array $data)
	{
		$input = \App\Repository\Set::setObject($data);

		$posts = new Posts;

		if ($posts->postDeActivate($input->post_id))
		{
			return true;
		}
	}

	public static function allPostDeleteOperation(array $data)
	{
		$input = \App\Repository\Set::setObject($data);

		$posts = new Posts;

		if ($posts->discussionAllPostDeActivate($input->discussion_id))
		{
			return true;
		}
	}

	public static function Discussion(array $data)
	{
		$input = \App\Repository\Set::setObject($data);

		$discussion = new Discussion;

		if ($discussion->discussionDeActivate($input->discussion_id))
		{
			return true;
		}
	}

	public static function allPostDeleteWithForumIdOperation(array $data)
	{
		$input = \App\Repository\Set::setObject($data);

		$posts = new Posts;

		if ($posts->discussionAllPostDeleteWithForumId($input->forum_id))
		{
			return true;
		}
	}

	public static function DiscussionWithForumId(array $data)
	{
		$input = \App\Repository\Set::setObject($data);

		$discussion = new Discussion;

		if ($discussion->discussionDeleteWithForumId($input->forum_id))
		{
			return true;
		}
	}
}
