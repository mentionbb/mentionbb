<?php

namespace App\SubContainer\Auth;

use App\Repository\Crypto;
use App\Entity\User;

use PHPGangsta_GoogleAuthenticator as GoogleAuthenticator;

class TwoStepVerification
{
	private $ga;
	private $settings;
	private $secret;
	private $user;

	public function __construct($languageData, $languageInit)
	{
		$this->ga = new GoogleAuthenticator();
		$this->settings = (new \App\Entity\Settings())->getSettings();
		$this->user = (new \App\Authentication\Auth($languageData, $languageInit))->visitor();

		$this->secret = $this->getSecret();
	}

	public function getSecret()
	{
		return Crypto::decryption($this->user->login_key, $this->user->secret_key);
	}

	public function createSecret()
	{
		return Crypto::encryption($this->ga->createSecret(), $this->user->secret_key);
	}

	public function getQRCode()
	{
		return $this->ga->getQRCodeGoogleUrl($this->settings->site_title, $this->secret);
	}

	public function verify($code)
	{
		if ($this->ga->verifyCode($this->secret, $code, 2))
		{
			return true;
		}

		return false;
	}

	public function getCode()
	{
		return $this->ga->getCode($this->secret);
	}

	public function setUser($data)
	{
		$input = \App\Repository\Set::setObject($data);

		$user = new User();

		if ($user->setTwoFa($input->definition, $this->user->user_id))
		{
			return true;
		}
	}
}
