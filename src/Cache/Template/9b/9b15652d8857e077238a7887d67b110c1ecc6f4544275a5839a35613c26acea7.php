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

/* navbar.tpl */
class __TwigTemplate_68c6901d4345b774a446cef19a7a782063f8a39a436196d6115e8c70d6c09eba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-white shadow-sm ";
        $this->displayBlock('navbar', $context, $blocks);
        echo "\">
    <div class=\"container\">
        <a class=\"navbar-brand text-dark\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 3), "buildLink", [0 => "indexAction", 1 => []], "method", false, false, false, 3), "html", null, true);
        echo "\">
            ";
        // line 4
        $this->loadTemplate("logo.tpl", "navbar.tpl", 4)->display($context);
        // line 5
        echo "        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 6), "lang", [], "any", false, false, false, 6), "buttons", [], "any", false, false, false, 6), "navigation", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto font-weight-bold\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 12), "buildLink", [0 => "indexAction", 1 => []], "method", false, false, false, 12), "html", null, true);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 12), "lang", [], "any", false, false, false, 12), "string", [], "any", false, false, false, 12), "container", [], "any", false, false, false, 12), "nav", [], "any", false, false, false, 12), "home", [], "any", false, false, false, 12);
        echo " <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 15), "lang", [], "any", false, false, false, 15), "string", [], "any", false, false, false, 15), "container", [], "any", false, false, false, 15), "nav", [], "any", false, false, false, 15), "help", [], "any", false, false, false, 15), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "</a>
                    <div class=\"dropdown-menu custom-menu custom-menu-xs shadow animate fadeIn\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 17), "buildLink", [0 => "pages", 1 => ["section" => "faq"]], "method", false, false, false, 17), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 17), "lang", [], "any", false, false, false, 17), "string", [], "any", false, false, false, 17), "container", [], "any", false, false, false, 17), "nav", [], "any", false, false, false, 17), "help", [], "any", false, false, false, 17), "faq", [], "any", false, false, false, 17), "html", null, true);
        echo "</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 18), "buildLink", [0 => "pages", 1 => ["section" => "privacy"]], "method", false, false, false, 18), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 18), "lang", [], "any", false, false, false, 18), "string", [], "any", false, false, false, 18), "container", [], "any", false, false, false, 18), "nav", [], "any", false, false, false, 18), "help", [], "any", false, false, false, 18), "privacy", [], "any", false, false, false, 18), "html", null, true);
        echo "</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 19), "buildLink", [0 => "pages", 1 => ["section" => "contact"]], "method", false, false, false, 19), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 19), "lang", [], "any", false, false, false, 19), "string", [], "any", false, false, false, 19), "container", [], "any", false, false, false, 19), "nav", [], "any", false, false, false, 19), "help", [], "any", false, false, false, 19), "contact", [], "any", false, false, false, 19), "html", null, true);
        echo "</a>
                    </div>
                </li>
            </ul>
            <div class=\"search-container position-relative\">
                <div class=\"form-inline my-0\">
                    <div class=\"input-group has-feedback has-clear\">
                        <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 26), "lang", [], "any", false, false, false, 26), "string", [], "any", false, false, false, 26), "container", [], "any", false, false, false, 26), "search", [], "any", false, false, false, 26), "text", [], "any", false, false, false, 26), "html", null, true);
        echo "\" aria-label=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 26), "lang", [], "any", false, false, false, 26), "string", [], "any", false, false, false, 26), "container", [], "any", false, false, false, 26), "search", [], "any", false, false, false, 26), "text", [], "any", false, false, false, 26), "html", null, true);
        echo "\">
                        <i class=\"fas fa-search\"></i>
                        <span title=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 28), "lang", [], "any", false, false, false, 28), "string", [], "any", false, false, false, 28), "container", [], "any", false, false, false, 28), "buttons", [], "any", false, false, false, 28), "clear", [], "any", false, false, false, 28), "html", null, true);
        echo "\" class=\"form-control-clear fas fa-times form-control-feedback d-none\"></span>
                    </div>
                </div>
                <div class=\"search-results shadow d-none\">
                    <span></span>
                    <div class=\"load-area bg-white pt-5 pb-5 d-block\">
                        <div class=\"post-loader-spin d-block\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>";
    }

    // line 1
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "navbar.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 1,  106 => 28,  99 => 26,  87 => 19,  81 => 18,  75 => 17,  70 => 15,  62 => 12,  53 => 6,  50 => 5,  48 => 4,  44 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-white shadow-sm {% block navbar %}{% endblock %}\">
    <div class=\"container\">
        <a class=\"navbar-brand text-dark\" href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">
            {% include 'logo.tpl' %}
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"{{ app.sub.lang.buttons.navigation }}\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto font-weight-bold\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.sub.lang.string.container.nav.home|raw }} <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ app.sub.lang.string.container.nav.help.title }}</a>
                    <div class=\"dropdown-menu custom-menu custom-menu-xs shadow animate fadeIn\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"{{ app.phrase.buildLink('pages', {'section': 'faq'}) }}\">{{ app.sub.lang.string.container.nav.help.faq }}</a>
                        <a class=\"dropdown-item\" href=\"{{ app.phrase.buildLink('pages', {'section': 'privacy'}) }}\">{{ app.sub.lang.string.container.nav.help.privacy }}</a>
                        <a class=\"dropdown-item\" href=\"{{ app.phrase.buildLink('pages', {'section': 'contact'}) }}\">{{ app.sub.lang.string.container.nav.help.contact }}</a>
                    </div>
                </li>
            </ul>
            <div class=\"search-container position-relative\">
                <div class=\"form-inline my-0\">
                    <div class=\"input-group has-feedback has-clear\">
                        <input class=\"form-control\" type=\"text\" placeholder=\"{{ app.sub.lang.string.container.search.text }}\" aria-label=\"{{ app.sub.lang.string.container.search.text }}\">
                        <i class=\"fas fa-search\"></i>
                        <span title=\"{{ app.sub.lang.string.container.buttons.clear }}\" class=\"form-control-clear fas fa-times form-control-feedback d-none\"></span>
                    </div>
                </div>
                <div class=\"search-results shadow d-none\">
                    <span></span>
                    <div class=\"load-area bg-white pt-5 pb-5 d-block\">
                        <div class=\"post-loader-spin d-block\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>", "navbar.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Layout\\navbar.tpl");
    }
}
