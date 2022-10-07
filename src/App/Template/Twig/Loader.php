<?php

namespace App\Template\Twig;

class Loader
{
    public static function getClasses()
    {
        $util = new \App\Util\ClassFinder();

        $extensions = [];
        foreach ($util->getClassesByNamespace('\App\Template\Twig\Extension') as $class)
        {
            if (method_exists($class, 'getFilters'))
            {
                $className = $util->getClassNameByNamespace($class);
                $extensions[$className] = "\\{$class}";
            }
        }
        $classes = array_merge($extensions, self::getGlobalExtensions());

        return $classes;
    }

    public static function templateLoader($theme)
    {
        $directory  = APPLICATION_SELF . '/Templates/' . $theme;
        $all_files  = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($directory));

        foreach ($all_files as $file)
        {
            if ($file->isDir())
            {
                $files[] = $file->getRealPath();
            }
        }

        return $files;
    }

    public static function getTemplatesFromDir($path)
    {
        $directory  = $path;
        $all_files  = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($directory));
        $all_files = new \RegexIterator($all_files, '/\.tpl$/', \RegexIterator::MATCH);

        foreach ($all_files as $file)
        {
            if ($file->isFile())
            {
                $files[$file->getFileName()] = $file->getRealPath();
            }
        }

        return $files;
    }

    public static function getThemes()
    {
        $directory  = APPLICATION_SELF . '/Templates';
        $all_files  = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($directory, \FilesystemIterator::SKIP_DOTS),
            \FilesystemIterator::SKIP_DOTS,
            \RecursiveIteratorIterator::SELF_FIRST
        );

        foreach ($all_files as $file)
        {
            if ($file->isDir())
            {
                if ($file->getFilename() !== '.' || $file->getFilename() !== '..')
                {
                    $files[] = $file->getFilename();
                }
            }
        }

        return $files;
    }

    protected static function getGlobalExtensions()
    {
        return [
            'Debug' => '\Twig\Extension\DebugExtension'
        ];
    }
}
