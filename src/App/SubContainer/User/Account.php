<?php

namespace App\SubContainer\User;

use App\Repository\Crypto;
use App\Entity\User;
use App\SubContainer\Attachment\Attachment;
use App\SubContainer\Bytes;
use App\Phrase;

class Account
{
	private $user;

	public function __construct()
	{
		$this->user = new User();
	}

	public function changeProfilePicture($file, $user_id)
	{
		$upload = (new Attachment())->uploadImage(
			$file['acs_profile_picture'],
			"uploads/profile_picture",
			Bytes::convertToBytes(
				Phrase::getSettings()->profile_photo_max_size
			)
		);

		if (is_array($upload))
		{
			$this->user->setProfilePicture($upload['name'], $user_id);
		}
	}

	public function changeProfilePicture_Ready($data)
	{
		$input = \App\Repository\Set::setObject($data);

		if ($this->user->setProfilePicture($input->pp, $input->user_id))
		{
			return true;
		}
	}

	public function changeMail($data)
	{
		$input = \App\Repository\Set::setObject($data);

		if ($this->user->setMail($input->new_mail, $input->user_id))
		{
			return true;
		}
	}

	public function changeTitle($data)
	{
		$input = \App\Repository\Set::setObject($data);

		if ($this->user->setTitle($input->new_title, $input->user_id))
		{
			return true;
		}
	}

	public function changePassword($data)
	{
		$input = \App\Repository\Set::setObject($data);

		$userdata = $this->user->getUserDataFromUserId($input->user_id);
		if (!$userdata)
		{
			return false;
		}

		$password_real = Crypto::decryption($userdata->password, $userdata->secret_key);
		$password_entered = Crypto::decryption(
			Crypto::encryption($input->old_password, $userdata->secret_key),
			$userdata->secret_key
		);

		if ($password_real == $password_entered)
		{
			$encrypted_password = Crypto::encryption($input->new_password, $userdata->secret_key);

			if ($this->user->setPassword($encrypted_password, $input->user_id))
			{
				return true;
			}
		}

		return false;
	}

	public function forceChangePassword($data)
	{
		$input = \App\Repository\Set::setObject($data);

		$userdata = $this->user->getUserDataFromUserId($input->user_id);
		if (!$userdata)
		{
			return false;
		}

		$encrypted_password = Crypto::encryption($input->new_password, $userdata->secret_key);
		if ($this->user->setPassword($encrypted_password, $input->user_id))
		{
			return true;
		}

		return false;
	}

	public function changeUsername($data)
	{
		$input = \App\Repository\Set::setObject($data);

		if ($this->user->setUsername($input->username, $input->user_id))
		{
			return true;
		}

		return false;
	}

	public function changeRole($data)
	{
		$input = \App\Repository\Set::setObject($data);

		if ($this->user->setRole($input->role, $input->user_id))
		{
			return true;
		}

		return false;
	}
}
