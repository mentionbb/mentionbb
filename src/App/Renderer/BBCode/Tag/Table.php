<?php

namespace App\Renderer\BBCode\Tag;

class Table extends \App\Renderer\BBCode\Tag\AbstractTag
{
	/**
	 * [Process The BBCode parser manager(Renderer\ProcessTags) should see this function.]
	 */
	public function Process()
	{
		/**
		 * This is Table.
		 * [table{param};{param}]{string}[/table]
		 * <div class="table-responsive"><table class="table table-bordered table-striped" style="{1}" border="{2}">{string}</div></param>
		 */
		$this->addTag('table={param};{param}', ['<div class="table-responsive"><table class="table table-bordered table-striped" style="{1}" border="{2}">', '</table></div>']);

		/**
		 * This is Table > Tr.
		 * [tr]{string}[/tr]
		 * <tr>{string}</tr>
		 */
		$this->addTag('tr', ['<tr>', '</tr>']);

		/**
		 * This is Table > Tr > Td.
		 * [td={param}]{string}[/td]
		 * <td style="{1}">{string}</td>
		 */
		$this->addTag('td={param}', ['<td style="{1}">', '</td>']);

		/**
		 * Adding "string" information to the following tags: table, tr, td
		 */
		$this->addString(['table', 'tr', 'td']);
	}
}
