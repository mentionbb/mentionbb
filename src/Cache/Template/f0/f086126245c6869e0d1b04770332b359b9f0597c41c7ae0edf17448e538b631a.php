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

/* @ComponentBundle_Admin/container.tpl */
class __TwigTemplate_542851f75eb06e1e8eb790acc561211524890da09c5b869a82dedee0935b6a09 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'extra_styles' => [$this, 'block_extra_styles'],
            'app_template_name' => [$this, 'block_app_template_name'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 2), "lang", [], "any", false, false, false, 2), "default", [], "any", false, false, false, 2), "id", [], "any", false, false, false, 2), "html", null, true);
        echo "\">
<head>
\t<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

    <meta name=\"robots\" content=\"noindex\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "cookie", [], "any", false, false, false, 10), "night_mode", [], "any", false, false, false, 10) === "true")) {
            // line 11
            echo "\t    <meta name=\"theme-color\" content=\"#37474f\" />
\t";
        } else {
            // line 13
            echo "\t\t<meta name=\"theme-color\" content=\"#fff\" />
\t";
        }
        // line 15
        echo "
\t<!-- CSS -->
\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 17), "html", null, true);
        echo "/vendor/vendor.css?v=1644274312\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 18), "html", null, true);
        echo "/vendor/admin-vendor.css?v=1642854267\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 19), "theme", [], "any", false, false, false, 19), "compile", [], "any", false, false, false, 19), "makeCss", [0 => "themes/frontend/assets", 1 => "core"], "method", false, false, false, 19), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 20), "theme", [], "any", false, false, false, 20), "compile", [], "any", false, false, false, 20), "minify", [0 => "themes/admin/assets", 1 => "admin.css"], "method", false, false, false, 20), "html", null, true);
        echo "\" />

\t<link rel=\"stylesheet\" data-name=\"vs/editor/editor.main\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 22), "html", null, true);
        echo "/vendor/monaco-editor/min/vs/editor/editor.main.css\" />

\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "event", [], "any", false, false, false, 24), "getStyles", [], "any", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["styleitem"]) {
            // line 25
            echo "\t\t<!-- Extra CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 26), "html", null, true);
            echo "/vendor/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["styleitem"], "file", [], "any", false, false, false, 26), "html", null, true);
            echo "\">
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['styleitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t";
        $this->displayBlock('extra_styles', $context, $blocks);
        // line 29
        echo "
\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 30), "html", null, true);
        echo "/images/logo-favicon.png\" sizes=\"32x32\" />
</head>

";
        // line 33
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "cookie", [], "any", false, false, false, 33), "night_mode", [], "any", false, false, false, 33) === "true")) {
            // line 34
            echo "\t";
            $context["night_mode_class"] = " app-night-mode";
        }
        // line 36
        echo "
<body class=\"app-container";
        // line 37
        echo twig_escape_filter($this->env, ($context["night_mode_class"] ?? null), "html", null, true);
        echo " app-admin\" data-template=\"";
        $this->displayBlock('app_template_name', $context, $blocks);
        echo "\">
\t";
        // line 38
        $this->loadTemplate("navbar.tpl", "@ComponentBundle_Admin/container.tpl", 38)->display($context);
        // line 39
        echo "\t<div class=\"app-page-content app-admin-content container mb-4 row\">
\t\t";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "\t</div>

    ";
        // line 43
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 43), "loggedIn", [], "method", false, false, false, 43)) {
            // line 44
            echo "\t\t<div class=\"modal custom-modal animate slideIn\" id=\"login-attempt\" tabindex=\"-1\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t<div class=\"modal-content shadow-lg rounded\">
\t\t\t\t\t<div class=\"modal-header justify-content-lg-center d-flex\">
\t\t\t\t\t\t<span class=\"font-weight-bold h5 mb-0 ml-lg-auto mr-lg-auto\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 48), "lang", [], "any", false, false, false, 48), "string", [], "any", false, false, false, 48), "container", [], "any", false, false, false, 48), "visitor", [], "any", false, false, false, 48), "login", [], "any", false, false, false, 48), "title", [], "any", false, false, false, 48), "html", null, true);
            echo "</span>
\t\t\t\t\t\t<span class=\"close d-lg-none ml-auto\" data-dismiss=\"modal\" aria-label=\"";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 49), "lang", [], "any", false, false, false, 49), "string", [], "any", false, false, false, 49), "container", [], "any", false, false, false, 49), "buttons", [], "any", false, false, false, 49), "close", [], "any", false, false, false, 49), "html", null, true);
            echo "\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<div class=\"logo text-center mb-3\">
\t\t\t\t\t\t\t";
            // line 53
            $this->loadTemplate("logo.tpl", "@ComponentBundle_Admin/container.tpl", 53)->display($context);
            // line 54
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 55), "site_url", [], "any", false, false, false, 55), "html", null, true);
            echo "/auth/login\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"csrf_token\" value=\"";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "csrf_token", [], "any", false, false, false, 56), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"username\" class=\"form-control\" placeholder=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 58), "lang", [], "any", false, false, false, 58), "string", [], "any", false, false, false, 58), "container", [], "any", false, false, false, 58), "visitor", [], "any", false, false, false, 58), "placeholder", [], "any", false, false, false, 58), "username", [], "any", false, false, false, 58), "html", null, true);
            echo "\" required=\"required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 61), "lang", [], "any", false, false, false, 61), "string", [], "any", false, false, false, 61), "container", [], "any", false, false, false, 61), "visitor", [], "any", false, false, false, 61), "placeholder", [], "any", false, false, false, 61), "password", [], "any", false, false, false, 61), "html", null, true);
            echo "\" required=\"required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t<input name=\"keep-login\" type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\" checked=\"checked\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"exampleCheck1\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 65), "lang", [], "any", false, false, false, 65), "string", [], "any", false, false, false, 65), "container", [], "any", false, false, false, 65), "visitor", [], "any", false, false, false, 65), "login", [], "any", false, false, false, 65), "remember_me", [], "any", false, false, false, 65), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button name=\"login-submit\" type=\"submit\" class=\"btn btn-app-login no-anim-ui\">";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 67), "lang", [], "any", false, false, false, 67), "string", [], "any", false, false, false, 67), "container", [], "any", false, false, false, 67), "visitor", [], "any", false, false, false, 67), "buttons", [], "any", false, false, false, 67), "login", [], "any", false, false, false, 67), "html", null, true);
            echo "</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body pl-2 pr-2 bg-light text-center\">
\t\t\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t<div class=\"legend\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 72), "lang", [], "any", false, false, false, 72), "string", [], "any", false, false, false, 72), "container", [], "any", false, false, false, 72), "generic", [], "any", false, false, false, 72), "or", [], "any", false, false, false, 72), "html", null, true);
            echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 74
            $this->loadTemplate("social_login_buttons.tpl", "@ComponentBundle_Admin/container.tpl", 74)->display($context);
            // line 75
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body bg-white text-center text-dark\">
\t\t\t\t\t\t";
            // line 77
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 77), "lang", [], "any", false, false, false, 77), "string", [], "any", false, false, false, 77), "container", [], "any", false, false, false, 77), "visitor", [], "any", false, false, false, 77), "login", [], "any", false, false, false, 77), "none", [], "any", false, false, false, 77);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t    <div class=\"modal custom-modal animate slideIn\" id=\"register-attempt\" tabindex=\"-1\" role=\"dialog\">
\t    \t<div class=\"modal-dialog\" role=\"document\">
\t    \t\t<div class=\"modal-content shadow-lg rounded\">
\t    \t\t\t<div class=\"modal-header justify-content-lg-center d-flex\">
\t    \t\t\t\t<span class=\"font-weight-bold h5 mb-0 ml-lg-auto mr-lg-auto\">";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 87), "lang", [], "any", false, false, false, 87), "string", [], "any", false, false, false, 87), "container", [], "any", false, false, false, 87), "visitor", [], "any", false, false, false, 87), "register", [], "any", false, false, false, 87), "title", [], "any", false, false, false, 87), "html", null, true);
            echo "</span>
\t    \t\t\t\t<span class=\"close d-lg-none ml-auto\" data-dismiss=\"modal\" aria-label=\"";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 88), "lang", [], "any", false, false, false, 88), "string", [], "any", false, false, false, 88), "container", [], "any", false, false, false, 88), "buttons", [], "any", false, false, false, 88), "close", [], "any", false, false, false, 88), "html", null, true);
            echo "\"></span>
\t    \t\t\t</div>
\t    \t\t\t<div class=\"modal-body\">
\t    \t\t\t\t<div class=\"logo text-center mb-3\">
\t    \t\t\t\t\t";
            // line 92
            $this->loadTemplate("logo.tpl", "@ComponentBundle_Admin/container.tpl", 92)->display($context);
            // line 93
            echo "\t    \t\t\t\t</div>
\t    \t\t\t\t<span class=\"close d-none\" data-dismiss=\"modal\" aria-label=\"Close\"></span>
\t    \t\t\t\t<form method=\"post\" action=\"";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 95), "site_url", [], "any", false, false, false, 95), "html", null, true);
            echo "/auth/register\">
\t    \t\t\t\t\t<input type=\"hidden\" name=\"csrf_token\" value=\"";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "csrf_token", [], "any", false, false, false, 96), "html", null, true);
            echo "\" />
\t    \t\t\t\t\t<div class=\"form-group\">
\t    \t\t\t\t\t\t<input type=\"email\" name=\"mail\" class=\"form-control\" placeholder=\"E-Posta\" required=\"required\">
\t    \t\t\t\t\t\t<small id=\"emailHelp\" class=\"form-text mt-2\">";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 99), "lang", [], "any", false, false, false, 99), "string", [], "any", false, false, false, 99), "container", [], "any", false, false, false, 99), "visitor", [], "any", false, false, false, 99), "register", [], "any", false, false, false, 99), "mail_small", [], "any", false, false, false, 99), "html", null, true);
            echo "</small>
\t    \t\t\t\t\t</div>
\t    \t\t\t\t\t<div class=\"form-group\">
\t    \t\t\t\t\t\t<input type=\"text\" name=\"username\" class=\"form-control\" placeholder=\"";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 102), "lang", [], "any", false, false, false, 102), "string", [], "any", false, false, false, 102), "container", [], "any", false, false, false, 102), "visitor", [], "any", false, false, false, 102), "placeholder", [], "any", false, false, false, 102), "username", [], "any", false, false, false, 102), "html", null, true);
            echo "\" required=\"required\">
\t    \t\t\t\t\t\t<div class=\"post-loader-spin\"></div>
\t    \t\t\t\t\t\t<small id=\"username-control\" class=\"form-text mt-2\"></small>
\t    \t\t\t\t\t</div>
\t    \t\t\t\t\t<div class=\"form-group\">
\t    \t\t\t\t\t\t<input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 107), "lang", [], "any", false, false, false, 107), "string", [], "any", false, false, false, 107), "container", [], "any", false, false, false, 107), "visitor", [], "any", false, false, false, 107), "placeholder", [], "any", false, false, false, 107), "password", [], "any", false, false, false, 107), "html", null, true);
            echo "\" required=\"required\">
\t    \t\t\t\t\t</div>
\t    \t\t\t\t\t<div class=\"form-check\">
\t    \t\t\t\t\t\t<input name=\"quick-login\" type=\"checkbox\" class=\"form-check-input\" id=\"quickLogin\" checked=\"checked\">
\t    \t\t\t\t\t\t<label title=\"";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 111), "lang", [], "any", false, false, false, 111), "string", [], "any", false, false, false, 111), "container", [], "any", false, false, false, 111), "visitor", [], "any", false, false, false, 111), "register", [], "any", false, false, false, 111), "quick_login", [], "any", false, false, false, 111), "html", null, true);
            echo "\" class=\"form-check-label\" for=\"quickLogin\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 111), "lang", [], "any", false, false, false, 111), "string", [], "any", false, false, false, 111), "container", [], "any", false, false, false, 111), "visitor", [], "any", false, false, false, 111), "register", [], "any", false, false, false, 111), "quick_login_title", [], "any", false, false, false, 111), "html", null, true);
            echo "</label>
\t    \t\t\t\t\t</div>
\t    \t\t\t\t\t<div class=\"form-check\">
\t    \t\t\t\t\t\t<input name=\"quick-login\" type=\"checkbox\" class=\"form-check-input\" id=\"agreement\" required=\"required\">
\t    \t\t\t\t\t\t<label class=\"form-check-label\" for=\"agreement\">";
            // line 115
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 115), "lang", [], "any", false, false, false, 115), "parse", [], "any", false, false, false, 115), "Parse", [0 => "container.visitor.register.agreement", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 115), "buildLink", [0 => "pages", 1 => []], "method", false, false, false, 115)], "method", false, false, false, 115);
            echo "</label>
\t    \t\t\t\t\t</div>
\t    \t\t\t\t\t<div>
\t    \t\t\t\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 118), "gr_site_key", [], "any", false, false, false, 118), "html", null, true);
            echo "\" data-callback=\"verifyRecaptchaCallback\" data-expired-callback=\"expiredRecaptchaCallback\"></div>
\t    \t\t\t\t\t\t <input class=\"form-control d-none\" data-recaptcha=\"true\" required />
\t    \t\t\t\t\t\t <small id=\"g-recaptcha-error\" class=\"form-text mt-2 not-available d-none\">";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 120), "lang", [], "any", false, false, false, 120), "string", [], "any", false, false, false, 120), "container", [], "any", false, false, false, 120), "visitor", [], "any", false, false, false, 120), "register", [], "any", false, false, false, 120), "please_verify_captcha", [], "any", false, false, false, 120), "html", null, true);
            echo "</small>
\t    \t\t\t\t\t</div>
\t    \t\t\t\t\t<button name=\"login-submit\" type=\"submit\" class=\"btn btn-app-login no-anim-ui\">";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 122), "lang", [], "any", false, false, false, 122), "string", [], "any", false, false, false, 122), "container", [], "any", false, false, false, 122), "buttons", [], "any", false, false, false, 122), "complete", [], "any", false, false, false, 122), "html", null, true);
            echo "</button>
\t    \t\t\t\t</form>
\t    \t\t\t\t<p class=\"text-muted font-weight-normal mt-3 mb-0 desc\">";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 124), "lang", [], "any", false, false, false, 124), "string", [], "any", false, false, false, 124), "container", [], "any", false, false, false, 124), "visitor", [], "any", false, false, false, 124), "register", [], "any", false, false, false, 124), "desc", [], "any", false, false, false, 124), "html", null, true);
            echo "</p>
\t    \t\t\t</div>
\t    \t\t\t<div class=\"modal-body pl-2 pr-2 bg-light text-center\">
\t    \t\t\t\t<div class=\"d-flex justify-content-center\">
\t    \t\t\t\t\t<div class=\"legend\">";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 128), "lang", [], "any", false, false, false, 128), "string", [], "any", false, false, false, 128), "container", [], "any", false, false, false, 128), "generic", [], "any", false, false, false, 128), "or", [], "any", false, false, false, 128), "html", null, true);
            echo "</div>
\t    \t\t\t\t</div>
\t    \t\t\t\t";
            // line 130
            $this->loadTemplate("social_login_buttons.tpl", "@ComponentBundle_Admin/container.tpl", 130)->display($context);
            // line 131
            echo "\t    \t\t\t</div>
\t    \t\t\t<div class=\"modal-body bg-white text-center text-dark\">
\t    \t\t\t\t<p>";
            // line 133
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 133), "lang", [], "any", false, false, false, 133), "string", [], "any", false, false, false, 133), "container", [], "any", false, false, false, 133), "visitor", [], "any", false, false, false, 133), "register", [], "any", false, false, false, 133), "or_login", [], "any", false, false, false, 133);
            echo "</p>
\t    \t\t\t</div>
\t    \t\t</div>
\t    \t</div>
\t    </div>

\t    <div class=\"modal custom-modal animate slideIn\" id=\"forgot-password-attempt\" tabindex=\"-1\" role=\"dialog\">
\t    \t<div class=\"modal-dialog\" role=\"document\">
\t    \t\t<div class=\"modal-content shadow-lg rounded\">
\t    \t\t\t<div class=\"modal-header justify-content-lg-center d-flex\">
\t    \t\t\t\t<span class=\"font-weight-bold h5 mb-0 ml-lg-auto mr-lg-auto\">";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 143), "lang", [], "any", false, false, false, 143), "string", [], "any", false, false, false, 143), "container", [], "any", false, false, false, 143), "visitor", [], "any", false, false, false, 143), "forgot", [], "any", false, false, false, 143), "title", [], "any", false, false, false, 143), "html", null, true);
            echo "</span>
\t    \t\t\t\t<span class=\"close d-lg-none ml-auto\" data-dismiss=\"modal\" aria-label=\"";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 144), "lang", [], "any", false, false, false, 144), "string", [], "any", false, false, false, 144), "container", [], "any", false, false, false, 144), "buttons", [], "any", false, false, false, 144), "close", [], "any", false, false, false, 144), "html", null, true);
            echo "\"></span>
\t    \t\t\t</div>
\t    \t\t\t<div class=\"modal-body\">
\t    \t\t\t\t<form method=\"post\" action=\"";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 147), "site_url", [], "any", false, false, false, 147), "html", null, true);
            echo "/account/forgot\">
\t    \t\t\t\t\t<div class=\"form-group\">
\t    \t\t\t\t\t\t<input type=\"email\" name=\"mail\" class=\"form-control\" placeholder=\"";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 149), "lang", [], "any", false, false, false, 149), "string", [], "any", false, false, false, 149), "container", [], "any", false, false, false, 149), "visitor", [], "any", false, false, false, 149), "placeholder", [], "any", false, false, false, 149), "mail", [], "any", false, false, false, 149), "html", null, true);
            echo "\" required=\"required\" autocomplete=\"off\">
\t    \t\t\t\t\t\t<small id=\"username-control\" class=\"form-text mt-2\">";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 150), "lang", [], "any", false, false, false, 150), "string", [], "any", false, false, false, 150), "container", [], "any", false, false, false, 150), "visitor", [], "any", false, false, false, 150), "forgot", [], "any", false, false, false, 150), "text", [], "any", false, false, false, 150), "html", null, true);
            echo "</small>
\t    \t\t\t\t\t</div>
\t    \t\t\t\t\t<button type=\"submit\" class=\"btn btn-app-complete no-anim-ui\">";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 152), "lang", [], "any", false, false, false, 152), "string", [], "any", false, false, false, 152), "container", [], "any", false, false, false, 152), "buttons", [], "any", false, false, false, 152), "submit", [], "any", false, false, false, 152), "html", null, true);
            echo "</button>
\t    \t\t\t\t</form>
\t    \t\t\t</div>
\t    \t\t</div>
\t    \t</div>
\t    </div>
    ";
        }
        // line 159
        echo "
    <div class=\"alert alert-dismissible text-center cookiealert\" role=\"alert\">
\t\t<div class=\"cookiealert-container d-flex justify-content-center align-items-center\">
\t\t\t<span class=\"flex-grow-1\">";
        // line 162
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 162), "lang", [], "any", false, false, false, 162), "parse", [], "any", false, false, false, 162), "Parse", [0 => "container.cookie_text", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 162), "buildLink", [0 => "pages", 1 => []], "method", false, false, false, 162)], "method", false, false, false, 162);
        echo "</span>
\t\t\t<button type=\"button\" class=\"acceptcookies\" aria-label=\"";
        // line 163
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 163), "lang", [], "any", false, false, false, 163), "string", [], "any", false, false, false, 163), "container", [], "any", false, false, false, 163), "buttons", [], "any", false, false, false, 163), "close", [], "any", false, false, false, 163), "html", null, true);
        echo "\"></button>
\t\t</div>
\t</div>

    ";
        // line 167
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 167), "loggedIn", [], "method", false, false, false, 167)) {
            // line 168
            echo "\t\t<div class=\"modal custom-modal animate slideIn\" id=\"sign-out-confirmation\" tabindex=\"-1\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t<div class=\"modal-content shadow-lg rounded\">
\t\t\t\t\t<div class=\"modal-header justify-content-lg-center d-flex\">
\t\t\t\t\t\t<span class=\"font-weight-bold h5 mb-0 ml-lg-auto mr-lg-auto\">";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 172), "lang", [], "any", false, false, false, 172), "string", [], "any", false, false, false, 172), "container", [], "any", false, false, false, 172), "visitor", [], "any", false, false, false, 172), "sign_out", [], "any", false, false, false, 172), "title", [], "any", false, false, false, 172), "html", null, true);
            echo "</span>
\t\t\t\t\t\t<span class=\"close d-lg-none ml-auto\" data-dismiss=\"modal\" aria-label=\"";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 173), "lang", [], "any", false, false, false, 173), "string", [], "any", false, false, false, 173), "container", [], "any", false, false, false, 173), "buttons", [], "any", false, false, false, 173), "close", [], "any", false, false, false, 173), "html", null, true);
            echo "\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<div class=\"big-icon sign-out text-center mb-3\"></div>
\t\t\t\t\t\t<p class=\"font-weight-normal text-center\">";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 177), "lang", [], "any", false, false, false, 177), "string", [], "any", false, false, false, 177), "container", [], "any", false, false, false, 177), "visitor", [], "any", false, false, false, 177), "sign_out", [], "any", false, false, false, 177), "text", [], "any", false, false, false, 177), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 178
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 178), "site_url", [], "any", false, false, false, 178), "html", null, true);
            echo "/account/sign-out\">
\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-app-complete no-anim-ui\">";
            // line 180
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 180), "lang", [], "any", false, false, false, 180), "string", [], "any", false, false, false, 180), "container", [], "any", false, false, false, 180), "buttons", [], "any", false, false, false, 180), "approve", [], "any", false, false, false, 180), "html", null, true);
            echo "</button>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-app-complete cancel no-anim-ui ml-4\" data-dismiss=\"modal\">";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 181), "lang", [], "any", false, false, false, 181), "string", [], "any", false, false, false, 181), "container", [], "any", false, false, false, 181), "buttons", [], "any", false, false, false, 181), "cancel", [], "any", false, false, false, 181), "html", null, true);
            echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 189
        echo "
\t<div class=\"app-alert-container\">
    \t<div class=\"app-alert text-center shadow\">
    \t\t<span></span>
    \t</div>
    </div>

    ";
        // line 196
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 196), "has", [0 => "session_alert_message"], "method", false, false, false, 196)) {
            // line 197
            echo "\t    <div class=\"app-alert-container alert-login\">
\t    \t<div class=\"app-alert text-center shadow animate slideIn d-block\">
\t    \t\t<span>";
            // line 199
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 199), "get", [0 => "session_alert_message"], "method", false, false, false, 199), "html", null, true);
            echo "</span>
\t    \t</div>
\t    </div>
\t    ";
            // line 202
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 202), "remove", [0 => "session_alert_message"], "method", false, false, false, 202), "html", null, true);
            echo "
    ";
        }
        // line 204
        echo "
\t<!-- Main bundle -->
\t<script type=\"text/javascript\" src=\"";
        // line 206
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 206), "html", null, true);
        echo "/vendor/vendor.js?v=1618502963\"></script>

\t<!-- Admin main bundle -->
\t<script type=\"text/javascript\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 209), "html", null, true);
        echo "/vendor/app/admin/vendor.js?v=1643113021\"></script>

\t<!-- App Core -->
\t<script type=\"text/javascript\" src=\"";
        // line 212
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 212), "theme", [], "any", false, false, false, 212), "compile", [], "any", false, false, false, 212), "makeJs", [0 => "vendor/app", 1 => "admin"], "method", false, false, false, 212), "html", null, true);
        echo "\"></script>

\t";
        // line 214
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 214), "loggedIn", [], "method", false, false, false, 214) || 0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 214), "getPathInfo", [], "any", false, false, false, 214), "/admin/users"))) {
            // line 215
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 215), "html", null, true);
            echo "/vendor/bootstrap-datepicker/js/locales/bootstrap-datepicker.";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 215), "lang", [], "any", false, false, false, 215), "default", [], "any", false, false, false, 215), "id", [], "any", false, false, false, 215), "html", null, true);
            echo ".js\"></script>
\t";
        }
        // line 217
        echo "
\t";
        // line 218
        if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 218), "getPathInfo", [], "any", false, false, false, 218), "/admin/addons") || 0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 218), "getPathInfo", [], "any", false, false, false, 218), "/admin/theme")) || 0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 218), "getPathInfo", [], "any", false, false, false, 218), "/admin/templates"))) {
            // line 219
            echo "        <script>var require = { paths: { 'vs': '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 219), "html", null, true);
            echo "/vendor/monaco-editor/min/vs' } };</script>

\t\t<script src=\"";
            // line 221
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 221), "html", null, true);
            echo "/vendor/monaco-editor/min/vs/loader.js\"></script>
        <script src=\"";
            // line 222
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 222), "html", null, true);
            echo "/vendor/monaco-editor/min/vs/editor/editor.main.nls.js\"></script>
        <script src=\"";
            // line 223
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 223), "html", null, true);
            echo "/vendor/monaco-editor/min/vs/editor/editor.main.js\"></script>
\t";
        }
        // line 225
        echo "
\t";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "event", [], "any", false, false, false, 226), "getScripts", [], "any", false, false, false, 226));
        foreach ($context['_seq'] as $context["_key"] => $context["jsitem"]) {
            // line 227
            echo "\t\t<!-- Extra JS -->
\t\t<script type=\"text/javascript\" src=\"";
            // line 228
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 228), "html", null, true);
            echo "/vendor/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jsitem"], "file", [], "any", false, false, false, 228), "html", null, true);
            echo "\"></script>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jsitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        echo "
\t<script>
\tjQuery.extend(true, app, {
\t\tconfig: {
\t\t\tsettings: {
\t\t\t\tsite_url: \"";
        // line 235
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 235), "site_url", [], "any", false, false, false, 235), "html", null, true);
        echo "\",
\t\t\t\tadmin_url: \"";
        // line 236
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 236), "site_url", [], "any", false, false, false, 236), "html", null, true);
        echo "/admin\",
\t\t\t\tpublic_dir: \"";
        // line 237
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 237), "html", null, true);
        echo "\",
\t\t\t\tajax_path: \"/";
        // line 238
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "ajax_path", [], "any", false, false, false, 238), "html", null, true);
        echo "\",

\t\t\t\tsite_title: \"";
        // line 240
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 240), "site_title", [], "any", false, false, false, 240), "html", null, true);
        echo "\",

\t\t\t\tlogo: {
\t\t\t\t\tlight: \"";
        // line 243
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 243), "html", null, true);
        echo "/images/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 243), "site_logo", [], "any", false, false, false, 243), "html", null, true);
        echo "\",
\t\t\t\t\tnight: \"";
        // line 244
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 244), "html", null, true);
        echo "/images/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 244), "site_logo_night", [], "any", false, false, false, 244), "html", null, true);
        echo "\",
\t\t\t\t},

\t\t\t\temoticon_database: \"";
        // line 247
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 247), "emoticon_database", [], "any", false, false, false, 247), "html", null, true);
        echo "\",

\t\t\t\tadmin: {
\t\t\t\t\tmax_site_logo_size: \"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\Bytes']->toByte(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 250), "getGlobals", [], "method", false, false, false, 250), "admin", [], "any", false, false, false, 250), "max_site_logo_size", [], "any", false, false, false, 250)), "html", null, true);
        echo "\"
\t\t\t\t}
\t\t\t}
\t\t},
\t\t";
        // line 254
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 254), "loggedIn", [], "method", false, false, false, 254)) {
            // line 255
            echo "
\t\tvisitor: {
\t\t\tuser_id: \"";
            // line 257
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 257), "user_id", [], "any", false, false, false, 257), "html", null, true);
            echo "\",
\t\t\tusername: \"";
            // line 258
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 258), "username", [], "any", false, false, false, 258), "html", null, true);
            echo "\"
 \t\t},
 \t\t";
        }
        // line 261
        echo "
\t\tphrases: {
\t\t\tcopy: \"";
        // line 263
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 263), "lang", [], "any", false, false, false, 263), "string", [], "any", false, false, false, 263), "container", [], "any", false, false, false, 263), "buttons", [], "any", false, false, false, 263), "copy", [], "any", false, false, false, 263), "html", null, true);
        echo "\",
\t\t\tproceed: \"";
        // line 264
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 264), "lang", [], "any", false, false, false, 264), "string", [], "any", false, false, false, 264), "container", [], "any", false, false, false, 264), "proceed", [], "any", false, false, false, 264), "html", null, true);
        echo "\",
\t\t\t";
        // line 265
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 265), "loggedIn", [], "method", false, false, false, 265)) {
            // line 266
            echo "
\t\t\talert_messages: {
\t\t\t\twait_a_while: \"";
            // line 268
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 268), "lang", [], "any", false, false, false, 268), "string", [], "any", false, false, false, 268), "container", [], "any", false, false, false, 268), "flash_message", [], "any", false, false, false, 268), "wait_a_while", [], "any", false, false, false, 268), "html", null, true);
            echo "\",

\t\t\t\tnot_saving_content: \"";
            // line 270
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 270), "lang", [], "any", false, false, false, 270), "string", [], "any", false, false, false, 270), "container", [], "any", false, false, false, 270), "flash_message", [], "any", false, false, false, 270), "not_saving_content", [], "any", false, false, false, 270), "html", null, true);
            echo "\",

\t\t\t\tsaved_successfull: \"";
            // line 272
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 272), "lang", [], "any", false, false, false, 272), "string", [], "any", false, false, false, 272), "admin", [], "any", false, false, false, 272), "container", [], "any", false, false, false, 272), "flash_message", [], "any", false, false, false, 272), "saved_successfull", [], "any", false, false, false, 272), "html", null, true);
            echo "\",

\t\t\t\tupload_file_is_blank: \"";
            // line 274
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 274), "lang", [], "any", false, false, false, 274), "string", [], "any", false, false, false, 274), "admin", [], "any", false, false, false, 274), "container", [], "any", false, false, false, 274), "flash_message", [], "any", false, false, false, 274), "upload_file_is_blank", [], "any", false, false, false, 274), "html", null, true);
            echo "\",
\t\t\t\tupload_file_is_too_big: \"";
            // line 275
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 275), "lang", [], "any", false, false, false, 275), "string", [], "any", false, false, false, 275), "admin", [], "any", false, false, false, 275), "container", [], "any", false, false, false, 275), "flash_message", [], "any", false, false, false, 275), "upload_file_is_too_big", [], "any", false, false, false, 275), "html", null, true);
            echo "\",

\t\t\t\tservice_added_successfull: \"";
            // line 277
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 277), "lang", [], "any", false, false, false, 277), "string", [], "any", false, false, false, 277), "admin", [], "any", false, false, false, 277), "container", [], "any", false, false, false, 277), "flash_message", [], "any", false, false, false, 277), "service_added_successfull", [], "any", false, false, false, 277), "html", null, true);
            echo "\",
\t\t\t\tthere_is_same_service_exist: \"";
            // line 278
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 278), "lang", [], "any", false, false, false, 278), "string", [], "any", false, false, false, 278), "admin", [], "any", false, false, false, 278), "container", [], "any", false, false, false, 278), "flash_message", [], "any", false, false, false, 278), "there_is_same_service_exist", [], "any", false, false, false, 278), "html", null, true);
            echo "\",

\t\t\t\tforum_added_successfull: \"";
            // line 280
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 280), "lang", [], "any", false, false, false, 280), "string", [], "any", false, false, false, 280), "admin", [], "any", false, false, false, 280), "container", [], "any", false, false, false, 280), "flash_message", [], "any", false, false, false, 280), "forum_added_successfull", [], "any", false, false, false, 280), "html", null, true);
            echo "\",
\t\t\t\tforum_delete_successfull: \"";
            // line 281
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 281), "lang", [], "any", false, false, false, 281), "string", [], "any", false, false, false, 281), "admin", [], "any", false, false, false, 281), "container", [], "any", false, false, false, 281), "flash_message", [], "any", false, false, false, 281), "forum_delete_successfull", [], "any", false, false, false, 281), "html", null, true);
            echo "\",

\t\t\t\tuser_added_successfull: \"";
            // line 283
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 283), "lang", [], "any", false, false, false, 283), "string", [], "any", false, false, false, 283), "admin", [], "any", false, false, false, 283), "container", [], "any", false, false, false, 283), "flash_message", [], "any", false, false, false, 283), "user_added_successfull", [], "any", false, false, false, 283), "html", null, true);
            echo "\",
\t\t\t\tuser_delete_successfull: \"";
            // line 284
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 284), "lang", [], "any", false, false, false, 284), "string", [], "any", false, false, false, 284), "admin", [], "any", false, false, false, 284), "container", [], "any", false, false, false, 284), "flash_message", [], "any", false, false, false, 284), "user_delete_successfull", [], "any", false, false, false, 284), "html", null, true);
            echo "\",
\t\t\t\tuser_edit_successfull: \"";
            // line 285
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 285), "lang", [], "any", false, false, false, 285), "string", [], "any", false, false, false, 285), "admin", [], "any", false, false, false, 285), "container", [], "any", false, false, false, 285), "flash_message", [], "any", false, false, false, 285), "user_edit_successfull", [], "any", false, false, false, 285), "html", null, true);
            echo "\",
\t\t\t\tuser_is_exist: \"";
            // line 286
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 286), "lang", [], "any", false, false, false, 286), "string", [], "any", false, false, false, 286), "admin", [], "any", false, false, false, 286), "container", [], "any", false, false, false, 286), "flash_message", [], "any", false, false, false, 286), "user_is_exist", [], "any", false, false, false, 286), "html", null, true);
            echo "\",

\t\t\t\tuser_banned_successfull: \"";
            // line 288
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 288), "lang", [], "any", false, false, false, 288), "string", [], "any", false, false, false, 288), "admin", [], "any", false, false, false, 288), "container", [], "any", false, false, false, 288), "flash_message", [], "any", false, false, false, 288), "user_banned_successfull", [], "any", false, false, false, 288), "html", null, true);
            echo "\",
\t\t\t\tuser_unban_successfull: \"";
            // line 289
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 289), "lang", [], "any", false, false, false, 289), "string", [], "any", false, false, false, 289), "admin", [], "any", false, false, false, 289), "container", [], "any", false, false, false, 289), "flash_message", [], "any", false, false, false, 289), "user_unban_successfull", [], "any", false, false, false, 289), "html", null, true);
            echo "\",

\t\t\t\taddon_disabled_successfull: \"";
            // line 291
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 291), "lang", [], "any", false, false, false, 291), "string", [], "any", false, false, false, 291), "admin", [], "any", false, false, false, 291), "container", [], "any", false, false, false, 291), "flash_message", [], "any", false, false, false, 291), "addon_disabled_successfull", [], "any", false, false, false, 291), "html", null, true);
            echo "\",
\t\t\t\taddon_activated_successfull: \"";
            // line 292
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 292), "lang", [], "any", false, false, false, 292), "string", [], "any", false, false, false, 292), "admin", [], "any", false, false, false, 292), "container", [], "any", false, false, false, 292), "flash_message", [], "any", false, false, false, 292), "addon_activated_successfull", [], "any", false, false, false, 292), "html", null, true);
            echo "\",
\t\t\t\taddon_installed_successfull: \"";
            // line 293
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 293), "lang", [], "any", false, false, false, 293), "string", [], "any", false, false, false, 293), "admin", [], "any", false, false, false, 293), "container", [], "any", false, false, false, 293), "flash_message", [], "any", false, false, false, 293), "addon_installed_successfull", [], "any", false, false, false, 293), "html", null, true);
            echo "\",

\t\t\t\tlanguage_disable_error: \"";
            // line 295
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 295), "lang", [], "any", false, false, false, 295), "string", [], "any", false, false, false, 295), "admin", [], "any", false, false, false, 295), "container", [], "any", false, false, false, 295), "flash_message", [], "any", false, false, false, 295), "language_disable_error", [], "any", false, false, false, 295), "html", null, true);
            echo "\",
\t\t\t}
\t\t\t";
        }
        // line 298
        echo "
\t\t}
\t});
\t</script>
</body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 28
    public function block_extra_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 37
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 40
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@ComponentBundle_Admin/container.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  740 => 40,  734 => 37,  728 => 28,  722 => 4,  713 => 298,  707 => 295,  702 => 293,  698 => 292,  694 => 291,  689 => 289,  685 => 288,  680 => 286,  676 => 285,  672 => 284,  668 => 283,  663 => 281,  659 => 280,  654 => 278,  650 => 277,  645 => 275,  641 => 274,  636 => 272,  631 => 270,  626 => 268,  622 => 266,  620 => 265,  616 => 264,  612 => 263,  608 => 261,  602 => 258,  598 => 257,  594 => 255,  592 => 254,  585 => 250,  579 => 247,  571 => 244,  565 => 243,  559 => 240,  554 => 238,  550 => 237,  546 => 236,  542 => 235,  535 => 230,  525 => 228,  522 => 227,  518 => 226,  515 => 225,  510 => 223,  506 => 222,  502 => 221,  496 => 219,  494 => 218,  491 => 217,  483 => 215,  481 => 214,  476 => 212,  470 => 209,  464 => 206,  460 => 204,  455 => 202,  449 => 199,  445 => 197,  443 => 196,  434 => 189,  423 => 181,  419 => 180,  414 => 178,  410 => 177,  403 => 173,  399 => 172,  393 => 168,  391 => 167,  384 => 163,  380 => 162,  375 => 159,  365 => 152,  360 => 150,  356 => 149,  351 => 147,  345 => 144,  341 => 143,  328 => 133,  324 => 131,  322 => 130,  317 => 128,  310 => 124,  305 => 122,  300 => 120,  295 => 118,  289 => 115,  280 => 111,  273 => 107,  265 => 102,  259 => 99,  253 => 96,  249 => 95,  245 => 93,  243 => 92,  236 => 88,  232 => 87,  219 => 77,  215 => 75,  213 => 74,  208 => 72,  200 => 67,  195 => 65,  188 => 61,  182 => 58,  177 => 56,  173 => 55,  170 => 54,  168 => 53,  161 => 49,  157 => 48,  151 => 44,  149 => 43,  145 => 41,  143 => 40,  140 => 39,  138 => 38,  132 => 37,  129 => 36,  125 => 34,  123 => 33,  117 => 30,  114 => 29,  111 => 28,  101 => 26,  98 => 25,  94 => 24,  89 => 22,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  68 => 15,  64 => 13,  60 => 11,  58 => 10,  49 => 4,  44 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ app.sub.lang.default.id }}\">
<head>
\t<title>{% block title %}{% endblock %}</title>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

    <meta name=\"robots\" content=\"noindex\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t{% if app.cookie.night_mode is same as('true') %}
\t    <meta name=\"theme-color\" content=\"#37474f\" />
\t{% else %}
\t\t<meta name=\"theme-color\" content=\"#fff\" />
\t{% endif %}

\t<!-- CSS -->
\t<link rel=\"stylesheet\" href=\"{{ app.public_dir }}/vendor/vendor.css?v=1644274312\" />
\t<link rel=\"stylesheet\" href=\"{{ app.public_dir }}/vendor/admin-vendor.css?v=1642854267\" />
\t<link rel=\"stylesheet\" href=\"{{ app.sub.theme.compile.makeCss('themes/frontend/assets', 'core')}}\" />
    <link rel=\"stylesheet\" href=\"{{ app.sub.theme.compile.minify('themes/admin/assets', 'admin.css')}}\" />

\t<link rel=\"stylesheet\" data-name=\"vs/editor/editor.main\" href=\"{{ app.public_dir }}/vendor/monaco-editor/min/vs/editor/editor.main.css\" />

\t{% for styleitem in app.event.getStyles %}
\t\t<!-- Extra CSS -->
\t\t<link rel=\"stylesheet\" href=\"{{ app.public_dir }}/vendor/{{ styleitem.file }}\">
\t{% endfor %}
\t{% block extra_styles %}{% endblock %}

\t<link rel=\"icon\" type=\"image/png\" href=\"{{ app.public_dir }}/images/logo-favicon.png\" sizes=\"32x32\" />
</head>

{% if app.cookie.night_mode is same as('true') %}
\t{% set night_mode_class = ' app-night-mode' %}
{% endif %}

<body class=\"app-container{{ night_mode_class }} app-admin\" data-template=\"{% block app_template_name %}{% endblock %}\">
\t{% include 'navbar.tpl' %}
\t<div class=\"app-page-content app-admin-content container mb-4 row\">
\t\t{% block content %}{% endblock %}
\t</div>

    {% if not app.user.loggedIn() %}
\t\t<div class=\"modal custom-modal animate slideIn\" id=\"login-attempt\" tabindex=\"-1\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t<div class=\"modal-content shadow-lg rounded\">
\t\t\t\t\t<div class=\"modal-header justify-content-lg-center d-flex\">
\t\t\t\t\t\t<span class=\"font-weight-bold h5 mb-0 ml-lg-auto mr-lg-auto\">{{ app.sub.lang.string.container.visitor.login.title }}</span>
\t\t\t\t\t\t<span class=\"close d-lg-none ml-auto\" data-dismiss=\"modal\" aria-label=\"{{ app.sub.lang.string.container.buttons.close }}\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<div class=\"logo text-center mb-3\">
\t\t\t\t\t\t\t{% include 'logo.tpl' %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form method=\"post\" action=\"{{ app.settings.site_url }}/auth/login\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"csrf_token\" value=\"{{ app.csrf_token }}\" />
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"username\" class=\"form-control\" placeholder=\"{{ app.sub.lang.string.container.visitor.placeholder.username }}\" required=\"required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"{{ app.sub.lang.string.container.visitor.placeholder.password }}\" required=\"required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t<input name=\"keep-login\" type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\" checked=\"checked\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"exampleCheck1\">{{ app.sub.lang.string.container.visitor.login.remember_me }}</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button name=\"login-submit\" type=\"submit\" class=\"btn btn-app-login no-anim-ui\">{{ app.sub.lang.string.container.visitor.buttons.login }}</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body pl-2 pr-2 bg-light text-center\">
\t\t\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t<div class=\"legend\">{{ app.sub.lang.string.container.generic.or }}</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% include 'social_login_buttons.tpl' %}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body bg-white text-center text-dark\">
\t\t\t\t\t\t{{ app.sub.lang.string.container.visitor.login.none|raw }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t    <div class=\"modal custom-modal animate slideIn\" id=\"register-attempt\" tabindex=\"-1\" role=\"dialog\">
\t    \t<div class=\"modal-dialog\" role=\"document\">
\t    \t\t<div class=\"modal-content shadow-lg rounded\">
\t    \t\t\t<div class=\"modal-header justify-content-lg-center d-flex\">
\t    \t\t\t\t<span class=\"font-weight-bold h5 mb-0 ml-lg-auto mr-lg-auto\">{{ app.sub.lang.string.container.visitor.register.title }}</span>
\t    \t\t\t\t<span class=\"close d-lg-none ml-auto\" data-dismiss=\"modal\" aria-label=\"{{ app.sub.lang.string.container.buttons.close }}\"></span>
\t    \t\t\t</div>
\t    \t\t\t<div class=\"modal-body\">
\t    \t\t\t\t<div class=\"logo text-center mb-3\">
\t    \t\t\t\t\t{% include 'logo.tpl' %}
\t    \t\t\t\t</div>
\t    \t\t\t\t<span class=\"close d-none\" data-dismiss=\"modal\" aria-label=\"Close\"></span>
\t    \t\t\t\t<form method=\"post\" action=\"{{ app.settings.site_url }}/auth/register\">
\t    \t\t\t\t\t<input type=\"hidden\" name=\"csrf_token\" value=\"{{ app.csrf_token }}\" />
\t    \t\t\t\t\t<div class=\"form-group\">
\t    \t\t\t\t\t\t<input type=\"email\" name=\"mail\" class=\"form-control\" placeholder=\"E-Posta\" required=\"required\">
\t    \t\t\t\t\t\t<small id=\"emailHelp\" class=\"form-text mt-2\">{{ app.sub.lang.string.container.visitor.register.mail_small }}</small>
\t    \t\t\t\t\t</div>
\t    \t\t\t\t\t<div class=\"form-group\">
\t    \t\t\t\t\t\t<input type=\"text\" name=\"username\" class=\"form-control\" placeholder=\"{{ app.sub.lang.string.container.visitor.placeholder.username }}\" required=\"required\">
\t    \t\t\t\t\t\t<div class=\"post-loader-spin\"></div>
\t    \t\t\t\t\t\t<small id=\"username-control\" class=\"form-text mt-2\"></small>
\t    \t\t\t\t\t</div>
\t    \t\t\t\t\t<div class=\"form-group\">
\t    \t\t\t\t\t\t<input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"{{ app.sub.lang.string.container.visitor.placeholder.password }}\" required=\"required\">
\t    \t\t\t\t\t</div>
\t    \t\t\t\t\t<div class=\"form-check\">
\t    \t\t\t\t\t\t<input name=\"quick-login\" type=\"checkbox\" class=\"form-check-input\" id=\"quickLogin\" checked=\"checked\">
\t    \t\t\t\t\t\t<label title=\"{{ app.sub.lang.string.container.visitor.register.quick_login }}\" class=\"form-check-label\" for=\"quickLogin\">{{ app.sub.lang.string.container.visitor.register.quick_login_title }}</label>
\t    \t\t\t\t\t</div>
\t    \t\t\t\t\t<div class=\"form-check\">
\t    \t\t\t\t\t\t<input name=\"quick-login\" type=\"checkbox\" class=\"form-check-input\" id=\"agreement\" required=\"required\">
\t    \t\t\t\t\t\t<label class=\"form-check-label\" for=\"agreement\">{{ app.sub.lang.parse.Parse('container.visitor.register.agreement', app.phrase.buildLink('pages', {}))|raw }}</label>
\t    \t\t\t\t\t</div>
\t    \t\t\t\t\t<div>
\t    \t\t\t\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"{{ app.settings.gr_site_key }}\" data-callback=\"verifyRecaptchaCallback\" data-expired-callback=\"expiredRecaptchaCallback\"></div>
\t    \t\t\t\t\t\t <input class=\"form-control d-none\" data-recaptcha=\"true\" required />
\t    \t\t\t\t\t\t <small id=\"g-recaptcha-error\" class=\"form-text mt-2 not-available d-none\">{{ app.sub.lang.string.container.visitor.register.please_verify_captcha }}</small>
\t    \t\t\t\t\t</div>
\t    \t\t\t\t\t<button name=\"login-submit\" type=\"submit\" class=\"btn btn-app-login no-anim-ui\">{{ app.sub.lang.string.container.buttons.complete }}</button>
\t    \t\t\t\t</form>
\t    \t\t\t\t<p class=\"text-muted font-weight-normal mt-3 mb-0 desc\">{{ app.sub.lang.string.container.visitor.register.desc }}</p>
\t    \t\t\t</div>
\t    \t\t\t<div class=\"modal-body pl-2 pr-2 bg-light text-center\">
\t    \t\t\t\t<div class=\"d-flex justify-content-center\">
\t    \t\t\t\t\t<div class=\"legend\">{{ app.sub.lang.string.container.generic.or }}</div>
\t    \t\t\t\t</div>
\t    \t\t\t\t{% include 'social_login_buttons.tpl' %}
\t    \t\t\t</div>
\t    \t\t\t<div class=\"modal-body bg-white text-center text-dark\">
\t    \t\t\t\t<p>{{ app.sub.lang.string.container.visitor.register.or_login|raw }}</p>
\t    \t\t\t</div>
\t    \t\t</div>
\t    \t</div>
\t    </div>

\t    <div class=\"modal custom-modal animate slideIn\" id=\"forgot-password-attempt\" tabindex=\"-1\" role=\"dialog\">
\t    \t<div class=\"modal-dialog\" role=\"document\">
\t    \t\t<div class=\"modal-content shadow-lg rounded\">
\t    \t\t\t<div class=\"modal-header justify-content-lg-center d-flex\">
\t    \t\t\t\t<span class=\"font-weight-bold h5 mb-0 ml-lg-auto mr-lg-auto\">{{ app.sub.lang.string.container.visitor.forgot.title }}</span>
\t    \t\t\t\t<span class=\"close d-lg-none ml-auto\" data-dismiss=\"modal\" aria-label=\"{{ app.sub.lang.string.container.buttons.close }}\"></span>
\t    \t\t\t</div>
\t    \t\t\t<div class=\"modal-body\">
\t    \t\t\t\t<form method=\"post\" action=\"{{ app.settings.site_url }}/account/forgot\">
\t    \t\t\t\t\t<div class=\"form-group\">
\t    \t\t\t\t\t\t<input type=\"email\" name=\"mail\" class=\"form-control\" placeholder=\"{{ app.sub.lang.string.container.visitor.placeholder.mail }}\" required=\"required\" autocomplete=\"off\">
\t    \t\t\t\t\t\t<small id=\"username-control\" class=\"form-text mt-2\">{{ app.sub.lang.string.container.visitor.forgot.text }}</small>
\t    \t\t\t\t\t</div>
\t    \t\t\t\t\t<button type=\"submit\" class=\"btn btn-app-complete no-anim-ui\">{{ app.sub.lang.string.container.buttons.submit }}</button>
\t    \t\t\t\t</form>
\t    \t\t\t</div>
\t    \t\t</div>
\t    \t</div>
\t    </div>
    {% endif %}

    <div class=\"alert alert-dismissible text-center cookiealert\" role=\"alert\">
\t\t<div class=\"cookiealert-container d-flex justify-content-center align-items-center\">
\t\t\t<span class=\"flex-grow-1\">{{ app.sub.lang.parse.Parse('container.cookie_text', app.phrase.buildLink('pages', {}))|raw }}</span>
\t\t\t<button type=\"button\" class=\"acceptcookies\" aria-label=\"{{ app.sub.lang.string.container.buttons.close }}\"></button>
\t\t</div>
\t</div>

    {% if app.user.loggedIn() %}
\t\t<div class=\"modal custom-modal animate slideIn\" id=\"sign-out-confirmation\" tabindex=\"-1\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t<div class=\"modal-content shadow-lg rounded\">
\t\t\t\t\t<div class=\"modal-header justify-content-lg-center d-flex\">
\t\t\t\t\t\t<span class=\"font-weight-bold h5 mb-0 ml-lg-auto mr-lg-auto\">{{ app.sub.lang.string.container.visitor.sign_out.title }}</span>
\t\t\t\t\t\t<span class=\"close d-lg-none ml-auto\" data-dismiss=\"modal\" aria-label=\"{{ app.sub.lang.string.container.buttons.close }}\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<div class=\"big-icon sign-out text-center mb-3\"></div>
\t\t\t\t\t\t<p class=\"font-weight-normal text-center\">{{ app.sub.lang.string.container.visitor.sign_out.text }}</p>
\t\t\t\t\t\t<form method=\"post\" action=\"{{ app.settings.site_url }}/account/sign-out\">
\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-app-complete no-anim-ui\">{{ app.sub.lang.string.container.buttons.approve }}</button>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-app-complete cancel no-anim-ui ml-4\" data-dismiss=\"modal\">{{ app.sub.lang.string.container.buttons.cancel }}</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{% endif %}

\t<div class=\"app-alert-container\">
    \t<div class=\"app-alert text-center shadow\">
    \t\t<span></span>
    \t</div>
    </div>

    {% if app.session.has('session_alert_message') %}
\t    <div class=\"app-alert-container alert-login\">
\t    \t<div class=\"app-alert text-center shadow animate slideIn d-block\">
\t    \t\t<span>{{ app.session.get('session_alert_message') }}</span>
\t    \t</div>
\t    </div>
\t    {{ app.session.remove('session_alert_message') }}
    {% endif %}

\t<!-- Main bundle -->
\t<script type=\"text/javascript\" src=\"{{ app.public_dir }}/vendor/vendor.js?v=1618502963\"></script>

\t<!-- Admin main bundle -->
\t<script type=\"text/javascript\" src=\"{{ app.public_dir }}/vendor/app/admin/vendor.js?v=1643113021\"></script>

\t<!-- App Core -->
\t<script type=\"text/javascript\" src=\"{{ app.sub.theme.compile.makeJs('vendor/app', 'admin') }}\"></script>

\t{% if not app.user.loggedIn() or app.request.getPathInfo == '/admin/users' %}
\t\t<script type=\"text/javascript\" src=\"{{ app.public_dir }}/vendor/bootstrap-datepicker/js/locales/bootstrap-datepicker.{{ app.sub.lang.default.id }}.js\"></script>
\t{% endif %}

\t{% if app.request.getPathInfo == '/admin/addons' or app.request.getPathInfo == '/admin/theme' or app.request.getPathInfo == '/admin/templates' %}
        <script>var require = { paths: { 'vs': '{{ app.public_dir }}/vendor/monaco-editor/min/vs' } };</script>

\t\t<script src=\"{{ app.public_dir }}/vendor/monaco-editor/min/vs/loader.js\"></script>
        <script src=\"{{ app.public_dir }}/vendor/monaco-editor/min/vs/editor/editor.main.nls.js\"></script>
        <script src=\"{{ app.public_dir }}/vendor/monaco-editor/min/vs/editor/editor.main.js\"></script>
\t{% endif %}

\t{% for jsitem in app.event.getScripts %}
\t\t<!-- Extra JS -->
\t\t<script type=\"text/javascript\" src=\"{{ app.public_dir }}/vendor/{{ jsitem.file }}\"></script>
\t{% endfor %}

\t<script>
\tjQuery.extend(true, app, {
\t\tconfig: {
\t\t\tsettings: {
\t\t\t\tsite_url: \"{{ app.settings.site_url }}\",
\t\t\t\tadmin_url: \"{{ app.settings.site_url }}/admin\",
\t\t\t\tpublic_dir: \"{{ app.public_dir }}\",
\t\t\t\tajax_path: \"/{{ app.ajax_path }}\",

\t\t\t\tsite_title: \"{{ app.settings.site_title }}\",

\t\t\t\tlogo: {
\t\t\t\t\tlight: \"{{ app.public_dir }}/images/{{ app.settings.site_logo }}\",
\t\t\t\t\tnight: \"{{ app.public_dir }}/images/{{ app.settings.site_logo_night }}\",
\t\t\t\t},

\t\t\t\temoticon_database: \"{{ app.settings.emoticon_database }}\",

\t\t\t\tadmin: {
\t\t\t\t\tmax_site_logo_size: \"{{ app.phrase.getGlobals().admin.max_site_logo_size|toByte }}\"
\t\t\t\t}
\t\t\t}
\t\t},
\t\t{% if app.user.loggedIn() %}

\t\tvisitor: {
\t\t\tuser_id: \"{{ app.visitor.user_id }}\",
\t\t\tusername: \"{{ app.visitor.username }}\"
 \t\t},
 \t\t{% endif %}

\t\tphrases: {
\t\t\tcopy: \"{{ app.sub.lang.string.container.buttons.copy }}\",
\t\t\tproceed: \"{{ app.sub.lang.string.container.proceed }}\",
\t\t\t{% if app.user.loggedIn() %}

\t\t\talert_messages: {
\t\t\t\twait_a_while: \"{{ app.sub.lang.string.container.flash_message.wait_a_while }}\",

\t\t\t\tnot_saving_content: \"{{ app.sub.lang.string.container.flash_message.not_saving_content }}\",

\t\t\t\tsaved_successfull: \"{{ app.sub.lang.string.admin.container.flash_message.saved_successfull }}\",

\t\t\t\tupload_file_is_blank: \"{{ app.sub.lang.string.admin.container.flash_message.upload_file_is_blank }}\",
\t\t\t\tupload_file_is_too_big: \"{{ app.sub.lang.string.admin.container.flash_message.upload_file_is_too_big }}\",

\t\t\t\tservice_added_successfull: \"{{ app.sub.lang.string.admin.container.flash_message.service_added_successfull }}\",
\t\t\t\tthere_is_same_service_exist: \"{{ app.sub.lang.string.admin.container.flash_message.there_is_same_service_exist }}\",

\t\t\t\tforum_added_successfull: \"{{ app.sub.lang.string.admin.container.flash_message.forum_added_successfull }}\",
\t\t\t\tforum_delete_successfull: \"{{ app.sub.lang.string.admin.container.flash_message.forum_delete_successfull }}\",

\t\t\t\tuser_added_successfull: \"{{ app.sub.lang.string.admin.container.flash_message.user_added_successfull }}\",
\t\t\t\tuser_delete_successfull: \"{{ app.sub.lang.string.admin.container.flash_message.user_delete_successfull }}\",
\t\t\t\tuser_edit_successfull: \"{{ app.sub.lang.string.admin.container.flash_message.user_edit_successfull }}\",
\t\t\t\tuser_is_exist: \"{{ app.sub.lang.string.admin.container.flash_message.user_is_exist }}\",

\t\t\t\tuser_banned_successfull: \"{{ app.sub.lang.string.admin.container.flash_message.user_banned_successfull }}\",
\t\t\t\tuser_unban_successfull: \"{{ app.sub.lang.string.admin.container.flash_message.user_unban_successfull }}\",

\t\t\t\taddon_disabled_successfull: \"{{ app.sub.lang.string.admin.container.flash_message.addon_disabled_successfull }}\",
\t\t\t\taddon_activated_successfull: \"{{ app.sub.lang.string.admin.container.flash_message.addon_activated_successfull }}\",
\t\t\t\taddon_installed_successfull: \"{{ app.sub.lang.string.admin.container.flash_message.addon_installed_successfull }}\",

\t\t\t\tlanguage_disable_error: \"{{ app.sub.lang.string.admin.container.flash_message.language_disable_error }}\",
\t\t\t}
\t\t\t{% endif %}

\t\t}
\t});
\t</script>
</body>
</html>", "@ComponentBundle_Admin/container.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Mention\\Templates\\Admin\\container.tpl");
    }
}
