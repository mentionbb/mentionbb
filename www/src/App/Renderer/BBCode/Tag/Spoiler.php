<?php

namespace App\Renderer\BBCode\Tag;

class Spoiler extends \App\Renderer\BBCode\Tag\AbstractTag
{
	/**
	 * [Process The BBCode parser manager(Renderer\ProcessTags) should see this function.]
	 */
	public function Process()
	{
		/**
		 * This is Spoiler.
		 * [spoiler={param}]{string}[/spoiler]
		 */
		$this->addTag('spoiler={param}', ['']);

		/**
		 * Adding "string" information to the following tags: spoiler
		 */
		$this->addString(['spoiler']);

		/**
		 * Adding "callback" information to the following tags: spoiler
		 */
		$this->addCallback(['spoiler']);
	}
}
