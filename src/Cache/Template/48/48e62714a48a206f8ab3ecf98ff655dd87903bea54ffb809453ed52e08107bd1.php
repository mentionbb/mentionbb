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

/* profile_tooltip.tpl */
class __TwigTemplate_b2a89912475c9ab934db5762f3488f1aa7cea71daba3cad616ee391249772017 extends Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 1), "user", [], "any", false, false, false, 1), "link", [], "any", false, false, false, 1), "setUser", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 1), "user_id", [], "any", false, false, false, 1)], "method", false, false, false, 1), "html", null, true);
        echo "
<div class=\"app-profile-info d-flex align-items-center mt-2\" data-user-id=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 2), "user_id", [], "any", false, false, false, 2), "html", null, true);
        echo "\" data-username=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 2), "username", [], "any", false, false, false, 2), "html", null, true);
        echo "\" data-username-seo=\"";
        echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\BuildSeoLink']->BuildSeoLinkExtension(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 2), "username", [], "any", false, false, false, 2)), "html", null, true);
        echo "\">
    <div class=\"d-flex align-items-center\">
        ";
        // line 5
        echo "            ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 5), "user", [], "any", false, false, false, 5), "link", [], "any", false, false, false, 5), "getProfilePicture", [0 => true, 1 => "no-tooltip"], "method", false, false, false, 5);
        echo "
            <div class=\"d-flex flex-column ml-3\">
                <span class=\"username\">";
        // line 7
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 7), "user", [], "any", false, false, false, 7), "link", [], "any", false, false, false, 7), "getName", [], "method", false, false, false, 7);
        echo "</span>
                ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 8), "user", [], "any", false, false, false, 8), "link", [], "any", false, false, false, 8), "isAdmin", [], "method", false, false, false, 8)) {
            // line 9
            echo "                    <span class=\"d-block\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 9), "user", [], "any", false, false, false, 9), "link", [], "any", false, false, false, 9), "getUsertitle", [], "method", false, false, false, 9);
            echo "</span>
                ";
        } else {
            // line 11
            echo "                    <span class=\"d-block\">";
            echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 11), "user", [], "any", false, false, false, 11), "link", [], "any", false, false, false, 11), "getUsertitle", [], "method", false, false, false, 11)), "html", null, true);
            echo "</span>
                ";
        }
        // line 13
        echo "                <span>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 13), "lang", [], "any", false, false, false, 13), "parse", [], "any", false, false, false, 13), "Parse", [0 => "profile.joining", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 13), "date", [], "any", false, false, false, 13), "toHumanReadable", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 13), "registration_date", [], "any", false, false, false, 13)], "method", false, false, false, 13)], "method", false, false, false, 13), "html", null, true);
        echo "</span>
                ";
        // line 14
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 14), "user_id", [], "any", false, false, false, 14) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 14), "user", [], "any", false, false, false, 14), "link", [], "any", false, false, false, 14), "getId", [], "method", false, false, false, 14))) {
            // line 15
            echo "                    ";
            if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 15), "user", [], "any", false, false, false, 15), "link", [], "any", false, false, false, 15), "getLastActivity", [], "method", false, false, false, 15) === "0")) {
                // line 16
                echo "                        <small class=\"text-muted mt-2\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 16), "lang", [], "any", false, false, false, 16), "parse", [], "any", false, false, false, 16), "Parse", [0 => "profile.last_seen", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 16), "date", [], "any", false, false, false, 16), "toHumanReadable", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 16), "user", [], "any", false, false, false, 16), "link", [], "any", false, false, false, 16), "getLastActivity", [], "method", false, false, false, 16)], "method", false, false, false, 16)], "method", false, false, false, 16), "html", null, true);
                echo "</small>
                    ";
            } else {
                // line 18
                echo "                        <small class=\"text-muted mt-2\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 18), "lang", [], "any", false, false, false, 18), "string", [], "any", false, false, false, 18), "profile", [], "any", false, false, false, 18), "last_seen_never", [], "any", false, false, false, 18), "html", null, true);
                echo "</small>
                    ";
            }
            // line 20
            echo "                ";
        }
        // line 21
        echo "            </div>
        ";
        // line 23
        echo "    </div>
</div>
<hr>
<div class=\"app-reactions reaction-md d-flex pb-1\">
    <div class=\"reaction like d-flex flex-column align-items-center\">
        <span>";
        // line 28
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 28), "getReactionCountByUserId", [0 => "like", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 28), "user_id", [], "any", false, false, false, 28)], "method", false, false, false, 28)), "html", null, true);
        echo "</span>
    </div>
    <div class=\"reaction love d-flex flex-column align-items-center\">
        <span>";
        // line 31
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 31), "getReactionCountByUserId", [0 => "love", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 31), "user_id", [], "any", false, false, false, 31)], "method", false, false, false, 31)), "html", null, true);
        echo "</span>
    </div>
    <div class=\"reaction haha d-flex flex-column align-items-center\">
        <span>";
        // line 34
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 34), "getReactionCountByUserId", [0 => "haha", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 34), "user_id", [], "any", false, false, false, 34)], "method", false, false, false, 34)), "html", null, true);
        echo "</span>
    </div>
    <div class=\"reaction wow d-flex flex-column align-items-center\">
        <span>";
        // line 37
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 37), "getReactionCountByUserId", [0 => "wow", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 37), "user_id", [], "any", false, false, false, 37)], "method", false, false, false, 37)), "html", null, true);
        echo "</span>
    </div>
    <div class=\"reaction sad d-flex flex-column align-items-center\">
        <span>";
        // line 40
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 40), "getReactionCountByUserId", [0 => "sad", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 40), "user_id", [], "any", false, false, false, 40)], "method", false, false, false, 40)), "html", null, true);
        echo "</span>
    </div>
    <div class=\"reaction angry d-flex flex-column align-items-center mr-0\">
        <span>";
        // line 43
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 43), "getReactionCountByUserId", [0 => "angry", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 43), "user_id", [], "any", false, false, false, 43)], "method", false, false, false, 43)), "html", null, true);
        echo "</span>
    </div>
</div>
<div class=\"d-flex align-items-center mt-3 mb-1\">
    <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 47), "user", [], "any", false, false, false, 47), "link", [], "any", false, false, false, 47), "getOnlyLink", [], "method", false, false, false, 47), "html", null, true);
        echo "\" class=\"btn btn-app-discussion no-anim-ui icon go mr-2 d-lg-none\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 47), "lang", [], "any", false, false, false, 47), "string", [], "any", false, false, false, 47), "profile", [], "any", false, false, false, 47), "buttons", [], "any", false, false, false, 47), "go", [], "any", false, false, false, 47), "html", null, true);
        echo "</a>
    ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 48), "loggedIn", [], "method", false, false, false, 48)) {
            // line 49
            echo "\t\t";
            if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 49), "user_id", [], "any", false, false, false, 49) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 49), "user_id", [], "any", false, false, false, 49))) {
                // line 50
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 50), "buildLink", [0 => "messages", 1 => ["section" => "new", "id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 50), "user_id", [], "any", false, false, false, 50)]], "method", false, false, false, 50), "html", null, true);
                echo "\" class=\"btn btn-app-discussion no-anim-ui icon plus\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 50), "lang", [], "any", false, false, false, 50), "string", [], "any", false, false, false, 50), "profile", [], "any", false, false, false, 50), "buttons", [], "any", false, false, false, 50), "message", [], "any", false, false, false, 50), "html", null, true);
                echo "</a>
\t\t";
            }
            // line 52
            echo "\t";
        }
        // line 53
        echo "</div>
";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 54), "user", [], "any", false, false, false, 54), "unsetUser", [], "method", false, false, false, 54), "html", null, true);
    }

    public function getTemplateName()
    {
        return "profile_tooltip.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 54,  168 => 53,  165 => 52,  157 => 50,  154 => 49,  152 => 48,  146 => 47,  139 => 43,  133 => 40,  127 => 37,  121 => 34,  115 => 31,  109 => 28,  102 => 23,  99 => 21,  96 => 20,  90 => 18,  84 => 16,  81 => 15,  79 => 14,  74 => 13,  68 => 11,  62 => 9,  60 => 8,  56 => 7,  50 => 5,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ app.sub.user.link.setUser(string.user.user_id) }}
<div class=\"app-profile-info d-flex align-items-center mt-2\" data-user-id=\"{{ string.user.user_id }}\" data-username=\"{{ string.user.username }}\" data-username-seo=\"{{ string.user.username|buildSeoLink }}\">
    <div class=\"d-flex align-items-center\">
        {% autoescape 'html' %}
            {{ app.sub.user.link.getProfilePicture(true, 'no-tooltip')|raw }}
            <div class=\"d-flex flex-column ml-3\">
                <span class=\"username\">{{ app.sub.user.link.getName()|raw }}</span>
                {% if app.sub.user.link.isAdmin() %}
                    <span class=\"d-block\">{{ app.sub.user.link.getUsertitle()|raw }}</span>
                {% else %}
                    <span class=\"d-block\">{{ app.sub.user.link.getUsertitle()|striptags }}</span>
                {% endif %}
                <span>{{ app.sub.lang.parse.Parse('profile.joining', app.timer.date.toHumanReadable(string.user.registration_date)) }}</span>
                {% if app.visitor.user_id is not same as(app.sub.user.link.getId()) %}
                    {% if app.sub.user.link.getLastActivity() is not same as('0') %}
                        <small class=\"text-muted mt-2\">{{ app.sub.lang.parse.Parse('profile.last_seen', app.timer.date.toHumanReadable(app.sub.user.link.getLastActivity())) }}</small>
                    {% else %}
                        <small class=\"text-muted mt-2\">{{ app.sub.lang.string.profile.last_seen_never }}</small>
                    {% endif %}
                {% endif %}
            </div>
        {% endautoescape %}
    </div>
</div>
<hr>
<div class=\"app-reactions reaction-md d-flex pb-1\">
    <div class=\"reaction like d-flex flex-column align-items-center\">
        <span>{{ string.reaction.getReactionCountByUserId('like', string.user.user_id)|number_format }}</span>
    </div>
    <div class=\"reaction love d-flex flex-column align-items-center\">
        <span>{{ string.reaction.getReactionCountByUserId('love', string.user.user_id)|number_format }}</span>
    </div>
    <div class=\"reaction haha d-flex flex-column align-items-center\">
        <span>{{ string.reaction.getReactionCountByUserId('haha', string.user.user_id)|number_format }}</span>
    </div>
    <div class=\"reaction wow d-flex flex-column align-items-center\">
        <span>{{ string.reaction.getReactionCountByUserId('wow', string.user.user_id)|number_format }}</span>
    </div>
    <div class=\"reaction sad d-flex flex-column align-items-center\">
        <span>{{ string.reaction.getReactionCountByUserId('sad', string.user.user_id)|number_format }}</span>
    </div>
    <div class=\"reaction angry d-flex flex-column align-items-center mr-0\">
        <span>{{ string.reaction.getReactionCountByUserId('angry', string.user.user_id)|number_format }}</span>
    </div>
</div>
<div class=\"d-flex align-items-center mt-3 mb-1\">
    <a href=\"{{ app.sub.user.link.getOnlyLink() }}\" class=\"btn btn-app-discussion no-anim-ui icon go mr-2 d-lg-none\">{{ app.sub.lang.string.profile.buttons.go }}</a>
    {% if app.user.loggedIn() %}
\t\t{% if not app.visitor.user_id is same as(string.user.user_id) %}
\t\t\t<a href=\"{{ app.phrase.buildLink('messages', {'section': 'new', 'id': string.user.user_id}) }}\" class=\"btn btn-app-discussion no-anim-ui icon plus\">{{ app.sub.lang.string.profile.buttons.message }}</a>
\t\t{% endif %}
\t{% endif %}
</div>
{{ app.sub.user.unsetUser() }}", "profile_tooltip.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\User\\profile_tooltip.tpl");
    }
}
