<?php

namespace ComponentBundle\App\Builder\Metadata;

use ComponentBundle\App\Builder\Metadata\Options;
use App\Renderer\SeoBundle\Meta\RenderHtml;

abstract class AbstractMetadata
{
    private $metadata;

    public function __construct()
    {
        $this->metadata = (new RenderHtml)->getHtml();
    }

    public function builder(array $data = [])
    {
        $dataString = array_merge($this->getGlobalDefinitions(), $data);
        foreach ($dataString as $key => $var)
        {
            $dataVariable['{' . $key . '}'] = $var;
        }

        foreach ($this->metadata as $item)
        {
            $metadata[] = $this->replaceFakeVariables(
                $dataVariable,
                $item
            );
        }

        return $metadata;
    }

    protected function getGlobalDefinitions(): array
    {
        return [
            'GET_URI' => $this->app->request->getUri(),
            'title' => $this->app->settings->site_title,
            'imageDir' => \App\SubContainer\AppSub::getPublicDir() . '/images',
            'themeBaseColor' => $this->app->dom->getAttribute('.app-container', ['data-color'])['color'],
            'subDir' => (function ()
            {
                if (\App\SubContainer\AppSub::getSubDir())
                {
                    return \App\SubContainer\AppSub::getSubDir() . '/';
                }
            })()
        ];
    }

    protected function buildHeadTitle(string $title): string
    {
        return str_replace(
            ['{HOME_TITLE}', '{HOME_SHORT_TITLE}', '{PAGE_TITLE}'],
            [$this->app->settings->site_title, $this->app->settings->site_short_title, $title],
            Options::$headTitleTemplate
        );
    }

    protected function getData(): object
    {
        if (!$this->app->dom->hasAttribute('{hook:metacontents}', 'data-title'))
        {
            throw new \Exception('metadata is not defined.');
        }

        $data = $this->app->dom->getAttribute('{hook:metacontents}', ['data-title', 'data-meta-description', 'data-og-description', 'data-twitter-description', 'data-og-title', 'data-twitter-title']);

        if (\mb_strlen($data['meta_description']) > Options::getMetaDescriptionLength())
        {
            $metaDescription = substr($data['meta_description'], 0, Options::getMetaDescriptionLength()) . Options::$globalDefaultEnd;
        }
        else
        {
            $metaDescription = $data['meta_description'];
        }

        if (\mb_strlen($data['og_description']) > Options::getMetaOgDescriptionLength())
        {
            $ogDescription = substr($data['og_description'], 0, Options::getMetaOgDescriptionLength()) . Options::$globalDefaultEnd;
        }
        else
        {
            $ogDescription = $data['og_description'];
        }

        if (\mb_strlen($data['twitter_description']) > Options::getMetaTwitterDescriptionLength())
        {
            $twitterDescription = substr($data['twitter_description'], 0, Options::getMetaTwitterDescriptionLength()) . Options::$globalDefaultEnd;
        }
        else
        {
            $twitterDescription = $data['twitter_description'];
        }

        $data = [
            'title' => $this->buildHeadTitle(\strip_tags($data['title'])),
            'meta_description' => \strip_tags($metaDescription),
            'og_description' => \strip_tags($ogDescription),
            'twitter_description' => \strip_tags($twitterDescription),
            'og_title' => \strip_tags($data['og_title']),
            'twitter_title' => \strip_tags($data['twitter_title'])
        ];

        return \App\Repository\Set::setObject($data);
    }

    private function replaceFakeVariables($data, $string)
    {
        return str_replace(array_keys($data), array_values($data), $string);
    }
}
