<?php

namespace ComponentBundle\Extending\Admin\SubContainer\Forums;

use App\Entity\Forum as Forum;

class Edit
{
    public static function Do(array $data)
    {
        $input = \App\Repository\Set::setObject($data);

        $forum = new Forum;

        if($forum->editForum($input->forum_id, $input->parent_id, $input->forum_title, $input->forum_order, $input->forum_description))
        {
            return true;
        }
    }
}
