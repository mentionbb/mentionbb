<?php

namespace App\Renderer\BBCode\Editor;

use App\Renderer\BBCode\ProcessTags;
use App\Renderer\BBCode\Html\LineBreaks;
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

        $this->tagList->setCallback('heading', false);
        foreach ($this->tagList->getTagList() as $finalList)
        {
            if (!is_null($finalList['editorModification']) && !$finalList['callback'])
            {
                $s = preg_replace("/{$finalList['bbCode']}/is", $finalList['editorModification'], $s);
            }
        }

        $s = $this->tagList->addTagCallback([
            'name' => 'img',
            'callback' => [$this, 'imgTag', $s]
        ]);

        $s = $this->tagList->addTagCallback([
            'name' => 'list',
            'callback' => [$this, 'listTag', $s]
        ]);

        $this->tagList->setCallback('code');
        $s = $this->tagList->addTagCallback([
            'name' => 'code',
            'callback' => [$this, 'codeTag', $s]
        ]);

        $s = preg_replace('/\r\n/', '<br />', $s);
        $s = preg_replace('/<\/(ol|ul|code|pre|p|h(?:[0-9]+))>\s*<br\s?(\/)?>/si', '</$1>', $s);

        return $s;
    }

    public function imgTag($options, $string)
    {
        return preg_replace_callback("/{$options['bbCode']}/si", function ($matches)
        {
            return preg_replace_callback("/(.*?)\:([0-9]+)\:([0-9]+)/", function ($img) use ($matches)
            {
                $imgData = [
                    'title' => $img[1],
                    'width' => $img[2],
                    'height' => $img[3]
                ];

                return "<img src=\"{$matches[2]}\" alt=\"{$imgData['title']}\" width=\"{$imgData['width']}\" height=\"{$imgData['height']}\" />";
            }, $matches[1]);
        }, $string);
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
            return "<pre class=\"language-{$matches[1]}\"><code class=\"language-{$matches[1]}\">" . (new \Laminas\Escaper\Escaper('utf-8'))->escapeHtml($matches[2]) . "</code></pre>";
        }, $string);
    }
}
