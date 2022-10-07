<?php

namespace App\SubContainer;

class Mailer
{
	private $mailer;

	public function __construct()
	{
		$settings = (new \App\Entity\Settings)->getSettings();

		$transport = (new \Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
			->setUsername($settings->site_mail)
			->setPassword('');

		$this->mailer = new \Swift_Mailer($transport);
	}

	public function Send(string $subject, array $from, array $to, string $message)
	{
		$message = (new \Swift_Message($subject))
			->setFrom($from)
			->setTo($to)
			->setBody($message);

		return $this->mailer->send($message);
	}
}
