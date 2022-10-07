<?php

namespace App\Repository;

class Crypto
{
	public static function encrypt($var, $enc1, $enc2)
	{
		return sha1(md5($enc2 . $var . $enc1));
	}

	public static function generate_keys($length)
	{
		return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
	}

	public static function encryption($data, $key)
	{
		$encryption_key = base64_decode($key);

		$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
		$encrypted = openssl_encrypt($data, 'aes-256-cbc', $encryption_key, 0, $iv);

		return base64_encode($encrypted . '::' . $iv);
	}

	public static function encryptionStaticIv($data, $key)
	{
		$encryption_key = base64_decode($key);

		$iv = '63a18b8b54f757c5';
		$encrypted = openssl_encrypt($data, 'aes-256-cbc', $encryption_key, 0, $iv);

		return base64_encode($encrypted . '::' . $iv);
	}

	public static function decryption($data, $key)
	{
		$encryption_key = base64_decode($key);
		list($encrypted_data, $iv) = explode('::', base64_decode($data), 2);

		return openssl_decrypt($encrypted_data, 'aes-256-cbc', $encryption_key, 0, $iv);
	}
}
