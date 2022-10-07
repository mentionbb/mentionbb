<?php

namespace ComponentBundle\Extending\Admin\SubContainer\Editor;

use App\Entity\EditorButtons as EditorButtons;

class EditToolbars
{
    public static function doEdit(array $data)
    {
        $input = \App\Repository\Set::setObject($data);

        if ((new EditorButtons())->editToolbars($input->toolbar, $input->alias, $input->button, $input->icon, $input->order_by, $input->id))
        {
            return true;
        }
    }

    public static function doFullEdit(array $data)
    {
        $input = \App\Repository\Set::setObject($data);

        if ((new EditorButtons())->editToolbarsFull($input->toolbar, $input->alias, $input->button, $input->icon, $input->order_by, $input->id, $input->is_active))
        {
            return true;
        }
    }
}
