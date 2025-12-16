<?php

namespace App\String;

use App\Entity\Discussion as DiscussionEntity;

class Discussion
{
	private $discussion;
	protected $forum_id = null;

	public function __construct()
	{
		$this->discussion = new DiscussionEntity();
	}

	public function setForumId($forum_id)
	{
		$this->forum_id = $forum_id;
	}

	public function unsetForumId()
	{
		$this->forum_id = null;
	}

	public function getPostCount()
	{
		return count($this->discussion->discussionList());
	}

	public function getDiscussion($discussion_id)
	{
		return $this->discussion->getDiscussion($discussion_id);
	}

	public function getAllDiscussions()
	{
		return $this->discussion->getAllDiscussions();
	}

	public function discussionIsExist($discussion_id)
	{
		return $this->discussion->discussionIsExist($discussion_id);
	}

	public function getDiscussionByFirstPostId($post_id)
	{
		return $this->discussion->getDiscussionByFirstPostId($post_id);
	}

	public function isAnySticky($forum_id)
	{
		return $this->discussion->isAnySticky($forum_id);
	}

	public function addDiscussionView($discussion_id)
	{
		$ip = (new \App\Repository\Request())->getRemoteAddr();

		if ($this->discussion->ifUserViewDiscussion($ip, $discussion_id) < 1)
		{
			return $this->discussion->addDiscussionView($ip, $discussion_id);
		}
	}

	public function isUserSubscribeDiscussion($user_id, $discussion_id)
	{
		return $this->discussion->ifUserSubscribeDiscussion($user_id, $discussion_id);
	}

	public function getUserSubscriptions($user_id)
	{
		return $this->discussion->getUserSubscriptions($user_id);
	}
}
