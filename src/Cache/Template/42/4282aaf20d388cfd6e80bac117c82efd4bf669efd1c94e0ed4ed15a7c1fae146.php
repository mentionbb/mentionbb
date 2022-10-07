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

/* 404.tpl */
class __TwigTemplate_f416e4b8dea8a3326b40d37c66663ab7862d3f59df3d9deeb687e852ad2d6b34 extends Template
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
        $this->parent = $this->loadTemplate("container.tpl", "404.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "404";
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 10), "site_url", [], "any", false, false, false, 10), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 10), "site_title", [], "any", false, false, false, 10), "html", null, true);
        echo "</a></div>
\t\t\t\t\t<div>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 11), "lang", [], "any", false, false, false, 11), "string", [], "any", false, false, false, 11), "container", [], "any", false, false, false, 11), "page_errors", [], "any", false, false, false, 11), "page_not_found", [], "any", false, false, false, 11), "breadcrumb", [], "any", false, false, false, 11), "html", null, true);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t";
        // line 16
        $this->loadTemplate("usermenu_member.tpl", "404.tpl", 16)->display($context);
        // line 17
        echo "\t\t</div>
\t</div>
\t<aside class=\"col-12\">
\t\t<div class=\"d-flex justify-content-center align-items-center text-dark mt-4\" id=\"main\">
\t\t\t<h1 class=\"mr-3 pr-3 align-top border-right inline-block align-content-center\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 21), "lang", [], "any", false, false, false, 21), "string", [], "any", false, false, false, 21), "container", [], "any", false, false, false, 21), "page_errors", [], "any", false, false, false, 21), "page_not_found", [], "any", false, false, false, 21), "breadcrumb", [], "any", false, false, false, 21), "html", null, true);
        echo "</h1>
\t\t\t<div class=\"inline-block align-middle\">
\t\t\t\t<h2 class=\"font-weight-normal lead\" id=\"desc\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 23), "lang", [], "any", false, false, false, 23), "string", [], "any", false, false, false, 23), "container", [], "any", false, false, false, 23), "page_errors", [], "any", false, false, false, 23), "page_not_found", [], "any", false, false, false, 23), "text", [], "any", false, false, false, 23), "html", null, true);
        echo "</h2>
\t\t\t</div>
\t\t</div>
\t</aside>
    ";
        // line 28
        echo "\t<div hook-action=\"{Mention:App-domEvent-metacontents}\"
\t\tdata-title=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 29), "lang", [], "any", false, false, false, 29), "string", [], "any", false, false, false, 29), "container", [], "any", false, false, false, 29), "page_errors", [], "any", false, false, false, 29), "page_not_found", [], "any", false, false, false, 29), "title", [], "any", false, false, false, 29), "html", null, true);
        echo "\"
\t\tdata-meta-description=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 30), "meta_description", [], "any", false, false, false, 30), "html", null, true);
        echo "\"
\t\tdata-og-description=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 31), "meta_description", [], "any", false, false, false, 31), "html", null, true);
        echo "\"
\t\tdata-twitter-description=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 32), "meta_description", [], "any", false, false, false, 32), "html", null, true);
        echo "\" data-og-title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 32), "meta_description", [], "any", false, false, false, 32), "html", null, true);
        echo "\"
\t\tdata-twitter-title=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 33), "meta_description", [], "any", false, false, false, 33), "html", null, true);
        echo "\" class=\"d-none\">
\t</div>
";
    }

    public function getTemplateName()
    {
        return "404.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  113 => 32,  109 => 31,  105 => 30,  101 => 29,  98 => 28,  91 => 23,  86 => 21,  80 => 17,  78 => 16,  70 => 11,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'container.tpl' %}

{% block app_template_name '404' %}

{% block content %}
\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.settings.site_url }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div>{{ app.sub.lang.string.container.page_errors.page_not_found.breadcrumb }}</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t{% include 'usermenu_member.tpl' %}
\t\t</div>
\t</div>
\t<aside class=\"col-12\">
\t\t<div class=\"d-flex justify-content-center align-items-center text-dark mt-4\" id=\"main\">
\t\t\t<h1 class=\"mr-3 pr-3 align-top border-right inline-block align-content-center\">{{ app.sub.lang.string.container.page_errors.page_not_found.breadcrumb }}</h1>
\t\t\t<div class=\"inline-block align-middle\">
\t\t\t\t<h2 class=\"font-weight-normal lead\" id=\"desc\">{{ app.sub.lang.string.container.page_errors.page_not_found.text }}</h2>
\t\t\t</div>
\t\t</div>
\t</aside>
    {# This is includes meta definitions. #}
\t<div hook-action=\"{Mention:App-domEvent-metacontents}\"
\t\tdata-title=\"{{ app.sub.lang.string.container.page_errors.page_not_found.title }}\"
\t\tdata-meta-description=\"{{ app.settings.meta_description }}\"
\t\tdata-og-description=\"{{ app.settings.meta_description }}\"
\t\tdata-twitter-description=\"{{ app.settings.meta_description }}\" data-og-title=\"{{ app.settings.meta_description }}\"
\t\tdata-twitter-title=\"{{ app.settings.meta_description }}\" class=\"d-none\">
\t</div>
{% endblock %}", "404.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Exception\\404.tpl");
    }
}
