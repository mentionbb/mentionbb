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

/* @ComponentBundle_Admin/Addons/app.tpl */
class __TwigTemplate_b6e51590bf4e758b42ee09edf893ac2dd76f485d8eeba5088e4844fef9ee85b6 extends Template
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
        $this->parent = $this->loadTemplate("@ComponentBundle_Admin/container.tpl", "@ComponentBundle_Admin/Addons/app.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "@ComponentBundle/admin/addons/app";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 5), "lang", [], "any", false, false, false, 5), "string", [], "any", false, false, false, 5), "admin", [], "any", false, false, false, 5), "addons", [], "any", false, false, false, 5), "app", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 5), "site_title", [], "any", false, false, false, 5), "html", null, true);
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $context["originalContent"] = twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "originalContent", [], "any", false, false, false, 8);
        // line 9
        echo "\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 13), "buildLink", [0 => "indexAction", 1 => []], "method", false, false, false, 13), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 13), "site_title", [], "any", false, false, false, 13), "html", null, true);
        echo "</a></div>
\t\t\t\t\t<div><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 14), "buildLink", [0 => "adminIndex", 1 => []], "method", false, false, false, 14), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 14), "lang", [], "any", false, false, false, 14), "string", [], "any", false, false, false, 14), "admin", [], "any", false, false, false, 14), "container", [], "any", false, false, false, 14), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "</a></div>
\t\t\t\t\t<div><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 15), "buildLink", [0 => "adminAddons", 1 => []], "method", false, false, false, 15), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 15), "lang", [], "any", false, false, false, 15), "string", [], "any", false, false, false, 15), "admin", [], "any", false, false, false, 15), "addons", [], "any", false, false, false, 15), "list", [], "any", false, false, false, 15), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "</a></div>
                    <div>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 16), "lang", [], "any", false, false, false, 16), "string", [], "any", false, false, false, 16), "admin", [], "any", false, false, false, 16), "addons", [], "any", false, false, false, 16), "app", [], "any", false, false, false, 16), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t";
        // line 21
        $this->loadTemplate("usermenu_member.tpl", "@ComponentBundle_Admin/Addons/app.tpl", 21)->display($context);
        // line 22
        echo "\t\t</div>
\t</div>
\t
\t<aside class=\"col-sm-12\">
\t\t<div class=\"app-box shadow rounded\" data-tab=\"addons\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center\">
                    <div>
                        <h5 class=\"mb-0\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 33), "lang", [], "any", false, false, false, 33), "string", [], "any", false, false, false, 33), "admin", [], "any", false, false, false, 33), "addons", [], "any", false, false, false, 33), "app", [], "any", false, false, false, 33), "title", [], "any", false, false, false, 33), "html", null, true);
        echo "</h5>
                        <small class=\"text-muted\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 34), "lang", [], "any", false, false, false, 34), "string", [], "any", false, false, false, 34), "admin", [], "any", false, false, false, 34), "addons", [], "any", false, false, false, 34), "app", [], "any", false, false, false, 34), "desc", [], "any", false, false, false, 34), "html", null, true);
        echo "</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 37), "buildLink", [0 => "adminAddons", 1 => []], "method", false, false, false, 37), "html", null, true);
        echo "\" class=\"btn btn-app-discussion icon back\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 37), "lang", [], "any", false, false, false, 37), "string", [], "any", false, false, false, 37), "container", [], "any", false, false, false, 37), "buttons", [], "any", false, false, false, 37), "back", [], "any", false, false, false, 37), "html", null, true);
        echo "</a>
                    </div>
                </div>  
                <div class=\"d-flex flex-column align-items-center justify-content-center mt-3\">
                    <div class=\"service-list-area w-100\">
                        <form id=\"admin_addons_app\" method=\"post\">
                            <div id=\"servicesAccordion\">
                                <div class=\"app-addon app-service bg-white shadow-sm position-relative mb-3 rounded\" data-app=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "name", [], "any", false, false, false, 44), "html", null, true);
        echo "\">
                                    <div class=\"app-post\">
                                        <div class=\"post-layout d-flex align-items-center border-top-0 px-2 p-1 collapse\">
                                            <div class=\"post-icon\">
                                                <i class=\"fas fa-puzzle-piece\"></i>
                                            </div>
                                            <div class=\"head-title d-flex flex-column ml-lg-0 ml-2 mr-auto\">
                                                <span class=\"font-weight-bold\">";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "name", [], "any", false, false, false, 51), "html", null, true);
        echo "</span>
                                            </div>
                                            ";
        // line 53
        if (($context["originalContent"] ?? null)) {
            // line 54
            echo "                                                <div class=\"mr-2 mr-lg-5 pr-lg-5\">
                                                    <a href=\"#\" class=\"text-dark h5\" data-ui=\"app-show-originalContent\" title=\"";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 55), "lang", [], "any", false, false, false, 55), "string", [], "any", false, false, false, 55), "admin", [], "any", false, false, false, 55), "addons", [], "any", false, false, false, 55), "app", [], "any", false, false, false, 55), "buttons", [], "any", false, false, false, 55), "show_original_content", [], "any", false, false, false, 55), "html", null, true);
            echo "\">
                                                        <i class=\"far fa-eye\"></i>
                                                    </a>
                                                    <a href=\"#\" class=\"text-dark h5 d-none\" data-ui=\"app-show-content\" title=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 58), "lang", [], "any", false, false, false, 58), "string", [], "any", false, false, false, 58), "admin", [], "any", false, false, false, 58), "addons", [], "any", false, false, false, 58), "app", [], "any", false, false, false, 58), "buttons", [], "any", false, false, false, 58), "show_editor", [], "any", false, false, false, 58), "html", null, true);
            echo "\">
                                                        <i class=\"far fa-eye-slash\"></i>
                                                    </a>
                                                </div>
                                            ";
        }
        // line 63
        echo "                                        </div>
                                    </div>
                                    <div class=\"scrollable\">
                                        <div class=\"content d-none\">";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "content", [], "any", false, false, false, 66), "html", null, true);
        echo "</div>
                                        ";
        // line 67
        if (($context["originalContent"] ?? null)) {
            // line 68
            echo "                                            <div class=\"originalContent d-none\">";
            echo twig_escape_filter($this->env, ($context["originalContent"] ?? null), "html", null, true);
            echo "</div>
                                            <div id=\"originalContent-editor\"></div>
                                        ";
        }
        // line 71
        echo "                                        <div id=\"editor\"></div>
                                    </div>
                                </div>   
                            </div>
                            <div class=\"w-100 d-inline-block\">
\t\t\t\t\t\t\t\t<div class=\"sticky-button is-sticky shadow\">
\t\t\t\t\t\t\t\t\t<div class=\"progress d-none\">
\t\t\t\t                        <div class=\"indeterminate\"></div>
\t\t\t                        </div>
                                    <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon send\">";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 80), "lang", [], "any", false, false, false, 80), "string", [], "any", false, false, false, 80), "container", [], "any", false, false, false, 80), "buttons", [], "any", false, false, false, 80), "update", [], "any", false, false, false, 80), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <div class=\"modal custom-modal animate slideIn\" id=\"php-parser-exception\" tabindex=\"-1\"
        role=\"dialog\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content shadow-lg rounded\">
                <div class=\"modal-header justify-content-lg-center d-flex\">
                    <span class=\"font-weight-bold h5 mb-0 ml-lg-auto mr-lg-auto\">";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 95
($context["app"] ?? null), "sub", [], "any", false, false, false, 95), "lang", [], "any", false, false, false, 95), "string", [], "any", false, false, false, 95), "admin", [], "any", false, false, false, 95), "addons", [], "any", false, false, false, 95), "app", [], "any", false, false, false, 95), "error", [], "any", false, false, false, 95), "title", [], "any", false, false, false, 95), "html", null, true);
        echo "</span>
                    <span class=\"close d-lg-none ml-auto\" data-dismiss=\"modal\"
                        aria-label=\"";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 97), "lang", [], "any", false, false, false, 97), "string", [], "any", false, false, false, 97), "container", [], "any", false, false, false, 97), "buttons", [], "any", false, false, false, 97), "close", [], "any", false, false, false, 97), "html", null, true);
        echo "\"></span>
                </div>
                <div class=\"modal-body\">
                    <div class=\"big-icon error text-center mb-3\"></div>
                    <p class=\"font-weight-normal text-center\">";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 101), "lang", [], "any", false, false, false, 101), "string", [], "any", false, false, false, 101), "admin", [], "any", false, false, false, 101), "addons", [], "any", false, false, false, 101), "app", [], "any", false, false, false, 101), "error", [], "any", false, false, false, 101), "text", [], "any", false, false, false, 101), "html", null, true);
        echo "</p>
                    <div class=\"text-center\">
                        <code class=\"error\"></code>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@ComponentBundle_Admin/Addons/app.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 101,  226 => 97,  221 => 95,  220 => 94,  203 => 80,  192 => 71,  185 => 68,  183 => 67,  179 => 66,  174 => 63,  166 => 58,  160 => 55,  157 => 54,  155 => 53,  150 => 51,  140 => 44,  128 => 37,  122 => 34,  118 => 33,  105 => 22,  103 => 21,  95 => 16,  89 => 15,  83 => 14,  77 => 13,  71 => 9,  68 => 8,  64 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/addons/app' %}

{% block title %}{{ app.sub.lang.string.admin.addons.app.title }}{{ \" - \" }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
    {% set originalContent = string.originalContent %}
\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminIndex', {}) }}\">{{ app.sub.lang.string.admin.container.title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminAddons', {}) }}\">{{ app.sub.lang.string.admin.addons.list.title }}</a></div>
                    <div>{{ app.sub.lang.string.admin.addons.app.title }}</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t{% include 'usermenu_member.tpl' %}
\t\t</div>
\t</div>
\t
\t<aside class=\"col-sm-12\">
\t\t<div class=\"app-box shadow rounded\" data-tab=\"addons\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center\">
                    <div>
                        <h5 class=\"mb-0\">{{ app.sub.lang.string.admin.addons.app.title }}</h5>
                        <small class=\"text-muted\">{{ app.sub.lang.string.admin.addons.app.desc }}</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"{{ app.phrase.buildLink('adminAddons', {}) }}\" class=\"btn btn-app-discussion icon back\">{{ app.sub.lang.string.container.buttons.back }}</a>
                    </div>
                </div>  
                <div class=\"d-flex flex-column align-items-center justify-content-center mt-3\">
                    <div class=\"service-list-area w-100\">
                        <form id=\"admin_addons_app\" method=\"post\">
                            <div id=\"servicesAccordion\">
                                <div class=\"app-addon app-service bg-white shadow-sm position-relative mb-3 rounded\" data-app=\"{{ string.name }}\">
                                    <div class=\"app-post\">
                                        <div class=\"post-layout d-flex align-items-center border-top-0 px-2 p-1 collapse\">
                                            <div class=\"post-icon\">
                                                <i class=\"fas fa-puzzle-piece\"></i>
                                            </div>
                                            <div class=\"head-title d-flex flex-column ml-lg-0 ml-2 mr-auto\">
                                                <span class=\"font-weight-bold\">{{ string.name }}</span>
                                            </div>
                                            {% if originalContent %}
                                                <div class=\"mr-2 mr-lg-5 pr-lg-5\">
                                                    <a href=\"#\" class=\"text-dark h5\" data-ui=\"app-show-originalContent\" title=\"{{ app.sub.lang.string.admin.addons.app.buttons.show_original_content }}\">
                                                        <i class=\"far fa-eye\"></i>
                                                    </a>
                                                    <a href=\"#\" class=\"text-dark h5 d-none\" data-ui=\"app-show-content\" title=\"{{ app.sub.lang.string.admin.addons.app.buttons.show_editor }}\">
                                                        <i class=\"far fa-eye-slash\"></i>
                                                    </a>
                                                </div>
                                            {% endif %}
                                        </div>
                                    </div>
                                    <div class=\"scrollable\">
                                        <div class=\"content d-none\">{{ string.content }}</div>
                                        {% if originalContent %}
                                            <div class=\"originalContent d-none\">{{ originalContent }}</div>
                                            <div id=\"originalContent-editor\"></div>
                                        {% endif %}
                                        <div id=\"editor\"></div>
                                    </div>
                                </div>   
                            </div>
                            <div class=\"w-100 d-inline-block\">
\t\t\t\t\t\t\t\t<div class=\"sticky-button is-sticky shadow\">
\t\t\t\t\t\t\t\t\t<div class=\"progress d-none\">
\t\t\t\t                        <div class=\"indeterminate\"></div>
\t\t\t                        </div>
                                    <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon send\">{{ app.sub.lang.string.container.buttons.update }}</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <div class=\"modal custom-modal animate slideIn\" id=\"php-parser-exception\" tabindex=\"-1\"
        role=\"dialog\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content shadow-lg rounded\">
                <div class=\"modal-header justify-content-lg-center d-flex\">
                    <span class=\"font-weight-bold h5 mb-0 ml-lg-auto mr-lg-auto\">{{
                        app.sub.lang.string.admin.addons.app.error.title }}</span>
                    <span class=\"close d-lg-none ml-auto\" data-dismiss=\"modal\"
                        aria-label=\"{{ app.sub.lang.string.container.buttons.close }}\"></span>
                </div>
                <div class=\"modal-body\">
                    <div class=\"big-icon error text-center mb-3\"></div>
                    <p class=\"font-weight-normal text-center\">{{ app.sub.lang.string.admin.addons.app.error.text }}</p>
                    <div class=\"text-center\">
                        <code class=\"error\"></code>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "@ComponentBundle_Admin/Addons/app.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Mention\\Templates\\Admin\\Addons\\app.tpl");
    }
}
