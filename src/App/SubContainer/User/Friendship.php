<?php

namespace App\SubContainer\User;

use App\Entity\User;

class Friendship
{
	public static function addRequest($data)
	{
		$input = \App\Repository\Set::setObject($data);

		$user = new User();

		if ($user->createFriendship($input->sender_id, $input->user_id))
		{
			return true;
		}
	}

	public static function removeFriendshipPending($data)
	{
		$input = \App\Repository\Set::setObject($data);

		$user = new User();

		if ($user->removeFriendshipPending($input->sender_id, $input->user_id))
		{
			return true;
		}
	}

	public static function approveFriendship($data)
	{
		$input = \App\Repository\Set::setObject($data);

		$user = new User();

		if ($user->setFriendshipAwaiting($input->sender_id, $input->user_id))
		{
			return true;
		}
	}

	public static function hasFriendship($data)
	{
		$input = \App\Repository\Set::setObject($data);

		$user = new User();

		if ($user->isUserHasFriendship($input->sender_id, $input->user_id))
		{
			return true;
		}
	}
}
