<?php

namespace App\Renderer\BBCode;

class TagModification
{
    public static function Parse(string $modification)
    {
        $paramCount = 0;
        if (preg_match('/\{\d\}/', $modification, $matchParam))
        {
            preg_match_all('/\{\d\}/', $modification, $matchParams);
            $paramCount = count($matchParams[0]);
            $modification = preg_replace('/\{(\d)\}/', '$$1', $modification);
        }

        if (preg_match_all('/\$(\d)/', $modification, $matchSameParams))
        {
            foreach ($matchSameParams[1] as $modificationCount)
            {
                $paramCount = $modificationCount;
            }
        }

        if ($paramCount > 0)
        {
            $modification = str_replace('{string}', "\$" . ($paramCount + 1), $modification);
        }
        else
        {
            $modification = str_replace('{string}', "\$1", $modification);
        }

        return $modification;
    }
}
