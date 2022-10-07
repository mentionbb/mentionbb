<?php

namespace ComponentBundle\Extending\Admin\String;

class Templates
{
    public function getTemplates(): array
    {
        $all_files  = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(APPLICATION_SELF));
        $all_files = new \RegexIterator($all_files, '/\.tpl$/', \RegexIterator::MATCH);
        $all_files = new \App\Util\FileSortedIterator($all_files);

        $files = [];
        foreach ($all_files as $file)
        {
            if ($file->isFile())
            {
				if (preg_match('/(templates|Templates|template|templates)/', $file->getRealPath(), $matchTemplates))
                {
                    if (preg_match('/Addons/', $file->getRealPath(), $matchAddonTemplate))
                    {
                        $path = explode('Addons', $file->getRealPath(), 2)[1];
                        $path = "Addons/{$path}";
                    }
                    else
                    {
                        $path = explode('Templates', $file->getRealPath(), 2)[1];
                        $path = "Templates/{$path}";
                    }
                    $path = str_replace(['\\', '//'], ['/', '/'], $path);

                    $explode = explode('/', $path);
                    $parent = $explode[1];
                    if ($explode[2] !== 'Templates')
                    {
                        if (isset($explode[4]))
                        {
                            $child = "{$explode[3]}/{$explode[4]}";
                        }
                        else
                        {
                            $child = "{$parent}/{$explode[2]}";
                        }
                    }
                    else
                    {
                        if (isset($explode[4]))
                        {
                            $child = "{$explode[3]}/{$explode[4]}";
                        }
                        else
                        {
                            $child = "{$parent}/{$explode[3]}";
                        }
                    }
                    $explode = explode('/', $child);

                    if (!preg_match('/\.tpl/', $explode[1], $matchTpl))
                    {
                        $files[$explode[0]][$explode[1]][$file->getFileName()] = [
                            'name' => $file->getFileName(),
                            'path' => $path
                        ];
                    }
                    else
                    {
                        $files[$explode[0]]['_file'][$explode[1]][$file->getFileName()] = [
                            'name' => $file->getFileName(),
                            'path' => $path
                        ];
                    }
                }
            }
        }

        return $files;
    }

    public function getTemplate($path)
    {
        if (pathinfo($path, PATHINFO_EXTENSION) !== 'tpl')
        {
            return false;
        }

        $path = APPLICATION_SELF . '/' . $path;

        if (file_exists($path))
        {
            return \file_get_contents($path);
        }

        return true;
    }
}
