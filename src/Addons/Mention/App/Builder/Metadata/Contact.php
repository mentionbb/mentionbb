<?php

namespace ComponentBundle\App\Builder\Metadata;

use ComponentBundle\App\Builder\Metadata\AbstractMetadata;

class Contact extends AbstractMetadata
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
            'metaDescription' => $metaData->meta_description,
            'ogDescription' => $metaData->og_description,
            'twitterDescription' => $metaData->twitter_description,
            'ogTitle' => $metaData->og_title,
            'twitterTitle' => $metaData->twitter_title
        ];
    }
}
