<?php

namespace Addons\Gestures\App;

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

        /**
         * This adds space from left to button added to disable Gesture.
         */
        $event->container->dom->addClass('.discuss-info:first-child > div:first-child', 'ml-lg-4');
        $event->container->dom->addClass('.discuss-info:first-child > div:first-child', 'pl-lg-1');

        /**
         * This simply adds the button itself to disable Gesture.
         */
        $event->container->dom->insertBefore('.discuss-info:first-child > div:first-child', function () use ($event)
        {
            return $event->container->template->render(
                '{addon:gestures}/gesture.twig',
                []
            );
        });

        /**
         * This is necessary. Because when the gesture action is performed, the reaction specified in the message appears for a short time.
         */
        $event->container->dom->prepend('{hook:discussionpost-text}', function () use ($event)
        {
            return $event->container->template->render(
                '{addon:gestures}/doubletap_reactions.twig',
                []
            );
        });
    }
}
