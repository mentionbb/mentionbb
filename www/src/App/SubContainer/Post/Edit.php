<?php

namespace App\SubContainer\Post;

use App\Entity\Posts;
use App\SubContainer\Post\Attachment;

class Edit
{
	public static function Content(array $data)
	{
		$input = \App\Repository\Set::setObject($data);

		$posts = new Posts;

		if ($posts->postChangeContent($input->post_id, $input->content, $input->lastedit_userid))
		{
			if (!is_null($input->removeAttachments))
			{
				foreach ($input->removeAttachments as $attachment)
				{
					\App\SubContainer\Post\Attachment::removeAttachment($attachment);
				}
			}

			if (!is_null($input->attachments))
			{
				foreach ($input->attachments as $file)
				{
					Attachment::addAttachment($file, $input->post_id, $input->user_id);
				}
			}

			return true;
		}
	}
}
