<?php

namespace App\Mvc\Pub;

use App\Mvc\Controller;
use App\Rule\Pub;
use App\Repository\Post as PostRepo;
use App\Entity\Notifications;
use App\Entity\Messages;
use App\String\Reaction as ReactionString;

class Account extends Controller implements Pub
{
	public function container($option)
	{
		if ($this->request->getRequestMethod() == "GET")
		{
			if ($this->user->loggedIn())
			{
				echo $this->template->render(
					'account.tpl',
					[
						'option' => $option,
						'string' => [
							'discussion' => new \App\String\Discussion(),
							'post' => new \App\String\Post(),
							'two_fa' => new \App\SubContainer\Auth\TwoStepVerification($this->default_language, $this->languageInit),
							'profile' => new \App\String\Profile()
						]
					]
				);
			}
			else
			{
				return $this->request->redirect($this->settings->site_url, false);
			}
		}
		elseif ($this->request->getRequestMethod() == "POST")
		{
			if ($this->request->getPathInfo() == '/account/mark-read-notifications')
			{
				return $this->markReadNotifications();
			}
			if ($this->request->getPathInfo() == '/account/mark-read-messages')
			{
				return $this->markReadMessages();
			}
			if ($this->request->getPathInfo() == '/account/refresh-notification')
			{
				return $this->refreshNotification();
			}
			if ($this->request->getPathInfo() == '/account/refresh-messages')
			{
				return $this->refreshMessages();
			}
			elseif ($this->request->getPathInfo() == '/account/sign-out')
			{
				return $this->user->secureLogout();
			}
			elseif ($this->request->getPathInfo() == '/account/change-settings')
			{
				return $this->changeAccountSettings();
			}
			elseif ($this->request->getPathInfo() == '/account/change-password')
			{
				return $this->changePassword();
			}
			elseif ($this->request->getPathInfo() == '/account/two-step-verification-on')
			{
				return $this->twoStepVerificationOn();
			}
			elseif ($this->request->getPathInfo() == '/account/two-step-verification-off')
			{
				return $this->twoStepVerificationOff();
			}
			elseif ($this->request->getPathInfo() == '/account/add-friend')
			{
				return $this->addRequestFriend();
			}
			elseif ($this->request->getPathInfo() == '/account/remove-friend')
			{
				return $this->removeFriend();
			}
			elseif ($this->request->getPathInfo() == '/account/approve-request-friend')
			{
				return $this->approveRequestFriend();
			}
			elseif ($this->request->getPathInfo() == '/account/profile-tooltip')
			{
				return $this->profileTooltip();
			}
		}
	}

	private function markReadNotifications()
	{
		if ($this->user->loggedIn())
		{
			return (new Notifications())->seeingNotify($this->user->visitor()->user_id);
		}
	}

	private function markReadMessages()
	{
		if ($this->user->loggedIn())
		{
			return (new Messages())->seeingMessages($this->user->visitor()->user_id);
		}
	}

	private function refreshNotification()
	{
		if ($this->user->loggedIn())
		{
			$template = $this->template->render(
				'usermenu_notification.tpl',
				[]
			);

			return $this->phrase->render('json')->serialize([
				'template' => $template
			])->render();
		}
	}

	private function refreshMessages()
	{
		if ($this->user->loggedIn())
		{
			$template = $this->template->render(
				'usermenu_messages.tpl',
				[]
			);

			return $this->phrase->render('json')->serialize([
				'template' => $template
			])->render();
		}
	}

	private function changeAccountSettings()
	{
		if ($this->user->loggedIn())
		{
			$post = new PostRepo();

			$account = new \App\SubContainer\User\Account();

			if (!empty($_FILES['acs_profile_picture']['tmp_name']))
			{
				$account->changeProfilePicture(
					$_FILES,
					$this->user->visitor()->user_id
				);
			}

			if ($post->has('acs_profile_picture_ready'))
			{
				$account->changeProfilePicture_Ready([
					'pp' => $post->get('acs_profile_picture_ready'),
					'user_id' => $this->user->visitor()->user_id
				]);
			}

			if ($post->has('acs_mail'))
			{
				$account->changeMail([
					'new_mail' => $post->get('acs_mail'),
					'user_id' => $this->user->visitor()->user_id
				]);
			}

			if ($post->has('acs_usertitle'))
			{
				$account->changeTitle([
					'new_title' => $post->get('acs_usertitle'),
					'user_id' => $this->user->visitor()->user_id
				]);
			}

			return $this->phrase->render('json')->serialize(
				[]
			)->render();
		}
	}

	private function changePassword()
	{
		if ($this->user->loggedIn())
		{
			$post = new PostRepo();

			if ($post->has('acs_password'))
			{
				(new \App\SubContainer\User\Account())->changePassword([
					'old_password' => $post->get('acs_old_password'),
					'new_password' => $post->get('acs_password'),
					'user_id' => $this->user->visitor()->user_id
				]);
			}

			return $this->phrase->render('json')->serialize(
				[]
			)->render();
		}
	}

	private function twoStepVerificationOn()
	{
		if ($this->user->loggedIn())
		{
			$post = new PostRepo();

			$auth = new \App\SubContainer\Auth\TwoStepVerification($this->default_language, $this->languageInit);

			if ($auth->verify($post->get('acs_twofa_code')))
			{
				$auth->setUser([
					'definition' => 1
				]);

				return $this->phrase->render('json')->serialize(
					[]
				)->render();
			}
			else
			{
				return $this->phrase->render('json')->serialize([
					'status' => 'fail'
				])->render();
			}
		}
	}

	private function twoStepVerificationOff()
	{
		if ($this->user->loggedIn())
		{
			$post = new PostRepo();

			(new \App\SubContainer\Auth\TwoStepVerification($this->default_language, $this->languageInit))->setUser([
				'definition' => 0
			]);

			return $this->phrase->render('json')->serialize(
				[]
			)->render();
		}
	}

	private function addRequestFriend()
	{
		if ($this->user->loggedIn())
		{
			$post = new PostRepo();

			if (!\App\SubContainer\User\Friendship::hasFriendship([
				'sender_id' => $this->user->visitor()->user_id,
				'user_id' => $post->get('user_id')
			]))
			{
				\App\SubContainer\User\Friendship::addRequest([
					'sender_id' => $this->user->visitor()->user_id,
					'user_id' => $post->get('user_id')
				]);

				\App\SubContainer\Notification\Create::Add([
					'notification' => [
						'tab' => 'friendship-request',
						'post_id' => 0,
						'discussion_id' => 0,
						'sender_id' => $this->user->visitor()->user_id,
						'user_id' => $post->get('user_id')
					]
				]);

				return $this->phrase->render('json')->serialize(
					[]
				)->render();
			}
		}
	}

	private function removeFriend()
	{
		if ($this->user->loggedIn())
		{
			$post = new PostRepo();

			if ($post->has('user_id'))
			{
				\App\SubContainer\User\Friendship::removeFriendshipPending([
					'sender_id' => $this->user->visitor()->user_id,
					'user_id' => $post->get('user_id')
				]);

				\App\SubContainer\User\Friendship::removeFriendshipPending([
					'sender_id' => $post->get('user_id'),
					'user_id' => $this->user->visitor()->user_id
				]);

				\App\SubContainer\Notification\Remove::Operation([
					'notification' => [
						'tab' => 'friendship-request',
						'post_id' => 0,
						'discussion_id' => 0,
						'sender_id' => $this->user->visitor()->user_id,
						'user_id' => $post->get('user_id')
					]
				]);
			}
			elseif ($post->has('sender_id'))
			{
				\App\SubContainer\User\Friendship::removeFriendshipPending([
					'sender_id' => $post->get('sender_id'),
					'user_id' => $this->user->visitor()->user_id
				]);

				\App\SubContainer\User\Friendship::removeFriendshipPending([
					'sender_id' => $this->user->visitor()->user_id,
					'user_id' => $post->get('sender_id')
				]);

				\App\SubContainer\Notification\Remove::Operation([
					'notification' => [
						'tab' => 'friendship-request',
						'post_id' => 0,
						'discussion_id' => 0,
						'sender_id' => $post->get('sender_id'),
						'user_id' => $this->user->visitor()->user_id
					]
				]);
			}

			return $this->phrase->render('json')->serialize(
				[]
			)->render();
		}
	}

	private function approveRequestFriend()
	{
		if ($this->user->loggedIn())
		{
			$post = new PostRepo();

			if ($post->has('user_id'))
			{
				if (!\App\SubContainer\User\Friendship::hasFriendship([
					'sender_id' => $this->user->visitor()->user_id,
					'user_id' => $post->get('user_id')
				]))
				{
					\App\SubContainer\User\Friendship::approveFriendship([
						'sender_id' => $this->user->visitor()->user_id,
						'user_id' => $post->get('user_id')
					]);

					\App\SubContainer\Notification\Remove::Operation([
						'notification' => [
							'tab' => 'friendship-request',
							'post_id' => 0,
							'discussion_id' => 0,
							'sender_id' => $this->user->visitor()->user_id,
							'user_id' => $post->get('user_id')
						]
					]);
				}
			}
			elseif ($post->has('sender_id'))
			{
				if (!\App\SubContainer\User\Friendship::hasFriendship([
					'sender_id' => $post->get('sender_id'),
					'user_id' => $this->user->visitor()->user_id
				]))
				{
					\App\SubContainer\User\Friendship::approveFriendship([
						'sender_id' => $post->get('sender_id'),
						'user_id' => $this->user->visitor()->user_id
					]);

					\App\SubContainer\Notification\Remove::Operation([
						'notification' => [
							'tab' => 'friendship-request',
							'post_id' => 0,
							'discussion_id' => 0,
							'sender_id' => $post->get('sender_id'),
							'user_id' => $this->user->visitor()->user_id
						]
					]);
				}
			}

			return $this->phrase->render('json')->serialize(
				[]
			)->render();
		}
	}

	private function profileTooltip()
	{
		$post = new PostRepo();

		$userString = (new \App\String\Profile())->getUserByUserId($post->get('user_id'));

		if ($post->has('user_id'))
		{
			$template = $this->template->render(
				'profile_tooltip.tpl',
				[
					'string' => [
						'user' => $userString,
						'reaction' => new ReactionString
					]
				]
			);

			return $this->phrase->render('json')->serialize([
				'template' => $template
			])->render();
		}
	}
}
