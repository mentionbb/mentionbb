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

/* @ComponentBundle_Admin/Users/add_user.tpl */
class __TwigTemplate_e7f282374ef32856cd5b02463923d84e extends Template
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
        $this->parent = $this->loadTemplate("@ComponentBundle_Admin/container.tpl", "@ComponentBundle_Admin/Users/add_user.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "@ComponentBundle/admin/add_user";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 5), "lang", [], "any", false, false, false, 5), "string", [], "any", false, false, false, 5), "admin", [], "any", false, false, false, 5), "users", [], "any", false, false, false, 5), "new", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 14), "buildLink", [0 => "adminUsers", 1 => []], "method", false, false, false, 14), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 14), "lang", [], "any", false, false, false, 14), "string", [], "any", false, false, false, 14), "admin", [], "any", false, false, false, 14), "users", [], "any", false, false, false, 14), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "</a></div>
                    <div><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 15), "buildLink", [0 => "adminUsers", 1 => []], "method", false, false, false, 15), "html", null, true);
        echo "?addUser\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 15), "lang", [], "any", false, false, false, 15), "string", [], "any", false, false, false, 15), "admin", [], "any", false, false, false, 15), "users", [], "any", false, false, false, 15), "new", [], "any", false, false, false, 15), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t";
        // line 20
        $this->loadTemplate("usermenu_member.tpl", "@ComponentBundle_Admin/Users/add_user.tpl", 20)->display($context);
        // line 21
        echo "\t\t</div>
\t</div>
\t";
        // line 23
        $this->loadTemplate("@ComponentBundle_Admin/Layout/sidebar.tpl", "@ComponentBundle_Admin/Users/add_user.tpl", 23)->display($context);
        // line 24
        echo "\t
\t<aside class=\"col-sm-9\">
\t\t<div class=\"app-box shadow rounded\" data-tab=\"userNew\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center mb-3\">
                    <div>
                        <h5 class=\"mb-0\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 33), "lang", [], "any", false, false, false, 33), "string", [], "any", false, false, false, 33), "admin", [], "any", false, false, false, 33), "users", [], "any", false, false, false, 33), "new", [], "any", false, false, false, 33), "title", [], "any", false, false, false, 33), "html", null, true);
        echo "</h5>
                        <small class=\"text-muted\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 34), "lang", [], "any", false, false, false, 34), "string", [], "any", false, false, false, 34), "admin", [], "any", false, false, false, 34), "users", [], "any", false, false, false, 34), "new", [], "any", false, false, false, 34), "desc", [], "any", false, false, false, 34), "html", null, true);
        echo "</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 37), "buildLink", [0 => "adminUsers", 1 => []], "method", false, false, false, 37), "html", null, true);
        echo "\" class=\"btn btn-app-discussion icon back\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 37), "lang", [], "any", false, false, false, 37), "string", [], "any", false, false, false, 37), "container", [], "any", false, false, false, 37), "buttons", [], "any", false, false, false, 37), "back", [], "any", false, false, false, 37), "html", null, true);
        echo "</a>
                    </div>
                </div> 
                <hr>
                <div class=\"d-flex flex-column justify-content-center align-items-center\">
                    <div id=\"userAccordion\" class=\"w-100 rounded\">
                        <div class=\"setting-group list new-forum bg-white text-dark shadow-sm position-relative rounded\">
                            <div class=\"bg-light d-flex align-items-center p-2 px-0\">
                                <span class=\"icon\"></span>
                                <div class=\"title ml-lg-0 ml-2 mr-auto\">
                                    <span class=\"font-weight-bold\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 47), "lang", [], "any", false, false, false, 47), "string", [], "any", false, false, false, 47), "admin", [], "any", false, false, false, 47), "users", [], "any", false, false, false, 47), "new", [], "any", false, false, false, 47), "title", [], "any", false, false, false, 47), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            <form id=\"admin_users_new\" method=\"post\">
                                <div class=\"p-2 border-bottom\">
                                    <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                        <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                            <label for=\"static_name\" class=\"col-form-label\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 54), "lang", [], "any", false, false, false, 54), "string", [], "any", false, false, false, 54), "admin", [], "any", false, false, false, 54), "users", [], "any", false, false, false, 54), "forms", [], "any", false, false, false, 54), "name", [], "any", false, false, false, 54), "title", [], "any", false, false, false, 54), "html", null, true);
        echo "</label>
                                            <div>
                                                <input class=\"form-control\" name=\"username\" id=\"static_name\" type=\"text\" placeholder=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 56), "lang", [], "any", false, false, false, 56), "string", [], "any", false, false, false, 56), "admin", [], "any", false, false, false, 56), "users", [], "any", false, false, false, 56), "forms", [], "any", false, false, false, 56), "name", [], "any", false, false, false, 56), "desc", [], "any", false, false, false, 56), "html", null, true);
        echo "\" aria-label=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 56), "lang", [], "any", false, false, false, 56), "string", [], "any", false, false, false, 56), "admin", [], "any", false, false, false, 56), "users", [], "any", false, false, false, 56), "forms", [], "any", false, false, false, 56), "password", [], "any", false, false, false, 56), "desc", [], "any", false, false, false, 56), "html", null, true);
        echo "\" aria-describedby=\"help_name\" spellcheck=\"false\" required=\"required\">
                                                <small id=\"help_name\" class=\"form-text text-muted\">";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 57), "lang", [], "any", false, false, false, 57), "string", [], "any", false, false, false, 57), "admin", [], "any", false, false, false, 57), "users", [], "any", false, false, false, 57), "forms", [], "any", false, false, false, 57), "name", [], "any", false, false, false, 57), "desc", [], "any", false, false, false, 57), "html", null, true);
        echo "</small>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                            <label for=\"static_password\" class=\"col-form-label\">";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 61), "lang", [], "any", false, false, false, 61), "string", [], "any", false, false, false, 61), "admin", [], "any", false, false, false, 61), "users", [], "any", false, false, false, 61), "forms", [], "any", false, false, false, 61), "password", [], "any", false, false, false, 61), "title", [], "any", false, false, false, 61), "html", null, true);
        echo "</label>
                                            <div>
                                                <input class=\"form-control\" name=\"password\" id=\"static_password\" type=\"password\" placeholder=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 63), "lang", [], "any", false, false, false, 63), "string", [], "any", false, false, false, 63), "admin", [], "any", false, false, false, 63), "users", [], "any", false, false, false, 63), "forms", [], "any", false, false, false, 63), "password", [], "any", false, false, false, 63), "desc", [], "any", false, false, false, 63), "html", null, true);
        echo "\" aria-label=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 63), "lang", [], "any", false, false, false, 63), "string", [], "any", false, false, false, 63), "admin", [], "any", false, false, false, 63), "users", [], "any", false, false, false, 63), "forms", [], "any", false, false, false, 63), "password", [], "any", false, false, false, 63), "desc", [], "any", false, false, false, 63), "html", null, true);
        echo "\" aria-describedby=\"help_password\" spellcheck=\"false\" required=\"required\">
                                                <small id=\"help_password\" class=\"form-text text-muted\">";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 64), "lang", [], "any", false, false, false, 64), "string", [], "any", false, false, false, 64), "admin", [], "any", false, false, false, 64), "users", [], "any", false, false, false, 64), "forms", [], "any", false, false, false, 64), "password", [], "any", false, false, false, 64), "text", [], "any", false, false, false, 64), "html", null, true);
        echo "</small>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                            <label for=\"static_mail\" class=\"col-form-label\">";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 68), "lang", [], "any", false, false, false, 68), "string", [], "any", false, false, false, 68), "admin", [], "any", false, false, false, 68), "users", [], "any", false, false, false, 68), "forms", [], "any", false, false, false, 68), "mail", [], "any", false, false, false, 68), "title", [], "any", false, false, false, 68), "html", null, true);
        echo "</label>
                                            <div>
                                                <input class=\"form-control\" name=\"mail\" id=\"static_mail\" type=\"mail\" placeholder=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 70), "lang", [], "any", false, false, false, 70), "string", [], "any", false, false, false, 70), "admin", [], "any", false, false, false, 70), "users", [], "any", false, false, false, 70), "forms", [], "any", false, false, false, 70), "mail", [], "any", false, false, false, 70), "desc", [], "any", false, false, false, 70), "html", null, true);
        echo "\" aria-label=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 70), "lang", [], "any", false, false, false, 70), "string", [], "any", false, false, false, 70), "admin", [], "any", false, false, false, 70), "users", [], "any", false, false, false, 70), "forms", [], "any", false, false, false, 70), "mail", [], "any", false, false, false, 70), "desc", [], "any", false, false, false, 70), "html", null, true);
        echo "\" aria-describedby=\"help_mail\" spellcheck=\"false\" required=\"required\">
                                                <small id=\"help_mail\" class=\"form-text text-muted\">";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 71), "lang", [], "any", false, false, false, 71), "string", [], "any", false, false, false, 71), "admin", [], "any", false, false, false, 71), "users", [], "any", false, false, false, 71), "forms", [], "any", false, false, false, 71), "mail", [], "any", false, false, false, 71), "text", [], "any", false, false, false, 71), "html", null, true);
        echo "</small>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-6 col-sm-12 pr-lg-5\"></div>
                                        <div class=\"col-lg-6 col-sm-12 pr-lg-5 mt-4\">
                                            <label for=\"static_title\" class=\"col-form-label\">";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 76), "lang", [], "any", false, false, false, 76), "string", [], "any", false, false, false, 76), "admin", [], "any", false, false, false, 76), "users", [], "any", false, false, false, 76), "forms", [], "any", false, false, false, 76), "title", [], "any", false, false, false, 76), "title", [], "any", false, false, false, 76), "html", null, true);
        echo "</label>
                                            <div>
                                                <input class=\"form-control\" name=\"title\" id=\"static_title\" type=\"text\" placeholder=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 78), "lang", [], "any", false, false, false, 78), "string", [], "any", false, false, false, 78), "admin", [], "any", false, false, false, 78), "users", [], "any", false, false, false, 78), "forms", [], "any", false, false, false, 78), "title", [], "any", false, false, false, 78), "desc", [], "any", false, false, false, 78), "html", null, true);
        echo "\" aria-label=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 78), "lang", [], "any", false, false, false, 78), "string", [], "any", false, false, false, 78), "admin", [], "any", false, false, false, 78), "users", [], "any", false, false, false, 78), "forms", [], "any", false, false, false, 78), "title", [], "any", false, false, false, 78), "desc", [], "any", false, false, false, 78), "html", null, true);
        echo "\" aria-describedby=\"help_title\" spellcheck=\"false\">
                                                <small id=\"help_title\" class=\"form-text text-muted\">";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 79), "lang", [], "any", false, false, false, 79), "string", [], "any", false, false, false, 79), "admin", [], "any", false, false, false, 79), "users", [], "any", false, false, false, 79), "forms", [], "any", false, false, false, 79), "title", [], "any", false, false, false, 79), "text", [], "any", false, false, false, 79), "html", null, true);
        echo "</small>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-6 col-sm-12 mt-4\">
                                            <label for=\"static_role\" class=\"col-form-label\">";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 83), "lang", [], "any", false, false, false, 83), "string", [], "any", false, false, false, 83), "admin", [], "any", false, false, false, 83), "users", [], "any", false, false, false, 83), "forms", [], "any", false, false, false, 83), "role", [], "any", false, false, false, 83), "title", [], "any", false, false, false, 83), "html", null, true);
        echo "</label>
                                            <div>
                                                <select class=\"selectpicker ml-lg-auto pt-2 pt-lg-0\" data-live-search=\"true\" title=\"";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 85), "lang", [], "any", false, false, false, 85), "string", [], "any", false, false, false, 85), "container", [], "any", false, false, false, 85), "buttons", [], "any", false, false, false, 85), "select", [], "any", false, false, false, 85), "html", null, true);
        echo "\" name=\"role\" required=\"required\">
                                                    <option value=\"0\" selected>";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 86), "lang", [], "any", false, false, false, 86), "string", [], "any", false, false, false, 86), "admin", [], "any", false, false, false, 86), "users", [], "any", false, false, false, 86), "forms", [], "any", false, false, false, 86), "role", [], "any", false, false, false, 86), "select", [], "any", false, false, false, 86), "registered", [], "any", false, false, false, 86), "html", null, true);
        echo "</option>
                                                    <option value=\"1\">";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 87), "lang", [], "any", false, false, false, 87), "string", [], "any", false, false, false, 87), "admin", [], "any", false, false, false, 87), "users", [], "any", false, false, false, 87), "forms", [], "any", false, false, false, 87), "role", [], "any", false, false, false, 87), "select", [], "any", false, false, false, 87), "admin", [], "any", false, false, false, 87), "html", null, true);
        echo "</option>
                                                </select>
                                                <small id=\"help_role\" class=\"form-text text-muted\">";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 89), "lang", [], "any", false, false, false, 89), "string", [], "any", false, false, false, 89), "admin", [], "any", false, false, false, 89), "users", [], "any", false, false, false, 89), "forms", [], "any", false, false, false, 89), "role", [], "any", false, false, false, 89), "text", [], "any", false, false, false, 89), "html", null, true);
        echo "</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon plus\">";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 94), "lang", [], "any", false, false, false, 94), "string", [], "any", false, false, false, 94), "container", [], "any", false, false, false, 94), "buttons", [], "any", false, false, false, 94), "save", [], "any", false, false, false, 94), "html", null, true);
        echo "</button>
                                    </div>
                                </div>
                            </form>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
";
    }

    public function getTemplateName()
    {
        return "@ComponentBundle_Admin/Users/add_user.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 94,  247 => 89,  242 => 87,  238 => 86,  234 => 85,  229 => 83,  222 => 79,  216 => 78,  211 => 76,  203 => 71,  197 => 70,  192 => 68,  185 => 64,  179 => 63,  174 => 61,  167 => 57,  161 => 56,  156 => 54,  146 => 47,  131 => 37,  125 => 34,  121 => 33,  110 => 24,  108 => 23,  104 => 21,  102 => 20,  92 => 15,  86 => 14,  80 => 13,  74 => 12,  68 => 8,  64 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/add_user' %}

{% block title %}{{ app.sub.lang.string.admin.users.new.title }}{{ \" - \" }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminIndex', {}) }}\">{{ app.sub.lang.string.admin.container.title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminUsers', {}) }}\">{{ app.sub.lang.string.admin.users.title }}</a></div>
                    <div><a href=\"{{ app.phrase.buildLink('adminUsers', {}) }}?addUser\">{{ app.sub.lang.string.admin.users.new.title }}</a></div>
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
\t\t<div class=\"app-box shadow rounded\" data-tab=\"userNew\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center mb-3\">
                    <div>
                        <h5 class=\"mb-0\">{{ app.sub.lang.string.admin.users.new.title }}</h5>
                        <small class=\"text-muted\">{{ app.sub.lang.string.admin.users.new.desc }}</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"{{ app.phrase.buildLink('adminUsers', {}) }}\" class=\"btn btn-app-discussion icon back\">{{ app.sub.lang.string.container.buttons.back }}</a>
                    </div>
                </div> 
                <hr>
                <div class=\"d-flex flex-column justify-content-center align-items-center\">
                    <div id=\"userAccordion\" class=\"w-100 rounded\">
                        <div class=\"setting-group list new-forum bg-white text-dark shadow-sm position-relative rounded\">
                            <div class=\"bg-light d-flex align-items-center p-2 px-0\">
                                <span class=\"icon\"></span>
                                <div class=\"title ml-lg-0 ml-2 mr-auto\">
                                    <span class=\"font-weight-bold\">{{ app.sub.lang.string.admin.users.new.title }}</span>
                                </div>
                            </div>
                            <form id=\"admin_users_new\" method=\"post\">
                                <div class=\"p-2 border-bottom\">
                                    <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                        <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                            <label for=\"static_name\" class=\"col-form-label\">{{ app.sub.lang.string.admin.users.forms.name.title }}</label>
                                            <div>
                                                <input class=\"form-control\" name=\"username\" id=\"static_name\" type=\"text\" placeholder=\"{{ app.sub.lang.string.admin.users.forms.name.desc }}\" aria-label=\"{{ app.sub.lang.string.admin.users.forms.password.desc }}\" aria-describedby=\"help_name\" spellcheck=\"false\" required=\"required\">
                                                <small id=\"help_name\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.users.forms.name.desc }}</small>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                            <label for=\"static_password\" class=\"col-form-label\">{{ app.sub.lang.string.admin.users.forms.password.title }}</label>
                                            <div>
                                                <input class=\"form-control\" name=\"password\" id=\"static_password\" type=\"password\" placeholder=\"{{ app.sub.lang.string.admin.users.forms.password.desc }}\" aria-label=\"{{ app.sub.lang.string.admin.users.forms.password.desc }}\" aria-describedby=\"help_password\" spellcheck=\"false\" required=\"required\">
                                                <small id=\"help_password\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.users.forms.password.text }}</small>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                            <label for=\"static_mail\" class=\"col-form-label\">{{ app.sub.lang.string.admin.users.forms.mail.title }}</label>
                                            <div>
                                                <input class=\"form-control\" name=\"mail\" id=\"static_mail\" type=\"mail\" placeholder=\"{{ app.sub.lang.string.admin.users.forms.mail.desc }}\" aria-label=\"{{ app.sub.lang.string.admin.users.forms.mail.desc }}\" aria-describedby=\"help_mail\" spellcheck=\"false\" required=\"required\">
                                                <small id=\"help_mail\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.users.forms.mail.text }}</small>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-6 col-sm-12 pr-lg-5\"></div>
                                        <div class=\"col-lg-6 col-sm-12 pr-lg-5 mt-4\">
                                            <label for=\"static_title\" class=\"col-form-label\">{{ app.sub.lang.string.admin.users.forms.title.title }}</label>
                                            <div>
                                                <input class=\"form-control\" name=\"title\" id=\"static_title\" type=\"text\" placeholder=\"{{ app.sub.lang.string.admin.users.forms.title.desc }}\" aria-label=\"{{ app.sub.lang.string.admin.users.forms.title.desc }}\" aria-describedby=\"help_title\" spellcheck=\"false\">
                                                <small id=\"help_title\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.users.forms.title.text }}</small>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-6 col-sm-12 mt-4\">
                                            <label for=\"static_role\" class=\"col-form-label\">{{ app.sub.lang.string.admin.users.forms.role.title }}</label>
                                            <div>
                                                <select class=\"selectpicker ml-lg-auto pt-2 pt-lg-0\" data-live-search=\"true\" title=\"{{ app.sub.lang.string.container.buttons.select }}\" name=\"role\" required=\"required\">
                                                    <option value=\"0\" selected>{{ app.sub.lang.string.admin.users.forms.role.select.registered }}</option>
                                                    <option value=\"1\">{{ app.sub.lang.string.admin.users.forms.role.select.admin }}</option>
                                                </select>
                                                <small id=\"help_role\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.users.forms.role.text }}</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon plus\">{{ app.sub.lang.string.container.buttons.save }}</button>
                                    </div>
                                </div>
                            </form>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
{% endblock %}", "@ComponentBundle_Admin/Users/add_user.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Mention\\Templates\\Admin\\Users\\add_user.tpl");
    }
}
