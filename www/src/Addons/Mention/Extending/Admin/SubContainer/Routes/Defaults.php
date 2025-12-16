<?php
//The scheme where these routes should be is given. Routes.yaml is created automatically from this file. Don't edit.

namespace ComponentBundle\Extending\Admin\SubContainer\Routes;

class Defaults
{
    /**
     * getGlobalDefaults
     *
     * @return Array
     */
    public static function getGlobalDefaults(): array
    {
        return [
            'IndexAction' => [
                'path' => '/{tab}',
                'controller' => 'App\Mvc\Pub\Index::container',
                'defaults' => [
                    'tab' => 'newest'
                ],
                'requirements' => [
                    'tab' => 'newest|popular|top-likes|oldest'
                ]
            ],
            'Post' => [
                'path' => '/post/{operation}',
                'controller' => 'App\Mvc\Pub\Post::container'
            ],
            'AuthAction' => [
                'path' => '/auth/{section}',
                'controller' => 'App\Mvc\Pub\Auth::container'
            ],
            'Editor' => [
                'path' => '/editor',
                'controller' => 'App\Mvc\Pub\Editor::container'
            ],
            'Search' => [
                'path' => '/search/{section}',
                'controller' => 'App\Mvc\Pub\Search::container',
                'methods' => '[GET]'
            ],
            'SitemapIndex' => [
                'path' => '/sitemap.xml',
                'controller' => 'App\Mvc\Pub\Sitemap::container'
            ],
            'Sitemap' => [
                'path' => '/sitemap-{index}.xml',
                'controller' => 'App\Mvc\Pub\Sitemap::container',
                'requirements' => [
                    'index' => '\d+'
                ]
            ],
            'Test' => [
                'path' => '/testd',
                'controller' => 'App\Mvc\Pub\Test::container'
            ],
            'Webmanifest' => [
                'path' => '/webmanifest',
                'controller' => 'App\Mvc\Pub\WebManifest::container',
                'methods' => '[GET]'
            ]
        ];
    }

    /**
     * getDefaultRoutes
     *
     * @return Array
     */
    public static function getDefaultRoutes(): array
    {
        return [
            'Forum' => [
                'path' => '/f/{forum_id}-{title}',
                'controller' => 'App\Mvc\Pub\Index::container',
                'requirements' => [
                    'forum_id' => '\d+'
                ],
                'options' => [
                    'friendly_links' => '["title"]'
                ]
            ],
            'Discussion' => [
                'path' => '/d/{discussion_id}-{discussion_title}/{post_id}',
                'controller' => 'App\Mvc\Pub\Discussion::container',
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
                'path' => '/p/{shortcode}',
                'controller' => 'App\Mvc\Pub\Shortcode::container'
            ],
            'Account' => [
                'path' => '/account/{page}/{section}',
                'controller' => 'App\Mvc\Pub\Account::container',
                'defaults' => [
                    'page' => 'account',
                    'section' => 'settings'
                ],
                'methods' => '[GET]'
            ],
            'Moderation' => [
                'path' => '/moderation/{page}/{operation}',
                'controller' => 'App\Mvc\Pub\Moderation::container',
                'methods' => '[GET]'
            ],
            'Profile' => [
                'path' => '/u/{username}.{user_id}/{tab}/{subtab}',
                'controller' => 'App\Mvc\Pub\Profile::container',
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
                'path' => '/messages/{section}/{id}',
                'controller' => 'App\Mvc\Pub\Messages::container',
                'defaults' => [
                    'section' => 'conversation',
                    'id' => '0'
                ],
                'methods' => '[GET]'
            ],
            'Attachment' => [
                'path' => '/attachments/{section}/{show}',
                'controller' => 'App\Mvc\Pub\Attachment::container',
                'defaults' => [
                    'show' => '0'
                ],
                'options' => [
                    'friendly_links' => '["section"]'
                ]
            ],
            'TwoStepVerification' => [
                'path' => '/two-step-verification/{stage}',
                'controller' => 'App\Mvc\Pub\TwoStepVerification::container',
                'defaults' => [
                    'stage' => 'modal'
                ],
                'methods' => '[GET]'
            ],
            'Pages' => [
                'path' => '/pages/{section}',
                'controller' => 'App\Mvc\Pub\Pages::container',
                'methods' => '[GET]'
            ]
        ];
    }

    /**
     * getDefaultAjaxRoutes
     *
     * @return Array
     */
    public static function getDefaultAjaxRoutes(): array
    {
        return [
            'Account_Post' => [
                'path' => '/account/{post}',
                'controller' => 'App\Mvc\Pub\Account::container',
                'methods' => '[POST]'
            ],
            'Moderation_Post' => [
                'path' => '/moderation/{page}/{operation}',
                'controller' => 'App\Mvc\Pub\Moderation::container',
                'methods' => '[POST]'
            ],
            'Profile_Post' => [
                'path' => '/u/{username}.{user_id}/{tab}/{subtab}',
                'controller' => 'App\Mvc\Pub\Profile::container',
                'requirements' => [
                    'user_id' => '\d+'
                ],
                'defaults' => [
                    'tab' => 'posts',
                    'subtab' => 'newest'
                ],
                'methods' => '[POST]'
            ],
            'Messages_Post' => [
                'path' => '/messages/{section}/{id}',
                'controller' => 'App\Mvc\Pub\Messages::container',
                'defaults' => [
                    'section' => 'conversation',
                    'id' => '0'
                ],
                'methods' => '[POST]'
            ],
            'Seach_Post' => [
                'path' => '/search/{section}',
                'controller' => 'App\Mvc\Pub\Search::container',
                'methods' => '[POST]'
            ],
            'TwoStepVerification_Post' => [
                'path' => '/two-step-verification/{stage}',
                'controller' => 'App\Mvc\Pub\TwoStepVerification::container',
                'defaults' => [
                    'stage' => 'modal'
                ],
                'methods' => '[POST]'
            ],
            'Pages_Post' => [
                'path' => '/pages/{section}',
                'controller' => 'App\Mvc\Pub\Pages::container',
                'methods' => '[POST]'
            ]
        ];
    }

    /**
     * getAllowedParams
     *
     * @return Array
     */
    public static function getAllowedParams(): array
    {
        return ['path', 'controller', 'defaults', 'requirements', 'options', 'methods'];
    }
}
