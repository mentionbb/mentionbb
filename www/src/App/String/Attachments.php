<?php

namespace App\String;

use App\Entity\Attachments as AttachmentEntity;
use App\Entity\AttachmentFileTypes;

class Attachments
{
    protected $attachments;
    protected $fileTypes;

    public function __construct()
    {
        $this->attachments = new AttachmentEntity();
        $this->fileTypes = new AttachmentFileTypes();
    }

    public function getList()
    {
        return $this->attachments->findAll();
    }

    public function getAttachmentsByPostId($post_id)
    {
        return $this->attachments->getPostAttachmentList($post_id);
    }

    public function getAttachmentSize($attach_id)
    {
        $attach = $this->getAttachmentByAttachId($attach_id);

        return filesize(PUBLIC_DIR . "/uploads/attachments/{$attach['unique_id']}.attachment");
    }

    public function getAttachmentByAttachId($attach_id)
    {
        return $this->attachments->getAttachment($attach_id);
    }

    public function getAllowedFileTypes()
    {
        return $this->fileTypes->getFileTypes();
    }

    public function getMime($filename)
    {
        $extension = \mb_strtolower(pathinfo($filename, PATHINFO_EXTENSION));

        return $this->fileTypes->getMimeFromExtension($extension);
    }
}
