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

/* conversation.tpl */
class __TwigTemplate_df7e4e4b14770a710f245d813e61036696e11dbdf00b3d997363c693feca0b14 extends Template
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
        echo "<div class=\"app-box shadow rounded animate slideIn\" data-message-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "conversation", [], "any", false, false, false, 1), "parent_id", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
\t<div class=\"bg-light-transparent border-bottom shadow-sm pl-4 pr-4 pt-3 pb-3\">
\t\t<div class=\"d-flex align-items-center\">
\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t";
        // line 5
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "conversation", [], "any", false, false, false, 5), "sender_id", [], "any", false, false, false, 5) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 5), "user_id", [], "any", false, false, false, 5))) {
            // line 6
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 6), "user", [], "any", false, false, false, 6), "link", [], "any", false, false, false, 6), "setUser", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "conversation", [], "any", false, false, false, 6), "user_id", [], "any", false, false, false, 6)], "method", false, false, false, 6), "html", null, true);
            echo "
\t\t\t\t";
        } else {
            // line 8
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 8), "user", [], "any", false, false, false, 8), "link", [], "any", false, false, false, 8), "setUser", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "conversation", [], "any", false, false, false, 8), "sender_id", [], "any", false, false, false, 8)], "method", false, false, false, 8), "html", null, true);
            echo "
\t\t\t\t";
        }
        // line 10
        echo "\t\t\t\t";
        // line 11
        echo "\t\t\t\t\t<div class=\"post-user\">
\t\t\t\t\t\t";
        // line 12
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 12), "user", [], "any", false, false, false, 12), "link", [], "any", false, false, false, 12), "getLinkWithProfilePicture", [], "method", false, false, false, 12);
        echo "
\t\t\t\t\t</div>
\t\t\t\t";
        // line 15
        echo "\t\t\t\t<div class=\"d-flex flex-column ml-3\">
\t\t\t\t\t";
        // line 17
        echo "\t\t\t\t\t\t<span>";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 17), "user", [], "any", false, false, false, 17), "link", [], "any", false, false, false, 17), "getName", [], "method", false, false, false, 17);
        echo "</span>
\t\t\t\t\t\t<small class=\"text-muted\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 18), "lang", [], "any", false, false, false, 18), "parse", [], "any", false, false, false, 18), "Parse", [0 => "messages.conversation.status.last_seen", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 18), "date", [], "any", false, false, false, 18), "toHumanReadable", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 18), "user", [], "any", false, false, false, 18), "link", [], "any", false, false, false, 18), "getLastActivity", [], "method", false, false, false, 18)], "method", false, false, false, 18)], "method", false, false, false, 18), "html", null, true);
        echo "</small>
\t\t\t\t\t";
        // line 20
        echo "\t\t\t\t</div>
\t\t\t\t";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 21), "user", [], "any", false, false, false, 21), "link", [], "any", false, false, false, 21), "unsetUser", [], "method", false, false, false, 21), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div class=\"app-post-manage d-flex align-items-center ml-auto\">
\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t<button class=\"btn btn-app-dd no-anim-ui icon gear dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right custom-menu custom-menu-md shadow animate slideIn\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 29), "lang", [], "any", false, false, false, 29), "string", [], "any", false, false, false, 29), "messages", [], "any", false, false, false, 29), "conversation", [], "any", false, false, false, 29), "options", [], "any", false, false, false, 29), "title", [], "any", false, false, false, 29), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
        // line 33
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "conversation", [], "any", false, false, false, 33), "is_archived", [], "any", false, false, false, 33) === "0")) {
            // line 34
            echo "\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"conversation-archive\" href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t<span data-text=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 36), "lang", [], "any", false, false, false, 36), "string", [], "any", false, false, false, 36), "messages", [], "any", false, false, false, 36), "conversation", [], "any", false, false, false, 36), "options", [], "any", false, false, false, 36), "buttons", [], "any", false, false, false, 36), "archive", [], "any", false, false, false, 36), "html", null, true);
            echo "\" data-toggle-text=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 36), "lang", [], "any", false, false, false, 36), "string", [], "any", false, false, false, 36), "messages", [], "any", false, false, false, 36), "conversation", [], "any", false, false, false, 36), "options", [], "any", false, false, false, 36), "buttons", [], "any", false, false, false, 36), "remove_archive", [], "any", false, false, false, 36), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 36), "lang", [], "any", false, false, false, 36), "string", [], "any", false, false, false, 36), "messages", [], "any", false, false, false, 36), "conversation", [], "any", false, false, false, 36), "options", [], "any", false, false, false, 36), "buttons", [], "any", false, false, false, 36), "archive", [], "any", false, false, false, 36), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
        } else {
            // line 40
            echo "\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"conversation-remove-archive\" href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t<span data-text=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 42), "lang", [], "any", false, false, false, 42), "string", [], "any", false, false, false, 42), "messages", [], "any", false, false, false, 42), "conversation", [], "any", false, false, false, 42), "options", [], "any", false, false, false, 42), "buttons", [], "any", false, false, false, 42), "archive", [], "any", false, false, false, 42), "html", null, true);
            echo "\" data-toggle-text=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 42), "lang", [], "any", false, false, false, 42), "string", [], "any", false, false, false, 42), "messages", [], "any", false, false, false, 42), "conversation", [], "any", false, false, false, 42), "options", [], "any", false, false, false, 42), "buttons", [], "any", false, false, false, 42), "remove_archive", [], "any", false, false, false, 42), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 42), "lang", [], "any", false, false, false, 42), "string", [], "any", false, false, false, 42), "messages", [], "any", false, false, false, 42), "conversation", [], "any", false, false, false, 42), "options", [], "any", false, false, false, 42), "buttons", [], "any", false, false, false, 42), "remove_archive", [], "any", false, false, false, 42), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"conversation-remove\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t<span>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 48), "lang", [], "any", false, false, false, 48), "string", [], "any", false, false, false, 48), "container", [], "any", false, false, false, 48), "buttons", [], "any", false, false, false, 48), "delete", [], "any", false, false, false, 48), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<button class=\"post-refresh ml-2\" data-ui=\"conversation-refresher\" aria-label=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 54), "lang", [], "any", false, false, false, 54), "string", [], "any", false, false, false, 54), "container", [], "any", false, false, false, 54), "buttons", [], "any", false, false, false, 54), "refresh", [], "any", false, false, false, 54), "html", null, true);
        echo "\"></button>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"border-bottom pl-4 pr-0 pt-0 pb-2\">
\t\t<div class=\"messages scrollable d-flex flex-column pl-3 pr-4 pt-2\">
\t\t\t<p class=\"info bg-dark text-center text-white mb-0\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 60), "date", [], "any", false, false, false, 60), "toHumanReadable", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "conversation", [], "any", false, false, false, 60), "dateline", [], "any", false, false, false, 60)], "method", false, false, false, 60), "html", null, true);
        echo "</p>
\t\t\t";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "messages", [], "any", false, false, false, 61));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 62
            echo "\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "sender_id", [], "any", false, false, false, 62) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 62), "user_id", [], "any", false, false, false, 62))) {
                // line 63
                echo "\t\t\t\t\t<div class=\"me shadow mb-lg-3 mb-4\" data-time=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "dateline", [], "any", false, false, false, 63), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
                // line 64
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "is_seeing", [], "any", false, false, false, 64) === "0")) {
                    // line 65
                    echo "\t\t\t\t\t\t\t<div title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 65), "lang", [], "any", false, false, false, 65), "string", [], "any", false, false, false, 65), "messages", [], "any", false, false, false, 65), "conversation", [], "any", false, false, false, 65), "status", [], "any", false, false, false, 65), "delivered", [], "any", false, false, false, 65), "html", null, true);
                    echo "\"data-is-seeing=\"0\"></div>
\t\t\t\t\t\t";
                } else {
                    // line 67
                    echo "\t\t\t\t\t\t\t<div title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 67), "lang", [], "any", false, false, false, 67), "string", [], "any", false, false, false, 67), "messages", [], "any", false, false, false, 67), "conversation", [], "any", false, false, false, 67), "status", [], "any", false, false, false, 67), "seen", [], "any", false, false, false, 67), "html", null, true);
                    echo "\"data-is-seeing=\"1\"></div>
\t\t\t\t\t\t";
                }
                // line 69
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "sender_id", [], "any", false, false, false, 69) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 69), "user_id", [], "any", false, false, false, 69))) {
                    // line 70
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 70), "user", [], "any", false, false, false, 70), "link", [], "any", false, false, false, 70), "setUser", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "sender_id", [], "any", false, false, false, 70)], "method", false, false, false, 70), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 72
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 72), "user", [], "any", false, false, false, 72), "link", [], "any", false, false, false, 72), "setUser", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "user_id", [], "any", false, false, false, 72)], "method", false, false, false, 72), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                }
                // line 74
                echo "\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t";
                // line 75
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 75), "user", [], "any", false, false, false, 75), "link", [], "any", false, false, false, 75), "getProfilePicture", [0 => false], "method", false, false, false, 75);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 77), "user", [], "any", false, false, false, 77), "link", [], "any", false, false, false, 77), "unsetUser", [], "method", false, false, false, 77), "html", null, true);
                echo "
\t\t\t\t\t\t";
                // line 79
                echo "\t\t\t\t\t\t\t<span>";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 79);
                echo "</span>
\t\t\t\t\t\t";
                // line 81
                echo "\t\t\t\t\t\t<div class=\"anim-area\">
\t\t\t\t\t\t\t<div class=\"post-loader-spin d-none\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<small class=\"text-muted\">";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 84), "date", [], "any", false, false, false, 84), "toHumanReadable", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "dateline", [], "any", false, false, false, 84)], "method", false, false, false, 84), "html", null, true);
                echo "</small>
\t\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 87
                echo "\t\t\t\t\t<div class=\"them shadow mb-lg-3 mb-4\" data-time=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "dateline", [], "any", false, false, false, 87), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
                // line 88
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "sender_id", [], "any", false, false, false, 88) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 88), "user_id", [], "any", false, false, false, 88))) {
                    // line 89
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 89), "user", [], "any", false, false, false, 89), "link", [], "any", false, false, false, 89), "setUser", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "user_id", [], "any", false, false, false, 89)], "method", false, false, false, 89), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 91
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 91), "user", [], "any", false, false, false, 91), "link", [], "any", false, false, false, 91), "setUser", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "sender_id", [], "any", false, false, false, 91)], "method", false, false, false, 91), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                }
                // line 93
                echo "\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t";
                // line 94
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 94), "user", [], "any", false, false, false, 94), "link", [], "any", false, false, false, 94), "getProfilePicture", [0 => false], "method", false, false, false, 94);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 96), "user", [], "any", false, false, false, 96), "link", [], "any", false, false, false, 96), "unsetUser", [], "method", false, false, false, 96), "html", null, true);
                echo "
\t\t\t\t\t\t";
                // line 98
                echo "\t\t\t\t\t\t\t<span>";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 98);
                echo "</span>
\t\t\t\t\t\t";
                // line 100
                echo "\t\t\t\t\t\t<small class=\"text-muted\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 100), "date", [], "any", false, false, false, 100), "toHumanReadable", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "dateline", [], "any", false, false, false, 100)], "method", false, false, false, 100), "html", null, true);
                echo "</small>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 103
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "\t\t\t<div class=\"me new-message shadow mb-lg-3 mb-4 animate slideIn d-none\">
\t\t\t\t<div title=\"";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 105), "lang", [], "any", false, false, false, 105), "string", [], "any", false, false, false, 105), "messages", [], "any", false, false, false, 105), "conversation", [], "any", false, false, false, 105), "status", [], "any", false, false, false, 105), "delivered", [], "any", false, false, false, 105), "html", null, true);
        echo "\"></div>
\t\t\t\t";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 106), "user", [], "any", false, false, false, 106), "link", [], "any", false, false, false, 106), "setUser", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 106), "user_id", [], "any", false, false, false, 106)], "method", false, false, false, 106), "html", null, true);
        echo "
\t\t\t\t<div class=\"user\">
\t\t\t\t\t";
        // line 109
        echo "\t\t\t\t\t\t";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 109), "user", [], "any", false, false, false, 109), "link", [], "any", false, false, false, 109), "getProfilePicture", [0 => false], "method", false, false, false, 109);
        echo "
\t\t\t\t\t";
        // line 111
        echo "\t\t\t\t</div>
\t\t\t\t";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 112), "user", [], "any", false, false, false, 112), "link", [], "any", false, false, false, 112), "unsetUser", [], "method", false, false, false, 112), "html", null, true);
        echo "
\t\t\t\t<span></span>
\t\t\t\t<div class=\"anim-area\">
\t\t\t\t\t<div class=\"post-loader-spin d-block\"></div>
\t\t\t\t</div>
\t\t\t\t<small class=\"text-muted\">";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 117), "lang", [], "any", false, false, false, 117), "string", [], "any", false, false, false, 117), "messages", [], "any", false, false, false, 117), "conversation", [], "any", false, false, false, 117), "just_before", [], "any", false, false, false, 117), "html", null, true);
        echo "</small>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 121
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "conversation", [], "any", false, false, false, 121), "is_archived", [], "any", false, false, false, 121) === "0")) {
            // line 122
            echo "\t\t<form method=\"post\" id=\"form-message-create\">
\t\t\t<div class=\"app-post app-post-create app-message-create bg-light-transparent pl-3 pr-3 pt-2 pb-2\">
\t\t\t\t<div class=\"hide-editor d-none\">
\t\t\t\t\t<div class=\"backdrop\"></div>
\t\t\t\t\t<div class=\"text d-flex justify-content-center align-items-center text-dark\">";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 126), "lang", [], "any", false, false, false, 126), "string", [], "any", false, false, false, 126), "index", [], "any", false, false, false, 126), "search", [], "any", false, false, false, 126), "stop_search", [], "any", false, false, false, 126), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"post-layout border-top-0 p-0\">
\t\t\t\t\t<div class=\"progress d-none\">
\t\t\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"post-user\">
\t\t\t\t\t\t";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 133), "user", [], "any", false, false, false, 133), "link", [], "any", false, false, false, 133), "setUser", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 133), "user_id", [], "any", false, false, false, 133)], "method", false, false, false, 133), "html", null, true);
            echo "
\t\t\t\t\t\t";
            // line 135
            echo "\t\t\t\t\t\t\t";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 135), "user", [], "any", false, false, false, 135), "link", [], "any", false, false, false, 135), "getProfilePicture", [0 => false], "method", false, false, false, 135);
            echo "
\t\t\t\t\t\t";
            // line 137
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 137), "user", [], "any", false, false, false, 137), "unsetUser", [], "method", false, false, false, 137), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"post-content pt-1\">
\t\t\t\t\t\t";
            // line 140
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 140), "getActiveBan", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 140), "user_id", [], "any", false, false, false, 140)], "method", false, false, false, 140)) {
                // line 141
                echo "\t\t\t\t\t\t\t<div class=\"title-area d-flex mb-2\">
\t\t\t\t\t\t\t    <textarea class=\"expand scrollable w-100\" style=\"max-height:inherit\" rows=\"5\" name=\"text\" placeholder=\"";
                // line 142
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 142), "lang", [], "any", false, false, false, 142), "string", [], "any", false, false, false, 142), "container", [], "any", false, false, false, 142), "editor", [], "any", false, false, false, 142), "placeholder", [], "any", false, false, false, 142), "message", [], "any", false, false, false, 142), "html", null, true);
                echo "\"></textarea>
\t\t\t\t\t\t\t    <button type=\"button\" class=\"submit ml-2\" aria-label=\"";
                // line 143
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 143), "lang", [], "any", false, false, false, 143), "string", [], "any", false, false, false, 143), "container", [], "any", false, false, false, 143), "buttons", [], "any", false, false, false, 143), "submit", [], "any", false, false, false, 143), "html", null, true);
                echo "\"></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            } else {
                // line 146
                echo "\t\t\t\t\t\t\t<div class=\"text-dark\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 146), "lang", [], "any", false, false, false, 146), "string", [], "any", false, false, false, 146), "container", [], "any", false, false, false, 146), "visitor", [], "any", false, false, false, 146), "ban_message", [], "any", false, false, false, 146), "html", null, true);
                echo "</div>
\t\t\t\t\t\t";
            }
            // line 148
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t";
        } else {
            // line 153
            echo "\t\t<div class=\"bg-light-transparent text-center pl-3 pr-3 pt-2 pb-2\">
\t\t\t<span>";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 154), "lang", [], "any", false, false, false, 154), "string", [], "any", false, false, false, 154), "messages", [], "any", false, false, false, 154), "conversation", [], "any", false, false, false, 154), "archived_text", [], "any", false, false, false, 154), "html", null, true);
            echo "</span>
\t\t</div>
\t";
        }
        // line 157
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "conversation.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 157,  378 => 154,  375 => 153,  368 => 148,  362 => 146,  356 => 143,  352 => 142,  349 => 141,  347 => 140,  340 => 137,  335 => 135,  331 => 133,  321 => 126,  315 => 122,  313 => 121,  306 => 117,  298 => 112,  295 => 111,  290 => 109,  285 => 106,  281 => 105,  278 => 104,  272 => 103,  265 => 100,  260 => 98,  256 => 96,  251 => 94,  248 => 93,  242 => 91,  236 => 89,  234 => 88,  229 => 87,  223 => 84,  218 => 81,  213 => 79,  209 => 77,  204 => 75,  201 => 74,  195 => 72,  189 => 70,  186 => 69,  180 => 67,  174 => 65,  172 => 64,  167 => 63,  164 => 62,  160 => 61,  156 => 60,  147 => 54,  138 => 48,  134 => 46,  123 => 42,  119 => 40,  108 => 36,  104 => 34,  102 => 33,  95 => 29,  84 => 21,  81 => 20,  77 => 18,  72 => 17,  69 => 15,  64 => 12,  61 => 11,  59 => 10,  53 => 8,  47 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"app-box shadow rounded animate slideIn\" data-message-id=\"{{ string.conversation.parent_id }}\">
\t<div class=\"bg-light-transparent border-bottom shadow-sm pl-4 pr-4 pt-3 pb-3\">
\t\t<div class=\"d-flex align-items-center\">
\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t{% if string.conversation.sender_id is same as(app.visitor.user_id) %}
\t\t\t\t\t{{ app.sub.user.link.setUser(string.conversation.user_id) }}
\t\t\t\t{% else %}
\t\t\t\t\t{{ app.sub.user.link.setUser(string.conversation.sender_id) }}
\t\t\t\t{% endif %}
\t\t\t\t{% autoescape 'html' %}
\t\t\t\t\t<div class=\"post-user\">
\t\t\t\t\t\t{{ app.sub.user.link.getLinkWithProfilePicture()|raw }}
\t\t\t\t\t</div>
\t\t\t\t{% endautoescape %}
\t\t\t\t<div class=\"d-flex flex-column ml-3\">
\t\t\t\t\t{% autoescape 'html' %}
\t\t\t\t\t\t<span>{{ app.sub.user.link.getName()|raw }}</span>
\t\t\t\t\t\t<small class=\"text-muted\">{{ app.sub.lang.parse.Parse('messages.conversation.status.last_seen', app.timer.date.toHumanReadable(app.sub.user.link.getLastActivity())) }}</small>
\t\t\t\t\t{% endautoescape %}
\t\t\t\t</div>
\t\t\t\t{{ app.sub.user.link.unsetUser() }}
\t\t\t</div>
\t\t\t<div class=\"app-post-manage d-flex align-items-center ml-auto\">
\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t<button class=\"btn btn-app-dd no-anim-ui icon gear dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right custom-menu custom-menu-md shadow animate slideIn\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span>{{ app.sub.lang.string.messages.conversation.options.title }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t{% if string.conversation.is_archived is same as('0') %}
\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"conversation-archive\" href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t<span data-text=\"{{ app.sub.lang.string.messages.conversation.options.buttons.archive }}\" data-toggle-text=\"{{ app.sub.lang.string.messages.conversation.options.buttons.remove_archive }}\">{{ app.sub.lang.string.messages.conversation.options.buttons.archive }}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"conversation-remove-archive\" href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t\t<span data-text=\"{{ app.sub.lang.string.messages.conversation.options.buttons.archive }}\" data-toggle-text=\"{{ app.sub.lang.string.messages.conversation.options.buttons.remove_archive }}\">{{ app.sub.lang.string.messages.conversation.options.buttons.remove_archive }}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% endif  %}
\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"conversation-remove\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t<span>{{ app.sub.lang.string.container.buttons.delete }}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<button class=\"post-refresh ml-2\" data-ui=\"conversation-refresher\" aria-label=\"{{ app.sub.lang.string.container.buttons.refresh }}\"></button>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"border-bottom pl-4 pr-0 pt-0 pb-2\">
\t\t<div class=\"messages scrollable d-flex flex-column pl-3 pr-4 pt-2\">
\t\t\t<p class=\"info bg-dark text-center text-white mb-0\">{{ app.timer.date.toHumanReadable(string.conversation.dateline) }}</p>
\t\t\t{% for item in string.messages %}
\t\t\t\t{% if item.sender_id is same as(app.visitor.user_id) %}
\t\t\t\t\t<div class=\"me shadow mb-lg-3 mb-4\" data-time=\"{{ item.dateline }}\">
\t\t\t\t\t\t{% if item.is_seeing is same as('0') %}
\t\t\t\t\t\t\t<div title=\"{{ app.sub.lang.string.messages.conversation.status.delivered }}\"data-is-seeing=\"0\"></div>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div title=\"{{ app.sub.lang.string.messages.conversation.status.seen }}\"data-is-seeing=\"1\"></div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if item.sender_id is same as(app.visitor.user_id) %}
\t\t\t\t\t\t\t{{ app.sub.user.link.setUser(item.sender_id) }}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{{ app.sub.user.link.setUser(item.user_id) }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t{{ app.sub.user.link.getProfilePicture(false)|raw }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{{ app.sub.user.link.unsetUser() }}
\t\t\t\t\t\t{% autoescape 'html' %}
\t\t\t\t\t\t\t<span>{{ item.text|raw }}</span>
\t\t\t\t\t\t{% endautoescape %}
\t\t\t\t\t\t<div class=\"anim-area\">
\t\t\t\t\t\t\t<div class=\"post-loader-spin d-none\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<small class=\"text-muted\">{{ app.timer.date.toHumanReadable(item.dateline) }}</small>
\t\t\t\t\t</div>
\t\t\t\t{% else %}
\t\t\t\t\t<div class=\"them shadow mb-lg-3 mb-4\" data-time=\"{{ item.dateline }}\">
\t\t\t\t\t\t{% if item.sender_id is same as(app.visitor.user_id) %}
\t\t\t\t\t\t\t{{ app.sub.user.link.setUser(item.user_id) }}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{{ app.sub.user.link.setUser(item.sender_id) }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t{{ app.sub.user.link.getProfilePicture(false)|raw }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{{ app.sub.user.link.unsetUser() }}
\t\t\t\t\t\t{% autoescape 'html' %}
\t\t\t\t\t\t\t<span>{{ item.text|raw }}</span>
\t\t\t\t\t\t{% endautoescape %}
\t\t\t\t\t\t<small class=\"text-muted\">{{ app.timer.date.toHumanReadable(item.dateline) }}</small>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t\t<div class=\"me new-message shadow mb-lg-3 mb-4 animate slideIn d-none\">
\t\t\t\t<div title=\"{{ app.sub.lang.string.messages.conversation.status.delivered }}\"></div>
\t\t\t\t{{ app.sub.user.link.setUser(app.visitor.user_id) }}
\t\t\t\t<div class=\"user\">
\t\t\t\t\t{% autoescape 'html' %}
\t\t\t\t\t\t{{ app.sub.user.link.getProfilePicture(false)|raw }}
\t\t\t\t\t{% endautoescape %}
\t\t\t\t</div>
\t\t\t\t{{ app.sub.user.link.unsetUser() }}
\t\t\t\t<span></span>
\t\t\t\t<div class=\"anim-area\">
\t\t\t\t\t<div class=\"post-loader-spin d-block\"></div>
\t\t\t\t</div>
\t\t\t\t<small class=\"text-muted\">{{ app.sub.lang.string.messages.conversation.just_before }}</small>
\t\t\t</div>
\t\t</div>
\t</div>
\t{% if string.conversation.is_archived is same as('0') %}
\t\t<form method=\"post\" id=\"form-message-create\">
\t\t\t<div class=\"app-post app-post-create app-message-create bg-light-transparent pl-3 pr-3 pt-2 pb-2\">
\t\t\t\t<div class=\"hide-editor d-none\">
\t\t\t\t\t<div class=\"backdrop\"></div>
\t\t\t\t\t<div class=\"text d-flex justify-content-center align-items-center text-dark\">{{ app.sub.lang.string.index.search.stop_search }}</div>
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
\t\t\t\t\t\t{% if not app.user.getActiveBan(app.visitor.user_id) %}
\t\t\t\t\t\t\t<div class=\"title-area d-flex mb-2\">
\t\t\t\t\t\t\t    <textarea class=\"expand scrollable w-100\" style=\"max-height:inherit\" rows=\"5\" name=\"text\" placeholder=\"{{ app.sub.lang.string.container.editor.placeholder.message }}\"></textarea>
\t\t\t\t\t\t\t    <button type=\"button\" class=\"submit ml-2\" aria-label=\"{{ app.sub.lang.string.container.buttons.submit }}\"></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div class=\"text-dark\">{{ app.sub.lang.string.container.visitor.ban_message }}</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t{% else %}
\t\t<div class=\"bg-light-transparent text-center pl-3 pr-3 pt-2 pb-2\">
\t\t\t<span>{{ app.sub.lang.string.messages.conversation.archived_text }}</span>
\t\t</div>
\t{% endif %}
</div>", "conversation.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Messages\\conversation.tpl");
    }
}
