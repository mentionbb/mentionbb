<?php

namespace ComponentBundle\Extending\Admin\SubContainer\Routes;

use App\Util\File;
use App\Util\Yaml;
use ComponentBundle\Extending\Admin\SubContainer\Routes\Defaults;

class Rebuild
{
    public static function RebuildWithInput(array $data)
    {
        $input = \App\Repository\Set::setObject($data);

        $rebuildingRoutes = array_merge(
            Defaults::getGlobalDefaults(),
            Defaults::getDefaultAjaxRoutes(),
            self::rebuildingRoutes($input)
        );

        self::backupRouteFile();
        return (new File())->dumpFile(
            CONFIG_DIR . DIRECTORY_SEPARATOR . 'routes.yaml',
            self::escapeYamlForRouting(
                Yaml::dump($rebuildingRoutes)
            )
        );
    }

    public static function rebuildRestoreDefault()
    {
        $defaults = array_merge(
            Defaults::getGlobalDefaults(),
            Defaults::getDefaultRoutes(),
            Defaults::getDefaultAjaxRoutes()
        );

        self::backupRouteFile();
        return (new File())->dumpFile(
            CONFIG_DIR . DIRECTORY_SEPARATOR . 'routes.yaml',
            self::escapeYamlForRouting(
                Yaml::dump($defaults)
            )
        );
    }

    protected static function rebuildingRoutes($input)
    {
        return [
            'Forum' => [
                'path' => $input->forum->path->value,
                'controller' => $input->forum->controller->value,
                'requirements' => [
                    'forum_id' => '\d+'
                ],
                'options' => [
                    'friendly_links' => '["title"]'
                ]
            ],
            'Discussion' => [
                'path' => $input->discussion->path->value,
                'controller' => $input->discussion->controller->value,
                'requirements' => [
                    'discussion_id' => '\d+'
                ],
                'defaults' => [
                    'post_id' => '0'
                ],
                'options' => [
                    'friendly_links' => '["discussion_title"]'
                ]
            ],
            'Shortcode' => [
                'path' => $input->shortcode->path->value,
                'controller' => $input->shortcode->controller->value
            ],
            'Account' => [
                'path' => $input->account->path->value,
                'controller' => $input->account->controller->value,
                'defaults' => [
                    'page' => 'account',
                    'section' => 'settings'
                ],
                'methods' => '[GET]'
            ],
            'Moderation' => [
                'path' => $input->moderation->path->value,
                'controller' => $input->moderation->controller->value,
                'methods' => '[GET]'
            ],
            'Profile' => [
                'path' => $input->profile->path->value,
                'controller' => $input->profile->controller->value,
                'requirements' => [
                    'user_id' => '\d+'
                ],
                'defaults' => [
                    'tab' => 'posts',
                    'subtab' => 'newest'
                ],
                'options' => [
                    'friendly_links' => '["username"]'
                ],
                'methods' => '[GET]'
            ],
            'Messages' => [
                'path' => $input->messages->path->value,
                'controller' => $input->messages->controller->value,
                'defaults' => [
                    'section' => 'conversation',
                    'id' => '0'
                ],
                'methods' => '[GET]'
            ],
            'Attachment' => [
                'path' => $input->attachment->path->value,
                'controller' => $input->attachment->controller->value,
                'defaults' => [
                    'show' => '0'
                ],
                'options' => [
                    'friendly_links' => '["section"]'
                ]
            ],
            'TwoStepVerification' => [
                'path' => $input->twoStepVerification->path->value,
                'controller' => $input->twoStepVerification->controller->value,
                'defaults' => [
                    'stage' => 'modal'
                ],
                'methods' => '[GET]'
            ],
            'Pages' => [
                'path' => $input->pages->path->value,
                'controller' => $input->pages->controller->value,
                'methods' => '[GET]'
            ]
        ];
    }

    protected static function backupRouteFile()
    {
        return (new File())->backup(CONFIG_DIR . '/routes.yaml');
    }

    protected static function escapeYamlForRouting($data)
    {
        $patterns = [
            "path:\s\'(.*)\'" => "path: $1",
            "friendly_links:\s\'\[(.*)\]\'" => "friendly_links: [$1]",
            "methods:\s\'\[(GET|POST)\]\'" => "methods: [$1]"
        ];

        foreach ($patterns as $pattern => $replace)
        {
            $data = preg_replace("/{$pattern}/", $replace, $data);
        }

        return $data;
    }
}
