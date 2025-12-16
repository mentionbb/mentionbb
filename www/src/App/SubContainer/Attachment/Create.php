<?php

namespace App\SubContainer\Attachment;

use App\Entity\Attachments;

class Create
{
    public static function Do(array $data)
    {
        $input = \App\Repository\Set::setObject($data);

        $attachments = new Attachments;

        $create = $attachments->createAttachment($input->filename, $input->uuid, $input->post_id, $input->user_id);
        if ($create)
        {
            return true;
        }
    }
}
