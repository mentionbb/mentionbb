<?php

namespace ComponentBundle\Extending\Admin\String;

use App\Phrase;
use App\Util\Yaml;

class Routes
{
    protected $routes;

    public function __construct()
    {
        $this->routes = Yaml::getFile(CONFIG_DIR . '/routes.yaml');
    }

    public function getPublicRoutes()
    {
        //We dont need these routes.
        $excludingRoutes = ['IndexAction', 'Post', 'AuthAction', 'Editor', 'Search', 'SitemapIndex', 'Sitemap', 'Test', 'Webmanifest'];

        //We only need these parameters.
        $allowedParams = ['path', 'controller'];

        $routes = [];
        foreach ($this->routes as $key => $item)
        {
            if (!in_array($key, $excludingRoutes))
            {
                $item = array_intersect_key($item, array_flip($allowedParams));

                //We need to exclude Ajax Routes from among them.
                if (!preg_match('/([a-zA-Z0-9_]+)_Post/', $key, $matchAjaxRoutes))
                {
                    $routes[$key] = [
                        'name' => $key,
                        'path' => $item['path'],
                        'controller' => $item['controller']
                    ];
                }
            }
        }

        return $routes;
    }

    public function getPublicRoutes_WithoutExcludes()
    {
        return $this->routes;
    }

    public function getRoute(string $name)
    {
        return $this->routes[$name];
    }
}
