<?php

namespace ComponentBundle\Extending\Admin\Entity;

use App\Entity\Mapper;

class AdminNavigations extends Mapper
{
    public function __construct()
    {
        parent::__construct();

        $this->setTable('admin_navigations');
    }

    public function getNavigations($parent_id = 0)
    {
        $query = $this->conn->createQueryBuilder()
            ->select('*')
            ->from($this->table)
            ->where('parent_id = ?')
            ->orderBy('navigation_order', 'ASC')
            ->setParameter(0, $parent_id);

        $fetch = $this->setQuery($query)
            ->executeQuery()
            ->fetchAllAssociative();

        $this->conn->close();

        return $fetch;
    }

    public function getNavigationByName($name)
    {
        $query = $this->conn->createQueryBuilder()
            ->select('*')
            ->from($this->table)
            ->where('name = ?')
            ->setParameter(0, $name);

        $fetch = $this->setQuery($query)
            ->executeQuery()
            ->fetchAssociative();

        $this->conn->close();

        return $fetch;
    }

    public function getNavigationByLink($link)
    {
        $query = $this->conn->createQueryBuilder()
            ->select('*')
            ->from($this->table)
            ->where('link = ?')
            ->setParameter(0, $link);

        $fetch = $this->setQuery($query)
            ->executeQuery()
            ->fetchAssociative();

        $this->conn->close();

        return $fetch;
    }

    public function getNavigationById($nav_id)
    {
        $query = $this->conn->createQueryBuilder()
            ->select('*')
            ->from($this->table)
            ->where('nav_id = ?')
            ->setParameter(0, $nav_id);

        $fetch = $this->setQuery($query)
            ->executeQuery()
            ->fetchAssociative();

        $this->conn->close();

        return $fetch;
    }
}
