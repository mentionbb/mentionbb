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

/* logo.tpl */
class __TwigTemplate_edbea764c1f33bac7d879c7ae181aa1639a724395d2169b888e5ead080dfaa66 extends Template
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
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 1), "site_logo", [], "any", false, false, false, 1))) {
            // line 2
            echo "\t<span>{Mention}</span>
";
        } else {
            // line 4
            echo "\t";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "cookie", [], "any", false, true, false, 4), "night_mode", [], "any", true, true, false, 4)) {
                // line 5
                echo "\t\t<img title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 5), "site_title", [], "any", false, false, false, 5), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 5), "site_title", [], "any", false, false, false, 5), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 5), "html", null, true);
                echo "/images/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 5), "site_logo", [], "any", false, false, false, 5), "html", null, true);
                echo "\" />
\t";
            } else {
                // line 7
                echo "\t\t<img title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 7), "site_title", [], "any", false, false, false, 7), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 7), "site_title", [], "any", false, false, false, 7), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 7), "html", null, true);
                echo "/images/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 7), "site_logo_night", [], "any", false, false, false, 7), "html", null, true);
                echo "\" />
\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "logo.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  46 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if app.settings.site_logo is empty %}
\t<span>{Mention}</span>
{% else %}
\t{% if not app.cookie.night_mode is defined %}
\t\t<img title=\"{{ app.settings.site_title }}\" alt=\"{{ app.settings.site_title }}\" src=\"{{ app.public_dir }}/images/{{ app.settings.site_logo }}\" />
\t{% else %}
\t\t<img title=\"{{ app.settings.site_title }}\" alt=\"{{ app.settings.site_title }}\" src=\"{{ app.public_dir }}/images/{{ app.settings.site_logo_night }}\" />
\t{% endif %}
{% endif %}", "logo.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Layout\\logo.tpl");
    }
}
