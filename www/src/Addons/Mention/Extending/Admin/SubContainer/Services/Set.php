<?php

namespace ComponentBundle\Extending\Admin\SubContainer\Services;

use App\Entity\Social;

class Set
{
    public static function Do(array $data)
    {
        $input = \App\Repository\Set::setObject($data);

        $social = new Social;

        if ($social->setService($input->site_id, $input->title, $input->name, $input->api_keys, $input->callback, $input->is_active))
        {
            return true;
        }
    }
}
