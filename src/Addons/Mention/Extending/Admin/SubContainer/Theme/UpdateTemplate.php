<?php

namespace ComponentBundle\Extending\Admin\SubContainer\Theme;

use App\Util\File;
use ComponentBundle\Extending\Admin\SubContainer\Modification;

class UpdateTemplate
{
    public static function doUpdate(array $data)
    {
        $input = \App\Repository\Set::setObject($data);

        if (!\App\App::$dev['_devMode'])
        {
            if (!\ComponentBundle\Extending\Admin\SubContainer\Modification::isExist($input->path))
            {
                (new File())->dumpFile(
                    Modification::writeModification($input->path),
                    \file_get_contents(APPLICATION_SELF . '/' . $input->path)
                );
            }
        }

        (new File())->dumpFile(APPLICATION_SELF . '/' . $input->path, $input->content);
    }
}
