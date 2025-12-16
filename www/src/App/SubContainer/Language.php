<?php

namespace App\SubContainer;

use App\Entity\Settings;

use App\Util\Yaml;
use App\Util\File;

class Language
{
	public $cache;
	protected $modificatedPhrases;

	public function Init()
	{
		$language = $this->getDefaultLanguage();

		$cache = false;
		foreach ($this->getLanguageYamls($language) as $file)
		{
			if (!file_exists(CACHE_DIR . "/Languages/{$language->id}.mcache") or filemtime($file->getPathName()) > filemtime(CACHE_DIR . "/Languages/{$language->id}.mcache"))
			{
				$cache = true;
			}
		}

		if ($cache)
		{
			$this->compile($language);
		}

		$this->cache = $this->getString($language);
		$this->getModification();
	}

	public function Parse($item)
	{
		$text = \App\Repository\Set::dotNotation($this->getCache(), $item);

		$argList = func_get_args();
		$argNum = count($argList);

		for ($i = 1; $i < $argNum; $i++)
		{
			$text = str_replace('{' . $i . '}', $argList[$i], $text);
		}

		return $text;
	}

	public function getLanguages()
	{
		$lang = [];
		foreach (glob(APPLICATION_SELF . "/Languages/" . '*' . ".yaml") as $file)
		{
			$data = Yaml::getFile($file);

			$lang[] = $data['Language']['init'];
		}

		return $lang;
	}

	public function getDefaultLanguageData()
	{
		return \App\Repository\Set::setArray(
			$this->getDefaultLanguage()
		);
	}

	private function getDefaultLanguage()
	{
		$settings = (new Settings())->getSettings();

		$language_file = APPLICATION_SELF . "/Languages/{$settings->default_language}.yaml";

		if (file_exists($language_file))
		{
			return \App\Repository\Set::setObject(
				Yaml::getFile($language_file)
			)->Language->init;
		}
		else
		{
			return \App\Repository\Set::setObject(
				Yaml::getFile(APPLICATION_SELF . "/Languages/Turkish.yaml")
			)->Language->init;
		}
	}

	private function compile($language)
	{
		foreach ($this->getLanguageYamls($language) as $file)
		{
			$name = explode(
				'.yaml',
				\mb_strtolower(
					basename($file->getPathName())
				)
			)[0];

			$node = basename(dirname($file->getPathName()));
			if ($node != $language->path)
			{
				$data[\mb_strtolower($node)][$name] = Yaml::getFile(
					$file->getPathName()
				)['Language']['items'];
			}
			else
			{
				$data[$name] = Yaml::getFile(
					$file->getPathName()
				)['Language']['items'];
			}
		}

		$file = new File;
		$file->dumpFile(CACHE_DIR . "/Languages/{$language->id}.mcache", json_encode($data));
	}

	private function getLanguageYamls(object $language)
	{
		$all_files  = new \RecursiveIteratorIterator(
			new \RecursiveDirectoryIterator(APPLICATION_SELF . "/Languages/{$language->path}")
		);
		$yaml_files = new \RegexIterator($all_files, '/\.yaml$/');

		return $yaml_files;
	}

	protected function getString($language)
	{
		$json = json_decode(
			file_get_contents(CACHE_DIR . "/Languages/{$language->id}.mcache"),
			true
		);

		return $json;
	}

	protected function getModification()
	{
		$this->modificatedPhrases = $this->cache['modification'];
		unset($this->cache['modification']);

		return $this->cache;
	}

	public function getCache()
	{
		if (!is_null($this->modificatedPhrases))
		{
			$this->cache = \array_replace_recursive($this->cache, $this->modificatedPhrases);
		}

		return $this->cache;
	}
}
