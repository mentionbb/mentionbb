<?php

namespace App\Mvc\Pub;

use App\Mvc\Controller;
use App\Rule\Pub;

class AppException extends Controller
{
    public function notFound()
    {
        $template = $this->template->render(
            '404.twig',
            []
        );

        return $this->phrase->render('html')->prepare($template)
            ->render();
    }
}
