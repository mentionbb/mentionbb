<?php

namespace App\Cli;

class CommandList
{
    const INSTALL = 'mention:install';
    const UPGRADE = 'mention:upgrade';

    const COMPOSER = 'mention:composer';

    const CLEAR_CACHE = 'mention:clear-cache';

    const BUILD_HASHES = 'mention:build-hashes';

    const CREATE_ADDON = 'mention:addon-create';
    const REBUILDING_ADDONS = 'mention:addon-build';
    const INSTALL_ADDON = 'mention:addon-install';

    const CREATE_LANGUAGE = 'mention:language-create';
    const REBUILD_LANGUAGE = 'mention:language-build';
    const INSTALL_LANGUAGE = 'mention:language-install';
}
