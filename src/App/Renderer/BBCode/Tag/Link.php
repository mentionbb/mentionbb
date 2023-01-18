<?php

namespace App\Renderer\BBCode\Tag;

class Link extends \App\Renderer\BBCode\Tag\AbstractTag
{
	/**
	 * [Process The BBCode parser manager(Renderer\ProcessTags) should see this function.]
	 */
	public function Process()
	{
		/**
		 * This is Url.
		 * [url]{string}[/url]
		 * <a target="_blank" href="{string}">{string}</a>
		 * <a href="{string}">{string}</a>
		 */
		$this->addTag(
			'url',
			['<a target="_blank" href="{string}">', '</a>'],
			['<a href="{string}">', '</a>']
		);

		/**
		 * This is Url.
		 * [url={param}]{string}[/url]
		 * <a target="_blank" href="{1}">{string}</a>
		 * <a href="{1}">{string}</a>
		 */
		$this->addTag(
			'url={param}',
			['<a target="_blank" href="{1}">', '</a>'],
			['<a href="{1}">', '</a>']
		);

		/**
		 * This is Mail.
		 * [mail]{string}[/mail]
		 * <a target="_blank" href="mailto:{string}">{string}</a>
		 */
		$this->addTag('mail', ['<a target="_blank" href="mailto:{string}">', '</a>']);

		/**
		 * This is Mail.
		 * [mail={param}]{string}[/mail]
		 * <a target="_blank" href="mailto:{1}">{string}</a>
		 */
		$this->addTag('mail={param}', ['<a target="_blank" href="mailto:{1}">', '</a>']);

		/**
		 * Adding "string" information to the following tags: url, mail
		 */
		$this->addString(['url', 'mail']);
	}
}
