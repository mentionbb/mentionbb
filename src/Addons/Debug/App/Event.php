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
                            '{addon:debug}/debug.twig',
                            [
                                'debug' => [
                                    'memoryUsed' => \App\SubContainer\Bytes::formatBytes(memory_get_peak_usage(false)),
                                    'memoryLimit' => $server->getMemoryLimit(),
                                    'serverSoftware' => $server->getServerSoftware(),
                                    'phpVersion' => $server->getPHPVersion(),
                                    'mySQLVersion' => $server->getServerVersion(),
                                    'calculatePageLoadTime' => (\number_format(\microtime(true) - TIMER_START, 2)),
                                    'serverInfo' => $server->getServerInfo(),
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
