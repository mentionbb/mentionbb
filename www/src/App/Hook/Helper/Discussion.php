<?php

namespace App\Hook\Helper;

use App\Hook\Helper\User as UserHook;
use App\Hook\Helper\Forum as ForumHook;

class Discussion
{
    protected $discussion_id;
    protected $discussionString;
    protected $discussion;
    protected $user_id;

    public function __construct(int $discussion_id, int $user_id)
    {
        $this->discussion_id = $discussion_id;
        $this->discussionString = new \App\String\Discussion();
        $this->discussion = $this->discussionString->getDiscussion($this->discussion_id);

        $this->user_id = $user_id;
    }

    public function getItem()
    {
        return $this->discussion;
    }

    public function getId()
    {
        return $this->discussion['discussion_id'];
    }

    public function getForumId()
    {
        return $this->discussion['forum_id'];
    }

    public function getFirstpostId()
    {
        return $this->discussion['firstpost_id'];
    }

    public function getTitle()
    {
        return $this->discussion['title'];
    }

    public function isSticky()
    {
        return $this->discussion['is_sticky'];
    }

    public function isOpen()
    {
        return $this->discussion['is_open'];
    }

    public function isExist()
    {
        return $this->discussionString->discussionIsExist($this->discussion_id);
    }

    public function addView()
    {
        return $this->discussionString->addDiscussionView($this->discussion_id);
    }

    public function getUser()
    {
        return new UserHook($this->user_id);
    }

    public function getForum()
    {
        return new ForumHook($this->getForumId());
    }

    public function isUserSubscribe()
    {
        return $this->discussionString->isUserSubscribeDiscussion($this->user_id, $this->discussion_id);
    }
}
