<?php

namespace App\Renderer\Response;

class Html extends ResponseRenderer
{
    protected $contentType = 'text/html';
    protected $html;

    public function getResponseType()
    {
        return 'html';
    }

    public function init()
    {
    }

    public function prepare(string $html)
    {
        $this->html = $html;

        return $this;
    }

    public function render()
    {
        $this->request->setContentDispositionStreamed(
            'ApplicationRenderer_HtmlView_Temp_' . \App\Uuid::v4(),
            $this->html,
            $this->contentType,
            false,
            $this->initSecurelyHeaders()
        );
    }
}
