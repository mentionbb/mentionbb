<?php

namespace App\Template\Twig\Extension;

class NumberFormat extends \Twig\Extension\AbstractExtension
{
    public function getFilters()
    {
        return [
            new \Twig\TwigFilter('numberFormatShorter', [$this, 'NumberFormatShorter']),
        ];
    }

    public function NumberFormatShorter($number)
    {
        return \App\SubContainer\NumberFormat::numberFormat($number);
    }
}
