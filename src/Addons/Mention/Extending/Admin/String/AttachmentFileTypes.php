<?php

namespace ComponentBundle\Extending\Admin\String;

use App\Entity\AttachmentFileTypes as AttachmentFileTypesEntity;

class AttachmentFileTypes
{
    protected $attc;

    public function __construct()
    {
        $this->attc = new AttachmentFileTypesEntity();
    }

    public function getFileTypes()
    {
        return $this->attc->getAllFileTypes();
    }
}
