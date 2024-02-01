<?php

namespace App\Util;

class FileSortedIterator extends \SplHeap
{
    public function __construct(\Iterator $iterator)
    {
        foreach ($iterator as $item)
        {
            $this->insert($item);
        }
    }

    public function compare($b, $a): int
    {
        return strcmp($a->getRealpath(), $b->getRealpath());
    }
}
