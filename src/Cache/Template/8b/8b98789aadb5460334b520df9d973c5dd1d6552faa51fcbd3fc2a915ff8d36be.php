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

/* @ComponentBundle_Admin/Layout/user_quick_search.tpl */
class __TwigTemplate_61b5a0a7dc27e06efca3d8cd3b45ffbf5c718df04cf910cffddbeefa1d9a8586 extends Template
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
        echo "<div class=\"title icon users\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 1), "lang", [], "any", false, false, false, 1), "string", [], "any", false, false, false, 1), "container", [], "any", false, false, false, 1), "search", [], "any", false, false, false, 1), "users", [], "any", false, false, false, 1), "html", null, true);
        echo "</div>
<div class=\"users scrollable\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "users", [], "any", false, false, false, 3));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 4
            echo "    <div class=\"d-flex\">
      <a target=\"_blank\" class=\"d-flex align-items-center w-100\" href=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 5), "buildLink", [0 => "profile", 1 => ["username" => twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 5), "user_id" => twig_get_attribute($this->env, $this->source, $context["user"], "user_id", [], "any", false, false, false, 5)]], "method", false, false, false, 5), "html", null, true);
            echo "\">
        ";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 6), "user", [], "any", false, false, false, 6), "link", [], "any", false, false, false, 6), "setUser", [0 => twig_get_attribute($this->env, $this->source, $context["user"], "user_id", [], "any", false, false, false, 6)], "method", false, false, false, 6), "html", null, true);
            echo "
        ";
            // line 8
            echo "          ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 8), "user", [], "any", false, false, false, 8), "link", [], "any", false, false, false, 8), "getProfilePicture", [0 => false, 1 => "no-tooltip"], "method", false, false, false, 8);
            echo "
          <span class=\"ml-3\">";
            // line 9
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 9), "user", [], "any", false, false, false, 9), "link", [], "any", false, false, false, 9), "getName", [0 => false], "method", false, false, false, 9);
            echo "</span>
        ";
            // line 11
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 11), "user", [], "any", false, false, false, 11), "link", [], "any", false, false, false, 11), "unsetUser", [], "method", false, false, false, 11), "html", null, true);
            echo "
      </a>
      <a title=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 13), "lang", [], "any", false, false, false, 13), "parse", [], "any", false, false, false, 13), "Parse", [0 => "admin.index.quick_search.users.button", 1 => twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 13)], "method", false, false, false, 13), "html", null, true);
            echo "\" class=\"no-tooltip d-flex align-items-center ml-auto\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 13), "buildLink", [0 => "adminUsers", 1 => []], "method", false, false, false, 13), "html", null, true);
            echo "?editUser=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "user_id", [], "any", false, false, false, 13), "html", null, true);
            echo "\">
        <span class=\"icon edit\"></span>
      </a>
    </div>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 18
            echo "    <div class=\"no-result text-dark bg-white text-center pt-1 pb-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 18), "lang", [], "any", false, false, false, 18), "string", [], "any", false, false, false, 18), "container", [], "any", false, false, false, 18), "search", [], "any", false, false, false, 18), "no_results", [], "any", false, false, false, 18), "html", null, true);
            echo "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@ComponentBundle_Admin/Layout/user_quick_search.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 20,  88 => 18,  74 => 13,  68 => 11,  64 => 9,  59 => 8,  55 => 6,  51 => 5,  48 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"title icon users\">{{ app.sub.lang.string.container.search.users }}</div>
<div class=\"users scrollable\">
  {% for user in string.users %}
    <div class=\"d-flex\">
      <a target=\"_blank\" class=\"d-flex align-items-center w-100\" href=\"{{ app.phrase.buildLink('profile', {'username': user.username, 'user_id': user.user_id}) }}\">
        {{ app.sub.user.link.setUser(user.user_id) }}
        {% autoescape 'html' %}
          {{ app.sub.user.link.getProfilePicture(false, 'no-tooltip')|raw }}
          <span class=\"ml-3\">{{ app.sub.user.link.getName(false)|raw }}</span>
        {% endautoescape %}
        {{ app.sub.user.link.unsetUser() }}
      </a>
      <a title=\"{{ app.sub.lang.parse.Parse('admin.index.quick_search.users.button', user.username) }}\" class=\"no-tooltip d-flex align-items-center ml-auto\" href=\"{{ app.phrase.buildLink('adminUsers', {}) }}?editUser={{ user.user_id }}\">
        <span class=\"icon edit\"></span>
      </a>
    </div>
  {% else %}
    <div class=\"no-result text-dark bg-white text-center pt-1 pb-2\">{{ app.sub.lang.string.container.search.no_results }}</div>
  {% endfor %}
</div>", "@ComponentBundle_Admin/Layout/user_quick_search.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Mention\\Templates\\Admin\\Layout\\user_quick_search.tpl");
    }
}
