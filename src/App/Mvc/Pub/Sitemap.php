<?php

namespace App\Mvc\Pub;

use App\Mvc\Controller;
use App\Rule\Pub;

class Sitemap extends Controller implements Pub
{
	public function container($option)
	{
		if ($this->request->getRequestMethod() == "GET")
		{
			if (preg_match('/sitemap-([0-9]+)/', $this->request->getPathInfo(), $matchSitemap))
			{
				$path = CACHE_DIR . '/sitemap-' . $matchSitemap[1] . '.xml';
			}
			else
			{
				\App\SubContainer\Sitemap::Do($this->phrase, $this->request);
				$path = CACHE_DIR . '/sitemap.xml';
			}

			return $this->phrase->render('xml')->renderSitemap($path);
		}
		elseif ($this->request->getRequestMethod() == "POST")
		{
		}
	}
}
