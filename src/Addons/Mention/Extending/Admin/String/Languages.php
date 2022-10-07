<?php

namespace ComponentBundle\Extending\Admin\String;

use Symfony\Component\Finder\Finder;

class Languages
{
    public function isLanguageExist($name)
    {
        if (file_exists(APPLICATION_SELF . "/Languages/{$name}.yaml"))
        {
            return true;
        }

        return false;
    }

    public function getLanguage($name)
    {
        return (new \App\Util\Yaml())->getFile(
            APPLICATION_SELF . "/Languages/{$name}.yaml"
        )['Language']['init'];
    }

    public function getAllLanguageFiles()
    {
        $finder = new Finder();

        $finder->files()
            ->in(APPLICATION_SELF . '/Languages/*')
            ->name('*.yaml');

        $files = [];
        foreach ($finder as $file)
        {
            if ($file->getBasename() !== 'Modification.yaml')
            {
                $parent = dirname($file->getRelativePathname(), 1);
                $language_id = basename(
                    dirname($file->getPathname(), 2)
                );
                if ($language_id == 'Languages')
                {
                    $language_id = basename(
                        dirname($file->getPathname())
                    );
                }

                if ($parent !== '.')
                {
                    $files['_dir'][$language_id][$parent][$file->getBasename()] = "{$language_id}/{$parent}/" . $file->getBasename();
                }
                else
                {
                    $files['_file'][$language_id][$file->getBasename()] = "{$language_id}/" . $file->getBasename();
                }
            }
        }
        $files = $this->sortDirectoryBeforeFiles($files);

        return $files;
    }

    public function addonList()
    {
        $finder = new Finder();

        $finder->files()
            ->in(APPLICATION_SELF . '/Languages/*')
            ->name('*.yaml');

        $files = [];
        foreach ($finder as $file)
        {
            if ($file->getBasename() !== 'Modification.yaml')
            {
                $parent = dirname($file->getRelativePathname(), 1);
                $language_id = basename(
                    dirname($file->getPathname(), 2)
                );
                if ($language_id == 'Languages')
                {
                    $language_id = basename(
                        dirname($file->getPathname())
                    );
                }

                if ($parent !== '.')
                {
                    $files[$parent] = $parent;
                }
            }
        }
        
        return $files;
    }

    public function getFile($path)
    {
        if (pathinfo($path, PATHINFO_EXTENSION) !== 'yaml')
        {
            return false;
        }

        $path = APPLICATION_SELF . '/Languages/' . $path;

        if (file_exists($path))
        {
            return \file_get_contents($path);
        }

        return true;
    }

    public function getLanguagePhrase($path, $phrase)
    {
        $phrase = $this->getPhrase($phrase);

        if (pathinfo($path, PATHINFO_EXTENSION) !== 'yaml')
        {
            return false;
        }

        $path = APPLICATION_SELF . '/Languages/' . $path;

        $data = [];
        if (file_exists($path))
        {
            $data = \App\Util\Yaml::getFile($path)['Language']['items'];
        }
        $findPhrase = \App\Repository\Set::dotNotation($data, $phrase);

        if (!is_null($findPhrase))
        {
            return $findPhrase;
        }

        if (preg_match('/(\s\.|\.\s)/', $phrase, $matchUnsupportedDot) || substr($phrase, -1))
        {
            if (isset($data[$phrase]))
            {
                return $data[$phrase];
            }

            return false;
        }

        return false;
    }

    public function getPhrase($phrase)
    {
        if (!preg_match('/\./', $phrase, $matchDotNotation))
        {
            return false;
        }

        $phrase = explode('.', $phrase);
        array_shift($phrase);
        $phrase = implode('.', $phrase);

        return $phrase;
    }

    public function filenameTranslator($item, $language)
    {
        $string = \App\Repository\Set::dotNotation($language['admin']['languages']['languages'], $item);

        if (!is_null($string))
        {
            return $string;
        }

        if (preg_match('/\./', $item, $matchDot))
        {
            $item = explode('.', $item);

            return end($item);
        }

        return $item;
    }

    public function getPhraseKeys($path)
    {
        if (\pathinfo($path, PATHINFO_EXTENSION) !== 'yaml')
        {
            return false;
        }

        if (\file_exists(APPLICATION_SELF . "/Languages/{$path}"))
        {
            $data = \App\Util\Yaml::getFile(APPLICATION_SELF . "/Languages/{$path}");

            if (isset($data['Language']['items']))
            {
                return \App\Util\Arr::flattenChildArrays(
                    $data['Language']['items'],
                    \trim(
                        \mb_strtolower(\pathinfo($path, PATHINFO_FILENAME))
                    )
                );
            }

            return false;
        }

        return false;
    }

    public function getFlag($id)
    {
        $id = \mb_strtolower($id);

        if (preg_match('/-/', $id, $matchIsoCode))
        {
            $code = explode('-', $id);
            $code = end($code);

            return $code;
        }

        return $id;
    }

    public function getModifiedText($language, $phrase)
    {
        return \App\Repository\Set::dotNotation($language, $phrase);
    }

    protected function sortDirectoryBeforeFiles(array $files)
    {
        foreach ($files['_dir'] as $key => $directoryData)
        {
            foreach ($files['_dir'][$key] as $file => $item)
            {
                $data[$key][$file] = $item;
            }
        }
        foreach ($files['_file'] as $key => $fileData)
        {
            foreach ($files['_file'][$key] as $file => $item)
            {
                $data[$key][$file] = $item;
            }
        }

        return $data;
    }
}
