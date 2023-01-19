<?php

namespace ComponentBundle\Extending\Admin\Mvc\Pub;

use ComponentBundle\Extending\Admin\Mvc\ApplicationDefinitions;
use App\Rule\Pub;
use App\Repository\Post as PostRepo;
use App\Repository\Get as GetRepo;
use App\String\EditorButtons as EditorButtonsString;

class Editor extends ApplicationDefinitions implements Pub
{
    protected $editorButtonsString;

    public function container($option)
    {
        $this->editorButtonsString = new EditorButtonsString;

        $query = new GetRepo();

        if (!$this->accessProtocol())
        {
            return $this->request->redirect($this->settings->site_url, false);
        }

        if ($this->request->getRequestMethod() == "GET")
        {
            if ($query->has('editorButtons'))
            {
                echo $this->template->render(
                    $this->getTemplate('Editor/editor_buttons.twig'),
                    [
                        'option' => $option
                    ]
                );
            }
            else if ($query->has('buttonId'))
            {
                echo $this->template->render(
                    $this->getTemplate('Editor/edit_buttons.twig'),
                    [
                        'option' => $option,
                        'string' => [
                            'button' => $this->editorButtonsString->getButton($query->get('buttonId'))
                        ]
                    ]
                );
            }
            else
            {
                echo $this->template->render(
                    $this->getTemplate('Editor/editor_buttons.twig'),
                    [
                        'option' => $option
                    ]
                );
            }
        }
        elseif ($this->request->getRequestMethod() == "POST")
        {
            if ($this->request->getPathInfo() == '/admin/editor')
            {
                if ($query->has('toolbarConfig'))
                {
                    return $this->toolbarConfig();
                }
                else if ($query->has('toolbarEdit'))
                {
                    return $this->toolbarEdit();
                }
                else if ($query->has('buttonEdit'))
                {
                    return $this->buttonEdit();
                }
            }
        }
    }

    private function toolbarConfig()
    {
        $post = new PostRepo();

        $buttonEntity = new \App\Entity\EditorButtons();

        $activeToolbars = [];
        foreach ((array) $post->get('activeToolbars') as $key => $val)
        {
            $activeToolbars[$key] = $val;
        }
        $buttonEntity->changeOrderToolbars($activeToolbars);

        $disableToolbars = [];
        foreach ((array) $post->get('disableToolbars') as $key => $val)
        {
            $disableToolbars[$key] = $val;
        }
        $buttonEntity->changeOrderToolbars($disableToolbars, 0);

        return $this->phrase->render('json')->serialize(
            []
        )->render();
    }

    private function toolbarEdit()
    {
        $post = new PostRepo();

        $data = [];
        foreach ($post->toArray('options') as $key => $val)
        {
            $data[$key] = $val;
        }
        $data = array_merge($data, ['id' => $post->get('toolbar_id')]);
        \ComponentBundle\Extending\Admin\SubContainer\Editor\EditToolbars::doEdit($data);

        return $this->phrase->render('json')->serialize(
            []
        )->render();
    }

    private function buttonEdit()
    {
        $post = new PostRepo();

        $data = [
            'tag' => $post->get('tag'),
            'replace_text' => $post->get('content'),
            'bbcode' => $post->get('bbcode'),
            'is_active' => $post->get('is_active'),
            'toolbar_name' => $post->get('toolbar_name'),
            'toolbar_button' => $post->get('toolbar_button'),
            'toolbar_icon' => $post->get('toolbar_icon'),
            'toolbar_order_by' => $post->get('toolbar_order_by'),
            'toolbar_id' => $post->get('toolbar_id'),
            'button_id' => $post->get('button_id')
        ];
        \ComponentBundle\Extending\Admin\SubContainer\Editor\EditButtons::doEdit($data);

        return $this->phrase->render('json')->serialize(
            []
        )->render();
    }
}
