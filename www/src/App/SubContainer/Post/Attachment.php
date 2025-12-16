<?php

namespace App\SubContainer\Post;

use App\SubContainer\Bytes;
use App\Phrase;
use App\Entity\Attachments;

use App\Util\File;

class Attachment
{
	public static function addAttachment($file, $post_id, $user_id)
	{
		$upload = (new \App\SubContainer\Attachment\Attachment())->uploadFile(
			$file,
			"uploads/attachments",
			Bytes::convertToBytes(
				Phrase::getSettings()->attachment_max_size
			)
		);

		if (is_array($upload))
		{
			$data = [
				'filename' => $upload['name'],
				'uuid' => $upload['uuid'],
				'post_id' => $post_id,
				'user_id' => $user_id
			];

			\App\SubContainer\Attachment\Create::Do($data);
		}
	}

	public static function removeAttachment($attachment)
	{
		if (is_object($attachment))
		{
			$attachment = \App\Repository\Set::setArray($attachment);
		}
		
		if (is_array($attachment))
		{
			$file = new File;
			$file->remove(['symlink', PUBLIC_DIR . "/uploads/attachments/{$attachment['unique_id']}.attachment"]);

			$remove_attachment = (new Attachments())->removeAttachment($attachment['attach_id']);

			if ($remove_attachment)
			{
				return true;
			}

			return false;
		}
	}
}
