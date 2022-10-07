<?php

namespace App\Mvc\Pub;

use App\Mvc\Controller;
use App\Rule\Pub;
use App\Repository\Post as PostRepo;
use App\String\Post as PostString;
use App\String\Discussion as DiscussionString;
use App\String\Reaction as ReactionString;

class Post extends Controller implements Pub
{
	public function container($option)
	{
		if ($this->request->getRequestMethod() == "GET")
		{
			return $this->request->redirect($this->settings->site_url, false);
		}
		elseif ($this->request->getRequestMethod() == "POST")
		{
			if ($this->request->getPathInfo() == '/post/create-discussion')
			{
				return $this->createDiscussions();
			}
			elseif ($this->request->getPathInfo() == '/post/create-post')
			{
				return $this->createPosts();
			}
			elseif ($this->request->getPathInfo() == '/post/refresh-index-posts')
			{
				return $this->refreshIndexPosts();
			}
			elseif ($this->request->getPathInfo() == '/post/next-page')
			{
				return $this->nextPage();
			}
			elseif ($this->request->getPathInfo() == '/post/quick-forum-posts')
			{
				return $this->quickForumPosts();
			}
			elseif ($this->request->getPathInfo() == '/post/order-index-posts')
			{
				return $this->orderIndexPosts();
			}
			elseif ($this->request->getPathInfo() == '/post/order-discussion-posts')
			{
				return $this->orderdiscussionPosts();
			}
			elseif ($this->request->getPathInfo() == '/post/next-discussion-page')
			{
				return $this->nextDiscussionPage();
			}
			elseif ($this->request->getPathInfo() == '/post/next-request-discussion-page')
			{
				return $this->nextRequestDiscussionPage();
			}
			elseif ($this->request->getPathInfo() == '/post/search')
			{
				return $this->postQuickSearch();
			}
			elseif ($this->request->getPathInfo() == '/post/report')
			{
				return $this->reportPost();
			}
			elseif ($this->request->getPathInfo() == '/post/report-complete')
			{
				return $this->reportPostComplete();
			}
			elseif ($this->request->getPathInfo() == '/post/delete')
			{
				return $this->deletePost();
			}
			elseif ($this->request->getPathInfo() == '/post/delete-complete')
			{
				return $this->deletePostComplete();
			}
			elseif ($this->request->getPathInfo() == '/post/edit')
			{
				return $this->editPost();
			}
			elseif ($this->request->getPathInfo() == '/post/edit-complete')
			{
				return $this->editPostComplete();
			}
			elseif ($this->request->getPathInfo() == '/post/like')
			{
				return $this->likePost();
			}
			elseif ($this->request->getPathInfo() == '/post/take-like')
			{
				return $this->takeBackLikePost();
			}
			elseif ($this->request->getPathInfo() == '/post/bookmark')
			{
				return $this->bookmarkPost();
			}
			elseif ($this->request->getPathInfo() == '/post/undo-bookmark')
			{
				return $this->undoBookmarkPost();
			}
			elseif ($this->request->getPathInfo() == '/post/user-tagging')
			{
				return $this->userTaggingPost();
			}
			elseif ($this->request->getPathInfo() == '/post/profile-posts-next-page')
			{
				return $this->profilePostsNextPage();
			}
			elseif ($this->request->getPathInfo() == '/post/order-profile-posts')
			{
				return $this->orderProfilePosts();
			}
			elseif ($this->request->getPathInfo() == '/post/quick-tabs')
			{
				return $this->quickTabs();
			}
			elseif ($this->request->getPathInfo() == '/post/discussion-subscribe')
			{
				return $this->subscribeDiscussion();
			}
			elseif ($this->request->getPathInfo() == '/post/discussion-remove-subscribe')
			{
				return $this->subscriptionRemoveDiscussion();
			}
			elseif ($this->request->getPathInfo() == '/post/account-user-likes-next-page')
			{
				return $this->accountUserLikesNextPage();
			}
			elseif ($this->request->getPathInfo() == '/post/account-user-bookmarks-next-page')
			{
				return $this->accountUserBookmarksNextPage();
			}
			elseif ($this->request->getPathInfo() == '/post/external-link-renderer')
			{
				return $this->externalLinkRenderer();
			}
		}
	}

	private function createDiscussions()
	{
		if (!$this->user->loggedIn())
		{
			return false;
		}

		$post = new PostRepo();

		if ($post->has('is_sticky'))
		{
			if ($this->user->visitor()->is_admin)
			{
				$is_sticky = $post->get('is_sticky');
			}
			else
			{
				$is_sticky = 0;
			}
		}
		else
		{
			$is_sticky = 0;
		}

		if ($post->has('is_open'))
		{
			if ($this->user->visitor()->is_admin)
			{
				$is_open = $post->get('is_open');
			}
			else
			{
				$is_open = 1;
			}
		}
		else
		{
			$is_open = 1;
		}

		if ($post->has('is_attachment'))
		{
			$totalAttachFile = count($_FILES['attachments']['name']);
			for ($i = 0; $i < $totalAttachFile; $i++)
			{
				$files[] = [
					'name' => $_FILES['attachments']['name'][$i],
					'tmp_name' => $_FILES['attachments']['tmp_name'][$i],
					'size' => $_FILES['attachments']['size'][$i]
				];
			}
		}
		else
		{
			$files = null;
		}

		$data = [
			'title' => $post->get('discussion_name'),
			'forum_id' => $post->get('forum_id'),
			'content' => \App\Renderer\BBCode\Posting::Render($post->get('content')),
			'user_id' => $this->user->visitor()->user_id,
			'device' => (new \App\SubContainer\Device())->getInfo(),
			'is_sticky' => $is_sticky,
			'is_open' => $is_open,
			'attachments' => $files
		];

		if (\App\SubContainer\Discussion\Create::Post($data))
		{
			return $this->phrase->render('json')->serialize(
				[]
			)->render();
		}
	}

	private function createPosts()
	{
		if (!$this->user->loggedIn())
		{
			return false;
		}

		$post = new PostRepo();

		$discussion = (new DiscussionString())->getDiscussion($post->get('discussion_id'));

		if ($discussion['is_open'] == 0)
		{
			return false;
		}

		if ($post->has('is_attachment'))
		{
			$totalAttachFile = count($_FILES['attachments']['name']);
			for ($i = 0; $i < $totalAttachFile; $i++)
			{
				$files[] = [
					'name' => $_FILES['attachments']['name'][$i],
					'tmp_name' => $_FILES['attachments']['tmp_name'][$i],
					'size' => $_FILES['attachments']['size'][$i]
				];
			}
		}
		else
		{
			$files = null;
		}

		$data = [
			'discussion_id' => $post->get('discussion_id'),
			'forum_id' => $post->get('forum_id'),
			'content' => \App\Renderer\BBCode\Posting::Render($post->get('content')),
			'user_id' => $this->user->visitor()->user_id,
			'device' => (new \App\SubContainer\Device())->getInfo(),
			'attachments' => $files,
			'notification' => [
				'tab' => 'reply-discussion',
				'post_id' => 0,
				'discussion_id' => $post->get('discussion_id'),
				'sender_id' => $this->user->visitor()->user_id,
				'user_id' => $discussion['user_id']
			]
		];

		if (preg_match("/\[post-quote\]([0-9]+)\[\/post-quote\]/is", $post->get('content'), $matchQuote))
		{
			preg_match_all("/\[post-quote\]([0-9]+)\[\/post-quote\]/is", $post->get('content'), $matchQuotes);

			foreach ($matchQuotes[1] as $post_id)
			{
				$postString = (new PostString)->getPostByPostId($post_id);

				$createQuoteNotification = [
					'notification' => [
						'tab' => 'quote-post',
						'post_id' => $post_id,
						'discussion_id' => $post->get('discussion_id'),
						'sender_id' => $this->user->visitor()->user_id,
						'user_id' => $postString['user_id']
					]
				];

				\App\SubContainer\Notification\Create::Add($createQuoteNotification);
			}
		}

		if (preg_match("/@(.*?);/is", $post->get('content'), $matchUserTag))
		{
			preg_match_all("/@(.*?);/is", $post->get('content'), $matchUserTags);

			foreach ($matchUserTags[1] as $username)
			{
				if ((new \App\Entity\User)->findByUserName($username) > 0)
				{
					$user = (new \App\Entity\User)->findByUserName($username);

					$createUserTaggedNotification = [
						'notification' => [
							'tab' => 'tagged-user',
							'post_id' => 0,
							'discussion_id' => $post->get('discussion_id'),
							'sender_id' => $this->user->visitor()->user_id,
							'user_id' => $user['user_id']
						]
					];

					\App\SubContainer\Notification\Create::Add($createUserTaggedNotification);
				}
			}
		}

		if (\App\SubContainer\Discussion\Subscription::isSubscribe($post->get('discussion_id')))
		{
			foreach (\App\SubContainer\Discussion\Subscription::getSubscriptions($post->get('discussion_id')) as $subscription)
			{
				\App\SubContainer\Notification\Create::Add([
					'notification' => [
						'tab' => 'subscribe',
						'post_id' => 0,
						'discussion_id' => $post->get('discussion_id'),
						'sender_id' => $this->user->visitor()->user_id,
						'user_id' => $subscription['user_id']
					]
				]);
			}
		}

		if (\App\SubContainer\Post\Create::Post($data))
		{
			return $this->phrase->render('json')->serialize(
				[]
			)->render();
		}
	}

	private function refreshIndexPosts()
	{
		$template = $this->template->render(
			'index_posts.tpl',
			[
				'string' => [
					'post' => new PostString,
					'discussion' => new DiscussionString
				]
			]
		);

		return $this->phrase->render('json')->serialize([
			'template' => $template
		])->render();
	}

	private function nextPage()
	{
		$post = new PostRepo();

		$template = $this->template->render(
			'index_posts.tpl',
			[
				'string' => [
					'post' => new PostString,
					'discussion' => new DiscussionString,
					'reaction' => new ReactionString,
					'pagination' => (new \App\SubContainer\Post\Pagination())->decodePageData($post->get('next_id')),
					'current_page' => ($post->get('current_page') + 1),
					'forum_id' => $post->get('forum_id'),
					'order' => \App\SubContainer\Post\Order::getOrder($post->get('order'))
				]
			]
		);

		return $this->phrase->render('json')->serialize([
			'template' => $template,
			'current_page' => ($post->get('current_page') + 1)
		])->render();
	}

	private function quickForumPosts()
	{
		$post = new PostRepo();

		$template = $this->template->render(
			'index_posts.tpl',
			[
				'string' => [
					'post' => new PostString,
					'discussion' => new DiscussionString,
					'reaction' => new ReactionString,
					'forum_id' => $post->get('forum_id'),
					'order' => \App\SubContainer\Post\Order::getOrder($post->get('order'))
				]
			]
		);

		return $this->phrase->render('json')->serialize([
			'template' => $template
		])->render();
	}

	private function orderIndexPosts()
	{
		$post = new PostRepo();

		$template = $this->template->render(
			'index_posts.tpl',
			[
				'string' => [
					'post' => new PostString,
					'discussion' => new DiscussionString,
					'reaction' => new ReactionString,
					'forum_id' => $post->get('forum_id'),
					'order' => \App\SubContainer\Post\Order::getOrder($post->get('order'))
				]
			]
		);

		return $this->phrase->render('json')->serialize([
			'template' => $template
		])->render();
	}

	private function orderDiscussionPosts()
	{
		$post = new PostRepo();

		$postString = new PostString;
		$postString->setDiscussionId($post->get('discussion_id'));

		$discussion = new DiscussionString;

		if (is_null($post->get('order')))
		{
			$order = 'newest';
		}
		else
		{
			$order = $post->get('order');
		}

		$template = $this->template->render(
			'discussion_posts.tpl',
			[
				'string' => [
					'post' => $postString,
					'discussion' => $discussion->getDiscussion($post->get('discussion_id')),
					'order' => \App\SubContainer\Post\Order::getOrder($order)
				]
			]
		);

		return $this->phrase->render('json')->serialize([
			'template' => $template
		])->render();
	}

	private function nextDiscussionPage()
	{
		$post = new PostRepo();

		$postString = new PostString;
		$postString->setDiscussionId($post->get('discussion_id'));

		$discussion = new DiscussionString;

		if (is_null($post->get('order')))
		{
			$order = 'newest';
		}
		else
		{
			$order = $post->get('order');
		}

		$template = $this->template->render(
			'discussion_posts.tpl',
			[
				'string' => [
					'post' => $postString,
					'discussion' => $discussion->getDiscussion($post->get('discussion_id')),
					'order' => \App\SubContainer\Post\Order::getOrder($order),
					'pagination' => (new \App\SubContainer\Post\Pagination())->decodePageData($post->get('next_id')),
					'current_page' => ($post->get('current_page') + 1),
					'last_post' => $postString->getDiscussionLastPost()
				]
			]
		);

		return $this->phrase->render('json')->serialize([
			'template' => $template,
			'current_page' => ($post->get('current_page') + 1)
		])->render();
	}

	private function nextRequestDiscussionPage()
	{
		$post = new PostRepo();

		$postString = new PostString;
		$postString->setDiscussionId($post->get('discussion_id'));

		$discussion = new DiscussionString;

		if (is_null($post->get('order')))
		{
			$order = 'newest';
		}
		else
		{
			$order = $post->get('order');
		}

		$encoded_page = (new \App\SubContainer\Post\Pagination())->encodeRequestPageData(
			0,
			($post->get('request_post') - 1)
		);

		$template = $this->template->render(
			'discussion_posts.tpl',
			[
				'string' => [
					'post' => $postString,
					'discussion' => $discussion->getDiscussion($post->get('discussion_id')),
					'order' => \App\SubContainer\Post\Order::getOrder($order),
					'pagination' => (new \App\SubContainer\Post\Pagination())->decodePageData($encoded_page),
					'last_post' => $postString->getDiscussionLastPost(),
					'current_page' => (($post->get('request_post') - 1) / $this->settings->per_page),
					'per_page' => ($post->get('request_post') - 1)
				]
			]
		);

		return $this->phrase->render('json')->serialize([
			'template' => $template,
			'current_page' => 0,
			'whichPost' => $post->get('request_post')
		])->render();
	}

	private function postQuickSearch()
	{
		$post = new PostRepo();

		$template = $this->template->render(
			'index_posts.tpl',
			[
				'string' => [
					'post' => new PostString,
					'reaction' => new ReactionString,
					'forum_id' => $post->get('forum_id'),
					'order' => \App\SubContainer\Post\Order::getOrder($post->get('order')),
					'keyword' => $post->get('keyword')
				]
			]
		);

		return $this->phrase->render('json')->serialize([
			'template' => $template
		])->render();
	}

	private function reportPost()
	{
		$post = new PostRepo();

		$template = $this->template->render(
			'report.tpl',
			[
				'string' => [
					'post_id' => $post->get('post_id')
				]
			]
		);

		return $this->phrase->render('json')->serialize([
			'template' => $template,
			'post_id' => $post->get('post_id')
		])->render();
	}

	private function reportPostComplete()
	{
		if (!$this->user->loggedIn())
		{
			return false;
		}

		$post = new PostRepo();

		\App\SubContainer\Post\Report::Create([
			'post_id' => $post->get('post_id'),
			'user_id' => $this->user->visitor()->user_id,
			'content' => $post->get('content')
		]);

		return $this->phrase->render('json')->serialize(
			[]
		)->render();
	}

	private function deletePost()
	{
		$post = new PostRepo();

		$postString = (new PostString())->getPostByPostId($post->get('post_id'));

		if (!$this->user->visitor()->is_admin)
		{
			if ($this->user->visitor()->user_id != $postString['user_id'])
			{
				return false;
			}
		}

		$template = $this->template->render(
			'delete.tpl',
			[
				'string' => [
					'post_id' => $post->get('post_id')
				]
			]
		);

		return $this->phrase->render('json')->serialize([
			'template' => $template,
			'post_id' => $post->get('post_id')
		])->render();
	}

	private function deletePostComplete()
	{
		if (!$this->user->loggedIn())
		{
			return false;
		}

		$post = new PostRepo();

		$postString = (new PostString())->getPostByPostId($post->get('post_id'));
		$discussion = (new DiscussionString())->getDiscussionByFirstPostId($post->get('post_id'));

		if (!$this->user->visitor()->is_admin)
		{
			if ($this->user->visitor()->user_id != $postString['user_id'])
			{
				return false;
			}
		}

		if ($discussion)
		{
			\App\SubContainer\Post\Delete::Discussion([
				'discussion_id' => $discussion['discussion_id']
			]);

			\App\SubContainer\Post\Delete::allPostDeleteOperation([
				'discussion_id' => $discussion['discussion_id']
			]);
		}
		else
		{
			\App\SubContainer\Post\Delete::Operation([
				'post_id' => $post->get('post_id')
			]);
		}

		return $this->phrase->render('json')->serialize([
			'post_id' => $post->get('post_id')
		])->render();
	}

	private function editPost()
	{
		if (!$this->user->loggedIn())
		{
			return false;
		}

		$post = new PostRepo();

		$postString = (new PostString())->getPostByPostId($post->get('post_id'));
		$discussion = (new DiscussionString())->getDiscussionByFirstPostId($post->get('post_id'));

		if (!$this->user->visitor()->is_admin)
		{
			if ($this->user->visitor()->user_id != $postString['user_id'])
			{
				return false;
			}
		}

		$firstpost = false;
		$discussionString = null;

		if ($discussion)
		{
			$firstpost = true;
			$discussionString = $discussion;
		}

		$template = $this->template->render(
			'edit.tpl',
			[
				'string' => [
					'post_id' => $post->get('post_id'),
					'post' => $postString,
					'discussion' => $discussionString,
					'is_firstpost' => $firstpost
				]
			]
		);

		$content = \App\Renderer\BBCode\Helper\CodeBlock::Render(
			$postString['content']
		);

		return $this->phrase->render('json')->serialize([
			'template' => $template,
			'content' => $content,
			'post_id' => $post->get('post_id')
		])->render();
	}

	private function editPostComplete()
	{
		if (!$this->user->loggedIn())
		{
			return false;
		}

		$post = new PostRepo();

		$postString = (new PostString())->getPostByPostId($post->get('post_id'));
		$discussion = (new DiscussionString())->getDiscussionByFirstPostId($post->get('post_id'));

		if (!$this->user->visitor()->is_admin)
		{
			if ($this->user->visitor()->user_id != $postString['user_id'])
			{
				return false;
			}
		}

		if ($discussion)
		{
			\App\SubContainer\Discussion\Edit::Title([
				'firstpost_id' => $post->get('post_id'),
				'title' => $post->get('post_title')
			]);
		}

		if ($post->has('removeAttachments'))
		{
			foreach ((array)$post->get('removeAttachments') as $removeAttachmentId)
			{
				$attachment = (new \App\String\Attachments())->getAttachmentByAttachId($removeAttachmentId);
				if ($attachment)
				{
					if (!$this->user->visitor()->is_admin)
					{
						if ($this->user->visitor()->user_id != $attachment['user_id'])
						{
							return false;
						}
					}

					$removeAttachments[] = [
						'attach_id' => $attachment['attach_id'],
						'unique_id' => $attachment['unique_id']
					];
				}
				else
				{
					return false;
				}
			}
		}
		else
		{
			$removeAttachments = null;
		}

		if ($post->has('is_attachment'))
		{
			$totalAttachFile = count($_FILES['attachments']['name']);
			for ($i = 0; $i < $totalAttachFile; $i++)
			{
				$files[] = [
					'name' => $_FILES['attachments']['name'][$i],
					'tmp_name' => $_FILES['attachments']['tmp_name'][$i],
					'size' => $_FILES['attachments']['size'][$i]
				];
			}
		}
		else
		{
			$files = null;
		}

		\App\SubContainer\Post\Edit::Content([
			'user_id' => $postString['user_id'],
			'post_id' => $post->get('post_id'),
			'content' => \App\Renderer\BBCode\Posting::Render($post->get('content')),
			'lastedit_userid' => $this->user->visitor()->user_id,
			'removeAttachments' => $removeAttachments,
			'attachments' => $files
		]);

		$template = $this->template->render(
			'updateContent.tpl',
			[
				'string' => [
					'post' => [
						'content' => \App\Renderer\BBCode\Posting::Render($post->get('content'))
					]
				]
			]
		);

		$attachmentTemplate = $this->template->render(
			'updateAttachments.tpl',
			[
				'item' => [
					'post_id' => $post->get('post_id')
				]
			]
		);

		return $this->phrase->render('json')->serialize([
			'template' => $template,
			'attachmentTemplate' => $attachmentTemplate,
			'post_id' => $post->get('post_id')
		])->render();
	}

	private function likePost()
	{
		if (!$this->user->loggedIn())
		{
			return false;
		}

		$post = new PostRepo();

		$postString = new PostString();

		if ($postString->isUserLikePost($post->get('post_id'), $this->user->visitor()->user_id))
		{
			return false;
		}

		\App\SubContainer\Post\Like::Like([
			'post_id' => $post->get('post_id'),
			'user_id' => $this->user->visitor()->user_id,
			'reaction' => $post->get('reaction')
		]);

		$postdata = $postString->getPostByPostId($post->get('post_id'));

		$createReactionNotification = [
			'notification' => [
				'tab' => "reaction-{$post->get('reaction')}",
				'post_id' => $post->get('post_id'),
				'discussion_id' => $post->get('discussion_id'),
				'sender_id' => $this->user->visitor()->user_id,
				'user_id' => $postdata['user_id']
			]
		];

		\App\SubContainer\Notification\Create::Add($createReactionNotification);

		$template = $this->template->render(
			'updateLike.tpl',
			[
				'item' => [
					'post_id' => $post->get('post_id')
				],
				'string' => [
					'post' => new PostString()
				]
			]
		);

		return $this->phrase->render('json')->serialize([
			'template' => $template,
			'user_id' => $this->user->visitor()->user_id
		])->render();
	}

	private function takeBackLikePost()
	{
		if (!$this->user->loggedIn())
		{
			return false;
		}

		$post = new PostRepo();

		if (!(new PostString())->isUserLikePost($post->get('post_id'), $this->user->visitor()->user_id))
		{
			return false;
		}

		\App\SubContainer\Post\Like::UnLike([
			'post_id' => $post->get('post_id'),
			'user_id' => $this->user->visitor()->user_id
		]);

		$removeNotification = [
			'notification' => [
				'post_id' => $post->get('post_id'),
				'discussion_id' => 0,
				'sender_id' => $this->user->visitor()->user_id,
				'user_id' => $post->get('user_id')
			]
		];

		\App\SubContainer\Notification\Remove::Operation($removeNotification);

		$template = $this->template->render(
			'updateLike.tpl',
			[
				'item' => [
					'post_id' => $post->get('post_id')
				],
				'string' => [
					'post' => new PostString()
				]
			]
		);

		return $this->phrase->render('json')->serialize([
			'template' => $template,
			'user_id' => $this->user->visitor()->user_id
		])->render();
	}

	private function bookmarkPost()
	{
		if (!$this->user->loggedIn())
		{
			return false;
		}

		$post = new PostRepo();

		$postString = new PostString();

		if ($postString->isUserBookmarkPost($post->get('post_id'), $this->user->visitor()->user_id))
		{
			return false;
		}

		\App\SubContainer\Post\Bookmark::Operation([
			'post_id' => $post->get('post_id'),
			'user_id' => $this->user->visitor()->user_id
		]);

		return $this->phrase->render('json')->serialize(
			[]
		)->render();
	}

	private function undoBookmarkPost()
	{
		if (!$this->user->loggedIn())
		{
			return false;
		}

		$post = new PostRepo();

		$postString = new PostString();

		if ($postString->isUserBookmarkPost($post->get('post_id'), $this->user->visitor()->user_id))
		{
			\App\SubContainer\Post\Bookmark::UnBookmark([
				'post_id' => $post->get('post_id'),
				'user_id' => $this->user->visitor()->user_id
			]);
		}

		return $this->phrase->render('json')->serialize(
			[]
		)->render();
	}

	private function userTaggingPost()
	{
		if (!$this->user->loggedIn())
		{
			return false;
		}

		$post = new PostRepo();

		$results = \App\SubContainer\Search\Quick::searchUsers(
			$post->get('pattern')
		);

		/*if(is_array($results))
		{
			foreach ($results as $item)
			{
				if($item['user_id'] == $this->user->visitor()->user_id)
				{
					unset($item);
				}

				$items[] = $item;
			}
		}*/

		return $this->phrase->render('json')->serialize([
			'data' => $results
		])->render();
	}

	private function profilePostsNextPage()
	{
		$post = new PostRepo();

		if ($post->get('tab') == 'posts')
		{
			$groupItems = false;
		}
		elseif ($post->get('tab') == 'discussions')
		{
			$groupItems = true;
		}

		$template = $this->template->render(
			'profile_posts.tpl',
			[
				'string' => [
					'post' => new PostString,
					'reaction' => new ReactionString,
					'pagination' => (new \App\SubContainer\Post\Pagination())->decodePageData($post->get('next_id')),
					'current_page' => ($post->get('current_page') + 1),
					'user' => [
						'user_id' => $post->get('user_id')
					],
					'order' => \App\SubContainer\Post\Order::getOrder($post->get('order')),
					'groupItems' => $groupItems
				]
			]
		);

		return $this->phrase->render('json')->serialize([
			'template' => $template,
			'current_page' => ($post->get('current_page') + 1)
		])->render();
	}

	private function orderProfilePosts()
	{
		$post = new PostRepo();

		if ($post->get('tab') == 'posts')
		{
			$groupItems = false;
		}
		elseif ($post->get('tab') == 'discussions')
		{
			$groupItems = true;
		}

		$template = $this->template->render(
			'profile_posts.tpl',
			[
				'string' => [
					'post' => new PostString,
					'reaction' => new ReactionString,
					'order' => \App\SubContainer\Post\Order::getOrder($post->get('order')),
					'user' => [
						'user_id' => $post->get('user_id')
					],
					'groupItems' => $groupItems
				]
			]
		);

		return $this->phrase->render('json')->serialize([
			'template' => $template
		])->render();
	}

	private function quickTabs()
	{
		$post = new PostRepo();

		if ($post->get('tab') == 'posts')
		{
			$groupItems = false;
		}
		elseif ($post->get('tab') == 'discussions')
		{
			$groupItems = true;
		}

		$template = $this->template->render(
			'profile_posts.tpl',
			[
				'string' => [
					'post' => new PostString,
					'reaction' => new ReactionString,
					'order' => \App\SubContainer\Post\Order::getOrder($post->get('order')),
					'user' => [
						'user_id' => $post->get('user_id')
					],
					'groupItems' => $groupItems
				]
			]
		);

		return $this->phrase->render('json')->serialize([
			'template' => $template
		])->render();
	}

	private function subscribeDiscussion()
	{
		if (!$this->user->loggedIn())
		{
			return false;
		}

		$post = new PostRepo();

		if (!\App\SubContainer\Discussion\Subscription::isUserSubscribe([
			'user_id' => $this->user->visitor()->user_id,
			'discussion_id' => $post->get('discussion_id')
		]))
		{
			$data = [
				'user_id' => $this->user->visitor()->user_id,
				'discussion_id' => $post->get('discussion_id'),
			];

			if (\App\SubContainer\Discussion\Subscription::subscribe($data))
			{
				return $this->phrase->render('json')->serialize(
					[]
				)->render();
			}
		}
		else
		{
			return $this->phrase->render('json')->serialize([
				'status' => 'allready-subscribe'
			])->render();
		}
	}

	private function subscriptionRemoveDiscussion()
	{
		if (!$this->user->loggedIn())
		{
			return false;
		}

		$post = new PostRepo();

		if (\App\SubContainer\Discussion\Subscription::isUserSubscribe([
			'user_id' => $this->user->visitor()->user_id,
			'discussion_id' => $post->get('discussion_id')
		]))
		{
			$data = [
				'user_id' => $this->user->visitor()->user_id,
				'discussion_id' => $post->get('discussion_id'),
			];

			if (\App\SubContainer\Discussion\Subscription::removeSubscribe($data))
			{
				return $this->phrase->render('json')->serialize(
					[]
				)->render();
			}
		}
	}

	private function accountUserLikesNextPage()
	{
		$post = new PostRepo();

		$template = $this->template->render(
			'account_likes_posts.tpl',
			[
				'string' => [
					'post' => new PostString,
					'reaction' => new ReactionString,
					'pagination' => (new \App\SubContainer\Post\Pagination())->decodePageData($post->get('next_id')),
					'current_page' => ($post->get('current_page') + 1),
				]
			]
		);

		return $this->phrase->render('json')->serialize([
			'template' => $template,
			'current_page' => ($post->get('current_page') + 1)
		])->render();
	}

	private function accountUserBookmarksNextPage()
	{
		$post = new PostRepo();

		$template = $this->template->render(
			'account_bookmarks_posts.tpl',
			[
				'string' => [
					'post' => new PostString,
					'pagination' => (new \App\SubContainer\Post\Pagination())->decodePageData($post->get('next_id')),
					'current_page' => ($post->get('current_page') + 1),
				]
			]
		);

		return $this->phrase->render('json')->serialize([
			'template' => $template,
			'current_page' => ($post->get('current_page') + 1)
		])->render();
	}

	private function externalLinkRenderer()
	{
		$post = new PostRepo();

		$json = \App\Renderer\ExternalLinkRenderer::Init(
			$post->get('url')
		);

		return $this->phrase->render('json')->serialize(
			$json
		)->render();
	}
}
