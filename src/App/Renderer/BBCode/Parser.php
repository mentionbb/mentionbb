<?php

namespace App\Renderer\BBCode;

use App\Renderer\BBCode\ProcessTags;
use App\Renderer\BBCode\Html\Escape;
use App\Renderer\BBCode\Html\LineBreaks;
use App\Renderer\BBCode\Html\ProcessListItems;
use App\Renderer\BBCode\Html\ClearBBCode;

use App\Renderer\BBCode\Helper\Media;

use App\Renderer\BBCode\Str\Emoticons;
use App\Renderer\BBCode\Str\CensorWords;

class Parser
{
    protected $settings;
    protected $language;
    protected $phrase;

    public function __construct($settings, $language, $phrase)
    {
        $this->settings = $settings;
        $this->language = $language;
        $this->phrase = $phrase;
    }

    public function Parse($string, $quoteContainer = true)
    {
        $s = (string) $string;

        if (empty($s))
        {
            return '';
        }

        $s = Escape::escapeHtml($s);

        $s = preg_replace_callback('#[-a-zA-Z0-9@:%_\+.~\#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~\#?&//=]*)?$#si', function ($matches)
        {
            return "[url={$matches[0]}]{$matches[0]}[/url]";
        }, $s);

        $s = preg_replace('/\[url\=([^(http)].+?)\](.*?)\[\/url\]/i', '[url=http://$1]$2[/url]', $s);
        $s = preg_replace('/\[url\]([^(http)].+?)\[\/url\]/i', '[url=http://$1]$1[/url]', $s);

        $s = LineBreaks::addBreak($s);
        $s = LineBreaks::needToAddLineBreaks($s);

        $tagList = new ProcessTags();
        
        foreach ($tagList->getTagList() as $finalList)
        {
            if (!$finalList['callback'])
            {
                $s = preg_replace("/{$finalList['bbCode']}/is", $finalList['modification'], $s);
            }
        }

        $s = $tagList->addTagCallback([
            'name' => 'list',
            'callback' => [$this, 'listTag', $s]
        ]);

        $s = $tagList->addTagCallback([
            'name' => 'spoiler',
            'callback' => [$this, 'spoilerTag', $s]
        ]);

        $s = $this->emoticon($s);
        $s = $this->mediaTag($s);
        $s = $this->quoteTag($s, $quoteContainer);
        $s = $this->externalQuoteTag($s, $quoteContainer);
        $s = $this->imageResize($s);
        $s = $this->censorWords($s);

        $s = preg_replace_callback('/<div class="table-responsive">(.*?)<\/div>/si', function ($matches)
        {
            return "<div class=\"table-responsive\">" . str_replace('<br />', '', $matches[1]) . "</div>";
        }, $s);

        $s = $this->userTagging($s);

        return $s;
    }

    public function ClearBBCode($string, $nl2br = false, $html = true)
    {
        $string = $this->Parse($string);

        return ClearBBCode::Process($string, $nl2br, $html);
    }

    public function listTag($options, $string)
    {
        return preg_replace_callback("/{$options['bbCode']}/si", function ($matches)
        {
            return "<ol style=\"list-style-type: {$matches[1]};\">\n" . ProcessListItems::Process($matches[2]) . "\n</ol>";
        }, $string);
    }

    protected function quoteTag($string, $quoteContainer)
    {
        return preg_replace_callback("/(\[post-quote\]([0-9]+)\[\/post-quote\])/is", function ($matches) use ($quoteContainer)
        {
            $template = "";
            if ($quoteContainer)
            {
                $template .= "<div class=\"bbContainer_appQuote\">";
            }

            $template .= $this->quote($matches[0]);

            if ($quoteContainer)
            {
                $template .= "<div class=\"expandQuote js-expandQuote d-none\"><a href=\"#\" role=\"button\"></a></div>";
                $template .= "</div>";
            }

            return $template;
        }, $string);
    }

    protected function externalQuoteTag($string, $quoteContainer)
    {
        return preg_replace_callback('/\[quote\](.*?)\[\/quote\]/is', function ($matches) use ($quoteContainer)
        {
            return "<div class=\"bbContainer_appQuote\">
            <div class=\"quote-container shadow-sm p-3\">
            <div class=\"quote-external quote d-flex flex-column text-dark\">
            <div class=\"mr-auto\"><span>{$matches[1]}</span></div>
            <div class=\"expandQuote js-expandQuote d-none\"><a href=\"#\" role=\"button\"></a></div>
            </div>
            </div>
            </div>";
        }, $string);
    }

    public function spoilerTag($options, $string)
    {
        return preg_replace_callback("/{$options['bbCode']}/is", function ($matches)
        {
            return "
            <div class=\"js-Spoiler spoiler-alert rounded shadow\" data-ui=\"spoiler-btn\">
            <div class=\"title\">{$matches[1]}</div>
            <div class=\"collapse\">
            <span>{$matches[2]}</span>
            </div>
            </div>
            ";
        }, $string);
    }

    protected function mediaTag($string)
    {
        $source = preg_replace_callback("/\[([a-zA-Z0-9]+)(?:\=)?([a-z0-9]+)?\](.+?)\[\/([a-zA-Z0-9]+)\]/si", function ($matches)
        {
            if (\App\Renderer\BBCode\Helper\Media::findMedia($matches[1]))
            {
                $media = \App\Renderer\BBCode\Helper\Media::findMedia($matches[1]);

                if (\mb_strlen($matches[2]) > 0)
                {
                    $embedHtml = Media::replacedEmbed($media['embed_html'], $matches[3], $matches[2]);
                }
                else
                {
                    $embedHtml = Media::replacedEmbed($media['embed_html'], $matches[3]);
                }

                return "<div class=\"bbWrapper_{$matches[1]}\">{$embedHtml}</div>";
            }
            else
            {
                return $matches[0];
            }
        }, $string);

        return $source;
    }

    protected function userTagging($string)
    {
        $source = preg_replace_callback("/@(.*?);/is", function ($matches)
        {
            if ((new \App\Entity\User())->findByUserName($matches[1]) > 0)
            {
                $userSub = new \App\SubContainer\User\Link($this->settings, $this->language, $this->phrase);
                $userSub->setUser($matches[1]);
                $link = $userSub->getOnlyLink();
                $userId = $userSub->getId();
                $userSub->unsetUser();

                return "<a class=\"font-weight-bold tagged-user user-tooltip-link\" href=\"{$link}\" data-user-id=\"{$userId}\">{$matches[0]}</a>";
            }
            else
            {
                return $matches[0];
            }
        }, $string);

        return $source;
    }

    protected function quote($string)
    {
        $source = preg_replace_callback("/\[post-quote\]([0-9]+)\[\/post-quote\]/is", function ($matches)
        {
            $postString = (new \App\String\Post())->getPostByPostId($matches[1]);

            if ($postString)
            {
                $template = "<div class=\"quote-container shadow-sm p-3\">";

                $template .= "<div class=\"quote d-flex flex-column text-dark\" data-post-id=\"{$matches[1]}\">";

                if (preg_match("/\[post-quote\]([0-9]+)\[\/post-quote\]/is", $postString['content'], $matchQuote))
                {
                    $content = $this->quote(
                        $this->parse($postString['content'], false)
                    );
                }
                else
                {
                    $content = $this->parse(
                        $postString['content'],
                        false
                    );
                }

                $user = new \App\SubContainer\User\Link($this->settings, $this->language, $this->phrase);
                $user->setUser($postString['user_id']);
                $template .= "<div class=\"mb-3\"><span class=\"user\">{$user->getName()}</span></div><div class=\"mr-auto\"><span>{$content}</span></div>";
                $user->unsetUser();

                $template .= "</div>";

                $template .= "</div>";

                return $template;
            }
        }, $string);

        return $source;
    }

    protected function emoticon($string)
    {
        $source = (new Emoticons())->Render($string);

        return $source;
    }

    protected function censorWords($string)
    {
        $source = CensorWords::Render($string);

        return $source;
    }

    protected function imageResize($string)
    {
        return preg_replace_callback('/<img class="app-AttachmentImage" src="(.*?)" (.*?) \/>/si', function ($matches)
        {
            $localImage = str_replace([\App\Phrase::getSiteUrl() . '/', '../', 'public'], ['', '', PUBLIC_DIR], $matches[1]);
            if (file_exists($localImage))
            {
                list($width, $height) = getimagesize($localImage);

                if ($width >= '900')
                {
                    return "<img class=\"app-AttachmentImage\" src=\"{$matches[1]}\" style=\"width: 50%\" {$matches[2]}>";
                }
                else
                {
                    return "<img class=\"app-AttachmentImage\" src=\"{$matches[1]}\" {$matches[2]}>";
                }
            }
            else
            {
                return "";
            }
        }, $string);
    }
}
