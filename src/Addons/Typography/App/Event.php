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
