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

/* quick_search.tpl */
class __TwigTemplate_b24d759422f52651bf1bf8465e081479f08d7e07815caa85f26e6e0de3cd1bea extends Template
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
        echo "<div class=\"title icon discussions\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 1), "lang", [], "any", false, false, false, 1), "string", [], "any", false, false, false, 1), "container", [], "any", false, false, false, 1), "search", [], "any", false, false, false, 1), "discussions", [], "any", false, false, false, 1), "html", null, true);
        echo "</div>
<div class=\"discussions scrollable\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "discussions", [], "any", false, false, false, 3));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "    <a class=\"d-flex\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 4), "buildLink", [0 => "discussion", 1 => ["discussion_id" => twig_get_attribute($this->env, $this->source, $context["item"], "discussion_id", [], "any", false, false, false, 4), "discussion_title" => twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 4)]], "method", false, false, false, 4), "html", null, true);
            echo "\">
      <span>";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 5), "html", null, true);
            echo "</span>
    </a>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 8
            echo "    <div class=\"no-result text-dark bg-white text-center pt-1 pb-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 8), "lang", [], "any", false, false, false, 8), "string", [], "any", false, false, false, 8), "container", [], "any", false, false, false, 8), "search", [], "any", false, false, false, 8), "no_results", [], "any", false, false, false, 8), "html", null, true);
            echo "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</div>
<a class=\"more-search d-flex font-weight-bold bg-white\" href=\"#\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 11), "lang", [], "any", false, false, false, 11), "parse", [], "any", false, false, false, 11), "Parse", [0 => "container.search.discussions_containing_word", 1 => twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "keyword", [], "any", false, false, false, 11)], "method", false, false, false, 11), "html", null, true);
        echo "</a>
<div class=\"title icon users\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 12), "lang", [], "any", false, false, false, 12), "string", [], "any", false, false, false, 12), "container", [], "any", false, false, false, 12), "search", [], "any", false, false, false, 12), "users", [], "any", false, false, false, 12), "html", null, true);
        echo "</div>
<div class=\"users scrollable\">
  ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "users", [], "any", false, false, false, 14));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 15
            echo "    <div class=\"d-flex\">
      <a class=\"d-flex align-items-center w-100\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 16), "buildLink", [0 => "profile", 1 => ["username" => twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 16), "user_id" => twig_get_attribute($this->env, $this->source, $context["user"], "user_id", [], "any", false, false, false, 16)]], "method", false, false, false, 16), "html", null, true);
            echo "\">
        ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 17), "user", [], "any", false, false, false, 17), "link", [], "any", false, false, false, 17), "setUser", [0 => twig_get_attribute($this->env, $this->source, $context["user"], "user_id", [], "any", false, false, false, 17)], "method", false, false, false, 17), "html", null, true);
            echo "
        ";
            // line 19
            echo "          ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 19), "user", [], "any", false, false, false, 19), "link", [], "any", false, false, false, 19), "getProfilePicture", [0 => false, 1 => "no-tooltip"], "method", false, false, false, 19);
            echo "
          <span class=\"ml-3\">";
            // line 20
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 20), "user", [], "any", false, false, false, 20), "link", [], "any", false, false, false, 20), "getName", [0 => false], "method", false, false, false, 20);
            echo "</span>
        ";
            // line 22
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 22), "user", [], "any", false, false, false, 22), "link", [], "any", false, false, false, 22), "unsetUser", [], "method", false, false, false, 22), "html", null, true);
            echo "
      </a>
      ";
            // line 24
            if ( !(twig_get_attribute($this->env, $this->source, $context["user"], "user_id", [], "any", false, false, false, 24) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 24), "user_id", [], "any", false, false, false, 24))) {
                // line 25
                echo "        <a title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 25), "lang", [], "any", false, false, false, 25), "parse", [], "any", false, false, false, 25), "Parse", [0 => "container.search.quick_message_text", 1 => twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 25)], "method", false, false, false, 25), "html", null, true);
                echo "\" class=\"no-tooltip d-flex align-items-center ml-auto\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 25), "buildLink", [0 => "messages", 1 => ["section" => "new", "id" => twig_get_attribute($this->env, $this->source, $context["user"], "user_id", [], "any", false, false, false, 25)]], "method", false, false, false, 25), "html", null, true);
                echo "\">
          <span class=\"icon message\"></span>
        </a>
      ";
            }
            // line 29
            echo "    </div>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "    <div class=\"no-result text-dark bg-white text-center pt-1 pb-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 31), "lang", [], "any", false, false, false, 31), "string", [], "any", false, false, false, 31), "container", [], "any", false, false, false, 31), "search", [], "any", false, false, false, 31), "no_results", [], "any", false, false, false, 31), "html", null, true);
            echo "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</div>
<a class=\"more-search d-flex font-weight-bold bg-white\" href=\"#\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 34), "lang", [], "any", false, false, false, 34), "parse", [], "any", false, false, false, 34), "Parse", [0 => "container.search.users_containing_word", 1 => twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "keyword", [], "any", false, false, false, 34)], "method", false, false, false, 34), "html", null, true);
        echo "</a>
<div class=\"advanced-search text-center bg-white d-flex justify-content-center\">
  <a class=\"bg-white text-dark font-weight-bold border-0 p-1\" href=\"#\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 36), "lang", [], "any", false, false, false, 36), "string", [], "any", false, false, false, 36), "container", [], "any", false, false, false, 36), "search", [], "any", false, false, false, 36), "advanced_search", [], "any", false, false, false, 36), "html", null, true);
        echo "</a>
</div>";
    }

    public function getTemplateName()
    {
        return "quick_search.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 36,  143 => 34,  140 => 33,  131 => 31,  125 => 29,  115 => 25,  113 => 24,  107 => 22,  103 => 20,  98 => 19,  94 => 17,  90 => 16,  87 => 15,  82 => 14,  77 => 12,  73 => 11,  70 => 10,  61 => 8,  53 => 5,  48 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"title icon discussions\">{{ app.sub.lang.string.container.search.discussions }}</div>
<div class=\"discussions scrollable\">
  {% for item in string.discussions %}
    <a class=\"d-flex\" href=\"{{ app.phrase.buildLink('discussion', {'discussion_id': item.discussion_id, 'discussion_title': item.title}) }}\">
      <span>{{ item.title }}</span>
    </a>
  {% else %}
    <div class=\"no-result text-dark bg-white text-center pt-1 pb-2\">{{ app.sub.lang.string.container.search.no_results }}</div>
  {% endfor %}
</div>
<a class=\"more-search d-flex font-weight-bold bg-white\" href=\"#\">{{ app.sub.lang.parse.Parse('container.search.discussions_containing_word', string.keyword) }}</a>
<div class=\"title icon users\">{{ app.sub.lang.string.container.search.users }}</div>
<div class=\"users scrollable\">
  {% for user in string.users %}
    <div class=\"d-flex\">
      <a class=\"d-flex align-items-center w-100\" href=\"{{ app.phrase.buildLink('profile', {'username': user.username, 'user_id': user.user_id}) }}\">
        {{ app.sub.user.link.setUser(user.user_id) }}
        {% autoescape 'html' %}
          {{ app.sub.user.link.getProfilePicture(false, 'no-tooltip')|raw }}
          <span class=\"ml-3\">{{ app.sub.user.link.getName(false)|raw }}</span>
        {% endautoescape %}
        {{ app.sub.user.link.unsetUser() }}
      </a>
      {% if user.user_id is not same as(app.visitor.user_id) %}
        <a title=\"{{ app.sub.lang.parse.Parse('container.search.quick_message_text', user.username) }}\" class=\"no-tooltip d-flex align-items-center ml-auto\" href=\"{{ app.phrase.buildLink('messages', {'section': 'new', 'id': user.user_id}) }}\">
          <span class=\"icon message\"></span>
        </a>
      {% endif %}
    </div>
  {% else %}
    <div class=\"no-result text-dark bg-white text-center pt-1 pb-2\">{{ app.sub.lang.string.container.search.no_results }}</div>
  {% endfor %}
</div>
<a class=\"more-search d-flex font-weight-bold bg-white\" href=\"#\">{{ app.sub.lang.parse.Parse('container.search.users_containing_word', string.keyword) }}</a>
<div class=\"advanced-search text-center bg-white d-flex justify-content-center\">
  <a class=\"bg-white text-dark font-weight-bold border-0 p-1\" href=\"#\">{{ app.sub.lang.string.container.search.advanced_search }}</a>
</div>", "quick_search.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Layout\\quick_search.tpl");
    }
}
