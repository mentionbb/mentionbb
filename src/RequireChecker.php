<?php

namespace Release;

use Symfony\Component\Finder\Finder;

class RequireChecker
{
    private $staticKeyV4 = "c1ade9d2-374a-41f7-bb7c-56bd516de1e3";

    private $excludeDirs = ['.docker', '.git', '.devcontainer', '.vscode', 'vendor', 'Cache', 'Dev', 'Patches', 'ui'];
    private $excludeFiles = ['docker-compose.yml', 'composer.lock', '_hashes.json', 'DbConfig.php', 'InitialConfig.php'];

    public function buildHashes($dumpFile = true)
    {
        $files = [];

        $finder = new Finder();
        $finder->files()
            ->in(INDEX_DIR)
            ->exclude($this->excludeDirs)
            ->name(['*.php', '*.twig', '*.json', '*.yml', '*.yaml', '*.lock'])
            ->ignoreVCSIgnored(true);

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
                    $hash = \hash_hmac_file('md5', $file->getRealPath(), $this->staticKeyV4);

                    $files[$relativePath][$hash] = [
                        'filename' => $file->getFilename(),
                        'path' => $file->getRelativePathname()
                    ];
                }
            }
        }

        $this->saveHashes($files);

        return $files;
    }

    private function saveHashes($hashes)
    {
        $data = [
            'created_on' => (new \DateTime())->format(\DateTimeInterface::RFC7231),
            'v_for' => \App\App::versionNaming(),
            'data' => $hashes
        ];

        return (new \App\Util\File())->dumpFile(APPLICATION_SELF . '/_hashes.json', json_encode($data, JSON_PRETTY_PRINT));
    }
}
