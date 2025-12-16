<?php

/**
 * Plugin developed by ParantezTech for ParFramework2.
 */

namespace App\Template\Twig\Extension;

class Bytes extends \Twig\Extension\AbstractExtension
{    
    /**
     * getFilters
     *
     * @return \Twig\TwigFilter[]
     */
    public function getFilters()
    {
        return [
            new \Twig\TwigFilter('toByte', [$this, 'toByte']),
            new \Twig\TwigFilter('formatBytes', [$this, 'formatBytes'])
        ];
    }

    public function toByte(string $size)
    {
        return \App\SubContainer\Bytes::convertToBytes($size);
    }

    public function formatBytes(int $byte)
    {
        return \App\SubContainer\Bytes::formatBytes($byte);
    }
}
