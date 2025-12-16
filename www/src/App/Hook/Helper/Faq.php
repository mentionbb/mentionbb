<?php

namespace App\Hook\Helper;

class Faq
{
    protected $dom;

    public function __construct($dom)
    {
        $this->dom = $dom;
    }

    public function changeTerms($html)
    {
        if ($this->dom->isTemplate('faq'))
        {
            return $this->dom->setInnerHtml('.tab-content.terms > .app-box > .app-content', function () use ($html)
            {
                return $html;
            });
        }
    }

    public function changeResourceStandarts($html)
    {
        if ($this->dom->isTemplate('faq'))
        {
            return $this->dom->setInnerHtml('.tab-content.resource-standarts > .app-box > .app-content', function () use ($html)
            {
                return $html;
            });
        }
    }
}
