<?php

namespace ComponentBundle\Extending\Admin\Mvc\Pub;

use ComponentBundle\Extending\Admin\Mvc\ApplicationDefinitions;
use App\Rule\Pub;
use App\Repository\Post as PostRepo;
use App\Repository\Get as GetRepo;
use ComponentBundle\Extending\Admin\String\Templates as TemplateString;
use ComponentBundle\Extending\Admin\SubContainer\Modification;

class Templates extends ApplicationDefinitions implements Pub
{
    protected $templateString;

    public function container($option)
    {
        $this->templateString = new TemplateString;

        $query = new GetRepo();

        if (!$this->accessProtocol())
        {
            return $this->request->redirect($this->settings->site_url, false);
        }

        if ($this->request->getRequestMethod() == "GET")
        {
            if ($query->has('path'))
            {
                foreach ($query->getIterator()->getArrayCopy() as $key => $val)
                {
                    $templateName[$key] = $val;
                }
            }
            if (!isset($templateName['path']))
            {
                $templateName = [
                    'path' => '[Templates/Default/container.twig]'
                ];
            }
            $templateName = $this->getQueryItem($templateName['path']);

            echo $this->template->render(
                $this->getTemplate('Theme/templates.twig'),
                [
                    'option' => $option,
                    'string' => [
                        'name' => $templateName,
                        'template' => $this->templateString,
                        'originalContent' => Modification::isRealExist($templateName)
                    ]
                ]
            );
        }
        elseif ($this->request->getRequestMethod() == "POST")
        {
            if ($this->request->getPathInfo() == '/admin/templates')
            {
                if ($query->has('getTemplate'))
                {
                    return $this->getTemplateFile();
                }
                else if ($query->has('updateTemplate'))
                {
                    return $this->updateTemplateFile();
                }
            }
        }
    }

    private function getTemplateFile()
    {
        $post = new PostRepo();

        $content = $this->templateString->getTemplate($post->get('file'));

        return $this->phrase->render('json')->serialize([
            'content' => $content,
            'originalContent' => Modification::isExist($post->get('file'))
        ])->render();
    }

    private function updateTemplateFile()
    {
        $post = new PostRepo();

        try
        {
            $this->template->parse(
                $this->template->tokenize(
                    new \Twig\Source($post->get('content'), $post->get('name'))
                )
            );
        }
        catch (\Twig\Error\SyntaxError $e)
        {
            return $this->phrase->render('json')->serialize([
                'status' => 'exception-twig-syntax',
                'message' => $e->getMessage()
            ])->render();
        }

        $data = [
            'name' => $post->get('name'),
            'path' => $post->get('path'),
            'content' => $post->get('content')
        ];
        \ComponentBundle\Extending\Admin\SubContainer\Theme\UpdateTemplate::doUpdate($data);

        return $this->phrase->render('json')->serialize(
            []
        )->render();
    }
}
