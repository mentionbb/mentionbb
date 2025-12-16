<?php

namespace App;

use App\UrlMatcher;

use Symfony\Component\Routing\RouteCollection as SymfonyRouteCollection;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;

class RouteCollection
{
    protected $collection;
    protected $matcher;

    public function __construct(SymfonyRouteCollection $collection, UrlMatcher $matcher)
    {
        $this->collection = $collection;
        $this->matcher = $matcher;
    }

    public function all()
    {
        return $this->collection->all();
    }

    public function get($name)
    {
        return $this->collection->get($name);
    }

    public function getSelf()
    {
        try
        {
            return $this->get(
                $this->getMatchingPath()['_route']
            );
        }
        catch (\Exception $e)
        {
        }
    }

    public function getIterator()
    {
        return $this->collection->getIterator();
    }

    public function count()
    {
        return $this->collection->count();
    }

    public function getMatchingPath()
    {
        $request = new \App\Repository\Request();

        try
        {
            return $this->matcher->match($request->getPathInfo());
        }
        catch (ResourceNotFoundException $e)
        {
        }
    }

    public function __toString()
    {
        return $this->getMatchingPath()['_route'];
    }
}
