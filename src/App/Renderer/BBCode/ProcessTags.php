<?php

namespace App\Renderer\BBCode;

use App\Renderer\BBCode\TagModification;

class ProcessTags
{
	protected $_item;
	protected $tagList;

	public function __construct()
	{
		foreach ((new \App\Util\ClassFinder())->getClassesByNamespace('\App\Renderer\BBCode\Tag') as $tagClass)
		{
			if ($tagClass != 'App\Renderer\BBCode\Tag\AbstractTag')
			{
				$class = new $tagClass;
				if (method_exists($class, 'Process'))
				{
					$class->Process();

					$this->addItem(
						$class->getTag()
					);
				}
			}
		}

		$this->tagList = $this->prepareToRegex();
	}

	protected function addItem($tag)
	{
		foreach ($tag as $name => $options)
		{
			$bbCodeEnding = preg_replace('/=?;?\{param(?:.*?)\}/', '', $options['name']);

			if (isset($options['modification'][1]))
			{
				if (isset($options['string']))
				{
					$this->_item[$name] = [
						'bbCode' => "[{$options['name']}]{string}[/{$bbCodeEnding}]",
						'modification' => "{$options['modification'][0]}{string}{$options['modification'][1]}",
						'callback' => (isset($options['callback'])) ? true : false
					];
				}
				else
				{
					$this->_item[$name] = [
						'bbCode' => "[{$options['name']}][/{$bbCodeEnding}]",
						'modification' => "{$options['modification'][0]}{string}{$options['modification'][1]}",
						'callback' => (isset($options['callback'])) ? true : false
					];
				}
			}
			else
			{
				if (isset($options['single']))
				{
					$this->_item[$name] = [
						'bbCode' => "[{$options['name']}]",
						'modification' => $options['modification'][0],
						'callback' => (isset($options['callback'])) ? true : false
					];
				}
				else
				{
					if (isset($options['string']))
					{
						$this->_item[$name] = [
							'bbCode' => "[{$options['name']}]{string}[/{$bbCodeEnding}]",
							'modification' => $options['modification'][0],
							'callback' => (isset($options['callback'])) ? true : false
						];
					}
					else
					{
						$this->_item[$name] = [
							'bbCode' => "[{$options['name']}][/{$bbCodeEnding}]",
							'modification' => $options['modification'][0],
							'callback' => (isset($options['callback'])) ? true : false
						];
					}
				}
			}

			if (isset($options['editorModification']))
			{
				if (isset($options['editorModification'][1]))
				{
					if (isset($options['string']))
					{
						$this->_item[$name]['editorModification'] = "{$options['editorModification'][0]}{string}{$options['editorModification'][1]}";
					}
					else
					{
						$this->_item[$name]['editorModification'] = "{$options['editorModification'][0]}{string}{$options['editorModification'][1]}";
					}
				}
				else
				{
					if (isset($options['single']))
					{
						$this->_item[$name]['editorModification'] = $options['editorModification'][0];
					}
					else
					{
						if (isset($options['string']))
						{
							$this->_item[$name]['editorModification'] = $options['editorModification'][0];
						}
						else
						{
							$this->_item[$name]['editorModification'] = $options['editorModification'][0];
						}
					}
				}
			}
		}
	}

	public function prepareToRegex()
	{
		foreach ($this->_item as $name => $val)
		{
			$modification = TagModification::Parse($val['modification']);

			$editorModification = null;
			if (isset($val['editorModification']))
			{
				$editorModification = TagModification::Parse($val['editorModification']);
			}

			$bbCode = preg_replace('/\{param\}/', '(.*?)', $val['bbCode']);

			if (preg_match('/|/', $val['bbCode'], $matchDelimiter))
			{
				$bbCode = preg_replace('/\{param:(.*?)\}/', '($1)', $bbCode);
			}
			else
			{
				$bbCode = preg_replace('/\{param:(.*?)\}/', '(.*?)', $bbCode);
			}

			$bbCode = preg_replace('/\{string\}/', '(.*?)', $bbCode);

			$tagName = $name;
			if (preg_match('/=/', $name, $matchString))
			{
				$tagName = explode('=', $name)[0];
			}

			$tagList[$tagName] = [
				'pureCode' => $name,
				'bbCode' => str_replace(['[', ']', '/', '='], ['\[', '\]', '\/', '\='], $bbCode),
				'modification' => $modification,
				'editorModification' => $editorModification,
				'callback' => $val['callback']
			];
		}

		return $tagList;
	}

	public function addTagCallback(array $callbackOptions)
	{
		foreach ($this->tagList as $name => $options)
		{
			if (preg_match('/=/', $name, $matchParams))
			{
				$tagName = explode('=', $name);
				$tag = $this->tagList["{$tagName[0]}={$tagName[1]}"];
				$tagName = $tagName[0];
			}
			else
			{
				$tagName = $name;
				$tag = $this->tagList[$name];
			}

			if ($tagName == $callbackOptions['name'])
			{
				if ($tag['callback'] && method_exists($callbackOptions['callback'][0], $callbackOptions['callback'][1]))
				{
					return $callbackOptions['callback'][0]->{$callbackOptions['callback'][1]}(
						$tag,
						$callbackOptions['callback'][2]
					);
				}
			}
		}
	}

	public function getTagList()
	{
		return $this->tagList;
	}

	public function getTag($tag)
	{
		return $this->tagList[$tag];
	}

	public function setCallback($tag)
	{
		$this->tagList[$tag]['callback'] = true;
	}
}
