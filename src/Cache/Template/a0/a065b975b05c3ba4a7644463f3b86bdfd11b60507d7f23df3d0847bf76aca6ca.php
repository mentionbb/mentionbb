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

/* @ComponentBundle_Admin/Users/edit_user.tpl */
class __TwigTemplate_ee295da1c979fcedeb7b698eb7c884f943e8357cce24f22e8ab313afcab62402 extends Template
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
        $this->parent = $this->loadTemplate("@ComponentBundle_Admin/container.tpl", "@ComponentBundle_Admin/Users/edit_user.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "@ComponentBundle/admin/edit_user";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 5), "lang", [], "any", false, false, false, 5), "string", [], "any", false, false, false, 5), "admin", [], "any", false, false, false, 5), "users", [], "any", false, false, false, 5), "edit", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
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
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t";
        // line 20
        $this->loadTemplate("usermenu_member.tpl", "@ComponentBundle_Admin/Users/edit_user.tpl", 20)->display($context);
        // line 21
        echo "\t\t</div>
\t</div>
\t";
        // line 23
        $this->loadTemplate("@ComponentBundle_Admin/Layout/sidebar.tpl", "@ComponentBundle_Admin/Users/edit_user.tpl", 23)->display($context);
        // line 24
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
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 33), "username", [], "any", false, false, false, 33), "html", null, true);
        echo "</h5>
                        <small class=\"text-muted\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 34), "lang", [], "any", false, false, false, 34), "parse", [], "any", false, false, false, 34), "Parse", [0 => "admin.users.edit.desc", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 34), "username", [], "any", false, false, false, 34)], "method", false, false, false, 34), "html", null, true);
        echo "</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 37), "buildLink", [0 => "adminUsers", 1 => []], "method", false, false, false, 37), "html", null, true);
        echo "\" class=\"btn btn-app-discussion icon back\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 37), "lang", [], "any", false, false, false, 37), "string", [], "any", false, false, false, 37), "container", [], "any", false, false, false, 37), "buttons", [], "any", false, false, false, 37), "back", [], "any", false, false, false, 37), "html", null, true);
        echo "</a>
                    </div>
                </div> 
                <div class=\"d-flex flex-column justify-content-center align-items-center\">
                    <div id=\"userAccordion\" class=\"w-100 rounded\">
                        <form id=\"admin_users_edit\" method=\"post\">
                            <input name=\"user_id\" type=\"hidden\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 43), "user_id", [], "any", false, false, false, 43), "html", null, true);
        echo "\" />
                            <div class=\"profile-picture text-center mb-3 mt-2\"
                                data-default=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 45), "html", null, true);
        echo "/uploads/profile_picture/default.svg\">
                                <input type=\"file\" name=\"profile_picture\" id=\"profile_picture\" class=\"d-none\"
                                    accept=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 47), "getPPImageTypes", [], "method", false, false, false, 47), "html", null, true);
        echo "\" />
                                ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 48), "user", [], "any", false, false, false, 48), "link", [], "any", false, false, false, 48), "setUser", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 48), "user_id", [], "any", false, false, false, 48)], "method", false, false, false, 48), "html", null, true);
        echo "
                                ";
        // line 50
        echo "                                <label class=\"mb-0\" for=\"profile_picture\">";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 50), "user", [], "any", false, false, false, 50), "link", [], "any", false, false, false, 50), "getProfilePicture", [0 => false], "method", false, false, false, 50);
        echo "</label>
                                ";
        // line 52
        echo "                                ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 52), "user", [], "any", false, false, false, 52), "unsetUser", [], "method", false, false, false, 52), "html", null, true);
        echo "
                                <small class=\"d-block text-muted font-italic mt-3 mb-0\">";
        // line 53
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 54
($context["app"] ?? null), "sub", [], "any", false, false, false, 54), "lang", [], "any", false, false, false, 54), "parse", [], "any", false, false, false, 54), "Parse", [0 => "account.account_details.profile_picture_size", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 55
($context["app"] ?? null), "settings", [], "any", false, false, false, 55), "profile_photo_max_size", [], "any", false, false, false, 55)], "method", false, false, false, 54);
        echo "</small>
                                <a href=\"#\" class=\"mt-1\" data-ui=\"remove-pp\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 57
($context["app"] ?? null), "sub", [], "any", false, false, false, 57), "lang", [], "any", false, false, false, 57), "string", [], "any", false, false, false, 57), "admin", [], "any", false, false, false, 57), "users", [], "any", false, false, false, 57), "edit", [], "any", false, false, false, 57), "profile_picture", [], "any", false, false, false, 57), "remove", [], "any", false, false, false, 57), "html", null, true);
        echo "</a>
                            </div>
                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                    <label for=\"static_name\" class=\"col-form-label\">";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 61), "lang", [], "any", false, false, false, 61), "string", [], "any", false, false, false, 61), "admin", [], "any", false, false, false, 61), "users", [], "any", false, false, false, 61), "forms", [], "any", false, false, false, 61), "name", [], "any", false, false, false, 61), "title", [], "any", false, false, false, 61), "html", null, true);
        // line 62
        echo "</label>
                                    <div>
                                        <input class=\"form-control\" name=\"username\" id=\"static_name\" type=\"text\"
                                            value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 65), "username", [], "any", false, false, false, 65), "html", null, true);
        echo "\"
                                            placeholder=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 66), "lang", [], "any", false, false, false, 66), "string", [], "any", false, false, false, 66), "admin", [], "any", false, false, false, 66), "users", [], "any", false, false, false, 66), "forms", [], "any", false, false, false, 66), "name", [], "any", false, false, false, 66), "desc", [], "any", false, false, false, 66), "html", null, true);
        echo "\"
                                            aria-label=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 67), "lang", [], "any", false, false, false, 67), "string", [], "any", false, false, false, 67), "admin", [], "any", false, false, false, 67), "users", [], "any", false, false, false, 67), "forms", [], "any", false, false, false, 67), "password", [], "any", false, false, false, 67), "desc", [], "any", false, false, false, 67), "html", null, true);
        echo "\"
                                            aria-describedby=\"help_name\" spellcheck=\"false\" required=\"required\">
                                        <small id=\"help_name\" class=\"form-text text-muted\">";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 70
($context["app"] ?? null), "sub", [], "any", false, false, false, 70), "lang", [], "any", false, false, false, 70), "string", [], "any", false, false, false, 70), "admin", [], "any", false, false, false, 70), "users", [], "any", false, false, false, 70), "forms", [], "any", false, false, false, 70), "name", [], "any", false, false, false, 70), "desc", [], "any", false, false, false, 70), "html", null, true);
        echo "</small>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                    <label for=\"static_password\" class=\"col-form-label\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 75
($context["app"] ?? null), "sub", [], "any", false, false, false, 75), "lang", [], "any", false, false, false, 75), "string", [], "any", false, false, false, 75), "admin", [], "any", false, false, false, 75), "users", [], "any", false, false, false, 75), "forms", [], "any", false, false, false, 75), "password", [], "any", false, false, false, 75), "title", [], "any", false, false, false, 75), "html", null, true);
        echo "</label>
                                    <div>
                                        <input class=\"form-control\" name=\"password\" id=\"static_password\" type=\"password\"
                                            placeholder=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 78), "lang", [], "any", false, false, false, 78), "string", [], "any", false, false, false, 78), "admin", [], "any", false, false, false, 78), "users", [], "any", false, false, false, 78), "forms", [], "any", false, false, false, 78), "password", [], "any", false, false, false, 78), "desc", [], "any", false, false, false, 78), "html", null, true);
        echo "\"
                                            aria-label=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 79), "lang", [], "any", false, false, false, 79), "string", [], "any", false, false, false, 79), "admin", [], "any", false, false, false, 79), "users", [], "any", false, false, false, 79), "forms", [], "any", false, false, false, 79), "password", [], "any", false, false, false, 79), "desc", [], "any", false, false, false, 79), "html", null, true);
        echo "\"
                                            aria-describedby=\"help_password\" spellcheck=\"false\">
                                        <small id=\"help_password\" class=\"form-text text-muted\">";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 82
($context["app"] ?? null), "sub", [], "any", false, false, false, 82), "lang", [], "any", false, false, false, 82), "string", [], "any", false, false, false, 82), "admin", [], "any", false, false, false, 82), "users", [], "any", false, false, false, 82), "forms", [], "any", false, false, false, 82), "password", [], "any", false, false, false, 82), "text", [], "any", false, false, false, 82), "html", null, true);
        echo "</small>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                    <label for=\"static_mail\" class=\"col-form-label\">";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 86), "lang", [], "any", false, false, false, 86), "string", [], "any", false, false, false, 86), "admin", [], "any", false, false, false, 86), "users", [], "any", false, false, false, 86), "forms", [], "any", false, false, false, 86), "mail", [], "any", false, false, false, 86), "title", [], "any", false, false, false, 86), "html", null, true);
        // line 87
        echo "</label>
                                    <div>
                                        <input class=\"form-control\" name=\"mail\" id=\"static_mail\" type=\"mail\"
                                            value=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 90), "mail", [], "any", false, false, false, 90), "html", null, true);
        echo "\"
                                            placeholder=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 91), "lang", [], "any", false, false, false, 91), "string", [], "any", false, false, false, 91), "admin", [], "any", false, false, false, 91), "users", [], "any", false, false, false, 91), "forms", [], "any", false, false, false, 91), "mail", [], "any", false, false, false, 91), "desc", [], "any", false, false, false, 91), "html", null, true);
        echo "\"
                                            aria-label=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 92), "lang", [], "any", false, false, false, 92), "string", [], "any", false, false, false, 92), "admin", [], "any", false, false, false, 92), "users", [], "any", false, false, false, 92), "forms", [], "any", false, false, false, 92), "mail", [], "any", false, false, false, 92), "desc", [], "any", false, false, false, 92), "html", null, true);
        echo "\"
                                            aria-describedby=\"help_mail\" spellcheck=\"false\" required=\"required\">
                                        <small id=\"help_mail\" class=\"form-text text-muted\">";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 95
($context["app"] ?? null), "sub", [], "any", false, false, false, 95), "lang", [], "any", false, false, false, 95), "string", [], "any", false, false, false, 95), "admin", [], "any", false, false, false, 95), "users", [], "any", false, false, false, 95), "forms", [], "any", false, false, false, 95), "mail", [], "any", false, false, false, 95), "text", [], "any", false, false, false, 95), "html", null, true);
        echo "</small>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\"></div>
                                <div class=\"col-lg-6 col-sm-12 pr-lg-5 mt-4\">
                                    <label for=\"static_title\" class=\"col-form-label\">";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 101
($context["app"] ?? null), "sub", [], "any", false, false, false, 101), "lang", [], "any", false, false, false, 101), "string", [], "any", false, false, false, 101), "admin", [], "any", false, false, false, 101), "users", [], "any", false, false, false, 101), "forms", [], "any", false, false, false, 101), "title", [], "any", false, false, false, 101), "title", [], "any", false, false, false, 101), "html", null, true);
        echo "</label>
                                    <div>
                                        <input class=\"form-control\" name=\"title\" id=\"static_title\" type=\"text\"
                                            value=\"";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 104), "usertitle", [], "any", false, false, false, 104), "html", null, true);
        echo "\"
                                            placeholder=\"";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 105), "lang", [], "any", false, false, false, 105), "string", [], "any", false, false, false, 105), "admin", [], "any", false, false, false, 105), "users", [], "any", false, false, false, 105), "forms", [], "any", false, false, false, 105), "title", [], "any", false, false, false, 105), "desc", [], "any", false, false, false, 105), "html", null, true);
        echo "\"
                                            aria-label=\"";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 106), "lang", [], "any", false, false, false, 106), "string", [], "any", false, false, false, 106), "admin", [], "any", false, false, false, 106), "users", [], "any", false, false, false, 106), "forms", [], "any", false, false, false, 106), "title", [], "any", false, false, false, 106), "desc", [], "any", false, false, false, 106), "html", null, true);
        echo "\"
                                            aria-describedby=\"help_title\" spellcheck=\"false\">
                                        <small id=\"help_title\" class=\"form-text text-muted\">";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 109
($context["app"] ?? null), "sub", [], "any", false, false, false, 109), "lang", [], "any", false, false, false, 109), "string", [], "any", false, false, false, 109), "admin", [], "any", false, false, false, 109), "users", [], "any", false, false, false, 109), "forms", [], "any", false, false, false, 109), "title", [], "any", false, false, false, 109), "text", [], "any", false, false, false, 109), "html", null, true);
        echo "</small>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-sm-12 mt-4\">
                                    <label for=\"static_role\" class=\"col-form-label\">";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 113), "lang", [], "any", false, false, false, 113), "string", [], "any", false, false, false, 113), "admin", [], "any", false, false, false, 113), "users", [], "any", false, false, false, 113), "forms", [], "any", false, false, false, 113), "role", [], "any", false, false, false, 113), "title", [], "any", false, false, false, 113), "html", null, true);
        // line 114
        echo "</label>
                                    <div>
                                        <select class=\"selectpicker ml-lg-auto pt-2 pt-lg-0\" data-live-search=\"true\"
                                            title=\"";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 117), "lang", [], "any", false, false, false, 117), "string", [], "any", false, false, false, 117), "container", [], "any", false, false, false, 117), "buttons", [], "any", false, false, false, 117), "select", [], "any", false, false, false, 117), "html", null, true);
        echo "\" name=\"role\" required=\"required\">
                                            <option value=\"0\" ";
        // line 118
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 118), "is_admin", [], "any", false, false, false, 118) === "0")) ? ("selected") : (""));
        echo ">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 119
($context["app"] ?? null), "sub", [], "any", false, false, false, 119), "lang", [], "any", false, false, false, 119), "string", [], "any", false, false, false, 119), "admin", [], "any", false, false, false, 119), "users", [], "any", false, false, false, 119), "forms", [], "any", false, false, false, 119), "role", [], "any", false, false, false, 119), "select", [], "any", false, false, false, 119), "registered", [], "any", false, false, false, 119), "html", null, true);
        echo "</option>
                                            <option value=\"1\" ";
        // line 120
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "user", [], "any", false, false, false, 120), "is_admin", [], "any", false, false, false, 120) === "1")) ? ("selected") : (""));
        echo ">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 121
($context["app"] ?? null), "sub", [], "any", false, false, false, 121), "lang", [], "any", false, false, false, 121), "string", [], "any", false, false, false, 121), "admin", [], "any", false, false, false, 121), "users", [], "any", false, false, false, 121), "forms", [], "any", false, false, false, 121), "role", [], "any", false, false, false, 121), "select", [], "any", false, false, false, 121), "admin", [], "any", false, false, false, 121), "html", null, true);
        echo "</option>
                                        </select>
                                        <small id=\"help_role\" class=\"form-text text-muted\">";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 124
($context["app"] ?? null), "sub", [], "any", false, false, false, 124), "lang", [], "any", false, false, false, 124), "string", [], "any", false, false, false, 124), "admin", [], "any", false, false, false, 124), "users", [], "any", false, false, false, 124), "forms", [], "any", false, false, false, 124), "role", [], "any", false, false, false, 124), "text", [], "any", false, false, false, 124), "html", null, true);
        echo "</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"w-100 d-inline-block\">
                                <div class=\"sticky-button shadow\">
                                    <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon send\">";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 131
($context["app"] ?? null), "sub", [], "any", false, false, false, 131), "lang", [], "any", false, false, false, 131), "string", [], "any", false, false, false, 131), "container", [], "any", false, false, false, 131), "buttons", [], "any", false, false, false, 131), "update", [], "any", false, false, false, 131), "html", null, true);
        echo "</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </aside>
";
    }

    public function getTemplateName()
    {
        return "@ComponentBundle_Admin/Users/edit_user.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 131,  331 => 130,  322 => 124,  321 => 123,  316 => 121,  313 => 120,  309 => 119,  306 => 118,  302 => 117,  297 => 114,  295 => 113,  288 => 109,  287 => 108,  282 => 106,  278 => 105,  274 => 104,  268 => 101,  267 => 100,  259 => 95,  258 => 94,  253 => 92,  249 => 91,  245 => 90,  240 => 87,  238 => 86,  231 => 82,  230 => 81,  225 => 79,  221 => 78,  215 => 75,  214 => 74,  207 => 70,  206 => 69,  201 => 67,  197 => 66,  193 => 65,  188 => 62,  186 => 61,  179 => 57,  178 => 56,  174 => 55,  173 => 54,  172 => 53,  167 => 52,  162 => 50,  158 => 48,  154 => 47,  149 => 45,  144 => 43,  133 => 37,  127 => 34,  123 => 33,  112 => 24,  110 => 23,  106 => 21,  104 => 20,  92 => 15,  86 => 14,  80 => 13,  74 => 12,  68 => 8,  64 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/edit_user' %}

{% block title %}{{ app.sub.lang.string.admin.users.edit.title }}{{ \" - \" }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminIndex', {}) }}\">{{ app.sub.lang.string.admin.container.title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminUsers', {}) }}\">{{ app.sub.lang.string.admin.users.title }}</a></div>
                    <div><a href=\"{{ app.phrase.buildLink('adminUsers', {}) }}?editUser={{ string.user.user_id }}\">{{ string.user.username }}</a></div>
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
                        <small class=\"text-muted\">{{ app.sub.lang.parse.Parse('admin.users.edit.desc', string.user.username) }}</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"{{ app.phrase.buildLink('adminUsers', {}) }}\" class=\"btn btn-app-discussion icon back\">{{ app.sub.lang.string.container.buttons.back }}</a>
                    </div>
                </div> 
                <div class=\"d-flex flex-column justify-content-center align-items-center\">
                    <div id=\"userAccordion\" class=\"w-100 rounded\">
                        <form id=\"admin_users_edit\" method=\"post\">
                            <input name=\"user_id\" type=\"hidden\" value=\"{{ string.user.user_id }}\" />
                            <div class=\"profile-picture text-center mb-3 mt-2\"
                                data-default=\"{{ app.public_dir }}/uploads/profile_picture/default.svg\">
                                <input type=\"file\" name=\"profile_picture\" id=\"profile_picture\" class=\"d-none\"
                                    accept=\"{{ app.phrase.getPPImageTypes() }}\" />
                                {{ app.sub.user.link.setUser(string.user.user_id) }}
                                {% autoescape 'html' %}
                                <label class=\"mb-0\" for=\"profile_picture\">{{ app.sub.user.link.getProfilePicture(false)|raw }}</label>
                                {% endautoescape %}
                                {{ app.sub.user.unsetUser() }}
                                <small class=\"d-block text-muted font-italic mt-3 mb-0\">{{
                                    app.sub.lang.parse.Parse('account.account_details.profile_picture_size',
                                    app.settings.profile_photo_max_size)|raw }}</small>
                                <a href=\"#\" class=\"mt-1\" data-ui=\"remove-pp\">{{
                                    app.sub.lang.string.admin.users.edit.profile_picture.remove }}</a>
                            </div>
                            <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                    <label for=\"static_name\" class=\"col-form-label\">{{ app.sub.lang.string.admin.users.forms.name.title
                                        }}</label>
                                    <div>
                                        <input class=\"form-control\" name=\"username\" id=\"static_name\" type=\"text\"
                                            value=\"{{ string.user.username }}\"
                                            placeholder=\"{{ app.sub.lang.string.admin.users.forms.name.desc }}\"
                                            aria-label=\"{{ app.sub.lang.string.admin.users.forms.password.desc }}\"
                                            aria-describedby=\"help_name\" spellcheck=\"false\" required=\"required\">
                                        <small id=\"help_name\" class=\"form-text text-muted\">{{
                                            app.sub.lang.string.admin.users.forms.name.desc }}</small>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                    <label for=\"static_password\" class=\"col-form-label\">{{
                                        app.sub.lang.string.admin.users.forms.password.title }}</label>
                                    <div>
                                        <input class=\"form-control\" name=\"password\" id=\"static_password\" type=\"password\"
                                            placeholder=\"{{ app.sub.lang.string.admin.users.forms.password.desc }}\"
                                            aria-label=\"{{ app.sub.lang.string.admin.users.forms.password.desc }}\"
                                            aria-describedby=\"help_password\" spellcheck=\"false\">
                                        <small id=\"help_password\" class=\"form-text text-muted\">{{
                                            app.sub.lang.string.admin.users.forms.password.text }}</small>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                    <label for=\"static_mail\" class=\"col-form-label\">{{ app.sub.lang.string.admin.users.forms.mail.title
                                        }}</label>
                                    <div>
                                        <input class=\"form-control\" name=\"mail\" id=\"static_mail\" type=\"mail\"
                                            value=\"{{ string.user.mail }}\"
                                            placeholder=\"{{ app.sub.lang.string.admin.users.forms.mail.desc }}\"
                                            aria-label=\"{{ app.sub.lang.string.admin.users.forms.mail.desc }}\"
                                            aria-describedby=\"help_mail\" spellcheck=\"false\" required=\"required\">
                                        <small id=\"help_mail\" class=\"form-text text-muted\">{{
                                            app.sub.lang.string.admin.users.forms.mail.text }}</small>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-sm-12 pr-lg-5\"></div>
                                <div class=\"col-lg-6 col-sm-12 pr-lg-5 mt-4\">
                                    <label for=\"static_title\" class=\"col-form-label\">{{
                                        app.sub.lang.string.admin.users.forms.title.title }}</label>
                                    <div>
                                        <input class=\"form-control\" name=\"title\" id=\"static_title\" type=\"text\"
                                            value=\"{{ string.user.usertitle }}\"
                                            placeholder=\"{{ app.sub.lang.string.admin.users.forms.title.desc }}\"
                                            aria-label=\"{{ app.sub.lang.string.admin.users.forms.title.desc }}\"
                                            aria-describedby=\"help_title\" spellcheck=\"false\">
                                        <small id=\"help_title\" class=\"form-text text-muted\">{{
                                            app.sub.lang.string.admin.users.forms.title.text }}</small>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-sm-12 mt-4\">
                                    <label for=\"static_role\" class=\"col-form-label\">{{ app.sub.lang.string.admin.users.forms.role.title
                                        }}</label>
                                    <div>
                                        <select class=\"selectpicker ml-lg-auto pt-2 pt-lg-0\" data-live-search=\"true\"
                                            title=\"{{ app.sub.lang.string.container.buttons.select }}\" name=\"role\" required=\"required\">
                                            <option value=\"0\" {{ string.user.is_admin is same as(\"0\") ? 'selected' : '' }}>{{
                                                app.sub.lang.string.admin.users.forms.role.select.registered }}</option>
                                            <option value=\"1\" {{ string.user.is_admin is same as(\"1\") ? 'selected' : '' }}>{{
                                                app.sub.lang.string.admin.users.forms.role.select.admin }}</option>
                                        </select>
                                        <small id=\"help_role\" class=\"form-text text-muted\">{{
                                            app.sub.lang.string.admin.users.forms.role.text }}</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"w-100 d-inline-block\">
                                <div class=\"sticky-button shadow\">
                                    <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon send\">{{
                                        app.sub.lang.string.container.buttons.update }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </aside>
{% endblock %}", "@ComponentBundle_Admin/Users/edit_user.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Mention\\Templates\\Admin\\Users\\edit_user.tpl");
    }
}
