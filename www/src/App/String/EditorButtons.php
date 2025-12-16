<?php

namespace App\String;

use App\Entity\EditorButtons as EditorButtonsEntity;

class EditorButtons
{
    private $button;

    public function __construct()
    {
        $this->button = new EditorButtonsEntity();
    }

    public function buttonList($active = true)
    {
        return $this->button->buttonList($active);
    }

    public function toolbarList()
    {
        return $this->button->toolbarList();
    }

    public function toolbarNonactiveList()
    {
        return $this->button->toolbarNonactiveList();
    }

    public function getButton($button_id)
    {
        return $this->button->getButton($button_id);
    }
}
