<?php

namespace ComponentBundle\Extending\Admin\Mvc\Pub;

use ComponentBundle\Extending\Admin\Mvc\ApplicationDefinitions;
use App\Rule\Pub;
use App\Repository\Post as PostRepo;
use App\Repository\Get as GetRepo;
use App\Entity\Forum as ForumEntity;

class Forums extends ApplicationDefinitions implements Pub
{
    protected $forumsEntity;

    public function container($option)
    {
        $query = new GetRepo();
        $this->forumsEntity = new ForumEntity;

        if (!$this->accessProtocol())
        {
            return $this->request->redirect($this->settings->site_url, false);
        }

        if ($this->request->getRequestMethod() == "GET")
        {
            if ($query->has('addNode'))
            {
                echo $this->template->render(
                    $this->getTemplate('Forums/add_forums.tpl'),
                    [
                        'option' => $option
                    ]
                );
            }
            else
            {
                echo $this->template->render(
                    $this->getTemplate('Forums/forums.tpl'),
                    [
                        'option' => $option
                    ]
                );
            }
        }
        elseif ($this->request->getRequestMethod() == "POST")
        {
            if ($this->request->getPathInfo() == '/admin/forums')
            {
                if ($query->has('showAccordion'))
                {
                    return $this->showForumAccordion();
                }
                else if ($query->has('updateNode'))
                {
                    return $this->updateNode();
                }
                else if ($query->has('addNode'))
                {
                    return $this->addNode();
                }
                else if ($query->has('removeNode'))
                {
                    return $this->removeNode();
                }
                else if ($query->has('removeNodeComplete'))
                {
                    return $this->removeNodeComplete();
                }
            }
        }
    }

    private function showForumAccordion()
    {
        $post = new PostRepo();

        return $this->phrase->render('json')->serialize([
            'template' => $this->template->render(
                $this->getTemplate('Forums/edit_forum_accordion.tpl'),
                [
                    'string' => [
                        'forum' => $this->forumsEntity->getForum(
                            $post->get('forum_id')
                        )
                    ]
                ]
            )
        ])->render();
    }

    private function updateNode()
    {
        $post = new PostRepo();

        $data = [
            'forum_id' => $post->get('forum_id'),
            'parent_id' => $post->get('parent_id'),
            'forum_title' => $post->get('forum_title'),
            'forum_order' => $post->get('forum_order'),
            'forum_description' => $post->get('forum_description'),
        ];
        \ComponentBundle\Extending\Admin\SubContainer\Forums\Edit::Do($data);

        return $this->phrase->render('json')->serialize(
            []
        )->render();
    }

    private function addNode()
    {
        $post = new PostRepo();

        $data = [
            'parent_id' => $post->get('parent_id'),
            'forum_title' => $post->get('forum_title'),
            'forum_description' => $post->get('forum_description'),
            'forum_order' => $post->get('forum_order')
        ];
        \ComponentBundle\Extending\Admin\SubContainer\Forums\Create::Do($data);

        return $this->phrase->render('json')->serialize(
            []
        )->render();
    }

    private function removeNode()
    {
        $post = new PostRepo();

        $data = [
            'forum_id' => $post->get('parent_id'),
        ];

        return $this->phrase->render('json')->serialize([
            'template' => $this->template->render(
                $this->getTemplate('Forums/remove_forum_modal.tpl'),
                [
                    'string' => [
                        'forum_id' => $post->get('forum_id')
                    ]
                ]
            )
        ])->render();
    }

    private function removeNodeComplete()
    {
        $post = new PostRepo();

        $data = [
            'forum_id' => $post->get('forum_id'),
        ];
        \ComponentBundle\Extending\Admin\SubContainer\Forums\Delete::Do($data);

        return $this->phrase->render('json')->serialize(
            []
        )->render();
    }
}
