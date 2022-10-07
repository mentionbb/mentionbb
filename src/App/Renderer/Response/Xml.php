<?php

namespace App\Renderer\Response;

class Xml extends ResponseRenderer
{
    protected $contentType = 'application/xml';
    protected $xml;

    public function getResponseType()
    {
        return 'xml';
    }

    public function init()
    {
        $this->xml = new \XMLWriter();
        $this->xml->openMemory();
        $this->xml->setIndent(true);
    }

    public function serialize(array $params, $startDocument = true)
    {
        if ($startDocument)
        {
            $this->xml->startDocument('1.0', 'UTF-8');
        }

        foreach ($params as $key => $val)
        {
            $key = preg_replace('/\{([a-zA-Z0-9]+)_([0-9]+)\}/', '$1', $key);
            $this->xml->startElement($key);

            if (isset($val['attributes']) && is_array($val['attributes']))
            {
                foreach ($val['attributes'] as $attrKey => $attrValue)
                {
                    $this->xml->writeAttribute($attrKey, $attrValue);
                }
            }

            if (is_array($val['content']))
            {
                $this->serialize($val['content'], false);
            }
            else
            {
                $this->xml->text($val['content']);
            }

            $this->xml->endElement();
        }
    }

    public function outputXml()
    {
        $this->xml->endDocument();

        return $this->xml->outputMemory();
    }

    protected function escapeXml($string)
    {
        return \htmlspecialchars($string, ENT_XML1 | ENT_COMPAT, 'UTF-8');
    }

    public function render()
    {
        $this->request->setContentDispositionStreamed(
            'ApplicationRenderer_Xml_Temp_' . \App\Uuid::v4(),
            $this->outputXml(),
            $this->contentType
        );
    }

    public function renderSitemap($path)
    {
        return $this->request->setContentDisposition(
            pathinfo($path, PATHINFO_BASENAME),
            $path,
            $this->contentType
        );
    }
}
