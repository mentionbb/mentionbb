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

/* @addon:gestures/gesture.tpl */
class __TwigTemplate_a7933d96d8f8171ed7979d2ecb2272b70a211ecb17d0799585e3202553ccbaef extends Template
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
        echo "<div class=\"pr-0\">
    <a title=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 2), "lang", [], "any", false, false, false, 2), "string", [], "any", false, false, false, 2), "gestures", [], "any", false, false, false, 2), "discussion", [], "any", false, false, false, 2), "posts", [], "any", false, false, false, 2), "touchgestures", [], "any", false, false, false, 2), "html", null, true);
        echo "\"
        data-ui=\"mention-gesture\" data-mode=\"disable\"
        class=\"app-touchGestures-icon active toggle-tooltip\" href=\"#\"></a>
</div>";
    }

    public function getTemplateName()
    {
        return "@addon:gestures/gesture.tpl";
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
        return new Source("<div class=\"pr-0\">
    <a title=\"{{ app.sub.lang.string.gestures.discussion.posts.touchgestures }}\"
        data-ui=\"mention-gesture\" data-mode=\"disable\"
        class=\"app-touchGestures-icon active toggle-tooltip\" href=\"#\"></a>
</div>", "@addon:gestures/gesture.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Gestures\\Templates\\gesture.tpl");
    }
}
