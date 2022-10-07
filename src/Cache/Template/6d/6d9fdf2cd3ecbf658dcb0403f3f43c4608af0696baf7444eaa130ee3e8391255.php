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

/* updateLike.tpl */
class __TwigTemplate_e0b0ab1b632ee76ce9c837b525a803b2456369a56b4381e2dca1a8193b5d1083 extends Template
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
        $context["like_count"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 1), "getPostLikeCount", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_id", [], "any", false, false, false, 1)], "method", false, false, false, 1);
        // line 2
        if (1 === twig_compare(($context["like_count"] ?? null), 0)) {
            // line 3
            echo "\t<div class=\"post-likes order-1 mt-4\">
\t\t";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 4), "getPostLikes", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "post_id", [], "any", false, false, false, 4)], "method", false, false, false, 4));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 5
                echo "\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 5), "user", [], "any", false, false, false, 5), "link", [], "any", false, false, false, 5), "setUser", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "user_id", [], "any", false, false, false, 5)], "method", false, false, false, 5), "html", null, true);
                echo "
\t\t\t";
                // line 7
                echo "\t\t\t\t<a class=\"reaction ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "reaction", [], "any", false, false, false, 7), "html", null, true);
                echo " user-tooltip-link\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 7), "user", [], "any", false, false, false, 7), "link", [], "any", false, false, false, 7), "getOnlyLink", [], "method", false, false, false, 7), "html", null, true);
                echo "\" data-user-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 7), "user", [], "any", false, false, false, 7), "link", [], "any", false, false, false, 7), "getId", [], "method", false, false, false, 7), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 7), "user", [], "any", false, false, false, 7), "link", [], "any", false, false, false, 7), "getName", [], "method", false, false, false, 7), "html", null, true);
                echo "</a>
\t\t\t\t";
                // line 8
                if ((0 === twig_compare(($context["like_count"] ?? null), 2) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 8), 1))) {
                    echo " 
\t\t\t\t\t";
                    // line 9
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 9), "lang", [], "any", false, false, false, 9), "string", [], "any", false, false, false, 9), "container", [], "any", false, false, false, 9), "generic", [], "any", false, false, false, 9), "and", [], "any", false, false, false, 9), "html", null, true);
                    echo " 
\t\t\t\t    ";
                } elseif ((-1 === twig_compare(                // line 10
($context["like_count"] ?? null), 3) &&  !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 10))) {
                    // line 11
                    echo "\t\t\t\t    ";
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 11), 2)) {
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 11), "lang", [], "any", false, false, false, 11), "string", [], "any", false, false, false, 11), "container", [], "any", false, false, false, 11), "generic", [], "any", false, false, false, 11), "and", [], "any", false, false, false, 11), "html", null, true);
                    } else {
                        echo ", ";
                    }
                    // line 12
                    echo "\t\t\t\t    ";
                } elseif (0 <= twig_compare(($context["like_count"] ?? null), 3)) {
                    // line 13
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 13)) {
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 13), "lang", [], "any", false, false, false, 13), "string", [], "any", false, false, false, 13), "container", [], "any", false, false, false, 13), "generic", [], "any", false, false, false, 13), "and", [], "any", false, false, false, 13), "html", null, true);
                    } else {
                        echo ", ";
                    }
                    // line 14
                    echo "\t\t\t\t";
                }
                // line 15
                echo "\t\t\t";
                // line 16
                echo "\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 16), "user", [], "any", false, false, false, 16), "link", [], "any", false, false, false, 16), "unsetUser", [], "method", false, false, false, 16), "html", null, true);
                echo "
\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t\t";
            if (0 <= twig_compare(($context["like_count"] ?? null), 3)) {
                // line 19
                echo "\t\t\t<div class=\"dropdown d-inline-block\">
\t\t\t\t<a class=\"dropdown-toggle\" role=\"button\" id=\"dropdownMenuLink\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 20), "lang", [], "any", false, false, false, 20), "parse", [], "any", false, false, false, 20), "Parse", [0 => "discussion.posts.likes.more", 1 => (($context["like_count"] ?? null) - 2)], "method", false, false, false, 20), "html", null, true);
                echo "</a>
\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right custom-menu custom-menu-xs post-likes-menu animate slideIn shadow p-0\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 24), "lang", [], "any", false, false, false, 24), "string", [], "any", false, false, false, 24), "discussion", [], "any", false, false, false, 24), "posts", [], "any", false, false, false, 24), "likes", [], "any", false, false, false, 24), "title", [], "any", false, false, false, 24), "html", null, true);
                echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"scrollable\">\t\t\t\t\t\t\t        \t
\t\t\t\t\t\t";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 28), "getPostLikes", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "post_id", [], "any", false, false, false, 28), 1 => false], "method", false, false, false, 28));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 29
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 29), "user", [], "any", false, false, false, 29), "link", [], "any", false, false, false, 29), "setUser", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "user_id", [], "any", false, false, false, 29)], "method", false, false, false, 29), "html", null, true);
                    echo "
\t\t\t\t\t\t\t<a class=\"notification d-flex align-items-center justify-content-center\" href=\"";
                    // line 30
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 30), "user", [], "any", false, false, false, 30), "link", [], "any", false, false, false, 30), "getOnlyLink", [], "method", false, false, false, 30);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 32
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"user-image\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 33
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 33), "user", [], "any", false, false, false, 33), "link", [], "any", false, false, false, 33), "getProfilePicture", [0 => false], "method", false, false, false, 33);
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 36
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 36), "user", [], "any", false, false, false, 36), "link", [], "any", false, false, false, 36), "getName", [], "method", false, false, false, 36);
                    echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"reaction ";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "reaction", [], "any", false, false, false, 38), "html", null, true);
                    echo " ml-auto\"></span>
\t\t\t\t\t\t\t\t";
                    // line 40
                    echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    // line 41
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 41), "user", [], "any", false, false, false, 41), "link", [], "any", false, false, false, 41), "unsetUser", [], "method", false, false, false, 41), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            // line 47
            echo "\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 47), "lang", [], "any", false, false, false, 47), "string", [], "any", false, false, false, 47), "discussion", [], "any", false, false, false, 47), "posts", [], "any", false, false, false, 47), "likes", [], "any", false, false, false, 47), "reaction_this", [], "any", false, false, false, 47), "html", null, true);
            echo "
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "updateLike.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 47,  190 => 42,  182 => 41,  179 => 40,  175 => 38,  170 => 36,  164 => 33,  161 => 32,  157 => 30,  152 => 29,  148 => 28,  141 => 24,  134 => 20,  131 => 19,  128 => 18,  111 => 16,  109 => 15,  106 => 14,  98 => 13,  95 => 12,  87 => 11,  85 => 10,  81 => 9,  77 => 8,  66 => 7,  61 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set like_count = string.post.getPostLikeCount(item.post_id) %}
{% if like_count > 0 %}
\t<div class=\"post-likes order-1 mt-4\">
\t\t{% for item in string.post.getPostLikes(item.post_id) %}
\t\t\t{{ app.sub.user.link.setUser(item.user_id) }}
\t\t\t{% autoescape 'html' %}
\t\t\t\t<a class=\"reaction {{ item.reaction }} user-tooltip-link\" href=\"{{ app.sub.user.link.getOnlyLink() }}\" data-user-id=\"{{ app.sub.user.link.getId() }}\">{{ app.sub.user.link.getName() }}</a>
\t\t\t\t{% if like_count == 2 and loop.index == 1 %} 
\t\t\t\t\t{{ app.sub.lang.string.container.generic.and }} 
\t\t\t\t    {% elseif like_count < 3 and not loop.last %}
\t\t\t\t    {% if loop.index == 2 %} {{ app.sub.lang.string.container.generic.and }}{% else %}, {% endif %}
\t\t\t\t    {% elseif like_count >= 3 %}
\t\t\t\t\t{% if loop.last %} {{ app.sub.lang.string.container.generic.and }}{% else %}, {% endif %}
\t\t\t\t{% endif %}
\t\t\t{% endautoescape %}
\t\t\t{{ app.sub.user.link.unsetUser() }}
\t\t{% endfor %}
\t\t{% if like_count >= 3 %}
\t\t\t<div class=\"dropdown d-inline-block\">
\t\t\t\t<a class=\"dropdown-toggle\" role=\"button\" id=\"dropdownMenuLink\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ app.sub.lang.parse.Parse('discussion.posts.likes.more', (like_count - 2)) }}</a>
\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right custom-menu custom-menu-xs post-likes-menu animate slideIn shadow p-0\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span>{{ app.sub.lang.string.discussion.posts.likes.title }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"scrollable\">\t\t\t\t\t\t\t        \t
\t\t\t\t\t\t{% for item in string.post.getPostLikes(item.post_id, false) %}
\t\t\t\t\t\t\t{{ app.sub.user.link.setUser(item.user_id) }}
\t\t\t\t\t\t\t<a class=\"notification d-flex align-items-center justify-content-center\" href=\"{{ app.sub.user.link.getOnlyLink()|raw }}\">
\t\t\t\t\t\t\t\t{% autoescape 'html' %}
\t\t\t\t\t\t\t\t\t<div class=\"user-image\">
\t\t\t\t\t\t\t\t\t\t{{ app.sub.user.link.getProfilePicture(false)|raw }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t<span>{{ app.sub.user.link.getName()|raw }}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"reaction {{ item.reaction }} ml-auto\"></span>
\t\t\t\t\t\t\t\t{% endautoescape %}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{{ app.sub.user.link.unsetUser() }}
\t\t\t\t\t\t{% endfor %} 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t\t{{ app.sub.lang.string.discussion.posts.likes.reaction_this }}
\t</div>
{% endif %}", "updateLike.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Post\\updateLike.tpl");
    }
}
