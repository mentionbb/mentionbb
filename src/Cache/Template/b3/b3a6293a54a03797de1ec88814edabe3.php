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

/* messages.tpl */
class __TwigTemplate_6a7252a928be2be1b2a7bf1890fef56e extends Template
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
        $this->parent = $this->loadTemplate("container.tpl", "messages.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "messages";
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
\t\t\t\t\t<div><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 11), "buildLink", [0 => "messages", 1 => []], "method", false, false, false, 11), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 11), "lang", [], "any", false, false, false, 11), "string", [], "any", false, false, false, 11), "messages", [], "any", false, false, false, 11), "breadcrumb", [], "any", false, false, false, 11), "messages", [], "any", false, false, false, 11), "html", null, true);
        echo "</a></div>
\t\t\t\t\t<div>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 12), "lang", [], "any", false, false, false, 12), "string", [], "any", false, false, false, 12), "messages", [], "any", false, false, false, 12), "breadcrumb", [], "any", false, false, false, 12), "conversations", [], "any", false, false, false, 12), "html", null, true);
        echo "</div>
\t\t\t\t\t";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "conversation", [], "any", true, true, false, 13)) {
            // line 14
            echo "\t\t\t\t\t    <div>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "conversation", [], "any", false, false, false, 14), "title", [], "any", false, false, false, 14), "html", null, true);
            echo "</div>
\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
($context["app"] ?? null), "request", [], "any", false, false, false, 15), "getPathInfo", [], "method", false, false, false, 15) == "/messages/new")) {
            // line 16
            echo "\t\t\t\t\t\t<div>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 16), "lang", [], "any", false, false, false, 16), "string", [], "any", false, false, false, 16), "messages", [], "any", false, false, false, 16), "breadcrumb", [], "any", false, false, false, 16), "new", [], "any", false, false, false, 16), "html", null, true);
            echo "</div>
\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 17
($context["app"] ?? null), "request", [], "any", false, false, false, 17), "getPathInfo", [], "method", false, false, false, 17) == "/messages")) {
            // line 18
            echo "\t\t\t\t\t\t<div>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 18), "lang", [], "any", false, false, false, 18), "string", [], "any", false, false, false, 18), "messages", [], "any", false, false, false, 18), "breadcrumb", [], "any", false, false, false, 18), "all", [], "any", false, false, false, 18), "html", null, true);
            echo "</div>
\t\t\t\t\t";
        }
        // line 20
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t";
        // line 24
        $this->loadTemplate("usermenu_member.tpl", "messages.tpl", 24)->display($context);
        // line 25
        echo "\t\t</div>
\t</div>
\t<aside class=\"col-sm-3 mb-4 pr-4\">
\t\t<div class=\"mb-3\">
\t\t\t<button type=\"button\" class=\"btn btn-app-discussion icon plus\" data-ui=\"send-message\" data-text=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 29), "lang", [], "any", false, false, false, 29), "string", [], "any", false, false, false, 29), "messages", [], "any", false, false, false, 29), "breadcrumb", [], "any", false, false, false, 29), "new", [], "any", false, false, false, 29), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 29), "lang", [], "any", false, false, false, 29), "string", [], "any", false, false, false, 29), "discussion", [], "any", false, false, false, 29), "posts", [], "any", false, false, false, 29), "quick_menu", [], "any", false, false, false, 29), "links", [], "any", false, false, false, 29), "message", [], "any", false, false, false, 29), "html", null, true);
        echo "</button>
\t\t</div>
\t\t";
        // line 31
        $macros["macros"] = $this->loadTemplate("macro.messages_list.tpl", "messages.tpl", 31)->unwrap();
        // line 32
        echo "\t\t<div class=\"card app-forums app-search-messages bg-white rounded shadow mb-4\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<h6 class=\"font-weight-bold\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 34), "lang", [], "any", false, false, false, 34), "string", [], "any", false, false, false, 34), "messages", [], "any", false, false, false, 34), "search", [], "any", false, false, false, 34), "title", [], "any", false, false, false, 34), "html", null, true);
        echo "</h6>
\t\t\t</div>
\t\t\t<article class=\"card-group-item\">
\t\t\t\t<div class=\"filter-content\">
\t\t\t\t\t<div class=\"list-group list-group-flush\">
\t\t\t\t\t\t<div class=\"p-3\">
\t\t\t\t\t\t\t<div id=\"messages-quick-search\" class=\"form-inline my-2 my-lg-0\">
\t\t\t\t\t\t\t\t<div class=\"input-group has-feedback has-clear mb-2\">
\t\t\t\t\t\t\t\t\t<input name=\"keyword\" class=\"form-control\" type=\"text\" placeholder=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 42), "lang", [], "any", false, false, false, 42), "string", [], "any", false, false, false, 42), "messages", [], "any", false, false, false, 42), "search", [], "any", false, false, false, 42), "placeholder", [], "any", false, false, false, 42), "html", null, true);
        echo "\" aria-label=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 42), "lang", [], "any", false, false, false, 42), "string", [], "any", false, false, false, 42), "messages", [], "any", false, false, false, 42), "search", [], "any", false, false, false, 42), "title", [], "any", false, false, false, 42), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<span title=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 43), "lang", [], "any", false, false, false, 43), "string", [], "any", false, false, false, 43), "container", [], "any", false, false, false, 43), "buttons", [], "any", false, false, false, 43), "clear", [], "any", false, false, false, 43), "html", null, true);
        echo "\" class=\"form-control-clear fas fa-times form-control-feedback d-none\"></span>
\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-app-search icon search no-anim-ui\" aria-label=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 45), "lang", [], "any", false, false, false, 45), "string", [], "any", false, false, false, 45), "container", [], "any", false, false, false, 45), "buttons", [], "any", false, false, false, 45), "search", [], "any", false, false, false, 45), "html", null, true);
        echo "\" type=\"button\"></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</article>
\t\t</div>
\t\t<div class=\"card app-forums app-list-messages bg-white rounded shadow mb-4\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<h6 class=\"font-weight-bold\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 56), "lang", [], "any", false, false, false, 56), "string", [], "any", false, false, false, 56), "messages", [], "any", false, false, false, 56), "conversation", [], "any", false, false, false, 56), "title", [], "any", false, false, false, 56), "html", null, true);
        echo "</h6>
\t\t\t</div>
\t\t\t<article class=\"card-group-item\">
\t\t\t\t<div class=\"filter-content\">
\t\t\t\t\t<div class=\"list-group list-group-flush scrollable\">
\t\t\t\t\t\t";
        // line 61
        echo twig_call_macro($macros["macros"], "macro_messages", [($context["item"] ?? null), 0], 61, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t\t<div class=\"new d-none\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</article>
\t\t</div>
\t\t<div class=\"card app-forums app-archived-messages bg-white rounded shadow mb-4\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<h6 class=\"font-weight-bold\">";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 69), "lang", [], "any", false, false, false, 69), "string", [], "any", false, false, false, 69), "messages", [], "any", false, false, false, 69), "conversation", [], "any", false, false, false, 69), "archived", [], "any", false, false, false, 69), "html", null, true);
        echo "</h6>
\t\t\t</div>
\t\t\t<article class=\"card-group-item\">
\t\t\t\t<div class=\"filter-content\">
\t\t\t\t\t<div class=\"list-group list-group-flush scrollable\">
\t\t\t\t\t\t";
        // line 74
        echo twig_call_macro($macros["macros"], "macro_messages", [($context["item"] ?? null), 1], 74, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t\t<div class=\"new d-none\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</article>
\t\t</div>
\t</aside>
\t<aside class=\"col-sm-9\">
\t\t<div class=\"app-tab-container\">
\t\t\t<div class=\"no-post d-block\">
\t\t\t    <span>";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 84), "lang", [], "any", false, false, false, 84), "string", [], "any", false, false, false, 84), "container", [], "any", false, false, false, 84), "no_post", [], "any", false, false, false, 84), "none", [], "any", false, false, false, 84), "html", null, true);
        echo "</span>
\t\t\t    <p data-ui=\"send-message\">";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 85), "lang", [], "any", false, false, false, 85), "string", [], "any", false, false, false, 85), "messages", [], "any", false, false, false, 85), "conversation", [], "any", false, false, false, 85), "default", [], "any", false, false, false, 85), "html", null, true);
        echo "</p>
\t\t    </div>
\t\t    <div class=\"conversation-area show\"></div>
\t\t    <div class=\"post-loader-spin\"></div>
\t\t</div>
\t</aside>
\t";
        // line 92
        echo "\t<div hook-action=\"{Mention:App-domEvent-metacontents}\"
\t\tdata-title=\"";
        // line 93
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "conversation", [], "any", false, false, false, 93), "title", [], "any", false, false, false, 93)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "conversation", [], "any", false, false, false, 93), "title", [], "any", false, false, false, 93)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 93), "lang", [], "any", false, false, false, 93), "string", [], "any", false, false, false, 93), "messages", [], "any", false, false, false, 93), "title", [], "any", false, false, false, 93))), "html", null, true);
        echo "\"
\t\tdata-meta-description=\"";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 94), "meta_description", [], "any", false, false, false, 94), "html", null, true);
        echo "\"
\t\tdata-og-description=\"";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 95), "meta_description", [], "any", false, false, false, 95), "html", null, true);
        echo "\"
\t\tdata-twitter-description=\"";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 96), "meta_description", [], "any", false, false, false, 96), "html", null, true);
        echo "\" data-og-title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 96), "meta_description", [], "any", false, false, false, 96), "html", null, true);
        echo "\"
\t\tdata-twitter-title=\"";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 97), "meta_description", [], "any", false, false, false, 97), "html", null, true);
        echo "\" class=\"d-none\">
\t</div>
";
    }

    public function getTemplateName()
    {
        return "messages.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 97,  233 => 96,  229 => 95,  225 => 94,  221 => 93,  218 => 92,  209 => 85,  205 => 84,  192 => 74,  184 => 69,  173 => 61,  165 => 56,  151 => 45,  146 => 43,  140 => 42,  129 => 34,  125 => 32,  123 => 31,  116 => 29,  110 => 25,  108 => 24,  102 => 20,  96 => 18,  94 => 17,  89 => 16,  87 => 15,  82 => 14,  80 => 13,  76 => 12,  70 => 11,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'container.tpl' %}

{% block app_template_name 'messages' %}

{% block content %}
\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('messages', {}) }}\">{{ app.sub.lang.string.messages.breadcrumb.messages }}</a></div>
\t\t\t\t\t<div>{{ app.sub.lang.string.messages.breadcrumb.conversations }}</div>
\t\t\t\t\t{% if string.conversation is defined %}
\t\t\t\t\t    <div>{{ string.conversation.title }}</div>
\t\t\t\t\t{% elseif app.request.getPathInfo() == '/messages/new' %}
\t\t\t\t\t\t<div>{{ app.sub.lang.string.messages.breadcrumb.new }}</div>
\t\t\t\t\t{% elseif app.request.getPathInfo() == '/messages' %}
\t\t\t\t\t\t<div>{{ app.sub.lang.string.messages.breadcrumb.all }}</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t{% include 'usermenu_member.tpl' %}
\t\t</div>
\t</div>
\t<aside class=\"col-sm-3 mb-4 pr-4\">
\t\t<div class=\"mb-3\">
\t\t\t<button type=\"button\" class=\"btn btn-app-discussion icon plus\" data-ui=\"send-message\" data-text=\"{{ app.sub.lang.string.messages.breadcrumb.new }}\">{{ app.sub.lang.string.discussion.posts.quick_menu.links.message }}</button>
\t\t</div>
\t\t{% import 'macro.messages_list.tpl' as macros %}
\t\t<div class=\"card app-forums app-search-messages bg-white rounded shadow mb-4\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<h6 class=\"font-weight-bold\">{{ app.sub.lang.string.messages.search.title }}</h6>
\t\t\t</div>
\t\t\t<article class=\"card-group-item\">
\t\t\t\t<div class=\"filter-content\">
\t\t\t\t\t<div class=\"list-group list-group-flush\">
\t\t\t\t\t\t<div class=\"p-3\">
\t\t\t\t\t\t\t<div id=\"messages-quick-search\" class=\"form-inline my-2 my-lg-0\">
\t\t\t\t\t\t\t\t<div class=\"input-group has-feedback has-clear mb-2\">
\t\t\t\t\t\t\t\t\t<input name=\"keyword\" class=\"form-control\" type=\"text\" placeholder=\"{{ app.sub.lang.string.messages.search.placeholder }}\" aria-label=\"{{ app.sub.lang.string.messages.search.title }}\">
\t\t\t\t\t\t\t\t\t<span title=\"{{ app.sub.lang.string.container.buttons.clear }}\" class=\"form-control-clear fas fa-times form-control-feedback d-none\"></span>
\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-app-search icon search no-anim-ui\" aria-label=\"{{ app.sub.lang.string.container.buttons.search }}\" type=\"button\"></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</article>
\t\t</div>
\t\t<div class=\"card app-forums app-list-messages bg-white rounded shadow mb-4\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<h6 class=\"font-weight-bold\">{{ app.sub.lang.string.messages.conversation.title }}</h6>
\t\t\t</div>
\t\t\t<article class=\"card-group-item\">
\t\t\t\t<div class=\"filter-content\">
\t\t\t\t\t<div class=\"list-group list-group-flush scrollable\">
\t\t\t\t\t\t{{ macros.messages(item, 0) }}
\t\t\t\t\t\t<div class=\"new d-none\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</article>
\t\t</div>
\t\t<div class=\"card app-forums app-archived-messages bg-white rounded shadow mb-4\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<h6 class=\"font-weight-bold\">{{ app.sub.lang.string.messages.conversation.archived }}</h6>
\t\t\t</div>
\t\t\t<article class=\"card-group-item\">
\t\t\t\t<div class=\"filter-content\">
\t\t\t\t\t<div class=\"list-group list-group-flush scrollable\">
\t\t\t\t\t\t{{ macros.messages(item, 1) }}
\t\t\t\t\t\t<div class=\"new d-none\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</article>
\t\t</div>
\t</aside>
\t<aside class=\"col-sm-9\">
\t\t<div class=\"app-tab-container\">
\t\t\t<div class=\"no-post d-block\">
\t\t\t    <span>{{ app.sub.lang.string.container.no_post.none }}</span>
\t\t\t    <p data-ui=\"send-message\">{{ app.sub.lang.string.messages.conversation.default }}</p>
\t\t    </div>
\t\t    <div class=\"conversation-area show\"></div>
\t\t    <div class=\"post-loader-spin\"></div>
\t\t</div>
\t</aside>
\t{# This is includes meta definitions. #}
\t<div hook-action=\"{Mention:App-domEvent-metacontents}\"
\t\tdata-title=\"{{ string.conversation.title ? string.conversation.title : app.sub.lang.string.messages.title }}\"
\t\tdata-meta-description=\"{{ app.settings.meta_description }}\"
\t\tdata-og-description=\"{{ app.settings.meta_description }}\"
\t\tdata-twitter-description=\"{{ app.settings.meta_description }}\" data-og-title=\"{{ app.settings.meta_description }}\"
\t\tdata-twitter-title=\"{{ app.settings.meta_description }}\" class=\"d-none\">
\t</div>
{% endblock %}", "messages.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Messages\\messages.tpl");
    }
}
