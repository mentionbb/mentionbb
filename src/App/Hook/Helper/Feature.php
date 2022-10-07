<?php

namespace App\Hook\Helper;

class Feature
{
    protected $dom;

    public function __construct(\App\Hook\Html $dom)
    {
        $this->dom = $dom;
    }

    public function addMetadata(callable $func)
    {
        $html = $this->dom->prepend('[hook-action="{Mention:App-domEvent-head}"]', function () use ($func)
        {
            $output = '';
            foreach ($func() as $metadata)
            {
                $output .= $this->addLine() . \voku\helper\UTF8::cleanup($metadata);
            }

            return $output;
        });

        return $html;
    }

    protected function addLine(): string
    {
        return "\r\n";
    }
}
