<?php

namespace App\Renderer\BBCode;

class ProcessTags
{
	protected $_item;

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
		}
	}

	public function getItems()
	{
		return $this->_item;
	}
}
