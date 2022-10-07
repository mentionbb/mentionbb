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
class __TwigTemplate_98e58ff88eb7eaaf64dbf7cab9951342f1933c7f2922148d198dea8cbacaea76 extends Template
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
            echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 11), "user", [], "any", false, false, false, 11), "link", [], "any", false, false, false, 11), "getUsertitle", [], "method", false, false, false, 11)), "html", null, true);
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
    ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 24), "loggedIn", [], "method", false, false, false, 24)) {
            // line 25
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 25), "is_admin", [], "any", false, false, false, 25)) {
                // line 26
                echo "            <div class=\"d-flex align-self-start ml-auto\">
                <a class=\"text-dark mr-2\" title=\"";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 27), "lang", [], "any", false, false, false, 27), "string", [], "any", false, false, false, 27), "discussion", [], "any", false, false, false, 27), "posts", [], "any", false, false, false, 27), "quick_menu", [], "any", false, false, false, 27), "buttons", [], "any", false, false, false, 27), "edit", [], "any", false, false, false, 27), "html", null, true);
                echo "\"
                    href=\"";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 28), "buildLink", [0 => "adminUsers", 1 => []], "method", false, false, false, 28), "html", null, true);
                echo "?editUser=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 28), "user_id", [], "any", false, false, false, 28), "html", null, true);
                echo "\">
                    <i class=\"fas fa-user-edit\"></i>
                </a>
                <a class=\"text-dark mr-2\" title=\"";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 31), "lang", [], "any", false, false, false, 31), "string", [], "any", false, false, false, 31), "discussion", [], "any", false, false, false, 31), "posts", [], "any", false, false, false, 31), "quick_menu", [], "any", false, false, false, 31), "buttons", [], "any", false, false, false, 31), "flag", [], "any", false, false, false, 31), "html", null, true);
                echo "\"
                    href=\"";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 32), "buildLink", [0 => "adminUsers", 1 => []], "method", false, false, false, 32), "html", null, true);
                echo "?flagUser=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 32), "user_id", [], "any", false, false, false, 32), "html", null, true);
                echo "\">
                    <i class=\"fas fa-exclamation-triangle\"></i>
                </a>
                <a class=\"text-dark\" title=\"";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 35), "lang", [], "any", false, false, false, 35), "string", [], "any", false, false, false, 35), "discussion", [], "any", false, false, false, 35), "posts", [], "any", false, false, false, 35), "quick_menu", [], "any", false, false, false, 35), "buttons", [], "any", false, false, false, 35), "ban", [], "any", false, false, false, 35), "html", null, true);
                echo "\"
                    href=\"";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 36), "buildLink", [0 => "adminUsers", 1 => []], "method", false, false, false, 36), "html", null, true);
                echo "?banUser=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 36), "user_id", [], "any", false, false, false, 36), "html", null, true);
                echo "\">
                    <i class=\"fas fa-user-slash\"></i>
                </a>
            </div>
        ";
            }
            // line 41
            echo "    ";
        }
        // line 42
        echo "</div>
<hr>
<div hook-action=\"{Mention:App-domEvent-profileReactionBox}\" class=\"app-reactions reaction-md d-flex pb-1\">
    <div class=\"reaction like d-flex flex-column align-items-center\">
        <span>";
        // line 46
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 46), "getReactionCountByUserId", [0 => "like", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 46), "user_id", [], "any", false, false, false, 46)], "method", false, false, false, 46)), "html", null, true);
        echo "</span>
    </div>
    <div class=\"reaction love d-flex flex-column align-items-center\">
        <span>";
        // line 49
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 49), "getReactionCountByUserId", [0 => "love", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 49), "user_id", [], "any", false, false, false, 49)], "method", false, false, false, 49)), "html", null, true);
        echo "</span>
    </div>
    <div class=\"reaction haha d-flex flex-column align-items-center\">
        <span>";
        // line 52
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 52), "getReactionCountByUserId", [0 => "haha", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 52), "user_id", [], "any", false, false, false, 52)], "method", false, false, false, 52)), "html", null, true);
        echo "</span>
    </div>
    <div class=\"reaction wow d-flex flex-column align-items-center\">
        <span>";
        // line 55
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 55), "getReactionCountByUserId", [0 => "wow", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 55), "user_id", [], "any", false, false, false, 55)], "method", false, false, false, 55)), "html", null, true);
        echo "</span>
    </div>
    <div class=\"reaction sad d-flex flex-column align-items-center\">
        <span>";
        // line 58
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 58), "getReactionCountByUserId", [0 => "sad", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 58), "user_id", [], "any", false, false, false, 58)], "method", false, false, false, 58)), "html", null, true);
        echo "</span>
    </div>
    <div class=\"reaction angry d-flex flex-column align-items-center\">
        <span>";
        // line 61
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 61), "getReactionCountByUserId", [0 => "angry", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 61), "user_id", [], "any", false, false, false, 61)], "method", false, false, false, 61)), "html", null, true);
        echo "</span>
    </div>
    <div class=\"reaction dislike d-flex flex-column align-items-center mr-0\">
        <span>";
        // line 64
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "reaction", [], "any", false, false, false, 64), "getReactionCountByUserId", [0 => "dislike", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 64), "user_id", [], "any", false, false, false, 64)], "method", false, false, false, 64)), "html", null, true);
        echo "</span>
    </div>
</div>
<div class=\"d-flex align-items-center mt-3 mb-1\">
    <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 68), "user", [], "any", false, false, false, 68), "link", [], "any", false, false, false, 68), "getOnlyLink", [], "method", false, false, false, 68), "html", null, true);
        echo "\" class=\"btn btn-app-discussion no-anim-ui icon go mr-2 d-lg-none\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 68), "lang", [], "any", false, false, false, 68), "string", [], "any", false, false, false, 68), "profile", [], "any", false, false, false, 68), "buttons", [], "any", false, false, false, 68), "go", [], "any", false, false, false, 68), "html", null, true);
        echo "</a>
    ";
        // line 69
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 69), "loggedIn", [], "method", false, false, false, 69)) {
            // line 70
            echo "\t\t";
            if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 70), "user_id", [], "any", false, false, false, 70) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 70), "user_id", [], "any", false, false, false, 70))) {
                // line 71
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 71), "buildLink", [0 => "messages", 1 => ["section" => "new", "id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 71), "user_id", [], "any", false, false, false, 71)]], "method", false, false, false, 71), "html", null, true);
                echo "\" class=\"btn btn-app-discussion no-anim-ui icon plus mr-2\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 71), "lang", [], "any", false, false, false, 71), "string", [], "any", false, false, false, 71), "profile", [], "any", false, false, false, 71), "buttons", [], "any", false, false, false, 71), "message", [], "any", false, false, false, 71), "html", null, true);
                echo "</a>
\t\t";
            }
            // line 73
            echo "\t";
        }
        // line 74
        echo "</div>
";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 75), "user", [], "any", false, false, false, 75), "unsetUser", [], "method", false, false, false, 75), "html", null, true);
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
        return array (  228 => 75,  225 => 74,  222 => 73,  214 => 71,  211 => 70,  209 => 69,  203 => 68,  196 => 64,  190 => 61,  184 => 58,  178 => 55,  172 => 52,  166 => 49,  160 => 46,  154 => 42,  151 => 41,  141 => 36,  137 => 35,  129 => 32,  125 => 31,  117 => 28,  113 => 27,  110 => 26,  107 => 25,  105 => 24,  102 => 23,  99 => 21,  96 => 20,  90 => 18,  84 => 16,  81 => 15,  79 => 14,  74 => 13,  68 => 11,  62 => 9,  60 => 8,  56 => 7,  50 => 5,  41 => 2,  37 => 1,);
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
    {% if app.user.loggedIn() %}
        {% if app.visitor.is_admin %}
            <div class=\"d-flex align-self-start ml-auto\">
                <a class=\"text-dark mr-2\" title=\"{{ app.sub.lang.string.discussion.posts.quick_menu.buttons.edit }}\"
                    href=\"{{ app.phrase.buildLink('adminUsers', {}) }}?editUser={{ string.user.user_id }}\">
                    <i class=\"fas fa-user-edit\"></i>
                </a>
                <a class=\"text-dark mr-2\" title=\"{{ app.sub.lang.string.discussion.posts.quick_menu.buttons.flag }}\"
                    href=\"{{ app.phrase.buildLink('adminUsers', {}) }}?flagUser={{ string.user.user_id }}\">
                    <i class=\"fas fa-exclamation-triangle\"></i>
                </a>
                <a class=\"text-dark\" title=\"{{ app.sub.lang.string.discussion.posts.quick_menu.buttons.ban }}\"
                    href=\"{{ app.phrase.buildLink('adminUsers', {}) }}?banUser={{ string.user.user_id }}\">
                    <i class=\"fas fa-user-slash\"></i>
                </a>
            </div>
        {% endif %}
    {% endif %}
</div>
<hr>
<div hook-action=\"{Mention:App-domEvent-profileReactionBox}\" class=\"app-reactions reaction-md d-flex pb-1\">
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
    <div class=\"reaction angry d-flex flex-column align-items-center\">
        <span>{{ string.reaction.getReactionCountByUserId('angry', string.user.user_id)|number_format }}</span>
    </div>
    <div class=\"reaction dislike d-flex flex-column align-items-center mr-0\">
        <span>{{ string.reaction.getReactionCountByUserId('dislike', string.user.user_id)|number_format }}</span>
    </div>
</div>
<div class=\"d-flex align-items-center mt-3 mb-1\">
    <a href=\"{{ app.sub.user.link.getOnlyLink() }}\" class=\"btn btn-app-discussion no-anim-ui icon go mr-2 d-lg-none\">{{ app.sub.lang.string.profile.buttons.go }}</a>
    {% if app.user.loggedIn() %}
\t\t{% if not app.visitor.user_id is same as(string.user.user_id) %}
\t\t\t<a href=\"{{ app.phrase.buildLink('messages', {'section': 'new', 'id': string.user.user_id}) }}\" class=\"btn btn-app-discussion no-anim-ui icon plus mr-2\">{{ app.sub.lang.string.profile.buttons.message }}</a>
\t\t{% endif %}
\t{% endif %}
</div>
{{ app.sub.user.unsetUser() }}", "profile_tooltip.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\User\\profile_tooltip.tpl");
    }
}
