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

/* @ComponentBundle_Admin/Index/index.tpl */
class __TwigTemplate_76a59e5b6e12ec8ff5dd48ce888d5bc2 extends Template
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
        $this->parent = $this->loadTemplate("@ComponentBundle_Admin/container.tpl", "@ComponentBundle_Admin/Index/index.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "@ComponentBundle/admin/index";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 5), "lang", [], "any", false, false, false, 5), "string", [], "any", false, false, false, 5), "admin", [], "any", false, false, false, 5), "container", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 14), "buildLink", [0 => "adminIndex", 1 => []], "method", false, false, false, 14), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 14), "lang", [], "any", false, false, false, 14), "string", [], "any", false, false, false, 14), "admin", [], "any", false, false, false, 14), "index", [], "any", false, false, false, 14), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t";
        // line 19
        $this->loadTemplate("usermenu_member.tpl", "@ComponentBundle_Admin/Index/index.tpl", 19)->display($context);
        // line 20
        echo "\t\t</div>
\t</div>
\t";
        // line 22
        $this->loadTemplate("@ComponentBundle_Admin/Layout/sidebar.tpl", "@ComponentBundle_Admin/Index/index.tpl", 22)->display($context);
        // line 23
        echo "\t
\t<aside class=\"col-sm-9\">
\t\t<div class=\"app-box shadow rounded\" data-tab=\"introduction\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<h5 class=\"mb-3\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 30), "lang", [], "any", false, false, false, 30), "string", [], "any", false, false, false, 30), "admin", [], "any", false, false, false, 30), "index", [], "any", false, false, false, 30), "title", [], "any", false, false, false, 30), "html", null, true);
        echo "</h5>
\t\t\t\t<h6>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 31), "site_title", [], "any", false, false, false, 31), "html", null, true);
        echo "</h6>
\t\t\t\t<hr>
\t\t\t\t";
        // line 33
        if (twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "isExistNewErrorLog", [], "any", false, false, false, 33)) {
            // line 34
            echo "\t\t\t\t    <div class=\"alert alert-warning\" role=\"alert\">
\t\t\t\t\t    <span class=\"font-weight-bold\">";
            // line 35
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 35), "lang", [], "any", false, false, false, 35), "parse", [], "any", false, false, false, 35), "parse", [0 => "admin.index.logs.text", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 35), "buildLink", [0 => "adminLogs", 1 => []], "method", false, false, false, 35)], "method", false, false, false, 35);
            echo "</span>
\t\t\t\t    </div>
\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t<div class=\"d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t<div class=\"app-admin-user-search search-container position-relative mb-3\">
\t\t\t\t\t\t<div class=\"input-group has-feedback has-clear\">
\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t<span class=\"input-group-text\">";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 42), "lang", [], "any", false, false, false, 42), "string", [], "any", false, false, false, 42), "admin", [], "any", false, false, false, 42), "index", [], "any", false, false, false, 42), "quick_search", [], "any", false, false, false, 42), "label", [], "any", false, false, false, 42), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 44), "lang", [], "any", false, false, false, 44), "string", [], "any", false, false, false, 44), "admin", [], "any", false, false, false, 44), "index", [], "any", false, false, false, 44), "quick_search", [], "any", false, false, false, 44), "placeholder", [], "any", false, false, false, 44), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\taria-label=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 45), "lang", [], "any", false, false, false, 45), "string", [], "any", false, false, false, 45), "container", [], "any", false, false, false, 45), "buttons", [], "any", false, false, false, 45), "search", [], "any", false, false, false, 45), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t\t\t<span title=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 47), "lang", [], "any", false, false, false, 47), "string", [], "any", false, false, false, 47), "container", [], "any", false, false, false, 47), "buttons", [], "any", false, false, false, 47), "clear", [], "any", false, false, false, 47), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\tclass=\"form-control-clear fas fa-times form-control-feedback d-none\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"search-results shadow d-none\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<div class=\"load-area bg-white pt-5 pb-5 d-block\">
\t\t\t\t\t\t\t\t<div class=\"post-loader-spin d-block\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<h6 class=\"align-self-start\">";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 57), "lang", [], "any", false, false, false, 57), "string", [], "any", false, false, false, 57), "admin", [], "any", false, false, false, 57), "index", [], "any", false, false, false, 57), "stats", [], "any", false, false, false, 57), "title", [], "any", false, false, false, 57), "html", null, true);
        echo "</h6>
\t\t\t\t\t<div class=\"app-stats app-admin-global-width mt-3\">
\t\t\t\t\t\t<canvas id=\"appMention_Chart\"></canvas>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"app-admin-mini-stats d-flex flex-lg-row flex-column align-items-lg-center justify-content-lg-center mt-4 mb-4 w-100\">
\t\t\t\t\t\t<div class=\"bg-white text-dark shadow rounded px-lg-3 py-2 px-2 mt-2 mt-lg-0 mr-lg-3\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span class=\"icon discussions\"></span>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h6>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 66), "lang", [], "any", false, false, false, 66), "string", [], "any", false, false, false, 66), "index", [], "any", false, false, false, 66), "stats", [], "any", false, false, false, 66), "discussion_count", [], "any", false, false, false, 66), "html", null, true);
        echo "</h6>
\t\t\t\t\t\t\t\t\t<h5 class=\"font-weight-bold\">";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\NumberFormat']->NumberFormatShorter(twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "discussion", [], "any", false, false, false, 67), "postCount", [], "method", false, false, false, 67))), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bg-white text-dark shadow rounded px-lg-3 py-2 px-2 mt-2 mt-lg-0 mr-lg-3\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span class=\"icon posts\"></span>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h6>";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 75), "lang", [], "any", false, false, false, 75), "string", [], "any", false, false, false, 75), "index", [], "any", false, false, false, 75), "stats", [], "any", false, false, false, 75), "total_posts", [], "any", false, false, false, 75), "html", null, true);
        echo "</h6>
\t\t\t\t\t\t\t\t\t<h5 class=\"font-weight-bold\">";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\NumberFormat']->NumberFormatShorter(twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 76), "getForumPostCount", [], "method", false, false, false, 76))), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bg-white text-dark shadow rounded px-lg-3 py-2 px-2 mt-2 mt-lg-0 mr-lg-3\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span class=\"icon users\"></span>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h6>";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 84), "lang", [], "any", false, false, false, 84), "string", [], "any", false, false, false, 84), "index", [], "any", false, false, false, 84), "stats", [], "any", false, false, false, 84), "user_count", [], "any", false, false, false, 84), "html", null, true);
        echo "</h6>
\t\t\t\t\t\t\t\t\t<h5 class=\"font-weight-bold\">";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\NumberFormat']->NumberFormatShorter(twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "stats", [], "any", false, false, false, 85), "getUserCount", [], "method", false, false, false, 85))), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bg-white text-dark shadow rounded px-lg-3 py-2 px-2 mt-2 mt-lg-0\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span class=\"icon last-user\"></span>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h6>";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 93), "lang", [], "any", false, false, false, 93), "string", [], "any", false, false, false, 93), "index", [], "any", false, false, false, 93), "stats", [], "any", false, false, false, 93), "last_registered_user", [], "any", false, false, false, 93), "html", null, true);
        echo "</h6>
\t\t\t\t\t\t\t\t\t";
        // line 94
        $context["lastRegisterUser"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "stats", [], "any", false, false, false, 94), "getLastRegistered", [], "method", false, false, false, 94);
        // line 95
        echo "\t\t\t\t\t\t\t\t\t";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 95), "user", [], "any", false, false, false, 95), "link", [], "any", false, false, false, 95), "setUser", [0 => twig_get_attribute($this->env, $this->source, ($context["lastRegisterUser"] ?? null), "user_id", [], "any", false, false, false, 95)], "method", false, false, false, 95), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t";
        // line 98
        echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-dark font-weight-bold\" href=\"";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 98), "user", [], "any", false, false, false, 98), "link", [], "any", false, false, false, 98), "getOnlyLink", [], "method", false, false, false, 98);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 98), "user", [], "any", false, false, false, 98), "link", [], "any", false, false, false, 98), "getName", [], "method", false, false, false, 98);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t";
        // line 100
        echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 101), "user", [], "any", false, false, false, 101), "link", [], "any", false, false, false, 101), "unsetUser", [], "method", false, false, false, 101), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<h6 class=\"align-self-start\">";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 106), "lang", [], "any", false, false, false, 106), "string", [], "any", false, false, false, 106), "admin", [], "any", false, false, false, 106), "index", [], "any", false, false, false, 106), "server_environment", [], "any", false, false, false, 106), "title", [], "any", false, false, false, 106), "html", null, true);
        echo "</h6>
\t\t\t\t\t<div class=\"app-admin-server-environment-report app-admin-global-width mt-3\">
\t\t\t\t\t\t";
        // line 108
        $context["appRequirements"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "server", [], "any", false, false, false, 108), "checkRequirement", [], "method", false, false, false, 108);
        // line 109
        echo "\t\t\t\t\t\t";
        if ( !twig_test_iterable(($context["appRequirements"] ?? null))) {
            // line 110
            echo "\t\t\t\t\t\t    <div class=\"alert alert-success\" role=\"alert\">
\t\t\t\t\t\t\t\t<span>";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 111), "lang", [], "any", false, false, false, 111), "string", [], "any", false, false, false, 111), "admin", [], "any", false, false, false, 111), "index", [], "any", false, false, false, 111), "check_requirements", [], "any", false, false, false, 111), "text", [], "any", false, false, false, 111), "success", [], "any", false, false, false, 111), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        } else {
            // line 114
            echo "\t\t\t\t\t\t    <div class=\"alert alert-warning\" role=\"alert\">
\t\t\t\t\t\t\t\t<span>";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 115), "lang", [], "any", false, false, false, 115), "string", [], "any", false, false, false, 115), "admin", [], "any", false, false, false, 115), "index", [], "any", false, false, false, 115), "check_requirements", [], "any", false, false, false, 115), "text", [], "any", false, false, false, 115), "fail", [], "any", false, false, false, 115), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t<ul class=\"mb-0\">
\t\t\t\t\t\t\t\t\t";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["appRequirements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["requirementMessage"]) {
                // line 118
                echo "\t\t\t\t\t\t\t\t\t    <li>
\t\t\t\t\t\t\t\t\t\t\t<strong>";
                // line 119
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["requirementMessage"], "error", [], "any", false, false, false, 119), "html", null, true);
                echo ":</strong>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 120
                if ((twig_get_attribute($this->env, $this->source, $context["requirementMessage"], "error", [], "any", false, false, false, 120) === "php")) {
                    // line 121
                    echo "\t\t\t\t\t\t\t\t\t\t\t    <span>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 121), "lang", [], "any", false, false, false, 121), "parse", [], "any", false, false, false, 121), "parse", [0 => "admin.index.check_requirements.error.php", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "server", [], "any", false, false, false, 121), "getPHPVersion", [], "method", false, false, false, 121), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "build", [], "any", false, false, false, 121), "support_php_version", [], "any", false, false, false, 121)], "method", false, false, false, 121);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 123
                    echo "\t\t\t\t\t\t\t\t\t\t\t    <span>";
                    echo (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 123), "lang", [], "any", false, false, false, 123), "string", [], "any", false, false, false, 123), "admin", [], "any", false, false, false, 123), "index", [], "any", false, false, false, 123), "check_requirements", [], "any", false, false, false, 123), "error", [], "any", false, false, false, 123)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["requirementMessage"], "error", [], "any", false, false, false, 123)] ?? null) : null);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 125
                echo "\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requirementMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 130
        echo "\t\t\t\t\t\t<table class=\"table table-bordered table-striped table-responsive-sm\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t    <th scope=\"col\">";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 133), "lang", [], "any", false, false, false, 133), "string", [], "any", false, false, false, 133), "admin", [], "any", false, false, false, 133), "index", [], "any", false, false, false, 133), "server_environment", [], "any", false, false, false, 133), "table", [], "any", false, false, false, 133), "head", [], "any", false, false, false, 133), "feature", [], "any", false, false, false, 133), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t    <th scope=\"col\">";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 134), "lang", [], "any", false, false, false, 134), "string", [], "any", false, false, false, 134), "admin", [], "any", false, false, false, 134), "index", [], "any", false, false, false, 134), "server_environment", [], "any", false, false, false, 134), "table", [], "any", false, false, false, 134), "head", [], "any", false, false, false, 134), "value", [], "any", false, false, false, 134), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 139), "lang", [], "any", false, false, false, 139), "string", [], "any", false, false, false, 139), "admin", [], "any", false, false, false, 139), "index", [], "any", false, false, false, 139), "server_environment", [], "any", false, false, false, 139), "table", [], "any", false, false, false, 139), "rows", [], "any", false, false, false, 139), "php_version", [], "any", false, false, false, 139), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 141), "buildLink", [0 => "adminCommonBundle", 1 => []], "method", false, false, false, 141), "html", null, true);
        echo "?phpInfo\" target=\"_blank\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "server", [], "any", false, false, false, 141), "getPHPVersion", [], "method", false, false, false, 141), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 145), "lang", [], "any", false, false, false, 145), "string", [], "any", false, false, false, 145), "admin", [], "any", false, false, false, 145), "index", [], "any", false, false, false, 145), "server_environment", [], "any", false, false, false, 145), "table", [], "any", false, false, false, 145), "rows", [], "any", false, false, false, 145), "mysql_version", [], "any", false, false, false, 145), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "server", [], "any", false, false, false, 146), "getMySQLVersion", [], "method", false, false, false, 146), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 149), "lang", [], "any", false, false, false, 149), "string", [], "any", false, false, false, 149), "admin", [], "any", false, false, false, 149), "index", [], "any", false, false, false, 149), "server_environment", [], "any", false, false, false, 149), "table", [], "any", false, false, false, 149), "rows", [], "any", false, false, false, 149), "memory_limit", [], "any", false, false, false, 149), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "server", [], "any", false, false, false, 150), "getMemoryLimit", [], "method", false, false, false, 150), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 153), "lang", [], "any", false, false, false, 153), "string", [], "any", false, false, false, 153), "admin", [], "any", false, false, false, 153), "index", [], "any", false, false, false, 153), "server_environment", [], "any", false, false, false, 153), "table", [], "any", false, false, false, 153), "rows", [], "any", false, false, false, 153), "post_max_size", [], "any", false, false, false, 153), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "server", [], "any", false, false, false, 154), "getPostMaxSize", [], "method", false, false, false, 154), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
        // line 157
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 157), "lang", [], "any", false, false, false, 157), "string", [], "any", false, false, false, 157), "admin", [], "any", false, false, false, 157), "index", [], "any", false, false, false, 157), "server_environment", [], "any", false, false, false, 157), "table", [], "any", false, false, false, 157), "rows", [], "any", false, false, false, 157), "upload_max_filesize", [], "any", false, false, false, 157), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "server", [], "any", false, false, false, 158), "getUploadMaxFilesize", [], "method", false, false, false, 158), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
        // line 161
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 161), "lang", [], "any", false, false, false, 161), "string", [], "any", false, false, false, 161), "admin", [], "any", false, false, false, 161), "index", [], "any", false, false, false, 161), "server_environment", [], "any", false, false, false, 161), "table", [], "any", false, false, false, 161), "rows", [], "any", false, false, false, 161), "max_input_vars", [], "any", false, false, false, 161), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "server", [], "any", false, false, false, 162), "getMaxInputVars", [], "method", false, false, false, 162), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 165), "lang", [], "any", false, false, false, 165), "string", [], "any", false, false, false, 165), "admin", [], "any", false, false, false, 165), "index", [], "any", false, false, false, 165), "server_environment", [], "any", false, false, false, 165), "table", [], "any", false, false, false, 165), "rows", [], "any", false, false, false, 165), "max_execution_time", [], "any", false, false, false, 165), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 166
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "server", [], "any", false, false, false, 166), "getMaxExecutionTime", [], "method", false, false, false, 166), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
        // line 169
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 169), "lang", [], "any", false, false, false, 169), "string", [], "any", false, false, false, 169), "admin", [], "any", false, false, false, 169), "index", [], "any", false, false, false, 169), "server_environment", [], "any", false, false, false, 169), "table", [], "any", false, false, false, 169), "rows", [], "any", false, false, false, 169), "curl_version", [], "any", false, false, false, 169), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 170
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "server", [], "any", false, false, false, 170), "getCurlVersion", [], "method", false, false, false, 170), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
        // line 173
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 173), "lang", [], "any", false, false, false, 173), "string", [], "any", false, false, false, 173), "admin", [], "any", false, false, false, 173), "index", [], "any", false, false, false, 173), "server_environment", [], "any", false, false, false, 173), "table", [], "any", false, false, false, 173), "rows", [], "any", false, false, false, 173), "support_gzip", [], "any", false, false, false, 173), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
        // line 175
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "server", [], "any", false, false, false, 175), "isSupportGZip", [], "method", false, false, false, 175)) {
            // line 176
            echo "\t\t\t\t\t\t\t\t\t\t    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 176), "lang", [], "any", false, false, false, 176), "string", [], "any", false, false, false, 176), "container", [], "any", false, false, false, 176), "generic", [], "any", false, false, false, 176), "yes", [], "any", false, false, false, 176), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 178
            echo "\t\t\t\t\t\t\t\t\t\t    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 178), "lang", [], "any", false, false, false, 178), "string", [], "any", false, false, false, 178), "container", [], "any", false, false, false, 178), "generic", [], "any", false, false, false, 178), "no", [], "any", false, false, false, 178), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 180
        echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
        // line 183
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 183), "lang", [], "any", false, false, false, 183), "string", [], "any", false, false, false, 183), "admin", [], "any", false, false, false, 183), "index", [], "any", false, false, false, 183), "server_environment", [], "any", false, false, false, 183), "table", [], "any", false, false, false, 183), "rows", [], "any", false, false, false, 183), "support_mbstring", [], "any", false, false, false, 183), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
        // line 185
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "server", [], "any", false, false, false, 185), "isMbstringEnabled", [], "method", false, false, false, 185)) {
            // line 186
            echo "\t\t\t\t\t\t\t\t\t\t    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 186), "lang", [], "any", false, false, false, 186), "string", [], "any", false, false, false, 186), "container", [], "any", false, false, false, 186), "generic", [], "any", false, false, false, 186), "yes", [], "any", false, false, false, 186), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 188
            echo "\t\t\t\t\t\t\t\t\t\t    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 188), "lang", [], "any", false, false, false, 188), "string", [], "any", false, false, false, 188), "container", [], "any", false, false, false, 188), "generic", [], "any", false, false, false, 188), "no", [], "any", false, false, false, 188), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 190
        echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
        // line 193
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 193), "lang", [], "any", false, false, false, 193), "string", [], "any", false, false, false, 193), "admin", [], "any", false, false, false, 193), "index", [], "any", false, false, false, 193), "server_environment", [], "any", false, false, false, 193), "table", [], "any", false, false, false, 193), "rows", [], "any", false, false, false, 193), "support_zip", [], "any", false, false, false, 193), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
        // line 195
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "server", [], "any", false, false, false, 195), "isZipEnabled", [], "method", false, false, false, 195)) {
            // line 196
            echo "\t\t\t\t\t\t\t\t\t\t    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 196), "lang", [], "any", false, false, false, 196), "string", [], "any", false, false, false, 196), "container", [], "any", false, false, false, 196), "generic", [], "any", false, false, false, 196), "yes", [], "any", false, false, false, 196), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 198
            echo "\t\t\t\t\t\t\t\t\t\t    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 198), "lang", [], "any", false, false, false, 198), "string", [], "any", false, false, false, 198), "container", [], "any", false, false, false, 198), "generic", [], "any", false, false, false, 198), "no", [], "any", false, false, false, 198), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 200
        echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</aside>
";
    }

    public function getTemplateName()
    {
        return "@ComponentBundle_Admin/Index/index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  485 => 200,  479 => 198,  473 => 196,  471 => 195,  466 => 193,  461 => 190,  455 => 188,  449 => 186,  447 => 185,  442 => 183,  437 => 180,  431 => 178,  425 => 176,  423 => 175,  418 => 173,  412 => 170,  408 => 169,  402 => 166,  398 => 165,  392 => 162,  388 => 161,  382 => 158,  378 => 157,  372 => 154,  368 => 153,  362 => 150,  358 => 149,  352 => 146,  348 => 145,  339 => 141,  334 => 139,  326 => 134,  322 => 133,  317 => 130,  312 => 127,  305 => 125,  299 => 123,  293 => 121,  291 => 120,  287 => 119,  284 => 118,  280 => 117,  275 => 115,  272 => 114,  266 => 111,  263 => 110,  260 => 109,  258 => 108,  253 => 106,  245 => 101,  242 => 100,  235 => 98,  229 => 95,  227 => 94,  223 => 93,  212 => 85,  208 => 84,  197 => 76,  193 => 75,  182 => 67,  178 => 66,  166 => 57,  153 => 47,  148 => 45,  144 => 44,  139 => 42,  133 => 38,  127 => 35,  124 => 34,  122 => 33,  117 => 31,  113 => 30,  104 => 23,  102 => 22,  98 => 20,  96 => 19,  86 => 14,  80 => 13,  74 => 12,  68 => 8,  64 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/index' %}

{% block title %}{{ app.sub.lang.string.admin.container.title }}{{ \" - \" }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminIndex', {}) }}\">{{ app.sub.lang.string.admin.container.title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminIndex', {}) }}\">{{ app.sub.lang.string.admin.index.title }}</a></div>
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
\t\t<div class=\"app-box shadow rounded\" data-tab=\"introduction\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<h5 class=\"mb-3\">{{ app.sub.lang.string.admin.index.title }}</h5>
\t\t\t\t<h6>{{ app.settings.site_title }}</h6>
\t\t\t\t<hr>
\t\t\t\t{% if string.isExistNewErrorLog %}
\t\t\t\t    <div class=\"alert alert-warning\" role=\"alert\">
\t\t\t\t\t    <span class=\"font-weight-bold\">{{ app.sub.lang.parse.parse('admin.index.logs.text', app.phrase.buildLink('adminLogs', {}))|raw }}</span>
\t\t\t\t    </div>
\t\t\t\t{% endif %}
\t\t\t\t<div class=\"d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t<div class=\"app-admin-user-search search-container position-relative mb-3\">
\t\t\t\t\t\t<div class=\"input-group has-feedback has-clear\">
\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t<span class=\"input-group-text\">{{ app.sub.lang.string.admin.index.quick_search.label }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"{{ app.sub.lang.string.admin.index.quick_search.placeholder }}\"
\t\t\t\t\t\t\t\taria-label=\"{{ app.sub.lang.string.container.buttons.search }}\">
\t\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t\t\t<span title=\"{{ app.sub.lang.string.container.buttons.clear }}\"
\t\t\t\t\t\t\t\tclass=\"form-control-clear fas fa-times form-control-feedback d-none\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"search-results shadow d-none\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<div class=\"load-area bg-white pt-5 pb-5 d-block\">
\t\t\t\t\t\t\t\t<div class=\"post-loader-spin d-block\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<h6 class=\"align-self-start\">{{ app.sub.lang.string.admin.index.stats.title }}</h6>
\t\t\t\t\t<div class=\"app-stats app-admin-global-width mt-3\">
\t\t\t\t\t\t<canvas id=\"appMention_Chart\"></canvas>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"app-admin-mini-stats d-flex flex-lg-row flex-column align-items-lg-center justify-content-lg-center mt-4 mb-4 w-100\">
\t\t\t\t\t\t<div class=\"bg-white text-dark shadow rounded px-lg-3 py-2 px-2 mt-2 mt-lg-0 mr-lg-3\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span class=\"icon discussions\"></span>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h6>{{ app.sub.lang.string.index.stats.discussion_count }}</h6>
\t\t\t\t\t\t\t\t\t<h5 class=\"font-weight-bold\">{{ string.discussion.postCount()|number_format|numberFormatShorter }}</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bg-white text-dark shadow rounded px-lg-3 py-2 px-2 mt-2 mt-lg-0 mr-lg-3\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span class=\"icon posts\"></span>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h6>{{ app.sub.lang.string.index.stats.total_posts }}</h6>
\t\t\t\t\t\t\t\t\t<h5 class=\"font-weight-bold\">{{ string.post.getForumPostCount()|number_format|numberFormatShorter }}</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bg-white text-dark shadow rounded px-lg-3 py-2 px-2 mt-2 mt-lg-0 mr-lg-3\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span class=\"icon users\"></span>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h6>{{ app.sub.lang.string.index.stats.user_count }}</h6>
\t\t\t\t\t\t\t\t\t<h5 class=\"font-weight-bold\">{{ string.stats.getUserCount()|number_format|numberFormatShorter }}</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bg-white text-dark shadow rounded px-lg-3 py-2 px-2 mt-2 mt-lg-0\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span class=\"icon last-user\"></span>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h6>{{ app.sub.lang.string.index.stats.last_registered_user }}</h6>
\t\t\t\t\t\t\t\t\t{% set lastRegisterUser = string.stats.getLastRegistered() %}
\t\t\t\t\t\t\t\t\t{{ app.sub.user.link.setUser(lastRegisterUser.user_id) }}
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t{% autoescape false %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-dark font-weight-bold\" href=\"{{ app.sub.user.link.getOnlyLink() }}\">{{ app.sub.user.link.getName() }}</a>
\t\t\t\t\t\t\t\t\t\t{% endautoescape %}
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t{{ app.sub.user.link.unsetUser() }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<h6 class=\"align-self-start\">{{ app.sub.lang.string.admin.index.server_environment.title }}</h6>
\t\t\t\t\t<div class=\"app-admin-server-environment-report app-admin-global-width mt-3\">
\t\t\t\t\t\t{% set appRequirements = string.server.checkRequirement() %}
\t\t\t\t\t\t{% if appRequirements is not iterable %}
\t\t\t\t\t\t    <div class=\"alert alert-success\" role=\"alert\">
\t\t\t\t\t\t\t\t<span>{{ app.sub.lang.string.admin.index.check_requirements.text.success }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t    <div class=\"alert alert-warning\" role=\"alert\">
\t\t\t\t\t\t\t\t<span>{{ app.sub.lang.string.admin.index.check_requirements.text.fail }}</span>
\t\t\t\t\t\t\t\t<ul class=\"mb-0\">
\t\t\t\t\t\t\t\t\t{% for requirementMessage in appRequirements %}
\t\t\t\t\t\t\t\t\t    <li>
\t\t\t\t\t\t\t\t\t\t\t<strong>{{ requirementMessage.error }}:</strong>
\t\t\t\t\t\t\t\t\t\t\t{% if requirementMessage.error is same as('php') %}
\t\t\t\t\t\t\t\t\t\t\t    <span>{{ app.sub.lang.parse.parse('admin.index.check_requirements.error.php', string.server.getPHPVersion(), app.build.support_php_version)|raw }}</span>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t    <span>{{ app.sub.lang.string.admin.index.check_requirements.error[requirementMessage.error]|raw }}</span>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<table class=\"table table-bordered table-striped table-responsive-sm\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t    <th scope=\"col\">{{ app.sub.lang.string.admin.index.server_environment.table.head.feature }}</th>
\t\t\t\t\t\t\t\t    <th scope=\"col\">{{ app.sub.lang.string.admin.index.server_environment.table.head.value }}</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>{{ app.sub.lang.string.admin.index.server_environment.table.rows.php_version }}</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ app.phrase.buildLink('adminCommonBundle', {}) }}?phpInfo\" target=\"_blank\">{{ string.server.getPHPVersion() }}</a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>{{ app.sub.lang.string.admin.index.server_environment.table.rows.mysql_version }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ string.server.getMySQLVersion() }}</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>{{ app.sub.lang.string.admin.index.server_environment.table.rows.memory_limit }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ string.server.getMemoryLimit() }}</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>{{ app.sub.lang.string.admin.index.server_environment.table.rows.post_max_size }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ string.server.getPostMaxSize() }}</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>{{ app.sub.lang.string.admin.index.server_environment.table.rows.upload_max_filesize }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ string.server.getUploadMaxFilesize() }}</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>{{ app.sub.lang.string.admin.index.server_environment.table.rows.max_input_vars }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ string.server.getMaxInputVars() }}</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>{{ app.sub.lang.string.admin.index.server_environment.table.rows.max_execution_time }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ string.server.getMaxExecutionTime() }}</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>{{ app.sub.lang.string.admin.index.server_environment.table.rows.curl_version }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ string.server.getCurlVersion() }}</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>{{ app.sub.lang.string.admin.index.server_environment.table.rows.support_gzip }}</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t{% if string.server.isSupportGZip() %}
\t\t\t\t\t\t\t\t\t\t    {{ app.sub.lang.string.container.generic.yes }}
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t    {{ app.sub.lang.string.container.generic.no }}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>{{ app.sub.lang.string.admin.index.server_environment.table.rows.support_mbstring }}</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t{% if string.server.isMbstringEnabled() %}
\t\t\t\t\t\t\t\t\t\t    {{ app.sub.lang.string.container.generic.yes }}
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t    {{ app.sub.lang.string.container.generic.no }}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>{{ app.sub.lang.string.admin.index.server_environment.table.rows.support_zip }}</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t{% if string.server.isZipEnabled() %}
\t\t\t\t\t\t\t\t\t\t    {{ app.sub.lang.string.container.generic.yes }}
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t    {{ app.sub.lang.string.container.generic.no }}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</aside>
{% endblock %}", "@ComponentBundle_Admin/Index/index.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Mention\\Templates\\Admin\\Index\\index.tpl");
    }
}
