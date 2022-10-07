<?php

namespace App\Entity;

use App\Entity\Mapper;

class Attachments extends Mapper
{
    public function __construct()
    {
        parent::__construct();

        $this->setTable('attachments');
    }

    public function getAttachment(int $attach_id)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('attach_id = ?')
			->setParameter(0, $attach_id)
			->execute()->fetchAssociative();

		$this->conn->close();

		return $query;
	}

    public function getPostAttachmentList(int $post_id)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('post_id = ?')
			->setParameter(0, $post_id)
			->execute()->fetchAllAssociative();

		$this->conn->close();

		return $query;
	}

    public function createAttachment(string $filename, string $unique_id, int $post_id, int $user_id)
    {
        $query = $this->conn->createQueryBuilder()
            ->insert($this->table)
            ->values([
                'filename' => '?',
                'unique_id' => '?',
                'post_id' => '?',
                'user_id' => '?'
            ])
            ->setParameter(0, $filename)
            ->setParameter(1, $unique_id)
            ->setParameter(2, $post_id)
            ->setParameter(3, $user_id)
            ->execute();

        $this->conn->close();

        return $query;
    }

    public function removeAttachment(int $attach_id)
    {
        $query = $this->conn->createQueryBuilder()
			->delete($this->table)
			->where('attach_id = ?')
			->setParameter(0, $attach_id)
			->execute();

		$this->conn->close();

		return $query;
    }
}
