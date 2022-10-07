<?php

namespace ComponentBundle\Extending\Admin\SubContainer\CensoredWords;

use App\Entity\CensorWords as Words;

class Edit
{
    public static function Do(array $data)
    {
        $input = \App\Repository\Set::setObject($data);

        $words = new Words;

        if ($words->editWords($input->words))
        {
            return true;
        }
    }
}
