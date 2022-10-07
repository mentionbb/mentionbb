<?php

/**
 * Plugin developed by ParantezTech for ParFramework2.
 */

namespace App\Template\Twig\Extension;

class Json extends \Twig\Extension\AbstractExtension
{
    public function getFilters()
    {
        return [
            new \Twig\TwigFilter('json_decode', [$this, 'jsonDecodeExtension'])
        ];
    }

    public function jsonDecodeExtension($data)
    {
        return json_decode($data, true);
    }
}
