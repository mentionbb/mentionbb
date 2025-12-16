<?php

namespace App\SubContainer\Notification;

use App\Entity\Notifications;

class Remove
{
	public static function Operation(array $data)
	{
		$input = \App\Repository\Set::setObject($data);

		$notifications = new Notifications();

		if ($notifications->removeNotification($input->notification))
		{
			return true;
		}
	}
}
