<?php

namespace App\SubContainer\Theme;

use App\SubContainer\Theme\CssSchema;

class Attributes
{
    protected $attribute;

    public function __construct($settings)
    {
        $cssSchema = new CssSchema($settings);

        $this->attribute = [
            'variables' => $cssSchema->getVariablesFromSchema()
        ];
    }

    public function getThemeColor(): array
    {
        if ($this->isNightMode())
        {
            return [
                'theme_color' => $this->getAttribute('variables')['body.app-night-mode']['--mention-meta-color'],
                'bg_color' => $this->getAttribute('variables')['body.app-night-mode']['--mention-doc-bg-color']
            ];
        }

        return [
            'theme_color' => $this->getAttribute('variables')[':root']['--mention-meta-color'],
            'bg_color' => $this->getAttribute('variables')[':root']['--mention-doc-bg-color']
        ];
    }

    public function isNightMode(): bool
    {
        if (isset($_COOKIE['night_mode']))
        {
            return true;
        }

        return false;
    }

    public function getAttribute($attr): array
    {
        return $this->attribute[$attr];
    }
}
