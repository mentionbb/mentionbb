<?php

namespace App\Repository;

use Symfony\Component\HttpFoundation\Request as HttpRequest;
use Symfony\Component\HttpFoundation\Response as HttpResponse;
use Symfony\Component\HttpFoundation\HeaderUtils;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;

class Request
{
    private $request;
    private $response;

    public function __construct()
    {
        $this->request = HttpRequest::createFromGlobals();
        $this->response = new HttpResponse();
    }

    public function getRequestUri()
    {
        return $this->request->getRequestUri();
    }

    public function getUri()
    {
        $uri = $this->request->getUri();

        if (
            preg_match('/(http)/', $uri, $matchHttpsProtocolButUriIsHttp)
            && $this->getServerProtocol() == 'https://'
        )
        {
            $uri = \str_replace(
                'http',
                'https',
                $uri
            );
        }

        return $uri;
    }

    public function getPathInfo()
    {
        return $this->request->getPathInfo();
    }

    public function setRequestUri()
    {
        $base  = dirname($this->request->server->get('PHP_SELF'));

        if (ltrim($base, '/'))
        {
            $this->request->server->set('REQUEST_URI', $this->getPathInfo());
        }

        $this->request->overrideGlobals();

        return $this->getRequestUri();
    }

    public function getHttpReferer()
    {
        return $this->request->server->get('HTTP_REFERER');
    }

    public function getRemoteAddr()
    {
        return $this->request->server->get('REMOTE_ADDR');
    }

    public function getServerName()
    {
        return $this->request->server->get('SERVER_NAME');
    }

    public function getRequestMethod()
    {
        return $this->request->server->get('REQUEST_METHOD');
    }

    public function getUserAgent()
    {
        return $this->request->headers->get('User-Agent');
    }

    public function isXmlHttpRequest()
    {
        return $this->request->isXmlHttpRequest();
    }

    public function getCsrf()
    {
        if ($this->request->headers->has('X-CSRF'))
        {
            return $this->request->headers->get('X-CSRF');
        }

        return false;
    }

    public function setContentDisposition($filename, $file, $contentType, $attachment = false)
    {
        $fileContent = $file;
        $response = new BinaryFileResponse($fileContent);

        $response->headers->set('Content-Type', $contentType);
        if ($attachment)
        {
            $disposition = HeaderUtils::makeDisposition(
                HeaderUtils::DISPOSITION_ATTACHMENT,
                $filename
            );

            $response->headers->set('Content-Disposition', $disposition);
        }

        return $response->send();
    }

    public function setContentDispositionStreamed($filename, $data, $contentType, $attachment = false)
    {
        $response = new StreamedResponse();
        $response->setCallback(function () use ($data)
        {
            echo $data;
        });

        $response->headers->set('Content-Type', $contentType);
        if ($attachment)
        {
            $disposition = HeaderUtils::makeDisposition(
                HeaderUtils::DISPOSITION_ATTACHMENT,
                $filename
            );

            $response->headers->set('Content-Disposition', $disposition);
        }

        return $response->send();
    }

    public function setContentType($contentType)
    {
        $this->response->headers->set('Content-Type', $contentType);

        //$this->response->prepare($this->request);
        //$this->response->send();
    }

    public function redirect($location = false, $site_url = true)
    {
        $settings = $settings = (new \App\Entity\Settings)->getSettings();
        $referer = $this->getHttpReferer();

        if (!$location)
        {
            $this->redirectResponse($referer);
            exit();
        }
        else
        {
            if ($site_url)
            {
                $this->redirectResponse("{$settings->site_url}/{$location}");
                exit();
            }
            else
            {
                $this->redirectResponse($location);
                exit();
            }
        }
    }

    protected function redirectResponse($url): RedirectResponse
    {
        $response = new RedirectResponse($url, 301);

        return $response->send();
    }

    public function getServerProtocol()
    {
        if (
            isset($_SERVER['HTTPS']) &&
            ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
            isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
            $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'
        )
        {
            $protocol = 'https://';
        }
        else
        {
            $protocol = 'http://';
        }

        return $protocol;
    }
}
