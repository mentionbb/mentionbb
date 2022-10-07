<?php

namespace App\SubContainer;

use App\String\Post;
use App\String\Discussion;
use App\Entity\User;

use App\Util\File;
use App\Sitemap\Generator as SitemapGenerator;

class Sitemap
{
	public static function Do(\App\Phrase $phrase, \App\Repository\Request $request)
	{
		$file = new File;

		$generator = new SitemapGenerator($request);
		$indexBuilder = $generator->getIndexBuilder();
		$urlBuilder = $generator->getUrlBuilder();

		$sitemap = [];

		foreach ((new Post())->getAllPosts() as $post)
		{
			$urlBuilder->addUrl(
				$phrase->buildLink('shortcode', [
					'shortcode' => (new \App\SubContainer\Discussion\Shortcode())->toBase($post['shortcode'])
				], true),
				$post['dateline']
			);

			$sitemap[1] = $urlBuilder->generate();
		}
		$urlBuilder->flush();

		foreach (\array_reverse((new Discussion())->getAllDiscussions()) as $discussion)
		{
			$urlBuilder->addUrl(
				$phrase->buildLink('discussion', [
					'discussion_id' => $discussion['discussion_id'],
					'discussion_title' => $discussion['title']
				]),
			);

			$sitemap[2] = $urlBuilder->generate();
		}
		$urlBuilder->flush();

		foreach ((new User())->findAll() as $user)
		{
			$urlBuilder->addUrl(
				$phrase->buildLink('profile', [
					'username' => $user['username'],
					'user_id' => $user['user_id']
				]),
				null,
				null,
				'0.3'
			);

			$sitemap[3] = $urlBuilder->generate();
		}
		$urlBuilder->flush();

		$urlBuilder->addUrl(
			$phrase->buildLink('pages', [
				'section' => 'faq'
			])
		);

		$urlBuilder->addUrl(
			$phrase->buildLink('pages', [
				'section' => 'privacy'
			])
		);

		$urlBuilder->addUrl(
			$phrase->buildLink('pages', [
				'section' => 'contact'
			])
		);
		$sitemap[4] = $urlBuilder->generate();

		foreach ($sitemap as $key => $val)
		{
			$file->dumpFile(CACHE_DIR . "/sitemap-{$key}.xml", $val);

			$indexBuilder->addSitemap(
				$phrase->buildLink('sitemap', [
					'index' => $key
				]),
				filemtime(CACHE_DIR . "/sitemap-{$key}.xml")
			);
			$sitemapIndex = $indexBuilder->generate();
			$urlBuilder->flush();
		}

		$file->dumpFile(CACHE_DIR . "/sitemap.xml", $sitemapIndex);
	}
}
