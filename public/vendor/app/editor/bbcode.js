/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.3.2 (2020-06-10)
 *
 * Edited for Mention
 */
 if (window.jQuery === undefined) jQuery = $ = {};

 !function($, window, document)
 {
 	"use strict";

 	var o = tinymce.util.Tools.resolve("tinymce.PluginManager"),
 	e = tinymce.util.Tools.resolve("tinymce.util.Tools"),
 	t = function (t) {
 		t = e.trim(t);

 		var o = function (o, e) {
 			t = t.replace(o, e);
 		};

 		return (
 			o(/\r\n/gi, "<br />"),
 			o(/\[b\]/gi, "<strong>"),
 			o(/\[\/b\]/gi, "</strong>"),
 			o(/\[i\]/gi, "<em>"),
 			o(/\[\/i\]/gi, "</em>"),
 			o(/\[u\]/gi, "<u>"),
 			o(/\[\/u\]/gi, "</u>"),
 			o(/\[s\]/gi, "<s>"),
 			o(/\[\/s\]/gi, "</s>"),
 			o(/\[url=([^\]]+)\](.*?)\[\/url\]/gi, '<a href="$1">$2</a>'),
 			o(/\[url\](.*?)\[\/url\]/gi, '<a href="$1">$1</a>'),
            o(/\[img=(.*?)\](.*?)\[\/img\]/gi, '<img src="$2" alt="$1" />'),
 			o(/\[color=(.*?)\](.*?)\[\/color\]/gi, '<font color="$1">$2</font>'),
 			o(/\[size=(.*?)\](.*?)\[\/size\]/gi, '<span style="font-size: $1">$2</span>'),
 			o(/\[heading=(.*?)\](.*?)\[\/heading\]/gi, '<h$1>$2</h$1>'),
 			o(/\[background=(.*?)\](.*?)\[\/background\]/gi, '<span style="background-color: $1;">$2</span>'),
 			o(/\[align=(.*?)\](.*?)\[\/align\]/gi, '<p style="text-align: $1;">$2</p>'),
 			//o(/\[list=disc\](.*?)\[\/list\](<br \/>)?/gi, '<ul>$1</ul>'),
 			//o(/\[list=decimal\](.*?)\[\/list\](<br \/>)?/gi, '<ol>$1</ol>'),
 			//o(/\[li\](.*?)\[\/li](<br \/>)?/gi, '<li>$1</li>'),
 			o(/\[table=(.*?);border=(.*?)\](.*?)\[\/table\](<br \/>)?/gi, '<table style="$1" border="$2">$3</table>'),
 			o(/\[tr\](.*?)\[\/tr\](<br \/>)?/gi, '<tr>$1</tr>'),
 			o(/\[td=(.*?)\](.*?)\[\/td\](<br \/>)?/gi, '<td style="$1">$2</td>'),
 			o(/\[code=(.*?)\](.*?)\[\/code\]/gi, '<pre class="language-$1"><code class="language-$1">$2</code></pre>'),
 			t
 		);
 	};

 	!(function i() {
 		o.add("bbcodeCustom", function (o) {
 			o.on("BeforeSetContent", function (o) {
 				o.content = t(o.content);
 			}),
 			o.on("PostProcess", function (o) {
 				o.set && (o.content = t(o.content)),
 				o.get &&
 				(o.content = (function (t) {
 					t = e.trim(t);
 					var o = function (o, e) {
 						t = t.replace(o, e);
 					};
 					return (
						o(/<a.*?href=\"(.*?)\".*?>(.*?)<\/a>/gi, "[url=$1]$2[/url]"),
 						o(/<font.*?color=\"(.*?)\".*?class=\"codeStyle\".*?>(.*?)<\/font>/gi, "[code][color=$1]$2[/color][/code]"),
 						o(/<font.*?color=\"(.*?)\".*?class=\"quoteStyle\".*?>(.*?)<\/font>/gi, "[quote][color=$1]$2[/color][/quote]"),
 						o(/<font.*?class=\"codeStyle\".*?color=\"(.*?)\".*?>(.*?)<\/font>/gi, "[code][color=$1]$2[/color][/code]"),
 						o(/<font.*?class=\"quoteStyle\".*?color=\"(.*?)\".*?>(.*?)<\/font>/gi, "[quote][color=$1]$2[/color][/quote]"),
 						o(/<span style=\"color: ?(.*?);\">(.*?)<\/span>/gi, "[color=$1]$2[/color]"),
 						o(/<font.*?color=\"(.*?)\".*?>(.*?)<\/font>/gi, "[color=$1]$2[/color]"),
 						o(/<span style=\"font-size:(.*?);\">(.*?)<\/span>/gi, "[size=$1]$2[/size]"),
 						o(/<font>(.*?)<\/font>/gi, "$1"),

 						o(/<img class="js-Twemoji_MentionEditor"(?:.*?)alt="(.*?)" \/>/gi, '$1'),

                        o(/<img.*?src=\"(.*?)\" alt=\"(.*?)\".*?\/>/gi, "[img=$2]$1[/img]"),
 						o(/<span class=\"codeStyle\">(.*?)<\/span>/gi, "[code]$1[/code]"),
 						o(/<span class=\"quoteStyle\">(.*?)<\/span>/gi, "[quote]$1[/quote]"),
 						o(/<strong class=\"codeStyle\">(.*?)<\/strong>/gi, "[code][b]$1[/b][/code]"),
 						o(/<strong class=\"quoteStyle\">(.*?)<\/strong>/gi, "[quote][b]$1[/b][/quote]"),
 						o(/<em class=\"codeStyle\">(.*?)<\/em>/gi, "[code][i]$1[/i][/code]"),
 						o(/<em class=\"quoteStyle\">(.*?)<\/em>/gi, "[quote][i]$1[/i][/quote]"),
 						o(/<u class=\"codeStyle\">(.*?)<\/u>/gi, "[code][u]$1[/u][/code]"),
 						o(/<u class=\"quoteStyle\">(.*?)<\/u>/gi, "[quote][u]$1[/u][/quote]"),
 						o(/<\/(strong|b)>/gi, "[/b]"),
 						o(/<(strong|b)>/gi, "[b]"),
 						o(/<(s|b)>/gi, "[s]"),
 						o(/<\/(em|i)>/gi, "[/i]"),
 						o(/<(em|i)>/gi, "[i]"),
 						o(/<\/u>/gi, "[/u]"),
 						o(/<\/s>/gi, "[/s]"),
 						o(/<span style=\"text-decoration: ?underline;\">(.*?)<\/span>/gi, "[u]$1[/u]"),
 						o(/<span style=\"text-decoration: ?line-through;\">(.*?)<\/span>/gi, "[s]$1[/s]"),
 						o(/<u>/gi, "[u]"),
 						o(/<blockquote[^>]*>/gi, "[quote]"),
 						o(/<\/blockquote>/gi, "[/quote]"),
 						o(/<br \/>/gi, "\n"),
 						o(/<br\/>/gi, "\n"),
 						o(/<br>/gi, "\n"),
 						
 						o(/&nbsp;|\u00a0/gi, " "),
 						o(/&quot;/gi, '"'),
 						o(/&lt;/gi, "<"),
 						o(/&gt;/gi, ">"),
 						o(/&amp;/gi, "&"),

 						o(/<ul>/gi, "[list=disc]"),
 						o(/<\/ul>/gi, "[/list]"),
 						o(/<ol>/gi, "[list=decimal]"),
 						o(/<\/ol>/gi, "[/list]"),
 						o(/<li>(.*?)<\/li>/gi, "[li]$1[/li]"),

 						o(/<p style="text-align: (.*?);">(.*?)<\/p>/gi, "[align=$1]$2[/align]"),
 						o(/<p>/gi, ""),
 						o(/<\/p>/gi, ""),

 						o(/<span style="font-size: (.*?);">(.*?)<\/span>/gi, "[size=$1]$2[/size]"),

 						o(/<span style="background-color: (.*?);">(.*?)<\/span>/gi, "[background=$1]$2[/background]"),

 						o(/<pre class="language-(.*?)"><code>(.*?)<\/code><\/pre>/gi, "[code=$1]$2[/code]"),

 						o(/<h(1|2|3|4|5|6)>(.*?)<\/h(1|2|3|4|5|6)>/gi, '[heading=$1]$2[/heading]'),
 						o(/<pre>(.*?)<\/pre>/gi, '[pre]$1[/pre]'),
 						o(/<span style="font-family: (.*?);">(.*?)<\/span>/gi, '[font=$1]$2[/font]'),

 						o(/<table style="(.*?);" border="(.*?)">/gi, '[table=$1;border=$2]'),
 						o(/<tbody>/gi, ''),
 						o(/<tr( style=".*?")?>/gi, '[tr]'),
 						o(/<td style="(.*?)">(.*?)<\/td>/gi, '[td=$1]$2[/td]'),
 						o(/<\/tbody>/gi, ''),
 						o(/<\/tr>/gi, '[/tr]'),
 						o(/<\/table>/gi, '[/table]'),
 						t
 					);
 				})(o.content));
 			});
 		});
 	})();
}
(window.jQuery, window, document);