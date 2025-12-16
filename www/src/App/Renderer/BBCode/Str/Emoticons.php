<?php

namespace App\Renderer\BBCode\Str;

use App\SubContainer\AppSub;

use JoyPixels\Client;
use JoyPixels\Ruleset;

class Emoticons
{
    private $client;
    private $settings;

    public function __construct()
    {
        $this->client = new Client($this->getRuleset());
        $this->client->ascii = true;

        $this->settings = (new \App\Entity\Settings())->getSettings();
    }

    public function Render($string)
    {
        $string = $this->asciiToUnicode($string);

        $source = preg_replace_callback('/' . $this->client->ignoredRegexp . '|' . $this->client->unicodeRegexp . '/u', function ($matches)
        {
            if (!is_array($matches) || !isset($matches[0]) || empty($matches[0]))
            {
                return $matches[0];
            }

            $ruleset = $this->getRuleset();
            $unicodeReplace = \array_flip($ruleset->getUnicodeReplace());

            $unicode = $matches[0];

            if (array_key_exists($unicode, $unicodeReplace))
            {
                $shortname = $unicodeReplace[$unicode];
            }
            else
            {
                return $matches[0];
            }

            return $this->getImageFromShortname($shortname);
        },  $string);

        return $source;
    }

    public function getImageFromShortname($string)
    {
        $source = preg_replace_callback('/' . $this->client->ignoredRegexp . '|' . $this->client->shortcodeRegexp . '/Si', function ($matches)
        {
            if (!is_array($matches) || !isset($matches[0]) || empty($matches[0]))
            {
                return $matches[0];
            }
            else
            {
                $ruleset = $this->getRuleset();
                $shortcodeReplace = $ruleset->getShortcodeReplace();

                $shortname = $matches[0];

                if (!isset($shortcodeReplace[$shortname]))
                {
                    return $matches[0];
                }

                $alt = htmlspecialchars($this->client->shortnameToUnicode($shortname));

                $shortcode = $shortcodeReplace[$shortname];
                $image = $this->replaceFe0f($shortcode[0]);
                $parent = $shortcode[2];

                $database = sprintf($this->getEmoticonDatabase(), $image);

                $title = str_replace(['_', ':'], [' ', ''], $shortname);
                $title = ucfirst($title);

                return "<img class=\"js-Twemoji_MentionEditor\" src=\"{$database}\" alt=\"{$alt}\" data-shortcut=\"{$shortname}\" data-title=\"{$title}\" />&nbsp;";
            }
        }, $string);

        return $source;
    }

    public function asciiToUnicode($string)
    {
        $string = $this->client->asciiToShortname($string);
        $string = $this->client->shortnameToUnicode($string);

        return $string;
    }

    protected function replaceFe0f($filename)
    {
        if (preg_match('/^([a-z0-9]+-fe0f)/', $filename, $fe0fMatch))
        {
            return str_replace('-fe0f', '', $fe0fMatch[0]);
        }

        return $filename;
    }

    protected function getRuleset()
    {
        return new Ruleset();
    }

    private function getEmoticonDatabase()
    {
        if ($this->settings->emoticon_database == 'local')
        {
            return AppSub::getPublicDir() . "/images/emoticons/%s.png";
        }
        else if ($this->settings->emoticon_database == 'twemoji')
        {
            return "https://twemoji.maxcdn.com/v/latest/72x72/%s.png";
        }
    }
}
