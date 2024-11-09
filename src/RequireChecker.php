<?php

use Symfony\Component\Finder\Finder;

class RequireChecker
{
    private $staticKeyV4 = "c1ade9d2-374a-41f7-bb7c-56bd516de1e3";

    private $excludeDirs = ['src/vendor', 'Cache', 'Dev', 'Patches', 'ui/editor', 'ui/images', 'ui/themes', 'ui/uploads'];
    private $excludeFiles = ['_hashes.json', 'DbConfig.php', 'InitialConfig.php'];

    private $targetExtensions = ['*.php', '*.twig', '*.json', '*.yml', '*.yaml', '*.lock', '*.js', '*.map', '*.css'];

    private $gitignoreFile = APPLICATION_SELF . '/Addons/.gitignore';
    private $hashFile = APPLICATION_SELF . '/_hashes.json';

    public function buildHashes($dumpFile = true)
    {
        $files = [];

        $finder = new Finder();
        $finder->files()
            ->in(INDEX_DIR)
            ->exclude($this->excludeDirs)
            ->name($this->targetExtensions)
            ->ignoreVCSIgnored(true)
            ->ignoreUnreadableDirs();

        $finder->filter(static function (\SplFileInfo $file)
        {
            if ($file->isFile() && preg_match('/public\/ui\/vendor/', $file->getPathname()))
            {
                if (!preg_match('/\/public\/ui\/vendor\/app|\/public\/ui\/vendor\/install|vendor\.js|vendor\.css|admin\.js.\.map|admin-vendor\.css|core\.js\.map|editor\.admin\.js\.map|editor\.js\.map|install\.js\.map|monaco\.editor\.admin\.js\.map|monaco-editor-extending/', $file->getPathname()))
                {
                    return false;
                }
            }
        });

        $finder->sort(static function (\SplFileInfo $a, \SplFileInfo $b)
        {
            $depth = substr_count($a->getRealPath(), '/') - substr_count($b->getRealPath(), '/');
            return ($depth === 0) ? strcmp($a->getRealPath(), $b->getRealPath()) : $depth;
        });

        if ($finder->hasResults())
        {
            foreach ($finder as $file)
            {
                if (!in_array($file->getBasename(), $this->excludeFiles))
                {
                    $relativePath = (\strlen($file->getRelativePath()) > 0) ? $file->getRelativePath() : '/';
                    $hash = \hash_hmac_file('sha256', $file->getRealPath(), $this->staticKeyV4);

                    $files[$relativePath][$hash] = [
                        'filename' => $file->getFilename(),
                        'path' => "./" . $file->getRelativePathname()
                    ];
                }
            }
        }

        if ($dumpFile)
        {
            $this->saveHashes($files);
        }

        return $files;
    }

    public function getHashData()
    {
        if (!file_exists($this->hashFile))
        {
            $this->buildHashes();
        }

        return json_decode($this->hashFile, true);
    }

    private function saveHashes($hashes)
    {
        $data = [
            'created_on' => (new \DateTime())->format(\DateTimeInterface::RFC7231),
            'iv4' => $this->staticKeyV4,
            'algo' => 'SHA256',
            'v_for' => \App\App::versionNaming(),
            'data' => $hashes
        ];

        return (new \App\Util\File())->dumpFile($this->hashFile, json_encode($data, JSON_PRETTY_PRINT));
    }
}
