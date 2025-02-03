<?php

namespace App\Template\Twig\Token\DomEvent;

class Node extends \Twig\Node\Node
{
    public function __construct($withElements, $name, $tag, \Twig\Node\Node $body, $line)
    {
        parent::__construct(
            ['body' => $body],
            [
                'withElements' => $withElements,
                'name' => $name,
                'tag' => $tag
            ],
            $line
        );
    }

    public function compile(\Twig\Compiler $compiler)
    {
        if ($this->getAttribute('withElements'))
        {
            $tag = $this->parseTagsAndClassIds();

            $compiler->addDebugInfo($this)
                ->write('yield "\r\n<' . $tag . ' hook-action=\"{Mention:App-domEvent-' . $this->getAttribute('name') . '}\">\r\n"')
                ->raw(";")
                ->subcompile($this->getNode('body'))
                ->write('yield "</' . $tag . '>\r\n"')
                ->raw(";");
        }
        else
        {
            $compiler->addDebugInfo($this)
                ->write('yield ')
                ->subcompile($this->getNode('body'))
                ->raw(";");
        }
    }

    public function parseTagsAndClassIds()
    {
        $tag = $this->getAttribute('tag');
        if (preg_match('/\.|\#/', $tag, $matchTag))
        {
            preg_match('/([a-zA-Z-_0-9]+)(?P<class>(?=\.).*)?(?P<id>(?=\#).*)?/', $tag, $splitTagWithClassesOrIds);
            $tag = $splitTagWithClassesOrIds[1];

            $id = '';
            if (
                isset($splitTagWithClassesOrIds['id'])
                && (mb_strlen($splitTagWithClassesOrIds['id']) > 0)
            )
            {
                $id = ' id=\"' . trim(ltrim($splitTagWithClassesOrIds['id'], '#')) . '\"';
            }

            $class = '';
            if (
                isset($splitTagWithClassesOrIds['class'])
                && (mb_strlen($splitTagWithClassesOrIds['class']) > 0)
            )
            {
                $classes = implode(
                    ' ',
                    explode(',', $splitTagWithClassesOrIds['class'])
                );
                $class = ' class=\"' . trim(ltrim($classes, '.')) . '\"';
            }

            $tag = $tag . $class . $id;
        }

        return $tag;
    }
}
