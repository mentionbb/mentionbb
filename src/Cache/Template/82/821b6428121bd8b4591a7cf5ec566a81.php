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

/* profile_posts.tpl */
class __TwigTemplate_f080f424aac32cafaab8a337c91c0bc1 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macro.profile_posts.tpl", "profile_posts.tpl", 1)->unwrap();
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 11), "setUserId", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 11), "user_id", [], "any", false, false, false, 11)], "method", false, false, false, 11), "html", null, true);
        echo "

";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "groupItems", [], "any", true, true, false, 13)) {
            // line 14
            echo "\t";
            $context["groupItems"] = twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "groupItems", [], "any", false, false, false, 14);
            // line 15
            echo "\t";
            if (twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "groupItems", [], "any", false, false, false, 15)) {
                // line 16
                echo "\t\t";
                $context["is_firstpost"] = true;
                // line 17
                echo "\t";
            } else {
                // line 18
                echo "\t\t";
                $context["is_firstpost"] = false;
                // line 19
                echo "\t";
            }
            echo "\t\t
";
        } else {
            // line 21
            echo "\t";
            $context["groupItems"] = false;
            // line 22
            echo "\t";
            $context["is_firstpost"] = false;
        }
        // line 24
        echo "
";
        // line 25
        if (($context["is_firstpost"] ?? null)) {
            // line 26
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 26), "isDiscussion", [], "method", false, false, false, 26), "html", null, true);
            echo "
";
        }
        // line 28
        echo "
";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 29), "getPostList", [0 => ($context["wherePage"] ?? null), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 29), "per_page", [], "any", false, false, false, 29), 2 => twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "order", [], "any", false, false, false, 29), 3 => null, 4 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 29), "user_id", [], "any", false, false, false, 29), 5 => ($context["groupItems"] ?? null), 6 => ($context["is_firstpost"] ?? null), 7 => null], "method", false, false, false, 29));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 30
            echo "\t";
            echo twig_call_macro($macros["macros"], "macro_posts", [$context["item"], ($context["string"] ?? null), ($context["is_firstpost"] ?? null)], 30, $context, $this->getSourceContext());
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "\t";
            if ( !twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "keyword", [], "any", true, true, false, 32)) {
                // line 33
                echo "\t    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 33), "loggedIn", [], "method", false, false, false, 33)) {
                    // line 34
                    echo "\t\t    <div class=\"no-post d-block\">
\t\t\t    <span>";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 35), "lang", [], "any", false, false, false, 35), "string", [], "any", false, false, false, 35), "container", [], "any", false, false, false, 35), "no_post", [], "any", false, false, false, 35), "none", [], "any", false, false, false, 35), "html", null, true);
                    echo "</span>
\t\t    </div>
\t    ";
                } else {
                    // line 38
                    echo "\t\t    <div class=\"no-post d-block\">
\t\t\t    <span>";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 39), "lang", [], "any", false, false, false, 39), "string", [], "any", false, false, false, 39), "container", [], "any", false, false, false, 39), "no_post", [], "any", false, false, false, 39), "none", [], "any", false, false, false, 39), "html", null, true);
                    echo "</span>
\t\t    </div>
\t    ";
                }
                // line 42
                echo "\t";
            } else {
                // line 43
                echo "\t\t<div class=\"no-post d-block\">
\t\t\t<span>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 44), "lang", [], "any", false, false, false, 44), "string", [], "any", false, false, false, 44), "container", [], "any", false, false, false, 44), "search", [], "any", false, false, false, 44), "no_results", [], "any", false, false, false, 44), "html", null, true);
                echo "</span>
\t\t</div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        if (((($context["page_id"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 48), "getLastPage", [], "method", false, false, false, 48)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 48), "getLastPage", [], "method", false, false, false, 48) == 0))) {
        } else {
            // line 50
            echo "\t<div class=\"text-center\">
\t\t<button type=\"button\" class=\"btn btn-app-load-more mb-3\" data-current-page=\"";
            // line 51
            echo twig_escape_filter($this->env, ($context["page_id"] ?? null), "html", null, true);
            echo "\" data-next-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 51), "post", [], "any", false, false, false, 51), "pagination", [], "any", false, false, false, 51), "encodePageData", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 51), "per_page", [], "any", false, false, false, 51), 1 => (($context["page_id"] ?? null) + 1)], "method", false, false, false, 51), "html", null, true);
            echo "\" data-ui=\"load-more-profile-posts\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 51), "lang", [], "any", false, false, false, 51), "string", [], "any", false, false, false, 51), "container", [], "any", false, false, false, 51), "buttons", [], "any", false, false, false, 51), "more", [], "any", false, false, false, 51), "html", null, true);
            echo "</button>
\t</div>
";
        }
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 54), "unsetUserId", [], "method", false, false, false, 54), "html", null, true);
    }

    public function getTemplateName()
    {
        return "profile_posts.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 54,  169 => 51,  166 => 50,  163 => 48,  153 => 44,  150 => 43,  147 => 42,  141 => 39,  138 => 38,  132 => 35,  129 => 34,  126 => 33,  123 => 32,  115 => 30,  110 => 29,  107 => 28,  101 => 26,  99 => 25,  96 => 24,  92 => 22,  89 => 21,  83 => 19,  80 => 18,  77 => 17,  74 => 16,  71 => 15,  68 => 14,  66 => 13,  61 => 11,  58 => 10,  54 => 8,  51 => 7,  47 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import 'macro.profile_posts.tpl' as macros %}

{% if string.pagination is defined %}
\t{% set page_id = string.current_page %}
\t{% set wherePage = string.pagination.where %}
{% else %}
\t{% set page_id = 1 %}
\t{% set wherePage = 0 %}
{% endif %}

{{ string.post.setUserId(string.user.user_id) }}

{% if string.groupItems is defined %}
\t{% set groupItems = string.groupItems %}
\t{% if string.groupItems %}
\t\t{% set is_firstpost = true %}
\t{% else %}
\t\t{% set is_firstpost = false %}
\t{% endif %}\t\t
{% else %}
\t{% set groupItems = false %}
\t{% set is_firstpost = false %}
{% endif %}

{% if is_firstpost %}
    {{ string.post.isDiscussion() }}
{% endif %}

{% for item in string.post.getPostList(wherePage, app.settings.per_page, string.order, null, string.user.user_id, groupItems, is_firstpost, null) %}
\t{{ macros.posts(item, string, is_firstpost) }}
{% else %}
\t{% if not string.keyword is defined %}
\t    {% if app.user.loggedIn() %}
\t\t    <div class=\"no-post d-block\">
\t\t\t    <span>{{ app.sub.lang.string.container.no_post.none }}</span>
\t\t    </div>
\t    {% else %}
\t\t    <div class=\"no-post d-block\">
\t\t\t    <span>{{ app.sub.lang.string.container.no_post.none }}</span>
\t\t    </div>
\t    {% endif %}
\t{% else %}
\t\t<div class=\"no-post d-block\">
\t\t\t<span>{{ app.sub.lang.string.container.search.no_results }}</span>
\t\t</div>
    {% endif %}
{% endfor %}
{% if page_id == string.post.getLastPage() or string.post.getLastPage() == 0 %}
{% else %}
\t<div class=\"text-center\">
\t\t<button type=\"button\" class=\"btn btn-app-load-more mb-3\" data-current-page=\"{{ page_id }}\" data-next-id=\"{{ app.sub.post.pagination.encodePageData(app.settings.per_page, (page_id + 1)) }}\" data-ui=\"load-more-profile-posts\">{{ app.sub.lang.string.container.buttons.more }}</button>
\t</div>
{% endif %}
{{ string.post.unsetUserId() }}", "profile_posts.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\User\\profile_posts.tpl");
    }
}
