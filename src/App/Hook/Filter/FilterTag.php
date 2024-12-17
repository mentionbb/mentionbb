<?php

namespace App\Hook\Filter;

class FilterTag
{
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
     * @param  mixed $dom
     * @return string
     */
    protected static function filterNonBooleanAttr($html, \App\Hook\Html $dom): string
    {
        $html = $dom->loadHTML($html);
        $doc = $html['dom'];

        $nodes = $html['xpath']->query(
            $dom->queryBuilder('[disabled], [selected], [required]')
        );
        foreach ($nodes as $node)
        {
            if ($node->hasAttribute('disabled'))
            {
                $node->removeAttribute('disabled');
                $node->setAttribute('non-boolean-attr-541', 'disabled');
            }
            else if ($node->hasAttribute('selected'))
            {
                $node->removeAttribute('selected');
                $node->setAttribute('non-boolean-attr-233', 'selected');
            }
            if ($node->hasAttribute('required'))
            {
                $node->removeAttribute('required');
                $node->setAttribute('non-boolean-attr-796', 'required');
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

        $html = str_replace(
            [
                'non-boolean-attr-541',
                'non-boolean-attr-233',
                'non-boolean-attr-796'
            ],
            [
                'disabled',
                'selected',
                'required'
            ],
            $html
        );

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
