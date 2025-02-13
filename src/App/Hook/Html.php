<?php

namespace App\Hook;

use App\Params\Deploy\Config as InitialConfig;

use App\Hook\DomManipulation\DomManipulation;
use App\Hook\Helper\Discussion as DiscussionHook;
use App\Hook\Helper\Faq as FaqHook;
use App\Hook\Helper\Feature;

use Masterminds\HTML5;

class Html
{
    public $name;

    protected $feature;
    protected $domman;

    protected $html;

    public function __construct($name, $html, $container = null)
    {
        $this->name = $name;
        $this->feature = new Feature($this);

        $ownerDocument = $this->loadHTML($html);

        $this->domman = new DomManipulation($ownerDocument);

        $this->setAttribute("{hook:htmlbody}", ['dom-renderer', $ownerDocument['renderer']]);

        if (!is_null($container))
        {
            $this->addDispatch($container);
        }

        $this->html = $this->htmltoTemplate($ownerDocument);
    }

    /**
     * loadHTML
     *
     * FINALLY, PHP supports HTML5 with 8.4 release. We have integrated this experimental version into MentionBB.
     * Thanks to this, we will now be able to perform much faster, more compact and compatible dom operations.
     * https://wiki.php.net/rfc/domdocument_html5_parser
     * https://www.php.net/manual/en/class.dom-document.php
     * 
     * For versions below 8.4, we will continue to use the Masterminds/html5-php.
     * And, added a setting that allows switching to the legacy in case of any problems.
     * @param  mixed $html
     * @return array{html5: \Masterminds\HTML5, dom: \Dom\Document|\DOMDocument, xpath: \Dom\XPath|\DOMXPath, renderer: string} $ownerDocument
     */
    public static function loadHTML($html): array
    {
        if (\PHP_VERSION >= '8.4' && !InitialConfig::deployConfigParams()['is_enable_legacy_dom_filter'])
        {
            $dom = \Dom\HTMLDocument::createFromString($html, LIBXML_NOERROR, 'UTF-8');

            $ownerDocument = [
                'html5' => null,
                'dom' => $dom,
                'xpath' => new \DOM\XPath($dom),
                'renderer' => 'php84-html5'
            ];
        }
        else
        {
            $html5 = new HTML5(
                ['disable_html_ns' => true]
            );
            $dom = $html5->loadHTML($html);

            $ownerDocument = [
                'html5' => $html5,
                'dom' => $dom,
                'xpath' => new \DOMXPath($dom),
                'renderer' => 'legacy'
            ];
        }

        return $ownerDocument;
    }

    public function setInnerHtml($class, object $replace)
    {
        $this->domman->selector($class)->html->setInner($replace());
    }

    public function insertBefore($class, object $replace)
    {
        $this->domman->selector($class)->html->before($replace());
    }

    public function insertAfter($class, object $replace)
    {
        $this->domman->selector($class)->html->after($replace());
    }

    public function append($class, object $replace)
    {
        $this->domman->selector($class)->html->append($replace());
    }

    public function prepend($class, object $replace)
    {
        $this->domman->selector($class)->html->prepend($replace());
    }

    public function remove($class)
    {
        $this->domman->selector($class)->html->remove();
    }

    public function setAttribute($class, $attribute = [])
    {
        $this->domman->selector($class)->attribute->set($attribute);
    }

    public function getAttribute($class, $attributeName = [])
    {
        return $this->domman->selector($class)->attribute->get($attributeName);
    }

    public function removeAttribute($class, $attribute)
    {
        $this->domman->selector($class)->attribute->remove($attribute);
    }

    public function hasAttribute($class, $attributeName)
    {
        return $this->domman->selector($class)->attribute->has($attributeName);
    }

    public function replaceWith($class, object $replace)
    {
        $this->domman->selector($class)->html->replaceWith($replace());
    }

    public function addClass($class, $newClass)
    {
        $this->domman->selector($class)->class->add($newClass);
    }

    public function removeClass($class, $removeClass)
    {
        $this->domman->selector($class)->class->add($removeClass);
    }

    public function setStyle($class, $value)
    {
        $this->domman->selector($class)->style->set($value);
    }

    public function hasClass($class, $name)
    {
        return $this->domman->selector($class)->class->has($name);
    }

    public function getInnerHtml($class)
    {
        return $this->domman->selector($class)->html->get();
    }

    public function isTemplate($name)
    {
        if ($this->hasAttribute('{hook:htmlbody}', 'data-template'))
        {
            if ($this->getAttribute('{hook:htmlbody}', ['data-template'])['template'] == $name)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        return false;
    }

    public function getDiscussion(callable $func)
    {
        $discussion = $this->getAttribute('{hook:discussionfirstpost}', ['data-discussion-id', 'data-user-id']);

        if (isset($discussion['discussion_id']) && isset($discussion['user_id']))
        {
            return $func(
                new DiscussionHook(
                    $discussion['discussion_id'],
                    $discussion['user_id']
                )
            );
        }
        else
        {
            throw new \Exception('DiscussionId or UserId could not be defined.');
        }
    }

    public function getFaq()
    {
        return new FaqHook($this);
    }

    public function getFeature()
    {
        return $this->feature;
    }

    public function addStyle($path)
    {
        return $this->insertAfter('{hook:docstyle}', function () use ($path)
        {
            return "\r\n<link rel=\"stylesheet\" href=\"" . \App\SubContainer\AppSub::getPublicDir() . "/{$path}\" />\r\n";
        });
    }

    public function addScript($path)
    {
        return $this->insertBefore('{hook:docscript}', function () use ($path)
        {
            return "\r\n<script type=\"text/javascript\" src=\"" . \App\SubContainer\AppSub::getPublicDir() . "/{$path}\"></script>\r\n\r\n";
        });
    }

    public function __toString()
    {
        return $this->html;
    }

    /**
     * htmltoTemplate
     *
     * @param array{html5: \Masterminds\HTML5, dom: \Dom\Document|\DOMDocument, xpath: \Dom\XPath|\DOMXPath, renderer: string} $ownerDocument
     * @return string
     */
    public function htmltoTemplate(array $ownerDocument)
    {
        if (!is_null($ownerDocument['html5']) && $ownerDocument['html5'] instanceof HTML5)
        {
            $this->domman->selector("{hook:head}")->html->addWhitespace();

            $this->removeAttribute('{hook:head}', 'hook-meta-exclude');
            $this->removeAttribute('{hook:head}', 'hook-action');
            $this->remove('{hook:metacontents}');

            $content = $ownerDocument['html5']->saveHTML($ownerDocument['dom']);
        }
        else
        {
            $this->domman->selector("{hook:htmldoc}, {hook:head}")->html->addWhitespace();
            $this->domman->selector("{hook:htmlbody}")->html->addWhitespace('after');

            $this->removeAttribute('{hook:head}', 'hook-meta-exclude');
            $this->removeAttribute('{hook:head}', 'hook-action');
            $this->remove('{hook:metacontents}');

            if (is_null($ownerDocument['dom']->doctype))
            {
                $content = $this->domman->addDoctype() . $ownerDocument['dom']->saveHTML();
            }
            else
            {
                $content = $ownerDocument['dom']->saveHTML();
            }
        }

        $content = preg_replace_callback($this->domman->insertTemplate['dom']['pattern'], function ($matches)
        {
            return "\r\n\t{$matches[1]}";
        }, $content);

        $content = preg_replace_callback($this->domman->insertTemplate['whitespace']['pattern'], function ($matches)
        {
            return str_repeat("\r\n", $matches[1]);
        }, $content);

        return $content;
    }

    private function addDispatch($container)
    {
        $dispatcher = $container->dispatcher;

        $container = \App\Repository\Set::setObject([
            'dom' => $this,
            'routing' => $container->routing,
            'phrase' => $container->phrase,
            'settings' => $container->settings,
            'user' => $container->user,
            'request' => $container->request,
            'lang' => $container->lang,
            'language' => $container->language,
            'loader' => $container->loader,
            'template' => $container->template->excludeTemplates()
        ]);

        $eventListener = \App\Repository\Config\Schema::eventInitialize();
        foreach ($eventListener as $event)
        {
            if (isset($event->application))
            {
                $parameters = explode(
                    '::',
                    $event->application->start
                );

                $event_class = new $parameters[0];
                $function = $parameters[1];

                $event_class->{$function}($event);

                if (isset($event->application->editable) && isset($event->name))
                {
                    $container->loader->addPath(APPLICATION_SELF . "/Addons/{$event->name}/{$event->application->editable}", \mb_strtolower("addon:{$event->name}"));
                }

                $dispatcher->dispatch(
                    (new $event_class())->getEvent($container),
                    "_templateInit_Dispatcher_{$event->event_id}"
                );
            }
        }
    }
}
