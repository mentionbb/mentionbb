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

ini_set('max_execution_time', 900);

$dir = __DIR__;
require($dir . '/bin/defs.php');

if (!file_exists(FRAMEWORK_LIBS . '/vendor/autoload.php'))
{
    require($dir . '/bin/RuntimeErrors.php');
    RuntimeErrors::Show('vendor');

    return;
}

/**
 * Run Application
 */
require(FRAMEWORK_LIBS . '/vendor/autoload.php');
new \App\Mvc\Pub();

/**
 * Logger
 */
\App\Logger::ErrorLogger();
