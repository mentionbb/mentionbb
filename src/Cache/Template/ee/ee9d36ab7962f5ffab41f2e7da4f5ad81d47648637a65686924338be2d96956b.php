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

/* @ComponentBundle_Admin/Settings/setting.tpl */
class __TwigTemplate_56af2d93a5bb8c31979c1bae9cd6341cb0ce270597e522b97fe980341035cf5d extends Template
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
        $this->parent = $this->loadTemplate("@ComponentBundle_Admin/container.tpl", "@ComponentBundle_Admin/Settings/setting.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "@ComponentBundle/admin/settings";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 5), "lang", [], "any", false, false, false, 5), "string", [], "any", false, false, false, 5), "admin", [], "any", false, false, false, 5), "settings", [], "any", false, false, false, 5), "groups", [], "any", false, false, false, 5)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "group", [], "any", false, false, false, 5)] ?? null) : null), "title", [], "any", false, false, false, 5), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 14), "buildLink", [0 => "adminSiteSettings", 1 => []], "method", false, false, false, 14), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 14), "lang", [], "any", false, false, false, 14), "string", [], "any", false, false, false, 14), "admin", [], "any", false, false, false, 14), "settings", [], "any", false, false, false, 14), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "</a></div>
                    <div><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 15), "buildLink", [0 => "adminSiteSettings", 1 => []], "method", false, false, false, 15), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "group", [], "any", false, false, false, 15), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 15), "lang", [], "any", false, false, false, 15), "string", [], "any", false, false, false, 15), "admin", [], "any", false, false, false, 15), "settings", [], "any", false, false, false, 15), "groups", [], "any", false, false, false, 15)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "group", [], "any", false, false, false, 15)] ?? null) : null), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t";
        // line 20
        $this->loadTemplate("usermenu_member.tpl", "@ComponentBundle_Admin/Settings/setting.tpl", 20)->display($context);
        // line 21
        echo "\t\t</div>
\t</div>
\t";
        // line 23
        $this->loadTemplate("@ComponentBundle_Admin/Layout/sidebar.tpl", "@ComponentBundle_Admin/Settings/setting.tpl", 23)->display($context);
        // line 24
        echo "\t
\t<aside class=\"col-sm-9\">
\t\t<div class=\"app-box shadow rounded\" data-tab=\"settings\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3\">
                <div class=\"d-lg-flex align-items-lg-center\">
                    <div>
                        <h5 class=\"mb-0\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 33), "lang", [], "any", false, false, false, 33), "string", [], "any", false, false, false, 33), "admin", [], "any", false, false, false, 33), "settings", [], "any", false, false, false, 33), "groups", [], "any", false, false, false, 33)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "group", [], "any", false, false, false, 33)] ?? null) : null), "title", [], "any", false, false, false, 33), "html", null, true);
        echo "</h5>
                        <small class=\"text-muted\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 34), "lang", [], "any", false, false, false, 34), "string", [], "any", false, false, false, 34), "admin", [], "any", false, false, false, 34), "settings", [], "any", false, false, false, 34), "groups", [], "any", false, false, false, 34)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "group", [], "any", false, false, false, 34)] ?? null) : null), "desc", [], "any", false, false, false, 34), "html", null, true);
        echo "</small>
                    </div>
                    <div class=\"app-select-setting dropdown ml-auto mt-lg-0 mt-3\">
                        <button class=\"btn btn-app-dd no-anim-ui icon ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "group", [], "any", false, false, false, 37), "html", null, true);
        echo " dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 37), "lang", [], "any", false, false, false, 37), "string", [], "any", false, false, false, 37), "admin", [], "any", false, false, false, 37), "settings", [], "any", false, false, false, 37), "groups", [], "any", false, false, false, 37)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "group", [], "any", false, false, false, 37)] ?? null) : null), "title", [], "any", false, false, false, 37), "html", null, true);
        echo "</button>
                        <div class=\"dropdown-menu dropdown-menu-left custom-menu custom-menu-md custom-menu-auto shadow animate slideIn\" aria-labelledby=\"dropdownMenuButton\">
                            <div class=\"title\">
                                <div>
                                    <span>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 41), "lang", [], "any", false, false, false, 41), "string", [], "any", false, false, false, 41), "container", [], "any", false, false, false, 41), "buttons", [], "any", false, false, false, 41), "select", [], "any", false, false, false, 41), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "settings", [], "any", false, false, false, 44), "getSettingGroups", [], "method", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 45
            echo "                                <div>
                                    <a class=\"notification quick-menu d-flex ";
            // line 46
            if ((twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "group", [], "any", false, false, false, 46) === twig_get_attribute($this->env, $this->source, $context["item"], "group_name", [], "any", false, false, false, 46))) {
                echo "active ";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 46), "buildLink", [0 => "adminSiteSettings", 1 => []], "method", false, false, false, 46), "html", null, true);
            echo "?";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "group_name", [], "any", false, false, false, 46), "html", null, true);
            echo "\">
                                        <div class=\"text ml-1\">
                                            <span class=\"icon ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "group_name", [], "any", false, false, false, 48), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 48), "lang", [], "any", false, false, false, 48), "string", [], "any", false, false, false, 48), "admin", [], "any", false, false, false, 48), "settings", [], "any", false, false, false, 48), "groups", [], "any", false, false, false, 48)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["item"], "group_name", [], "any", false, false, false, 48)] ?? null) : null), "title", [], "any", false, false, false, 48), "html", null, true);
            echo "</span>
                                        </div>
                                    </a>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                        </div>
                    </div>
                </div>
                <form id=\"admin_settings\" method=\"post\" enctype=\"multipart/form-data\">
                    <div class=\"d-flex flex-column align-items-start justify-content-center mt-3\">
                        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "settings", [], "any", false, false, false, 58), "getSettingsFromGroupName", [0 => twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "group", [], "any", false, false, false, 58)], "method", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 59
            echo "                            <div class=\"setting-item w-100\">
                                ";
            // line 60
            if (((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 60) === "text") || (twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 60) === "email"))) {
                // line 61
                echo "                                    <div class=\"form-group row mx-auto\" data-option=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 61), "html", null, true);
                echo "\">
                                        <label for=\"static_";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 62), "html", null, true);
                echo "\" class=\"col-sm-4 col-form-label\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 62), "lang", [], "any", false, false, false, 62), "string", [], "any", false, false, false, 62), "admin", [], "any", false, false, false, 62), "settings", [], "any", false, false, false, 62), "forms", [], "any", false, false, false, 62)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["item"], "group_name", [], "any", false, false, false, 62)] ?? null) : null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 62)] ?? null) : null), "name", [], "any", false, false, false, 62), "html", null, true);
                echo "</label>
                                        <div class=\"col-sm-8\">
                                            <input class=\"form-control\" name=\"options[";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 64), "html", null, true);
                echo "]\" id=\"static_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 64), "html", null, true);
                echo "\" type=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 64), "html", null, true);
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 64), "lang", [], "any", false, false, false, 64), "string", [], "any", false, false, false, 64), "admin", [], "any", false, false, false, 64), "settings", [], "any", false, false, false, 64), "forms", [], "any", false, false, false, 64)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["item"], "group_name", [], "any", false, false, false, 64)] ?? null) : null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 64)] ?? null) : null), "name", [], "any", false, false, false, 64), "html", null, true);
                echo "\" aria-label=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 64), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, false, 64), "html", null, true);
                echo "\" aria-describedby=\"help_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 64), "html", null, true);
                echo "\" spellcheck=\"false\" required=\"required\">
                                            <small id=\"help_";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 65), "html", null, true);
                echo "\" class=\"form-text text-muted\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 65), "lang", [], "any", false, false, false, 65), "string", [], "any", false, false, false, 65), "admin", [], "any", false, false, false, 65), "settings", [], "any", false, false, false, 65), "forms", [], "any", false, false, false, 65)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["item"], "group_name", [], "any", false, false, false, 65)] ?? null) : null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 65)] ?? null) : null), "desc", [], "any", false, false, false, 65);
                echo "</small>
                                        </div>
                                    </div>
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 68
$context["item"], "type", [], "any", false, false, false, 68) === "selectbox")) {
                // line 69
                echo "                                    <div class=\"form-group row mx-auto\" data-option=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 69), "html", null, true);
                echo "\">
                                        <label for=\"static_";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 70), "html", null, true);
                echo "\" class=\"col-sm-4 col-form-label\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 70), "lang", [], "any", false, false, false, 70), "string", [], "any", false, false, false, 70), "admin", [], "any", false, false, false, 70), "settings", [], "any", false, false, false, 70), "forms", [], "any", false, false, false, 70)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["item"], "group_name", [], "any", false, false, false, 70)] ?? null) : null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 70)] ?? null) : null), "name", [], "any", false, false, false, 70), "html", null, true);
                echo "</label>
                                        <div class=\"col-sm-8\">
                                            <select name=\"options[";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 72), "html", null, true);
                echo "]\" class=\"custom-select custom-select-sm mb-3\">
                                                <option selected disabled>";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 73), "lang", [], "any", false, false, false, 73), "string", [], "any", false, false, false, 73), "container", [], "any", false, false, false, 73), "buttons", [], "any", false, false, false, 73), "select", [], "any", false, false, false, 73), "html", null, true);
                echo "</option>
                                                ";
                // line 74
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 74) === "default_language")) {
                    // line 75
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 75), "lang", [], "any", false, false, false, 75), "parse", [], "any", false, false, false, 75), "getLanguages", [], "method", false, false, false, 75));
                    foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                        // line 76
                        echo "                                                        <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 76), "html", null, true);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 76), "default_language", [], "any", false, false, false, 76) === twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 76))) {
                            echo "selected ";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "title", [], "any", false, false, false, 76), "html", null, true);
                        echo "</option>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 78
                    echo "                                                ";
                }
                // line 79
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 79) === "default_theme")) {
                    // line 80
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 80), "theme", [], "any", false, false, false, 80), "loader", [], "any", false, false, false, 80), "getThemes", [], "method", false, false, false, 80));
                    foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                        // line 81
                        echo "                                                        <option value=\"";
                        echo twig_escape_filter($this->env, $context["theme"], "html", null, true);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 81), "default_theme", [], "any", false, false, false, 81) === $context["theme"])) {
                            echo "selected ";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, $context["theme"], "html", null, true);
                        echo "</option>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 83
                    echo "                                                ";
                }
                // line 84
                echo "                                            </select>
                                            <small id=\"help_";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 85), "html", null, true);
                echo "\" class=\"form-text text-muted\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 85), "lang", [], "any", false, false, false, 85), "string", [], "any", false, false, false, 85), "admin", [], "any", false, false, false, 85), "settings", [], "any", false, false, false, 85), "forms", [], "any", false, false, false, 85)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["item"], "group_name", [], "any", false, false, false, 85)] ?? null) : null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 85)] ?? null) : null), "desc", [], "any", false, false, false, 85);
                echo "</small>
                                        </div>
                                    </div>
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 88
$context["item"], "type", [], "any", false, false, false, 88) === "file")) {
                // line 89
                echo "                                    <div class=\"form-group row mx-auto\" data-option=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 89), "html", null, true);
                echo "\">
                                        <label for=\"static_";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 90), "html", null, true);
                echo "\" class=\"col-sm-4 col-form-label\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 90), "lang", [], "any", false, false, false, 90), "string", [], "any", false, false, false, 90), "admin", [], "any", false, false, false, 90), "settings", [], "any", false, false, false, 90), "forms", [], "any", false, false, false, 90)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["item"], "group_name", [], "any", false, false, false, 90)] ?? null) : null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 90)] ?? null) : null), "name", [], "any", false, false, false, 90), "html", null, true);
                echo "</label>
                                        <div class=\"col-sm-8\">
                                            <input type=\"file\" class=\"custom-file-input\" id=\"file_";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 92), "html", null, true);
                echo "\" name=\"file_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 92), "html", null, true);
                echo "\" accept=\"image/x-png,image/svg+xml,image/jpeg\">
                                            <label class=\"custom-file-label shadow-sm\" for=\"file_";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 93), "html", null, true);
                echo "\" data-text=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 93), "lang", [], "any", false, false, false, 93), "string", [], "any", false, false, false, 93), "container", [], "any", false, false, false, 93), "buttons", [], "any", false, false, false, 93), "browse", [], "any", false, false, false, 93), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, false, 93), "html", null, true);
                echo "</label>
                                            <small id=\"help_";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 94), "html", null, true);
                echo "\" class=\"form-text text-muted\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 94), "lang", [], "any", false, false, false, 94), "string", [], "any", false, false, false, 94), "admin", [], "any", false, false, false, 94), "settings", [], "any", false, false, false, 94), "forms", [], "any", false, false, false, 94)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["item"], "group_name", [], "any", false, false, false, 94)] ?? null) : null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 94)] ?? null) : null), "desc", [], "any", false, false, false, 94);
                echo "</small>
                                        </div>
                                    </div>
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 97
$context["item"], "type", [], "any", false, false, false, 97) === "filetext")) {
                // line 98
                echo "                                    <div class=\"app-admin-file-text form-group row position-relative mx-auto\" data-option=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 98), "html", null, true);
                echo "\"> 
                                        <label for=\"static_";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 99), "html", null, true);
                echo "\" class=\"col-sm-4 col-form-label\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 99), "lang", [], "any", false, false, false, 99), "string", [], "any", false, false, false, 99), "admin", [], "any", false, false, false, 99), "settings", [], "any", false, false, false, 99), "forms", [], "any", false, false, false, 99)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["item"], "group_name", [], "any", false, false, false, 99)] ?? null) : null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 99)] ?? null) : null), "name", [], "any", false, false, false, 99), "html", null, true);
                echo "</label>
                                        <div class=\"col-sm-8\">
                                            <div class=\"input-group\">
                                                <input class=\"form-control\" name=\"options[";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 102), "html", null, true);
                echo "]\" id=\"static_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 102), "html", null, true);
                echo "\" type=\"text\" placeholder=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 102), "lang", [], "any", false, false, false, 102), "string", [], "any", false, false, false, 102), "admin", [], "any", false, false, false, 102), "settings", [], "any", false, false, false, 102), "forms", [], "any", false, false, false, 102)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["item"], "group_name", [], "any", false, false, false, 102)] ?? null) : null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 102)] ?? null) : null), "name", [], "any", false, false, false, 102), "html", null, true);
                echo "\" aria-label=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 102), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, false, 102), "html", null, true);
                echo "\" aria-describedby=\"help_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 102), "html", null, true);
                echo "\" spellcheck=\"false\">
                                                <input type=\"file\" class=\"custom-file-input d-none\" id=\"fileSetting[";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 103), "html", null, true);
                echo "]\" name=\"fileSetting[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 103), "html", null, true);
                echo "]\" accept=\"image/x-png,image/svg+xml,image/jpeg\">
                                                <label class=\"toggle-tooltip\" for=\"fileSetting[";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 104), "html", null, true);
                echo "]\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 104), "lang", [], "any", false, false, false, 104), "string", [], "any", false, false, false, 104), "container", [], "any", false, false, false, 104), "buttons", [], "any", false, false, false, 104), "select_file", [], "any", false, false, false, 104), "html", null, true);
                echo "\"></label>
                                            </div>
                                            <small id=\"help_";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 106), "html", null, true);
                echo "\" class=\"form-text text-muted\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 106), "renderPhrase", [0 => twig_get_attribute($this->env, $this->source, (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 106), "lang", [], "any", false, false, false, 106), "string", [], "any", false, false, false, 106), "admin", [], "any", false, false, false, 106), "settings", [], "any", false, false, false, 106), "forms", [], "any", false, false, false, 106)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["item"], "group_name", [], "any", false, false, false, 106)] ?? null) : null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 106)] ?? null) : null), "desc", [], "any", false, false, false, 106)], "method", false, false, false, 106);
                echo "</small>
                                        </div>
                                    </div>
                                ";
            }
            // line 110
            echo "                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                        <div class=\"w-100 d-inline-block\">
                            <div class=\"sticky-button shadow\">
                                <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon send\">";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 114), "lang", [], "any", false, false, false, 114), "string", [], "any", false, false, false, 114), "container", [], "any", false, false, false, 114), "buttons", [], "any", false, false, false, 114), "update", [], "any", false, false, false, 114), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </aside>
";
    }

    public function getTemplateName()
    {
        return "@ComponentBundle_Admin/Settings/setting.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 114,  409 => 112,  402 => 110,  393 => 106,  386 => 104,  380 => 103,  366 => 102,  358 => 99,  353 => 98,  351 => 97,  343 => 94,  335 => 93,  329 => 92,  322 => 90,  317 => 89,  315 => 88,  307 => 85,  304 => 84,  301 => 83,  286 => 81,  281 => 80,  278 => 79,  275 => 78,  260 => 76,  255 => 75,  253 => 74,  249 => 73,  245 => 72,  238 => 70,  233 => 69,  231 => 68,  223 => 65,  207 => 64,  200 => 62,  195 => 61,  193 => 60,  190 => 59,  186 => 58,  179 => 53,  166 => 48,  155 => 46,  152 => 45,  148 => 44,  142 => 41,  133 => 37,  127 => 34,  123 => 33,  112 => 24,  110 => 23,  106 => 21,  104 => 20,  92 => 15,  86 => 14,  80 => 13,  74 => 12,  68 => 8,  64 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/settings' %}

{% block title %}{{ app.sub.lang.string.admin.settings.groups[string.group].title }}{{ \" - \" }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminIndex', {}) }}\">{{ app.sub.lang.string.admin.container.title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminSiteSettings', {}) }}\">{{ app.sub.lang.string.admin.settings.title }}</a></div>
                    <div><a href=\"{{ app.phrase.buildLink('adminSiteSettings', {}) }}?{{ string.group }}\">{{ app.sub.lang.string.admin.settings.groups[string.group].title }}</a></div>
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
\t\t<div class=\"app-box shadow rounded\" data-tab=\"settings\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3\">
                <div class=\"d-lg-flex align-items-lg-center\">
                    <div>
                        <h5 class=\"mb-0\">{{ app.sub.lang.string.admin.settings.groups[string.group].title }}</h5>
                        <small class=\"text-muted\">{{ app.sub.lang.string.admin.settings.groups[string.group].desc }}</small>
                    </div>
                    <div class=\"app-select-setting dropdown ml-auto mt-lg-0 mt-3\">
                        <button class=\"btn btn-app-dd no-anim-ui icon {{ string.group }} dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ app.sub.lang.string.admin.settings.groups[string.group].title }}</button>
                        <div class=\"dropdown-menu dropdown-menu-left custom-menu custom-menu-md custom-menu-auto shadow animate slideIn\" aria-labelledby=\"dropdownMenuButton\">
                            <div class=\"title\">
                                <div>
                                    <span>{{ app.sub.lang.string.container.buttons.select }}</span>
                                </div>
                            </div>
                            {% for item in string.settings.getSettingGroups() %}
                                <div>
                                    <a class=\"notification quick-menu d-flex {% if string.group is same as(item.group_name) %}active {% endif %}\" href=\"{{ app.phrase.buildLink('adminSiteSettings', {}) }}?{{ item.group_name }}\">
                                        <div class=\"text ml-1\">
                                            <span class=\"icon {{ item.group_name }}\">{{ app.sub.lang.string.admin.settings.groups[item.group_name].title }}</span>
                                        </div>
                                    </a>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
                <form id=\"admin_settings\" method=\"post\" enctype=\"multipart/form-data\">
                    <div class=\"d-flex flex-column align-items-start justify-content-center mt-3\">
                        {% for item in string.settings.getSettingsFromGroupName(string.group) %}
                            <div class=\"setting-item w-100\">
                                {% if item.type is same as('text') or item.type is same as('email') %}
                                    <div class=\"form-group row mx-auto\" data-option=\"{{ item.name }}\">
                                        <label for=\"static_{{ item.name }}\" class=\"col-sm-4 col-form-label\">{{ app.sub.lang.string.admin.settings.forms[item.group_name][item.name].name }}</label>
                                        <div class=\"col-sm-8\">
                                            <input class=\"form-control\" name=\"options[{{ item.name }}]\" id=\"static_{{ item.name }}\" type=\"{{ item.type }}\" placeholder=\"{{ app.sub.lang.string.admin.settings.forms[item.group_name][item.name].name }}\" aria-label=\"{{ item.name }}\" value=\"{{ item.value }}\" aria-describedby=\"help_{{ item.name }}\" spellcheck=\"false\" required=\"required\">
                                            <small id=\"help_{{ item.name }}\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.settings.forms[item.group_name][item.name].desc|raw }}</small>
                                        </div>
                                    </div>
                                {% elseif item.type is same as('selectbox') %}
                                    <div class=\"form-group row mx-auto\" data-option=\"{{ item.name }}\">
                                        <label for=\"static_{{ item.name }}\" class=\"col-sm-4 col-form-label\">{{ app.sub.lang.string.admin.settings.forms[item.group_name][item.name].name }}</label>
                                        <div class=\"col-sm-8\">
                                            <select name=\"options[{{ item.name }}]\" class=\"custom-select custom-select-sm mb-3\">
                                                <option selected disabled>{{ app.sub.lang.string.container.buttons.select }}</option>
                                                {% if item.name is same as('default_language') %}
                                                    {% for language in app.sub.lang.parse.getLanguages() %}
                                                        <option value=\"{{ language.name }}\" {% if app.settings.default_language is same as(language.name) %}selected {% endif %}>{{ language.title }}</option>
                                                    {% endfor %}
                                                {% endif %}
                                                {% if item.name is same as('default_theme') %}
                                                    {% for theme in app.sub.theme.loader.getThemes() %}
                                                        <option value=\"{{ theme }}\" {% if app.settings.default_theme is same as(theme) %}selected {% endif %}>{{ theme }}</option>
                                                    {% endfor %}
                                                {% endif %}
                                            </select>
                                            <small id=\"help_{{ item.name }}\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.settings.forms[item.group_name][item.name].desc|raw }}</small>
                                        </div>
                                    </div>
                                {% elseif item.type is same as('file') %}
                                    <div class=\"form-group row mx-auto\" data-option=\"{{ item.name }}\">
                                        <label for=\"static_{{ item.name }}\" class=\"col-sm-4 col-form-label\">{{ app.sub.lang.string.admin.settings.forms[item.group_name][item.name].name }}</label>
                                        <div class=\"col-sm-8\">
                                            <input type=\"file\" class=\"custom-file-input\" id=\"file_{{ item.name }}\" name=\"file_{{ item.name }}\" accept=\"image/x-png,image/svg+xml,image/jpeg\">
                                            <label class=\"custom-file-label shadow-sm\" for=\"file_{{ item.name }}\" data-text=\"{{ app.sub.lang.string.container.buttons.browse }}\">{{ item.value }}</label>
                                            <small id=\"help_{{ item.name }}\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.settings.forms[item.group_name][item.name].desc|raw }}</small>
                                        </div>
                                    </div>
                                {% elseif item.type is same as('filetext') %}
                                    <div class=\"app-admin-file-text form-group row position-relative mx-auto\" data-option=\"{{ item.name }}\"> 
                                        <label for=\"static_{{ item.name }}\" class=\"col-sm-4 col-form-label\">{{ app.sub.lang.string.admin.settings.forms[item.group_name][item.name].name }}</label>
                                        <div class=\"col-sm-8\">
                                            <div class=\"input-group\">
                                                <input class=\"form-control\" name=\"options[{{ item.name }}]\" id=\"static_{{ item.name }}\" type=\"text\" placeholder=\"{{ app.sub.lang.string.admin.settings.forms[item.group_name][item.name].name }}\" aria-label=\"{{ item.name }}\" value=\"{{ item.value }}\" aria-describedby=\"help_{{ item.name }}\" spellcheck=\"false\">
                                                <input type=\"file\" class=\"custom-file-input d-none\" id=\"fileSetting[{{ item.name }}]\" name=\"fileSetting[{{ item.name }}]\" accept=\"image/x-png,image/svg+xml,image/jpeg\">
                                                <label class=\"toggle-tooltip\" for=\"fileSetting[{{ item.name }}]\" title=\"{{ app.sub.lang.string.container.buttons.select_file }}\"></label>
                                            </div>
                                            <small id=\"help_{{ item.name }}\" class=\"form-text text-muted\">{{ app.phrase.renderPhrase(app.sub.lang.string.admin.settings.forms[item.group_name][item.name].desc)|raw }}</small>
                                        </div>
                                    </div>
                                {% endif %}
                            </div>
                        {% endfor %}
                        <div class=\"w-100 d-inline-block\">
                            <div class=\"sticky-button shadow\">
                                <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon send\">{{ app.sub.lang.string.container.buttons.update }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </aside>
{% endblock %}
", "@ComponentBundle_Admin/Settings/setting.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Mention\\Templates\\Admin\\Settings\\setting.tpl");
    }
}
