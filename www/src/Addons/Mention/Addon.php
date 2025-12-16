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

namespace ComponentBundle;

class Addon extends \App\Addon
{
    /**
     * [$event_id Unique Application ID]
     * @var integer
     */
    protected $event_id = 'e4888e0e-364f-4feb-88b9-e961088460c4';

    public function getEvent($listener = null)
    {
        return new \ComponentBundle\App\Event($listener);
    }
}
