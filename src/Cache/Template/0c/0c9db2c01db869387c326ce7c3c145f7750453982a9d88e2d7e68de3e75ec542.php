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

/* @ComponentBundle_Admin/Users/users.tpl */
class __TwigTemplate_e545fb50c0a548ed72aa519359085cae9cb0f974403ff86cff968c13d7e74950 extends Template
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
        $this->parent = $this->loadTemplate("@ComponentBundle_Admin/container.tpl", "@ComponentBundle_Admin/Users/users.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "@ComponentBundle/admin/users";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 5), "lang", [], "any", false, false, false, 5), "string", [], "any", false, false, false, 5), "admin", [], "any", false, false, false, 5), "users", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
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
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t";
        // line 19
        $this->loadTemplate("usermenu_member.tpl", "@ComponentBundle_Admin/Users/users.tpl", 19)->display($context);
        // line 20
        echo "\t\t</div>
\t</div>
\t";
        // line 22
        $this->loadTemplate("@ComponentBundle_Admin/Layout/sidebar.tpl", "@ComponentBundle_Admin/Users/users.tpl", 22)->display($context);
        // line 23
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
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 32), "lang", [], "any", false, false, false, 32), "string", [], "any", false, false, false, 32), "admin", [], "any", false, false, false, 32), "users", [], "any", false, false, false, 32), "title", [], "any", false, false, false, 32), "html", null, true);
        echo "</h5>
                        <small class=\"text-muted\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 33), "lang", [], "any", false, false, false, 33), "string", [], "any", false, false, false, 33), "admin", [], "any", false, false, false, 33), "users", [], "any", false, false, false, 33), "desc", [], "any", false, false, false, 33), "html", null, true);
        echo "</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 36), "buildLink", [0 => "adminUsers", 1 => []], "method", false, false, false, 36), "html", null, true);
        echo "?addUser\" class=\"btn btn-app-discussion icon plus\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 36), "lang", [], "any", false, false, false, 36), "string", [], "any", false, false, false, 36), "container", [], "any", false, false, false, 36), "buttons", [], "any", false, false, false, 36), "new", [], "any", false, false, false, 36), "html", null, true);
        echo "</a>
                    </div>
                </div> 
                <hr>
                <div class=\"d-flex flex-column justify-content-center align-items-center\">
                    <div class=\"app-admin-user-search search-container position-relative mb-3\">
\t\t\t\t\t\t<div class=\"input-group has-feedback has-clear\">
\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t<span class=\"input-group-text\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 44), "lang", [], "any", false, false, false, 44), "string", [], "any", false, false, false, 44), "admin", [], "any", false, false, false, 44), "index", [], "any", false, false, false, 44), "quick_search", [], "any", false, false, false, 44), "label", [], "any", false, false, false, 44), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 46), "lang", [], "any", false, false, false, 46), "string", [], "any", false, false, false, 46), "admin", [], "any", false, false, false, 46), "index", [], "any", false, false, false, 46), "quick_search", [], "any", false, false, false, 46), "placeholder", [], "any", false, false, false, 46), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\taria-label=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 47), "lang", [], "any", false, false, false, 47), "string", [], "any", false, false, false, 47), "container", [], "any", false, false, false, 47), "buttons", [], "any", false, false, false, 47), "search", [], "any", false, false, false, 47), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t\t\t<span title=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 49), "lang", [], "any", false, false, false, 49), "string", [], "any", false, false, false, 49), "container", [], "any", false, false, false, 49), "buttons", [], "any", false, false, false, 49), "clear", [], "any", false, false, false, 49), "html", null, true);
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
                </div>
                <h6 class=\"align-self-start\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 60), "lang", [], "any", false, false, false, 60), "string", [], "any", false, false, false, 60), "admin", [], "any", false, false, false, 60), "users", [], "any", false, false, false, 60), "last", [], "any", false, false, false, 60), "title", [], "any", false, false, false, 60), "html", null, true);
        echo "</h6>
                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "users", [], "any", false, false, false, 61), "getLastFiveUsers", [], "method", false, false, false, 61));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 62
            echo "                    <div class=\"setting-group list bg-white text-dark shadow-sm position-relative rounded\">
                        <div class=\"nested-items\" data-user-id=\"";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "user_id", [], "any", false, false, false, 63), "html", null, true);
            echo "\" data-registration=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "registration_date", [], "any", false, false, false, 63), "html", null, true);
            echo "\">
                            ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 64), "user", [], "any", false, false, false, 64), "link", [], "any", false, false, false, 64), "setUser", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "user_id", [], "any", false, false, false, 64)], "method", false, false, false, 64), "html", null, true);
            echo "
\t\t\t\t            ";
            // line 66
            echo "\t\t\t\t\t            ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 66), "user", [], "any", false, false, false, 66), "link", [], "any", false, false, false, 66), "getProfilePicture", [0 => true, 1 => true], "method", false, false, false, 66);
            echo "
\t\t\t\t            ";
            // line 68
            echo "                            <a target=\"_blank\" class=\"title d-flex flex-column justify-content-center mr-auto w-100\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 68), "user", [], "any", false, false, false, 68), "link", [], "any", false, false, false, 68), "getOnlyLink", [], "method", false, false, false, 68), "html", null, true);
            echo "\">
                                <div class=\"h5\"> ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 69), "user", [], "any", false, false, false, 69), "link", [], "any", false, false, false, 69), "getName", [], "method", false, false, false, 69), "html", null, true);
            echo "</div>
                                <small class=\"d-none d-lg-block\">";
            // line 70
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 70), "lang", [], "any", false, false, false, 70), "parse", [], "any", false, false, false, 70), "Parse", [0 => "admin.users.last.user.registration_date", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "timer", [], "any", false, false, false, 70), "date", [], "any", false, false, false, 70), "toHumanReadable", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "registration_date", [], "any", false, false, false, 70)], "method", false, false, false, 70)], "method", false, false, false, 70);
            echo "</small>
                            </a>
                            <a class=\"append-btn\" href=\"";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 72), "buildLink", [0 => "adminUsers", 1 => []], "method", false, false, false, 72), "html", null, true);
            echo "?editUser=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "user_id", [], "any", false, false, false, 72), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 72), "lang", [], "any", false, false, false, 72), "string", [], "any", false, false, false, 72), "container", [], "any", false, false, false, 72), "buttons", [], "any", false, false, false, 72), "edit", [], "any", false, false, false, 72), "html", null, true);
            echo "</a>
                            <a class=\"append-btn\" href=\"";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 73), "buildLink", [0 => "adminUsers", 1 => []], "method", false, false, false, 73), "html", null, true);
            echo "?banUser=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "user_id", [], "any", false, false, false, 73), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 73), "lang", [], "any", false, false, false, 73), "string", [], "any", false, false, false, 73), "admin", [], "any", false, false, false, 73), "users", [], "any", false, false, false, 73), "last", [], "any", false, false, false, 73), "user", [], "any", false, false, false, 73), "buttons", [], "any", false, false, false, 73), "ban", [], "any", false, false, false, 73), "html", null, true);
            echo "</a>
                            <a class=\"append-btn\" href=\"#\" data-ui=\"admin-remove-user\">";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 74), "lang", [], "any", false, false, false, 74), "string", [], "any", false, false, false, 74), "container", [], "any", false, false, false, 74), "buttons", [], "any", false, false, false, 74), "remove", [], "any", false, false, false, 74), "html", null, true);
            echo "</a>
                            ";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 75), "user", [], "any", false, false, false, 75), "link", [], "any", false, false, false, 75), "unsetUser", [], "method", false, false, false, 75), "html", null, true);
            echo "
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "            </div>
        </div>
    </aside>
";
    }

    public function getTemplateName()
    {
        return "@ComponentBundle_Admin/Users/users.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 79,  226 => 75,  222 => 74,  214 => 73,  206 => 72,  201 => 70,  197 => 69,  192 => 68,  187 => 66,  183 => 64,  177 => 63,  174 => 62,  170 => 61,  166 => 60,  152 => 49,  147 => 47,  143 => 46,  138 => 44,  125 => 36,  119 => 33,  115 => 32,  104 => 23,  102 => 22,  98 => 20,  96 => 19,  86 => 14,  80 => 13,  74 => 12,  68 => 8,  64 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/users' %}

{% block title %}{{ app.sub.lang.string.admin.users.title }}{{ \" - \" }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminIndex', {}) }}\">{{ app.sub.lang.string.admin.container.title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminUsers', {}) }}\">{{ app.sub.lang.string.admin.users.title }}</a></div>
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
                        <h5 class=\"mb-0\">{{ app.sub.lang.string.admin.users.title }}</h5>
                        <small class=\"text-muted\">{{ app.sub.lang.string.admin.users.desc }}</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"{{ app.phrase.buildLink('adminUsers', {}) }}?addUser\" class=\"btn btn-app-discussion icon plus\">{{ app.sub.lang.string.container.buttons.new }}</a>
                    </div>
                </div> 
                <hr>
                <div class=\"d-flex flex-column justify-content-center align-items-center\">
                    <div class=\"app-admin-user-search search-container position-relative mb-3\">
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
                </div>
                <h6 class=\"align-self-start\">{{ app.sub.lang.string.admin.users.last.title }}</h6>
                {% for item in string.users.getLastFiveUsers() %}
                    <div class=\"setting-group list bg-white text-dark shadow-sm position-relative rounded\">
                        <div class=\"nested-items\" data-user-id=\"{{ item.user_id }}\" data-registration=\"{{ item.registration_date }}\">
                            {{ app.sub.user.link.setUser(item.user_id) }}
\t\t\t\t            {% autoescape 'html' %}
\t\t\t\t\t            {{ app.sub.user.link.getProfilePicture(true, true)|raw }}
\t\t\t\t            {% endautoescape %}
                            <a target=\"_blank\" class=\"title d-flex flex-column justify-content-center mr-auto w-100\" href=\"{{ app.sub.user.link.getOnlyLink() }}\">
                                <div class=\"h5\"> {{ app.sub.user.link.getName() }}</div>
                                <small class=\"d-none d-lg-block\">{{ app.sub.lang.parse.Parse('admin.users.last.user.registration_date', app.timer.date.toHumanReadable(item.registration_date))|raw }}</small>
                            </a>
                            <a class=\"append-btn\" href=\"{{ app.phrase.buildLink('adminUsers', {}) }}?editUser={{ item.user_id }}\">{{ app.sub.lang.string.container.buttons.edit }}</a>
                            <a class=\"append-btn\" href=\"{{ app.phrase.buildLink('adminUsers', {}) }}?banUser={{ item.user_id }}\">{{ app.sub.lang.string.admin.users.last.user.buttons.ban }}</a>
                            <a class=\"append-btn\" href=\"#\" data-ui=\"admin-remove-user\">{{ app.sub.lang.string.container.buttons.remove }}</a>
                            {{ app.sub.user.link.unsetUser() }}
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </aside>
{% endblock %}", "@ComponentBundle_Admin/Users/users.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Mention\\Templates\\Admin\\Users\\users.tpl");
    }
}
