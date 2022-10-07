<?php

namespace App\SubContainer\Post;

class Pagination
{
	public function encodePageData($perPage, $page_id = 0)
	{
		if ($page_id == 0)
		{
			$page_id = 1;
		}

		$perPage = intval(trim($perPage));

		$data = json_encode([
			'where' => intval(trim(($page_id * $perPage) - $perPage)),
			'per' => $perPage
		]);

		return \App\Repository\Crypto::encryptionStaticIv($data, \App\Repository\CookieEncrypt::getInstance()->defineAuthToken());
	}

	public function encodeRequestPageData($request_post, $perPage)
	{
		$data = json_encode([
			'where' => intval(trim($request_post)),
			'per' => $perPage
		]);

		return \App\Repository\Crypto::encryptionStaticIv($data, \App\Repository\CookieEncrypt::getInstance()->defineAuthToken());
	}

	public function decodePageData($data)
	{
		$data = \App\Repository\Crypto::decryption($data, \App\Repository\CookieEncrypt::getInstance()->defineAuthToken());

		return json_decode($data, true);
	}
}
