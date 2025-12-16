<?php

namespace ComponentBundle\Extending\Admin\SubContainer\Addons;

use App\Util\File;
use ComponentBundle\Extending\Admin\SubContainer\Modification;

class Application
{
    public static function doUpdate(array $data)
    {
        $input = \App\Repository\Set::setObject($data);

        if (!\App\App::$dev['_devMode'])
        {
            if (!\ComponentBundle\Extending\Admin\SubContainer\Modification::isExist($input->name))
            {
                (new File())->dumpFile(
                    Modification::writeModification($input->name),
                    \file_get_contents((new \App\Util\ClassFinder())->getFilenameFromNamespace($input->name))
                );
            }
        }

        (new File())->dumpFile(
            (new \App\Util\ClassFinder())->getFilenameFromNamespace($input->name),
            $input->content
        );
    }
}
