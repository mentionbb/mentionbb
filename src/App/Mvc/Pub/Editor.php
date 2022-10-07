<?php

namespace App\Mvc\Pub;

use App\Mvc\Controller;
use App\Rule\Pub;
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
            }
        }
    }
}
