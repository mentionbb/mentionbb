<?php

/**
 * 
 * !! Mention is a paid software. !!
 * !! The maker of this software: ParantezTech | https://www.r10.net/members/90047-scarecrow.html
 * !! No used Null. !!
 * !! As long as you are using a Null version, you will not be able to receive updates. !!
 *
 * !! The software uses ParFramework2, this infrastructure cannot be used by third parties or any other project can not be produced. !!
 * 
 */

namespace Addons\Gestures;

class Addon extends \App\Addon
{
    /**
     * [$event_id Unique Application ID]
     * @var integer
     */
    protected $event_id = 'b6161fa1-df7f-491d-a7f4-fb4f66ca6ac7';

    public function getEvent($listener = null)
    {
        return new \Addons\Gestures\App\Event($listener);
    }
}
