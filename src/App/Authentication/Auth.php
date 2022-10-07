<?php

namespace App\Authentication;

use App\App;
use App\Repository\Request;
use App\Repository\Post as PostRequest;
use App\Repository\CookieEncrypt;
use App\Repository\Crypto;
use App\Entity\Settings;
use App\Entity\User as UserEntity;
use App\Entity\DateTime;

class Auth
{
	protected $settings;
	protected $user;
	protected $request;
	protected $language;

	public static $instance;

	public function __construct($languageData, $languageInit)
	{
		$this->settings = new Settings();
		$this->user = new UserEntity();
		$this->request = new Request();
		$this->datetime = new DateTime($languageData);
		$this->language = \App\Repository\Set::setObject($languageInit);

		$this->post = new PostRequest();
	}

	public function postData()
	{
		if ($this->post->has('login-submit'))
		{
			if (\App\Repository\CookieEncrypt::getInstance()->defineAuthToken() != $this->post->get('csrf_token'))
			{
				\App\Mvc\Controller::warningUserWithSession(
					$this->language->container->visitor->auth->csrf_error
				);

				$this->request->redirect();
			}

			if (empty($this->post->get('username')) && empty($this->post->get('password')))
			{
				\App\Mvc\Controller::warningUserWithSession(
					$this->language->container->visitor->auth->cannot_be_blank
				);

				$this->request->redirect();
			}
			else
			{
				if ($this->post->has('keep-login'))
				{
					$keepLogin = true;
				}
				else
				{
					$keepLogin = false;
				}
				if (!$this->validateUser($this->post->get('username'), $this->post->get('password'), $keepLogin))
				{
					\App\Mvc\Controller::warningUserWithSession(
						$this->language->container->visitor->auth->wrong_username_or_password
					);

					$this->request->redirect();
				}
			}
		}
	}

	public function loggedIn()
	{
		if (isset($_COOKIE['st-user_token']) && CookieEncrypt::getInstance()->get('st-username'))
		{
			return true;
		}
		return false;
	}

	public function validateUser($username, $password, $remember_me = false, $externalSocialLogin = false)
	{
		$username = htmlspecialchars($username);
		$password = htmlspecialchars($password);

		$userdata = $this->user->getUserDataFromUsername($username);
		if (!$userdata)
		{
			return false;
		}

		if (!$password)
		{
			if ($userdata->mail == $externalSocialLogin)
			{
				$password_real = $userdata->password;
				$password_entered = $userdata->password;
			}
		}
		else
		{
			$password_real = Crypto::decryption($userdata->password, $userdata->secret_key);
			$password_entered = Crypto::decryption(
				Crypto::encryption($password, $userdata->secret_key),
				$userdata->secret_key
			);
		}

		if ($password_real == $password_entered)
		{
			$password = $userdata->password;
		}
		else
		{
			return false;
		}

		if ($this->user->validateUser($username, $password))
		{
			if ($remember_me == true)
			{
				CookieEncrypt::getInstance()->set([
					'name' => 'st-username',
					'data' => $userdata->username,
					'cookie_time' => $this->datetime->getTimestamp() + 31556926,
					'cookie_path' => '/',
					'encrypted' => true
				]);

				CookieEncrypt::getInstance()->set([
					'name' => 'st-password',
					'data' => $password,
					'cookie_time' => $this->datetime->getTimestamp() + 31556926,
					'cookie_path' => '/',
					'encrypted' => false
				]);

				CookieEncrypt::getInstance()->set([
					'name' => 'st-user_token',
					'data' => App::$session->get('st-user_token'),
					'cookie_time' => $this->datetime->getTimestamp() + 31556926,
					'cookie_path' => '/',
					'encrypted' => false
				]);
			}
			else
			{
				CookieEncrypt::getInstance()->set([
					'name' => 'st-username',
					'data' => $userdata->username,
					'cookie_time' => $this->datetime->getTimestamp() + 3600,
					'cookie_path' => '/',
					'encrypted' => true
				]);

				CookieEncrypt::getInstance()->set([
					'name' => 'st-password',
					'data' => $password,
					'cookie_time' => $this->datetime->getTimestamp() + 3600,
					'cookie_path' => '/',
					'encrypted' => false
				]);

				CookieEncrypt::getInstance()->set([
					'name' => 'st-user_token',
					'data' => App::$session->get('st-user_token'),
					'cookie_time' => $this->datetime->getTimestamp() + 31556926,
					'cookie_path' => '/',
					'encrypted' => false
				]);
			}
			$this->request->redirect();
		}
		return false;
	}

	public function secureLogout()
	{
		setcookie('st-username', '', $this->datetime->getTimestamp()  - 31556926, '/');
		setcookie('st-password', '', $this->datetime->getTimestamp()  - 31556926, '/');
		setcookie('st-user_token', '', $this->datetime->getTimestamp()  - 31556926, '/');
		setcookie('2fa', '', $this->datetime->getTimestamp() - (7 * 24 * 60 * 60), '/');

		$this->request->redirect();
	}

	public function visitor()
	{
		if ($this->loggedIn())
		{
			$username = CookieEncrypt::getInstance()->get('st-username');
			$userdata = $this->user->getUserDataFromUsername($username);

			if ($userdata->password != $_COOKIE['st-password'])
			{
				$this->secureLogout();
			}

			return $userdata;
		}
		elseif (isset($_COOKIE['st-username']) && !CookieEncrypt::getInstance()->get('st-username'))
		{
			$this->secureLogout();
		}
	}

	public function getActiveBan($user_id)
    {
        $getBanList = $this->user->getUserBans($user_id);
        $getBan = [];
        foreach ($getBanList as $key => $item)
        {
            $getBan[$item['dateline']] = [$key => $item];
        }
        if (count($getBan))
        {
            $getBan = max($getBan);
        }

        if (isset($getBan[0]['expires']))
        {
            if ($getBan[0]['expires'] <= time())
            {
                return false;
            }
            else
            {
                return $getBan[0];
            }
        }

        return false;
    }

	public function getBans($user_id)
    {
        return $this->user->getUserBans($user_id);
    }

	public function saveSession()
	{
		$session = new \App\Entity\Session();

		if (preg_match('/(css|ajax)/is', $this->request->getRequestUri(), $matchCss))
		{
			return false;
		}

		if (!$this->loggedIn())
		{
			$type = 'guest';
			$user_id = 0;
		}
		else
		{
			$userdata = $this->visitor();
			$type = 'user';
			$user_id = $userdata->user_id;
		}

		$data = [
			'ip' => $this->request->getRemoteAddr(),
			'dateline' => $this->datetime->getTimestamp(),
			'type' => $type,
			'session_id' => session_id(),
			'route' => $this->request->getPathInfo(),
			'user_id' => $user_id
		];

		$online = $session->getSession($data['session_id']);

		if ($online->rowCount() < 1)
		{
			$session->addSession($data);
		}

		if ($data['type'] == 'user')
		{
			$this->user->setActivity($data);
		}

		if ($online->rowCount() > 0)
		{
			return $session->setSession($data);
		}
	}
}
