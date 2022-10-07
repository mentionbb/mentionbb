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

/* @ComponentBundle_Admin/Attachments/new_file_type.tpl */
class __TwigTemplate_96f4a71cf509d4ae58e144e33dccc0e75b372a28216324a777f062fb690737d4 extends Template
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
        $this->parent = $this->loadTemplate("@ComponentBundle_Admin/container.tpl", "@ComponentBundle_Admin/Attachments/new_file_type.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "@ComponentBundle/admin/attachments/file_types/new";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 5), "lang", [], "any", false, false, false, 5), "string", [], "any", false, false, false, 5), "admin", [], "any", false, false, false, 5), "attachments", [], "any", false, false, false, 5), "file_types", [], "any", false, false, false, 5), "new", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 14), "buildLink", [0 => "adminAttachments", 1 => []], "method", false, false, false, 14), "html", null, true);
        echo "?types\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 14), "lang", [], "any", false, false, false, 14), "string", [], "any", false, false, false, 14), "admin", [], "any", false, false, false, 14), "attachments", [], "any", false, false, false, 14), "file_types", [], "any", false, false, false, 14), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "</a></div>
                    <div><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 15), "buildLink", [0 => "adminAttachments", 1 => []], "method", false, false, false, 15), "html", null, true);
        echo "?createFileType\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 15), "lang", [], "any", false, false, false, 15), "string", [], "any", false, false, false, 15), "admin", [], "any", false, false, false, 15), "attachments", [], "any", false, false, false, 15), "file_types", [], "any", false, false, false, 15), "new", [], "any", false, false, false, 15), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t";
        // line 20
        $this->loadTemplate("usermenu_member.tpl", "@ComponentBundle_Admin/Attachments/new_file_type.tpl", 20)->display($context);
        // line 21
        echo "\t\t</div>
\t</div>
\t";
        // line 23
        $this->loadTemplate("@ComponentBundle_Admin/Layout/sidebar.tpl", "@ComponentBundle_Admin/Attachments/new_file_type.tpl", 23)->display($context);
        // line 24
        echo "\t
\t<aside class=\"col-sm-9\">
\t\t<div class=\"app-box shadow rounded\" data-tab=\"attachments.new_file_type\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center\">
                    <div>
                        <h5 class=\"mb-0\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 33), "lang", [], "any", false, false, false, 33), "string", [], "any", false, false, false, 33), "admin", [], "any", false, false, false, 33), "attachments", [], "any", false, false, false, 33), "file_types", [], "any", false, false, false, 33), "new", [], "any", false, false, false, 33), "title", [], "any", false, false, false, 33), "html", null, true);
        echo "</h5>
                        <small class=\"text-muted\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 34), "lang", [], "any", false, false, false, 34), "string", [], "any", false, false, false, 34), "admin", [], "any", false, false, false, 34), "attachments", [], "any", false, false, false, 34), "file_types", [], "any", false, false, false, 34), "new", [], "any", false, false, false, 34), "desc", [], "any", false, false, false, 34), "html", null, true);
        echo "</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 37), "buildLink", [0 => "adminAttachments", 1 => []], "method", false, false, false, 37), "html", null, true);
        echo "?types\" class=\"btn btn-app-discussion icon back\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 37), "lang", [], "any", false, false, false, 37), "string", [], "any", false, false, false, 37), "container", [], "any", false, false, false, 37), "buttons", [], "any", false, false, false, 37), "back", [], "any", false, false, false, 37), "html", null, true);
        echo "</a>
                    </div>
                </div>  
                <div class=\"d-flex flex-column align-items-center justify-content-center mt-3\">
                    <div class=\"service-list-area w-100\">
                        <form id=\"admin_attchfiletypes_new\" method=\"post\">
                            <div id=\"servicesAccordion\">
                                <div class=\"app-attachment-filetypes app-service bg-white shadow-sm position-relative mb-3 rounded\">
                                    <div class=\"app-post\">
                                        <div class=\"post-layout d-flex align-items-center border-top-0 px-2 p-1\">
                                            <div class=\"post-icon new\">
                                                <i class=\"fas fa-plus\"></i>
                                            </div>
                                            <div class=\"title ml-lg-0 ml-2 mr-auto\">
                                                <span class=\"font-weight-bold\">";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 51), "lang", [], "any", false, false, false, 51), "string", [], "any", false, false, false, 51), "admin", [], "any", false, false, false, 51), "attachments", [], "any", false, false, false, 51), "file_types", [], "any", false, false, false, 51), "new", [], "any", false, false, false, 51), "title", [], "any", false, false, false, 51), "html", null, true);
        echo "</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"p-2\">
                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_mimetype\" class=\"col-form-label\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 59), "lang", [], "any", false, false, false, 59), "string", [], "any", false, false, false, 59), "admin", [], "any", false, false, false, 59), "attachments", [], "any", false, false, false, 59), "file_types", [], "any", false, false, false, 59), "forms", [], "any", false, false, false, 59), "mime_type", [], "any", false, false, false, 59), "title", [], "any", false, false, false, 59), "html", null, true);
        echo "</label>
                                                    <div>
                                                        <input class=\"form-control\" name=\"options[mime_type]\" id=\"static_mimetype\" type=\"text\" placeholder=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 61), "lang", [], "any", false, false, false, 61), "string", [], "any", false, false, false, 61), "admin", [], "any", false, false, false, 61), "attachments", [], "any", false, false, false, 61), "file_types", [], "any", false, false, false, 61), "forms", [], "any", false, false, false, 61), "mime_type", [], "any", false, false, false, 61), "placeholder", [], "any", false, false, false, 61), "html", null, true);
        echo "\" aria-describedby=\"help_mimetype\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_mimetype\" class=\"form-text text-muted\">";
        // line 62
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 62), "lang", [], "any", false, false, false, 62), "string", [], "any", false, false, false, 62), "admin", [], "any", false, false, false, 62), "attachments", [], "any", false, false, false, 62), "file_types", [], "any", false, false, false, 62), "forms", [], "any", false, false, false, 62), "mime_type", [], "any", false, false, false, 62), "text", [], "any", false, false, false, 62);
        echo "</small>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6 col-sm-12\">
                                                    <label for=\"static_title\" class=\"col-form-label\">";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 66), "lang", [], "any", false, false, false, 66), "string", [], "any", false, false, false, 66), "admin", [], "any", false, false, false, 66), "attachments", [], "any", false, false, false, 66), "file_types", [], "any", false, false, false, 66), "forms", [], "any", false, false, false, 66), "name", [], "any", false, false, false, 66), "title", [], "any", false, false, false, 66), "html", null, true);
        echo "</label>
                                                    <div>
                                                        <input class=\"form-control\" name=\"options[extension]\" id=\"static_title\" type=\"text\" placeholder=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 68), "lang", [], "any", false, false, false, 68), "string", [], "any", false, false, false, 68), "admin", [], "any", false, false, false, 68), "attachments", [], "any", false, false, false, 68), "file_types", [], "any", false, false, false, 68), "forms", [], "any", false, false, false, 68), "name", [], "any", false, false, false, 68), "placeholder", [], "any", false, false, false, 68), "html", null, true);
        echo "\" aria-describedby=\"help_title\" spellcheck=\"false\" required=\"required\">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_icon\" class=\"col-form-label\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 74), "lang", [], "any", false, false, false, 74), "string", [], "any", false, false, false, 74), "admin", [], "any", false, false, false, 74), "attachments", [], "any", false, false, false, 74), "file_types", [], "any", false, false, false, 74), "forms", [], "any", false, false, false, 74), "icon", [], "any", false, false, false, 74), "title", [], "any", false, false, false, 74), "html", null, true);
        echo "</label>
                                                    <div>
                                                        <input class=\"form-control\" name=\"options[icon]\" id=\"static_icon\" type=\"text\" placeholder=\"";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 76), "lang", [], "any", false, false, false, 76), "string", [], "any", false, false, false, 76), "admin", [], "any", false, false, false, 76), "attachments", [], "any", false, false, false, 76), "file_types", [], "any", false, false, false, 76), "forms", [], "any", false, false, false, 76), "icon", [], "any", false, false, false, 76), "placeholder", [], "any", false, false, false, 76), "html", null, true);
        echo "\" aria-describedby=\"help_icon\" spellcheck=\"false\">
                                                        <small id=\"help_icon\" class=\"form-text text-muted\">";
        // line 77
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 77), "lang", [], "any", false, false, false, 77), "string", [], "any", false, false, false, 77), "admin", [], "any", false, false, false, 77), "attachments", [], "any", false, false, false, 77), "file_types", [], "any", false, false, false, 77), "forms", [], "any", false, false, false, 77), "icon", [], "any", false, false, false, 77), "text", [], "any", false, false, false, 77);
        echo "</small>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6 col-sm-12 mt-2 mt-lg-0\">
                                                    <label for=\"static_is_active\" class=\"col-form-label\">";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 81), "lang", [], "any", false, false, false, 81), "string", [], "any", false, false, false, 81), "admin", [], "any", false, false, false, 81), "attachments", [], "any", false, false, false, 81), "file_types", [], "any", false, false, false, 81), "forms", [], "any", false, false, false, 81), "status", [], "any", false, false, false, 81), "title", [], "any", false, false, false, 81), "html", null, true);
        echo "</label>
                                                    <div class=\"checkbox switcher\">
                                                        <label for=\"help_is_active\">
                                                            <input type=\"checkbox\" name=\"options[is_active]\" id=\"help_is_active\" value=\"1\" checked>
                                                            <span><small></small></span>
                                                            <small id=\"help_is_active\" class=\"text-muted\">";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 86), "lang", [], "any", false, false, false, 86), "string", [], "any", false, false, false, 86), "admin", [], "any", false, false, false, 86), "attachments", [], "any", false, false, false, 86), "file_types", [], "any", false, false, false, 86), "forms", [], "any", false, false, false, 86), "status", [], "any", false, false, false, 86), "title", [], "any", false, false, false, 86), "html", null, true);
        echo "</small>
                                                            <small id=\"help_is_active\" class=\"form-text text-muted\">";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 87), "lang", [], "any", false, false, false, 87), "string", [], "any", false, false, false, 87), "admin", [], "any", false, false, false, 87), "attachments", [], "any", false, false, false, 87), "file_types", [], "any", false, false, false, 87), "forms", [], "any", false, false, false, 87), "status", [], "any", false, false, false, 87), "text", [], "any", false, false, false, 87), "html", null, true);
        echo "</small>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon plus\">";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 93), "lang", [], "any", false, false, false, 93), "string", [], "any", false, false, false, 93), "container", [], "any", false, false, false, 93), "buttons", [], "any", false, false, false, 93), "save", [], "any", false, false, false, 93), "html", null, true);
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
        return "@ComponentBundle_Admin/Attachments/new_file_type.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 93,  219 => 87,  215 => 86,  207 => 81,  200 => 77,  196 => 76,  191 => 74,  182 => 68,  177 => 66,  170 => 62,  166 => 61,  161 => 59,  150 => 51,  131 => 37,  125 => 34,  121 => 33,  110 => 24,  108 => 23,  104 => 21,  102 => 20,  92 => 15,  86 => 14,  80 => 13,  74 => 12,  68 => 8,  64 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/attachments/file_types/new' %}

{% block title %}{{ app.sub.lang.string.admin.attachments.file_types.new.title }}{{ \" - \" }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminIndex', {}) }}\">{{ app.sub.lang.string.admin.container.title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminAttachments', {}) }}?types\">{{ app.sub.lang.string.admin.attachments.file_types.title }}</a></div>
                    <div><a href=\"{{ app.phrase.buildLink('adminAttachments', {}) }}?createFileType\">{{ app.sub.lang.string.admin.attachments.file_types.new.title }}</a></div>
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
\t\t<div class=\"app-box shadow rounded\" data-tab=\"attachments.new_file_type\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center\">
                    <div>
                        <h5 class=\"mb-0\">{{ app.sub.lang.string.admin.attachments.file_types.new.title }}</h5>
                        <small class=\"text-muted\">{{ app.sub.lang.string.admin.attachments.file_types.new.desc }}</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"{{ app.phrase.buildLink('adminAttachments', {}) }}?types\" class=\"btn btn-app-discussion icon back\">{{ app.sub.lang.string.container.buttons.back }}</a>
                    </div>
                </div>  
                <div class=\"d-flex flex-column align-items-center justify-content-center mt-3\">
                    <div class=\"service-list-area w-100\">
                        <form id=\"admin_attchfiletypes_new\" method=\"post\">
                            <div id=\"servicesAccordion\">
                                <div class=\"app-attachment-filetypes app-service bg-white shadow-sm position-relative mb-3 rounded\">
                                    <div class=\"app-post\">
                                        <div class=\"post-layout d-flex align-items-center border-top-0 px-2 p-1\">
                                            <div class=\"post-icon new\">
                                                <i class=\"fas fa-plus\"></i>
                                            </div>
                                            <div class=\"title ml-lg-0 ml-2 mr-auto\">
                                                <span class=\"font-weight-bold\">{{ app.sub.lang.string.admin.attachments.file_types.new.title }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"p-2\">
                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_mimetype\" class=\"col-form-label\">{{ app.sub.lang.string.admin.attachments.file_types.forms.mime_type.title }}</label>
                                                    <div>
                                                        <input class=\"form-control\" name=\"options[mime_type]\" id=\"static_mimetype\" type=\"text\" placeholder=\"{{ app.sub.lang.string.admin.attachments.file_types.forms.mime_type.placeholder }}\" aria-describedby=\"help_mimetype\" spellcheck=\"false\" required=\"required\">
                                                        <small id=\"help_mimetype\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.attachments.file_types.forms.mime_type.text|raw }}</small>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6 col-sm-12\">
                                                    <label for=\"static_title\" class=\"col-form-label\">{{ app.sub.lang.string.admin.attachments.file_types.forms.name.title }}</label>
                                                    <div>
                                                        <input class=\"form-control\" name=\"options[extension]\" id=\"static_title\" type=\"text\" placeholder=\"{{ app.sub.lang.string.admin.attachments.file_types.forms.name.placeholder }}\" aria-describedby=\"help_title\" spellcheck=\"false\" required=\"required\">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                    <label for=\"static_icon\" class=\"col-form-label\">{{ app.sub.lang.string.admin.attachments.file_types.forms.icon.title }}</label>
                                                    <div>
                                                        <input class=\"form-control\" name=\"options[icon]\" id=\"static_icon\" type=\"text\" placeholder=\"{{ app.sub.lang.string.admin.attachments.file_types.forms.icon.placeholder }}\" aria-describedby=\"help_icon\" spellcheck=\"false\">
                                                        <small id=\"help_icon\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.attachments.file_types.forms.icon.text|raw }}</small>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6 col-sm-12 mt-2 mt-lg-0\">
                                                    <label for=\"static_is_active\" class=\"col-form-label\">{{ app.sub.lang.string.admin.attachments.file_types.forms.status.title }}</label>
                                                    <div class=\"checkbox switcher\">
                                                        <label for=\"help_is_active\">
                                                            <input type=\"checkbox\" name=\"options[is_active]\" id=\"help_is_active\" value=\"1\" checked>
                                                            <span><small></small></span>
                                                            <small id=\"help_is_active\" class=\"text-muted\">{{ app.sub.lang.string.admin.attachments.file_types.forms.status.title }}</small>
                                                            <small id=\"help_is_active\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.attachments.file_types.forms.status.text }}</small>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon plus\">{{ app.sub.lang.string.container.buttons.save }}</button>
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
{% endblock %}", "@ComponentBundle_Admin/Attachments/new_file_type.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Mention\\Templates\\Admin\\Attachments\\new_file_type.tpl");
    }
}
