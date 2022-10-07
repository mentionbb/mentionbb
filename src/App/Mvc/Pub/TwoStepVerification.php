<?php

namespace App\Mvc\Pub;

use App\Mvc\Controller;
use App\Rule\Pub;
use App\Repository\Post as PostRepo;

class TwoStepVerification extends Controller implements Pub
{
	public function container($option)
	{
		if ($this->request->getRequestMethod() == "GET")
		{
			if ($this->user->loggedIn())
			{
				if ($this->verifyTwoStep())
				{
					echo $this->template->render(
						'two_step_verification.tpl',
						[]
					);
				}
				else
				{
					return $this->request->redirect($this->settings->site_url, false);
				}
			}
			else
			{
				return $this->request->redirect($this->settings->site_url, false);
			}
		}
		elseif ($this->request->getRequestMethod() == "POST")
		{
			if ($this->request->getPathInfo() == '/two-step-verification/verify')
			{
				return $this->verifyStage();
			}
		}
	}

	private function verifyStage()
	{
		if (!$this->user->loggedIn())
		{
			return false;
		}

		$post = new PostRepo();

		$auth = new \App\SubContainer\Auth\TwoStepVerification($this->default_language, $this->languageInit);

		if ($auth->verify($post->get('twofa_code')))
		{
			\App\Repository\CookieEncrypt::getInstance()->set([
				'name' => '2fa',
				'data' => $this->user->visitor()->login_key,
				'cookie_time' => $this->datetime->getTimestamp() + (7 * 24 * 60 * 60),
				'cookie_path' => '/',
				'encrypted' => true
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
