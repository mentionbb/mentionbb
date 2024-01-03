<?php

namespace App\SubContainer\Attachment;

use App\Uuid;

class Attachment
{
	public function uploadFile($file, $dir, $size = 200000)
	{
		if (is_object($file))
		{
			$file = \App\Repository\Set::setArray($file);
		}

		$uploadOk = 1;

		$mimeType = mime_content_type($file['tmp_name']);

		if (!in_array($mimeType, $this->getAllowedMimeTypes()))
		{
			$uploadOk = 0;
		}

		if ($file["size"] > $size)
		{
			$uploadOk = 0;
		}

		if ($uploadOk == 0)
		{
			return true;
		}
		else
		{
			$uuid = Uuid::v4();
			move_uploaded_file($file["tmp_name"], PUBLIC_DIR . "/{$dir}/{$uuid}.attachment");

			$dir = \App\Phrase::getSiteUrl() . "/public/{$dir}/{$uuid}.attachment";

			return [
				'name' => $file['name'],
				'uuid' => $uuid,
				'dir' => $dir
			];
		}
	}

	public function uploadImage($file, $dir, $size = 200000, $encryption = true)
	{
		if (is_object($file))
		{
			$file = \App\Repository\Set::setArray($file);
		}

		$target_file = basename($file['name']);
		$imageFileType = \mb_strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

		$check = filesize($file['tmp_name']);

		if ($check !== false)
		{
			$uploadOk = 1;
		}
		else
		{
			$uploadOk = 0;
		}

		if (!in_array($imageFileType, $this->allowFormatsForImages()))
		{
			$uploadOk = 0;
		}

		if ($file["size"] > $size)
		{
			$uploadOk = 0;
		}

		if ($uploadOk == 0)
		{
			return false;
		}
		else
		{
			if ($encryption)
			{
				$name = time() . "_" . random_int(10000000, 99999999) . ".{$imageFileType}";
			}
			else
			{
				$name = $file['name'];
			}

			move_uploaded_file($file["tmp_name"], PUBLIC_DIR . "/{$dir}/{$name}");

			$dir = \App\SubContainer\AppSub::getPublicDir() . "/{$dir}/{$name}";

			/**
			 * If PHP_GD library enabled all images converts to WEBP format.
			 */
			if (function_exists('imagewebp'))
			{
				$outputName = \pathinfo($name, PATHINFO_FILENAME) . ".webp";
				$outputDir = \App\SubContainer\AppSub::getPublicDir() . "/editor/{$outputName}";

				if (\App\Util\Webp::convertToWebp(PUBLIC_DIR . "/editor/{$name}", PUBLIC_DIR . "/editor/{$outputName}"))
				{
					$name = $outputName;
					$dir = $outputDir;
				}
			}

			return [
				'name' => $name,
				'dir' => $dir
			];
		}
	}

	protected function allowFormatsForImages()
	{
		return \App\Phrase::allowFormatsForImageUpload('array');
	}

	protected function getFormatsForFiles()
	{
		foreach ((new \App\Entity\AttachmentFileTypes())->getFileTypes() as $type)
		{
			$types[] = $type;
		}

		return $types;
	}

	public function getAllowedMimeTypes()
	{
		foreach ($this->getFormatsForFiles() as $format)
		{
			$formats[] = $format['mime_type'];
		}

		return $formats;
	}

	public function getAllowedExtensions()
	{
		foreach ($this->getFormatsForFiles() as $format)
		{
			$formats[] = $format['extension'];
		}

		return $formats;
	}

	public function getAllowedExtensionsForInput()
	{
		foreach ($this->getAllowedExtensions() as $format)
		{
			$formats[] = ".{$format}";
		}

		return implode(', ', $formats);
	}
}
