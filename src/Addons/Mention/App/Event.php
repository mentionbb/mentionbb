<?php

namespace ComponentBundle\App;

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

        $event->container->dom->getFeature()->addMetadata(function () use ($event)
        {
            if ($event->container->dom->isTemplate('index'))
            {
                $data = (new \ComponentBundle\App\Builder\Metadata\Index())->Render($event->container);
            }
            else if ($event->container->dom->isTemplate('discussion'))
            {
                $data = (new \ComponentBundle\App\Builder\Metadata\Discussion())->Render($event->container);
            }
            else if ($event->container->dom->isTemplate('messages'))
            {
                $data = (new \ComponentBundle\App\Builder\Metadata\Messages())->Render($event->container);
            }
            else if ($event->container->dom->isTemplate('faq'))
            {
                $data = (new \ComponentBundle\App\Builder\Metadata\Faq())->Render($event->container);
            }
            else if ($event->container->dom->isTemplate('contact'))
            {
                $data = (new \ComponentBundle\App\Builder\Metadata\Contact())->Render($event->container);
            }
            else if ($event->container->dom->isTemplate('privacy'))
            {
                $data = (new \ComponentBundle\App\Builder\Metadata\Privacy())->Render($event->container);
            }
            else if ($event->container->dom->isTemplate('account'))
            {
                $data = (new \ComponentBundle\App\Builder\Metadata\Account())->Render($event->container);
            }
            else if ($event->container->dom->isTemplate('profile'))
            {
                $data = (new \ComponentBundle\App\Builder\Metadata\Profile())->Render($event->container);
            }
            else if ($event->container->dom->isTemplate('404'))
            {
                $data = (new \ComponentBundle\App\Builder\Metadata\PageNotFound())->Render($event->container);
            }
            else
            {
                $data = (new \ComponentBundle\App\Builder\Metadata\Index())->Render($event->container);
            }

            return $data;
        });

        if ($event->container->dom->hasAttribute('{hook:head}', 'hook-meta-exclude'))
        {
            preg_match('/\{(.*?)\}/', $event->container->dom->getAttribute('{hook:head}', ['hook-meta-exclude'])['hook_meta_exclude'], $matchExcludeMetas);
            foreach (explode(',', $matchExcludeMetas[1]) as $item)
            {
                $item = trim($item);
                $event->container->dom->remove("meta[name=\"{$item}\"]");
            }
        }

        // So let's take the Discussion data and see how we can handle this.
        // First, make sure you are in the Discussion page / template. It acts as a buffer to prevent future errors. Important.
        if ($event->container->dom->isTemplate('discussion'))
        {
            $event->container->dom->getDiscussion(function ($chunk) use ($event)
            {
                // That way, you can now get the Discussion data.
                /**
                 * \App\Hook\Helper::Discussion
                 * @method getItem(): array
                 * @method getId(): int
                 * @method getForumId(): int
                 * @method getFirstpostId(): int
                 * @method getTitle(): string
                 * @method isSticky(): bool
                 * @method isOpen(): bool
                 * @method isExist: bool
                 * @method addView(): void
                 * @method getForum(): object
                 * @method getUser(): object
                 * @method isUserSubscribe(): bool
                 */
                $discussion = $chunk->getItem();

                // All right now you can get the data of the Discussion Owner User.
                /**
                 * \App\Hook\Helper::User
                 * @method getItem(): array
                 * @method getUserId(): int
                 * @method getUsername(): string
                 * @method getMail(): string
                 * @method isAdmin(): bool
                 */
                $user = $chunk->getUser()->getUserId();

                // You can also get forum data to which Discussion is linked.
                /**
                 * \App\Hook\Helper::Forum
                 * @method getItem(): array
                 * @method getId(): int
                 * @method getParentId(): int
                 * @method getTitle(): string
                 * @method getDesc(): string
                 */
                $forum = $chunk->getForum()->getItem();

                return $discussion;
            });
        }

        //$event->container->dom->getFaq()->changeTerms('asd');
        //$event->container->dom->getFaq()->changeResourceStandarts('asd');

        /*$event->container->dom->setInnerHtml('.app-title:not(.mobile)', function () use ($event)
        {
            return $event->container->settings->site_url;
        });*/

        //$event->container->dom->getAttribute('.first-post', ['data-discussion-id'])['discussion_id'];
        //$event->container->dom->setAttribute('.app-title:not(.mobile)', ['data-info', 'asd']);
        //$event->container->dom->removeAttribute('.app-title:not(.mobile)', 'class');

        /*$event->container->dom->insertBefore('[.appNodeContainer.pinned]', function () use ($event)
        {
            return "ok";
        });*/

        /*$event->container->dom->insertBefore('.app-post-manage', function () use ($event)
        {
            return "ok";
        });*/

        /*$event->container->dom->append('.app-post-manage', function () use ($event)
        {
            return "<div>awd</div>";
        });*/

        /*$event->container->dom->prepend('.app-title:not(.mobile)', function () use ($event)
        {
            return "<div>awd</div>";
        });*/

        //$event->container->dom->remove('.appNodeContainer.pinned');

        /*$event->container->dom->replaceWith('.app-title:not(.mobile)', function () use ($event)
        {
            return "<div>awd</div>";
        });*/

        //$event->container->dom->addClass('.app-forums', 'ok');
        //$event->container->dom->removeClass('.app-forums', 'bg-white');
        //$event->container->dom->setStyle('.app-title', 'margin-top: 800px');

        $event->container->dom->removeAttribute('{hook:head}', 'hook-meta-exclude');
        $event->container->dom->removeAttribute('{hook:head}', 'hook-action');
        $event->container->dom->remove('{hook:metacontents}');
    }
}
