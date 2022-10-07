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
class __TwigTemplate_df7242e5e5f352550ec241e143daa44d95e6f311da244a6214f59e8011b73050 extends Template
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
        echo "<div class=\"debug text-dark col-sm-12 mb-3\">
    <h5>Mention debugging controls</h5>
    <small>Version: ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "build", [], "any", false, false, false, 3), "code", [], "any", false, false, false, 3), "html", null, true);
        echo ", Build ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "build", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3), "html", null, true);
        echo "</small>
    <div>Memory used: ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["debug"] ?? null), "memoryUsed", [], "any", false, false, false, 4), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["debug"] ?? null), "memoryLimit", [], "any", false, false, false, 4), "html", null, true);
        echo "</div>
    <div>Server: PHP <strong>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["debug"] ?? null), "phpVersion", [], "any", false, false, false, 5), "html", null, true);
        echo "</strong>, MySQL <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["debug"] ?? null), "mySQLVersion", [], "any", false, false, false, 5), "html", null, true);
        echo "</strong></div>
    <div>Page loaded in <strong>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["debug"] ?? null), "calculatePageLoadTime", [], "any", false, false, false, 6), "html", null, true);
        echo "</strong> seconds.</div>
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
        return array (  59 => 6,  53 => 5,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"debug text-dark col-sm-12 mb-3\">
    <h5>Mention debugging controls</h5>
    <small>Version: {{ app.build.code }}, Build {{ app.build.id }}</small>
    <div>Memory used: {{ debug.memoryUsed }} / {{ debug.memoryLimit }}</div>
    <div>Server: PHP <strong>{{ debug.phpVersion }}</strong>, MySQL <strong>{{ debug.mySQLVersion }}</strong></div>
    <div>Page loaded in <strong>{{ debug.calculatePageLoadTime }}</strong> seconds.</div>
</div>", "@addon:debug/debug.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Debug\\Templates\\debug.tpl");
    }
}
