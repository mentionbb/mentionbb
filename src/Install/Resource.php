<?php

namespace Install;

class Resource
{
    protected $_data;

    private $_common;

    public function __construct()
    {
        $this->_data = [
            'build' => [
                'versionNaming' => \App\App::versionNaming(),
                'versionId' => \App\App::$build['versionId']
            ],
            'install' => [
                'versionNaming' => '1.01'
            ],
            'year' => date('Y', time())
        ];

        $this->_common = \App\Util\Yaml::getFile(APPLICATION_SELF . '/Install/Resource/common.yaml');
    }

    public function getVersionText()
    {
        return $this->getPhrase(
            $this->_common['app']['version']
        );
    }

    public function getInstallerVersionText()
    {
        return $this->getPhrase(
            $this->_common['app']['installer_version']
        );
    }

    public function getCopyrightText()
    {
        return $this->getPhrase(
            $this->_common['app']['copyright']['text']
        );
    }

    public function getLinks(): array
    {
        $list = [];
        foreach ($this->_common['app']['copyright']['links'] as $key => $link)
        {
            if (preg_match('/\|/', $link, $matchLinkTitle))
            {
                $linkWithTitle = explode('|', $link);
                $list[$key] = "<a target=\"_blank\" href=\"{$linkWithTitle[0]}\">{$linkWithTitle[1]}</a>";
            }
            else
            {
                $list[$key] = "<a target=\"_blank\" href=\"{$link}\">{$link}</a>";
            }
        }

        return $list;
    }

    private function getPhrase($string)
    {
        $source = preg_replace_callback('/\{([a-zA-Z0-9]+)(?:\:)?([a-zA-Z0-9]+)?\}/', function ($matches) use ($string)
        {
            if (array_key_exists(2, $matches))
            {
                if (!isset($this->_data[$matches[1]][$matches[2]]))
                {
                    return $string;
                }

                return $this->_data[$matches[1]][$matches[2]];
            }
            else
            {
                if (!isset($this->_data[$matches[1]]))
                {
                    return $string;
                }

                return $this->_data[$matches[1]];
            }
        }, $string);

        return $source;
    }
}
