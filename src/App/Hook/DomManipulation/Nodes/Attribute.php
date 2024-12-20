<?php

namespace App\Hook\DomManipulation\Nodes;

use App\Hook\DomManipulation\DomManipulation;

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

class Attribute
{
    /** @var DomManipulation $domman */
    private $domman;

    /** @var Node|NodeList|Element|Attr|DOMNode|DOMNodeList|DOMElement|DOMAttr $nodes */
    private $nodes;

    /**
     * These classes do not defined to Intelephense yet: \DOM\Node|\DOM\NodeList|\DOM\Element|\DOM\Attr
     * 
     * @disregard P1009 Undefined type
     */
    public function addDocument(DomManipulation $domman)
    {
        $this->domman = $domman;
        $this->nodes = $domman->getNodes();

        return $this;
    }

    public function set(array $attr = [])
    {
        /** @var \DOMElement|\Dom\Element $node */
        foreach ($this->nodes as $node)
        {
            $node->setAttribute($attr[0], $attr[1]);
        }
    }

    public function get(array $attrNames = [])
    {
        $attr = [];

        /** @var \DOMElement|\Dom\Element $node */
        foreach ($this->nodes as $node)
        {
            foreach ($attrNames as $attrName)
            {
                $attrStr = str_replace(['data-', '-'], ['', '_'], $attrName);
                $attr[$attrStr] = $node->getAttribute($attrName);
            }
        }

        return $attr;
    }

    public function remove($attrName)
    {
        /** @var \DOMElement|\Dom\Element $node */
        foreach ($this->nodes as $node)
        {
            if ($node->hasAttribute($attrName))
            {
                $node->removeAttribute($attrName);
            }
        }
    }

    public function has($attrName)
    {
        /** @var \DOMElement|\Dom\Element $node */
        foreach ($this->nodes as $node)
        {
            if ($node->hasAttribute($attrName))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }
}
