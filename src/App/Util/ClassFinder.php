<?php
## This Source from: https://stackoverflow.com/a/46837377

namespace App\Util;

final class ClassFinder
{
    private static $composer = null;
    private static $classes  = [];

    public function __construct()
    {
        self::$composer = null;
        self::$classes  = [];

        self::$composer = require FRAMEWORK_LIBS . '/vendor/autoload.php';

        if (false === empty(self::$composer))
        {
            self::$classes  = array_keys(self::$composer->getClassMap());
        }
    }

    public function getClasses()
    {
        $allClasses = [];

        if (false === empty(self::$classes))
        {
            foreach (self::$classes as $class)
            {
                $allClasses[] = '\\' . $class;
            }
        }

        return $allClasses;
    }

    public function getClassesByNamespace($namespace)
    {
        #Thanks to https://stackoverflow.com/a/27440555
        $namespace = strtr($namespace, '\\', '/');

        $path = APPLICATION_SELF . "/{$namespace}";
        $fqcns = [];

        $allFiles = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path));
        $phpFiles = new \RegexIterator($allFiles, '/\.php$/');
        foreach ($phpFiles as $phpFile)
        {
            $content = file_get_contents($phpFile->getRealPath());
            $tokens = token_get_all($content);
            $namespace = '';

            for ($index = 0; isset($tokens[$index]); $index++)
            {

                if (!isset($tokens[$index][0]))
                {
                    continue;
                }
                if (T_NAMESPACE === $tokens[$index][0])
                {
                    $index += 2; // Skip namespace keyword and whitespace
                    while (isset($tokens[$index]) && is_array($tokens[$index]))
                    {
                        $namespace .= $tokens[$index++][1];
                    }
                }
                if (T_CLASS === $tokens[$index][0] && T_WHITESPACE === $tokens[$index + 1][0] && T_STRING === $tokens[$index + 2][0])
                {

                    $index += 2; // Skip class keyword and whitespace
                    $fqcns[] = $namespace . '\\' . $tokens[$index][1];

                    # break if you have one class per file (psr-4 compliant)
                    # otherwise you'll need to handle class constants (Foo::class)
                    break;
                }
            }
        }

        return $fqcns;
    }

    public function getClassesWithTerm($term)
    {
        $termUpper = strtoupper($term);
        return array_filter($this->getClasses(), function ($class) use ($termUpper)
        {
            $className = strtoupper($class);
            if (
                false !== strpos($className, $termUpper) and
                false === strpos($className, strtoupper('Abstract')) and
                false === strpos($className, strtoupper('Interface'))
            )
            {
                return $class;
            }
            return false;
        });
    }

    public function getClassNameByNamespace($namespace)
    {
        return substr($namespace, strrpos($namespace, '\\') + 1);
    }

    public function getFilenameFromNamespace($namespace)
    {
        $class = $namespace;
        $reflector = new \ReflectionClass($class);

        return $reflector->getFileName();
    }
}
