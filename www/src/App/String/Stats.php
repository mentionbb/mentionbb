<?php

namespace App\String;

class Stats
{
	public function getUserCount()
	{
		return (new \App\Entity\User())->getUserCount();
	}

	public function getLastRegistered()
	{
		return (new \App\Entity\User())->getLastRegistered();
	}
}
