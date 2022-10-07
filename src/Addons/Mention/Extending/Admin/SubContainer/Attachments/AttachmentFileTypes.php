<?php

namespace ComponentBundle\Extending\Admin\SubContainer\Attachments;

use App\Entity\AttachmentFileTypes as AttachmentFileTypesEntity;

class AttachmentFileTypes
{
    public static function doEdit(array $data)
    {
        $input = \App\Repository\Set::setObject($data);

        $attc = new AttachmentFileTypesEntity;

        if ($attc->editFileType($input->extension, $input->mime_type, $input->icon, $input->type_id, $input->is_active))
        {
            return true;
        }
    }

    public static function doCreate(array $data)
    {
        $input = \App\Repository\Set::setObject($data);

        $attc = new AttachmentFileTypesEntity;

        if ($attc->createFileType($input->extension, $input->mime_type, $input->icon, $input->is_active))
        {
            return true;
        }
    }

    public static function doSetActive(array $data)
    {
        $input = \App\Repository\Set::setObject($data);

        $attc = new AttachmentFileTypesEntity;

        if ($attc->setActiveFileType($input->type_id, $input->status))
        {
            return true;
        }
    }
}
