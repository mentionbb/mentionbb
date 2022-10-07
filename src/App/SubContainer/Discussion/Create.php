<?php

namespace App\SubContainer\Discussion;

use App\Entity\Posts;
use App\Entity\Discussion;
use App\SubContainer\Post\Attachment;

use Laminas\Escaper\Escaper;

class Create
{
	public static function Post(array $data)
	{
		$escaper = new Escaper('utf-8');

		$input = \App\Repository\Set::setObject($data);

		$posts = new Posts();
		$discussion = new Discussion();

		$title = $escaper->escapeHtml($input->title);
		$content = $input->content;

		$discussion_created = $discussion->createDiscussion($title, $input->forum_id, $input->is_sticky, $input->is_open);
		$post_created = $posts->createPost($content, $input->forum_id, $discussion_created, $input->user_id, $input->device);

		if ($discussion_created && $post_created)
		{
			$discussion->discussionReWriteFirstPost($discussion_created, $post_created);
			
			if (!is_null($input->attachments))
			{
				foreach ($input->attachments as $file)
				{
					Attachment::addAttachment($file, $post_created, $input->user_id);
				}
			}

			return true;
		}
	}
}
