<?php

namespace ComponentBundle\Extending\Admin\Mvc\Pub;

use ComponentBundle\Extending\Admin\Mvc\ApplicationDefinitions;
use App\Rule\Pub;
use App\Repository\Post as PostRepo;
use App\Repository\Get as GetRepo;
use ComponentBundle\Extending\Admin\String\Theme as ThemeString;

class Theme extends ApplicationDefinitions implements Pub
{
    protected $theme;

    public function container($option)
    {
        $this->theme = new ThemeString;

        $query = new GetRepo();

        if (!$this->accessProtocol())
        {
            return $this->request->redirect($this->settings->site_url, false);
        }

        if ($this->request->getRequestMethod() == "GET")
        {
            if ($query->has('types'))
            {
            }
            else
            {
                echo $this->template->render(
                    $this->getTemplate('Theme/theme.tpl'),
                    [
                        'option' => $option,
                        'string' => [
                            'theme' => $this->theme
                        ]
                    ]
                );
            }
        }
        elseif ($this->request->getRequestMethod() == "POST")
        {
            if ($this->request->getPathInfo() == '/admin/theme')
            {
                if ($query->has('getCss'))
                {
                    return $this->getCss();
                }
                else if ($query->has('updateCssFile'))
                {
                    return $this->updateCssFile();
                }
            }
        }
    }

    private function getCss()
    {
        $post = new PostRepo();

        $content = $this->theme->getCssFile($post->get('file'));

        return $this->phrase->render('json')->serialize([
            'content' => $content
        ])->render();
    }

    private function updateCssFile()
    {
        $post = new PostRepo();

        $data = [
            'name' => $post->get('name'),
            'content' => $post->get('content')
        ];
        \ComponentBundle\Extending\Admin\SubContainer\Theme\UpdateStyle::doUpdate($data);

        return $this->phrase->render('json')->serialize(
            []
        )->render();
    }
}
