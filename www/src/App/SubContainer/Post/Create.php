<?php

namespace App\SubContainer\Post;

use App\Entity\Posts;
use App\Entity\Notifications;
use App\SubContainer\Post\Attachment;

class Create
{
	public static function Post(array $data)
	{
		$input = \App\Repository\Set::setObject($data);

		$posts = new Posts();
		$notifications = new Notifications();

		$content = $input->content;

		$post_created = $posts->createPost($content, $input->forum_id, $input->discussion_id, $input->user_id, $input->device);
		$notification_create = $notifications->createUserNotification($input->notification);

		if ($post_created && $notification_create)
		{
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
