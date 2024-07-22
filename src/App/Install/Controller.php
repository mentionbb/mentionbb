<?php

namespace App\Install;

use App\Repository\Request;
use App\Repository\Get as GetRepo;
use App\Repository\Post as PostRepo;
use App\Phrase;
use App\Template\Simple;

abstract class Controller
{
    protected $routing;
    protected $request;
    protected $phrase;
    protected $template;
    protected $post;
    protected $query;

    public function __construct($routing)
    {
        $this->routing = $routing;

        \App\App::parameterContainer();
        $this->primaryController();
    }

    public function primaryController()
    {
        $this->request = new Request();

        $this->phrase = new Phrase();
        $this->phrase->setContainer($this->request);
        $this->phrase->setupRouteParams();

        $this->template = new Simple();
        $this->templaterController();

        $this->post = new PostRepo();
        $this->query = new GetRepo();

        \App\RemoveTrailingSlash::removeTrailingSlash($this->request);

        $this->isAlreadyInstall();
    }

    private function templaterController()
    {
        $this->template->addGlobals([
            'app' => [
                'build' => [
                    'version' => \App\App::$build['version'],
                    'id' => \App\App::$build['versionId'],
                    'code' => \App\App::versionNaming(),
                    'title' => \App\App::$build['versionTitle'],
                    'support_php_version' => \App\App::$_supportPhpVersion
                ],
                'routing' => $this->routing,
                'public_dir' => \App\SubContainer\AppSub::getPublicDir(),
                'ajax_path' => $this->phrase->getAjaxPath(),
                'session' => \App\App::$session,
                'request' => $this->request,
                'post' => $this->post,
                'query' => $this->query,
                'phrase' => $this->phrase,
                'csrf_token' => (new \App\SecurityProtocols\CrossSiteRequestForgery())->getEncodedToken(),
                'resource' => [
                    'common' => new \App\Install\Resource()
                ]
            ]
        ]);
    }

    protected function isAlreadyInstall()
    {
        if (\file_exists(APPLICATION_SELF . '/install.lock'))
        {
            if ($this->request->getPathInfo() == '/install')
            {
                $this->request->redirect(
                    $this->phrase->buildLink(
                        'indexAction',
                        []
                    ),
                    false
                );
            }
        }

        return true;
    }
}
