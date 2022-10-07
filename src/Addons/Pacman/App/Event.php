<?php

namespace Addons\Pacman\App;

use App\Hook\Dispatcher\Event as DispatcherEvent;

class Event extends DispatcherEvent
{
    /**
     * initTemplateModification
     *
     * Allows you to modify templates through the addon.
     * In this function, you can select elements from within the html and manipulate them. (like jQuery)
     * 
     * @param $event->container->dom \App\Hook\Html Return dom elements.
     * @param $event->container->routing \App\RouteCollection Access routing collection with page and variables.
     * @param $event->container->phrase \App\Phrase Various variables and methods.
     * @param $event->container->settings \App\Entity\Settings::getSettings() Get global settings.
     * @param $event->container->user \App\Authentication\Auth Visitor and entry controls.
     * @param $event->container->request \App\Repository\Request HttpRequest library.
     * @param $event->container->lang \App\SubContainer\Language Get language strings and settings.
     * @param $event->container->language \App\SubContainer\Language Get language parser.
     * @param $event->container->loader \Twig\Loader\FilesystemLoader Template loader event.
     * @param $event->container->template \Twig Template controllers.
     * @return void
     */
    public function initTemplateModification($event)
    {
        if ($event->container->dom->isTemplate('404'))
        {
            $event->container->dom->addStyle('vendor/pacman/style.css?v=1643540572');
            $event->container->dom->addStyle('vendor/pacman/keyboard.min.css');   
            $event->container->dom->addScript('vendor/pacman/app.js?v=14');
            
            $event->container->dom->insertAfter('#main', function () use ($event)
            {
                return "<iframe id=\"content\" class=\"pacman\" src=\"about:blank\"></iframe>";
            });

            $event->container->dom->insertAfter('iframe', function () use ($event)
            {
                return "<div class=\"pacman-buttons d-lg-flex d-none align-items-center\">
                    <kbd class=\"kbc-button kbc-button-xs ml-2\">&#8592;</kbd>
                    <div class=\"d-flex flex-column arrow-buttons\">
                        <kbd class=\"kbc-button kbc-button-xs\">&#8593;</kbd>
                        <kbd class=\"kbc-button kbc-button-xs\">&#8595;</kbd>
                    </div>
                    <kbd class=\"kbc-button kbc-button-xs\">&#8594;</kbd>
                </div>";
            });

            $event->container->dom->remove('#main');
        }
    }
}
