<?php

namespace App\Renderer;

use App\Params\Deploy\Config as InitialConfig;
use App\String\Post as PostString;

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
	private static $post_id;

	public static function Init($url, $post_id)
	{
		self::$url = $url;
		self::$post_id = $post_id;
		$stack = self::addCache();

		if (InitialConfig::deployConfigParams()['is_disable_external_link_preview'])
		{
			return [
				'status' => 'exception',
				'message' => 'This feature(ExternalLink_Renderer) is disabled by .env.init File.'
			];
		}

		$linkData = (new PostString())->getLink(
			\sha1(self::$url),
			self::$post_id
		);

		if ($linkData)
		{
			$json = \json_decode($linkData['json'], true);
			if (!in_array('HTTP/1.1 200 OK', get_headers($json['image'])))
			{
				$json['image'] = null;
			}

			return [
				'data' => $json,
				'status' => 'ok'
			];
		}

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

			\App\SubContainer\Post\Link::CreatePreview([
				'url' => self::$url,
				'json' => $data,
				'post_id' => self::$post_id
			]);

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
