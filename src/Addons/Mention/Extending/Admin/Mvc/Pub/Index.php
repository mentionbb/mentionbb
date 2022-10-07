<?php

namespace ComponentBundle\Extending\Admin\Mvc\Pub;

use ComponentBundle\Extending\Admin\Mvc\ApplicationDefinitions;
use App\Rule\Pub;
use App\Repository\Get as GetRepo;
use App\SubContainer\ServerEnvironment;
use App\String\Post as GlobalPostString;
use App\String\Discussion as GlobalDiscussionString;
use App\String\Stats as GlobalStatsString;
use ComponentBundle\Extending\Admin\SubContainer\Logs;

class Index extends ApplicationDefinitions implements Pub
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
                $this->getTemplate('Index/index.tpl'),
                [
                    'option' => $option,
                    'string' => [
                        'server' => new ServerEnvironment,
                        'post' => new GlobalPostString,
                        'discussion' => new GlobalDiscussionString,
                        'stats' => new GlobalStatsString,
                        'isExistNewErrorLog' => Logs::isExistNewErrorLog()
                    ]
                ]
            );
        }
        elseif ($this->request->getRequestMethod() == "POST")
        {
        }
    }
}
