<?php

namespace App\Renderer\BBCode\Tag;

class Code extends \App\Renderer\BBCode\Tag\AbstractTag
{
	/**
	 * [Process The BBCode parser manager(Renderer\ProcessTags) should see this function.]
	 */
	public function Process()
	{
		/**
		 * This is CodeBlock.
		 * [code={param}]{string}[/code]
		 * <div class="bbContainer_appCodeBlock"><div class="codeBlockTitle"></div><pre><code class="language-{1}">{string}</code></pre></div>
		 */
		$this->addTag('code={param}', ['<div class="bbContainer_appCodeBlock"><div class="codeBlockTitle"></div><pre><code class="language-{1}">', '</code></pre></div>']);

		/**
		 * Adding "string" information to the following tags: code
		 */
		$this->addString(['code']);
	}
}
