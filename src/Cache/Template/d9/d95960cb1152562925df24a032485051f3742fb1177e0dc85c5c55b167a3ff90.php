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

/* @ComponentBundle_Admin/Forums/add_forums.tpl */
class __TwigTemplate_537b223080201df94b8e497976838fc35b27c2ba32311f93fcb7ed85e3820bf8 extends Template
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
        $this->parent = $this->loadTemplate("@ComponentBundle_Admin/container.tpl", "@ComponentBundle_Admin/Forums/add_forums.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "@ComponentBundle/admin/add_forums";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 5), "lang", [], "any", false, false, false, 5), "string", [], "any", false, false, false, 5), "admin", [], "any", false, false, false, 5), "forums", [], "any", false, false, false, 5), "new", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
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
                    <div><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 15), "buildLink", [0 => "adminForums", 1 => []], "method", false, false, false, 15), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 15), "lang", [], "any", false, false, false, 15), "string", [], "any", false, false, false, 15), "admin", [], "any", false, false, false, 15), "forums", [], "any", false, false, false, 15), "new", [], "any", false, false, false, 15), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t";
        // line 20
        $this->loadTemplate("usermenu_member.tpl", "@ComponentBundle_Admin/Forums/add_forums.tpl", 20)->display($context);
        // line 21
        echo "\t\t</div>
\t</div>
\t";
        // line 23
        $this->loadTemplate("@ComponentBundle_Admin/Layout/sidebar.tpl", "@ComponentBundle_Admin/Forums/add_forums.tpl", 23)->display($context);
        // line 24
        echo "\t
\t<aside class=\"col-sm-9\">
\t\t<div class=\"app-box shadow rounded\" data-tab=\"forumNew\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center mb-3\">
                    <div>
                        <h5 class=\"mb-0\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 33), "lang", [], "any", false, false, false, 33), "string", [], "any", false, false, false, 33), "admin", [], "any", false, false, false, 33), "forums", [], "any", false, false, false, 33), "new", [], "any", false, false, false, 33), "title", [], "any", false, false, false, 33), "html", null, true);
        echo "</h5>
                        <small class=\"text-muted\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 34), "lang", [], "any", false, false, false, 34), "string", [], "any", false, false, false, 34), "admin", [], "any", false, false, false, 34), "forums", [], "any", false, false, false, 34), "new", [], "any", false, false, false, 34), "desc", [], "any", false, false, false, 34), "html", null, true);
        echo "</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 37), "buildLink", [0 => "adminForums", 1 => []], "method", false, false, false, 37), "html", null, true);
        echo "\" class=\"btn btn-app-discussion icon back\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 37), "lang", [], "any", false, false, false, 37), "string", [], "any", false, false, false, 37), "container", [], "any", false, false, false, 37), "buttons", [], "any", false, false, false, 37), "back", [], "any", false, false, false, 37), "html", null, true);
        echo "</a>
                    </div>
                </div> 
                <hr>
                <div class=\"d-flex flex-column justify-content-center align-items-center\">
                    <div id=\"nodeAccordion\" class=\"w-100 rounded\">
                        <div class=\"setting-group list new-forum bg-white text-dark shadow-sm position-relative rounded\">
                            <div class=\"bg-light d-flex align-items-center p-2 px-0\">
                                <span class=\"icon\"></span>
                                <div class=\"title ml-lg-0 ml-2 mr-auto\">
                                    <span class=\"font-weight-bold\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 47), "lang", [], "any", false, false, false, 47), "string", [], "any", false, false, false, 47), "admin", [], "any", false, false, false, 47), "forums", [], "any", false, false, false, 47), "new", [], "any", false, false, false, 47), "title", [], "any", false, false, false, 47), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            <form id=\"admin_forums_new\" method=\"post\">
                                <div class=\"p-2 border-bottom\">
                                    <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                        <div class=\"col-lg-6 col-sm-6\">
                                            <label for=\"static_title\" class=\"col-form-label\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 54), "lang", [], "any", false, false, false, 54), "string", [], "any", false, false, false, 54), "admin", [], "any", false, false, false, 54), "forums", [], "any", false, false, false, 54), "forms", [], "any", false, false, false, 54), "parent", [], "any", false, false, false, 54), "title", [], "any", false, false, false, 54), "html", null, true);
        echo "</label>
                                            <div>
                                                <select class=\"selectpicker ml-lg-auto pt-2 pt-lg-0\" data-live-search=\"true\" title=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 56), "lang", [], "any", false, false, false, 56), "string", [], "any", false, false, false, 56), "container", [], "any", false, false, false, 56), "buttons", [], "any", false, false, false, 56), "select", [], "any", false, false, false, 56), "html", null, true);
        echo "\" name=\"forum_parent\" required=\"required\">
                                                    <option value=\"0\" ";
        // line 57
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "forum", [], "any", false, false, false, 57), "parent_id", [], "any", false, false, false, 57) === "0")) ? ("selected") : (""));
        echo ">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 57), "lang", [], "any", false, false, false, 57), "string", [], "any", false, false, false, 57), "admin", [], "any", false, false, false, 57), "forums", [], "any", false, false, false, 57), "forms", [], "any", false, false, false, 57), "parent", [], "any", false, false, false, 57), "no_parent", [], "any", false, false, false, 57), "html", null, true);
        echo "</option>
                                                    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 58), "forum", [], "any", false, false, false, 58), "getForumList", [], "method", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
            // line 59
            echo "                                                        ";
            if ( !(twig_get_attribute($this->env, $this->source, $context["forum"], "forum_id", [], "any", false, false, false, 59) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "forum", [], "any", false, false, false, 59), "forum_id", [], "any", false, false, false, 59))) {
                // line 60
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forum"], "forum_id", [], "any", false, false, false, 60), "html", null, true);
                echo "\" ";
                echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "forum", [], "any", false, false, false, 60), "parent_id", [], "any", false, false, false, 60) === twig_get_attribute($this->env, $this->source, $context["forum"], "forum_id", [], "any", false, false, false, 60))) ? ("selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forum"], "title", [], "any", false, false, false, 60), "html", null, true);
                echo "</option>
                                                        ";
            }
            // line 62
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                                                </select>
                                                <small id=\"help_title\" class=\"form-text text-muted\">";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 64), "lang", [], "any", false, false, false, 64), "string", [], "any", false, false, false, 64), "admin", [], "any", false, false, false, 64), "forums", [], "any", false, false, false, 64), "forms", [], "any", false, false, false, 64), "parent", [], "any", false, false, false, 64), "desc", [], "any", false, false, false, 64), "html", null, true);
        echo "</small>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-6 col-sm-12\">
                                            <label for=\"static_order\" class=\"col-form-label\">";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 68), "lang", [], "any", false, false, false, 68), "string", [], "any", false, false, false, 68), "admin", [], "any", false, false, false, 68), "forums", [], "any", false, false, false, 68), "forms", [], "any", false, false, false, 68), "order", [], "any", false, false, false, 68), "title", [], "any", false, false, false, 68), "html", null, true);
        echo "</label>
                                            <div>
                                                <input class=\"form-control\" name=\"forum_order\" id=\"static_order\" type=\"number\" placeholder=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 70), "lang", [], "any", false, false, false, 70), "string", [], "any", false, false, false, 70), "admin", [], "any", false, false, false, 70), "forums", [], "any", false, false, false, 70), "forms", [], "any", false, false, false, 70), "order", [], "any", false, false, false, 70), "desc", [], "any", false, false, false, 70), "html", null, true);
        echo "\" aria-label=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 70), "lang", [], "any", false, false, false, 70), "string", [], "any", false, false, false, 70), "admin", [], "any", false, false, false, 70), "forums", [], "any", false, false, false, 70), "forms", [], "any", false, false, false, 70), "order", [], "any", false, false, false, 70), "desc", [], "any", false, false, false, 70), "html", null, true);
        echo "\" aria-describedby=\"help_order\" spellcheck=\"false\" min=\"1\" step=\"1\" value=\"1\" pattern=\"\\d*\" required=\"required\">
                                                <small id=\"help_order\" class=\"form-text text-muted\">";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 71), "lang", [], "any", false, false, false, 71), "string", [], "any", false, false, false, 71), "admin", [], "any", false, false, false, 71), "forums", [], "any", false, false, false, 71), "forms", [], "any", false, false, false, 71), "order", [], "any", false, false, false, 71), "desc", [], "any", false, false, false, 71), "html", null, true);
        echo "</small>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                            <label for=\"static_name\" class=\"col-form-label\">";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 75), "lang", [], "any", false, false, false, 75), "string", [], "any", false, false, false, 75), "admin", [], "any", false, false, false, 75), "forums", [], "any", false, false, false, 75), "forms", [], "any", false, false, false, 75), "name", [], "any", false, false, false, 75), "title", [], "any", false, false, false, 75), "html", null, true);
        echo "</label>
                                            <div>
                                                <input class=\"form-control\" name=\"forum_title\" id=\"static_name\" type=\"text\" placeholder=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 77), "lang", [], "any", false, false, false, 77), "string", [], "any", false, false, false, 77), "admin", [], "any", false, false, false, 77), "forums", [], "any", false, false, false, 77), "forms", [], "any", false, false, false, 77), "name", [], "any", false, false, false, 77), "desc", [], "any", false, false, false, 77), "html", null, true);
        echo "\" aria-label=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 77), "lang", [], "any", false, false, false, 77), "string", [], "any", false, false, false, 77), "admin", [], "any", false, false, false, 77), "forums", [], "any", false, false, false, 77), "forms", [], "any", false, false, false, 77), "title", [], "any", false, false, false, 77), "desc", [], "any", false, false, false, 77), "html", null, true);
        echo "\" aria-describedby=\"help_name\" spellcheck=\"false\" required=\"required\">
                                                <small id=\"help_name\" class=\"form-text text-muted\">";
        // line 78
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 78), "lang", [], "any", false, false, false, 78), "string", [], "any", false, false, false, 78), "admin", [], "any", false, false, false, 78), "forums", [], "any", false, false, false, 78), "forms", [], "any", false, false, false, 78), "name", [], "any", false, false, false, 78), "desc", [], "any", false, false, false, 78);
        echo "</small>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-6 col-sm-12\">
                                            <label for=\"static_title\" class=\"col-form-label\">";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 82), "lang", [], "any", false, false, false, 82), "string", [], "any", false, false, false, 82), "admin", [], "any", false, false, false, 82), "forums", [], "any", false, false, false, 82), "forms", [], "any", false, false, false, 82), "description", [], "any", false, false, false, 82), "title", [], "any", false, false, false, 82), "html", null, true);
        echo "</label>
                                            <div>
                                                <input class=\"form-control\" name=\"forum_description\" id=\"static_title\" type=\"text\" placeholder=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 84), "lang", [], "any", false, false, false, 84), "string", [], "any", false, false, false, 84), "admin", [], "any", false, false, false, 84), "forums", [], "any", false, false, false, 84), "forms", [], "any", false, false, false, 84), "description", [], "any", false, false, false, 84), "desc", [], "any", false, false, false, 84), "html", null, true);
        echo "\" aria-label=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 84), "lang", [], "any", false, false, false, 84), "string", [], "any", false, false, false, 84), "admin", [], "any", false, false, false, 84), "forums", [], "any", false, false, false, 84), "forms", [], "any", false, false, false, 84), "title", [], "any", false, false, false, 84), "desc", [], "any", false, false, false, 84), "html", null, true);
        echo "\" aria-describedby=\"help_title\" spellcheck=\"false\" required=\"required\">
                                                <small id=\"help_title\" class=\"form-text text-muted\">";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 85), "lang", [], "any", false, false, false, 85), "string", [], "any", false, false, false, 85), "admin", [], "any", false, false, false, 85), "forums", [], "any", false, false, false, 85), "forms", [], "any", false, false, false, 85), "description", [], "any", false, false, false, 85), "desc", [], "any", false, false, false, 85), "html", null, true);
        echo "</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon plus\">";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 90), "lang", [], "any", false, false, false, 90), "string", [], "any", false, false, false, 90), "container", [], "any", false, false, false, 90), "buttons", [], "any", false, false, false, 90), "save", [], "any", false, false, false, 90), "html", null, true);
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
        return "@ComponentBundle_Admin/Forums/add_forums.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 90,  251 => 85,  245 => 84,  240 => 82,  233 => 78,  227 => 77,  222 => 75,  215 => 71,  209 => 70,  204 => 68,  197 => 64,  194 => 63,  188 => 62,  178 => 60,  175 => 59,  171 => 58,  165 => 57,  161 => 56,  156 => 54,  146 => 47,  131 => 37,  125 => 34,  121 => 33,  110 => 24,  108 => 23,  104 => 21,  102 => 20,  92 => 15,  86 => 14,  80 => 13,  74 => 12,  68 => 8,  64 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/add_forums' %}

{% block title %}{{ app.sub.lang.string.admin.forums.new.title }}{{ \" - \" }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminIndex', {}) }}\">{{ app.sub.lang.string.admin.container.title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminForums', {}) }}\">{{ app.sub.lang.string.admin.forums.list.title }}</a></div>
                    <div><a href=\"{{ app.phrase.buildLink('adminForums', {}) }}\">{{ app.sub.lang.string.admin.forums.new.title }}</a></div>
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
\t\t<div class=\"app-box shadow rounded\" data-tab=\"forumNew\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center mb-3\">
                    <div>
                        <h5 class=\"mb-0\">{{ app.sub.lang.string.admin.forums.new.title }}</h5>
                        <small class=\"text-muted\">{{ app.sub.lang.string.admin.forums.new.desc }}</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"{{ app.phrase.buildLink('adminForums', {}) }}\" class=\"btn btn-app-discussion icon back\">{{ app.sub.lang.string.container.buttons.back }}</a>
                    </div>
                </div> 
                <hr>
                <div class=\"d-flex flex-column justify-content-center align-items-center\">
                    <div id=\"nodeAccordion\" class=\"w-100 rounded\">
                        <div class=\"setting-group list new-forum bg-white text-dark shadow-sm position-relative rounded\">
                            <div class=\"bg-light d-flex align-items-center p-2 px-0\">
                                <span class=\"icon\"></span>
                                <div class=\"title ml-lg-0 ml-2 mr-auto\">
                                    <span class=\"font-weight-bold\">{{ app.sub.lang.string.admin.forums.new.title }}</span>
                                </div>
                            </div>
                            <form id=\"admin_forums_new\" method=\"post\">
                                <div class=\"p-2 border-bottom\">
                                    <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                        <div class=\"col-lg-6 col-sm-6\">
                                            <label for=\"static_title\" class=\"col-form-label\">{{ app.sub.lang.string.admin.forums.forms.parent.title }}</label>
                                            <div>
                                                <select class=\"selectpicker ml-lg-auto pt-2 pt-lg-0\" data-live-search=\"true\" title=\"{{ app.sub.lang.string.container.buttons.select }}\" name=\"forum_parent\" required=\"required\">
                                                    <option value=\"0\" {{ string.forum.parent_id is same as('0') ? 'selected' : '' }}>{{ app.sub.lang.string.admin.forums.forms.parent.no_parent }}</option>
                                                    {% for forum in app.string.forum.getForumList() %}
                                                        {% if forum.forum_id is not same as(string.forum.forum_id) %}
                                                            <option value=\"{{ forum.forum_id }}\" {{ string.forum.parent_id is same as(forum.forum_id) ? 'selected' : '' }}>{{ forum.title }}</option>
                                                        {% endif %}
                                                    {% endfor %}
                                                </select>
                                                <small id=\"help_title\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.forums.forms.parent.desc }}</small>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-6 col-sm-12\">
                                            <label for=\"static_order\" class=\"col-form-label\">{{ app.sub.lang.string.admin.forums.forms.order.title }}</label>
                                            <div>
                                                <input class=\"form-control\" name=\"forum_order\" id=\"static_order\" type=\"number\" placeholder=\"{{ app.sub.lang.string.admin.forums.forms.order.desc }}\" aria-label=\"{{ app.sub.lang.string.admin.forums.forms.order.desc }}\" aria-describedby=\"help_order\" spellcheck=\"false\" min=\"1\" step=\"1\" value=\"1\" pattern=\"\\d*\" required=\"required\">
                                                <small id=\"help_order\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.forums.forms.order.desc }}</small>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                            <label for=\"static_name\" class=\"col-form-label\">{{ app.sub.lang.string.admin.forums.forms.name.title }}</label>
                                            <div>
                                                <input class=\"form-control\" name=\"forum_title\" id=\"static_name\" type=\"text\" placeholder=\"{{ app.sub.lang.string.admin.forums.forms.name.desc }}\" aria-label=\"{{ app.sub.lang.string.admin.forums.forms.title.desc }}\" aria-describedby=\"help_name\" spellcheck=\"false\" required=\"required\">
                                                <small id=\"help_name\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.forums.forms.name.desc|raw }}</small>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-6 col-sm-12\">
                                            <label for=\"static_title\" class=\"col-form-label\">{{ app.sub.lang.string.admin.forums.forms.description.title }}</label>
                                            <div>
                                                <input class=\"form-control\" name=\"forum_description\" id=\"static_title\" type=\"text\" placeholder=\"{{ app.sub.lang.string.admin.forums.forms.description.desc }}\" aria-label=\"{{ app.sub.lang.string.admin.forums.forms.title.desc }}\" aria-describedby=\"help_title\" spellcheck=\"false\" required=\"required\">
                                                <small id=\"help_title\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.forums.forms.description.desc }}</small>
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
{% endblock %}", "@ComponentBundle_Admin/Forums/add_forums.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Mention\\Templates\\Admin\\Forums\\add_forums.tpl");
    }
}
