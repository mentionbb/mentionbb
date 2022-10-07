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

/* updateContent.tpl */
class __TwigTemplate_546cdf797482948a7f02924858f80864bba9b40eef784ff0680feeda4079280e extends Template
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
        // line 2
        echo "\t";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 2), "renderer", [], "any", false, false, false, 2), "bbcode", [], "any", false, false, false, 2), "Parse", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 2), "content", [], "any", false, false, false, 2)], "method", false, false, false, 2);
        echo "
";
    }

    public function getTemplateName()
    {
        return "updateContent.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% autoescape false %}
\t{{ app.sub.renderer.bbcode.Parse(string.post.content)|raw }}
{% endautoescape %}", "updateContent.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Post\\updateContent.tpl");
    }
}
