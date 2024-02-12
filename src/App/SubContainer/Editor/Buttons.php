<?php

namespace App\SubContainer\Editor;

class Buttons
{
    private $buttons;
    
    public function __construct()
    {
        $this->buttons = new \App\String\EditorButtons();
    }

    public function getToolbars()
    {
        $toolbarParent = [];
        foreach ($this->buttons->toolbarList() as $toolbar)
        {
            $toolbarParent[$toolbar['button']][] = $toolbar['toolbar'];
        }

        $toolbars = [];
        foreach ($toolbarParent as $toolbar)
        {
            $toolbars[] = implode(' ', $toolbar);
        }

        $toolbars = implode(' | ', $toolbars);

        return [
            'toolbars' => $toolbars
        ];
    }

    public function getToolbarsWithOptions($active = true)
    {
        if($active)
        {
            $toolbarList = $this->buttons->toolbarList();
        }
        else
        {
            $toolbarList = $this->buttons->toolbarNonactiveList();
        }
        
        $toolbars = [];
        foreach ($toolbarList as $toolbar)
        {
            $toolbars[$toolbar['button']][] = [
                'id' => $toolbar['toolbar_id'],
                'name' => $toolbar['toolbar'],
                'alias' => $toolbar['alias'],
                'button' => $toolbar['button'],
                'icon' => $toolbar['icon'],
                'order_by' => $toolbar['order_by']
            ];
        }

        return $toolbars;
    }

    public function getToolbarIcons()
    {
        $icons = [];
        foreach ($this->buttons->toolbarList() as $toolbar)
        {
            if ($toolbar['icon'] !== '')
            {
                $icons[] = [
                    'name' => $toolbar['alias'],
                    'icon' => $toolbar['icon']
                ];
            }
        }

        return [
            'icons' => $icons
        ];
    }

    public function getButtons()
    {
        $buttons = [];
        foreach ($this->buttons->buttonList() as $button)
        {
            $buttons[] = [
                'tag' => str_replace('={param}', '', $button['tag']),
                'bbcode' => $button['bbcode'],
                'title' => $button['toolbar']
            ];
        }

        return [
            'buttons' => $buttons
        ];
    }

    public function getButtonList($active = true)
    {
        $toolbars = [];
        foreach ($this->buttons->buttonList($active) as $toolbar)
        {
            $toolbars[$toolbar['button']][] = [
                'id' => $toolbar['toolbar_id'],
                'name' => $toolbar['toolbar'],
                'alias' => $toolbar['alias'],
                'button' => $toolbar['button'],
                'icon' => $toolbar['icon'],
                'order_by' => $toolbar['order_by'],
                'button_id' => $toolbar['button_id']
            ];
        }

        return $toolbars;
    }
}
