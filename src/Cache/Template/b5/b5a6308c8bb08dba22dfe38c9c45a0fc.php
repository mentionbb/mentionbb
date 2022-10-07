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

/* account_likes_posts.tpl */
class __TwigTemplate_815c15a91a6981a2be9be92114d21469 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macro.account_posts.tpl", "account_likes_posts.tpl", 1)->unwrap();
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 11), "getUserLikesPosts", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 11), "user_id", [], "any", false, false, false, 11), 1 => ($context["wherePage"] ?? null), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 11), "per_page", [], "any", false, false, false, 11)], "method", false, false, false, 11));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "\t";
            echo twig_call_macro($macros["macros"], "macro_posts", [$context["item"], ($context["string"] ?? null), "likes"], 12, $context, $this->getSourceContext());
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 14
            echo "\t";
            if ( !twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "keyword", [], "any", true, true, false, 14)) {
                // line 15
                echo "\t    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 15), "loggedIn", [], "method", false, false, false, 15)) {
                    // line 16
                    echo "\t\t    <div class=\"no-post d-block\">
\t\t\t    <span>";
                    // line 17
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 17), "lang", [], "any", false, false, false, 17), "string", [], "any", false, false, false, 17), "container", [], "any", false, false, false, 17), "no_post", [], "any", false, false, false, 17), "none", [], "any", false, false, false, 17), "html", null, true);
                    echo "</span>
\t\t    </div>
\t    ";
                } else {
                    // line 20
                    echo "\t\t    <div class=\"no-post d-block\">
\t\t\t    <span>";
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 21), "lang", [], "any", false, false, false, 21), "string", [], "any", false, false, false, 21), "container", [], "any", false, false, false, 21), "no_post", [], "any", false, false, false, 21), "none", [], "any", false, false, false, 21), "html", null, true);
                    echo "</span>
\t\t    </div>
\t    ";
                }
                // line 24
                echo "\t";
            } else {
                // line 25
                echo "\t\t<div class=\"no-post d-block\">
\t\t\t<span>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 26), "lang", [], "any", false, false, false, 26), "string", [], "any", false, false, false, 26), "container", [], "any", false, false, false, 26), "search", [], "any", false, false, false, 26), "no_results", [], "any", false, false, false, 26), "html", null, true);
                echo "</span>
\t\t</div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        if ((($context["page_id"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 30), "getUserLikesLastPage", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 30), "user_id", [], "any", false, false, false, 30)], "method", false, false, false, 30))) {
        } else {
            // line 32
            echo "\t<div class=\"text-center\">
\t\t<button type=\"button\" class=\"btn btn-app-load-more mb-3\" data-current-page=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["page_id"] ?? null), "html", null, true);
            echo "\" data-next-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 33), "post", [], "any", false, false, false, 33), "pagination", [], "any", false, false, false, 33), "encodePageData", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 33), "per_page", [], "any", false, false, false, 33), 1 => (($context["page_id"] ?? null) + 1)], "method", false, false, false, 33), "html", null, true);
            echo "\" data-ui=\"load-more-user-likes-posts\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 33), "lang", [], "any", false, false, false, 33), "string", [], "any", false, false, false, 33), "container", [], "any", false, false, false, 33), "buttons", [], "any", false, false, false, 33), "more", [], "any", false, false, false, 33), "html", null, true);
            echo "</button>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "account_likes_posts.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 33,  117 => 32,  114 => 30,  104 => 26,  101 => 25,  98 => 24,  92 => 21,  89 => 20,  83 => 17,  80 => 16,  77 => 15,  74 => 14,  66 => 12,  61 => 11,  58 => 10,  54 => 8,  51 => 7,  47 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import 'macro.account_posts.tpl' as macros %}

{% if string.pagination is defined %}
\t{% set page_id = string.current_page %}
\t{% set wherePage = string.pagination.where %}
{% else %}
\t{% set page_id = 1 %}
\t{% set wherePage = 0 %}
{% endif %}

{% for item in string.post.getUserLikesPosts(app.visitor.user_id, wherePage, app.settings.per_page) %}
\t{{ macros.posts(item, string, 'likes') }}
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
{% if page_id == string.post.getUserLikesLastPage(app.visitor.user_id) %}
{% else %}
\t<div class=\"text-center\">
\t\t<button type=\"button\" class=\"btn btn-app-load-more mb-3\" data-current-page=\"{{ page_id }}\" data-next-id=\"{{ app.sub.post.pagination.encodePageData(app.settings.per_page, (page_id + 1)) }}\" data-ui=\"load-more-user-likes-posts\">{{ app.sub.lang.string.container.buttons.more }}</button>
\t</div>
{% endif %}", "account_likes_posts.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\User\\account_likes_posts.tpl");
    }
}
