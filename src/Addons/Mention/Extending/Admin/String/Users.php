<?php

namespace ComponentBundle\Extending\Admin\String;

use App\Entity\User as UserEntity;

class Users
{
    protected $user;

    public function __construct()
    {
        $this->user = new UserEntity();
    }

    public function getLastFiveUsers()
    {
        return $this->user->getLastFiveUsers();
    }
}
