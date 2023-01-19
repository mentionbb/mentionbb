<?php

namespace App\Mvc\Pub;

use App\Mvc\Controller;
use App\Rule\Pub;
use App\Repository\Post as PostRepo;

class Messages extends Controller implements Pub
{
	public function container($option)
	{
		if ($this->request->getRequestMethod() == "GET")
		{
			if ($this->user->loggedIn())
			{
				if ($option['section'] != 'new')
				{
					if ($this->request->getPathInfo() == '/messages')
					{
						echo $this->template->render(
							'messages.twig',
							[
								'option' => $option,
								'string' => []
							]
						);
					}
					else
					{
						$messages = new \App\String\Messages();
						$conversation = $messages->getFirstMessage($option['id']);

						echo $this->template->render(
							'messages.twig',
							[
								'option' => $option,
								'string' => [
									'conversation' => $conversation
								]
							]
						);
					}
				}
				else
				{
					echo $this->template->render(
						'messages.twig',
						[
							'option' => $option,
							'string' => []
						]
					);
				}
			}
			else
			{
				return $this->request->redirect($this->settings->site_url, false);
			}
		}
		elseif ($this->request->getRequestMethod() == "POST")
		{
			if ($this->request->getPathInfo() == '/messages/conversation/get')
			{
				return $this->getConversation();
			}
			elseif ($this->request->getPathInfo() == '/messages/conversation/send')
			{
				return $this->sendMessage();
			}
			elseif ($this->request->getPathInfo() == '/messages/conversation/archive')
			{
				return $this->archiveMessage();
			}
			elseif ($this->request->getPathInfo() == '/messages/conversation/remove-archive')
			{
				return $this->removeArchiveMessage();
			}
			elseif ($this->request->getPathInfo() == '/messages/new')
			{
				return $this->newMessage();
			}
			elseif ($this->request->getPathInfo() == '/messages/conversation/new')
			{
				return $this->newConversation();
			}
			elseif ($this->request->getPathInfo() == '/messages/conversation/search-user')
			{
				return $this->searchUser();
			}
		}
	}

	private function getConversation()
	{
		$post = new PostRepo();

		$messages = new \App\String\Messages();

		if ($messages->isExistConversation($post->get('conversation_id')))
		{
			$conversation = $messages->getFirstMessage($post->get('conversation_id'));
			$messages->seeingMessages($this->user->visitor()->user_id, $conversation['parent_id']);

			$template = $this->template->render(
				'conversation.twig',
				[
					'string' => [
						'conversation' => $conversation,
						'messages' => $messages->getConversation($conversation['parent_id'])
					]
				]
			);

			return $this->phrase->render('json')->serialize([
				'template' => $template
			])->render();
		}
	}

	private function sendMessage()
	{
		$post = new PostRepo();

		$messages = new \App\String\Messages();

		if ($messages->isExistConversation($post->get('message_id')))
		{
			$conversation = $messages->getFirstMessage($post->get('message_id'));

			if ($conversation['sender_id'] == $this->user->visitor()->user_id)
			{
				$user_id = $conversation['user_id'];
			}
			else
			{
				$user_id = $conversation['sender_id'];
			}

			\App\SubContainer\Messages\Send::Do([
				'title' => $conversation['title'],
				'text' => $post->get('text'),
				'sender_id' => $this->user->visitor()->user_id,
				'user_id' => $user_id,
				'parent_id' => $conversation['parent_id']
			]);

			return $this->phrase->render('json')->serialize(
				[]
			)->render();
		}
	}

	private function archiveMessage()
	{
		$post = new PostRepo();

		\App\SubContainer\Messages\Archive::Do([
			'message_id' => $post->get('message_id')
		]);

		return $this->phrase->render('json')->serialize(
			[]
		)->render();
	}

	private function removeArchiveMessage()
	{
		$post = new PostRepo();

		\App\SubContainer\Messages\Archive::DoRemove([
			'message_id' => $post->get('message_id')
		]);

		return $this->phrase->render('json')->serialize(
			[]
		)->render();
	}

	private function newMessage()
	{
		$post = new PostRepo();

		if ($post->has('target_user'))
		{
			$target_user = (new \App\Entity\User())->getUserDataFromUserId($post->get('target_user'))->username;
		}
		else
		{
			$target_user = '';
		}

		$template = $this->template->render(
			'new.twig',
			[
				'string' => [
					'target_user' => $target_user
				]
			]
		);

		return $this->phrase->render('json')->serialize([
			'template' => $template
		])->render();
	}

	private function newConversation()
	{
		$post = new PostRepo();

		if ($post->get('target_user') !== $this->user->visitor()->username)
		{
			$message = \App\SubContainer\Messages\Create::Do([
				'title' => $post->get('title'),
				'text' =>  $post->get('text'),
				'sender_id' => $this->user->visitor()->user_id,
				'user_id' => (new \App\Entity\User())->getUserDataFromUsername($post->get('target_user'))->user_id
			]);

			return $this->phrase->render('json')->serialize([
				'message_id' => $message
			])->render();
		}
		else
		{
			return $this->phrase->render('json')->serialize([
				'status' => 'user-is-same'
			])->render();
		}
	}

	private function searchUser()
	{
		$post = new PostRepo();

		$template = $this->template->render(
			'new_users.twig',
			[
				'string' => [
					'users' => (new \App\Entity\User())->search($post->get('keyword'))
				]
			]
		);

		return $this->phrase->render('json')->serialize([
			'template' => $template
		])->render();
	}
}
