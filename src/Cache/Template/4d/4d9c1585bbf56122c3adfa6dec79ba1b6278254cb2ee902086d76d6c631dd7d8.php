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

/* social_login_buttons.tpl */
class __TwigTemplate_6aa6ce8d97a146127ed546625c978d241170d7bc80456504b1ff9c9f680a9c11 extends Template
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
        echo "<div class=\"social-login text-center\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 2), "auth", [], "any", false, false, false, 2), "social", [], "any", false, false, false, 2), "getSites", [], "method", false, false, false, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "\t    ";
            if ( !(twig_get_attribute($this->env, $this->source, $context["item"], "api_keys", [], "any", false, false, false, 3) === "")) {
                // line 4
                echo "\t\t    <button data-init=\"js-Mention_ExternalLogin\" data-callback=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 4), "html", null, true);
                echo "\" class=\"btn btn-app-social no-anim-ui icon ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 4), "html", null, true);
                echo " mr-2 mt-2\" type=\"button\">
\t\t\t    <i class=\"fab fa-";
                // line 5
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 5), "html", null, true);
                echo "\"></i>
\t\t\t    ";
                // line 6
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 6), "html", null, true);
                echo "
\t\t    </button>
\t\t";
            }
            // line 9
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "social_login_buttons.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 10,  64 => 9,  58 => 6,  54 => 5,  47 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"social-login text-center\">
\t{% for item in app.string.auth.social.getSites() %}
\t    {% if item.api_keys is not same as('') %}
\t\t    <button data-init=\"js-Mention_ExternalLogin\" data-callback=\"{{ item.name }}\" class=\"btn btn-app-social no-anim-ui icon {{ item.name }} mr-2 mt-2\" type=\"button\">
\t\t\t    <i class=\"fab fa-{{ item.name }}\"></i>
\t\t\t    {{ item.title }}
\t\t    </button>
\t\t{% endif %}
\t{% endfor %}
</div>", "social_login_buttons.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Layout\\social_login_buttons.tpl");
    }
}
