<?php

namespace App\SubContainer\Post;

use App\Entity\PostReports;

class Report
{
	public static function Create(array $data)
	{
		$input = \App\Repository\Set::setObject($data);

		$reports = new PostReports;

		if ($reports->createPostReport($input))
		{
			return true;
		}
	}
}
