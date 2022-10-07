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

/* @ComponentBundle_Admin/Forums/edit_forum_accordion.tpl */
class __TwigTemplate_b11cd3ead2ac0d48b13f578c765b9359fa5667adb850ea191aa01a77621047d9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"adminNodeEdit\" class=\"collapse\" aria-labelledby=\"adminNodeEdit\" data-parent=\"#nodeAccordion\">
    <form method=\"post\">
        <div class=\"p-2 border-bottom\">
            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                <div class=\"col-lg-6 col-sm-6\">
                    <label for=\"static_title_";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "forum", [], "any", false, false, false, 6), "forum_id", [], "any", false, false, false, 6), "html", null, true);
        echo "\" class=\"col-form-label\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 6), "lang", [], "any", false, false, false, 6), "string", [], "any", false, false, false, 6), "admin", [], "any", false, false, false, 6), "forums", [], "any", false, false, false, 6), "forms", [], "any", false, false, false, 6), "parent", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</label>
                    <div>
                        <select class=\"selectpicker ml-lg-auto pt-2 pt-lg-0\" data-live-search=\"true\" title=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 8), "lang", [], "any", false, false, false, 8), "string", [], "any", false, false, false, 8), "container", [], "any", false, false, false, 8), "buttons", [], "any", false, false, false, 8), "select", [], "any", false, false, false, 8), "html", null, true);
        echo "\" name=\"forum_parent\" required=\"required\">
                            <option value=\"0\" ";
        // line 9
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "forum", [], "any", false, false, false, 9), "parent_id", [], "any", false, false, false, 9) === "0")) ? ("selected") : (""));
        echo ">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 9), "lang", [], "any", false, false, false, 9), "string", [], "any", false, false, false, 9), "admin", [], "any", false, false, false, 9), "forums", [], "any", false, false, false, 9), "forms", [], "any", false, false, false, 9), "parent", [], "any", false, false, false, 9), "no_parent", [], "any", false, false, false, 9), "html", null, true);
        echo "</option>
                            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 10), "forum", [], "any", false, false, false, 10), "getForumList", [], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
            // line 11
            echo "                                ";
            if ( !(twig_get_attribute($this->env, $this->source, $context["forum"], "forum_id", [], "any", false, false, false, 11) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "forum", [], "any", false, false, false, 11), "forum_id", [], "any", false, false, false, 11))) {
                // line 12
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forum"], "forum_id", [], "any", false, false, false, 12), "html", null, true);
                echo "\" ";
                echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "forum", [], "any", false, false, false, 12), "parent_id", [], "any", false, false, false, 12) === twig_get_attribute($this->env, $this->source, $context["forum"], "forum_id", [], "any", false, false, false, 12))) ? ("selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forum"], "title", [], "any", false, false, false, 12), "html", null, true);
                echo "</option>
                                ";
            }
            // line 14
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                        </select>
                        <small id=\"help_title_";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "forum", [], "any", false, false, false, 16), "forum_id", [], "any", false, false, false, 16), "html", null, true);
        echo "\" class=\"form-text text-muted\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 16), "lang", [], "any", false, false, false, 16), "string", [], "any", false, false, false, 16), "admin", [], "any", false, false, false, 16), "forums", [], "any", false, false, false, 16), "forms", [], "any", false, false, false, 16), "parent", [], "any", false, false, false, 16), "desc", [], "any", false, false, false, 16), "html", null, true);
        echo "</small>
                    </div>
                </div>
                <div class=\"col-lg-6 col-sm-12\">
                    <label for=\"static_order\" class=\"col-form-label\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 20), "lang", [], "any", false, false, false, 20), "string", [], "any", false, false, false, 20), "admin", [], "any", false, false, false, 20), "forums", [], "any", false, false, false, 20), "forms", [], "any", false, false, false, 20), "order", [], "any", false, false, false, 20), "title", [], "any", false, false, false, 20), "html", null, true);
        echo "</label>
                    <div>
                        <input class=\"form-control\" name=\"forum_order\" id=\"static_order\" type=\"number\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 22), "lang", [], "any", false, false, false, 22), "string", [], "any", false, false, false, 22), "admin", [], "any", false, false, false, 22), "forums", [], "any", false, false, false, 22), "forms", [], "any", false, false, false, 22), "order", [], "any", false, false, false, 22), "desc", [], "any", false, false, false, 22), "html", null, true);
        echo "\" aria-label=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 22), "lang", [], "any", false, false, false, 22), "string", [], "any", false, false, false, 22), "admin", [], "any", false, false, false, 22), "forums", [], "any", false, false, false, 22), "forms", [], "any", false, false, false, 22), "order", [], "any", false, false, false, 22), "desc", [], "any", false, false, false, 22), "html", null, true);
        echo "\" aria-describedby=\"help_order\" spellcheck=\"false\" min=\"1\" step=\"1\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "forum", [], "any", false, false, false, 22), "forum_order", [], "any", false, false, false, 22), "html", null, true);
        echo "\" pattern=\"\\d*\" required=\"required\">
                        <small id=\"help_order\" class=\"form-text text-muted\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 23), "lang", [], "any", false, false, false, 23), "string", [], "any", false, false, false, 23), "admin", [], "any", false, false, false, 23), "forums", [], "any", false, false, false, 23), "forms", [], "any", false, false, false, 23), "order", [], "any", false, false, false, 23), "desc", [], "any", false, false, false, 23), "html", null, true);
        echo "</small>
                    </div>
                </div>
                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                    <label for=\"static_name_";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "forum", [], "any", false, false, false, 27), "forum_id", [], "any", false, false, false, 27), "html", null, true);
        echo "\" class=\"col-form-label\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 27), "lang", [], "any", false, false, false, 27), "string", [], "any", false, false, false, 27), "admin", [], "any", false, false, false, 27), "forums", [], "any", false, false, false, 27), "forms", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "title", [], "any", false, false, false, 27), "html", null, true);
        echo "</label>
                    <div>
                        <input class=\"form-control\" name=\"forum_title\" id=\"static_name_";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "forum", [], "any", false, false, false, 29), "forum_id", [], "any", false, false, false, 29), "html", null, true);
        echo "\" type=\"text\" placeholder=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 29), "lang", [], "any", false, false, false, 29), "string", [], "any", false, false, false, 29), "admin", [], "any", false, false, false, 29), "forums", [], "any", false, false, false, 29), "forms", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "desc", [], "any", false, false, false, 29), "html", null, true);
        echo "\" aria-label=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "forum", [], "any", false, false, false, 29), "forum_id", [], "any", false, false, false, 29), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "forum", [], "any", false, false, false, 29), "title", [], "any", false, false, false, 29), "html", null, true);
        echo "\" aria-describedby=\"help_name_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "forum", [], "any", false, false, false, 29), "forum_id", [], "any", false, false, false, 29), "html", null, true);
        echo "\" spellcheck=\"false\" required=\"required\">
                        <small id=\"help_name_";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "forum", [], "any", false, false, false, 30), "forum_id", [], "any", false, false, false, 30), "html", null, true);
        echo "\" class=\"form-text text-muted\">";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 30), "lang", [], "any", false, false, false, 30), "string", [], "any", false, false, false, 30), "admin", [], "any", false, false, false, 30), "forums", [], "any", false, false, false, 30), "forms", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "desc", [], "any", false, false, false, 30);
        echo "</small>
                    </div>
                </div>
                <div class=\"col-lg-6 col-sm-12\">
                    <label for=\"static_title_";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "forum", [], "any", false, false, false, 34), "forum_id", [], "any", false, false, false, 34), "html", null, true);
        echo "\" class=\"col-form-label\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 34), "lang", [], "any", false, false, false, 34), "string", [], "any", false, false, false, 34), "admin", [], "any", false, false, false, 34), "forums", [], "any", false, false, false, 34), "forms", [], "any", false, false, false, 34), "description", [], "any", false, false, false, 34), "title", [], "any", false, false, false, 34), "html", null, true);
        echo "</label>
                    <div>
                        <input class=\"form-control\" name=\"forum_description\" id=\"static_title_";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "forum", [], "any", false, false, false, 36), "forum_id", [], "any", false, false, false, 36), "html", null, true);
        echo "\" type=\"text\" placeholder=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 36), "lang", [], "any", false, false, false, 36), "string", [], "any", false, false, false, 36), "admin", [], "any", false, false, false, 36), "forums", [], "any", false, false, false, 36), "forms", [], "any", false, false, false, 36), "description", [], "any", false, false, false, 36), "desc", [], "any", false, false, false, 36), "html", null, true);
        echo "\" aria-label=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "forum", [], "any", false, false, false, 36), "title", [], "any", false, false, false, 36), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "forum", [], "any", false, false, false, 36), "forum_description", [], "any", false, false, false, 36), "html", null, true);
        echo "\" aria-describedby=\"help_title_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "forum", [], "any", false, false, false, 36), "forum_id", [], "any", false, false, false, 36), "html", null, true);
        echo "\" spellcheck=\"false\" required=\"required\">
                        <small id=\"help_title_";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "forum", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true);
        echo "\" class=\"form-text text-muted\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 37), "lang", [], "any", false, false, false, 37), "string", [], "any", false, false, false, 37), "admin", [], "any", false, false, false, 37), "forums", [], "any", false, false, false, 37), "forms", [], "any", false, false, false, 37), "description", [], "any", false, false, false, 37), "desc", [], "any", false, false, false, 37), "html", null, true);
        echo "</small>
                    </div>
                </div>
            </div>
            <div>
                <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon pen\">";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 42), "lang", [], "any", false, false, false, 42), "string", [], "any", false, false, false, 42), "container", [], "any", false, false, false, 42), "buttons", [], "any", false, false, false, 42), "save", [], "any", false, false, false, 42), "html", null, true);
        echo "</button>
            </div>
        </div>
    </form>   
</div>";
    }

    public function getTemplateName()
    {
        return "@ComponentBundle_Admin/Forums/edit_forum_accordion.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 42,  163 => 37,  151 => 36,  144 => 34,  135 => 30,  123 => 29,  116 => 27,  109 => 23,  101 => 22,  96 => 20,  87 => 16,  84 => 15,  78 => 14,  68 => 12,  65 => 11,  61 => 10,  55 => 9,  51 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"adminNodeEdit\" class=\"collapse\" aria-labelledby=\"adminNodeEdit\" data-parent=\"#nodeAccordion\">
    <form method=\"post\">
        <div class=\"p-2 border-bottom\">
            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                <div class=\"col-lg-6 col-sm-6\">
                    <label for=\"static_title_{{ string.forum.forum_id }}\" class=\"col-form-label\">{{ app.sub.lang.string.admin.forums.forms.parent.title }}</label>
                    <div>
                        <select class=\"selectpicker ml-lg-auto pt-2 pt-lg-0\" data-live-search=\"true\" title=\"{{ app.sub.lang.string.container.buttons.select }}\" name=\"forum_parent\" required=\"required\">
                            <option value=\"0\" {{ string.forum.parent_id is same as('0') ? 'selected' : '' }}>{{ app.sub.lang.string.admin.forums.forms.parent.no_parent }}</option>
                            {% for forum in app.string.forum.getForumList() %}
                                {% if forum.forum_id is not same as(string.forum.forum_id) %}
                                    <option value=\"{{ forum.forum_id }}\" {{ string.forum.parent_id is same as(forum.forum_id) ? 'selected' : '' }}>{{ forum.title }}</option>
                                {% endif %}
                            {% endfor %}
                        </select>
                        <small id=\"help_title_{{ string.forum.forum_id }}\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.forums.forms.parent.desc }}</small>
                    </div>
                </div>
                <div class=\"col-lg-6 col-sm-12\">
                    <label for=\"static_order\" class=\"col-form-label\">{{ app.sub.lang.string.admin.forums.forms.order.title }}</label>
                    <div>
                        <input class=\"form-control\" name=\"forum_order\" id=\"static_order\" type=\"number\" placeholder=\"{{ app.sub.lang.string.admin.forums.forms.order.desc }}\" aria-label=\"{{ app.sub.lang.string.admin.forums.forms.order.desc }}\" aria-describedby=\"help_order\" spellcheck=\"false\" min=\"1\" step=\"1\" value=\"{{ string.forum.forum_order }}\" pattern=\"\\d*\" required=\"required\">
                        <small id=\"help_order\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.forums.forms.order.desc }}</small>
                    </div>
                </div>
                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                    <label for=\"static_name_{{ string.forum.forum_id }}\" class=\"col-form-label\">{{ app.sub.lang.string.admin.forums.forms.name.title }}</label>
                    <div>
                        <input class=\"form-control\" name=\"forum_title\" id=\"static_name_{{ string.forum.forum_id }}\" type=\"text\" placeholder=\"{{ app.sub.lang.string.admin.forums.forms.name.desc }}\" aria-label=\"{{ string.forum.forum_id }}\" value=\"{{ string.forum.title }}\" aria-describedby=\"help_name_{{ string.forum.forum_id }}\" spellcheck=\"false\" required=\"required\">
                        <small id=\"help_name_{{ string.forum.forum_id }}\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.forums.forms.name.desc|raw }}</small>
                    </div>
                </div>
                <div class=\"col-lg-6 col-sm-12\">
                    <label for=\"static_title_{{ string.forum.forum_id }}\" class=\"col-form-label\">{{ app.sub.lang.string.admin.forums.forms.description.title }}</label>
                    <div>
                        <input class=\"form-control\" name=\"forum_description\" id=\"static_title_{{ string.forum.forum_id }}\" type=\"text\" placeholder=\"{{ app.sub.lang.string.admin.forums.forms.description.desc }}\" aria-label=\"{{ string.forum.title }}\" value=\"{{ string.forum.forum_description }}\" aria-describedby=\"help_title_{{ string.forum.forum_id }}\" spellcheck=\"false\" required=\"required\">
                        <small id=\"help_title_{{ string.forum.name }}\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.forums.forms.description.desc }}</small>
                    </div>
                </div>
            </div>
            <div>
                <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon pen\">{{ app.sub.lang.string.container.buttons.save }}</button>
            </div>
        </div>
    </form>   
</div>", "@ComponentBundle_Admin/Forums/edit_forum_accordion.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Mention\\Templates\\Admin\\Forums\\edit_forum_accordion.tpl");
    }
}
