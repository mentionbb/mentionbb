<?php

/**
 * 
 * !! Mention is a paid software. !!
 * !! The maker of this software: ParantezTech | https://www.r10.net/members/90047-scarecrow.html
 * !! No used Null. !!
 * !! As long as you are using a Null version, you will not be able to receive updates. !!
 *
 * !! The software uses ParFramework2, this infrastructure cannot be used by third parties or any other project can not be produced. !!
 * 
 */

ini_set('max_execution_time', 900);

define('INDEX_DIR', __DIR__);

//Application location.
define('APPLICATION_SELF', INDEX_DIR . '/src');

//Config Dir
define('CONFIG_DIR', APPLICATION_SELF . '/App/Config');

//Backup Dir
define('BACKUP_DIR', APPLICATION_SELF . '/Backups');

//Cache Dir
define('CACHE_DIR', APPLICATION_SELF . '/Cache');

//This "Public" route.
define('PUBLIC_DIR', 'public');

//Timing
define('TIMER_START', microtime(true));

/**
 * Run Application
 */
require(APPLICATION_SELF . '/vendor/autoload.php');
new \App\Mvc\Pub();

/**
 * Logger
 */
\App\Logger::ErrorLogger();
