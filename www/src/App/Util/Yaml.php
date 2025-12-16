<?php

namespace App\Util;

use Symfony\Component\Yaml\Yaml as SymfonyYaml;

class Yaml
{
    public static function dump($data)
    {
        if (!is_array($data))
        {
            throw new \Exception('Data must be an array');
        }

        return SymfonyYaml::dump($data, \App\Util\Arr::getArrayDepth($data), 2);
    }

    public static function dumpFile($path, $data)
    {
        return (new \App\Util\File())->dumpFile($path, self::dump($data));
    }

    public static function parse($data)
    {
        return SymfonyYaml::parse($data, SymfonyYaml::PARSE_OBJECT);
    }

    public static function getFile($file)
    {
        return self::parse(file_get_contents($file));
    }
}
