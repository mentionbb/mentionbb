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

/* @ComponentBundle_Admin/Editor/edit_buttons.tpl */
class __TwigTemplate_fe3847e324fd88cbb1e132a9bf78e421ae3ad67762774b7af35f168e182dd15c extends Template
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
        $this->parent = $this->loadTemplate("@ComponentBundle_Admin/container.tpl", "@ComponentBundle_Admin/Editor/edit_buttons.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "@ComponentBundle/admin/editor/edit_buttons";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 5), "lang", [], "any", false, false, false, 5), "string", [], "any", false, false, false, 5), "admin", [], "any", false, false, false, 5), "editor", [], "any", false, false, false, 5), "buttons", [], "any", false, false, false, 5), "edit", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 14), "buildLink", [0 => "adminEditor", 1 => []], "method", false, false, false, 14), "html", null, true);
        echo "?editorButtons\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 14), "lang", [], "any", false, false, false, 14), "string", [], "any", false, false, false, 14), "admin", [], "any", false, false, false, 14), "editor", [], "any", false, false, false, 14), "buttons", [], "any", false, false, false, 14), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "</a></div>
                    <div><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 15), "buildLink", [0 => "adminEditor", 1 => []], "method", false, false, false, 15), "html", null, true);
        echo "?buttonId=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "button", [], "any", false, false, false, 15), "button_id", [], "any", false, false, false, 15), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "button", [], "any", false, false, false, 15), "toolbar", [], "any", false, false, false, 15), "html", null, true);
        echo "</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t";
        // line 20
        $this->loadTemplate("usermenu_member.tpl", "@ComponentBundle_Admin/Editor/edit_buttons.tpl", 20)->display($context);
        // line 21
        echo "\t\t</div>
\t</div>
\t";
        // line 23
        $this->loadTemplate("@ComponentBundle_Admin/Layout/sidebar.tpl", "@ComponentBundle_Admin/Editor/edit_buttons.tpl", 23)->display($context);
        // line 24
        echo "\t
\t<aside class=\"col-sm-9\">
\t\t<div class=\"app-box shadow rounded\" data-tab=\"editor/edit_buttons\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center mb-3\">
                    <div>
                        <h5 class=\"mb-0\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "button", [], "any", false, false, false, 33), "toolbar", [], "any", false, false, false, 33), "html", null, true);
        echo "</h5>
                        <small class=\"text-muted\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "button", [], "any", false, false, false, 34), "alias", [], "any", false, false, false, 34), "html", null, true);
        echo "</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 37), "buildLink", [0 => "adminEditor", 1 => []], "method", false, false, false, 37), "html", null, true);
        echo "?editorButtons\" class=\"btn btn-app-discussion icon back\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 37), "lang", [], "any", false, false, false, 37), "string", [], "any", false, false, false, 37), "container", [], "any", false, false, false, 37), "buttons", [], "any", false, false, false, 37), "back", [], "any", false, false, false, 37), "html", null, true);
        echo "</a>
                    </div>
                </div> 
                <div class=\"d-flex flex-column justify-content-center align-items-center\">
                    <div id=\"userAccordion\" class=\"w-100 rounded\">
                        <form id=\"admin_buttons_edit\" method=\"post\">
                           <input name=\"button_id\" type=\"hidden\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "button", [], "any", false, false, false, 43), "button_id", [], "any", false, false, false, 43), "html", null, true);
        echo "\" />
                           <input name=\"toolbar_id\" type=\"hidden\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "button", [], "any", false, false, false, 44), "toolbar_id", [], "any", false, false, false, 44), "html", null, true);
        echo "\" />
                           <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                    <label for=\"static_tag\" class=\"col-form-label\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 47), "lang", [], "any", false, false, false, 47), "string", [], "any", false, false, false, 47), "admin", [], "any", false, false, false, 47), "editor", [], "any", false, false, false, 47), "forms", [], "any", false, false, false, 47), "tag", [], "any", false, false, false, 47), "title", [], "any", false, false, false, 47), "html", null, true);
        // line 48
        echo "</label>
                                    <div>
                                        <input class=\"form-control\" name=\"tag\" id=\"static_tag\" type=\"text\"
                                            value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "button", [], "any", false, false, false, 51), "tag", [], "any", false, false, false, 51), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 51), "lang", [], "any", false, false, false, 51), "string", [], "any", false, false, false, 51), "admin", [], "any", false, false, false, 51), "editor", [], "any", false, false, false, 51), "forms", [], "any", false, false, false, 51), "tag", [], "any", false, false, false, 51), "placeholder", [], "any", false, false, false, 51), "html", null, true);
        // line 52
        echo "\" spellcheck=\"false\" required=\"required\">
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                    <label for=\"static_replace_text\" class=\"col-form-label\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 56), "lang", [], "any", false, false, false, 56), "string", [], "any", false, false, false, 56), "admin", [], "any", false, false, false, 56), "editor", [], "any", false, false, false, 56), "forms", [], "any", false, false, false, 56), "replace_text", [], "any", false, false, false, 56), "title", [], "any", false, false, false, 56), "html", null, true);
        // line 57
        echo "</label>
                                    <div>
                                        <textarea class=\"form-control\" name=\"replace_text\" id=\"static_replace_text\" type=\"text\"
                                            placeholder=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 60), "lang", [], "any", false, false, false, 60), "string", [], "any", false, false, false, 60), "admin", [], "any", false, false, false, 60), "editor", [], "any", false, false, false, 60), "forms", [], "any", false, false, false, 60), "replace_text", [], "any", false, false, false, 60), "placeholder", [], "any", false, false, false, 60), "html", null, true);
        // line 61
        echo "\" spellcheck=\"false\" required=\"required\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "button", [], "any", false, false, false, 61), "replace_text", [], "any", false, false, false, 61), "html", null, true);
        echo "</textarea>
                                        <small id=\"help_replace_text\" class=\"form-text text-muted\">";
        // line 62
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 62), "lang", [], "any", false, false, false, 62), "string", [], "any", false, false, false, 62), "admin", [], "any", false, false, false, 62), "editor", [], "any", false, false, false, 62), "forms", [], "any", false, false, false, 62), "replace_text", [], "any", false, false, false, 62), "help", [], "any", false, false, false, 62);
        // line 63
        echo "</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                    <label for=\"static_bbcode\" class=\"col-form-label\">";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 69), "lang", [], "any", false, false, false, 69), "string", [], "any", false, false, false, 69), "admin", [], "any", false, false, false, 69), "editor", [], "any", false, false, false, 69), "forms", [], "any", false, false, false, 69), "bbcode", [], "any", false, false, false, 69), "title", [], "any", false, false, false, 69), "html", null, true);
        // line 70
        echo "</label>
                                    <div>
                                        <input class=\"form-control\" name=\"bbcode\" id=\"static_bbcode\" type=\"text\"
                                            value=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "button", [], "any", false, false, false, 73), "bbcode", [], "any", false, false, false, 73), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 73), "lang", [], "any", false, false, false, 73), "string", [], "any", false, false, false, 73), "admin", [], "any", false, false, false, 73), "editor", [], "any", false, false, false, 73), "forms", [], "any", false, false, false, 73), "bbcode", [], "any", false, false, false, 73), "placeholder", [], "any", false, false, false, 73), "html", null, true);
        // line 74
        echo "\" spellcheck=\"false\" required=\"required\">
                                        <small id=\"help_bbcode\" class=\"form-text text-muted\">";
        // line 75
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 75), "lang", [], "any", false, false, false, 75), "string", [], "any", false, false, false, 75), "admin", [], "any", false, false, false, 75), "editor", [], "any", false, false, false, 75), "forms", [], "any", false, false, false, 75), "bbcode", [], "any", false, false, false, 75), "help", [], "any", false, false, false, 75);
        // line 76
        echo "</small>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-sm-12 mt-2 mt-lg-0\">
                                    <label for=\"static_is_active\" class=\"col-form-label\">";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 80), "lang", [], "any", false, false, false, 80), "string", [], "any", false, false, false, 80), "admin", [], "any", false, false, false, 80), "editor", [], "any", false, false, false, 80), "forms", [], "any", false, false, false, 80), "is_active", [], "any", false, false, false, 80), "title", [], "any", false, false, false, 80), "html", null, true);
        echo "</label>
                                    <div class=\"checkbox switcher\">
                                        <label for=\"help_is_active\">
                                            <input name=\"is_active\" type=\"checkbox\" id=\"help_is_active\" ";
        // line 83
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "button", [], "any", false, false, false, 83), "is_active", [], "any", false, false, false, 83) === "0")) ? ("") : ("checked=\"checked\""));
        echo ">
                                            <span><small></small></span>
                                            <small id=\"help_is_active_zip\" class=\"text-muted\">";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 85), "lang", [], "any", false, false, false, 85), "string", [], "any", false, false, false, 85), "admin", [], "any", false, false, false, 85), "editor", [], "any", false, false, false, 85), "forms", [], "any", false, false, false, 85), "is_active", [], "any", false, false, false, 85), "title", [], "any", false, false, false, 85), "html", null, true);
        echo "</small>
                                            <small id=\"help_is_active\" class=\"form-text text-muted\">";
        // line 86
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 86), "lang", [], "any", false, false, false, 86), "string", [], "any", false, false, false, 86), "admin", [], "any", false, false, false, 86), "editor", [], "any", false, false, false, 86), "forms", [], "any", false, false, false, 86), "is_active", [], "any", false, false, false, 86), "help", [], "any", false, false, false, 86);
        echo "</small>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                    <label for=\"static_toolbar_name\" class=\"col-form-label\">";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 93), "lang", [], "any", false, false, false, 93), "string", [], "any", false, false, false, 93), "admin", [], "any", false, false, false, 93), "editor", [], "any", false, false, false, 93), "forms", [], "any", false, false, false, 93), "toolbar", [], "any", false, false, false, 93), "name", [], "any", false, false, false, 93), "title", [], "any", false, false, false, 93), "html", null, true);
        // line 94
        echo "</label>
                                    <div>
                                        <input class=\"form-control\" name=\"toolbar_name\" id=\"static_toolbar_name\" type=\"text\"
                                            value=\"";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "button", [], "any", false, false, false, 97), "toolbar", [], "any", false, false, false, 97), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 97), "lang", [], "any", false, false, false, 97), "string", [], "any", false, false, false, 97), "admin", [], "any", false, false, false, 97), "editor", [], "any", false, false, false, 97), "forms", [], "any", false, false, false, 97), "toolbar", [], "any", false, false, false, 97), "name", [], "any", false, false, false, 97), "placeholder", [], "any", false, false, false, 97), "html", null, true);
        // line 98
        echo "\" spellcheck=\"false\" required=\"required\">
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                    <label for=\"static_toolbar_button\" class=\"col-form-label\">";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 102), "lang", [], "any", false, false, false, 102), "string", [], "any", false, false, false, 102), "admin", [], "any", false, false, false, 102), "editor", [], "any", false, false, false, 102), "forms", [], "any", false, false, false, 102), "toolbar", [], "any", false, false, false, 102), "button", [], "any", false, false, false, 102), "title", [], "any", false, false, false, 102), "html", null, true);
        // line 103
        echo "</label>
                                    <div>
                                        <input class=\"form-control\" name=\"toolbar_button\" id=\"static_toolbar_button\" type=\"text\"
                                            value=\"";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "button", [], "any", false, false, false, 106), "button", [], "any", false, false, false, 106), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 106), "lang", [], "any", false, false, false, 106), "string", [], "any", false, false, false, 106), "admin", [], "any", false, false, false, 106), "editor", [], "any", false, false, false, 106), "forms", [], "any", false, false, false, 106), "toolbar", [], "any", false, false, false, 106), "button", [], "any", false, false, false, 106), "placeholder", [], "any", false, false, false, 106), "html", null, true);
        // line 107
        echo "\" spellcheck=\"false\" required=\"required\">
                                        <small id=\"help_toolbar_button\" class=\"form-text text-muted\">";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 108), "lang", [], "any", false, false, false, 108), "string", [], "any", false, false, false, 108), "admin", [], "any", false, false, false, 108), "editor", [], "any", false, false, false, 108), "forms", [], "any", false, false, false, 108), "toolbar", [], "any", false, false, false, 108), "button", [], "any", false, false, false, 108), "help", [], "any", false, false, false, 108), "html", null, true);
        // line 109
        echo "</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                    <label for=\"static_toolbar_icon\" class=\"col-form-label\">";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 115), "lang", [], "any", false, false, false, 115), "string", [], "any", false, false, false, 115), "admin", [], "any", false, false, false, 115), "editor", [], "any", false, false, false, 115), "forms", [], "any", false, false, false, 115), "toolbar", [], "any", false, false, false, 115), "icon", [], "any", false, false, false, 115), "title", [], "any", false, false, false, 115), "html", null, true);
        // line 116
        echo "</label>
                                    <div>
                                        <textarea class=\"form-control\" name=\"toolbar_icon\" id=\"static_toolbar_icon\" type=\"text\"
                                            placeholder=\"";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 119), "lang", [], "any", false, false, false, 119), "string", [], "any", false, false, false, 119), "admin", [], "any", false, false, false, 119), "editor", [], "any", false, false, false, 119), "forms", [], "any", false, false, false, 119), "toolbar", [], "any", false, false, false, 119), "icon", [], "any", false, false, false, 119), "placeholder", [], "any", false, false, false, 119), "html", null, true);
        // line 120
        echo "\" spellcheck=\"false\" required=\"required\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "button", [], "any", false, false, false, 120), "icon", [], "any", false, false, false, 120), "html", null, true);
        echo "</textarea>
                                        <small id=\"help_toolbar_icon\" class=\"form-text text-muted\">";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 121), "lang", [], "any", false, false, false, 121), "string", [], "any", false, false, false, 121), "admin", [], "any", false, false, false, 121), "editor", [], "any", false, false, false, 121), "forms", [], "any", false, false, false, 121), "toolbar", [], "any", false, false, false, 121), "icon", [], "any", false, false, false, 121), "help", [], "any", false, false, false, 121), "html", null, true);
        // line 122
        echo "</small>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                    <label for=\"static_toolbar_order_by\" class=\"col-form-label\">";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 126), "lang", [], "any", false, false, false, 126), "string", [], "any", false, false, false, 126), "admin", [], "any", false, false, false, 126), "editor", [], "any", false, false, false, 126), "forms", [], "any", false, false, false, 126), "toolbar", [], "any", false, false, false, 126), "order_by", [], "any", false, false, false, 126), "title", [], "any", false, false, false, 126), "html", null, true);
        // line 127
        echo "</label>
                                    <div>
                                        <input class=\"form-control\" name=\"toolbar_order_by\" id=\"static_toolbar_order_by\" type=\"number\"
                                            value=\"";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "button", [], "any", false, false, false, 130), "order_by", [], "any", false, false, false, 130), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 130), "lang", [], "any", false, false, false, 130), "string", [], "any", false, false, false, 130), "admin", [], "any", false, false, false, 130), "editor", [], "any", false, false, false, 130), "forms", [], "any", false, false, false, 130), "toolbar", [], "any", false, false, false, 130), "order_by", [], "any", false, false, false, 130), "placeholder", [], "any", false, false, false, 130), "html", null, true);
        // line 131
        echo "\" spellcheck=\"false\" required=\"required\" min=\"1\">
                                        <small id=\"help_toolbar_order_by\" class=\"form-text text-muted\">";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 132), "lang", [], "any", false, false, false, 132), "string", [], "any", false, false, false, 132), "admin", [], "any", false, false, false, 132), "editor", [], "any", false, false, false, 132), "forms", [], "any", false, false, false, 132), "toolbar", [], "any", false, false, false, 132), "order_by", [], "any", false, false, false, 132), "help", [], "any", false, false, false, 132), "html", null, true);
        // line 133
        echo "</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"w-100 d-inline-block\">
                                <div class=\"sticky-button shadow\">
                                    <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon send\">";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 140
($context["app"] ?? null), "sub", [], "any", false, false, false, 140), "lang", [], "any", false, false, false, 140), "string", [], "any", false, false, false, 140), "container", [], "any", false, false, false, 140), "buttons", [], "any", false, false, false, 140), "update", [], "any", false, false, false, 140), "html", null, true);
        echo "</button>
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
        return "@ComponentBundle_Admin/Editor/edit_buttons.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 140,  329 => 139,  321 => 133,  319 => 132,  316 => 131,  312 => 130,  307 => 127,  305 => 126,  299 => 122,  297 => 121,  292 => 120,  290 => 119,  285 => 116,  283 => 115,  275 => 109,  273 => 108,  270 => 107,  266 => 106,  261 => 103,  259 => 102,  253 => 98,  249 => 97,  244 => 94,  242 => 93,  232 => 86,  228 => 85,  223 => 83,  217 => 80,  211 => 76,  209 => 75,  206 => 74,  202 => 73,  197 => 70,  195 => 69,  187 => 63,  185 => 62,  180 => 61,  178 => 60,  173 => 57,  171 => 56,  165 => 52,  161 => 51,  156 => 48,  154 => 47,  148 => 44,  144 => 43,  133 => 37,  127 => 34,  123 => 33,  112 => 24,  110 => 23,  106 => 21,  104 => 20,  92 => 15,  86 => 14,  80 => 13,  74 => 12,  68 => 8,  64 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/editor/edit_buttons' %}

{% block title %}{{ app.sub.lang.string.admin.editor.buttons.edit.title }}{{ \" - \" }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminIndex', {}) }}\">{{ app.sub.lang.string.admin.container.title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminEditor', {}) }}?editorButtons\">{{ app.sub.lang.string.admin.editor.buttons.title }}</a></div>
                    <div><a href=\"{{ app.phrase.buildLink('adminEditor', {}) }}?buttonId={{ string.button.button_id }}\">{{ string.button.toolbar }}</a></div>
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
\t\t<div class=\"app-box shadow rounded\" data-tab=\"editor/edit_buttons\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center mb-3\">
                    <div>
                        <h5 class=\"mb-0\">{{ string.button.toolbar }}</h5>
                        <small class=\"text-muted\">{{ string.button.alias }}</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"{{ app.phrase.buildLink('adminEditor', {}) }}?editorButtons\" class=\"btn btn-app-discussion icon back\">{{ app.sub.lang.string.container.buttons.back }}</a>
                    </div>
                </div> 
                <div class=\"d-flex flex-column justify-content-center align-items-center\">
                    <div id=\"userAccordion\" class=\"w-100 rounded\">
                        <form id=\"admin_buttons_edit\" method=\"post\">
                           <input name=\"button_id\" type=\"hidden\" value=\"{{ string.button.button_id }}\" />
                           <input name=\"toolbar_id\" type=\"hidden\" value=\"{{ string.button.toolbar_id }}\" />
                           <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                    <label for=\"static_tag\" class=\"col-form-label\">{{ app.sub.lang.string.admin.editor.forms.tag.title
                                        }}</label>
                                    <div>
                                        <input class=\"form-control\" name=\"tag\" id=\"static_tag\" type=\"text\"
                                            value=\"{{ string.button.tag }}\" placeholder=\"{{ app.sub.lang.string.admin.editor.forms.tag.placeholder
                                            }}\" spellcheck=\"false\" required=\"required\">
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                    <label for=\"static_replace_text\" class=\"col-form-label\">{{ app.sub.lang.string.admin.editor.forms.replace_text.title
                                        }}</label>
                                    <div>
                                        <textarea class=\"form-control\" name=\"replace_text\" id=\"static_replace_text\" type=\"text\"
                                            placeholder=\"{{ app.sub.lang.string.admin.editor.forms.replace_text.placeholder
                                            }}\" spellcheck=\"false\" required=\"required\">{{ string.button.replace_text }}</textarea>
                                        <small id=\"help_replace_text\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.editor.forms.replace_text.help|raw
                                            }}</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                    <label for=\"static_bbcode\" class=\"col-form-label\">{{ app.sub.lang.string.admin.editor.forms.bbcode.title
                                        }}</label>
                                    <div>
                                        <input class=\"form-control\" name=\"bbcode\" id=\"static_bbcode\" type=\"text\"
                                            value=\"{{ string.button.bbcode }}\" placeholder=\"{{ app.sub.lang.string.admin.editor.forms.bbcode.placeholder
                                            }}\" spellcheck=\"false\" required=\"required\">
                                        <small id=\"help_bbcode\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.editor.forms.bbcode.help|raw
                                            }}</small>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-sm-12 mt-2 mt-lg-0\">
                                    <label for=\"static_is_active\" class=\"col-form-label\">{{ app.sub.lang.string.admin.editor.forms.is_active.title }}</label>
                                    <div class=\"checkbox switcher\">
                                        <label for=\"help_is_active\">
                                            <input name=\"is_active\" type=\"checkbox\" id=\"help_is_active\" {{ string.button.is_active is same as('0') ? '' : 'checked=\"checked\"' }}>
                                            <span><small></small></span>
                                            <small id=\"help_is_active_zip\" class=\"text-muted\">{{ app.sub.lang.string.admin.editor.forms.is_active.title }}</small>
                                            <small id=\"help_is_active\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.editor.forms.is_active.help|raw }}</small>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                    <label for=\"static_toolbar_name\" class=\"col-form-label\">{{ app.sub.lang.string.admin.editor.forms.toolbar.name.title
                                        }}</label>
                                    <div>
                                        <input class=\"form-control\" name=\"toolbar_name\" id=\"static_toolbar_name\" type=\"text\"
                                            value=\"{{ string.button.toolbar }}\" placeholder=\"{{ app.sub.lang.string.admin.editor.forms.toolbar.name.placeholder
                                            }}\" spellcheck=\"false\" required=\"required\">
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                    <label for=\"static_toolbar_button\" class=\"col-form-label\">{{ app.sub.lang.string.admin.editor.forms.toolbar.button.title
                                        }}</label>
                                    <div>
                                        <input class=\"form-control\" name=\"toolbar_button\" id=\"static_toolbar_button\" type=\"text\"
                                            value=\"{{ string.button.button }}\" placeholder=\"{{ app.sub.lang.string.admin.editor.forms.toolbar.button.placeholder
                                            }}\" spellcheck=\"false\" required=\"required\">
                                        <small id=\"help_toolbar_button\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.editor.forms.toolbar.button.help
                                        }}</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                    <label for=\"static_toolbar_icon\" class=\"col-form-label\">{{ app.sub.lang.string.admin.editor.forms.toolbar.icon.title
                                        }}</label>
                                    <div>
                                        <textarea class=\"form-control\" name=\"toolbar_icon\" id=\"static_toolbar_icon\" type=\"text\"
                                            placeholder=\"{{ app.sub.lang.string.admin.editor.forms.toolbar.icon.placeholder
                                            }}\" spellcheck=\"false\" required=\"required\">{{ string.button.icon }}</textarea>
                                        <small id=\"help_toolbar_icon\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.editor.forms.toolbar.icon.help
                                            }}</small>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                    <label for=\"static_toolbar_order_by\" class=\"col-form-label\">{{ app.sub.lang.string.admin.editor.forms.toolbar.order_by.title
                                        }}</label>
                                    <div>
                                        <input class=\"form-control\" name=\"toolbar_order_by\" id=\"static_toolbar_order_by\" type=\"number\"
                                            value=\"{{ string.button.order_by }}\" placeholder=\"{{ app.sub.lang.string.admin.editor.forms.toolbar.order_by.placeholder
                                            }}\" spellcheck=\"false\" required=\"required\" min=\"1\">
                                        <small id=\"help_toolbar_order_by\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.editor.forms.toolbar.order_by.help
                                        }}</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"w-100 d-inline-block\">
                                <div class=\"sticky-button shadow\">
                                    <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon send\">{{
                                        app.sub.lang.string.container.buttons.update }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </aside>
{% endblock %}", "@ComponentBundle_Admin/Editor/edit_buttons.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Mention\\Templates\\Admin\\Editor\\edit_buttons.tpl");
    }
}
