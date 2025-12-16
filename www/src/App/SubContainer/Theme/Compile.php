<?php

namespace App\SubContainer\Theme;

use App\SubContainer\AppSub;
use App\Util\File;

use MatthiasMullie\Minify;

class Compile
{
	private $file;

	public function __construct()
	{
		$this->file = new File;
	}

	public function minify($dir, $filename)
	{
		$dirname = dirname($filename, 1);
		$fileBasename = basename($filename);

		if (!in_array($dirname, array(".", "..")))
		{
			$compiledFile = "{$dir}/compiled.{$dirname}.{$fileBasename}";
		}
		else
		{
			$compiledFile = "{$dir}/compiled.{$fileBasename}";
		}

		$file = "{$dir}/{$filename}";

		if (!file_exists(PUBLIC_DIR . "/{$compiledFile}"))
		{
			$this->file->dumpFile(PUBLIC_DIR . "/{$compiledFile}", "");
		}

		if (file_exists(PUBLIC_DIR . "/{$file}") && filemtime(PUBLIC_DIR . "/{$file}") > filemtime(PUBLIC_DIR . "/{$compiledFile}") or !filesize(PUBLIC_DIR . "/{$compiledFile}"))
		{
			$extension = pathinfo($file, PATHINFO_EXTENSION);

			if ($extension == 'css')
			{
				$minifier = new Minify\CSS(PUBLIC_DIR . "/{$file}");
			}
			elseif ($extension == 'js')
			{
				$minifier = new Minify\JS(PUBLIC_DIR . "/{$file}");
			}

			$this->file->dumpFile(PUBLIC_DIR . "/{$compiledFile}", $minifier->minify());
		}

		return AppSub::getPublicDir() . "/{$compiledFile}?v=" . filemtime(PUBLIC_DIR . "/{$file}");
	}

	public function makeCss($dir, $name)
	{
		if (!file_exists(PUBLIC_DIR . "/{$dir}/compiled.{$name}.css"))
		{
			$this->file->dumpFile(PUBLIC_DIR . "/{$dir}/compiled.{$name}.css", "");
		}

		if (!file_exists(PUBLIC_DIR . "/{$dir}/theme.css.map"))
		{
			throw new \Exception("Css map file is missing.");
		}

		$minify = false;
		$minifier = new Minify\CSS();

		$minifier->setMaxImportSize(20);

		$map = \App\Repository\Set::setObject(
			json_decode(
				file_get_contents(PUBLIC_DIR . "/{$dir}/theme.css.map"),
				true
			)
		);

		foreach ($map->css as $key => $file)
		{
			if (filemtime(PUBLIC_DIR . "/{$dir}/{$file}") > filemtime(PUBLIC_DIR . "/{$dir}/compiled.{$name}.css") or !filesize(PUBLIC_DIR . "/{$dir}/compiled.{$name}.css"))
			{
				$minify = true;
			}
		}

		if ($minify)
		{
			foreach ($map->css as $key => $file)
			{
				$minifier->add(PUBLIC_DIR . "/{$dir}/{$file}");
			}

			$this->file->dumpFile(PUBLIC_DIR . "/{$dir}/compiled.{$name}.css", $minifier->minify());
		}

		return AppSub::getPublicDir() . "/{$dir}/compiled.{$name}.css?v=" . filemtime(PUBLIC_DIR . "/{$dir}/compiled.{$name}.css");
	}

	public function makeJs($dir, $name)
	{
		if (!file_exists(PUBLIC_DIR . "/vendor/compiled.{$name}.js"))
		{
			$this->file->dumpFile(PUBLIC_DIR . "/vendor/compiled.{$name}.js", "");
		}

		if (!file_exists(PUBLIC_DIR . "/vendor/{$name}.js.map"))
		{
			throw new \Exception("Js map file is missing.");
		}

		$minify = false;
		$minifier = new Minify\JS();

		$map = \App\Repository\Set::setObject(
			json_decode(
				file_get_contents(PUBLIC_DIR . "/vendor/{$name}.js.map"),
				true
			)
		);

		foreach ($map->js as $key => $file)
		{
			if (file_exists(PUBLIC_DIR . "/vendor/compiled.core.js") && filemtime(PUBLIC_DIR . "/vendor/{$map->path}/{$file}") > filemtime(PUBLIC_DIR . "/vendor/compiled.{$name}.js") or !filesize(PUBLIC_DIR . "/vendor/compiled.{$name}.js"))
			{
				$minify = true;
			}
		}

		if ($minify)
		{
			foreach ($map->js as $key => $file)
			{
				$minifier->add(PUBLIC_DIR . "/vendor/{$map->path}/{$file}");
			}

			$this->file->dumpFile(PUBLIC_DIR . "/vendor/compiled.{$name}.js", $minifier->minify());
		}

		return AppSub::getPublicDir() . "/vendor/compiled.{$name}.js?v=" . filemtime(PUBLIC_DIR . "/vendor/compiled.{$name}.js");
	}
}
