<?php

namespace ComponentBundle\Extending\Admin\SubContainer\Languages;

use App\Util\File;
use App\Util\Yaml;

class Create
{
    public static function doCreate(array $data)
    {
        $input = \App\Repository\Set::setObject($data);

        if (file_exists(APPLICATION_SELF . "/Languages/{$input->name}.yaml"))
        {
            $name = $input->name . "_" . rand(0, 1000);
        }
        else
        {
            $name = $input->name;
        }

        $fileData = [
            'id' => $input->id,
            'name' => $name,
            'title' => $input->title,
            'desc' => $input->desc,
            'path' => $name,
            'text_direction' => $input->dir,
            'timer' => [
                'zone' => $input->zone,
                'format' => $input->format,
                'date_format' => $input->date_format,
                'date_format_simple' => $input->date_format_simple,
                'year_format' => $input->year_format
            ]
        ];

        (new Yaml())->dumpFile(
            APPLICATION_SELF . "/Languages/{$name}.yaml",
            [
                'Language' => [
                    'init' => $fileData
                ]
            ]
        );

        (new File())->copy(APPLICATION_SELF . "/Languages/{$input->copyLanguageName}", APPLICATION_SELF . "/Languages/{$name}");
    }
}
