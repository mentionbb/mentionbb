<?php

namespace ComponentBundle\Extending\Admin\SubContainer\Languages;

use App\Util\Yaml;

class Edit
{
    public static function doEdit(array $data)
    {
        $input = \App\Repository\Set::setObject($data);

        if (file_exists(APPLICATION_SELF . "/Languages/{$input->_lang_id}.yaml"))
        {
            $fileData = [
                'id' => $data['id'],
                'name' => $data['name'],
                'title' => $data['title'],
                'desc' => $data['desc'],
                'path' => $data['name'],
                'text_direction' => $data['dir'],
                'timer' => [
                    'zone' => $data['zone'],
                    'format' => $data['format'],
                    'date_format' => $data['date_format'],
                    'date_format_simple' => $data['date_format_simple'],
                    'year_format' => $data['year_format']
                ]
            ];

            (new Yaml())->dumpFile(
                APPLICATION_SELF . "/Languages/{$input->_lang_id}.yaml",
                [
                    'Language' => [
                        'init' => $fileData
                    ]
                ]
            );
        }
    }
}
