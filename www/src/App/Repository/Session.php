<?php

namespace App\Repository;

use Symfony\Component\HttpFoundation\Session\Session as HttpFoundationSession;

class Session
{
	private $session;

	public function __construct()
	{
		$this->session = new HttpFoundationSession();
	}

	public function setName($name)
	{
		return $this->session->setName($name);
	}

	public function getId()
	{
		return $this->session->getId();
	}

	public function start()
	{
		return $this->session->start();
	}

	public function set($name, $value)
	{
		return $this->session->set($name, $value);
	}

	public function get($name)
	{
		return $this->session->get($name);
	}

	public function has($name)
	{
		return $this->session->has($name);
	}

	public function remove($name)
	{
		return $this->session->remove($name);
	}
}
