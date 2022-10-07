<?php

namespace App\Hook\Helper;

use App\Entity\User as UserEntity;

class User
{
    protected $user;

    public function __construct(int $user_id)
    {
        $this->user = (new UserEntity())->getUserDataFromUserId($user_id);
    }

    public function getItem()
    {
        return $this->user;
    }

    public function getUserId()
    {
        return $this->user->user_id;
    }

    public function getUsername()
    {
        return $this->user->username;
    }

    public function getMail()
    {
        return $this->user->mail;
    }

    public function isAdmin()
    {
        return $this->user->is_admin;
    }
}