<?php

namespace ComponentBundle\Extending\Admin\SubContainer\Editor;

use App\Entity\EditorButtons as EditorButtons;
use ComponentBundle\Extending\Admin\SubContainer\Editor\EditToolbars;

class EditButtons
{
    public static function doEdit(array $data)
    {
        $input = \App\Repository\Set::setObject($data);

        /**
         * Match single or string content. Because not all BBCode buttons have to contain content.
         */
        $is_string = 1;
        $is_single = 0;
        if (preg_match('/\{string\}/', $input->replace_text, $matchString) && preg_match('/\{content\}/', $input->bbcode, $matchContent))
        {
            $is_string = 1;
            $is_single = 0;
        }
        else
        {
            $is_string = 0;
            $is_single = 1;
        }

        $toolbarData = [
            'toolbar' => $input->toolbar_name,
            'alias' => $input->toolbar_button,
            'button' => $input->toolbar_button,
            'icon' => $input->toolbar_icon,
            'order_by' => $input->toolbar_order_by,
            'id' => $input->toolbar_id
        ];

        if ((new EditorButtons())->editButtons(
            $input->tag,
            $input->replace_text,
            $input->bbcode,
            $is_string,
            $is_single,
            $input->button_id,
            $input->is_active
        ) && EditToolbars::doFullEdit($toolbarData))
        {
            return true;
        }
    }
}
