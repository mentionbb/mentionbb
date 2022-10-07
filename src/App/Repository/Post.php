<?php

namespace App\Repository;

use Symfony\Component\HttpFoundation\Request as HttpRequest;

class Post
{
	private $request;

	public function __construct()
	{
		$this->request = HttpRequest::createFromGlobals();
	}

	public function get($name)
	{
		return $this->request->request->get($name);
	}

	public function has(string $name)
	{
		return $this->request->request->has($name);
	}

	public function set(string $name, string $content)
	{
		return $this->request->request->set($name, $content);
	}

	public function all()
	{
		return $this->request->request->all();
	}

	public function toArray($name)
	{
		$values = [];
		foreach ((array) json_decode($this->get($name)) as $key => $val)
		{
			$values[$key] = $val;
		}

		return $values;
	}
}
