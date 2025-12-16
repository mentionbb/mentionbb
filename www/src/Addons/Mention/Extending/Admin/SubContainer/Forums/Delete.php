<?php

namespace ComponentBundle\Extending\Admin\SubContainer\Forums;

use App\Entity\Forum as Forum;

class Delete
{
    public static function Do(array $data)
    {
        $input = \App\Repository\Set::setObject($data);

        $forum = new Forum;

        if (
            $forum->removeForum($input->forum_id)
            && \App\SubContainer\Post\Delete::allPostDeleteWithForumIdOperation($data)
            &&  \App\SubContainer\Post\Delete::DiscussionWithForumId($data)
        )
        {
            return true;
        }
    }
}
