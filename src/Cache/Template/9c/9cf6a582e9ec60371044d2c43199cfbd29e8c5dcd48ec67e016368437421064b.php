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

/* @ComponentBundle_Admin/Attachments/file_types.tpl */
class __TwigTemplate_ef6a630b210929f581846baba78bc6ad0eba81bbdaf5131fd56796e22cd51d48 extends Template
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
        $this->parent = $this->loadTemplate("@ComponentBundle_Admin/container.tpl", "@ComponentBundle_Admin/Attachments/file_types.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "@ComponentBundle/admin/attachments/file_types";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 5), "lang", [], "any", false, false, false, 5), "string", [], "any", false, false, false, 5), "admin", [], "any", false, false, false, 5), "attachments", [], "any", false, false, false, 5), "file_types", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 14), "buildLink", [0 => "adminAttachmentsFileTypes", 1 => []], "method", false, false, false, 14), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 14), "lang", [], "any", false, false, false, 14), "string", [], "any", false, false, false, 14), "admin", [], "any", false, false, false, 14), "attachments", [], "any", false, false, false, 14), "file_types", [], "any", false, false, false, 14), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t";
        // line 19
        $this->loadTemplate("usermenu_member.tpl", "@ComponentBundle_Admin/Attachments/file_types.tpl", 19)->display($context);
        // line 20
        echo "\t\t</div>
\t</div>
\t";
        // line 22
        $this->loadTemplate("@ComponentBundle_Admin/Layout/sidebar.tpl", "@ComponentBundle_Admin/Attachments/file_types.tpl", 22)->display($context);
        // line 23
        echo "\t
\t<aside class=\"col-sm-9\">
\t\t<div class=\"app-box shadow rounded\" data-tab=\"attachments.file_types\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center\">
                    <div>
                        <h5 class=\"mb-0\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 32), "lang", [], "any", false, false, false, 32), "string", [], "any", false, false, false, 32), "admin", [], "any", false, false, false, 32), "attachments", [], "any", false, false, false, 32), "file_types", [], "any", false, false, false, 32), "title", [], "any", false, false, false, 32), "html", null, true);
        echo "</h5>
                        <small class=\"text-muted\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 33), "lang", [], "any", false, false, false, 33), "string", [], "any", false, false, false, 33), "admin", [], "any", false, false, false, 33), "attachments", [], "any", false, false, false, 33), "file_types", [], "any", false, false, false, 33), "desc", [], "any", false, false, false, 33), "html", null, true);
        echo "</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 36), "buildLink", [0 => "adminAttachmentFileTypes", 1 => []], "method", false, false, false, 36), "html", null, true);
        echo "?createFileType\" class=\"btn btn-app-discussion icon plus\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 36), "lang", [], "any", false, false, false, 36), "string", [], "any", false, false, false, 36), "container", [], "any", false, false, false, 36), "buttons", [], "any", false, false, false, 36), "new", [], "any", false, false, false, 36), "html", null, true);
        echo "</a>
                    </div>
                </div>  
                <div class=\"d-flex flex-column align-items-center justify-content-center mt-3\">
                    <div class=\"service-list-area w-100\">
                        <form id=\"admin_attchfiletypes_edit\" method=\"post\">
                            <div id=\"servicesAccordion\">
                                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "attchfiletypes", [], "any", false, false, false, 43), "getFileTypes", [], "method", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "                                   <div class=\"app-attachment-filetypes app-service bg-white shadow-sm position-relative mb-3 rounded\" data-extension=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "extension", [], "any", false, false, false, 44), "html", null, true);
            echo "\" data-type-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "type_id", [], "any", false, false, false, 44), "html", null, true);
            echo "\">
                                        <div class=\"app-post\">
                                            <a href=\"#\" class=\"post-layout d-flex align-items-center border-top-0 px-2 p-1 collapsed\" data-toggle=\"collapse\" data-target=\"#adminAttachmentFileTypes_";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "type_id", [], "any", false, false, false, 46), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "extension", [], "any", false, false, false, 46), "html", null, true);
            echo "\"
                                                aria-expanded=\"false\" aria-controls=\"adminAttachmentFileTypes_";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "type_id", [], "any", false, false, false, 47), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "extension", [], "any", false, false, false, 47), "html", null, true);
            echo "\">
                                                <div class=\"post-icon\">
                                                    <i class=\"";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 49), "html", null, true);
            echo "\"></i>
                                                </div>
                                                <div class=\"title ml-lg-0 ml-2 mr-auto\">
                                                    <span class=\"font-weight-bold\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "extension", [], "any", false, false, false, 52), "html", null, true);
            echo "</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div id=\"adminAttachmentFileTypes_";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "type_id", [], "any", false, false, false, 56), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "extension", [], "any", false, false, false, 56), "html", null, true);
            echo "\" class=\"collapse\" aria-labelledby=\"adminAttachmentFileTypes_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "type_id", [], "any", false, false, false, 56), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "extension", [], "any", false, false, false, 56), "html", null, true);
            echo "\" data-parent=\"#servicesAccordion\">
                                            <div class=\"p-2\">
                                                <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                    <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                        <label for=\"static_mimetype_";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "extension", [], "any", false, false, false, 60), "html", null, true);
            echo "\" class=\"col-form-label\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 60), "lang", [], "any", false, false, false, 60), "string", [], "any", false, false, false, 60), "admin", [], "any", false, false, false, 60), "attachments", [], "any", false, false, false, 60), "file_types", [], "any", false, false, false, 60), "forms", [], "any", false, false, false, 60), "mime_type", [], "any", false, false, false, 60), "title", [], "any", false, false, false, 60), "html", null, true);
            echo "</label>
                                                        <div>
                                                            <input class=\"form-control\" name=\"options[mime_type]\" id=\"static_mimetype_";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "extension", [], "any", false, false, false, 62), "html", null, true);
            echo "\" type=\"text\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 62), "lang", [], "any", false, false, false, 62), "string", [], "any", false, false, false, 62), "admin", [], "any", false, false, false, 62), "attachments", [], "any", false, false, false, 62), "file_types", [], "any", false, false, false, 62), "forms", [], "any", false, false, false, 62), "mime_type", [], "any", false, false, false, 62), "placeholder", [], "any", false, false, false, 62), "html", null, true);
            echo "\" aria-label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "mime_type", [], "any", false, false, false, 62), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "mime_type", [], "any", false, false, false, 62), "html", null, true);
            echo "\" aria-describedby=\"help_mimetype_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "extension", [], "any", false, false, false, 62), "html", null, true);
            echo "\" spellcheck=\"false\" required=\"required\">
                                                            <small id=\"help_mimetype_";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "extension", [], "any", false, false, false, 63), "html", null, true);
            echo "\" class=\"form-text text-muted\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 63), "lang", [], "any", false, false, false, 63), "string", [], "any", false, false, false, 63), "admin", [], "any", false, false, false, 63), "attachments", [], "any", false, false, false, 63), "file_types", [], "any", false, false, false, 63), "forms", [], "any", false, false, false, 63), "mime_type", [], "any", false, false, false, 63), "text", [], "any", false, false, false, 63);
            echo "</small>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-lg-6 col-sm-12\">
                                                        <label for=\"static_title_";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "extension", [], "any", false, false, false, 67), "html", null, true);
            echo "\" class=\"col-form-label\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 67), "lang", [], "any", false, false, false, 67), "string", [], "any", false, false, false, 67), "admin", [], "any", false, false, false, 67), "attachments", [], "any", false, false, false, 67), "file_types", [], "any", false, false, false, 67), "forms", [], "any", false, false, false, 67), "name", [], "any", false, false, false, 67), "title", [], "any", false, false, false, 67), "html", null, true);
            echo "</label>
                                                        <div>
                                                            <input class=\"form-control\" name=\"options[extension]\" id=\"static_title_";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "extension", [], "any", false, false, false, 69), "html", null, true);
            echo "\" type=\"text\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 69), "lang", [], "any", false, false, false, 69), "string", [], "any", false, false, false, 69), "admin", [], "any", false, false, false, 69), "attachments", [], "any", false, false, false, 69), "file_types", [], "any", false, false, false, 69), "forms", [], "any", false, false, false, 69), "name", [], "any", false, false, false, 69), "placeholder", [], "any", false, false, false, 69), "html", null, true);
            echo "\" aria-label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "extension", [], "any", false, false, false, 69), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "extension", [], "any", false, false, false, 69), "html", null, true);
            echo "\" aria-describedby=\"help_title_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "extension", [], "any", false, false, false, 69), "html", null, true);
            echo "\" spellcheck=\"false\" required=\"required\">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                    <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                        <label for=\"static_icon_";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "extension", [], "any", false, false, false, 75), "html", null, true);
            echo "\" class=\"col-form-label\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 75), "lang", [], "any", false, false, false, 75), "string", [], "any", false, false, false, 75), "admin", [], "any", false, false, false, 75), "attachments", [], "any", false, false, false, 75), "file_types", [], "any", false, false, false, 75), "forms", [], "any", false, false, false, 75), "icon", [], "any", false, false, false, 75), "title", [], "any", false, false, false, 75), "html", null, true);
            echo "</label>
                                                        <div>
                                                            <input class=\"form-control\" name=\"options[icon]\" id=\"static_icon_";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "extension", [], "any", false, false, false, 77), "html", null, true);
            echo "\" type=\"text\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 77), "lang", [], "any", false, false, false, 77), "string", [], "any", false, false, false, 77), "admin", [], "any", false, false, false, 77), "attachments", [], "any", false, false, false, 77), "file_types", [], "any", false, false, false, 77), "forms", [], "any", false, false, false, 77), "icon", [], "any", false, false, false, 77), "placeholder", [], "any", false, false, false, 77), "html", null, true);
            echo "\" aria-label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 77), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 77), "html", null, true);
            echo "\" aria-describedby=\"help_icon_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "extension", [], "any", false, false, false, 77), "html", null, true);
            echo "\" spellcheck=\"false\">
                                                            <small id=\"help_icon_";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "extension", [], "any", false, false, false, 78), "html", null, true);
            echo "\" class=\"form-text text-muted\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 78), "lang", [], "any", false, false, false, 78), "string", [], "any", false, false, false, 78), "admin", [], "any", false, false, false, 78), "attachments", [], "any", false, false, false, 78), "file_types", [], "any", false, false, false, 78), "forms", [], "any", false, false, false, 78), "icon", [], "any", false, false, false, 78), "text", [], "any", false, false, false, 78);
            echo "</small>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-lg-6 col-sm-12 mt-2 mt-lg-0\">
                                                        <label for=\"static_is_active_";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "extension", [], "any", false, false, false, 82), "html", null, true);
            echo "\" class=\"col-form-label\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 82), "lang", [], "any", false, false, false, 82), "string", [], "any", false, false, false, 82), "admin", [], "any", false, false, false, 82), "attachments", [], "any", false, false, false, 82), "file_types", [], "any", false, false, false, 82), "forms", [], "any", false, false, false, 82), "status", [], "any", false, false, false, 82), "title", [], "any", false, false, false, 82), "html", null, true);
            echo "</label>
                                                        <div class=\"checkbox switcher\">
                                                            <label for=\"help_is_active_";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "extension", [], "any", false, false, false, 84), "html", null, true);
            echo "\">
                                                                <input type=\"checkbox\" name=\"options[is_active]\" id=\"help_is_active_";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "extension", [], "any", false, false, false, 85), "html", null, true);
            echo "\" value=\"1\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "is_active", [], "any", false, false, false, 85)) ? (" checked=\"checked\"") : (""));
            echo ">
                                                                <span><small></small></span>
                                                                <small id=\"help_is_active_";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "extension", [], "any", false, false, false, 87), "html", null, true);
            echo "\" class=\"text-muted\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 87), "lang", [], "any", false, false, false, 87), "string", [], "any", false, false, false, 87), "admin", [], "any", false, false, false, 87), "attachments", [], "any", false, false, false, 87), "file_types", [], "any", false, false, false, 87), "forms", [], "any", false, false, false, 87), "status", [], "any", false, false, false, 87), "title", [], "any", false, false, false, 87), "html", null, true);
            echo "</small>
                                                                <small id=\"help_is_active_";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "extension", [], "any", false, false, false, 88), "html", null, true);
            echo "\" class=\"form-text text-muted\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 88), "lang", [], "any", false, false, false, 88), "string", [], "any", false, false, false, 88), "admin", [], "any", false, false, false, 88), "attachments", [], "any", false, false, false, 88), "file_types", [], "any", false, false, false, 88), "forms", [], "any", false, false, false, 88), "status", [], "any", false, false, false, 88), "text", [], "any", false, false, false, 88), "html", null, true);
            echo "</small>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon pen\">";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 94), "lang", [], "any", false, false, false, 94), "string", [], "any", false, false, false, 94), "container", [], "any", false, false, false, 94), "buttons", [], "any", false, false, false, 94), "update", [], "any", false, false, false, 94), "html", null, true);
            echo "</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                            </div>
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
        return "@ComponentBundle_Admin/Attachments/file_types.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 100,  303 => 94,  292 => 88,  286 => 87,  279 => 85,  275 => 84,  268 => 82,  259 => 78,  247 => 77,  240 => 75,  223 => 69,  216 => 67,  207 => 63,  195 => 62,  188 => 60,  175 => 56,  168 => 52,  162 => 49,  155 => 47,  149 => 46,  141 => 44,  137 => 43,  125 => 36,  119 => 33,  115 => 32,  104 => 23,  102 => 22,  98 => 20,  96 => 19,  86 => 14,  80 => 13,  74 => 12,  68 => 8,  64 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/attachments/file_types' %}

{% block title %}{{ app.sub.lang.string.admin.attachments.file_types.title }}{{ \" - \" }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminIndex', {}) }}\">{{ app.sub.lang.string.admin.container.title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminAttachmentsFileTypes', {}) }}\">{{ app.sub.lang.string.admin.attachments.file_types.title }}</a></div>
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
\t\t<div class=\"app-box shadow rounded\" data-tab=\"attachments.file_types\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center\">
                    <div>
                        <h5 class=\"mb-0\">{{ app.sub.lang.string.admin.attachments.file_types.title }}</h5>
                        <small class=\"text-muted\">{{ app.sub.lang.string.admin.attachments.file_types.desc }}</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"{{ app.phrase.buildLink('adminAttachmentFileTypes', {}) }}?createFileType\" class=\"btn btn-app-discussion icon plus\">{{ app.sub.lang.string.container.buttons.new }}</a>
                    </div>
                </div>  
                <div class=\"d-flex flex-column align-items-center justify-content-center mt-3\">
                    <div class=\"service-list-area w-100\">
                        <form id=\"admin_attchfiletypes_edit\" method=\"post\">
                            <div id=\"servicesAccordion\">
                                {% for item in string.attchfiletypes.getFileTypes() %}
                                   <div class=\"app-attachment-filetypes app-service bg-white shadow-sm position-relative mb-3 rounded\" data-extension=\"{{ item.extension }}\" data-type-id=\"{{ item.type_id }}\">
                                        <div class=\"app-post\">
                                            <a href=\"#\" class=\"post-layout d-flex align-items-center border-top-0 px-2 p-1 collapsed\" data-toggle=\"collapse\" data-target=\"#adminAttachmentFileTypes_{{ item.type_id }}_{{ item.extension }}\"
                                                aria-expanded=\"false\" aria-controls=\"adminAttachmentFileTypes_{{ item.type_id }}_{{ item.extension }}\">
                                                <div class=\"post-icon\">
                                                    <i class=\"{{ item.icon }}\"></i>
                                                </div>
                                                <div class=\"title ml-lg-0 ml-2 mr-auto\">
                                                    <span class=\"font-weight-bold\">{{ item.extension }}</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div id=\"adminAttachmentFileTypes_{{ item.type_id }}_{{ item.extension }}\" class=\"collapse\" aria-labelledby=\"adminAttachmentFileTypes_{{ item.type_id }}_{{ item.extension }}\" data-parent=\"#servicesAccordion\">
                                            <div class=\"p-2\">
                                                <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                    <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                        <label for=\"static_mimetype_{{ item.extension }}\" class=\"col-form-label\">{{ app.sub.lang.string.admin.attachments.file_types.forms.mime_type.title }}</label>
                                                        <div>
                                                            <input class=\"form-control\" name=\"options[mime_type]\" id=\"static_mimetype_{{ item.extension }}\" type=\"text\" placeholder=\"{{ app.sub.lang.string.admin.attachments.file_types.forms.mime_type.placeholder }}\" aria-label=\"{{ item.mime_type }}\" value=\"{{ item.mime_type }}\" aria-describedby=\"help_mimetype_{{ item.extension }}\" spellcheck=\"false\" required=\"required\">
                                                            <small id=\"help_mimetype_{{ item.extension }}\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.attachments.file_types.forms.mime_type.text|raw }}</small>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-lg-6 col-sm-12\">
                                                        <label for=\"static_title_{{ item.extension }}\" class=\"col-form-label\">{{ app.sub.lang.string.admin.attachments.file_types.forms.name.title }}</label>
                                                        <div>
                                                            <input class=\"form-control\" name=\"options[extension]\" id=\"static_title_{{ item.extension }}\" type=\"text\" placeholder=\"{{ app.sub.lang.string.admin.attachments.file_types.forms.name.placeholder }}\" aria-label=\"{{ item.extension }}\" value=\"{{ item.extension }}\" aria-describedby=\"help_title_{{ item.extension }}\" spellcheck=\"false\" required=\"required\">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                    <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                        <label for=\"static_icon_{{ item.extension }}\" class=\"col-form-label\">{{ app.sub.lang.string.admin.attachments.file_types.forms.icon.title }}</label>
                                                        <div>
                                                            <input class=\"form-control\" name=\"options[icon]\" id=\"static_icon_{{ item.extension }}\" type=\"text\" placeholder=\"{{ app.sub.lang.string.admin.attachments.file_types.forms.icon.placeholder }}\" aria-label=\"{{ item.icon }}\" value=\"{{ item.icon }}\" aria-describedby=\"help_icon_{{ item.extension }}\" spellcheck=\"false\">
                                                            <small id=\"help_icon_{{ item.extension }}\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.attachments.file_types.forms.icon.text|raw }}</small>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-lg-6 col-sm-12 mt-2 mt-lg-0\">
                                                        <label for=\"static_is_active_{{ item.extension }}\" class=\"col-form-label\">{{ app.sub.lang.string.admin.attachments.file_types.forms.status.title }}</label>
                                                        <div class=\"checkbox switcher\">
                                                            <label for=\"help_is_active_{{ item.extension }}\">
                                                                <input type=\"checkbox\" name=\"options[is_active]\" id=\"help_is_active_{{ item.extension }}\" value=\"1\"{{ item.is_active ? ' checked=\"checked\"' : '' }}>
                                                                <span><small></small></span>
                                                                <small id=\"help_is_active_{{ item.extension }}\" class=\"text-muted\">{{ app.sub.lang.string.admin.attachments.file_types.forms.status.title }}</small>
                                                                <small id=\"help_is_active_{{ item.extension }}\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.attachments.file_types.forms.status.text }}</small>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon pen\">{{ app.sub.lang.string.container.buttons.update }}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </aside>
{% endblock %}", "@ComponentBundle_Admin/Attachments/file_types.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Mention\\Templates\\Admin\\Attachments\\file_types.tpl");
    }
}
