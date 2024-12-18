<?php

namespace App\Util;

class Arr
{
    public static function getArrayDepth(array $array)
    {
        $arrayIterator = new \RecursiveArrayIterator($array);
        $recursiveIterator = new \RecursiveIteratorIterator($arrayIterator);
        foreach ($recursiveIterator as $value)
        {
            $d = $recursiveIterator->getDepth() + 1;
            $result[] = $d;
        }

        return max($result);
    }

    /**
     * flattenChildArrays
     * 
     * https://stackoverflow.com/a/34970271
     *
     * @param  mixed $array
     * @param  mixed $parentKey
     * @return array
     */
    public static function flattenChildArrays($array, $parentKey = null)
    {
        $outputArray = [];

        foreach ($array as $key => $value)
        {
            /* If we have a $parentKey, our new key will be "$parentKey_$key" */
            $newKey = (($parentKey) ? $parentKey . '.' . $key : $key);

            if (self::isAssociativeArray($value))
            {
                /* If our $value is an associative array, we'll want to recursively
             * call ourselves again on $value with our new key as the $parentKey.
             */
                $outputArray = array_merge($outputArray, self::flattenChildArrays($value, $newKey));
            }
            else
            {
                /* If $value is not an associative array (i.e. just a simple value, or a
             * contiguous numeric array, just use the value as it is in our output
             * array. If we have a parent key (because we're inside 1 or more levels
             * of recursion), use "$parentKey_$key" (see where we define $newKey above).
             */
                $outputArray[$newKey] = $value;
            }
        }

        return $outputArray;
    }

    /**
     * isAssociativeArray
     * 
     * https://stackoverflow.com/a/34970271
     *
     * @param  mixed $array
     * @return void
     */
    public static function isAssociativeArray($array)
    {
        if (empty($array) || !is_array($array))
        {
            return false;
        }

        /* Returns true if arrays keys are not numeric or contiguous. */
        return (bool) array_keys($array) !== range(0, count($array) - 1);
    }

    public static function removeEmptyValuesAndSubarrays($array)
    {
        foreach ($array as $k => &$v)
        {
            if (is_array($v))
            {
                $v = self::removeEmptyValuesAndSubarrays($v);  // filter subarray and update array
                if (!sizeof($v))
                { // check array count
                    unset($array[$k]);
                }
            }
            elseif (!\mb_strlen($v))
            {  // this will handle (int) type values correctly
                unset($array[$k]);
            }
        }
        return $array;
    }

    public static function arrayKeyMaxValue($array)
    {
        $max = array_search(max($array), $array);

        return $array[$max];
    }
}
