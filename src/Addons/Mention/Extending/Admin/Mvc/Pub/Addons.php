<?php

namespace ComponentBundle\Extending\Admin\Mvc\Pub;

use ComponentBundle\Extending\Admin\Mvc\ApplicationDefinitions;
use App\Rule\Pub;
use App\Repository\Post as PostRepo;
use App\Repository\Get as GetRepo;
use ComponentBundle\Extending\Admin\String\Addons as AddonsString;
use ComponentBundle\Extending\Admin\SubContainer\Modification;

class Addons extends ApplicationDefinitions implements Pub
{
    public function container($option)
    {
        $query = new GetRepo();

        if (!$this->accessProtocol())
        {
            return $this->request->redirect($this->settings->site_url, false);
        }

        if ($this->request->getRequestMethod() == "GET")
        {
            if ($query->has('app'))
            {
                $app = str_replace(['[', ']'], ['', ''], $query->get('app'));

                if (!class_exists($app))
                {
                    return false;
                }

                $isEvent = explode('\\', $app);
                if (end($isEvent) !== 'Event')
                {
                    throw new \Exception('Only the application file can be edited.');
                }

                $content = file_get_contents((new \App\Util\ClassFinder())->getFilenameFromNamespace($app));
                echo $this->template->render(
                    $this->getTemplate('Addons/app.twig'),
                    [
                        'option' => $option,
                        'string' => [
                            'name' => $app,
                            'content' => $content,
                            'originalContent' => Modification::isExist($app)
                        ]
                    ]
                );
            }
            else if ($query->has('install'))
            {
                echo $this->template->render(
                    $this->getTemplate('Addons/install.twig'),
                    [
                        'option' => $option
                    ]
                );
            }
            else
            {
                $addons = (new AddonsString())->getAddons();

                echo $this->template->render(
                    $this->getTemplate('Addons/list.twig'),
                    [
                        'option' => $option,
                        'string' => [
                            'addonList' => $addons
                        ]
                    ]
                );
            }
        }
        elseif ($this->request->getRequestMethod() == "POST")
        {
            if ($this->request->getPathInfo() == '/admin/addons')
            {
                if ($query->has('disableAddon'))
                {
                    return $this->disableAddon();
                }
                else if ($query->has('activateAddon'))
                {
                    return $this->activateAddon();
                }
                else if ($query->has('updateApp'))
                {
                    return $this->updateApplication();
                }
                else if ($query->has('install'))
                {
                    return $this->install();
                }
            }
        }
    }

    private function disableAddon()
    {
        $post = new PostRepo();

        $data = [
            'name' => $post->get('addon_name')
        ];
        \ComponentBundle\Extending\Admin\SubContainer\Addons\Switcher::doDisable($data);

        return $this->phrase->render('json')->serialize(
            []
        )->render();
    }

    private function activateAddon()
    {
        $post = new PostRepo();

        $data = [
            'name' => $post->get('addon_name')
        ];
        \ComponentBundle\Extending\Admin\SubContainer\Addons\Switcher::doActivate($data);

        return $this->phrase->render('json')->serialize(
            []
        )->render();
    }

    private function updateApplication()
    {
        $post = new PostRepo();

        $parser = (new \PhpParser\ParserFactory())->createForNewestSupportedVersion();
        try
        {
            $parser->parse(
                $post->get('content')
            );
        }
        catch (\PhpParser\Error $e)
        {
            return $this->phrase->render('json')->serialize([
                'status' => 'exception-php-parser',
                'message' => $e->getMessage()
            ])->render();
        }

        $data = [
            'name' => $post->get('name'),
            'content' => $post->get('content')
        ];
        \ComponentBundle\Extending\Admin\SubContainer\Addons\Application::doUpdate($data);

        return $this->phrase->render('json')->serialize(
            []
        )->render();
    }

    private function install()
    {
        $post = new PostRepo();

        if (!\ComponentBundle\Extending\Admin\SubContainer\Addons\Install::doInstall($_FILES['archive']))
        {
            return false;
        }

        return $this->phrase->render('json')->serialize(
            []
        )->render();
    }
}
