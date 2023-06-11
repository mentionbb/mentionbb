<?php

namespace App\String;

use App\Entity\Posts as PostEntity;
use App\Entity\Settings as SettingsEntity;
use App\Entity\LinkPreviews as LinkPreviewEntity;

class Post
{
	private $post;
	protected $forum_id = null;
	protected $discussion_id;
	protected $user_id;
	protected $is_discussion = false;

	public function __construct()
	{
		$this->post = new PostEntity();
	}

	public function setForumId($forum_id)
	{
		$this->forum_id = $forum_id;
	}

	public function unsetForumId()
	{
		$this->forum_id = null;
	}

	public function setDiscussionId($discussion_id)
	{
		$this->discussion_id = $discussion_id;
	}

	public function setUserId($user_id)
	{
		$this->user_id = $user_id;
	}

	public function unsetUserId()
	{
		$this->user_id = null;
	}

	public function isDiscussion()
	{
		$this->is_discussion = true;
	}

	public function getPostList($wherePage, $topicNumber, $order = null, $keyword = null, $user_id = null, $group_by = true, $firstpost = false, $is_sticky = false)
	{
		if (is_null($order))
		{
			$order = \App\SubContainer\Post\Order::getOrder('newest');
		}

		if (is_null($keyword))
		{
			$keyword = null;
		}
		else
		{
			$keyword = $keyword;
		}

		$order = \App\Repository\Set::setObject($order);

		$keyword = \App\Repository\Set::setObject(
			\App\SubContainer\Search\Post::keyword($keyword)
		);

		if (!is_null($this->forum_id))
		{
			return $this->post->getPostByForumId($this->forum_id, $wherePage, $topicNumber, $order, $keyword, $user_id, $group_by, $firstpost, $is_sticky);
		}
		else
		{
			return $this->post->getPostByForumId(0, $wherePage, $topicNumber, $order, $keyword, $user_id, $group_by, $firstpost, $is_sticky);
		}
	}

	public function getPostAll()
	{
		return $this->post->findAll();
	}

	public function getAllPosts()
	{
		return $this->post->getAllPosts();
	}

	public function getLastPage()
	{
		$settings = (new SettingsEntity())->getSettings();

		if (!is_null($this->discussion_id))
		{
			return ceil($this->post->getDiscussionPostAll($this->discussion_id) / $settings->per_page);
		}
		else
		{
			if (!is_null($this->user_id))
			{
				return ceil(count($this->post->getUserAllPosts($this->user_id, $this->is_discussion)) / $settings->per_page);
			}
			else
			{
				return ceil(count($this->post->getAllDiscussions($this->forum_id)) / $settings->per_page);
			}
		}
	}

	public function getPostCount()
	{
		return count($this->getPostList(1, 1));
	}

	public function getForumPostCount()
	{
		if (!is_null($this->forum_id))
		{
			return count($this->post->getAllPosts($this->forum_id));
		}
		else
		{
			return count($this->post->getAllPosts());
		}
	}

	public function getDiscussionPostCount()
	{
		return $this->post->getDiscussionPostCount($this->discussion_id);
	}

	public function getPostByDiscussionId($wherePage, $topicNumber, $order)
	{
		$order = \App\Repository\Set::setObject($order);

		return $this->post->getPostByDiscussionId($this->discussion_id, $wherePage, $topicNumber, $order);
	}

	public function getDiscussionLastPost()
	{
		return $this->post->getDiscussionLastPost($this->discussion_id);
	}

	public function getPostLikeCount($post_id)
	{
		return count($this->post->getPostLikeCount($post_id));
	}

	public function getPostLikes($post_id, $limit = true)
	{
		return $this->post->getPostLikes($post_id, $limit);
	}

	public function isUserLikePost($post_id, $user_id)
	{
		return $this->post->isUserLikePost($post_id, $user_id);
	}

	public function isUserBookmarkPost($post_id, $user_id)
	{
		return $this->post->isUserBookmarkPost($post_id, $user_id);
	}

	public function getPostByPostId($post_id)
	{
		return $this->post->getPostByPostId($post_id);
	}

	public function getUserPostCount($user_id)
	{
		return $this->post->getUserPostCount($user_id);
	}

	public function getUserDiscussionCount($user_id)
	{
		return $this->post->getUserDiscussionCount($user_id);
	}

	public function getUserLikesPosts($user_id, $wherePage, $topicnumber)
	{
		return  $this->post->getUserLikesPosts($user_id, $wherePage, $topicnumber);
	}

	public function getUserBookmarksPosts($user_id, $wherePage, $topicnumber)
	{
		return  $this->post->getUserBookmarksPosts($user_id, $wherePage, $topicnumber);
	}

	public function getUserLikesLastPage($user_id)
	{
		$settings = (new SettingsEntity())->getSettings();

		return ceil(count($this->post->getUserLikesAllPosts($user_id)) / $settings->per_page);
	}

	public function getUserBookmarksLastPage($user_id)
	{
		$settings = (new SettingsEntity())->getSettings();

		return ceil(count($this->post->getUserBookmarksAllPosts($user_id)) / $settings->per_page);
	}

	public function isExistPost($shortcode)
	{
		$shortcode = (new \App\SubContainer\Discussion\Shortcode())->to10($shortcode);

		return $this->post->isExistPost($shortcode);
	}

	public function getDiscussionId($shortcode)
	{
		$shortcode = (new \App\SubContainer\Discussion\Shortcode())->to10($shortcode);

		return $this->post->getDiscussionId($shortcode);
	}

	public function getLink($uniq_id, $post_id)
	{
		$link = (new LinkPreviewEntity())->getPreview($uniq_id, $post_id);

		if ($link)
		{
			return $link;
		}

		return false;
	}
}
