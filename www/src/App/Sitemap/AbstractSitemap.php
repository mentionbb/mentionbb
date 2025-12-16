<?php

namespace App\Sitemap;

use App\Renderer\Response\Xml;

abstract class AbstractSitemap
{
    protected $xml;
    protected $items = [];

    protected $schemas = [
        'xmlns' => 'http://www.sitemaps.org/schemas/sitemap/0.9',
        'xmlns:xhtml' => 'http://www.w3.org/1999/xhtml',
        'xmlns:video' => 'http://www.google.com/schemas/sitemap-video/1.1',
        'xmlns:image' => 'http://www.google.com/schemas/sitemap-image/1.1',
        'xmlns:xsi' => 'http://www.w3.org/2001/XMLSchema-instance',
        'xsi:schemaLocation' => 'http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd'
    ];

    public function __construct(\App\Repository\Request $request)
    {
        $this->xml = new Xml($request);
        $this->xml->init();
    }

    public function flush()
    {
        unset($this->items);
    }
}
