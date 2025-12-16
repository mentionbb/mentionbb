<?php

namespace App\Renderer\SeoBundle\Meta;

use App\Renderer\SeoBundle\Meta\MetaBundle;

class RenderHtml
{
    protected $htmlTemplate = "<meta {string}=\"{string}\" {string|content}=\"{string}\" />";

    private function _buildMetaHtml(array $data): string
    {
        $template = preg_replace('/{(string(?:\|)?(?:content)?)}/', '%s', $this->htmlTemplate);
        $template = $this->addLeftSpace() . $template;

        foreach ($data as $name => $item)
        {
            for ($i = 0; $i < count($item); $i++)
            {
                if ($item['tag'][0] !== 'html')
                {
                    $data = $this->outputFormatter(
                        $item['value'][2],
                        sprintf($template, $item['tag'][0], $item['value'][0], $item['tag'][1], $item['value'][1])
                    );
                }
                else
                {
                    $data = $this->outputFormatter($item['value'][1], $item['value']['0']);
                }
            }
        }

        return $data;
    }

    public function getHtml(): array
    {
        $metaBundle = (new MetaBundle)->buildItems();

        $htmlArray = [];
        foreach ($metaBundle as $key => $val)
        {
            $htmlArray[$key] = $this->_buildMetaHtml([$key => ['tag' => array_keys($val), 'value' => array_values($val)]]);
        }

        return $htmlArray;
    }

    protected function outputFormatter($format, $string)
    {
        return str_replace(
            ['{newline}', '{leftspace}', '{newline|leftspace}', '{string}'],
            [$this->addNewLine(), $this->addLeftSpace(), $this->addNewLine() . $this->addLeftSpace(), $string],
            $format
        );
    }

    /**
     * addLeftSpace
     *
     * This function helps in formatting the output.
     * 
     * @return string
     */
    protected function addLeftSpace()
    {
        return "    ";
    }

    /**
     * addNewLine
     *
     * This function helps in formatting the output.
     * 
     * @return string
     */
    protected function addNewLine()
    {
        return "\r\n";
    }
}
