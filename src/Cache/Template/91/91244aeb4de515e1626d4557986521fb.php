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

/* @ComponentBundle_Admin/Users/ban_user.tpl */
class __TwigTemplate_d0b95b74795bc3a104cec90cc642e043 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'app_template_name' => [$this, 'block_app_template_name'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@ComponentBundle_Admin/container.tpl";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@ComponentBundle_Admin/container.tpl", "@ComponentBundle_Admin/Users/ban_user.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "@ComponentBundle/admin/ban_user";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 5), "lang", [], "any", false, false, false, 5), "string", [], "any", false, false, false, 5), "admin", [], "any", false, false, false, 5), "users", [], "any", false, false, false, 5), "ban", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 5), "site_title", [], "any", false, false, false, 5), "html", null, true);
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 12), "buildLink", [0 => "indexAction", 1 => []], "method", false, false, false, 12), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 12), "site_title", [], "any", false, false, false, 12), "html", null, true);
        echo "</a></div>
\t\t\t\t\t<div><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 13), "buildLink", [0 => "adminIndex", 1 => []], "method", false, false, false, 13), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 13), "lang", [], "any", false, false, false, 13), "string", [], "any", false, false, false, 13), "admin", [], "any", false, false, false, 13), "container", [], "any", false, false, false, 13), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "</a></div>
\t\t\t\t\t<div><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 14), "buildLink", [0 => "adminUsers", 1 => []], "method", false, false, false, 14), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 14), "lang", [], "any", false, false, false, 14), "string", [], "any", false, false, false, 14), "admin", [], "any", false, false, false, 14), "users", [], "any", false, false, false, 14), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "</a></div>
                    <div><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 15), "buildLink", [0 => "adminUsers", 1 => []], "method", false, false, false, 15), "html", null, true);
        echo "?editUser=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 15), "user_id", [], "any", false, false, false, 15), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 15), "username", [], "any", false, false, false, 15), "html", null, true);
        echo "</a></div>
                    <div><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 16), "buildLink", [0 => "adminUsers", 1 => []], "method", false, false, false, 16), "html", null, true);
        echo "?banUser=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 16), "user_id", [], "any", false, false, false, 16), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 16), "lang", [], "any", false, false, false, 16), "string", [], "any", false, false, false, 16), "admin", [], "any", false, false, false, 16), "users", [], "any", false, false, false, 16), "ban", [], "any", false, false, false, 16), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t";
        // line 21
        $this->loadTemplate("usermenu_member.tpl", "@ComponentBundle_Admin/Users/ban_user.tpl", 21)->display($context);
        // line 22
        echo "\t\t</div>
\t</div>
\t";
        // line 24
        $this->loadTemplate("@ComponentBundle_Admin/Layout/sidebar.tpl", "@ComponentBundle_Admin/Users/ban_user.tpl", 24)->display($context);
        // line 25
        echo "\t
\t<aside class=\"col-sm-9\">
\t\t<div class=\"app-box shadow rounded\" data-tab=\"users\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center mb-3\">
                    <div>
                        <h5 class=\"mb-0\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 34), "username", [], "any", false, false, false, 34), "html", null, true);
        echo "</h5>
                        <small class=\"text-muted\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 35), "lang", [], "any", false, false, false, 35), "parse", [], "any", false, false, false, 35), "Parse", [0 => "admin.users.ban.desc", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 35), "username", [], "any", false, false, false, 35)], "method", false, false, false, 35), "html", null, true);
        echo "</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 38), "buildLink", [0 => "adminUsers", 1 => []], "method", false, false, false, 38), "html", null, true);
        echo "\" class=\"btn btn-app-discussion icon back\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 38), "lang", [], "any", false, false, false, 38), "string", [], "any", false, false, false, 38), "container", [], "any", false, false, false, 38), "buttons", [], "any", false, false, false, 38), "back", [], "any", false, false, false, 38), "html", null, true);
        echo "</a>
                    </div>
                </div>
                <div class=\"d-flex flex-column justify-content-center align-items-center\">
                    <div id=\"userAccordion\" class=\"w-100 rounded\">
                        <div class=\"bg-dark rounded p-1 px-2 mb-3\">
                            <span class=\"text-light\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 45
($context["app"] ?? null), "sub", [], "any", false, false, false, 45), "lang", [], "any", false, false, false, 45), "string", [], "any", false, false, false, 45), "admin", [], "any", false, false, false, 45), "users", [], "any", false, false, false, 45), "ban", [], "any", false, false, false, 45), "help", [], "any", false, false, false, 45), "html", null, true);
        // line 46
        echo "</span>
                        </div>
                        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 48), "getBans", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 48), "user_id", [], "any", false, false, false, 48)], "method", false, false, false, 48));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 49
            echo "                            <div class=\"app-banning-flag text-dark rounded p-1 px-2 mb-3\" data-ban-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "ban_id", [], "any", false, false, false, 49), "html", null, true);
            echo "\">
                                <span>";
            // line 50
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 50), "lang", [], "any", false, false, false, 50), "parse", [], "any", false, false, false, 50), "Parse", [0 => "admin.users.ban.history.text", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 50), "date", [], "any", false, false, false, 50), "getFullDate", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "dateline", [], "any", false, false, false, 50)], "method", false, false, false, 50), 2 => twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 50), 3 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 50), "date", [], "any", false, false, false, 50), "getFullDate", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "expires", [], "any", false, false, false, 50)], "method", false, false, false, 50)], "method", false, false, false, 50);
            echo "</span>
                                ";
            // line 51
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 51), "date", [], "any", false, false, false, 51), "getTimestamp", [], "method", false, false, false, 51) <= twig_get_attribute($this->env, $this->source, $context["item"], "expires", [], "any", false, false, false, 51))) {
                // line 52
                echo "                                    <div class=\"mt-3\">
                                        <a href=\"#\" data-ui=\"admin-unban-user\">";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 53), "lang", [], "any", false, false, false, 53), "string", [], "any", false, false, false, 53), "admin", [], "any", false, false, false, 53), "users", [], "any", false, false, false, 53), "ban", [], "any", false, false, false, 53), "history", [], "any", false, false, false, 53), "buttons", [], "any", false, false, false, 53), "remove", [], "any", false, false, false, 53), "html", null, true);
                echo "</a>
                                    </div>
                                ";
            }
            // line 56
            echo "                            </div>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 58
            echo "                            <div>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 58), "lang", [], "any", false, false, false, 58), "string", [], "any", false, false, false, 58), "admin", [], "any", false, false, false, 58), "users", [], "any", false, false, false, 58), "ban", [], "any", false, false, false, 58), "history", [], "any", false, false, false, 58), "no_history", [], "any", false, false, false, 58), "html", null, true);
            echo "</div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                        ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 60), "getActiveBan", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 60), "user_id", [], "any", false, false, false, 60)], "method", false, false, false, 60)) {
            // line 61
            echo "                            <form id=\"admin_users_ban\" method=\"post\">
                               <input name=\"user_id\" type=\"hidden\" value=\"";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 62), "user_id", [], "any", false, false, false, 62), "html", null, true);
            echo "\" />
                                <div class=\"form-group row mx-auto\">
                                    <label for=\"static_expires_in\" class=\"col-sm-4 col-form-label\">";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 65
($context["app"] ?? null), "sub", [], "any", false, false, false, 65), "lang", [], "any", false, false, false, 65), "string", [], "any", false, false, false, 65), "admin", [], "any", false, false, false, 65), "users", [], "any", false, false, false, 65), "ban", [], "any", false, false, false, 65), "forms", [], "any", false, false, false, 65), "expires_in", [], "any", false, false, false, 65), "title", [], "any", false, false, false, 65), "html", null, true);
            // line 66
            echo "</label>
                                    <div class=\"col-sm-8\">
                                        <div>
                                            <div class=\"input-group date datepicker p-0\"
                                                data-date-format=\"";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 70), "lang", [], "any", false, false, false, 70), "default", [], "any", false, false, false, 70), "timer", [], "any", false, false, false, 70), "date_format_simple", [], "any", false, false, false, 70), "html", null, true);
            echo "\"
                                                data-date-language=\"";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 71), "lang", [], "any", false, false, false, 71), "default", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71), "html", null, true);
            echo "\"
                                                data-date-startDate=\"";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 72), "date", [], "any", false, false, false, 72), "getSimpleDate", [], "method", false, false, false, 72), "html", null, true);
            echo "\"
                                                data-date-orientation=\"bottom auto\">
                                                <input id=\"static_expires_in\" name=\"expires_in\" type=\"text\" class=\"form-control\"
                                                    placeholder=\"";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 75), "lang", [], "any", false, false, false, 75), "string", [], "any", false, false, false, 75), "container", [], "any", false, false, false, 75), "buttons", [], "any", false, false, false, 75), "select", [], "any", false, false, false, 75), "html", null, true);
            echo "\" required=\"required\">
                                                <div class=\"input-group-append\">
                                                    <div class=\"input-group-text\">
                                                       <i class=\"far fa-calendar-alt\"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <small id=\"help_expires_in\" class=\"form-text text-muted\">";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 83
($context["app"] ?? null), "sub", [], "any", false, false, false, 83), "lang", [], "any", false, false, false, 83), "string", [], "any", false, false, false, 83), "admin", [], "any", false, false, false, 83), "users", [], "any", false, false, false, 83), "ban", [], "any", false, false, false, 83), "forms", [], "any", false, false, false, 83), "expires_in", [], "any", false, false, false, 83), "text", [], "any", false, false, false, 83), "html", null, true);
            // line 84
            echo "</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group row mx-auto\">
                                    <label class=\"col-sm-4 col-form-label\" for=\"static_text\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 90
($context["app"] ?? null), "sub", [], "any", false, false, false, 90), "lang", [], "any", false, false, false, 90), "string", [], "any", false, false, false, 90), "admin", [], "any", false, false, false, 90), "users", [], "any", false, false, false, 90), "ban", [], "any", false, false, false, 90), "forms", [], "any", false, false, false, 90), "text", [], "any", false, false, false, 90), "title", [], "any", false, false, false, 90), "html", null, true);
            // line 91
            echo "</label>
                                    <div class=\"col-sm-8\">
                                        <div>
                                            <textarea name=\"text\" class=\"form-control\" id=\"static_text\" rows=\"10\"></textarea>
                                            <small id=\"help_text\" class=\"form-text text-muted\">";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 96
($context["app"] ?? null), "sub", [], "any", false, false, false, 96), "lang", [], "any", false, false, false, 96), "string", [], "any", false, false, false, 96), "admin", [], "any", false, false, false, 96), "users", [], "any", false, false, false, 96), "ban", [], "any", false, false, false, 96), "forms", [], "any", false, false, false, 96), "text", [], "any", false, false, false, 96), "text", [], "any", false, false, false, 96), "html", null, true);
            // line 97
            echo "</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"w-100 d-inline-block\">
                                    <div class=\"sticky-button shadow\">
                                        <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon send\">";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 104
($context["app"] ?? null), "sub", [], "any", false, false, false, 104), "lang", [], "any", false, false, false, 104), "string", [], "any", false, false, false, 104), "container", [], "any", false, false, false, 104), "buttons", [], "any", false, false, false, 104), "approve", [], "any", false, false, false, 104), "html", null, true);
            echo "</button>
                                    </div>
                                </div>
                            </form>
                        ";
        }
        // line 109
        echo "                    </div>
                </div>
            </div>
        </div>
    </aside>
";
    }

    public function getTemplateName()
    {
        return "@ComponentBundle_Admin/Users/ban_user.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 109,  274 => 104,  273 => 103,  265 => 97,  263 => 96,  262 => 95,  256 => 91,  254 => 90,  253 => 89,  246 => 84,  244 => 83,  243 => 82,  233 => 75,  227 => 72,  223 => 71,  219 => 70,  213 => 66,  211 => 65,  210 => 64,  205 => 62,  202 => 61,  199 => 60,  190 => 58,  184 => 56,  178 => 53,  175 => 52,  173 => 51,  169 => 50,  164 => 49,  159 => 48,  155 => 46,  153 => 45,  152 => 44,  141 => 38,  135 => 35,  131 => 34,  120 => 25,  118 => 24,  114 => 22,  112 => 21,  100 => 16,  92 => 15,  86 => 14,  80 => 13,  74 => 12,  68 => 8,  64 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/ban_user' %}

{% block title %}{{ app.sub.lang.string.admin.users.ban.title }}{{ \" - \" }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminIndex', {}) }}\">{{ app.sub.lang.string.admin.container.title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminUsers', {}) }}\">{{ app.sub.lang.string.admin.users.title }}</a></div>
                    <div><a href=\"{{ app.phrase.buildLink('adminUsers', {}) }}?editUser={{ string.user.user_id }}\">{{ string.user.username }}</a></div>
                    <div><a href=\"{{ app.phrase.buildLink('adminUsers', {}) }}?banUser={{ string.user.user_id }}\">{{ app.sub.lang.string.admin.users.ban.title }}</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t{% include 'usermenu_member.tpl' %}
\t\t</div>
\t</div>
\t{% include '@ComponentBundle_Admin/Layout/sidebar.tpl' %}
\t
\t<aside class=\"col-sm-9\">
\t\t<div class=\"app-box shadow rounded\" data-tab=\"users\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center mb-3\">
                    <div>
                        <h5 class=\"mb-0\">{{ string.user.username }}</h5>
                        <small class=\"text-muted\">{{ app.sub.lang.parse.Parse('admin.users.ban.desc', string.user.username) }}</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"{{ app.phrase.buildLink('adminUsers', {}) }}\" class=\"btn btn-app-discussion icon back\">{{ app.sub.lang.string.container.buttons.back }}</a>
                    </div>
                </div>
                <div class=\"d-flex flex-column justify-content-center align-items-center\">
                    <div id=\"userAccordion\" class=\"w-100 rounded\">
                        <div class=\"bg-dark rounded p-1 px-2 mb-3\">
                            <span class=\"text-light\">{{
                                app.sub.lang.string.admin.users.ban.help
                                }}</span>
                        </div>
                        {% for item in app.user.getBans(string.user.user_id) %}
                            <div class=\"app-banning-flag text-dark rounded p-1 px-2 mb-3\" data-ban-id=\"{{ item.ban_id }}\">
                                <span>{{ app.sub.lang.parse.Parse('admin.users.ban.history.text', app.timer.date.getFullDate(item.dateline), item.text, app.timer.date.getFullDate(item.expires))|raw }}</span>
                                {% if app.timer.date.getTimestamp() <= item.expires %}
                                    <div class=\"mt-3\">
                                        <a href=\"#\" data-ui=\"admin-unban-user\">{{ app.sub.lang.string.admin.users.ban.history.buttons.remove }}</a>
                                    </div>
                                {% endif %}
                            </div>
                        {% else %}
                            <div>{{ app.sub.lang.string.admin.users.ban.history.no_history }}</div>
                        {% endfor %}
                        {% if not app.user.getActiveBan(string.user.user_id) %}
                            <form id=\"admin_users_ban\" method=\"post\">
                               <input name=\"user_id\" type=\"hidden\" value=\"{{ string.user.user_id }}\" />
                                <div class=\"form-group row mx-auto\">
                                    <label for=\"static_expires_in\" class=\"col-sm-4 col-form-label\">{{
                                        app.sub.lang.string.admin.users.ban.forms.expires_in.title
                                        }}</label>
                                    <div class=\"col-sm-8\">
                                        <div>
                                            <div class=\"input-group date datepicker p-0\"
                                                data-date-format=\"{{ app.sub.lang.default.timer.date_format_simple }}\"
                                                data-date-language=\"{{ app.sub.lang.default.id }}\"
                                                data-date-startDate=\"{{ app.timer.date.getSimpleDate() }}\"
                                                data-date-orientation=\"bottom auto\">
                                                <input id=\"static_expires_in\" name=\"expires_in\" type=\"text\" class=\"form-control\"
                                                    placeholder=\"{{ app.sub.lang.string.container.buttons.select }}\" required=\"required\">
                                                <div class=\"input-group-append\">
                                                    <div class=\"input-group-text\">
                                                       <i class=\"far fa-calendar-alt\"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <small id=\"help_expires_in\" class=\"form-text text-muted\">{{
                                                app.sub.lang.string.admin.users.ban.forms.expires_in.text
                                                }}</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group row mx-auto\">
                                    <label class=\"col-sm-4 col-form-label\" for=\"static_text\">{{
                                        app.sub.lang.string.admin.users.ban.forms.text.title
                                        }}</label>
                                    <div class=\"col-sm-8\">
                                        <div>
                                            <textarea name=\"text\" class=\"form-control\" id=\"static_text\" rows=\"10\"></textarea>
                                            <small id=\"help_text\" class=\"form-text text-muted\">{{
                                                app.sub.lang.string.admin.users.ban.forms.text.text
                                                }}</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"w-100 d-inline-block\">
                                    <div class=\"sticky-button shadow\">
                                        <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon send\">{{
                                        app.sub.lang.string.container.buttons.approve }}</button>
                                    </div>
                                </div>
                            </form>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </aside>
{% endblock %}", "@ComponentBundle_Admin/Users/ban_user.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Mention\\Templates\\Admin\\Users\\ban_user.tpl");
    }
}
