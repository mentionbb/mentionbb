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

/* profile.tpl */
class __TwigTemplate_c9775e2e393d8eb4f3e8fb458fcb7bfa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'app_template_name' => [$this, 'block_app_template_name'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "container.tpl";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("container.tpl", "profile.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "profile";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 10), "buildLink", [0 => "indexAction", 1 => []], "method", false, false, false, 10), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 10), "site_title", [], "any", false, false, false, 10), "html", null, true);
        echo "</a></div>
\t\t\t\t\t<div>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 11), "lang", [], "any", false, false, false, 11), "string", [], "any", false, false, false, 11), "profile", [], "any", false, false, false, 11), "breadcrumb", [], "any", false, false, false, 11), "html", null, true);
        echo "</div>
\t\t\t\t\t<div>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 12), "username", [], "any", false, false, false, 12), "html", null, true);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t";
        // line 17
        $this->loadTemplate("usermenu_member.tpl", "profile.tpl", 17)->display($context);
        // line 18
        echo "\t\t</div>
\t</div>
\t<aside class=\"col-sm-3 mb-4 pr-4\">
\t\t<div class=\"helpful-area mb-lg-5\">
\t\t\t";
        // line 22
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 22), "loggedIn", [], "method", false, false, false, 22)) {
            // line 23
            echo "                ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 23), "getActiveBan", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 23), "user_id", [], "any", false, false, false, 23)], "method", false, false, false, 23)) {
                // line 24
                echo "\t\t\t\t    ";
                if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 24), "user_id", [], "any", false, false, false, 24) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 24), "user_id", [], "any", false, false, false, 24))) {
                    // line 25
                    echo "\t\t\t\t\t    ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "profile", [], "any", false, false, false, 25), "isUserHasFriendship", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 25), "user_id", [], "any", false, false, false, 25), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 25), "user_id", [], "any", false, false, false, 25), 2 => 0], "method", false, false, false, 25)) {
                        // line 26
                        echo "\t\t\t\t\t\t    <button type=\"button\" class=\"btn btn-app-discussion icon remove-friend mt-2\" data-ui=\"remove-friend\" data-text=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 26), "lang", [], "any", false, false, false, 26), "string", [], "any", false, false, false, 26), "discussion", [], "any", false, false, false, 26), "posts", [], "any", false, false, false, 26), "quick_menu", [], "any", false, false, false, 26), "links", [], "any", false, false, false, 26), "add_as_friend", [], "any", false, false, false, 26), "html", null, true);
                        echo "\" data-complete-text=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 26), "lang", [], "any", false, false, false, 26), "string", [], "any", false, false, false, 26), "discussion", [], "any", false, false, false, 26), "posts", [], "any", false, false, false, 26), "quick_menu", [], "any", false, false, false, 26), "links", [], "any", false, false, false, 26), "request_send_friend", [], "any", false, false, false, 26), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 26), "lang", [], "any", false, false, false, 26), "string", [], "any", false, false, false, 26), "discussion", [], "any", false, false, false, 26), "posts", [], "any", false, false, false, 26), "quick_menu", [], "any", false, false, false, 26), "links", [], "any", false, false, false, 26), "remove_from_list", [], "any", false, false, false, 26), "html", null, true);
                        echo "</button>
\t\t\t\t\t    ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 27
($context["string"] ?? null), "profile", [], "any", false, false, false, 27), "isUserHasFriendship", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 27), "user_id", [], "any", false, false, false, 27), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 27), "user_id", [], "any", false, false, false, 27), 2 => 1], "method", false, false, false, 27)) {
                        // line 28
                        echo "\t\t\t\t\t\t    <button type=\"button\" class=\"btn btn-app-discussion icon awaiting-friend mt-2\" data-ui=\"remove-friend\" data-text=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 28), "lang", [], "any", false, false, false, 28), "string", [], "any", false, false, false, 28), "discussion", [], "any", false, false, false, 28), "posts", [], "any", false, false, false, 28), "quick_menu", [], "any", false, false, false, 28), "links", [], "any", false, false, false, 28), "add_as_friend", [], "any", false, false, false, 28), "html", null, true);
                        echo "\" data-complete-text=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 28), "lang", [], "any", false, false, false, 28), "string", [], "any", false, false, false, 28), "discussion", [], "any", false, false, false, 28), "posts", [], "any", false, false, false, 28), "quick_menu", [], "any", false, false, false, 28), "links", [], "any", false, false, false, 28), "request_send_friend", [], "any", false, false, false, 28), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 28), "lang", [], "any", false, false, false, 28), "string", [], "any", false, false, false, 28), "discussion", [], "any", false, false, false, 28), "posts", [], "any", false, false, false, 28), "quick_menu", [], "any", false, false, false, 28), "links", [], "any", false, false, false, 28), "request_send_friend", [], "any", false, false, false, 28), "html", null, true);
                        echo "</button>
\t\t\t\t\t    ";
                    } else {
                        // line 30
                        echo "\t\t\t\t\t\t    <button type=\"button\" class=\"btn btn-app-discussion icon add-friend mt-2\" data-ui=\"add-as-friend\" data-text=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 30), "lang", [], "any", false, false, false, 30), "string", [], "any", false, false, false, 30), "discussion", [], "any", false, false, false, 30), "posts", [], "any", false, false, false, 30), "quick_menu", [], "any", false, false, false, 30), "links", [], "any", false, false, false, 30), "add_as_friend", [], "any", false, false, false, 30), "html", null, true);
                        echo "\" data-complete-text=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 30), "lang", [], "any", false, false, false, 30), "string", [], "any", false, false, false, 30), "discussion", [], "any", false, false, false, 30), "posts", [], "any", false, false, false, 30), "quick_menu", [], "any", false, false, false, 30), "links", [], "any", false, false, false, 30), "request_send_friend", [], "any", false, false, false, 30), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 30), "lang", [], "any", false, false, false, 30), "string", [], "any", false, false, false, 30), "discussion", [], "any", false, false, false, 30), "posts", [], "any", false, false, false, 30), "quick_menu", [], "any", false, false, false, 30), "links", [], "any", false, false, false, 30), "add_as_friend", [], "any", false, false, false, 30), "html", null, true);
                        echo "</button>
\t\t\t\t\t    ";
                    }
                    // line 32
                    echo "\t\t\t\t    ";
                } else {
                    // line 33
                    echo "\t\t\t\t\t    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 33), "buildLink", [0 => "account", 1 => []], "method", false, false, false, 33), "html", null, true);
                    echo "\" class=\"btn btn-app-discussion icon gear mt-2\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 33), "lang", [], "any", false, false, false, 33), "string", [], "any", false, false, false, 33), "container", [], "any", false, false, false, 33), "usermenu", [], "any", false, false, false, 33), "buttons", [], "any", false, false, false, 33), "control_panel", [], "any", false, false, false, 33), "html", null, true);
                    echo "</a>
\t\t\t\t    ";
                }
                // line 35
                echo "                ";
            }
            // line 36
            echo "\t\t\t";
        }
        // line 37
        echo "\t\t</div>
\t\t<div class=\"card app-forums bg-white rounded shadow mb-4 mt-4 mt-lg-0\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<h6 class=\"font-weight-bold\">";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 40), "lang", [], "any", false, false, false, 40), "string", [], "any", false, false, false, 40), "profile", [], "any", false, false, false, 40), "quick_menu", [], "any", false, false, false, 40), "title", [], "any", false, false, false, 40), "html", null, true);
        echo "</h6>
\t\t\t</div>
\t\t\t<article class=\"card-group-item\">
\t\t\t\t<div class=\"filter-content\">
\t\t\t\t\t<div class=\"list-group list-group-flush scrollable\">
\t\t\t\t\t\t<a href=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 45), "buildLink", [0 => "profile", 1 => ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 45), "username", [], "any", false, false, false, 45), "user_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 45), "user_id", [], "any", false, false, false, 45), "tab" => "posts"]], "method", false, false, false, 45), "html", null, true);
        echo "\" data-tab=\"posts\" data-ui=\"profile-quick-tab\" class=\"list-group-item active\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 45), "lang", [], "any", false, false, false, 45), "string", [], "any", false, false, false, 45), "profile", [], "any", false, false, false, 45), "quick_menu", [], "any", false, false, false, 45), "posts", [], "any", false, false, false, 45), "html", null, true);
        echo "<span class=\"float-right badge badge-dark round\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 45), "getUserPostCount", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 45), "user_id", [], "any", false, false, false, 45)], "method", false, false, false, 45), "html", null, true);
        echo "</span></a>
\t\t\t\t\t\t<a href=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 46), "buildLink", [0 => "profile", 1 => ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 46), "username", [], "any", false, false, false, 46), "user_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 46), "user_id", [], "any", false, false, false, 46), "tab" => "discussions"]], "method", false, false, false, 46), "html", null, true);
        echo "\" data-tab=\"discussions\" data-ui=\"profile-quick-tab\" class=\"list-group-item\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 46), "lang", [], "any", false, false, false, 46), "string", [], "any", false, false, false, 46), "profile", [], "any", false, false, false, 46), "quick_menu", [], "any", false, false, false, 46), "discussions", [], "any", false, false, false, 46), "html", null, true);
        echo "<span class=\"float-right badge badge-dark round\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 46), "getUserDiscussionCount", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 46), "user_id", [], "any", false, false, false, 46)], "method", false, false, false, 46), "html", null, true);
        echo "</span></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</article>
\t\t</div>
\t\t<div class=\"card app-forums bg-white rounded shadow mb-4 mt-4 mt-lg-0\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<h6 class=\"font-weight-bold\">";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 53), "lang", [], "any", false, false, false, 53), "string", [], "any", false, false, false, 53), "profile", [], "any", false, false, false, 53), "quick_menu", [], "any", false, false, false, 53), "friends", [], "any", false, false, false, 53), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "profile", [], "any", false, false, false, 53), "getUserFriendshipCount", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 53), "user_id", [], "any", false, false, false, 53)], "method", false, false, false, 53), "html", null, true);
        echo ")</h6>
\t\t\t</div>
\t\t\t<article class=\"card-group-item\">
\t\t\t\t<div class=\"filter-content\">
\t\t\t\t\t<div class=\"list-group list-group-flush scrollable\">
\t\t\t\t\t\t";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "profile", [], "any", false, false, false, 58), "getUserFriendships", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 58), "user_id", [], "any", false, false, false, 58)], "method", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 59
            echo "\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 59), "user_id", [], "any", false, false, false, 59) === twig_get_attribute($this->env, $this->source, $context["item"], "user_id", [], "any", false, false, false, 59))) {
                // line 60
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 60), "user", [], "any", false, false, false, 60), "link", [], "any", false, false, false, 60), "setUser", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "sender_id", [], "any", false, false, false, 60)], "method", false, false, false, 60), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t<a class=\"list-group-item post-user d-flex align-items-center p-3\" href=\"";
                // line 61
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 61), "user", [], "any", false, false, false, 61), "link", [], "any", false, false, false, 61), "getOnlyLink", [], "method", false, false, false, 61);
                echo "\">
\t\t\t\t\t\t\t\t\t";
                // line 63
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 63), "user", [], "any", false, false, false, 63), "link", [], "any", false, false, false, 63), "getProfilePicture", [0 => false, 1 => "no-tooltip"], "method", false, false, false, 63);
                echo "
\t\t\t\t\t\t\t\t\t\t<span class=\"ml-2\">";
                // line 64
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 64), "user", [], "any", false, false, false, 64), "link", [], "any", false, false, false, 64), "getName", [], "method", false, false, false, 64);
                echo "</span>
\t\t\t\t\t\t\t\t\t";
                // line 66
                echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 67), "user", [], "any", false, false, false, 67), "link", [], "any", false, false, false, 67), "unsetUser", [], "method", false, false, false, 67), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 68
($context["string"] ?? null), "user", [], "any", false, false, false, 68), "user_id", [], "any", false, false, false, 68) === twig_get_attribute($this->env, $this->source, $context["item"], "sender_id", [], "any", false, false, false, 68))) {
                // line 69
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 69), "user", [], "any", false, false, false, 69), "link", [], "any", false, false, false, 69), "setUser", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "user_id", [], "any", false, false, false, 69)], "method", false, false, false, 69), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t<a class=\"list-group-item post-user d-flex align-items-center p-3\" href=\"";
                // line 70
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 70), "user", [], "any", false, false, false, 70), "link", [], "any", false, false, false, 70), "getOnlyLink", [], "method", false, false, false, 70);
                echo "\">
\t\t\t\t\t\t\t\t\t";
                // line 72
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 72), "user", [], "any", false, false, false, 72), "link", [], "any", false, false, false, 72), "getProfilePicture", [0 => false, 1 => "no-tooltip"], "method", false, false, false, 72);
                echo "
\t\t\t\t\t\t\t\t\t\t<span class=\"ml-2\">";
                // line 73
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 73), "user", [], "any", false, false, false, 73), "link", [], "any", false, false, false, 73), "getName", [], "method", false, false, false, 73);
                echo "</span>
\t\t\t\t\t\t\t\t\t";
                // line 75
                echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 76), "user", [], "any", false, false, false, 76), "link", [], "any", false, false, false, 76), "unsetUser", [], "method", false, false, false, 76), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
            }
            // line 78
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</article>
\t\t</div>
\t</aside>
\t<aside class=\"col-sm-9\">
\t\t<div class=\"d-flex d-flex flex-column flex-lg-row\">
\t\t\t<div class=\"app-profile-info d-flex align-items-center\" data-user-id=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 86), "user_id", [], "any", false, false, false, 86), "html", null, true);
        echo "\" data-username=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 86), "username", [], "any", false, false, false, 86), "html", null, true);
        echo "\" data-username-seo=\"";
        echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\BuildSeoLink']->BuildSeoLinkExtension(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 86), "username", [], "any", false, false, false, 86)), "html", null, true);
        echo "\">
\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 88), "user", [], "any", false, false, false, 88), "link", [], "any", false, false, false, 88), "setUser", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 88), "user_id", [], "any", false, false, false, 88)], "method", false, false, false, 88), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 90
        echo "\t\t\t\t\t\t";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 90), "user", [], "any", false, false, false, 90), "link", [], "any", false, false, false, 90), "getProfilePicture", [0 => true, 1 => "no-tooltip"], "method", false, false, false, 90);
        echo "
\t\t\t\t\t\t<div class=\"d-flex flex-column ml-3\">
\t\t\t\t\t\t\t<span class=\"username\">";
        // line 92
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 92), "user", [], "any", false, false, false, 92), "link", [], "any", false, false, false, 92), "getName", [], "method", false, false, false, 92);
        echo "</span>
\t\t\t\t\t\t\t";
        // line 93
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 93), "user", [], "any", false, false, false, 93), "link", [], "any", false, false, false, 93), "isAdmin", [], "method", false, false, false, 93)) {
            // line 94
            echo "\t\t\t\t\t\t\t\t<span class=\"d-block\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 94), "user", [], "any", false, false, false, 94), "link", [], "any", false, false, false, 94), "getUsertitle", [], "method", false, false, false, 94);
            echo "</span>
\t\t\t\t\t\t\t";
        } else {
            // line 96
            echo "\t\t\t\t\t\t\t\t<span class=\"d-block\">";
            echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 96), "user", [], "any", false, false, false, 96), "link", [], "any", false, false, false, 96), "getUsertitle", [], "method", false, false, false, 96)), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t";
        }
        // line 98
        echo "\t\t\t\t\t\t\t<span>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 98), "lang", [], "any", false, false, false, 98), "parse", [], "any", false, false, false, 98), "Parse", [0 => "profile.joining", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 98), "date", [], "any", false, false, false, 98), "toHumanReadable", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 98), "registration_date", [], "any", false, false, false, 98)], "method", false, false, false, 98)], "method", false, false, false, 98), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 101
        echo "\t\t\t\t\t";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 101), "user", [], "any", false, false, false, 101), "unsetUser", [], "method", false, false, false, 101), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div hook-action=\"{Mention:App-domEvent-profileReactionBox}\" class=\"app-reactions reaction-md d-flex ml-lg-auto mt-4 mt-lg-0\">
\t\t\t\t<div class=\"reaction like d-flex flex-column align-items-center\">
\t\t\t\t\t<span>";
        // line 106
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 106), "getReactionCountByUserId", [0 => "like", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 106), "user_id", [], "any", false, false, false, 106)], "method", false, false, false, 106)), "html", null, true);
        echo "</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"reaction love d-flex flex-column align-items-center\">
\t\t\t\t\t<span>";
        // line 109
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 109), "getReactionCountByUserId", [0 => "love", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 109), "user_id", [], "any", false, false, false, 109)], "method", false, false, false, 109)), "html", null, true);
        echo "</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"reaction haha d-flex flex-column align-items-center\">
\t\t\t\t\t<span>";
        // line 112
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 112), "getReactionCountByUserId", [0 => "haha", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 112), "user_id", [], "any", false, false, false, 112)], "method", false, false, false, 112)), "html", null, true);
        echo "</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"reaction wow d-flex flex-column align-items-center\">
\t\t\t\t\t<span>";
        // line 115
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 115), "getReactionCountByUserId", [0 => "wow", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 115), "user_id", [], "any", false, false, false, 115)], "method", false, false, false, 115)), "html", null, true);
        echo "</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"reaction sad d-flex flex-column align-items-center\">
\t\t\t\t\t<span>";
        // line 118
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 118), "getReactionCountByUserId", [0 => "sad", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 118), "user_id", [], "any", false, false, false, 118)], "method", false, false, false, 118)), "html", null, true);
        echo "</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"reaction angry d-flex flex-column align-items-center\">
\t\t\t\t\t<span>";
        // line 121
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 121), "getReactionCountByUserId", [0 => "angry", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 121), "user_id", [], "any", false, false, false, 121)], "method", false, false, false, 121)), "html", null, true);
        echo "</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"reaction dislike d-flex flex-column align-items-center mr-0\">
\t\t\t\t\t<span>";
        // line 124
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 124), "getReactionCountByUserId", [0 => "dislike", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 124), "user_id", [], "any", false, false, false, 124)], "method", false, false, false, 124)), "html", null, true);
        echo "</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<hr>
\t\t";
        // line 129
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 129), "loggedIn", [], "method", false, false, false, 129)) {
            // line 130
            echo "\t\t\t";
            if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 130), "user_id", [], "any", false, false, false, 130) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 130), "user_id", [], "any", false, false, false, 130))) {
                // line 131
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 131), "buildLink", [0 => "messages", 1 => ["section" => "new", "id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 131), "user_id", [], "any", false, false, false, 131)]], "method", false, false, false, 131), "html", null, true);
                echo "\" class=\"btn btn-app-discussion icon plus mr-3\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 131), "lang", [], "any", false, false, false, 131), "string", [], "any", false, false, false, 131), "profile", [], "any", false, false, false, 131), "buttons", [], "any", false, false, false, 131), "message", [], "any", false, false, false, 131), "html", null, true);
                echo "</a>
\t\t\t";
            }
            // line 133
            echo "\t\t";
        }
        // line 134
        echo "\t\t<div class=\"app-order-profile-post dropdown mb-3\">
\t\t\t<button class=\"btn btn-app-dd no-anim-ui icon order-newest dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 135), "lang", [], "any", false, false, false, 135), "string", [], "any", false, false, false, 135), "container", [], "any", false, false, false, 135), "order", [], "any", false, false, false, 135), "new_message", [], "any", false, false, false, 135), "html", null, true);
        echo "</button>
\t\t\t<div class=\"dropdown-menu dropdown-menu-left custom-menu custom-menu-md shadow animate slideIn\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<span>";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 139), "lang", [], "any", false, false, false, 139), "string", [], "any", false, false, false, 139), "container", [], "any", false, false, false, 139), "order", [], "any", false, false, false, 139), "title", [], "any", false, false, false, 139), "html", null, true);
        echo "</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<a class=\"notification quick-menu d-flex active\" data-ui=\"order-profile-posts\" data-order=\"newest\" 
\t\t\t\t\tdata-href=\"";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 144), "buildLink", [0 => "profile", 1 => ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 144), "username", [], "any", false, false, false, 144), "user_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 144), "user_id", [], "any", false, false, false, 144), "tab" => "posts", "subtab" => "newest"]], "method", false, false, false, 144), "html", null, true);
        echo "\" 
\t\t\t\t\tdata-toggle-href=\"";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 145), "buildLink", [0 => "profile", 1 => ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 145), "username", [], "any", false, false, false, 145), "user_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 145), "user_id", [], "any", false, false, false, 145), "tab" => "discussions", "subtab" => "newest"]], "method", false, false, false, 145), "html", null, true);
        echo "\" 
\t\t\t\t\thref=\"";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 146), "buildLink", [0 => "profile", 1 => ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 146), "username", [], "any", false, false, false, 146), "user_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 146), "user_id", [], "any", false, false, false, 146), "tab" => "posts", "subtab" => "newest"]], "method", false, false, false, 146), "html", null, true);
        echo "\">
\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t<span>";
        // line 148
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 148), "lang", [], "any", false, false, false, 148), "string", [], "any", false, false, false, 148), "container", [], "any", false, false, false, 148), "order", [], "any", false, false, false, 148), "new_message", [], "any", false, false, false, 148), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"order-profile-posts\" data-order=\"top-likes\" 
\t\t\t\t\tdata-href=\"";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 152), "buildLink", [0 => "profile", 1 => ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 152), "username", [], "any", false, false, false, 152), "user_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 152), "user_id", [], "any", false, false, false, 152), "tab" => "posts", "subtab" => "top-likes"]], "method", false, false, false, 152), "html", null, true);
        echo "\" 
\t\t\t\t\tdata-toggle-href=\"";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 153), "buildLink", [0 => "profile", 1 => ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 153), "username", [], "any", false, false, false, 153), "user_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 153), "user_id", [], "any", false, false, false, 153), "tab" => "discussions", "subtab" => "top-likes"]], "method", false, false, false, 153), "html", null, true);
        echo "\" 
\t\t\t\t\thref=\"";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 154), "buildLink", [0 => "profile", 1 => ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 154), "username", [], "any", false, false, false, 154), "user_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 154), "user_id", [], "any", false, false, false, 154), "tab" => "posts", "subtab" => "top-likes"]], "method", false, false, false, 154), "html", null, true);
        echo "\">
\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t<span>";
        // line 156
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 156), "lang", [], "any", false, false, false, 156), "string", [], "any", false, false, false, 156), "container", [], "any", false, false, false, 156), "order", [], "any", false, false, false, 156), "top_likes", [], "any", false, false, false, 156), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"order-profile-posts\" data-order=\"oldest\" 
\t\t\t\t\tdata-href=\"";
        // line 160
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 160), "buildLink", [0 => "profile", 1 => ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 160), "username", [], "any", false, false, false, 160), "user_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 160), "user_id", [], "any", false, false, false, 160), "tab" => "posts", "subtab" => "oldest"]], "method", false, false, false, 160), "html", null, true);
        echo "\" 
\t\t\t\t\tdata-toggle-href=\"";
        // line 161
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 161), "buildLink", [0 => "profile", 1 => ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 161), "username", [], "any", false, false, false, 161), "user_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 161), "user_id", [], "any", false, false, false, 161), "tab" => "discussions", "subtab" => "oldest"]], "method", false, false, false, 161), "html", null, true);
        echo "\" 
\t\t\t\t\thref=\"";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 162), "buildLink", [0 => "profile", 1 => ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 162), "username", [], "any", false, false, false, 162), "user_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 162), "user_id", [], "any", false, false, false, 162), "tab" => "posts", "subtab" => "oldest"]], "method", false, false, false, 162), "html", null, true);
        echo "\">
\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t<span>";
        // line 164
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 164), "lang", [], "any", false, false, false, 164), "string", [], "any", false, false, false, 164), "container", [], "any", false, false, false, 164), "order", [], "any", false, false, false, 164), "oldest", [], "any", false, false, false, 164), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"app-post-container animate slideIn\">
\t\t\t";
        // line 171
        $this->loadTemplate("profile_posts.tpl", "profile.tpl", 171)->display($context);
        // line 172
        echo "\t\t</div>
\t\t<div class=\"post-loader-spin\"></div>
\t</aside>
\t";
        // line 176
        echo "\t<div hook-action=\"{Mention:App-domEvent-metacontents}\" data-title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 176), "username", [], "any", false, false, false, 176), "html", null, true);
        echo "\"
\t\tdata-meta-description=\"";
        // line 177
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 177), "username", [], "any", false, false, false, 177), "html", null, true);
        echo "\" data-og-description=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 177), "username", [], "any", false, false, false, 177), "html", null, true);
        echo "\"
\t\tdata-twitter-description=\"";
        // line 178
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 178), "username", [], "any", false, false, false, 178), "html", null, true);
        echo "\" data-og-title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 178), "username", [], "any", false, false, false, 178), "html", null, true);
        echo "\"
\t\tdata-twitter-title=\"";
        // line 179
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 179), "username", [], "any", false, false, false, 179), "html", null, true);
        echo "\" class=\"d-none\">
\t</div>
";
    }

    public function getTemplateName()
    {
        return "profile.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 179,  480 => 178,  474 => 177,  469 => 176,  464 => 172,  462 => 171,  452 => 164,  447 => 162,  443 => 161,  439 => 160,  432 => 156,  427 => 154,  423 => 153,  419 => 152,  412 => 148,  407 => 146,  403 => 145,  399 => 144,  391 => 139,  384 => 135,  381 => 134,  378 => 133,  370 => 131,  367 => 130,  365 => 129,  357 => 124,  351 => 121,  345 => 118,  339 => 115,  333 => 112,  327 => 109,  321 => 106,  312 => 101,  306 => 98,  300 => 96,  294 => 94,  292 => 93,  288 => 92,  282 => 90,  278 => 88,  269 => 86,  260 => 79,  254 => 78,  249 => 76,  246 => 75,  242 => 73,  237 => 72,  233 => 70,  228 => 69,  226 => 68,  222 => 67,  219 => 66,  215 => 64,  210 => 63,  206 => 61,  201 => 60,  198 => 59,  194 => 58,  184 => 53,  170 => 46,  162 => 45,  154 => 40,  149 => 37,  146 => 36,  143 => 35,  135 => 33,  132 => 32,  122 => 30,  112 => 28,  110 => 27,  101 => 26,  98 => 25,  95 => 24,  92 => 23,  90 => 22,  84 => 18,  82 => 17,  74 => 12,  70 => 11,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'container.tpl' %}

{% block app_template_name 'profile' %}

{% block content %}
\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div>{{ app.sub.lang.string.profile.breadcrumb }}</div>
\t\t\t\t\t<div>{{ string.user.username }}</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t{% include 'usermenu_member.tpl' %}
\t\t</div>
\t</div>
\t<aside class=\"col-sm-3 mb-4 pr-4\">
\t\t<div class=\"helpful-area mb-lg-5\">
\t\t\t{% if app.user.loggedIn() %}
                {% if not app.user.getActiveBan(app.visitor.user_id) %}
\t\t\t\t    {% if not app.visitor.user_id is same as(string.user.user_id) %}
\t\t\t\t\t    {% if string.profile.isUserHasFriendship(string.user.user_id, app.visitor.user_id, 0) %}
\t\t\t\t\t\t    <button type=\"button\" class=\"btn btn-app-discussion icon remove-friend mt-2\" data-ui=\"remove-friend\" data-text=\"{{ app.sub.lang.string.discussion.posts.quick_menu.links.add_as_friend }}\" data-complete-text=\"{{ app.sub.lang.string.discussion.posts.quick_menu.links.request_send_friend }}\">{{ app.sub.lang.string.discussion.posts.quick_menu.links.remove_from_list }}</button>
\t\t\t\t\t    {% elseif string.profile.isUserHasFriendship(string.user.user_id, app.visitor.user_id, 1) %}
\t\t\t\t\t\t    <button type=\"button\" class=\"btn btn-app-discussion icon awaiting-friend mt-2\" data-ui=\"remove-friend\" data-text=\"{{ app.sub.lang.string.discussion.posts.quick_menu.links.add_as_friend }}\" data-complete-text=\"{{ app.sub.lang.string.discussion.posts.quick_menu.links.request_send_friend }}\">{{ app.sub.lang.string.discussion.posts.quick_menu.links.request_send_friend }}</button>
\t\t\t\t\t    {% else %}
\t\t\t\t\t\t    <button type=\"button\" class=\"btn btn-app-discussion icon add-friend mt-2\" data-ui=\"add-as-friend\" data-text=\"{{ app.sub.lang.string.discussion.posts.quick_menu.links.add_as_friend }}\" data-complete-text=\"{{ app.sub.lang.string.discussion.posts.quick_menu.links.request_send_friend }}\">{{ app.sub.lang.string.discussion.posts.quick_menu.links.add_as_friend }}</button>
\t\t\t\t\t    {% endif %}
\t\t\t\t    {% else %}
\t\t\t\t\t    <a href=\"{{ app.phrase.buildLink('account', {}) }}\" class=\"btn btn-app-discussion icon gear mt-2\">{{ app.sub.lang.string.container.usermenu.buttons.control_panel }}</a>
\t\t\t\t    {% endif %}
                {% endif %}
\t\t\t{% endif %}
\t\t</div>
\t\t<div class=\"card app-forums bg-white rounded shadow mb-4 mt-4 mt-lg-0\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<h6 class=\"font-weight-bold\">{{ app.sub.lang.string.profile.quick_menu.title }}</h6>
\t\t\t</div>
\t\t\t<article class=\"card-group-item\">
\t\t\t\t<div class=\"filter-content\">
\t\t\t\t\t<div class=\"list-group list-group-flush scrollable\">
\t\t\t\t\t\t<a href=\"{{ app.phrase.buildLink('profile', {'username': string.user.username, 'user_id': string.user.user_id, 'tab': 'posts'}) }}\" data-tab=\"posts\" data-ui=\"profile-quick-tab\" class=\"list-group-item active\">{{ app.sub.lang.string.profile.quick_menu.posts }}<span class=\"float-right badge badge-dark round\">{{ string.post.getUserPostCount(string.user.user_id) }}</span></a>
\t\t\t\t\t\t<a href=\"{{ app.phrase.buildLink('profile', {'username': string.user.username, 'user_id': string.user.user_id, 'tab': 'discussions'}) }}\" data-tab=\"discussions\" data-ui=\"profile-quick-tab\" class=\"list-group-item\">{{ app.sub.lang.string.profile.quick_menu.discussions }}<span class=\"float-right badge badge-dark round\">{{ string.post.getUserDiscussionCount(string.user.user_id) }}</span></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</article>
\t\t</div>
\t\t<div class=\"card app-forums bg-white rounded shadow mb-4 mt-4 mt-lg-0\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<h6 class=\"font-weight-bold\">{{ app.sub.lang.string.profile.quick_menu.friends }} ({{ string.profile.getUserFriendshipCount(string.user.user_id) }})</h6>
\t\t\t</div>
\t\t\t<article class=\"card-group-item\">
\t\t\t\t<div class=\"filter-content\">
\t\t\t\t\t<div class=\"list-group list-group-flush scrollable\">
\t\t\t\t\t\t{% for item in string.profile.getUserFriendships(string.user.user_id) %}
\t\t\t\t\t\t\t{% if string.user.user_id is same as(item.user_id) %}
\t\t\t\t\t\t\t\t{{ app.sub.user.link.setUser(item.sender_id) }}
\t\t\t\t\t\t\t\t<a class=\"list-group-item post-user d-flex align-items-center p-3\" href=\"{{ app.sub.user.link.getOnlyLink()|raw }}\">
\t\t\t\t\t\t\t\t\t{% autoescape 'html' %}
\t\t\t\t\t\t\t\t\t\t{{ app.sub.user.link.getProfilePicture(false, 'no-tooltip')|raw }}
\t\t\t\t\t\t\t\t\t\t<span class=\"ml-2\">{{ app.sub.user.link.getName()|raw }}</span>
\t\t\t\t\t\t\t\t\t{% endautoescape %}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{{ app.sub.user.link.unsetUser() }}
\t\t\t\t\t\t\t{% elseif string.user.user_id is same as(item.sender_id) %}
\t\t\t\t\t\t\t\t{{ app.sub.user.link.setUser(item.user_id) }}
\t\t\t\t\t\t\t\t<a class=\"list-group-item post-user d-flex align-items-center p-3\" href=\"{{ app.sub.user.link.getOnlyLink()|raw }}\">
\t\t\t\t\t\t\t\t\t{% autoescape 'html' %}
\t\t\t\t\t\t\t\t\t\t{{ app.sub.user.link.getProfilePicture(false, 'no-tooltip')|raw }}
\t\t\t\t\t\t\t\t\t\t<span class=\"ml-2\">{{ app.sub.user.link.getName()|raw }}</span>
\t\t\t\t\t\t\t\t\t{% endautoescape %}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{{ app.sub.user.link.unsetUser() }}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</article>
\t\t</div>
\t</aside>
\t<aside class=\"col-sm-9\">
\t\t<div class=\"d-flex d-flex flex-column flex-lg-row\">
\t\t\t<div class=\"app-profile-info d-flex align-items-center\" data-user-id=\"{{ string.user.user_id }}\" data-username=\"{{ string.user.username }}\" data-username-seo=\"{{ string.user.username|buildSeoLink }}\">
\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t{{ app.sub.user.link.setUser(string.user.user_id) }}
\t\t\t\t\t{% autoescape 'html' %}
\t\t\t\t\t\t{{ app.sub.user.link.getProfilePicture(true, 'no-tooltip')|raw }}
\t\t\t\t\t\t<div class=\"d-flex flex-column ml-3\">
\t\t\t\t\t\t\t<span class=\"username\">{{ app.sub.user.link.getName()|raw }}</span>
\t\t\t\t\t\t\t{% if app.sub.user.link.isAdmin() %}
\t\t\t\t\t\t\t\t<span class=\"d-block\">{{ app.sub.user.link.getUsertitle()|raw }}</span>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<span class=\"d-block\">{{ app.sub.user.link.getUsertitle()|striptags }}</span>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<span>{{ app.sub.lang.parse.Parse('profile.joining', app.timer.date.toHumanReadable(string.user.registration_date)) }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endautoescape %}
\t\t\t\t\t{{ app.sub.user.unsetUser() }}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div hook-action=\"{Mention:App-domEvent-profileReactionBox}\" class=\"app-reactions reaction-md d-flex ml-lg-auto mt-4 mt-lg-0\">
\t\t\t\t<div class=\"reaction like d-flex flex-column align-items-center\">
\t\t\t\t\t<span>{{ string.reaction.getReactionCountByUserId('like', string.user.user_id)|number_format }}</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"reaction love d-flex flex-column align-items-center\">
\t\t\t\t\t<span>{{ string.reaction.getReactionCountByUserId('love', string.user.user_id)|number_format }}</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"reaction haha d-flex flex-column align-items-center\">
\t\t\t\t\t<span>{{ string.reaction.getReactionCountByUserId('haha', string.user.user_id)|number_format }}</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"reaction wow d-flex flex-column align-items-center\">
\t\t\t\t\t<span>{{ string.reaction.getReactionCountByUserId('wow', string.user.user_id)|number_format }}</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"reaction sad d-flex flex-column align-items-center\">
\t\t\t\t\t<span>{{ string.reaction.getReactionCountByUserId('sad', string.user.user_id)|number_format }}</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"reaction angry d-flex flex-column align-items-center\">
\t\t\t\t\t<span>{{ string.reaction.getReactionCountByUserId('angry', string.user.user_id)|number_format }}</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"reaction dislike d-flex flex-column align-items-center mr-0\">
\t\t\t\t\t<span>{{ string.reaction.getReactionCountByUserId('dislike', string.user.user_id)|number_format }}</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<hr>
\t\t{% if app.user.loggedIn() %}
\t\t\t{% if not app.visitor.user_id is same as(string.user.user_id) %}
\t\t\t\t<a href=\"{{ app.phrase.buildLink('messages', {'section': 'new', 'id': string.user.user_id}) }}\" class=\"btn btn-app-discussion icon plus mr-3\">{{ app.sub.lang.string.profile.buttons.message }}</a>
\t\t\t{% endif %}
\t\t{% endif %}
\t\t<div class=\"app-order-profile-post dropdown mb-3\">
\t\t\t<button class=\"btn btn-app-dd no-anim-ui icon order-newest dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ app.sub.lang.string.container.order.new_message }}</button>
\t\t\t<div class=\"dropdown-menu dropdown-menu-left custom-menu custom-menu-md shadow animate slideIn\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<span>{{ app.sub.lang.string.container.order.title }}</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<a class=\"notification quick-menu d-flex active\" data-ui=\"order-profile-posts\" data-order=\"newest\" 
\t\t\t\t\tdata-href=\"{{ app.phrase.buildLink('profile', {'username': string.user.username, 'user_id': string.user.user_id, 'tab': 'posts', 'subtab': 'newest'}) }}\" 
\t\t\t\t\tdata-toggle-href=\"{{ app.phrase.buildLink('profile', {'username': string.user.username, 'user_id': string.user.user_id, 'tab': 'discussions', 'subtab': 'newest'}) }}\" 
\t\t\t\t\thref=\"{{ app.phrase.buildLink('profile', {'username': string.user.username, 'user_id': string.user.user_id, 'tab': 'posts', 'subtab': 'newest'}) }}\">
\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t<span>{{ app.sub.lang.string.container.order.new_message }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"order-profile-posts\" data-order=\"top-likes\" 
\t\t\t\t\tdata-href=\"{{ app.phrase.buildLink('profile', {'username': string.user.username, 'user_id': string.user.user_id, 'tab': 'posts', 'subtab': 'top-likes'}) }}\" 
\t\t\t\t\tdata-toggle-href=\"{{ app.phrase.buildLink('profile', {'username': string.user.username, 'user_id': string.user.user_id, 'tab': 'discussions', 'subtab': 'top-likes'}) }}\" 
\t\t\t\t\thref=\"{{ app.phrase.buildLink('profile', {'username': string.user.username, 'user_id': string.user.user_id, 'tab': 'posts', 'subtab': 'top-likes'}) }}\">
\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t<span>{{ app.sub.lang.string.container.order.top_likes }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"order-profile-posts\" data-order=\"oldest\" 
\t\t\t\t\tdata-href=\"{{ app.phrase.buildLink('profile', {'username': string.user.username, 'user_id': string.user.user_id, 'tab': 'posts', 'subtab': 'oldest'}) }}\" 
\t\t\t\t\tdata-toggle-href=\"{{ app.phrase.buildLink('profile', {'username': string.user.username, 'user_id': string.user.user_id, 'tab': 'discussions', 'subtab': 'oldest'}) }}\" 
\t\t\t\t\thref=\"{{ app.phrase.buildLink('profile', {'username': string.user.username, 'user_id': string.user.user_id, 'tab': 'posts', 'subtab': 'oldest'}) }}\">
\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t<span>{{ app.sub.lang.string.container.order.oldest }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"app-post-container animate slideIn\">
\t\t\t{% include 'profile_posts.tpl' %}
\t\t</div>
\t\t<div class=\"post-loader-spin\"></div>
\t</aside>
\t{# This is includes meta definitions. #}
\t<div hook-action=\"{Mention:App-domEvent-metacontents}\" data-title=\"{{ string.user.username }}\"
\t\tdata-meta-description=\"{{ string.user.username }}\" data-og-description=\"{{ string.user.username }}\"
\t\tdata-twitter-description=\"{{ string.user.username }}\" data-og-title=\"{{ string.user.username }}\"
\t\tdata-twitter-title=\"{{ string.user.username }}\" class=\"d-none\">
\t</div>
{% endblock %}", "profile.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\User\\profile.tpl");
    }
}
