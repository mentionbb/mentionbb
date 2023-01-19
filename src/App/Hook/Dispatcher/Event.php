<?php

namespace App\Hook\Dispatcher;

use Symfony\Contracts\EventDispatcher\Event as SymfonyEvent;

class Event extends SymfonyEvent
{
    protected $container;
    
    /**
     * __construct
     *
     * @param  mixed $container
     * @return void
     */
    public function __construct($container = null)
    {
        if (!is_null($container))
        {
            $this->container = $container;
        }
    }
}
