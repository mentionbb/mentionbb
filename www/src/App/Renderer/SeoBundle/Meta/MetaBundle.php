<?php

namespace App\Renderer\SeoBundle\Meta;

use App\Renderer\SeoBundle\Meta\AbstractMeta;

class MetaBundle extends AbstractMeta
{
    public function buildItems(): array
    {
        $this->addMetaTag(
            'headTitle',
            [
                'html' => '<title>{headTitle}</title>',
                'output' => '{newline|leftspace}{string}{newline}'
            ]
        );

        $this->addMetaTag(
            'contentType',
            [
                'http-equiv' => 'Content-Type',
                'content' => 'text/html; charset=utf-8',
                'output' => '{string}'
            ]
        );

        $this->addMetaTag(
            'XUACompatible',
            [
                'http-equiv' => 'X-UA-Compatible',
                'content' => 'IE=Edge',
                'output' => '{string}'
            ]
        );

        $this->addMetaTag(
            'viewPort',
            [
                'name' => 'viewport',
                'content' => 'user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1',
                'output' => '{string}'
            ]
        );

        $this->addMetaTag(
            'linkWebmanifest',
            [
                'html' => '<link rel="manifest" href="/{subDir}webmanifest.json" />',
                'output' => '{newline|leftspace}{string}'
            ]
        );

        $this->addMetaTag(
            'generator',
            [
                'name' => 'generator',
                'content' => 'Mention ' . \App\App::versionNaming() . ', Build: ' . \App\App::$build['versionId'] . '',
                'output' => '{newline}{string}'
            ]
        );

        $this->addMetaTag(
            'appleMobileWebAppCapable',
            [
                'name' => 'apple-mobile-web-app-capable',
                'content' => 'yes',
                'output' => '{newline}{string}'
            ]
        );

        $this->addMetaTag(
            'appleMobileWebAppStatusBarStyle',
            [
                'name' => 'apple-mobile-web-app-status-bar-style',
                'content' => 'black-translucent',
                'output' => '{string}'
            ]
        );

        $this->addMetaTag(
            'appleMobileWebAppTitle',
            [
                'name' => 'apple-mobile-web-app-title',
                'content' => '{title}',
                'output' => '{string}'
            ]
        );

        $this->addMetaTag(
            'appleTouchIcon',
            [
                'html' => '<link rel="apple-touch-icon" href="{imageDir}/mention-logo-sm.png" />',
                'output' => '{leftspace}{string}'
            ]
        );

        $this->addMetaTag(
            'msApplicationTileImage',
            [
                'name' => 'msapplication-TileImage',
                'content' => '{imageDir}/mention-logo-sm.png',
                'output' => '{newline}{string}'
            ]
        );

        $this->addMetaTag(
            'msApplicationTileColor',
            [
                'name' => 'msapplication-TileColor',
                'content' => '{themeBaseColor}',
                'output' => '{string}'
            ]
        );

        $this->addMetaTag(
            'description',
            [
                'name' => 'description',
                'content' => '{metaDescription}',
                'output' => '{newline}{string}'
            ]
        );

        $this->addMetaTag(
            'ogUrl',
            [
                'property' => 'og:url',
                'content' => '{GET_URI}',
                'output' => '{newline}{string}'
            ]
        );

        $this->addMetaTag(
            'ogSiteName',
            [
                'property' => 'og:site_name',
                'content' => '{title}',
                'output' => '{string}'
            ]
        );

        $this->addMetaTag(
            'ogType',
            [
                'property' => 'og:type',
                'content' => 'website',
                'output' => '{string}'
            ]
        );

        $this->addMetaTag(
            'ogTitle',
            [
                'property' => 'og:title',
                'content' => '{ogTitle}',
                'output' => '{string}'
            ]
        );

        $this->addMetaTag(
            'ogDescription',
            [
                'property' => 'og:description',
                'content' => '{ogDescription}',
                'output' => '{string}'
            ]
        );

        $this->addMetaTag(
            'ogImage',
            [
                'property' => 'og:image',
                'content' => '{imageDir}/mention-logo-sm.png',
                'output' => '{string}'
            ]
        );

        $this->addMetaTag(
            'twittertitle',
            [
                'property' => 'twitter:title',
                'content' => '{twitterTitle}',
                'output' => '{newline}{string}'
            ]
        );

        $this->addMetaTag(
            'twitterDescription',
            [
                'property' => 'twitter:description',
                'content' => '{twitterDescription}',
                'output' => '{string}'
            ]
        );

        $this->addMetaTag(
            'twitterImage',
            [
                'property' => 'twitter:image',
                'content' => '{imageDir}/mention-logo-sm.png',
                'output' => '{string}'
            ]
        );

        $this->addMetaTag(
            'twitterCard',
            [
                'property' => 'twitter:card',
                'content' => 'summary',
                'output' => '{string}'
            ]
        );

        $this->addMetaTag(
            'themeColor',
            [
                'name' => 'theme-color',
                'content' => '{themeBaseColor}',
                'output' => '{newline}{string}'
            ]
        );

        $this->addMetaTag(
            'linkCanonical',
            [
                'html' => '<link rel="canonical" href="{GET_URI}" />',
                'output' => '{newline|leftspace}{string}'
            ]
        );

        return $this->buildMetas();
    }
}
