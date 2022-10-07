<?php

namespace ComponentBundle\Extending\Admin\SubContainer\Languages;

use App\Util\Yaml;

use Symfony\Component\Finder\Finder;

class Search
{
    public static function doSearch(array $data)
    {
        $input = \App\Repository\Set::setObject($data);

        $yaml = new Yaml();
        $finder = new Finder();

        $finder->files();

        if ($input->language !== '__default' && $input->addon !== '__default')
        {
            $finder->in(APPLICATION_SELF . "/Languages/{$input->language}/{$input->addon}/");
        }
        else if ($input->language == '__default' && $input->addon !== '__default')
        {
            $finder->in(APPLICATION_SELF . "/Languages/*/{$input->addon}/");
        }
        else if ($input->language !== '__default' && $input->addon == '__default')
        {
            $finder->in(APPLICATION_SELF . "/Languages/{$input->language}/");
        }
        else if ($input->language == '__default' && $input->addon == '__default')
        {
            $finder->in(APPLICATION_SELF . "/Languages/*");
        }

        $finder->name('*.yaml');

        $files = [];
        foreach ($finder as $file)
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

            $items = \App\Util\Arr::flattenChildArrays(
                $yaml->parse($file->getContents())['Language']['items'],
                \trim(
                    \mb_strtolower(\pathinfo($file->getBasename(), PATHINFO_FILENAME))
                )
            );

            foreach ((array) $items as $key => $val)
            {
                if ($parent !== '.')
                {
                    if ($input->addon !== '__default')
                    {
                        $files[$key] = [
                            'file' => "{$language_id}/{$input->addon}/{$file->getBasename()}",
                            'phrase' => $key,
                            'phrasePath' => $input->addon,
                            'language' => $language_id,
                            'text' => $val
                        ];
                    }
                    else
                    {
                        $files[$key] = [
                            'file' => "{$language_id}/{$parent}/{$file->getBasename()}",
                            'phrase' => $key,
                            'phrasePath' => $parent,
                            'language' => $language_id,
                            'text' => $val
                        ];
                    }
                }
                else
                {
                    if ($input->addon !== '__default')
                    {
                        $files[$key] = [
                            'file' => "{$language_id}/{$input->addon}/{$file->getBasename()}",
                            'phrase' => $key,
                            'phrasePath' => $input->addon,
                            'language' => $language_id,
                            'text' => $val
                        ];
                    }
                    else
                    {
                        $files[$key] = [
                            'file' => "{$language_id}/{$file->getBasename()}",
                            'phrase' => $key,
                            'phrasePath' => '__null',
                            'language' => $language_id,
                            'text' => $val
                        ];
                    }
                }
            }
        }
        $result = array_filter($files, function ($item) use ($input)
        {
            if (stripos($item['text'], $input->query) !== false)
            {
                return true;
            }
            return false;
        });

        return $result;
    }
}
