<?php

namespace App\Renderer\BBCode\Editor;

use App\Renderer\BBCode\Editor\Parser;

class Editor
{
    public static function Render($content)
    {
        return (new Parser())->Parse($content);
    }
}
