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

/* @ComponentBundle_Admin/Layout/sidebar.tpl */
class __TwigTemplate_3597afbfa83e2e849b3e86ee2c2e248e extends Template
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
        echo "<aside class=\"col-sm-3 app-sidebar-area mb-4 pr-4\">
    <div id=\"accordion\">
        <div class=\"card app-forums bg-white rounded shadow mb-4\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["appAdmin"] ?? null), "string", [], "any", false, false, false, 4), "navigations", [], "any", false, false, false, 4), "getNavigations", [], "method", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["appAdmin"] ?? null), "string", [], "any", false, false, false, 5), "getActiveNavigation", [], "any", false, false, false, 5), "parent", [], "any", false, false, false, 5) === twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 5))) {
                // line 6
                echo "                ";
                $context["activeNavAriaExpanded"] = "true";
                // line 7
                echo "                ";
                $context["activeNavCollapsed"] = "";
                // line 8
                echo "                ";
                $context["activeNavShow"] = "show";
                // line 9
                echo "            ";
            } else {
                // line 10
                echo "                ";
                $context["activeNavAriaExpanded"] = "false";
                // line 11
                echo "                ";
                $context["activeNavCollapsed"] = " collapsed";
                // line 12
                echo "                ";
                $context["activeNavShow"] = "";
                // line 13
                echo "            ";
            }
            // line 14
            echo "            <a href=\"#\" class=\"card-header text-dark";
            echo twig_escape_filter($this->env, ($context["activeNavCollapsed"] ?? null), "html", null, true);
            echo "\" data-toggle=\"collapse\" data-target=\"#adminSidebar_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 14), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nav_id", [], "any", false, false, false, 14), "html", null, true);
            echo "\"
            aria-expanded=\"";
            // line 15
            echo twig_escape_filter($this->env, ($context["activeNavAriaExpanded"] ?? null), "html", null, true);
            echo "\" aria-controls=\"adminSidebar_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 15), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nav_id", [], "any", false, false, false, 15), "html", null, true);
            echo "\" data-tab=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 15), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nav_id", [], "any", false, false, false, 15), "html", null, true);
            echo "\">
                <h6 class=\"font-weight-bold\">
                    <i class=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 17), "html", null, true);
            echo "\"></i>
                    <span>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 18), "lang", [], "any", false, false, false, 18), "string", [], "any", false, false, false, 18), "admin", [], "any", false, false, false, 18), "container", [], "any", false, false, false, 18), "sidebar", [], "any", false, false, false, 18)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 18)] ?? null) : null), "title", [], "any", false, false, false, 18), "html", null, true);
            echo "</span>
                </h6>
            </a>
            <div id=\"adminSidebar_";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 21), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nav_id", [], "any", false, false, false, 21), "html", null, true);
            echo "\" class=\"collapse ";
            echo twig_escape_filter($this->env, ($context["activeNavShow"] ?? null), "html", null, true);
            echo "\" aria-labelledby=\"adminSidebar_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 21), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nav_id", [], "any", false, false, false, 21), "html", null, true);
            echo "\" data-parent=\"#accordion\">
                <div class=\"card-body p-0\">
                    <article class=\"card-group-item\">
                        <div class=\"filter-content\">
                            <div class=\"list-group list-group-flush\">
                                ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["appAdmin"] ?? null), "string", [], "any", false, false, false, 26), "navigations", [], "any", false, false, false, 26), "getNavigations", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "nav_id", [], "any", false, false, false, 26)], "method", false, false, false, 26));
            foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                // line 27
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["appAdmin"] ?? null), "string", [], "any", false, false, false, 27), "getActiveNavigation", [], "any", false, false, false, 27), "nav", [], "any", false, false, false, 27) === twig_get_attribute($this->env, $this->source, $context["subitem"], "name", [], "any", false, false, false, 27))) {
                    // line 28
                    echo "                                        ";
                    $context["activeNavActive"] = " active";
                    // line 29
                    echo "                                    ";
                } else {
                    // line 30
                    echo "                                        ";
                    $context["activeNavActive"] = "";
                    // line 31
                    echo "                                    ";
                }
                // line 32
                echo "                                    ";
                if ( !(twig_get_attribute($this->env, $this->source, $context["subitem"], "link", [], "any", false, false, false, 32) === "")) {
                    // line 33
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 33), "buildLink", [0 => "adminIndex", 1 => []], "method", false, false, false, 33), "html", null, true);
                    if ( !(twig_get_attribute($this->env, $this->source, $context["subitem"], "link", [], "any", false, false, false, 33) === "/")) {
                        echo "/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subitem"], "link", [], "any", false, false, false, 33), "html", null, true);
                    }
                    echo "\" class=\"list-group-item ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subitem"], "name", [], "any", false, false, false, 33), "html", null, true);
                    echo twig_escape_filter($this->env, ($context["activeNavActive"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (($__internal_compile_1 = (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 33), "lang", [], "any", false, false, false, 33), "string", [], "any", false, false, false, 33), "admin", [], "any", false, false, false, 33), "container", [], "any", false, false, false, 33), "sidebar", [], "any", false, false, false, 33)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 33)] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["subitem"], "name", [], "any", false, false, false, 33)] ?? null) : null), "html", null, true);
                    echo "</a>
                                    ";
                } else {
                    // line 35
                    echo "                                        <span class=\"text-dark\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 35), "lang", [], "any", false, false, false, 35), "string", [], "any", false, false, false, 35), "admin", [], "any", false, false, false, 35), "container", [], "any", false, false, false, 35), "sidebar", [], "any", false, false, false, 35)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 35)] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["subitem"], "name", [], "any", false, false, false, 35)] ?? null) : null), "title", [], "any", false, false, false, 35), "html", null, true);
                    echo "</span>
                                        ";
                    // line 36
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["appAdmin"] ?? null), "string", [], "any", false, false, false, 36), "navigations", [], "any", false, false, false, 36), "getNavigations", [0 => twig_get_attribute($this->env, $this->source, $context["subitem"], "nav_id", [], "any", false, false, false, 36)], "method", false, false, false, 36));
                    foreach ($context['_seq'] as $context["_key"] => $context["subsubitem"]) {
                        // line 37
                        echo "                                            ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["appAdmin"] ?? null), "string", [], "any", false, false, false, 37), "getActiveNavigation", [], "any", false, false, false, 37), "nav", [], "any", false, false, false, 37) === twig_get_attribute($this->env, $this->source, $context["subsubitem"], "name", [], "any", false, false, false, 37))) {
                            // line 38
                            echo "                                                ";
                            $context["activeNavActive"] = " active";
                            // line 39
                            echo "                                            ";
                        } else {
                            // line 40
                            echo "                                                ";
                            $context["activeNavActive"] = "";
                            // line 41
                            echo "                                            ";
                        }
                        // line 42
                        echo "                                            <a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 42), "buildLink", [0 => "adminIndex", 1 => []], "method", false, false, false, 42), "html", null, true);
                        if ( !(twig_get_attribute($this->env, $this->source, $context["subsubitem"], "link", [], "any", false, false, false, 42) === "/")) {
                            echo "/";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subsubitem"], "link", [], "any", false, false, false, 42), "html", null, true);
                        }
                        echo "\" class=\"list-group-item ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subsubitem"], "name", [], "any", false, false, false, 42), "html", null, true);
                        echo twig_escape_filter($this->env, ($context["activeNavActive"] ?? null), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (($__internal_compile_5 = (($__internal_compile_6 = (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 42), "lang", [], "any", false, false, false, 42), "string", [], "any", false, false, false, 42), "admin", [], "any", false, false, false, 42), "container", [], "any", false, false, false, 42), "sidebar", [], "any", false, false, false, 42)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 42)] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["subitem"], "name", [], "any", false, false, false, 42)] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["subsubitem"], "name", [], "any", false, false, false, 42)] ?? null) : null), "html", null, true);
                        echo "</a>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subsubitem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 44
                    echo "                                    ";
                }
                // line 45
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                            </div>
                        </div>
                    </article>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </div>
    </div>
</aside>";
    }

    public function getTemplateName()
    {
        return "@ComponentBundle_Admin/Layout/sidebar.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 52,  209 => 46,  203 => 45,  200 => 44,  182 => 42,  179 => 41,  176 => 40,  173 => 39,  170 => 38,  167 => 37,  163 => 36,  158 => 35,  143 => 33,  140 => 32,  137 => 31,  134 => 30,  131 => 29,  128 => 28,  125 => 27,  121 => 26,  105 => 21,  99 => 18,  95 => 17,  82 => 15,  73 => 14,  70 => 13,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<aside class=\"col-sm-3 app-sidebar-area mb-4 pr-4\">
    <div id=\"accordion\">
        <div class=\"card app-forums bg-white rounded shadow mb-4\">
            {% for item in appAdmin.string.navigations.getNavigations() %}
            {% if appAdmin.string.getActiveNavigation.parent is same as(item.name) %}
                {% set activeNavAriaExpanded = 'true' %}
                {% set activeNavCollapsed = '' %}
                {% set activeNavShow = 'show' %}
            {% else %}
                {% set activeNavAriaExpanded = 'false' %}
                {% set activeNavCollapsed = ' collapsed' %}
                {% set activeNavShow = '' %}
            {% endif %}
            <a href=\"#\" class=\"card-header text-dark{{ activeNavCollapsed }}\" data-toggle=\"collapse\" data-target=\"#adminSidebar_{{ item.name }}-{{ item.nav_id }}\"
            aria-expanded=\"{{ activeNavAriaExpanded }}\" aria-controls=\"adminSidebar_{{ item.name }}-{{ item.nav_id }}\" data-tab=\"{{ item.name }}-{{ item.nav_id }}\">
                <h6 class=\"font-weight-bold\">
                    <i class=\"{{ item.icon }}\"></i>
                    <span>{{ app.sub.lang.string.admin.container.sidebar[item.name].title }}</span>
                </h6>
            </a>
            <div id=\"adminSidebar_{{ item.name }}-{{ item.nav_id }}\" class=\"collapse {{ activeNavShow }}\" aria-labelledby=\"adminSidebar_{{ item.name }}-{{ item.nav_id }}\" data-parent=\"#accordion\">
                <div class=\"card-body p-0\">
                    <article class=\"card-group-item\">
                        <div class=\"filter-content\">
                            <div class=\"list-group list-group-flush\">
                                {% for subitem in appAdmin.string.navigations.getNavigations(item.nav_id) %}
                                    {% if appAdmin.string.getActiveNavigation.nav is same as(subitem.name) %}
                                        {% set activeNavActive = ' active' %}
                                    {% else %}
                                        {% set activeNavActive = '' %}
                                    {% endif %}
                                    {% if subitem.link is not same as('') %}
                                        <a href=\"{{ app.phrase.buildLink('adminIndex', {}) }}{% if subitem.link is not same as('/') %}/{{ subitem.link }}{% endif %}\" class=\"list-group-item {{ subitem.name }}{{ activeNavActive }}\">{{ app.sub.lang.string.admin.container.sidebar[item.name][subitem.name] }}</a>
                                    {% else %}
                                        <span class=\"text-dark\">{{ app.sub.lang.string.admin.container.sidebar[item.name][subitem.name].title }}</span>
                                        {% for subsubitem in appAdmin.string.navigations.getNavigations(subitem.nav_id) %}
                                            {% if appAdmin.string.getActiveNavigation.nav is same as(subsubitem.name) %}
                                                {% set activeNavActive = ' active' %}
                                            {% else %}
                                                {% set activeNavActive = '' %}
                                            {% endif %}
                                            <a href=\"{{ app.phrase.buildLink('adminIndex', {}) }}{% if subsubitem.link is not same as('/') %}/{{ subsubitem.link }}{% endif %}\" class=\"list-group-item {{ subsubitem.name }}{{ activeNavActive }}\">{{ app.sub.lang.string.admin.container.sidebar[item.name][subitem.name][subsubitem.name] }}</a>
                                        {% endfor %}
                                    {% endif %}
                                {% endfor %}
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
</aside>", "@ComponentBundle_Admin/Layout/sidebar.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Mention\\Templates\\Admin\\Layout\\sidebar.tpl");
    }
}
