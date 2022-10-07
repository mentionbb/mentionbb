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

/* index_posts.tpl */
class __TwigTemplate_499541896993b1f97ab5c0a1474ad7fb extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macro.index_posts.tpl", "index_posts.tpl", 1)->unwrap();
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 11), "setForumId", [0 => twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "forum_id", [], "any", false, false, false, 11)], "method", false, false, false, 11), "html", null, true);
        echo "

";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "keyword", [], "any", true, true, false, 13)) {
            // line 14
            echo "\t<div data-search=\"true\">
\t    <h5 class=\"mb-4\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 15), "lang", [], "any", false, false, false, 15), "string", [], "any", false, false, false, 15), "index", [], "any", false, false, false, 15), "search", [], "any", false, false, false, 15), "results", [], "any", false, false, false, 15), "html", null, true);
            echo "</h5>
    </div>
";
        }
        // line 18
        echo "
";
        // line 19
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "cookie", [], "any", false, true, false, 19), "collapse_node_pinned", [], "any", true, true, false, 19)) {
            // line 20
            echo "\t";
            $context["pinned_is_expanded"] = "expanded";
        } else {
            // line 22
            echo "    ";
            $context["pinned_link_expanded"] = "expanded";
            echo "\t\t
";
        }
        // line 24
        echo "
";
        // line 25
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "cookie", [], "any", false, true, false, 25), "collapse_node_all", [], "any", true, true, false, 25)) {
            // line 26
            echo "\t";
            $context["all_is_expanded"] = "expanded";
        } else {
            // line 28
            echo "    ";
            $context["all_link_expanded"] = "expanded";
            echo "\t\t
";
        }
        // line 30
        echo "
";
        // line 31
        if ( !twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "pagination", [], "any", true, true, false, 31)) {
            // line 32
            echo "\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "discussion", [], "any", false, false, false, 32), "isAnySticky", [0 => twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "forum_id", [], "any", false, false, false, 32)], "method", false, false, false, 32)) {
                // line 33
                echo "\t\t<div class=\"js-appExpandNodes rounded shadow-sm mb-3\" data-ui=\"expand-node\" data-target=\"pinned\">
\t\t\t<a class=\"";
                // line 34
                echo twig_escape_filter($this->env, ($context["pinned_link_expanded"] ?? null), "html", null, true);
                echo "\" href=\"#\" role=\"button\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 34), "lang", [], "any", false, false, false, 34), "string", [], "any", false, false, false, 34), "index", [], "any", false, false, false, 34), "posts", [], "any", false, false, false, 34), "pinned", [], "any", false, false, false, 34), "html", null, true);
                echo "</a>
\t\t</div>
\t\t<div class=\"appNodeContainer pinned ";
                // line 36
                echo twig_escape_filter($this->env, ($context["pinned_is_expanded"] ?? null), "html", null, true);
                echo "\">
\t\t\t";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 37), "getPostList", [0 => ($context["wherePage"] ?? null), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 37), "per_page", [], "any", false, false, false, 37), 2 => twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "order", [], "any", false, false, false, 37), 3 => twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "keyword", [], "any", false, false, false, 37), 4 => null, 5 => true, 6 => false, 7 => true], "method", false, false, false, 37));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 38
                    echo "\t\t\t\t";
                    echo twig_call_macro($macros["macros"], "macro_posts", [$context["item"], ($context["string"] ?? null)], 38, $context, $this->getSourceContext());
                    echo "
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "\t\t\t<hr>
\t\t</div>
\t";
            }
        }
        // line 44
        if ( !twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "pagination", [], "any", true, true, false, 44)) {
            // line 45
            echo "<div class=\"js-appExpandNodes rounded shadow-sm mt-2 mt-lg-0 mb-3\" data-ui=\"expand-node\" data-target=\"all\">
\t<a class=\"";
            // line 46
            echo twig_escape_filter($this->env, ($context["all_link_expanded"] ?? null), "html", null, true);
            echo "\" href=\"#\" role=\"button\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 46), "lang", [], "any", false, false, false, 46), "string", [], "any", false, false, false, 46), "index", [], "any", false, false, false, 46), "posts", [], "any", false, false, false, 46), "newest", [], "any", false, false, false, 46), "html", null, true);
            echo "</a>
</div>
<div class=\"appNodeContainer all ";
            // line 48
            echo twig_escape_filter($this->env, ($context["all_is_expanded"] ?? null), "html", null, true);
            echo "\">
";
        }
        // line 50
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 50), "getPostList", [0 => ($context["wherePage"] ?? null), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 50), "per_page", [], "any", false, false, false, 50), 2 => twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "order", [], "any", false, false, false, 50), 3 => twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "keyword", [], "any", false, false, false, 50), 4 => null, 5 => true, 6 => false, 7 => false], "method", false, false, false, 50));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 51
            echo "\t\t";
            echo twig_call_macro($macros["macros"], "macro_posts", [$context["item"], ($context["string"] ?? null)], 51, $context, $this->getSourceContext());
            echo "
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "\t\t";
            if ( !twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "keyword", [], "any", true, true, false, 53)) {
                // line 54
                echo "\t\t\t";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 54), "loggedIn", [], "method", false, false, false, 54)) {
                    // line 55
                    echo "\t\t\t\t<div class=\"no-post d-block\">
\t\t\t\t\t<span>";
                    // line 56
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 56), "lang", [], "any", false, false, false, 56), "string", [], "any", false, false, false, 56), "container", [], "any", false, false, false, 56), "no_post", [], "any", false, false, false, 56), "none", [], "any", false, false, false, 56), "html", null, true);
                    echo "</span>
\t\t\t\t\t<p data-ui=\"show-editor\">";
                    // line 57
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 57), "lang", [], "any", false, false, false, 57), "string", [], "any", false, false, false, 57), "container", [], "any", false, false, false, 57), "no_post", [], "any", false, false, false, 57), "new", [], "any", false, false, false, 57), "html", null, true);
                    echo "</p>
\t\t\t\t</div>
\t\t\t";
                } else {
                    // line 60
                    echo "\t\t\t\t<div class=\"no-post d-block\">
\t\t\t\t\t<span>";
                    // line 61
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 61), "lang", [], "any", false, false, false, 61), "string", [], "any", false, false, false, 61), "container", [], "any", false, false, false, 61), "no_post", [], "any", false, false, false, 61), "none", [], "any", false, false, false, 61), "html", null, true);
                    echo "</span>
\t\t\t\t\t<p data-ui=\"login-attempt\">";
                    // line 62
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 62), "lang", [], "any", false, false, false, 62), "string", [], "any", false, false, false, 62), "container", [], "any", false, false, false, 62), "no_post", [], "any", false, false, false, 62), "new", [], "any", false, false, false, 62), "html", null, true);
                    echo "</p>
\t\t\t\t</div>
\t\t\t";
                }
                // line 65
                echo "\t\t";
            } else {
                // line 66
                echo "\t\t\t<div class=\"no-post d-block\">
\t\t\t\t<span>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 67), "lang", [], "any", false, false, false, 67), "string", [], "any", false, false, false, 67), "container", [], "any", false, false, false, 67), "search", [], "any", false, false, false, 67), "no_results", [], "any", false, false, false, 67), "html", null, true);
                echo "</span>
\t\t\t</div>
\t\t";
            }
            // line 70
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "\t";
        if (((($context["page_id"] ?? null) - 1) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 71), "getLastPage", [], "method", false, false, false, 71))) {
            // line 72
            echo "\t";
        } else {
            // line 73
            echo "\t\t<div class=\"app-more-button text-center\">
\t\t\t<button type=\"button\" class=\"btn btn-app-load-more mb-3\" data-current-page=\"";
            // line 74
            echo twig_escape_filter($this->env, ($context["page_id"] ?? null), "html", null, true);
            echo "\" data-next-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 74), "post", [], "any", false, false, false, 74), "pagination", [], "any", false, false, false, 74), "encodePageData", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 74), "per_page", [], "any", false, false, false, 74), 1 => (($context["page_id"] ?? null) + 1)], "method", false, false, false, 74), "html", null, true);
            echo "\" data-ui=\"load-more-posts\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 74), "lang", [], "any", false, false, false, 74), "string", [], "any", false, false, false, 74), "container", [], "any", false, false, false, 74), "buttons", [], "any", false, false, false, 74), "more", [], "any", false, false, false, 74), "html", null, true);
            echo "</button>
\t\t</div>
\t";
        }
        // line 77
        echo "\t";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 77), "unsetForumId", [], "method", false, false, false, 77), "html", null, true);
        echo "
";
        // line 78
        if ( !twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "pagination", [], "any", true, true, false, 78)) {
            // line 79
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "index_posts.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 79,  253 => 78,  248 => 77,  238 => 74,  235 => 73,  232 => 72,  229 => 71,  223 => 70,  217 => 67,  214 => 66,  211 => 65,  205 => 62,  201 => 61,  198 => 60,  192 => 57,  188 => 56,  185 => 55,  182 => 54,  179 => 53,  171 => 51,  165 => 50,  160 => 48,  153 => 46,  150 => 45,  148 => 44,  142 => 40,  133 => 38,  129 => 37,  125 => 36,  118 => 34,  115 => 33,  112 => 32,  110 => 31,  107 => 30,  101 => 28,  97 => 26,  95 => 25,  92 => 24,  86 => 22,  82 => 20,  80 => 19,  77 => 18,  71 => 15,  68 => 14,  66 => 13,  61 => 11,  58 => 10,  54 => 8,  51 => 7,  47 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import 'macro.index_posts.tpl' as macros %}

{% if string.pagination is defined %}
\t{% set page_id = string.current_page %}
\t{% set wherePage = string.pagination.where %}
{% else %}
\t{% set page_id = 1 %}
\t{% set wherePage = 0 %}
{% endif %}

{{ string.post.setForumId(string.forum_id) }}

{% if string.keyword is defined %}
\t<div data-search=\"true\">
\t    <h5 class=\"mb-4\">{{ app.sub.lang.string.index.search.results }}</h5>
    </div>
{% endif %}

{% if app.cookie.collapse_node_pinned is not defined %}
\t{% set pinned_is_expanded = 'expanded' %}
{% else %}
    {% set pinned_link_expanded = 'expanded' %}\t\t
{% endif %}

{% if app.cookie.collapse_node_all is not defined %}
\t{% set all_is_expanded = 'expanded' %}
{% else %}
    {% set all_link_expanded = 'expanded' %}\t\t
{% endif %}

{% if string.pagination is not defined %}
\t{% if string.discussion.isAnySticky(string.forum_id) %}
\t\t<div class=\"js-appExpandNodes rounded shadow-sm mb-3\" data-ui=\"expand-node\" data-target=\"pinned\">
\t\t\t<a class=\"{{ pinned_link_expanded }}\" href=\"#\" role=\"button\">{{ app.sub.lang.string.index.posts.pinned }}</a>
\t\t</div>
\t\t<div class=\"appNodeContainer pinned {{ pinned_is_expanded }}\">
\t\t\t{% for item in string.post.getPostList(wherePage, app.settings.per_page, string.order, string.keyword, null, true, false, true) %}
\t\t\t\t{{ macros.posts(item, string) }}
\t\t\t{% endfor %}
\t\t\t<hr>
\t\t</div>
\t{% endif %}
{% endif %}
{% if string.pagination is not defined %}
<div class=\"js-appExpandNodes rounded shadow-sm mt-2 mt-lg-0 mb-3\" data-ui=\"expand-node\" data-target=\"all\">
\t<a class=\"{{ all_link_expanded }}\" href=\"#\" role=\"button\">{{ app.sub.lang.string.index.posts.newest }}</a>
</div>
<div class=\"appNodeContainer all {{ all_is_expanded }}\">
{% endif %}
\t{% for item in string.post.getPostList(wherePage, app.settings.per_page, string.order, string.keyword, null, true, false, false) %}
\t\t{{ macros.posts(item, string) }}
\t{% else %}
\t\t{% if not string.keyword is defined %}
\t\t\t{% if app.user.loggedIn() %}
\t\t\t\t<div class=\"no-post d-block\">
\t\t\t\t\t<span>{{ app.sub.lang.string.container.no_post.none }}</span>
\t\t\t\t\t<p data-ui=\"show-editor\">{{ app.sub.lang.string.container.no_post.new }}</p>
\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t\t<div class=\"no-post d-block\">
\t\t\t\t\t<span>{{ app.sub.lang.string.container.no_post.none }}</span>
\t\t\t\t\t<p data-ui=\"login-attempt\">{{ app.sub.lang.string.container.no_post.new }}</p>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t{% else %}
\t\t\t<div class=\"no-post d-block\">
\t\t\t\t<span>{{ app.sub.lang.string.container.search.no_results }}</span>
\t\t\t</div>
\t\t{% endif %}
\t{% endfor %}
\t{% if (page_id - 1) == string.post.getLastPage() %}
\t{% else %}
\t\t<div class=\"app-more-button text-center\">
\t\t\t<button type=\"button\" class=\"btn btn-app-load-more mb-3\" data-current-page=\"{{ page_id }}\" data-next-id=\"{{ app.sub.post.pagination.encodePageData(app.settings.per_page, (page_id + 1)) }}\" data-ui=\"load-more-posts\">{{ app.sub.lang.string.container.buttons.more }}</button>
\t\t</div>
\t{% endif %}
\t{{ string.post.unsetForumId() }}
{% if string.pagination is not defined %}
</div>
{% endif %}", "index_posts.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Index\\index_posts.tpl");
    }
}
