<?php

namespace ComponentBundle\Extending\Admin\SubContainer\Services;

use App\Entity\Social;

class Create
{
    public static function Do(array $data)
    {
        $input = \App\Repository\Set::setObject($data);

        $social = new Social;

        if ($social->createService($input->title, $input->name, $input->api_keys, $input->callback, $input->is_active))
        {
            return true;
        }
    }
}
