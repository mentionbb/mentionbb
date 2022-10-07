<?php

namespace ComponentBundle\Extending\Admin\SubContainer\Languages;

use App\Util\File;

class Remove
{
    public static function doRemove(array $data)
    {
        $input = \App\Repository\Set::setObject($data);

        $file = new File();

        if (file_exists(APPLICATION_SELF . "/Languages/{$input->language_id}.yaml"))
        {
            $file->remove(APPLICATION_SELF . "/Languages/{$input->language_id}.yaml");
            $file->remove(APPLICATION_SELF . "/Languages/{$input->language_id}");
        }
    }
}
