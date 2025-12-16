<?php

namespace ComponentBundle\Extending\Admin\SubContainer\Languages;

use App\Util\Yaml;

class EditPhrase
{
    public static function doEdit(array $data)
    {
        $input = \App\Repository\Set::setObject($data);

        $yaml = new Yaml();
        $modificationFilePath = APPLICATION_SELF . "/Languages/{$input->language}/Modification.yaml";
        $modificationFile = $yaml->getFile($modificationFilePath);

        if (\mb_strlen($input->text) > 0)
        {
            $data = \App\Repository\Set::flattenToMultiDimensional([$input->phrase => $input->text]);
            $data = \array_replace_recursive($modificationFile, ['Language' => ['items' => $data]]);
        }
        else
        {
            $data = \App\Repository\Set::flattenToMultiDimensional([$input->phrase => '']);
            $data = \array_replace_recursive($modificationFile, ['Language' => ['items' => $data]]);
            $data = \App\Util\Arr::removeEmptyValuesAndSubarrays($data['Language']['items']);
            $data = ['Language' => ['items' => $data]];
        }

        $yaml->dumpFile(
            $modificationFilePath,
            $data
        );
    }
}
