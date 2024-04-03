<?php

namespace Release;

use Symfony\Component\Finder\Finder;

class RequireChecker
{
    private $staticKeyV4 = "c1ade9d2-374a-41f7-bb7c-56bd516de1e3";

    private $excludeDirs = ['vendor', 'Cache', 'Dev', 'Patches', 'ui'];
    private $excludeFiles = ['_hashes.json', 'DbConfig.php', 'InitialConfig.php'];

    private $gitignoreFile = APPLICATION_SELF . '/Addons/.gitignore';
    private $hashFile = APPLICATION_SELF . '/_hashes.json';

    public function buildHashes($dumpFile = true)
    {
        $this->createTemporaryGitignore();

        $files = [];

        $finder = new Finder();
        $finder->files()
            ->in(INDEX_DIR)
            ->exclude($this->excludeDirs)
            ->name(['*.php', '*.twig', '*.json', '*.yml', '*.yaml', '*.lock'])
            ->ignoreVCSIgnored(true)
            ->ignoreUnreadableDirs();

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

        (new \App\Util\File())->remove($this->gitignoreFile);

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

    private function createTemporaryGitignore()
    {
        $data = "/*\n\n";
        $data .= "!.gitignore\n";
        $data .= "!Mention.yaml\n";
        $data .= "!PublicApp.yaml\n";
        $data .= "!Mention/**";

        return (new \App\Util\File())->dumpFile($this->gitignoreFile, $data);
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
