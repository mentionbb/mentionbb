<?php

namespace App\Hook\DomManipulation\Nodes;

use App\Hook\DomManipulation\DomManipulation;

abstract class AbstractNode
{
    /** @var DomManipulation $domman */
    protected $domman;

    /** @var Node|NodeList|Element|Attr|DOMNode|DOMNodeList|DOMElement|DOMAttr $nodes */
    protected $nodes;

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
}
