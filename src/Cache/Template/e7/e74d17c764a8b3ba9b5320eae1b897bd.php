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

/* @ComponentBundle_Admin/Addons/list.tpl */
class __TwigTemplate_55e7f39803fabc6a7fb6205bd90680a0 extends Template
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
        $this->parent = $this->loadTemplate("@ComponentBundle_Admin/container.tpl", "@ComponentBundle_Admin/Addons/list.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "@ComponentBundle/admin/addons/list";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 5), "lang", [], "any", false, false, false, 5), "string", [], "any", false, false, false, 5), "admin", [], "any", false, false, false, 5), "addons", [], "any", false, false, false, 5), "list", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 14), "buildLink", [0 => "adminAddons", 1 => []], "method", false, false, false, 14), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 14), "lang", [], "any", false, false, false, 14), "string", [], "any", false, false, false, 14), "admin", [], "any", false, false, false, 14), "addons", [], "any", false, false, false, 14), "list", [], "any", false, false, false, 14), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t";
        // line 19
        $this->loadTemplate("usermenu_member.tpl", "@ComponentBundle_Admin/Addons/list.tpl", 19)->display($context);
        // line 20
        echo "\t\t</div>
\t</div>
\t";
        // line 22
        $this->loadTemplate("@ComponentBundle_Admin/Layout/sidebar.tpl", "@ComponentBundle_Admin/Addons/list.tpl", 22)->display($context);
        // line 23
        echo "\t
\t<aside class=\"col-sm-9\">
\t\t<div class=\"app-box shadow rounded\" data-tab=\"addons\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center\">
                    <div>
                        <h5 class=\"mb-0\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 32), "lang", [], "any", false, false, false, 32), "string", [], "any", false, false, false, 32), "admin", [], "any", false, false, false, 32), "addons", [], "any", false, false, false, 32), "list", [], "any", false, false, false, 32), "title", [], "any", false, false, false, 32), "html", null, true);
        echo "</h5>
                        <small class=\"text-muted\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 33), "lang", [], "any", false, false, false, 33), "string", [], "any", false, false, false, 33), "admin", [], "any", false, false, false, 33), "addons", [], "any", false, false, false, 33), "list", [], "any", false, false, false, 33), "desc", [], "any", false, false, false, 33), "html", null, true);
        echo "</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 36), "buildLink", [0 => "adminAddons", 1 => []], "method", false, false, false, 36), "html", null, true);
        echo "?install\" class=\"btn btn-app-discussion icon plus\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 36), "lang", [], "any", false, false, false, 36), "string", [], "any", false, false, false, 36), "container", [], "any", false, false, false, 36), "buttons", [], "any", false, false, false, 36), "install", [], "any", false, false, false, 36), "html", null, true);
        echo "</a>
                    </div>
                </div>  
                <div class=\"d-flex flex-column align-items-center justify-content-center mt-3\">
                    <div class=\"d-flex flex-lg-row flex-column align-items-lg-center w-100 mb-3\">
                        <div class=\"app-admin-search js-AppAdmin_QuickSearchAddons search-container position-relative\">
                            <div class=\"input-group has-feedback has-clear\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 44), "lang", [], "any", false, false, false, 44), "string", [], "any", false, false, false, 44), "admin", [], "any", false, false, false, 44), "addons", [], "any", false, false, false, 44), "list", [], "any", false, false, false, 44), "search", [], "any", false, false, false, 44), "label", [], "any", false, false, false, 44), "html", null, true);
        echo "</span>
                                </div>
                                <input class=\"form-control\" type=\"text\"
                                    placeholder=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 47), "lang", [], "any", false, false, false, 47), "string", [], "any", false, false, false, 47), "admin", [], "any", false, false, false, 47), "addons", [], "any", false, false, false, 47), "list", [], "any", false, false, false, 47), "search", [], "any", false, false, false, 47), "placeholder", [], "any", false, false, false, 47), "html", null, true);
        echo "\"
                                    aria-label=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 48), "lang", [], "any", false, false, false, 48), "string", [], "any", false, false, false, 48), "container", [], "any", false, false, false, 48), "buttons", [], "any", false, false, false, 48), "search", [], "any", false, false, false, 48), "html", null, true);
        echo "\">
                                <i class=\"fas fa-search\"></i>
                                <span title=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 50), "lang", [], "any", false, false, false, 50), "string", [], "any", false, false, false, 50), "container", [], "any", false, false, false, 50), "buttons", [], "any", false, false, false, 50), "clear", [], "any", false, false, false, 50), "html", null, true);
        echo "\"
                                    class=\"form-control-clear fas fa-times form-control-feedback d-none\"></span>
                            </div>
                            <div class=\"search-results shadow d-none\">
                                <span></span>
                                <div class=\"load-area bg-white pt-5 pb-5 d-block\">
                                    <div class=\"post-loader-spin d-block\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"service-list-area w-100\">
                        <form method=\"post\">
                            <div id=\"servicesAccordion\">
                                ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "addonList", [], "any", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 65
            echo "                                   <div class=\"app-addon app-service bg-white shadow-sm position-relative mb-3 rounded\" data-name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 65), "html", null, true);
            echo "\" data-event-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "event_id", [], "any", false, false, false, 65), "html", null, true);
            echo "\" data-order=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "settings", [], "any", false, false, false, 65), "order", [], "any", false, false, false, 65), "html", null, true);
            echo "\">
                                        <div class=\"app-post\">
                                            <div class=\"post-layout d-flex align-items-center border-top-0 px-2 p-1 collapse\" data-toggle=\"collapse\" data-target=\"#adminAddons_";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 67), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "event_id", [], "any", false, false, false, 67), "html", null, true);
            echo "\"
                                                aria-expanded=\"true\" aria-controls=\"adminAddons_";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 68), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "event_id", [], "any", false, false, false, 68), "html", null, true);
            echo "\">
                                                <div class=\"post-icon\">
                                                    <i class=\"fas fa-puzzle-piece\"></i>
                                                </div>
                                                <div class=\"head-title d-flex flex-column ml-lg-0 ml-2 mr-auto\">
                                                    ";
            // line 73
            if (twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", true, true, false, 73)) {
                // line 74
                echo "                                                        <span class=\"font-weight-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 74), "html", null, true);
                echo "</span>
                                                    ";
            } else {
                // line 76
                echo "                                                        <span class=\"font-weight-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 76), "html", null, true);
                echo "</span>
                                                    ";
            }
            // line 78
            echo "                                                    <small>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 78), "html", null, true);
            echo "</small>
                                                </div>
                                                ";
            // line 80
            if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "settings", [], "any", false, false, false, 80), "perm_id", [], "any", false, false, false, 80) === "core-application")) {
                // line 81
                echo "                                                    <div class=\"mr-5\" data-ui=\"addon-switcher\">
                                                        <div class=\"checkbox switcher\">
                                                            <label class=\"mb-0\">
                                                                <input type=\"checkbox\" value=\"1\" ";
                // line 84
                echo (((twig_get_attribute($this->env, $this->source, $context["item"], "file", [], "any", false, false, false, 84) === "noactive")) ? ("") : ("checked=\"checked\""));
                echo ">
                                                                <span><small></small></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 90
            echo "                                            </div>
                                        </div>
                                        <div>
                                            <div class=\"p-2\">
                                                <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                    <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                        <label class=\"col-form-label\">";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 96), "lang", [], "any", false, false, false, 96), "string", [], "any", false, false, false, 96), "admin", [], "any", false, false, false, 96), "addons", [], "any", false, false, false, 96), "list", [], "any", false, false, false, 96), "addon", [], "any", false, false, false, 96), "id", [], "any", false, false, false, 96), "title", [], "any", false, false, false, 96), "html", null, true);
            echo "</label>
                                                        <div>
                                                            <input class=\"form-control\" type=\"text\" value=\"";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "event_id", [], "any", false, false, false, 98), "html", null, true);
            echo "\" disabled />
                                                        </div>
                                                    </div>
                                                    <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                        <label class=\"col-form-label\">";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 102), "lang", [], "any", false, false, false, 102), "string", [], "any", false, false, false, 102), "admin", [], "any", false, false, false, 102), "addons", [], "any", false, false, false, 102), "list", [], "any", false, false, false, 102), "addon", [], "any", false, false, false, 102), "name", [], "any", false, false, false, 102), "title", [], "any", false, false, false, 102), "html", null, true);
            echo "</label>
                                                        <div>
                                                            <input class=\"form-control\" type=\"text\" value=\"";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 104), "html", null, true);
            echo "\" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                    <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                        <label class=\"col-form-label\">";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 110), "lang", [], "any", false, false, false, 110), "string", [], "any", false, false, false, 110), "admin", [], "any", false, false, false, 110), "addons", [], "any", false, false, false, 110), "list", [], "any", false, false, false, 110), "addon", [], "any", false, false, false, 110), "application", [], "any", false, false, false, 110), "title", [], "any", false, false, false, 110), "html", null, true);
            echo "</label>
                                                        <div>
                                                            <a href=\"";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 112), "buildLink", [0 => "adminAddons", 1 => []], "method", false, false, false, 112), "html", null, true);
            echo "?app=[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "application", [], "any", false, false, false, 112), "app", [], "any", false, false, false, 112), "html", null, true);
            echo "]\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "application", [], "any", false, false, false, 112), "app", [], "any", false, false, false, 112), "html", null, true);
            echo "</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div><a target=\"_blank\" href=\"";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "developers", [], "any", false, false, false, 116), "list", [], "any", false, false, false, 116), "link", [], "any", false, false, false, 116), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "developers", [], "any", false, false, false, 116), "list", [], "any", false, false, false, 116), "name", [], "any", false, false, false, 116), "html", null, true);
            echo "</a></div>
                                                <div>v";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "version", [], "any", false, false, false, 117), "html", null, true);
            echo "</div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
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
        return "@ComponentBundle_Admin/Addons/list.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 122,  292 => 117,  286 => 116,  275 => 112,  270 => 110,  261 => 104,  256 => 102,  249 => 98,  244 => 96,  236 => 90,  227 => 84,  222 => 81,  220 => 80,  214 => 78,  208 => 76,  202 => 74,  200 => 73,  190 => 68,  184 => 67,  174 => 65,  170 => 64,  153 => 50,  148 => 48,  144 => 47,  138 => 44,  125 => 36,  119 => 33,  115 => 32,  104 => 23,  102 => 22,  98 => 20,  96 => 19,  86 => 14,  80 => 13,  74 => 12,  68 => 8,  64 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/addons/list' %}

{% block title %}{{ app.sub.lang.string.admin.addons.list.title }}{{ \" - \" }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminIndex', {}) }}\">{{ app.sub.lang.string.admin.container.title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminAddons', {}) }}\">{{ app.sub.lang.string.admin.addons.list.title }}</a></div>
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
\t\t<div class=\"app-box shadow rounded\" data-tab=\"addons\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center\">
                    <div>
                        <h5 class=\"mb-0\">{{ app.sub.lang.string.admin.addons.list.title }}</h5>
                        <small class=\"text-muted\">{{ app.sub.lang.string.admin.addons.list.desc }}</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"{{ app.phrase.buildLink('adminAddons', {}) }}?install\" class=\"btn btn-app-discussion icon plus\">{{ app.sub.lang.string.container.buttons.install }}</a>
                    </div>
                </div>  
                <div class=\"d-flex flex-column align-items-center justify-content-center mt-3\">
                    <div class=\"d-flex flex-lg-row flex-column align-items-lg-center w-100 mb-3\">
                        <div class=\"app-admin-search js-AppAdmin_QuickSearchAddons search-container position-relative\">
                            <div class=\"input-group has-feedback has-clear\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">{{ app.sub.lang.string.admin.addons.list.search.label }}</span>
                                </div>
                                <input class=\"form-control\" type=\"text\"
                                    placeholder=\"{{ app.sub.lang.string.admin.addons.list.search.placeholder }}\"
                                    aria-label=\"{{ app.sub.lang.string.container.buttons.search }}\">
                                <i class=\"fas fa-search\"></i>
                                <span title=\"{{ app.sub.lang.string.container.buttons.clear }}\"
                                    class=\"form-control-clear fas fa-times form-control-feedback d-none\"></span>
                            </div>
                            <div class=\"search-results shadow d-none\">
                                <span></span>
                                <div class=\"load-area bg-white pt-5 pb-5 d-block\">
                                    <div class=\"post-loader-spin d-block\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"service-list-area w-100\">
                        <form method=\"post\">
                            <div id=\"servicesAccordion\">
                                {% for item in string.addonList %}
                                   <div class=\"app-addon app-service bg-white shadow-sm position-relative mb-3 rounded\" data-name=\"{{ item.name }}\" data-event-id=\"{{ item.event_id }}\" data-order=\"{{ item.settings.order }}\">
                                        <div class=\"app-post\">
                                            <div class=\"post-layout d-flex align-items-center border-top-0 px-2 p-1 collapse\" data-toggle=\"collapse\" data-target=\"#adminAddons_{{ item.name }}-{{ item.event_id }}\"
                                                aria-expanded=\"true\" aria-controls=\"adminAddons_{{ item.name }}-{{ item.event_id }}\">
                                                <div class=\"post-icon\">
                                                    <i class=\"fas fa-puzzle-piece\"></i>
                                                </div>
                                                <div class=\"head-title d-flex flex-column ml-lg-0 ml-2 mr-auto\">
                                                    {% if item.title is defined %}
                                                        <span class=\"font-weight-bold\">{{ item.title }}</span>
                                                    {% else %}
                                                        <span class=\"font-weight-bold\">{{ item.name }}</span>
                                                    {% endif %}
                                                    <small>{{ item.description }}</small>
                                                </div>
                                                {% if not item.settings.perm_id is same as('core-application') %}
                                                    <div class=\"mr-5\" data-ui=\"addon-switcher\">
                                                        <div class=\"checkbox switcher\">
                                                            <label class=\"mb-0\">
                                                                <input type=\"checkbox\" value=\"1\" {{ item.file is same as('noactive') ? '' : 'checked=\"checked\"' }}>
                                                                <span><small></small></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                {% endif %}
                                            </div>
                                        </div>
                                        <div>
                                            <div class=\"p-2\">
                                                <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                    <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                        <label class=\"col-form-label\">{{ app.sub.lang.string.admin.addons.list.addon.id.title }}</label>
                                                        <div>
                                                            <input class=\"form-control\" type=\"text\" value=\"{{ item.event_id }}\" disabled />
                                                        </div>
                                                    </div>
                                                    <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                        <label class=\"col-form-label\">{{ app.sub.lang.string.admin.addons.list.addon.name.title }}</label>
                                                        <div>
                                                            <input class=\"form-control\" type=\"text\" value=\"{{ item.name }}\" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"form-group row flex-lg-row flex-column mx-auto\">
                                                    <div class=\"col-lg-6 col-sm-12 pr-lg-5\">
                                                        <label class=\"col-form-label\">{{ app.sub.lang.string.admin.addons.list.addon.application.title }}</label>
                                                        <div>
                                                            <a href=\"{{ app.phrase.buildLink('adminAddons', {}) }}?app=[{{ item.application.app }}]\">{{ item.application.app }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div><a target=\"_blank\" href=\"{{ item.developers.list.link }}\">{{ item.developers.list.name }}</a></div>
                                                <div>v{{ item.version }}</div>
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
{% endblock %}", "@ComponentBundle_Admin/Addons/list.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Mention\\Templates\\Admin\\Addons\\list.tpl");
    }
}
