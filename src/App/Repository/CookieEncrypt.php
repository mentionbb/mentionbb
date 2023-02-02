<?php

namespace App\Repository;

use App\App;

class CookieEncrypt
{
	public static $instance;

	protected $session_key;

	public function __construct()
	{
		$this->session_key = $this->defineAuthToken();
	}

	public function set($array)
	{
		if ($array['encrypted'])
		{
			setcookie($array['name'], $this->cookieEncrypted($array['data'], $this->session_key), $array['cookie_time'], $array['cookie_path']);
		}
		else
		{
			setcookie($array['name'], $array['data'], $array['cookie_time'], $array['cookie_path']);
		}
	}

	public function get($cookie_name)
	{
		if (isset($_COOKIE[$cookie_name]))
		{
			return $this->cookieDecrypted($_COOKIE[$cookie_name], $this->session_key);
		}
		return false;
	}

	public function defineAuthToken()
	{
		if (isset($_COOKIE['st-user_token']))
		{
			$token = $_COOKIE['st-user_token'];
		}
		else
		{
			if (!App::$session->has('st-user_token'))
			{
				App::$session->set('st-user_token', base64_encode(\App\Repository\Crypto::generate_keys(24)));
			}
			$token = App::$session->get('st-user_token');
		}
		return $token;
	}

	protected function cookieEncrypted($data, $key)
	{
		$encryption_key = base64_decode($key);

		$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
		$encrypted = openssl_encrypt($data, 'aes-256-cbc', $encryption_key, 0, $iv);

		return base64_encode($encrypted . '::' . $iv);
	}

	protected function cookieDecrypted($data, $key)
	{
		$encryption_key = base64_decode($key);

		list($encrypted_data, $iv) = explode('::', base64_decode($data), 2);
		return openssl_decrypt($encrypted_data, 'aes-256-cbc', $encryption_key, 0, $iv);
	}

	public static function getInstance()
	{
		if (is_null(self::$instance))
		{
			self::$instance = new self();
		}
		return self::$instance;
	}
}
