<?php

namespace Addons\Pacman\App\Mvc\Pub;

use Addons\Pacman\App\Mvc\ApplicationDefinitions;
use App\Rule\Pub;

class Game extends ApplicationDefinitions implements Pub
{
    public function container($option)
    {
        if ($this->request->getRequestMethod() == "GET")
        {
            return $this->request->redirect($this->settings->site_url, false);
        }
        elseif ($this->request->getRequestMethod() == "POST")
        {
            $template = $this->template->render(
                $this->getTemplate('pacman.tpl'),
                [
                    'option' => $option
                ]
            );

            return $this->phrase->render('json')->serialize([
                'template' => $template
            ])->render();
        }
    }
}
