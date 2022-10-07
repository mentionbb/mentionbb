<?php

namespace ComponentBundle\Extending\Admin\Mvc\Pub;

use ComponentBundle\Extending\Admin\Mvc\ApplicationDefinitions;
use App\Rule\Pub;
use App\Repository\Get as GetRepo;
use App\Repository\Post as PostRepo;

class NativeApi extends ApplicationDefinitions implements Pub
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
                $this->getTemplate('Api/native_api.tpl'),
                [
                    'option' => $option
                ]
            );
        }
        elseif ($this->request->getRequestMethod() == "POST")
        {
        }
    }
}
