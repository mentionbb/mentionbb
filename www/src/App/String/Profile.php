<?php

namespace App\String;

use App\Entity\User as UserEntity;

class Profile
{
	private $users;

	public function __construct()
	{
		$this->users = new UserEntity();
	}

	public function getUserByUserId($user_id)
	{
		return $this->users->findByUserId($user_id);
	}

	public function getUserByUserName($user_id)
	{
		return $this->users->findByUserName($user_id);
	}

	public function isUserHasFriendship($sender_id, $user_id, $awaiting = 0)
	{
		return $this->users->isUserHasFriendship($sender_id, $user_id, $awaiting);
	}

	public function getUserFriendships($user_id)
	{
		return $this->users->getUserFriendships($user_id);
	}

	public function getUserFriendshipCount($user_id)
	{
		return count($this->users->getUserFriendships($user_id));
	}
}
