<?php

/**
 *  __  __            _   _             ____  ____  
 * |  \/  | ___ _ __ | |_(_) ___  _ __ | __ )| __ ) 
 * | |\/| |/ _ \ '_ \| __| |/ _ \| '_ \|  _ \|  _ \ 
 * | |  | |  __/ | | | |_| | (_) | | | | |_) | |_) |
 * |_|  |_|\___|_| |_|\__|_|\___/|_| |_|____/|____/ 
 * =================================================
 * 
 * The maker of this software: Par274
 * Author: https://www.r10.net/members/90047-scarecrow.html | https://github.com/par274 
 * The software uses ParFramework2, this infrastructure cannot be used by third parties or any other project can not be produced. !!
 */

return (function (): \App\Mvc\Pub|bool
{
    $dir = __DIR__;
    require($dir . '/bin/defs.php');

    if (!file_exists(APPLICATION_SELF . '/vendor/autoload.php'))
    {
        require($dir . '/bin/RuntimeErrors.php');
        \Binaries\RuntimeErrors::Show('vendor');

        return false;
    }

    require(APPLICATION_SELF . '/vendor/autoload.php');

    if (!file_exists($dir . '/.env'))
    {
        require($dir . '/bin/RuntimeErrors.php');
        \Binaries\RuntimeErrors::Show('env_not_found');

        return false;
    }

    /**
     * Parse environment config file
     */
    $dotenv = Dotenv\Dotenv::createImmutable($dir, ['.env', '.env.init'], false);
    $dotenv->load();

    /**
     * Run Application
     */
    $app = new \App\Mvc\Pub();

    /**
     * Logger
     */
    \App\Logger::ErrorLogger();

    return $app;
})();
