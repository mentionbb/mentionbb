<?php

namespace ComponentBundle\Extending\Admin\SubContainer\Addons;

use App\Util\File;

class Switcher
{
    public static function doActivate(array $data)
    {
        $input = \App\Repository\Set::setObject($data);

        $file = new File;
        $file->rename(APPLICATION_SELF . '/Addons/' . $input->name . '.noactive', APPLICATION_SELF . '/Addons/' . $input->name . '.yaml');
    }

    public static function doDisable(array $data)
    {
        $input = \App\Repository\Set::setObject($data);

        $file = new File;
        $file->rename(APPLICATION_SELF . '/Addons/' . $input->name . '.yaml', APPLICATION_SELF . '/Addons/' . $input->name . '.noactive');
    }
}
