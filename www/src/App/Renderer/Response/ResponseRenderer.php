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

    protected function initSecurelyHeaders()
    {
        return [
            'X-Content-Type-Options' => 'nosniff',
            //'X-Frame-Options' => 'DENY',
            //'X-XSS-Protection' => '1; mode=block'
        ];
    }
}
