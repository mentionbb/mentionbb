<?php

namespace App\SubContainer\User;

use App\Entity\User;

class Ban
{
    public static function Do($data)
    {
        $input = \App\Repository\Set::setObject($data);

        $expires = str_replace('/', '-', $input->expires);
        $expires = strtotime('+1 day', strtotime($expires));

        $user = new User();
        if ($user->banUser($expires, $input->text, $input->user_id))
        {
            return true;
        }
    }

    public static function unDo($data)
    {
        $input = \App\Repository\Set::setObject($data);

        $user = new User();
        if ($user->unbanUser($input->ban_id))
        {
            return true;
        }
    }
}
