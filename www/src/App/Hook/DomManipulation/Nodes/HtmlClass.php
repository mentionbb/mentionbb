<?php

namespace App\Hook\DomManipulation\Nodes;

use App\Hook\DomManipulation\Nodes\AbstractNode;

use Dom\HTMLDocument;
use Dom\Node;
use Dom\NodeList;
use Dom\Element;
use Dom\Attr;

use DOMDocument;
use DOMNode;
use DOMNodeList;
use DOMElement;
use DOMAttr;

class HtmlClass extends AbstractNode
{
    public function add($newClass)
    {
        /** @var \DOMElement|\Dom\Element $node */
        foreach ($this->nodes as $node)
        {
            foreach ($node->attributes as $attribute)
            {
                $attrs[$node->nodeName] = $attribute->nodeValue;
            }

            if (!isset($attrs))
            {
                $node->setAttribute('class', $newClass);
            }
            else
            {
                foreach ($attrs as $attr)
                {
                    $node->setAttribute('class', "{$attr} {$newClass}");
                }
            }
        }
    }

    public function remove($removeClass)
    {
        if (preg_match('/\./', $removeClass, $matchCorrectClass))
        {
            throw new \Exception('There should be no dots in the deleted class.');
        }

        /** @var \DOMElement|\Dom\Element $node */
        foreach ($this->nodes as $node)
        {
            foreach ($node->attributes as $attribute)
            {
                $attrs[$node->nodeName] = $attribute->nodeValue;
            }

            foreach ($attrs as $attr)
            {
                $pos = strpos($attr, $removeClass);
                if ($pos !== false)
                {
                    $attr = substr_replace($attr, "", $pos, \mb_strlen($removeClass));
                }
                $attr = trim($attr);

                $node->setAttribute('class', $attr);

                if (!$node->getAttribute('class'))
                {
                    $node->removeAttribute('class');
                }
            }
        }
    }

    public function has($name)
    {
        if (!preg_match('/\./', $name, $matchCorrectClass))
        {
            $name = ".{$name}";
        }

        foreach ($this->nodes as $node)
        {
            foreach ($node->attributes as $attribute)
            {
                $attrs[$node->nodeName] = $attribute->nodeValue;
            }

            $name = ltrim($name, '.');
            $name = ltrim($name);
            if (in_array($name, $attrs))
            {
                return true;
            }
        }

        return false;
    }
}
