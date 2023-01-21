<?php

namespace App\Renderer\BBCode\Editor;

class PostProcess
{
    private $modifications = [
        '<a.*?href=\"(.*?)\".*?>(.*?)<\/a>' => '[url=$1]$2[/url]',
        '<font.*?color=\"(.*?)\".*?class=\"codeStyle\".*?>(.*?)<\/font>' => '[code][color=$1]$2[/color][/code]',
        '<font.*?color=\"(.*?)\".*?class=\"quoteStyle\".*?>(.*?)<\/font>' => '[quote][color=$1]$2[/color][/quote]',
        '<font.*?class=\"codeStyle\".*?color=\"(.*?)\".*?>(.*?)<\/font>' => '[code][color=$1]$2[/color][/code]',
        '<font.*?class=\"quoteStyle\".*?color=\"(.*?)\".*?>(.*?)<\/font>' => '[quote][color=$1]$2[/color][/quote]',
        '<span style=\"color: ?(.*?);\">(.*?)<\/span>' => '[color=$1]$2[/color]',
        '<font.*?color=\"(.*?)\".*?>(.*?)<\/font>' => '[color=$1]$2[/color]',
        '<span style=\"font-size:(.*?);\">(.*?)<\/span>' => '[size=$1]$2[/size]',
        '<font>(.*?)<\/font>' => '$1',

        '<img class="js-Twemoji_MentionEditor"(?:.*?)alt="(.*?)" \/>' => '$1',

        '<img src=\"(.*?)\" (alt=\"(.*?)\") (width=\"(.*?)\" height=\"(.*?)\")?\s?\/?>' => '[img=$3:$5:$6]$1[/img]',
        '<span class=\"codeStyle\">(.*?)<\/span>' => '[code]$1[/code]',
        '<span class=\"quoteStyle\">(.*?)<\/span>' => '[quote]$1[/quote]',
        '<strong class=\"codeStyle\">(.*?)<\/strong>' => '[code][b]$1[/b][/code]',
        '<strong class=\"quoteStyle\">(.*?)<\/strong>' => '[quote][b]$1[/b][/quote]',
        '<em class=\"codeStyle\">(.*?)<\/em>' => '[code][i]$1[/i][/code]',
        '<em class=\"quoteStyle\">(.*?)<\/em>' => '[quote][i]$1[/i][/quote]',
        '<u class=\"codeStyle\">(.*?)<\/u>' => '[code][u]$1[/u][/code]',
        '<u class=\"quoteStyle\">(.*?)<\/u>' => '[quote][u]$1[/u][/quote]',
        '<\/(strong|b)>' => '[/b]',
        '<(strong|b)>' => '[b]',
        '<(s|b)>' => '[s]',
        '<\/(em|i)>' => '[/i]',
        '<(em|i)>' => '[i]',
        '<\/u>' => '[/u]',
        '<\/s>' => '[/s]',
        '<span style=\"text-decoration: ?underline;\">(.*?)<\/span>' => '[u]$1[/u]',
        '<span style=\"text-decoration: ?line-through;\">(.*?)<\/span>' => '[s]$1[/s]',
        '<u>' => '[u]',
        '<blockquote[^>]*>' => '[quote]',
        '<\/blockquote>' => '[/quote]',
        
        //'<br \/>' => "\r\n",
        //'<br\/>' => "\r\n",
        //'<br>' => "\r\n",

        '&nbsp;|\u00a0' => ' ',
        '&quot;' => '',
        '&lt;' => '<',
        '&gt;' => '>',
        '&amp;' => '&',

        '<ul>' => '[list=disc]',
        '<\/ul>' => '[/list]',
        '<ol>' => '[list=decimal]',
        '<\/ol>' => '[/list]',
        '<li>(.*?)<\/li>' => '[li]$1[/li]',

        '<p style="text-align: (.*?);">(.*?)<\/p>' => '[align=$1]$2[/align]',
        '<p>' => '',
        '<\/p>' => '',

        '<span style="font-size: (.*?);">(.*?)<\/span>' => '[size=$1]$2[/size]',

        '<span style="background-color: (.*?);">(.*?)<\/span>' => '[background=$1]$2[/background]',

        '<pre class="language-(.*?)"><code>(.*?)<\/code><\/pre>' => '[code=$1]$2[/code]',

        '<h(1|2|3|4|5|6)>(.*?)<\/h(1|2|3|4|5|6)>' => '[heading=$1]$2[/heading]',
        '<pre>(.*?)<\/pre>' => '[pre]$1[/pre]',
        '<span style="font-family: (.*?);">(.*?)<\/span>' => '[font=$1]$2[/font]',

        '<table style="(.*?);" border="(.*?)">' => '[table=$1;border=$2]',
        '<tbody>' => '',
        '<tr( style=".*?")?>' => '[tr]',
        '<td style="(.*?)">(.*?)<\/td>' => '[td=$1]$2[/td]',
        '<\/tbody>' => '',
        '<\/tr>' => '[/tr]',
        '<\/table>' => '[/table]'
    ];

    public function getModifications($brToN = false)
    {
        $mod = [];
        foreach ($this->modifications as $key => $val)
        {
            $mod[$key] = $val;
        }

        return $mod;
    }
}
