<?php

namespace App\Renderer\Response;

class ResponseRenderer
{
    protected $request;
    protected $serialize;

    public function __construct(\App\Repository\Request $request)
    {
        $this->request = $request;
    }
}
