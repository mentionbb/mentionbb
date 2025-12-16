<?php

namespace App\SubContainer\Theme;

class CssSchema
{
    private $path;
    private $css = [];

    public function __construct($settings)
    {
        if ($settings->default_theme == 'Default')
        {
            $this->path = PUBLIC_DIR . "/themes/frontend/assets";
        }
        else
        {
            $this->path = PUBLIC_DIR . "/themes/{$settings->default_theme}";
        }

        if (!\file_exists("{$this->path}/rootschema.css"))
        {
            $this->css = '
            :root {
                --mention-meta-color: #fff;
                --mention-doc-bg-color: #f8f9fa;
            }
            ';
        }
        else
        {
            $this->css = \file_get_contents("{$this->path}/rootschema.css");
        }
    }

    public function getVariablesFromSchema()
    {
        $imports = $this->getImportFiles();

        foreach ($imports as $name => $file)
        {
            if (\file_exists("{$this->path}/{$file}"))
            {
                $content = \file_get_contents("{$this->path}/{$file}");
                $content = $this->removeUnwantedChars($content);

                $css[$name] = $content;
            }
        }
        $css['schema'] = $this->removeUnwantedChars($this->css);

        $variable = [];
        foreach ($css as $name => $content)
        {
            preg_match_all('/(?=\#|\.|:root|body|header|section|footer)(.+?)\s?\{(.*?)\}/si', $content, $matchVariables);
            foreach ($matchVariables[0] as $i => $selector)
            {
                foreach (\explode(';', $matchVariables[2][$i]) as $val)
                {
                    if (\strlen(\trim($val)) > 0)
                    {
                        list($name, $value) = \explode(':', $val);
                        $variable[$matchVariables[1][$i]][\trim($name)] = \trim($value);
                    }
                }
            }
        }

        return $variable;
    }

    protected function getImportFiles(): array
    {
        $files = [];

        preg_match_all('/\/\*\s?\[import\]\s\*\/(.*?)\/\*\s?\[\/import\]\s\*\//si', $this->css, $matchImportFiles);
        foreach ($matchImportFiles[1] as $imports)
        {
            $imports = $this->removeUnwantedChars($imports);
            foreach (\explode(';', $imports) as $import)
            {
                preg_match('/url\(\'?\"?([a-zA-Z0-9-]+)\.(css|less|sass)\'?\"?\)/si', $import, $matchImportFile);

                if ($matchImportFile)
                {
                    $files[$matchImportFile[1]] = "{$matchImportFile[1]}.{$matchImportFile[2]}";
                }
            }
        }

        return $files;
    }

    private function removeUnwantedChars($content): string
    {
        return \str_replace(
            ["\r\n", "\t"],
            "",
            $content
        );
    }
}
