<?php

namespace App\Renderer\BBCode\Editor;

use App\Renderer\BBCode\ProcessTags;
use App\Renderer\BBCode\Html\ProcessListItems;

class Parser
{
    private $tagList;

    public function __construct()
    {
        $this->tagList = new ProcessTags();
    }

    public function Parse($string)
    {
        $s = (string) $string;

        $s = $this->tagList->addTagCallback([
            'name' => 'list',
            'callback' => [$this, 'listTag', $s]
        ]);

        $this->tagList->setCallback('code');
        $s = $this->tagList->addTagCallback([
            'name' => 'code',
            'callback' => [$this, 'codeTag', $s]
        ]);

        return $s;
    }

    public function listTag($options, $string)
    {
        return preg_replace_callback("/{$options['bbCode']}/si", function ($matches)
        {
            if ($matches[1] == 'disc')
            {
                $tag = 'ul';
            }
            else if ($matches[1] == 'decimal')
            {
                $tag = 'ol';
            }
            else
            {
                $tag = 'ul';
            }

            return "<{$tag}>\n" . ProcessListItems::Process($matches[2]) . "\n</{$tag}>";
        }, $string);
    }

    public function codeTag($options, $string)
    {
        return preg_replace_callback("/{$options['bbCode']}/si", function ($matches)
        {
            return "[code={$matches[1]}]" . (new \Laminas\Escaper\Escaper('utf-8'))->escapeHtml($matches[2]) . "[/code]";
        }, $string);
    }
}
