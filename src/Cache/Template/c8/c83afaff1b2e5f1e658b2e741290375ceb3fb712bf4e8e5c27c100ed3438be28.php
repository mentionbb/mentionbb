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

/* @ComponentBundle_Admin/OAuth/oauth_services.tpl */
class __TwigTemplate_8a20025c7a7585b0a8b68630baa961ff09f535acd2785a698a62f118754ec8a4 extends Template
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
        $this->parent = $this->loadTemplate("@ComponentBundle_Admin/container.tpl", "@ComponentBundle_Admin/OAuth/oauth_services.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "@ComponentBundle/admin/oauth_services";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 5), "lang", [], "any", false, false, false, 5), "string", [], "any", false, false, false, 5), "admin", [], "any", false, false, false, 5), "oauth", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 14), "buildLink", [0 => "adminOAuthServices", 1 => []], "method", false, false, false, 14), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 14), "lang", [], "any", false, false, false, 14), "string", [], "any", false, false, false, 14), "admin", [], "any", false, false, false, 14), "oauth", [], "any", false, false, false, 14), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t";
        // line 19
        $this->loadTemplate("usermenu_member.tpl", "@ComponentBundle_Admin/OAuth/oauth_services.tpl", 19)->display($context);
        // line 20
        echo "\t\t</div>
\t</div>
\t";
        // line 22
        $this->loadTemplate("@ComponentBundle_Admin/Layout/sidebar.tpl", "@ComponentBundle_Admin/OAuth/oauth_services.tpl", 22)->display($context);
        // line 23
        echo "\t
\t<aside class=\"col-sm-9\">
\t\t<div class=\"app-box shadow rounded\" data-tab=\"oauth\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center\">
                    <div>
                        <h5 class=\"mb-0\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 32), "lang", [], "any", false, false, false, 32), "string", [], "any", false, false, false, 32), "admin", [], "any", false, false, false, 32), "oauth", [], "any", false, false, false, 32), "title", [], "any", false, false, false, 32), "html", null, true);
        echo "</h5>
                        <small class=\"text-muted\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 33), "lang", [], "any", false, false, false, 33), "string", [], "any", false, false, false, 33), "admin", [], "any", false, false, false, 33), "oauth", [], "any", false, false, false, 33), "desc", [], "any", false, false, false, 33), "html", null, true);
        echo "</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 36), "buildLink", [0 => "adminOAuthServices", 1 => []], "method", false, false, false, 36), "html", null, true);
        echo "?addService\" class=\"btn btn-app-discussion icon plus\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 36), "lang", [], "any", false, false, false, 36), "string", [], "any", false, false, false, 36), "admin", [], "any", false, false, false, 36), "oauth", [], "any", false, false, false, 36), "buttons", [], "any", false, false, false, 36), "add_service", [], "any", false, false, false, 36), "html", null, true);
        echo "</a>
                    </div>
                </div>  
                <div class=\"d-flex flex-column align-items-center justify-content-center mt-3\">
                    <div class=\"service-list-area w-100\">
                        <form id=\"admin_services_edit\" method=\"post\">
                            <div id=\"servicesAccordion\">
                                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "social", [], "any", false, false, false, 43), "getSites", [0 => false], "method", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "                                   ";
            $context["apiKeys"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "social", [], "any", false, false, false, 44), "getKeys", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "api_keys", [], "any", false, false, false, 44)], "method", false, false, false, 44);
            // line 45
            echo "                                   <div class=\"app-service bg-white shadow-sm position-relative mb-3 rounded\" data-service-name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 45), "html", null, true);
            echo "\" data-service-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "site_id", [], "any", false, false, false, 45), "html", null, true);
            echo "\">
                                        <div class=\"app-post\">
                                            <a href=\"#\" class=\"post-layout d-flex align-items-center border-top-0 px-2 p-1 collapsed\" data-toggle=\"collapse\" data-target=\"#adminOAuthService_";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 47), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "site_id", [], "any", false, false, false, 47), "html", null, true);
            echo "\"
                                                aria-expanded=\"false\" aria-controls=\"adminOAuthService_";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 48), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "site_id", [], "any", false, false, false, 48), "html", null, true);
            echo "\">
                                                <div class=\"post-icon ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 49), "html", null, true);
            echo "\">
                                                    <i class=\"fab fa-";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 50), "html", null, true);
            echo "\"></i>
                                                </div>
                                                <div class=\"title ml-lg-0 ml-2 mr-auto\">
                                                    <span class=\"font-weight-bold\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 53), "html", null, true);
            echo "</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div id=\"adminOAuthService_";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 57), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "site_id", [], "any", false, false, false, 57), "html", null, true);
            echo "\" class=\"collapse\" aria-labelledby=\"adminOAuthService_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 57), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "site_id", [], "any", false, false, false, 57), "html", null, true);
            echo "\" data-parent=\"#servicesAccordion\">
                                            <div class=\"p-2\">
                                                <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                    <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                        <label for=\"static_name_";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 61), "html", null, true);
            echo "\" class=\"col-form-label\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 61), "lang", [], "any", false, false, false, 61), "string", [], "any", false, false, false, 61), "admin", [], "any", false, false, false, 61), "oauth", [], "any", false, false, false, 61), "forms", [], "any", false, false, false, 61), "name", [], "any", false, false, false, 61), "title", [], "any", false, false, false, 61), "html", null, true);
            echo "</label>
                                                        <div>
                                                            <input class=\"form-control\" name=\"options[name]\" id=\"static_name_";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 63), "html", null, true);
            echo "\" type=\"text\" aria-label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 63), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 63), "html", null, true);
            echo "\" aria-describedby=\"help_name_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 63), "html", null, true);
            echo "\" spellcheck=\"false\" required=\"required\">
                                                            <small id=\"help_name_";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 64), "html", null, true);
            echo "\" class=\"form-text text-muted\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 64), "lang", [], "any", false, false, false, 64), "string", [], "any", false, false, false, 64), "admin", [], "any", false, false, false, 64), "oauth", [], "any", false, false, false, 64), "forms", [], "any", false, false, false, 64), "name", [], "any", false, false, false, 64), "desc", [], "any", false, false, false, 64);
            echo "</small>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-lg-6 col-sm-12\">
                                                        <label for=\"static_title_";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 68), "html", null, true);
            echo "\" class=\"col-form-label\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 68), "lang", [], "any", false, false, false, 68), "string", [], "any", false, false, false, 68), "admin", [], "any", false, false, false, 68), "oauth", [], "any", false, false, false, 68), "forms", [], "any", false, false, false, 68), "title", [], "any", false, false, false, 68), "title", [], "any", false, false, false, 68), "html", null, true);
            echo "</label>
                                                        <div>
                                                            <input class=\"form-control\" name=\"options[title]\" id=\"static_title_";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 70), "html", null, true);
            echo "\" type=\"text\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 70), "lang", [], "any", false, false, false, 70), "string", [], "any", false, false, false, 70), "admin", [], "any", false, false, false, 70), "oauth", [], "any", false, false, false, 70), "forms", [], "any", false, false, false, 70), "title", [], "any", false, false, false, 70), "desc", [], "any", false, false, false, 70), "html", null, true);
            echo "\" aria-label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 70), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 70), "html", null, true);
            echo "\" aria-describedby=\"help_title_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 70), "html", null, true);
            echo "\" spellcheck=\"false\" required=\"required\">
                                                            <small id=\"help_title_";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 71), "html", null, true);
            echo "\" class=\"form-text text-muted\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 71), "lang", [], "any", false, false, false, 71), "string", [], "any", false, false, false, 71), "admin", [], "any", false, false, false, 71), "oauth", [], "any", false, false, false, 71), "forms", [], "any", false, false, false, 71), "title", [], "any", false, false, false, 71), "desc", [], "any", false, false, false, 71), "html", null, true);
            echo "</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                    <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                        <label for=\"static_sitekey_";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 77), "html", null, true);
            echo "\" class=\"col-form-label\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 77), "lang", [], "any", false, false, false, 77), "string", [], "any", false, false, false, 77), "admin", [], "any", false, false, false, 77), "oauth", [], "any", false, false, false, 77), "forms", [], "any", false, false, false, 77), "site_key", [], "any", false, false, false, 77), "title", [], "any", false, false, false, 77), "html", null, true);
            echo "</label>
                                                        <div>
                                                            <input class=\"form-control\" name=\"options[site_key]\" id=\"static_sitekey_";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 79), "html", null, true);
            echo "\" type=\"text\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 79), "lang", [], "any", false, false, false, 79), "string", [], "any", false, false, false, 79), "admin", [], "any", false, false, false, 79), "oauth", [], "any", false, false, false, 79), "forms", [], "any", false, false, false, 79), "site_key", [], "any", false, false, false, 79), "desc", [], "any", false, false, false, 79), "html", null, true);
            echo "\" aria-label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["apiKeys"] ?? null), "site_key", [], "any", false, false, false, 79), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["apiKeys"] ?? null), "site_key", [], "any", false, false, false, 79), "html", null, true);
            echo "\" aria-describedby=\"help_sitekey_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 79), "html", null, true);
            echo "\" spellcheck=\"false\">
                                                            <small id=\"help_sitekey_";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 80), "html", null, true);
            echo "\" class=\"form-text text-muted\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 80), "lang", [], "any", false, false, false, 80), "string", [], "any", false, false, false, 80), "admin", [], "any", false, false, false, 80), "oauth", [], "any", false, false, false, 80), "forms", [], "any", false, false, false, 80), "site_key", [], "any", false, false, false, 80), "desc", [], "any", false, false, false, 80), "html", null, true);
            echo "</small>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-lg-6 col-sm-12\">
                                                        <label for=\"static_secretkey_";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 84), "html", null, true);
            echo "\" class=\"col-form-label\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 84), "lang", [], "any", false, false, false, 84), "string", [], "any", false, false, false, 84), "admin", [], "any", false, false, false, 84), "oauth", [], "any", false, false, false, 84), "forms", [], "any", false, false, false, 84), "secret_key", [], "any", false, false, false, 84), "title", [], "any", false, false, false, 84), "html", null, true);
            echo "</label>
                                                        <div>
                                                            <input class=\"form-control\" name=\"options[secret_key]\" id=\"static_secretkey_";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 86), "html", null, true);
            echo "\" type=\"text\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 86), "lang", [], "any", false, false, false, 86), "string", [], "any", false, false, false, 86), "admin", [], "any", false, false, false, 86), "oauth", [], "any", false, false, false, 86), "forms", [], "any", false, false, false, 86), "secret_key", [], "any", false, false, false, 86), "desc", [], "any", false, false, false, 86), "html", null, true);
            echo "\" aria-label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["apiKeys"] ?? null), "secret_key", [], "any", false, false, false, 86), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["apiKeys"] ?? null), "secret_key", [], "any", false, false, false, 86), "html", null, true);
            echo "\" aria-describedby=\"help_secretkey_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 86), "html", null, true);
            echo "\" spellcheck=\"false\">
                                                            <small id=\"help_secretkey_";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 87), "html", null, true);
            echo "\" class=\"form-text text-muted\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 87), "lang", [], "any", false, false, false, 87), "string", [], "any", false, false, false, 87), "admin", [], "any", false, false, false, 87), "oauth", [], "any", false, false, false, 87), "forms", [], "any", false, false, false, 87), "secret_key", [], "any", false, false, false, 87), "desc", [], "any", false, false, false, 87), "html", null, true);
            echo "</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                    <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                        <label for=\"static_callback_";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 93), "html", null, true);
            echo "\" class=\"col-form-label\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 93), "lang", [], "any", false, false, false, 93), "string", [], "any", false, false, false, 93), "admin", [], "any", false, false, false, 93), "oauth", [], "any", false, false, false, 93), "forms", [], "any", false, false, false, 93), "callback", [], "any", false, false, false, 93), "title", [], "any", false, false, false, 93), "html", null, true);
            echo "</label>
                                                        <div>
                                                            ";
            // line 95
            if ( !(twig_get_attribute($this->env, $this->source, $context["item"], "callback", [], "any", false, false, false, 95) === "")) {
                // line 96
                echo "                                                                <div class=\"input-callback\">
                                                                    <input class=\"form-control text-transparent\" name=\"options[callback]\" id=\"static_callback_";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 97), "html", null, true);
                echo "\" type=\"text\" placeholder=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 97), "lang", [], "any", false, false, false, 97), "string", [], "any", false, false, false, 97), "admin", [], "any", false, false, false, 97), "oauth", [], "any", false, false, false, 97), "forms", [], "any", false, false, false, 97), "callback", [], "any", false, false, false, 97), "placeholder", [], "any", false, false, false, 97), "html", null, true);
                echo "\" aria-label=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "callback", [], "any", false, false, false, 97), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "callback", [], "any", false, false, false, 97), "html", null, true);
                echo "\" aria-describedby=\"help_callback_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 97), "html", null, true);
                echo "\" spellcheck=\"false\" required=\"required\">
                                                                    <div class=\"js-ClickableDivs\" data-text=\"";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "callback", [], "any", false, false, false, 98), "html", null, true);
                echo "\"></div>
                                                                </div>
                                                            ";
            } else {
                // line 101
                echo "                                                                <input class=\"form-control\" name=\"options[callback]\" id=\"static_callback_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 101), "html", null, true);
                echo "\" type=\"text\" placeholder=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 101), "lang", [], "any", false, false, false, 101), "string", [], "any", false, false, false, 101), "admin", [], "any", false, false, false, 101), "oauth", [], "any", false, false, false, 101), "forms", [], "any", false, false, false, 101), "callback", [], "any", false, false, false, 101), "placeholder", [], "any", false, false, false, 101), "html", null, true);
                echo "\" aria-label=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "callback", [], "any", false, false, false, 101), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "callback", [], "any", false, false, false, 101), "html", null, true);
                echo "\" aria-describedby=\"help_callback_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 101), "html", null, true);
                echo "\" spellcheck=\"false\" required=\"required\">
                                                                <span>";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "callback", [], "any", false, false, false, 102), "html", null, true);
                echo "</span>
                                                            ";
            }
            // line 104
            echo "                                                            <small id=\"help_callback_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 104), "html", null, true);
            echo "\" class=\"form-text text-muted\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 104), "lang", [], "any", false, false, false, 104), "string", [], "any", false, false, false, 104), "admin", [], "any", false, false, false, 104), "oauth", [], "any", false, false, false, 104), "forms", [], "any", false, false, false, 104), "callback", [], "any", false, false, false, 104), "desc", [], "any", false, false, false, 104);
            echo "</small>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-lg-6 col-sm-12 mt-2 mt-lg-0\">
                                                        <label for=\"static_is_active_";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 108), "html", null, true);
            echo "\" class=\"col-form-label\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 108), "lang", [], "any", false, false, false, 108), "string", [], "any", false, false, false, 108), "admin", [], "any", false, false, false, 108), "oauth", [], "any", false, false, false, 108), "forms", [], "any", false, false, false, 108), "is_active", [], "any", false, false, false, 108), "title", [], "any", false, false, false, 108), "html", null, true);
            echo "</label>
                                                        <div class=\"checkbox switcher\">
                                                            <label for=\"help_is_active_";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 110), "html", null, true);
            echo "\">
                                                                <input type=\"checkbox\" name=\"options[is_active]\" id=\"help_is_active_";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 111), "html", null, true);
            echo "\" value=\"1\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "is_active", [], "any", false, false, false, 111)) ? (" checked=\"checked\"") : (""));
            echo ">
                                                                <span><small></small></span>
                                                                <small id=\"help_is_active_";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 113), "html", null, true);
            echo "\" class=\"text-muted\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 113), "lang", [], "any", false, false, false, 113), "string", [], "any", false, false, false, 113), "admin", [], "any", false, false, false, 113), "oauth", [], "any", false, false, false, 113), "forms", [], "any", false, false, false, 113), "is_active", [], "any", false, false, false, 113), "desc", [], "any", false, false, false, 113), "html", null, true);
            echo "</small>
                                                                <small id=\"help_is_active_";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 114), "html", null, true);
            echo "\" class=\"form-text text-muted\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 114), "lang", [], "any", false, false, false, 114), "string", [], "any", false, false, false, 114), "admin", [], "any", false, false, false, 114), "oauth", [], "any", false, false, false, 114), "forms", [], "any", false, false, false, 114), "is_active", [], "any", false, false, false, 114), "extra_desc", [], "any", false, false, false, 114), "html", null, true);
            echo "</small>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon pen\">";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 120), "lang", [], "any", false, false, false, 120), "string", [], "any", false, false, false, 120), "container", [], "any", false, false, false, 120), "buttons", [], "any", false, false, false, 120), "update", [], "any", false, false, false, 120), "html", null, true);
            echo "</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                            </div>
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
        return "@ComponentBundle_Admin/OAuth/oauth_services.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 126,  401 => 120,  390 => 114,  384 => 113,  377 => 111,  373 => 110,  366 => 108,  356 => 104,  351 => 102,  338 => 101,  332 => 98,  320 => 97,  317 => 96,  315 => 95,  308 => 93,  297 => 87,  285 => 86,  278 => 84,  269 => 80,  257 => 79,  250 => 77,  239 => 71,  227 => 70,  220 => 68,  211 => 64,  201 => 63,  194 => 61,  181 => 57,  174 => 53,  168 => 50,  164 => 49,  158 => 48,  152 => 47,  144 => 45,  141 => 44,  137 => 43,  125 => 36,  119 => 33,  115 => 32,  104 => 23,  102 => 22,  98 => 20,  96 => 19,  86 => 14,  80 => 13,  74 => 12,  68 => 8,  64 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/oauth_services' %}

{% block title %}{{ app.sub.lang.string.admin.oauth.title }}{{ \" - \" }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminIndex', {}) }}\">{{ app.sub.lang.string.admin.container.title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminOAuthServices', {}) }}\">{{ app.sub.lang.string.admin.oauth.title }}</a></div>
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
\t\t<div class=\"app-box shadow rounded\" data-tab=\"oauth\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center\">
                    <div>
                        <h5 class=\"mb-0\">{{ app.sub.lang.string.admin.oauth.title }}</h5>
                        <small class=\"text-muted\">{{ app.sub.lang.string.admin.oauth.desc }}</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"{{ app.phrase.buildLink('adminOAuthServices', {}) }}?addService\" class=\"btn btn-app-discussion icon plus\">{{ app.sub.lang.string.admin.oauth.buttons.add_service }}</a>
                    </div>
                </div>  
                <div class=\"d-flex flex-column align-items-center justify-content-center mt-3\">
                    <div class=\"service-list-area w-100\">
                        <form id=\"admin_services_edit\" method=\"post\">
                            <div id=\"servicesAccordion\">
                                {% for item in string.social.getSites(false) %}
                                   {% set apiKeys = string.social.getKeys(item.api_keys) %}
                                   <div class=\"app-service bg-white shadow-sm position-relative mb-3 rounded\" data-service-name=\"{{ item.name }}\" data-service-id=\"{{ item.site_id }}\">
                                        <div class=\"app-post\">
                                            <a href=\"#\" class=\"post-layout d-flex align-items-center border-top-0 px-2 p-1 collapsed\" data-toggle=\"collapse\" data-target=\"#adminOAuthService_{{ item.name }}-{{ item.site_id }}\"
                                                aria-expanded=\"false\" aria-controls=\"adminOAuthService_{{ item.name }}-{{ item.site_id }}\">
                                                <div class=\"post-icon {{ item.name }}\">
                                                    <i class=\"fab fa-{{ item.name }}\"></i>
                                                </div>
                                                <div class=\"title ml-lg-0 ml-2 mr-auto\">
                                                    <span class=\"font-weight-bold\">{{ item.title }}</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div id=\"adminOAuthService_{{ item.name }}-{{ item.site_id }}\" class=\"collapse\" aria-labelledby=\"adminOAuthService_{{ item.name }}-{{ item.site_id }}\" data-parent=\"#servicesAccordion\">
                                            <div class=\"p-2\">
                                                <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                    <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                        <label for=\"static_name_{{ item.name }}\" class=\"col-form-label\">{{ app.sub.lang.string.admin.oauth.forms.name.title }}</label>
                                                        <div>
                                                            <input class=\"form-control\" name=\"options[name]\" id=\"static_name_{{ item.name }}\" type=\"text\" aria-label=\"{{ item.name }}\" value=\"{{ item.name }}\" aria-describedby=\"help_name_{{ item.name }}\" spellcheck=\"false\" required=\"required\">
                                                            <small id=\"help_name_{{ item.name }}\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.oauth.forms.name.desc|raw }}</small>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-lg-6 col-sm-12\">
                                                        <label for=\"static_title_{{ item.name }}\" class=\"col-form-label\">{{ app.sub.lang.string.admin.oauth.forms.title.title }}</label>
                                                        <div>
                                                            <input class=\"form-control\" name=\"options[title]\" id=\"static_title_{{ item.name }}\" type=\"text\" placeholder=\"{{ app.sub.lang.string.admin.oauth.forms.title.desc }}\" aria-label=\"{{ item.title }}\" value=\"{{ item.title }}\" aria-describedby=\"help_title_{{ item.name }}\" spellcheck=\"false\" required=\"required\">
                                                            <small id=\"help_title_{{ item.name }}\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.oauth.forms.title.desc }}</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                    <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                        <label for=\"static_sitekey_{{ item.name }}\" class=\"col-form-label\">{{ app.sub.lang.string.admin.oauth.forms.site_key.title }}</label>
                                                        <div>
                                                            <input class=\"form-control\" name=\"options[site_key]\" id=\"static_sitekey_{{ item.name }}\" type=\"text\" placeholder=\"{{ app.sub.lang.string.admin.oauth.forms.site_key.desc }}\" aria-label=\"{{ apiKeys.site_key }}\" value=\"{{ apiKeys.site_key }}\" aria-describedby=\"help_sitekey_{{ item.name }}\" spellcheck=\"false\">
                                                            <small id=\"help_sitekey_{{ item.name }}\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.oauth.forms.site_key.desc }}</small>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-lg-6 col-sm-12\">
                                                        <label for=\"static_secretkey_{{ item.name }}\" class=\"col-form-label\">{{ app.sub.lang.string.admin.oauth.forms.secret_key.title }}</label>
                                                        <div>
                                                            <input class=\"form-control\" name=\"options[secret_key]\" id=\"static_secretkey_{{ item.name }}\" type=\"text\" placeholder=\"{{ app.sub.lang.string.admin.oauth.forms.secret_key.desc }}\" aria-label=\"{{ apiKeys.secret_key }}\" value=\"{{ apiKeys.secret_key }}\" aria-describedby=\"help_secretkey_{{ item.name }}\" spellcheck=\"false\">
                                                            <small id=\"help_secretkey_{{ item.name }}\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.oauth.forms.secret_key.desc }}</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                    <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                        <label for=\"static_callback_{{ item.name }}\" class=\"col-form-label\">{{ app.sub.lang.string.admin.oauth.forms.callback.title }}</label>
                                                        <div>
                                                            {% if item.callback is not same as('') %}
                                                                <div class=\"input-callback\">
                                                                    <input class=\"form-control text-transparent\" name=\"options[callback]\" id=\"static_callback_{{ item.name }}\" type=\"text\" placeholder=\"{{ app.sub.lang.string.admin.oauth.forms.callback.placeholder }}\" aria-label=\"{{ item.callback }}\" value=\"{{ item.callback }}\" aria-describedby=\"help_callback_{{ item.name }}\" spellcheck=\"false\" required=\"required\">
                                                                    <div class=\"js-ClickableDivs\" data-text=\"{{ item.callback }}\"></div>
                                                                </div>
                                                            {% else %}
                                                                <input class=\"form-control\" name=\"options[callback]\" id=\"static_callback_{{ item.name }}\" type=\"text\" placeholder=\"{{ app.sub.lang.string.admin.oauth.forms.callback.placeholder }}\" aria-label=\"{{ item.callback }}\" value=\"{{ item.callback }}\" aria-describedby=\"help_callback_{{ item.name }}\" spellcheck=\"false\" required=\"required\">
                                                                <span>{{ item.callback }}</span>
                                                            {% endif %}
                                                            <small id=\"help_callback_{{ item.name }}\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.oauth.forms.callback.desc|raw }}</small>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-lg-6 col-sm-12 mt-2 mt-lg-0\">
                                                        <label for=\"static_is_active_{{ item.name }}\" class=\"col-form-label\">{{ app.sub.lang.string.admin.oauth.forms.is_active.title }}</label>
                                                        <div class=\"checkbox switcher\">
                                                            <label for=\"help_is_active_{{ item.name }}\">
                                                                <input type=\"checkbox\" name=\"options[is_active]\" id=\"help_is_active_{{ item.name }}\" value=\"1\"{{ item.is_active ? ' checked=\"checked\"' : '' }}>
                                                                <span><small></small></span>
                                                                <small id=\"help_is_active_{{ item.name }}\" class=\"text-muted\">{{ app.sub.lang.string.admin.oauth.forms.is_active.desc }}</small>
                                                                <small id=\"help_is_active_{{ item.name }}\" class=\"form-text text-muted\">{{ app.sub.lang.string.admin.oauth.forms.is_active.extra_desc }}</small>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon pen\">{{ app.sub.lang.string.container.buttons.update }}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </aside>
{% endblock %}", "@ComponentBundle_Admin/OAuth/oauth_services.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Mention\\Templates\\Admin\\OAuth\\oauth_services.tpl");
    }
}
