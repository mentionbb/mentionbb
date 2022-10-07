<?php

namespace ComponentBundle\Extending\Admin\String;

class Theme
{
    public function getCss()
    {
        $all_files  = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(PUBLIC_DIR . '/themes/frontend/assets'), \FilesystemIterator::SKIP_DOTS, \RecursiveIteratorIterator::SELF_FIRST);
        $all_files = new \RegexIterator($all_files, '/\.(css|less|sass)$/', \RegexIterator::MATCH);

        foreach ($all_files as $file)
        {
            if ($file->isFile())
            {
                if (!preg_match('/compiled\.([a-zA-Z]+)\.css/', $file->getFileName(), $matchCompiledCss))
                {
                    $files[$file->getFileName()] = [
                        'name' => $file->getFileName(),
                        'path' => $file->getRealPath()
                    ];
                }
            }
        }

        return $files;
    }

    public function getCssFile($file)
    {
        $file = PUBLIC_DIR . "/themes/frontend/assets/{$file}";

        if (file_exists($file))
        {
            return \file_get_contents($file);
        }

        return true;
    }
}
