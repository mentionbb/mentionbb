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
