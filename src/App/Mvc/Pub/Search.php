<?php

namespace App\Mvc\Pub;

use App\Mvc\Controller;
use App\Rule\Pub;
use App\Repository\Post as PostRepo;

class Search extends Controller implements Pub
{
	public function container($option)
	{
		if ($this->request->getRequestMethod() == "GET")
		{
			return $this->request->redirect($this->settings->site_url, false);
		}
		elseif ($this->request->getRequestMethod() == "POST")
		{
			if ($this->request->getPathInfo() == '/search/quick-search')
			{
				return $this->quickSearch();
			}
		}
	}

	private function quickSearch()
	{
		$post = new PostRepo();

		$template = $this->template->render(
			'quick_search.twig',
			[
				'string' => [
					'keyword' => $post->get('keyword'),
					'discussions' => \App\SubContainer\Search\Quick::searchDiscussions($post->get('keyword')),
					'users' => \App\SubContainer\Search\Quick::searchUsers($post->get('keyword')),
				]
			]
		);

		return $this->phrase->render('json')->serialize([
			'template' => $template
		])->render();
	}
}
