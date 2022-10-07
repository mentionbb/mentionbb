<?php

namespace App\Renderer;

use App\Renderer\BBCode\Str\CensorWords;

class Title
{
    public static function Render($content)
    {
        $content = CensorWords::Render($content);

        return $content;
    }
}
