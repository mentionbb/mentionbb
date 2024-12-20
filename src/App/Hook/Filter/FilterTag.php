<?php

namespace App\Hook\Filter;

use App\Hook\DomManipulation\DomManipulation;

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
    public static function filterSingleTags($content): string
    {
        $content = self::filterNonBooleanAttr($content);

        $content = preg_replace('/<(br|hr)>/si', '<$1 />', $content);
        $content = preg_replace('/<img(.*?)>/si', '<img$1 />', $content);

        return $content;
    }

    /**
     * filterNonBooleanAttr
     *
     * Attributes without values/booleans ​​like [disabled], [selected], [required] cause problems in rendering. This method fixes this permanently.
     * 
     * @param mixed $html
     * @param \App\Hook\Html $dom
     * @return string
     */
    protected static function filterNonBooleanAttr($html): string
    {
        $ownerDocument = \App\Hook\Html::loadHTML($html);

        $domman = new DomManipulation($ownerDocument);
        $domman->selector('[disabled], [selected], [required]');

        $nodes = $domman->getNodes();

        /** @var \DOMElement|\Dom\Element $node */
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

        if (!is_null($ownerDocument['html5']) && $ownerDocument['html5'] instanceof \Masterminds\HTML5)
        {
            $content = $ownerDocument['html5']->saveHTML($ownerDocument['dom']);
        }
        else
        {
            $content = $ownerDocument['dom']->saveHTML();
        }

        $content = preg_replace('/<meta(.*?)>/si', '<meta$1></meta>', $content);
        $content = preg_replace('/<link(.*?)>/si', '<link$1></link>', $content);

        $content = str_replace(
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
            $content
        );

        $content = str_replace(
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
            $content
        );

        return $content;
    }
}
