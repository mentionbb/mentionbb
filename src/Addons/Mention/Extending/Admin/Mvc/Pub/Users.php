<?php

namespace ComponentBundle\Extending\Admin\Mvc\Pub;

use ComponentBundle\Extending\Admin\Mvc\ApplicationDefinitions;
use App\Rule\Pub;
use App\Repository\Post as PostRepo;
use App\Repository\Get as GetRepo;
use App\Entity\User as UserEntity;

class Users extends ApplicationDefinitions implements Pub
{
    protected $userEntity;

    public function container($option)
    {
        $query = new GetRepo();
        $this->userEntity = new UserEntity;

        if (!$this->accessProtocol())
        {
            return $this->request->redirect($this->settings->site_url, false);
        }

        if ($this->request->getRequestMethod() == "GET")
        {
            if ($query->has('editUser'))
            {
                $userId = $query->get('editUser');

                if ($this->userEntity->findByUserId($userId))
                {
                    $user = $this->userEntity->findByUserId($userId);

                    echo $this->template->render(
                        $this->getTemplate('Users/edit_user.twig'),
                        [
                            'option' => $option,
                            'string' => [
                                'user' => $user
                            ]
                        ]
                    );
                }
            }
            else if ($query->has('addUser'))
            {
                echo $this->template->render(
                    $this->getTemplate('Users/add_user.twig'),
                    [
                        'option' => $option
                    ]
                );
            }
            else if ($query->has('banUser'))
            {
                $userId = $query->get('banUser');

                if ($this->userEntity->findByUserId($userId))
                {
                    $user = $this->userEntity->findByUserId($userId);

                    echo $this->template->render(
                        $this->getTemplate('Users/ban_user.twig'),
                        [
                            'option' => $option,
                            'string' => [
                                'user' => $user
                            ]
                        ]
                    );
                }
            }
            else
            {
                echo $this->template->render(
                    $this->getTemplate('Users/users.twig'),
                    [
                        'option' => $option,
                        'string' => [
                            'users' => $this->userEntity
                        ]
                    ]
                );
            }
        }
        elseif ($this->request->getRequestMethod() == "POST")
        {
            if ($this->request->getPathInfo() == '/admin/users')
            {
                if ($query->has('new'))
                {
                    return $this->newUser();
                }
                else if ($query->has('edit'))
                {
                    return $this->editUser();
                }
                else if ($query->has('ban'))
                {
                    return $this->banUser();
                }
                else if ($query->has('unban'))
                {
                    return $this->unbanUser();
                }
            }
        }
    }

    private function newUser()
    {
        $post = new PostRepo();

        if (\App\SubContainer\User\UsernameControl::isExist($post->get('username')))
        {
            return $this->phrase->render('json')->serialize([
                'status' => 'user-is-exist'
            ])->render();
        }

        $data = [
            'username' => $post->get('username'),
            'password' => $post->get('password'),
            'mail' => $post->get('mail'),
            'title' => $post->get('title'),
            'role' => $post->get('role')
        ];
        \App\SubContainer\User\Create::User($data);

        return $this->phrase->render('json')->serialize(
            []
        )->render();
    }

    private function editUser()
    {
        $query = new GetRepo();
        $post = new PostRepo();

        $account = new \App\SubContainer\User\Account();

        if ($post->has('username'))
        {
            $account->changeUsername(
                [
                    'username' => $post->get('username'),
                    'user_id' => $post->get('user_id')
                ],
                $this->user,
                $this->datetime
            );
        }

        if ($post->has('password'))
        {
            $account->forceChangePassword([
                'new_password' => $post->get('password'),
                'user_id' => $post->get('user_id')
            ]);
        }

        if (!empty($_FILES['acs_profile_picture']['tmp_name']))
        {
            $account->changeProfilePicture(
                $_FILES,
                $post->get('user_id')
            );
        }

        if ($post->has('profile_picture_ready'))
        {
            $account->changeProfilePicture_Ready([
                'pp' => $post->get('profile_picture_ready'),
                'user_id' => $post->get('user_id')
            ]);
        }

        if ($post->has('mail'))
        {
            $account->changeMail([
                'new_mail' => $post->get('mail'),
                'user_id' => $post->get('user_id')
            ]);
        }

        if ($post->has('title'))
        {
            $account->changeTitle([
                'new_title' => $post->get('title'),
                'user_id' => $post->get('user_id')
            ]);
        }

        if ($post->has('role'))
        {
            $account->changeRole([
                'role' => $post->get('role'),
                'user_id' => $post->get('user_id')
            ]);
        }

        return $this->phrase->render('json')->serialize(
            []
        )->render();
    }

    private function banUser()
    {
        $post = new PostRepo();

        $data = [
            'expires' => $post->get('expires_in'),
            'text' => $post->get('text'),
            'user_id' => $post->get('user_id')
        ];
        \App\SubContainer\User\Ban::Do($data);

        return $this->phrase->render('json')->serialize(
            []
        )->render();
    }

    private function unbanUser()
    {
        $post = new PostRepo();

        $data = [
            'ban_id' => $post->get('ban_id')
        ];
        \App\SubContainer\User\Ban::unDo($data);

        return $this->phrase->render('json')->serialize(
            []
        )->render();
    }
}
