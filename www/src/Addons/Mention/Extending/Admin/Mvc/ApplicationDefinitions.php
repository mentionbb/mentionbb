<?php

namespace ComponentBundle\Extending\Admin\Mvc;

use App\Mvc\EventController;
use ComponentBundle\Extending\Admin\String\AdminNavigations as NavigationsString;

abstract class ApplicationDefinitions extends EventController
{
    protected $event;

    /**
     * app_template_path
     * Template path dir.
     * @var string
     */
    protected $app_template_path = "Admin";

    /**
     * app_template_prefix
     * Template Prefix. For example in Twig: @ComponentBundle_Admin
     * @var string
     */
    protected $app_template_prefix = "ComponentBundle_Admin";

    /**
     * [$event_id Unique Name]
     * It must be Addom.yaml name same.
     * @var string
     */
    protected $event_name = 'Mention';

    /**
     * init
     *
     * The init function allows the extra parameters of the addon to be loaded.
     * 
     * @return void
     */
    protected function init()
    {
        $nav = new NavigationsString;

        $this->template->excludeTemplates();
        $this->template->addGlobal(
            'appAdmin',
            [
                'string' => [
                    'navigations' => $nav,
                    'getActiveNavigation' => $nav->getActiveNavigation($this->phrase, $this->request->getUri())
                ]
            ]
        );

        $this->template->excludeTemplates();
    }

    protected function accessProtocol()
    {
        if ($this->user->loggedIn())
        {
            if ($this->user->visitor()->is_admin)
            {
                return true;
            }

            return false;
        }

        return false;
    }

    protected function getQueryItem($query): string
    {
        if (!preg_match('/\[(.*?)\]/', $query, $matchTrueQuery))
        {
            throw new \Exception('Query parsing failure. Please correct query like [Example]');
        }

        return str_replace(['[', ']'], ['', ''], $query);
    }
}
