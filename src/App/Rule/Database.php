<?php

namespace App\Rule;

interface Database
{
	public function _prepare($select, $table, $where);
	public function _prepareExecute($select, $table, $where, $execute_items = array(), $loop = "loop::false");
	public function assignForeach($select, $table, $field, $execute_items = array());
	public function _insertArray($table, $params);
	public function _updateArray($table, $params, $where);
	public function _deleteArray($table, $where);
}
