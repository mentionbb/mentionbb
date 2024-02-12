<?php

namespace App\Repository;

use Symfony\Component\HttpFoundation\Request as HttpRequest;

class Server
{
    private $request;

    public function __construct()
    {
        $this->request = HttpRequest::createFromGlobals();
    }

    public function get(string $name)
    {
        return $this->request->server->get($name);
    }

    public function all()
    {
        return $this->request->server->all();
    }

    public function has(string $name)
    {
        return $this->request->server->has($name);
    }

    public function set(string $name, string $content)
    {
        return $this->request->server->set($name, $content);
    }

    public function count()
    {
        return $this->request->server->count();
    }

    public function getIterator()
    {
        return $this->request->server->getIterator();
    }
}
