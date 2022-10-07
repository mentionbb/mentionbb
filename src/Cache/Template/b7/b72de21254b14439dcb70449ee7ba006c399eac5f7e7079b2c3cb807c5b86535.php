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

/* discussion.tpl */
class __TwigTemplate_b733cf3645dd5ab72829946bc086d6da65fefd09aad3777568ad1699eb26a65a extends Template
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
        $this->parent = $this->loadTemplate("container.tpl", "discussion.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "discussion";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t<aside class=\"col-sm-10 pr-4\">
\t\t<div class=\"app-discuss-sub-menu d-flex flex-column flex-lg-row mb-lg-3 mb-sm-0 w-100\">
\t\t\t";
        // line 8
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "discussion", [], "any", false, false, false, 8), "is_open", [], "any", false, false, false, 8) === "1")) {
            // line 9
            echo "\t\t\t\t<div class=\"order-2 order-sm-1\">
\t\t\t\t\t";
            // line 10
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 10), "loggedIn", [], "method", false, false, false, 10)) {
                // line 11
                echo "\t\t\t\t\t    <button type=\"button\" class=\"btn btn-app-discussion icon reply d-lg-block d-none\" data-ui=\"show-editor\" data-scroll=\"true\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 11), "lang", [], "any", false, false, false, 11), "string", [], "any", false, false, false, 11), "container", [], "any", false, false, false, 11), "buttons", [], "any", false, false, false, 11), "reply", [], "any", false, false, false, 11), "html", null, true);
                echo "</button>
\t\t\t\t\t";
            } else {
                // line 13
                echo "\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-app-discussion icon exclamation d-lg-block d-none\" data-ui=\"login-attempt\" data-scroll=\"true\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 13), "lang", [], "any", false, false, false, 13), "string", [], "any", false, false, false, 13), "container", [], "any", false, false, false, 13), "buttons", [], "any", false, false, false, 13), "reply_login", [], "any", false, false, false, 13), "html", null, true);
                echo "</button>
\t\t\t\t    ";
            }
            // line 15
            echo "\t\t\t\t</div>
\t\t\t";
        } else {
            // line 17
            echo "\t\t\t\t<div class=\"order-2 order-sm-1\">
\t\t\t\t\t <button type=\"button\" class=\"btn btn-app-discussion icon reply d-lg-block d-none\" data-scroll=\"true\" disabled>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 18), "lang", [], "any", false, false, false, 18), "string", [], "any", false, false, false, 18), "container", [], "any", false, false, false, 18), "buttons", [], "any", false, false, false, 18), "reply", [], "any", false, false, false, 18), "html", null, true);
            echo "</button>
\t\t\t\t</div>
\t\t\t";
        }
        // line 21
        echo "\t\t\t<div class=\"order-1 order-lg-2 ml-lg-auto align-self-lg-center\">
\t\t\t\t";
        // line 22
        $this->loadTemplate("usermenu_member.tpl", "discussion.tpl", 22)->display($context);
        // line 23
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"d-flex mb-3\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 28), "buildLink", [0 => "indexAction", 1 => []], "method", false, false, false, 28), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 28), "site_title", [], "any", false, false, false, 28), "html", null, true);
        echo "</a></div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 30), "buildLink", [0 => "forum", 1 => ["forum_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "discussion", [], "any", false, false, false, 30), "forum_id", [], "any", false, false, false, 30), "title" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "discussion", [], "any", false, false, false, 30), "forum_title", [], "any", false, false, false, 30)]], "method", false, false, false, 30), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "discussion", [], "any", false, false, false, 30), "forum_title", [], "any", false, false, false, 30), "html", null, true);
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 32), "render", [], "any", false, false, false, 32), "title", [], "any", false, false, false, 32), "Render", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "discussion", [], "any", false, false, false, 32), "title", [], "any", false, false, false, 32)], "method", false, false, false, 32), "html", null, true);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t<span class=\"date\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 34), "date", [], "any", false, false, false, 34), "toHumanReadable", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "discussion", [], "any", false, false, false, 34), "dateline", [], "any", false, false, false, 34)], "method", false, false, false, 34), "html", null, true);
        echo "</span>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 37
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "discussion", [], "any", false, false, false, 37), "is_sticky", [], "any", false, false, false, 37)) {
            // line 38
            echo "\t\t\t<div class=\"app-discussion-status pinned\">
\t\t\t\t<span>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 39), "lang", [], "any", false, false, false, 39), "string", [], "any", false, false, false, 39), "discussion", [], "any", false, false, false, 39), "first_post", [], "any", false, false, false, 39), "pinned", [], "any", false, false, false, 39), "html", null, true);
            echo "</span>
\t\t\t</div>
\t\t";
        }
        // line 42
        echo "\t\t";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "discussion", [], "any", false, false, false, 42), "is_open", [], "any", false, false, false, 42)) {
            // line 43
            echo "\t\t\t<div class=\"app-discussion-status locked\">
\t\t\t\t<span>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 44), "lang", [], "any", false, false, false, 44), "string", [], "any", false, false, false, 44), "discussion", [], "any", false, false, false, 44), "first_post", [], "any", false, false, false, 44), "locked", [], "any", false, false, false, 44), "html", null, true);
            echo "</span>
\t\t\t</div>
\t\t";
        }
        // line 47
        echo "\t</aside>
\t<aside class=\"col-sm-2\">
\t\t";
        // line 49
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 49), "loggedIn", [], "method", false, false, false, 49)) {
            // line 50
            echo "\t\t\t";
            if ( !twig_get_attribute($this->env, $this->source, ($context["discussion"] ?? null), "isUserSubscribeDiscussion", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 50), "user_id", [], "any", false, false, false, 50), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "discussion", [], "any", false, false, false, 50), "discussion_id", [], "any", false, false, false, 50)], "method", false, false, false, 50)) {
                // line 51
                echo "\t\t\t\t<button type=\"button\" class=\"btn btn-app-discussion icon subscription mb-2\" data-ui=\"subscribe-discussion\" data-scroll=\"true\" data-text=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 51), "lang", [], "any", false, false, false, 51), "string", [], "any", false, false, false, 51), "container", [], "any", false, false, false, 51), "buttons", [], "any", false, false, false, 51), "subscribe", [], "any", false, false, false, 51), "html", null, true);
                echo "\" data-remove-text=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 51), "lang", [], "any", false, false, false, 51), "string", [], "any", false, false, false, 51), "container", [], "any", false, false, false, 51), "buttons", [], "any", false, false, false, 51), "subscribe_remove", [], "any", false, false, false, 51), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 51), "lang", [], "any", false, false, false, 51), "string", [], "any", false, false, false, 51), "container", [], "any", false, false, false, 51), "buttons", [], "any", false, false, false, 51), "subscribe", [], "any", false, false, false, 51), "html", null, true);
                echo "</button>
\t\t\t";
            } else {
                // line 53
                echo "\t\t\t\t<button type=\"button\" class=\"btn btn-app-discussion icon subscription-remove mb-2\" data-ui=\"remove-subscribe-discussion\" data-scroll=\"true\" data-text=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 53), "lang", [], "any", false, false, false, 53), "string", [], "any", false, false, false, 53), "container", [], "any", false, false, false, 53), "buttons", [], "any", false, false, false, 53), "subscribe", [], "any", false, false, false, 53), "html", null, true);
                echo "\" data-remove-text=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 53), "lang", [], "any", false, false, false, 53), "string", [], "any", false, false, false, 53), "container", [], "any", false, false, false, 53), "buttons", [], "any", false, false, false, 53), "subscribe_remove", [], "any", false, false, false, 53), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 53), "lang", [], "any", false, false, false, 53), "string", [], "any", false, false, false, 53), "container", [], "any", false, false, false, 53), "buttons", [], "any", false, false, false, 53), "subscribe_remove", [], "any", false, false, false, 53), "html", null, true);
                echo "</button>
\t\t\t";
            }
            // line 55
            echo "\t\t";
        }
        // line 56
        echo "\t</aside>
\t<aside class=\"col-sm-10 pr-4\">
\t\t<div hook-action=\"{Mention:App-domEvent-discussion}\" class=\"app-post-container animate slideIn\">
\t\t\t";
        // line 59
        $macros["macros"] = $this->loadTemplate("macro.posts.tpl", "discussion.tpl", 59)->unwrap();
        // line 60
        echo "\t\t\t";
        echo twig_call_macro($macros["macros"], "macro_posts", [twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "discussion", [], "any", false, false, false, 60), false, true, ($context["string"] ?? null)], 60, $context, $this->getSourceContext());
        echo "
\t\t\t";
        // line 61
        $this->loadTemplate("discussion_posts.tpl", "discussion.tpl", 61)->display($context);
        // line 62
        echo "\t\t</div>
\t\t<div class=\"post-loader-spin\"></div>
\t</aside>
\t<aside class=\"col-sm-2\">
\t\t<div class=\"post-timeliner\">
\t\t\t<div data-ui=\"go-first-post\" class=\"first-post mb-2\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 67), "lang", [], "any", false, false, false, 67), "string", [], "any", false, false, false, 67), "discussion", [], "any", false, false, false, 67), "scrubber", [], "any", false, false, false, 67), "discussion_post", [], "any", false, false, false, 67), "html", null, true);
        echo "</div>
\t\t\t<div class=\"scrollable-parent\">
\t\t\t\t<div class=\"scrollbar-before\"></div>
\t\t\t\t";
        // line 70
        if (1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 70), "getDiscussionPostCount", [], "method", false, false, false, 70), 2)) {
            // line 71
            echo "\t\t\t\t\t<div class=\"scrollbar-area scrubber__scroll\">
\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t<span class=\"post-count\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 73), "getDiscussionPostCount", [], "method", false, false, false, 73), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t<span> / </span>
\t\t\t\t\t\t\t<span class=\"scrubber__index font-weight-bold text-dark\"></span>
\t\t\t\t\t\t\t<span class=\"scrubber__date d-block\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"backto-post d-none\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-sm\" data-ui=\"backto-post\" data-post-id=\"\">";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 79), "lang", [], "any", false, false, false, 79), "string", [], "any", false, false, false, 79), "container", [], "any", false, false, false, 79), "buttons", [], "any", false, false, false, 79), "back", [], "any", false, false, false, 79), "html", null, true);
            echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"scrollbar-after\"></div>
\t\t\t\t";
        } else {
            // line 84
            echo "\t\t\t\t\t<div style=\"cursor: default\" class=\"scrollbar-area scrubber__scroll no-scrollbar\">
\t\t\t\t\t\t<div style=\"background: #546168;height: 295px\" class=\"bar\"></div>
\t\t\t\t\t\t<div style=\"position: relative;top: 115px;\" class=\"info ml-3\">
\t\t\t\t\t\t\t<span class=\"post-count\">";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 87), "getDiscussionPostCount", [], "method", false, false, false, 87), "html", null, true);
            echo " /</span>
\t\t\t\t\t\t\t<span class=\"scrubber__index no-index font-weight-bold text-dark\">";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 88), "getDiscussionPostCount", [], "method", false, false, false, 88), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t<span class=\"scrubber__date d-block\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 93
        echo "\t\t\t</div>
\t\t\t<div data-ui=\"go-last-post\" class=\"last-post\">";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 94), "lang", [], "any", false, false, false, 94), "string", [], "any", false, false, false, 94), "discussion", [], "any", false, false, false, 94), "scrubber", [], "any", false, false, false, 94), "first_message", [], "any", false, false, false, 94), "html", null, true);
        echo "</div>
\t\t</div>
\t</aside>
\t";
        // line 98
        echo "\t";
        $context["meta_content"] = twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 98), "renderer", [], "any", false, false, false, 98), "bbcode", [], "any", false, false, false, 98), "ClearBBCode", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "discussion", [], "any", false, false, false, 98), "content", [], "any", false, false, false, 98), 1 => false, 2 => false], "method", false, false, false, 98), ["&nbsp;" => "", "&amp" => ""]);
        // line 99
        echo "\t<div hook-action=\"{Mention:App-domEvent-metacontents}\"
\t\tdata-title=\"";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 100), "render", [], "any", false, false, false, 100), "title", [], "any", false, false, false, 100), "Render", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "discussion", [], "any", false, false, false, 100), "title", [], "any", false, false, false, 100)], "method", false, false, false, 100), "html", null, true);
        echo "\"
\t\tdata-meta-description=\"";
        // line 101
        echo twig_escape_filter($this->env, ($context["meta_content"] ?? null), "html", null, true);
        echo "\" data-og-description=\"";
        echo twig_escape_filter($this->env, ($context["meta_content"] ?? null), "html", null, true);
        echo "\"
\t\tdata-twitter-description=\"";
        // line 102
        echo twig_escape_filter($this->env, ($context["meta_content"] ?? null), "html", null, true);
        echo "\"
\t\tdata-og-title=\"";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 103), "render", [], "any", false, false, false, 103), "title", [], "any", false, false, false, 103), "Render", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "discussion", [], "any", false, false, false, 103), "title", [], "any", false, false, false, 103)], "method", false, false, false, 103), "html", null, true);
        echo "\"
\t\tdata-twitter-title=\"";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 104), "render", [], "any", false, false, false, 104), "title", [], "any", false, false, false, 104), "Render", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "discussion", [], "any", false, false, false, 104), "title", [], "any", false, false, false, 104)], "method", false, false, false, 104), "html", null, true);
        echo "\" class=\"d-none\">
\t</div>
";
    }

    public function getTemplateName()
    {
        return "discussion.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 104,  282 => 103,  278 => 102,  272 => 101,  268 => 100,  265 => 99,  262 => 98,  256 => 94,  253 => 93,  245 => 88,  241 => 87,  236 => 84,  228 => 79,  219 => 73,  215 => 71,  213 => 70,  207 => 67,  200 => 62,  198 => 61,  193 => 60,  191 => 59,  186 => 56,  183 => 55,  173 => 53,  163 => 51,  160 => 50,  158 => 49,  154 => 47,  148 => 44,  145 => 43,  142 => 42,  136 => 39,  133 => 38,  131 => 37,  125 => 34,  120 => 32,  113 => 30,  106 => 28,  99 => 23,  97 => 22,  94 => 21,  88 => 18,  85 => 17,  81 => 15,  75 => 13,  69 => 11,  67 => 10,  64 => 9,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'container.tpl' %}

{% block app_template_name 'discussion' %}

{% block content %}
\t<aside class=\"col-sm-10 pr-4\">
\t\t<div class=\"app-discuss-sub-menu d-flex flex-column flex-lg-row mb-lg-3 mb-sm-0 w-100\">
\t\t\t{% if string.discussion.is_open is same as('1') %}
\t\t\t\t<div class=\"order-2 order-sm-1\">
\t\t\t\t\t{% if app.user.loggedIn() %}
\t\t\t\t\t    <button type=\"button\" class=\"btn btn-app-discussion icon reply d-lg-block d-none\" data-ui=\"show-editor\" data-scroll=\"true\">{{ app.sub.lang.string.container.buttons.reply }}</button>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-app-discussion icon exclamation d-lg-block d-none\" data-ui=\"login-attempt\" data-scroll=\"true\">{{ app.sub.lang.string.container.buttons.reply_login }}</button>
\t\t\t\t    {% endif %}
\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t\t<div class=\"order-2 order-sm-1\">
\t\t\t\t\t <button type=\"button\" class=\"btn btn-app-discussion icon reply d-lg-block d-none\" data-scroll=\"true\" disabled>{{ app.sub.lang.string.container.buttons.reply }}</button>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t<div class=\"order-1 order-lg-2 ml-lg-auto align-self-lg-center\">
\t\t\t\t{% include 'usermenu_member.tpl' %}
\t\t\t</div>
\t\t</div>
\t\t<div class=\"d-flex mb-3\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"{{ app.phrase.buildLink('forum', {'forum_id': string.discussion.forum_id, 'title': string.discussion.forum_title}) }}\">{{ string.discussion.forum_title }}</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>{{ app.string.render.title.Render(string.discussion.title) }}</div>
\t\t\t\t</div>
\t\t\t\t<span class=\"date\">{{ app.timer.date.toHumanReadable(string.discussion.dateline) }}</span>
\t\t\t</div>
\t\t</div>
\t\t{% if string.discussion.is_sticky %}
\t\t\t<div class=\"app-discussion-status pinned\">
\t\t\t\t<span>{{ app.sub.lang.string.discussion.first_post.pinned }}</span>
\t\t\t</div>
\t\t{% endif %}
\t\t{% if not string.discussion.is_open %}
\t\t\t<div class=\"app-discussion-status locked\">
\t\t\t\t<span>{{ app.sub.lang.string.discussion.first_post.locked }}</span>
\t\t\t</div>
\t\t{% endif %}
\t</aside>
\t<aside class=\"col-sm-2\">
\t\t{% if app.user.loggedIn() %}
\t\t\t{% if not discussion.isUserSubscribeDiscussion(app.visitor.user_id, string.discussion.discussion_id) %}
\t\t\t\t<button type=\"button\" class=\"btn btn-app-discussion icon subscription mb-2\" data-ui=\"subscribe-discussion\" data-scroll=\"true\" data-text=\"{{ app.sub.lang.string.container.buttons.subscribe }}\" data-remove-text=\"{{ app.sub.lang.string.container.buttons.subscribe_remove }}\">{{ app.sub.lang.string.container.buttons.subscribe }}</button>
\t\t\t{% else %}
\t\t\t\t<button type=\"button\" class=\"btn btn-app-discussion icon subscription-remove mb-2\" data-ui=\"remove-subscribe-discussion\" data-scroll=\"true\" data-text=\"{{ app.sub.lang.string.container.buttons.subscribe }}\" data-remove-text=\"{{ app.sub.lang.string.container.buttons.subscribe_remove }}\">{{ app.sub.lang.string.container.buttons.subscribe_remove }}</button>
\t\t\t{% endif %}
\t\t{% endif %}
\t</aside>
\t<aside class=\"col-sm-10 pr-4\">
\t\t<div hook-action=\"{Mention:App-domEvent-discussion}\" class=\"app-post-container animate slideIn\">
\t\t\t{% import 'macro.posts.tpl' as macros %}
\t\t\t{{ macros.posts(string.discussion, false, true, string) }}
\t\t\t{% include 'discussion_posts.tpl' %}
\t\t</div>
\t\t<div class=\"post-loader-spin\"></div>
\t</aside>
\t<aside class=\"col-sm-2\">
\t\t<div class=\"post-timeliner\">
\t\t\t<div data-ui=\"go-first-post\" class=\"first-post mb-2\">{{ app.sub.lang.string.discussion.scrubber.discussion_post }}</div>
\t\t\t<div class=\"scrollable-parent\">
\t\t\t\t<div class=\"scrollbar-before\"></div>
\t\t\t\t{% if string.post.getDiscussionPostCount() > 2 %}
\t\t\t\t\t<div class=\"scrollbar-area scrubber__scroll\">
\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t<span class=\"post-count\">{{ string.post.getDiscussionPostCount() }}</span>
\t\t\t\t\t\t\t<span> / </span>
\t\t\t\t\t\t\t<span class=\"scrubber__index font-weight-bold text-dark\"></span>
\t\t\t\t\t\t\t<span class=\"scrubber__date d-block\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"backto-post d-none\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-sm\" data-ui=\"backto-post\" data-post-id=\"\">{{ app.sub.lang.string.container.buttons.back }}</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"scrollbar-after\"></div>
\t\t\t\t{% else %}
\t\t\t\t\t<div style=\"cursor: default\" class=\"scrollbar-area scrubber__scroll no-scrollbar\">
\t\t\t\t\t\t<div style=\"background: #546168;height: 295px\" class=\"bar\"></div>
\t\t\t\t\t\t<div style=\"position: relative;top: 115px;\" class=\"info ml-3\">
\t\t\t\t\t\t\t<span class=\"post-count\">{{ string.post.getDiscussionPostCount() }} /</span>
\t\t\t\t\t\t\t<span class=\"scrubber__index no-index font-weight-bold text-dark\">{{ string.post.getDiscussionPostCount() }}</span>
\t\t\t\t\t\t\t<span class=\"scrubber__date d-block\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<div data-ui=\"go-last-post\" class=\"last-post\">{{ app.sub.lang.string.discussion.scrubber.first_message }}</div>
\t\t</div>
\t</aside>
\t{# This is includes meta definitions. #}
\t{% set meta_content = app.sub.renderer.bbcode.ClearBBCode(string.discussion.content, false, false)|replace({'&nbsp;': '', '&amp': ''}) %}
\t<div hook-action=\"{Mention:App-domEvent-metacontents}\"
\t\tdata-title=\"{{ app.string.render.title.Render(string.discussion.title) }}\"
\t\tdata-meta-description=\"{{ meta_content }}\" data-og-description=\"{{ meta_content }}\"
\t\tdata-twitter-description=\"{{ meta_content }}\"
\t\tdata-og-title=\"{{ app.string.render.title.Render(string.discussion.title) }}\"
\t\tdata-twitter-title=\"{{ app.string.render.title.Render(string.discussion.title) }}\" class=\"d-none\">
\t</div>
{% endblock %}", "discussion.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Discussion\\discussion.tpl");
    }
}
