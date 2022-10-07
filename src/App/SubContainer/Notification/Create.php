<?php

namespace App\SubContainer\Notification;

use App\Entity\Notifications;

class Create
{
	public static function Add(array $data)
	{
		$input = \App\Repository\Set::setObject($data);

		$notifications = new Notifications();

		if ($notifications->createUserNotification($input->notification))
		{
			return true;
		}
	}
}
