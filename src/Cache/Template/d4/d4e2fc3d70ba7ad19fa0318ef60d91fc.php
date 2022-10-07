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

/* macro.account_posts.tpl */
class __TwigTemplate_5705011595cfb7316407779d21fdf97d extends Template
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
    }

    // line 1
    public function macro_posts($__item__ = null, $__string__ = null, $__tab__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "string" => $__string__,
            "tab" => $__tab__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "\t<div data-item-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_id", [], "any", false, false, false, 2), "html", null, true);
            echo "\" data-shortcode-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 2), "discussion", [], "any", false, false, false, 2), "shortcode", [], "any", false, false, false, 2), "toBase", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "shortcode", [], "any", false, false, false, 2)], "method", false, false, false, 2), "html", null, true);
            echo "\" data-owner-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "user_id", [], "any", false, false, false, 2), "html", null, true);
            echo "\" data-post-time=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dateline", [], "any", false, false, false, 2), "html", null, true);
            echo "\" class=\"app-post bg-white shadow-sm rounded\">
\t\t<div class=\"post-layout border-0 mt-2 mb-4\">
\t\t\t<a href=\"";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 4), "buildLink", [0 => "shortcode", 1 => ["shortcode" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 4), "discussion", [], "any", false, false, false, 4), "shortcode", [], "any", false, false, false, 4), "toBase", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "shortcode", [], "any", false, false, false, 4)], "method", false, false, false, 4)]], "method", false, false, false, 4), "html", null, true);
            echo "\"></a>
\t\t\t<div class=\"post-user d-flex flex-lg-column mb-lg-0 mb-2\">
\t\t\t\t";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 6), "user", [], "any", false, false, false, 6), "link", [], "any", false, false, false, 6), "setUser", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "user_id", [], "any", false, false, false, 6)], "method", false, false, false, 6), "html", null, true);
            echo "
\t\t\t\t";
            // line 8
            echo "\t\t\t\t\t";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 8), "user", [], "any", false, false, false, 8), "link", [], "any", false, false, false, 8), "getLinkWithProfilePicture", [0 => true, 1 => true], "method", false, false, false, 8);
            echo "
\t\t\t\t";
            // line 10
            echo "\t\t\t\t<div class=\"discussion-post-user\">
\t\t\t\t\t";
            // line 11
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 11), "user", [], "any", false, false, false, 11), "link", [], "any", false, false, false, 11), "getLink", [], "method", false, false, false, 11);
            echo "
\t\t\t\t\t";
            // line 12
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 12), "user", [], "any", false, false, false, 12), "link", [], "any", false, false, false, 12), "isAdmin", [], "method", false, false, false, 12)) {
                // line 13
                echo "\t\t\t\t\t    <span class=\"d-block\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 13), "user", [], "any", false, false, false, 13), "link", [], "any", false, false, false, 13), "getUsertitle", [], "method", false, false, false, 13);
                echo "</span>
\t\t\t\t\t";
            } else {
                // line 15
                echo "\t\t\t\t\t    <span class=\"d-block\">";
                echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 15), "user", [], "any", false, false, false, 15), "link", [], "any", false, false, false, 15), "getUsertitle", [], "method", false, false, false, 15)), "html", null, true);
                echo "</span>
\t\t\t\t\t";
            }
            // line 17
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 18), "user", [], "any", false, false, false, 18), "link", [], "any", false, false, false, 18), "unsetUser", [], "method", false, false, false, 18), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t<div class=\"post-content\">
\t\t\t\t<div class=\"d-block h-100 position-relative\">
\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t";
            // line 24
            $context["accountPosts_Content"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 24), "renderer", [], "any", false, false, false, 24), "bbcode", [], "any", false, false, false, 24), "ClearBBCode", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 24)], "method", false, false, false, 24);
            // line 25
            echo "\t\t\t\t\t\t\t";
            if ((twig_length_filter($this->env, ($context["accountPosts_Content"] ?? null)) > 450)) {
                // line 26
                echo "\t\t\t\t\t\t\t\t<p class=\"mt-1\">";
                echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 26), "editor", [], "any", false, false, false, 26), "emoticons", [], "any", false, false, false, 26), "Render", [0 => ($context["accountPosts_Content"] ?? null)], "method", false, false, false, 26), 0, 450);
                echo "...</p>
\t\t\t\t\t\t\t";
            } else {
                // line 28
                echo "\t\t\t\t\t\t\t\t<p class=\"mt-1\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 28), "editor", [], "any", false, false, false, 28), "emoticons", [], "any", false, false, false, 28), "Render", [0 => ($context["accountPosts_Content"] ?? null)], "method", false, false, false, 28);
                echo "</p>
\t\t\t\t\t\t\t";
            }
            // line 30
            echo "\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<p class=\"time text-muted font-weight-normal font-italic pr-4 mb-0 mt-1 mt-lg-0 ml-lg-auto\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 31), "date", [], "any", false, false, false, 31), "toHumanReadable", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dateline", [], "any", false, false, false, 31)], "method", false, false, false, 31), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"discuss-info d-flex align-items-center ml-auto\">
\t\t\t\t\t\t\t";
            // line 35
            if ((($context["tab"] ?? null) === "likes")) {
                // line 36
                echo "\t\t\t\t\t\t\t\t<div class=\"app-reactions reaction-md\">
\t\t\t\t\t\t\t\t\t<div class=\"reaction ";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "reaction", [], "any", false, false, false, 37), "html", null, true);
                echo "\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            } elseif ((            // line 39
($context["tab"] ?? null) === "bookmarks")) {
                // line 40
                echo "\t\t\t\t\t\t\t\t<div title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 40), "lang", [], "any", false, false, false, 40), "string", [], "any", false, false, false, 40), "account", [], "any", false, false, false, 40), "posts", [], "any", false, false, false, 40), "buttons", [], "any", false, false, false, 40), "remove_bookmark", [], "any", false, false, false, 40), "html", null, true);
                echo "\" class=\"remove-bookmark cursor-pointer h5 text-dark mb-0 mr-2\" data-ui=\"account-remove-bookmark\" data-post-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_id", [], "any", false, false, false, 40), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 44
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "macro.account_posts.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 44,  152 => 40,  150 => 39,  145 => 37,  142 => 36,  140 => 35,  133 => 31,  130 => 30,  124 => 28,  118 => 26,  115 => 25,  113 => 24,  104 => 18,  101 => 17,  95 => 15,  89 => 13,  87 => 12,  83 => 11,  80 => 10,  75 => 8,  71 => 6,  66 => 4,  54 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro posts(item, string, tab) %}
\t<div data-item-id=\"{{ item.post_id }}\" data-shortcode-id=\"{{ app.sub.discussion.shortcode.toBase(item.shortcode) }}\" data-owner-id=\"{{ item.user_id }}\" data-post-time=\"{{ item.dateline }}\" class=\"app-post bg-white shadow-sm rounded\">
\t\t<div class=\"post-layout border-0 mt-2 mb-4\">
\t\t\t<a href=\"{{ app.phrase.buildLink('shortcode', {'shortcode': app.sub.discussion.shortcode.toBase(item.shortcode)}) }}\"></a>
\t\t\t<div class=\"post-user d-flex flex-lg-column mb-lg-0 mb-2\">
\t\t\t\t{{ app.sub.user.link.setUser(item.user_id) }}
\t\t\t\t{% autoescape 'html' %}
\t\t\t\t\t{{ app.sub.user.link.getLinkWithProfilePicture(true, true)|raw }}
\t\t\t\t{% endautoescape %}
\t\t\t\t<div class=\"discussion-post-user\">
\t\t\t\t\t{{ app.sub.user.link.getLink()|raw }}
\t\t\t\t\t{% if app.sub.user.link.isAdmin() %}
\t\t\t\t\t    <span class=\"d-block\">{{ app.sub.user.link.getUsertitle()|raw }}</span>
\t\t\t\t\t{% else %}
\t\t\t\t\t    <span class=\"d-block\">{{ app.sub.user.link.getUsertitle()|striptags }}</span>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t{{ app.sub.user.link.unsetUser() }}
\t\t\t</div>
\t\t\t<div class=\"post-content\">
\t\t\t\t<div class=\"d-block h-100 position-relative\">
\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t{% set accountPosts_Content = app.sub.renderer.bbcode.ClearBBCode(item.content) %}
\t\t\t\t\t\t\t{% if accountPosts_Content|length > 450 %}
\t\t\t\t\t\t\t\t<p class=\"mt-1\">{{ app.sub.editor.emoticons.Render(accountPosts_Content)|slice(0, 450)|raw }}...</p>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<p class=\"mt-1\">{{ app.sub.editor.emoticons.Render(accountPosts_Content)|raw }}</p>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<p class=\"time text-muted font-weight-normal font-italic pr-4 mb-0 mt-1 mt-lg-0 ml-lg-auto\">{{ app.timer.date.toHumanReadable(item.dateline) }}</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"discuss-info d-flex align-items-center ml-auto\">
\t\t\t\t\t\t\t{% if tab is same as('likes') %}
\t\t\t\t\t\t\t\t<div class=\"app-reactions reaction-md\">
\t\t\t\t\t\t\t\t\t<div class=\"reaction {{ item.reaction }}\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% elseif tab is same as('bookmarks') %}
\t\t\t\t\t\t\t\t<div title=\"{{ app.sub.lang.string.account.posts.buttons.remove_bookmark }}\" class=\"remove-bookmark cursor-pointer h5 text-dark mb-0 mr-2\" data-ui=\"account-remove-bookmark\" data-post-id=\"{{ item.post_id }}\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endmacro %}", "macro.account_posts.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Macros\\macro.account_posts.tpl");
    }
}
