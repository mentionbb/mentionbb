<?php

namespace Addons\Pacman\App\Mvc;

use App\Mvc\EventController;

abstract class ApplicationDefinitions extends EventController
{
    protected $event;

    /**
     * app_template_path
     * Template path dir.
     * @var string
     */
    protected $app_template_path = "";

    /**
     * app_template_prefix
     * Template Prefix. For example in Twig: @ComponentBundle_Admin
     * @var string
     */
    protected $app_template_prefix = "Addon_PacmanGame";

    /**
     * [$event_id Unique Name]
     * It must be Addom.yaml name same.
     * @var string
     */
    protected $event_name = 'Pacman';
}
