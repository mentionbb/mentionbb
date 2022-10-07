<?php

namespace Addons\Debug\App;

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
        if (\App\App::$dev['_devMode'] || \App\App::$dev['_debug'])
        {
            if ($event->container->user->loggedIn())
            {
                if ($event->container->user->visitor()->is_admin)
                {
                    $event->container->dom->prepend('{hook:pagecontent}', function () use ($event)
                    {
                        $server = new \App\SubContainer\ServerEnvironment();

                        return $event->container->template->render(
                            '{addon:debug}/debug.tpl',
                            [
                                'debug' => [
                                    'memoryUsed' => \App\SubContainer\Bytes::formatBytes(memory_get_peak_usage(false)),
                                    'memoryLimit' => $server->getMemoryLimit(),
                                    'phpVersion' => $server->getPHPVersion(),
                                    'mySQLVersion' => $server->getMySQLVersion(),
                                    'calculatePageLoadTime' => (number_format(microtime(true) - TIMER_START, 2)),
                                    'page' => [
                                        'self' => $event->container->routing->getSelf(),
                                        'matchingPath' => $event->container->routing->getMatchingPath()
                                    ]
                                ]
                            ]
                        );
                    });
                }
            }
        }
    }
}
