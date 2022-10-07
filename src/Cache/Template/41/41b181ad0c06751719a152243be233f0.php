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

/* contact.tpl */
class __TwigTemplate_15f5e07481903c051a63a3a684920538 extends Template
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
        $this->parent = $this->loadTemplate("container.tpl", "contact.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "contact";
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 11), "lang", [], "any", false, false, false, 11), "string", [], "any", false, false, false, 11), "pages", [], "any", false, false, false, 11), "breadcrumb", [], "any", false, false, false, 11), "pages", [], "any", false, false, false, 11), "html", null, true);
        echo "</div>
\t\t\t\t\t<div>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 12), "lang", [], "any", false, false, false, 12), "string", [], "any", false, false, false, 12), "pages", [], "any", false, false, false, 12), "breadcrumb", [], "any", false, false, false, 12), "help", [], "any", false, false, false, 12), "html", null, true);
        echo "</div>
\t\t\t\t\t<div>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 13), "lang", [], "any", false, false, false, 13), "string", [], "any", false, false, false, 13), "pages", [], "any", false, false, false, 13), "breadcrumb", [], "any", false, false, false, 13), "contact", [], "any", false, false, false, 13), "html", null, true);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t";
        // line 18
        $this->loadTemplate("usermenu_member.tpl", "contact.tpl", 18)->display($context);
        // line 19
        echo "\t\t</div>
\t</div>
\t<aside class=\"col-sm-12\">
\t\t<div class=\"app-box shadow rounded animate slideIn\">
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<h5 class=\"mb-3\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 24), "lang", [], "any", false, false, false, 24), "string", [], "any", false, false, false, 24), "pages", [], "any", false, false, false, 24), "contact", [], "any", false, false, false, 24), "title", [], "any", false, false, false, 24), "html", null, true);
        echo "</h5>
\t\t\t\t<form id=\"help_contact\" method=\"post\">
\t\t\t\t\t<div class=\"d-flex flex-column align-items-lg-center\">
\t\t\t\t\t\t<div class=\"w-50\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"your_name\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 29), "lang", [], "any", false, false, false, 29), "string", [], "any", false, false, false, 29), "pages", [], "any", false, false, false, 29), "contact", [], "any", false, false, false, 29), "form", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t";
        // line 30
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 30), "loggedIn", [], "method", false, false, false, 30)) {
            // line 31
            echo "\t\t\t\t\t\t\t\t    <input type=\"text\" name=\"your_name\" class=\"form-control\" id=\"your_name\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 31), "username", [], "any", false, false, false, 31), "html", null, true);
            echo "\" required=\"required\">
\t\t\t\t\t\t\t\t";
        } else {
            // line 33
            echo "\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"your_name\" class=\"form-control\" id=\"your_name\" required=\"required\">
\t\t\t\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"your_mail\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 37), "lang", [], "any", false, false, false, 37), "string", [], "any", false, false, false, 37), "pages", [], "any", false, false, false, 37), "contact", [], "any", false, false, false, 37), "form", [], "any", false, false, false, 37), "mail", [], "any", false, false, false, 37), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t";
        // line 38
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 38), "loggedIn", [], "method", false, false, false, 38)) {
            // line 39
            echo "\t\t\t\t\t\t\t\t    <input type=\"email\" name=\"mail\" class=\"form-control\" id=\"your_mail\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 39), "mail", [], "any", false, false, false, 39), "html", null, true);
            echo "\" required=\"required\">
\t\t\t\t\t\t\t\t";
        } else {
            // line 41
            echo "\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"mail\" class=\"form-control\" id=\"your_mail\" required=\"required\">
\t\t\t\t\t\t\t\t";
        }
        // line 43
        echo "\t\t\t\t\t\t\t\t<small>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 43), "lang", [], "any", false, false, false, 43), "string", [], "any", false, false, false, 43), "pages", [], "any", false, false, false, 43), "contact", [], "any", false, false, false, 43), "form", [], "any", false, false, false, 43), "mail_text", [], "any", false, false, false, 43), "html", null, true);
        echo "</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"title\">";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 46), "lang", [], "any", false, false, false, 46), "string", [], "any", false, false, false, 46), "pages", [], "any", false, false, false, 46), "contact", [], "any", false, false, false, 46), "form", [], "any", false, false, false, 46), "title", [], "any", false, false, false, 46), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"title\" class=\"form-control\" id=\"title\" required=\"required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"text\">";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 50), "lang", [], "any", false, false, false, 50), "string", [], "any", false, false, false, 50), "pages", [], "any", false, false, false, 50), "contact", [], "any", false, false, false, 50), "form", [], "any", false, false, false, 50), "message", [], "any", false, false, false, 50), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"text\" id=\"text\" rows=\"3\" required=\"required\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-app-discussion icon send\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 54), "lang", [], "any", false, false, false, 54), "string", [], "any", false, false, false, 54), "container", [], "any", false, false, false, 54), "buttons", [], "any", false, false, false, 54), "submit", [], "any", false, false, false, 54), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</aside>
\t";
        // line 63
        echo "\t<div hook-action=\"{Mention:App-domEvent-metacontents}\" data-title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 63), "lang", [], "any", false, false, false, 63), "string", [], "any", false, false, false, 63), "pages", [], "any", false, false, false, 63), "contact", [], "any", false, false, false, 63), "title", [], "any", false, false, false, 63), "html", null, true);
        echo "\"
\t\tdata-meta-description=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 64), "lang", [], "any", false, false, false, 64), "string", [], "any", false, false, false, 64), "pages", [], "any", false, false, false, 64), "contact", [], "any", false, false, false, 64), "title", [], "any", false, false, false, 64), "html", null, true);
        echo "\"
\t\tdata-og-description=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 65), "lang", [], "any", false, false, false, 65), "string", [], "any", false, false, false, 65), "pages", [], "any", false, false, false, 65), "contact", [], "any", false, false, false, 65), "title", [], "any", false, false, false, 65), "html", null, true);
        echo "\"
\t\tdata-twitter-description=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 66), "lang", [], "any", false, false, false, 66), "string", [], "any", false, false, false, 66), "pages", [], "any", false, false, false, 66), "contact", [], "any", false, false, false, 66), "title", [], "any", false, false, false, 66), "html", null, true);
        echo "\"
\t\tdata-og-title=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 67), "lang", [], "any", false, false, false, 67), "string", [], "any", false, false, false, 67), "pages", [], "any", false, false, false, 67), "contact", [], "any", false, false, false, 67), "title", [], "any", false, false, false, 67), "html", null, true);
        echo "\"
\t\tdata-twitter-title=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 68), "lang", [], "any", false, false, false, 68), "string", [], "any", false, false, false, 68), "pages", [], "any", false, false, false, 68), "contact", [], "any", false, false, false, 68), "title", [], "any", false, false, false, 68), "html", null, true);
        echo "\" class=\"d-none\">
\t</div>
";
    }

    public function getTemplateName()
    {
        return "contact.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 68,  188 => 67,  184 => 66,  180 => 65,  176 => 64,  171 => 63,  160 => 54,  153 => 50,  146 => 46,  139 => 43,  135 => 41,  129 => 39,  127 => 38,  123 => 37,  119 => 35,  115 => 33,  109 => 31,  107 => 30,  103 => 29,  95 => 24,  88 => 19,  86 => 18,  78 => 13,  74 => 12,  70 => 11,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'container.tpl' %}

{% block app_template_name 'contact' %}

{% block content %}
\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div>{{ app.sub.lang.string.pages.breadcrumb.pages }}</div>
\t\t\t\t\t<div>{{ app.sub.lang.string.pages.breadcrumb.help }}</div>
\t\t\t\t\t<div>{{ app.sub.lang.string.pages.breadcrumb.contact }}</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t{% include 'usermenu_member.tpl' %}
\t\t</div>
\t</div>
\t<aside class=\"col-sm-12\">
\t\t<div class=\"app-box shadow rounded animate slideIn\">
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<h5 class=\"mb-3\">{{ app.sub.lang.string.pages.contact.title }}</h5>
\t\t\t\t<form id=\"help_contact\" method=\"post\">
\t\t\t\t\t<div class=\"d-flex flex-column align-items-lg-center\">
\t\t\t\t\t\t<div class=\"w-50\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"your_name\">{{ app.sub.lang.string.pages.contact.form.name }}</label>
\t\t\t\t\t\t\t\t{% if app.user.loggedIn() %}
\t\t\t\t\t\t\t\t    <input type=\"text\" name=\"your_name\" class=\"form-control\" id=\"your_name\" value=\"{{ app.visitor.username }}\" required=\"required\">
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"your_name\" class=\"form-control\" id=\"your_name\" required=\"required\">
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"your_mail\">{{ app.sub.lang.string.pages.contact.form.mail }}</label>
\t\t\t\t\t\t\t\t{% if app.user.loggedIn() %}
\t\t\t\t\t\t\t\t    <input type=\"email\" name=\"mail\" class=\"form-control\" id=\"your_mail\" value=\"{{ app.visitor.mail }}\" required=\"required\">
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"mail\" class=\"form-control\" id=\"your_mail\" required=\"required\">
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<small>{{ app.sub.lang.string.pages.contact.form.mail_text }}</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"title\">{{ app.sub.lang.string.pages.contact.form.title }}</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"title\" class=\"form-control\" id=\"title\" required=\"required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"text\">{{ app.sub.lang.string.pages.contact.form.message }}</label>
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"text\" id=\"text\" rows=\"3\" required=\"required\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-app-discussion icon send\">{{ app.sub.lang.string.container.buttons.submit }}</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</aside>
\t{# This is includes meta definitions. #}
\t<div hook-action=\"{Mention:App-domEvent-metacontents}\" data-title=\"{{ app.sub.lang.string.pages.contact.title }}\"
\t\tdata-meta-description=\"{{ app.sub.lang.string.pages.contact.title }}\"
\t\tdata-og-description=\"{{ app.sub.lang.string.pages.contact.title }}\"
\t\tdata-twitter-description=\"{{ app.sub.lang.string.pages.contact.title }}\"
\t\tdata-og-title=\"{{ app.sub.lang.string.pages.contact.title }}\"
\t\tdata-twitter-title=\"{{ app.sub.lang.string.pages.contact.title }}\" class=\"d-none\">
\t</div>
{% endblock %}", "contact.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Pages\\contact.tpl");
    }
}
