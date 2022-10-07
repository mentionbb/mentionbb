<?php

namespace App\Renderer\SeoBundle;

class Title
{
    protected $htmlTemplate = "<title>{title}</title>";

    public function getHtml(): array
    {
        return [
            'siteTitle' => [
                'title' => $this->htmlTemplate
            ]
        ];
    }
}
