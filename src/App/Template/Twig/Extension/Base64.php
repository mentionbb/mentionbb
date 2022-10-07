<?php

/**
 * Plugin developed by ParantezTech for ParFramework2.
 */

namespace App\Template\Twig\Extension;

class Base64 extends \Twig\Extension\AbstractExtension
{
    public function getFilters()
    {
        return [
            new \Twig\TwigFilter('base64_encode', [$this, 'Base64EncodeExtension']),
            new \Twig\TwigFilter('base64_decode', [$this, 'Base64DecodeExtension'])
        ];
    }

    public function Base64EncodeExtension($string): string
    {
        return base64_encode($string);
    }

    public function Base64DecodeExtension($string): string
    {
        return base64_decode($string);
    }
}
