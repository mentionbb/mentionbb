<?php

namespace ComponentBundle\Extending\Admin\Mvc\Pub;

use ComponentBundle\Extending\Admin\Mvc\ApplicationDefinitions;
use App\Rule\Pub;
use App\Repository\Get as GetRepo;
use App\Repository\Post as PostRepo;
use ComponentBundle\Extending\Admin\String\Routes as RoutesString;

class RouteFilters extends ApplicationDefinitions implements Pub
{
    public function container($option)
    {
        $query = new GetRepo();

        if ($this->request->getRequestMethod() == "GET")
        {
            if (!$this->accessProtocol())
            {
                return $this->request->redirect($this->settings->site_url, false);
            }

            echo $this->template->render(
                $this->getTemplate('RouteFilters/route_filters.tpl'),
                [
                    'option' => $option,
                    'string' => [
                        'routes' => new RoutesString
                    ]
                ]
            );
        }
        elseif ($this->request->getRequestMethod() == "POST")
        {
            if ($this->request->getPathInfo() == '/admin/route-filters')
            {
                if ($query->has('rebuild'))
                {
                    return $this->rebuildRoutes();
                }
                else if ($query->has('restore'))
                {
                    return $this->restoreDefaultRoutes();
                }
            }
        }
    }

    private function rebuildRoutes()
    {
        $post = new PostRepo();

        foreach ($post->toArray('options') as $key => $val)
        {
            $key = lcfirst($key);
            $options[$key] = $val;
        }
        \ComponentBundle\Extending\Admin\SubContainer\Routes\Rebuild::RebuildWithInput($options);

        return $this->phrase->render('json')->serialize(
            []
        )->render();
    }

    private function restoreDefaultRoutes()
    {
        $post = new PostRepo();

        \ComponentBundle\Extending\Admin\SubContainer\Routes\Rebuild::rebuildRestoreDefault();

        return $this->phrase->render('json')->serialize(
            []
        )->render();
    }
}
