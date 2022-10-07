<?php

namespace App\SubContainer\Messages;

use App\Entity\Messages as MessageEntity;

class Archive
{
	public static function Do(array $data)
	{
		$input = \App\Repository\Set::setObject($data);

		$messages = new MessageEntity();

		if ($messages->archiveMessage($input->message_id, 1))
		{
			return true;
		}
	}

	public static function DoRemove(array $data)
	{
		$input = \App\Repository\Set::setObject($data);

		$messages = new MessageEntity();

		if ($messages->archiveMessage($input->message_id, 0))
		{
			return true;
		}
	}
}
