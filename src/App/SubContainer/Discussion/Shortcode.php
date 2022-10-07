<?php

namespace App\SubContainer\Discussion;

class Shortcode
{
	private $index = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	private $b = 62;

	public function toBase($number)
	{
		$r = $number  % $this->b;
		$res = $this->index[$r];
		$q = floor($number / $this->b);
		while ($q)
		{
			$r = $q % $this->b;
			$q = floor($q / $this->b);
			$res = $this->index[$r] . $res;
		}

		return $res;
	}

	public function to10($shortcode)
	{
		$limit = \mb_strlen($shortcode);
		$res = strpos($this->index, $shortcode[0]);
		for ($i = 1; $i < $limit; $i++)
		{
			$res = $this->b * $res + strpos($this->index, $shortcode[$i]);
		}

		return $res;
	}
}
