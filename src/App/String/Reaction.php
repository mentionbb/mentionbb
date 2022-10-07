<?php

namespace App\String;

use App\Entity\Reactions as ReactionsEntity;

class Reaction
{
	private $reactions;

	public function __construct()
	{
		$this->reactions = new ReactionsEntity();
	}

	public function getReactionsByUserId($user_id)
	{
		return $this->reactions->getReactionsByUserId($user_id);
	}

	public function getReactionCountByUserId($reaction, $user_id)
	{
		return $this->reactions->getReactionCountByUserId($reaction, $user_id);
	}

	public function getReactionCountByPostId($reaction, $post_id)
	{
		return $this->reactions->getReactionCountByPostId($reaction, $post_id);
	}
}
