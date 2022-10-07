<?php

namespace App\Repository;

class Set
{
	public static function setObject($array): object
	{
		if (is_array($array))
		{
			$object = new \stdClass();
			foreach ($array as $key => $value)
			{
				if (is_array($value))
				{
					$value = self::setObject($value);
				}
				$object->{$key} = $value;
			}
			return $object;
		}
	}

	public static function setArray($object): array
	{
		if (isset($object))
		{
			foreach ($object as $key => $val)
			{
				$p[$key] = $val;
			}
		}
		return $p;
	}

	//Thanks to https://stackoverflow.com/a/14706302
	public static function dotNotation(array $a, $path, $default = null)
	{
		$current = $a;
		$p = strtok($path, '.');

		while ($p !== false)
		{
			if (!isset($current[$p]))
			{
				return $default;
			}
			$current = $current[$p];
			$p = strtok('.');
		}

		return $current;
	}

	public static function flattenToMultiDimensional(array $array, $delimiter = '.')
	{
		$result = [];
		foreach ($array as $notations => $value)
		{
			// extract keys
			$keys = explode($delimiter, $notations);
			// reverse keys for assignments
			$keys = array_reverse($keys);

			// set initial value
			$lastVal = $value;
			foreach ($keys as $key)
			{
				// wrap value with key over each iteration
				$lastVal = [
					$key => $lastVal
				];
			}

			// merge result
			$result = array_merge_recursive($result, $lastVal);
		}

		return $result;
	}
}
