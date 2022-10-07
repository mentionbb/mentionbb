<?php

namespace ComponentBundle\App\Builder\Metadata;

use ComponentBundle\App\Builder\Metadata\AbstractMetadata;

class Index extends AbstractMetadata
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
        return [
            'headTitle' => $this->app->settings->site_title,
            'metaDescription' => $this->app->settings->meta_description,
            'ogDescription' => $this->app->settings->meta_description,
            'twitterDescription' => $this->app->settings->meta_description,
            'ogTitle' => $this->app->settings->site_title,
            'twitterTitle' => $this->app->settings->site_title,
        ];
    }
}
