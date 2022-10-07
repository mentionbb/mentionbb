<?php

namespace App\Hook\Helper;

use App\Entity\Forum as ForumEntity;

class Forum
{
    protected $forum;

    public function __construct(int $forum_id)
	{
		$this->forum = (new ForumEntity())->getForum($forum_id);
	}

    public function getItem()
    {
        return $this->forum;
    }

    public function getId()
    {
        return $this->forum['forum_id'];
    }

    public function getParentId()
    {
        return $this->forum['parent_id'];
    }

    public function getTitle()
    {
        return $this->forum['title'];
    }

    public function getDesc()
    {
        return $this->forum['description'];
    }
}