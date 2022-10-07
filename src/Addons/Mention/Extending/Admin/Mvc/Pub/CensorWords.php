<?php

namespace ComponentBundle\Extending\Admin\Mvc\Pub;

use ComponentBundle\Extending\Admin\Mvc\ApplicationDefinitions;
use App\Rule\Pub;
use App\Repository\Get as GetRepo;
use App\Repository\Post as PostRepo;
use App\String\CensorWords as WordsString;

class CensorWords extends ApplicationDefinitions implements Pub
{
    public function container($option)
    {
        $query = new GetRepo();

        if ($this->request->getRequestMethod() == "GET")
        {
            if (!$this->accessProtocol())
            {
                return $this->request->redirect($this->settings->site_url, false);
            }

            echo $this->template->render(
                $this->getTemplate('CensorWords/censor_words.tpl'),
                [
                    'option' => $option,
                    'string' => [
                        'words' => (new WordsString)->getWords()
                    ]
                ]
            );
        }
        elseif ($this->request->getRequestMethod() == "POST")
        {
            if ($this->request->getPathInfo() == '/admin/censor-words')
            {
                if ($query->has('edit'))
                {
                    return $this->editWords();
                }
            }
        }
    }

    private function editWords()
    {
        $post = new PostRepo();

        $data = [
            'words' => $post->get('words')
        ];
        \ComponentBundle\Extending\Admin\SubContainer\CensoredWords\Edit::Do($data);

        return $this->phrase->render('json')->serialize(
            []
        )->render();
    }
}
