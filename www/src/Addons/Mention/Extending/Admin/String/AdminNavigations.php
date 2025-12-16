<?php

namespace ComponentBundle\Extending\Admin\String;

use ComponentBundle\Extending\Admin\Entity\AdminNavigations as NavigationsEntity;

class AdminNavigations
{
    protected $nav;

    public function __construct()
    {
        $this->nav = new NavigationsEntity();
    }

    public function getNavigations($parent_id = 0)
    {
        return $this->nav->getNavigations($parent_id);
    }

    public function getActiveNavigation(\App\Phrase $phrase, $uri)
    {
        $uri = str_replace(
            [
                $phrase->buildLink('adminIndex', [], true)
            ],
            [
                ''
            ],
            $uri
        );
        $uri = ltrim($uri, '/');
        $uri = rtrim($uri, '=');

        if ($uri == '')
        {
            $uri = '/';
        }

        $nav = $this->nav->getNavigationByLink($uri);

        if (!is_array($nav))
        {
            $uri = preg_replace('/\?([a-zA-Z0-9\/=]+)/', '', $uri);
            $uri = preg_replace('/\[(.*?)\]/', '', urldecode($uri));
            $nav = $this->nav->getNavigationByLink($uri);

            if (!is_array($nav))
            {
                $query = new \App\Repository\Get();

                if ($query->has('defaultNav'))
                {
                    $nav = $this->nav->getNavigationByName($query->get('defaultNav'));

                    if (!is_array($nav))
                    {
                        return [
                            'parent' => null,
                            'nav' => null
                        ];
                    }
                }
                else
                {
                    return [
                        'parent' => null,
                        'nav' => null
                    ];
                }
            }
        }

        $parent = $this->nav->getNavigationById($nav['parent_id']);
        if ($parent['parent_id'] != 0)
        {
            $parent = $this->nav->getNavigationById($parent['parent_id']);
        }

        return [
            'parent' => $parent['name'],
            'nav' => $nav['name']
        ];
    }
}
