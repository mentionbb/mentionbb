<?php

namespace App\Renderer\BBCode\Tag;

class Listing extends \App\Renderer\BBCode\Tag\AbstractTag
{
	/**
	 * [Process The BBCode parser manager(Renderer\ProcessTags) should see this function.]
	 */
	public function Process()
	{
		/**
		 * This is List.
		 * [list={param}]{string}[/list]
		 */
		$this->addTag('list={param:none|disc|decimal}', ['']);

		/**
		 * Adding "string" information to the following tags: list
		 */
		$this->addString(['list']);

		/**
		 * Adding "callback" information to the following tags: list
		 */
		$this->addCallback(['list']);
	}
}
