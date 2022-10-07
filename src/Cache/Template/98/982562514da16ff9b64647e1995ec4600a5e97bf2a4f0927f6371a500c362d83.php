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
class __TwigTemplate_194e56fa4ef14443122c9cdb8de941853b0bae1b7538ab353d1ec3e14cbfa1f8 extends Template
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
                echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 22), "user", [], "any", false, false, false, 22), "link", [], "any", false, false, false, 22), "getUsertitle", [], "method", false, false, false, 22)), "html", null, true);
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
                echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 99), "user", [], "any", false, false, false, 99), "link", [], "any", false, false, false, 99), "getUsertitle", [], "method", false, false, false, 99)), "html", null, true);
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
\t\t\t\t\t\t<a title=\"Mesaj seçenekleri\" class=\"text-dark dropdown-toggle\" role=\"button\" id=\"dropdownMenuLink\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></a>
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 192), "buildLink", [0 => "shortcode", 1 => ["shortcode" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 192), "discussion", [], "any", false, false, false, 192), "shortcode", [], "any", false, false, false, 192), "toBase", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "shortcode", [], "any", false, false, false, 192)], "method", false, false, false, 192)]], "method", false, false, false, 192), "html", null, true);
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
\t\t\t\t<div class=\"discussion-text\">
\t\t\t\t\t";
            // line 212
            echo "\t\t\t\t\t\t";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 212), "renderer", [], "any", false, false, false, 212), "bbcode", [], "any", false, false, false, 212), "Parse", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 212)], "method", false, false, false, 212);
            echo "
\t\t\t\t\t";
            // line 214
            echo "\t\t\t\t</div>
\t\t\t\t<div class=\"post-attachment-area\">
\t\t\t\t    ";
            // line 216
            $this->loadTemplate("updateAttachments.tpl", "macro.posts.tpl", 216)->display($context);
            // line 217
            echo "\t\t\t\t</div>
\t\t\t\t<div class=\"post-append d-flex flex-lg-row flex-column align-items-baseline\">
\t\t\t\t    ";
            // line 219
            $this->loadTemplate("updateLike.tpl", "macro.posts.tpl", 219)->display($context);
            // line 220
            echo "\t\t\t\t    ";
            if (1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "lastedit_userid", [], "any", false, false, false, 220), 0)) {
                // line 221
                echo "\t\t\t\t\t    <div class=\"post-edit align-items-baseline order-2 mt-4 ml-lg-auto\">
\t\t\t\t\t\t    ";
                // line 222
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 222), "user", [], "any", false, false, false, 222), "link", [], "any", false, false, false, 222), "setUser", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "lastedit_userid", [], "any", false, false, false, 222)], "method", false, false, false, 222), "html", null, true);
                echo "
\t\t\t\t\t\t    <span>";
                // line 223
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 223), "lang", [], "any", false, false, false, 223), "parse", [], "any", false, false, false, 223), "Parse", [0 => "discussion.posts.edit.text", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 223), "user", [], "any", false, false, false, 223), "link", [], "any", false, false, false, 223), "getLink", [], "method", false, false, false, 223), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 223), "date", [], "any", false, false, false, 223), "toHumanReadable", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "lastedit_date", [], "any", false, false, false, 223)], "method", false, false, false, 223)], "method", false, false, false, 223);
                echo "</span>
\t\t\t\t\t\t    ";
                // line 224
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 224), "user", [], "any", false, false, false, 224), "link", [], "any", false, false, false, 224), "unsetUser", [], "method", false, false, false, 224), "html", null, true);
                echo "
\t\t\t\t\t    </div>
\t\t\t\t    ";
            }
            // line 227
            echo "\t\t\t    </div>
\t\t\t\t<hr>
\t\t\t\t<div class=\"discussion-manage mb-2 d-flex\">
\t\t\t\t\t<div class=\"discuss-info d-none d-md-flex\">
\t\t\t\t\t\t";
            // line 231
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 231), "loggedIn", [], "method", false, false, false, 231)) {
                // line 232
                echo "\t\t\t\t\t\t    <div>
\t\t\t\t\t\t\t    <a data-ui=\"report-post\" class=\"report-button\" href=\"#\">";
                // line 233
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 233), "lang", [], "any", false, false, false, 233), "string", [], "any", false, false, false, 233), "discussion", [], "any", false, false, false, 233), "posts", [], "any", false, false, false, 233), "buttons", [], "any", false, false, false, 233), "report", [], "any", false, false, false, 233), "html", null, true);
                echo "</a>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    ";
                // line 235
                if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "user_id", [], "any", false, false, false, 235) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 235), "user_id", [], "any", false, false, false, 235)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 235), "is_admin", [], "any", false, false, false, 235))) {
                    // line 236
                    echo "\t\t\t\t\t\t    \t<div>
\t\t\t\t\t\t    \t\t<a data-ui=\"delete-post\" class=\"delete-button\" href=\"#\">";
                    // line 237
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 237), "lang", [], "any", false, false, false, 237), "string", [], "any", false, false, false, 237), "discussion", [], "any", false, false, false, 237), "posts", [], "any", false, false, false, 237), "buttons", [], "any", false, false, false, 237), "delete", [], "any", false, false, false, 237), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t    \t<div>
\t\t\t\t\t\t    \t\t<a data-ui=\"edit-post\" class=\"edit-button\" href=\"#\">";
                    // line 240
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 240), "lang", [], "any", false, false, false, 240), "string", [], "any", false, false, false, 240), "discussion", [], "any", false, false, false, 240), "posts", [], "any", false, false, false, 240), "buttons", [], "any", false, false, false, 240), "edit", [], "any", false, false, false, 240), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t    ";
                }
                // line 243
                echo "\t\t\t\t\t    ";
            }
            // line 244
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"discuss-info d-flex ml-lg-auto ml-sm-0\">
\t\t\t\t\t\t";
            // line 246
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 246), "loggedIn", [], "method", false, false, false, 246)) {
                // line 247
                echo "\t\t\t\t\t\t    <div>
\t\t\t\t\t\t\t    ";
                // line 248
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 248), "isUserLikePost", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_id", [], "any", false, false, false, 248), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 248), "user_id", [], "any", false, false, false, 248)], "method", false, false, false, 248)) {
                    // line 249
                    echo "\t\t\t\t\t\t\t    \t";
                    $context["reaction"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 249), "isUserLikePost", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_id", [], "any", false, false, false, 249), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 249), "user_id", [], "any", false, false, false, 249)], "method", false, false, false, 249), "reaction", [], "any", false, false, false, 249);
                    // line 250
                    echo "\t\t\t\t\t\t\t        <a class=\"like-button d-flex align-items-center reaction ";
                    echo twig_escape_filter($this->env, ($context["reaction"] ?? null), "html", null, true);
                    echo "\" data-ui=\"take-like-post\" data-text=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 250), "lang", [], "any", false, false, false, 250), "string", [], "any", false, false, false, 250), "discussion", [], "any", false, false, false, 250), "posts", [], "any", false, false, false, 250), "buttons", [], "any", false, false, false, 250), "like", [], "any", false, false, false, 250), "html", null, true);
                    echo "\" data-toggle-text=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 250), "lang", [], "any", false, false, false, 250), "string", [], "any", false, false, false, 250), "discussion", [], "any", false, false, false, 250), "posts", [], "any", false, false, false, 250), "buttons", [], "any", false, false, false, 250), "take_like", [], "any", false, false, false, 250), "html", null, true);
                    echo "\" href=\"#\">
\t\t\t\t\t\t\t        \t";
                    // line 251
                    if ((($context["reaction"] ?? null) === "like")) {
                        // line 252
                        echo "\t\t\t\t\t\t\t\t\t\t    <span>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 252), "lang", [], "any", false, false, false, 252), "string", [], "any", false, false, false, 252), "discussion", [], "any", false, false, false, 252), "posts", [], "any", false, false, false, 252), "buttons", [], "any", false, false, false, 252), "take_like", [], "any", false, false, false, 252), "html", null, true);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 254
                        echo "\t\t\t\t\t\t\t\t\t\t    <span>";
                        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 254), "lang", [], "any", false, false, false, 254), "string", [], "any", false, false, false, 254), "discussion", [], "any", false, false, false, 254), "posts", [], "any", false, false, false, 254), "reaction", [], "any", false, false, false, 254)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["reaction"] ?? null)] ?? null) : null), "html", null, true);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 256
                    echo "\t\t\t\t\t\t\t        \t<div class=\"reaction-box shadow d-none\">
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon like\" data-ui=\"like-post\" data-reaction=\"like\">
\t\t\t\t\t\t\t\t    \t\t\t<label>";
                    // line 258
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 258), "lang", [], "any", false, false, false, 258), "string", [], "any", false, false, false, 258), "discussion", [], "any", false, false, false, 258), "posts", [], "any", false, false, false, 258), "reaction", [], "any", false, false, false, 258), "like", [], "any", false, false, false, 258), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon love\" data-ui=\"like-post\" data-reaction=\"love\">
\t\t\t\t\t\t\t\t    \t\t\t<label>";
                    // line 261
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 261), "lang", [], "any", false, false, false, 261), "string", [], "any", false, false, false, 261), "discussion", [], "any", false, false, false, 261), "posts", [], "any", false, false, false, 261), "reaction", [], "any", false, false, false, 261), "love", [], "any", false, false, false, 261), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon haha\" data-ui=\"like-post\" data-reaction=\"haha\">
\t\t\t\t\t\t\t\t    \t\t\t<label>";
                    // line 264
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 264), "lang", [], "any", false, false, false, 264), "string", [], "any", false, false, false, 264), "discussion", [], "any", false, false, false, 264), "posts", [], "any", false, false, false, 264), "reaction", [], "any", false, false, false, 264), "haha", [], "any", false, false, false, 264), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon wow\" data-ui=\"like-post\" data-reaction=\"wow\">
\t\t\t\t\t\t\t\t    \t\t\t<label>";
                    // line 267
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 267), "lang", [], "any", false, false, false, 267), "string", [], "any", false, false, false, 267), "discussion", [], "any", false, false, false, 267), "posts", [], "any", false, false, false, 267), "reaction", [], "any", false, false, false, 267), "wow", [], "any", false, false, false, 267), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon sad\" data-ui=\"like-post\" data-reaction=\"sad\">
\t\t\t\t\t\t\t\t    \t\t\t<label>";
                    // line 270
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 270), "lang", [], "any", false, false, false, 270), "string", [], "any", false, false, false, 270), "discussion", [], "any", false, false, false, 270), "posts", [], "any", false, false, false, 270), "reaction", [], "any", false, false, false, 270), "sad", [], "any", false, false, false, 270), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon angry\" data-ui=\"like-post\" data-reaction=\"angry\">
\t\t\t\t\t\t\t\t    \t\t\t<label>";
                    // line 273
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 273), "lang", [], "any", false, false, false, 273), "string", [], "any", false, false, false, 273), "discussion", [], "any", false, false, false, 273), "posts", [], "any", false, false, false, 273), "reaction", [], "any", false, false, false, 273), "angry", [], "any", false, false, false, 273), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t\t\t    </a>
\t\t\t\t\t\t\t    ";
                } else {
                    // line 278
                    echo "\t\t\t\t\t\t\t\t    <a role=\"button\" class=\"like-button d-flex align-items-center\" data-ui=\"like-post\" data-text=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 278), "lang", [], "any", false, false, false, 278), "string", [], "any", false, false, false, 278), "discussion", [], "any", false, false, false, 278), "posts", [], "any", false, false, false, 278), "buttons", [], "any", false, false, false, 278), "like", [], "any", false, false, false, 278), "html", null, true);
                    echo "\" data-toggle-text=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 278), "lang", [], "any", false, false, false, 278), "string", [], "any", false, false, false, 278), "discussion", [], "any", false, false, false, 278), "posts", [], "any", false, false, false, 278), "buttons", [], "any", false, false, false, 278), "take_like", [], "any", false, false, false, 278), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t    \t<span>";
                    // line 279
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 279), "lang", [], "any", false, false, false, 279), "string", [], "any", false, false, false, 279), "discussion", [], "any", false, false, false, 279), "posts", [], "any", false, false, false, 279), "buttons", [], "any", false, false, false, 279), "like", [], "any", false, false, false, 279), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t    \t<div class=\"reaction-box shadow\">
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon like\" data-ui=\"like-post\" data-reaction=\"like\">
\t\t\t\t\t\t\t\t    \t\t\t<label>";
                    // line 282
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 282), "lang", [], "any", false, false, false, 282), "string", [], "any", false, false, false, 282), "discussion", [], "any", false, false, false, 282), "posts", [], "any", false, false, false, 282), "reaction", [], "any", false, false, false, 282), "like", [], "any", false, false, false, 282), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon love\" data-ui=\"like-post\" data-reaction=\"love\">
\t\t\t\t\t\t\t\t    \t\t\t<label>";
                    // line 285
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 285), "lang", [], "any", false, false, false, 285), "string", [], "any", false, false, false, 285), "discussion", [], "any", false, false, false, 285), "posts", [], "any", false, false, false, 285), "reaction", [], "any", false, false, false, 285), "love", [], "any", false, false, false, 285), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon haha\" data-ui=\"like-post\" data-reaction=\"haha\">
\t\t\t\t\t\t\t\t    \t\t\t<label>";
                    // line 288
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 288), "lang", [], "any", false, false, false, 288), "string", [], "any", false, false, false, 288), "discussion", [], "any", false, false, false, 288), "posts", [], "any", false, false, false, 288), "reaction", [], "any", false, false, false, 288), "haha", [], "any", false, false, false, 288), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon wow\" data-ui=\"like-post\" data-reaction=\"wow\">
\t\t\t\t\t\t\t\t    \t\t\t<label>";
                    // line 291
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 291), "lang", [], "any", false, false, false, 291), "string", [], "any", false, false, false, 291), "discussion", [], "any", false, false, false, 291), "posts", [], "any", false, false, false, 291), "reaction", [], "any", false, false, false, 291), "wow", [], "any", false, false, false, 291), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon sad\" data-ui=\"like-post\" data-reaction=\"sad\">
\t\t\t\t\t\t\t\t    \t\t\t<label>";
                    // line 294
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 294), "lang", [], "any", false, false, false, 294), "string", [], "any", false, false, false, 294), "discussion", [], "any", false, false, false, 294), "posts", [], "any", false, false, false, 294), "reaction", [], "any", false, false, false, 294), "sad", [], "any", false, false, false, 294), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t\t<div class=\"reaction-icon angry\" data-ui=\"like-post\" data-reaction=\"angry\">
\t\t\t\t\t\t\t\t    \t\t\t<label>";
                    // line 297
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 297), "lang", [], "any", false, false, false, 297), "string", [], "any", false, false, false, 297), "discussion", [], "any", false, false, false, 297), "posts", [], "any", false, false, false, 297), "reaction", [], "any", false, false, false, 297), "angry", [], "any", false, false, false, 297), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t\t\t    </a>
\t\t\t\t\t\t\t    ";
                }
                // line 302
                echo "\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div>
\t\t\t\t\t\t\t    <a data-ui=\"post-quote\" class=\"quote-button\" href=\"#\">";
                // line 304
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 304), "lang", [], "any", false, false, false, 304), "string", [], "any", false, false, false, 304), "discussion", [], "any", false, false, false, 304), "posts", [], "any", false, false, false, 304), "buttons", [], "any", false, false, false, 304), "reply", [], "any", false, false, false, 304), "html", null, true);
                echo "</a>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t";
            } else {
                // line 307
                echo "\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a data-ui=\"login-attempt\" class=\"like-button\" href=\"#\">";
                // line 308
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 308), "lang", [], "any", false, false, false, 308), "string", [], "any", false, false, false, 308), "discussion", [], "any", false, false, false, 308), "posts", [], "any", false, false, false, 308), "buttons", [], "any", false, false, false, 308), "like", [], "any", false, false, false, 308), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 311
            echo "\t\t\t\t\t\t";
            if (($context["firstpost"] ?? null)) {
                // line 312
                echo "\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a data-ui=\"share\" class=\"share-button\" href=\"#\" role=\"button\">";
                // line 313
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 313), "lang", [], "any", false, false, false, 313), "string", [], "any", false, false, false, 313), "discussion", [], "any", false, false, false, 313), "posts", [], "any", false, false, false, 313), "buttons", [], "any", false, false, false, 313), "share", [], "any", false, false, false, 313), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 316
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-none reaction-popover-container\" data-title=\"Paylaş\">
\t\t\t\t\t\t<div class=\"d-flex reaction-content\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a class=\"icon like\" data-ui=\"like-post\" data-reaction=\"like\" href=\"#\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 324
            if (($context["firstpost"] ?? null)) {
                // line 325
                echo "\t\t\t\t\t\t<div class=\"d-none share-popover-container\" data-title=\"Paylaş\">
\t\t\t\t\t\t\t<div class=\"d-flex share-content\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a title=\"Facebook\" class=\"app-share-button icon facebook\" href=\"https://www.facebook.com/sharer.php?u=";
                // line 328
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 328), "site_url", [], "any", false, false, false, 328), "html", null, true);
                echo "/d/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "discussion_id", [], "any", false, false, false, 328), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\BuildSeoLink']->BuildSeoLinkExtension(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 328)), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a title=\"Twitter\" class=\"app-share-button icon twitter\" href=\"https://twitter.com/intent/tweet?url=";
                // line 331
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 331), "site_url", [], "any", false, false, false, 331), "html", null, true);
                echo "/d/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "discussion_id", [], "any", false, false, false, 331), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\BuildSeoLink']->BuildSeoLinkExtension(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 331)), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a title=\"Reddit\" class=\"app-share-button icon reddit\" href=\"https://reddit.com/submit?url=";
                // line 334
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 334), "site_url", [], "any", false, false, false, 334), "html", null, true);
                echo "/d/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "discussion_id", [], "any", false, false, false, 334), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\BuildSeoLink']->BuildSeoLinkExtension(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 334)), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a title=\"Pinterest\" class=\"app-share-button icon pinterest\" href=\"https://pinterest.com/pin/create/bookmarklet/?url=";
                // line 337
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 337), "site_url", [], "any", false, false, false, 337), "html", null, true);
                echo "/d/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "discussion_id", [], "any", false, false, false, 337), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\BuildSeoLink']->BuildSeoLinkExtension(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 337)), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a title=\"WhatsApp\" class=\"app-share-button icon whatsapp\" href=\"https://api.whatsapp.com/send?text=";
                // line 340
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 340), "site_url", [], "any", false, false, false, 340), "html", null, true);
                echo "/d/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "discussion_id", [], "any", false, false, false, 340), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\BuildSeoLink']->BuildSeoLinkExtension(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 340)), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a title=\"Telegram\" class=\"app-share-button icon telegram\" href=\"https://t.me/share/url?url=";
                // line 343
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 343), "site_url", [], "any", false, false, false, 343), "html", null, true);
                echo "/d/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "discussion_id", [], "any", false, false, false, 343), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\BuildSeoLink']->BuildSeoLinkExtension(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 343)), "html", null, true);
                echo "&text=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 343), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 348
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"app-device-area mb-4 ml-lg-3 text-center text-lg-left\">
\t\t";
            // line 353
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 353), "device", [], "any", false, false, false, 353), "setDeviceJson", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "device", [], "any", false, false, false, 353)], "method", false, false, false, 353), "html", null, true);
            echo "
\t\t<span class=\"device-icon ";
            // line 354
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 354), "device", [], "any", false, false, false, 354), "getHtmlIconName", [], "method", false, false, false, 354), "html", null, true);
            echo "\"></span>
\t\t<span class=\"text-muted align-middle\">";
            // line 355
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 355), "lang", [], "any", false, false, false, 355), "parse", [], "any", false, false, false, 355), "parse", [0 => "discussion.posts.device.text", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 355), "device", [], "any", false, false, false, 355), "getClient", [], "method", false, false, false, 355)], "method", false, false, false, 355);
            echo "</span>
\t</div>
\t";
            // line 357
            if (($context["firstpost"] ?? null)) {
                // line 358
                echo "\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "is_open", [], "any", false, false, false, 358)) {
                    // line 359
                    echo "\t\t\t";
                    $macros["editor"] = $this->loadTemplate("macro.editor.tpl", "macro.posts.tpl", 359)->unwrap();
                    // line 360
                    echo "\t\t    ";
                    echo twig_call_macro($macros["editor"], "macro_editor", ["app-create-discussion-post", false], 360, $context, $this->getSourceContext());
                    echo "
\t\t";
                } else {
                    // line 362
                    echo "\t\t\t<div class=\"text-center text-dark mb-3\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 362), "lang", [], "any", false, false, false, 362), "string", [], "any", false, false, false, 362), "discussion", [], "any", false, false, false, 362), "locked_text", [], "any", false, false, false, 362), "html", null, true);
                    echo "</div>
\t\t";
                }
                // line 364
                echo "\t\t<div class=\"app-post-manage d-flex mb-4\">
\t\t\t<div class=\"app-order-discussion-post dropdown\">
\t\t\t\t";
                // line 366
                if (1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 366), "getDiscussionPostCount", [], "method", false, false, false, 366), 1)) {
                    // line 367
                    echo "\t\t\t\t\t<button class=\"btn btn-app-dd no-anim-ui icon order-newest dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 367), "lang", [], "any", false, false, false, 367), "string", [], "any", false, false, false, 367), "container", [], "any", false, false, false, 367), "order", [], "any", false, false, false, 367), "new_message", [], "any", false, false, false, 367), "html", null, true);
                    echo "</button>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-left custom-menu custom-menu-md shadow animate slideIn\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span>";
                    // line 371
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 371), "lang", [], "any", false, false, false, 371), "string", [], "any", false, false, false, 371), "container", [], "any", false, false, false, 371), "order", [], "any", false, false, false, 371), "title", [], "any", false, false, false, 371), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex active\" data-ui=\"order-discussion-posts\" data-order=\"newest\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t<span>";
                    // line 377
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 377), "lang", [], "any", false, false, false, 377), "string", [], "any", false, false, false, 377), "container", [], "any", false, false, false, 377), "order", [], "any", false, false, false, 377), "new_message", [], "any", false, false, false, 377), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"order-discussion-posts\" data-order=\"top-likes\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t<span>";
                    // line 382
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 382), "lang", [], "any", false, false, false, 382), "string", [], "any", false, false, false, 382), "container", [], "any", false, false, false, 382), "order", [], "any", false, false, false, 382), "top_likes", [], "any", false, false, false, 382), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"order-discussion-posts\" data-order=\"oldest\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t<span>";
                    // line 387
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 387), "lang", [], "any", false, false, false, 387), "string", [], "any", false, false, false, 387), "container", [], "any", false, false, false, 387), "order", [], "any", false, false, false, 387), "oldest", [], "any", false, false, false, 387), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                } else {
                    // line 393
                    echo "\t\t\t\t\t<button class=\"btn btn-app-dd no-anim-ui icon order-newest dropdown-toggle disabled\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 393), "lang", [], "any", false, false, false, 393), "string", [], "any", false, false, false, 393), "container", [], "any", false, false, false, 393), "order", [], "any", false, false, false, 393), "new_message", [], "any", false, false, false, 393), "html", null, true);
                    echo "</button>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-left custom-menu custom-menu-md shadow animate slideIn\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span>";
                    // line 397
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 397), "lang", [], "any", false, false, false, 397), "string", [], "any", false, false, false, 397), "container", [], "any", false, false, false, 397), "order", [], "any", false, false, false, 397), "title", [], "any", false, false, false, 397), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex active\" data-ui=\"order-discussion-posts\" data-order=\"newest\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t<span>";
                    // line 403
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 403), "lang", [], "any", false, false, false, 403), "string", [], "any", false, false, false, 403), "container", [], "any", false, false, false, 403), "order", [], "any", false, false, false, 403), "new_message", [], "any", false, false, false, 403), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"order-discussion-posts\" data-order=\"top-likes\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t<span>";
                    // line 408
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 408), "lang", [], "any", false, false, false, 408), "string", [], "any", false, false, false, 408), "container", [], "any", false, false, false, 408), "order", [], "any", false, false, false, 408), "top_likes", [], "any", false, false, false, 408), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"order-discussion-posts\" data-order=\"oldest\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t<span>";
                    // line 413
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 413), "lang", [], "any", false, false, false, 413), "string", [], "any", false, false, false, 413), "container", [], "any", false, false, false, 413), "order", [], "any", false, false, false, 413), "oldest", [], "any", false, false, false, 413), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 419
                echo "\t\t\t</div>
\t\t\t<button class=\"post-refresh ml-4\" data-ui=\"discussion-post-refresher\"></button>
\t\t\t<div class=\"align-self-center h5 mb-0 ml-auto text-dark\">";
                // line 421
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 421), "lang", [], "any", false, false, false, 421), "parse", [], "any", false, false, false, 421), "Parse", [0 => "discussion.first_post.posts", 1 => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 421), "getDiscussionPostCount", [], "method", false, false, false, 421) - 1)], "method", false, false, false, 421), "html", null, true);
                echo "</div>
\t\t</div>
\t";
            }
            // line 424
            echo "\t";
            if (($context["firstpost"] ?? null)) {
                // line 425
                echo "\t\t";
                if (-1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 425), "getDiscussionPostCount", [], "method", false, false, false, 425), 2)) {
                    // line 426
                    echo "\t\t    ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 426), "loggedIn", [], "method", false, false, false, 426)) {
                        // line 427
                        echo "\t\t\t    <div class=\"no-post d-block\">
\t\t\t\t    <span>";
                        // line 428
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 428), "lang", [], "any", false, false, false, 428), "string", [], "any", false, false, false, 428), "container", [], "any", false, false, false, 428), "no_post", [], "any", false, false, false, 428), "none", [], "any", false, false, false, 428), "html", null, true);
                        echo "</span>
\t\t\t\t    <p data-ui=\"show-editor\">";
                        // line 429
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 429), "lang", [], "any", false, false, false, 429), "string", [], "any", false, false, false, 429), "container", [], "any", false, false, false, 429), "no_post", [], "any", false, false, false, 429), "new_post", [], "any", false, false, false, 429), "html", null, true);
                        echo "</p>
\t\t\t   </div>
\t\t    ";
                    } else {
                        // line 432
                        echo "\t\t\t    <div class=\"no-post d-block\">
\t\t\t\t    <span>";
                        // line 433
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 433), "lang", [], "any", false, false, false, 433), "string", [], "any", false, false, false, 433), "container", [], "any", false, false, false, 433), "no_post", [], "any", false, false, false, 433), "none", [], "any", false, false, false, 433), "html", null, true);
                        echo "</span>
\t\t\t\t    <p data-ui=\"show-editor\">";
                        // line 434
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 434), "lang", [], "any", false, false, false, 434), "string", [], "any", false, false, false, 434), "container", [], "any", false, false, false, 434), "no_post", [], "any", false, false, false, 434), "new_post", [], "any", false, false, false, 434), "html", null, true);
                        echo "</p>
\t\t\t    </div>
\t\t    ";
                    }
                    // line 437
                    echo "\t    ";
                }
                // line 438
                echo "\t";
            }
            // line 439
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
        return array (  1034 => 439,  1031 => 438,  1028 => 437,  1022 => 434,  1018 => 433,  1015 => 432,  1009 => 429,  1005 => 428,  1002 => 427,  999 => 426,  996 => 425,  993 => 424,  987 => 421,  983 => 419,  974 => 413,  966 => 408,  958 => 403,  949 => 397,  941 => 393,  932 => 387,  924 => 382,  916 => 377,  907 => 371,  899 => 367,  897 => 366,  893 => 364,  887 => 362,  881 => 360,  878 => 359,  875 => 358,  873 => 357,  868 => 355,  864 => 354,  860 => 353,  853 => 348,  839 => 343,  829 => 340,  819 => 337,  809 => 334,  799 => 331,  789 => 328,  784 => 325,  782 => 324,  772 => 316,  766 => 313,  763 => 312,  760 => 311,  754 => 308,  751 => 307,  745 => 304,  741 => 302,  733 => 297,  727 => 294,  721 => 291,  715 => 288,  709 => 285,  703 => 282,  697 => 279,  690 => 278,  682 => 273,  676 => 270,  670 => 267,  664 => 264,  658 => 261,  652 => 258,  648 => 256,  642 => 254,  636 => 252,  634 => 251,  625 => 250,  622 => 249,  620 => 248,  617 => 247,  615 => 246,  611 => 244,  608 => 243,  602 => 240,  596 => 237,  593 => 236,  591 => 235,  586 => 233,  583 => 232,  581 => 231,  575 => 227,  569 => 224,  565 => 223,  561 => 222,  558 => 221,  555 => 220,  553 => 219,  549 => 217,  547 => 216,  543 => 214,  538 => 212,  529 => 204,  522 => 200,  518 => 198,  516 => 197,  510 => 194,  503 => 192,  498 => 191,  495 => 190,  488 => 186,  480 => 181,  473 => 178,  470 => 177,  467 => 176,  460 => 172,  456 => 170,  449 => 166,  445 => 164,  442 => 163,  434 => 158,  430 => 156,  423 => 152,  419 => 150,  417 => 149,  411 => 146,  404 => 143,  401 => 142,  398 => 141,  396 => 140,  390 => 137,  386 => 135,  379 => 131,  375 => 129,  372 => 128,  365 => 124,  357 => 122,  350 => 118,  342 => 116,  339 => 115,  337 => 114,  330 => 110,  321 => 104,  314 => 101,  308 => 99,  302 => 97,  300 => 96,  296 => 95,  290 => 91,  283 => 87,  277 => 85,  275 => 84,  269 => 81,  264 => 79,  258 => 76,  252 => 74,  249 => 73,  246 => 72,  239 => 68,  231 => 66,  224 => 62,  216 => 60,  214 => 59,  208 => 56,  200 => 54,  197 => 53,  194 => 52,  192 => 51,  188 => 49,  176 => 44,  166 => 41,  156 => 38,  153 => 37,  151 => 36,  146 => 34,  139 => 30,  131 => 25,  128 => 24,  122 => 22,  116 => 20,  114 => 19,  110 => 18,  107 => 17,  102 => 15,  98 => 13,  90 => 7,  78 => 5,  58 => 3,  55 => 2,  39 => 1,);
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
\t\t\t\t\t\t<a title=\"Mesaj seçenekleri\" class=\"text-dark dropdown-toggle\" role=\"button\" id=\"dropdownMenuLink\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></a>
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
\t\t\t\t\t\t\t\t<a href=\"{{ app.phrase.buildLink('shortcode', {'shortcode': app.sub.discussion.shortcode.toBase(item.shortcode)}) }}\" data-ui=\"copy-link\" class=\"notification quick-menu d-flex\" data-complete=\"0\" data-complete-text=\"{{ app.sub.lang.string.discussion.posts.message_options.links.copy_link_success }}\">
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
\t\t\t\t<div class=\"discussion-text\">
\t\t\t\t\t{% autoescape false %}
\t\t\t\t\t\t{{ app.sub.renderer.bbcode.Parse(item.content)|raw }}
\t\t\t\t\t{% endautoescape %}
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
\t\t\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t\t\t    </a>
\t\t\t\t\t\t\t    {% endif %}
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div>
\t\t\t\t\t\t\t    <a data-ui=\"post-quote\" class=\"quote-button\" href=\"#\">{{ app.sub.lang.string.discussion.posts.buttons.reply }}</a>
\t\t\t\t\t\t    </div>
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
