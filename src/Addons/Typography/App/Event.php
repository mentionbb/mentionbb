<?php

namespace Addons\Typography\App;

use App\Hook\Dispatcher\Event as DispatcherEvent;

use Symfony\Component\DomCrawler\Crawler;

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

        if ($event->container->dom->isTemplate('discussion'))
        {
            /**
             * The getInnerHtml() function into the Crawler.
             * The html content with this function can be processed with Crawler again.
             * See: https://symfony.com/doc/5.4/components/dom_crawler.html
             */
            $html = $event->container->dom->getInnerHtml('{hook:discussionfirstpost} .app-bbcode-content');
            if ($html->filter('article > h2')->count())
            {
                $headings = $html->filter('article > h1, article > h2, article > h3, article > h4, article > h5, article > h6')->each(function (Crawler $node, $i)
                {
                    return [
                        'href' => $node->filter('a')->attr('href'),
                        'title' => $node->text()
                    ];
                });

                $event->container->dom->prepend('{hook:discussionfirstpost} .app-bbcode-content', function () use ($event, $headings)
                {
                    return $event->container->template->render(
                        '{addon:typography}/headings.twig',
                        [
                            'string' => [
                                'headings' => $headings
                            ]
                        ]
                    );
                });
            }
        }
    }
}
