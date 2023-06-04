<?php

namespace App\Builder;

class VersionBuilder
{
    protected $phrase;
    protected $file;
    protected $newBuild;

    private $builderBase = [
        'version' => 1,
        'versionId' => '',
        'versionTitle' => '1.0 developer preview',
        'contains' => [
            'status' => 'stable-beta',
            'installable' => 'true',
            'upgradable' => 'true'
        ]
    ];

    public function __construct()
    {
        $this->phrase = new \App\Phrase();
        $this->phrase->setContainer(new \App\Repository\Request());

        $this->file = new \App\Util\File();
    }

    public function addUpdate()
    {
        $list = $this->getBuildList();
        $lastBuild_Data = \App\Util\Arr::arrayKeyMaxValue($list);

        $update = substr($lastBuild_Data['versionId'], 2, 3);
        $replace = substr_replace($lastBuild_Data['versionId'], ($update + 1), 3, 2);

        $this->newBuild = $replace;
    }

    public function getCurrentBuild()
    {
        return json_decode(
            file_get_contents(APPLICATION_SELF . '/install.lock'),
            true
        );
    }

    public function getBuildList()
    {
        return json_decode(
            file_get_contents(APPLICATION_SELF . '/Install/versions.json'),
            true
        );
    }

    public function writer()
    {
        $last = $this->builderBase;
        $last['versionId'] = $this->newBuild;

        $this->writeList($last);
    }

    private function writeList($last)
    {
        $listData = [];
        foreach($this->getBuildList() as $val)
        {
            $listData["build:{$val['versionId']}"] = $val;
        }
        
        $data = \array_merge($listData, ["build:{$this->newBuild}" => $last]);
        $this->file->dumpFile(
            APPLICATION_SELF . '/Install/versions.json',
            $this->phrase->render('json')->serialize($data, false)->outputJson()
        );

        return $this->file->dumpFile(
            APPLICATION_SELF . '/install.lock',
            $this->phrase->render('json')->serialize($last, false)->outputJson()
        );
    }
}
