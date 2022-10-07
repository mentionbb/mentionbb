<?php

namespace ComponentBundle\Extending\Admin\Mvc\Pub;

use ComponentBundle\Extending\Admin\Mvc\ApplicationDefinitions;
use App\Rule\Pub;
use App\Repository\Post as PostRepo;
use App\Repository\Get as GetRepo;
use App\String\Social as SocialString;

class OAuth extends ApplicationDefinitions implements Pub
{
    protected $socialString;

    public function container($option)
    {
        $query = new GetRepo();

        if (!$this->accessProtocol())
        {
            return $this->request->redirect($this->settings->site_url, false);
        }

        $this->socialString = new SocialString;

        if ($this->request->getRequestMethod() == "GET")
        {
            if ($query->count())
            {
                foreach ($query->getIterator()->getArrayCopy() as $key => $val)
                {
                    $optionName = $key;
                }

                if ($optionName = 'addService')
                {
                    echo $this->template->render(
                        $this->getTemplate('OAuth/add_service.tpl'),
                        [
                            'option' => $option,
                            'string' => [
                                'social' => $this->socialString
                            ]
                        ]
                    );
                }
            }
            else
            {
                echo $this->template->render(
                    $this->getTemplate('OAuth/oauth_services.tpl'),
                    [
                        'option' => $option,
                        'string' => [
                            'social' => $this->socialString
                        ]
                    ]
                );
            }
        }
        elseif ($this->request->getRequestMethod() == "POST")
        {
            if ($this->request->getPathInfo() == '/admin/oauth')
            {
                if ($query->has('updateService'))
                {
                    return $this->updateService();
                }
                else if ($query->has('addService'))
                {
                    return $this->addService();
                }
            }
        }
    }

    private function updateService()
    {
        $post = new PostRepo();

        $options = $post->toArray('options');

        $data = [
            'title' => $options['title'],
            'name' => \mb_strtolower($options['name']),
            'api_keys' => "{$options['site_key']}\n{$options['secret_key']}",
            'callback' => $options['callback'],
            'is_active' => $options['is_active'] ? 1 : 0,
            'site_id' => $post->get('service_id')
        ];
        \ComponentBundle\Extending\Admin\SubContainer\Services\Set::Do($data);

        return $this->phrase->render('json')->serialize(
            []
        )->render();
    }

    private function addService()
    {
        $post = new PostRepo();

        $options = $post->toArray('options');

        $data = [
            'title' => $options['title'],
            'name' => \mb_strtolower($options['name']),
            'api_keys' => "{$options['site_key']}\n{$options['secret_key']}",
            'callback' => $options['callback'],
            'is_active' => $options['is_active'] ? 1 : 0
        ];

        if (!$this->socialString->getSiteFromName($data['name']))
        {
            \ComponentBundle\Extending\Admin\SubContainer\Services\Create::Do($data);

            return $this->phrase->render('json')->serialize(
                []
            )->render();
        }
        else
        {
            return $this->phrase->render('json')->serialize([
                'status' => 'same_service_is_exist'
            ])->render();
        }
    }
}
