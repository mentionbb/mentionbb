<?php

namespace App\Hook\DomManipulation;

use App\Hook\Filter\FilterTag;

use App\Hook\DomManipulation\Nodes\Html as HtmlNode;
use App\Hook\DomManipulation\Nodes\Attribute as AttributeNode;
use App\Hook\DomManipulation\Nodes\HtmlClass as HtmlClassNode;
use App\Hook\DomManipulation\Nodes\Style as StyleNode;

use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\CssSelector\CssSelectorConverter;

class DomManipulation
{
    protected $xpath;
    protected $nodes;

    public $dom;
    public $html5;

    /** @var HtmlNode $html */
    public $html;

    /** @var AttributeNode $attribute */
    public $attribute;

    /** @var HtmlClassNode $class */
    public $class;

    /** @var StyleNode $style */
    public $style;

    /**
     * __construct
     *
     * @param array{html5: \Masterminds\HTML5, dom: \DOMDocument, xpath: \DOMXPath, renderer: string} $ownerDocument
     * @return void
     */
    public function __construct($ownerDocument)
    {
        $this->xpath = $ownerDocument['xpath'];
        $this->dom = $ownerDocument['dom'];
        $this->html5 = $ownerDocument['html5'];
    }

    public function selector($class)
    {
        $this->nodes = $this->getXPath($class);

        $this->html = (new HtmlNode())->addDocument($this);
        $this->attribute = (new AttributeNode())->addDocument($this);
        $this->class = (new HtmlClassNode())->addDocument($this);
        $this->style = (new StyleNode())->addDocument($this);

        return $this;
    }

    /**
     * These classes do not defined to Intelephense yet: \DOM\Node|\DOM\NodeList|\DOM\Element|\DOM\Attr
     * 
     * @disregard P1009 Undefined type
     */
    public function getXPath($class): \DOM\Node|\DOM\NodeList|\DOM\Element|\DOM\Attr|\DOMNode|\DOMNodeList|\DOMElement|\DOMAttr
    {
        $class = preg_replace_callback('/\{hook:([a-zA-Z0-9-_]+)\}/', function ($matches)
        {
            return $this->getHook($matches[1]);
        }, $class);

        $nodes = $this->xpath->query(
            $this->queryBuilder($class)
        );

        return $nodes;
    }

    protected function queryBuilder($query)
    {
        if (preg_match('/\/\/|\/|\@/', $query, $matchXPath))
        {
            return $query;
        }
        else
        {
            return (new CssSelectorConverter())->toXPath($query);
        }
    }

    /**
     * getNodes
     * 
     * These classes do not defined to Intelephense yet: \DOM\Node|\DOM\NodeList|\DOM\Element|\DOM\Attr|\DOMNode|\DOMNodeList|\DOMElement|\DOMAttr
     * 
     * @disregard P1009 Undefined type
     * 
     * @return \DOM\Node|\DOM\NodeList|\DOM\Element|\DOM\Attr|\DOMNode|\DOMNodeList|\DOMElement|\DOMAttr
     */
    public function getNodes(): \DOM\Node|\DOM\NodeList|\DOM\Element|\DOM\Attr|\DOMNode|\DOMNodeList|\DOMElement|\DOMAttr
    {
        return $this->nodes;
    }

    /**
     * These classes do not defined to Intelephense yet: \Dom\DocumentFragment
     * 
     * @disregard P1009 Undefined type
     */
    public function appendXML(string $data): \Dom\DocumentFragment|\DOMDocumentFragment
    {
        $fragment = $this->dom->createDocumentFragment();

        $fragment->appendXML(
            FilterTag::filterSingleTags($data)
        );

        return $fragment;
    }

    public function getCrawler($html)
    {
        return new Crawler($html);
    }

    protected function getHook($domEventName)
    {
        return "[hook-action=\"{Mention:App-domEvent-{$domEventName}}\"]";
    }
}
