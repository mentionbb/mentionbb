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

/* container.tpl */
class __TwigTemplate_6171ff46494a5fbe5d180e496e24a415 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'extra_styles' => [$this, 'block_extra_styles'],
            'app_template_name' => [$this, 'block_app_template_name'],
            'content' => [$this, 'block_content'],
            'extra_scripts' => [$this, 'block_extra_scripts'],
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
        echo "\" 
    dir=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 3), "lang", [], "any", false, false, false, 3), "default", [], "any", false, false, false, 3), "text_direction", [], "any", false, false, false, 3), "html", null, true);
        echo "\" 
    hook-action=\"{Mention:App-domEvent-htmldoc}\">
<head hook-action=\"{Mention:App-domEvent-head}\">
\t";
        // line 7
        echo "\t
\t<!-- CSS -->
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 9), "html", null, true);
        echo "/vendor/vendor.css?v=1644274312\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 10), "theme", [], "any", false, false, false, 10), "compile", [], "any", false, false, false, 10), "makeCss", [0 => "themes/frontend/assets", 1 => "core"], "method", false, false, false, 10), "html", null, true);
        echo "\" />

\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "event", [], "any", false, false, false, 12), "getStyles", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["styleitem"]) {
            // line 13
            echo "\t\t<!-- Extra CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 14), "theme", [], "any", false, false, false, 14), "compile", [], "any", false, false, false, 14), "minify", [0 => "vendor", 1 => twig_get_attribute($this->env, $this->source, $context["styleitem"], "file", [], "any", false, false, false, 14)], "method", false, false, false, 14), "html", null, true);
            echo "\">
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['styleitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t";
        $this->displayBlock('extra_styles', $context, $blocks);
        // line 17
        echo "
    <style hook-action=\"{Mention:App-domEvent-docstyle}\"></style>

\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 20), "html", null, true);
        echo "/images/logo-favicon.png\" sizes=\"32x32\" />
</head>

";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "cookie", [], "any", false, false, false, 23), "night_mode", [], "any", false, false, false, 23) === "true")) {
            // line 24
            echo "\t";
            $context["night_mode_class"] = " app-night-mode";
        }
        // line 26
        echo "
<body hook-action=\"{Mention:App-domEvent-htmlbody}\" 
    class=\"app-container";
        // line 28
        echo twig_escape_filter($this->env, ($context["night_mode_class"] ?? null), "html", null, true);
        echo "\" 
    data-template=\"";
        // line 29
        $this->displayBlock('app_template_name', $context, $blocks);
        echo "\" 
    data-color=\"";
        // line 30
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "cookie", [], "any", false, false, false, 30), "night_mode", [], "any", false, false, false, 30)) ? ("#37474f") : ("#fff"));
        echo "\">
\t";
        // line 31
        $this->loadTemplate("navbar.tpl", "container.tpl", 31)->display($context);
        // line 32
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 32), "getActiveBan", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 32), "user_id", [], "any", false, false, false, 32)], "method", false, false, false, 32)) {
            // line 33
            echo "\t    ";
            $context["banItem"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 33), "getActiveBan", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 33), "user_id", [], "any", false, false, false, 33)], "method", false, false, false, 33);
            // line 34
            echo "\t    <div class=\"container mb-4 row\">
\t\t\t<aside class=\"col-sm-12\">
\t\t\t\t<div class=\"app-banning-flag guest-welcome-area text-dark shadow-sm rounded\">
\t\t\t\t\t<h5>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 37), "lang", [], "any", false, false, false, 37), "string", [], "any", false, false, false, 37), "container", [], "any", false, false, false, 37), "visitor", [], "any", false, false, false, 37), "ban", [], "any", false, false, false, 37), "title", [], "any", false, false, false, 37), "html", null, true);
            echo "</h5>
\t\t\t\t\t<div class=\"font-weight-bold\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 38), "lang", [], "any", false, false, false, 38), "string", [], "any", false, false, false, 38), "container", [], "any", false, false, false, 38), "visitor", [], "any", false, false, false, 38), "ban", [], "any", false, false, false, 38), "reason_title", [], "any", false, false, false, 38), "html", null, true);
            echo "</div>
\t\t\t\t\t<ul class=\"list-unstyled my-3\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["banItem"] ?? null), "text", [], "any", false, false, false, 42), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"font-weight-bold\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 46), "lang", [], "any", false, false, false, 46), "parse", [], "any", false, false, false, 46), "Parse", [0 => "container.visitor.ban.expires_in", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 46), "date", [], "any", false, false, false, 46), "getFullDate", [0 => twig_get_attribute($this->env, $this->source, ($context["banItem"] ?? null), "expires", [], "any", false, false, false, 46)], "method", false, false, false, 46)], "method", false, false, false, 46), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t</aside>
\t    </div>
\t";
        }
        // line 51
        echo "\t<div hook-action=\"{Mention:App-domEvent-pagecontent}\" 
        class=\"app-page-content container mb-4 row\">
\t\t    ";
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 54
        echo "\t</div>

\t";
        // line 56
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 56), "loggedIn", [], "method", false, false, false, 56)) {
            // line 57
            echo "\t\t<div class=\"modal custom-modal animate slideIn\" id=\"login-attempt\" tabindex=\"-1\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t<div class=\"modal-content shadow-lg rounded\">
\t\t\t\t\t<div class=\"modal-header justify-content-lg-center d-flex\">
\t\t\t\t\t\t<span class=\"font-weight-bold h5 mb-0 ml-lg-auto mr-lg-auto\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 61), "lang", [], "any", false, false, false, 61), "string", [], "any", false, false, false, 61), "container", [], "any", false, false, false, 61), "visitor", [], "any", false, false, false, 61), "login", [], "any", false, false, false, 61), "title", [], "any", false, false, false, 61), "html", null, true);
            echo "</span>
\t\t\t\t\t\t<span class=\"close d-lg-none ml-auto\" data-dismiss=\"modal\" aria-label=\"";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 62), "lang", [], "any", false, false, false, 62), "string", [], "any", false, false, false, 62), "container", [], "any", false, false, false, 62), "buttons", [], "any", false, false, false, 62), "close", [], "any", false, false, false, 62), "html", null, true);
            echo "\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<div class=\"logo text-center mb-3\">
\t\t\t\t\t\t\t";
            // line 66
            $this->loadTemplate("logo.tpl", "container.tpl", 66)->display($context);
            // line 67
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 68), "site_url", [], "any", false, false, false, 68), "html", null, true);
            echo "/auth/login\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"csrf_token\" value=\"";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "csrf_token", [], "any", false, false, false, 69), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"username\" class=\"form-control\" placeholder=\"";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 71), "lang", [], "any", false, false, false, 71), "string", [], "any", false, false, false, 71), "container", [], "any", false, false, false, 71), "visitor", [], "any", false, false, false, 71), "placeholder", [], "any", false, false, false, 71), "username", [], "any", false, false, false, 71), "html", null, true);
            echo "\" required=\"required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 74), "lang", [], "any", false, false, false, 74), "string", [], "any", false, false, false, 74), "container", [], "any", false, false, false, 74), "visitor", [], "any", false, false, false, 74), "placeholder", [], "any", false, false, false, 74), "password", [], "any", false, false, false, 74), "html", null, true);
            echo "\" required=\"required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t<input name=\"keep-login\" type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\" checked=\"checked\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"exampleCheck1\">";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 78), "lang", [], "any", false, false, false, 78), "string", [], "any", false, false, false, 78), "container", [], "any", false, false, false, 78), "visitor", [], "any", false, false, false, 78), "login", [], "any", false, false, false, 78), "remember_me", [], "any", false, false, false, 78), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button name=\"login-submit\" type=\"submit\" class=\"btn btn-app-login no-anim-ui\">";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 80), "lang", [], "any", false, false, false, 80), "string", [], "any", false, false, false, 80), "container", [], "any", false, false, false, 80), "visitor", [], "any", false, false, false, 80), "buttons", [], "any", false, false, false, 80), "login", [], "any", false, false, false, 80), "html", null, true);
            echo "</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body pl-2 pr-2 bg-light text-center\">
\t\t\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t<div class=\"legend\">";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 85), "lang", [], "any", false, false, false, 85), "string", [], "any", false, false, false, 85), "container", [], "any", false, false, false, 85), "generic", [], "any", false, false, false, 85), "or", [], "any", false, false, false, 85), "html", null, true);
            echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 87
            $this->loadTemplate("social_login_buttons.tpl", "container.tpl", 87)->display($context);
            // line 88
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body bg-white text-center text-dark\">
\t\t\t\t\t\t";
            // line 90
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 90), "lang", [], "any", false, false, false, 90), "string", [], "any", false, false, false, 90), "container", [], "any", false, false, false, 90), "visitor", [], "any", false, false, false, 90), "login", [], "any", false, false, false, 90), "none", [], "any", false, false, false, 90);
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
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 100), "lang", [], "any", false, false, false, 100), "string", [], "any", false, false, false, 100), "container", [], "any", false, false, false, 100), "visitor", [], "any", false, false, false, 100), "register", [], "any", false, false, false, 100), "title", [], "any", false, false, false, 100), "html", null, true);
            echo "</span>
\t    \t\t\t\t<span class=\"close d-lg-none ml-auto\" data-dismiss=\"modal\" aria-label=\"";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 101), "lang", [], "any", false, false, false, 101), "string", [], "any", false, false, false, 101), "container", [], "any", false, false, false, 101), "buttons", [], "any", false, false, false, 101), "close", [], "any", false, false, false, 101), "html", null, true);
            echo "\"></span>
\t    \t\t\t</div>
\t    \t\t\t<div class=\"modal-body\">
\t    \t\t\t\t<div class=\"logo text-center mb-3\">
\t    \t\t\t\t\t";
            // line 105
            $this->loadTemplate("logo.tpl", "container.tpl", 105)->display($context);
            // line 106
            echo "\t    \t\t\t\t</div>
\t    \t\t\t\t<span class=\"close d-none\" data-dismiss=\"modal\" aria-label=\"Close\"></span>
\t    \t\t\t\t<form method=\"post\" action=\"";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 108), "site_url", [], "any", false, false, false, 108), "html", null, true);
            echo "/auth/register\">
\t    \t\t\t\t\t<input type=\"hidden\" name=\"csrf_token\" value=\"";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "csrf_token", [], "any", false, false, false, 109), "html", null, true);
            echo "\" />
\t    \t\t\t\t\t<div class=\"form-group\">
\t    \t\t\t\t\t\t<input type=\"email\" name=\"mail\" class=\"form-control\" placeholder=\"E-Posta\" required=\"required\">
\t    \t\t\t\t\t\t<small id=\"emailHelp\" class=\"form-text mt-2\">";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 112), "lang", [], "any", false, false, false, 112), "string", [], "any", false, false, false, 112), "container", [], "any", false, false, false, 112), "visitor", [], "any", false, false, false, 112), "register", [], "any", false, false, false, 112), "mail_small", [], "any", false, false, false, 112), "html", null, true);
            echo "</small>
\t    \t\t\t\t\t</div>
\t    \t\t\t\t\t<div class=\"form-group\">
\t    \t\t\t\t\t\t<input type=\"text\" name=\"username\" class=\"form-control\" placeholder=\"";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 115), "lang", [], "any", false, false, false, 115), "string", [], "any", false, false, false, 115), "container", [], "any", false, false, false, 115), "visitor", [], "any", false, false, false, 115), "placeholder", [], "any", false, false, false, 115), "username", [], "any", false, false, false, 115), "html", null, true);
            echo "\" required=\"required\">
\t    \t\t\t\t\t\t<div class=\"post-loader-spin\"></div>
\t    \t\t\t\t\t\t<small id=\"username-control\" class=\"form-text mt-2\"></small>
\t    \t\t\t\t\t</div>
\t    \t\t\t\t\t<div class=\"form-group\">
\t    \t\t\t\t\t\t<input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 120), "lang", [], "any", false, false, false, 120), "string", [], "any", false, false, false, 120), "container", [], "any", false, false, false, 120), "visitor", [], "any", false, false, false, 120), "placeholder", [], "any", false, false, false, 120), "password", [], "any", false, false, false, 120), "html", null, true);
            echo "\" required=\"required\">
\t    \t\t\t\t\t</div>
\t    \t\t\t\t\t<div class=\"form-check\">
\t    \t\t\t\t\t\t<input name=\"quick-login\" type=\"checkbox\" class=\"form-check-input\" id=\"quickLogin\" checked=\"checked\">
\t    \t\t\t\t\t\t<label title=\"";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 124), "lang", [], "any", false, false, false, 124), "string", [], "any", false, false, false, 124), "container", [], "any", false, false, false, 124), "visitor", [], "any", false, false, false, 124), "register", [], "any", false, false, false, 124), "quick_login", [], "any", false, false, false, 124), "html", null, true);
            echo "\" class=\"form-check-label\" for=\"quickLogin\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 124), "lang", [], "any", false, false, false, 124), "string", [], "any", false, false, false, 124), "container", [], "any", false, false, false, 124), "visitor", [], "any", false, false, false, 124), "register", [], "any", false, false, false, 124), "quick_login_title", [], "any", false, false, false, 124), "html", null, true);
            echo "</label>
\t    \t\t\t\t\t</div>
\t    \t\t\t\t\t<div class=\"form-check\">
\t    \t\t\t\t\t\t<input name=\"quick-login\" type=\"checkbox\" class=\"form-check-input\" id=\"agreement\" required=\"required\">
\t    \t\t\t\t\t\t<label class=\"form-check-label\" for=\"agreement\">";
            // line 128
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 128), "lang", [], "any", false, false, false, 128), "parse", [], "any", false, false, false, 128), "Parse", [0 => "container.visitor.register.agreement", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 128), "buildLink", [0 => "pages", 1 => []], "method", false, false, false, 128)], "method", false, false, false, 128);
            echo "</label>
\t    \t\t\t\t\t</div>
\t    \t\t\t\t\t<div>
\t    \t\t\t\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 131), "gr_site_key", [], "any", false, false, false, 131), "html", null, true);
            echo "\" data-callback=\"verifyRecaptchaCallback\" data-expired-callback=\"expiredRecaptchaCallback\"></div>
\t    \t\t\t\t\t\t <input class=\"form-control d-none\" data-recaptcha=\"true\" required />
\t    \t\t\t\t\t\t <small id=\"g-recaptcha-error\" class=\"form-text mt-2 not-available d-none\">";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 133), "lang", [], "any", false, false, false, 133), "string", [], "any", false, false, false, 133), "container", [], "any", false, false, false, 133), "visitor", [], "any", false, false, false, 133), "register", [], "any", false, false, false, 133), "please_verify_captcha", [], "any", false, false, false, 133), "html", null, true);
            echo "</small>
\t    \t\t\t\t\t</div>
\t    \t\t\t\t\t<button name=\"login-submit\" type=\"submit\" class=\"btn btn-app-login no-anim-ui\">";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 135), "lang", [], "any", false, false, false, 135), "string", [], "any", false, false, false, 135), "container", [], "any", false, false, false, 135), "buttons", [], "any", false, false, false, 135), "complete", [], "any", false, false, false, 135), "html", null, true);
            echo "</button>
\t    \t\t\t\t</form>
\t    \t\t\t\t<p class=\"text-muted font-weight-normal mt-3 mb-0 desc\">";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 137), "lang", [], "any", false, false, false, 137), "string", [], "any", false, false, false, 137), "container", [], "any", false, false, false, 137), "visitor", [], "any", false, false, false, 137), "register", [], "any", false, false, false, 137), "desc", [], "any", false, false, false, 137), "html", null, true);
            echo "</p>
\t    \t\t\t</div>
\t    \t\t\t<div class=\"modal-body pl-2 pr-2 bg-light text-center\">
\t    \t\t\t\t<div class=\"d-flex justify-content-center\">
\t    \t\t\t\t\t<div class=\"legend\">";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 141), "lang", [], "any", false, false, false, 141), "string", [], "any", false, false, false, 141), "container", [], "any", false, false, false, 141), "generic", [], "any", false, false, false, 141), "or", [], "any", false, false, false, 141), "html", null, true);
            echo "</div>
\t    \t\t\t\t</div>
\t    \t\t\t\t";
            // line 143
            $this->loadTemplate("social_login_buttons.tpl", "container.tpl", 143)->display($context);
            // line 144
            echo "\t    \t\t\t</div>
\t    \t\t\t<div class=\"modal-body bg-white text-center text-dark\">
\t    \t\t\t\t<p>";
            // line 146
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 146), "lang", [], "any", false, false, false, 146), "string", [], "any", false, false, false, 146), "container", [], "any", false, false, false, 146), "visitor", [], "any", false, false, false, 146), "register", [], "any", false, false, false, 146), "or_login", [], "any", false, false, false, 146);
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
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 156), "lang", [], "any", false, false, false, 156), "string", [], "any", false, false, false, 156), "container", [], "any", false, false, false, 156), "visitor", [], "any", false, false, false, 156), "forgot", [], "any", false, false, false, 156), "title", [], "any", false, false, false, 156), "html", null, true);
            echo "</span>
\t    \t\t\t\t<span class=\"close d-lg-none ml-auto\" data-dismiss=\"modal\" aria-label=\"";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 157), "lang", [], "any", false, false, false, 157), "string", [], "any", false, false, false, 157), "container", [], "any", false, false, false, 157), "buttons", [], "any", false, false, false, 157), "close", [], "any", false, false, false, 157), "html", null, true);
            echo "\"></span>
\t    \t\t\t</div>
\t    \t\t\t<div class=\"modal-body\">
\t    \t\t\t\t<form method=\"post\" action=\"";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 160), "site_url", [], "any", false, false, false, 160), "html", null, true);
            echo "/account/forgot\">
\t    \t\t\t\t\t<div class=\"form-group\">
\t    \t\t\t\t\t\t<input type=\"email\" name=\"mail\" class=\"form-control\" placeholder=\"";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 162), "lang", [], "any", false, false, false, 162), "string", [], "any", false, false, false, 162), "container", [], "any", false, false, false, 162), "visitor", [], "any", false, false, false, 162), "placeholder", [], "any", false, false, false, 162), "mail", [], "any", false, false, false, 162), "html", null, true);
            echo "\" required=\"required\" autocomplete=\"off\">
\t    \t\t\t\t\t\t<small id=\"username-control\" class=\"form-text mt-2\">";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 163), "lang", [], "any", false, false, false, 163), "string", [], "any", false, false, false, 163), "container", [], "any", false, false, false, 163), "visitor", [], "any", false, false, false, 163), "forgot", [], "any", false, false, false, 163), "text", [], "any", false, false, false, 163), "html", null, true);
            echo "</small>
\t    \t\t\t\t\t</div>
\t    \t\t\t\t\t<button type=\"submit\" class=\"btn btn-app-complete no-anim-ui\">";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 165), "lang", [], "any", false, false, false, 165), "string", [], "any", false, false, false, 165), "container", [], "any", false, false, false, 165), "buttons", [], "any", false, false, false, 165), "submit", [], "any", false, false, false, 165), "html", null, true);
            echo "</button>
\t    \t\t\t\t</form>
\t    \t\t\t</div>
\t    \t\t</div>
\t    \t</div>
\t    </div>
    ";
        }
        // line 172
        echo "
    <div class=\"alert alert-dismissible text-center cookiealert\" role=\"alert\">
\t\t<div class=\"cookiealert-container d-flex justify-content-center align-items-center\">
\t\t\t<span class=\"flex-grow-1\">";
        // line 175
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 175), "lang", [], "any", false, false, false, 175), "parse", [], "any", false, false, false, 175), "Parse", [0 => "container.cookie_text", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 175), "buildLink", [0 => "pages", 1 => []], "method", false, false, false, 175)], "method", false, false, false, 175);
        echo "</span>
\t\t\t<button type=\"button\" class=\"acceptcookies\" aria-label=\"";
        // line 176
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 176), "lang", [], "any", false, false, false, 176), "string", [], "any", false, false, false, 176), "container", [], "any", false, false, false, 176), "buttons", [], "any", false, false, false, 176), "close", [], "any", false, false, false, 176), "html", null, true);
        echo "\"></button>
\t\t</div>
\t</div>

\t";
        // line 180
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 180), "loggedIn", [], "method", false, false, false, 180)) {
            // line 181
            echo "\t\t<div class=\"modal custom-modal animate slideIn\" id=\"sign-out-confirmation\" tabindex=\"-1\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t<div class=\"modal-content shadow-lg rounded\">
\t\t\t\t\t<div class=\"modal-header justify-content-lg-center d-flex\">
\t\t\t\t\t\t<span class=\"font-weight-bold h5 mb-0 ml-lg-auto mr-lg-auto\">";
            // line 185
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 185), "lang", [], "any", false, false, false, 185), "string", [], "any", false, false, false, 185), "container", [], "any", false, false, false, 185), "visitor", [], "any", false, false, false, 185), "sign_out", [], "any", false, false, false, 185), "title", [], "any", false, false, false, 185), "html", null, true);
            echo "</span>
\t\t\t\t\t\t<span class=\"close d-lg-none ml-auto\" data-dismiss=\"modal\" aria-label=\"";
            // line 186
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 186), "lang", [], "any", false, false, false, 186), "string", [], "any", false, false, false, 186), "container", [], "any", false, false, false, 186), "buttons", [], "any", false, false, false, 186), "close", [], "any", false, false, false, 186), "html", null, true);
            echo "\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<div class=\"big-icon sign-out text-center mb-3\"></div>
\t\t\t\t\t\t<p class=\"font-weight-normal text-center\">";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 190), "lang", [], "any", false, false, false, 190), "string", [], "any", false, false, false, 190), "container", [], "any", false, false, false, 190), "visitor", [], "any", false, false, false, 190), "sign_out", [], "any", false, false, false, 190), "text", [], "any", false, false, false, 190), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 191
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 191), "site_url", [], "any", false, false, false, 191), "html", null, true);
            echo "/account/sign-out\">
\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-app-complete no-anim-ui\">";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 193), "lang", [], "any", false, false, false, 193), "string", [], "any", false, false, false, 193), "container", [], "any", false, false, false, 193), "buttons", [], "any", false, false, false, 193), "approve", [], "any", false, false, false, 193), "html", null, true);
            echo "</button>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-app-complete cancel no-anim-ui ml-4\" data-dismiss=\"modal\">";
            // line 194
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 194), "lang", [], "any", false, false, false, 194), "string", [], "any", false, false, false, 194), "container", [], "any", false, false, false, 194), "buttons", [], "any", false, false, false, 194), "cancel", [], "any", false, false, false, 194), "html", null, true);
            echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 202
        echo "
\t<div class=\"app-alert-container\">
    \t<div class=\"app-alert text-center shadow\">
    \t\t<span></span>
    \t</div>
    </div>

    ";
        // line 209
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 209), "has", [0 => "session_alert_message"], "method", false, false, false, 209)) {
            // line 210
            echo "\t    <div class=\"app-alert-container alert-login\">
\t    \t<div class=\"app-alert text-center shadow animate slideIn d-block\">
\t    \t\t<span>";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 212), "get", [0 => "session_alert_message"], "method", false, false, false, 212), "html", null, true);
            echo "</span>
\t    \t</div>
\t    </div>
\t    ";
            // line 215
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 215), "remove", [0 => "session_alert_message"], "method", false, false, false, 215), "html", null, true);
            echo "
    ";
        }
        // line 217
        echo "
    ";
        // line 218
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 218), "loggedIn", [], "method", false, false, false, 218)) {
            // line 219
            echo "    \t";
            if ((((twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "_route", [], "any", false, false, false, 219) === "PublicApp_IndexAction") || (twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "_route", [], "any", false, false, false, 219) === "PublicApp_Discussion")) || (twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "_route", [], "any", false, false, false, 219) === "PublicApp_Shortcode"))) {
                // line 220
                echo "\t\t    <script class=\"app_EditorToolbars\" type=\"application/json\">
    \t\t";
                // line 222
                echo "    \t\t    ";
                echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 222), "editor", [], "any", false, false, false, 222), "buttons", [], "any", false, false, false, 222), "getToolbars", [], "method", false, false, false, 222), (twig_constant("JSON_UNESCAPED_UNICODE") | twig_constant("JSON_UNESCAPED_SLASHES")));
                echo "
    \t\t";
                // line 224
                echo "    \t\t</script>
\t\t\t<script class=\"app_EditorToolbarIcons\" type=\"application/json\">
    \t\t";
                // line 227
                echo "    \t\t    ";
                echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 227), "editor", [], "any", false, false, false, 227), "buttons", [], "any", false, false, false, 227), "getToolbarIcons", [], "method", false, false, false, 227), (twig_constant("JSON_UNESCAPED_UNICODE") | twig_constant("JSON_UNESCAPED_SLASHES")));
                echo "
    \t\t";
                // line 229
                echo "    \t\t</script>
\t\t\t<script class=\"app_EditorButtons\" type=\"application/json\">
    \t\t";
                // line 232
                echo "    \t\t    ";
                echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 232), "editor", [], "any", false, false, false, 232), "buttons", [], "any", false, false, false, 232), "getButtons", [], "method", false, false, false, 232), (twig_constant("JSON_UNESCAPED_UNICODE") | twig_constant("JSON_UNESCAPED_SLASHES")));
                echo "
    \t\t";
                // line 234
                echo "    \t\t</script>
    \t\t<script class=\"app_EditorLanguage\" type=\"application/json\">
    \t\t";
                // line 237
                echo "    \t\t    ";
                echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 237), "lang", [], "any", false, false, false, 237), "string", [], "any", false, false, false, 237), "editor", [], "any", false, false, false, 237), ((twig_constant("JSON_UNESCAPED_UNICODE") | twig_constant("JSON_UNESCAPED_SLASHES")) | twig_constant("JSON_PRETTY_PRINT")));
                echo "
    \t\t";
                // line 239
                echo "    \t\t</script>
    \t";
            }
            // line 241
            echo "    ";
        }
        // line 242
        echo "
\t<!-- Editor -->
\t<script type=\"text/javascript\" src=\"";
        // line 244
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 244), "theme", [], "any", false, false, false, 244), "compile", [], "any", false, false, false, 244), "makeJs", [0 => "vendor/app", 1 => "editor"], "method", false, false, false, 244), "html", null, true);
        echo "\"></script>

\t<!-- Main bundle -->
\t<script type=\"text/javascript\" src=\"";
        // line 247
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 247), "html", null, true);
        echo "/vendor/vendor.js?v=1645718920\"></script>

\t<!-- App Core -->
\t<script type=\"text/javascript\" src=\"";
        // line 250
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 250), "theme", [], "any", false, false, false, 250), "compile", [], "any", false, false, false, 250), "makeJs", [0 => "vendor/app", 1 => "core"], "method", false, false, false, 250), "html", null, true);
        echo "\"></script>

\t";
        // line 252
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 252), "loggedIn", [], "method", false, false, false, 252) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 252), "getPathInfo", [], "any", false, false, false, 252) == "/pages/contact"))) {
            // line 253
            echo "\t\t<script src=\"https://www.google.com/recaptcha/api.js\"></script>
\t";
        }
        // line 255
        echo "
\t";
        // line 256
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "event", [], "any", false, false, false, 256), "getScripts", [], "any", false, false, false, 256));
        foreach ($context['_seq'] as $context["_key"] => $context["jsitem"]) {
            // line 257
            echo "\t\t<!-- Extra JS -->
\t\t<script type=\"text/javascript\" src=\"";
            // line 258
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 258), "theme", [], "any", false, false, false, 258), "compile", [], "any", false, false, false, 258), "minify", [0 => "vendor", 1 => twig_get_attribute($this->env, $this->source, $context["jsitem"], "file", [], "any", false, false, false, 258)], "method", false, false, false, 258), "html", null, true);
            echo "\"></script>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jsitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 260
        echo "    ";
        $this->displayBlock('extra_scripts', $context, $blocks);
        // line 261
        echo "
\t<script hook-action=\"{Mention:App-domEvent-docscript}\">
\tjQuery.extend(true, app, {
\t\tconfig: {
\t\t\tsettings: {
\t\t\t\tsite_url: \"";
        // line 266
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 266), "site_url", [], "any", false, false, false, 266), "html", null, true);
        echo "\",
\t\t\t\tpublic_dir: \"";
        // line 267
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 267), "html", null, true);
        echo "\",
                ajax_path: \"/";
        // line 268
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "ajax_path", [], "any", false, false, false, 268), "html", null, true);
        echo "\",

\t\t\t\tsite_title: \"";
        // line 270
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 270), "site_title", [], "any", false, false, false, 270), "html", null, true);
        echo "\",

\t\t\t\ttitle_char_min: \"";
        // line 272
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 272), "title_char_min", [], "any", false, false, false, 272), "html", null, true);
        echo "\",
\t\t\t\tcontent_char_min: \"";
        // line 273
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 273), "content_char_min", [], "any", false, false, false, 273), "html", null, true);
        echo "\",
\t\t\t\tattachment_max: \"";
        // line 274
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 274), "max_attachments", [], "any", false, false, false, 274), "html", null, true);
        echo "\",
\t\t\t\tattachment_max_size: \"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\Bytes']->toByte(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 275), "attachment_max_size", [], "any", false, false, false, 275)), "html", null, true);
        echo "\",
\t\t\t\tprofile_photo_max_size: \"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\Bytes']->toByte(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 276), "profile_photo_max_size", [], "any", false, false, false, 276)), "html", null, true);
        echo "\",

\t\t\t\teditor_language: \"";
        // line 278
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 278), "lang", [], "any", false, false, false, 278), "default", [], "any", false, false, false, 278), "editor", [], "any", false, false, false, 278), "html", null, true);
        echo "\",

\t\t\t\tlogo: {
\t\t\t\t\tlight: \"";
        // line 281
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 281), "html", null, true);
        echo "/images/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 281), "site_logo", [], "any", false, false, false, 281), "html", null, true);
        echo "\",
\t\t\t\t\tnight: \"";
        // line 282
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 282), "html", null, true);
        echo "/images/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 282), "site_logo_night", [], "any", false, false, false, 282), "html", null, true);
        echo "\",
\t\t\t\t},

\t\t\t\temoticon_database: \"";
        // line 285
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 285), "emoticon_database", [], "any", false, false, false, 285), "html", null, true);
        echo "\"
\t\t\t}
\t\t},
\t\t";
        // line 288
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 288), "loggedIn", [], "method", false, false, false, 288)) {
            // line 289
            echo "
\t\tvisitor: {
\t\t\tuser_id: \"";
            // line 291
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 291), "user_id", [], "any", false, false, false, 291), "html", null, true);
            echo "\",
\t\t\tusername: \"";
            // line 292
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 292), "username", [], "any", false, false, false, 292), "html", null, true);
            echo "\"
 \t\t},
 \t\t";
        }
        // line 295
        echo "
\t\tphrases: {
\t\t\tcopy: \"";
        // line 297
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 297), "lang", [], "any", false, false, false, 297), "string", [], "any", false, false, false, 297), "container", [], "any", false, false, false, 297), "buttons", [], "any", false, false, false, 297), "copy", [], "any", false, false, false, 297), "html", null, true);
        echo "\",
\t\t\tproceed: \"";
        // line 298
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 298), "lang", [], "any", false, false, false, 298), "string", [], "any", false, false, false, 298), "container", [], "any", false, false, false, 298), "proceed", [], "any", false, false, false, 298), "html", null, true);
        echo "\",
\t\t\t
\t\t\tusername_available: \"";
        // line 300
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 300), "lang", [], "any", false, false, false, 300), "string", [], "any", false, false, false, 300), "container", [], "any", false, false, false, 300), "visitor", [], "any", false, false, false, 300), "register", [], "any", false, false, false, 300), "username_available", [], "any", false, false, false, 300), "html", null, true);
        echo "\",
\t\t\tusername_not_available: \"";
        // line 301
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 301), "lang", [], "any", false, false, false, 301), "string", [], "any", false, false, false, 301), "container", [], "any", false, false, false, 301), "visitor", [], "any", false, false, false, 301), "register", [], "any", false, false, false, 301), "username_not_available", [], "any", false, false, false, 301), "html", null, true);
        echo "\",

\t\t\teditor_placeholder: \"";
        // line 303
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 303), "lang", [], "any", false, false, false, 303), "string", [], "any", false, false, false, 303), "container", [], "any", false, false, false, 303), "editor", [], "any", false, false, false, 303), "placeholder", [], "any", false, false, false, 303), "new_post", [], "any", false, false, false, 303), "html", null, true);
        echo "\",

\t\t\ttitle_cannot_be_blank: \"";
        // line 305
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 305), "lang", [], "any", false, false, false, 305), "string", [], "any", false, false, false, 305), "error", [], "any", false, false, false, 305), "editor", [], "any", false, false, false, 305), "title_cannot_be_blank", [], "any", false, false, false, 305), "html", null, true);
        echo "\",
\t\t\ttitle_is_greater_then: \"";
        // line 306
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 306), "lang", [], "any", false, false, false, 306), "parse", [], "any", false, false, false, 306), "Parse", [0 => "error.editor.title_is_greater_then", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 306), "title_char_min", [], "any", false, false, false, 306)], "method", false, false, false, 306), "html", null, true);
        echo "\",
\t\t\tcontent_is_greater_then: \"";
        // line 307
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 307), "lang", [], "any", false, false, false, 307), "parse", [], "any", false, false, false, 307), "Parse", [0 => "error.editor.content_is_greater_then", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 307), "content_char_min", [], "any", false, false, false, 307)], "method", false, false, false, 307), "html", null, true);
        echo "\",
\t\t\tattachment_max: \"";
        // line 308
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 308), "lang", [], "any", false, false, false, 308), "parse", [], "any", false, false, false, 308), "Parse", [0 => "error.editor.attachment_max", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 308), "max_attachments", [], "any", false, false, false, 308)], "method", false, false, false, 308), "html", null, true);
        echo "\",
\t\t\tattachment_max_size: \"";
        // line 309
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 309), "lang", [], "any", false, false, false, 309), "parse", [], "any", false, false, false, 309), "Parse", [0 => "error.editor.attachment_max_size", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 309), "attachment_max_size", [], "any", false, false, false, 309)], "method", false, false, false, 309), "html", null, true);
        echo "\",
\t\t\tprofile_photo_max_size: \"";
        // line 310
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 310), "lang", [], "any", false, false, false, 310), "parse", [], "any", false, false, false, 310), "Parse", [0 => "error.editor.profile_photo_max_size", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 310), "profile_photo_max_size", [], "any", false, false, false, 310)], "method", false, false, false, 310), "html", null, true);
        echo "\",
\t\t\tplease_select_a_forum: \"";
        // line 311
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 311), "lang", [], "any", false, false, false, 311), "string", [], "any", false, false, false, 311), "error", [], "any", false, false, false, 311), "editor", [], "any", false, false, false, 311), "please_select_a_forum", [], "any", false, false, false, 311), "html", null, true);
        echo "\",

\t\t\treport_cannot_be_blank: \"";
        // line 313
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 313), "lang", [], "any", false, false, false, 313), "string", [], "any", false, false, false, 313), "error", [], "any", false, false, false, 313), "editor", [], "any", false, false, false, 313), "report_cannot_be_blank", [], "any", false, false, false, 313), "html", null, true);
        echo "\",

\t\t\tdiscussion_is_locked: \"";
        // line 315
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 315), "lang", [], "any", false, false, false, 315), "string", [], "any", false, false, false, 315), "discussion", [], "any", false, false, false, 315), "locked_text", [], "any", false, false, false, 315), "html", null, true);
        echo "\",

\t\t\texpand: \"";
        // line 317
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 317), "lang", [], "any", false, false, false, 317), "string", [], "any", false, false, false, 317), "discussion", [], "any", false, false, false, 317), "posts", [], "any", false, false, false, 317), "buttons", [], "any", false, false, false, 317), "expand", [], "any", false, false, false, 317), "html", null, true);
        echo "\",
\t\t\tcode_block: \"";
        // line 318
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 318), "lang", [], "any", false, false, false, 318), "string", [], "any", false, false, false, 318), "discussion", [], "any", false, false, false, 318), "posts", [], "any", false, false, false, 318), "code_block", [], "any", false, false, false, 318), "title", [], "any", false, false, false, 318), "html", null, true);
        echo "\",
\t\t\t";
        // line 319
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 319), "loggedIn", [], "method", false, false, false, 319)) {
            // line 320
            echo "
\t\t\talert_messages: {
\t\t\t\twait_a_while: \"";
            // line 322
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 322), "lang", [], "any", false, false, false, 322), "string", [], "any", false, false, false, 322), "container", [], "any", false, false, false, 322), "flash_message", [], "any", false, false, false, 322), "wait_a_while", [], "any", false, false, false, 322), "html", null, true);
            echo "\",

\t\t\t\tcopy_to_clipboard: \"";
            // line 324
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 324), "lang", [], "any", false, false, false, 324), "string", [], "any", false, false, false, 324), "container", [], "any", false, false, false, 324), "flash_message", [], "any", false, false, false, 324), "copy_to_clipboard", [], "any", false, false, false, 324), "html", null, true);
            echo "\",

\t\t\t\ttwo_step_verification_code_error: \"";
            // line 326
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 326), "lang", [], "any", false, false, false, 326), "string", [], "any", false, false, false, 326), "container", [], "any", false, false, false, 326), "flash_message", [], "any", false, false, false, 326), "two_step_verification_code_error", [], "any", false, false, false, 326), "html", null, true);
            echo "\",

\t\t\t\treport_post: \"";
            // line 328
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 328), "lang", [], "any", false, false, false, 328), "string", [], "any", false, false, false, 328), "container", [], "any", false, false, false, 328), "flash_message", [], "any", false, false, false, 328), "report_post", [], "any", false, false, false, 328), "html", null, true);
            echo "\",
\t\t\t\tdelete_post: \"";
            // line 329
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 329), "lang", [], "any", false, false, false, 329), "string", [], "any", false, false, false, 329), "container", [], "any", false, false, false, 329), "flash_message", [], "any", false, false, false, 329), "delete_post", [], "any", false, false, false, 329), "html", null, true);
            echo "\",
\t\t\t\tedit_post: \"";
            // line 330
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 330), "lang", [], "any", false, false, false, 330), "string", [], "any", false, false, false, 330), "container", [], "any", false, false, false, 330), "flash_message", [], "any", false, false, false, 330), "edit_post", [], "any", false, false, false, 330), "html", null, true);
            echo "\",

\t\t\t\tattachment_deleted_successfull: \"";
            // line 332
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 332), "lang", [], "any", false, false, false, 332), "string", [], "any", false, false, false, 332), "container", [], "any", false, false, false, 332), "flash_message", [], "any", false, false, false, 332), "attachment_deleted_successfull", [], "any", false, false, false, 332), "html", null, true);
            echo "\",

\t\t\t\tbookmark_post: \"";
            // line 334
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 334), "lang", [], "any", false, false, false, 334), "string", [], "any", false, false, false, 334), "container", [], "any", false, false, false, 334), "flash_message", [], "any", false, false, false, 334), "bookmark_post", [], "any", false, false, false, 334), "html", null, true);
            echo "\",
\t\t\t\tunbookmark_post: \"";
            // line 335
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 335), "lang", [], "any", false, false, false, 335), "string", [], "any", false, false, false, 335), "container", [], "any", false, false, false, 335), "flash_message", [], "any", false, false, false, 335), "unbookmark_post", [], "any", false, false, false, 335), "html", null, true);
            echo "\",

\t\t\t\tsubscribe_success: \"";
            // line 337
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 337), "lang", [], "any", false, false, false, 337), "string", [], "any", false, false, false, 337), "discussion", [], "any", false, false, false, 337), "subscribe", [], "any", false, false, false, 337), "success", [], "any", false, false, false, 337), "html", null, true);
            echo "\",
\t\t\t\tsubscribe_remove: \"";
            // line 338
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 338), "lang", [], "any", false, false, false, 338), "string", [], "any", false, false, false, 338), "discussion", [], "any", false, false, false, 338), "subscribe", [], "any", false, false, false, 338), "remove", [], "any", false, false, false, 338), "html", null, true);
            echo "\",
\t\t\t\tsubscribe_allready: \"";
            // line 339
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 339), "lang", [], "any", false, false, false, 339), "string", [], "any", false, false, false, 339), "discussion", [], "any", false, false, false, 339), "subscribe", [], "any", false, false, false, 339), "allready", [], "any", false, false, false, 339), "html", null, true);
            echo "\",

\t\t\t\tadd_friend: \"";
            // line 341
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 341), "lang", [], "any", false, false, false, 341), "string", [], "any", false, false, false, 341), "container", [], "any", false, false, false, 341), "flash_message", [], "any", false, false, false, 341), "add_friend", [], "any", false, false, false, 341), "html", null, true);
            echo "\",
\t\t\t\tremove_friend: \"";
            // line 342
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 342), "lang", [], "any", false, false, false, 342), "string", [], "any", false, false, false, 342), "container", [], "any", false, false, false, 342), "flash_message", [], "any", false, false, false, 342), "remove_friend", [], "any", false, false, false, 342), "html", null, true);
            echo "\",

\t\t\t\taccount_settings_success: \"";
            // line 344
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 344), "lang", [], "any", false, false, false, 344), "string", [], "any", false, false, false, 344), "container", [], "any", false, false, false, 344), "flash_message", [], "any", false, false, false, 344), "account_settings_success", [], "any", false, false, false, 344), "html", null, true);
            echo "\",
\t\t\t\taccount_passwords_must_much: \"";
            // line 345
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 345), "lang", [], "any", false, false, false, 345), "string", [], "any", false, false, false, 345), "container", [], "any", false, false, false, 345), "flash_message", [], "any", false, false, false, 345), "account_passwords_must_much", [], "any", false, false, false, 345), "html", null, true);
            echo "\",
\t\t\t\taccount_password_success: \"";
            // line 346
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 346), "lang", [], "any", false, false, false, 346), "string", [], "any", false, false, false, 346), "container", [], "any", false, false, false, 346), "flash_message", [], "any", false, false, false, 346), "account_password_success", [], "any", false, false, false, 346), "html", null, true);
            echo "\",

\t\t\t\tmessages_archived: \"";
            // line 348
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 348), "lang", [], "any", false, false, false, 348), "string", [], "any", false, false, false, 348), "container", [], "any", false, false, false, 348), "flash_message", [], "any", false, false, false, 348), "messages_archived", [], "any", false, false, false, 348), "html", null, true);
            echo "\",
\t\t\t\tmessages_removed_archive: \"";
            // line 349
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 349), "lang", [], "any", false, false, false, 349), "string", [], "any", false, false, false, 349), "container", [], "any", false, false, false, 349), "flash_message", [], "any", false, false, false, 349), "messages_removed_archive", [], "any", false, false, false, 349), "html", null, true);
            echo "\",
\t\t\t\tmessages_write_a_username: \"";
            // line 350
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 350), "lang", [], "any", false, false, false, 350), "string", [], "any", false, false, false, 350), "container", [], "any", false, false, false, 350), "flash_message", [], "any", false, false, false, 350), "messages_write_a_username", [], "any", false, false, false, 350), "html", null, true);
            echo "\",
\t\t\t\tmessages_write_a_title: \"";
            // line 351
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 351), "lang", [], "any", false, false, false, 351), "string", [], "any", false, false, false, 351), "container", [], "any", false, false, false, 351), "flash_message", [], "any", false, false, false, 351), "messages_write_a_title", [], "any", false, false, false, 351), "html", null, true);
            echo "\",
\t\t\t\tmessages_not_self: \"";
            // line 352
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 352), "lang", [], "any", false, false, false, 352), "string", [], "any", false, false, false, 352), "container", [], "any", false, false, false, 352), "flash_message", [], "any", false, false, false, 352), "messages_not_self", [], "any", false, false, false, 352), "html", null, true);
            echo "\",

\t\t\t\tnot_saving_content: \"";
            // line 354
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 354), "lang", [], "any", false, false, false, 354), "string", [], "any", false, false, false, 354), "container", [], "any", false, false, false, 354), "flash_message", [], "any", false, false, false, 354), "not_saving_content", [], "any", false, false, false, 354), "html", null, true);
            echo "\"
\t\t\t}
\t\t\t";
        }
        // line 357
        echo "
\t\t}
\t});
\t</script>
</body>
</html>";
    }

    // line 16
    public function block_extra_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 29
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 53
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 260
    public function block_extra_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "container.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  875 => 260,  869 => 53,  863 => 29,  857 => 16,  848 => 357,  842 => 354,  837 => 352,  833 => 351,  829 => 350,  825 => 349,  821 => 348,  816 => 346,  812 => 345,  808 => 344,  803 => 342,  799 => 341,  794 => 339,  790 => 338,  786 => 337,  781 => 335,  777 => 334,  772 => 332,  767 => 330,  763 => 329,  759 => 328,  754 => 326,  749 => 324,  744 => 322,  740 => 320,  738 => 319,  734 => 318,  730 => 317,  725 => 315,  720 => 313,  715 => 311,  711 => 310,  707 => 309,  703 => 308,  699 => 307,  695 => 306,  691 => 305,  686 => 303,  681 => 301,  677 => 300,  672 => 298,  668 => 297,  664 => 295,  658 => 292,  654 => 291,  650 => 289,  648 => 288,  642 => 285,  634 => 282,  628 => 281,  622 => 278,  617 => 276,  613 => 275,  609 => 274,  605 => 273,  601 => 272,  596 => 270,  591 => 268,  587 => 267,  583 => 266,  576 => 261,  573 => 260,  565 => 258,  562 => 257,  558 => 256,  555 => 255,  551 => 253,  549 => 252,  544 => 250,  538 => 247,  532 => 244,  528 => 242,  525 => 241,  521 => 239,  516 => 237,  512 => 234,  507 => 232,  503 => 229,  498 => 227,  494 => 224,  489 => 222,  486 => 220,  483 => 219,  481 => 218,  478 => 217,  473 => 215,  467 => 212,  463 => 210,  461 => 209,  452 => 202,  441 => 194,  437 => 193,  432 => 191,  428 => 190,  421 => 186,  417 => 185,  411 => 181,  409 => 180,  402 => 176,  398 => 175,  393 => 172,  383 => 165,  378 => 163,  374 => 162,  369 => 160,  363 => 157,  359 => 156,  346 => 146,  342 => 144,  340 => 143,  335 => 141,  328 => 137,  323 => 135,  318 => 133,  313 => 131,  307 => 128,  298 => 124,  291 => 120,  283 => 115,  277 => 112,  271 => 109,  267 => 108,  263 => 106,  261 => 105,  254 => 101,  250 => 100,  237 => 90,  233 => 88,  231 => 87,  226 => 85,  218 => 80,  213 => 78,  206 => 74,  200 => 71,  195 => 69,  191 => 68,  188 => 67,  186 => 66,  179 => 62,  175 => 61,  169 => 57,  167 => 56,  163 => 54,  161 => 53,  157 => 51,  149 => 46,  142 => 42,  135 => 38,  131 => 37,  126 => 34,  123 => 33,  120 => 32,  118 => 31,  114 => 30,  110 => 29,  106 => 28,  102 => 26,  98 => 24,  96 => 23,  90 => 20,  85 => 17,  82 => 16,  74 => 14,  71 => 13,  67 => 12,  62 => 10,  58 => 9,  54 => 7,  48 => 3,  44 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ app.sub.lang.default.id }}\" 
    dir=\"{{ app.sub.lang.default.text_direction }}\" 
    hook-action=\"{Mention:App-domEvent-htmldoc}\">
<head hook-action=\"{Mention:App-domEvent-head}\">
\t{# Metadata is generated automatically. #}
\t
\t<!-- CSS -->
\t<link rel=\"stylesheet\" href=\"{{ app.public_dir }}/vendor/vendor.css?v=1644274312\" />
\t<link rel=\"stylesheet\" href=\"{{ app.sub.theme.compile.makeCss('themes/frontend/assets', 'core')}}\" />

\t{% for styleitem in app.event.getStyles %}
\t\t<!-- Extra CSS -->
\t\t<link rel=\"stylesheet\" href=\"{{ app.sub.theme.compile.minify('vendor', styleitem.file) }}\">
\t{% endfor %}
\t{% block extra_styles %}{% endblock %}

    <style hook-action=\"{Mention:App-domEvent-docstyle}\"></style>

\t<link rel=\"icon\" type=\"image/png\" href=\"{{ app.public_dir }}/images/logo-favicon.png\" sizes=\"32x32\" />
</head>

{% if app.cookie.night_mode is same as('true') %}
\t{% set night_mode_class = ' app-night-mode' %}
{% endif %}

<body hook-action=\"{Mention:App-domEvent-htmlbody}\" 
    class=\"app-container{{ night_mode_class }}\" 
    data-template=\"{% block app_template_name %}{% endblock %}\" 
    data-color=\"{{ app.cookie.night_mode ? '#37474f' : '#fff' }}\">
\t{% include 'navbar.tpl' %}
\t{% if app.user.getActiveBan(app.visitor.user_id) %}
\t    {% set banItem = app.user.getActiveBan(app.visitor.user_id) %}
\t    <div class=\"container mb-4 row\">
\t\t\t<aside class=\"col-sm-12\">
\t\t\t\t<div class=\"app-banning-flag guest-welcome-area text-dark shadow-sm rounded\">
\t\t\t\t\t<h5>{{ app.sub.lang.string.container.visitor.ban.title }}</h5>
\t\t\t\t\t<div class=\"font-weight-bold\">{{ app.sub.lang.string.container.visitor.ban.reason_title }}</div>
\t\t\t\t\t<ul class=\"list-unstyled my-3\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>{{ banItem.text }}</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"font-weight-bold\">{{ app.sub.lang.parse.Parse('container.visitor.ban.expires_in', app.timer.date.getFullDate(banItem.expires)) }}</div>
\t\t\t\t</div>
\t\t\t</aside>
\t    </div>
\t{% endif %}
\t<div hook-action=\"{Mention:App-domEvent-pagecontent}\" 
        class=\"app-page-content container mb-4 row\">
\t\t    {% block content %}{% endblock %}
\t</div>

\t{% if not app.user.loggedIn() %}
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

\t{% if app.user.loggedIn() %}
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

    {% if app.user.loggedIn() %}
    \t{% if option._route is same as('PublicApp_IndexAction') or option._route is same as('PublicApp_Discussion') or option._route is same as('PublicApp_Shortcode') %}
\t\t    <script class=\"app_EditorToolbars\" type=\"application/json\">
    \t\t{% autoescape false %}
    \t\t    {{ app.sub.editor.buttons.getToolbars()|json_encode(constant('JSON_UNESCAPED_UNICODE') b-or constant('JSON_UNESCAPED_SLASHES')) }}
    \t\t{% endautoescape %}
    \t\t</script>
\t\t\t<script class=\"app_EditorToolbarIcons\" type=\"application/json\">
    \t\t{% autoescape false %}
    \t\t    {{ app.sub.editor.buttons.getToolbarIcons()|json_encode(constant('JSON_UNESCAPED_UNICODE') b-or constant('JSON_UNESCAPED_SLASHES')) }}
    \t\t{% endautoescape %}
    \t\t</script>
\t\t\t<script class=\"app_EditorButtons\" type=\"application/json\">
    \t\t{% autoescape false %}
    \t\t    {{ app.sub.editor.buttons.getButtons()|json_encode(constant('JSON_UNESCAPED_UNICODE') b-or constant('JSON_UNESCAPED_SLASHES')) }}
    \t\t{% endautoescape %}
    \t\t</script>
    \t\t<script class=\"app_EditorLanguage\" type=\"application/json\">
    \t\t{% autoescape false %}
    \t\t    {{ app.sub.lang.string.editor|json_encode(constant('JSON_UNESCAPED_UNICODE') b-or constant('JSON_UNESCAPED_SLASHES') b-or constant('JSON_PRETTY_PRINT')) }}
    \t\t{% endautoescape %}
    \t\t</script>
    \t{% endif %}
    {% endif %}

\t<!-- Editor -->
\t<script type=\"text/javascript\" src=\"{{ app.sub.theme.compile.makeJs('vendor/app', 'editor') }}\"></script>

\t<!-- Main bundle -->
\t<script type=\"text/javascript\" src=\"{{ app.public_dir }}/vendor/vendor.js?v=1645718920\"></script>

\t<!-- App Core -->
\t<script type=\"text/javascript\" src=\"{{ app.sub.theme.compile.makeJs('vendor/app', 'core') }}\"></script>

\t{% if not app.user.loggedIn() or app.request.getPathInfo == '/pages/contact' %}
\t\t<script src=\"https://www.google.com/recaptcha/api.js\"></script>
\t{% endif %}

\t{% for jsitem in app.event.getScripts %}
\t\t<!-- Extra JS -->
\t\t<script type=\"text/javascript\" src=\"{{ app.sub.theme.compile.minify('vendor', jsitem.file) }}\"></script>
\t{% endfor %}
    {% block extra_scripts %}{% endblock %}

\t<script hook-action=\"{Mention:App-domEvent-docscript}\">
\tjQuery.extend(true, app, {
\t\tconfig: {
\t\t\tsettings: {
\t\t\t\tsite_url: \"{{ app.settings.site_url }}\",
\t\t\t\tpublic_dir: \"{{ app.public_dir }}\",
                ajax_path: \"/{{ app.ajax_path }}\",

\t\t\t\tsite_title: \"{{ app.settings.site_title }}\",

\t\t\t\ttitle_char_min: \"{{ app.settings.title_char_min }}\",
\t\t\t\tcontent_char_min: \"{{ app.settings.content_char_min }}\",
\t\t\t\tattachment_max: \"{{ app.settings.max_attachments }}\",
\t\t\t\tattachment_max_size: \"{{ app.settings.attachment_max_size|toByte }}\",
\t\t\t\tprofile_photo_max_size: \"{{ app.settings.profile_photo_max_size|toByte }}\",

\t\t\t\teditor_language: \"{{ app.sub.lang.default.editor }}\",

\t\t\t\tlogo: {
\t\t\t\t\tlight: \"{{ app.public_dir }}/images/{{ app.settings.site_logo }}\",
\t\t\t\t\tnight: \"{{ app.public_dir }}/images/{{ app.settings.site_logo_night }}\",
\t\t\t\t},

\t\t\t\temoticon_database: \"{{ app.settings.emoticon_database }}\"
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
\t\t\t
\t\t\tusername_available: \"{{ app.sub.lang.string.container.visitor.register.username_available }}\",
\t\t\tusername_not_available: \"{{ app.sub.lang.string.container.visitor.register.username_not_available }}\",

\t\t\teditor_placeholder: \"{{ app.sub.lang.string.container.editor.placeholder.new_post }}\",

\t\t\ttitle_cannot_be_blank: \"{{ app.sub.lang.string.error.editor.title_cannot_be_blank }}\",
\t\t\ttitle_is_greater_then: \"{{ app.sub.lang.parse.Parse('error.editor.title_is_greater_then', app.settings.title_char_min) }}\",
\t\t\tcontent_is_greater_then: \"{{ app.sub.lang.parse.Parse('error.editor.content_is_greater_then', app.settings.content_char_min) }}\",
\t\t\tattachment_max: \"{{ app.sub.lang.parse.Parse('error.editor.attachment_max', app.settings.max_attachments) }}\",
\t\t\tattachment_max_size: \"{{ app.sub.lang.parse.Parse('error.editor.attachment_max_size', app.settings.attachment_max_size) }}\",
\t\t\tprofile_photo_max_size: \"{{ app.sub.lang.parse.Parse('error.editor.profile_photo_max_size', app.settings.profile_photo_max_size) }}\",
\t\t\tplease_select_a_forum: \"{{ app.sub.lang.string.error.editor.please_select_a_forum }}\",

\t\t\treport_cannot_be_blank: \"{{ app.sub.lang.string.error.editor.report_cannot_be_blank }}\",

\t\t\tdiscussion_is_locked: \"{{ app.sub.lang.string.discussion.locked_text }}\",

\t\t\texpand: \"{{ app.sub.lang.string.discussion.posts.buttons.expand }}\",
\t\t\tcode_block: \"{{ app.sub.lang.string.discussion.posts.code_block.title }}\",
\t\t\t{% if app.user.loggedIn() %}

\t\t\talert_messages: {
\t\t\t\twait_a_while: \"{{ app.sub.lang.string.container.flash_message.wait_a_while }}\",

\t\t\t\tcopy_to_clipboard: \"{{ app.sub.lang.string.container.flash_message.copy_to_clipboard }}\",

\t\t\t\ttwo_step_verification_code_error: \"{{ app.sub.lang.string.container.flash_message.two_step_verification_code_error }}\",

\t\t\t\treport_post: \"{{ app.sub.lang.string.container.flash_message.report_post }}\",
\t\t\t\tdelete_post: \"{{ app.sub.lang.string.container.flash_message.delete_post }}\",
\t\t\t\tedit_post: \"{{ app.sub.lang.string.container.flash_message.edit_post }}\",

\t\t\t\tattachment_deleted_successfull: \"{{ app.sub.lang.string.container.flash_message.attachment_deleted_successfull }}\",

\t\t\t\tbookmark_post: \"{{ app.sub.lang.string.container.flash_message.bookmark_post }}\",
\t\t\t\tunbookmark_post: \"{{ app.sub.lang.string.container.flash_message.unbookmark_post }}\",

\t\t\t\tsubscribe_success: \"{{ app.sub.lang.string.discussion.subscribe.success }}\",
\t\t\t\tsubscribe_remove: \"{{ app.sub.lang.string.discussion.subscribe.remove }}\",
\t\t\t\tsubscribe_allready: \"{{ app.sub.lang.string.discussion.subscribe.allready }}\",

\t\t\t\tadd_friend: \"{{ app.sub.lang.string.container.flash_message.add_friend }}\",
\t\t\t\tremove_friend: \"{{ app.sub.lang.string.container.flash_message.remove_friend }}\",

\t\t\t\taccount_settings_success: \"{{ app.sub.lang.string.container.flash_message.account_settings_success }}\",
\t\t\t\taccount_passwords_must_much: \"{{ app.sub.lang.string.container.flash_message.account_passwords_must_much }}\",
\t\t\t\taccount_password_success: \"{{ app.sub.lang.string.container.flash_message.account_password_success }}\",

\t\t\t\tmessages_archived: \"{{ app.sub.lang.string.container.flash_message.messages_archived }}\",
\t\t\t\tmessages_removed_archive: \"{{ app.sub.lang.string.container.flash_message.messages_removed_archive }}\",
\t\t\t\tmessages_write_a_username: \"{{ app.sub.lang.string.container.flash_message.messages_write_a_username }}\",
\t\t\t\tmessages_write_a_title: \"{{ app.sub.lang.string.container.flash_message.messages_write_a_title }}\",
\t\t\t\tmessages_not_self: \"{{ app.sub.lang.string.container.flash_message.messages_not_self }}\",

\t\t\t\tnot_saving_content: \"{{ app.sub.lang.string.container.flash_message.not_saving_content }}\"
\t\t\t}
\t\t\t{% endif %}

\t\t}
\t});
\t</script>
</body>
</html>", "container.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\container.tpl");
    }
}
