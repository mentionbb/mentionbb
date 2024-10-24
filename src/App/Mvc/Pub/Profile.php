<?php

namespace App\Mvc\Pub;

use App\Mvc\Controller;
use App\Rule\Pub;
use App\String\Profile as ProfileString;
use App\String\Post as PostString;
use App\String\Discussion as DiscussionString;
use App\String\Reaction as ReactionString;

class Profile extends Controller implements Pub
{
    public function container($option)
    {
        if ($this->request->getRequestMethod() == "GET")
        {
            $profile = new ProfileString;

            if (\App\SubContainer\User\UsernameControl::isExist($option['username']))
            {
                if ($profile->getUserByUserId($option['user_id']))
                {
                    $template = $this->template->render(
                        'profile.twig',
                        [
                            'option' => $option,
                            'string' => [
                                'user' => $profile->getUserByUserId($option['user_id']),
                                'profile' => $profile,
                                'post' => new PostString,
                                'discussion' => new DiscussionString,
                                'reaction' => new ReactionString
                            ]
                        ]
                    );

                    return $this->phrase->render('html')->prepare($template)
                        ->render();
                }
                else
                {
                    $template = $this->template->render(
                        '404.twig',
                        [
                            'option' => $option,
                        ]
                    );

                    return $this->phrase->render('html')->prepare($template)
                        ->render();
                }
            }
            else
            {
                $template = $this->template->render(
                    '404.twig',
                    [
                        'option' => $option,
                    ]
                );

                return $this->phrase->render('html')->prepare($template)
                    ->render();
            }
        }
        elseif ($this->request->getRequestMethod() == "POST")
        {
        }
    }
}
