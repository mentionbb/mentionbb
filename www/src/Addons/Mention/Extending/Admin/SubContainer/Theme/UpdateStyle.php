<?php

namespace ComponentBundle\Extending\Admin\SubContainer\Theme;

use App\Util\File;

class UpdateStyle
{
    public static function doUpdate(array $data)
    {
        $input = \App\Repository\Set::setObject($data);

        (new File())->dumpFile(PUBLIC_DIR . "/themes/frontend/assets/{$input->name}", $input->content);
    }
}
