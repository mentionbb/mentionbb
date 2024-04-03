<?php

namespace App\Entity;

use App\Db\Layer;

class Session extends Layer
{
    public function __construct()
    {
        parent::__construct();

        /**
         * Set current table 'sessions'
         */
        $this->setTable('sessions');
    }

    /**
     * [getSession Get user session from Session ID]
     * @param  [string] $session_id [Unique browser Session ID]
     * @return [mixed]
     */
    public function getSession($session_id)
    {
        $query = $this->createQueryBuilder()->select("*")
            ->from($this->table)
            ->where('session_id = ?')
            ->setParameter(0, $session_id)
            ->executeQuery();

        $this->close();

        return $query;
    }

    /**
     * [setSession Set current session from data]
     * @param [array] $data [mixed user data]
     */
    public function setSession($data)
    {
        $query = $this->createQueryBuilder()->update($this->table)
            ->set('dateline', '?')
            ->set('route', '?')
            ->where('session_id = ?')
            ->andWhere('type = ?')
            ->setParameter(0, $data['dateline'])
            ->setParameter(1, $data['route'])
            ->setParameter(2, $data['session_id'])
            ->setParameter(3, $data['type'])
            ->executeQuery();

        $this->close();

        return $query;
    }

    /**
     * [addSession Add session from data]
     * @param [object] $data [mixed user data]
     */
    public function addSession($data)
    {
        $query = $this->createQueryBuilder()->insert($this->table)
            ->setValue('dateline', '?')
            ->setValue('session_id', '?')
            ->setValue('type', '?')
            ->setValue('ip', '?')
            ->setValue('route', '?')
            ->setValue('user_id', '?')
            ->setParameter(0, $data['dateline'])
            ->setParameter(1, $data['session_id'])
            ->setParameter(2, $data['type'])
            ->setParameter(3, $data['ip'])
            ->setParameter(4, $data['route'])
            ->setParameter(5, $data['user_id'])
            ->executeQuery();

        $this->close();

        return $query;
    }

    /**
     * [clearAll Clear all session data]
     * @return [boolean]
     */
    public function clearAll()
    {
        $query = $this->createQueryBuilder()
            ->delete($this->table)
            ->executeQuery();

        $this->close();

        return $query;
    }
}
