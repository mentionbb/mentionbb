<?php

namespace App\SubContainer\Moderation;

use App\Entity\Discussion as DiscussionEntity;
use App\Entity\Posts;

class Discussion
{
	public static function Move(array $data)
	{
		$input = \App\Repository\Set::setObject($data);

		$discussion = new DiscussionEntity;
		$posts = new Posts;

		if ($discussion->discussionMove($input->discussion_id, $input->forum_id) && $posts->postsMove($input->discussion_id, $input->forum_id))
		{
			return true;
		}
	}

	public static function Pin(array $data)
	{
		$input = \App\Repository\Set::setObject($data);

		$discussion = new DiscussionEntity;

		if ($discussion->discussionPinOperation($input->discussion_id, 1))
		{
			return true;
		}
	}

	public static function UnPin(array $data)
	{
		$input = \App\Repository\Set::setObject($data);

		$discussion = new DiscussionEntity;

		if ($discussion->discussionPinOperation($input->discussion_id, 0))
		{
			return true;
		}
	}

	public static function Lock(array $data)
	{
		$input = \App\Repository\Set::setObject($data);

		$discussion = new DiscussionEntity;

		if ($discussion->discussionLockOperation($input->discussion_id, 0))
		{
			return true;
		}
	}

	public static function UnLock(array $data)
	{
		$input = \App\Repository\Set::setObject($data);

		$discussion = new DiscussionEntity;

		if ($discussion->discussionLockOperation($input->discussion_id, 1))
		{
			return true;
		}
	}
}
