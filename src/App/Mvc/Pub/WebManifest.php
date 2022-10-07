<?php

namespace App\Mvc\Pub;

use App\Mvc\Controller;
use App\Rule\Pub;
use App\SubContainer\AppSub;

class WebManifest extends Controller implements Pub
{
    public function container($option)
    {
        if ($this->request->getRequestMethod() == "GET")
        {
            if (AppSub::getSubDir())
            {
                $scope = '/' . AppSub::getSubDir() . '/';
            }
            else
            {
                $scope = '/';
            }

            $data = [
                'name' => $this->settings->site_title,
                'short_name' => $this->settings->site_short_title,
                'description' => $this->settings->meta_description,
                'icons' => [
                    [
                        'src' => AppSub::getPublicDir() . '/images/mention-logo-sm.png',
                        'sizes' => '192x192',
                        'purpose' => 'any maskable'
                    ],
                    [
                        'src' => AppSub::getPublicDir() . '/images/mention-logo-lg.png',
                        'sizes' => '512x512',
                        'purpose' => 'any maskable'
                    ]
                ],
                'lang' => $this->default_language['id'],
                'dir' => $this->default_language['text_direction'],
                'display' => 'minimal-ui',
                'scope' => $scope,
                'start_url' => "{$scope}?_pwa=1",
                'background_color' => '#f8f9fa',
                'theme_color' => '#ffffff'
            ];

            $this->request->setContentType('application/manifest+json');

            echo json_encode($data, JSON_PRETTY_PRINT);
        }
        elseif ($this->request->getRequestMethod() == "POST")
        {
        }
    }
}
