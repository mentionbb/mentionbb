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

/* @ComponentBundle_Admin/Languages/phrase.tpl */
class __TwigTemplate_c83cbcdb63b441ef7d28489c752c284b74b86815f0661fd3cb4bfba1dd01fa9c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'app_template_name' => [$this, 'block_app_template_name'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@ComponentBundle_Admin/container.tpl";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@ComponentBundle_Admin/container.tpl", "@ComponentBundle_Admin/Languages/phrase.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "@ComponentBundle/admin/languages/sentences/phrase";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 5), "lang", [], "any", false, false, false, 5), "string", [], "any", false, false, false, 5), "admin", [], "any", false, false, false, 5), "languages", [], "any", false, false, false, 5), "phrase", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 5), "site_title", [], "any", false, false, false, 5), "html", null, true);
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 12), "buildLink", [0 => "indexAction", 1 => []], "method", false, false, false, 12), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 12), "site_title", [], "any", false, false, false, 12), "html", null, true);
        echo "</a></div>
\t\t\t\t\t<div><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 13), "buildLink", [0 => "adminIndex", 1 => []], "method", false, false, false, 13), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 13), "lang", [], "any", false, false, false, 13), "string", [], "any", false, false, false, 13), "admin", [], "any", false, false, false, 13), "container", [], "any", false, false, false, 13), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "</a></div>
\t\t\t\t\t<div><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 14), "buildLink", [0 => "adminLanguages", 1 => []], "method", false, false, false, 14), "html", null, true);
        echo "?sentences\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 14), "lang", [], "any", false, false, false, 14), "string", [], "any", false, false, false, 14), "admin", [], "any", false, false, false, 14), "languages", [], "any", false, false, false, 14), "sentences", [], "any", false, false, false, 14), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "</a></div>
                    <div><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 15), "buildLink", [0 => "adminLanguages", 1 => []], "method", false, false, false, 15), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "phrase", [], "any", false, false, false, 15), "language", [], "any", false, false, false, 15), "html", null, true);
        echo "</a></div>
                    <div><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 16), "buildLink", [0 => "adminLanguages", 1 => []], "method", false, false, false, 16), "html", null, true);
        echo "?editPhrase/?f=[";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "phrase", [], "any", false, false, false, 16), "file", [], "any", false, false, false, 16), "html", null, true);
        echo "]&phrasePath=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "phrase", [], "any", false, false, false, 16), "path", [], "any", false, false, false, 16), "html", null, true);
        echo "&phrase=[";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "phrase", [], "any", false, false, false, 16), "phrase", [], "any", false, false, false, 16), "html", null, true);
        echo "]&language=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "phrase", [], "any", false, false, false, 16), "language", [], "any", false, false, false, 16), "html", null, true);
        echo "&defaultNav=sentences\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "phrase", [], "any", false, false, false, 16), "var", [], "any", false, false, false, 16), "html", null, true);
        echo "</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t";
        // line 21
        $this->loadTemplate("usermenu_member.tpl", "@ComponentBundle_Admin/Languages/phrase.tpl", 21)->display($context);
        // line 22
        echo "\t\t</div>
\t</div>
\t";
        // line 24
        $this->loadTemplate("@ComponentBundle_Admin/Layout/sidebar.tpl", "@ComponentBundle_Admin/Languages/phrase.tpl", 24)->display($context);
        // line 25
        echo "\t
\t<aside class=\"col-sm-9\">
\t\t<div class=\"app-box shadow rounded\" data-tab=\"languages\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center\">
                    <div>
                        <h5 class=\"mb-0\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 34), "lang", [], "any", false, false, false, 34), "string", [], "any", false, false, false, 34), "admin", [], "any", false, false, false, 34), "languages", [], "any", false, false, false, 34), "phrase", [], "any", false, false, false, 34), "title", [], "any", false, false, false, 34), "html", null, true);
        echo "</h5>
                        <small class=\"text-muted\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 35), "lang", [], "any", false, false, false, 35), "string", [], "any", false, false, false, 35), "admin", [], "any", false, false, false, 35), "languages", [], "any", false, false, false, 35), "phrase", [], "any", false, false, false, 35), "desc", [], "any", false, false, false, 35), "html", null, true);
        echo "</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 38), "buildLink", [0 => "adminLanguages", 1 => []], "method", false, false, false, 38), "html", null, true);
        echo "?sentences&path=[";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "phrase", [], "any", false, false, false, 38), "file", [], "any", false, false, false, 38), "html", null, true);
        echo "]\" class=\"btn btn-app-discussion icon back\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 38), "lang", [], "any", false, false, false, 38), "string", [], "any", false, false, false, 38), "container", [], "any", false, false, false, 38), "buttons", [], "any", false, false, false, 38), "back", [], "any", false, false, false, 38), "html", null, true);
        echo "</a>
                    </div>
                </div>  
                <div class=\"d-flex flex-column align-items-center justify-content-center mt-3\">
                    <div class=\"service-list-area w-100\">
                        <form id=\"admin_phrase_edit\" method=\"post\">
                            <div id=\"servicesAccordion\">
                                <div class=\"app-phrase app-service bg-white shadow-sm position-relative mb-3 rounded\" data-language=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "phrase", [], "any", false, false, false, 45), "language", [], "any", false, false, false, 45), "html", null, true);
        echo "\" data-phrase=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "phrase", [], "any", false, false, false, 45), "var", [], "any", false, false, false, 45), "html", null, true);
        echo "\">
                                    <div class=\"app-post\">
                                        <div class=\"post-layout d-flex align-items-center border-top-0 px-2 p-1 collapse\">
                                            <div class=\"post-icon\">
                                               <i class=\"far fa-edit\"></i>
                                            </div>
                                            <div class=\"head-title d-flex flex-column ml-lg-0 ml-2 mr-auto\">
                                                <span class=\"font-weight-bold\">";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "phrase", [], "any", false, false, false, 52), "var", [], "any", false, false, false, 52), "html", null, true);
        echo "</span>
                                                <small>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "phrase", [], "any", false, false, false, 53), "file", [], "any", false, false, false, 53), "html", null, true);
        echo "</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"p-2\">
                                            <div class=\"form-group row mx-auto\">
                                                <label for=\"static_variable\" class=\"col-sm-4 col-form-label\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 60), "lang", [], "any", false, false, false, 60), "string", [], "any", false, false, false, 60), "admin", [], "any", false, false, false, 60), "languages", [], "any", false, false, false, 60), "phrase", [], "any", false, false, false, 60), "forms", [], "any", false, false, false, 60), "variable", [], "any", false, false, false, 60), "title", [], "any", false, false, false, 60), "html", null, true);
        echo "</label>
                                                <div class=\"col-sm-8\">
                                                    <input class=\"form-control\" id=\"static_variable\" type=\"text\" placeholder=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 62), "lang", [], "any", false, false, false, 62), "string", [], "any", false, false, false, 62), "admin", [], "any", false, false, false, 62), "languages", [], "any", false, false, false, 62), "phrase", [], "any", false, false, false, 62), "forms", [], "any", false, false, false, 62), "variable", [], "any", false, false, false, 62), "title", [], "any", false, false, false, 62), "html", null, true);
        echo "\" aria-label=\"variable\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "phrase", [], "any", false, false, false, 62), "var", [], "any", false, false, false, 62), "html", null, true);
        echo "\" aria-describedby=\"help_variable\" spellcheck=\"false\" disabled>
                                                    <small id=\"help_variable\" class=\"form-text text-muted\">";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 63), "lang", [], "any", false, false, false, 63), "string", [], "any", false, false, false, 63), "admin", [], "any", false, false, false, 63), "languages", [], "any", false, false, false, 63), "phrase", [], "any", false, false, false, 63), "forms", [], "any", false, false, false, 63), "variable", [], "any", false, false, false, 63), "desc", [], "any", false, false, false, 63), "html", null, true);
        echo "</small>
                                                </div>
                                            </div>
                                            <div class=\"form-group row mx-auto\">
                                                <label for=\"static_phrase\" class=\"col-sm-4 col-form-label\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 67), "lang", [], "any", false, false, false, 67), "string", [], "any", false, false, false, 67), "admin", [], "any", false, false, false, 67), "languages", [], "any", false, false, false, 67), "phrase", [], "any", false, false, false, 67), "forms", [], "any", false, false, false, 67), "phrase", [], "any", false, false, false, 67), "title", [], "any", false, false, false, 67), "html", null, true);
        echo "</label>
                                                <div class=\"col-sm-8\">
                                                    <textarea class=\"form-control\" id=\"static_phrase\" placeholder=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 69), "lang", [], "any", false, false, false, 69), "string", [], "any", false, false, false, 69), "admin", [], "any", false, false, false, 69), "languages", [], "any", false, false, false, 69), "phrase", [], "any", false, false, false, 69), "forms", [], "any", false, false, false, 69), "phrase", [], "any", false, false, false, 69), "title", [], "any", false, false, false, 69), "html", null, true);
        echo "\" spellcheck=\"false\" rows=\"5\" disabled>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "phrase", [], "any", false, false, false, 69), "text", [], "any", false, false, false, 69), "html", null, true);
        echo "</textarea>
                                                    <small id=\"help_phrase\" class=\"form-text text-muted\">";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 70), "lang", [], "any", false, false, false, 70), "string", [], "any", false, false, false, 70), "admin", [], "any", false, false, false, 70), "languages", [], "any", false, false, false, 70), "phrase", [], "any", false, false, false, 70), "forms", [], "any", false, false, false, 70), "phrase", [], "any", false, false, false, 70), "desc", [], "any", false, false, false, 70), "html", null, true);
        echo "</small>
                                                </div>
                                            </div>
                                            <div class=\"form-group row mx-auto\">
                                                <label for=\"static_phrase\" class=\"col-sm-4 col-form-label\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 74), "lang", [], "any", false, false, false, 74), "string", [], "any", false, false, false, 74), "admin", [], "any", false, false, false, 74), "languages", [], "any", false, false, false, 74), "phrase", [], "any", false, false, false, 74), "forms", [], "any", false, false, false, 74), "modification", [], "any", false, false, false, 74), "title", [], "any", false, false, false, 74), "html", null, true);
        echo "</label>
                                                <div class=\"col-sm-8\">
                                                    <textarea name=\"text\" class=\"form-control\" id=\"static_phrase\" placeholder=\"";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 76), "lang", [], "any", false, false, false, 76), "string", [], "any", false, false, false, 76), "admin", [], "any", false, false, false, 76), "languages", [], "any", false, false, false, 76), "phrase", [], "any", false, false, false, 76), "forms", [], "any", false, false, false, 76), "modification", [], "any", false, false, false, 76), "placeholder", [], "any", false, false, false, 76), "html", null, true);
        echo "\" spellcheck=\"false\" rows=\"5\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "modifiedText", [], "any", false, false, false, 76), "html", null, true);
        echo "</textarea>
                                                    <small id=\"help_phrase\" class=\"form-text text-muted\">";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 77), "lang", [], "any", false, false, false, 77), "string", [], "any", false, false, false, 77), "admin", [], "any", false, false, false, 77), "languages", [], "any", false, false, false, 77), "phrase", [], "any", false, false, false, 77), "forms", [], "any", false, false, false, 77), "modification", [], "any", false, false, false, 77), "desc", [], "any", false, false, false, 77), "html", null, true);
        echo "</small>
                                                    <div class=\"help pt-4\">
                                                        <div class=\"mb-2\">
                                                            <i class=\"far fa-question-circle h4 mb-0\"></i>
                                                        </div>
                                                        <small class=\"d-block\">";
        // line 82
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 82), "lang", [], "any", false, false, false, 82), "string", [], "any", false, false, false, 82), "admin", [], "any", false, false, false, 82), "languages", [], "any", false, false, false, 82), "phrase", [], "any", false, false, false, 82), "forms", [], "any", false, false, false, 82), "text", [], "any", false, false, false, 82);
        echo "</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon pen\">";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 87), "lang", [], "any", false, false, false, 87), "string", [], "any", false, false, false, 87), "container", [], "any", false, false, false, 87), "buttons", [], "any", false, false, false, 87), "update", [], "any", false, false, false, 87), "html", null, true);
        echo "</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </aside>
";
    }

    public function getTemplateName()
    {
        return "@ComponentBundle_Admin/Languages/phrase.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 87,  240 => 82,  232 => 77,  226 => 76,  221 => 74,  214 => 70,  208 => 69,  203 => 67,  196 => 63,  190 => 62,  185 => 60,  175 => 53,  171 => 52,  159 => 45,  145 => 38,  139 => 35,  135 => 34,  124 => 25,  122 => 24,  118 => 22,  116 => 21,  98 => 16,  92 => 15,  86 => 14,  80 => 13,  74 => 12,  68 => 8,  64 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/languages/sentences/phrase' %}

{% block title %}{{ app.sub.lang.string.admin.languages.phrase.title }}{{ \" - \" }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminIndex', {}) }}\">{{ app.sub.lang.string.admin.container.title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminLanguages', {}) }}?sentences\">{{ app.sub.lang.string.admin.languages.sentences.title }}</a></div>
                    <div><a href=\"{{ app.phrase.buildLink('adminLanguages', {}) }}\">{{ string.phrase.language }}</a></div>
                    <div><a href=\"{{ app.phrase.buildLink('adminLanguages', {}) }}?editPhrase/?f=[{{ string.phrase.file }}]&phrasePath={{ string.phrase.path }}&phrase=[{{ string.phrase.phrase }}]&language={{ string.phrase.language }}&defaultNav=sentences\">{{ string.phrase.var }}</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t{% include 'usermenu_member.tpl' %}
\t\t</div>
\t</div>
\t{% include '@ComponentBundle_Admin/Layout/sidebar.tpl' %}
\t
\t<aside class=\"col-sm-9\">
\t\t<div class=\"app-box shadow rounded\" data-tab=\"languages\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center\">
                    <div>
                        <h5 class=\"mb-0\">{{ app.sub.lang.string.admin.languages.phrase.title }}</h5>
                        <small class=\"text-muted\">{{ app.sub.lang.string.admin.languages.phrase.desc }}</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"{{ app.phrase.buildLink('adminLanguages', {}) }}?sentences&path=[{{ string.phrase.file }}]\" class=\"btn btn-app-discussion icon back\">{{ app.sub.lang.string.container.buttons.back }}</a>
                    </div>
                </div>  
                <div class=\"d-flex flex-column align-items-center justify-content-center mt-3\">
                    <div class=\"service-list-area w-100\">
                        <form id=\"admin_phrase_edit\" method=\"post\">
                            <div id=\"servicesAccordion\">
                                <div class=\"app-phrase app-service bg-white shadow-sm position-relative mb-3 rounded\" data-language=\"{{ string.phrase.language }}\" data-phrase=\"{{ string.phrase.var }}\">
                                    <div class=\"app-post\">
                                        <div class=\"post-layout d-flex align-items-center border-top-0 px-2 p-1 collapse\">
                                            <div class=\"post-icon\">
                                               <i class=\"far fa-edit\"></i>
                                            </div>
                                            <div class=\"head-title d-flex flex-column ml-lg-0 ml-2 mr-auto\">
                                                <span class=\"font-weight-bold\">{{ string.phrase.var }}</span>
                                                <small>{{ string.phrase.file }}</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"p-2\">
                                            <div class=\"form-group row mx-auto\">
                                                <label for=\"static_variable\" class=\"col-sm-4 col-form-label\">{{ app.sub.lang.string.admin.languages.phrase.forms.variable.title }}</label>
                                                <div class=\"col-sm-8\">
                                                    <input class=\"form-control\" id=\"static_variable\" type=\"text\" placeholder=\"{{ app.sub.lang.string.admin.languages.phrase.forms.variable.title }}\" aria-label=\"variable\" value=\"{{ string.phrase.var }}\" aria-describedby=\"help_variable\" spellcheck=\"false\" disabled>
                                                    <small id=\"help_variable\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.languages.phrase.forms.variable.desc }}</small>
                                                </div>
                                            </div>
                                            <div class=\"form-group row mx-auto\">
                                                <label for=\"static_phrase\" class=\"col-sm-4 col-form-label\">{{ app.sub.lang.string.admin.languages.phrase.forms.phrase.title }}</label>
                                                <div class=\"col-sm-8\">
                                                    <textarea class=\"form-control\" id=\"static_phrase\" placeholder=\"{{ app.sub.lang.string.admin.languages.phrase.forms.phrase.title }}\" spellcheck=\"false\" rows=\"5\" disabled>{{ string.phrase.text }}</textarea>
                                                    <small id=\"help_phrase\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.languages.phrase.forms.phrase.desc }}</small>
                                                </div>
                                            </div>
                                            <div class=\"form-group row mx-auto\">
                                                <label for=\"static_phrase\" class=\"col-sm-4 col-form-label\">{{ app.sub.lang.string.admin.languages.phrase.forms.modification.title }}</label>
                                                <div class=\"col-sm-8\">
                                                    <textarea name=\"text\" class=\"form-control\" id=\"static_phrase\" placeholder=\"{{ app.sub.lang.string.admin.languages.phrase.forms.modification.placeholder }}\" spellcheck=\"false\" rows=\"5\">{{ string.modifiedText }}</textarea>
                                                    <small id=\"help_phrase\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.languages.phrase.forms.modification.desc }}</small>
                                                    <div class=\"help pt-4\">
                                                        <div class=\"mb-2\">
                                                            <i class=\"far fa-question-circle h4 mb-0\"></i>
                                                        </div>
                                                        <small class=\"d-block\">{{ app.sub.lang.string.admin.languages.phrase.forms.text|raw }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon pen\">{{ app.sub.lang.string.container.buttons.update }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </aside>
{% endblock %}", "@ComponentBundle_Admin/Languages/phrase.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Mention\\Templates\\Admin\\Languages\\phrase.tpl");
    }
}
