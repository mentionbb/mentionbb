<?php

namespace App\String;

use App\Entity\Notifications as NotificationEntity;

class Notifications
{
	private $notification;

	public function __construct()
	{
		$this->notification = new NotificationEntity;
	}

	public function getNotificationByUserId($user_id)
	{
		return $this->notification->getNotificationByUserId($user_id);
	}

	public function getNotificationCount($user_id)
	{
		$count = count($this->notification->getNotificationCount($user_id));

		if ($count > 0)
		{
			return $count;
		}
	}
}
