<?php

namespace App\Renderer;

use GuzzleHttp\HandlerStack;
use GuzzleHttp\Client;

use Symfony\Component\Cache\Adapter\FilesystemAdapter;

use Kevinrob\GuzzleCache\CacheMiddleware;
use Kevinrob\GuzzleCache\Strategy\PrivateCacheStrategy;
use Kevinrob\GuzzleCache\Storage\Psr6CacheStorage;

use Symfony\Component\DomCrawler\Crawler;

class ExternalLinkRenderer
{
	private static $url;

	public static function Init($url)
	{
		self::$url = $url;
		$stack = self::addCache();

		try
		{
			$client = new Client([
				'http_errors' => false,
				'handler' => $stack,
				'timeout' => 3,
				'connect_timeout' => 3.14
			]);

			$response = $client->request('GET', $url);

			if ($response->getStatusCode() == 200)
			{
				return self::getInfo(
					$response->getBody()->getContents()
				);
			}
		}
		catch (\Exception $e)
		{
			return [
				'status' => 'exception',
				'message' => $e->getMessage()
			];
		}

		return [
			'status' => 'exception'
		];
	}

	private static function getInfo($html)
	{
		$crawler = new Crawler($html);

		if ($crawler->filter('meta[name="description"]')->count())
		{
			$siteImage = null;

			if ($crawler->filter('meta[property="og:image"]')->count())
			{
				$imageUriHeader = get_headers($crawler->filter('meta[property="og:image"]')->eq(0)->attr('content'));
				if (!in_array('cross-origin-resource-policy: same-origin', $imageUriHeader))
				{
					$siteImage = $crawler->filter('meta[property="og:image"]')->eq(0)->attr('content');
				}
			}

			$site = \parse_url(self::$url, PHP_URL_HOST);

			$data = [
				'title' => $crawler->filter('title')->text(),
				'description' => $crawler->filter('meta[name="description"]')->eq(0)->attr('content'),
				'image' => $siteImage,
				'url' => self::$url,
				'site' => $site
			];

			return [
				'data' => $data,
				'status' => 'ok'
			];
		}
		else
		{
			return [
				'status' => 'fail'
			];
		}
	}

	private static function addCache()
	{
		$stack = HandlerStack::create();
		$stack->push(
			new CacheMiddleware(
				new PrivateCacheStrategy(
					new Psr6CacheStorage(
						new FilesystemAdapter('', 0, CACHE_DIR . '/Storage/guzzle/')
					)
				)
			),
			'cache'
		);

		return $stack;
	}
}
