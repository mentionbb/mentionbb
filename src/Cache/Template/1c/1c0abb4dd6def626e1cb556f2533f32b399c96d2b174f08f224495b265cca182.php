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

/* discussion_posts.tpl */
class __TwigTemplate_c8a47467f3cf65087387664e7b8e3bd71e00995f458242183b69a1f9e0423790 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macro.posts.tpl", "discussion_posts.tpl", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "pagination", [], "any", true, true, false, 3)) {
            // line 4
            echo "\t";
            $context["page_id"] = twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "current_page", [], "any", false, false, false, 4);
            // line 5
            echo "\t";
            $context["wherePage"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "pagination", [], "any", false, false, false, 5), "where", [], "any", false, false, false, 5);
        } else {
            // line 7
            echo "\t";
            $context["page_id"] = 1;
            // line 8
            echo "\t";
            $context["wherePage"] = 0;
        }
        // line 10
        echo "
";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "per_page", [], "any", true, true, false, 11)) {
            // line 12
            echo "\t";
            $context["per_page"] = twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "per_page", [], "any", false, false, false, 12);
        } else {
            // line 14
            echo "\t";
            $context["per_page"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 14), "per_page", [], "any", false, false, false, 14);
        }
        // line 16
        echo "
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 17), "getPostByDiscussionId", [0 => ($context["wherePage"] ?? null), 1 => ($context["per_page"] ?? null), 2 => twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "order", [], "any", false, false, false, 17)], "method", false, false, false, 17));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 18
            echo "\t";
            if ( !(twig_get_attribute($this->env, $this->source, $context["item"], "post_id", [], "any", false, false, false, 18) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "discussion", [], "any", false, false, false, 18), "firstpost_id", [], "any", false, false, false, 18))) {
                // line 19
                echo "\t\t";
                echo twig_call_macro($macros["macros"], "macro_posts", [$context["item"], $context["loop"], false, ($context["string"] ?? null)], 19, $context, $this->getSourceContext());
                echo "
\t";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
";
        // line 23
        if (0 === twig_compare(($context["page_id"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 23), "getLastPage", [], "method", false, false, false, 23))) {
        } else {
            // line 25
            echo "    <div class=\"d-none\" data-feature=\"hidden-paging\" data-current-page=\"";
            echo twig_escape_filter($this->env, ($context["page_id"] ?? null), "html", null, true);
            echo "\" data-next-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 25), "post", [], "any", false, false, false, 25), "pagination", [], "any", false, false, false, 25), "encodePageData", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 25), "per_page", [], "any", false, false, false, 25), 1 => (($context["page_id"] ?? null) + 1)], "method", false, false, false, 25), "html", null, true);
            echo "\"></div>
    <div class=\"text-center\">
\t\t<button type=\"button\" class=\"btn btn-app-load-more mb-3 d-none\" data-ui=\"load-more-dposts-mobile\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 27), "lang", [], "any", false, false, false, 27), "string", [], "any", false, false, false, 27), "container", [], "any", false, false, false, 27), "buttons", [], "any", false, false, false, 27), "more", [], "any", false, false, false, 27), "html", null, true);
            echo "</button>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "discussion_posts.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 27,  118 => 25,  115 => 23,  112 => 22,  94 => 19,  91 => 18,  74 => 17,  71 => 16,  67 => 14,  63 => 12,  61 => 11,  58 => 10,  54 => 8,  51 => 7,  47 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import 'macro.posts.tpl' as macros %}

{% if string.pagination is defined %}
\t{% set page_id = string.current_page %}
\t{% set wherePage = string.pagination.where %}
{% else %}
\t{% set page_id = 1 %}
\t{% set wherePage = 0 %}
{% endif %}

{% if string.per_page is defined %}
\t{% set per_page = string.per_page %}
{% else %}
\t{% set per_page = app.settings.per_page %}
{% endif %}

{% for key, item in string.post.getPostByDiscussionId(wherePage, per_page, string.order) %}
\t{% if not item.post_id is same as(string.discussion.firstpost_id) %}
\t\t{{ macros.posts(item, loop, false, string) }}
\t{% endif %}
{% endfor %}

{% if page_id == string.post.getLastPage() %}
{% else %}
    <div class=\"d-none\" data-feature=\"hidden-paging\" data-current-page=\"{{ page_id }}\" data-next-id=\"{{ app.sub.post.pagination.encodePageData(app.settings.per_page, (page_id + 1)) }}\"></div>
    <div class=\"text-center\">
\t\t<button type=\"button\" class=\"btn btn-app-load-more mb-3 d-none\" data-ui=\"load-more-dposts-mobile\">{{ app.sub.lang.string.container.buttons.more }}</button>
\t</div>
{% endif %}", "discussion_posts.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Discussion\\discussion_posts.tpl");
    }
}
