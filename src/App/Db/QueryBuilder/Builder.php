<?php

namespace App\Db\QueryBuilder;

use Doctrine\DBAL\Query\QueryBuilder;

class Builder extends QueryBuilder
{
    /** @var \Symfony\Component\Cache\Adapter\ApcuAdapter|\Symfony\Component\Cache\Adapter\ArrayAdapter|\Symfony\Component\Cache\Adapter\MemcachedAdapter|\Symfony\Component\Cache\Adapter\DoctrineDbalAdapter|\Symfony\Component\Cache\Adapter\PhpFilesAdapter|\Symfony\Component\Cache\Adapter\RedisAdapter */
    protected $cache;

    protected $table;

    public function getCacheLayer($cache)
    {
        $this->cache = $cache;
    }

    public function getTable($table)
    {
        $this->table = $table;
    }

    /**
     * executeQuery An alternative version of executeQuery.
     *
     * @return Doctrine\DBAL\Result
     */
    public function executeQuery(): \Doctrine\DBAL\Result
    {
        $resetCacheAllowedTypes = ['delete', 'update', 'insert'];
        $resetCacheExceptTables = ['sessions', 'users'];

        if (
            !in_array($this->table, $resetCacheExceptTables)
            && in_array($this->getQueryType(), $resetCacheAllowedTypes)
        )
        {
            $this->cache->clear();
        }

        $exc = \App\Util\AccessableReflection::get($this, 'connection', [], true)
            ->executeQuery(
                $this->getSQL(),
                \App\Util\AccessableReflection::get($this, 'params', [], true),
                \App\Util\AccessableReflection::get($this, 'types', [], true),
                \App\Util\AccessableReflection::get($this, 'resultCacheProfile', [], true)
            );

        return $exc;
    }

    public function getQueryType()
    {
        $query = \App\Util\AccessableReflection::get($this, 'type', [], true);

        $type = null;
        if (is_object($query))
        {
            return \strtolower($query->name);
        }

        return $type;
    }
}
