<?php

namespace App\Mvc\Pub;

use App\Mvc\Controller;
use App\Rule\Pub;
use App\Repository\Post as PostRepo;
use App\Repository\Get as GetRepo;

class Editor extends Controller implements Pub
{
    public function container($option)
    {
        $query = new GetRepo();

        if ($this->request->getRequestMethod() == "GET")
        {
        }
        elseif ($this->request->getRequestMethod() == "POST")
        {
            if ($this->request->getPathInfo() == '/editor')
            {
                if ($query->has('getButtons'))
                {
                    $string = (new \App\String\EditorButtons())->buttonList();

                    return $this->phrase->render('json')->serialize([
                        'list' => $string
                    ])->render();
                }
                else if ($query->has('parsePostProcess'))
                {
                    $post = new PostRepo();

                    return $this->phrase->render('json')->serialize([
                        'content' => (new \App\Renderer\BBCode\Editor\Editor())->Render($post->get('content'), 'brToN')
                    ])->render();
                }
                else if ($query->has('parseBbcode'))
                {
                    $post = new PostRepo();

                    return $this->phrase->render('json')->serialize([
                        'content' => (new \App\Renderer\BBCode\Parser($this->settings, $this->language, $this->phrase))->Parse($post->get('content'))
                    ])->render();
                }
            }
        }
    }
}
