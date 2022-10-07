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
class __TwigTemplate_25da51d5fb2debffd9ea3d9125df126b90becbc8916163cdad5f952225bdad9d extends Template
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
\t\t\t\t<div class=\"d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t<div class=\"app-admin-user-search search-container position-relative mb-3\">
\t\t\t\t\t\t<div class=\"input-group has-feedback has-clear\">
\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t<span class=\"input-group-text\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 37), "lang", [], "any", false, false, false, 37), "string", [], "any", false, false, false, 37), "admin", [], "any", false, false, false, 37), "index", [], "any", false, false, false, 37), "quick_search", [], "any", false, false, false, 37), "label", [], "any", false, false, false, 37), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 39), "lang", [], "any", false, false, false, 39), "string", [], "any", false, false, false, 39), "admin", [], "any", false, false, false, 39), "index", [], "any", false, false, false, 39), "quick_search", [], "any", false, false, false, 39), "placeholder", [], "any", false, false, false, 39), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\taria-label=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 40), "lang", [], "any", false, false, false, 40), "string", [], "any", false, false, false, 40), "container", [], "any", false, false, false, 40), "buttons", [], "any", false, false, false, 40), "search", [], "any", false, false, false, 40), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t\t\t<span title=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 42), "lang", [], "any", false, false, false, 42), "string", [], "any", false, false, false, 42), "container", [], "any", false, false, false, 42), "buttons", [], "any", false, false, false, 42), "clear", [], "any", false, false, false, 42), "html", null, true);
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
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 52), "lang", [], "any", false, false, false, 52), "string", [], "any", false, false, false, 52), "admin", [], "any", false, false, false, 52), "index", [], "any", false, false, false, 52), "stats", [], "any", false, false, false, 52), "title", [], "any", false, false, false, 52), "html", null, true);
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
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 61), "lang", [], "any", false, false, false, 61), "string", [], "any", false, false, false, 61), "index", [], "any", false, false, false, 61), "stats", [], "any", false, false, false, 61), "discussion_count", [], "any", false, false, false, 61), "html", null, true);
        echo "</h6>
\t\t\t\t\t\t\t\t\t<h5 class=\"font-weight-bold\">";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\NumberFormat']->NumberFormatShorter(twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "discussion", [], "any", false, false, false, 62), "postCount", [], "method", false, false, false, 62))), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bg-white text-dark shadow rounded px-lg-3 py-2 px-2 mt-2 mt-lg-0 mr-lg-3\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span class=\"icon posts\"></span>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h6>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 70), "lang", [], "any", false, false, false, 70), "string", [], "any", false, false, false, 70), "index", [], "any", false, false, false, 70), "stats", [], "any", false, false, false, 70), "total_posts", [], "any", false, false, false, 70), "html", null, true);
        echo "</h6>
\t\t\t\t\t\t\t\t\t<h5 class=\"font-weight-bold\">";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\NumberFormat']->NumberFormatShorter(twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 71), "getForumPostCount", [], "method", false, false, false, 71))), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bg-white text-dark shadow rounded px-lg-3 py-2 px-2 mt-2 mt-lg-0 mr-lg-3\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span class=\"icon users\"></span>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h6>";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 79), "lang", [], "any", false, false, false, 79), "string", [], "any", false, false, false, 79), "index", [], "any", false, false, false, 79), "stats", [], "any", false, false, false, 79), "user_count", [], "any", false, false, false, 79), "html", null, true);
        echo "</h6>
\t\t\t\t\t\t\t\t\t<h5 class=\"font-weight-bold\">";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\NumberFormat']->NumberFormatShorter(twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "stats", [], "any", false, false, false, 80), "getUserCount", [], "method", false, false, false, 80))), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bg-white text-dark shadow rounded px-lg-3 py-2 px-2 mt-2 mt-lg-0\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span class=\"icon last-user\"></span>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h6>";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 88), "lang", [], "any", false, false, false, 88), "string", [], "any", false, false, false, 88), "index", [], "any", false, false, false, 88), "stats", [], "any", false, false, false, 88), "last_registered_user", [], "any", false, false, false, 88), "html", null, true);
        echo "</h6>
\t\t\t\t\t\t\t\t\t";
        // line 89
        $context["lastRegisterUser"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "stats", [], "any", false, false, false, 89), "getLastRegistered", [], "method", false, false, false, 89);
        // line 90
        echo "\t\t\t\t\t\t\t\t\t";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 90), "user", [], "any", false, false, false, 90), "link", [], "any", false, false, false, 90), "setUser", [0 => twig_get_attribute($this->env, $this->source, ($context["lastRegisterUser"] ?? null), "user_id", [], "any", false, false, false, 90)], "method", false, false, false, 90), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t";
        // line 93
        echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-dark font-weight-bold\" href=\"";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 93), "user", [], "any", false, false, false, 93), "link", [], "any", false, false, false, 93), "getOnlyLink", [], "method", false, false, false, 93);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 93), "user", [], "any", false, false, false, 93), "link", [], "any", false, false, false, 93), "getName", [], "method", false, false, false, 93);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t";
        // line 95
        echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 96), "user", [], "any", false, false, false, 96), "link", [], "any", false, false, false, 96), "unsetUser", [], "method", false, false, false, 96), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<h6 class=\"align-self-start\">";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 101), "lang", [], "any", false, false, false, 101), "string", [], "any", false, false, false, 101), "admin", [], "any", false, false, false, 101), "index", [], "any", false, false, false, 101), "server_environment", [], "any", false, false, false, 101), "title", [], "any", false, false, false, 101), "html", null, true);
        echo "</h6>
\t\t\t\t\t<div class=\"app-admin-server-environment-report app-admin-global-width mt-3\">
\t\t\t\t\t\t";
        // line 103
        $context["appRequirements"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "server", [], "any", false, false, false, 103), "checkRequirement", [], "method", false, false, false, 103);
        // line 104
        echo "\t\t\t\t\t\t";
        if ( !twig_test_iterable(($context["appRequirements"] ?? null))) {
            // line 105
            echo "\t\t\t\t\t\t    <div class=\"alert alert-success\" role=\"alert\">
\t\t\t\t\t\t\t\t<span>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 106), "lang", [], "any", false, false, false, 106), "string", [], "any", false, false, false, 106), "admin", [], "any", false, false, false, 106), "index", [], "any", false, false, false, 106), "check_requirements", [], "any", false, false, false, 106), "text", [], "any", false, false, false, 106), "success", [], "any", false, false, false, 106), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        } else {
            // line 109
            echo "\t\t\t\t\t\t    <div class=\"alert alert-warning\" role=\"alert\">
\t\t\t\t\t\t\t\t<span>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 110), "lang", [], "any", false, false, false, 110), "string", [], "any", false, false, false, 110), "admin", [], "any", false, false, false, 110), "index", [], "any", false, false, false, 110), "check_requirements", [], "any", false, false, false, 110), "text", [], "any", false, false, false, 110), "fail", [], "any", false, false, false, 110), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t<ul class=\"mb-0\">
\t\t\t\t\t\t\t\t\t";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["appRequirements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["requirementMessage"]) {
                // line 113
                echo "\t\t\t\t\t\t\t\t\t    <li>
\t\t\t\t\t\t\t\t\t\t\t<strong>";
                // line 114
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["requirementMessage"], "error", [], "any", false, false, false, 114), "html", null, true);
                echo ":</strong>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 115
                if ((twig_get_attribute($this->env, $this->source, $context["requirementMessage"], "error", [], "any", false, false, false, 115) === "php")) {
                    // line 116
                    echo "\t\t\t\t\t\t\t\t\t\t\t    <span>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 116), "lang", [], "any", false, false, false, 116), "parse", [], "any", false, false, false, 116), "parse", [0 => "admin.index.check_requirements.error.php", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "server", [], "any", false, false, false, 116), "getPHPVersion", [], "method", false, false, false, 116), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "build", [], "any", false, false, false, 116), "support_php_version", [], "any", false, false, false, 116)], "method", false, false, false, 116);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 118
                    echo "\t\t\t\t\t\t\t\t\t\t\t    <span>";
                    echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 118), "lang", [], "any", false, false, false, 118), "string", [], "any", false, false, false, 118), "admin", [], "any", false, false, false, 118), "index", [], "any", false, false, false, 118), "check_requirements", [], "any", false, false, false, 118), "error", [], "any", false, false, false, 118)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["requirementMessage"], "error", [], "any", false, false, false, 118)] ?? null) : null);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 120
                echo "\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requirementMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 125
        echo "\t\t\t\t\t\t<table class=\"table table-bordered table-striped table-responsive-sm\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t    <th scope=\"col\">";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 128), "lang", [], "any", false, false, false, 128), "string", [], "any", false, false, false, 128), "admin", [], "any", false, false, false, 128), "index", [], "any", false, false, false, 128), "server_environment", [], "any", false, false, false, 128), "table", [], "any", false, false, false, 128), "head", [], "any", false, false, false, 128), "feature", [], "any", false, false, false, 128), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t    <th scope=\"col\">";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 129), "lang", [], "any", false, false, false, 129), "string", [], "any", false, false, false, 129), "admin", [], "any", false, false, false, 129), "index", [], "any", false, false, false, 129), "server_environment", [], "any", false, false, false, 129), "table", [], "any", false, false, false, 129), "head", [], "any", false, false, false, 129), "value", [], "any", false, false, false, 129), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 134), "lang", [], "any", false, false, false, 134), "string", [], "any", false, false, false, 134), "admin", [], "any", false, false, false, 134), "index", [], "any", false, false, false, 134), "server_environment", [], "any", false, false, false, 134), "table", [], "any", false, false, false, 134), "rows", [], "any", false, false, false, 134), "php_version", [], "any", false, false, false, 134), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 136), "buildLink", [0 => "adminCommonBundle", 1 => []], "method", false, false, false, 136), "html", null, true);
        echo "?phpInfo\" target=\"_blank\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "server", [], "any", false, false, false, 136), "getPHPVersion", [], "method", false, false, false, 136), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 140), "lang", [], "any", false, false, false, 140), "string", [], "any", false, false, false, 140), "admin", [], "any", false, false, false, 140), "index", [], "any", false, false, false, 140), "server_environment", [], "any", false, false, false, 140), "table", [], "any", false, false, false, 140), "rows", [], "any", false, false, false, 140), "mysql_version", [], "any", false, false, false, 140), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "server", [], "any", false, false, false, 141), "getMySQLVersion", [], "method", false, false, false, 141), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 144), "lang", [], "any", false, false, false, 144), "string", [], "any", false, false, false, 144), "admin", [], "any", false, false, false, 144), "index", [], "any", false, false, false, 144), "server_environment", [], "any", false, false, false, 144), "table", [], "any", false, false, false, 144), "rows", [], "any", false, false, false, 144), "memory_limit", [], "any", false, false, false, 144), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "server", [], "any", false, false, false, 145), "getMemoryLimit", [], "method", false, false, false, 145), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
        // line 148
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 148), "lang", [], "any", false, false, false, 148), "string", [], "any", false, false, false, 148), "admin", [], "any", false, false, false, 148), "index", [], "any", false, false, false, 148), "server_environment", [], "any", false, false, false, 148), "table", [], "any", false, false, false, 148), "rows", [], "any", false, false, false, 148), "post_max_size", [], "any", false, false, false, 148), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "server", [], "any", false, false, false, 149), "getPostMaxSize", [], "method", false, false, false, 149), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 152), "lang", [], "any", false, false, false, 152), "string", [], "any", false, false, false, 152), "admin", [], "any", false, false, false, 152), "index", [], "any", false, false, false, 152), "server_environment", [], "any", false, false, false, 152), "table", [], "any", false, false, false, 152), "rows", [], "any", false, false, false, 152), "upload_max_filesize", [], "any", false, false, false, 152), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "server", [], "any", false, false, false, 153), "getUploadMaxFilesize", [], "method", false, false, false, 153), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
        // line 156
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 156), "lang", [], "any", false, false, false, 156), "string", [], "any", false, false, false, 156), "admin", [], "any", false, false, false, 156), "index", [], "any", false, false, false, 156), "server_environment", [], "any", false, false, false, 156), "table", [], "any", false, false, false, 156), "rows", [], "any", false, false, false, 156), "max_input_vars", [], "any", false, false, false, 156), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 157
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "server", [], "any", false, false, false, 157), "getMaxInputVars", [], "method", false, false, false, 157), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
        // line 160
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 160), "lang", [], "any", false, false, false, 160), "string", [], "any", false, false, false, 160), "admin", [], "any", false, false, false, 160), "index", [], "any", false, false, false, 160), "server_environment", [], "any", false, false, false, 160), "table", [], "any", false, false, false, 160), "rows", [], "any", false, false, false, 160), "max_execution_time", [], "any", false, false, false, 160), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 161
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "server", [], "any", false, false, false, 161), "getMaxExecutionTime", [], "method", false, false, false, 161), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
        // line 164
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 164), "lang", [], "any", false, false, false, 164), "string", [], "any", false, false, false, 164), "admin", [], "any", false, false, false, 164), "index", [], "any", false, false, false, 164), "server_environment", [], "any", false, false, false, 164), "table", [], "any", false, false, false, 164), "rows", [], "any", false, false, false, 164), "curl_version", [], "any", false, false, false, 164), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "server", [], "any", false, false, false, 165), "getCurlVersion", [], "method", false, false, false, 165), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
        // line 168
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 168), "lang", [], "any", false, false, false, 168), "string", [], "any", false, false, false, 168), "admin", [], "any", false, false, false, 168), "index", [], "any", false, false, false, 168), "server_environment", [], "any", false, false, false, 168), "table", [], "any", false, false, false, 168), "rows", [], "any", false, false, false, 168), "support_gzip", [], "any", false, false, false, 168), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
        // line 170
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "server", [], "any", false, false, false, 170), "isSupportGZip", [], "method", false, false, false, 170)) {
            // line 171
            echo "\t\t\t\t\t\t\t\t\t\t    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 171), "lang", [], "any", false, false, false, 171), "string", [], "any", false, false, false, 171), "container", [], "any", false, false, false, 171), "generic", [], "any", false, false, false, 171), "yes", [], "any", false, false, false, 171), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 173
            echo "\t\t\t\t\t\t\t\t\t\t    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 173), "lang", [], "any", false, false, false, 173), "string", [], "any", false, false, false, 173), "container", [], "any", false, false, false, 173), "generic", [], "any", false, false, false, 173), "no", [], "any", false, false, false, 173), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 175
        echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
        // line 178
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 178), "lang", [], "any", false, false, false, 178), "string", [], "any", false, false, false, 178), "admin", [], "any", false, false, false, 178), "index", [], "any", false, false, false, 178), "server_environment", [], "any", false, false, false, 178), "table", [], "any", false, false, false, 178), "rows", [], "any", false, false, false, 178), "support_mbstring", [], "any", false, false, false, 178), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
        // line 180
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "server", [], "any", false, false, false, 180), "isMbstringEnabled", [], "method", false, false, false, 180)) {
            // line 181
            echo "\t\t\t\t\t\t\t\t\t\t    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 181), "lang", [], "any", false, false, false, 181), "string", [], "any", false, false, false, 181), "container", [], "any", false, false, false, 181), "generic", [], "any", false, false, false, 181), "yes", [], "any", false, false, false, 181), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 183
            echo "\t\t\t\t\t\t\t\t\t\t    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 183), "lang", [], "any", false, false, false, 183), "string", [], "any", false, false, false, 183), "container", [], "any", false, false, false, 183), "generic", [], "any", false, false, false, 183), "no", [], "any", false, false, false, 183), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 185
        echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
        // line 188
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 188), "lang", [], "any", false, false, false, 188), "string", [], "any", false, false, false, 188), "admin", [], "any", false, false, false, 188), "index", [], "any", false, false, false, 188), "server_environment", [], "any", false, false, false, 188), "table", [], "any", false, false, false, 188), "rows", [], "any", false, false, false, 188), "support_zip", [], "any", false, false, false, 188), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
        // line 190
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "server", [], "any", false, false, false, 190), "isZipEnabled", [], "method", false, false, false, 190)) {
            // line 191
            echo "\t\t\t\t\t\t\t\t\t\t    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 191), "lang", [], "any", false, false, false, 191), "string", [], "any", false, false, false, 191), "container", [], "any", false, false, false, 191), "generic", [], "any", false, false, false, 191), "yes", [], "any", false, false, false, 191), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 193
            echo "\t\t\t\t\t\t\t\t\t\t    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 193), "lang", [], "any", false, false, false, 193), "string", [], "any", false, false, false, 193), "container", [], "any", false, false, false, 193), "generic", [], "any", false, false, false, 193), "no", [], "any", false, false, false, 193), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 195
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
        return array (  472 => 195,  466 => 193,  460 => 191,  458 => 190,  453 => 188,  448 => 185,  442 => 183,  436 => 181,  434 => 180,  429 => 178,  424 => 175,  418 => 173,  412 => 171,  410 => 170,  405 => 168,  399 => 165,  395 => 164,  389 => 161,  385 => 160,  379 => 157,  375 => 156,  369 => 153,  365 => 152,  359 => 149,  355 => 148,  349 => 145,  345 => 144,  339 => 141,  335 => 140,  326 => 136,  321 => 134,  313 => 129,  309 => 128,  304 => 125,  299 => 122,  292 => 120,  286 => 118,  280 => 116,  278 => 115,  274 => 114,  271 => 113,  267 => 112,  262 => 110,  259 => 109,  253 => 106,  250 => 105,  247 => 104,  245 => 103,  240 => 101,  232 => 96,  229 => 95,  222 => 93,  216 => 90,  214 => 89,  210 => 88,  199 => 80,  195 => 79,  184 => 71,  180 => 70,  169 => 62,  165 => 61,  153 => 52,  140 => 42,  135 => 40,  131 => 39,  126 => 37,  117 => 31,  113 => 30,  104 => 23,  102 => 22,  98 => 20,  96 => 19,  86 => 14,  80 => 13,  74 => 12,  68 => 8,  64 => 7,  55 => 5,  48 => 3,  37 => 1,);
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
