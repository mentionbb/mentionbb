<?php

namespace App\Install\Controller;

use App\Install\Controller;

class Install extends Controller
{
    public function container()
    {
        if ($this->request->getRequestMethod() == "GET")
        {
            echo $this->template->render('{page_container:install}');
        }
        elseif ($this->request->getRequestMethod() == "POST")
        {
            if ($this->request->getPathInfo() == '/install')
            {
                if ($this->query->has('next'))
                {
                    return $this->getStep();
                }
            }
        }
    }

    private function getStep()
    {
        if (!$this->post->has('step'))
        {
            return false;
        }

        $allowedSteps = [
            'step1a',
            'step1b',
            'step1c',
            'step1d',
            'step1f',
            'step2a',
            'step2b',
            'step3a',
            'step3b',
            'step4a',
            'step5a',
            'step6a',
            'step7a',
            'step7b',
            'step8a',
            'step8b'
        ];

        if (!in_array($this->post->get('step'), $allowedSteps))
        {
            return false;
        }

        $step = $this->post->get('step');

        $data = [
            'string' => [
                'server' => new \App\SubContainer\ServerEnvironment()
            ]
        ];

        $error = [];

        if (is_array($data['string']['server']->checkRequirement()))
        {
            $errorData = [
                'error' => [
                    'code' => '1000',
                    'title' => 'Install error on step1b',
                    'message' => 'Your server does not meet the minimum system requirements. Please have your provider make the relevant plugins/settings or install Mention on another server/hosting.'
                ]
            ];

            $error = [
                'status' => 'fail',
                'template' => $this->template->render("install_error", $errorData)
            ];
        }

        $template = $this->template->render("install_{$step}", $data);

        return $this->phrase->render('json')->serialize([
            'template' => $template,
            'error' => $error
        ])->render();
    }
}
