<?php

namespace App\Mvc;

use App\Mvc\Controller;

abstract class EventController extends Controller
{
    protected $event_name;
    protected $app_template_path;
    protected $app_template_prefix;
    
    protected $jokerMethod = 'init';

    public function __construct($appRouting, $event)
    {
        parent::__construct($appRouting);

        $this->event = $event->get('AppBundle')[$this->event_name];
        $this->loader->addPath(
            $this->setEventConfig()->getTemplatePath($this->app_template_path),
            $this->app_template_prefix
        );

        if (\method_exists($this, $this->jokerMethod) && \is_callable([$this, $this->jokerMethod]))
        {
            $this->{$this->jokerMethod}();
        }
    }

    protected function getEvent()
    {
        return $this->event;
    }

    protected function getTemplatePrefix()
    {
        return "@{$this->app_template_prefix}";
    }

    protected function getTemplate($name)
    {
        return $this->getTemplatePrefix() . "/{$name}";
    }
}
