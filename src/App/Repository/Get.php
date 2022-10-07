<?php

namespace App\Repository;

use Symfony\Component\HttpFoundation\Request as HttpRequest;

class Get
{
    private $request;

    public function __construct()
    {
        $this->request = HttpRequest::createFromGlobals();
    }

    public function get(string $name)
    {
        return $this->request->query->get($name);
    }

    public function all()
    {
        return $this->request->query->all();
    }

    public function has(string $name)
    {
        return $this->request->query->has($name);
    }

    public function set(string $name, string $content)
    {
        return $this->request->query->set($name, $content);
    }

    public function count()
    {
        return $this->request->query->count();
    }

    public function getIterator()
    {
        return $this->request->query->getIterator();
    }
}
