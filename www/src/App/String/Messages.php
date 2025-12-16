<?php

namespace App\String;

use App\Entity\Messages as MessageEntity;

class Messages
{
	private $message;

	public function __construct()
	{
		$this->message = new MessageEntity;
	}

	public function getMessagesByUserId($user_id, $is_archived = 0, $limit = 7)
	{
		return $this->message->getMessagesByUserId($user_id, $is_archived, $limit);
	}

	public function getLastMessage($parent_id)
	{
		return $this->message->getLastMessage($parent_id);
	}

	public function getFirstMessage($message_id)
	{
		return $this->message->getFirstMessage($message_id);
	}

	public function getConversation($message_id)
	{
		return $this->message->getMessages($message_id);
	}

	public function getMessageCount($user_id)
	{
		$count = count($this->message->getMessageCount($user_id));

		if ($count > 0)
		{
			return $count;
		}
	}

	public function isExistConversation($conversation_id)
	{
		return $this->message->isExistConversation($conversation_id);
	}

	public function seeingMessages($user_id, $parent_id = null)
	{
		return $this->message->seeingMessages($user_id, $parent_id);
	}
}
