<?php

namespace App\Mvc\Pub;

use App\Mvc\Controller;
use App\Rule\Pub;
use App\Repository\Post as PostRepo;
use App\String\Post as PostString;
use App\String\Discussion as DiscussionString;

class Shortcode extends Controller implements Pub
{
	public function container($option)
	{
		if ($this->request->getRequestMethod() == "GET")
		{
			$discussion = new DiscussionString;
			$post = new PostString;

			if ($post->isExistPost($option['shortcode']))
			{
				$discussion_id = $post->getDiscussionId($option['shortcode']);

				if ($discussion->discussionIsExist($discussion_id))
				{
					$post->setDiscussionId($discussion_id);

					$discussion->addDiscussionView($discussion_id);

					echo $this->template->render(
						'discussion.tpl',
						[
							'option' => $option,
							'string' => [
								'post' => $post,
								'discussion' => $discussion->getDiscussion($discussion_id),
								'order' => \App\SubContainer\Post\Order::getOrder('newest')
							],
							'discussion' => $discussion
						]
					);
				}
				else
				{
					echo $this->template->render(
						'404.tpl',
						[
							'option' => $option,
						]
					);
				}
			}
			else
			{
				echo $this->template->render(
					'404.tpl',
					[
						'option' => $option,
					]
				);
			}
		}
		elseif ($this->request->getRequestMethod() == "POST")
		{
		}
	}
}
