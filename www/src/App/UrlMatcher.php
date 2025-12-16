<?php

namespace App;

use Symfony\Component\Routing\Matcher\UrlMatcher as SymfonyRoutingUrlMatcher;

class UrlMatcher extends SymfonyRoutingUrlMatcher
{
    /**
     * __construct
     *
     * Mention mostly uses its own Class definitions, so we use them to disable rule definitions in repos that we add externally, such as Symfony Routing.
     * If we don't do that then it may fail later even if not in this version.
     * 
     * @param  mixed $routes
     * @param  mixed $context
     * @return void
     */
    public function __construct($routes, $context)
    {
        $this->routes = $routes;
        $this->context = $context;
    }
}
