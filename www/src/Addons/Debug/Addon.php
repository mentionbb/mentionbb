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

namespace Addons\Debug;

class Addon extends \App\Addon
{
    /**
     * [$event_id Unique Application ID]
     * @var integer
     */
    protected $event_id = '1ec7abae-860d-69dc-9e70-b984a0d43ef3';

    public function getEvent($listener = null)
    {
        return new \Addons\Debug\App\Event($listener);
    }
}
