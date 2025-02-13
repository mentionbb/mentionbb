<?php

namespace App\Hook\DomManipulation;

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

    public $insertTemplate = [
        'dom' => [
            'pattern' => "/<!--\{Mention:insert-domId:\w{8}-\w{4}-\w{4}-\w{4}-\w{12}\[\n?(.*?)\]\}-->/is",
            'string' => "<!--{Mention:insert-domId:%s[%s]}-->"
        ],
        'whitespace' => [
            'pattern' => "/<!--\{Mention:insert-whitespace:([0-9]+)\}-->/is",
            'string' => "<!--{Mention:insert-whitespace:%s}-->"
        ]
    ];

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
     * @return \DOM\Node|\DOM\NodeList|\DOM\Element|\DOM\Attr|\DOMNode|\DOMNodeList|\DOMElement|\DOMAttr
     */
    public function getNodes(): \DOM\Node|\DOM\NodeList|\DOM\Element|\DOM\Attr|\DOMNode|\DOMNodeList|\DOMElement|\DOMAttr
    {
        return $this->nodes;
    }

    public function addDoctype()
    {
        $impl = new \DOMImplementation();
        $doctype = $impl->createDocumentType('html');
        $doc = $impl->createDocument(null, '', $doctype);

        return trim(preg_replace('/\s\s+/', ' ', $doc->saveHTML()));
    }

    /**
     * insertHtml
     * 
     * An alternative version of appendXML() method.
     * The biggest problem with the original method is that it causes problems with HTML5 elements.
     * In this method, simply add the placed element as a "comment" and then convert it to html.
     * 
     * It is important to remember that appendXML() was developed for XML. DOM is one of the very low-level system for PHP and work on HTML5 only started with version 8.4.
     * If something else replaces this method, I will integrate it. However, the solution I presented is quite logical, super fast and reliable.
     *
     * @param string $data
     * @return \Dom\DocumentFragment|\DOMDocumentFragment
     */
    public function insertHtml(string $data, $isItem = true): \Dom\DocumentFragment|\DOMDocumentFragment
    {
        if ($isItem)
        {
            $data = $this->filterHtml($data);
            $template = $this->getInsertTemplate(
                'dom',
                \App\Uuid::v4(),
                $data
            );
        }
        else
        {
            $template = $data;
        }

        $fragment = $this->dom->createDocumentFragment();
        $fragment->appendXML($template);

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

    protected function filterHtml($data)
    {
        $data = preg_replace('/(-{2,})/si', '-', $data);

        return $data;
    }

    public function getInsertTemplate($key, ...$values)
    {
        return sprintf($this->insertTemplate[$key]['string'], ...$values);
    }
}
