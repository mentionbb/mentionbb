<?php

/**
 * Plugin developed by ParantezTech for ParFramework2.
 */

namespace App\Template\Twig\Extension;

class Basename extends \Twig\Extension\AbstractExtension
{
    public function getFilters()
    {
        return [
            new \Twig\TwigFilter('basename', [$this, 'BasenameExtension']),
        ];
    }

    public function BasenameExtension($string, $withoutExtension = false): string
    {
        if (!$withoutExtension)
        {
            return basename($string);
        }

        return preg_replace('/\.[^.]+$/', '', basename($string));
    }
}
