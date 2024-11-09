<?php

namespace App\Hook;

use App\Hook\Helper\Discussion as DiscussionHook;
use App\Hook\Helper\Faq as FaqHook;
use App\Hook\Helper\Feature;
use App\Hook\Filter\FilterTag;

use Masterminds\HTML5;

use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\CssSelector\CssSelectorConverter;

class Html
{
    public $name;
    public $dom;

    protected $html5;
    protected $html;
    protected $feature;

    public function __construct($name, $html, $container = null)
    {
        $this->name = $name;
        $this->feature = new Feature($this);

        $this->html5 = new HTML5();
        $this->dom = $this->html5->loadHTML($html);

        if (!is_null($container))
        {
            $this->addDispatch($container);
        }

        $this->html = $this->htmltoTemplate(
            $this->html5->saveHTML($this->dom)
        );
    }

    public function setInnerHtml($class, object $replace)
    {
        $nodes = $this->getXPath($class);
        foreach ($nodes as $node)
        {
            while ($node->childNodes->length)
            {
                $node->removeChild($node->firstChild);
            }
            $fragment = $this->dom->createDocumentFragment();
            $fragment->appendXML(FilterTag::filterSingleTags($replace()));
            $node->appendChild($fragment);
        }
    }

    public function insertBefore($class, object $replace)
    {
        $nodes = $this->getXPath($class);
        foreach ($nodes as $node)
        {
            $fragment = $this->dom->createDocumentFragment();
            $fragment->appendXML(FilterTag::filterSingleTags($replace()));
            $node->parentNode->insertBefore($fragment, $node);
        }
    }

    public function insertAfter($class, object $replace)
    {
        $nodes = $this->getXPath($class);
        foreach ($nodes as $node)
        {
            $fragment = $this->dom->createDocumentFragment();
            $fragment->appendXML(FilterTag::filterSingleTags($replace()));
            $node->parentNode->insertBefore($fragment, $node->nextSibling);
        }
    }

    public function append($class, object $replace)
    {
        $nodes = $this->getXPath($class);
        foreach ($nodes as $node)
        {
            $fragment = $this->dom->createDocumentFragment();
            $fragment->appendXML(FilterTag::filterSingleTags($replace()));
            $node->appendChild($fragment);
        }
    }

    public function prepend($class, object $replace)
    {
        $nodes = $this->getXPath($class);
        foreach ($nodes as $node)
        {
            $fragment = $this->dom->createDocumentFragment();
            $fragment->appendXML(FilterTag::filterSingleTags($replace()));
            $node->insertBefore($fragment, $node->firstChild);
        }
    }

    public function remove($class)
    {
        $nodes = $this->getXPath($class);
        foreach ($nodes as $node)
        {
            $node->parentNode->removeChild($node);
        }
    }

    public function setAttribute($class, $attribute = [])
    {
        $nodes = $this->getXPath($class);
        
        /** @var \DOMElement $node */
        foreach ($nodes as $node)
        {
            $node->setAttribute($attribute[0], $attribute[1]);
        }
    }

    public function getAttribute($class, $attributeName = [])
    {
        $nodes = $this->getXPath($class);
        $attr = [];
        
        /** @var \DOMElement $node */
        foreach ($nodes as $node)
        {
            foreach ($attributeName as $attrName)
            {
                $attrStr = str_replace(['data-', '-'], ['', '_'], $attrName);
                $attr[$attrStr] = $node->getAttribute($attrName);
            }
        }

        return $attr;
    }

    public function removeAttribute($class, $attribute)
    {
        $nodes = $this->getXPath($class);
        
        /** @var \DOMElement $node */
        foreach ($nodes as $node)
        {
            if ($node->hasAttribute($attribute))
            {
                $node->removeAttribute($attribute);
            }
        }
    }

    public function hasAttribute($class, $attributeName)
    {
        $nodes = $this->getXPath($class);
        
        /** @var \DOMElement $node */
        foreach ($nodes as $node)
        {
            if ($node->hasAttribute($attributeName))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }

    public function replaceWith($class, object $replace)
    {
        $nodes = $this->getXPath($class);
        foreach ($nodes as $node)
        {
            $fragment = $this->dom->createDocumentFragment();
            $fragment->appendXML(FilterTag::filterSingleTags($replace()));
            $node->parentNode->replaceChild($fragment, $node);
        }
    }

    public function addClass($class, $newClass)
    {
        $nodes = $this->getXPath($class);
        
        /** @var \DOMElement $node */
        foreach ($nodes as $node)
        {
            foreach ($node->attributes as $attribute)
            {
                $attrs[$node->nodeName] = $attribute->nodeValue;
            }

            if (!isset($attrs))
            {
                $node->setAttribute('class', $newClass);
            }
            else
            {
                foreach ($attrs as $attr)
                {
                    $node->setAttribute('class', "{$attr} {$newClass}");
                }
            }
        }
    }

    public function removeClass($class, $removeClass)
    {
        if (preg_match('/\./', $removeClass, $matchCorrectClass))
        {
            throw new \Exception('There should be no dots in the deleted class.');
        }

        $nodes = $this->getXPath($class);
        
        /** @var \DOMElement $node */
        foreach ($nodes as $node)
        {
            foreach ($node->attributes as $attribute)
            {
                $attrs[$node->nodeName] = $attribute->nodeValue;
            }

            foreach ($attrs as $attr)
            {
                $pos = strpos($attr, $removeClass);
                if ($pos !== false)
                {
                    $attr = substr_replace($attr, "", $pos, \mb_strlen($removeClass));
                }
                $attr = trim($attr);

                $node->setAttribute('class', $attr);

                if (!$node->getAttribute('class'))
                {
                    $node->removeAttribute('class');
                }
            }
        }
    }

    public function setStyle($class, $value)
    {
        $nodes = $this->getXPath($class);
        
        /** @var \DOMElement $node */
        foreach ($nodes as $node)
        {
            $node->setAttribute('style', $value);
        }
    }

    public function hasClass($name)
    {
        if (!preg_match('/\./', $name, $matchCorrectClass))
        {
            $name = ".{$name}";
        }

        $nodes = $this->getXPath($name);
        foreach ($nodes as $node)
        {
            foreach ($node->attributes as $attribute)
            {
                $attrs[$node->nodeName] = $attribute->nodeValue;
            }

            $name = ltrim($name, '.');
            $name = ltrim($name);
            if (in_array($name, $attrs))
            {
                return true;
            }
        }

        return false;
    }

    public function getInnerHtml($class)
    {
        $html = '';

        $nodes = $this->getXPath($class);
        foreach ($nodes as $node)
        {
            $html .= $this->html5->saveHtml($node);
        }

        return $this->get($html);
    }

    public function get($html)
    {
        return new Crawler($html);
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

    public function saveHtml()
    {
        return $this->dom->saveHTML($this->dom->documentElement);
    }

    public function getXPath($class): \DOMNode|\DOMNodeList|\DOMElement|\DOMAttr
    {
        $class = preg_replace_callback('/\{hook:([a-zA-Z0-9-_]+)\}/', function ($matches)
        {
            return $this->getHook($matches[1]);
        }, $class);

        $xpath = new \DOMXPath($this->dom);

        /** @var \DOMElement $nodes */
        $nodes = $xpath->query($this->queryBuilder($class));

        return $nodes;
    }

    public function queryBuilder($query)
    {
        if (preg_match('/\/\/|\/|\@/', $query, $matchXPath))
        {
            return $query;
        }
        else
        {
            return (new CssSelectorConverter())->toXPath($query);
        }
    }

    public function __toString()
    {
        return $this->html;
    }

    protected function htmltoTemplate($content)
    {
        $content = str_replace(
            ['<head>'],
            ["\r\n<head>"],
            $content
        );

        return $content;
    }

    protected function getHook($domEventName)
    {
        return "[hook-action=\"{Mention:App-domEvent-{$domEventName}}\"]";
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
