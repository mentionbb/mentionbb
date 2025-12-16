<?php

namespace ComponentBundle\Extending\Admin\Mvc\Pub;

use ComponentBundle\Extending\Admin\Mvc\ApplicationDefinitions;
use App\Rule\Pub;
use App\Repository\Post as PostRepo;
use App\Repository\Get as GetRepo;
use ComponentBundle\Extending\Admin\String\AttachmentFileTypes as AttachmentFileTypesString;

class Attachments extends ApplicationDefinitions implements Pub
{
    public function container($option)
    {
        $query = new GetRepo();

        if (!$this->accessProtocol())
        {
            return $this->request->redirect($this->settings->site_url, false);
        }

        if ($this->request->getRequestMethod() == "GET")
        {
            if ($query->has('types'))
            {
                echo $this->template->render(
                    $this->getTemplate('Attachments/file_types.twig'),
                    [
                        'option' => $option,
                        'string' => [
                            'attchfiletypes' => new AttachmentFileTypesString()
                        ]
                    ]
                );
            }
            else if ($query->has('createFileType'))
            {
                echo $this->template->render(
                    $this->getTemplate('Attachments/new_file_type.twig'),
                    [
                        'option' => $option
                    ]
                );
            }
        }
        elseif ($this->request->getRequestMethod() == "POST")
        {
            if ($this->request->getPathInfo() == '/admin/attachments')
            {
                if ($query->has('updateFileTypes'))
                {
                    return $this->updateFileTypes();
                }
                else if ($query->has('createFileType'))
                {
                    return $this->createFileType();
                }
            }
        }
    }

    private function updateFileTypes()
    {
        $post = new PostRepo();

        $options = $post->toArray('options');
        $data = [
            'extension' => $options['extension'],
            'mime_type' => $options['mime_type'],
            'icon' => $options['icon'],
            'is_active' => $options['is_active'] ? 1 : 0,
            'type_id' => $post->get('type_id')
        ];
        \ComponentBundle\Extending\Admin\SubContainer\Attachments\AttachmentFileTypes::doEdit($data);

        return $this->phrase->render('json')->serialize(
            []
        )->render();
    }

    private function createFileType()
    {
        $post = new PostRepo();

        $options = $post->toArray('options');
        $data = [
            'extension' => $options['extension'],
            'mime_type' => $options['mime_type'],
            'icon' => $options['icon'],
            'is_active' => $options['is_active'] ? 1 : 0
        ];
        \ComponentBundle\Extending\Admin\SubContainer\Attachments\AttachmentFileTypes::doCreate($data);

        return $this->phrase->render('json')->serialize(
            []
        )->render();
    }
}
