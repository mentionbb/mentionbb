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

/* account.tpl */
class __TwigTemplate_e3b58d33291cd6eacdeeb1eb108361b2db66b62bad6f5a750f057b5fc9dda592 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'app_template_name' => [$this, 'block_app_template_name'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "container.tpl";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("container.tpl", "account.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "account";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 10), "buildLink", [0 => "indexAction", 1 => []], "method", false, false, false, 10), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 10), "site_title", [], "any", false, false, false, 10), "html", null, true);
        echo "</a></div>
\t\t\t\t\t<div>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 11), "lang", [], "any", false, false, false, 11), "string", [], "any", false, false, false, 11), "account", [], "any", false, false, false, 11), "settings", [], "any", false, false, false, 11), "html", null, true);
        echo "</div>
\t\t\t\t\t<div class=\"tab\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 12), "lang", [], "any", false, false, false, 12), "string", [], "any", false, false, false, 12), "account", [], "any", false, false, false, 12), "title", [], "any", false, false, false, 12), "html", null, true);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t";
        // line 17
        $this->loadTemplate("usermenu_member.tpl", "account.tpl", 17)->display($context);
        // line 18
        echo "\t\t</div>
\t</div>
\t<aside class=\"col-sm-3 mb-4 pr-4\">
\t\t<div class=\"card app-forums bg-white rounded shadow mb-4\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<h6 class=\"font-weight-bold\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 23), "lang", [], "any", false, false, false, 23), "string", [], "any", false, false, false, 23), "account", [], "any", false, false, false, 23), "tab", [], "any", false, false, false, 23), "title", [], "any", false, false, false, 23), "html", null, true);
        echo "</h6>
\t\t\t</div>
\t\t\t<article class=\"card-group-item\">
\t\t\t\t<div class=\"filter-content\">
\t\t\t\t\t<div class=\"list-group list-group-flush\">
\t\t\t\t\t\t<a href=\"#\" data-tab=\"settings\" data-ui=\"account-tab-item\" class=\"list-group-item active\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 28), "lang", [], "any", false, false, false, 28), "string", [], "any", false, false, false, 28), "account", [], "any", false, false, false, 28), "tab", [], "any", false, false, false, 28), "account", [], "any", false, false, false, 28), "html", null, true);
        echo "</a>
\t\t\t\t\t\t<a href=\"#\" data-tab=\"security\" data-ui=\"account-tab-item\" class=\"list-group-item\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 29), "lang", [], "any", false, false, false, 29), "string", [], "any", false, false, false, 29), "account", [], "any", false, false, false, 29), "tab", [], "any", false, false, false, 29), "security", [], "any", false, false, false, 29), "html", null, true);
        echo "</a>
\t\t\t\t\t\t<a href=\"#\" data-tab=\"two-step-verification\" data-ui=\"account-tab-item\" class=\"list-group-item\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 30), "lang", [], "any", false, false, false, 30), "string", [], "any", false, false, false, 30), "account", [], "any", false, false, false, 30), "tab", [], "any", false, false, false, 30), "twofa", [], "any", false, false, false, 30), "html", null, true);
        echo "</a>
\t\t\t\t\t\t<a href=\"#\" data-tab=\"privacy\" data-ui=\"account-tab-item\" class=\"list-group-item\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 31), "lang", [], "any", false, false, false, 31), "string", [], "any", false, false, false, 31), "account", [], "any", false, false, false, 31), "tab", [], "any", false, false, false, 31), "privacy", [], "any", false, false, false, 31), "html", null, true);
        echo "</a>
\t\t\t\t\t\t<div class=\"card-header border-top\">
\t\t\t\t\t\t\t<h6 class=\"font-weight-bold m-0\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 33), "lang", [], "any", false, false, false, 33), "string", [], "any", false, false, false, 33), "account", [], "any", false, false, false, 33), "tab", [], "any", false, false, false, 33), "my", [], "any", false, false, false, 33), "html", null, true);
        echo "</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"#\" data-tab=\"subscriptions\" data-ui=\"account-tab-item\" class=\"list-group-item\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 35), "lang", [], "any", false, false, false, 35), "string", [], "any", false, false, false, 35), "account", [], "any", false, false, false, 35), "tab", [], "any", false, false, false, 35), "subscriptions", [], "any", false, false, false, 35), "html", null, true);
        echo "</a>
\t\t\t\t\t\t<a href=\"#\" data-tab=\"reactions\" data-ui=\"account-tab-item\" class=\"list-group-item\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 36), "lang", [], "any", false, false, false, 36), "string", [], "any", false, false, false, 36), "account", [], "any", false, false, false, 36), "tab", [], "any", false, false, false, 36), "reactions", [], "any", false, false, false, 36), "html", null, true);
        echo "</a>
\t\t\t\t\t\t<a href=\"#\" data-tab=\"bookmarks\" data-ui=\"account-tab-item\" class=\"list-group-item\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 37), "lang", [], "any", false, false, false, 37), "string", [], "any", false, false, false, 37), "account", [], "any", false, false, false, 37), "tab", [], "any", false, false, false, 37), "bookmarks", [], "any", false, false, false, 37), "html", null, true);
        echo "</a>
\t\t\t\t\t\t<a href=\"#\" data-tab=\"friend-list\" data-ui=\"account-tab-item\" class=\"list-group-item\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 38), "lang", [], "any", false, false, false, 38), "string", [], "any", false, false, false, 38), "account", [], "any", false, false, false, 38), "tab", [], "any", false, false, false, 38), "friendships", [], "any", false, false, false, 38), "html", null, true);
        echo "</a>
\t\t\t\t\t\t<div class=\"card-header border-top\">
\t\t\t\t\t\t\t<h6 class=\"font-weight-bold m-0\">";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 40), "lang", [], "any", false, false, false, 40), "string", [], "any", false, false, false, 40), "account", [], "any", false, false, false, 40), "tab", [], "any", false, false, false, 40), "other", [], "any", false, false, false, 40), "html", null, true);
        echo "</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"#\" data-tab=\"about\" data-ui=\"account-tab-item\" class=\"list-group-item\">";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 42), "lang", [], "any", false, false, false, 42), "string", [], "any", false, false, false, 42), "account", [], "any", false, false, false, 42), "tab", [], "any", false, false, false, 42), "about", [], "any", false, false, false, 42), "html", null, true);
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</article>
\t\t</div>
\t</aside>
\t<aside class=\"col-sm-9\">
\t\t<div class=\"app-tab-container\">
\t\t\t<div class=\"tab-content settings\">
\t\t\t\t<div class=\"app-box shadow rounded animate slideIn\">
\t\t\t\t\t<div class=\"progress d-none\">
\t\t\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t\t\t<h5 class=\"mb-3\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 56), "lang", [], "any", false, false, false, 56), "string", [], "any", false, false, false, 56), "account", [], "any", false, false, false, 56), "account_details", [], "any", false, false, false, 56), "title", [], "any", false, false, false, 56), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t<form id=\"acs_settings\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t<div class=\"profile-picture text-center mb-3\">
\t\t\t\t\t\t\t\t<input type=\"file\" name=\"acs_profile_picture\" id=\"acs_profile_picture\" class=\"d-none\" accept=\"image/x-png,image/svg+xml,image/jpeg\" />
\t\t\t\t\t\t\t\t";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 60), "user", [], "any", false, false, false, 60), "link", [], "any", false, false, false, 60), "setUser", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 60), "user_id", [], "any", false, false, false, 60)], "method", false, false, false, 60), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t";
        // line 62
        echo "\t\t\t\t\t\t\t\t\t<label class=\"mb-0\" for=\"acs_profile_picture\">";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 62), "user", [], "any", false, false, false, 62), "link", [], "any", false, false, false, 62), "getProfilePicture", [0 => false], "method", false, false, false, 62);
        echo "</label>
\t\t\t\t\t\t\t\t";
        // line 64
        echo "\t\t\t\t\t\t\t\t";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 64), "user", [], "any", false, false, false, 64), "unsetUser", [], "method", false, false, false, 64), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t<small class=\"d-block text-muted font-italic mt-3 mb-0\">";
        // line 65
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 65), "lang", [], "any", false, false, false, 65), "parse", [], "any", false, false, false, 65), "Parse", [0 => "account.account_details.profile_picture_size", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 65), "profile_photo_max_size", [], "any", false, false, false, 65)], "method", false, false, false, 65);
        echo "</small>
\t\t\t\t\t\t\t\t<p class=\"text-muted mt-1\">";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 66), "lang", [], "any", false, false, false, 66), "string", [], "any", false, false, false, 66), "account", [], "any", false, false, false, 66), "account_details", [], "any", false, false, false, 66), "profile_picture_text", [], "any", false, false, false, 66), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"profile-picture-ready d-flex align-items-lg-center justify-content-lg-center mt-4 mb-4\" data-ui=\"profile-picture-quick-preview\">
\t\t\t\t\t\t\t\t<div class=\"default d-none\" data-src=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 69), "html", null, true);
        echo "/uploads/profile_picture/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 69), "profile_picture", [], "any", false, false, false, 69), "html", null, true);
        echo "\"></div>
\t\t\t\t\t\t\t\t<div data-name=\"donatello\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 71), "html", null, true);
        echo "/images/avatars/donatello.svg\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div data-name=\"boy\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 74), "html", null, true);
        echo "/images/avatars/boy.svg\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div data-name=\"woman\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 77), "html", null, true);
        echo "/images/avatars/woman.svg\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div data-name=\"influencer\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 80), "html", null, true);
        echo "/images/avatars/influencer.svg\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div data-name=\"woman_1\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 83), "html", null, true);
        echo "/images/avatars/woman_1.svg\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div data-name=\"snowman\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 86), "html", null, true);
        echo "/images/avatars/snowman.svg\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div data-name=\"cool\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 89), "html", null, true);
        echo "/images/avatars/cool.svg\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div data-name=\"big_eyes\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 92), "html", null, true);
        echo "/images/avatars/big_eyes.svg\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 96), "lang", [], "any", false, false, false, 96), "string", [], "any", false, false, false, 96), "account", [], "any", false, false, false, 96), "account_details", [], "any", false, false, false, 96), "username", [], "any", false, false, false, 96), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"username\" aria-describedby=\"emailHelp\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 97), "username", [], "any", false, false, false, 97), "html", null, true);
        echo "\" disabled>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 100), "lang", [], "any", false, false, false, 100), "string", [], "any", false, false, false, 100), "account", [], "any", false, false, false, 100), "account_details", [], "any", false, false, false, 100), "usertitle", [], "any", false, false, false, 100), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t<input name=\"acs_usertitle\" type=\"text\" class=\"form-control\" id=\"acs_usertitle\" aria-describedby=\"emailHelp\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 101), "usertitle", [], "any", false, false, false, 101), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t";
        // line 102
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 102), "is_admin", [], "any", false, false, false, 102)) {
            // line 103
            echo "\t\t\t\t\t\t\t\t\t<small id=\"emailHelp\" class=\"form-text text-muted\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 103), "lang", [], "any", false, false, false, 103), "string", [], "any", false, false, false, 103), "account", [], "any", false, false, false, 103), "account_details", [], "any", false, false, false, 103), "usertitle_text_admin", [], "any", false, false, false, 103), "html", null, true);
            echo "</small>
\t\t\t\t\t\t\t\t";
        } else {
            // line 105
            echo "\t\t\t\t\t\t\t\t\t<small id=\"emailHelp\" class=\"form-text text-muted\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 105), "lang", [], "any", false, false, false, 105), "string", [], "any", false, false, false, 105), "account", [], "any", false, false, false, 105), "account_details", [], "any", false, false, false, 105), "usertitle_text", [], "any", false, false, false, 105), "html", null, true);
            echo "</small>
\t\t\t\t\t\t\t\t";
        }
        // line 107
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 109), "lang", [], "any", false, false, false, 109), "string", [], "any", false, false, false, 109), "account", [], "any", false, false, false, 109), "account_details", [], "any", false, false, false, 109), "mail", [], "any", false, false, false, 109), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t<input name=\"acs_mail\" type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"E-Posta\" value=\"";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 110), "mail", [], "any", false, false, false, 110), "html", null, true);
        echo "\" required=\"required\">
\t\t\t\t\t\t\t\t<small id=\"emailHelp\" class=\"form-text text-muted\">";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 111), "lang", [], "any", false, false, false, 111), "string", [], "any", false, false, false, 111), "account", [], "any", false, false, false, 111), "account_details", [], "any", false, false, false, 111), "mail_text", [], "any", false, false, false, 111), "html", null, true);
        echo "</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-app-discussion icon send\">";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 114), "lang", [], "any", false, false, false, 114), "string", [], "any", false, false, false, 114), "container", [], "any", false, false, false, 114), "buttons", [], "any", false, false, false, 114), "update", [], "any", false, false, false, 114), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tab-content security\">
\t\t\t\t<div class=\"app-box shadow rounded animate slideIn\">
\t\t\t\t\t<div class=\"progress d-none\">
\t\t\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t\t\t<h5 class=\"mb-3\">";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 126), "lang", [], "any", false, false, false, 126), "string", [], "any", false, false, false, 126), "account", [], "any", false, false, false, 126), "security", [], "any", false, false, false, 126), "password", [], "any", false, false, false, 126), "title", [], "any", false, false, false, 126), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t<form id=\"acs_password\" method=\"post\">
\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 130), "lang", [], "any", false, false, false, 130), "string", [], "any", false, false, false, 130), "account", [], "any", false, false, false, 130), "security", [], "any", false, false, false, 130), "password", [], "any", false, false, false, 130), "password", [], "any", false, false, false, 130), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t\t<input name=\"password\" type=\"password\" class=\"form-control\" id=\"password\" aria-describedby=\"passHelp\" required=\"required\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 134), "lang", [], "any", false, false, false, 134), "string", [], "any", false, false, false, 134), "account", [], "any", false, false, false, 134), "security", [], "any", false, false, false, 134), "password", [], "any", false, false, false, 134), "re_password", [], "any", false, false, false, 134), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t\t<input name=\"re-password\" type=\"password\" class=\"form-control\" id=\"re-password\" aria-describedby=\"passHelp\" required=\"required\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group mt-3\">
\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 139), "lang", [], "any", false, false, false, 139), "string", [], "any", false, false, false, 139), "account", [], "any", false, false, false, 139), "security", [], "any", false, false, false, 139), "password", [], "any", false, false, false, 139), "now_password", [], "any", false, false, false, 139), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t<input name=\"acs_old_password\" type=\"password\" class=\"form-control\" placeholder=\"";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 140), "lang", [], "any", false, false, false, 140), "string", [], "any", false, false, false, 140), "account", [], "any", false, false, false, 140), "security", [], "any", false, false, false, 140), "password", [], "any", false, false, false, 140), "now_password", [], "any", false, false, false, 140), "html", null, true);
        echo "\" required=\"required\">
\t\t\t\t\t\t\t\t<small id=\"emailHelp\" class=\"form-text text-muted\">";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 141), "lang", [], "any", false, false, false, 141), "string", [], "any", false, false, false, 141), "account", [], "any", false, false, false, 141), "security", [], "any", false, false, false, 141), "password", [], "any", false, false, false, 141), "now_password_text", [], "any", false, false, false, 141), "html", null, true);
        echo "</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-app-discussion icon send\">";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 144), "lang", [], "any", false, false, false, 144), "string", [], "any", false, false, false, 144), "container", [], "any", false, false, false, 144), "buttons", [], "any", false, false, false, 144), "approve", [], "any", false, false, false, 144), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t<small class=\"font-weight-bold\">";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 147), "lang", [], "any", false, false, false, 147), "string", [], "any", false, false, false, 147), "account", [], "any", false, false, false, 147), "security", [], "any", false, false, false, 147), "password", [], "any", false, false, false, 147), "text", [], "any", false, false, false, 147), "html", null, true);
        echo "</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-error mt-2\">
\t\t\t\t\t\t\t\t<span class=\"text-danger font-weight-bold\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tab-content two-step-verification\">
\t\t\t\t<div class=\"app-box shadow rounded animate slideIn\">
\t\t\t\t\t<div class=\"progress d-none\">
\t\t\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t\t\t<h5 class=\"mb-3\">";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 162), "lang", [], "any", false, false, false, 162), "string", [], "any", false, false, false, 162), "account", [], "any", false, false, false, 162), "tab", [], "any", false, false, false, 162), "twofa", [], "any", false, false, false, 162), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t<form id=\"acs_two_step_verification\" method=\"post\">
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<small class=\"font-weight-bold\">";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 165), "lang", [], "any", false, false, false, 165), "string", [], "any", false, false, false, 165), "account", [], "any", false, false, false, 165), "twofa", [], "any", false, false, false, 165), "text", [], "any", false, false, false, 165), "html", null, true);
        echo "</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 167
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 167), "use_twofa", [], "any", false, false, false, 167)) {
            // line 168
            echo "\t\t\t\t\t\t\t\t<div class=\"form-check mb-1\">
\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"acs_2fa\" id=\"acs_2fa_off\" value=\"0\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"acs_2fa_off\">";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 170), "lang", [], "any", false, false, false, 170), "string", [], "any", false, false, false, 170), "account", [], "any", false, false, false, 170), "twofa", [], "any", false, false, false, 170), "i_dont_use_twofa", [], "any", false, false, false, 170), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"acs_2fa\" id=\"acs_2fa_on\" value=\"1\">
\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"acs_2fa_on\">";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 174), "lang", [], "any", false, false, false, 174), "string", [], "any", false, false, false, 174), "account", [], "any", false, false, false, 174), "twofa", [], "any", false, false, false, 174), "i_use_twofa", [], "any", false, false, false, 174), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"2fa_container d-none\">
\t\t\t\t\t\t\t\t\t<div class=\"qr-code\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 178
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "two_fa", [], "any", false, false, false, 178), "getQRCode", [], "method", false, false, false, 178), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-row mt-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t\t<label>";
            // line 182
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 182), "lang", [], "any", false, false, false, 182), "string", [], "any", false, false, false, 182), "account", [], "any", false, false, false, 182), "twofa", [], "any", false, false, false, 182), "secret_key", [], "any", false, false, false, 182), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" value=\"";
            // line 183
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "two_fa", [], "any", false, false, false, 183), "getSecret", [], "method", false, false, false, 183), "html", null, true);
            echo "\" disabled>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t\t<label>";
            // line 186
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 186), "lang", [], "any", false, false, false, 186), "string", [], "any", false, false, false, 186), "account", [], "any", false, false, false, 186), "twofa", [], "any", false, false, false, 186), "code", [], "any", false, false, false, 186), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<input name=\"acs_twofa_code\" type=\"number\" class=\"form-control\" placeholder=\"######\" required=\"required\" max=\"999999\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t<small id=\"2faHelp\" class=\"form-text text-muted\">";
            // line 191
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 191), "lang", [], "any", false, false, false, 191), "string", [], "any", false, false, false, 191), "account", [], "any", false, false, false, 191), "twofa", [], "any", false, false, false, 191), "caution", [], "any", false, false, false, 191), "html", null, true);
            echo "</small>
\t\t\t\t\t\t\t\t\t\t<small id=\"2faHelp1\" class=\"form-text font-weight-bold text-danger\">";
            // line 192
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 192), "lang", [], "any", false, false, false, 192), "string", [], "any", false, false, false, 192), "account", [], "any", false, false, false, 192), "twofa", [], "any", false, false, false, 192), "secret_key_text", [], "any", false, false, false, 192), "html", null, true);
            echo "</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-app-discussion icon send\">";
            // line 195
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 195), "lang", [], "any", false, false, false, 195), "string", [], "any", false, false, false, 195), "container", [], "any", false, false, false, 195), "buttons", [], "any", false, false, false, 195), "setup", [], "any", false, false, false, 195), "html", null, true);
            echo "</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-error mt-3\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger font-weight-bold\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        } else {
            // line 202
            echo "\t\t\t\t\t\t\t\t<div class=\"form-check mb-1\">
\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"acs_2fa\" id=\"acs_2fa_off\" value=\"0\">
\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"acs_2fa_off\">";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 204), "lang", [], "any", false, false, false, 204), "string", [], "any", false, false, false, 204), "account", [], "any", false, false, false, 204), "twofa", [], "any", false, false, false, 204), "i_dont_use_twofa", [], "any", false, false, false, 204), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"acs_2fa\" id=\"acs_2fa_on\" value=\"1\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"acs_2fa_on\">";
            // line 208
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 208), "lang", [], "any", false, false, false, 208), "string", [], "any", false, false, false, 208), "account", [], "any", false, false, false, 208), "twofa", [], "any", false, false, false, 208), "i_use_twofa", [], "any", false, false, false, 208), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"2fa_use_container\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-success text-white rounded p-2\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-lock pr-2\"></i>
\t\t\t\t\t\t\t\t\t\t<span>";
            // line 213
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 213), "lang", [], "any", false, false, false, 213), "string", [], "any", false, false, false, 213), "account", [], "any", false, false, false, 213), "twofa", [], "any", false, false, false, 213), "is_active", [], "any", false, false, false, 213), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-app-discussion icon send\">";
            // line 217
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 217), "lang", [], "any", false, false, false, 217), "string", [], "any", false, false, false, 217), "container", [], "any", false, false, false, 217), "buttons", [], "any", false, false, false, 217), "close", [], "any", false, false, false, 217), "html", null, true);
            echo "</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 220
        echo "\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tab-content privacy\">
\t\t\t\t<div class=\"app-box shadow rounded animate slideIn\">
\t\t\t\t\t<div class=\"progress d-none\">
\t\t\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t\t\t<h5 class=\"mb-3\">";
        // line 230
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 230), "lang", [], "any", false, false, false, 230), "string", [], "any", false, false, false, 230), "account", [], "any", false, false, false, 230), "tab", [], "any", false, false, false, 230), "privacy", [], "any", false, false, false, 230), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t<form id=\"acs_privacy\" method=\"post\">
\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t<input name=\"acs_update_mails\" type=\"checkbox\" class=\"form-check-input\" id=\"acs_update_mails\" checked=\"checked\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"acs_update_mails\">";
        // line 234
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 234), "lang", [], "any", false, false, false, 234), "string", [], "any", false, false, false, 234), "account", [], "any", false, false, false, 234), "privacy", [], "any", false, false, false, 234), "send_mail", [], "any", false, false, false, 234), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t<input name=\"acs_notify_as_mail\" type=\"checkbox\" class=\"form-check-input\" id=\"acs_notify_as_mail\" checked=\"checked\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"acs_notify_as_mail\">";
        // line 238
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 238), "lang", [], "any", false, false, false, 238), "string", [], "any", false, false, false, 238), "account", [], "any", false, false, false, 238), "privacy", [], "any", false, false, false, 238), "send_mail_for_notifications", [], "any", false, false, false, 238), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-app-discussion icon send\">";
        // line 241
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 241), "lang", [], "any", false, false, false, 241), "string", [], "any", false, false, false, 241), "container", [], "any", false, false, false, 241), "buttons", [], "any", false, false, false, 241), "update", [], "any", false, false, false, 241), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-error mt-2\">
\t\t\t\t\t\t\t\t<span class=\"text-danger font-weight-bold\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tab-content subscriptions\">
\t\t\t\t<div class=\"app-box shadow rounded animate slideIn\">
\t\t\t\t\t<div class=\"progress d-none\">
\t\t\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t\t\t<h5 class=\"mb-3\">";
        // line 256
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 256), "lang", [], "any", false, false, false, 256), "string", [], "any", false, false, false, 256), "account", [], "any", false, false, false, 256), "tab", [], "any", false, false, false, 256), "subscriptions", [], "any", false, false, false, 256), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t<p>";
        // line 257
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 257), "lang", [], "any", false, false, false, 257), "string", [], "any", false, false, false, 257), "account", [], "any", false, false, false, 257), "subscriptions", [], "any", false, false, false, 257), "discussion", [], "any", false, false, false, 257), "title", [], "any", false, false, false, 257), "html", null, true);
        echo "</p>
\t\t\t\t\t\t<div class=\"subscriptions-area\">
\t\t\t\t\t\t\t";
        // line 259
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "discussion", [], "any", false, false, false, 259), "getUserSubscriptions", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 259), "user_id", [], "any", false, false, false, 259)], "method", false, false, false, 259));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 260
            echo "\t\t\t\t\t\t\t\t<div class=\"app-post mb-3\" data-discussion-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "discussion_id", [], "any", false, false, false, 260), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"post-layout d-flex align-items-center border-0 p-1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"post-user\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 263
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 263), "user", [], "any", false, false, false, 263), "link", [], "any", false, false, false, 263), "setUser", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "user_id", [], "any", false, false, false, 263)], "method", false, false, false, 263), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
            // line 265
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 265), "user", [], "any", false, false, false, 265), "link", [], "any", false, false, false, 265), "getProfilePicture", [0 => false], "method", false, false, false, 265);
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
            // line 267
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 267), "user", [], "any", false, false, false, 267), "link", [], "any", false, false, false, 267), "unsetUser", [], "method", false, false, false, 267), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"title ml-lg-0 ml-2\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-dark font-weight-bold\" href=\"";
            // line 270
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 270), "buildLink", [0 => "discussion", 1 => ["discussion_id" => twig_get_attribute($this->env, $this->source, $context["item"], "discussion_id", [], "any", false, false, false, 270), "discussion_title" => twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 270)]], "method", false, false, false, 270), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 270), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div title=\"";
            // line 272
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 272), "lang", [], "any", false, false, false, 272), "string", [], "any", false, false, false, 272), "container", [], "any", false, false, false, 272), "buttons", [], "any", false, false, false, 272), "subscribe_remove", [], "any", false, false, false, 272), "html", null, true);
            echo "\" class=\"remove-subscribe cursor-pointer h5 mb-0 ml-auto\" data-ui=\"account-remove-subscribe\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 278
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tab-content reactions\">
\t\t\t\t<div class=\"app-box shadow rounded animate slideIn\">
\t\t\t\t\t<div class=\"progress d-none\">
\t\t\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t\t\t<h5 class=\"mb-3\">";
        // line 288
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 288), "lang", [], "any", false, false, false, 288), "string", [], "any", false, false, false, 288), "account", [], "any", false, false, false, 288), "tab", [], "any", false, false, false, 288), "reactions", [], "any", false, false, false, 288), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t";
        // line 289
        $this->loadTemplate("account_likes_posts.tpl", "account.tpl", 289)->display($context);
        // line 290
        echo "\t\t\t\t\t\t<div class=\"post-loader-spin\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tab-content bookmarks\">
\t\t\t\t<div class=\"app-box shadow rounded animate slideIn\">
\t\t\t\t\t<div class=\"progress d-none\">
\t\t\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t\t\t<h5 class=\"mb-3\">";
        // line 300
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 300), "lang", [], "any", false, false, false, 300), "string", [], "any", false, false, false, 300), "account", [], "any", false, false, false, 300), "tab", [], "any", false, false, false, 300), "bookmarks", [], "any", false, false, false, 300), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t";
        // line 301
        $this->loadTemplate("account_bookmarks_posts.tpl", "account.tpl", 301)->display($context);
        // line 302
        echo "\t\t\t\t\t\t<div class=\"post-loader-spin\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tab-content friend-list\">
\t\t\t\t<div class=\"app-box shadow rounded animate slideIn\">
\t\t\t\t\t<div class=\"progress d-none\">
\t\t\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t\t\t<h5 class=\"mb-3\">";
        // line 312
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 312), "lang", [], "any", false, false, false, 312), "string", [], "any", false, false, false, 312), "account", [], "any", false, false, false, 312), "tab", [], "any", false, false, false, 312), "friendships", [], "any", false, false, false, 312), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t";
        // line 313
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "profile", [], "any", false, false, false, 313), "getUserFriendships", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 313), "user_id", [], "any", false, false, false, 313)], "method", false, false, false, 313));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 314
            echo "\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 314), "user_id", [], "any", false, false, false, 314) === twig_get_attribute($this->env, $this->source, $context["item"], "user_id", [], "any", false, false, false, 314))) {
                // line 315
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 315), "user", [], "any", false, false, false, 315), "link", [], "any", false, false, false, 315), "setUser", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "sender_id", [], "any", false, false, false, 315)], "method", false, false, false, 315), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t<div class=\"app-post app-friendships mb-3\" data-user-id=\"";
                // line 316
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "sender_id", [], "any", false, false, false, 316), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"post-layout d-lg-flex d-flex align-items-center border-0 p-1\">
\t\t\t\t\t\t\t\t\t\t";
                // line 319
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-user\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 320
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 320), "user", [], "any", false, false, false, 320), "link", [], "any", false, false, false, 320), "getProfilePicture", [0 => false], "method", false, false, false, 320);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-dark font-weight-bold ml-lg-0 ml-2 mr-auto\" href=\"";
                // line 322
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 322), "user", [], "any", false, false, false, 322), "link", [], "any", false, false, false, 322), "getOnlyLink", [], "method", false, false, false, 322);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 322), "user", [], "any", false, false, false, 322), "link", [], "any", false, false, false, 322), "getName", [], "method", false, false, false, 322);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                // line 324
                echo "\t\t\t\t\t\t\t\t\t\t<div title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 324), "lang", [], "any", false, false, false, 324), "string", [], "any", false, false, false, 324), "discussion", [], "any", false, false, false, 324), "posts", [], "any", false, false, false, 324), "quick_menu", [], "any", false, false, false, 324), "links", [], "any", false, false, false, 324), "remove_from_list", [], "any", false, false, false, 324), "html", null, true);
                echo "\" class=\"remove-friendship cursor-pointer h5 mb-0\" data-ui=\"account-remove-friendship\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                // line 329
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 329), "user", [], "any", false, false, false, 329), "link", [], "any", false, false, false, 329), "unsetUser", [], "method", false, false, false, 329), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 330
($context["app"] ?? null), "visitor", [], "any", false, false, false, 330), "user_id", [], "any", false, false, false, 330) === twig_get_attribute($this->env, $this->source, $context["item"], "sender_id", [], "any", false, false, false, 330))) {
                // line 331
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 331), "user", [], "any", false, false, false, 331), "link", [], "any", false, false, false, 331), "setUser", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "user_id", [], "any", false, false, false, 331)], "method", false, false, false, 331), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t<div class=\"app-post app-friendships mb-3\" data-user-id=\"";
                // line 332
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "user_id", [], "any", false, false, false, 332), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"post-layout align-items-center border-0 p-1\">
\t\t\t\t\t\t\t\t\t\t";
                // line 335
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-user\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 336
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 336), "user", [], "any", false, false, false, 336), "link", [], "any", false, false, false, 336), "getProfilePicture", [0 => false], "method", false, false, false, 336);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-dark font-weight-bold mr-auto\" href=\"";
                // line 338
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 338), "user", [], "any", false, false, false, 338), "link", [], "any", false, false, false, 338), "getOnlyLink", [], "method", false, false, false, 338);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 338), "user", [], "any", false, false, false, 338), "link", [], "any", false, false, false, 338), "getName", [], "method", false, false, false, 338);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                // line 340
                echo "\t\t\t\t\t\t\t\t\t\t<div title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 340), "lang", [], "any", false, false, false, 340), "string", [], "any", false, false, false, 340), "discussion", [], "any", false, false, false, 340), "posts", [], "any", false, false, false, 340), "quick_menu", [], "any", false, false, false, 340), "links", [], "any", false, false, false, 340), "remove_from_list", [], "any", false, false, false, 340), "html", null, true);
                echo "\" class=\"remove-friendship cursor-pointer h5 mb-0\" data-ui=\"account-remove-friendship\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                // line 345
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 345), "user", [], "any", false, false, false, 345), "link", [], "any", false, false, false, 345), "unsetUser", [], "method", false, false, false, 345), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
            }
            // line 347
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 348
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tab-content about\">
\t\t\t\t<div class=\"app-box shadow rounded animate slideIn\">
\t\t\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t\t\t<h5 class=\"mb-3\">";
        // line 354
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 354), "lang", [], "any", false, false, false, 354), "string", [], "any", false, false, false, 354), "account", [], "any", false, false, false, 354), "tab", [], "any", false, false, false, 354), "about", [], "any", false, false, false, 354), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-center align-items-center copyright\">
\t\t\t\t\t\t\t<div class=\"logo text-center mb-3\">
\t\t\t\t\t\t\t\t";
        // line 357
        $this->loadTemplate("logo.tpl", "account.tpl", 357)->display($context);
        // line 358
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"mb-0\">Software by Mention </p>
\t\t\t\t\t\t\t<span>© ";
        // line 360
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 360), "date", [], "any", false, false, false, 360), "getYear", [], "any", false, false, false, 360), "html", null, true);
        echo " ParantezTech.</span>
\t\t\t\t\t\t\t<div class=\"version mt-4\">";
        // line 361
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "build", [], "any", false, false, false, 361), "code", [], "any", false, false, false, 361), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t<div class=\"version\">Build ";
        // line 362
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "build", [], "any", false, false, false, 362), "id", [], "any", false, false, false, 362), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t<div class=\"text-center mt-4\">
\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.r10.net/members/90047-scarecrow.html\">https://www.r10.net/members/90047-scarecrow.html</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</aside>
\t";
        // line 373
        echo "\t<div hook-action=\"{Mention:App-domEvent-metacontents}\" data-title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 373), "lang", [], "any", false, false, false, 373), "string", [], "any", false, false, false, 373), "account", [], "any", false, false, false, 373), "title", [], "any", false, false, false, 373), "html", null, true);
        echo "\"
\t\tdata-meta-description=\"";
        // line 374
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 374), "meta_description", [], "any", false, false, false, 374), "html", null, true);
        echo "\"
\t\tdata-og-description=\"";
        // line 375
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 375), "meta_description", [], "any", false, false, false, 375), "html", null, true);
        echo "\"
\t\tdata-twitter-description=\"";
        // line 376
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 376), "meta_description", [], "any", false, false, false, 376), "html", null, true);
        echo "\" data-og-title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 376), "site_title", [], "any", false, false, false, 376), "html", null, true);
        echo "\"
\t\tdata-twitter-title=\"";
        // line 377
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 377), "site_title", [], "any", false, false, false, 377), "html", null, true);
        echo "\" class=\"d-none\">
\t</div>
";
    }

    public function getTemplateName()
    {
        return "account.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  787 => 377,  781 => 376,  777 => 375,  773 => 374,  768 => 373,  755 => 362,  751 => 361,  747 => 360,  743 => 358,  741 => 357,  735 => 354,  727 => 348,  721 => 347,  716 => 345,  707 => 340,  701 => 338,  696 => 336,  693 => 335,  688 => 332,  683 => 331,  681 => 330,  677 => 329,  668 => 324,  662 => 322,  657 => 320,  654 => 319,  649 => 316,  644 => 315,  641 => 314,  637 => 313,  633 => 312,  621 => 302,  619 => 301,  615 => 300,  603 => 290,  601 => 289,  597 => 288,  585 => 278,  573 => 272,  566 => 270,  559 => 267,  554 => 265,  550 => 263,  543 => 260,  539 => 259,  534 => 257,  530 => 256,  512 => 241,  506 => 238,  499 => 234,  492 => 230,  480 => 220,  474 => 217,  467 => 213,  459 => 208,  452 => 204,  448 => 202,  438 => 195,  432 => 192,  428 => 191,  420 => 186,  414 => 183,  410 => 182,  403 => 178,  396 => 174,  389 => 170,  385 => 168,  383 => 167,  378 => 165,  372 => 162,  354 => 147,  348 => 144,  342 => 141,  338 => 140,  334 => 139,  326 => 134,  319 => 130,  312 => 126,  297 => 114,  291 => 111,  287 => 110,  283 => 109,  279 => 107,  273 => 105,  267 => 103,  265 => 102,  261 => 101,  257 => 100,  251 => 97,  247 => 96,  240 => 92,  234 => 89,  228 => 86,  222 => 83,  216 => 80,  210 => 77,  204 => 74,  198 => 71,  191 => 69,  185 => 66,  181 => 65,  176 => 64,  171 => 62,  167 => 60,  160 => 56,  143 => 42,  138 => 40,  133 => 38,  129 => 37,  125 => 36,  121 => 35,  116 => 33,  111 => 31,  107 => 30,  103 => 29,  99 => 28,  91 => 23,  84 => 18,  82 => 17,  74 => 12,  70 => 11,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'container.tpl' %}

{% block app_template_name 'account' %}

{% block content %}
\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div>{{ app.sub.lang.string.account.settings }}</div>
\t\t\t\t\t<div class=\"tab\">{{ app.sub.lang.string.account.title }}</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t{% include 'usermenu_member.tpl' %}
\t\t</div>
\t</div>
\t<aside class=\"col-sm-3 mb-4 pr-4\">
\t\t<div class=\"card app-forums bg-white rounded shadow mb-4\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<h6 class=\"font-weight-bold\">{{ app.sub.lang.string.account.tab.title }}</h6>
\t\t\t</div>
\t\t\t<article class=\"card-group-item\">
\t\t\t\t<div class=\"filter-content\">
\t\t\t\t\t<div class=\"list-group list-group-flush\">
\t\t\t\t\t\t<a href=\"#\" data-tab=\"settings\" data-ui=\"account-tab-item\" class=\"list-group-item active\">{{ app.sub.lang.string.account.tab.account }}</a>
\t\t\t\t\t\t<a href=\"#\" data-tab=\"security\" data-ui=\"account-tab-item\" class=\"list-group-item\">{{ app.sub.lang.string.account.tab.security }}</a>
\t\t\t\t\t\t<a href=\"#\" data-tab=\"two-step-verification\" data-ui=\"account-tab-item\" class=\"list-group-item\">{{ app.sub.lang.string.account.tab.twofa }}</a>
\t\t\t\t\t\t<a href=\"#\" data-tab=\"privacy\" data-ui=\"account-tab-item\" class=\"list-group-item\">{{ app.sub.lang.string.account.tab.privacy }}</a>
\t\t\t\t\t\t<div class=\"card-header border-top\">
\t\t\t\t\t\t\t<h6 class=\"font-weight-bold m-0\">{{ app.sub.lang.string.account.tab.my }}</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"#\" data-tab=\"subscriptions\" data-ui=\"account-tab-item\" class=\"list-group-item\">{{ app.sub.lang.string.account.tab.subscriptions }}</a>
\t\t\t\t\t\t<a href=\"#\" data-tab=\"reactions\" data-ui=\"account-tab-item\" class=\"list-group-item\">{{ app.sub.lang.string.account.tab.reactions }}</a>
\t\t\t\t\t\t<a href=\"#\" data-tab=\"bookmarks\" data-ui=\"account-tab-item\" class=\"list-group-item\">{{ app.sub.lang.string.account.tab.bookmarks }}</a>
\t\t\t\t\t\t<a href=\"#\" data-tab=\"friend-list\" data-ui=\"account-tab-item\" class=\"list-group-item\">{{ app.sub.lang.string.account.tab.friendships }}</a>
\t\t\t\t\t\t<div class=\"card-header border-top\">
\t\t\t\t\t\t\t<h6 class=\"font-weight-bold m-0\">{{ app.sub.lang.string.account.tab.other }}</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"#\" data-tab=\"about\" data-ui=\"account-tab-item\" class=\"list-group-item\">{{ app.sub.lang.string.account.tab.about }}</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</article>
\t\t</div>
\t</aside>
\t<aside class=\"col-sm-9\">
\t\t<div class=\"app-tab-container\">
\t\t\t<div class=\"tab-content settings\">
\t\t\t\t<div class=\"app-box shadow rounded animate slideIn\">
\t\t\t\t\t<div class=\"progress d-none\">
\t\t\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t\t\t<h5 class=\"mb-3\">{{ app.sub.lang.string.account.account_details.title }}</h5>
\t\t\t\t\t\t<form id=\"acs_settings\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t<div class=\"profile-picture text-center mb-3\">
\t\t\t\t\t\t\t\t<input type=\"file\" name=\"acs_profile_picture\" id=\"acs_profile_picture\" class=\"d-none\" accept=\"image/x-png,image/svg+xml,image/jpeg\" />
\t\t\t\t\t\t\t\t{{ app.sub.user.link.setUser(app.visitor.user_id) }}
\t\t\t\t\t\t\t\t{% autoescape 'html' %}
\t\t\t\t\t\t\t\t\t<label class=\"mb-0\" for=\"acs_profile_picture\">{{ app.sub.user.link.getProfilePicture(false)|raw }}</label>
\t\t\t\t\t\t\t\t{% endautoescape %}
\t\t\t\t\t\t\t\t{{ app.sub.user.unsetUser() }}
\t\t\t\t\t\t\t\t<small class=\"d-block text-muted font-italic mt-3 mb-0\">{{ app.sub.lang.parse.Parse('account.account_details.profile_picture_size', app.settings.profile_photo_max_size)|raw }}</small>
\t\t\t\t\t\t\t\t<p class=\"text-muted mt-1\">{{ app.sub.lang.string.account.account_details.profile_picture_text }}</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"profile-picture-ready d-flex align-items-lg-center justify-content-lg-center mt-4 mb-4\" data-ui=\"profile-picture-quick-preview\">
\t\t\t\t\t\t\t\t<div class=\"default d-none\" data-src=\"{{ app.public_dir }}/uploads/profile_picture/{{ app.visitor.profile_picture }}\"></div>
\t\t\t\t\t\t\t\t<div data-name=\"donatello\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ app.public_dir }}/images/avatars/donatello.svg\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div data-name=\"boy\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ app.public_dir }}/images/avatars/boy.svg\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div data-name=\"woman\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ app.public_dir }}/images/avatars/woman.svg\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div data-name=\"influencer\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ app.public_dir }}/images/avatars/influencer.svg\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div data-name=\"woman_1\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ app.public_dir }}/images/avatars/woman_1.svg\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div data-name=\"snowman\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ app.public_dir }}/images/avatars/snowman.svg\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div data-name=\"cool\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ app.public_dir }}/images/avatars/cool.svg\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div data-name=\"big_eyes\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ app.public_dir }}/images/avatars/big_eyes.svg\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">{{ app.sub.lang.string.account.account_details.username }}</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"username\" aria-describedby=\"emailHelp\" value=\"{{ app.visitor.username }}\" disabled>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">{{ app.sub.lang.string.account.account_details.usertitle }}</label>
\t\t\t\t\t\t\t\t<input name=\"acs_usertitle\" type=\"text\" class=\"form-control\" id=\"acs_usertitle\" aria-describedby=\"emailHelp\" value=\"{{ app.visitor.usertitle }}\">
\t\t\t\t\t\t\t\t{% if app.visitor.is_admin %}
\t\t\t\t\t\t\t\t\t<small id=\"emailHelp\" class=\"form-text text-muted\">{{ app.sub.lang.string.account.account_details.usertitle_text_admin }}</small>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<small id=\"emailHelp\" class=\"form-text text-muted\">{{ app.sub.lang.string.account.account_details.usertitle_text }}</small>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">{{ app.sub.lang.string.account.account_details.mail }}</label>
\t\t\t\t\t\t\t\t<input name=\"acs_mail\" type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"E-Posta\" value=\"{{ app.visitor.mail }}\" required=\"required\">
\t\t\t\t\t\t\t\t<small id=\"emailHelp\" class=\"form-text text-muted\">{{ app.sub.lang.string.account.account_details.mail_text }}</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-app-discussion icon send\">{{ app.sub.lang.string.container.buttons.update }}</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tab-content security\">
\t\t\t\t<div class=\"app-box shadow rounded animate slideIn\">
\t\t\t\t\t<div class=\"progress d-none\">
\t\t\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t\t\t<h5 class=\"mb-3\">{{ app.sub.lang.string.account.security.password.title }}</h5>
\t\t\t\t\t\t<form id=\"acs_password\" method=\"post\">
\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">{{ app.sub.lang.string.account.security.password.password }}</label>
\t\t\t\t\t\t\t\t\t<input name=\"password\" type=\"password\" class=\"form-control\" id=\"password\" aria-describedby=\"passHelp\" required=\"required\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">{{ app.sub.lang.string.account.security.password.re_password }}</label>
\t\t\t\t\t\t\t\t\t<input name=\"re-password\" type=\"password\" class=\"form-control\" id=\"re-password\" aria-describedby=\"passHelp\" required=\"required\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group mt-3\">
\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">{{ app.sub.lang.string.account.security.password.now_password }}</label>
\t\t\t\t\t\t\t\t<input name=\"acs_old_password\" type=\"password\" class=\"form-control\" placeholder=\"{{ app.sub.lang.string.account.security.password.now_password }}\" required=\"required\">
\t\t\t\t\t\t\t\t<small id=\"emailHelp\" class=\"form-text text-muted\">{{ app.sub.lang.string.account.security.password.now_password_text }}</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-app-discussion icon send\">{{ app.sub.lang.string.container.buttons.approve }}</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t<small class=\"font-weight-bold\">{{ app.sub.lang.string.account.security.password.text }}</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-error mt-2\">
\t\t\t\t\t\t\t\t<span class=\"text-danger font-weight-bold\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tab-content two-step-verification\">
\t\t\t\t<div class=\"app-box shadow rounded animate slideIn\">
\t\t\t\t\t<div class=\"progress d-none\">
\t\t\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t\t\t<h5 class=\"mb-3\">{{ app.sub.lang.string.account.tab.twofa }}</h5>
\t\t\t\t\t\t<form id=\"acs_two_step_verification\" method=\"post\">
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<small class=\"font-weight-bold\">{{ app.sub.lang.string.account.twofa.text }}</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% if not app.visitor.use_twofa %}
\t\t\t\t\t\t\t\t<div class=\"form-check mb-1\">
\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"acs_2fa\" id=\"acs_2fa_off\" value=\"0\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"acs_2fa_off\">{{ app.sub.lang.string.account.twofa.i_dont_use_twofa }}</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"acs_2fa\" id=\"acs_2fa_on\" value=\"1\">
\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"acs_2fa_on\">{{ app.sub.lang.string.account.twofa.i_use_twofa }}</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"2fa_container d-none\">
\t\t\t\t\t\t\t\t\t<div class=\"qr-code\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ string.two_fa.getQRCode() }}\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-row mt-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t\t<label>{{ app.sub.lang.string.account.twofa.secret_key }}</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" value=\"{{ string.two_fa.getSecret() }}\" disabled>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t\t<label>{{ app.sub.lang.string.account.twofa.code }}</label>
\t\t\t\t\t\t\t\t\t\t\t<input name=\"acs_twofa_code\" type=\"number\" class=\"form-control\" placeholder=\"######\" required=\"required\" max=\"999999\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t<small id=\"2faHelp\" class=\"form-text text-muted\">{{ app.sub.lang.string.account.twofa.caution }}</small>
\t\t\t\t\t\t\t\t\t\t<small id=\"2faHelp1\" class=\"form-text font-weight-bold text-danger\">{{ app.sub.lang.string.account.twofa.secret_key_text }}</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-app-discussion icon send\">{{ app.sub.lang.string.container.buttons.setup }}</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-error mt-3\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger font-weight-bold\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<div class=\"form-check mb-1\">
\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"acs_2fa\" id=\"acs_2fa_off\" value=\"0\">
\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"acs_2fa_off\">{{ app.sub.lang.string.account.twofa.i_dont_use_twofa }}</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"acs_2fa\" id=\"acs_2fa_on\" value=\"1\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"acs_2fa_on\">{{ app.sub.lang.string.account.twofa.i_use_twofa }}</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"2fa_use_container\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-success text-white rounded p-2\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-lock pr-2\"></i>
\t\t\t\t\t\t\t\t\t\t<span>{{ app.sub.lang.string.account.twofa.is_active }}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-app-discussion icon send\">{{ app.sub.lang.string.container.buttons.close }}</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tab-content privacy\">
\t\t\t\t<div class=\"app-box shadow rounded animate slideIn\">
\t\t\t\t\t<div class=\"progress d-none\">
\t\t\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t\t\t<h5 class=\"mb-3\">{{ app.sub.lang.string.account.tab.privacy }}</h5>
\t\t\t\t\t\t<form id=\"acs_privacy\" method=\"post\">
\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t<input name=\"acs_update_mails\" type=\"checkbox\" class=\"form-check-input\" id=\"acs_update_mails\" checked=\"checked\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"acs_update_mails\">{{ app.sub.lang.string.account.privacy.send_mail }}</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t<input name=\"acs_notify_as_mail\" type=\"checkbox\" class=\"form-check-input\" id=\"acs_notify_as_mail\" checked=\"checked\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"acs_notify_as_mail\">{{ app.sub.lang.string.account.privacy.send_mail_for_notifications }}</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-app-discussion icon send\">{{ app.sub.lang.string.container.buttons.update }}</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-error mt-2\">
\t\t\t\t\t\t\t\t<span class=\"text-danger font-weight-bold\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tab-content subscriptions\">
\t\t\t\t<div class=\"app-box shadow rounded animate slideIn\">
\t\t\t\t\t<div class=\"progress d-none\">
\t\t\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t\t\t<h5 class=\"mb-3\">{{ app.sub.lang.string.account.tab.subscriptions }}</h5>
\t\t\t\t\t\t<p>{{ app.sub.lang.string.account.subscriptions.discussion.title }}</p>
\t\t\t\t\t\t<div class=\"subscriptions-area\">
\t\t\t\t\t\t\t{% for item in string.discussion.getUserSubscriptions(app.visitor.user_id) %}
\t\t\t\t\t\t\t\t<div class=\"app-post mb-3\" data-discussion-id=\"{{ item.discussion_id }}\">
\t\t\t\t\t\t\t\t\t<div class=\"post-layout d-flex align-items-center border-0 p-1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"post-user\">
\t\t\t\t\t\t\t\t\t\t\t{{ app.sub.user.link.setUser(item.user_id) }}
\t\t\t\t\t\t\t\t\t\t\t{% autoescape 'html' %}
\t\t\t\t\t\t\t\t\t\t\t\t{{ app.sub.user.link.getProfilePicture(false)|raw }}
\t\t\t\t\t\t\t\t\t\t\t{% endautoescape %}
\t\t\t\t\t\t\t\t\t\t\t{{ app.sub.user.link.unsetUser() }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"title ml-lg-0 ml-2\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-dark font-weight-bold\" href=\"{{ app.phrase.buildLink('discussion', {'discussion_id': item.discussion_id, 'discussion_title': item.title}) }}\">{{ item.title }}</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div title=\"{{ app.sub.lang.string.container.buttons.subscribe_remove }}\" class=\"remove-subscribe cursor-pointer h5 mb-0 ml-auto\" data-ui=\"account-remove-subscribe\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tab-content reactions\">
\t\t\t\t<div class=\"app-box shadow rounded animate slideIn\">
\t\t\t\t\t<div class=\"progress d-none\">
\t\t\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t\t\t<h5 class=\"mb-3\">{{ app.sub.lang.string.account.tab.reactions }}</h5>
\t\t\t\t\t\t{% include 'account_likes_posts.tpl' %}
\t\t\t\t\t\t<div class=\"post-loader-spin\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tab-content bookmarks\">
\t\t\t\t<div class=\"app-box shadow rounded animate slideIn\">
\t\t\t\t\t<div class=\"progress d-none\">
\t\t\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t\t\t<h5 class=\"mb-3\">{{ app.sub.lang.string.account.tab.bookmarks }}</h5>
\t\t\t\t\t\t{% include 'account_bookmarks_posts.tpl' %}
\t\t\t\t\t\t<div class=\"post-loader-spin\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tab-content friend-list\">
\t\t\t\t<div class=\"app-box shadow rounded animate slideIn\">
\t\t\t\t\t<div class=\"progress d-none\">
\t\t\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t\t\t<h5 class=\"mb-3\">{{ app.sub.lang.string.account.tab.friendships }}</h5>
\t\t\t\t\t\t{% for item in string.profile.getUserFriendships(app.visitor.user_id) %}
\t\t\t\t\t\t\t{% if app.visitor.user_id is same as(item.user_id) %}
\t\t\t\t\t\t\t\t{{ app.sub.user.link.setUser(item.sender_id) }}
\t\t\t\t\t\t\t\t<div class=\"app-post app-friendships mb-3\" data-user-id=\"{{ item.sender_id }}\">
\t\t\t\t\t\t\t\t\t<div class=\"post-layout d-lg-flex d-flex align-items-center border-0 p-1\">
\t\t\t\t\t\t\t\t\t\t{% autoescape 'html' %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-user\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ app.sub.user.link.getProfilePicture(false)|raw }}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-dark font-weight-bold ml-lg-0 ml-2 mr-auto\" href=\"{{ app.sub.user.link.getOnlyLink()|raw }}\">{{ app.sub.user.link.getName()|raw }}</a>
\t\t\t\t\t\t\t\t\t\t{% endautoescape %}
\t\t\t\t\t\t\t\t\t\t<div title=\"{{ app.sub.lang.string.discussion.posts.quick_menu.links.remove_from_list }}\" class=\"remove-friendship cursor-pointer h5 mb-0\" data-ui=\"account-remove-friendship\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{{ app.sub.user.link.unsetUser() }}
\t\t\t\t\t\t\t{% elseif app.visitor.user_id is same as(item.sender_id) %}
\t\t\t\t\t\t\t\t{{ app.sub.user.link.setUser(item.user_id) }}
\t\t\t\t\t\t\t\t<div class=\"app-post app-friendships mb-3\" data-user-id=\"{{ item.user_id }}\">
\t\t\t\t\t\t\t\t\t<div class=\"post-layout align-items-center border-0 p-1\">
\t\t\t\t\t\t\t\t\t\t{% autoescape 'html' %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-user\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ app.sub.user.link.getProfilePicture(false)|raw }}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-dark font-weight-bold mr-auto\" href=\"{{ app.sub.user.link.getOnlyLink()|raw }}\">{{ app.sub.user.link.getName()|raw }}</a>
\t\t\t\t\t\t\t\t\t\t{% endautoescape %}
\t\t\t\t\t\t\t\t\t\t<div title=\"{{ app.sub.lang.string.discussion.posts.quick_menu.links.remove_from_list }}\" class=\"remove-friendship cursor-pointer h5 mb-0\" data-ui=\"account-remove-friendship\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{{ app.sub.user.link.unsetUser() }}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tab-content about\">
\t\t\t\t<div class=\"app-box shadow rounded animate slideIn\">
\t\t\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t\t\t<h5 class=\"mb-3\">{{ app.sub.lang.string.account.tab.about }}</h5>
\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-center align-items-center copyright\">
\t\t\t\t\t\t\t<div class=\"logo text-center mb-3\">
\t\t\t\t\t\t\t\t{% include 'logo.tpl' %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"mb-0\">Software by Mention </p>
\t\t\t\t\t\t\t<span>© {{ app.timer.date.getYear }} ParantezTech.</span>
\t\t\t\t\t\t\t<div class=\"version mt-4\">{{ app.build.code }}</div>
\t\t\t\t\t\t\t<div class=\"version\">Build {{ app.build.id }}</div>
\t\t\t\t\t\t\t<div class=\"text-center mt-4\">
\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.r10.net/members/90047-scarecrow.html\">https://www.r10.net/members/90047-scarecrow.html</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</aside>
\t{# This is includes meta definitions. #}
\t<div hook-action=\"{Mention:App-domEvent-metacontents}\" data-title=\"{{ app.sub.lang.string.account.title }}\"
\t\tdata-meta-description=\"{{ app.settings.meta_description }}\"
\t\tdata-og-description=\"{{ app.settings.meta_description }}\"
\t\tdata-twitter-description=\"{{ app.settings.meta_description }}\" data-og-title=\"{{ app.settings.site_title }}\"
\t\tdata-twitter-title=\"{{ app.settings.site_title }}\" class=\"d-none\">
\t</div>
{% endblock %}", "account.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\User\\account.tpl");
    }
}
