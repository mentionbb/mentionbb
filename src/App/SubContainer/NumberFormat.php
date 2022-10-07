<?php

namespace App\SubContainer;

class NumberFormat
{
    /**
     * [Short NumberFormat Shorter(1K, 1M)]
     * @param [int] $n
     * https://gist.github.com/RadGH/84edff0cc81e6326029c
     */
    public static function numberFormat(int $n)
    {
        if ($n >= 0 && $n < 1000)
        {
            $n_format = floor($n);
            $suffix = '';
        }
        else if ($n >= 1000 && $n < 1000000)
        {
            $n_format = floor($n / 1000);
            $suffix = 'K+';
        }
        else if ($n >= 1000000 && $n < 1000000000)
        {
            $n_format = floor($n / 1000000);
            $suffix = 'M+';
        }
        else if ($n >= 1000000000 && $n < 1000000000000)
        {
            $n_format = floor($n / 1000000000);
            $suffix = 'B+';
        }
        else if ($n >= 1000000000000)
        {
            $n_format = floor($n / 1000000000000);
            $suffix = 'T+';
        }

        return !empty($n_format . $suffix) ? $n_format . $suffix : 0;
    }
}
