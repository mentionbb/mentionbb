<?php

namespace ComponentBundle\Extending\Admin\SubContainer\Languages;

use App\Util\Zip;

class Export
{
    public static function doExport(array $data)
    {
        $input = \App\Repository\Set::setObject($data);

        $zip = new Zip();

        if (file_exists(APPLICATION_SELF . "/Languages/{$input->language_id}.yaml"))
        {
            $name = APPLICATION_SELF . '/Languages/' . $input->language_id . '.zip';
            $zip->compress(
                [
                    $input->language_id . '.yaml' => APPLICATION_SELF . '/Languages/' . $input->language_id . '.yaml',
                    $input->language_id => APPLICATION_SELF . '/Languages/' . $input->language_id . '/'
                ],
                $name
            );

            return $name;
        }
    }
}
