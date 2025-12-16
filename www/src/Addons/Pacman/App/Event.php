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
     * @var \App\Hook\Html $event->container->dom Return dom elements.
     * @var \App\RouteCollection $event->container->routing Access routing collection with page and variables.
     * @var \App\Phrase $event->container->phrase Various variables and methods.
     * @var object $event->container->settings Get global settings.
     * @var \App\Authentication\Auth $event->container->user Visitor and entry controls.
     * @var \App\Repository\Request $event->container->request HttpRequest library.
     * @var array $event->container->lang Get language strings and settings.
     * @var \App\SubContainer\Language $event->container->language Get language parser.
     * @var \Twig\Loader\FilesystemLoader $event->container->loader Template loader event.
     * @var \App\Template\Twig\Environment $event->container->template Template controllers.
     * 
     * @return void
     */
    public function initTemplateModification($event)
    {
        /** @var \App\Mvc\EventInterface\EventInterface $event */

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
