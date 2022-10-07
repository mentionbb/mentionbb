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

/* new.tpl */
class __TwigTemplate_43cfc089c211a4e9a4d7ca35602426b0ca2f52cf950b65a1c4f4fb151f00d519 extends Template
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 1), "getActiveBan", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 1), "user_id", [], "any", false, false, false, 1)], "method", false, false, false, 1)) {
            // line 2
            echo "\t<div class=\"app-box shadow rounded animate slideIn\">
\t\t<form method=\"post\" id=\"form-conversation-create\">
\t\t\t<div class=\"bg-light-transparent border-bottom shadow-sm pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"form-group row ml-2 mr-2\">
\t\t\t\t\t<label for=\"username\" class=\"col-sm-2 col-form-label\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 6), "lang", [], "any", false, false, false, 6), "string", [], "any", false, false, false, 6), "messages", [], "any", false, false, false, 6), "new", [], "any", false, false, false, 6), "form", [], "any", false, false, false, 6), "username", [], "any", false, false, false, 6), "html", null, true);
            echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" autocomplete=\"off\" placeholder=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 8), "lang", [], "any", false, false, false, 8), "string", [], "any", false, false, false, 8), "messages", [], "any", false, false, false, 8), "new", [], "any", false, false, false, 8), "form", [], "any", false, false, false, 8), "username_placeholder", [], "any", false, false, false, 8), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "target_user", [], "any", false, false, false, 8), "html", null, true);
            echo "\">
\t\t\t\t\t\t<div class=\"user-results rounded shadow d-none\">
\t\t\t\t\t\t\t<div class=\"title\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 10), "lang", [], "any", false, false, false, 10), "string", [], "any", false, false, false, 10), "messages", [], "any", false, false, false, 10), "new", [], "any", false, false, false, 10), "form", [], "any", false, false, false, 10), "username_result", [], "any", false, false, false, 10), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"scrollable\"></div>
\t\t\t\t\t\t\t<div class=\"post-loader-spin\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group row ml-2 mr-2 mb-0\">
\t\t\t\t\t<label for=\"title\" class=\"col-sm-2 col-form-label\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 17), "lang", [], "any", false, false, false, 17), "string", [], "any", false, false, false, 17), "messages", [], "any", false, false, false, 17), "new", [], "any", false, false, false, 17), "form", [], "any", false, false, false, 17), "title", [], "any", false, false, false, 17), "html", null, true);
            echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" placeholder=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 19), "lang", [], "any", false, false, false, 19), "string", [], "any", false, false, false, 19), "messages", [], "any", false, false, false, 19), "new", [], "any", false, false, false, 19), "form", [], "any", false, false, false, 19), "title_placeholder", [], "any", false, false, false, 19), "html", null, true);
            echo "\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"border-bottom pl-4 pr-0 pt-0 pb-0\">
\t\t\t\t<div class=\"messages scrollable d-flex flex-column pl-3 pr-4 pt-2\">
\t\t\t\t\t<p class=\"info bg-dark text-center text-white mb-0 d-none\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 25), "lang", [], "any", false, false, false, 25), "string", [], "any", false, false, false, 25), "messages", [], "any", false, false, false, 25), "conversation", [], "any", false, false, false, 25), "just_before", [], "any", false, false, false, 25), "html", null, true);
            echo "</p>
\t\t\t\t\t<div class=\"me new-message shadow mb-lg-3 mb-4 animate slideIn d-none\">
\t\t\t\t\t\t";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 27), "user", [], "any", false, false, false, 27), "link", [], "any", false, false, false, 27), "setUser", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 27), "user_id", [], "any", false, false, false, 27)], "method", false, false, false, 27), "html", null, true);
            echo "
\t\t\t\t\t\t<div title=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 28), "lang", [], "any", false, false, false, 28), "string", [], "any", false, false, false, 28), "messages", [], "any", false, false, false, 28), "conversation", [], "any", false, false, false, 28), "status", [], "any", false, false, false, 28), "delivered", [], "any", false, false, false, 28), "html", null, true);
            echo "\" class=\"user\">
\t\t\t\t\t\t\t";
            // line 30
            echo "\t\t\t\t\t\t\t\t";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 30), "user", [], "any", false, false, false, 30), "link", [], "any", false, false, false, 30), "getProfilePicture", [0 => false], "method", false, false, false, 30);
            echo "
\t\t\t\t\t\t\t";
            // line 32
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 33), "user", [], "any", false, false, false, 33), "link", [], "any", false, false, false, 33), "unsetUser", [], "method", false, false, false, 33), "html", null, true);
            echo "
\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t<div class=\"anim-area\">
\t\t\t\t\t\t\t<div class=\"post-loader-spin d-block\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<small class=\"text-muted\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 38), "lang", [], "any", false, false, false, 38), "string", [], "any", false, false, false, 38), "messages", [], "any", false, false, false, 38), "conversation", [], "any", false, false, false, 38), "just_before", [], "any", false, false, false, 38), "html", null, true);
            echo "</small>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"app-post app-post-create app-message-create bg-light-transparent pl-3 pr-3 pt-2 pb-2\">
\t\t\t\t<div class=\"hide-editor d-none\">
\t\t\t\t\t<div class=\"backdrop\"></div>
\t\t\t\t\t<div class=\"text d-flex justify-content-center align-items-center text-dark\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 45), "lang", [], "any", false, false, false, 45), "string", [], "any", false, false, false, 45), "string", [], "any", false, false, false, 45), "index", [], "any", false, false, false, 45), "search", [], "any", false, false, false, 45), "stop_search", [], "any", false, false, false, 45), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"post-layout border-top-0 p-0\">
\t\t\t\t\t<div class=\"progress d-none\">
\t\t\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"post-user\">
\t\t\t\t\t\t";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 52), "user", [], "any", false, false, false, 52), "link", [], "any", false, false, false, 52), "setUser", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 52), "user_id", [], "any", false, false, false, 52)], "method", false, false, false, 52), "html", null, true);
            echo "
\t\t\t\t\t\t";
            // line 54
            echo "\t\t\t\t\t\t\t";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 54), "user", [], "any", false, false, false, 54), "link", [], "any", false, false, false, 54), "getProfilePicture", [0 => false], "method", false, false, false, 54);
            echo "
\t\t\t\t\t\t";
            // line 56
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 56), "user", [], "any", false, false, false, 56), "unsetUser", [], "method", false, false, false, 56), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"post-content pt-1\">
\t\t\t\t\t\t<div class=\"title-area d-flex mb-2\">
\t\t\t\t\t\t\t<textarea class=\"expand scrollable w-100\" style=\"max-height:inherit\" rows=\"5\" name=\"text\" placeholder=\"";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 60), "lang", [], "any", false, false, false, 60), "string", [], "any", false, false, false, 60), "container", [], "any", false, false, false, 60), "editor", [], "any", false, false, false, 60), "placeholder", [], "any", false, false, false, 60), "message", [], "any", false, false, false, 60), "html", null, true);
            echo "\"></textarea>
\t\t\t\t\t\t\t<button type=\"button\" class=\"submit ml-2\" aria-label=\"";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 61), "lang", [], "any", false, false, false, 61), "string", [], "any", false, false, false, 61), "container", [], "any", false, false, false, 61), "buttons", [], "any", false, false, false, 61), "submit", [], "any", false, false, false, 61), "html", null, true);
            echo "\"></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t</div>
";
        } else {
            // line 69
            echo "\t<div class=\"app-box shadow rounded animate slideIn p-3\">
\t\t<div class=\"text-dark\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 70), "lang", [], "any", false, false, false, 70), "string", [], "any", false, false, false, 70), "container", [], "any", false, false, false, 70), "visitor", [], "any", false, false, false, 70), "ban_message", [], "any", false, false, false, 70), "html", null, true);
            echo "</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "new.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 70,  162 => 69,  151 => 61,  147 => 60,  139 => 56,  134 => 54,  130 => 52,  120 => 45,  110 => 38,  102 => 33,  99 => 32,  94 => 30,  90 => 28,  86 => 27,  81 => 25,  72 => 19,  67 => 17,  57 => 10,  50 => 8,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if app.user.getActiveBan(app.visitor.user_id) %}
\t<div class=\"app-box shadow rounded animate slideIn\">
\t\t<form method=\"post\" id=\"form-conversation-create\">
\t\t\t<div class=\"bg-light-transparent border-bottom shadow-sm pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"form-group row ml-2 mr-2\">
\t\t\t\t\t<label for=\"username\" class=\"col-sm-2 col-form-label\">{{ app.sub.lang.string.messages.new.form.username }}</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" autocomplete=\"off\" placeholder=\"{{ app.sub.lang.string.messages.new.form.username_placeholder }}\" value=\"{{ string.target_user }}\">
\t\t\t\t\t\t<div class=\"user-results rounded shadow d-none\">
\t\t\t\t\t\t\t<div class=\"title\">{{ app.sub.lang.string.messages.new.form.username_result }}</div>
\t\t\t\t\t\t\t<div class=\"scrollable\"></div>
\t\t\t\t\t\t\t<div class=\"post-loader-spin\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group row ml-2 mr-2 mb-0\">
\t\t\t\t\t<label for=\"title\" class=\"col-sm-2 col-form-label\">{{ app.sub.lang.string.messages.new.form.title }}</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" placeholder=\"{{ app.sub.lang.string.messages.new.form.title_placeholder }}\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"border-bottom pl-4 pr-0 pt-0 pb-0\">
\t\t\t\t<div class=\"messages scrollable d-flex flex-column pl-3 pr-4 pt-2\">
\t\t\t\t\t<p class=\"info bg-dark text-center text-white mb-0 d-none\">{{ app.sub.lang.string.messages.conversation.just_before }}</p>
\t\t\t\t\t<div class=\"me new-message shadow mb-lg-3 mb-4 animate slideIn d-none\">
\t\t\t\t\t\t{{ app.sub.user.link.setUser(app.visitor.user_id) }}
\t\t\t\t\t\t<div title=\"{{ app.sub.lang.string.messages.conversation.status.delivered }}\" class=\"user\">
\t\t\t\t\t\t\t{% autoescape 'html' %}
\t\t\t\t\t\t\t\t{{ app.sub.user.link.getProfilePicture(false)|raw }}
\t\t\t\t\t\t\t{% endautoescape %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{{ app.sub.user.link.unsetUser() }}
\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t<div class=\"anim-area\">
\t\t\t\t\t\t\t<div class=\"post-loader-spin d-block\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<small class=\"text-muted\">{{ app.sub.lang.string.messages.conversation.just_before }}</small>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"app-post app-post-create app-message-create bg-light-transparent pl-3 pr-3 pt-2 pb-2\">
\t\t\t\t<div class=\"hide-editor d-none\">
\t\t\t\t\t<div class=\"backdrop\"></div>
\t\t\t\t\t<div class=\"text d-flex justify-content-center align-items-center text-dark\">{{ app.sub.lang.string.string.index.search.stop_search }}</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"post-layout border-top-0 p-0\">
\t\t\t\t\t<div class=\"progress d-none\">
\t\t\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"post-user\">
\t\t\t\t\t\t{{ app.sub.user.link.setUser(app.visitor.user_id) }}
\t\t\t\t\t\t{% autoescape 'html' %}
\t\t\t\t\t\t\t{{ app.sub.user.link.getProfilePicture(false)|raw }}
\t\t\t\t\t\t{% endautoescape %}
\t\t\t\t\t\t{{ app.sub.user.unsetUser() }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"post-content pt-1\">
\t\t\t\t\t\t<div class=\"title-area d-flex mb-2\">
\t\t\t\t\t\t\t<textarea class=\"expand scrollable w-100\" style=\"max-height:inherit\" rows=\"5\" name=\"text\" placeholder=\"{{ app.sub.lang.string.container.editor.placeholder.message }}\"></textarea>
\t\t\t\t\t\t\t<button type=\"button\" class=\"submit ml-2\" aria-label=\"{{ app.sub.lang.string.container.buttons.submit }}\"></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t</div>
{% else %}
\t<div class=\"app-box shadow rounded animate slideIn p-3\">
\t\t<div class=\"text-dark\">{{ app.sub.lang.string.container.visitor.ban_message }}</div>
\t</div>
{% endif %}", "new.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Messages\\new.tpl");
    }
}
