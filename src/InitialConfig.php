<?php

class InitialConfig
{
    /**
     * Cache config.
     * 
     * Adapters:
     * ApcuAdapter
     * ArrayAdapter
     * MemcachedAdapter
     * DoctrineDbalAdapter (default)
     * PhpFilesAdapter
     * RedisAdapter
     * 
     * https://symfony.com/doc/current/components/cache.html
     */
    const Cache_Standard = [
        'adapter' => 'DoctrineDbalAdapter',
        'config' => [
            'defaultLifetime' => 3600,

            /**
             * For APCU.
             */
            //'version' => null,

            /**
             * For ArrayAdapter.
             */
            //'storeSerialized' => true,
            //'maxLifetime' => 3600,
            //'maxItems' => 0,

            /**
             * For Memcache.
             * 
             * https://symfony.com/doc/current/components/cache/adapters/memcached_adapter.html
             */
            /*
            'url' => [
                'memcached://my.server.com:11211',
                'memcached://rmf:abcdef@localhost',
            ]
            */

            /**
             * For Redis.
             * 
             * https://symfony.com/doc/current/components/cache/adapters/redis_adapter.html
             */
            //'url' => 'redis://localhost'
        ]
    ];

    /**
     * This option disables all plugins in software crash due to any plugin.
     * In this way, it makes the site work until the problem is solved.
     */
    const Disable_All_Addons = 0;

    /**
     * Enables installing unstable versions.
     */
    const Enable_Beta_Updates = 0;

    /**
     * @deprecated
     * 
     * Disable PHP error reporting.
     */
    const Disable_PHP_Error_Reporting = 0;

    /**
     * This is the option you need to fill if you only want one admin on the site.
     * Existing Admin/Mod are disabled except for the specified User ID, but appear as Admin/Mod.
     * User ID must be written.
     */
    const SuperAdmin_ID = 0;

    /**
     * If you are unable to link to external links, you can disable external link preview within posts.
     */
    const Disable_ExternalLink_Preview = 0;

    /**
     * Images uploaded are automatically converted to Webp format if the PHP_GD extension is turned on.
     * Turning this setting off disables the feature. Leaving the images in their original format will result in loss of disk space.
     */
    const Enable_Convert_Webp_Images = 1;
}
