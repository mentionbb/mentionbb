<?php

namespace App\Mvc\Pub;

use App\Mvc\Controller;
use App\Rule\Pub;
use App\Repository\Post as PostRepo;
use App\Repository\Get as GetRepo;

class Auth extends Controller implements Pub
{
	public function container($option)
	{
		if ($this->request->getRequestMethod() == "GET")
		{
			if (!$this->user->loggedIn())
			{
				$query = new GetRepo();

				if ($option['section'] == 'login')
				{
					$this->request->redirect(
						$this->settings->site_url,
						false
					);
				}

				$social = new \App\SubContainer\Auth\Social($option['section']);

				if (isset($option['section']))
				{
					if (!$query->has('code'))
					{
						return $social->getProvider();
					}
					else
					{
						return $this->externalSocialRegister(
							$option['section'],
							$social->getData()
						);
					}
				}
			}
			else
			{
				$this->request->redirect(
					$this->settings->site_url,
					false
				);
			}
		}
		elseif ($this->request->getRequestMethod() == "POST")
		{
			if ($this->request->getPathInfo() == '/auth/login')
			{
				return $this->user->postData();
			}
			elseif ($this->request->getPathInfo() == '/auth/register')
			{
				return $this->register();
			}
			elseif ($this->request->getPathInfo() == '/auth/control-username')
			{
				return $this->controlUser();
			}
		}
	}

	private function controlUser()
	{
		$post = new PostRepo();

		if (\App\SubContainer\User\UsernameControl::isExist($post->get('username')))
		{
			return $this->phrase->render('json')->serialize([
				'exist' => 1
			])->render();
		}
		else
		{
			return $this->phrase->render('json')->serialize([
				'exist' => 0
			])->render();
		}
	}

	private function register()
	{
		if (!$this->user->loggedIn())
		{
			$post = new PostRepo();

			if (\App\SubContainer\Captcha::isValid($post))
			{
				if (\App\SubContainer\User\UsernameControl::isExist($post->get('username')))
				{
					return false;
				}

				$data = [
					'username' => $post->get('username'),
					'password' => $post->get('password'),
					'mail' => $post->get('mail')
				];

				if ((\App\SubContainer\User\Create::User($data)))
				{
					if ($post->has('quick-login'))
					{
						$this->user->validateUser($post->get('username'), $post->get('password'));
					}
					else
					{
						$this->request->redirect();
					}
				}
			}
			else
			{
				\App\Mvc\Controller::warningUserWithSession(
					"ReCaptcha error"
				);

				$this->request->redirect();
			}
		}
	}

	private function externalSocialRegister($provider, $data)
	{
		if ($provider == 'google')
		{
			$username = explode('@', $data->email)[0];
		}
		else if ($provider == 'facebook')
		{
			$username = $data->fullname;
		}
		else if ($provider == 'github')
		{
			$username = $data->user;
		}

		$password = \App\Repository\Crypto::generate_keys(11);

		if (\App\SubContainer\User\UsernameControl::isExist($username))
		{
			$this->user->validateUser($username, false, false, $data->email, false);

			return $this->request->redirect($this->settings->site_url, false);
		}

		$data = [
			'username' => $username,
			'password' => $password,
			'mail' => $data->email
		];

		if ((\App\SubContainer\User\Create::User($data)))
		{
			$this->user->validateUser($username, $password, false, false, false);

			return $this->request->redirect($this->settings->site_url, false);
		}
	}
}
