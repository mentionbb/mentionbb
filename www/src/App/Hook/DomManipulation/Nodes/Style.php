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

class Style extends AbstractNode
{
    public function set($data)
    {
        /** @var \DOMElement|\Dom\Element $node */
        foreach ($this->nodes as $node)
        {
            $node->setAttribute('style', $data);
        }
    }
}
