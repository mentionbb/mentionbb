<?php

namespace Release\Standalone;

class Templater
{
    protected $ext = 'php';

    protected $path = APPLICATION_SELF . '/Install/Views/view.%s.%s';
    protected $allowedHeadTags = ['title', 'meta', 'link', 'script'];

    protected $template;
    protected $pageTitle = 'Mention | %s';

    protected $_globals;

    protected function getTemplate($name, $current = false)
    {
        $template = \sprintf($this->path, $name, $this->ext);

        if (!\file_exists($template))
        {
            throw new \Exception("{$name} does not exist on Template dir.");
        }

        if ($current)
        {
            $this->template = $template;
        }

        return $template;
    }

    protected function setHead(array $params)
    {
        $output = '';

        foreach ($params as $key => $val)
        {
            $rawKey = $key;
            $key = preg_replace('/\{([a-zA-Z0-9]+)_([0-9]+)\}/', '$1', $key);

            if (!\in_array($key, $this->allowedHeadTags))
            {
                throw new \Exception("Only allowed attributes: " . implode(',', $this->allowedHeadTags));
            }

            if (isset($val['content']))
            {
                if ($rawKey !== \array_key_first($params))
                {
                    $output .= "    ";
                }

                $output .= "<{$key}";
                if (isset($val['attributes']))
                {
                    foreach ($val['attributes'] as $attrKey => $attrContent)
                    {
                        $output .= " {$attrKey}=\"{$attrContent}\"";
                    }
                }
                $output .= ">{$val['content']}</{$key}>\n";
            }
            else
            {
                if ($rawKey !== \array_key_first($params))
                {
                    $output .= "    ";
                }

                $output .= "<{$key}";
                if (isset($val['attributes']))
                {
                    foreach ($val['attributes'] as $attrKey => $attrContent)
                    {
                        $output .= " {$attrKey}=\"{$attrContent}\"";
                    }
                }
                $output .= " />\n";
            }
        }

        return $output;
    }

    protected function getDoctype($custom = null)
    {
        if (!\is_null($custom))
        {
            return $custom;
        }

        return "<!DOCTYPE html>\n";
    }

    protected function getName()
    {
        return \pathinfo($this->template, PATHINFO_FILENAME);
    }

    protected function setPageTitle(string $title)
    {
        $this->pageTitle = \sprintf($this->pageTitle, $title);
    }

    protected function getPageTitle()
    {
        if (preg_match('/\%s/', $this->pageTitle, $matchRawPageTitle))
        {
            $this->pageTitle = \sprintf($this->pageTitle, 'Installer');
        }

        return $this->pageTitle;
    }

    public function addGlobals(array $data)
    {
        $this->_globals = $data;
    }

    public function render(string $template, array $params = [], $paramType = 'object')
    {
        $container = null;

        if (preg_match('/\{(.*?)\:\s?(.*?)\}/', $template, $matchRegexTemplate))
        {
            $container = $matchRegexTemplate[1];
            $template = $matchRegexTemplate[2];
        }


        if (\is_array($this->_globals))
        {
            if (class_exists('\App\Repository\Set'))
            {
                if ($paramType == 'object')
                {
                    $params = array_merge(
                        (array) \App\Repository\Set::setObject($this->_globals),
                        $params
                    );
                }
                else if ($paramType = 'array')
                {
                    $params = array_merge(
                        $this->_globals,
                        $params
                    );
                }
            }
            else
            {
                $params = array_merge(
                    $this->_globals,
                    $params
                );
            }
        }

        extract($params);

        ob_start();
        include($this->getTemplate($template, true));
        $content = ob_get_clean();

        if (!\is_null($container))
        {
            ob_start();
            include($this->getTemplate($container));
            $output = ob_get_clean();

            return $output;
        }

        return $content;
    }

    public function setPath(string $path)
    {
        $this->path = $path . '/view.%s.%s';
    }
}
