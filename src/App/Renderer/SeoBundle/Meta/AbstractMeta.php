<?php

namespace App\Renderer\SeoBundle\Meta;

abstract class AbstractMeta
{
    protected $_meta = [];

    public function addMetaTag(string $name, $data = [])
    {
        if (!is_array($data))
        {
            throw new \Exception('Data must be an array.');
        }

        $this->_meta[$name] = $data;
    }

    public function buildMetas()
    {
        return $this->_meta;
    }
}
