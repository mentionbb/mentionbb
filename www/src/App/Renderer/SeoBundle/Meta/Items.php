<?php

namespace App\Renderer\SeoBundle\Meta;

use App\Renderer\SeoBundle\Meta\RenderHtml;

class Items
{
    public static function Render()
    {
        return (new RenderHtml())->getHtml();
    }
}
