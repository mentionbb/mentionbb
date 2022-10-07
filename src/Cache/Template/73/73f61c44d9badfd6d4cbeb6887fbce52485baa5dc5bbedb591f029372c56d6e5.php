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

/* usermenu_member.tpl */
class __TwigTemplate_e2844e55f6ce56af3016fc21a8bd2ad7d8fdd916c60c69fd208316932564fbce extends Template
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 1), "loggedIn", [], "method", false, false, false, 1)) {
            // line 2
            echo "\t<div class=\"app-account-area d-flex\">
\t\t<div class=\"dropdown\">
\t\t\t<button class=\"btn btn-app-account no-anim-ui icon messages pr-0\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-id=\"usermenuMessages\">
\t\t\t\t";
            // line 5
            $context["message_count"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 5), "messages", [], "any", false, false, false, 5), "getMessageCount", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 5), "user_id", [], "any", false, false, false, 5)], "method", false, false, false, 5);
            // line 6
            echo "\t\t\t\t<span class=\"message-count\">";
            echo twig_escape_filter($this->env, ($context["message_count"] ?? null), "html", null, true);
            echo "</span>
\t\t\t</button>
\t\t\t<div class=\"dropdown-menu message-menu dropdown-menu-right custom-menu animate fadeIn shadow p-0\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<span>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 11), "lang", [], "any", false, false, false, 11), "string", [], "any", false, false, false, 11), "container", [], "any", false, false, false, 11), "message", [], "any", false, false, false, 11), "title", [], "any", false, false, false, 11), "html", null, true);
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a title=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 14), "lang", [], "any", false, false, false, 14), "string", [], "any", false, false, false, 14), "container", [], "any", false, false, false, 14), "buttons", [], "any", false, false, false, 14), "refresh", [], "any", false, false, false, 14), "html", null, true);
            echo "\" href=\"#\" data-ui=\"message-refresher\">
\t\t\t\t\t\t\t<i class=\"fas fa-sync-alt\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a title=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 17), "lang", [], "any", false, false, false, 17), "string", [], "any", false, false, false, 17), "container", [], "any", false, false, false, 17), "message", [], "any", false, false, false, 17), "buttons", [], "any", false, false, false, 17), "mark_read", [], "any", false, false, false, 17), "html", null, true);
            echo "\" href=\"#\" data-ui=\"markread-messages\">
\t\t\t\t\t\t\t<i class=\"fas fa-check-square\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a title=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 22), "lang", [], "any", false, false, false, 22), "string", [], "any", false, false, false, 22), "container", [], "any", false, false, false, 22), "message", [], "any", false, false, false, 22), "buttons", [], "any", false, false, false, 22), "new", [], "any", false, false, false, 22), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 22), "buildLink", [0 => "messages", 1 => ["section" => "new"]], "method", false, false, false, 22), "html", null, true);
            echo "\" data-ui=\"quick-message-sender\">
\t\t\t\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"scrollable\">
\t\t\t\t\t";
            // line 28
            $this->loadTemplate("usermenu_messages.tpl", "usermenu_member.tpl", 28)->display($context);
            // line 29
            echo "\t\t\t\t\t<div class=\"post-loader-spin\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"extra-button pt-2 pb-2 text-center\">
\t\t\t\t\t<a class=\"text-dark font-weight-bold\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 32), "buildLink", [0 => "messages", 1 => []], "method", false, false, false, 32), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 32), "lang", [], "any", false, false, false, 32), "string", [], "any", false, false, false, 32), "container", [], "any", false, false, false, 32), "buttons", [], "any", false, false, false, 32), "show_all", [], "any", false, false, false, 32), "html", null, true);
            echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"dropdown ml-2 mr-2\">
\t\t\t<button class=\"btn btn-app-account no-anim-ui icon notification pr-0\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-id=\"usermenuNotifications\">
\t\t\t\t";
            // line 38
            $context["notify_count"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 38), "notification", [], "any", false, false, false, 38), "getNotificationCount", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 38), "user_id", [], "any", false, false, false, 38)], "method", false, false, false, 38);
            // line 39
            echo "\t\t\t\t<span class=\"notify-count\">";
            echo twig_escape_filter($this->env, ($context["notify_count"] ?? null), "html", null, true);
            echo "</span>
\t\t\t</button>
\t\t\t<div class=\"dropdown-menu notification-menu dropdown-menu-right custom-menu animate fadeIn shadow p-0\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<span>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 44), "lang", [], "any", false, false, false, 44), "string", [], "any", false, false, false, 44), "container", [], "any", false, false, false, 44), "notification", [], "any", false, false, false, 44), "title", [], "any", false, false, false, 44), "html", null, true);
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a title=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 47), "lang", [], "any", false, false, false, 47), "string", [], "any", false, false, false, 47), "container", [], "any", false, false, false, 47), "buttons", [], "any", false, false, false, 47), "refresh", [], "any", false, false, false, 47), "html", null, true);
            echo "\" href=\"#\" data-ui=\"notification-refresher\">
\t\t\t\t\t\t\t<i class=\"fas fa-sync-alt\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a title=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 52), "lang", [], "any", false, false, false, 52), "string", [], "any", false, false, false, 52), "container", [], "any", false, false, false, 52), "notification", [], "any", false, false, false, 52), "buttons", [], "any", false, false, false, 52), "settings", [], "any", false, false, false, 52), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 52), "buildLink", [0 => "account", 1 => ["page" => "privacy"]], "method", false, false, false, 52), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<i class=\"fas fa-cog\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"scrollable\">
\t\t\t\t\t";
            // line 58
            $this->loadTemplate("usermenu_notification.tpl", "usermenu_member.tpl", 58)->display($context);
            // line 59
            echo "\t\t\t\t\t<div class=\"post-loader-spin\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"extra-button pt-2 pb-2 text-center\">
\t\t\t\t\t<a class=\"text-dark font-weight-bold\" href=\"#\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 62), "lang", [], "any", false, false, false, 62), "string", [], "any", false, false, false, 62), "container", [], "any", false, false, false, 62), "buttons", [], "any", false, false, false, 62), "show_all", [], "any", false, false, false, 62), "html", null, true);
            echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"dropdown\">
\t\t\t<button class=\"btn btn-app-account no-anim-ui dropdown-toggle ml-1 pr-0\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-id=\"usermenuQuickmenu\">
\t\t\t\t<span>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 68), "username", [], "any", false, false, false, 68), "html", null, true);
            echo "</span>
\t\t\t\t";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 69), "user", [], "any", false, false, false, 69), "link", [], "any", false, false, false, 69), "setUser", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 69), "user_id", [], "any", false, false, false, 69)], "method", false, false, false, 69), "html", null, true);
            echo "
\t\t\t\t";
            // line 71
            echo "\t\t\t\t\t";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 71), "user", [], "any", false, false, false, 71), "link", [], "any", false, false, false, 71), "getProfilePicture", [0 => false], "method", false, false, false, 71);
            echo "
\t\t\t\t";
            // line 73
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 73), "user", [], "any", false, false, false, 73), "link", [], "any", false, false, false, 73), "unsetUser", [], "any", false, false, false, 73), "html", null, true);
            echo "
\t\t\t</button>
\t\t\t<div class=\"dropdown-menu dropdown-menu-right custom-menu animate fadeIn shadow p-0\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t<div class=\"title shadow-dark\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<span>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 78), "lang", [], "any", false, false, false, 78), "string", [], "any", false, false, false, 78), "container", [], "any", false, false, false, 78), "quick_menu", [], "any", false, false, false, 78), "html", null, true);
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a title=\"";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 81), "lang", [], "any", false, false, false, 81), "string", [], "any", false, false, false, 81), "container", [], "any", false, false, false, 81), "usermenu", [], "any", false, false, false, 81), "buttons", [], "any", false, false, false, 81), "control_panel", [], "any", false, false, false, 81), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 81), "buildLink", [0 => "account", 1 => []], "method", false, false, false, 81), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<i class=\"fas fa-cog\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a title=\"";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 84), "lang", [], "any", false, false, false, 84), "string", [], "any", false, false, false, 84), "container", [], "any", false, false, false, 84), "usermenu", [], "any", false, false, false, 84), "buttons", [], "any", false, false, false, 84), "password", [], "any", false, false, false, 84), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 84), "buildLink", [0 => "account", 1 => ["page" => "security"]], "method", false, false, false, 84), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<i class=\"fas fa-key\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a title=\"";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 87), "lang", [], "any", false, false, false, 87), "string", [], "any", false, false, false, 87), "container", [], "any", false, false, false, 87), "usermenu", [], "any", false, false, false, 87), "buttons", [], "any", false, false, false, 87), "two_step_verification", [], "any", false, false, false, 87), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 87), "buildLink", [0 => "account", 1 => ["page" => "two-step-verification"]], "method", false, false, false, 87), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<i class=\"fas fa-user-check\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a title=\"";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 90), "lang", [], "any", false, false, false, 90), "string", [], "any", false, false, false, 90), "container", [], "any", false, false, false, 90), "usermenu", [], "any", false, false, false, 90), "buttons", [], "any", false, false, false, 90), "profile_picture", [], "any", false, false, false, 90), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 90), "buildLink", [0 => "account", 1 => []], "method", false, false, false, 90), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<i class=\"fas fa-user-circle\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"scrollable\">
\t\t\t\t\t";
            // line 96
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 96), "is_admin", [], "any", false, false, false, 96)) {
                // line 97
                echo "\t\t\t\t\t\t<a class=\"notification bg-admin quick-menu d-flex\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 97), "buildLink", [0 => "adminIndex", 1 => []], "method", false, false, false, 97), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t<span class=\"icon admin\">";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 99), "lang", [], "any", false, false, false, 99), "string", [], "any", false, false, false, 99), "container", [], "any", false, false, false, 99), "usermenu", [], "any", false, false, false, 99), "links", [], "any", false, false, false, 99), "admin", [], "any", false, false, false, 99), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            // line 103
            echo "\t\t\t\t\t<div class=\"notification bg-dark quick-menu d-flex\">
\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t<span class=\"icon night\">";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 105), "lang", [], "any", false, false, false, 105), "string", [], "any", false, false, false, 105), "container", [], "any", false, false, false, 105), "usermenu", [], "any", false, false, false, 105), "links", [], "any", false, false, false, 105), "night_mode", [], "any", false, false, false, 105), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t<label class=\"app-theme-mode switch mr-3 mb-0\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\">
\t\t\t\t\t\t\t\t<span class=\"slider\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"notification quick-menu d-flex\" href=\"";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 112), "buildLink", [0 => "profile", 1 => ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 112), "username", [], "any", false, false, false, 112), "user_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 112), "user_id", [], "any", false, false, false, 112)]], "method", false, false, false, 112), "html", null, true);
            echo "\">
\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t<span class=\"icon user\">";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 114), "lang", [], "any", false, false, false, 114), "string", [], "any", false, false, false, 114), "container", [], "any", false, false, false, 114), "usermenu", [], "any", false, false, false, 114), "links", [], "any", false, false, false, 114), "profile", [], "any", false, false, false, 114), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"notification quick-menu d-flex\" href=\"";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 117), "buildLink", [0 => "account", 1 => ["page" => "bookmarks"]], "method", false, false, false, 117), "html", null, true);
            echo "\">
\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t<span class=\"icon bookmark\">";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 119), "lang", [], "any", false, false, false, 119), "string", [], "any", false, false, false, 119), "container", [], "any", false, false, false, 119), "usermenu", [], "any", false, false, false, 119), "links", [], "any", false, false, false, 119), "bookmarks", [], "any", false, false, false, 119), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"notification quick-menu d-flex\" href=\"";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 122), "buildLink", [0 => "profile", 1 => ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 122), "username", [], "any", false, false, false, 122), "user_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 122), "user_id", [], "any", false, false, false, 122), "tab" => "posts"]], "method", false, false, false, 122), "html", null, true);
            echo "\">
\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t<span class=\"icon post\">";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 124), "lang", [], "any", false, false, false, 124), "string", [], "any", false, false, false, 124), "container", [], "any", false, false, false, 124), "usermenu", [], "any", false, false, false, 124), "links", [], "any", false, false, false, 124), "posts", [], "any", false, false, false, 124), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"notification quick-menu d-flex\" href=\"#\" data-ui=\"sign-out-confirmation\">
\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t<span class=\"icon sign-out\">";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 129), "lang", [], "any", false, false, false, 129), "string", [], "any", false, false, false, 129), "container", [], "any", false, false, false, 129), "usermenu", [], "any", false, false, false, 129), "links", [], "any", false, false, false, 129), "sign_out", [], "any", false, false, false, 129), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"extra-button pt-2 pb-2 text-center\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        } else {
            // line 138
            echo "\t<div class=\"app-account-area d-flex\">
\t\t<div class=\"dropdown\">
\t\t\t<button class=\"btn btn-app-account no-anim-ui dropdown-toggle ml-1 pr-0\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t<span>";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 141), "lang", [], "any", false, false, false, 141), "string", [], "any", false, false, false, 141), "container", [], "any", false, false, false, 141), "usermenu", [], "any", false, false, false, 141), "guest", [], "any", false, false, false, 141), "title", [], "any", false, false, false, 141), "html", null, true);
            echo "</span>
\t\t\t\t<img class=\"rounded-circle\" src=\"";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 142), "html", null, true);
            echo "/uploads/profile_picture/default.svg\" />
\t\t\t</button>
\t\t\t<div class=\"dropdown-menu dropdown-menu-right custom-menu animate slideIn shadow p-0\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t<div class=\"title shadow-dark\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<span>";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 147), "lang", [], "any", false, false, false, 147), "string", [], "any", false, false, false, 147), "container", [], "any", false, false, false, 147), "quick_menu", [], "any", false, false, false, 147), "html", null, true);
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"scrollable\">
\t\t\t\t\t<div class=\"notification bg-dark quick-menu d-flex\">
\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t<span class=\"icon night\">";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 153), "lang", [], "any", false, false, false, 153), "string", [], "any", false, false, false, 153), "container", [], "any", false, false, false, 153), "usermenu", [], "any", false, false, false, 153), "links", [], "any", false, false, false, 153), "night_mode", [], "any", false, false, false, 153), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t<label class=\"app-theme-mode switch mr-3 mb-0\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\">
\t\t\t\t\t\t\t\t<span class=\"slider\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"login-attempt\" href=\"#\">
\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t<span class=\"icon sign-in\">";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 162), "lang", [], "any", false, false, false, 162), "string", [], "any", false, false, false, 162), "container", [], "any", false, false, false, 162), "buttons", [], "any", false, false, false, 162), "sign_in", [], "any", false, false, false, 162), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"register-attempt\" href=\"#\">
\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t<span class=\"icon register\">";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 167), "lang", [], "any", false, false, false, 167), "string", [], "any", false, false, false, 167), "container", [], "any", false, false, false, 167), "buttons", [], "any", false, false, false, 167), "register", [], "any", false, false, false, 167), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"extra-button pt-2 pb-2 text-center\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "usermenu_member.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 167,  333 => 162,  321 => 153,  312 => 147,  304 => 142,  300 => 141,  295 => 138,  283 => 129,  275 => 124,  270 => 122,  264 => 119,  259 => 117,  253 => 114,  248 => 112,  238 => 105,  234 => 103,  227 => 99,  221 => 97,  219 => 96,  208 => 90,  200 => 87,  192 => 84,  184 => 81,  178 => 78,  169 => 73,  164 => 71,  160 => 69,  156 => 68,  147 => 62,  142 => 59,  140 => 58,  129 => 52,  121 => 47,  115 => 44,  106 => 39,  104 => 38,  93 => 32,  88 => 29,  86 => 28,  75 => 22,  67 => 17,  61 => 14,  55 => 11,  46 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if app.user.loggedIn() %}
\t<div class=\"app-account-area d-flex\">
\t\t<div class=\"dropdown\">
\t\t\t<button class=\"btn btn-app-account no-anim-ui icon messages pr-0\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-id=\"usermenuMessages\">
\t\t\t\t{% set message_count = app.string.messages.getMessageCount(app.visitor.user_id) %}
\t\t\t\t<span class=\"message-count\">{{ message_count }}</span>
\t\t\t</button>
\t\t\t<div class=\"dropdown-menu message-menu dropdown-menu-right custom-menu animate fadeIn shadow p-0\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<span>{{ app.sub.lang.string.container.message.title }}</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a title=\"{{ app.sub.lang.string.container.buttons.refresh }}\" href=\"#\" data-ui=\"message-refresher\">
\t\t\t\t\t\t\t<i class=\"fas fa-sync-alt\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a title=\"{{ app.sub.lang.string.container.message.buttons.mark_read }}\" href=\"#\" data-ui=\"markread-messages\">
\t\t\t\t\t\t\t<i class=\"fas fa-check-square\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a title=\"{{ app.sub.lang.string.container.message.buttons.new }}\" href=\"{{ app.phrase.buildLink('messages', {'section': 'new'}) }}\" data-ui=\"quick-message-sender\">
\t\t\t\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"scrollable\">
\t\t\t\t\t{% include 'usermenu_messages.tpl' %}
\t\t\t\t\t<div class=\"post-loader-spin\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"extra-button pt-2 pb-2 text-center\">
\t\t\t\t\t<a class=\"text-dark font-weight-bold\" href=\"{{ app.phrase.buildLink('messages', {}) }}\">{{ app.sub.lang.string.container.buttons.show_all }}</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"dropdown ml-2 mr-2\">
\t\t\t<button class=\"btn btn-app-account no-anim-ui icon notification pr-0\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-id=\"usermenuNotifications\">
\t\t\t\t{% set notify_count = app.string.notification.getNotificationCount(app.visitor.user_id) %}
\t\t\t\t<span class=\"notify-count\">{{ notify_count }}</span>
\t\t\t</button>
\t\t\t<div class=\"dropdown-menu notification-menu dropdown-menu-right custom-menu animate fadeIn shadow p-0\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<span>{{ app.sub.lang.string.container.notification.title }}</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a title=\"{{ app.sub.lang.string.container.buttons.refresh }}\" href=\"#\" data-ui=\"notification-refresher\">
\t\t\t\t\t\t\t<i class=\"fas fa-sync-alt\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a title=\"{{ app.sub.lang.string.container.notification.buttons.settings }}\" href=\"{{ app.phrase.buildLink('account', {'page': 'privacy'}) }}\">
\t\t\t\t\t\t\t<i class=\"fas fa-cog\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"scrollable\">
\t\t\t\t\t{% include 'usermenu_notification.tpl' %}
\t\t\t\t\t<div class=\"post-loader-spin\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"extra-button pt-2 pb-2 text-center\">
\t\t\t\t\t<a class=\"text-dark font-weight-bold\" href=\"#\">{{ app.sub.lang.string.container.buttons.show_all }}</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"dropdown\">
\t\t\t<button class=\"btn btn-app-account no-anim-ui dropdown-toggle ml-1 pr-0\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-id=\"usermenuQuickmenu\">
\t\t\t\t<span>{{ app.visitor.username }}</span>
\t\t\t\t{{ app.sub.user.link.setUser(app.visitor.user_id) }}
\t\t\t\t{% autoescape 'html' %}
\t\t\t\t\t{{ app.sub.user.link.getProfilePicture(false)|raw }}
\t\t\t\t{% endautoescape %}
\t\t\t\t{{ app.sub.user.link.unsetUser }}
\t\t\t</button>
\t\t\t<div class=\"dropdown-menu dropdown-menu-right custom-menu animate fadeIn shadow p-0\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t<div class=\"title shadow-dark\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<span>{{ app.sub.lang.string.container.quick_menu }}</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a title=\"{{ app.sub.lang.string.container.usermenu.buttons.control_panel }}\" href=\"{{ app.phrase.buildLink('account', {}) }}\">
\t\t\t\t\t\t\t<i class=\"fas fa-cog\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a title=\"{{ app.sub.lang.string.container.usermenu.buttons.password }}\" href=\"{{ app.phrase.buildLink('account', {'page': 'security'}) }}\">
\t\t\t\t\t\t\t<i class=\"fas fa-key\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a title=\"{{ app.sub.lang.string.container.usermenu.buttons.two_step_verification }}\" href=\"{{ app.phrase.buildLink('account', {'page': 'two-step-verification'}) }}\">
\t\t\t\t\t\t\t<i class=\"fas fa-user-check\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a title=\"{{ app.sub.lang.string.container.usermenu.buttons.profile_picture }}\" href=\"{{ app.phrase.buildLink('account', {}) }}\">
\t\t\t\t\t\t\t<i class=\"fas fa-user-circle\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"scrollable\">
\t\t\t\t\t{% if app.visitor.is_admin %}
\t\t\t\t\t\t<a class=\"notification bg-admin quick-menu d-flex\" href=\"{{ app.phrase.buildLink('adminIndex', {}) }}\">
\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t<span class=\"icon admin\">{{ app.sub.lang.string.container.usermenu.links.admin }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"notification bg-dark quick-menu d-flex\">
\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t<span class=\"icon night\">{{ app.sub.lang.string.container.usermenu.links.night_mode }}</span>
\t\t\t\t\t\t\t<label class=\"app-theme-mode switch mr-3 mb-0\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\">
\t\t\t\t\t\t\t\t<span class=\"slider\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"notification quick-menu d-flex\" href=\"{{ app.phrase.buildLink('profile', {'username': app.visitor.username, 'user_id': app.visitor.user_id}) }}\">
\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t<span class=\"icon user\">{{ app.sub.lang.string.container.usermenu.links.profile }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"notification quick-menu d-flex\" href=\"{{ app.phrase.buildLink('account', {'page': 'bookmarks'}) }}\">
\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t<span class=\"icon bookmark\">{{ app.sub.lang.string.container.usermenu.links.bookmarks }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"notification quick-menu d-flex\" href=\"{{ app.phrase.buildLink('profile', {'username': app.visitor.username, 'user_id': app.visitor.user_id, 'tab': 'posts'}) }}\">
\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t<span class=\"icon post\">{{ app.sub.lang.string.container.usermenu.links.posts }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"notification quick-menu d-flex\" href=\"#\" data-ui=\"sign-out-confirmation\">
\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t<span class=\"icon sign-out\">{{ app.sub.lang.string.container.usermenu.links.sign_out }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"extra-button pt-2 pb-2 text-center\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
{% else %}
\t<div class=\"app-account-area d-flex\">
\t\t<div class=\"dropdown\">
\t\t\t<button class=\"btn btn-app-account no-anim-ui dropdown-toggle ml-1 pr-0\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t<span>{{ app.sub.lang.string.container.usermenu.guest.title }}</span>
\t\t\t\t<img class=\"rounded-circle\" src=\"{{ app.public_dir }}/uploads/profile_picture/default.svg\" />
\t\t\t</button>
\t\t\t<div class=\"dropdown-menu dropdown-menu-right custom-menu animate slideIn shadow p-0\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t<div class=\"title shadow-dark\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<span>{{ app.sub.lang.string.container.quick_menu }}</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"scrollable\">
\t\t\t\t\t<div class=\"notification bg-dark quick-menu d-flex\">
\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t<span class=\"icon night\">{{ app.sub.lang.string.container.usermenu.links.night_mode }}</span>
\t\t\t\t\t\t\t<label class=\"app-theme-mode switch mr-3 mb-0\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\">
\t\t\t\t\t\t\t\t<span class=\"slider\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"login-attempt\" href=\"#\">
\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t<span class=\"icon sign-in\">{{ app.sub.lang.string.container.buttons.sign_in }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"register-attempt\" href=\"#\">
\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t<span class=\"icon register\">{{ app.sub.lang.string.container.buttons.register }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"extra-button pt-2 pb-2 text-center\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endif %}", "usermenu_member.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Layout\\usermenu_member.tpl");
    }
}
