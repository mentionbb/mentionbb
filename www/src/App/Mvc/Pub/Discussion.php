<?php

namespace App\Mvc\Pub;

use App\Mvc\Controller;
use App\Rule\Pub;
use App\Repository\Post as PostRepo;
use App\String\Post as PostString;
use App\String\Discussion as DiscussionString;

class Discussion extends Controller implements Pub
{
    public function container($option)
    {
        if ($this->request->getRequestMethod() == "GET")
        {
            $discussion = new DiscussionString;
            $post = new PostString;

            if ($discussion->discussionIsExist($option['discussion_id']))
            {
                $post->setDiscussionId($option['discussion_id']);

                $discussion->addDiscussionView($option['discussion_id']);
                $string = $discussion->getDiscussion($option['discussion_id']);

                if (\App\Phrase::buildSeoLink(\App\Renderer\Title::Render($string['title'])) != $option['discussion_title'])
                {
                    $this->request->redirect(
                        $this->phrase->buildLink('discussion', [
                            'discussion_id' => $string['discussion_id'],
                            'discussion_title' => $string['title'],
                            'post_id' => $option['post_id']
                        ]),
                        false
                    );
                }

                $template = $this->template->render(
                    'discussion.twig',
                    [
                        'option' => $option,
                        'string' => [
                            'post' => $post,
                            'discussion' => $string,
                            'order' => \App\SubContainer\Post\Order::getOrder('newest')
                        ],
                        'discussion' => $discussion
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
        elseif ($this->request->getRequestMethod() == "POST")
        {
        }
    }
}
