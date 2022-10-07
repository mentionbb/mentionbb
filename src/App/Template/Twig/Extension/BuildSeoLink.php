<?php

/**
 * Plugin developed by ParantezTech for ParFramework2.
 */

namespace App\Template\Twig\Extension;

class BuildSeoLink extends \Twig\Extension\AbstractExtension
{
    public function getFilters()
    {
        return [
            new \Twig\TwigFilter('buildSeoLink', [$this, 'BuildSeoLinkExtension']),
        ];
    }

    public function BuildSeoLinkExtension($string): string
    {
        return \App\Phrase::buildSeoLink($string);
    }
}
