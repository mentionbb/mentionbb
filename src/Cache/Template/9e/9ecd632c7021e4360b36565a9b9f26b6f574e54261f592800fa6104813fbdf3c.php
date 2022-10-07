<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* macro.index_posts.tpl */
class __TwigTemplate_9184909522982b2ed51e09a0947aae57a53edbc0ce664a0153dc67ae6845f0bd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1
    public function macro_posts($__item__ = null, $__string__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "string" => $__string__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "\t<div data-item-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_id", [], "any", false, false, false, 2), "html", null, true);
            echo "\" data-shortcode-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 2), "discussion", [], "any", false, false, false, 2), "shortcode", [], "any", false, false, false, 2), "toBase", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "shortcode", [], "any", false, false, false, 2)], "method", false, false, false, 2), "html", null, true);
            echo "\" data-owner-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "user_id", [], "any", false, false, false, 2), "html", null, true);
            echo "\" data-post-time=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dateline", [], "any", false, false, false, 2), "html", null, true);
            echo "\" class=\"app-post bg-white shadow rounded\">
\t\t<div class=\"post-layout mt-2 mb-4\">
\t\t\t<a href=\"";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 4), "buildLink", [0 => "discussion", 1 => ["discussion_id" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "discussion_id", [], "any", false, false, false, 4), "discussion_title" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 4), "post_id" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "max_post_id", [], "any", false, false, false, 4)]], "method", false, false, false, 4), "html", null, true);
            echo "\"></a>
\t\t\t<div class=\"post-user new-post d-flex flex-lg-column\">
\t\t\t\t";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 6), "user", [], "any", false, false, false, 6), "link", [], "any", false, false, false, 6), "setUser", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "user_id", [], "any", false, false, false, 6)], "method", false, false, false, 6), "html", null, true);
            echo "
\t\t\t\t";
            // line 8
            echo "\t\t\t\t\t";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 8), "user", [], "any", false, false, false, 8), "link", [], "any", false, false, false, 8), "getLinkWithProfilePicture", [0 => true, 1 => true], "method", false, false, false, 8);
            echo "
\t\t\t\t";
            // line 10
            echo "\t\t\t\t<div class=\"discussion-post-user\">
\t\t\t\t\t";
            // line 11
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 11), "user", [], "any", false, false, false, 11), "link", [], "any", false, false, false, 11), "getLink", [], "method", false, false, false, 11);
            echo "
\t\t\t\t\t";
            // line 12
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 12), "user", [], "any", false, false, false, 12), "link", [], "any", false, false, false, 12), "isAdmin", [], "method", false, false, false, 12)) {
                // line 13
                echo "\t\t\t\t\t    <span class=\"d-block\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 13), "user", [], "any", false, false, false, 13), "link", [], "any", false, false, false, 13), "getUsertitle", [], "method", false, false, false, 13);
                echo "</span>
\t\t\t\t\t";
            } else {
                // line 15
                echo "\t\t\t\t\t    <span class=\"d-block\">";
                echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 15), "user", [], "any", false, false, false, 15), "link", [], "any", false, false, false, 15), "getUsertitle", [], "method", false, false, false, 15)), "html", null, true);
                echo "</span>
\t\t\t\t\t";
            }
            // line 17
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 18), "user", [], "any", false, false, false, 18), "link", [], "any", false, false, false, 18), "unsetUser", [], "method", false, false, false, 18), "html", null, true);
            echo "
\t\t\t\t";
            // line 19
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 19), "loggedIn", [], "method", false, false, false, 19)) {
                // line 20
                echo "\t\t\t\t\t";
                if (((-1 === twig_compare((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 20), "last_activity", [], "any", false, false, false, 20) - (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 20), "date", [], "any", false, false, false, 20), "addMinute", [0 => 5], "method", false, false, false, 20) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 20), "date", [], "any", false, false, false, 20), "getTimestamp", [], "method", false, false, false, 20))), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dateline", [], "any", false, false, false, 20))) &&  !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 20), "user_id", [], "any", false, false, false, 20) === twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "user_id", [], "any", false, false, false, 20)))) {
                    // line 21
                    echo "\t\t\t\t\t\t<div class=\"new-post ml-auto mt-lg-auto mb-lg-1 ml-lg-0 d-inline-flex align-items-center\">
\t\t\t\t\t\t\t<span title=\"";
                    // line 22
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 22), "lang", [], "any", false, false, false, 22), "string", [], "any", false, false, false, 22), "index", [], "any", false, false, false, 22), "posts", [], "any", false, false, false, 22), "new_post", [], "any", false, false, false, 22), "title", [], "any", false, false, false, 22), "html", null, true);
                    echo "\" class=\"badge badge-dark round font-weight-bold\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 22), "lang", [], "any", false, false, false, 22), "string", [], "any", false, false, false, 22), "index", [], "any", false, false, false, 22), "posts", [], "any", false, false, false, 22), "new_post", [], "any", false, false, false, 22), "text", [], "any", false, false, false, 22), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t";
            } else {
                // line 26
                echo "\t\t\t\t\t";
                if ((-1 === twig_compare(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 26), "date", [], "any", false, false, false, 26), "getTimestamp", [], "method", false, false, false, 26) - (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 26), "date", [], "any", false, false, false, 26), "addHour", [0 => 24], "method", false, false, false, 26) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 26), "date", [], "any", false, false, false, 26), "getTimestamp", [], "method", false, false, false, 26))) - twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dateline", [], "any", false, false, false, 26)), (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 26), "date", [], "any", false, false, false, 26), "addHour", [0 => 24], "method", false, false, false, 26) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 26), "date", [], "any", false, false, false, 26), "getTimestamp", [], "method", false, false, false, 26))))) {
                    // line 27
                    echo "\t\t\t\t\t\t<div class=\"new-post ml-auto mt-lg-auto mb-lg-1 ml-lg-0 d-inline-flex align-items-center\">
\t\t\t\t\t\t\t<span title=\"";
                    // line 28
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 28), "lang", [], "any", false, false, false, 28), "string", [], "any", false, false, false, 28), "index", [], "any", false, false, false, 28), "posts", [], "any", false, false, false, 28), "new_post", [], "any", false, false, false, 28), "title", [], "any", false, false, false, 28), "html", null, true);
                    echo "\" class=\"badge badge-dark round font-weight-bold\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 28), "lang", [], "any", false, false, false, 28), "string", [], "any", false, false, false, 28), "index", [], "any", false, false, false, 28), "posts", [], "any", false, false, false, 28), "new_post", [], "any", false, false, false, 28), "text", [], "any", false, false, false, 28), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 31
                echo "\t\t\t\t";
            }
            // line 32
            echo "\t\t\t</div>
\t\t\t<div class=\"post-content\">
\t\t\t\t<hr>
\t\t\t\t<div class=\"d-block h-100 position-relative\">
\t\t\t\t\t";
            // line 36
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "is_sticky", [], "any", false, false, false, 36)) {
                // line 37
                echo "\t\t\t\t\t\t<span title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 37), "lang", [], "any", false, false, false, 37), "string", [], "any", false, false, false, 37), "container", [], "any", false, false, false, 37), "posts", [], "any", false, false, false, 37), "pinned", [], "any", false, false, false, 37), "html", null, true);
                echo "\" class=\"icon pinned\"></span>
\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t\t";
            if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "is_open", [], "any", false, false, false, 39)) {
                // line 40
                echo "\t\t\t\t\t\t<span title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 40), "lang", [], "any", false, false, false, 40), "string", [], "any", false, false, false, 40), "container", [], "any", false, false, false, 40), "posts", [], "any", false, false, false, 40), "locked", [], "any", false, false, false, 40), "html", null, true);
                echo "\" class=\"icon locked\"></span>
\t\t\t\t\t";
            }
            // line 42
            echo "\t\t\t\t\t<span class=\"discussion-title font-weight-bold text-dark\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 42), "render", [], "any", false, false, false, 42), "title", [], "any", false, false, false, 42), "Render", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 42)], "method", false, false, false, 42), "html", null, true);
            echo "</span>
\t\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t\t<span class=\"forum rounded\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "forum_title", [], "any", false, false, false, 44), "html", null, true);
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 46
            $context["indexPosts_Content"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 46), "renderer", [], "any", false, false, false, 46), "bbcode", [], "any", false, false, false, 46), "ClearBBCode", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 46)], "method", false, false, false, 46);
            // line 47
            echo "\t\t\t\t\t";
            if ((1 === twig_compare(twig_length_filter($this->env, ($context["indexPosts_Content"] ?? null)), 450))) {
                // line 48
                echo "\t\t\t\t\t\t<p class=\"mt-1\">";
                echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 48), "editor", [], "any", false, false, false, 48), "emoticons", [], "any", false, false, false, 48), "Render", [0 => ($context["indexPosts_Content"] ?? null)], "method", false, false, false, 48), 0, 450);
                echo "...</p>
\t\t\t\t\t";
            } else {
                // line 50
                echo "\t\t\t\t\t\t<p class=\"mt-1\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 50), "editor", [], "any", false, false, false, 50), "emoticons", [], "any", false, false, false, 50), "Render", [0 => ($context["indexPosts_Content"] ?? null)], "method", false, false, false, 50);
                echo "</p>
\t\t\t\t\t";
            }
            // line 52
            echo "\t\t\t\t\t<div class=\"d-flex flex-lg-row flex-column align-items-lg-end\">
\t\t\t\t\t\t";
            // line 53
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "firstpost_id", [], "any", false, false, false, 53), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_id", [], "any", false, false, false, 53)))) {
                // line 54
                echo "\t\t\t\t\t\t\t<p class=\"replied mb-0\">
\t\t\t\t\t\t\t\t<span class=\"d-block\">";
                // line 55
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 55), "lang", [], "any", false, false, false, 55), "parse", [], "any", false, false, false, 55), "Parse", [0 => "index.posts.started_by", 1 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "started_by_username", [], "any", false, false, false, 55), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 55), "date", [], "any", false, false, false, 55), "toHumanReadable", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "discussion_dateline", [], "any", false, false, false, 55)], "method", false, false, false, 55)], "method", false, false, false, 55);
                echo "</span>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
            } else {
                // line 58
                echo "\t\t\t\t\t\t\t<p class=\"replied mb-0\">
\t\t\t\t\t\t\t\t<span class=\"d-block\">";
                // line 59
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 59), "lang", [], "any", false, false, false, 59), "parse", [], "any", false, false, false, 59), "Parse", [0 => "index.posts.started_by", 1 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "started_by_username", [], "any", false, false, false, 59), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 59), "date", [], "any", false, false, false, 59), "toHumanReadable", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "discussion_dateline", [], "any", false, false, false, 59)], "method", false, false, false, 59)], "method", false, false, false, 59);
                echo "</span>
\t\t\t\t\t\t\t\t<span class=\"d-block\">";
                // line 60
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 60), "lang", [], "any", false, false, false, 60), "parse", [], "any", false, false, false, 60), "Parse", [0 => "index.posts.replied_by", 1 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "username", [], "any", false, false, false, 60), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 60), "date", [], "any", false, false, false, 60), "toHumanReadable", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_dateline", [], "any", false, false, false, 60)], "method", false, false, false, 60)], "method", false, false, false, 60);
                echo "</span>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
            }
            // line 63
            echo "\t\t\t\t\t\t<p class=\"time text-muted font-italic pr-4 mb-0 mt-2 mt-lg-0 ml-lg-auto\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 63), "date", [], "any", false, false, false, 63), "toHumanReadable", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_dateline", [], "any", false, false, false, 63)], "method", false, false, false, 63), "html", null, true);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"discuss-info d-flex flex-column flex-lg-row mb-2\">
\t\t\t\t\t\t<div class=\"info d-flex\">
\t\t\t\t\t\t\t<span class=\"post-count\">";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\NumberFormat']->NumberFormatShorter(twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "comment_count", [], "any", false, false, false, 68))), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t<span class=\"view-count\">";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\NumberFormat']->NumberFormatShorter(twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "view_count", [], "any", false, false, false, 69))), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"app-reactions reaction-sm d-flex ml-lg-auto mt-4 mt-lg-0\">
\t\t\t\t\t\t\t<div class=\"reaction like d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span>";
            // line 73
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 73), "getReactionCountByPostId", [0 => "like", 1 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_id", [], "any", false, false, false, 73)], "method", false, false, false, 73)), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"reaction love d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span>";
            // line 76
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 76), "getReactionCountByPostId", [0 => "love", 1 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_id", [], "any", false, false, false, 76)], "method", false, false, false, 76)), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"reaction haha d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span>";
            // line 79
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 79), "getReactionCountByPostId", [0 => "haha", 1 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_id", [], "any", false, false, false, 79)], "method", false, false, false, 79)), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"reaction wow d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span>";
            // line 82
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 82), "getReactionCountByPostId", [0 => "wow", 1 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_id", [], "any", false, false, false, 82)], "method", false, false, false, 82)), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"reaction sad d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span>";
            // line 85
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 85), "getReactionCountByPostId", [0 => "sad", 1 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_id", [], "any", false, false, false, 85)], "method", false, false, false, 85)), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"reaction angry d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span>";
            // line 88
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 88), "getReactionCountByPostId", [0 => "angry", 1 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_id", [], "any", false, false, false, 88)], "method", false, false, false, 88)), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"reaction dislike d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span>";
            // line 91
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 91), "getReactionCountByPostId", [0 => "dislike", 1 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_id", [], "any", false, false, false, 91)], "method", false, false, false, 91)), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "macro.index_posts.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 91,  271 => 88,  265 => 85,  259 => 82,  253 => 79,  247 => 76,  241 => 73,  234 => 69,  230 => 68,  221 => 63,  215 => 60,  211 => 59,  208 => 58,  202 => 55,  199 => 54,  197 => 53,  194 => 52,  188 => 50,  182 => 48,  179 => 47,  177 => 46,  172 => 44,  166 => 42,  160 => 40,  157 => 39,  151 => 37,  149 => 36,  143 => 32,  140 => 31,  132 => 28,  129 => 27,  126 => 26,  123 => 25,  115 => 22,  112 => 21,  109 => 20,  107 => 19,  103 => 18,  100 => 17,  94 => 15,  88 => 13,  86 => 12,  82 => 11,  79 => 10,  74 => 8,  70 => 6,  65 => 4,  53 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro posts(item, string) %}
\t<div data-item-id=\"{{ item.post_id }}\" data-shortcode-id=\"{{ app.sub.discussion.shortcode.toBase(item.shortcode) }}\" data-owner-id=\"{{ item.user_id }}\" data-post-time=\"{{ item.dateline }}\" class=\"app-post bg-white shadow rounded\">
\t\t<div class=\"post-layout mt-2 mb-4\">
\t\t\t<a href=\"{{ app.phrase.buildLink('discussion', {'discussion_id': item.discussion_id, 'discussion_title': item.title, 'post_id': item.max_post_id}) }}\"></a>
\t\t\t<div class=\"post-user new-post d-flex flex-lg-column\">
\t\t\t\t{{ app.sub.user.link.setUser(item.user_id) }}
\t\t\t\t{% autoescape 'html' %}
\t\t\t\t\t{{ app.sub.user.link.getLinkWithProfilePicture(true, true)|raw }}
\t\t\t\t{% endautoescape %}
\t\t\t\t<div class=\"discussion-post-user\">
\t\t\t\t\t{{ app.sub.user.link.getLink()|raw }}
\t\t\t\t\t{% if app.sub.user.link.isAdmin() %}
\t\t\t\t\t    <span class=\"d-block\">{{ app.sub.user.link.getUsertitle()|raw }}</span>
\t\t\t\t\t{% else %}
\t\t\t\t\t    <span class=\"d-block\">{{ app.sub.user.link.getUsertitle()|striptags }}</span>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t{{ app.sub.user.link.unsetUser() }}
\t\t\t\t{% if app.user.loggedIn() %}
\t\t\t\t\t{% if (app.visitor.last_activity - (app.timer.date.addMinute(5) - app.timer.date.getTimestamp())) < item.dateline and app.visitor.user_id is not same as(item.user_id) %}
\t\t\t\t\t\t<div class=\"new-post ml-auto mt-lg-auto mb-lg-1 ml-lg-0 d-inline-flex align-items-center\">
\t\t\t\t\t\t\t<span title=\"{{ app.sub.lang.string.index.posts.new_post.title }}\" class=\"badge badge-dark round font-weight-bold\">{{ app.sub.lang.string.index.posts.new_post.text }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t{% else %}
\t\t\t\t\t{% if ((app.timer.date.getTimestamp() - (app.timer.date.addHour(24) - app.timer.date.getTimestamp())) - item.dateline) < (app.timer.date.addHour(24) - app.timer.date.getTimestamp()) %}
\t\t\t\t\t\t<div class=\"new-post ml-auto mt-lg-auto mb-lg-1 ml-lg-0 d-inline-flex align-items-center\">
\t\t\t\t\t\t\t<span title=\"{{ app.sub.lang.string.index.posts.new_post.title }}\" class=\"badge badge-dark round font-weight-bold\">{{ app.sub.lang.string.index.posts.new_post.text }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<div class=\"post-content\">
\t\t\t\t<hr>
\t\t\t\t<div class=\"d-block h-100 position-relative\">
\t\t\t\t\t{% if item.is_sticky %}
\t\t\t\t\t\t<span title=\"{{ app.sub.lang.string.container.posts.pinned }}\" class=\"icon pinned\"></span>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if not item.is_open %}
\t\t\t\t\t\t<span title=\"{{ app.sub.lang.string.container.posts.locked }}\" class=\"icon locked\"></span>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<span class=\"discussion-title font-weight-bold text-dark\">{{ app.string.render.title.Render(item.title) }}</span>
\t\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t\t<span class=\"forum rounded\">{{ item.forum_title }}</span>
\t\t\t\t\t</div>
\t\t\t\t\t{% set indexPosts_Content = app.sub.renderer.bbcode.ClearBBCode(item.content) %}
\t\t\t\t\t{% if indexPosts_Content|length > 450 %}
\t\t\t\t\t\t<p class=\"mt-1\">{{ app.sub.editor.emoticons.Render(indexPosts_Content)|slice(0, 450)|raw }}...</p>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<p class=\"mt-1\">{{ app.sub.editor.emoticons.Render(indexPosts_Content)|raw }}</p>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"d-flex flex-lg-row flex-column align-items-lg-end\">
\t\t\t\t\t\t{% if item.firstpost_id == item.post_id %}
\t\t\t\t\t\t\t<p class=\"replied mb-0\">
\t\t\t\t\t\t\t\t<span class=\"d-block\">{{ app.sub.lang.parse.Parse('index.posts.started_by', item.started_by_username, app.timer.date.toHumanReadable(item.discussion_dateline))|raw }}</span>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<p class=\"replied mb-0\">
\t\t\t\t\t\t\t\t<span class=\"d-block\">{{ app.sub.lang.parse.Parse('index.posts.started_by', item.started_by_username, app.timer.date.toHumanReadable(item.discussion_dateline))|raw }}</span>
\t\t\t\t\t\t\t\t<span class=\"d-block\">{{ app.sub.lang.parse.Parse('index.posts.replied_by', item.username, app.timer.date.toHumanReadable(item.post_dateline))|raw }}</span>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<p class=\"time text-muted font-italic pr-4 mb-0 mt-2 mt-lg-0 ml-lg-auto\">{{ app.timer.date.toHumanReadable(item.post_dateline) }}</p>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"discuss-info d-flex flex-column flex-lg-row mb-2\">
\t\t\t\t\t\t<div class=\"info d-flex\">
\t\t\t\t\t\t\t<span class=\"post-count\">{{ item.comment_count|number_format|numberFormatShorter }}</span>
\t\t\t\t\t\t\t<span class=\"view-count\">{{ item.view_count|number_format|numberFormatShorter }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"app-reactions reaction-sm d-flex ml-lg-auto mt-4 mt-lg-0\">
\t\t\t\t\t\t\t<div class=\"reaction like d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span>{{ string.reaction.getReactionCountByPostId('like', item.post_id)|number_format }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"reaction love d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span>{{ string.reaction.getReactionCountByPostId('love', item.post_id)|number_format }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"reaction haha d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span>{{ string.reaction.getReactionCountByPostId('haha', item.post_id)|number_format }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"reaction wow d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span>{{ string.reaction.getReactionCountByPostId('wow', item.post_id)|number_format }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"reaction sad d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span>{{ string.reaction.getReactionCountByPostId('sad', item.post_id)|number_format }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"reaction angry d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span>{{ string.reaction.getReactionCountByPostId('angry', item.post_id)|number_format }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"reaction dislike d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span>{{ string.reaction.getReactionCountByPostId('dislike', item.post_id)|number_format }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endmacro %}", "macro.index_posts.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Macros\\macro.index_posts.tpl");
    }
}
