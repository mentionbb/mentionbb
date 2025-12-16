<?php

namespace App\Renderer\BBCode\Tag;

class Align extends \App\Renderer\BBCode\Tag\AbstractTag
{
	/**
	 * [Process The BBCode parser manager(Renderer\ProcessTags) should see this function.]
	 */
	public function Process()
	{
		/**
		 * This is text alignment.
		 * [align={param}]{string}[/align]
		 * <div class="text-align: {1}">{string}</div>
		 * <p style="text-align: {1};">{string}</p>
		 */
		$this->addTag(
			'align={param:left|center|right}',
			['<div style="text-align: {1};">', '</div>'],
			['<p style="text-align: {1};">', '</p>']
		);

		/**
		 * This is text align center.
		 * [center={param}]{string}[/center]
		 * <div class="text-align: center">{string}</div>
		 */
		$this->addTag('center', ['<div style="text-align: center;">', '</div>']);

		/**
		 * Adding "string" information to the following tags: align, center
		 */
		$this->addString(['align', 'center']);
	}
}
