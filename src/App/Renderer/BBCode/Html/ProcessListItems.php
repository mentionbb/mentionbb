<?php

namespace App\Renderer\BBCode\Html;

class ProcessListItems
{
    public static function Process($list_items)
    {
        $result_list_items = array();

        preg_match_all("/\[li\](.*?)\[\/li\]/is", $list_items, $li_array);
        $li_array = $li_array[1];

        if (empty($li_array))
        {
            $list_items_array = explode("[*]", $list_items);
            foreach ($list_items_array as $li_text)
            {
                $li_text = trim($li_text);
                if (empty($li_text))
                {
                    continue;
                }
                $li_text = nl2br($li_text);
                $result_list_items[] = '<li>' . $li_text . '</li>';
            }
        }
        else
        {
            foreach ($li_array as $li_text)
            {
                $li_text = nl2br($li_text);
                $result_list_items[] = '<li>' . $li_text . '</li>';
            }
        }

        $list_items = implode("\n", $result_list_items);

        return $list_items;
    }
}
