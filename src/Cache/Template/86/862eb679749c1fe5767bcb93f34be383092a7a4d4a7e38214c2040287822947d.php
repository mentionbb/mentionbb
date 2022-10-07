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

/* @ComponentBundle_Admin/Languages/new.tpl */
class __TwigTemplate_89c002d7bb463f3d8e31a3e51049219c7ed3c8041a1b24e2ae5aaf2ba692759f extends Template
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
        $this->parent = $this->loadTemplate("@ComponentBundle_Admin/container.tpl", "@ComponentBundle_Admin/Languages/new.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "@ComponentBundle/admin/languages/new";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 5), "lang", [], "any", false, false, false, 5), "string", [], "any", false, false, false, 5), "admin", [], "any", false, false, false, 5), "languages", [], "any", false, false, false, 5), "new", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
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
        echo "?new\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 15), "lang", [], "any", false, false, false, 15), "string", [], "any", false, false, false, 15), "admin", [], "any", false, false, false, 15), "languages", [], "any", false, false, false, 15), "new", [], "any", false, false, false, 15), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t";
        // line 20
        $this->loadTemplate("usermenu_member.tpl", "@ComponentBundle_Admin/Languages/new.tpl", 20)->display($context);
        // line 21
        echo "\t\t</div>
\t</div>
\t";
        // line 23
        $this->loadTemplate("@ComponentBundle_Admin/Layout/sidebar.tpl", "@ComponentBundle_Admin/Languages/new.tpl", 23)->display($context);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 33), "lang", [], "any", false, false, false, 33), "string", [], "any", false, false, false, 33), "admin", [], "any", false, false, false, 33), "languages", [], "any", false, false, false, 33), "new", [], "any", false, false, false, 33), "title", [], "any", false, false, false, 33), "html", null, true);
        echo "</h5>
                        <small class=\"text-muted\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 34), "lang", [], "any", false, false, false, 34), "string", [], "any", false, false, false, 34), "admin", [], "any", false, false, false, 34), "languages", [], "any", false, false, false, 34), "new", [], "any", false, false, false, 34), "desc", [], "any", false, false, false, 34), "html", null, true);
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
                        <form id=\"admin_languages_new\" method=\"post\">
                            <div id=\"servicesAccordion\">
                                <div class=\"app-language-new app-service bg-white shadow-sm position-relative mb-3 rounded\" data-name=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
        echo "\">
                                    <div class=\"app-post\">
                                        <div class=\"post-layout d-flex align-items-center border-top-0 px-2 p-1 collapse\">
                                            <div class=\"post-icon\">
                                                <i class=\"fas fa-language\"></i>
                                            </div>
                                            <div class=\"head-title d-flex flex-column ml-lg-0 ml-2 mr-auto\">
                                                <span class=\"font-weight-bold\">";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 51), "lang", [], "any", false, false, false, 51), "string", [], "any", false, false, false, 51), "admin", [], "any", false, false, false, 51), "languages", [], "any", false, false, false, 51), "new", [], "any", false, false, false, 51), "head", [], "any", false, false, false, 51), "title", [], "any", false, false, false, 51), "html", null, true);
        echo "</span>
                                            </div>
                                            <div class=\"mr-lg-5 mr-1\">
                                                <div class=\"app-post-manage\">
                                                    <div class=\"app-newLanguage-selectMain dropdown d-block\">
                                                        <button class=\"btn btn-app-dd no-anim-ui dropdown-toggle p-2\" type=\"button\" data-toggle=\"dropdown\"
                                                            aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 57), "lang", [], "any", false, false, false, 57), "string", [], "any", false, false, false, 57), "admin", [], "any", false, false, false, 57), "languages", [], "any", false, false, false, 57), "new", [], "any", false, false, false, 57), "dropdown", [], "any", false, false, false, 57), "title", [], "any", false, false, false, 57), "html", null, true);
        echo "</button>
                                                        <div class=\"dropdown-menu dropdown-menu-right custom-menu custom-menu-md shadow animate slideIn\">
                                                            <div class=\"title\">
                                                                <div>
                                                                    <span>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 61), "lang", [], "any", false, false, false, 61), "string", [], "any", false, false, false, 61), "container", [], "any", false, false, false, 61), "buttons", [], "any", false, false, false, 61), "select", [], "any", false, false, false, 61), "html", null, true);
        echo "</span>
                                                                </div>
                                                            </div>
                                                            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 64), "lang", [], "any", false, false, false, 64), "parse", [], "any", false, false, false, 64), "getLanguages", [], "method", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 65
            echo "                                                                <a class=\"notification quick-menu d-flex\" data-language=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 65), "html", null, true);
            echo "\" href=\"#\">
                                                                    <div class=\"text ml-2\">
                                                                        <i class=\"fi fi-";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 67), "getFlag", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 67)], "method", false, false, false, 67), "html", null, true);
            echo " --xs mr-1\"></i>
                                                                        <span>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 68), "html", null, true);
            echo "</span>
                                                                    </div>
                                                                </a>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"p-2\">
                                            <div class=\"bg-dark rounded p-1 px-2 mb-3 mt-2\">
                                                <span class=\"text-light\">";
        // line 81
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 81), "lang", [], "any", false, false, false, 81), "string", [], "any", false, false, false, 81), "admin", [], "any", false, false, false, 81), "languages", [], "any", false, false, false, 81), "new", [], "any", false, false, false, 81), "help", [], "any", false, false, false, 81);
        echo "</span>
                                            </div>
                                            <div class=\"js-AppAdmin_SelectedMainLanguageMessage d-none\">
                                                <span>";
        // line 84
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 84), "lang", [], "any", false, false, false, 84), "string", [], "any", false, false, false, 84), "admin", [], "any", false, false, false, 84), "languages", [], "any", false, false, false, 84), "new", [], "any", false, false, false, 84), "main_language_text", [], "any", false, false, false, 84);
        echo "</span>
                                            </div>
                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_id\" class=\"col-form-label\">";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 88), "lang", [], "any", false, false, false, 88), "string", [], "any", false, false, false, 88), "admin", [], "any", false, false, false, 88), "languages", [], "any", false, false, false, 88), "forms", [], "any", false, false, false, 88), "id", [], "any", false, false, false, 88), "title", [], "any", false, false, false, 88), "html", null, true);
        echo "</label>
                                                    <div>
                                                        <input name=\"options[id]\" class=\"form-control\" id=\"static_id\" type=\"text\" aria-describedby=\"help_id\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_id\" class=\"form-text text-muted\">";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 91), "lang", [], "any", false, false, false, 91), "string", [], "any", false, false, false, 91), "admin", [], "any", false, false, false, 91), "languages", [], "any", false, false, false, 91), "forms", [], "any", false, false, false, 91), "id", [], "any", false, false, false, 91), "desc", [], "any", false, false, false, 91), "html", null, true);
        echo "</small>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_name_";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 95), "name", [], "any", false, false, false, 95), "html", null, true);
        echo "\" class=\"col-form-label\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 95), "lang", [], "any", false, false, false, 95), "string", [], "any", false, false, false, 95), "admin", [], "any", false, false, false, 95), "languages", [], "any", false, false, false, 95), "forms", [], "any", false, false, false, 95), "name", [], "any", false, false, false, 95), "title", [], "any", false, false, false, 95), "html", null, true);
        echo "</label>
                                                    <div>
                                                        <input name=\"options[name]\" class=\"form-control\" id=\"static_name\" type=\"text\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_name_";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 98), "name", [], "any", false, false, false, 98), "html", null, true);
        echo "\" class=\"form-text text-muted\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 98), "lang", [], "any", false, false, false, 98), "string", [], "any", false, false, false, 98), "admin", [], "any", false, false, false, 98), "languages", [], "any", false, false, false, 98), "forms", [], "any", false, false, false, 98), "name", [], "any", false, false, false, 98), "desc", [], "any", false, false, false, 98), "html", null, true);
        echo "</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_title_";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 104), "title", [], "any", false, false, false, 104), "html", null, true);
        echo "\" class=\"col-form-label\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 104), "lang", [], "any", false, false, false, 104), "string", [], "any", false, false, false, 104), "admin", [], "any", false, false, false, 104), "languages", [], "any", false, false, false, 104), "forms", [], "any", false, false, false, 104), "title", [], "any", false, false, false, 104), "title", [], "any", false, false, false, 104), "html", null, true);
        echo "</label>
                                                    <div>
                                                        <input name=\"options[title]\" class=\"form-control\" id=\"static_title\" type=\"text\" aria-describedby=\"help_title\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_title\" class=\"form-text text-muted\">";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 107), "lang", [], "any", false, false, false, 107), "string", [], "any", false, false, false, 107), "admin", [], "any", false, false, false, 107), "languages", [], "any", false, false, false, 107), "forms", [], "any", false, false, false, 107), "title", [], "any", false, false, false, 107), "desc", [], "any", false, false, false, 107), "html", null, true);
        echo "</small>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_desc\" class=\"col-form-label\">";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 111), "lang", [], "any", false, false, false, 111), "string", [], "any", false, false, false, 111), "admin", [], "any", false, false, false, 111), "languages", [], "any", false, false, false, 111), "forms", [], "any", false, false, false, 111), "desc", [], "any", false, false, false, 111), "title", [], "any", false, false, false, 111), "html", null, true);
        echo "</label>
                                                    <div>
                                                        <input name=\"options[desc]\" class=\"form-control\" id=\"static_desc\" type=\"text\" aria-describedby=\"help_desc\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_desc\" class=\"form-text text-muted\">";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 114), "lang", [], "any", false, false, false, 114), "string", [], "any", false, false, false, 114), "admin", [], "any", false, false, false, 114), "languages", [], "any", false, false, false, 114), "forms", [], "any", false, false, false, 114), "desc", [], "any", false, false, false, 114), "desc", [], "any", false, false, false, 114), "html", null, true);
        echo "</small>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_dir\" class=\"col-form-label\">";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 118), "lang", [], "any", false, false, false, 118), "string", [], "any", false, false, false, 118), "admin", [], "any", false, false, false, 118), "languages", [], "any", false, false, false, 118), "forms", [], "any", false, false, false, 118), "dir", [], "any", false, false, false, 118), "title", [], "any", false, false, false, 118), "html", null, true);
        echo "</label>
                                                    <div>
                                                        <input name=\"options[dir]\" class=\"form-control\" id=\"static_dir\" type=\"text\" aria-describedby=\"help_dir\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_dir\" class=\"form-text text-muted\">";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 121), "lang", [], "any", false, false, false, 121), "string", [], "any", false, false, false, 121), "admin", [], "any", false, false, false, 121), "languages", [], "any", false, false, false, 121), "forms", [], "any", false, false, false, 121), "dir", [], "any", false, false, false, 121), "desc", [], "any", false, false, false, 121), "html", null, true);
        echo "</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_zone\" class=\"col-form-label\">";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 127), "lang", [], "any", false, false, false, 127), "string", [], "any", false, false, false, 127), "admin", [], "any", false, false, false, 127), "languages", [], "any", false, false, false, 127), "forms", [], "any", false, false, false, 127), "zone", [], "any", false, false, false, 127), "title", [], "any", false, false, false, 127), "html", null, true);
        echo "</label>
                                                    <div>
                                                        <select name=\"options[zone]\" class=\"custom-select custom-select-sm\">
                                                            ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 130), "date", [], "any", false, false, false, 130), "getAllTimezones", [], "method", false, false, false, 130));
        foreach ($context['_seq'] as $context["_key"] => $context["zone"]) {
            // line 131
            echo "                                                                <option value=\"";
            echo twig_escape_filter($this->env, $context["zone"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["zone"], "html", null, true);
            echo "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "                                                        </select>
                                                        <small id=\"help_zone\" class=\"form-text text-muted\">";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 134), "lang", [], "any", false, false, false, 134), "string", [], "any", false, false, false, 134), "admin", [], "any", false, false, false, 134), "languages", [], "any", false, false, false, 134), "forms", [], "any", false, false, false, 134), "zone", [], "any", false, false, false, 134), "desc", [], "any", false, false, false, 134), "html", null, true);
        echo "</small>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_format\" class=\"col-form-label\">";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 138), "lang", [], "any", false, false, false, 138), "string", [], "any", false, false, false, 138), "admin", [], "any", false, false, false, 138), "languages", [], "any", false, false, false, 138), "forms", [], "any", false, false, false, 138), "format", [], "any", false, false, false, 138), "title", [], "any", false, false, false, 138), "html", null, true);
        echo "</label>
                                                    <div>
                                                        <input name=\"options[format]\" class=\"form-control\" id=\"static_format\" type=\"text\" aria-describedby=\"help_format\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_format\" class=\"form-text text-muted\">";
        // line 141
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 141), "lang", [], "any", false, false, false, 141), "string", [], "any", false, false, false, 141), "admin", [], "any", false, false, false, 141), "languages", [], "any", false, false, false, 141), "forms", [], "any", false, false, false, 141), "format", [], "any", false, false, false, 141), "desc", [], "any", false, false, false, 141);
        echo "</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_date_format\" class=\"col-form-label\">";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 147), "lang", [], "any", false, false, false, 147), "string", [], "any", false, false, false, 147), "admin", [], "any", false, false, false, 147), "languages", [], "any", false, false, false, 147), "forms", [], "any", false, false, false, 147), "date_format", [], "any", false, false, false, 147), "title", [], "any", false, false, false, 147), "html", null, true);
        echo "</label>
                                                    <div>
                                                        <input name=\"options[date_format]\" class=\"form-control\" id=\"static_date_format\" type=\"text\" aria-describedby=\"help_date_format\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_date_format_";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 150), "timer", [], "any", false, false, false, 150), "id", [], "any", false, false, false, 150), "html", null, true);
        echo "\" class=\"form-text text-muted\">";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 150), "lang", [], "any", false, false, false, 150), "string", [], "any", false, false, false, 150), "admin", [], "any", false, false, false, 150), "languages", [], "any", false, false, false, 150), "forms", [], "any", false, false, false, 150), "date_format", [], "any", false, false, false, 150), "desc", [], "any", false, false, false, 150);
        echo "</small>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_date_format_simple\" class=\"col-form-label\">";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 154), "lang", [], "any", false, false, false, 154), "string", [], "any", false, false, false, 154), "admin", [], "any", false, false, false, 154), "languages", [], "any", false, false, false, 154), "forms", [], "any", false, false, false, 154), "date_format_simple", [], "any", false, false, false, 154), "title", [], "any", false, false, false, 154), "html", null, true);
        echo "</label>
                                                    <div>
                                                        <input name=\"options[date_format_simple]\" class=\"form-control\" id=\"static_date_format_simple\" type=\"text\" aria-describedby=\"help_date_format_simple\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_date_format_simple\" class=\"form-text text-muted\">";
        // line 157
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 157), "lang", [], "any", false, false, false, 157), "string", [], "any", false, false, false, 157), "admin", [], "any", false, false, false, 157), "languages", [], "any", false, false, false, 157), "forms", [], "any", false, false, false, 157), "date_format_simple", [], "any", false, false, false, 157), "desc", [], "any", false, false, false, 157);
        echo "</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_year_format\" class=\"col-form-label\">";
        // line 163
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 163), "lang", [], "any", false, false, false, 163), "string", [], "any", false, false, false, 163), "admin", [], "any", false, false, false, 163), "languages", [], "any", false, false, false, 163), "forms", [], "any", false, false, false, 163), "year_format", [], "any", false, false, false, 163), "title", [], "any", false, false, false, 163), "html", null, true);
        echo "</label>
                                                    <div>
                                                        <input name=\"options[year_format]\" class=\"form-control\" id=\"static_year_format\" type=\"text\" aria-describedby=\"help_year_format\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_year_format\" class=\"form-text text-muted\">";
        // line 166
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 166), "lang", [], "any", false, false, false, 166), "string", [], "any", false, false, false, 166), "admin", [], "any", false, false, false, 166), "languages", [], "any", false, false, false, 166), "forms", [], "any", false, false, false, 166), "year_format", [], "any", false, false, false, 166), "desc", [], "any", false, false, false, 166);
        echo "</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon pen\">";
        // line 171
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 171), "lang", [], "any", false, false, false, 171), "string", [], "any", false, false, false, 171), "container", [], "any", false, false, false, 171), "buttons", [], "any", false, false, false, 171), "update", [], "any", false, false, false, 171), "html", null, true);
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
        return "@ComponentBundle_Admin/Languages/new.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 171,  380 => 166,  374 => 163,  365 => 157,  359 => 154,  350 => 150,  344 => 147,  335 => 141,  329 => 138,  322 => 134,  319 => 133,  308 => 131,  304 => 130,  298 => 127,  289 => 121,  283 => 118,  276 => 114,  270 => 111,  263 => 107,  255 => 104,  244 => 98,  236 => 95,  229 => 91,  223 => 88,  216 => 84,  210 => 81,  199 => 72,  189 => 68,  185 => 67,  179 => 65,  175 => 64,  169 => 61,  162 => 57,  153 => 51,  143 => 44,  131 => 37,  125 => 34,  121 => 33,  110 => 24,  108 => 23,  104 => 21,  102 => 20,  92 => 15,  86 => 14,  80 => 13,  74 => 12,  68 => 8,  64 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/languages/new' %}

{% block title %}{{ app.sub.lang.string.admin.languages.new.title }}{{ \" - \" }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminIndex', {}) }}\">{{ app.sub.lang.string.admin.container.title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminLanguages', {}) }}\">{{ app.sub.lang.string.admin.languages.list.title }}</a></div>
                    <div><a href=\"{{ app.phrase.buildLink('adminLanguages', {}) }}?new\">{{ app.sub.lang.string.admin.languages.new.title }}</a></div>
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
                        <h5 class=\"mb-0\">{{ app.sub.lang.string.admin.languages.new.title }}</h5>
                        <small class=\"text-muted\">{{ app.sub.lang.string.admin.languages.new.desc }}</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"{{ app.phrase.buildLink('adminLanguages', {}) }}\" class=\"btn btn-app-discussion icon back\">{{ app.sub.lang.string.container.buttons.back }}</a>
                    </div>
                </div>  
                <div class=\"d-flex flex-column align-items-center justify-content-center mt-3\">
                    <div class=\"service-list-area w-100\">
                        <form id=\"admin_languages_new\" method=\"post\">
                            <div id=\"servicesAccordion\">
                                <div class=\"app-language-new app-service bg-white shadow-sm position-relative mb-3 rounded\" data-name=\"{{ string.language.name }}\">
                                    <div class=\"app-post\">
                                        <div class=\"post-layout d-flex align-items-center border-top-0 px-2 p-1 collapse\">
                                            <div class=\"post-icon\">
                                                <i class=\"fas fa-language\"></i>
                                            </div>
                                            <div class=\"head-title d-flex flex-column ml-lg-0 ml-2 mr-auto\">
                                                <span class=\"font-weight-bold\">{{ app.sub.lang.string.admin.languages.new.head.title }}</span>
                                            </div>
                                            <div class=\"mr-lg-5 mr-1\">
                                                <div class=\"app-post-manage\">
                                                    <div class=\"app-newLanguage-selectMain dropdown d-block\">
                                                        <button class=\"btn btn-app-dd no-anim-ui dropdown-toggle p-2\" type=\"button\" data-toggle=\"dropdown\"
                                                            aria-haspopup=\"true\" aria-expanded=\"false\">{{ app.sub.lang.string.admin.languages.new.dropdown.title }}</button>
                                                        <div class=\"dropdown-menu dropdown-menu-right custom-menu custom-menu-md shadow animate slideIn\">
                                                            <div class=\"title\">
                                                                <div>
                                                                    <span>{{ app.sub.lang.string.container.buttons.select }}</span>
                                                                </div>
                                                            </div>
                                                            {% for item in app.sub.lang.parse.getLanguages() %}
                                                                <a class=\"notification quick-menu d-flex\" data-language=\"{{ item.name }}\" href=\"#\">
                                                                    <div class=\"text ml-2\">
                                                                        <i class=\"fi fi-{{ string.language.getFlag(item.id) }} --xs mr-1\"></i>
                                                                        <span>{{ item.title }}</span>
                                                                    </div>
                                                                </a>
                                                            {% endfor %}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"p-2\">
                                            <div class=\"bg-dark rounded p-1 px-2 mb-3 mt-2\">
                                                <span class=\"text-light\">{{ app.sub.lang.string.admin.languages.new.help|raw }}</span>
                                            </div>
                                            <div class=\"js-AppAdmin_SelectedMainLanguageMessage d-none\">
                                                <span>{{ app.sub.lang.string.admin.languages.new.main_language_text|raw }}</span>
                                            </div>
                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_id\" class=\"col-form-label\">{{ app.sub.lang.string.admin.languages.forms.id.title }}</label>
                                                    <div>
                                                        <input name=\"options[id]\" class=\"form-control\" id=\"static_id\" type=\"text\" aria-describedby=\"help_id\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_id\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.languages.forms.id.desc }}</small>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_name_{{ string.language.name }}\" class=\"col-form-label\">{{ app.sub.lang.string.admin.languages.forms.name.title }}</label>
                                                    <div>
                                                        <input name=\"options[name]\" class=\"form-control\" id=\"static_name\" type=\"text\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_name_{{ string.language.name }}\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.languages.forms.name.desc }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_title_{{ string.language.title }}\" class=\"col-form-label\">{{ app.sub.lang.string.admin.languages.forms.title.title }}</label>
                                                    <div>
                                                        <input name=\"options[title]\" class=\"form-control\" id=\"static_title\" type=\"text\" aria-describedby=\"help_title\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_title\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.languages.forms.title.desc }}</small>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_desc\" class=\"col-form-label\">{{ app.sub.lang.string.admin.languages.forms.desc.title }}</label>
                                                    <div>
                                                        <input name=\"options[desc]\" class=\"form-control\" id=\"static_desc\" type=\"text\" aria-describedby=\"help_desc\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_desc\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.languages.forms.desc.desc }}</small>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_dir\" class=\"col-form-label\">{{ app.sub.lang.string.admin.languages.forms.dir.title }}</label>
                                                    <div>
                                                        <input name=\"options[dir]\" class=\"form-control\" id=\"static_dir\" type=\"text\" aria-describedby=\"help_dir\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_dir\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.languages.forms.dir.desc }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_zone\" class=\"col-form-label\">{{ app.sub.lang.string.admin.languages.forms.zone.title }}</label>
                                                    <div>
                                                        <select name=\"options[zone]\" class=\"custom-select custom-select-sm\">
                                                            {% for zone in app.timer.date.getAllTimezones() %}
                                                                <option value=\"{{ zone }}\">{{ zone }}</option>
                                                            {% endfor %}
                                                        </select>
                                                        <small id=\"help_zone\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.languages.forms.zone.desc }}</small>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_format\" class=\"col-form-label\">{{ app.sub.lang.string.admin.languages.forms.format.title }}</label>
                                                    <div>
                                                        <input name=\"options[format]\" class=\"form-control\" id=\"static_format\" type=\"text\" aria-describedby=\"help_format\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_format\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.languages.forms.format.desc|raw }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_date_format\" class=\"col-form-label\">{{ app.sub.lang.string.admin.languages.forms.date_format.title }}</label>
                                                    <div>
                                                        <input name=\"options[date_format]\" class=\"form-control\" id=\"static_date_format\" type=\"text\" aria-describedby=\"help_date_format\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_date_format_{{ string.language.timer.id }}\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.languages.forms.date_format.desc|raw }}</small>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_date_format_simple\" class=\"col-form-label\">{{ app.sub.lang.string.admin.languages.forms.date_format_simple.title }}</label>
                                                    <div>
                                                        <input name=\"options[date_format_simple]\" class=\"form-control\" id=\"static_date_format_simple\" type=\"text\" aria-describedby=\"help_date_format_simple\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_date_format_simple\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.languages.forms.date_format_simple.desc|raw }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_year_format\" class=\"col-form-label\">{{ app.sub.lang.string.admin.languages.forms.year_format.title }}</label>
                                                    <div>
                                                        <input name=\"options[year_format]\" class=\"form-control\" id=\"static_year_format\" type=\"text\" aria-describedby=\"help_year_format\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_year_format\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.languages.forms.year_format.desc|raw }}</small>
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
{% endblock %}", "@ComponentBundle_Admin/Languages/new.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Mention\\Templates\\Admin\\Languages\\new.tpl");
    }
}
