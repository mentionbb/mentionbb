<?php

namespace App\String;

use App\Entity\Social as SocialEntity;

class Social
{
	private $social;

	public function __construct()
	{
		$this->social = new SocialEntity;
	}

	public function getSites($is_active = true)
	{
		return $this->social->getSites($is_active);
	}

	public function getKeys($api_keys)
	{
		$item = preg_split("/\r\n|\n|\r/", $api_keys);

		return [
			'site_key' => isset($item[0]) ? $item[0] : '',
			'secret_key' => isset($item[1]) ? $item[1] : '',
		];
	}

	public function getSiteFromName($name)
	{
		return $this->social->getSiteFromName($name);
	}
}
