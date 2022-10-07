<?php

namespace App\SubContainer;

use App\Phrase;
use App\Repository\Request;
use ReCaptcha\ReCaptcha;

class Captcha
{
	public static function isValid($response)
	{
		$settings = Phrase::getSettings();
		$request = (new Request());

		if ($request->getServerName() == 'localhost')
		{
			$hostname = 'testkey.google.com';
		}
		else
		{
			$hostname = $request->getServerName();
		}

		$recaptcha = new ReCaptcha($settings->gr_secret_key);
		$resp = $recaptcha->setExpectedHostname($hostname)->verify(
			$response,
			$request->getRemoteAddr()
		);

		if ($resp->isSuccess())
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
