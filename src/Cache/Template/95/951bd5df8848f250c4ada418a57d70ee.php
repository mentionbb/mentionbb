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

/* usermenu_messages.tpl */
class __TwigTemplate_1ce4e580865a1643c2bdb618718f1f25 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 1), "messages", [], "any", false, false, false, 1), "getMessagesByUserId", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 1), "user_id", [], "any", false, false, false, 1), 1 => 0], "method", false, false, false, 1));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "\t";
            $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macro.messages.tpl", "usermenu_messages.tpl", 2)->unwrap();
            // line 3
            echo "\t";
            echo twig_call_macro($macros["macros"], "macro_messages", [$context["item"]], 3, $context, $this->getSourceContext());
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 5
            echo "\t<div class=\"notification no-records\">
\t\t<div class=\"text text-center\">
\t\t\t<span class=\"font-weight-normal\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 7), "lang", [], "any", false, false, false, 7), "string", [], "any", false, false, false, 7), "container", [], "any", false, false, false, 7), "message", [], "any", false, false, false, 7), "none", [], "any", false, false, false, 7), "html", null, true);
            echo "</span>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "usermenu_messages.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  53 => 5,  45 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for item in app.string.messages.getMessagesByUserId(app.visitor.user_id, 0) %}
\t{% import 'macro.messages.tpl' as macros %}
\t{{ macros.messages(item) }}
{% else %}
\t<div class=\"notification no-records\">
\t\t<div class=\"text text-center\">
\t\t\t<span class=\"font-weight-normal\">{{ app.sub.lang.string.container.message.none }}</span>
\t\t</div>
\t</div>
{% endfor %}", "usermenu_messages.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Layout\\usermenu_messages.tpl");
    }
}
