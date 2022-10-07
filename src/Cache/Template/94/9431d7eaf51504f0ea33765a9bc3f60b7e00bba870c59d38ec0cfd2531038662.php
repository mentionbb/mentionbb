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

/* @addon:debug/debug.tpl */
class __TwigTemplate_8a80028cac6816db686b6d7640260f37d2cb1ae88f33ce3d78b350d129d1eb58 extends Template
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
        echo "<div class=\"debug text-dark col-sm-12 row mx-0 mb-3\">
    <div class=\"col-sm-4\">
        <h5>Mention debugging controls</h5>
        <small class=\"d-block\">Version: ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "build", [], "any", false, false, false, 4), "code", [], "any", false, false, false, 4), "html", null, true);
        echo ", Build ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "build", [], "any", false, false, false, 4), "id", [], "any", false, false, false, 4), "html", null, true);
        echo "</small>
        <div>Memory used: ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["debug"] ?? null), "memoryUsed", [], "any", false, false, false, 5), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["debug"] ?? null), "memoryLimit", [], "any", false, false, false, 5), "html", null, true);
        echo "</div>
        <div>Server: PHP <strong>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["debug"] ?? null), "phpVersion", [], "any", false, false, false, 6), "html", null, true);
        echo "</strong>, MySQL <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["debug"] ?? null), "mySQLVersion", [], "any", false, false, false, 6), "html", null, true);
        echo "</strong></div>
        <div>Page loaded in <strong>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["debug"] ?? null), "calculatePageLoadTime", [], "any", false, false, false, 7), "html", null, true);
        echo "</strong> seconds.</div>
    </div>
    <div class=\"col-sm-8 d-flex justify-content-lg-end pt-lg-0 pt-3\">
        <textarea class=\"form-control w-75\" rows=\"5\">page: ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["debug"] ?? null), "page", [], "any", false, false, false, 10), "self", [], "any", false, false, false, 10), "getPath", [], "method", false, false, false, 10), "html", null, true);
        echo "&#13;&#10;";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["debug"] ?? null), "page", [], "any", false, false, false, 10), "matchingPath", [], "any", false, false, false, 10));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "&#13;&#10;";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            echo "404";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</textarea>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@addon:debug/debug.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 10,  60 => 7,  54 => 6,  48 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"debug text-dark col-sm-12 row mx-0 mb-3\">
    <div class=\"col-sm-4\">
        <h5>Mention debugging controls</h5>
        <small class=\"d-block\">Version: {{ app.build.code }}, Build {{ app.build.id }}</small>
        <div>Memory used: {{ debug.memoryUsed }} / {{ debug.memoryLimit }}</div>
        <div>Server: PHP <strong>{{ debug.phpVersion }}</strong>, MySQL <strong>{{ debug.mySQLVersion }}</strong></div>
        <div>Page loaded in <strong>{{ debug.calculatePageLoadTime }}</strong> seconds.</div>
    </div>
    <div class=\"col-sm-8 d-flex justify-content-lg-end pt-lg-0 pt-3\">
        <textarea class=\"form-control w-75\" rows=\"5\">page: {{ debug.page.self.getPath() }}{{ '&#13;&#10;'|raw }}{% for key, item in debug.page.matchingPath %}{{ key }}: {{ item }}{{ '&#13;&#10;'|raw }}{% else %}404{% endfor %}</textarea>
    </div>
</div>", "@addon:debug/debug.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Debug\\Templates\\debug.tpl");
    }
}
