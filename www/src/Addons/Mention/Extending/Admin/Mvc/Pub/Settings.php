<?php

namespace ComponentBundle\Extending\Admin\Mvc\Pub;

use ComponentBundle\Extending\Admin\Mvc\ApplicationDefinitions;
use App\Rule\Pub;
use App\Repository\Post as PostRepo;
use App\Repository\Get as GetRepo;
use App\Entity\Settings as SettingsEntity;

class Settings extends ApplicationDefinitions implements Pub
{
    protected $settingsEntity;

    public function container($option)
    {
        $query = new GetRepo();
        $this->settingsEntity = new SettingsEntity;

        if (!$this->accessProtocol())
        {
            return $this->request->redirect($this->settings->site_url, false);
        }

        if ($this->request->getRequestMethod() == "GET")
        {
            if ($query->count())
            {
                foreach ($query->getIterator()->getArrayCopy() as $key => $val)
                {
                    $groupName = $key;
                }

                if ($this->settingsEntity->getSettingsFromGroupName($groupName))
                {
                    echo $this->template->render(
                        $this->getTemplate('Settings/setting.twig'),
                        [
                            'option' => $option,
                            'string' => [
                                'group' => $groupName,
                                'settings' => $this->settingsEntity
                            ]
                        ]
                    );
                }
            }
            else
            {
                echo $this->template->render(
                    $this->getTemplate('Settings/groups.twig'),
                    [
                        'option' => $option,
                        'string' => [
                            'settings' => $this->settingsEntity
                        ]
                    ]
                );
            }
        }
        elseif ($this->request->getRequestMethod() == "POST")
        {
            if ($this->request->getPathInfo() == '/admin/settings')
            {
                if ($query->has('save'))
                {
                    return $this->saveSettings();
                }
            }
        }
    }

    private function saveSettings()
    {
        $post = new PostRepo();

        foreach ($post->toArray('settings') as $key => $val)
        {
            $this->settingsEntity->setSettings($key, $val);
        }

        return $this->phrase->render('json')->serialize(
            []
        )->render();
    }
}
