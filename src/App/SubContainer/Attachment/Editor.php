<?php

namespace App\SubContainer\Attachment;

use App\SubContainer\Attachment\Attachment;

class Editor extends Attachment
{
	public function doImageUpload(array $data)
	{
		$input = \App\Repository\Set::setObject($data);

		return $this->uploadImage(
			$input->temp,
			$input->dir,
			2000000 //2 Megabytes
		);
	}

	public function doFileUpload(array $data)
	{
		$input = \App\Repository\Set::setObject($data);

		return $this->uploadFile(
			$input->temp,
			$input->dir,
			5000000 //5 Megabytes
		);
	}
}
