<?php

namespace App\Renderer\Response;

class Json extends ResponseRenderer
{
    protected $modifiers = JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT;
    protected $contentType = 'application/json';

    protected $isCsrf = false;

    public function getResponseType()
    {
        return 'json';
    }

    public function init()
    {
    }

    public function prepareJson($status)
    {
        return [
            'status' => $status
        ];
    }

    public function getJsonTemplate(array $params, $status)
    {
        if ($status)
        {
            $status = !isset($params['status']) ? 'ok' : $params['status'];

            return array_merge($this->prepareJson($status), $params);
        }
        else
        {
            return $params;
        }
    }

    public function serialize(array $params, $status = true, $modifiers = false)
    {
        if ($this->isCsrf)
        {
            if (!(new \App\SecurityProtocols\CrossSiteRequestForgery())->validateToken($this->request->getCsrf()))
            {
                $params = [
                    'status' => 'fail_security_x_token'
                ];
            }
        }

        if (!$modifiers)
        {
            $this->serialize = json_encode(
                $this->getJsonTemplate($params, $status),
                $this->modifiers
            );
        }
        else
        {
            $this->serialize = json_encode(
                $this->getJsonTemplate($params, $status),
                $modifiers
            );
        }

        return $this;
    }

    public function outputJson()
    {
        return $this->serialize;
    }

    public function render()
    {
        $this->request->setContentDispositionStreamed(
            'ApplicationRenderer_Json_Temp_' . \App\Uuid::v4(),
            $this->serialize,
            $this->contentType
        );
    }

    public function useCsrf()
    {
        $this->isCsrf = true;
    }

    public function setContentTypeManifest()
    {
        $this->contentType = 'application/manifest+json';

        return $this;
    }
}
