<?php

namespace App\Entity;

use App\Db\Layer;

class AttachmentFileTypes extends Layer
{
    public function __construct()
    {
        parent::__construct();

        $this->setTable('attachment_filetypes');
    }

    public function getFileTypes()
    {
        $query = $this->createQueryBuilder()
            ->select('*')
            ->from($this->table)
            ->where('is_active = ?')
            ->setParameter(0, 1)
            ->executeQuery()->fetchAllAssociative();

        $this->close();

        return $query;
    }

    public function getAllFileTypes()
    {
        $query = $this->createQueryBuilder()
            ->select('*')
            ->from($this->table)
            ->executeQuery()->fetchAllAssociative();

        $this->close();

        return $query;
    }

    public function getMime(string $type_id)
    {
        $query = $this->createQueryBuilder()
            ->select('*')
            ->from($this->table)
            ->where('is_active = ?')
            ->andWhere('type_id = ?')
            ->setParameter(0, 1)
            ->setParameter(1, $type_id)
            ->executeQuery()->fetchAssociative();

        $this->close();

        return $query;
    }

    public function getMimeFromExtension(string $extension)
    {
        $query = $this->createQueryBuilder()
            ->select('*')
            ->from($this->table)
            ->where('extension = ?')
            ->setParameter(0, $extension)
            ->executeQuery()->fetchAssociative();

        $this->close();

        return $query;
    }

    public function createFileType(string $extension, string $mime_type, string $icon, int $is_active)
    {
        $query = $this->createQueryBuilder()
            ->insert($this->table)
            ->values([
                'extension' => '?',
                'mime_type' => '?',
                'icon' => '?',
                'is_active' => '?'
            ])
            ->setParameter(0, $extension)
            ->setParameter(1, $mime_type)
            ->setParameter(2, $icon)
            ->setParameter(3, $is_active)
            ->executeQuery();

        $this->close();

        return $query;
    }

    public function editFileType(string $extension, string $mime_type, string $icon, int $type_id, $is_active = 1)
    {
        $query = $this->createQueryBuilder()->update($this->table)
            ->set('extension', '?')
            ->set('mime_type', '?')
            ->set('icon', '?')
            ->set('is_active', '?')
            ->where('type_id = ?')
            ->setParameter(0, $extension)
            ->setParameter(1, $mime_type)
            ->setParameter(2, $icon)
            ->setParameter(3, $is_active)
            ->setParameter(4, $type_id)
            ->executeQuery();

        $this->close();

        return $query;
    }

    public function setActiveFileType($type_id, $active = 1)
    {
        $query = $this->createQueryBuilder()->update($this->table)
            ->set('is_active', '?')
            ->where('type_id = ?')
            ->setParameter(0, $active)
            ->setParameter(1, $type_id)
            ->executeQuery();

        $this->close();

        return $query;
    }
}
