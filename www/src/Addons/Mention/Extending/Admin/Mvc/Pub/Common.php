<?php

namespace ComponentBundle\Extending\Admin\Mvc\Pub;

use ComponentBundle\Extending\Admin\Mvc\ApplicationDefinitions;
use App\Rule\Pub;
use App\Repository\Post as PostRepo;
use App\Repository\Get as GetRepo;
use App\Entity\Settings as SettingsEntity;
use App\Entity\DateTime;
use App\SubContainer\ServerEnvironment;
use ComponentBundle\Extending\Admin\String\Stats;
use App\SubContainer\Attachment\Attachment;
use App\SubContainer\Bytes;

class Common extends ApplicationDefinitions implements Pub
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
            $server = new ServerEnvironment;

            if ($query->has('phpInfo'))
            {
                return $server->getPHPInfo();
            }
        }
        elseif ($this->request->getRequestMethod() == "POST")
        {
            if ($this->request->getPathInfo() == '/admin/common')
            {
                if ($query->has('getVisitorStats'))
                {
                    return $this->getVisitorStats();
                }
                else if ($query->has('indexUserQuickSearch'))
                {
                    return $this->userQuickSearch();
                }
                else if ($query->has('uploadImage'))
                {
                    return $this->uploadImage();
                }
            }
        }
    }

    private function getVisitorStats()
    {
        $stats = new Stats;
        $date = new DateTime($this->default_language);

        $dates = [];
        $counts = [];
        foreach ($stats->getVisitors() as $dateRaw)
        {
            $dates[] = $date->getFullDate($dateRaw['dateline']);
            $counts[] = count($dateRaw);
        }

        return $this->phrase->render('json')->serialize([
            'dates' => $dates,
            'data' => $counts
        ])->render();
    }

    private function userQuickSearch()
    {
        $post = new PostRepo();

        $template = $this->template->render(
            $this->getTemplate('Layout/user_quick_search.twig'),
            [
                'string' => [
                    'keyword' => $post->get('keyword'),
                    'users' => \App\SubContainer\Search\Quick::searchUsers($post->get('keyword')),
                ]
            ]
        );

        return $this->phrase->render('json')->serialize([
            'template' => $template
        ])->render();
    }

    private function uploadImage()
    {
        $post = new PostRepo();
        $settings = new SettingsEntity;

        foreach ($_FILES as $file)
        {
            $upload = (new Attachment())->uploadImage(
                $file,
                "images",
                Bytes::convertToBytes(
                    $this->phrase->getGlobals()['admin']['max_site_logo_size']
                ),
                false
            );
        }

        if (is_array($upload))
        {
            foreach ($post->toArray('settings') as $key => $val)
            {
                $settings->setSettings($key, $val);
            }
        }

        return $this->phrase->render('json')->serialize(
            []
        )->render();
    }
}
