<?php

namespace App\Params\Deploy;

use App\Params\Env as EnvParams;

class Config
{
    public static function deployConfigParams()
    {
        $env = new EnvParams();

        return [
            'is_enable_legacy_dom_filter' => $env->isEnableLegacyDomFilter(),
            'superadmin_id' => $env->getSuperadminId(),
            'is_disable_all_addons' => $env->isDisableAllAddons(),
            'is_enable_beta_updates' => $env->isEnableBetaUpdates(),
            'is_disable_external_link_preview' => $env->isDisableExternalLinkPreview(),
            'is_enable_convert_webp' => $env->isEnableConvertWebp()
        ];
    }
}
