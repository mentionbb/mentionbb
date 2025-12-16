<?php

namespace ComponentBundle\App\Builder\Metadata;

use ComponentBundle\App\Builder\Metadata\AbstractMetadata;

class Discussion extends AbstractMetadata
{
    protected $app;

    public function Render($app)
    {
        $this->app = $app;

        return $this->builder(
            $this->getDefinitions()
        );
    }

    protected function getDefinitions(): array
    {
        $metaData = $this->getData();

        return [
            'headTitle' => $metaData->title,
            'metaDescription' => (\mb_strlen($metaData->meta_description) < 1 ? $metaData->og_title : ($metaData->meta_description)),
            'ogDescription' => (\mb_strlen($metaData->og_description) < 1 ? $metaData->og_title : ($metaData->og_description)),
            'twitterDescription' => (\mb_strlen($metaData->twitter_description) < 1 ? $metaData->og_title : ($metaData->twitter_description)),
            'ogTitle' => $metaData->og_title,
            'twitterTitle' => $metaData->twitter_title
        ];
    }
}
