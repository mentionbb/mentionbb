<?php

namespace App\Renderer\BBCode\Tag;

class Extending extends \App\Renderer\BBCode\Tag\AbstractTag
{
    /**
     * [Process The BBCode parser manager(Renderer\ProcessTags) should see this function.]
     */
    public function Process()
    {
        $buttons = new \App\String\EditorButtons();

        foreach ($buttons->buttonList() as $button)
        {
            if ($button['tag'] !== '')
            {
                $name = str_replace('={param}', '', $button['tag']);
                if ($button['is_string'])
                {
                    $replaceText = explode('{string}', $button['replace_text']);

                    $this->addTag($button['tag'], [$replaceText[0], $replaceText[1]]);
                }
                else if ($button['is_single'])
                {
                    $this->addTag($button['tag'], ['']);
                }

                if ($button['is_string'])
                {
                    $this->addString([$name]);
                }
                else if ($button['is_single'])
                {
                    $this->addSingle([$name]);
                }
            }
        }
    }
}
