<?php

namespace App\Renderer\BBCode\Str;

use App\String\CensorWords as WordsString;

class CensorWords
{
    private static function getWords()
    {
        $words = (new WordsString())->getWords();

        $line = strtok($words, PHP_EOL);
        $lines = [];
        while ($token = strtok(PHP_EOL))
        {
            $lines[] = $token;
        }

        return array_merge([$line], $lines);
    }

    public static function Render($string)
    {
        foreach (self::getWords() as $word)
        {
            $word = self::getWord($word);

            if (is_array($word))
            {
                $string = preg_replace_callback("/<.*?>(*SKIP)(*FAIL)|{$word[0]}/", function ($matches) use ($word)
                {
                    return $word[1];
                }, $string);
            }
        }

        return $string;
    }

    private static function getWord($word)
    {
        $string = preg_replace('/(\w+):\s?(\w+)/', '$1:$2', $word);

        if ($string != null)
        {
            return explode(':', $string);
        }

        return false;
    }
}
