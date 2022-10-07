<?php

namespace App\Sitemap;

use App\Sitemap\AbstractSitemap;

class UrlBuilder extends AbstractSitemap
{
    public function addUrl($path, $lastMod = null, $changeFreq = null, $priority = null)
    {
        $this->items[] = [
            'loc' => $path,
            'lastMod' => $lastMod,
            'changeFreq' => $changeFreq,
            'priority' => $priority
        ];
    }

    public function generate()
    {
        $this->xml->serialize([
            'urlset' => [
                'attributes' => [
                    'xmlns' => $this->schemas['xmlns']
                ],
                'content' => $this->buildUrl()
            ]
        ]);

        return $this->xml->outputXml();
    }

    protected function buildUrl()
    {
        $path = [];

        foreach ($this->items as $key => $url)
        {
            $path["{url_{$key}}"] = [
                'content' => [
                    'loc' => [
                        'content' => $url['loc']
                    ]
                ]
            ];

            if ($url['lastMod'])
            {
                $path["{url_{$key}}"]['content']['lastmod']['content'] = date('c', $url['lastMod']);
            }

            if ($url['changeFreq'])
            {
                $path["{url_{$key}}"]['content']['changefreq']['content'] = $url['changeFreq'];
            }

            if ($url['priority'])
            {
                $path["{url_{$key}}"]['content']['priority']['content'] = $url['priority'];
            }
        }

        return $path;
    }
}
