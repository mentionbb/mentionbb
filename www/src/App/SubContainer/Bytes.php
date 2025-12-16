<?php

namespace App\SubContainer;

class Bytes
{
    // https://stackoverflow.com/a/11807179
    public static function convertToBytes(string $from): ?int
    {
        $from = preg_replace('/\s+/', '', $from);
        
        $units = ['B', 'KB', 'MB', 'GB', 'TB', 'PB'];
        $number = substr($from, 0, -2);
        $suffix = strtoupper(substr($from, -2));

        //B or no suffix
        if (is_numeric(substr($suffix, 0, 1)))
        {
            return preg_replace('/[^\d]/', '', $from);
        }

        $exponent = array_flip($units)[$suffix] ?? null;
        if ($exponent === null)
        {
            return null;
        }

        return $number * (1024 ** $exponent);
    }

    // https://stackoverflow.com/a/2510459
    public static function formatBytes($bytes, $precision = 2)
    {
        $units = array('B', 'KB', 'MB', 'GB', 'TB');

        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);

        // Uncomment one of the following alternatives
        $bytes /= pow(1024, $pow);
        // $bytes /= (1 << (10 * $pow)); 

        return round($bytes, $precision) . ' ' . $units[$pow];
    }
}
