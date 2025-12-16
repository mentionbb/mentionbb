<?php

namespace App\Mvc\Pub;

use App\Mvc\Controller;
use App\Rule\Pub;
use App\Repository\Post as PostRepo;
use App\String\Forum as ForumString;
use App\String\Post as PostString;
use App\String\Discussion as DiscussionString;

class Moderation extends Controller implements Pub
{
	public function container($option)
	{
		if ($this->request->getRequestMethod() == "GET")
		{
			return $this->request->redirect($this->settings->site_url, false);
		}
		elseif ($this->request->getRequestMethod() == "POST")
		{
			if ($this->request->getPathInfo() == '/moderation/discussion/move')
			{
				return $this->moveDiscussion();
			}
			if ($this->request->getPathInfo() == '/moderation/discussion/move-complete')
			{
				return $this->moveDiscussionComplete();
			}
			if ($this->request->getPathInfo() == '/moderation/discussion/pin')
			{
				return $this->pinDiscussion();
			}
			if ($this->request->getPathInfo() == '/moderation/discussion/un-pin')
			{
				return $this->unPinDiscussion();
			}
			if ($this->request->getPathInfo() == '/moderation/discussion/lock')
			{
				return $this->lockDiscussion();
			}
			if ($this->request->getPathInfo() == '/moderation/discussion/un-lock')
			{
				return $this->unLockDiscussion();
			}
		}
	}

	private function moveDiscussion()
	{
		if (!$this->user->loggedIn())
		{
			return false;
		}

		$post = new PostRepo();

		$discussion = (new DiscussionString())->getDiscussion($post->get('discussion_id'));

		if ($this->user->visitor()->user_id != $discussion['user_id'])
		{
			return false;
		}

		$template = $this->template->render(
			'move.twig',
			[
				'string' => [
					'forum' => new ForumString,
					'discussion' => $discussion
				]
			]
		);

		return $this->phrase->render('json')->serialize([
			'template' => $template,
			'forum_id' => $discussion['forum_id']
		])->render();
	}

	private function moveDiscussionComplete()
	{
		if (!$this->user->loggedIn())
		{
			return false;
		}

		$post = new PostRepo();

		$discussionString = new DiscussionString();

		if (!$discussionString->discussionIsExist($post->get('discussion_id')))
		{
			return false;
		}

		$discussion = $discussionString->getDiscussion($post->get('discussion_id'));

		if ($this->user->visitor()->user_id != $discussion['user_id'])
		{
			return false;
		}

		\App\SubContainer\Moderation\Discussion::Move([
			'forum_id' => $post->get('forum_id'),
			'discussion_id' => $post->get('discussion_id')
		]);

		return $this->phrase->render('json')->serialize(
			[]
		)->render();
	}

	private function pinDiscussion()
	{
		if (!$this->user->loggedIn())
		{
			return false;
		}

		$post = new PostRepo();

		$discussionString = new DiscussionString();

		$discussion = $discussionString->getDiscussion($post->get('discussion_id'));

		if (!$discussionString->discussionIsExist($post->get('discussion_id')))
		{
			return false;
		}

		if ($this->user->visitor()->user_id != $discussion['user_id'])
		{
			return false;
		}

		\App\SubContainer\Moderation\Discussion::Pin([
			'discussion_id' => $post->get('discussion_id')
		]);

		return $this->phrase->render('json')->serialize(
			[]
		)->render();
	}

	private function unPinDiscussion()
	{
		if (!$this->user->loggedIn())
		{
			return false;
		}

		$post = new PostRepo();

		$discussionString = new DiscussionString();

		$discussion = $discussionString->getDiscussion($post->get('discussion_id'));

		if (!$discussionString->discussionIsExist($post->get('discussion_id')))
		{
			return false;
		}

		if ($this->user->visitor()->user_id != $discussion['user_id'])
		{
			return false;
		}

		\App\SubContainer\Moderation\Discussion::UnPin([
			'discussion_id' => $post->get('discussion_id')
		]);

		return $this->phrase->render('json')->serialize(
			[]
		)->render();
	}

	private function lockDiscussion()
	{
		if (!$this->user->loggedIn())
		{
			return false;
		}

		$post = new PostRepo();

		$discussionString = new DiscussionString();

		$discussion = $discussionString->getDiscussion($post->get('discussion_id'));

		if (!$discussionString->discussionIsExist($post->get('discussion_id')))
		{
			return false;
		}

		if ($this->user->visitor()->user_id != $discussion['user_id'])
		{
			return false;
		}

		\App\SubContainer\Moderation\Discussion::Lock([
			'discussion_id' => $post->get('discussion_id')
		]);

		return $this->phrase->render('json')->serialize(
			[]
		)->render();
	}

	private function unLockDiscussion()
	{
		if (!$this->user->loggedIn())
		{
			return false;
		}

		$post = new PostRepo();

		$discussionString = new DiscussionString();

		$discussion = $discussionString->getDiscussion($post->get('discussion_id'));

		if (!$discussionString->discussionIsExist($post->get('discussion_id')))
		{
			return false;
		}

		if ($this->user->visitor()->user_id != $discussion['user_id'])
		{
			return false;
		}

		\App\SubContainer\Moderation\Discussion::UnLock([
			'discussion_id' => $post->get('discussion_id')
		]);

		return $this->phrase->render('json')->serialize(
			[]
		)->render();
	}
}
