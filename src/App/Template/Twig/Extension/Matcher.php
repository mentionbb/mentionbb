<?php

/**
 * Plugin developed by ParantezTech for ParFramework2.
 */

namespace App\Template\Twig\Extension;

class Matcher extends \Twig\Extension\AbstractExtension
{
    public function getFilters()
    {
        return [
            new \Twig\TwigFilter('match', [$this, 'pregMatch']),
        ];
    }

    public function pregMatch($data, $pattern)
    {
        if (preg_match($pattern, $data, $matches))
        {
            return $matches;
        }
    }
}
