<?php

namespace ComponentBundle\Extending\Admin\SubContainer\Forums;

use App\Entity\Forum as Forum;

class Create
{
    public static function Do(array $data)
    {
        $input = \App\Repository\Set::setObject($data);

        $forum = new Forum;

        if ($forum->createForum($input->parent_id, $input->forum_title, $input->forum_description, $input->forum_order, $input->forum_icon))
        {
            return true;
        }
    }
}
