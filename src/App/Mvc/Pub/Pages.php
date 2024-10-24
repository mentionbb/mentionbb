<?php

namespace App\Mvc\Pub;

use App\Mvc\Controller;
use App\Rule\Pub;
use App\Repository\Post as PostRepo;

class Pages extends Controller implements Pub
{
    public function container($option)
    {
        if ($this->request->getRequestMethod() == "GET")
        {
            if ($this->request->getPathInfo() == '/pages/faq')
            {
                $template = $this->template->render(
                    'faq.twig',
                    [
                        'option' => $option,
                        'string' => []
                    ]
                );

                return $this->phrase->render('html')->prepare($template)
                    ->render();
            }
            elseif ($this->request->getPathInfo() == '/pages/privacy')
            {
                $template = $this->template->render(
                    'privacy.twig',
                    [
                        'option' => $option,
                        'string' => []
                    ]
                );

                return $this->phrase->render('html')->prepare($template)
                    ->render();
            }
            elseif ($this->request->getPathInfo() == '/pages/contact')
            {
                $template = $this->template->render(
                    'contact.twig',
                    [
                        'option' => $option,
                        'string' => []
                    ]
                );
            }
        }
        elseif ($this->request->getRequestMethod() == "POST")
        {
            if ($this->request->getPathInfo() == '/pages/contact')
            {
                $this->contact();
            }
        }
    }

    private function contact()
    {
        $post = new PostRepo();

        $send = (new \App\SubContainer\Mailer())->Send(
            $post->get('title'),
            [$post->get('mail')],
            [$this->settings->site_mail],
            $post->get('text')
        );

        if ($send)
        {
            return $this->phrase->render('json')->serialize(
                []
            )->render();
        }
    }
}
