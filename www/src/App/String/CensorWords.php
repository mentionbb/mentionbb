<?php

namespace App\String;

use App\Entity\CensorWords as WordsEntity;

class CensorWords
{
    protected $words;

    public function __construct()
    {
        $this->words = new WordsEntity();
    }

    public function getWords()
    {
        return $this->words->getWords();
    }
}
