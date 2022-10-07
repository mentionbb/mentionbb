<?php

namespace App\String;

use App\Entity\Forum as ForumEntity;

class Forum
{
	public function __construct()
	{
		$this->forum = new ForumEntity();
	}

	public function getForumList($parent_id = 0)
	{
		return $this->forum->getForums($parent_id);
	}

	public function getForum($forum_id)
	{
		return $this->forum->getForum($forum_id);
	}
}
