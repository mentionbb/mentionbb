<?php

namespace App\Mvc\Pub;

use App\Mvc\Controller;
use App\Rule\Pub;
use App\String\Forum as ForumString;
use App\String\Post as PostString;
use App\String\Discussion as DiscussionString;
use App\String\Stats as StatsString;
use App\String\Reaction as ReactionString;

class Index extends Controller implements Pub
{
	public function container($option)
	{
		if ($this->request->getRequestMethod() == "GET")
		{
			echo $this->template->render(
				'index.tpl',
				[
					'option' => $option,
					'string' => [
						'post' => new PostString,
						'discussion' => new DiscussionString,
						'stats' => new StatsString,
						'reaction' => new ReactionString
					]
				]
			);
		}
		elseif ($this->request->getRequestMethod() == "POST")
		{
		}
	}
}
