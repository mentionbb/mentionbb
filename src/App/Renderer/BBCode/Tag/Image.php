<?php

namespace App\Renderer\BBCode\Tag;

class Image extends \App\Renderer\BBCode\Tag\AbstractTag
{
	/**
	 * [Process The BBCode parser manager(Renderer\ProcessTags) should see this function.]
	 */
	public function Process()
	{
		/**
		 * This is Image.
		 * [img={param}]{string}[/img]
		 * <img class="app-AttachmentImage" src="{string}" alt="{1}" title="{1}" />
		 * <img src="{string}" alt="{1}" title="{1}" />
		 */
		$this->addTag(
			'img={param}', ['']
		);

		/**
		 * Adding "string" information to the following tags: img
		 */
		$this->addString(['img']);

		/**
		 * Adding "callback" information to the following tags: img
		 */
		$this->addCallback(['img']);
	}
}
