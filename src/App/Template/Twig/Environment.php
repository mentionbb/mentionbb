<?php

namespace App\Template\Twig;

use Twig\Environment as TwigEnvironment;

class Environment extends TwigEnvironment
{
    protected $container;
    protected $excludeThisTemplate = false;

    public function setDispatcher($container = [])
    {
        $this->container = \App\Repository\Set::setObject($container);
    }

    public function render($name, array $context = [], array $disallowTemplatesExtra = []): string
    {
        $name = preg_replace_callback('/\{addon:([a-zA-Z0-9]+)\}/', function ($matches)
        {
            return "@addon:{$matches[1]}";
        }, $name);

        $template = $this->load($name)->render($context);

        $disallowTemplates = [
            'updateContent.tpl'
        ];

        $disallowTemplates = array_merge($disallowTemplates, $disallowTemplatesExtra);

        if (\App\Util\Html::isHtml($template) && !$this->excludeThisTemplate)
        {
            if (!in_array($name, $disallowTemplates))
            {
                return new \App\Hook\Html(
                    $name,
                    $template,
                    $this->container
                );
            }
            else
            {
                return $template;
            }
        }
        else
        {
            if (\mb_strlen($template) < 1)
            {
                return ' ';
            }

            return $template;
        }
    }

    public function excludeTemplates()
    {
        $this->excludeThisTemplate = true;

        return $this;
    }
}
