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

class Html extends AbstractNode
{
    public function setInner(string $data)
    {
        foreach ($this->nodes as $node)
        {
            while ($node->childNodes->length)
            {
                $node->removeChild($node->firstChild);
            }

            $node->appendChild(
                $this->domman->insertHtml($data)
            );
        }
    }

    public function get()
    {
        $html = '';

        foreach ($this->nodes as $node)
        {
            $html .= $this->domman->dom->saveHtml($node);
        }

        return $this->domman->getCrawler($html);
    }

    public function replaceWith(string $data)
    {
        foreach ($this->nodes as $node)
        {
            $node->parentNode->replaceChild(
                $this->domman->insertHtml($data),
                $node
            );
        }
    }

    public function before(string $data)
    {
        foreach ($this->nodes as $node)
        {
            $node->parentNode->insertBefore(
                $this->domman->insertHtml($data),
                $node
            );
        }
    }

    public function after(string $data)
    {
        foreach ($this->nodes as $node)
        {
            $node->parentNode->insertBefore(
                $this->domman->insertHtml($data),
                $node->nextSibling
            );
        }
    }

    public function append(string $data)
    {
        foreach ($this->nodes as $node)
        {
            $node->appendChild(
                $this->domman->insertHtml($data)
            );
        }
    }

    public function prepend(string $data)
    {
        foreach ($this->nodes as $node)
        {
            $node->insertBefore(
                $this->domman->insertHtml($data),
                $node->firstChild
            );
        }
    }

    public function remove()
    {
        foreach ($this->nodes as $node)
        {
            $node->parentNode->removeChild($node);
        }
    }
}
