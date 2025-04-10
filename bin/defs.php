<?php

define('INDEX_DIR', __DIR__ . '/..');

//Application location.
define('APPLICATION_SELF', INDEX_DIR . '/src');

//Config Dir
define('CONFIG_DIR', APPLICATION_SELF . '/App/Config');

//Backup Dir
define('BACKUP_DIR', APPLICATION_SELF . '/Backups');

//Cache Dir
define('CACHE_DIR', APPLICATION_SELF . '/Cache');

//This "Public" route.
define('PUBLIC_DIR', 'ui');

//Timing
define('TIMER_START', microtime(true));
