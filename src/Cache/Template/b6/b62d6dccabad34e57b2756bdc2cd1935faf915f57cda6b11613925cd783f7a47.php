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

/* @ComponentBundle_Admin/Forums/forums.tpl */
class __TwigTemplate_e5fd4953c0cbde4673b6ba6f00b3ca66476f7b1036c21b5c7e62404229c1b311 extends Template
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
        $this->parent = $this->loadTemplate("@ComponentBundle_Admin/container.tpl", "@ComponentBundle_Admin/Forums/forums.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "@ComponentBundle/admin/forums";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 5), "lang", [], "any", false, false, false, 5), "string", [], "any", false, false, false, 5), "admin", [], "any", false, false, false, 5), "forums", [], "any", false, false, false, 5), "list", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 14), "buildLink", [0 => "adminForums", 1 => []], "method", false, false, false, 14), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 14), "lang", [], "any", false, false, false, 14), "string", [], "any", false, false, false, 14), "admin", [], "any", false, false, false, 14), "forums", [], "any", false, false, false, 14), "list", [], "any", false, false, false, 14), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t";
        // line 19
        $this->loadTemplate("usermenu_member.tpl", "@ComponentBundle_Admin/Forums/forums.tpl", 19)->display($context);
        // line 20
        echo "\t\t</div>
\t</div>
\t";
        // line 22
        $this->loadTemplate("@ComponentBundle_Admin/Layout/sidebar.tpl", "@ComponentBundle_Admin/Forums/forums.tpl", 22)->display($context);
        // line 23
        echo "\t
\t<aside class=\"col-sm-9\">
\t\t<div class=\"app-box shadow rounded\" data-tab=\"forumList\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center mb-3\">
                    <div>
                        <h5 class=\"mb-0\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 32), "lang", [], "any", false, false, false, 32), "string", [], "any", false, false, false, 32), "admin", [], "any", false, false, false, 32), "forums", [], "any", false, false, false, 32), "list", [], "any", false, false, false, 32), "title", [], "any", false, false, false, 32), "html", null, true);
        echo "</h5>
                        <small class=\"text-muted\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 33), "lang", [], "any", false, false, false, 33), "string", [], "any", false, false, false, 33), "admin", [], "any", false, false, false, 33), "forums", [], "any", false, false, false, 33), "list", [], "any", false, false, false, 33), "desc", [], "any", false, false, false, 33), "html", null, true);
        echo "</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 36), "buildLink", [0 => "adminForums", 1 => []], "method", false, false, false, 36), "html", null, true);
        echo "?addNode\" class=\"btn btn-app-discussion icon plus\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 36), "lang", [], "any", false, false, false, 36), "string", [], "any", false, false, false, 36), "container", [], "any", false, false, false, 36), "buttons", [], "any", false, false, false, 36), "new", [], "any", false, false, false, 36), "html", null, true);
        echo "</a>
                    </div>
                </div> 
                <hr>
                <div class=\"d-flex flex-column justify-content-center align-items-center\">
                    <div class=\"d-flex flex-lg-row flex-column align-items-lg-center w-100 mb-3\">
                        <div class=\"app-admin-search js-AppAdmin_QuickSearchForums search-container position-relative\">
                            <div class=\"input-group has-feedback has-clear\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 45), "lang", [], "any", false, false, false, 45), "string", [], "any", false, false, false, 45), "admin", [], "any", false, false, false, 45), "forums", [], "any", false, false, false, 45), "list", [], "any", false, false, false, 45), "search", [], "any", false, false, false, 45), "label", [], "any", false, false, false, 45), "html", null, true);
        echo "</span>
                                </div>
                                <input class=\"form-control\" type=\"text\"
                                    placeholder=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 48), "lang", [], "any", false, false, false, 48), "string", [], "any", false, false, false, 48), "admin", [], "any", false, false, false, 48), "forums", [], "any", false, false, false, 48), "list", [], "any", false, false, false, 48), "search", [], "any", false, false, false, 48), "placeholder", [], "any", false, false, false, 48), "html", null, true);
        echo "\"
                                    aria-label=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 49), "lang", [], "any", false, false, false, 49), "string", [], "any", false, false, false, 49), "container", [], "any", false, false, false, 49), "buttons", [], "any", false, false, false, 49), "search", [], "any", false, false, false, 49), "html", null, true);
        echo "\">
                                <i class=\"fas fa-search\"></i>
                                <span title=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 51), "lang", [], "any", false, false, false, 51), "string", [], "any", false, false, false, 51), "container", [], "any", false, false, false, 51), "buttons", [], "any", false, false, false, 51), "clear", [], "any", false, false, false, 51), "html", null, true);
        echo "\"
                                    class=\"form-control-clear fas fa-times form-control-feedback d-none\"></span>
                            </div>
                            <div class=\"search-results shadow d-none\">
                                <span></span>
                                <div class=\"load-area bg-white pt-5 pb-5 d-block\">
                                    <div class=\"post-loader-spin d-block\"></div>
                                </div>
                            </div>
                        </div>
                    </div>       
                    <div id=\"nodeAccordion\" class=\"js-forum-sortable-group w-100 rounded\">
                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 63), "forum", [], "any", false, false, false, 63), "getForumList", [], "method", false, false, false, 63));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 64
            echo "                        <div class=\"setting-group list bg-white text-dark shadow-sm position-relative rounded\">
                            <div class=\"nested-items\" data-forum-id=\"";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "forum_id", [], "any", false, false, false, 65), "html", null, true);
            echo "\" data-order=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "forum_order", [], "any", false, false, false, 65), "html", null, true);
            echo "\">
                                <span class=\"icon\"></span>
                                <a class=\"title d-flex flex-column justify-content-center mr-auto w-100 collapsed\" href=\"#\">
                                    <div class=\"h5\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 68), "html", null, true);
            echo "</div>
                                    <small class=\"d-none d-lg-block\">";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "forum_description", [], "any", false, false, false, 69), "html", null, true);
            echo "</small>
                                </a>
                                <a class=\"append-btn\" href=\"#\" data-ui=\"admin-remove-node\">";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 71), "lang", [], "any", false, false, false, 71), "string", [], "any", false, false, false, 71), "container", [], "any", false, false, false, 71), "buttons", [], "any", false, false, false, 71), "delete", [], "any", false, false, false, 71), "html", null, true);
            echo "</a>
                            </div>
                            ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 73), "forum", [], "any", false, false, false, 73), "getForumList", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "forum_id", [], "any", false, false, false, 73)], "method", false, false, false, 73));
            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                // line 74
                echo "                                <div class=\"nested-items sub\" data-forum-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "forum_id", [], "any", false, false, false, 74), "html", null, true);
                echo "\" data-parent-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "parent_id", [], "any", false, false, false, 74), "html", null, true);
                echo "\" data-order=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "forum_order", [], "any", false, false, false, 74), "html", null, true);
                echo "\">
                                    <span class=\"icon sub\"></span>
                                    <span class=\"icon\"></span>
                                    <a class=\"title d-flex flex-column justify-content-center mr-auto w-100 collapsed\" href=\"#\">
                                        <div class=\"h5\">";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "title", [], "any", false, false, false, 78), "html", null, true);
                echo "</div>
                                        <small class=\"d-none d-lg-block\">";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "forum_description", [], "any", false, false, false, 79), "html", null, true);
                echo "</small>
                                    </a>
                                    <a class=\"append-btn\" href=\"#\" data-ui=\"admin-remove-node\">";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 81), "lang", [], "any", false, false, false, 81), "string", [], "any", false, false, false, 81), "container", [], "any", false, false, false, 81), "buttons", [], "any", false, false, false, 81), "delete", [], "any", false, false, false, 81), "html", null, true);
                echo "</a>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                    </div>
                </div>
            </div>
        </div>
    </aside>
";
    }

    public function getTemplateName()
    {
        return "@ComponentBundle_Admin/Forums/forums.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 86,  232 => 84,  223 => 81,  218 => 79,  214 => 78,  202 => 74,  198 => 73,  193 => 71,  188 => 69,  184 => 68,  176 => 65,  173 => 64,  169 => 63,  154 => 51,  149 => 49,  145 => 48,  139 => 45,  125 => 36,  119 => 33,  115 => 32,  104 => 23,  102 => 22,  98 => 20,  96 => 19,  86 => 14,  80 => 13,  74 => 12,  68 => 8,  64 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/forums' %}

{% block title %}{{ app.sub.lang.string.admin.forums.list.title }}{{ \" - \" }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminIndex', {}) }}\">{{ app.sub.lang.string.admin.container.title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminForums', {}) }}\">{{ app.sub.lang.string.admin.forums.list.title }}</a></div>
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
\t\t<div class=\"app-box shadow rounded\" data-tab=\"forumList\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center mb-3\">
                    <div>
                        <h5 class=\"mb-0\">{{ app.sub.lang.string.admin.forums.list.title }}</h5>
                        <small class=\"text-muted\">{{ app.sub.lang.string.admin.forums.list.desc }}</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"{{ app.phrase.buildLink('adminForums', {}) }}?addNode\" class=\"btn btn-app-discussion icon plus\">{{ app.sub.lang.string.container.buttons.new }}</a>
                    </div>
                </div> 
                <hr>
                <div class=\"d-flex flex-column justify-content-center align-items-center\">
                    <div class=\"d-flex flex-lg-row flex-column align-items-lg-center w-100 mb-3\">
                        <div class=\"app-admin-search js-AppAdmin_QuickSearchForums search-container position-relative\">
                            <div class=\"input-group has-feedback has-clear\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">{{ app.sub.lang.string.admin.forums.list.search.label }}</span>
                                </div>
                                <input class=\"form-control\" type=\"text\"
                                    placeholder=\"{{ app.sub.lang.string.admin.forums.list.search.placeholder }}\"
                                    aria-label=\"{{ app.sub.lang.string.container.buttons.search }}\">
                                <i class=\"fas fa-search\"></i>
                                <span title=\"{{ app.sub.lang.string.container.buttons.clear }}\"
                                    class=\"form-control-clear fas fa-times form-control-feedback d-none\"></span>
                            </div>
                            <div class=\"search-results shadow d-none\">
                                <span></span>
                                <div class=\"load-area bg-white pt-5 pb-5 d-block\">
                                    <div class=\"post-loader-spin d-block\"></div>
                                </div>
                            </div>
                        </div>
                    </div>       
                    <div id=\"nodeAccordion\" class=\"js-forum-sortable-group w-100 rounded\">
                    {% for item in app.string.forum.getForumList() %}
                        <div class=\"setting-group list bg-white text-dark shadow-sm position-relative rounded\">
                            <div class=\"nested-items\" data-forum-id=\"{{ item.forum_id }}\" data-order=\"{{ item.forum_order }}\">
                                <span class=\"icon\"></span>
                                <a class=\"title d-flex flex-column justify-content-center mr-auto w-100 collapsed\" href=\"#\">
                                    <div class=\"h5\">{{ item.title }}</div>
                                    <small class=\"d-none d-lg-block\">{{ item.forum_description }}</small>
                                </a>
                                <a class=\"append-btn\" href=\"#\" data-ui=\"admin-remove-node\">{{ app.sub.lang.string.container.buttons.delete }}</a>
                            </div>
                            {% for sub in app.string.forum.getForumList(item.forum_id) %}
                                <div class=\"nested-items sub\" data-forum-id=\"{{ sub.forum_id }}\" data-parent-id=\"{{ sub.parent_id }}\" data-order=\"{{ sub.forum_order }}\">
                                    <span class=\"icon sub\"></span>
                                    <span class=\"icon\"></span>
                                    <a class=\"title d-flex flex-column justify-content-center mr-auto w-100 collapsed\" href=\"#\">
                                        <div class=\"h5\">{{ sub.title }}</div>
                                        <small class=\"d-none d-lg-block\">{{ sub.forum_description }}</small>
                                    </a>
                                    <a class=\"append-btn\" href=\"#\" data-ui=\"admin-remove-node\">{{ app.sub.lang.string.container.buttons.delete }}</a>
                                </div>
                            {% endfor %}
                        </div>
                    {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    </aside>
{% endblock %}", "@ComponentBundle_Admin/Forums/forums.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Mention\\Templates\\Admin\\Forums\\forums.tpl");
    }
}
