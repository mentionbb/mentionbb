<?php

namespace App\Repository;

use Symfony\Component\HttpFoundation\Request as HttpRequest;

class Attributes
{
	private $request;

	public function __construct()
	{
		$this->request = HttpRequest::createFromGlobals();
	}

	public function get(string $name)
	{
		return $this->request->attributes->get($name);
	}

	public function all()
	{
		return $this->request->attributes->all();
	}

	public function has(string $name)
	{
		return $this->request->attributes->has($name);
	}

	public function set(string $name, $content)
	{
		return $this->request->attributes->set($name, $content);
	}

	public function add($content)
	{
		return $this->request->attributes->add($content);
	}
}
