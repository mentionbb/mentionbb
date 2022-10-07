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

/* @ComponentBundle_Admin/Languages/edit.tpl */
class __TwigTemplate_83a56228cf8760bd15053523c889b6b3 extends Template
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
        $this->parent = $this->loadTemplate("@ComponentBundle_Admin/container.tpl", "@ComponentBundle_Admin/Languages/edit.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "@ComponentBundle/admin/languages/edit";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 5), "lang", [], "any", false, false, false, 5), "parse", [], "any", false, false, false, 5), "Parse", [0 => "admin.languages.edit.title", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5)], "method", false, false, false, 5), "html", null, true);
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
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 14), "lang", [], "any", false, false, false, 14), "string", [], "any", false, false, false, 14), "admin", [], "any", false, false, false, 14), "languages", [], "any", false, false, false, 14), "list", [], "any", false, false, false, 14), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "</a></div>
                    <div><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 15), "buildLink", [0 => "adminLanguages", 1 => []], "method", false, false, false, 15), "html", null, true);
        echo "?l=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 15), "name", [], "any", false, false, false, 15), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 15), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t";
        // line 20
        $this->loadTemplate("usermenu_member.tpl", "@ComponentBundle_Admin/Languages/edit.tpl", 20)->display($context);
        // line 21
        echo "\t\t</div>
\t</div>
\t";
        // line 23
        $this->loadTemplate("@ComponentBundle_Admin/Layout/sidebar.tpl", "@ComponentBundle_Admin/Languages/edit.tpl", 23)->display($context);
        // line 24
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
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 33), "lang", [], "any", false, false, false, 33), "parse", [], "any", false, false, false, 33), "Parse", [0 => "admin.languages.edit.title", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 33), "title", [], "any", false, false, false, 33)], "method", false, false, false, 33), "html", null, true);
        echo "</h5>
                        <small class=\"text-muted\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 34), "lang", [], "any", false, false, false, 34), "string", [], "any", false, false, false, 34), "admin", [], "any", false, false, false, 34), "languages", [], "any", false, false, false, 34), "edit", [], "any", false, false, false, 34), "desc", [], "any", false, false, false, 34), "html", null, true);
        echo "</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 37), "buildLink", [0 => "adminLanguages", 1 => []], "method", false, false, false, 37), "html", null, true);
        echo "\" class=\"btn btn-app-discussion icon back\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 37), "lang", [], "any", false, false, false, 37), "string", [], "any", false, false, false, 37), "container", [], "any", false, false, false, 37), "buttons", [], "any", false, false, false, 37), "back", [], "any", false, false, false, 37), "html", null, true);
        echo "</a>
                    </div>
                </div>  
                <div class=\"d-flex flex-column align-items-center justify-content-center mt-3\">
                    <div class=\"service-list-area w-100\">
                        <form id=\"admin_languages_edit\" method=\"post\">
                            <div id=\"servicesAccordion\">
                                <div class=\"app-language app-service bg-white shadow-sm position-relative mb-3 rounded\" data-name=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
        echo "\">
                                    <div class=\"app-post\">
                                        <div class=\"post-layout d-flex align-items-center border-top-0 px-2 p-1 collapse\">
                                            <div class=\"post-icon\">
                                                <span class=\"fi fi-";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "item", [], "any", false, false, false, 48), "getFlag", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48)], "method", false, false, false, 48), "html", null, true);
        echo " --xs\"></span>
                                            </div>
                                            <div class=\"head-title d-flex flex-column ml-lg-0 ml-2 mr-auto\">
                                                <span class=\"font-weight-bold\">";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 51), "title", [], "any", false, false, false, 51), "html", null, true);
        echo "</span>
                                                <small>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 52), "desc", [], "any", false, false, false, 52), "html", null, true);
        echo "</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"p-2\">
                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_id_";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60), "html", null, true);
        echo "\" class=\"col-form-label\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 60), "lang", [], "any", false, false, false, 60), "string", [], "any", false, false, false, 60), "admin", [], "any", false, false, false, 60), "languages", [], "any", false, false, false, 60), "forms", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60), "title", [], "any", false, false, false, 60), "html", null, true);
        echo "</label>
                                                    <div>
                                                        <input name=\"options[id]\" class=\"form-control\" id=\"static_id_";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 62), "id", [], "any", false, false, false, 62), "html", null, true);
        echo "\" type=\"text\" aria-label=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 62), "id", [], "any", false, false, false, 62), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 62), "id", [], "any", false, false, false, 62), "html", null, true);
        echo "\" aria-describedby=\"help_id_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 62), "id", [], "any", false, false, false, 62), "html", null, true);
        echo "\" spellcheck=\"false\" disabled>
                                                        <small id=\"help_id_";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63), "html", null, true);
        echo "\" class=\"form-text text-muted\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 63), "lang", [], "any", false, false, false, 63), "string", [], "any", false, false, false, 63), "admin", [], "any", false, false, false, 63), "languages", [], "any", false, false, false, 63), "forms", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63), "desc", [], "any", false, false, false, 63), "html", null, true);
        echo "</small>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_name_";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 67), "name", [], "any", false, false, false, 67), "html", null, true);
        echo "\" class=\"col-form-label\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 67), "lang", [], "any", false, false, false, 67), "string", [], "any", false, false, false, 67), "admin", [], "any", false, false, false, 67), "languages", [], "any", false, false, false, 67), "forms", [], "any", false, false, false, 67), "name", [], "any", false, false, false, 67), "title", [], "any", false, false, false, 67), "html", null, true);
        echo "</label>
                                                    <div>
                                                        <input name=\"options[name]\" class=\"form-control\" id=\"static_name_";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 69), "name", [], "any", false, false, false, 69), "html", null, true);
        echo "\" type=\"text\" aria-label=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 69), "name", [], "any", false, false, false, 69), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 69), "name", [], "any", false, false, false, 69), "html", null, true);
        echo "\" aria-describedby=\"help_name_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 69), "name", [], "any", false, false, false, 69), "html", null, true);
        echo "\" spellcheck=\"false\" disabled>
                                                        <small id=\"help_name_";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 70), "name", [], "any", false, false, false, 70), "html", null, true);
        echo "\" class=\"form-text text-muted\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 70), "lang", [], "any", false, false, false, 70), "string", [], "any", false, false, false, 70), "admin", [], "any", false, false, false, 70), "languages", [], "any", false, false, false, 70), "forms", [], "any", false, false, false, 70), "name", [], "any", false, false, false, 70), "desc", [], "any", false, false, false, 70), "html", null, true);
        echo "</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_title_";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 76), "title", [], "any", false, false, false, 76), "html", null, true);
        echo "\" class=\"col-form-label\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 76), "lang", [], "any", false, false, false, 76), "string", [], "any", false, false, false, 76), "admin", [], "any", false, false, false, 76), "languages", [], "any", false, false, false, 76), "forms", [], "any", false, false, false, 76), "title", [], "any", false, false, false, 76), "title", [], "any", false, false, false, 76), "html", null, true);
        echo "</label>
                                                    <div>
                                                        <input name=\"options[title]\" class=\"form-control\" id=\"static_title_";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 78), "id", [], "any", false, false, false, 78), "html", null, true);
        echo "\" type=\"text\" aria-label=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 78), "desc", [], "any", false, false, false, 78), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 78), "title", [], "any", false, false, false, 78), "html", null, true);
        echo "\" aria-describedby=\"help_title_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 78), "id", [], "any", false, false, false, 78), "html", null, true);
        echo "\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_title_";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 79), "id", [], "any", false, false, false, 79), "html", null, true);
        echo "\" class=\"form-text text-muted\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 79), "lang", [], "any", false, false, false, 79), "string", [], "any", false, false, false, 79), "admin", [], "any", false, false, false, 79), "languages", [], "any", false, false, false, 79), "forms", [], "any", false, false, false, 79), "title", [], "any", false, false, false, 79), "desc", [], "any", false, false, false, 79), "html", null, true);
        echo "</small>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_desc_";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 83), "id", [], "any", false, false, false, 83), "html", null, true);
        echo "\" class=\"col-form-label\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 83), "lang", [], "any", false, false, false, 83), "string", [], "any", false, false, false, 83), "admin", [], "any", false, false, false, 83), "languages", [], "any", false, false, false, 83), "forms", [], "any", false, false, false, 83), "desc", [], "any", false, false, false, 83), "title", [], "any", false, false, false, 83), "html", null, true);
        echo "</label>
                                                    <div>
                                                        <input name=\"options[desc]\" class=\"form-control\" id=\"static_desc_";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 85), "id", [], "any", false, false, false, 85), "html", null, true);
        echo "\" type=\"text\" aria-label=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 85), "desc", [], "any", false, false, false, 85), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 85), "desc", [], "any", false, false, false, 85), "html", null, true);
        echo "\" aria-describedby=\"help_desc_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 85), "id", [], "any", false, false, false, 85), "html", null, true);
        echo "\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_desc_";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 86), "id", [], "any", false, false, false, 86), "html", null, true);
        echo "\" class=\"form-text text-muted\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 86), "lang", [], "any", false, false, false, 86), "string", [], "any", false, false, false, 86), "admin", [], "any", false, false, false, 86), "languages", [], "any", false, false, false, 86), "forms", [], "any", false, false, false, 86), "desc", [], "any", false, false, false, 86), "desc", [], "any", false, false, false, 86), "html", null, true);
        echo "</small>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_dir_";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 90), "id", [], "any", false, false, false, 90), "html", null, true);
        echo "\" class=\"col-form-label\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 90), "lang", [], "any", false, false, false, 90), "string", [], "any", false, false, false, 90), "admin", [], "any", false, false, false, 90), "languages", [], "any", false, false, false, 90), "forms", [], "any", false, false, false, 90), "dir", [], "any", false, false, false, 90), "title", [], "any", false, false, false, 90), "html", null, true);
        echo "</label>
                                                    <div>
                                                        <input name=\"options[dir]\" class=\"form-control\" id=\"static_dir_";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92), "html", null, true);
        echo "\" type=\"text\" aria-label=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 92), "text_direction", [], "any", false, false, false, 92), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 92), "text_direction", [], "any", false, false, false, 92), "html", null, true);
        echo "\" aria-describedby=\"help_dir_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92), "html", null, true);
        echo "\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_dir_";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 93), "id", [], "any", false, false, false, 93), "html", null, true);
        echo "\" class=\"form-text text-muted\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 93), "lang", [], "any", false, false, false, 93), "string", [], "any", false, false, false, 93), "admin", [], "any", false, false, false, 93), "languages", [], "any", false, false, false, 93), "forms", [], "any", false, false, false, 93), "dir", [], "any", false, false, false, 93), "desc", [], "any", false, false, false, 93), "html", null, true);
        echo "</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_zone_";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 99), "id", [], "any", false, false, false, 99), "html", null, true);
        echo "\" class=\"col-form-label\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 99), "lang", [], "any", false, false, false, 99), "string", [], "any", false, false, false, 99), "admin", [], "any", false, false, false, 99), "languages", [], "any", false, false, false, 99), "forms", [], "any", false, false, false, 99), "zone", [], "any", false, false, false, 99), "title", [], "any", false, false, false, 99), "html", null, true);
        echo "</label>
                                                    <div>
                                                        <select name=\"options[zone]\" class=\"custom-select custom-select-sm\">
                                                            ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 102), "date", [], "any", false, false, false, 102), "getAllTimezones", [], "method", false, false, false, 102));
        foreach ($context['_seq'] as $context["_key"] => $context["zone"]) {
            // line 103
            echo "                                                                <option value=\"";
            echo twig_escape_filter($this->env, $context["zone"], "html", null, true);
            echo "\" ";
            echo ((($context["zone"] === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 103), "timer", [], "any", false, false, false, 103), "zone", [], "any", false, false, false, 103))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["zone"], "html", null, true);
            echo "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                                                        </select>
                                                        <small id=\"help_zone_";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 106), "id", [], "any", false, false, false, 106), "html", null, true);
        echo "\" class=\"form-text text-muted\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 106), "lang", [], "any", false, false, false, 106), "string", [], "any", false, false, false, 106), "admin", [], "any", false, false, false, 106), "languages", [], "any", false, false, false, 106), "forms", [], "any", false, false, false, 106), "zone", [], "any", false, false, false, 106), "desc", [], "any", false, false, false, 106), "html", null, true);
        echo "</small>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_format_";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 110), "id", [], "any", false, false, false, 110), "html", null, true);
        echo "\" class=\"col-form-label\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 110), "lang", [], "any", false, false, false, 110), "string", [], "any", false, false, false, 110), "admin", [], "any", false, false, false, 110), "languages", [], "any", false, false, false, 110), "forms", [], "any", false, false, false, 110), "format", [], "any", false, false, false, 110), "title", [], "any", false, false, false, 110), "html", null, true);
        echo "</label>
                                                    <div>
                                                        <input name=\"options[format]\" class=\"form-control\" id=\"static_format_";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 112), "id", [], "any", false, false, false, 112), "html", null, true);
        echo "\" type=\"text\" aria-label=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 112), "timer", [], "any", false, false, false, 112), "format", [], "any", false, false, false, 112), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 112), "timer", [], "any", false, false, false, 112), "format", [], "any", false, false, false, 112), "html", null, true);
        echo "\" aria-describedby=\"help_format_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 112), "id", [], "any", false, false, false, 112), "html", null, true);
        echo "\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_format_";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 113), "id", [], "any", false, false, false, 113), "html", null, true);
        echo "\" class=\"form-text text-muted\">";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 113), "lang", [], "any", false, false, false, 113), "string", [], "any", false, false, false, 113), "admin", [], "any", false, false, false, 113), "languages", [], "any", false, false, false, 113), "forms", [], "any", false, false, false, 113), "format", [], "any", false, false, false, 113), "desc", [], "any", false, false, false, 113);
        echo "</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_date_format_";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 119), "id", [], "any", false, false, false, 119), "html", null, true);
        echo "\" class=\"col-form-label\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 119), "lang", [], "any", false, false, false, 119), "string", [], "any", false, false, false, 119), "admin", [], "any", false, false, false, 119), "languages", [], "any", false, false, false, 119), "forms", [], "any", false, false, false, 119), "date_format", [], "any", false, false, false, 119), "title", [], "any", false, false, false, 119), "html", null, true);
        echo "</label>
                                                    <div>
                                                        <input name=\"options[date_format]\" class=\"form-control\" id=\"static_date_format_";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 121), "id", [], "any", false, false, false, 121), "html", null, true);
        echo "\" type=\"text\" aria-label=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 121), "timer", [], "any", false, false, false, 121), "date_format", [], "any", false, false, false, 121), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 121), "timer", [], "any", false, false, false, 121), "date_format", [], "any", false, false, false, 121), "html", null, true);
        echo "\" aria-describedby=\"help_date_format_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 121), "id", [], "any", false, false, false, 121), "html", null, true);
        echo "\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_date_format_";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 122), "timer", [], "any", false, false, false, 122), "id", [], "any", false, false, false, 122), "html", null, true);
        echo "\" class=\"form-text text-muted\">";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 122), "lang", [], "any", false, false, false, 122), "string", [], "any", false, false, false, 122), "admin", [], "any", false, false, false, 122), "languages", [], "any", false, false, false, 122), "forms", [], "any", false, false, false, 122), "date_format", [], "any", false, false, false, 122), "desc", [], "any", false, false, false, 122);
        echo "</small>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_date_format_simple_";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 126), "id", [], "any", false, false, false, 126), "html", null, true);
        echo "\" class=\"col-form-label\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 126), "lang", [], "any", false, false, false, 126), "string", [], "any", false, false, false, 126), "admin", [], "any", false, false, false, 126), "languages", [], "any", false, false, false, 126), "forms", [], "any", false, false, false, 126), "date_format_simple", [], "any", false, false, false, 126), "title", [], "any", false, false, false, 126), "html", null, true);
        echo "</label>
                                                    <div>
                                                        <input name=\"options[date_format_simple]\" class=\"form-control\" id=\"static_date_format_simple_";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 128), "id", [], "any", false, false, false, 128), "html", null, true);
        echo "\" type=\"text\" aria-label=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 128), "timer", [], "any", false, false, false, 128), "date_format_simple", [], "any", false, false, false, 128), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 128), "timer", [], "any", false, false, false, 128), "date_format_simple", [], "any", false, false, false, 128), "html", null, true);
        echo "\" aria-describedby=\"help_date_format_simple_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 128), "id", [], "any", false, false, false, 128), "html", null, true);
        echo "\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_date_format_simple_";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 129), "id", [], "any", false, false, false, 129), "html", null, true);
        echo "\" class=\"form-text text-muted\">";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 129), "lang", [], "any", false, false, false, 129), "string", [], "any", false, false, false, 129), "admin", [], "any", false, false, false, 129), "languages", [], "any", false, false, false, 129), "forms", [], "any", false, false, false, 129), "date_format_simple", [], "any", false, false, false, 129), "desc", [], "any", false, false, false, 129);
        echo "</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_year_format_";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 135), "id", [], "any", false, false, false, 135), "html", null, true);
        echo "\" class=\"col-form-label\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 135), "lang", [], "any", false, false, false, 135), "string", [], "any", false, false, false, 135), "admin", [], "any", false, false, false, 135), "languages", [], "any", false, false, false, 135), "forms", [], "any", false, false, false, 135), "year_format", [], "any", false, false, false, 135), "title", [], "any", false, false, false, 135), "html", null, true);
        echo "</label>
                                                    <div>
                                                        <input name=\"options[year_format]\" class=\"form-control\" id=\"static_year_format_";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 137), "id", [], "any", false, false, false, 137), "html", null, true);
        echo "\" type=\"text\" aria-label=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 137), "timer", [], "any", false, false, false, 137), "year_format", [], "any", false, false, false, 137), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 137), "timer", [], "any", false, false, false, 137), "year_format", [], "any", false, false, false, 137), "html", null, true);
        echo "\" aria-describedby=\"help_year_format_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 137), "id", [], "any", false, false, false, 137), "html", null, true);
        echo "\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_year_format_";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 138), "id", [], "any", false, false, false, 138), "html", null, true);
        echo "\" class=\"form-text text-muted\">";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 138), "lang", [], "any", false, false, false, 138), "string", [], "any", false, false, false, 138), "admin", [], "any", false, false, false, 138), "languages", [], "any", false, false, false, 138), "forms", [], "any", false, false, false, 138), "year_format", [], "any", false, false, false, 138), "desc", [], "any", false, false, false, 138);
        echo "</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon pen\">";
        // line 143
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 143), "lang", [], "any", false, false, false, 143), "string", [], "any", false, false, false, 143), "container", [], "any", false, false, false, 143), "buttons", [], "any", false, false, false, 143), "update", [], "any", false, false, false, 143), "html", null, true);
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
        return "@ComponentBundle_Admin/Languages/edit.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 143,  443 => 138,  433 => 137,  426 => 135,  415 => 129,  405 => 128,  398 => 126,  389 => 122,  379 => 121,  372 => 119,  361 => 113,  351 => 112,  344 => 110,  335 => 106,  332 => 105,  319 => 103,  315 => 102,  307 => 99,  296 => 93,  286 => 92,  279 => 90,  270 => 86,  260 => 85,  253 => 83,  244 => 79,  234 => 78,  227 => 76,  216 => 70,  206 => 69,  199 => 67,  190 => 63,  180 => 62,  173 => 60,  162 => 52,  158 => 51,  152 => 48,  145 => 44,  133 => 37,  127 => 34,  123 => 33,  112 => 24,  110 => 23,  106 => 21,  104 => 20,  92 => 15,  86 => 14,  80 => 13,  74 => 12,  68 => 8,  64 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/languages/edit' %}

{% block title %}{{ app.sub.lang.parse.Parse('admin.languages.edit.title', string.language.title) }}{{ \" - \" }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminIndex', {}) }}\">{{ app.sub.lang.string.admin.container.title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminLanguages', {}) }}\">{{ app.sub.lang.string.admin.languages.list.title }}</a></div>
                    <div><a href=\"{{ app.phrase.buildLink('adminLanguages', {}) }}?l={{ string.language.name }}\">{{ string.language.title }}</a></div>
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
                        <h5 class=\"mb-0\">{{ app.sub.lang.parse.Parse('admin.languages.edit.title', string.language.title) }}</h5>
                        <small class=\"text-muted\">{{ app.sub.lang.string.admin.languages.edit.desc }}</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"{{ app.phrase.buildLink('adminLanguages', {}) }}\" class=\"btn btn-app-discussion icon back\">{{ app.sub.lang.string.container.buttons.back }}</a>
                    </div>
                </div>  
                <div class=\"d-flex flex-column align-items-center justify-content-center mt-3\">
                    <div class=\"service-list-area w-100\">
                        <form id=\"admin_languages_edit\" method=\"post\">
                            <div id=\"servicesAccordion\">
                                <div class=\"app-language app-service bg-white shadow-sm position-relative mb-3 rounded\" data-name=\"{{ string.language.name }}\">
                                    <div class=\"app-post\">
                                        <div class=\"post-layout d-flex align-items-center border-top-0 px-2 p-1 collapse\">
                                            <div class=\"post-icon\">
                                                <span class=\"fi fi-{{ string.item.getFlag(string.language.id) }} --xs\"></span>
                                            </div>
                                            <div class=\"head-title d-flex flex-column ml-lg-0 ml-2 mr-auto\">
                                                <span class=\"font-weight-bold\">{{ string.language.title }}</span>
                                                <small>{{ string.language.desc }}</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"p-2\">
                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_id_{{ string.language.id }}\" class=\"col-form-label\">{{ app.sub.lang.string.admin.languages.forms.id.title }}</label>
                                                    <div>
                                                        <input name=\"options[id]\" class=\"form-control\" id=\"static_id_{{ string.language.id }}\" type=\"text\" aria-label=\"{{ string.language.id }}\" value=\"{{ string.language.id }}\" aria-describedby=\"help_id_{{ string.language.id }}\" spellcheck=\"false\" disabled>
                                                        <small id=\"help_id_{{ string.language.id }}\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.languages.forms.id.desc }}</small>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_name_{{ string.language.name }}\" class=\"col-form-label\">{{ app.sub.lang.string.admin.languages.forms.name.title }}</label>
                                                    <div>
                                                        <input name=\"options[name]\" class=\"form-control\" id=\"static_name_{{ string.language.name }}\" type=\"text\" aria-label=\"{{ string.language.name }}\" value=\"{{ string.language.name }}\" aria-describedby=\"help_name_{{ string.language.name }}\" spellcheck=\"false\" disabled>
                                                        <small id=\"help_name_{{ string.language.name }}\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.languages.forms.name.desc }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_title_{{ string.language.title }}\" class=\"col-form-label\">{{ app.sub.lang.string.admin.languages.forms.title.title }}</label>
                                                    <div>
                                                        <input name=\"options[title]\" class=\"form-control\" id=\"static_title_{{ string.language.id }}\" type=\"text\" aria-label=\"{{ string.language.desc }}\" value=\"{{ string.language.title }}\" aria-describedby=\"help_title_{{ string.language.id }}\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_title_{{ string.language.id }}\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.languages.forms.title.desc }}</small>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_desc_{{ string.language.id }}\" class=\"col-form-label\">{{ app.sub.lang.string.admin.languages.forms.desc.title }}</label>
                                                    <div>
                                                        <input name=\"options[desc]\" class=\"form-control\" id=\"static_desc_{{ string.language.id }}\" type=\"text\" aria-label=\"{{ string.language.desc }}\" value=\"{{ string.language.desc }}\" aria-describedby=\"help_desc_{{ string.language.id }}\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_desc_{{ string.language.id }}\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.languages.forms.desc.desc }}</small>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_dir_{{ string.language.id }}\" class=\"col-form-label\">{{ app.sub.lang.string.admin.languages.forms.dir.title }}</label>
                                                    <div>
                                                        <input name=\"options[dir]\" class=\"form-control\" id=\"static_dir_{{ string.language.id }}\" type=\"text\" aria-label=\"{{ string.language.text_direction }}\" value=\"{{ string.language.text_direction }}\" aria-describedby=\"help_dir_{{ string.language.id }}\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_dir_{{ string.language.id }}\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.languages.forms.dir.desc }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_zone_{{ string.language.id }}\" class=\"col-form-label\">{{ app.sub.lang.string.admin.languages.forms.zone.title }}</label>
                                                    <div>
                                                        <select name=\"options[zone]\" class=\"custom-select custom-select-sm\">
                                                            {% for zone in app.timer.date.getAllTimezones() %}
                                                                <option value=\"{{ zone }}\" {{ zone is same as(string.language.timer.zone) ? 'selected' : '' }}>{{ zone }}</option>
                                                            {% endfor %}
                                                        </select>
                                                        <small id=\"help_zone_{{ string.language.id }}\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.languages.forms.zone.desc }}</small>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_format_{{ string.language.id }}\" class=\"col-form-label\">{{ app.sub.lang.string.admin.languages.forms.format.title }}</label>
                                                    <div>
                                                        <input name=\"options[format]\" class=\"form-control\" id=\"static_format_{{ string.language.id }}\" type=\"text\" aria-label=\"{{ string.language.timer.format }}\" value=\"{{ string.language.timer.format }}\" aria-describedby=\"help_format_{{ string.language.id }}\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_format_{{ string.language.id }}\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.languages.forms.format.desc|raw }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_date_format_{{ string.language.id }}\" class=\"col-form-label\">{{ app.sub.lang.string.admin.languages.forms.date_format.title }}</label>
                                                    <div>
                                                        <input name=\"options[date_format]\" class=\"form-control\" id=\"static_date_format_{{ string.language.id }}\" type=\"text\" aria-label=\"{{ string.language.timer.date_format }}\" value=\"{{ string.language.timer.date_format }}\" aria-describedby=\"help_date_format_{{ string.language.id }}\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_date_format_{{ string.language.timer.id }}\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.languages.forms.date_format.desc|raw }}</small>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_date_format_simple_{{ string.language.id }}\" class=\"col-form-label\">{{ app.sub.lang.string.admin.languages.forms.date_format_simple.title }}</label>
                                                    <div>
                                                        <input name=\"options[date_format_simple]\" class=\"form-control\" id=\"static_date_format_simple_{{ string.language.id }}\" type=\"text\" aria-label=\"{{ string.language.timer.date_format_simple }}\" value=\"{{ string.language.timer.date_format_simple }}\" aria-describedby=\"help_date_format_simple_{{ string.language.id }}\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_date_format_simple_{{ string.language.id }}\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.languages.forms.date_format_simple.desc|raw }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_year_format_{{ string.language.id }}\" class=\"col-form-label\">{{ app.sub.lang.string.admin.languages.forms.year_format.title }}</label>
                                                    <div>
                                                        <input name=\"options[year_format]\" class=\"form-control\" id=\"static_year_format_{{ string.language.id }}\" type=\"text\" aria-label=\"{{ string.language.timer.year_format }}\" value=\"{{ string.language.timer.year_format }}\" aria-describedby=\"help_year_format_{{ string.language.id }}\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_year_format_{{ string.language.id }}\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.languages.forms.year_format.desc|raw }}</small>
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
{% endblock %}", "@ComponentBundle_Admin/Languages/edit.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Mention\\Templates\\Admin\\Languages\\edit.tpl");
    }
}
