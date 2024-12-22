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
            'name' => 'img',
            'callback' => [$this, 'imgTag', $s]
        ]);

        $s = $tagList->addTagCallback([
            'name' => 'list',
            'callback' => [$this, 'listTag', $s]
        ]);

        $s = $tagList->addTagCallback([
            'name' => 'heading',
            'callback' => [$this, 'headingTag', $s]
        ]);

        $s = $tagList->addTagCallback([
            'name' => 'spoiler',
            'callback' => [$this, 'spoilerTag', $s]
        ]);

        $s = $this->emoticon($s);
        $s = $this->mediaTag($s);
        $s = $this->quoteTag($s, $quoteContainer);
        $s = $this->externalQuoteTag($s, $quoteContainer);
        $s = $this->quotePostSelectedTag($s, $quoteContainer);
        $s = $this->imageResize($s);
        $s = $this->censorWords($s);

        $s = preg_replace_callback('/<div class="table-responsive">(.*?)<\/div>/si', function ($matches)
        {
            return "<div class=\"table-responsive\">" . str_replace('<br />', '', $matches[1]) . "</div>";
        }, $s);

        $s = $this->userTagging($s);

        $s = preg_replace('/<\/(ol|ul|code|pre|p|h(?:[0-9]+))>\s*<br\s?(\/)?>/si', '</$1>', $s);

        return $s;
    }

    public function ClearBBCode($string, $nl2br = false, $html = true)
    {
        $string = $this->Parse($string);

        return ClearBBCode::Process($string, $nl2br, $html);
    }

    public function imgTag($options, $string)
    {
        return preg_replace_callback("/{$options['bbCode']}/si", function ($matches)
        {
            return preg_replace_callback("/(.*?)\:([0-9]+)\:([0-9]+)/", function ($img) use ($matches)
            {
                $imgData = [
                    'title' => $img[1],
                    'width' => $img[2],
                    'height' => $img[3]
                ];

                return "<a class=\"no-unfurl\" href=\"{$matches[2]}\" data-fancybox=\"images\" data-caption=\"{$imgData['title']}\">
                <img class=\"app-AttachmentImage\" src=\"{$matches[2]}\" alt=\"{$imgData['title']}\" title=\"{$imgData['title']}\" width=\"{$imgData['width']}\" height=\"{$imgData['height']}\" />
                </a>";
            }, $matches[1]);
        }, $string);
    }

    public function headingTag($options, $string)
    {
        return preg_replace_callback("/{$options['bbCode']}/si", function ($matches)
        {
            $link = \App\Phrase::buildSeoLink($matches[2]);
            $link = preg_replace('/(-{2,})/si', '-', $link);

            return "<h{$matches[1]} id=\"{$link}\">{$matches[2]}<a href=\"#{$link}\"></a></h{$matches[1]}>";
        }, $string);
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

    

    protected function quotePostSelectedTag($string, $quoteContainer)
    {
        return preg_replace_callback("/(\[post-selected-quote=([0-9]+)\](.*?)\[\/post-quote\])/is", function ($matches) use ($quoteContainer)
        {
            $template = "";
            if ($quoteContainer)
            {
                $template .= "<div class=\"bbContainer_appQuote\">";
            }

            $postString = (new \App\String\Post())->getPostByPostId($matches[2]);

            if ($postString)
            {
                $template = "<div class=\"quote-container shadow-sm p-3\">";

                $template .= "<div class=\"quote d-flex flex-column text-dark\" data-post-id=\"{$matches[2]}\">";

                $content = htmlspecialchars_decode($matches[3]);
                $content = Escape::escapeQuotes($content);
                $content = htmlspecialchars($content, ENT_QUOTES);
                $content = htmlspecialchars_decode($content);

                $user = new \App\SubContainer\User\Link($this->settings, $this->language, $this->phrase);
                $user->setUser($postString['user_id']);
                $template .= "<div class=\"mb-3\"><span class=\"user\">{$user->getName()}</span></div><div class=\"mr-auto\"><span>{$content}</span></div>";
                $user->unsetUser();

                $template .= "</div>";

                $template .= "</div>";

                return $template;
            }

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

                $doc = new \DOMDocument();
                $doc->loadHTML($matches[0]);
                $data = $doc->getElementsByTagName('img')[0];

                if ($width >= '900' && $data->getAttribute('width') >= '900')
                {
                    return "<img class=\"app-AttachmentImage\" src=\"{$matches[1]}\" style=\"width: 50%;height: 100%\" {$matches[2]} />";
                }
                else
                {
                    return "<img class=\"app-AttachmentImage\" src=\"{$matches[1]}\" {$matches[2]} />";
                }
            }
            else
            {
                return "";
            }
        }, $string);
    }
}
