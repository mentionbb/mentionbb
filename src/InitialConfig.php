<?php

namespace Release;

class InitialConfig
{
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
}
