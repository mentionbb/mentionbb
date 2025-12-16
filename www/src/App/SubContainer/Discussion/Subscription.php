<?php

namespace App\SubContainer\Discussion;

use App\Entity\Discussion;

use Laminas\Escaper\Escaper;

class Subscription
{
	public static function subscribe($data)
	{
		$input = \App\Repository\Set::setObject($data);

		$discussion = new Discussion();

		if ($discussion->addSubscription($input->user_id, $input->discussion_id))
		{
			return true;
		}
	}

	public static function removeSubscribe($data)
	{
		$input = \App\Repository\Set::setObject($data);

		$discussion = new Discussion();

		if ($discussion->removeSubscription($input->user_id, $input->discussion_id))
		{
			return true;
		}
	}

	public static function isUserSubscribe($data)
	{
		$input = \App\Repository\Set::setObject($data);

		$discussion = new Discussion();

		return $discussion->ifUserSubscribeDiscussion($input->user_id, $input->discussion_id);
	}

	public static function isSubscribe($discussion_id)
	{
		$discussion = new Discussion();

		return $discussion->ifSubscribeDiscussion($discussion_id);
	}

	public static function getSubscriptions($discussion_id)
	{
		$discussion = new Discussion();

		return $discussion->getSubscriptions($discussion_id);
	}
}
