<?php

namespace App\SubContainer\User;

use App\Entity\User;

class UsernameControl
{
	public static function isExist(string $username)
	{
		if ((new User())->findByUserName($username))
		{
			return true;
		}

		return false;
	}
}
