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

/* macro.messages_list.tpl */
class __TwigTemplate_0ff58ec888a2aa80e5f382954c547999cdc9869f5d3408074e095ec871e5ab6b extends Template
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
    public function macro_messages($__item__ = null, $__is_archived__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "is_archived" => $__is_archived__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 2), "messages", [], "any", false, false, false, 2), "getMessagesByUserId", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 2), "user_id", [], "any", false, false, false, 2), 1 => ($context["is_archived"] ?? null), 2 => 0], "method", false, false, false, 2));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 3
                echo "\t\t";
                $context["last"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 3), "messages", [], "any", false, false, false, 3), "getLastMessage", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "parent_id", [], "any", false, false, false, 3)], "method", false, false, false, 3);
                // line 4
                echo "\t    ";
                if ((twig_get_attribute($this->env, $this->source, ($context["last"] ?? null), "sender_id", [], "any", false, false, false, 4) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 4), "user_id", [], "any", false, false, false, 4))) {
                    // line 5
                    echo "\t\t    ";
                    $context["seen"] = "1";
                    // line 6
                    echo "\t    ";
                } else {
                    // line 7
                    echo "\t\t    ";
                    $context["seen"] = twig_get_attribute($this->env, $this->source, ($context["last"] ?? null), "is_seeing", [], "any", false, false, false, 7);
                    // line 8
                    echo "\t    ";
                }
                // line 9
                echo "\t\t<a class=\"list-group-item post-user conversation-list align-items-center p-3\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 9), "buildLink", [0 => "messages", 1 => ["section" => "conversation", "id" => twig_get_attribute($this->env, $this->source, ($context["last"] ?? null), "parent_id", [], "any", false, false, false, 9)]], "method", false, false, false, 9), "html", null, true);
                echo "\" data-title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 9), "html", null, true);
                echo "\" data-conversation-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["last"] ?? null), "parent_id", [], "any", false, false, false, 9), "html", null, true);
                echo "\" data-is-seeing=\"";
                echo twig_escape_filter($this->env, ($context["seen"] ?? null), "html", null, true);
                echo "\" data-ui=\"show-conversation\">
\t\t\t";
                // line 10
                if ((twig_get_attribute($this->env, $this->source, ($context["last"] ?? null), "sender_id", [], "any", false, false, false, 10) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 10), "user_id", [], "any", false, false, false, 10))) {
                    // line 11
                    echo "\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 11), "user", [], "any", false, false, false, 11), "link", [], "any", false, false, false, 11), "setUser", [0 => twig_get_attribute($this->env, $this->source, ($context["last"] ?? null), "user_id", [], "any", false, false, false, 11)], "method", false, false, false, 11), "html", null, true);
                    echo "
\t\t\t\t";
                    // line 13
                    echo "\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 13), "user", [], "any", false, false, false, 13), "link", [], "any", false, false, false, 13), "getProfilePicture", [], "method", false, false, false, 13);
                    echo "
\t\t\t\t\t<div class=\"d-flex flex-column ml-3\">
\t\t\t\t\t\t<span>";
                    // line 15
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 15), "user", [], "any", false, false, false, 15), "link", [], "any", false, false, false, 15), "getName", [], "method", false, false, false, 15);
                    echo "</span>
\t\t\t\t\t\t<span data-is-seeing=\"";
                    // line 16
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["last"] ?? null), "is_seeing", [], "any", false, false, false, 16), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 16), "html", null, true);
                    echo "</span>
\t\t\t\t\t</div>
\t\t\t\t";
                    // line 19
                    echo "\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 19), "user", [], "any", false, false, false, 19), "link", [], "any", false, false, false, 19), "unsetUser", [], "method", false, false, false, 19), "html", null, true);
                    echo "
\t\t\t";
                } else {
                    // line 21
                    echo "\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 21), "user", [], "any", false, false, false, 21), "link", [], "any", false, false, false, 21), "setUser", [0 => twig_get_attribute($this->env, $this->source, ($context["last"] ?? null), "sender_id", [], "any", false, false, false, 21)], "method", false, false, false, 21), "html", null, true);
                    echo "
\t\t\t\t";
                    // line 23
                    echo "\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 23), "user", [], "any", false, false, false, 23), "link", [], "any", false, false, false, 23), "getProfilePicture", [], "method", false, false, false, 23);
                    echo "
\t\t\t\t\t<div class=\"d-flex flex-column ml-3\">
\t\t\t\t\t\t<span>";
                    // line 25
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 25), "user", [], "any", false, false, false, 25), "link", [], "any", false, false, false, 25), "getName", [], "method", false, false, false, 25);
                    echo "</span>
\t\t\t\t\t\t<span>";
                    // line 26
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 26), "html", null, true);
                    echo "</span>
\t\t\t\t\t</div>
\t\t\t\t";
                    // line 29
                    echo "\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 29), "user", [], "any", false, false, false, 29), "link", [], "any", false, false, false, 29), "unsetUser", [], "method", false, false, false, 29), "html", null, true);
                    echo "
\t\t\t";
                }
                // line 31
                echo "\t\t</a>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "macro.messages_list.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 31,  137 => 29,  132 => 26,  128 => 25,  122 => 23,  117 => 21,  111 => 19,  104 => 16,  100 => 15,  94 => 13,  89 => 11,  87 => 10,  76 => 9,  73 => 8,  70 => 7,  67 => 6,  64 => 5,  61 => 4,  58 => 3,  53 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro messages(item, is_archived) %}
\t{% for item in app.string.messages.getMessagesByUserId(app.visitor.user_id, is_archived, 0) %}
\t\t{% set last = app.string.messages.getLastMessage(item.parent_id) %}
\t    {% if last.sender_id is same as(app.visitor.user_id) %}
\t\t    {% set seen = '1' %}
\t    {% else %}
\t\t    {% set seen = last.is_seeing %}
\t    {% endif %}
\t\t<a class=\"list-group-item post-user conversation-list align-items-center p-3\" href=\"{{ app.phrase.buildLink('messages', {'section': 'conversation', 'id': last.parent_id}) }}\" data-title=\"{{ item.title }}\" data-conversation-id=\"{{ last.parent_id }}\" data-is-seeing=\"{{ seen }}\" data-ui=\"show-conversation\">
\t\t\t{% if last.sender_id is same as(app.visitor.user_id) %}
\t\t\t\t{{ app.sub.user.link.setUser(last.user_id) }}
\t\t\t\t{% autoescape 'html' %}
\t\t\t\t\t{{ app.sub.user.link.getProfilePicture()|raw }}
\t\t\t\t\t<div class=\"d-flex flex-column ml-3\">
\t\t\t\t\t\t<span>{{ app.sub.user.link.getName()|raw }}</span>
\t\t\t\t\t\t<span data-is-seeing=\"{{ last.is_seeing }}\">{{ item.title }}</span>
\t\t\t\t\t</div>
\t\t\t\t{% endautoescape %}
\t\t\t\t{{ app.sub.user.link.unsetUser() }}
\t\t\t{% else %}
\t\t\t\t{{ app.sub.user.link.setUser(last.sender_id) }}
\t\t\t\t{% autoescape 'html' %}
\t\t\t\t\t{{ app.sub.user.link.getProfilePicture()|raw }}
\t\t\t\t\t<div class=\"d-flex flex-column ml-3\">
\t\t\t\t\t\t<span>{{ app.sub.user.link.getName()|raw }}</span>
\t\t\t\t\t\t<span>{{ item.title }}</span>
\t\t\t\t\t</div>
\t\t\t\t{% endautoescape %}
\t\t\t\t{{ app.sub.user.link.unsetUser() }}
\t\t\t{% endif %}
\t\t</a>
\t{% endfor %}
{% endmacro %}", "macro.messages_list.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Macros\\macro.messages_list.tpl");
    }
}
