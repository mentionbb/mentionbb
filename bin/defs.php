<?php

define('INDEX_DIR', __DIR__ . '/..');

//Framework library.
define('FRAMEWORK_LIBS', INDEX_DIR . '/frmwrk');

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
