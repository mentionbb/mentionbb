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

/* macro.messages.tpl */
class __TwigTemplate_b7f5c6e8830a8d55ed678206e19c678f03d1ad417f7f124a65b2a2cc54580a1e extends Template
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
    public function macro_messages($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "\t";
            $context["last"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 2), "messages", [], "any", false, false, false, 2), "getLastMessage", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "parent_id", [], "any", false, false, false, 2)], "method", false, false, false, 2);
            // line 3
            echo "\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["last"] ?? null), "sender_id", [], "any", false, false, false, 3) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 3), "user_id", [], "any", false, false, false, 3))) {
                // line 4
                echo "\t\t";
                $context["seen"] = "1";
                // line 5
                echo "\t";
            } else {
                // line 6
                echo "\t\t";
                $context["seen"] = twig_get_attribute($this->env, $this->source, ($context["last"] ?? null), "is_seeing", [], "any", false, false, false, 6);
                // line 7
                echo "\t";
            }
            // line 8
            echo "\t<a data-is-seeing=\"";
            echo twig_escape_filter($this->env, ($context["seen"] ?? null), "html", null, true);
            echo "\" class=\"notification message d-flex\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 8), "buildLink", [0 => "messages", 1 => ["section" => "conversation", "id" => twig_get_attribute($this->env, $this->source, ($context["last"] ?? null), "parent_id", [], "any", false, false, false, 8)]], "method", false, false, false, 8), "html", null, true);
            echo "\">
\t\t";
            // line 9
            if ((twig_get_attribute($this->env, $this->source, ($context["last"] ?? null), "sender_id", [], "any", false, false, false, 9) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 9), "user_id", [], "any", false, false, false, 9))) {
                // line 10
                echo "\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 10), "user", [], "any", false, false, false, 10), "link", [], "any", false, false, false, 10), "setUser", [0 => twig_get_attribute($this->env, $this->source, ($context["last"] ?? null), "user_id", [], "any", false, false, false, 10)], "method", false, false, false, 10), "html", null, true);
                echo "
\t\t\t<div class=\"user-image\">
\t\t\t\t";
                // line 12
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 12), "user", [], "any", false, false, false, 12), "link", [], "any", false, false, false, 12), "getProfilePicture", [0 => false, 1 => "no-tooltip"], "method", false, false, false, 12);
                echo "
\t\t\t</div>
\t\t\t<div class=\"text ml-3\">
\t\t\t\t";
                // line 15
                if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "parent_id", [], "any", false, false, false, 15) === "0")) {
                    // line 16
                    echo "\t\t\t\t\t<span class=\"font-weight-bold\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 16), "html", null, true);
                    echo "</span>
\t\t\t\t";
                } else {
                    // line 18
                    echo "\t\t\t\t\t<span class=\"font-weight-bold\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 18), "html", null, true);
                    echo "</span>
\t\t\t\t";
                }
                // line 20
                echo "\t\t\t\t<span class=\"sender\" data-is-seeing=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["last"] ?? null), "is_seeing", [], "any", false, false, false, 20), "html", null, true);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 20), "user", [], "any", false, false, false, 20), "link", [], "any", false, false, false, 20), "getName", [], "method", false, false, false, 20);
                echo "</span>
\t\t\t\t<span class=\"date\">";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 21), "date", [], "any", false, false, false, 21), "toHumanReadable", [0 => twig_get_attribute($this->env, $this->source, ($context["last"] ?? null), "dateline", [], "any", false, false, false, 21)], "method", false, false, false, 21), "html", null, true);
                echo "</span>
\t\t\t</div>
\t\t\t";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 23), "user", [], "any", false, false, false, 23), "link", [], "any", false, false, false, 23), "unsetUser", [], "method", false, false, false, 23), "html", null, true);
                echo "
\t    ";
            } else {
                // line 25
                echo "\t    \t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 25), "user", [], "any", false, false, false, 25), "link", [], "any", false, false, false, 25), "setUser", [0 => twig_get_attribute($this->env, $this->source, ($context["last"] ?? null), "sender_id", [], "any", false, false, false, 25)], "method", false, false, false, 25), "html", null, true);
                echo "
\t\t\t<div class=\"user-image\">
\t\t\t\t";
                // line 27
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 27), "user", [], "any", false, false, false, 27), "link", [], "any", false, false, false, 27), "getProfilePicture", [0 => false, 1 => "no-tooltip"], "method", false, false, false, 27);
                echo "
\t\t\t</div>
\t\t\t<div class=\"text ml-3\">
\t\t\t\t";
                // line 30
                if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "parent_id", [], "any", false, false, false, 30) === "0")) {
                    // line 31
                    echo "\t\t\t\t\t<span class=\"font-weight-bold\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 31), "html", null, true);
                    echo "</span>
\t\t\t\t";
                } else {
                    // line 33
                    echo "\t\t\t\t\t<span>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 33), "lang", [], "any", false, false, false, 33), "parse", [], "any", false, false, false, 33), "Parse", [0 => "container.message.reply", 1 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 33)], "method", false, false, false, 33);
                    echo "</span>
\t\t\t\t";
                }
                // line 35
                echo "\t\t\t\t<span class=\"sender\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 35), "user", [], "any", false, false, false, 35), "link", [], "any", false, false, false, 35), "getName", [], "method", false, false, false, 35);
                echo "</span>
\t\t\t\t<span class=\"date\">";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 36), "date", [], "any", false, false, false, 36), "toHumanReadable", [0 => twig_get_attribute($this->env, $this->source, ($context["last"] ?? null), "dateline", [], "any", false, false, false, 36)], "method", false, false, false, 36), "html", null, true);
                echo "</span>
\t\t\t</div>
\t\t\t";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 38), "user", [], "any", false, false, false, 38), "link", [], "any", false, false, false, 38), "unsetUser", [], "method", false, false, false, 38), "html", null, true);
                echo "
\t    ";
            }
            // line 40
            echo "\t</a>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "macro.messages.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 40,  158 => 38,  153 => 36,  148 => 35,  142 => 33,  136 => 31,  134 => 30,  128 => 27,  122 => 25,  117 => 23,  112 => 21,  105 => 20,  99 => 18,  93 => 16,  91 => 15,  85 => 12,  79 => 10,  77 => 9,  70 => 8,  67 => 7,  64 => 6,  61 => 5,  58 => 4,  55 => 3,  52 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro messages(item) %}
\t{% set last = app.string.messages.getLastMessage(item.parent_id) %}
\t{% if last.sender_id is same as(app.visitor.user_id) %}
\t\t{% set seen = '1' %}
\t{% else %}
\t\t{% set seen = last.is_seeing %}
\t{% endif %}
\t<a data-is-seeing=\"{{ seen }}\" class=\"notification message d-flex\" href=\"{{ app.phrase.buildLink('messages', {'section': 'conversation', 'id': last.parent_id}) }}\">
\t\t{% if last.sender_id is same as(app.visitor.user_id) %}
\t\t\t{{ app.sub.user.link.setUser(last.user_id) }}
\t\t\t<div class=\"user-image\">
\t\t\t\t{{ app.sub.user.link.getProfilePicture(false, 'no-tooltip')|raw }}
\t\t\t</div>
\t\t\t<div class=\"text ml-3\">
\t\t\t\t{% if item.parent_id is same as('0') %}
\t\t\t\t\t<span class=\"font-weight-bold\">{{ item.title }}</span>
\t\t\t\t{% else %}
\t\t\t\t\t<span class=\"font-weight-bold\">{{ item.title }}</span>
\t\t\t\t{% endif %}
\t\t\t\t<span class=\"sender\" data-is-seeing=\"{{ last.is_seeing }}\">{{ app.sub.user.link.getName()|raw }}</span>
\t\t\t\t<span class=\"date\">{{ app.timer.date.toHumanReadable(last.dateline) }}</span>
\t\t\t</div>
\t\t\t{{ app.sub.user.link.unsetUser() }}
\t    {% else %}
\t    \t{{ app.sub.user.link.setUser(last.sender_id) }}
\t\t\t<div class=\"user-image\">
\t\t\t\t{{ app.sub.user.link.getProfilePicture(false, 'no-tooltip')|raw }}
\t\t\t</div>
\t\t\t<div class=\"text ml-3\">
\t\t\t\t{% if item.parent_id is same as('0') %}
\t\t\t\t\t<span class=\"font-weight-bold\">{{ item.title }}</span>
\t\t\t\t{% else %}
\t\t\t\t\t<span>{{ app.sub.lang.parse.Parse('container.message.reply', item.title)|raw }}</span>
\t\t\t\t{% endif %}
\t\t\t\t<span class=\"sender\">{{ app.sub.user.link.getName()|raw }}</span>
\t\t\t\t<span class=\"date\">{{ app.timer.date.toHumanReadable(last.dateline) }}</span>
\t\t\t</div>
\t\t\t{{ app.sub.user.link.unsetUser() }}
\t    {% endif %}
\t</a>
{% endmacro %}", "macro.messages.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Macros\\macro.messages.tpl");
    }
}
