<?php

namespace App\Renderer\BBCode\Tag;

class Text extends \App\Renderer\BBCode\Tag\AbstractTag
{
	/**
	 * [Process The BBCode parser manager(Renderer\ProcessTags) should see this function.]
	 */
	public function Process()
	{
		/**
		 * This is Bold text.
		 * [b]{string}[/b]
		 * <b>{string}</b>
		 * <strong>{string}</strong>
		 */
		$this->addTag(
			'b',
			['<b>', '</b>'],
			['<strong>', '</strong>']
		);

		/**
		 * This is Italic text.
		 * [i]{string}[/i]
		 * <em>{string}</em>
		 */
		$this->addTag(
			'i',
			['<em>', '</em>'],
			['<em>', '</em>']
		);

		/**
		 * This is Underline text.
		 * [u]{string}[/u]
		 * <u>{string}</string>
		 */
		$this->addTag(
			'u',
			['<u>', '</u>'],
			['<u>', '</u>']
		);

		/**
		 * This is Strike text.
		 * [s]{string}[/s]
		 * <del>{string}</del>
		 * <s>{string}</s>
		 */
		$this->addTag(
			's',
			['<del>', '</del>'],
			['<s>', '</s>']
		);

		/**
		 * This is Sub text.
		 * [sub]{string}[/sub]
		 * <sub>{string}</sub
		 */
		$this->addTag('sub', ['<sub>', '</sub>']);

		/**
		 * This is Sup text.
		 * [sup]{string}[/sup]
		 * <sup>{string}</sup
		 */
		$this->addTag('sup', ['<sup>', '</sup>']);

		/**
		 * This is P.
		 * [p]{string}[/p]
		 * <p>{string}</p
		 */
		$this->addTag('p', ['<p>', '</p>']);

		/**
		 * This is Heading.
		 * [heading={param}]{string}[/heading]
		 * <h{1}>{string}</h{1}>
		 */
		$this->addTag(
			'heading={param}',
			[''],
			['<h{1}>', '</h{1}>']
		);

		/**
		 * This is text size.
		 * [size={param}]{string}[/size]
		 * <font size="{1}">{string}</font>
		 * <span style="font-size: {1}">{string}</span>
		 */
		$this->addTag(
			'size={param}',
			['<font size="{1}">', '</font>'],
			['<span style="font-size: {1}">', '</span>']
		);

		/**
		 * This is text color.
		 * [color={param}]{string}[/color]
		 * <font style="color: {1};">{string}</font>
		 * <font color="{1}">{string}</font>
		 */
		$this->addTag(
			'color={param}',
			['<font style="color: {1};">', '</font>'],
			['<font color="{1}">', '</font>']
		);

		/**
		 * This is text font.
		 * [font={param}]{string}[/font]
		 * <span style="font-family: {1}">{string}</span>
		 */
		$this->addTag('font={param}', ['<span style="font-family: {1};">', '</span>']);

		/**
		 * This is text background color.
		 * [background={param}]{string}[/background]
		 * <span style="background-color: {1}">{string}</span>
		 */
		$this->addTag(
			'background={param}',
			['<span style="background-color: {1};">', '</span>'],
			['<span style="background-color: {1};">', '</span>']
		);

		$this->addTag('bull', ['&bull;']);
		$this->addTag('copy', ['&copy;']);
		$this->addTag('registered', ['&reg;']);
		$this->addTag('tm', ['&trade;']);

		/**
		 * Adding "string" information to the following tags: b, i, u, s, sub, sup, p, heading, size, color, font, background
		 */
		$this->addString(['b', 'i', 'u', 's', 'sub', 'p', 'heading', 'size', 'color', 'font', 'background']);

		/**
		 * Adding "single" information to the following tags: bull, copy, registered, tm
		 */
		$this->addSingle(['bull', 'copy', 'registered', 'tm']);

		/**
		 * Adding "callback" information to the following tags: heading
		 */
		$this->addCallback(['heading']);
	}
}
