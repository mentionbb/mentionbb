<?php

namespace App\Sitemap;

use App\Sitemap\IndexBuilder;
use App\Sitemap\UrlBuilder;

class Generator
{
    protected $indexBuilder;
    protected $urlBuilder;

    protected $robotTxtTemplate = [
        'User-agent: *',
        'Allow: /',
        'Sitemap: /sitemap.xml'
    ];

    public function __construct(\App\Repository\Request $request)
    {
        $this->indexBuilder = new IndexBuilder($request);
        $this->urlBuilder = new UrlBuilder($request);
    }

    public function getIndexBuilder()
    {
        return $this->indexBuilder;
    }

    public function getUrlBuilder()
    {
        return $this->urlBuilder;
    }

    public function generateRobotTxt()
    {
        $string = implode("\n", $this->robotTxtTemplate);

        return (new \App\Util\File())->dumpFile(INDEX_DIR . '/robots.txt', $string);
    }
}
