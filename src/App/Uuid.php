<?php

namespace App;

use Symfony\Component\Uid\Uuid as SymfonyUuid;

class Uuid
{
    public static function v1()
    {
        return SymfonyUuid::v1();
    }

    public static function v4()
    {
        return SymfonyUuid::v4();
    }

    public static function v6()
    {
        return SymfonyUuid::v6();
    }
}
