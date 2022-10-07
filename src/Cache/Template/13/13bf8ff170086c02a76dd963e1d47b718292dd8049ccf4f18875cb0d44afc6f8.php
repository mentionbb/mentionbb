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

/* @ComponentBundle_Admin/RouteFilters/route_filters.tpl */
class __TwigTemplate_4dfa3febc66c0c1e7bfc32ccc9538efbb749d0baee0db29894b10cece1651217 extends Template
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
        $this->parent = $this->loadTemplate("@ComponentBundle_Admin/container.tpl", "@ComponentBundle_Admin/RouteFilters/route_filters.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "@ComponentBundle/admin/route_filters";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 5), "lang", [], "any", false, false, false, 5), "string", [], "any", false, false, false, 5), "admin", [], "any", false, false, false, 5), "routefilters", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 14), "buildLink", [0 => "adminRouteFilters", 1 => []], "method", false, false, false, 14), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 14), "lang", [], "any", false, false, false, 14), "string", [], "any", false, false, false, 14), "admin", [], "any", false, false, false, 14), "routefilters", [], "any", false, false, false, 14), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t";
        // line 19
        $this->loadTemplate("usermenu_member.tpl", "@ComponentBundle_Admin/RouteFilters/route_filters.tpl", 19)->display($context);
        // line 20
        echo "\t\t</div>
\t</div>
\t";
        // line 22
        $this->loadTemplate("@ComponentBundle_Admin/Layout/sidebar.tpl", "@ComponentBundle_Admin/RouteFilters/route_filters.tpl", 22)->display($context);
        // line 23
        echo "\t
\t<aside class=\"col-sm-9\">
\t\t<div class=\"app-box shadow rounded\" data-tab=\"routeFilters\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center mb-3\">
                    <div>
                        <h5 class=\"mb-0\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 32), "lang", [], "any", false, false, false, 32), "string", [], "any", false, false, false, 32), "admin", [], "any", false, false, false, 32), "routefilters", [], "any", false, false, false, 32), "title", [], "any", false, false, false, 32), "html", null, true);
        echo "</h5>
                        <small class=\"text-muted\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 33), "lang", [], "any", false, false, false, 33), "string", [], "any", false, false, false, 33), "admin", [], "any", false, false, false, 33), "routefilters", [], "any", false, false, false, 33), "desc", [], "any", false, false, false, 33), "html", null, true);
        echo "</small>
                    </div>
\t\t\t\t\t<div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 36), "buildLink", [0 => "adminRouteFilters", 1 => []], "method", false, false, false, 36), "html", null, true);
        echo "?restore\" class=\"btn btn-app-discussion icon restore\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 36), "lang", [], "any", false, false, false, 36), "string", [], "any", false, false, false, 36), "container", [], "any", false, false, false, 36), "buttons", [], "any", false, false, false, 36), "restore", [], "any", false, false, false, 36), "html", null, true);
        echo "</a>
                    </div>
                </div> 
                <div>
                    <div class=\"route-filters-area w-100\">
                        <form id=\"route_filters_edit\" method=\"post\">
\t\t\t\t\t\t\t<div class=\"bg-dark rounded p-1 px-2 mb-3\">
\t\t\t\t\t\t\t\t<span class=\"text-light\">";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 43), "lang", [], "any", false, false, false, 43), "string", [], "any", false, false, false, 43), "admin", [], "any", false, false, false, 43), "routefilters", [], "any", false, false, false, 43), "help", [], "any", false, false, false, 43), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "routes", [], "any", false, false, false, 45), "getPublicRoutes", [], "method", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 46
            echo "                                <div>
\t\t\t\t\t\t\t\t\t<h6 class=\"font-weight-bold\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 47), "lang", [], "any", false, false, false, 47), "string", [], "any", false, false, false, 47), "admin", [], "any", false, false, false, 47), "routefilters", [], "any", false, false, false, 47), "routes", [], "any", false, false, false, 47)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 47)] ?? null) : null), "name", [], "any", false, false, false, 47), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t\t\t\t<div class=\"form-group row mx-auto\">
                                        <label for=\"static_";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 49), "html", null, true);
            echo "_path\" class=\"col-sm-4 col-form-label\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 49), "lang", [], "any", false, false, false, 49), "string", [], "any", false, false, false, 49), "admin", [], "any", false, false, false, 49), "routefilters", [], "any", false, false, false, 49), "form", [], "any", false, false, false, 49), "path", [], "any", false, false, false, 49), "title", [], "any", false, false, false, 49), "html", null, true);
            echo "</label>
                                        <div class=\"col-sm-8\">
                                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend d-none d-lg-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-text\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 53), "site_url", [], "any", false, false, false, 53), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"options[";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 55), "html", null, true);
            echo "][path]\" id=\"static_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 55), "html", null, true);
            echo "_path\" type=\"text\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 55), "lang", [], "any", false, false, false, 55), "string", [], "any", false, false, false, 55), "admin", [], "any", false, false, false, 55), "routefilters", [], "any", false, false, false, 55), "form", [], "any", false, false, false, 55), "path", [], "any", false, false, false, 55), "desc", [], "any", false, false, false, 55), "html", null, true);
            echo "\" aria-label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 55), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "path", [], "any", false, false, false, 55), "html", null, true);
            echo "\" aria-describedby=\"help_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 55), "html", null, true);
            echo "_path\" spellcheck=\"false\" required=\"required\">
\t\t\t\t\t\t\t\t\t\t\t</div>
                                        </div>
                                    </div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group row mx-auto\">
                                        <label for=\"static_";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 60), "html", null, true);
            echo "_controller\" class=\"col-sm-4 col-form-label\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 60), "lang", [], "any", false, false, false, 60), "string", [], "any", false, false, false, 60), "admin", [], "any", false, false, false, 60), "routefilters", [], "any", false, false, false, 60), "form", [], "any", false, false, false, 60), "controller", [], "any", false, false, false, 60), "title", [], "any", false, false, false, 60), "html", null, true);
            echo "</label>
                                        <div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-callback\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"options[";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 63), "html", null, true);
            echo "][controller]\" id=\"static_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 63), "html", null, true);
            echo "_controller\" type=\"text\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 63), "lang", [], "any", false, false, false, 63), "string", [], "any", false, false, false, 63), "admin", [], "any", false, false, false, 63), "routefilters", [], "any", false, false, false, 63), "form", [], "any", false, false, false, 63), "controller", [], "any", false, false, false, 63), "desc", [], "any", false, false, false, 63), "html", null, true);
            echo "\" aria-label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 63), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "controller", [], "any", false, false, false, 63), "html", null, true);
            echo "\" aria-describedby=\"help_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 63), "html", null, true);
            echo "_controller\" spellcheck=\"false\" required=\"required\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"js-ClickableDivs\" data-text=\"";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "controller", [], "any", false, false, false, 64), "html", null, true);
            echo "\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
                                        </div>
                                    </div>
\t\t\t\t\t\t\t\t</div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t\t\t\t\t\t<div class=\"w-100 d-inline-block\">
\t\t\t\t\t\t\t\t<div class=\"sticky-button shadow\">
                                    <div class=\"progress d-none\">
\t\t\t\t                        <div class=\"indeterminate\"></div>
\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon send\">";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 75), "lang", [], "any", false, false, false, 75), "string", [], "any", false, false, false, 75), "container", [], "any", false, false, false, 75), "buttons", [], "any", false, false, false, 75), "update", [], "any", false, false, false, 75), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
                </div>
            </div>
        </div>
    </aside>
";
    }

    public function getTemplateName()
    {
        return "@ComponentBundle_Admin/RouteFilters/route_filters.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 75,  220 => 70,  208 => 64,  194 => 63,  186 => 60,  168 => 55,  163 => 53,  154 => 49,  149 => 47,  146 => 46,  142 => 45,  137 => 43,  125 => 36,  119 => 33,  115 => 32,  104 => 23,  102 => 22,  98 => 20,  96 => 19,  86 => 14,  80 => 13,  74 => 12,  68 => 8,  64 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/route_filters' %}

{% block title %}{{ app.sub.lang.string.admin.routefilters.title }}{{ \" - \" }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminIndex', {}) }}\">{{ app.sub.lang.string.admin.container.title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminRouteFilters', {}) }}\">{{ app.sub.lang.string.admin.routefilters.title }}</a></div>
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
\t\t<div class=\"app-box shadow rounded\" data-tab=\"routeFilters\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center mb-3\">
                    <div>
                        <h5 class=\"mb-0\">{{ app.sub.lang.string.admin.routefilters.title }}</h5>
                        <small class=\"text-muted\">{{ app.sub.lang.string.admin.routefilters.desc }}</small>
                    </div>
\t\t\t\t\t<div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"{{ app.phrase.buildLink('adminRouteFilters', {}) }}?restore\" class=\"btn btn-app-discussion icon restore\">{{ app.sub.lang.string.container.buttons.restore }}</a>
                    </div>
                </div> 
                <div>
                    <div class=\"route-filters-area w-100\">
                        <form id=\"route_filters_edit\" method=\"post\">
\t\t\t\t\t\t\t<div class=\"bg-dark rounded p-1 px-2 mb-3\">
\t\t\t\t\t\t\t\t<span class=\"text-light\">{{ app.sub.lang.string.admin.routefilters.help }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% for item in string.routes.getPublicRoutes() %}
                                <div>
\t\t\t\t\t\t\t\t\t<h6 class=\"font-weight-bold\">{{ app.sub.lang.string.admin.routefilters.routes[item.name].name }}</h6>
\t\t\t\t\t\t\t\t\t<div class=\"form-group row mx-auto\">
                                        <label for=\"static_{{ item.name }}_path\" class=\"col-sm-4 col-form-label\">{{ app.sub.lang.string.admin.routefilters.form.path.title }}</label>
                                        <div class=\"col-sm-8\">
                                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend d-none d-lg-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-text\">{{ app.settings.site_url }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"options[{{ item.name }}][path]\" id=\"static_{{ item.name }}_path\" type=\"text\" placeholder=\"{{ app.sub.lang.string.admin.routefilters.form.path.desc }}\" aria-label=\"{{ item.name }}\" value=\"{{ item.path }}\" aria-describedby=\"help_{{ item.name }}_path\" spellcheck=\"false\" required=\"required\">
\t\t\t\t\t\t\t\t\t\t\t</div>
                                        </div>
                                    </div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group row mx-auto\">
                                        <label for=\"static_{{ item.name }}_controller\" class=\"col-sm-4 col-form-label\">{{ app.sub.lang.string.admin.routefilters.form.controller.title }}</label>
                                        <div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-callback\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"options[{{ item.name }}][controller]\" id=\"static_{{ item.name }}_controller\" type=\"text\" placeholder=\"{{ app.sub.lang.string.admin.routefilters.form.controller.desc }}\" aria-label=\"{{ item.name }}\" value=\"{{ item.controller }}\" aria-describedby=\"help_{{ item.name }}_controller\" spellcheck=\"false\" required=\"required\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"js-ClickableDivs\" data-text=\"{{ item.controller }}\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
                                        </div>
                                    </div>
\t\t\t\t\t\t\t\t</div>
                            {% endfor %}
\t\t\t\t\t\t\t<div class=\"w-100 d-inline-block\">
\t\t\t\t\t\t\t\t<div class=\"sticky-button shadow\">
                                    <div class=\"progress d-none\">
\t\t\t\t                        <div class=\"indeterminate\"></div>
\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon send\">{{ app.sub.lang.string.container.buttons.update }}</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
                </div>
            </div>
        </div>
    </aside>
{% endblock %}", "@ComponentBundle_Admin/RouteFilters/route_filters.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Mention\\Templates\\Admin\\RouteFilters\\route_filters.tpl");
    }
}
