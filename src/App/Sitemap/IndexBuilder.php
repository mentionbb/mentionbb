<?php

namespace App\Sitemap;

use App\Sitemap\AbstractSitemap;

class IndexBuilder extends AbstractSitemap
{
    public function addSitemap($path, $lastMod = null)
    {
        $this->items[] = [
            'loc' => $path,
            'lastMod' => $lastMod
        ];
    }

    public function generate()
    {
        $this->xml->serialize([
            'sitemapindex' => [
                'attributes' => [
                    'xmlns' => $this->schemas['xmlns']
                ],
                'content' => $this->buildIndex()
            ]
        ]);

        return $this->xml->outputXml();
    }

    protected function buildIndex()
    {
        $path = [];

        foreach ($this->items as $key => $url)
        {
            $path["{sitemap_{$key}}"] = [
                'content' => [
                    'loc' => [
                        'content' => $url['loc']
                    ]
                ]
            ];

            if ($url['lastMod'])
            {
                $path["{sitemap_{$key}}"]['content']['lastmod']['content'] = date('c', $url['lastMod']);
            }
        }

        return $path;
    }
}
