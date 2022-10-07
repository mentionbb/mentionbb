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

/* macro.profile_posts.tpl */
class __TwigTemplate_4e7c7f5bd331befbbbc67f2d281a6cdb extends Template
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
    public function macro_posts($__item__ = null, $__string__ = null, $__is_firstpost__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "string" => $__string__,
            "is_firstpost" => $__is_firstpost__,
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 4), "buildLink", [0 => "shortcode", 1 => ["shortcode" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 4), "discussion", [], "any", false, false, false, 4), "shortcode", [], "any", false, false, false, 4), "toBase", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "shortcode", [], "any", false, false, false, 4)], "method", false, false, false, 4)]], "method", false, false, false, 4), "html", null, true);
            echo "\"></a>
\t\t\t<div class=\"post-user d-flex flex-lg-column mb-lg-0 mb-2\">
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
\t\t\t</div>
\t\t\t<div class=\"post-content\">
\t\t\t\t<div class=\"d-block h-100 position-relative\">
\t\t\t\t\t";
            // line 22
            if (($context["is_firstpost"] ?? null)) {
                // line 23
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "is_sticky", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "\t\t\t\t\t\t\t<span title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 24), "lang", [], "any", false, false, false, 24), "string", [], "any", false, false, false, 24), "container", [], "any", false, false, false, 24), "posts", [], "any", false, false, false, 24), "pinned", [], "any", false, false, false, 24), "html", null, true);
                    echo "\" class=\"icon pinned\"></span>
\t\t\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t\t\t";
                if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "is_open", [], "any", false, false, false, 26)) {
                    // line 27
                    echo "\t\t\t\t\t\t\t<span title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 27), "lang", [], "any", false, false, false, 27), "string", [], "any", false, false, false, 27), "container", [], "any", false, false, false, 27), "posts", [], "any", false, false, false, 27), "locked", [], "any", false, false, false, 27), "html", null, true);
                    echo "\" class=\"icon locked\"></span>
\t\t\t\t\t\t";
                }
                // line 29
                echo "
\t\t\t\t\t\t<span class=\"discussion-title font-weight-bold text-dark\">";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 30), "render", [], "any", false, false, false, 30), "title", [], "any", false, false, false, 30), "Render", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 30)], "method", false, false, false, 30), "html", null, true);
                echo "</span>
\t\t\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t\t\t<span class=\"forum rounded\">";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "forum_title", [], "any", false, false, false, 32), "html", null, true);
                echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 34
                $context["profilePosts_Content"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 34), "renderer", [], "any", false, false, false, 34), "bbcode", [], "any", false, false, false, 34), "ClearBBCode", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 34)], "method", false, false, false, 34);
                // line 35
                echo "\t\t\t\t\t\t";
                if ((twig_length_filter($this->env, ($context["profilePosts_Content"] ?? null)) > 450)) {
                    // line 36
                    echo "\t\t\t\t\t\t\t<p class=\"mt-1\">";
                    echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 36), "editor", [], "any", false, false, false, 36), "emoticons", [], "any", false, false, false, 36), "Render", [0 => ($context["profilePosts_Content"] ?? null)], "method", false, false, false, 36), 0, 450);
                    echo "...</p>
\t\t\t\t\t\t";
                } else {
                    // line 38
                    echo "\t\t\t\t\t\t\t<p class=\"mt-1\">";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 38), "editor", [], "any", false, false, false, 38), "emoticons", [], "any", false, false, false, 38), "Render", [0 => ($context["profilePosts_Content"] ?? null)], "method", false, false, false, 38);
                    echo "</p>
\t\t\t\t\t\t";
                }
                // line 40
                echo "\t\t\t\t\t\t<div class=\"d-flex flex-lg-row flex-column\">
\t\t\t\t\t\t\t<p class=\"replied mb-0\">
\t\t\t\t\t\t\t\t<span class=\"d-block\">";
                // line 42
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 42), "lang", [], "any", false, false, false, 42), "parse", [], "any", false, false, false, 42), "Parse", [0 => "index.posts.started_by", 1 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "started_by_username", [], "any", false, false, false, 42), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 42), "date", [], "any", false, false, false, 42), "toHumanReadable", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "discussion_dateline", [], "any", false, false, false, 42)], "method", false, false, false, 42)], "method", false, false, false, 42);
                echo "</span>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p class=\"time text-muted font-italic pr-4 mb-0 mt-2 mt-lg-0 ml-lg-auto\">";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 44), "date", [], "any", false, false, false, 44), "toHumanReadable", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_dateline", [], "any", false, false, false, 44)], "method", false, false, false, 44), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<hr>
\t\t\t\t\t";
            } else {
                // line 48
                echo "\t\t\t\t\t\t";
                $context["profilePosts_Content"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 48), "renderer", [], "any", false, false, false, 48), "bbcode", [], "any", false, false, false, 48), "ClearBBCode", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 48)], "method", false, false, false, 48);
                // line 49
                echo "\t\t\t\t\t\t";
                if ((twig_length_filter($this->env, ($context["profilePosts_Content"] ?? null)) > 450)) {
                    // line 50
                    echo "\t\t\t\t\t\t\t<p class=\"mt-1\">";
                    echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 50), "editor", [], "any", false, false, false, 50), "emoticons", [], "any", false, false, false, 50), "Render", [0 => ($context["profilePosts_Content"] ?? null)], "method", false, false, false, 50), 0, 450);
                    echo "...</p>
\t\t\t\t\t\t";
                } else {
                    // line 52
                    echo "\t\t\t\t\t\t\t<p class=\"mt-1\">";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 52), "editor", [], "any", false, false, false, 52), "emoticons", [], "any", false, false, false, 52), "Render", [0 => ($context["profilePosts_Content"] ?? null)], "method", false, false, false, 52);
                    echo "</p>
\t\t\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t\t<div class=\"discuss-info d-flex flex-column flex-lg-row align-items-lg-center mb-2\">
\t\t\t\t\t\t";
            // line 56
            if (($context["is_firstpost"] ?? null)) {
                // line 57
                echo "\t\t\t\t\t\t\t<div class=\"info d-flex\">
\t\t\t\t\t\t\t\t<span class=\"post-count\">";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\NumberFormat']->NumberFormatShorter(twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "comment_count", [], "any", false, false, false, 58))), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t<span class=\"view-count\">";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\NumberFormat']->NumberFormatShorter(twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "view_count", [], "any", false, false, false, 59))), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            } else {
                // line 62
                echo "\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<p class=\"time text-muted font-weight-normal font-italic pr-4 mb-0 mt-1 mt-lg-0 ml-lg-auto\">";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 63), "date", [], "any", false, false, false, 63), "toHumanReadable", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_dateline", [], "any", false, false, false, 63)], "method", false, false, false, 63), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 66
            echo "\t\t\t\t\t\t<div class=\"app-reactions reaction-sm d-flex ml-lg-auto mt-4 mt-lg-0\">
\t\t\t\t\t\t\t<div class=\"reaction like d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span>";
            // line 68
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 68), "getReactionCountByPostId", [0 => "like", 1 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_id", [], "any", false, false, false, 68)], "method", false, false, false, 68)), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"reaction love d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span>";
            // line 71
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 71), "getReactionCountByPostId", [0 => "love", 1 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_id", [], "any", false, false, false, 71)], "method", false, false, false, 71)), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"reaction haha d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span>";
            // line 74
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 74), "getReactionCountByPostId", [0 => "haha", 1 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_id", [], "any", false, false, false, 74)], "method", false, false, false, 74)), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"reaction wow d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span>";
            // line 77
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 77), "getReactionCountByPostId", [0 => "wow", 1 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_id", [], "any", false, false, false, 77)], "method", false, false, false, 77)), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"reaction sad d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span>";
            // line 80
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 80), "getReactionCountByPostId", [0 => "sad", 1 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_id", [], "any", false, false, false, 80)], "method", false, false, false, 80)), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"reaction angry d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span>";
            // line 83
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 83), "getReactionCountByPostId", [0 => "angry", 1 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_id", [], "any", false, false, false, 83)], "method", false, false, false, 83)), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"reaction dislike d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span>";
            // line 86
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 86), "getReactionCountByPostId", [0 => "dislike", 1 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_id", [], "any", false, false, false, 86)], "method", false, false, false, 86)), "html", null, true);
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
        return "macro.profile_posts.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 86,  259 => 83,  253 => 80,  247 => 77,  241 => 74,  235 => 71,  229 => 68,  225 => 66,  219 => 63,  216 => 62,  210 => 59,  206 => 58,  203 => 57,  201 => 56,  198 => 55,  195 => 54,  189 => 52,  183 => 50,  180 => 49,  177 => 48,  170 => 44,  165 => 42,  161 => 40,  155 => 38,  149 => 36,  146 => 35,  144 => 34,  139 => 32,  134 => 30,  131 => 29,  125 => 27,  122 => 26,  116 => 24,  113 => 23,  111 => 22,  104 => 18,  101 => 17,  95 => 15,  89 => 13,  87 => 12,  83 => 11,  80 => 10,  75 => 8,  71 => 6,  66 => 4,  54 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro posts(item, string, is_firstpost) %}
\t<div data-item-id=\"{{ item.post_id }}\" data-shortcode-id=\"{{ app.sub.discussion.shortcode.toBase(item.shortcode) }}\" data-owner-id=\"{{ item.user_id }}\" data-post-time=\"{{ item.dateline }}\" class=\"app-post bg-white shadow rounded\">
\t\t<div class=\"post-layout mt-2 mb-4\">
\t\t\t<a href=\"{{ app.phrase.buildLink('shortcode', {'shortcode': app.sub.discussion.shortcode.toBase(item.shortcode)}) }}\"></a>
\t\t\t<div class=\"post-user d-flex flex-lg-column mb-lg-0 mb-2\">
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
\t\t\t</div>
\t\t\t<div class=\"post-content\">
\t\t\t\t<div class=\"d-block h-100 position-relative\">
\t\t\t\t\t{% if is_firstpost %}
\t\t\t\t\t\t{% if item.is_sticky %}
\t\t\t\t\t\t\t<span title=\"{{ app.sub.lang.string.container.posts.pinned }}\" class=\"icon pinned\"></span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if not item.is_open %}
\t\t\t\t\t\t\t<span title=\"{{ app.sub.lang.string.container.posts.locked }}\" class=\"icon locked\"></span>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t<span class=\"discussion-title font-weight-bold text-dark\">{{ app.string.render.title.Render(item.title) }}</span>
\t\t\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t\t\t<span class=\"forum rounded\">{{ item.forum_title }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% set profilePosts_Content = app.sub.renderer.bbcode.ClearBBCode(item.content) %}
\t\t\t\t\t\t{% if profilePosts_Content|length > 450 %}
\t\t\t\t\t\t\t<p class=\"mt-1\">{{ app.sub.editor.emoticons.Render(profilePosts_Content)|slice(0, 450)|raw }}...</p>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<p class=\"mt-1\">{{ app.sub.editor.emoticons.Render(profilePosts_Content)|raw }}</p>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<div class=\"d-flex flex-lg-row flex-column\">
\t\t\t\t\t\t\t<p class=\"replied mb-0\">
\t\t\t\t\t\t\t\t<span class=\"d-block\">{{ app.sub.lang.parse.Parse('index.posts.started_by', item.started_by_username, app.timer.date.toHumanReadable(item.discussion_dateline))|raw }}</span>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p class=\"time text-muted font-italic pr-4 mb-0 mt-2 mt-lg-0 ml-lg-auto\">{{ app.timer.date.toHumanReadable(item.post_dateline) }}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<hr>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t{% set profilePosts_Content = app.sub.renderer.bbcode.ClearBBCode(item.content) %}
\t\t\t\t\t\t{% if profilePosts_Content|length > 450 %}
\t\t\t\t\t\t\t<p class=\"mt-1\">{{ app.sub.editor.emoticons.Render(profilePosts_Content)|slice(0, 450)|raw }}...</p>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<p class=\"mt-1\">{{ app.sub.editor.emoticons.Render(profilePosts_Content)|raw }}</p>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"discuss-info d-flex flex-column flex-lg-row align-items-lg-center mb-2\">
\t\t\t\t\t\t{% if is_firstpost %}
\t\t\t\t\t\t\t<div class=\"info d-flex\">
\t\t\t\t\t\t\t\t<span class=\"post-count\">{{ item.comment_count|number_format|numberFormatShorter }}</span>
\t\t\t\t\t\t\t\t<span class=\"view-count\">{{ item.view_count|number_format|numberFormatShorter }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<p class=\"time text-muted font-weight-normal font-italic pr-4 mb-0 mt-1 mt-lg-0 ml-lg-auto\">{{ app.timer.date.toHumanReadable(item.post_dateline) }}</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
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
{% endmacro %}", "macro.profile_posts.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Macros\\macro.profile_posts.tpl");
    }
}
