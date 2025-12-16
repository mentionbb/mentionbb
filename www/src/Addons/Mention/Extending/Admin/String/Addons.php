<?php

namespace ComponentBundle\Extending\Admin\String;

class Addons
{
    public function getAddons()
    {
        $addons = \App\Repository\Set::setArray(\App\Repository\Config\Schema::eventInitialize(true));
        unset($addons['AppId_0']);
        foreach ($addons as $item)
        {
            $order[$item->event_id] = $item->settings->order;
        }
        array_multisort($order, SORT_ASC, $addons);

        return $addons;
    }
}
