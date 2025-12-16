<?php

namespace App\SubContainer\Messages;

use App\Entity\Messages as MessageEntity;

use Laminas\Escaper\Escaper;

class Create
{
	public static function Do(array $data)
	{
		$input = \App\Repository\Set::setObject($data);

		$messages = new MessageEntity();

		$escaper = new Escaper('utf-8');
		$text = $escaper->escapeHtml($input->text);

		$new = $messages->createConversation($input->title, $text, $input->sender_id, $input->user_id);

		if ($new)
		{
			return $new;
		}
	}
}
