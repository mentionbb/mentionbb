<?php

namespace App\SubContainer\User;

use App\Entity\User;

class Create
{
	public static function User($data)
	{
		$input = \App\Repository\Set::setObject($data);

		$secret_key = base64_encode((\App\Repository\Crypto::generate_keys(24)));
		$encrypted_password = \App\Repository\Crypto::encryption($input->password, $secret_key);

		$user = new User();

		if (isset($input->title))
		{
			$title = $input->title;
		}
		else
		{
			$title = "__default";
		}

		if (isset($input->isAdmin))
		{
			$isAdmin = $input->isAdmin;
		}
		else
		{
			$isAdmin = 0;
		}

		if ($user->Create($input->username, $input->mail, $encrypted_password, $secret_key, $title, $isAdmin))
		{
			return true;
		}
	}
}
