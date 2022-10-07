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

/* macro.posts.tpl */
class __TwigTemplate_342a2d3f881177632f032f1dda8df2b1c30e72e8fe9f84b0c3375e61cb5e0e07 extends Template
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
    public function macro_posts($__item__ = null, $__loop__ = null, $__firstpost__ = false, $__string__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "loop" => $__loop__,
            "firstpost" => $__firstpost__,
            "string" => $__string__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "\t";
            if (($context["firstpost"] ?? null)) {
                // line 3
                echo "\t\t<div hook-action=\"{Mention:App-domEvent-discussionfirstpost}\" class=\"post first-post\" data-date=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 3), "date", [], "any", false, false, false, 3), "getFullDate", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "discussion", [], "any", false, false, false, 3), "dateline", [], "any", false, false, false, 3)], "method", false, false, false, 3), "html", null, true);
                echo "\" data-item=\"1\" data-post-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_id", [], "any", false, false, false, 3), "html", null, true);
                echo "\" data-discussion-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "discussion_id", [], "any", false, false, false, 3), "html", null, true);
                echo "\" data-forum-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "forum_id", [], "any", false, false, false, 3), "html", null, true);
                echo "\" data-user-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "user_id", [], "any", false, false, false, 3), "html", null, true);
                echo "\" data-post-count=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 3), "getDiscussionPostCount", [], "method", false, false, false, 3), "html", null, true);
                echo "\" data-last-post-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 3), "getDiscussionLastPost", [], "method", false, false, false, 3), "html", null, true);
                echo "\" data-shortcode=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 3), "discussion", [], "any", false, false, false, 3), "shortcode", [], "any", false, false, false, 3), "toBase", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "shortcode", [], "any", false, false, false, 3)], "method", false, false, false, 3), "html", null, true);
                echo "\">
\t";
            } else {
                // line 5
                echo "\t    <div hook-action=\"{Mention:App-domEvent-discussionposts}\" class=\"post\" data-date=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 5), "date", [], "any", false, false, false, 5), "getFullDate", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dateline", [], "any", false, false, false, 5)], "method", false, false, false, 5), "html", null, true);
                echo "\" data-item=\"\" data-post-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_id", [], "any", false, false, false, 5), "html", null, true);
                echo "\" data-user-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "user_id", [], "any", false, false, false, 5), "html", null, true);
                echo "\" data-shortcode=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 5), "discussion", [], "any", false, false, false, 5), "shortcode", [], "any", false, false, false, 5), "toBase", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "shortcode", [], "any", false, false, false, 5)], "method", false, false, false, 5), "html", null, true);
                echo "\">
\t";
            }
            // line 7
            echo "\t<div class=\"app-post app-discussion bg-white shadow rounded\">
\t\t<div class=\"progress d-none\">
\t\t\t<div class=\"indeterminate\"></div>
\t\t</div>
\t\t<div class=\"post-layout mt-2 mb-3\">
\t\t\t<div class=\"post-user\">
\t\t\t\t";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 13), "user", [], "any", false, false, false, 13), "link", [], "any", false, false, false, 13), "setUser", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "user_id", [], "any", false, false, false, 13)], "method", false, false, false, 13), "html", null, true);
            echo "
\t\t\t\t";
            // line 15
            echo "\t\t\t\t\t";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 15), "user", [], "any", false, false, false, 15), "link", [], "any", false, false, false, 15), "getLinkWithProfilePicture", [], "method", false, false, false, 15);
            echo "
\t\t\t\t";
            // line 17
            echo "\t\t\t\t<div class=\"discussion-post-user\">
\t\t\t\t\t";
            // line 18
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 18), "user", [], "any", false, false, false, 18), "link", [], "any", false, false, false, 18), "getLink", [], "method", false, false, false, 18);
            echo "
\t\t\t\t\t";
            // line 19
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 19), "user", [], "any", false, false, false, 19), "link", [], "any", false, false, false, 19), "isAdmin", [], "method", false, false, false, 19)) {
                // line 20
                echo "\t\t\t\t\t    <span class=\"d-block\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 20), "user", [], "any", false, false, false, 20), "link", [], "any", false, false, false, 20), "getUsertitle", [], "method", false, false, false, 20);
                echo "</span>
\t\t\t\t\t";
            } else {
                // line 22
                echo "\t\t\t\t\t    <span class=\"d-block\">";
                echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 22), "user", [], "any", false, false, false, 22), "link", [], "any", false, false, false, 22), "getUsertitle", [], "method", false, false, false, 22)), "html", null, true);
                echo "</span>
\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 25), "user", [], "any", false, false, false, 25), "link", [], "any", false, false, false, 25), "unsetUser", [], "method", false, false, false, 25), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t<div class=\"post-content\">
\t\t\t\t<div class=\"discussion-post-user\">
\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t<a class=\"text-dark dropdown-toggle\" role=\"button\" id=\"dropdownMenuLink\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "username", [], "any", false, false, false, 30), "html", null, true);
            echo "</a>
\t\t\t\t\t\t<div class=\"dropdown-menu custom-menu post-user-menu animate slideIn shadow p-0\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 34), "lang", [], "any", false, false, false, 34), "string", [], "any", false, false, false, 34), "container", [], "any", false, false, false, 34), "quick_menu", [], "any", false, false, false, 34), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 36
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 36), "is_admin", [], "any", false, false, false, 36)) {
                // line 37
                echo "\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<a title=\"";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 38), "lang", [], "any", false, false, false, 38), "string", [], "any", false, false, false, 38), "discussion", [], "any", false, false, false, 38), "posts", [], "any", false, false, false, 38), "quick_menu", [], "any", false, false, false, 38), "buttons", [], "any", false, false, false, 38), "edit", [], "any", false, false, false, 38), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 38), "buildLink", [0 => "adminUsers", 1 => []], "method", false, false, false, 38), "html", null, true);
                echo "?editUser=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "user_id", [], "any", false, false, false, 38), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user-edit\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a title=\"";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 41), "lang", [], "any", false, false, false, 41), "string", [], "any", false, false, false, 41), "discussion", [], "any", false, false, false, 41), "posts", [], "any", false, false, false, 41), "quick_menu", [], "any", false, false, false, 41), "buttons", [], "any", false, false, false, 41), "flag", [], "any", false, false, false, 41), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 41), "buildLink", [0 => "adminUsers", 1 => []], "method", false, false, false, 41), "html", null, true);
                echo "?flagUser=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "user_id", [], "any", false, false, false, 41), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-exclamation-triangle\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a title=\"";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 44), "lang", [], "any", false, false, false, 44), "string", [], "any", false, false, false, 44), "discussion", [], "any", false, false, false, 44), "posts", [], "any", false, false, false, 44), "quick_menu", [], "any", false, false, false, 44), "buttons", [], "any", false, false, false, 44), "ban", [], "any", false, false, false, 44), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 44), "buildLink", [0 => "adminUsers", 1 => []], "method", false, false, false, 44), "html", null, true);
                echo "?banUser=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "user_id", [], "any", false, false, false, 44), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user-slash\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"scrollable\">
\t\t\t\t\t\t\t\t";
            // line 51
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 51), "loggedIn", [], "method", false, false, false, 51)) {
                // line 52
                echo "\t\t\t\t\t\t\t\t\t";
                if ( !(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "user_id", [], "any", false, false, false, 52) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 52), "user_id", [], "any", false, false, false, 52))) {
                    // line 53
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 53), "profile", [], "any", false, false, false, 53), "isUserHasFriendship", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 53), "user_id", [], "any", false, false, false, 53), 1 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "user_id", [], "any", false, false, false, 53), 2 => 1], "method", false, false, false, 53)) {
                        // line 54
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"quick-remove-friend\" data-text=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 54), "lang", [], "any", false, false, false, 54), "string", [], "any", false, false, false, 54), "discussion", [], "any", false, false, false, 54), "posts", [], "any", false, false, false, 54), "quick_menu", [], "any", false, false, false, 54), "links", [], "any", false, false, false, 54), "add_as_friend", [], "any", false, false, false, 54), "html", null, true);
                        echo "\" data-complete-text=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 54), "lang", [], "any", false, false, false, 54), "string", [], "any", false, false, false, 54), "discussion", [], "any", false, false, false, 54), "posts", [], "any", false, false, false, 54), "quick_menu", [], "any", false, false, false, 54), "links", [], "any", false, false, false, 54), "request_send_friend", [], "any", false, false, false, 54), "html", null, true);
                        echo "\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon add-friend\">";
                        // line 56
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 56), "lang", [], "any", false, false, false, 56), "string", [], "any", false, false, false, 56), "discussion", [], "any", false, false, false, 56), "posts", [], "any", false, false, false, 56), "quick_menu", [], "any", false, false, false, 56), "links", [], "any", false, false, false, 56), "request_send_friend", [], "any", false, false, false, 56), "html", null, true);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 59
($context["app"] ?? null), "string", [], "any", false, false, false, 59), "profile", [], "any", false, false, false, 59), "isUserHasFriendship", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 59), "user_id", [], "any", false, false, false, 59), 1 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "user_id", [], "any", false, false, false, 59), 2 => 0], "method", false, false, false, 59)) {
                        // line 60
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"quick-add-as-friend\" data-text=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 60), "lang", [], "any", false, false, false, 60), "string", [], "any", false, false, false, 60), "discussion", [], "any", false, false, false, 60), "posts", [], "any", false, false, false, 60), "quick_menu", [], "any", false, false, false, 60), "links", [], "any", false, false, false, 60), "add_as_friend", [], "any", false, false, false, 60), "html", null, true);
                        echo "\" data-complete-text=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 60), "lang", [], "any", false, false, false, 60), "string", [], "any", false, false, false, 60), "discussion", [], "any", false, false, false, 60), "posts", [], "any", false, false, false, 60), "quick_menu", [], "any", false, false, false, 60), "links", [], "any", false, false, false, 60), "request_send_friend", [], "any", false, false, false, 60), "html", null, true);
                        echo "\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon add-friend\">";
                        // line 62
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 62), "lang", [], "any", false, false, false, 62), "string", [], "any", false, false, false, 62), "discussion", [], "any", false, false, false, 62), "posts", [], "any", false, false, false, 62), "quick_menu", [], "any", false, false, false, 62), "links", [], "any", false, false, false, 62), "remove_from_list", [], "any", false, false, false, 62), "html", null, true);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 66
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"quick-add-as-friend\" data-text=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 66), "lang", [], "any", false, false, false, 66), "string", [], "any", false, false, false, 66), "discussion", [], "any", false, false, false, 66), "posts", [], "any", false, false, false, 66), "quick_menu", [], "any", false, false, false, 66), "links", [], "any", false, false, false, 66), "add_as_friend", [], "any", false, false, false, 66), "html", null, true);
                        echo "\" data-complete-text=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 66), "lang", [], "any", false, false, false, 66), "string", [], "any", false, false, false, 66), "discussion", [], "any", false, false, false, 66), "posts", [], "any", false, false, false, 66), "quick_menu", [], "any", false, false, false, 66), "links", [], "any", false, false, false, 66), "request_send_friend", [], "any", false, false, false, 66), "html", null, true);
                        echo "\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon add-friend\">";
                        // line 68
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 68), "lang", [], "any", false, false, false, 68), "string", [], "any", false, false, false, 68), "discussion", [], "any", false, false, false, 68), "posts", [], "any", false, false, false, 68), "quick_menu", [], "any", false, false, false, 68), "links", [], "any", false, false, false, 68), "add_as_friend", [], "any", false, false, false, 68), "html", null, true);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 72
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 73
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 74
            echo "\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 74), "buildLink", [0 => "profile", 1 => ["username" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "username", [], "any", false, false, false, 74), "user_id" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "user_id", [], "any", false, false, false, 74)]], "method", false, false, false, 74), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon user\">";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 76), "lang", [], "any", false, false, false, 76), "string", [], "any", false, false, false, 76), "discussion", [], "any", false, false, false, 76), "posts", [], "any", false, false, false, 76), "quick_menu", [], "any", false, false, false, 76), "links", [], "any", false, false, false, 76), "profile", [], "any", false, false, false, 76), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" href=\"";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 79), "buildLink", [0 => "profile", 1 => ["username" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "username", [], "any", false, false, false, 79), "user_id" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "user_id", [], "any", false, false, false, 79), "tab" => "posts"]], "method", false, false, false, 79), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon post\">";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 81), "lang", [], "any", false, false, false, 81), "string", [], "any", false, false, false, 81), "discussion", [], "any", false, false, false, 81), "posts", [], "any", false, false, false, 81), "quick_menu", [], "any", false, false, false, 81), "links", [], "any", false, false, false, 81), "posts", [], "any", false, false, false, 81), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            // line 84
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 84), "loggedIn", [], "method", false, false, false, 84)) {
                // line 85
                echo "\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 85), "buildLink", [0 => "messages", 1 => ["section" => "new", "id" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "user_id", [], "any", false, false, false, 85)]], "method", false, false, false, 85), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon message\">";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 87), "lang", [], "any", false, false, false, 87), "string", [], "any", false, false, false, 87), "discussion", [], "any", false, false, false, 87), "posts", [], "any", false, false, false, 87), "quick_menu", [], "any", false, false, false, 87), "links", [], "any", false, false, false, 87), "message", [], "any", false, false, false, 87), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            }
            // line 91
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"extra-button pt-2 pb-2 text-center\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 95), "user", [], "any", false, false, false, 95), "link", [], "any", false, false, false, 95), "setUser", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "user_id", [], "any", false, false, false, 95)], "method", false, false, false, 95), "html", null, true);
            echo "
\t\t\t\t\t    ";
            // line 96
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 96), "user", [], "any", false, false, false, 96), "link", [], "any", false, false, false, 96), "isAdmin", [], "method", false, false, false, 96)) {
                // line 97
                echo "\t\t\t\t\t        <span class=\"d-block\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 97), "user", [], "any", false, false, false, 97), "link", [], "any", false, false, false, 97), "getUsertitle", [], "method", false, false, false, 97);
                echo "</span>
\t\t\t\t\t    ";
            } else {
                // line 99
                echo "\t\t\t\t\t    \t<span class=\"d-block\">";
                echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 99), "user", [], "any", false, false, false, 99), "link", [], "any", false, false, false, 99), "getUsertitle", [], "method", false, false, false, 99)), "html", null, true);
                echo "</span>
\t\t\t\t\t    ";
            }
            // line 101
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 101), "user", [], "any", false, false, false, 101), "link", [], "any", false, false, false, 101), "unsetUser", [], "method", false, false, false, 101), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"post-control d-flex align-items-center\">
\t\t\t\t\t<span class=\"text-muted mr-3\">";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 104), "date", [], "any", false, false, false, 104), "toHumanReadable", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dateline", [], "any", false, false, false, 104)], "method", false, false, false, 104), "html", null, true);
            echo "</span>
\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t<a title=\"";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 106), "lang", [], "any", false, false, false, 106), "string", [], "any", false, false, false, 106), "discussion", [], "any", false, false, false, 106), "posts", [], "any", false, false, false, 106), "message_options", [], "any", false, false, false, 106), "title", [], "any", false, false, false, 106), "html", null, true);
            echo "\" class=\"text-dark dropdown-toggle\" role=\"button\" id=\"dropdownMenuLink\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right custom-menu post-user-menu animate slideIn shadow p-0\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 110), "lang", [], "any", false, false, false, 110), "string", [], "any", false, false, false, 110), "discussion", [], "any", false, false, false, 110), "posts", [], "any", false, false, false, 110), "message_options", [], "any", false, false, false, 110), "title", [], "any", false, false, false, 110), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"scrollable\">
\t\t\t\t\t\t\t\t";
            // line 114
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 114), "loggedIn", [], "method", false, false, false, 114)) {
                // line 115
                echo "\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 115), "isUserBookmarkPost", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_id", [], "any", false, false, false, 115), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 115), "user_id", [], "any", false, false, false, 115)], "method", false, false, false, 115)) {
                    // line 116
                    echo "\t\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"post-bookmark-undo\" data-text=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 116), "lang", [], "any", false, false, false, 116), "string", [], "any", false, false, false, 116), "discussion", [], "any", false, false, false, 116), "posts", [], "any", false, false, false, 116), "message_options", [], "any", false, false, false, 116), "links", [], "any", false, false, false, 116), "bookmark", [], "any", false, false, false, 116), "html", null, true);
                    echo "\" data-toggle-text=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 116), "lang", [], "any", false, false, false, 116), "string", [], "any", false, false, false, 116), "discussion", [], "any", false, false, false, 116), "posts", [], "any", false, false, false, 116), "message_options", [], "any", false, false, false, 116), "links", [], "any", false, false, false, 116), "bookmark_saved", [], "any", false, false, false, 116), "html", null, true);
                    echo "\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon bookmark active\">";
                    // line 118
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 118), "lang", [], "any", false, false, false, 118), "string", [], "any", false, false, false, 118), "discussion", [], "any", false, false, false, 118), "posts", [], "any", false, false, false, 118), "message_options", [], "any", false, false, false, 118), "links", [], "any", false, false, false, 118), "bookmark_saved", [], "any", false, false, false, 118), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 122
                    echo "\t\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"post-bookmark\" data-text=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 122), "lang", [], "any", false, false, false, 122), "string", [], "any", false, false, false, 122), "discussion", [], "any", false, false, false, 122), "posts", [], "any", false, false, false, 122), "message_options", [], "any", false, false, false, 122), "links", [], "any", false, false, false, 122), "bookmark", [], "any", false, false, false, 122), "html", null, true);
                    echo "\" data-toggle-text=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 122), "lang", [], "any", false, false, false, 122), "string", [], "any", false, false, false, 122), "discussion", [], "any", false, false, false, 122), "posts", [], "any", false, false, false, 122), "message_options", [], "any", false, false, false, 122), "links", [], "any", false, false, false, 122), "bookmark_saved", [], "any", false, false, false, 122), "html", null, true);
                    echo "\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon bookmark\">";
                    // line 124
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 124), "lang", [], "any", false, false, false, 124), "string", [], "any", false, false, false, 124), "discussion", [], "any", false, false, false, 124), "posts", [], "any", false, false, false, 124), "message_options", [], "any", false, false, false, 124), "links", [], "any", false, false, false, 124), "bookmark", [], "any", false, false, false, 124), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 128
                echo "\t\t\t\t\t\t\t\t\t";
                if ( !($context["firstpost"] ?? null)) {
                    // line 129
                    echo "\t\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"mark-as-helpful\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon check\">";
                    // line 131
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 131), "lang", [], "any", false, false, false, 131), "string", [], "any", false, false, false, 131), "discussion", [], "any", false, false, false, 131), "posts", [], "any", false, false, false, 131), "message_options", [], "any", false, false, false, 131), "links", [], "any", false, false, false, 131), "mark_helpful", [], "any", false, false, false, 131), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 135
                echo "\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex d-md-none\" data-ui=\"report-post\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon report\">";
                // line 137
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 137), "lang", [], "any", false, false, false, 137), "string", [], "any", false, false, false, 137), "discussion", [], "any", false, false, false, 137), "posts", [], "any", false, false, false, 137), "buttons", [], "any", false, false, false, 137), "report", [], "any", false, false, false, 137), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                // line 140
                if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "user_id", [], "any", false, false, false, 140) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 140), "user_id", [], "any", false, false, false, 140)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 140), "is_admin", [], "any", false, false, false, 140))) {
                    // line 141
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (($context["firstpost"] ?? null)) {
                        // line 142
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 142), "is_admin", [], "any", false, false, false, 142)) {
                            // line 143
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner-head\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 143), "lang", [], "any", false, false, false, 143), "string", [], "any", false, false, false, 143), "discussion", [], "any", false, false, false, 143), "posts", [], "any", false, false, false, 143), "message_options", [], "any", false, false, false, 143), "moderation", [], "any", false, false, false, 143), "html", null, true);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"move-discussion\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon move\">";
                            // line 146
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 146), "lang", [], "any", false, false, false, 146), "string", [], "any", false, false, false, 146), "discussion", [], "any", false, false, false, 146), "posts", [], "any", false, false, false, 146), "message_options", [], "any", false, false, false, 146), "links", [], "any", false, false, false, 146), "move", [], "any", false, false, false, 146), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 149
                            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "is_sticky", [], "any", false, false, false, 149)) {
                                // line 150
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"un-pin-discussion\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon pin active\">";
                                // line 152
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 152), "lang", [], "any", false, false, false, 152), "string", [], "any", false, false, false, 152), "discussion", [], "any", false, false, false, 152), "posts", [], "any", false, false, false, 152), "message_options", [], "any", false, false, false, 152), "links", [], "any", false, false, false, 152), "pinned", [], "any", false, false, false, 152), "html", null, true);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 156
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"pin-discussion\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon pin\">";
                                // line 158
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 158), "lang", [], "any", false, false, false, 158), "string", [], "any", false, false, false, 158), "discussion", [], "any", false, false, false, 158), "posts", [], "any", false, false, false, 158), "message_options", [], "any", false, false, false, 158), "links", [], "any", false, false, false, 158), "pin", [], "any", false, false, false, 158), "html", null, true);
                                echo "</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 163
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "is_open", [], "any", false, false, false, 163)) {
                                // line 164
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"lock-discussion\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon lock\">";
                                // line 166
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 166), "lang", [], "any", false, false, false, 166), "string", [], "any", false, false, false, 166), "discussion", [], "any", false, false, false, 166), "posts", [], "any", false, false, false, 166), "message_options", [], "any", false, false, false, 166), "links", [], "any", false, false, false, 166), "lock", [], "any", false, false, false, 166), "html", null, true);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 170
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"open-discussion\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon open-lock active\">";
                                // line 172
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 172), "lang", [], "any", false, false, false, 172), "string", [], "any", false, false, false, 172), "discussion", [], "any", false, false, false, 172), "posts", [], "any", false, false, false, 172), "message_options", [], "any", false, false, false, 172), "links", [], "any", false, false, false, 172), "locked", [], "any", false, false, false, 172), "html", null, true);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 176
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 177
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 178
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"inner-head d-lg-none\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 178), "lang", [], "any", false, false, false, 178), "string", [], "any", false, false, false, 178), "discussion", [], "any", false, false, false, 178), "posts", [], "any", false, false, false, 178), "message_options", [], "any", false, false, false, 178), "message_moderation", [], "any", false, false, false, 178), "html", null, true);
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex d-lg-none\" data-ui=\"edit-post\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon edit\">";
                    // line 181
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 181), "lang", [], "any", false, false, false, 181), "string", [], "any", false, false, false, 181), "discussion", [], "any", false, false, false, 181), "posts", [], "any", false, false, false, 181), "buttons", [], "any", false, false, false, 181), "edit", [], "any", false, false, false, 181), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex d-lg-none\" data-ui=\"delete-post\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon trash\">";
                    // line 186
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 186), "lang", [], "any", false, false, false, 186), "string", [], "any", false, false, false, 186), "discussion", [], "any", false, false, false, 186), "posts", [], "any", false, false, false, 186), "buttons", [], "any", false, false, false, 186), "delete", [], "any", false, false, false, 186), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 190
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 191
            echo "\t\t\t\t\t\t\t\t<div class=\"inner-head\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 191), "lang", [], "any", false, false, false, 191), "string", [], "any", false, false, false, 191), "discussion", [], "any", false, false, false, 191), "posts", [], "any", false, false, false, 191), "message_options", [], "any", false, false, false, 191), "more", [], "any", false, false, false, 191), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 192
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 192), "buildLink", [0 => "shortcode", 1 => ["shortcode" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 192), "discussion", [], "any", false, false, false, 192), "shortcode", [], "any", false, false, false, 192), "toBase", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "shortcode", [], "any", false, false, false, 192)], "method", false, false, false, 192)], 2 => true], "method", false, false, false, 192), "html", null, true);
            echo "\" data-ui=\"copy-link\" class=\"notification quick-menu d-flex\" data-complete=\"0\" data-complete-text=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 192), "lang", [], "any", false, false, false, 192), "string", [], "any", false, false, false, 192), "discussion", [], "any", false, false, false, 192), "posts", [], "any", false, false, false, 192), "message_options", [], "any", false, false, false, 192), "links", [], "any", false, false, false, 192), "copy_link_success", [], "any", false, false, false, 192), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon copy\">";
            // line 194
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 194), "lang", [], "any", false, false, false, 194), "string", [], "any", false, false, false, 194), "discussion", [], "any", false, false, false, 194), "posts", [], "any", false, false, false, 194), "message_options", [], "any", false, false, false, 194), "links", [], "any", false, false, false, 194), "copy_link", [], "any", false, false, false, 194), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            // line 197
            if (($context["firstpost"] ?? null)) {
                // line 198
                echo "\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"share\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon share\">";
                // line 200
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 200), "lang", [], "any", false, false, false, 200), "string", [], "any", false, false, false, 200), "discussion", [], "any", false, false, false, 200), "posts", [], "any", false, false, false, 200), "buttons", [], "any", false, false, false, 200), "share", [], "any", false, false, false, 200), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            }
            // line 204
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"extra-button pt-2 pb-2 text-center\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<hr>
\t\t\t\t<div hook-action=\"{Mention:App-domEvent-discussionpost-text}\" class=\"discussion-text\">
\t\t\t\t\t";
            // line 211
            if (($context["firstpost"] ?? null)) {
                // line 212
                echo "\t\t\t\t\t    <article class=\"discussion-body app-bbcode-content\">
\t\t\t\t\t        ";
                // line 214
                echo "\t\t\t\t\t\t        ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 214), "renderer", [], "any", false, false, false, 214), "bbcode", [], "any", false, false, false, 214), "Parse", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 214)], "method", false, false, false, 214);
                echo "
\t\t\t\t\t        ";
                // line 216
                echo "\t\t\t\t\t\t</article>
\t\t\t\t\t";
            } else {
                // line 218
                echo "\t\t\t\t\t    ";
                // line 219
                echo "\t\t\t\t\t        ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 219), "renderer", [], "any", false, false, false, 219), "bbcode", [], "any", false, false, false, 219), "Parse", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 219)], "method", false, false, false, 219);
                echo "
\t\t\t\t        ";
                // line 221
                echo "\t\t\t\t\t";
            }
            // line 222
            echo "\t\t\t\t</div>
\t\t\t\t<div class=\"post-attachment-area\">
\t\t\t\t    ";
            // line 224
            $this->loadTemplate("updateAttachments.tpl", "macro.posts.tpl", 224)->display($context);
            // line 225
            echo "\t\t\t\t</div>
\t\t\t\t<div class=\"post-append d-flex flex-lg-row flex-column align-items-baseline\">
\t\t\t\t    ";
            // line 227
            $this->loadTemplate("updateLike.tpl", "macro.posts.tpl", 227)->display($context);
            // line 228
            echo "\t\t\t\t    ";
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "lastedit_userid", [], "any", false, false, false, 228), 0))) {
                // line 229
                echo "\t\t\t\t\t    <div class=\"post-edit align-items-baseline order-2 mt-4 ml-lg-auto\">
\t\t\t\t\t\t    ";
                // line 230
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 230), "user", [], "any", false, false, false, 230), "link", [], "any", false, false, false, 230), "setUser", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "lastedit_userid", [], "any", false, false, false, 230)], "method", false, false, false, 230), "html", null, true);
                echo "
\t\t\t\t\t\t    <span>";
                // line 231
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 231), "lang", [], "any", false, false, false, 231), "parse", [], "any", false, false, false, 231), "Parse", [0 => "discussion.posts.edit.text", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 231), "user", [], "any", false, false, false, 231), "link", [], "any", false, false, false, 231), "getLink", [], "method", false, false, false, 231), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 231), "date", [], "any", false, false, false, 231), "toHumanReadable", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "lastedit_date", [], "any", false, false, false, 231)], "method", false, false, false, 231)], "method", false, false, false, 231);
                echo "</span>
\t\t\t\t\t\t    ";
                // line 232
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 232), "user", [], "any", false, false, false, 232), "link", [], "any", false, false, false, 232), "unsetUser", [], "method", false, false, false, 232), "html", null, true);
                echo "
\t\t\t\t\t    </div>
\t\t\t\t    ";
            }
            // line 235
            echo "\t\t\t    </div>
\t\t\t\t<hr>
\t\t\t\t<div class=\"discussion-manage mb-2 d-flex\">
\t\t\t\t\t<div class=\"discuss-info d-none d-md-flex\">
\t\t\t\t\t\t";
            // line 239
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 239), "loggedIn", [], "method", false, false, false, 239)) {
                // line 240
                echo "\t\t\t\t\t\t    <div>
\t\t\t\t\t\t\t    <a data-ui=\"report-post\" class=\"report-button\" href=\"#\">";
                // line 241
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 241), "lang", [], "any", false, false, false, 241), "string", [], "any", false, false, false, 241), "discussion", [], "any", false, false, false, 241), "posts", [], "any", false, false, false, 241), "buttons", [], "any", false, false, false, 241), "report", [], "any", false, false, false, 241), "html", null, true);
                echo "</a>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    ";
                // line 243
                if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "user_id", [], "any", false, false, false, 243) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 243), "user_id", [], "any", false, false, false, 243)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 243), "is_admin", [], "any", false, false, false, 243))) {
                    // line 244
                    echo "\t\t\t\t\t\t    \t<div>
\t\t\t\t\t\t    \t\t<a data-ui=\"delete-post\" class=\"delete-button\" href=\"#\">";
                    // line 245
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 245), "lang", [], "any", false, false, false, 245), "string", [], "any", false, false, false, 245), "discussion", [], "any", false, false, false, 245), "posts", [], "any", false, false, false, 245), "buttons", [], "any", false, false, false, 245), "delete", [], "any", false, false, false, 245), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t    \t<div>
\t\t\t\t\t\t    \t\t<a data-ui=\"edit-post\" class=\"edit-button\" href=\"#\">";
                    // line 248
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 248), "lang", [], "any", false, false, false, 248), "string", [], "any", false, false, false, 248), "discussion", [], "any", false, false, false, 248), "posts", [], "any", false, false, false, 248), "buttons", [], "any", false, false, false, 248), "edit", [], "any", false, false, false, 248), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t    ";
                }
                // line 251
                echo "\t\t\t\t\t    ";
            }
            // line 252
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"discuss-info d-flex ml-lg-auto ml-sm-0\">
\t\t\t\t\t\t";
            // line 254
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 254), "loggedIn", [], "method", false, false, false, 254)) {
                // line 255
                echo "\t\t\t\t\t\t    <div>
\t\t\t\t\t\t\t    ";
                // line 256
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 256), "isUserLikePost", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_id", [], "any", false, false, false, 256), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 256), "user_id", [], "any", false, false, false, 256)], "method", false, false, false, 256)) {
                    // line 257
                    echo "\t\t\t\t\t\t\t    \t";
                    $context["reaction"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 257), "isUserLikePost", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_id", [], "any", false, false, false, 257), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 257), "user_id", [], "any", false, false, false, 257)], "method", false, false, false, 257), "reaction", [], "any", false, false, false, 257);
                    // line 258
                    echo "\t\t\t\t\t\t\t        <a class=\"like-button d-flex align-items-center reaction ";
                    echo twig_escape_filter($this->env, ($context["reaction"] ?? null), "html", null, true);
                    echo "\" data-ui=\"take-like-post\" data-text=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 258), "lang", [], "any", false, false, false, 258), "string", [], "any", false, false, false, 258), "discussion", [], "any", false, false, false, 258), "posts", [], "any", false, false, false, 258), "buttons", [], "any", false, false, false, 258), "like", [], "any", false, false, false, 258), "html", null, true);
                    echo "\" data-toggle-text=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 258), "lang", [], "any", false, false, false, 258), "string", [], "any", false, false, false, 258), "discussion", [], "any", false, false, false, 258), "posts", [], "any", false, false, false, 258), "buttons", [], "any", false, false, false, 258), "take_like", [], "any", false, false, false, 258), "html", null, true);
                    echo "\" href=\"#\">
\t\t\t\t\t\t\t        \t";
                    // line 259
                    if ((($context["reaction"] ?? null) === "like")) {
                        // line 260
                        echo "\t\t\t\t\t\t\t\t\t\t    <span>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 260), "lang", [], "any", false, false, false, 260), "string", [], "any", false, false, false, 260), "discussion", [], "any", false, false, false, 260), "posts", [], "any", false, false, false, 260), "buttons", [], "any", false, false, false, 260), "take_like", [], "any", false, false, false, 260), "html", null, true);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 262
                        echo "\t\t\t\t\t\t\t\t\t\t    <span>";
                        echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 262), "lang", [], "any", false, false, false, 262), "string", [], "any", false, false, false, 262), "discussion", [], "any", false, false, false, 262), "posts", [], "any", false, false, false, 262), "reaction", [], "any", false, false, false, 262)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["reaction"] ?? null)] ?? null) : null), "html", null, true);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 264
                    echo "\t\t\t\t\t\t\t        \t<div class=\"reaction-box shadow d-none\">
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon like\" data-ui=\"like-post\" data-reaction=\"like\">
\t\t\t\t\t\t\t\t    \t\t\t<label>";
                    // line 266
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 266), "lang", [], "any", false, false, false, 266), "string", [], "any", false, false, false, 266), "discussion", [], "any", false, false, false, 266), "posts", [], "any", false, false, false, 266), "reaction", [], "any", false, false, false, 266), "like", [], "any", false, false, false, 266), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon love\" data-ui=\"like-post\" data-reaction=\"love\">
\t\t\t\t\t\t\t\t    \t\t\t<label>";
                    // line 269
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 269), "lang", [], "any", false, false, false, 269), "string", [], "any", false, false, false, 269), "discussion", [], "any", false, false, false, 269), "posts", [], "any", false, false, false, 269), "reaction", [], "any", false, false, false, 269), "love", [], "any", false, false, false, 269), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon haha\" data-ui=\"like-post\" data-reaction=\"haha\">
\t\t\t\t\t\t\t\t    \t\t\t<label>";
                    // line 272
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 272), "lang", [], "any", false, false, false, 272), "string", [], "any", false, false, false, 272), "discussion", [], "any", false, false, false, 272), "posts", [], "any", false, false, false, 272), "reaction", [], "any", false, false, false, 272), "haha", [], "any", false, false, false, 272), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon wow\" data-ui=\"like-post\" data-reaction=\"wow\">
\t\t\t\t\t\t\t\t    \t\t\t<label>";
                    // line 275
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 275), "lang", [], "any", false, false, false, 275), "string", [], "any", false, false, false, 275), "discussion", [], "any", false, false, false, 275), "posts", [], "any", false, false, false, 275), "reaction", [], "any", false, false, false, 275), "wow", [], "any", false, false, false, 275), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon sad\" data-ui=\"like-post\" data-reaction=\"sad\">
\t\t\t\t\t\t\t\t    \t\t\t<label>";
                    // line 278
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 278), "lang", [], "any", false, false, false, 278), "string", [], "any", false, false, false, 278), "discussion", [], "any", false, false, false, 278), "posts", [], "any", false, false, false, 278), "reaction", [], "any", false, false, false, 278), "sad", [], "any", false, false, false, 278), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon angry\" data-ui=\"like-post\" data-reaction=\"angry\">
\t\t\t\t\t\t\t\t    \t\t\t<label>";
                    // line 281
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 281), "lang", [], "any", false, false, false, 281), "string", [], "any", false, false, false, 281), "discussion", [], "any", false, false, false, 281), "posts", [], "any", false, false, false, 281), "reaction", [], "any", false, false, false, 281), "angry", [], "any", false, false, false, 281), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"reaction-icon dislike\" data-ui=\"like-post\" data-reaction=\"dislike\">
\t\t\t\t\t\t\t\t    \t\t\t<label>";
                    // line 284
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 284), "lang", [], "any", false, false, false, 284), "string", [], "any", false, false, false, 284), "discussion", [], "any", false, false, false, 284), "posts", [], "any", false, false, false, 284), "reaction", [], "any", false, false, false, 284), "dislike", [], "any", false, false, false, 284), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t\t\t    </a>
\t\t\t\t\t\t\t    ";
                } else {
                    // line 289
                    echo "\t\t\t\t\t\t\t\t    <a role=\"button\" class=\"like-button d-flex align-items-center\" data-ui=\"like-post\" data-text=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 289), "lang", [], "any", false, false, false, 289), "string", [], "any", false, false, false, 289), "discussion", [], "any", false, false, false, 289), "posts", [], "any", false, false, false, 289), "buttons", [], "any", false, false, false, 289), "like", [], "any", false, false, false, 289), "html", null, true);
                    echo "\" data-toggle-text=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 289), "lang", [], "any", false, false, false, 289), "string", [], "any", false, false, false, 289), "discussion", [], "any", false, false, false, 289), "posts", [], "any", false, false, false, 289), "buttons", [], "any", false, false, false, 289), "take_like", [], "any", false, false, false, 289), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t    \t<span>";
                    // line 290
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 290), "lang", [], "any", false, false, false, 290), "string", [], "any", false, false, false, 290), "discussion", [], "any", false, false, false, 290), "posts", [], "any", false, false, false, 290), "buttons", [], "any", false, false, false, 290), "like", [], "any", false, false, false, 290), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t    \t<div class=\"reaction-box shadow\">
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon like\" data-ui=\"like-post\" data-reaction=\"like\">
\t\t\t\t\t\t\t\t    \t\t\t<label>";
                    // line 293
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 293), "lang", [], "any", false, false, false, 293), "string", [], "any", false, false, false, 293), "discussion", [], "any", false, false, false, 293), "posts", [], "any", false, false, false, 293), "reaction", [], "any", false, false, false, 293), "like", [], "any", false, false, false, 293), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon love\" data-ui=\"like-post\" data-reaction=\"love\">
\t\t\t\t\t\t\t\t    \t\t\t<label>";
                    // line 296
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 296), "lang", [], "any", false, false, false, 296), "string", [], "any", false, false, false, 296), "discussion", [], "any", false, false, false, 296), "posts", [], "any", false, false, false, 296), "reaction", [], "any", false, false, false, 296), "love", [], "any", false, false, false, 296), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon haha\" data-ui=\"like-post\" data-reaction=\"haha\">
\t\t\t\t\t\t\t\t    \t\t\t<label>";
                    // line 299
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 299), "lang", [], "any", false, false, false, 299), "string", [], "any", false, false, false, 299), "discussion", [], "any", false, false, false, 299), "posts", [], "any", false, false, false, 299), "reaction", [], "any", false, false, false, 299), "haha", [], "any", false, false, false, 299), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon wow\" data-ui=\"like-post\" data-reaction=\"wow\">
\t\t\t\t\t\t\t\t    \t\t\t<label>";
                    // line 302
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 302), "lang", [], "any", false, false, false, 302), "string", [], "any", false, false, false, 302), "discussion", [], "any", false, false, false, 302), "posts", [], "any", false, false, false, 302), "reaction", [], "any", false, false, false, 302), "wow", [], "any", false, false, false, 302), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon sad\" data-ui=\"like-post\" data-reaction=\"sad\">
\t\t\t\t\t\t\t\t    \t\t\t<label>";
                    // line 305
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 305), "lang", [], "any", false, false, false, 305), "string", [], "any", false, false, false, 305), "discussion", [], "any", false, false, false, 305), "posts", [], "any", false, false, false, 305), "reaction", [], "any", false, false, false, 305), "sad", [], "any", false, false, false, 305), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon angry\" data-ui=\"like-post\" data-reaction=\"angry\">
\t\t\t\t\t\t\t\t    \t\t\t<label>";
                    // line 308
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 308), "lang", [], "any", false, false, false, 308), "string", [], "any", false, false, false, 308), "discussion", [], "any", false, false, false, 308), "posts", [], "any", false, false, false, 308), "reaction", [], "any", false, false, false, 308), "angry", [], "any", false, false, false, 308), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"reaction-icon dislike\" data-ui=\"like-post\" data-reaction=\"dislike\">
\t\t\t\t\t\t\t\t    \t\t\t<label>";
                    // line 311
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 311), "lang", [], "any", false, false, false, 311), "string", [], "any", false, false, false, 311), "discussion", [], "any", false, false, false, 311), "posts", [], "any", false, false, false, 311), "reaction", [], "any", false, false, false, 311), "dislike", [], "any", false, false, false, 311), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t\t\t    </a>
\t\t\t\t\t\t\t    ";
                }
                // line 316
                echo "\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t";
                // line 317
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "discussion", [], "any", false, false, false, 317), "is_open", [], "any", false, false, false, 317)) {
                    // line 318
                    echo "\t\t\t\t\t\t        <div>
\t\t\t\t\t\t\t        <a data-ui=\"post-quote\" class=\"quote-button\" href=\"#\">";
                    // line 319
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 319), "lang", [], "any", false, false, false, 319), "string", [], "any", false, false, false, 319), "discussion", [], "any", false, false, false, 319), "posts", [], "any", false, false, false, 319), "buttons", [], "any", false, false, false, 319), "reply", [], "any", false, false, false, 319), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t";
                } else {
                    // line 322
                    echo "\t\t\t\t\t\t\t    <div>
\t\t\t\t\t\t\t\t    <div title=\"";
                    // line 323
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 323), "lang", [], "any", false, false, false, 323), "string", [], "any", false, false, false, 323), "discussion", [], "any", false, false, false, 323), "posts", [], "any", false, false, false, 323), "buttons", [], "any", false, false, false, 323), "grey_button", [], "any", false, false, false, 323), "html", null, true);
                    echo "\" class=\"grey-button toggle-tooltip\"></div>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t";
                }
                // line 326
                echo "\t\t\t\t\t\t";
            } else {
                // line 327
                echo "\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a data-ui=\"login-attempt\" class=\"like-button\" href=\"#\">";
                // line 328
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 328), "lang", [], "any", false, false, false, 328), "string", [], "any", false, false, false, 328), "discussion", [], "any", false, false, false, 328), "posts", [], "any", false, false, false, 328), "buttons", [], "any", false, false, false, 328), "like", [], "any", false, false, false, 328), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 331
            echo "\t\t\t\t\t\t";
            if (($context["firstpost"] ?? null)) {
                // line 332
                echo "\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a data-ui=\"share\" class=\"share-button\" href=\"#\" role=\"button\">";
                // line 333
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 333), "lang", [], "any", false, false, false, 333), "string", [], "any", false, false, false, 333), "discussion", [], "any", false, false, false, 333), "posts", [], "any", false, false, false, 333), "buttons", [], "any", false, false, false, 333), "share", [], "any", false, false, false, 333), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 336
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-none reaction-popover-container\" data-title=\"Paylaş\">
\t\t\t\t\t\t<div class=\"d-flex reaction-content\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a class=\"icon like\" data-ui=\"like-post\" data-reaction=\"like\" href=\"#\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 344
            if (($context["firstpost"] ?? null)) {
                // line 345
                echo "\t\t\t\t\t\t<div class=\"d-none share-popover-container\" data-title=\"Paylaş\">
\t\t\t\t\t\t\t<div class=\"d-flex share-content\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a title=\"Facebook\" class=\"app-share-button icon facebook\" href=\"https://www.facebook.com/sharer.php?u=";
                // line 348
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 348), "site_url", [], "any", false, false, false, 348), "html", null, true);
                echo "/d/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "discussion_id", [], "any", false, false, false, 348), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\BuildSeoLink']->BuildSeoLinkExtension(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 348)), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a title=\"Twitter\" class=\"app-share-button icon twitter\" href=\"https://twitter.com/intent/tweet?url=";
                // line 351
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 351), "site_url", [], "any", false, false, false, 351), "html", null, true);
                echo "/d/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "discussion_id", [], "any", false, false, false, 351), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\BuildSeoLink']->BuildSeoLinkExtension(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 351)), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a title=\"Reddit\" class=\"app-share-button icon reddit\" href=\"https://reddit.com/submit?url=";
                // line 354
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 354), "site_url", [], "any", false, false, false, 354), "html", null, true);
                echo "/d/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "discussion_id", [], "any", false, false, false, 354), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\BuildSeoLink']->BuildSeoLinkExtension(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 354)), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a title=\"Pinterest\" class=\"app-share-button icon pinterest\" href=\"https://pinterest.com/pin/create/bookmarklet/?url=";
                // line 357
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 357), "site_url", [], "any", false, false, false, 357), "html", null, true);
                echo "/d/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "discussion_id", [], "any", false, false, false, 357), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\BuildSeoLink']->BuildSeoLinkExtension(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 357)), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a title=\"WhatsApp\" class=\"app-share-button icon whatsapp\" href=\"https://api.whatsapp.com/send?text=";
                // line 360
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 360), "site_url", [], "any", false, false, false, 360), "html", null, true);
                echo "/d/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "discussion_id", [], "any", false, false, false, 360), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\BuildSeoLink']->BuildSeoLinkExtension(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 360)), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a title=\"Telegram\" class=\"app-share-button icon telegram\" href=\"https://t.me/share/url?url=";
                // line 363
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 363), "site_url", [], "any", false, false, false, 363), "html", null, true);
                echo "/d/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "discussion_id", [], "any", false, false, false, 363), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\BuildSeoLink']->BuildSeoLinkExtension(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 363)), "html", null, true);
                echo "&text=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 363), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 368
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"app-device-area mb-4 ml-lg-3 text-center text-lg-left\">
\t\t";
            // line 373
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 373), "device", [], "any", false, false, false, 373), "setDeviceJson", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "device", [], "any", false, false, false, 373)], "method", false, false, false, 373), "html", null, true);
            echo "
\t\t<span class=\"device-icon ";
            // line 374
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 374), "device", [], "any", false, false, false, 374), "getHtmlIconName", [], "method", false, false, false, 374), "html", null, true);
            echo "\"></span>
\t\t<span class=\"text-muted align-middle\">";
            // line 375
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 375), "lang", [], "any", false, false, false, 375), "parse", [], "any", false, false, false, 375), "parse", [0 => "discussion.posts.device.text", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 375), "device", [], "any", false, false, false, 375), "getClient", [], "method", false, false, false, 375)], "method", false, false, false, 375);
            echo "</span>
\t</div>
\t";
            // line 377
            if (($context["firstpost"] ?? null)) {
                // line 378
                echo "\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "is_open", [], "any", false, false, false, 378)) {
                    // line 379
                    echo "\t\t\t";
                    $macros["editor"] = $this->loadTemplate("macro.editor.tpl", "macro.posts.tpl", 379)->unwrap();
                    // line 380
                    echo "\t\t    ";
                    echo twig_call_macro($macros["editor"], "macro_editor", ["app-create-discussion-post", false], 380, $context, $this->getSourceContext());
                    echo "
\t\t";
                } else {
                    // line 382
                    echo "\t\t\t<div class=\"text-center text-dark mb-3\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 382), "lang", [], "any", false, false, false, 382), "string", [], "any", false, false, false, 382), "discussion", [], "any", false, false, false, 382), "locked_text", [], "any", false, false, false, 382), "html", null, true);
                    echo "</div>
\t\t";
                }
                // line 384
                echo "\t\t<div class=\"app-post-manage d-flex mb-4\">
\t\t\t<div class=\"app-order-discussion-post dropdown\">
\t\t\t\t";
                // line 386
                if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 386), "getDiscussionPostCount", [], "method", false, false, false, 386), 1))) {
                    // line 387
                    echo "\t\t\t\t\t<button class=\"btn btn-app-dd no-anim-ui icon order-newest dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 387), "lang", [], "any", false, false, false, 387), "string", [], "any", false, false, false, 387), "container", [], "any", false, false, false, 387), "order", [], "any", false, false, false, 387), "new_message", [], "any", false, false, false, 387), "html", null, true);
                    echo "</button>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-left custom-menu custom-menu-md shadow animate slideIn\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span>";
                    // line 391
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 391), "lang", [], "any", false, false, false, 391), "string", [], "any", false, false, false, 391), "container", [], "any", false, false, false, 391), "order", [], "any", false, false, false, 391), "title", [], "any", false, false, false, 391), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex active\" data-ui=\"order-discussion-posts\" data-order=\"newest\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t<span>";
                    // line 397
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 397), "lang", [], "any", false, false, false, 397), "string", [], "any", false, false, false, 397), "container", [], "any", false, false, false, 397), "order", [], "any", false, false, false, 397), "new_message", [], "any", false, false, false, 397), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"order-discussion-posts\" data-order=\"top-likes\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t<span>";
                    // line 402
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 402), "lang", [], "any", false, false, false, 402), "string", [], "any", false, false, false, 402), "container", [], "any", false, false, false, 402), "order", [], "any", false, false, false, 402), "top_likes", [], "any", false, false, false, 402), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"order-discussion-posts\" data-order=\"oldest\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t<span>";
                    // line 407
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 407), "lang", [], "any", false, false, false, 407), "string", [], "any", false, false, false, 407), "container", [], "any", false, false, false, 407), "order", [], "any", false, false, false, 407), "oldest", [], "any", false, false, false, 407), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                } else {
                    // line 413
                    echo "\t\t\t\t\t<button class=\"btn btn-app-dd no-anim-ui icon order-newest dropdown-toggle disabled\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 413), "lang", [], "any", false, false, false, 413), "string", [], "any", false, false, false, 413), "container", [], "any", false, false, false, 413), "order", [], "any", false, false, false, 413), "new_message", [], "any", false, false, false, 413), "html", null, true);
                    echo "</button>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-left custom-menu custom-menu-md shadow animate slideIn\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span>";
                    // line 417
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 417), "lang", [], "any", false, false, false, 417), "string", [], "any", false, false, false, 417), "container", [], "any", false, false, false, 417), "order", [], "any", false, false, false, 417), "title", [], "any", false, false, false, 417), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex active\" data-ui=\"order-discussion-posts\" data-order=\"newest\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t<span>";
                    // line 423
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 423), "lang", [], "any", false, false, false, 423), "string", [], "any", false, false, false, 423), "container", [], "any", false, false, false, 423), "order", [], "any", false, false, false, 423), "new_message", [], "any", false, false, false, 423), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"order-discussion-posts\" data-order=\"top-likes\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t<span>";
                    // line 428
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 428), "lang", [], "any", false, false, false, 428), "string", [], "any", false, false, false, 428), "container", [], "any", false, false, false, 428), "order", [], "any", false, false, false, 428), "top_likes", [], "any", false, false, false, 428), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"order-discussion-posts\" data-order=\"oldest\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t<span>";
                    // line 433
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 433), "lang", [], "any", false, false, false, 433), "string", [], "any", false, false, false, 433), "container", [], "any", false, false, false, 433), "order", [], "any", false, false, false, 433), "oldest", [], "any", false, false, false, 433), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 439
                echo "\t\t\t</div>
\t\t\t<button class=\"post-refresh ml-4\" data-ui=\"discussion-post-refresher\"></button>
\t\t\t<div class=\"align-self-center h5 mb-0 ml-auto text-dark\">";
                // line 441
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 441), "lang", [], "any", false, false, false, 441), "parse", [], "any", false, false, false, 441), "Parse", [0 => "discussion.first_post.posts", 1 => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 441), "getDiscussionPostCount", [], "method", false, false, false, 441) - 1)], "method", false, false, false, 441), "html", null, true);
                echo "</div>
\t\t</div>
\t";
            }
            // line 444
            echo "\t";
            if (($context["firstpost"] ?? null)) {
                // line 445
                echo "\t\t";
                if ((-1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 445), "getDiscussionPostCount", [], "method", false, false, false, 445), 2))) {
                    // line 446
                    echo "\t\t    ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 446), "loggedIn", [], "method", false, false, false, 446)) {
                        // line 447
                        echo "\t\t\t    <div class=\"no-post d-block\">
\t\t\t\t    <span>";
                        // line 448
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 448), "lang", [], "any", false, false, false, 448), "string", [], "any", false, false, false, 448), "container", [], "any", false, false, false, 448), "no_post", [], "any", false, false, false, 448), "none", [], "any", false, false, false, 448), "html", null, true);
                        echo "</span>
\t\t\t\t    <p data-ui=\"show-editor\">";
                        // line 449
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 449), "lang", [], "any", false, false, false, 449), "string", [], "any", false, false, false, 449), "container", [], "any", false, false, false, 449), "no_post", [], "any", false, false, false, 449), "new_post", [], "any", false, false, false, 449), "html", null, true);
                        echo "</p>
\t\t\t   </div>
\t\t    ";
                    } else {
                        // line 452
                        echo "\t\t\t    <div class=\"no-post d-block\">
\t\t\t\t    <span>";
                        // line 453
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 453), "lang", [], "any", false, false, false, 453), "string", [], "any", false, false, false, 453), "container", [], "any", false, false, false, 453), "no_post", [], "any", false, false, false, 453), "none", [], "any", false, false, false, 453), "html", null, true);
                        echo "</span>
\t\t\t\t    <p data-ui=\"show-editor\">";
                        // line 454
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 454), "lang", [], "any", false, false, false, 454), "string", [], "any", false, false, false, 454), "container", [], "any", false, false, false, 454), "no_post", [], "any", false, false, false, 454), "new_post", [], "any", false, false, false, 454), "html", null, true);
                        echo "</p>
\t\t\t    </div>
\t\t    ";
                    }
                    // line 457
                    echo "\t    ";
                }
                // line 458
                echo "\t";
            }
            // line 459
            echo "</div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "macro.posts.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1084 => 459,  1081 => 458,  1078 => 457,  1072 => 454,  1068 => 453,  1065 => 452,  1059 => 449,  1055 => 448,  1052 => 447,  1049 => 446,  1046 => 445,  1043 => 444,  1037 => 441,  1033 => 439,  1024 => 433,  1016 => 428,  1008 => 423,  999 => 417,  991 => 413,  982 => 407,  974 => 402,  966 => 397,  957 => 391,  949 => 387,  947 => 386,  943 => 384,  937 => 382,  931 => 380,  928 => 379,  925 => 378,  923 => 377,  918 => 375,  914 => 374,  910 => 373,  903 => 368,  889 => 363,  879 => 360,  869 => 357,  859 => 354,  849 => 351,  839 => 348,  834 => 345,  832 => 344,  822 => 336,  816 => 333,  813 => 332,  810 => 331,  804 => 328,  801 => 327,  798 => 326,  792 => 323,  789 => 322,  783 => 319,  780 => 318,  778 => 317,  775 => 316,  767 => 311,  761 => 308,  755 => 305,  749 => 302,  743 => 299,  737 => 296,  731 => 293,  725 => 290,  718 => 289,  710 => 284,  704 => 281,  698 => 278,  692 => 275,  686 => 272,  680 => 269,  674 => 266,  670 => 264,  664 => 262,  658 => 260,  656 => 259,  647 => 258,  644 => 257,  642 => 256,  639 => 255,  637 => 254,  633 => 252,  630 => 251,  624 => 248,  618 => 245,  615 => 244,  613 => 243,  608 => 241,  605 => 240,  603 => 239,  597 => 235,  591 => 232,  587 => 231,  583 => 230,  580 => 229,  577 => 228,  575 => 227,  571 => 225,  569 => 224,  565 => 222,  562 => 221,  557 => 219,  555 => 218,  551 => 216,  546 => 214,  543 => 212,  541 => 211,  532 => 204,  525 => 200,  521 => 198,  519 => 197,  513 => 194,  506 => 192,  501 => 191,  498 => 190,  491 => 186,  483 => 181,  476 => 178,  473 => 177,  470 => 176,  463 => 172,  459 => 170,  452 => 166,  448 => 164,  445 => 163,  437 => 158,  433 => 156,  426 => 152,  422 => 150,  420 => 149,  414 => 146,  407 => 143,  404 => 142,  401 => 141,  399 => 140,  393 => 137,  389 => 135,  382 => 131,  378 => 129,  375 => 128,  368 => 124,  360 => 122,  353 => 118,  345 => 116,  342 => 115,  340 => 114,  333 => 110,  326 => 106,  321 => 104,  314 => 101,  308 => 99,  302 => 97,  300 => 96,  296 => 95,  290 => 91,  283 => 87,  277 => 85,  275 => 84,  269 => 81,  264 => 79,  258 => 76,  252 => 74,  249 => 73,  246 => 72,  239 => 68,  231 => 66,  224 => 62,  216 => 60,  214 => 59,  208 => 56,  200 => 54,  197 => 53,  194 => 52,  192 => 51,  188 => 49,  176 => 44,  166 => 41,  156 => 38,  153 => 37,  151 => 36,  146 => 34,  139 => 30,  131 => 25,  128 => 24,  122 => 22,  116 => 20,  114 => 19,  110 => 18,  107 => 17,  102 => 15,  98 => 13,  90 => 7,  78 => 5,  58 => 3,  55 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro posts(item, loop, firstpost = false, string = false) %}
\t{% if firstpost %}
\t\t<div hook-action=\"{Mention:App-domEvent-discussionfirstpost}\" class=\"post first-post\" data-date=\"{{ app.timer.date.getFullDate(string.discussion.dateline) }}\" data-item=\"1\" data-post-id=\"{{ item.post_id }}\" data-discussion-id=\"{{ item.discussion_id }}\" data-forum-id=\"{{ item.forum_id }}\" data-user-id=\"{{ item.user_id }}\" data-post-count=\"{{ string.post.getDiscussionPostCount() }}\" data-last-post-id=\"{{ string.post.getDiscussionLastPost() }}\" data-shortcode=\"{{ app.sub.discussion.shortcode.toBase(item.shortcode) }}\">
\t{% else %}
\t    <div hook-action=\"{Mention:App-domEvent-discussionposts}\" class=\"post\" data-date=\"{{ app.timer.date.getFullDate(item.dateline) }}\" data-item=\"\" data-post-id=\"{{ item.post_id }}\" data-user-id=\"{{ item.user_id }}\" data-shortcode=\"{{ app.sub.discussion.shortcode.toBase(item.shortcode) }}\">
\t{% endif %}
\t<div class=\"app-post app-discussion bg-white shadow rounded\">
\t\t<div class=\"progress d-none\">
\t\t\t<div class=\"indeterminate\"></div>
\t\t</div>
\t\t<div class=\"post-layout mt-2 mb-3\">
\t\t\t<div class=\"post-user\">
\t\t\t\t{{ app.sub.user.link.setUser(item.user_id) }}
\t\t\t\t{% autoescape 'html' %}
\t\t\t\t\t{{ app.sub.user.link.getLinkWithProfilePicture()|raw }}
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
\t\t\t\t<div class=\"discussion-post-user\">
\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t<a class=\"text-dark dropdown-toggle\" role=\"button\" id=\"dropdownMenuLink\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ item.username }}</a>
\t\t\t\t\t\t<div class=\"dropdown-menu custom-menu post-user-menu animate slideIn shadow p-0\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span>{{ app.sub.lang.string.container.quick_menu }}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% if app.visitor.is_admin %}
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<a title=\"{{ app.sub.lang.string.discussion.posts.quick_menu.buttons.edit }}\" href=\"{{ app.phrase.buildLink('adminUsers', {}) }}?editUser={{ item.user_id }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user-edit\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a title=\"{{ app.sub.lang.string.discussion.posts.quick_menu.buttons.flag }}\" href=\"{{ app.phrase.buildLink('adminUsers', {}) }}?flagUser={{ item.user_id }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-exclamation-triangle\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a title=\"{{ app.sub.lang.string.discussion.posts.quick_menu.buttons.ban }}\" href=\"{{ app.phrase.buildLink('adminUsers', {}) }}?banUser={{ item.user_id }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user-slash\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"scrollable\">
\t\t\t\t\t\t\t\t{% if app.user.loggedIn() %}
\t\t\t\t\t\t\t\t\t{% if not item.user_id is same as(app.visitor.user_id) %}
\t\t\t\t\t\t\t\t\t\t{% if app.string.profile.isUserHasFriendship(app.visitor.user_id, item.user_id, 1) %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"quick-remove-friend\" data-text=\"{{ app.sub.lang.string.discussion.posts.quick_menu.links.add_as_friend }}\" data-complete-text=\"{{ app.sub.lang.string.discussion.posts.quick_menu.links.request_send_friend }}\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon add-friend\">{{ app.sub.lang.string.discussion.posts.quick_menu.links.request_send_friend }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% elseif app.string.profile.isUserHasFriendship(app.visitor.user_id, item.user_id, 0) %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"quick-add-as-friend\" data-text=\"{{ app.sub.lang.string.discussion.posts.quick_menu.links.add_as_friend }}\" data-complete-text=\"{{ app.sub.lang.string.discussion.posts.quick_menu.links.request_send_friend }}\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon add-friend\">{{ app.sub.lang.string.discussion.posts.quick_menu.links.remove_from_list }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"quick-add-as-friend\" data-text=\"{{ app.sub.lang.string.discussion.posts.quick_menu.links.add_as_friend }}\" data-complete-text=\"{{ app.sub.lang.string.discussion.posts.quick_menu.links.request_send_friend }}\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon add-friend\">{{ app.sub.lang.string.discussion.posts.quick_menu.links.add_as_friend }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" href=\"{{ app.phrase.buildLink('profile', {'username': item.username, 'user_id': item.user_id}) }}\">
\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon user\">{{ app.sub.lang.string.discussion.posts.quick_menu.links.profile }}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" href=\"{{ app.phrase.buildLink('profile', {'username': item.username, 'user_id': item.user_id, 'tab': 'posts'}) }}\">
\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon post\">{{ app.sub.lang.string.discussion.posts.quick_menu.links.posts }}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{% if app.user.loggedIn() %}
\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" href=\"{{ app.phrase.buildLink('messages', {'section': 'new', 'id': item.user_id}) }}\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon message\">{{ app.sub.lang.string.discussion.posts.quick_menu.links.message }}</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"extra-button pt-2 pb-2 text-center\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{{ app.sub.user.link.setUser(item.user_id) }}
\t\t\t\t\t    {% if app.sub.user.link.isAdmin() %}
\t\t\t\t\t        <span class=\"d-block\">{{ app.sub.user.link.getUsertitle()|raw }}</span>
\t\t\t\t\t    {% else %}
\t\t\t\t\t    \t<span class=\"d-block\">{{ app.sub.user.link.getUsertitle()|striptags }}</span>
\t\t\t\t\t    {% endif %}
\t\t\t\t\t{{ app.sub.user.link.unsetUser() }}
\t\t\t\t</div>
\t\t\t\t<div class=\"post-control d-flex align-items-center\">
\t\t\t\t\t<span class=\"text-muted mr-3\">{{ app.timer.date.toHumanReadable(item.dateline) }}</span>
\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t<a title=\"{{ app.sub.lang.string.discussion.posts.message_options.title }}\" class=\"text-dark dropdown-toggle\" role=\"button\" id=\"dropdownMenuLink\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right custom-menu post-user-menu animate slideIn shadow p-0\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span>{{ app.sub.lang.string.discussion.posts.message_options.title }}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"scrollable\">
\t\t\t\t\t\t\t\t{% if app.user.loggedIn() %}
\t\t\t\t\t\t\t\t\t{% if string.post.isUserBookmarkPost(item.post_id, app.visitor.user_id) %}
\t\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"post-bookmark-undo\" data-text=\"{{ app.sub.lang.string.discussion.posts.message_options.links.bookmark }}\" data-toggle-text=\"{{ app.sub.lang.string.discussion.posts.message_options.links.bookmark_saved }}\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon bookmark active\">{{ app.sub.lang.string.discussion.posts.message_options.links.bookmark_saved }}</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"post-bookmark\" data-text=\"{{ app.sub.lang.string.discussion.posts.message_options.links.bookmark }}\" data-toggle-text=\"{{ app.sub.lang.string.discussion.posts.message_options.links.bookmark_saved }}\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon bookmark\">{{ app.sub.lang.string.discussion.posts.message_options.links.bookmark }}</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% if not firstpost %}
\t\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"mark-as-helpful\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon check\">{{ app.sub.lang.string.discussion.posts.message_options.links.mark_helpful }}</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex d-md-none\" data-ui=\"report-post\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon report\">{{ app.sub.lang.string.discussion.posts.buttons.report }}</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% if item.user_id is same as(app.visitor.user_id) or app.visitor.is_admin %}
\t\t\t\t\t\t\t\t\t\t{% if firstpost %}
\t\t\t\t\t\t\t\t\t\t\t{% if app.visitor.is_admin %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner-head\">{{ app.sub.lang.string.discussion.posts.message_options.moderation }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"move-discussion\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon move\">{{ app.sub.lang.string.discussion.posts.message_options.links.move }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% if item.is_sticky %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"un-pin-discussion\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon pin active\">{{ app.sub.lang.string.discussion.posts.message_options.links.pinned }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"pin-discussion\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon pin\">{{ app.sub.lang.string.discussion.posts.message_options.links.pin }}</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if item.is_open %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"lock-discussion\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon lock\">{{ app.sub.lang.string.discussion.posts.message_options.links.lock }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"open-discussion\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon open-lock active\">{{ app.sub.lang.string.discussion.posts.message_options.links.locked }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t<div class=\"inner-head d-lg-none\">{{ app.sub.lang.string.discussion.posts.message_options.message_moderation }}</div>
\t\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex d-lg-none\" data-ui=\"edit-post\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon edit\">{{ app.sub.lang.string.discussion.posts.buttons.edit }}</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex d-lg-none\" data-ui=\"delete-post\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon trash\">{{ app.sub.lang.string.discussion.posts.buttons.delete }}</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<div class=\"inner-head\">{{ app.sub.lang.string.discussion.posts.message_options.more }}</div>
\t\t\t\t\t\t\t\t<a href=\"{{ app.phrase.buildLink('shortcode', {'shortcode': app.sub.discussion.shortcode.toBase(item.shortcode)}, true) }}\" data-ui=\"copy-link\" class=\"notification quick-menu d-flex\" data-complete=\"0\" data-complete-text=\"{{ app.sub.lang.string.discussion.posts.message_options.links.copy_link_success }}\">
\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon copy\">{{ app.sub.lang.string.discussion.posts.message_options.links.copy_link }}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{% if firstpost %}
\t\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"share\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon share\">{{ app.sub.lang.string.discussion.posts.buttons.share }}</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"extra-button pt-2 pb-2 text-center\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<hr>
\t\t\t\t<div hook-action=\"{Mention:App-domEvent-discussionpost-text}\" class=\"discussion-text\">
\t\t\t\t\t{% if firstpost %}
\t\t\t\t\t    <article class=\"discussion-body app-bbcode-content\">
\t\t\t\t\t        {% autoescape false %}
\t\t\t\t\t\t        {{ app.sub.renderer.bbcode.Parse(item.content)|raw }}
\t\t\t\t\t        {% endautoescape %}
\t\t\t\t\t\t</article>
\t\t\t\t\t{% else %}
\t\t\t\t\t    {% autoescape false %}
\t\t\t\t\t        {{ app.sub.renderer.bbcode.Parse(item.content)|raw }}
\t\t\t\t        {% endautoescape %}
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t<div class=\"post-attachment-area\">
\t\t\t\t    {% include 'updateAttachments.tpl' %}
\t\t\t\t</div>
\t\t\t\t<div class=\"post-append d-flex flex-lg-row flex-column align-items-baseline\">
\t\t\t\t    {% include 'updateLike.tpl' %}
\t\t\t\t    {% if item.lastedit_userid > 0 %}
\t\t\t\t\t    <div class=\"post-edit align-items-baseline order-2 mt-4 ml-lg-auto\">
\t\t\t\t\t\t    {{ app.sub.user.link.setUser(item.lastedit_userid) }}
\t\t\t\t\t\t    <span>{{ app.sub.lang.parse.Parse('discussion.posts.edit.text', app.sub.user.link.getLink()|raw, app.timer.date.toHumanReadable(item.lastedit_date))|raw }}</span>
\t\t\t\t\t\t    {{ app.sub.user.link.unsetUser() }}
\t\t\t\t\t    </div>
\t\t\t\t    {% endif %}
\t\t\t    </div>
\t\t\t\t<hr>
\t\t\t\t<div class=\"discussion-manage mb-2 d-flex\">
\t\t\t\t\t<div class=\"discuss-info d-none d-md-flex\">
\t\t\t\t\t\t{% if app.user.loggedIn() %}
\t\t\t\t\t\t    <div>
\t\t\t\t\t\t\t    <a data-ui=\"report-post\" class=\"report-button\" href=\"#\">{{ app.sub.lang.string.discussion.posts.buttons.report }}</a>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    {% if item.user_id is same as(app.visitor.user_id) or app.visitor.is_admin %}
\t\t\t\t\t\t    \t<div>
\t\t\t\t\t\t    \t\t<a data-ui=\"delete-post\" class=\"delete-button\" href=\"#\">{{ app.sub.lang.string.discussion.posts.buttons.delete }}</a>
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t    \t<div>
\t\t\t\t\t\t    \t\t<a data-ui=\"edit-post\" class=\"edit-button\" href=\"#\">{{ app.sub.lang.string.discussion.posts.buttons.edit }}</a>
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t    {% endif %}
\t\t\t\t\t    {% endif %}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"discuss-info d-flex ml-lg-auto ml-sm-0\">
\t\t\t\t\t\t{% if app.user.loggedIn() %}
\t\t\t\t\t\t    <div>
\t\t\t\t\t\t\t    {% if string.post.isUserLikePost(item.post_id, app.visitor.user_id) %}
\t\t\t\t\t\t\t    \t{% set reaction = string.post.isUserLikePost(item.post_id, app.visitor.user_id).reaction %}
\t\t\t\t\t\t\t        <a class=\"like-button d-flex align-items-center reaction {{ reaction }}\" data-ui=\"take-like-post\" data-text=\"{{ app.sub.lang.string.discussion.posts.buttons.like }}\" data-toggle-text=\"{{ app.sub.lang.string.discussion.posts.buttons.take_like }}\" href=\"#\">
\t\t\t\t\t\t\t        \t{% if reaction is same as('like') %}
\t\t\t\t\t\t\t\t\t\t    <span>{{ app.sub.lang.string.discussion.posts.buttons.take_like }}</span>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t    <span>{{ app.sub.lang.string.discussion.posts.reaction[reaction] }}</span>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t        \t<div class=\"reaction-box shadow d-none\">
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon like\" data-ui=\"like-post\" data-reaction=\"like\">
\t\t\t\t\t\t\t\t    \t\t\t<label>{{ app.sub.lang.string.discussion.posts.reaction.like }}</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon love\" data-ui=\"like-post\" data-reaction=\"love\">
\t\t\t\t\t\t\t\t    \t\t\t<label>{{ app.sub.lang.string.discussion.posts.reaction.love }}</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon haha\" data-ui=\"like-post\" data-reaction=\"haha\">
\t\t\t\t\t\t\t\t    \t\t\t<label>{{ app.sub.lang.string.discussion.posts.reaction.haha }}</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon wow\" data-ui=\"like-post\" data-reaction=\"wow\">
\t\t\t\t\t\t\t\t    \t\t\t<label>{{ app.sub.lang.string.discussion.posts.reaction.wow }}</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon sad\" data-ui=\"like-post\" data-reaction=\"sad\">
\t\t\t\t\t\t\t\t    \t\t\t<label>{{ app.sub.lang.string.discussion.posts.reaction.sad }}</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon angry\" data-ui=\"like-post\" data-reaction=\"angry\">
\t\t\t\t\t\t\t\t    \t\t\t<label>{{ app.sub.lang.string.discussion.posts.reaction.angry }}</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"reaction-icon dislike\" data-ui=\"like-post\" data-reaction=\"dislike\">
\t\t\t\t\t\t\t\t    \t\t\t<label>{{ app.sub.lang.string.discussion.posts.reaction.dislike }}</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t\t\t    </a>
\t\t\t\t\t\t\t    {% else %}
\t\t\t\t\t\t\t\t    <a role=\"button\" class=\"like-button d-flex align-items-center\" data-ui=\"like-post\" data-text=\"{{ app.sub.lang.string.discussion.posts.buttons.like }}\" data-toggle-text=\"{{ app.sub.lang.string.discussion.posts.buttons.take_like }}\">
\t\t\t\t\t\t\t\t    \t<span>{{ app.sub.lang.string.discussion.posts.buttons.like }}</span>
\t\t\t\t\t\t\t\t    \t<div class=\"reaction-box shadow\">
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon like\" data-ui=\"like-post\" data-reaction=\"like\">
\t\t\t\t\t\t\t\t    \t\t\t<label>{{ app.sub.lang.string.discussion.posts.reaction.like }}</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon love\" data-ui=\"like-post\" data-reaction=\"love\">
\t\t\t\t\t\t\t\t    \t\t\t<label>{{ app.sub.lang.string.discussion.posts.reaction.love }}</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon haha\" data-ui=\"like-post\" data-reaction=\"haha\">
\t\t\t\t\t\t\t\t    \t\t\t<label>{{ app.sub.lang.string.discussion.posts.reaction.haha }}</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon wow\" data-ui=\"like-post\" data-reaction=\"wow\">
\t\t\t\t\t\t\t\t    \t\t\t<label>{{ app.sub.lang.string.discussion.posts.reaction.wow }}</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon sad\" data-ui=\"like-post\" data-reaction=\"sad\">
\t\t\t\t\t\t\t\t    \t\t\t<label>{{ app.sub.lang.string.discussion.posts.reaction.sad }}</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon angry\" data-ui=\"like-post\" data-reaction=\"angry\">
\t\t\t\t\t\t\t\t    \t\t\t<label>{{ app.sub.lang.string.discussion.posts.reaction.angry }}</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"reaction-icon dislike\" data-ui=\"like-post\" data-reaction=\"dislike\">
\t\t\t\t\t\t\t\t    \t\t\t<label>{{ app.sub.lang.string.discussion.posts.reaction.dislike }}</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t\t\t    </a>
\t\t\t\t\t\t\t    {% endif %}
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t{% if string.discussion.is_open %}
\t\t\t\t\t\t        <div>
\t\t\t\t\t\t\t        <a data-ui=\"post-quote\" class=\"quote-button\" href=\"#\">{{ app.sub.lang.string.discussion.posts.buttons.reply }}</a>
\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t    <div>
\t\t\t\t\t\t\t\t    <div title=\"{{ app.sub.lang.string.discussion.posts.buttons.grey_button }}\" class=\"grey-button toggle-tooltip\"></div>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a data-ui=\"login-attempt\" class=\"like-button\" href=\"#\">{{ app.sub.lang.string.discussion.posts.buttons.like }}</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if firstpost %}
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a data-ui=\"share\" class=\"share-button\" href=\"#\" role=\"button\">{{ app.sub.lang.string.discussion.posts.buttons.share }}</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-none reaction-popover-container\" data-title=\"Paylaş\">
\t\t\t\t\t\t<div class=\"d-flex reaction-content\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a class=\"icon like\" data-ui=\"like-post\" data-reaction=\"like\" href=\"#\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% if firstpost %}
\t\t\t\t\t\t<div class=\"d-none share-popover-container\" data-title=\"Paylaş\">
\t\t\t\t\t\t\t<div class=\"d-flex share-content\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a title=\"Facebook\" class=\"app-share-button icon facebook\" href=\"https://www.facebook.com/sharer.php?u={{ app.settings.site_url }}/d/{{ item.discussion_id }}-{{ item.title|buildSeoLink }}\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a title=\"Twitter\" class=\"app-share-button icon twitter\" href=\"https://twitter.com/intent/tweet?url={{ app.settings.site_url }}/d/{{ item.discussion_id }}-{{ item.title|buildSeoLink }}\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a title=\"Reddit\" class=\"app-share-button icon reddit\" href=\"https://reddit.com/submit?url={{ app.settings.site_url }}/d/{{ item.discussion_id }}-{{ item.title|buildSeoLink }}\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a title=\"Pinterest\" class=\"app-share-button icon pinterest\" href=\"https://pinterest.com/pin/create/bookmarklet/?url={{ app.settings.site_url }}/d/{{ item.discussion_id }}-{{ item.title|buildSeoLink }}\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a title=\"WhatsApp\" class=\"app-share-button icon whatsapp\" href=\"https://api.whatsapp.com/send?text={{ app.settings.site_url }}/d/{{ item.discussion_id }}-{{ item.title|buildSeoLink }}\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a title=\"Telegram\" class=\"app-share-button icon telegram\" href=\"https://t.me/share/url?url={{ app.settings.site_url }}/d/{{ item.discussion_id }}-{{ item.title|buildSeoLink }}&text={{ item.title }}\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"app-device-area mb-4 ml-lg-3 text-center text-lg-left\">
\t\t{{ app.sub.device.setDeviceJson(item.device) }}
\t\t<span class=\"device-icon {{ app.sub.device.getHtmlIconName() }}\"></span>
\t\t<span class=\"text-muted align-middle\">{{ app.sub.lang.parse.parse('discussion.posts.device.text', app.sub.device.getClient())|raw }}</span>
\t</div>
\t{% if firstpost %}
\t\t{% if item.is_open %}
\t\t\t{% import 'macro.editor.tpl' as editor %}
\t\t    {{ editor.editor('app-create-discussion-post', false) }}
\t\t{% else %}
\t\t\t<div class=\"text-center text-dark mb-3\">{{ app.sub.lang.string.discussion.locked_text }}</div>
\t\t{% endif %}
\t\t<div class=\"app-post-manage d-flex mb-4\">
\t\t\t<div class=\"app-order-discussion-post dropdown\">
\t\t\t\t{% if string.post.getDiscussionPostCount() > 1 %}
\t\t\t\t\t<button class=\"btn btn-app-dd no-anim-ui icon order-newest dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ app.sub.lang.string.container.order.new_message }}</button>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-left custom-menu custom-menu-md shadow animate slideIn\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span>{{ app.sub.lang.string.container.order.title }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex active\" data-ui=\"order-discussion-posts\" data-order=\"newest\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t<span>{{ app.sub.lang.string.container.order.new_message }}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"order-discussion-posts\" data-order=\"top-likes\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t<span>{{ app.sub.lang.string.container.order.top_likes }}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"order-discussion-posts\" data-order=\"oldest\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t<span>{{ app.sub.lang.string.container.order.oldest }}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% else %}
\t\t\t\t\t<button class=\"btn btn-app-dd no-anim-ui icon order-newest dropdown-toggle disabled\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" disabled=\"disabled\">{{ app.sub.lang.string.container.order.new_message }}</button>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-left custom-menu custom-menu-md shadow animate slideIn\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span>{{ app.sub.lang.string.container.order.title }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex active\" data-ui=\"order-discussion-posts\" data-order=\"newest\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t<span>{{ app.sub.lang.string.container.order.new_message }}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"order-discussion-posts\" data-order=\"top-likes\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t<span>{{ app.sub.lang.string.container.order.top_likes }}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"order-discussion-posts\" data-order=\"oldest\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t<span>{{ app.sub.lang.string.container.order.oldest }}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<button class=\"post-refresh ml-4\" data-ui=\"discussion-post-refresher\"></button>
\t\t\t<div class=\"align-self-center h5 mb-0 ml-auto text-dark\">{{ app.sub.lang.parse.Parse('discussion.first_post.posts', (string.post.getDiscussionPostCount() - 1)) }}</div>
\t\t</div>
\t{% endif %}
\t{% if firstpost %}
\t\t{% if string.post.getDiscussionPostCount() < 2 %}
\t\t    {% if app.user.loggedIn() %}
\t\t\t    <div class=\"no-post d-block\">
\t\t\t\t    <span>{{ app.sub.lang.string.container.no_post.none }}</span>
\t\t\t\t    <p data-ui=\"show-editor\">{{ app.sub.lang.string.container.no_post.new_post }}</p>
\t\t\t   </div>
\t\t    {% else %}
\t\t\t    <div class=\"no-post d-block\">
\t\t\t\t    <span>{{ app.sub.lang.string.container.no_post.none }}</span>
\t\t\t\t    <p data-ui=\"show-editor\">{{ app.sub.lang.string.container.no_post.new_post }}</p>
\t\t\t    </div>
\t\t    {% endif %}
\t    {% endif %}
\t{% endif %}
</div>
{% endmacro %}", "macro.posts.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Macros\\macro.posts.tpl");
    }
}
