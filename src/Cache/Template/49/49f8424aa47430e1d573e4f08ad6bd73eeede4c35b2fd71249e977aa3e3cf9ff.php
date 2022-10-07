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

/* guest_welcome.tpl */
class __TwigTemplate_a67c00a8945727d4495c219363a1f5b4378b96a843d479d313a94eede1b73dfa extends Template
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
        echo "<div class=\"guest-welcome-area bg-dark text-light shadow-sm rounded mb-4\">
\t<span>";
        // line 2
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 2), "lang", [], "any", false, false, false, 2), "string", [], "any", false, false, false, 2), "container", [], "any", false, false, false, 2), "welcome_message", [], "any", false, false, false, 2);
        echo "</span>
</div>";
    }

    public function getTemplateName()
    {
        return "guest_welcome.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"guest-welcome-area bg-dark text-light shadow-sm rounded mb-4\">
\t<span>{{ app.sub.lang.string.container.welcome_message|raw }}</span>
</div>", "guest_welcome.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Layout\\guest_welcome.tpl");
    }
}
