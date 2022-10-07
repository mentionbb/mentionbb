<?php

namespace App\Renderer\BBCode\Tag;

abstract class AbstractTag
{
	/**
	 * [$_tag Collect tags]
	 * @var array
	 */
	protected $_tag = [];

	/**
	 * [addTag Add tag to collection]
	 * @param string  $name
	 * @param array   $modification
	 * @param boolean $tagString
	 */
	protected function addTag($name, array $modification, $tagString = false)
	{
		$this->_tag[$name] = [
			'name' => $name,
			'modification' => $modification
		];
	}

	/**
	 * [addString We must add "string" information between tags.]
	 * Ex: [b]test[/b]
	 * @param array $tags
	 */
	protected function addString(array $tags)
	{
		foreach ($this->_tag as $name => $val)
		{
			if (preg_match('/=/', $name, $matchParams))
			{
				$tagName = explode('=', $name);
				foreach ($tags as $tag)
				{
					if ($tagName[0] == $tag)
					{
						$this->_tag["{$tagName[0]}={$tagName[1]}"] = array_merge($this->_tag["{$tagName[0]}={$tagName[1]}"], ['string' => true]);
					}
				}
			}
			else
			{
				foreach ($tags as $tag)
				{
					if ($name == $tag)
					{
						$this->_tag[$name] = array_merge($this->_tag[$name], ['string' => true]);
					}
				}
			}
		}
	}

	/**
	 * [addSingle However, not every tag should receive "string" information.]
	 * @param array $tags
	 */
	protected function addSingle(array $tags)
	{
		foreach ($this->_tag as $name => $val)
		{
			if (preg_match('/=/', $name, $matchParams))
			{
				$tagName = explode('=', $name);
				foreach ($tags as $tag)
				{
					if ($tagName[0] == $tag)
					{
						$this->_tag["{$tagName[0]}={$tagName[1]}"] = array_merge($this->_tag["{$tagName[0]}={$tagName[1]}"], ['single' => true]);
					}
				}
			}
			else
			{
				foreach ($tags as $tag)
				{
					if ($name == $tag)
					{
						$this->_tag[$name] = array_merge($this->_tag[$name], ['single' => true]);
					}
				}
			}
		}
	}

	/**
	 * [addCallback We need to give Callbacks to some tags.]
	 * @param array $tags
	 */
	protected function addCallback(array $tags)
	{
		foreach ($this->_tag as $name => $val)
		{
			if (preg_match('/=/', $name, $matchParams))
			{
				$tagName = explode('=', $name);
				foreach ($tags as $tag)
				{
					if ($tagName[0] == $tag)
					{
						$this->_tag["{$tagName[0]}={$tagName[1]}"] = array_merge($this->_tag["{$tagName[0]}={$tagName[1]}"], ['callback' => true]);
					}
				}
			}
			else
			{
				foreach ($tags as $tag)
				{
					if ($name == $tag)
					{
						$this->_tag[$name] = array_merge($this->_tag[$name], ['callback' => true]);
					}
				}
			}
		}
	}

	/**
	 * [getTag Get tag collection]
	 * @return array
	 */
	public function getTag()
	{
		return $this->_tag;
	}
}
