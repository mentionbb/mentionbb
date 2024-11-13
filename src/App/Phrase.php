<?php

namespace App;

class Phrase
{
    public $_routes;

    protected $request;

    public function setContainer(\App\Repository\Request $request)
    {
        $this->request = $request;
    }

    public function setupRouteParams()
    {
        $routes = (object) \App\Mvc\Pub::initRoutes();

        foreach ($routes->routes->all() as $key => $value)
        {
            $key = preg_replace('/(\w+)_(\w+)/', '$2', $key);
            $this->_routes[$key] = $value;
        }
    }

    public function buildLink($path, array $params, $fullUrl = false)
    {
        $path = ucwords($path);

        if (!isset($this->_routes[$path]))
        {
            return false;
        }

        $urlPath = $this->_routes[$path]->getPath();

        foreach ($params as $key => $val)
        {
            if (isset($this->_routes[$path]->getOptions()['friendly_links']))
            {
                foreach ($this->_routes[$path]->getOptions()['friendly_links'] as $sefLinkRenderer)
                {
                    $val = $this->buildSeoLink(
                        \App\Renderer\Title::Render($val)
                    );
                }
            }

            $urlPath = str_replace('{' . $key . '}', $val, $urlPath);
        }
        $urlPath = preg_replace('/\{\w+\}/', '', $urlPath);
        $urlPath = rtrim($urlPath, '/');

        if (!$fullUrl)
        {
            return $this->getSiteUrl() . $urlPath;
        }
        else
        {
            return $this->getSiteUrl() . $urlPath;
        }
    }

    public function getAjaxPath()
    {
        if (\App\SubContainer\AppSub::getSubDir())
        {
            return "/" . \App\SubContainer\AppSub::getSubDir();
        }

        return '';
    }

    public static function getSettings()
    {
        return (new \App\Entity\Settings)->getSettings();
    }

    public static function getSiteUrl()
    {
        return self::getSettings()->site_url;
    }

    /**
     * buildSeoLink
     * 
     * This function automatically converts non-ASCII characters in the link to ASCII format.
     * It cleans the spaces and also cleans the remaining UTF-8 characters.
     * Cleans punctuation and slash.
     * Example: /d/1-déjà σσς iıii/14 -> /d/1-deja-sss-iiii/14
     *
     * @param  mixed $string
     * @return string
     */
    public static function buildSeoLink($string): string
    {
        $string = \voku\helper\ASCII::to_transliterate($string);
        $string = \voku\helper\UTF8::cleanup($string);

        $string = preg_replace('/-/', '', $string);

        $replaces = [
            '/ +/' => ' ',
            '/ /' => '-',
            '/\s/' => '',
            '/[:;!?#*{}()\'"\&%$\|=<>^[\]_]|[.,](?![0-9])|\'s/' => '',
            '/\s+/' => '',
            '/^-/' => '',
            '/-$/' => '',
            '/\./' => ''
        ];
        $string = trim(preg_replace(
            array_keys($replaces),
            array_values($replaces),
            $string
        ));
        $string = trim(str_replace(
            ['/', '\\'],
            ['', ''],
            $string
        ));

        $string = \mb_strtolower($string);

        return $string;
    }

    public function render($callback)
    {
        if ($callback !== 'json' && $callback !== 'xml' && $callback !== 'html')
        {
            throw new \Exception('Response type is not valid.');
        }

        $callback = ucwords($callback);

        $callback = $this->getContainer("\App\Renderer\Response\\$callback", $this->request);
        $callback->init();

        if ($this->request->isXmlHttpRequest())
        {
            $callback->useCsrf();
        }

        return $callback;
    }

    public function getContainer($callback, $args = null)
    {
        if (!is_null($args))
        {
            return new $callback($args);
        }
        else
        {
            return new $callback();
        }
    }

    public static function getGlobals()
    {
        return [
            'admin' => [
                'max_site_logo_size' => '2MB'
            ]
        ];
    }

    public function getPPImageTypes()
    {
        return "image/x-png, image/jpeg, image/gif, image/webp, image/avif";
    }

    public static function allowFormatsForImageUpload($returnType = null)
    {
        $avif = false;
        if (function_exists('imageavif'))
        {
            $avif = true;
        }

        $types = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
        $mimeTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/webp'];
        if ($avif)
        {
            $types = array_merge($types, ['avif']);
            $mimeTypes = array_merge($mimeTypes, ['image/avif']);
        }

        if ($returnType == 'array')
        {
            return $types;
        }
        else if ($returnType == 'extension')
        {
            foreach ($types as $typeItems)
            {
                $typeArr[] = ".{$typeItems}";
            }

            return implode(', ', $typeArr);
        }

        return implode(', ', $mimeTypes);
    }

    public function renderPhrase($string)
    {
        return \preg_replace_callback('/\{phrase:(getGlobals)\(\)(.*)\}/', function ($matches) use ($string)
        {
            return \App\Repository\Set::dotNotation($this->{$matches[1]}(), $matches[2]);
        }, $string);
    }
}
