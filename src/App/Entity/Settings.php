<?php

namespace App\Entity;

use App\Db\Layer;

class Settings extends Layer
{
    public function __construct()
    {
        parent::__construct();

        /**
         * Set current table 'settings'.
         */
        $this->setTable('settings');
    }

    /**
     * [getSettings Get app main settings]
     * @return [object]
     */
    public function getSettings()
    {
        /**
         * @template {{ app.settings.name }}
         */
        $result = $this->findAll(false);

        foreach ($result as $settings)
        {
            $item[$settings['name']] = $settings['value'];
        }

        return \App\Repository\Set::setObject($item);
    }

    /**
     * [setSettings Set app main settings]
     * @param [string] $name  [Settings column name]
     * @param [string] $value [New value for column]
     */
    public function setSettings($name, $value)
    {
        $query = $this->createQueryBuilder()->update($this->table)
            ->set('value', '?')
            ->where('name = ?')
            ->setParameter(0, $value)
            ->setParameter(1, $name)
            ->executeQuery();

        $this->close();

        return $query;
    }

    /**
     * [getSettings Get app main setting groups]
     * @return [object]
     */
    public function getSettingGroups()
    {
        $query = $this->createQueryBuilder()->select("*")
            ->from($this->table)
            ->groupBy('group_name')
            ->executeQuery()
            ->fetchAllAssociative();

        $this->close();

        return $query;
    }

    /**
     * [getSettings Get app main settings from group_nane]
     * @return [object]
     */
    public function getSettingsFromGroupName(string $group_name)
    {
        $query = $this->createQueryBuilder()->select("*")
            ->from($this->table)
            ->where('group_name = ?')
            ->setParameter(0, $group_name)
            ->executeQuery()
            ->fetchAllAssociative();

        $this->close();

        return $query;
    }
}
