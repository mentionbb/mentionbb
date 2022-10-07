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

/* @ComponentBundle_Admin/Editor/editor_buttons.tpl */
class __TwigTemplate_d55ad282f651123f7dab771637c5724fbba4aacda24a39742aa0f3c2bd8f8467 extends Template
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
        $this->parent = $this->loadTemplate("@ComponentBundle_Admin/container.tpl", "@ComponentBundle_Admin/Editor/editor_buttons.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "@ComponentBundle/admin/editor/buttons";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 5), "lang", [], "any", false, false, false, 5), "string", [], "any", false, false, false, 5), "admin", [], "any", false, false, false, 5), "editor", [], "any", false, false, false, 5), "buttons", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
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
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 14), "lang", [], "any", false, false, false, 14), "string", [], "any", false, false, false, 14), "admin", [], "any", false, false, false, 14), "editor", [], "any", false, false, false, 14), "buttons", [], "any", false, false, false, 14), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t";
        // line 19
        $this->loadTemplate("usermenu_member.tpl", "@ComponentBundle_Admin/Editor/editor_buttons.tpl", 19)->display($context);
        // line 20
        echo "\t\t</div>
\t</div>
\t";
        // line 22
        $this->loadTemplate("@ComponentBundle_Admin/Layout/sidebar.tpl", "@ComponentBundle_Admin/Editor/editor_buttons.tpl", 22)->display($context);
        // line 23
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
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 32), "lang", [], "any", false, false, false, 32), "string", [], "any", false, false, false, 32), "admin", [], "any", false, false, false, 32), "editor", [], "any", false, false, false, 32), "buttons", [], "any", false, false, false, 32), "title", [], "any", false, false, false, 32), "html", null, true);
        echo "</h5>
                        <small class=\"text-muted\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 33), "lang", [], "any", false, false, false, 33), "string", [], "any", false, false, false, 33), "admin", [], "any", false, false, false, 33), "editor", [], "any", false, false, false, 33), "buttons", [], "any", false, false, false, 33), "desc", [], "any", false, false, false, 33), "html", null, true);
        echo "</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 36), "buildLink", [0 => "adminEditor", 1 => []], "method", false, false, false, 36), "html", null, true);
        echo "?addButton\" class=\"btn btn-app-discussion icon plus\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 36), "lang", [], "any", false, false, false, 36), "string", [], "any", false, false, false, 36), "admin", [], "any", false, false, false, 36), "editor", [], "any", false, false, false, 36), "buttons", [], "any", false, false, false, 36), "add", [], "any", false, false, false, 36), "html", null, true);
        echo "</a>
                    </div>
                </div>  
                <div class=\"d-flex flex-column align-items-center justify-content-center mt-3\">
                    <div class=\"service-list-area list-tab-area w-100\">
                        <div>
                            <div id=\"servicesAccordion\">
                                <div class=\"app-addon app-service bg-white shadow-sm position-relative mb-3 rounded\">
                                    <div class=\"app-post\">
                                        <div class=\"post-layout d-flex align-items-center border-top-0 px-2 p-1 collapse\" data-toggle=\"collapse\" data-target=\"#adminAddons_install\"
                                            aria-expanded=\"true\" aria-controls=\"adminAddons_install\">
                                            <div class=\"post-icon\">
                                                <i class=\"fas fa-spell-check\"></i>
                                            </div>
                                            <div class=\"head-title with-tabs d-flex flex-column ml-lg-0 ml-2 mr-auto\">
                                                <ul class=\"nav nav-tabs\" id=\"editorTab\" role=\"tablist\">
                                                    <li class=\"nav-item\">
                                                        <a class=\"nav-link active\" id=\"toolbars-tab\" data-toggle=\"tab\" href=\"#toolbars\" role=\"tab\" aria-controls=\"toolbars\" aria-selected=\"true\">
                                                            <i class=\"fas fa-italic mr-2\"></i>
                                                            ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 55), "lang", [], "any", false, false, false, 55), "string", [], "any", false, false, false, 55), "admin", [], "any", false, false, false, 55), "editor", [], "any", false, false, false, 55), "buttons", [], "any", false, false, false, 55), "head", [], "any", false, false, false, 55), "tabs", [], "any", false, false, false, 55), "toolbars", [], "any", false, false, false, 55), "title", [], "any", false, false, false, 55), "html", null, true);
        echo "
                                                        </a>
                                                    </li>
                                                    <li class=\"nav-item\">
                                                        <a class=\"nav-link\" id=\"profile-buttons\" data-toggle=\"tab\" href=\"#buttons\" role=\"tab\" aria-controls=\"buttons\" aria-selected=\"false\">
                                                            <i class=\"fas fa-bars mr-2\"></i>
                                                            ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 61), "lang", [], "any", false, false, false, 61), "string", [], "any", false, false, false, 61), "admin", [], "any", false, false, false, 61), "editor", [], "any", false, false, false, 61), "buttons", [], "any", false, false, false, 61), "head", [], "any", false, false, false, 61), "tabs", [], "any", false, false, false, 61), "buttons", [], "any", false, false, false, 61), "title", [], "any", false, false, false, 61), "html", null, true);
        echo "
                                                        </a>
                                                    </li>                                                
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"tab-content p-2\">
                                            <div class=\"tab-pane fade show active\" id=\"toolbars\" role=\"tabpanel\" aria-labelledby=\"toolbars-tab\">
                                                <div class=\"form-group row mx-auto\">
                                                    <label class=\"col-sm-4 col-form-label\">";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 72), "lang", [], "any", false, false, false, 72), "string", [], "any", false, false, false, 72), "admin", [], "any", false, false, false, 72), "editor", [], "any", false, false, false, 72), "buttons", [], "any", false, false, false, 72), "head", [], "any", false, false, false, 72), "tabs", [], "any", false, false, false, 72), "toolbars", [], "any", false, false, false, 72), "editor", [], "any", false, false, false, 72), "title", [], "any", false, false, false, 72), "html", null, true);
        echo "</label>
                                                    <div class=\"col-sm-8\">
                                                        <div class=\"fake-editor-container\">
                                                            <div id=\"js-AppAdmin_DraggableItems\" class=\"fake-editor active-toolbars\">
                                                                ";
        // line 76
        $context["toolbars"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 76), "editor", [], "any", false, false, false, 76), "buttons", [], "any", false, false, false, 76), "getToolbarsWithOptions", [], "method", false, false, false, 76);
        // line 77
        echo "                                                                <div class=\"parent\">
                                                                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(($context["toolbars"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 79
            echo "                                                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["toolbars"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["item"]] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["toolbar"]) {
                // line 80
                echo "                                                                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["toolbar"], "name", [], "any", false, false, false, 80) === "sizeselect")) {
                    // line 81
                    echo "                                                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["toolbar"], "name", [], "any", false, false, false, 81) === "forecolor")) {
                    // line 82
                    echo "                                                                                <div data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 82), "html", null, true);
                    echo "\" data-parent=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "button", [], "any", false, false, false, 82), "html", null, true);
                    echo "\" class=\"dropdown dd-with\">
                                                                                    <button type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                                        ";
                    // line 84
                    echo twig_get_attribute($this->env, $this->source, $context["toolbar"], "icon", [], "any", false, false, false, 84);
                    echo "
                                                                                    </button>
                                                                                </div>
                                                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 87
$context["toolbar"], "name", [], "any", false, false, false, 87) === "backcolor")) {
                    // line 88
                    echo "                                                                                <div data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 88), "html", null, true);
                    echo "\" data-parent=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "button", [], "any", false, false, false, 88), "html", null, true);
                    echo "\" class=\"dropdown dd-with\">
                                                                                    <button type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                                        ";
                    // line 90
                    echo twig_get_attribute($this->env, $this->source, $context["toolbar"], "icon", [], "any", false, false, false, 90);
                    echo "
                                                                                    </button>
                                                                                </div>
                                                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 93
$context["toolbar"], "name", [], "any", false, false, false, 93) === "table")) {
                    // line 94
                    echo "                                                                                <div data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 94), "html", null, true);
                    echo "\" data-parent=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "button", [], "any", false, false, false, 94), "html", null, true);
                    echo "\" class=\"dropdown dd-with\">
                                                                                    <button type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                                        ";
                    // line 96
                    echo twig_get_attribute($this->env, $this->source, $context["toolbar"], "icon", [], "any", false, false, false, 96);
                    echo "
                                                                                    </button>
                                                                                </div>
                                                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 99
$context["toolbar"], "name", [], "any", false, false, false, 99) === "formatselect")) {
                    // line 100
                    echo "                                                                                <div data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 100), "html", null, true);
                    echo "\" data-parent=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "button", [], "any", false, false, false, 100), "html", null, true);
                    echo "\" class=\"dropdown dd\">
                                                                                    <button type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                                        <span>";
                    // line 102
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 102), "lang", [], "any", false, false, false, 102), "string", [], "any", false, false, false, 102), "editor", [], "any", false, false, false, 102), "Paragraph", [], "any", false, false, false, 102), "html", null, true);
                    echo "</span>
                                                                                    </button>
                                                                                </div>
                                                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 105
$context["toolbar"], "name", [], "any", false, false, false, 105) === "fontselect")) {
                    // line 106
                    echo "                                                                                <div data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 106), "html", null, true);
                    echo "\" data-parent=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "button", [], "any", false, false, false, 106), "html", null, true);
                    echo "\" class=\"dropdown dd\">
                                                                                    <button type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                                        <span>";
                    // line 108
                    echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 108), "lang", [], "any", false, false, false, 108), "string", [], "any", false, false, false, 108), "editor", [], "any", false, false, false, 108)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["System Font"] ?? null) : null), "html", null, true);
                    echo "</span>
                                                                                    </button>
                                                                                </div>
                                                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 111
$context["toolbar"], "name", [], "any", false, false, false, 111) === "fontsizeselect")) {
                    // line 112
                    echo "                                                                                <div data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 112), "html", null, true);
                    echo "\" data-parent=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "button", [], "any", false, false, false, 112), "html", null, true);
                    echo "\" class=\"dropdown dd\">
                                                                                    <button type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                                        <span>12pt</span>
                                                                                    </button>
                                                                                </div>
                                                                            ";
                } else {
                    // line 118
                    echo "                                                                                <div class=\"dropdown\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 118), "html", null, true);
                    echo "\" data-parent=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "button", [], "any", false, false, false, 118), "html", null, true);
                    echo "\">
                                                                                    <button type=\"button\" data-toggle=\"dropdown\"
                                                                                    aria-haspopup=\"true\" aria-expanded=\"false\">";
                    // line 120
                    echo twig_get_attribute($this->env, $this->source, $context["toolbar"], "icon", [], "any", false, false, false, 120);
                    echo "</button>
                                                                                </div>
                                                                            ";
                }
                // line 123
                echo "                                                                            <div class=\"dropdown-menu dropdown-menu-right custom-menu custom-menu-lg shadow animate slideIn d-none\">
                                                                                <div class=\"progress d-none\">
                                                                                    <div class=\"indeterminate\"></div>
                                                                                </div>
                                                                                <div class=\"title\">
                                                                                    <div>
                                                                                        <span>";
                // line 129
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 129), "lang", [], "any", false, false, false, 129), "parse", [], "any", false, false, false, 129), "Parse", [0 => "admin.editor.toolbars.dropdown.title", 1 => twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "name", [], "any", false, false, false, 129))], "method", false, false, false, 129), "html", null, true);
                echo "</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div>
                                                                                    <form method=\"post\">
                                                                                        <div id=\"toolbar-settings\" class=\"form pt-3 pb-2 px-2\">
                                                                                            <div class=\"h3 text-dark d-flex align-items-center justify-content-center mb-3\">
                                                                                                ";
                // line 136
                echo twig_get_attribute($this->env, $this->source, $context["toolbar"], "icon", [], "any", false, false, false, 136);
                echo "
                                                                                            </div>
                                                                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                                                                <div class=\"col-lg-6 col-sm-12 pr-2\">
                                                                                                    <label class=\"col-form-label\" for=\"toolbar_toolbar_";
                // line 140
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 140), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 141
($context["app"] ?? null), "sub", [], "any", false, false, false, 141), "lang", [], "any", false, false, false, 141), "string", [], "any", false, false, false, 141), "admin", [], "any", false, false, false, 141), "editor", [], "any", false, false, false, 141), "toolbars", [], "any", false, false, false, 141), "dropdown", [], "any", false, false, false, 141), "form", [], "any", false, false, false, 141), "toolbar", [], "any", false, false, false, 141), "title", [], "any", false, false, false, 141), "html", null, true);
                echo "</label>
                                                                                                    <div>
                                                                                                        <input name=\"options[toolbar]\" type=\"text\" class=\"form-control\"
                                                                                                            id=\"toolbar_toolbar_";
                // line 144
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 144), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "name", [], "any", false, false, false, 144), "html", null, true);
                echo "\"
                                                                                                            placeholder=\"";
                // line 145
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 145), "lang", [], "any", false, false, false, 145), "string", [], "any", false, false, false, 145), "admin", [], "any", false, false, false, 145), "editor", [], "any", false, false, false, 145), "toolbars", [], "any", false, false, false, 145), "dropdown", [], "any", false, false, false, 145), "form", [], "any", false, false, false, 145), "toolbar", [], "any", false, false, false, 145), "placeholder", [], "any", false, false, false, 145), "html", null, true);
                echo "\">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class=\"col-lg-6 col-sm-12\">
                                                                                                    <label class=\"col-form-label\" for=\"toolbar_alias_";
                // line 149
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 149), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 150
($context["app"] ?? null), "sub", [], "any", false, false, false, 150), "lang", [], "any", false, false, false, 150), "string", [], "any", false, false, false, 150), "admin", [], "any", false, false, false, 150), "editor", [], "any", false, false, false, 150), "toolbars", [], "any", false, false, false, 150), "dropdown", [], "any", false, false, false, 150), "form", [], "any", false, false, false, 150), "alias", [], "any", false, false, false, 150), "title", [], "any", false, false, false, 150), "html", null, true);
                echo "</label>
                                                                                                    <div>
                                                                                                        <input name=\"options[alias]\" type=\"text\" class=\"form-control\" id=\"toolbar_alias_";
                // line 152
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 152), "html", null, true);
                echo "\"
                                                                                                            value=\"";
                // line 153
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "alias", [], "any", false, false, false, 153), "html", null, true);
                echo "\"
                                                                                                            placeholder=\"";
                // line 154
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 154), "lang", [], "any", false, false, false, 154), "string", [], "any", false, false, false, 154), "admin", [], "any", false, false, false, 154), "editor", [], "any", false, false, false, 154), "toolbars", [], "any", false, false, false, 154), "dropdown", [], "any", false, false, false, 154), "form", [], "any", false, false, false, 154), "alias", [], "any", false, false, false, 154), "placeholder", [], "any", false, false, false, 154), "html", null, true);
                echo "\">
                                                                                                        <small class=\"form-text text-muted\">";
                // line 155
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 155), "lang", [], "any", false, false, false, 155), "string", [], "any", false, false, false, 155), "admin", [], "any", false, false, false, 155), "editor", [], "any", false, false, false, 155), "toolbars", [], "any", false, false, false, 155), "dropdown", [], "any", false, false, false, 155), "form", [], "any", false, false, false, 155), "alias", [], "any", false, false, false, 155), "help", [], "any", false, false, false, 155), "html", null, true);
                echo "</small>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                                                                <div class=\"col-lg-6 col-sm-12 pr-2\">
                                                                                                    <label class=\"col-form-label\" for=\"toolbar_button_";
                // line 161
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 161), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 162
($context["app"] ?? null), "sub", [], "any", false, false, false, 162), "lang", [], "any", false, false, false, 162), "string", [], "any", false, false, false, 162), "admin", [], "any", false, false, false, 162), "editor", [], "any", false, false, false, 162), "toolbars", [], "any", false, false, false, 162), "dropdown", [], "any", false, false, false, 162), "form", [], "any", false, false, false, 162), "button", [], "any", false, false, false, 162), "title", [], "any", false, false, false, 162), "html", null, true);
                echo "</label>
                                                                                                    <div>
                                                                                                        <input name=\"options[button]\" type=\"text\" class=\"form-control\" id=\"toolbar_button_";
                // line 164
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 164), "html", null, true);
                echo "\"
                                                                                                            value=\"";
                // line 165
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "button", [], "any", false, false, false, 165), "html", null, true);
                echo "\"
                                                                                                            placeholder=\"";
                // line 166
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 166), "lang", [], "any", false, false, false, 166), "string", [], "any", false, false, false, 166), "admin", [], "any", false, false, false, 166), "editor", [], "any", false, false, false, 166), "toolbars", [], "any", false, false, false, 166), "dropdown", [], "any", false, false, false, 166), "form", [], "any", false, false, false, 166), "button", [], "any", false, false, false, 166), "placeholder", [], "any", false, false, false, 166), "html", null, true);
                echo "\">
                                                                                                        <small class=\"form-text text-muted\">";
                // line 167
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 167), "lang", [], "any", false, false, false, 167), "string", [], "any", false, false, false, 167), "admin", [], "any", false, false, false, 167), "editor", [], "any", false, false, false, 167), "toolbars", [], "any", false, false, false, 167), "dropdown", [], "any", false, false, false, 167), "form", [], "any", false, false, false, 167), "button", [], "any", false, false, false, 167), "help", [], "any", false, false, false, 167), "html", null, true);
                echo "</small>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class=\"col-lg-6 col-sm-12\">
                                                                                                    <label class=\"col-form-label\" for=\"toolbar_order_by_";
                // line 171
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 171), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 172
($context["app"] ?? null), "sub", [], "any", false, false, false, 172), "lang", [], "any", false, false, false, 172), "string", [], "any", false, false, false, 172), "admin", [], "any", false, false, false, 172), "editor", [], "any", false, false, false, 172), "toolbars", [], "any", false, false, false, 172), "dropdown", [], "any", false, false, false, 172), "form", [], "any", false, false, false, 172), "order_by", [], "any", false, false, false, 172), "title", [], "any", false, false, false, 172), "html", null, true);
                echo "</label>
                                                                                                    <div>
                                                                                                        <input name=\"options[order_by]\" type=\"number\" class=\"form-control\"
                                                                                                            id=\"toolbar_order_by_";
                // line 175
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 175), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "order_by", [], "any", false, false, false, 175), "html", null, true);
                echo "\" min=\"1\">
                                                                                                        <small class=\"form-text text-muted\">";
                // line 176
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 176), "lang", [], "any", false, false, false, 176), "string", [], "any", false, false, false, 176), "admin", [], "any", false, false, false, 176), "editor", [], "any", false, false, false, 176), "toolbars", [], "any", false, false, false, 176), "dropdown", [], "any", false, false, false, 176), "form", [], "any", false, false, false, 176), "order_by", [], "any", false, false, false, 176), "help", [], "any", false, false, false, 176), "html", null, true);
                echo "</small>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                                                                <div class=\"col-lg-12 col-sm-12 pr-2\">
                                                                                                    <label class=\"col-form-label\" for=\"toolbar_icon_";
                // line 182
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 182), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 183
($context["app"] ?? null), "sub", [], "any", false, false, false, 183), "lang", [], "any", false, false, false, 183), "string", [], "any", false, false, false, 183), "admin", [], "any", false, false, false, 183), "editor", [], "any", false, false, false, 183), "toolbars", [], "any", false, false, false, 183), "dropdown", [], "any", false, false, false, 183), "form", [], "any", false, false, false, 183), "icon", [], "any", false, false, false, 183), "title", [], "any", false, false, false, 183), "html", null, true);
                echo "</label>
                                                                                                    <div>
                                                                                                        <input name=\"options[icon]\" type=\"text\" class=\"form-control\" id=\"toolbar_icon_";
                // line 185
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 185), "html", null, true);
                echo "\"
                                                                                                            value=\"";
                // line 186
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "icon", [], "any", false, false, false, 186), "html", null, true);
                echo "\"
                                                                                                            placeholder=\"";
                // line 187
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 187), "lang", [], "any", false, false, false, 187), "string", [], "any", false, false, false, 187), "admin", [], "any", false, false, false, 187), "editor", [], "any", false, false, false, 187), "toolbars", [], "any", false, false, false, 187), "dropdown", [], "any", false, false, false, 187), "form", [], "any", false, false, false, 187), "icon", [], "any", false, false, false, 187), "placeholder", [], "any", false, false, false, 187), "html", null, true);
                echo "\">
                                                                                                        <small class=\"form-text text-muted\">";
                // line 188
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 188), "lang", [], "any", false, false, false, 188), "string", [], "any", false, false, false, 188), "admin", [], "any", false, false, false, 188), "editor", [], "any", false, false, false, 188), "toolbars", [], "any", false, false, false, 188), "dropdown", [], "any", false, false, false, 188), "form", [], "any", false, false, false, 188), "icon", [], "any", false, false, false, 188), "help", [], "any", false, false, false, 188);
                echo "</small>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon plus\">";
                // line 192
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 193
($context["app"] ?? null), "sub", [], "any", false, false, false, 193), "lang", [], "any", false, false, false, 193), "string", [], "any", false, false, false, 193), "container", [], "any", false, false, false, 193), "buttons", [], "any", false, false, false, 193), "update", [], "any", false, false, false, 193), "html", null, true);
                echo "</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['toolbar'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            echo "                                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "     
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <small>";
        // line 203
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 203), "lang", [], "any", false, false, false, 203), "string", [], "any", false, false, false, 203), "admin", [], "any", false, false, false, 203), "editor", [], "any", false, false, false, 203), "buttons", [], "any", false, false, false, 203), "head", [], "any", false, false, false, 203), "tabs", [], "any", false, false, false, 203), "toolbars", [], "any", false, false, false, 203), "editor", [], "any", false, false, false, 203), "help", [], "any", false, false, false, 203);
        echo "</small>
                                                    </div>
                                                </div>
                                                <div class=\"form-group row mx-auto\">
                                                    <label class=\"col-sm-4 col-form-label\">";
        // line 207
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 207), "lang", [], "any", false, false, false, 207), "string", [], "any", false, false, false, 207), "admin", [], "any", false, false, false, 207), "editor", [], "any", false, false, false, 207), "buttons", [], "any", false, false, false, 207), "head", [], "any", false, false, false, 207), "tabs", [], "any", false, false, false, 207), "toolbars", [], "any", false, false, false, 207), "nonactive", [], "any", false, false, false, 207), "title", [], "any", false, false, false, 207), "html", null, true);
        echo "</label>
                                                    <div class=\"col-sm-8\">
                                                        <div class=\"fake-editor-container\">
                                                            <div id=\"js-AppAdmin_DraggableItems\" class=\"fake-editor nonactive-toolbars\">
                                                                <div class=\"parent\">
                                                                    <div class=\"dropdown non-draggable group-line\" data-parent=\"0\">
                                                                        <button>
                                                                            <i class=\"fas fa-slash\"></i>
                                                                        </button>
                                                                    </div>
                                                                    ";
        // line 217
        $context["toolbars"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 217), "editor", [], "any", false, false, false, 217), "buttons", [], "any", false, false, false, 217), "getToolbarsWithOptions", [0 => false], "method", false, false, false, 217);
        // line 218
        echo "                                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(($context["toolbars"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 219
            echo "                                                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["toolbars"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["item"]] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["toolbar"]) {
                // line 220
                echo "                                                                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["toolbar"], "name", [], "any", false, false, false, 220) === "sizeselect")) {
                    // line 221
                    echo "                                                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["toolbar"], "name", [], "any", false, false, false, 221) === "forecolor")) {
                    // line 222
                    echo "                                                                                <div data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 222), "html", null, true);
                    echo "\" data-parent=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "button", [], "any", false, false, false, 222), "html", null, true);
                    echo "\" class=\"dropdown dd-with\">
                                                                                    <button type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                                        ";
                    // line 224
                    echo twig_get_attribute($this->env, $this->source, $context["toolbar"], "icon", [], "any", false, false, false, 224);
                    echo "
                                                                                    </button>
                                                                                </div>
                                                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 227
$context["toolbar"], "name", [], "any", false, false, false, 227) === "backcolor")) {
                    // line 228
                    echo "                                                                                <div data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 228), "html", null, true);
                    echo "\" data-parent=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "button", [], "any", false, false, false, 228), "html", null, true);
                    echo "\" class=\"dropdown dd-with\">
                                                                                    <button type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                                        ";
                    // line 230
                    echo twig_get_attribute($this->env, $this->source, $context["toolbar"], "icon", [], "any", false, false, false, 230);
                    echo "
                                                                                    </button>
                                                                                </div>
                                                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 233
$context["toolbar"], "name", [], "any", false, false, false, 233) === "table")) {
                    // line 234
                    echo "                                                                                <div data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 234), "html", null, true);
                    echo "\" data-parent=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "button", [], "any", false, false, false, 234), "html", null, true);
                    echo "\" class=\"dropdown dd-with\">
                                                                                    <button type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                                        ";
                    // line 236
                    echo twig_get_attribute($this->env, $this->source, $context["toolbar"], "icon", [], "any", false, false, false, 236);
                    echo "
                                                                                    </button>
                                                                                </div>
                                                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 239
$context["toolbar"], "name", [], "any", false, false, false, 239) === "formatselect")) {
                    // line 240
                    echo "                                                                                <div data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 240), "html", null, true);
                    echo "\" data-parent=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "button", [], "any", false, false, false, 240), "html", null, true);
                    echo "\" class=\"dropdown dd\">
                                                                                    <button type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                                        <span>";
                    // line 242
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 242), "lang", [], "any", false, false, false, 242), "string", [], "any", false, false, false, 242), "editor", [], "any", false, false, false, 242), "Paragraph", [], "any", false, false, false, 242), "html", null, true);
                    echo "</span>
                                                                                    </button>
                                                                                </div>
                                                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 245
$context["toolbar"], "name", [], "any", false, false, false, 245) === "fontselect")) {
                    // line 246
                    echo "                                                                                <div data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 246), "html", null, true);
                    echo "\" data-parent=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "button", [], "any", false, false, false, 246), "html", null, true);
                    echo "\" class=\"dropdown dd\">
                                                                                    <button type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                                        <span>";
                    // line 248
                    echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 248), "lang", [], "any", false, false, false, 248), "string", [], "any", false, false, false, 248), "editor", [], "any", false, false, false, 248)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["System Font"] ?? null) : null), "html", null, true);
                    echo "</span>
                                                                                    </button>
                                                                                </div>
                                                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 251
$context["toolbar"], "name", [], "any", false, false, false, 251) === "fontsizeselect")) {
                    // line 252
                    echo "                                                                                <div data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 252), "html", null, true);
                    echo "\" data-parent=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "button", [], "any", false, false, false, 252), "html", null, true);
                    echo "\" class=\"dropdown dd\">
                                                                                    <button type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                                        <span>12pt</span>
                                                                                    </button>
                                                                                </div>
                                                                            ";
                } else {
                    // line 258
                    echo "                                                                                <div class=\"dropdown\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 258), "html", null, true);
                    echo "\" data-parent=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "button", [], "any", false, false, false, 258), "html", null, true);
                    echo "\">
                                                                                    <button type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                    // line 259
                    echo twig_get_attribute($this->env, $this->source, $context["toolbar"], "icon", [], "any", false, false, false, 259);
                    echo "</button>
                                                                                </div>
                                                                            ";
                }
                // line 262
                echo "                                                                            <div class=\"dropdown-menu dropdown-menu-right custom-menu custom-menu-lg shadow animate slideIn d-none\">
                                                                                <div class=\"progress d-none\">
                                                                                    <div class=\"indeterminate\"></div>
                                                                                </div>
                                                                                <div class=\"title\">
                                                                                    <div>
                                                                                        <span>";
                // line 268
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 268), "lang", [], "any", false, false, false, 268), "parse", [], "any", false, false, false, 268), "Parse", [0 => "admin.editor.toolbars.dropdown.title", 1 => twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "name", [], "any", false, false, false, 268))], "method", false, false, false, 268), "html", null, true);
                echo "</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div>
                                                                                    <form method=\"post\">
                                                                                        <div id=\"toolbar-settings\" class=\"form pt-3 pb-2 px-2\">
                                                                                            <div class=\"h3 text-dark d-flex align-items-center justify-content-center mb-3\">
                                                                                                ";
                // line 275
                echo twig_get_attribute($this->env, $this->source, $context["toolbar"], "icon", [], "any", false, false, false, 275);
                echo "
                                                                                            </div>
                                                                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                                                                <div class=\"col-lg-6 col-sm-12 pr-2\">
                                                                                                    <label class=\"col-form-label\" for=\"toolbar_toolbar_";
                // line 279
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 279), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 280
($context["app"] ?? null), "sub", [], "any", false, false, false, 280), "lang", [], "any", false, false, false, 280), "string", [], "any", false, false, false, 280), "admin", [], "any", false, false, false, 280), "editor", [], "any", false, false, false, 280), "toolbars", [], "any", false, false, false, 280), "dropdown", [], "any", false, false, false, 280), "form", [], "any", false, false, false, 280), "toolbar", [], "any", false, false, false, 280), "title", [], "any", false, false, false, 280), "html", null, true);
                echo "</label>
                                                                                                    <div>
                                                                                                        <input name=\"options[toolbar]\" type=\"text\" class=\"form-control\"
                                                                                                            id=\"toolbar_toolbar_";
                // line 283
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 283), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "name", [], "any", false, false, false, 283), "html", null, true);
                echo "\"
                                                                                                            placeholder=\"";
                // line 284
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 284), "lang", [], "any", false, false, false, 284), "string", [], "any", false, false, false, 284), "admin", [], "any", false, false, false, 284), "editor", [], "any", false, false, false, 284), "toolbars", [], "any", false, false, false, 284), "dropdown", [], "any", false, false, false, 284), "form", [], "any", false, false, false, 284), "toolbar", [], "any", false, false, false, 284), "placeholder", [], "any", false, false, false, 284), "html", null, true);
                echo "\">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class=\"col-lg-6 col-sm-12\">
                                                                                                    <label class=\"col-form-label\" for=\"toolbar_alias_";
                // line 288
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 288), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 289
($context["app"] ?? null), "sub", [], "any", false, false, false, 289), "lang", [], "any", false, false, false, 289), "string", [], "any", false, false, false, 289), "admin", [], "any", false, false, false, 289), "editor", [], "any", false, false, false, 289), "toolbars", [], "any", false, false, false, 289), "dropdown", [], "any", false, false, false, 289), "form", [], "any", false, false, false, 289), "alias", [], "any", false, false, false, 289), "title", [], "any", false, false, false, 289), "html", null, true);
                echo "</label>
                                                                                                    <div>
                                                                                                        <input name=\"options[alias]\" type=\"text\" class=\"form-control\" id=\"toolbar_alias_";
                // line 291
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 291), "html", null, true);
                echo "\"
                                                                                                            value=\"";
                // line 292
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "alias", [], "any", false, false, false, 292), "html", null, true);
                echo "\"
                                                                                                            placeholder=\"";
                // line 293
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 293), "lang", [], "any", false, false, false, 293), "string", [], "any", false, false, false, 293), "admin", [], "any", false, false, false, 293), "editor", [], "any", false, false, false, 293), "toolbars", [], "any", false, false, false, 293), "dropdown", [], "any", false, false, false, 293), "form", [], "any", false, false, false, 293), "alias", [], "any", false, false, false, 293), "placeholder", [], "any", false, false, false, 293), "html", null, true);
                echo "\">
                                                                                                        <small class=\"form-text text-muted\">";
                // line 294
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 294), "lang", [], "any", false, false, false, 294), "string", [], "any", false, false, false, 294), "admin", [], "any", false, false, false, 294), "editor", [], "any", false, false, false, 294), "toolbars", [], "any", false, false, false, 294), "dropdown", [], "any", false, false, false, 294), "form", [], "any", false, false, false, 294), "alias", [], "any", false, false, false, 294), "help", [], "any", false, false, false, 294), "html", null, true);
                echo "</small>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                                                                <div class=\"col-lg-6 col-sm-12 pr-2\">
                                                                                                    <label class=\"col-form-label\" for=\"toolbar_button_";
                // line 300
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 300), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 301
($context["app"] ?? null), "sub", [], "any", false, false, false, 301), "lang", [], "any", false, false, false, 301), "string", [], "any", false, false, false, 301), "admin", [], "any", false, false, false, 301), "editor", [], "any", false, false, false, 301), "toolbars", [], "any", false, false, false, 301), "dropdown", [], "any", false, false, false, 301), "form", [], "any", false, false, false, 301), "button", [], "any", false, false, false, 301), "title", [], "any", false, false, false, 301), "html", null, true);
                echo "</label>
                                                                                                    <div>
                                                                                                        <input name=\"options[button]\" type=\"text\" class=\"form-control\" id=\"toolbar_button_";
                // line 303
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 303), "html", null, true);
                echo "\"
                                                                                                            value=\"";
                // line 304
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "button", [], "any", false, false, false, 304), "html", null, true);
                echo "\"
                                                                                                            placeholder=\"";
                // line 305
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 305), "lang", [], "any", false, false, false, 305), "string", [], "any", false, false, false, 305), "admin", [], "any", false, false, false, 305), "editor", [], "any", false, false, false, 305), "toolbars", [], "any", false, false, false, 305), "dropdown", [], "any", false, false, false, 305), "form", [], "any", false, false, false, 305), "button", [], "any", false, false, false, 305), "placeholder", [], "any", false, false, false, 305), "html", null, true);
                echo "\">
                                                                                                        <small class=\"form-text text-muted\">";
                // line 306
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 306), "lang", [], "any", false, false, false, 306), "string", [], "any", false, false, false, 306), "admin", [], "any", false, false, false, 306), "editor", [], "any", false, false, false, 306), "toolbars", [], "any", false, false, false, 306), "dropdown", [], "any", false, false, false, 306), "form", [], "any", false, false, false, 306), "button", [], "any", false, false, false, 306), "help", [], "any", false, false, false, 306), "html", null, true);
                echo "</small>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class=\"col-lg-6 col-sm-12\">
                                                                                                    <label class=\"col-form-label\" for=\"toolbar_order_by_";
                // line 310
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 310), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 311
($context["app"] ?? null), "sub", [], "any", false, false, false, 311), "lang", [], "any", false, false, false, 311), "string", [], "any", false, false, false, 311), "admin", [], "any", false, false, false, 311), "editor", [], "any", false, false, false, 311), "toolbars", [], "any", false, false, false, 311), "dropdown", [], "any", false, false, false, 311), "form", [], "any", false, false, false, 311), "order_by", [], "any", false, false, false, 311), "title", [], "any", false, false, false, 311), "html", null, true);
                echo "</label>
                                                                                                    <div>
                                                                                                        <input name=\"options[order_by]\" type=\"number\" class=\"form-control\"
                                                                                                            id=\"toolbar_order_by_";
                // line 314
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 314), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "order_by", [], "any", false, false, false, 314), "html", null, true);
                echo "\" min=\"1\">
                                                                                                        <small class=\"form-text text-muted\">";
                // line 315
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 315), "lang", [], "any", false, false, false, 315), "string", [], "any", false, false, false, 315), "admin", [], "any", false, false, false, 315), "editor", [], "any", false, false, false, 315), "toolbars", [], "any", false, false, false, 315), "dropdown", [], "any", false, false, false, 315), "form", [], "any", false, false, false, 315), "order_by", [], "any", false, false, false, 315), "help", [], "any", false, false, false, 315), "html", null, true);
                echo "</small>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                                                                <div class=\"col-lg-12 col-sm-12 pr-2\">
                                                                                                    <label class=\"col-form-label\" for=\"toolbar_icon_";
                // line 321
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 321), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 322
($context["app"] ?? null), "sub", [], "any", false, false, false, 322), "lang", [], "any", false, false, false, 322), "string", [], "any", false, false, false, 322), "admin", [], "any", false, false, false, 322), "editor", [], "any", false, false, false, 322), "toolbars", [], "any", false, false, false, 322), "dropdown", [], "any", false, false, false, 322), "form", [], "any", false, false, false, 322), "icon", [], "any", false, false, false, 322), "title", [], "any", false, false, false, 322), "html", null, true);
                echo "</label>
                                                                                                    <div>
                                                                                                        <input name=\"options[icon]\" type=\"text\" class=\"form-control\" id=\"toolbar_icon_";
                // line 324
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 324), "html", null, true);
                echo "\"
                                                                                                            value=\"";
                // line 325
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "icon", [], "any", false, false, false, 325), "html", null, true);
                echo "\"
                                                                                                            placeholder=\"";
                // line 326
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 326), "lang", [], "any", false, false, false, 326), "string", [], "any", false, false, false, 326), "admin", [], "any", false, false, false, 326), "editor", [], "any", false, false, false, 326), "toolbars", [], "any", false, false, false, 326), "dropdown", [], "any", false, false, false, 326), "form", [], "any", false, false, false, 326), "icon", [], "any", false, false, false, 326), "placeholder", [], "any", false, false, false, 326), "html", null, true);
                echo "\">
                                                                                                        <small class=\"form-text text-muted\">";
                // line 327
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 327), "lang", [], "any", false, false, false, 327), "string", [], "any", false, false, false, 327), "admin", [], "any", false, false, false, 327), "editor", [], "any", false, false, false, 327), "toolbars", [], "any", false, false, false, 327), "dropdown", [], "any", false, false, false, 327), "form", [], "any", false, false, false, 327), "icon", [], "any", false, false, false, 327), "help", [], "any", false, false, false, 327);
                echo "</small>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon plus\">";
                // line 331
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 332
($context["app"] ?? null), "sub", [], "any", false, false, false, 332), "lang", [], "any", false, false, false, 332), "string", [], "any", false, false, false, 332), "container", [], "any", false, false, false, 332), "buttons", [], "any", false, false, false, 332), "update", [], "any", false, false, false, 332), "html", null, true);
                echo "</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['toolbar'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 338
            echo "                                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 339
        echo "                                                                </div>
                                                            </div>
                                                        </div>
                                                        <small>";
        // line 342
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 342), "lang", [], "any", false, false, false, 342), "string", [], "any", false, false, false, 342), "admin", [], "any", false, false, false, 342), "editor", [], "any", false, false, false, 342), "buttons", [], "any", false, false, false, 342), "head", [], "any", false, false, false, 342), "tabs", [], "any", false, false, false, 342), "toolbars", [], "any", false, false, false, 342), "nonactive", [], "any", false, false, false, 342), "help", [], "any", false, false, false, 342), "html", null, true);
        echo "</small>
                                                    </div>
                                                    <div class=\"help pt-4\">
                                                        <div class=\"d-flex align-items-center mb-2\">
                                                            <i class=\"far fa-question-circle h4 mb-0\"></i>
                                                            <div class=\"ml-3\">";
        // line 347
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 347), "lang", [], "any", false, false, false, 347), "string", [], "any", false, false, false, 347), "admin", [], "any", false, false, false, 347), "editor", [], "any", false, false, false, 347), "toolbars", [], "any", false, false, false, 347), "help", [], "any", false, false, false, 347), "html", null, true);
        echo "</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button data-ui=\"save-order\" type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon plus\">";
        // line 352
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 352), "lang", [], "any", false, false, false, 352), "string", [], "any", false, false, false, 352), "container", [], "any", false, false, false, 352), "buttons", [], "any", false, false, false, 352), "save", [], "any", false, false, false, 352), "html", null, true);
        echo "</button>
                                                </div>
                                            </div>
                                            <div class=\"tab-pane fade\" id=\"buttons\" role=\"tabpanel\" aria-labelledby=\"buttons-tab\">
                                                <div class=\"form-group row mx-auto\">
                                                    <label class=\"col-sm-4 col-form-label\">";
        // line 357
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 357), "lang", [], "any", false, false, false, 357), "string", [], "any", false, false, false, 357), "admin", [], "any", false, false, false, 357), "editor", [], "any", false, false, false, 357), "buttons", [], "any", false, false, false, 357), "head", [], "any", false, false, false, 357), "tabs", [], "any", false, false, false, 357), "buttons", [], "any", false, false, false, 357), "title", [], "any", false, false, false, 357), "html", null, true);
        echo "</label>
                                                    <div class=\"col-sm-8\">
                                                        <div class=\"fake-editor-container\">
                                                            <div id=\"js-AppAdmin_DraggableItems\" class=\"fake-editor buttons\">
                                                                <div class=\"parent\">
                                                                    <div class=\"dropdown non-draggable group-line\" data-parent=\"0\">
                                                                        <button>
                                                                            <i class=\"fas fa-slash\"></i>
                                                                        </button>
                                                                    </div>
                                                                    ";
        // line 367
        $context["toolbars"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 367), "editor", [], "any", false, false, false, 367), "buttons", [], "any", false, false, false, 367), "getButtonList", [0 => false], "method", false, false, false, 367);
        // line 368
        echo "                                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(($context["toolbars"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 369
            echo "                                                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["toolbars"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[$context["item"]] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["toolbar"]) {
                // line 370
                echo "                                                                            <div class=\"dropdown\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "id", [], "any", false, false, false, 370), "html", null, true);
                echo "\" data-parent=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "button", [], "any", false, false, false, 370), "html", null, true);
                echo "\">
                                                                                <a class=\"text-dark\" href=\"";
                // line 371
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 371), "buildLink", [0 => "adminEditor", 1 => []], "method", false, false, false, 371), "html", null, true);
                echo "?buttonId=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toolbar"], "button_id", [], "any", false, false, false, 371), "html", null, true);
                echo "&defaultNav=editor_buttons\">";
                echo twig_get_attribute($this->env, $this->source, $context["toolbar"], "icon", [], "any", false, false, false, 371);
                echo "</a>
                                                                            </div>
                                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['toolbar'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 374
            echo "                                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 375
        echo "                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
        return "@ComponentBundle_Admin/Editor/editor_buttons.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  879 => 375,  873 => 374,  860 => 371,  853 => 370,  848 => 369,  843 => 368,  841 => 367,  828 => 357,  820 => 352,  812 => 347,  804 => 342,  799 => 339,  793 => 338,  781 => 332,  780 => 331,  773 => 327,  769 => 326,  765 => 325,  761 => 324,  756 => 322,  753 => 321,  744 => 315,  738 => 314,  732 => 311,  729 => 310,  722 => 306,  718 => 305,  714 => 304,  710 => 303,  705 => 301,  702 => 300,  693 => 294,  689 => 293,  685 => 292,  681 => 291,  676 => 289,  673 => 288,  666 => 284,  660 => 283,  654 => 280,  651 => 279,  644 => 275,  634 => 268,  626 => 262,  620 => 259,  613 => 258,  601 => 252,  599 => 251,  593 => 248,  585 => 246,  583 => 245,  577 => 242,  569 => 240,  567 => 239,  561 => 236,  553 => 234,  551 => 233,  545 => 230,  537 => 228,  535 => 227,  529 => 224,  521 => 222,  518 => 221,  515 => 220,  510 => 219,  505 => 218,  503 => 217,  490 => 207,  483 => 203,  472 => 199,  460 => 193,  459 => 192,  452 => 188,  448 => 187,  444 => 186,  440 => 185,  435 => 183,  432 => 182,  423 => 176,  417 => 175,  411 => 172,  408 => 171,  401 => 167,  397 => 166,  393 => 165,  389 => 164,  384 => 162,  381 => 161,  372 => 155,  368 => 154,  364 => 153,  360 => 152,  355 => 150,  352 => 149,  345 => 145,  339 => 144,  333 => 141,  330 => 140,  323 => 136,  313 => 129,  305 => 123,  299 => 120,  291 => 118,  279 => 112,  277 => 111,  271 => 108,  263 => 106,  261 => 105,  255 => 102,  247 => 100,  245 => 99,  239 => 96,  231 => 94,  229 => 93,  223 => 90,  215 => 88,  213 => 87,  207 => 84,  199 => 82,  196 => 81,  193 => 80,  188 => 79,  184 => 78,  181 => 77,  179 => 76,  172 => 72,  158 => 61,  149 => 55,  125 => 36,  119 => 33,  115 => 32,  104 => 23,  102 => 22,  98 => 20,  96 => 19,  86 => 14,  80 => 13,  74 => 12,  68 => 8,  64 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/editor/buttons' %}

{% block title %}{{ app.sub.lang.string.admin.editor.buttons.title }}{{ \" - \" }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminIndex', {}) }}\">{{ app.sub.lang.string.admin.container.title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminEditor', {}) }}\">{{ app.sub.lang.string.admin.editor.buttons.title }}</a></div>
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
                        <h5 class=\"mb-0\">{{ app.sub.lang.string.admin.editor.buttons.title }}</h5>
                        <small class=\"text-muted\">{{ app.sub.lang.string.admin.editor.buttons.desc }}</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"{{ app.phrase.buildLink('adminEditor', {}) }}?addButton\" class=\"btn btn-app-discussion icon plus\">{{ app.sub.lang.string.admin.editor.buttons.add }}</a>
                    </div>
                </div>  
                <div class=\"d-flex flex-column align-items-center justify-content-center mt-3\">
                    <div class=\"service-list-area list-tab-area w-100\">
                        <div>
                            <div id=\"servicesAccordion\">
                                <div class=\"app-addon app-service bg-white shadow-sm position-relative mb-3 rounded\">
                                    <div class=\"app-post\">
                                        <div class=\"post-layout d-flex align-items-center border-top-0 px-2 p-1 collapse\" data-toggle=\"collapse\" data-target=\"#adminAddons_install\"
                                            aria-expanded=\"true\" aria-controls=\"adminAddons_install\">
                                            <div class=\"post-icon\">
                                                <i class=\"fas fa-spell-check\"></i>
                                            </div>
                                            <div class=\"head-title with-tabs d-flex flex-column ml-lg-0 ml-2 mr-auto\">
                                                <ul class=\"nav nav-tabs\" id=\"editorTab\" role=\"tablist\">
                                                    <li class=\"nav-item\">
                                                        <a class=\"nav-link active\" id=\"toolbars-tab\" data-toggle=\"tab\" href=\"#toolbars\" role=\"tab\" aria-controls=\"toolbars\" aria-selected=\"true\">
                                                            <i class=\"fas fa-italic mr-2\"></i>
                                                            {{ app.sub.lang.string.admin.editor.buttons.head.tabs.toolbars.title }}
                                                        </a>
                                                    </li>
                                                    <li class=\"nav-item\">
                                                        <a class=\"nav-link\" id=\"profile-buttons\" data-toggle=\"tab\" href=\"#buttons\" role=\"tab\" aria-controls=\"buttons\" aria-selected=\"false\">
                                                            <i class=\"fas fa-bars mr-2\"></i>
                                                            {{ app.sub.lang.string.admin.editor.buttons.head.tabs.buttons.title }}
                                                        </a>
                                                    </li>                                                
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"tab-content p-2\">
                                            <div class=\"tab-pane fade show active\" id=\"toolbars\" role=\"tabpanel\" aria-labelledby=\"toolbars-tab\">
                                                <div class=\"form-group row mx-auto\">
                                                    <label class=\"col-sm-4 col-form-label\">{{ app.sub.lang.string.admin.editor.buttons.head.tabs.toolbars.editor.title }}</label>
                                                    <div class=\"col-sm-8\">
                                                        <div class=\"fake-editor-container\">
                                                            <div id=\"js-AppAdmin_DraggableItems\" class=\"fake-editor active-toolbars\">
                                                                {% set toolbars = app.sub.editor.buttons.getToolbarsWithOptions() %}
                                                                <div class=\"parent\">
                                                                    {% for item in toolbars|keys %}
                                                                        {% for toolbar in toolbars[item] %}
                                                                            {% if toolbar.name is same as ('sizeselect') %}
                                                                            {% elseif toolbar.name is same as ('forecolor') %}
                                                                                <div data-id=\"{{ toolbar.id }}\" data-parent=\"{{ toolbar.button }}\" class=\"dropdown dd-with\">
                                                                                    <button type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                                        {{ toolbar.icon|raw }}
                                                                                    </button>
                                                                                </div>
                                                                            {% elseif toolbar.name is same as ('backcolor') %}
                                                                                <div data-id=\"{{ toolbar.id }}\" data-parent=\"{{ toolbar.button }}\" class=\"dropdown dd-with\">
                                                                                    <button type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                                        {{ toolbar.icon|raw }}
                                                                                    </button>
                                                                                </div>
                                                                            {% elseif toolbar.name is same as ('table') %}
                                                                                <div data-id=\"{{ toolbar.id }}\" data-parent=\"{{ toolbar.button }}\" class=\"dropdown dd-with\">
                                                                                    <button type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                                        {{ toolbar.icon|raw }}
                                                                                    </button>
                                                                                </div>
                                                                            {% elseif toolbar.name is same as ('formatselect') %}
                                                                                <div data-id=\"{{ toolbar.id }}\" data-parent=\"{{ toolbar.button }}\" class=\"dropdown dd\">
                                                                                    <button type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                                        <span>{{ app.sub.lang.string.editor.Paragraph }}</span>
                                                                                    </button>
                                                                                </div>
                                                                            {% elseif toolbar.name is same as ('fontselect') %}
                                                                                <div data-id=\"{{ toolbar.id }}\" data-parent=\"{{ toolbar.button }}\" class=\"dropdown dd\">
                                                                                    <button type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                                        <span>{{ app.sub.lang.string.editor['System Font'] }}</span>
                                                                                    </button>
                                                                                </div>
                                                                            {% elseif toolbar.name is same as ('fontsizeselect') %}
                                                                                <div data-id=\"{{ toolbar.id }}\" data-parent=\"{{ toolbar.button }}\" class=\"dropdown dd\">
                                                                                    <button type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                                        <span>12pt</span>
                                                                                    </button>
                                                                                </div>
                                                                            {% else %}
                                                                                <div class=\"dropdown\" data-id=\"{{ toolbar.id }}\" data-parent=\"{{ toolbar.button }}\">
                                                                                    <button type=\"button\" data-toggle=\"dropdown\"
                                                                                    aria-haspopup=\"true\" aria-expanded=\"false\">{{ toolbar.icon|raw }}</button>
                                                                                </div>
                                                                            {% endif %}
                                                                            <div class=\"dropdown-menu dropdown-menu-right custom-menu custom-menu-lg shadow animate slideIn d-none\">
                                                                                <div class=\"progress d-none\">
                                                                                    <div class=\"indeterminate\"></div>
                                                                                </div>
                                                                                <div class=\"title\">
                                                                                    <div>
                                                                                        <span>{{ app.sub.lang.parse.Parse('admin.editor.toolbars.dropdown.title', toolbar.name|title) }}</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div>
                                                                                    <form method=\"post\">
                                                                                        <div id=\"toolbar-settings\" class=\"form pt-3 pb-2 px-2\">
                                                                                            <div class=\"h3 text-dark d-flex align-items-center justify-content-center mb-3\">
                                                                                                {{ toolbar.icon|raw }}
                                                                                            </div>
                                                                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                                                                <div class=\"col-lg-6 col-sm-12 pr-2\">
                                                                                                    <label class=\"col-form-label\" for=\"toolbar_toolbar_{{ toolbar.id }}\">{{
                                                                                                        app.sub.lang.string.admin.editor.toolbars.dropdown.form.toolbar.title }}</label>
                                                                                                    <div>
                                                                                                        <input name=\"options[toolbar]\" type=\"text\" class=\"form-control\"
                                                                                                            id=\"toolbar_toolbar_{{ toolbar.id }}\" value=\"{{ toolbar.name }}\"
                                                                                                            placeholder=\"{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.toolbar.placeholder }}\">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class=\"col-lg-6 col-sm-12\">
                                                                                                    <label class=\"col-form-label\" for=\"toolbar_alias_{{ toolbar.id }}\">{{
                                                                                                        app.sub.lang.string.admin.editor.toolbars.dropdown.form.alias.title }}</label>
                                                                                                    <div>
                                                                                                        <input name=\"options[alias]\" type=\"text\" class=\"form-control\" id=\"toolbar_alias_{{ toolbar.id }}\"
                                                                                                            value=\"{{ toolbar.alias }}\"
                                                                                                            placeholder=\"{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.alias.placeholder }}\">
                                                                                                        <small class=\"form-text text-muted\">{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.alias.help }}</small>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                                                                <div class=\"col-lg-6 col-sm-12 pr-2\">
                                                                                                    <label class=\"col-form-label\" for=\"toolbar_button_{{ toolbar.id }}\">{{
                                                                                                        app.sub.lang.string.admin.editor.toolbars.dropdown.form.button.title }}</label>
                                                                                                    <div>
                                                                                                        <input name=\"options[button]\" type=\"text\" class=\"form-control\" id=\"toolbar_button_{{ toolbar.id }}\"
                                                                                                            value=\"{{ toolbar.button }}\"
                                                                                                            placeholder=\"{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.button.placeholder }}\">
                                                                                                        <small class=\"form-text text-muted\">{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.button.help }}</small>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class=\"col-lg-6 col-sm-12\">
                                                                                                    <label class=\"col-form-label\" for=\"toolbar_order_by_{{ toolbar.id }}\">{{
                                                                                                        app.sub.lang.string.admin.editor.toolbars.dropdown.form.order_by.title }}</label>
                                                                                                    <div>
                                                                                                        <input name=\"options[order_by]\" type=\"number\" class=\"form-control\"
                                                                                                            id=\"toolbar_order_by_{{ toolbar.id }}\" value=\"{{ toolbar.order_by }}\" min=\"1\">
                                                                                                        <small class=\"form-text text-muted\">{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.order_by.help }}</small>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                                                                <div class=\"col-lg-12 col-sm-12 pr-2\">
                                                                                                    <label class=\"col-form-label\" for=\"toolbar_icon_{{ toolbar.id }}\">{{
                                                                                                        app.sub.lang.string.admin.editor.toolbars.dropdown.form.icon.title }}</label>
                                                                                                    <div>
                                                                                                        <input name=\"options[icon]\" type=\"text\" class=\"form-control\" id=\"toolbar_icon_{{ toolbar.id }}\"
                                                                                                            value=\"{{ toolbar.icon }}\"
                                                                                                            placeholder=\"{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.icon.placeholder }}\">
                                                                                                        <small class=\"form-text text-muted\">{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.icon.help|raw }}</small>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon plus\">{{
                                                                                                app.sub.lang.string.container.buttons.update }}</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        {% endfor %}
                                                                    {% endfor %}     
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <small>{{ app.sub.lang.string.admin.editor.buttons.head.tabs.toolbars.editor.help|raw }}</small>
                                                    </div>
                                                </div>
                                                <div class=\"form-group row mx-auto\">
                                                    <label class=\"col-sm-4 col-form-label\">{{ app.sub.lang.string.admin.editor.buttons.head.tabs.toolbars.nonactive.title }}</label>
                                                    <div class=\"col-sm-8\">
                                                        <div class=\"fake-editor-container\">
                                                            <div id=\"js-AppAdmin_DraggableItems\" class=\"fake-editor nonactive-toolbars\">
                                                                <div class=\"parent\">
                                                                    <div class=\"dropdown non-draggable group-line\" data-parent=\"0\">
                                                                        <button>
                                                                            <i class=\"fas fa-slash\"></i>
                                                                        </button>
                                                                    </div>
                                                                    {% set toolbars = app.sub.editor.buttons.getToolbarsWithOptions(false) %}
                                                                    {% for item in toolbars|keys %}
                                                                        {% for toolbar in toolbars[item] %}
                                                                            {% if toolbar.name is same as ('sizeselect') %}
                                                                            {% elseif toolbar.name is same as ('forecolor') %}
                                                                                <div data-id=\"{{ toolbar.id }}\" data-parent=\"{{ toolbar.button }}\" class=\"dropdown dd-with\">
                                                                                    <button type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                                        {{ toolbar.icon|raw }}
                                                                                    </button>
                                                                                </div>
                                                                            {% elseif toolbar.name is same as ('backcolor') %}
                                                                                <div data-id=\"{{ toolbar.id }}\" data-parent=\"{{ toolbar.button }}\" class=\"dropdown dd-with\">
                                                                                    <button type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                                        {{ toolbar.icon|raw }}
                                                                                    </button>
                                                                                </div>
                                                                            {% elseif toolbar.name is same as ('table') %}
                                                                                <div data-id=\"{{ toolbar.id }}\" data-parent=\"{{ toolbar.button }}\" class=\"dropdown dd-with\">
                                                                                    <button type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                                        {{ toolbar.icon|raw }}
                                                                                    </button>
                                                                                </div>
                                                                            {% elseif toolbar.name is same as ('formatselect') %}
                                                                                <div data-id=\"{{ toolbar.id }}\" data-parent=\"{{ toolbar.button }}\" class=\"dropdown dd\">
                                                                                    <button type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                                        <span>{{ app.sub.lang.string.editor.Paragraph }}</span>
                                                                                    </button>
                                                                                </div>
                                                                            {% elseif toolbar.name is same as ('fontselect') %}
                                                                                <div data-id=\"{{ toolbar.id }}\" data-parent=\"{{ toolbar.button }}\" class=\"dropdown dd\">
                                                                                    <button type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                                        <span>{{ app.sub.lang.string.editor['System Font'] }}</span>
                                                                                    </button>
                                                                                </div>
                                                                            {% elseif toolbar.name is same as ('fontsizeselect') %}
                                                                                <div data-id=\"{{ toolbar.id }}\" data-parent=\"{{ toolbar.button }}\" class=\"dropdown dd\">
                                                                                    <button type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                                        <span>12pt</span>
                                                                                    </button>
                                                                                </div>
                                                                            {% else %}
                                                                                <div class=\"dropdown\" data-id=\"{{ toolbar.id }}\" data-parent=\"{{ toolbar.button }}\">
                                                                                    <button type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ toolbar.icon|raw }}</button>
                                                                                </div>
                                                                            {% endif %}
                                                                            <div class=\"dropdown-menu dropdown-menu-right custom-menu custom-menu-lg shadow animate slideIn d-none\">
                                                                                <div class=\"progress d-none\">
                                                                                    <div class=\"indeterminate\"></div>
                                                                                </div>
                                                                                <div class=\"title\">
                                                                                    <div>
                                                                                        <span>{{ app.sub.lang.parse.Parse('admin.editor.toolbars.dropdown.title', toolbar.name|title) }}</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div>
                                                                                    <form method=\"post\">
                                                                                        <div id=\"toolbar-settings\" class=\"form pt-3 pb-2 px-2\">
                                                                                            <div class=\"h3 text-dark d-flex align-items-center justify-content-center mb-3\">
                                                                                                {{ toolbar.icon|raw }}
                                                                                            </div>
                                                                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                                                                <div class=\"col-lg-6 col-sm-12 pr-2\">
                                                                                                    <label class=\"col-form-label\" for=\"toolbar_toolbar_{{ toolbar.id }}\">{{
                                                                                                        app.sub.lang.string.admin.editor.toolbars.dropdown.form.toolbar.title }}</label>
                                                                                                    <div>
                                                                                                        <input name=\"options[toolbar]\" type=\"text\" class=\"form-control\"
                                                                                                            id=\"toolbar_toolbar_{{ toolbar.id }}\" value=\"{{ toolbar.name }}\"
                                                                                                            placeholder=\"{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.toolbar.placeholder }}\">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class=\"col-lg-6 col-sm-12\">
                                                                                                    <label class=\"col-form-label\" for=\"toolbar_alias_{{ toolbar.id }}\">{{
                                                                                                        app.sub.lang.string.admin.editor.toolbars.dropdown.form.alias.title }}</label>
                                                                                                    <div>
                                                                                                        <input name=\"options[alias]\" type=\"text\" class=\"form-control\" id=\"toolbar_alias_{{ toolbar.id }}\"
                                                                                                            value=\"{{ toolbar.alias }}\"
                                                                                                            placeholder=\"{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.alias.placeholder }}\">
                                                                                                        <small class=\"form-text text-muted\">{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.alias.help }}</small>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                                                                <div class=\"col-lg-6 col-sm-12 pr-2\">
                                                                                                    <label class=\"col-form-label\" for=\"toolbar_button_{{ toolbar.id }}\">{{
                                                                                                        app.sub.lang.string.admin.editor.toolbars.dropdown.form.button.title }}</label>
                                                                                                    <div>
                                                                                                        <input name=\"options[button]\" type=\"text\" class=\"form-control\" id=\"toolbar_button_{{ toolbar.id }}\"
                                                                                                            value=\"{{ toolbar.button }}\"
                                                                                                            placeholder=\"{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.button.placeholder }}\">
                                                                                                        <small class=\"form-text text-muted\">{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.button.help }}</small>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class=\"col-lg-6 col-sm-12\">
                                                                                                    <label class=\"col-form-label\" for=\"toolbar_order_by_{{ toolbar.id }}\">{{
                                                                                                        app.sub.lang.string.admin.editor.toolbars.dropdown.form.order_by.title }}</label>
                                                                                                    <div>
                                                                                                        <input name=\"options[order_by]\" type=\"number\" class=\"form-control\"
                                                                                                            id=\"toolbar_order_by_{{ toolbar.id }}\" value=\"{{ toolbar.order_by }}\" min=\"1\">
                                                                                                        <small class=\"form-text text-muted\">{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.order_by.help }}</small>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                                                                <div class=\"col-lg-12 col-sm-12 pr-2\">
                                                                                                    <label class=\"col-form-label\" for=\"toolbar_icon_{{ toolbar.id }}\">{{
                                                                                                        app.sub.lang.string.admin.editor.toolbars.dropdown.form.icon.title }}</label>
                                                                                                    <div>
                                                                                                        <input name=\"options[icon]\" type=\"text\" class=\"form-control\" id=\"toolbar_icon_{{ toolbar.id }}\"
                                                                                                            value=\"{{ toolbar.icon }}\"
                                                                                                            placeholder=\"{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.icon.placeholder }}\">
                                                                                                        <small class=\"form-text text-muted\">{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.icon.help|raw }}</small>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon plus\">{{
                                                                                                app.sub.lang.string.container.buttons.update }}</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        {% endfor %}
                                                                    {% endfor %}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <small>{{ app.sub.lang.string.admin.editor.buttons.head.tabs.toolbars.nonactive.help }}</small>
                                                    </div>
                                                    <div class=\"help pt-4\">
                                                        <div class=\"d-flex align-items-center mb-2\">
                                                            <i class=\"far fa-question-circle h4 mb-0\"></i>
                                                            <div class=\"ml-3\">{{ app.sub.lang.string.admin.editor.toolbars.help }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button data-ui=\"save-order\" type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon plus\">{{ app.sub.lang.string.container.buttons.save }}</button>
                                                </div>
                                            </div>
                                            <div class=\"tab-pane fade\" id=\"buttons\" role=\"tabpanel\" aria-labelledby=\"buttons-tab\">
                                                <div class=\"form-group row mx-auto\">
                                                    <label class=\"col-sm-4 col-form-label\">{{ app.sub.lang.string.admin.editor.buttons.head.tabs.buttons.title }}</label>
                                                    <div class=\"col-sm-8\">
                                                        <div class=\"fake-editor-container\">
                                                            <div id=\"js-AppAdmin_DraggableItems\" class=\"fake-editor buttons\">
                                                                <div class=\"parent\">
                                                                    <div class=\"dropdown non-draggable group-line\" data-parent=\"0\">
                                                                        <button>
                                                                            <i class=\"fas fa-slash\"></i>
                                                                        </button>
                                                                    </div>
                                                                    {% set toolbars = app.sub.editor.buttons.getButtonList(false) %}
                                                                    {% for item in toolbars|keys %}
                                                                        {% for toolbar in toolbars[item] %}
                                                                            <div class=\"dropdown\" data-id=\"{{ toolbar.id }}\" data-parent=\"{{ toolbar.button }}\">
                                                                                <a class=\"text-dark\" href=\"{{ app.phrase.buildLink('adminEditor', {}) }}?buttonId={{ toolbar.button_id }}&defaultNav=editor_buttons\">{{ toolbar.icon|raw }}</a>
                                                                            </div>
                                                                        {% endfor %}
                                                                    {% endfor %}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
{% endblock %}", "@ComponentBundle_Admin/Editor/editor_buttons.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Mention\\Templates\\Admin\\Editor\\editor_buttons.tpl");
    }
}
