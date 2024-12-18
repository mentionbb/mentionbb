<?php

namespace App\Hook\Filter;

class FilterTag
{
    private static $nonBooleanAttrs = [
        'disabled' => 541,
        'selected' => 233,
        'required' => 796,
        'checked' => 603
    ];
    
    /**
     * filterSingleTags
     * 
     * Fix specification mandate value for attribute required.
     *
     * @param  mixed $content
     * @return string
     */
    public static function filterSingleTags($content, \App\Hook\Html $dom): string
    {
        $content = self::filterNonBooleanAttr($content, $dom);

        $content = preg_replace('/<(br|hr)>/si', '<$1 />', $content);
        $content = preg_replace('/<img(.*?)>/si', '<img$1 />', $content);

        return $content;
    }
    
    /**
     * filterNonBooleanAttr
     *
     * Attributes without values/booleans ​​like [disabled], [selected], [required] cause problems in rendering. This method fixes this permanently.
     * 
     * @param  mixed $html
     * @param  \App\Hook\Html $dom
     * @return string
     */
    protected static function filterNonBooleanAttr($html, \App\Hook\Html $dom): string
    {
        $html = $dom->loadHTML($html);
        $doc = $html['dom'];

        $attrs = [];
        foreach (self::$nonBooleanAttrs as $attr => $id)
        {
            $attrs[] = "[$attr]";
        }

        $nodes = $html['xpath']->query(
            $dom->queryBuilder(implode(',', $attrs))
        );

        foreach (self::$nonBooleanAttrs as $attr => $id)
        {
            /** @var \DOMElement|\Dom\Element $node */
            foreach ($nodes as $node)
            {
                if ($node->hasAttribute($attr) && $node->getAttribute($attr) !== $attr)
                {
                    $node->removeAttribute($attr);
                    $node->setAttribute("non-boolean-attr-{$id}", $attr);
                }
            }
        }

        if ($doc !== $html['html5']['doc'])
        {
            $html = $doc->saveHTML($html['dom']);
        }
        else
        {
            $html = $doc->saveHTML();

            $html = preg_replace('/<meta(.*?)>/si', '<meta$1></meta>', $html);
            $html = preg_replace('/<link(.*?)>/si', '<link$1></link>', $html);
        }

        foreach (self::$nonBooleanAttrs as $attr => $id)
        {
            $html = str_replace("non-boolean-attr-{$id}", $attr, $html);
        }

        $html = str_replace(
            [
                '<!DOCTYPE html>',
                '<html xmlns="http://www.w3.org/1999/xhtml">',
                '<html>',
                '</html>',
                '<head>',
                '</head>',
                '<body>',
                '</body>'
            ],
            [""],
            $html
        );

        return $html;
    }
}
