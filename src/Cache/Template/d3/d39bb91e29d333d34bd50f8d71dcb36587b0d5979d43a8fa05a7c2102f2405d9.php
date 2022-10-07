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

/* @ComponentBundle_Admin/Languages/search_sentences.tpl */
class __TwigTemplate_c79c189cbfc73718a867bfeded2850b2232d0e683e5f970d9a391278014c9e34 extends Template
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
        $this->parent = $this->loadTemplate("@ComponentBundle_Admin/container.tpl", "@ComponentBundle_Admin/Languages/search_sentences.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "@ComponentBundle/admin/languages/sentences/search";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 5), "lang", [], "any", false, false, false, 5), "string", [], "any", false, false, false, 5), "admin", [], "any", false, false, false, 5), "languages", [], "any", false, false, false, 5), "sentences", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 14), "buildLink", [0 => "adminLanguages", 1 => []], "method", false, false, false, 14), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 14), "lang", [], "any", false, false, false, 14), "string", [], "any", false, false, false, 14), "admin", [], "any", false, false, false, 14), "languages", [], "any", false, false, false, 14), "list", [], "any", false, false, false, 14), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "</a></div>
                    <div><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 15), "buildLink", [0 => "adminLanguages", 1 => []], "method", false, false, false, 15), "html", null, true);
        echo "?searchSentences\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 15), "lang", [], "any", false, false, false, 15), "string", [], "any", false, false, false, 15), "admin", [], "any", false, false, false, 15), "languages", [], "any", false, false, false, 15), "sentences", [], "any", false, false, false, 15), "search", [], "any", false, false, false, 15), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t";
        // line 20
        $this->loadTemplate("usermenu_member.tpl", "@ComponentBundle_Admin/Languages/search_sentences.tpl", 20)->display($context);
        // line 21
        echo "\t\t</div>
\t</div>
    ";
        // line 23
        $this->loadTemplate("@ComponentBundle_Admin/Layout/sidebar.tpl", "@ComponentBundle_Admin/Languages/search_sentences.tpl", 23)->display($context);
        // line 24
        echo "\t
\t<aside class=\"col-sm-9\">
\t\t<div class=\"app-box shadow rounded\" data-tab=\"languages\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center\">
                    <div>
                        <h5 class=\"mb-0\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 33), "lang", [], "any", false, false, false, 33), "string", [], "any", false, false, false, 33), "admin", [], "any", false, false, false, 33), "languages", [], "any", false, false, false, 33), "sentences", [], "any", false, false, false, 33), "search", [], "any", false, false, false, 33), "title", [], "any", false, false, false, 33), "html", null, true);
        echo "</h5>
                        <small class=\"text-muted\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 34), "lang", [], "any", false, false, false, 34), "string", [], "any", false, false, false, 34), "admin", [], "any", false, false, false, 34), "languages", [], "any", false, false, false, 34), "sentences", [], "any", false, false, false, 34), "search", [], "any", false, false, false, 34), "desc", [], "any", false, false, false, 34), "html", null, true);
        echo "</small>
                    </div>
                </div>  
                <div class=\"d-flex flex-column align-items-center justify-content-center mt-3\">
                    <div class=\"d-flex flex-lg-row flex-column align-items-lg-center w-100 mb-3\">
                        <div class=\"app-adv-search app-admin-search js-AppAdmin_QuickSearchSentences position-relative w-100\">
                            <div class=\"input-group has-feedback has-clear\">
                                <div class=\"input-group-prepend\">
                                    <div class=\"app-post-manage d-flex\">
                                        <div class=\"app-searchSentences-selectLanguages dropdown d-block\">
                                            <button class=\"btn btn-app-dd no-anim-ui dropdown-toggle px-2 py-0\" type=\"button\" data-toggle=\"dropdown\"
                                                aria-haspopup=\"true\" aria-expanded=\"false\">
                                                <i class=\"fi fi-";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 46), "getFlag", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 46), "lang", [], "any", false, false, false, 46), "default", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46)], "method", false, false, false, 46), "html", null, true);
        echo " --xs mr-1\"></i>
                                                ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 47), "lang", [], "any", false, false, false, 47), "default", [], "any", false, false, false, 47), "title", [], "any", false, false, false, 47), "html", null, true);
        echo "
                                            </button>
                                            <div class=\"dropdown-menu dropdown-menu-left custom-menu custom-menu-md shadow animate slideIn\">
                                                <div class=\"title\">
                                                    <div>
                                                        <span>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 52), "lang", [], "any", false, false, false, 52), "string", [], "any", false, false, false, 52), "container", [], "any", false, false, false, 52), "buttons", [], "any", false, false, false, 52), "select", [], "any", false, false, false, 52), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"scrollable\">
                                                    <a class=\"notification quick-menu d-flex\" data-language=\"__default\" href=\"#\">
                                                        <div class=\"text ml-2\">
                                                           <span class=\"icon language\">";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 58), "lang", [], "any", false, false, false, 58), "string", [], "any", false, false, false, 58), "admin", [], "any", false, false, false, 58), "languages", [], "any", false, false, false, 58), "sentences", [], "any", false, false, false, 58), "search", [], "any", false, false, false, 58), "dropdown", [], "any", false, false, false, 58), "languages", [], "any", false, false, false, 58), "all", [], "any", false, false, false, 58), "html", null, true);
        echo "</span>
                                                        </div>
                                                    </a>
                                                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 61), "lang", [], "any", false, false, false, 61), "parse", [], "any", false, false, false, 61), "getLanguages", [], "method", false, false, false, 61));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 62
            echo "                                                        <a class=\"notification quick-menu d-flex ";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 62), "default_language", [], "any", false, false, false, 62) === twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 62))) ? ("active") : (""));
            echo "\" data-language=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 62), "html", null, true);
            echo "\" data-flag=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 62), "getFlag", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 62)], "method", false, false, false, 62), "html", null, true);
            echo "\" href=\"#\">
                                                            <div class=\"text ml-2\">
                                                                <i class=\"fi fi-";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 64), "getFlag", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 64)], "method", false, false, false, 64), "html", null, true);
            echo " --xs mr-1\"></i>
                                                                <span>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 65), "html", null, true);
            echo "</span>
                                                            </div>
                                                        </a>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"app-searchSentences-selectAddon dropdown d-block\">
                                            <button class=\"btn btn-app-dd icon addons no-anim-ui dropdown-toggle px-2 py-0\" type=\"button\" data-toggle=\"dropdown\"
                                                aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 75
($context["app"] ?? null), "sub", [], "any", false, false, false, 75), "lang", [], "any", false, false, false, 75), "string", [], "any", false, false, false, 75), "admin", [], "any", false, false, false, 75), "languages", [], "any", false, false, false, 75), "sentences", [], "any", false, false, false, 75), "search", [], "any", false, false, false, 75), "dropdown", [], "any", false, false, false, 75), "addons", [], "any", false, false, false, 75), "all", [], "any", false, false, false, 75), "html", null, true);
        echo "
                                            </button>
                                            <div class=\"dropdown-menu dropdown-menu-left custom-menu custom-menu-md shadow animate slideIn\">
                                                <div class=\"title\">
                                                    <div>
                                                        <span>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 80), "lang", [], "any", false, false, false, 80), "string", [], "any", false, false, false, 80), "container", [], "any", false, false, false, 80), "buttons", [], "any", false, false, false, 80), "select", [], "any", false, false, false, 80), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"scrollable\">
                                                    <a class=\"notification quick-menu d-flex active\" data-addon=\"__default\" href=\"#\">
                                                        <div class=\"text ml-2\">
                                                           <span class=\"icon addons\">";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 86), "lang", [], "any", false, false, false, 86), "string", [], "any", false, false, false, 86), "admin", [], "any", false, false, false, 86), "languages", [], "any", false, false, false, 86), "sentences", [], "any", false, false, false, 86), "search", [], "any", false, false, false, 86), "dropdown", [], "any", false, false, false, 86), "addons", [], "any", false, false, false, 86), "all", [], "any", false, false, false, 86), "html", null, true);
        echo "</span>
                                                        </div>
                                                    </a>
                                                    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 89), "addonList", [], "any", false, false, false, 89));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 90
            echo "                                                        <a class=\"notification quick-menu d-flex\" data-addon=\"";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\" href=\"#\">
                                                            <div class=\"text ml-2\">
                                                                <span class=\"icon puzzle\">";
            // line 92
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</span>
                                                            </div>
                                                        </a>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input class=\"form-control\" type=\"text\"
                                    placeholder=\"";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 102), "lang", [], "any", false, false, false, 102), "string", [], "any", false, false, false, 102), "admin", [], "any", false, false, false, 102), "languages", [], "any", false, false, false, 102), "sentences", [], "any", false, false, false, 102), "search", [], "any", false, false, false, 102), "placeholder", [], "any", false, false, false, 102), "html", null, true);
        echo "\"
                                    aria-label=\"";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 103), "lang", [], "any", false, false, false, 103), "string", [], "any", false, false, false, 103), "container", [], "any", false, false, false, 103), "buttons", [], "any", false, false, false, 103), "search", [], "any", false, false, false, 103), "html", null, true);
        echo "\">
                                <span title=\"";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 104), "lang", [], "any", false, false, false, 104), "string", [], "any", false, false, false, 104), "container", [], "any", false, false, false, 104), "buttons", [], "any", false, false, false, 104), "clear", [], "any", false, false, false, 104), "html", null, true);
        echo "\"
                                    class=\"form-control-clear fas fa-times form-control-feedback d-none\"></span>
                                <div class=\"input-group-append\">
                                    <div class=\"app-post-manage d-flex\">
                                        <button class=\"btn btn-app-dd icon search no-anim-ui px-2 py-0\" type=\"button\">
                                            ";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 109), "lang", [], "any", false, false, false, 109), "string", [], "any", false, false, false, 109), "container", [], "any", false, false, false, 109), "buttons", [], "any", false, false, false, 109), "search", [], "any", false, false, false, 109), "html", null, true);
        echo "
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"app-sentenceList search-results w-100\"></div>
                </div>
            </div>
        </div>
    </aside>
";
    }

    public function getTemplateName()
    {
        return "@ComponentBundle_Admin/Languages/search_sentences.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 109,  262 => 104,  258 => 103,  254 => 102,  246 => 96,  236 => 92,  230 => 90,  226 => 89,  220 => 86,  211 => 80,  203 => 75,  202 => 74,  195 => 69,  185 => 65,  181 => 64,  171 => 62,  167 => 61,  161 => 58,  152 => 52,  144 => 47,  140 => 46,  125 => 34,  121 => 33,  110 => 24,  108 => 23,  104 => 21,  102 => 20,  92 => 15,  86 => 14,  80 => 13,  74 => 12,  68 => 8,  64 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/languages/sentences/search' %}

{% block title %}{{ app.sub.lang.string.admin.languages.sentences.title }}{{ \" - \" }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminIndex', {}) }}\">{{ app.sub.lang.string.admin.container.title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminLanguages', {}) }}\">{{ app.sub.lang.string.admin.languages.list.title }}</a></div>
                    <div><a href=\"{{ app.phrase.buildLink('adminLanguages', {}) }}?searchSentences\">{{ app.sub.lang.string.admin.languages.sentences.search.title }}</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t{% include 'usermenu_member.tpl' %}
\t\t</div>
\t</div>
    {% include '@ComponentBundle_Admin/Layout/sidebar.tpl' %}
\t
\t<aside class=\"col-sm-9\">
\t\t<div class=\"app-box shadow rounded\" data-tab=\"languages\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center\">
                    <div>
                        <h5 class=\"mb-0\">{{ app.sub.lang.string.admin.languages.sentences.search.title }}</h5>
                        <small class=\"text-muted\">{{ app.sub.lang.string.admin.languages.sentences.search.desc }}</small>
                    </div>
                </div>  
                <div class=\"d-flex flex-column align-items-center justify-content-center mt-3\">
                    <div class=\"d-flex flex-lg-row flex-column align-items-lg-center w-100 mb-3\">
                        <div class=\"app-adv-search app-admin-search js-AppAdmin_QuickSearchSentences position-relative w-100\">
                            <div class=\"input-group has-feedback has-clear\">
                                <div class=\"input-group-prepend\">
                                    <div class=\"app-post-manage d-flex\">
                                        <div class=\"app-searchSentences-selectLanguages dropdown d-block\">
                                            <button class=\"btn btn-app-dd no-anim-ui dropdown-toggle px-2 py-0\" type=\"button\" data-toggle=\"dropdown\"
                                                aria-haspopup=\"true\" aria-expanded=\"false\">
                                                <i class=\"fi fi-{{ string.language.getFlag(app.sub.lang.default.id) }} --xs mr-1\"></i>
                                                {{ app.sub.lang.default.title }}
                                            </button>
                                            <div class=\"dropdown-menu dropdown-menu-left custom-menu custom-menu-md shadow animate slideIn\">
                                                <div class=\"title\">
                                                    <div>
                                                        <span>{{ app.sub.lang.string.container.buttons.select }}</span>
                                                    </div>
                                                </div>
                                                <div class=\"scrollable\">
                                                    <a class=\"notification quick-menu d-flex\" data-language=\"__default\" href=\"#\">
                                                        <div class=\"text ml-2\">
                                                           <span class=\"icon language\">{{ app.sub.lang.string.admin.languages.sentences.search.dropdown.languages.all }}</span>
                                                        </div>
                                                    </a>
                                                    {% for item in app.sub.lang.parse.getLanguages() %}
                                                        <a class=\"notification quick-menu d-flex {{ app.settings.default_language is same as(item.name) ? 'active' : '' }}\" data-language=\"{{ item.name }}\" data-flag=\"{{ string.language.getFlag(item.id) }}\" href=\"#\">
                                                            <div class=\"text ml-2\">
                                                                <i class=\"fi fi-{{ string.language.getFlag(item.id) }} --xs mr-1\"></i>
                                                                <span>{{ item.title }}</span>
                                                            </div>
                                                        </a>
                                                    {% endfor %}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"app-searchSentences-selectAddon dropdown d-block\">
                                            <button class=\"btn btn-app-dd icon addons no-anim-ui dropdown-toggle px-2 py-0\" type=\"button\" data-toggle=\"dropdown\"
                                                aria-haspopup=\"true\" aria-expanded=\"false\">{{
                                                app.sub.lang.string.admin.languages.sentences.search.dropdown.addons.all }}
                                            </button>
                                            <div class=\"dropdown-menu dropdown-menu-left custom-menu custom-menu-md shadow animate slideIn\">
                                                <div class=\"title\">
                                                    <div>
                                                        <span>{{ app.sub.lang.string.container.buttons.select }}</span>
                                                    </div>
                                                </div>
                                                <div class=\"scrollable\">
                                                    <a class=\"notification quick-menu d-flex active\" data-addon=\"__default\" href=\"#\">
                                                        <div class=\"text ml-2\">
                                                           <span class=\"icon addons\">{{ app.sub.lang.string.admin.languages.sentences.search.dropdown.addons.all }}</span>
                                                        </div>
                                                    </a>
                                                    {% for item in string.language.addonList %}
                                                        <a class=\"notification quick-menu d-flex\" data-addon=\"{{ item }}\" href=\"#\">
                                                            <div class=\"text ml-2\">
                                                                <span class=\"icon puzzle\">{{ item }}</span>
                                                            </div>
                                                        </a>
                                                    {% endfor %}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input class=\"form-control\" type=\"text\"
                                    placeholder=\"{{ app.sub.lang.string.admin.languages.sentences.search.placeholder }}\"
                                    aria-label=\"{{ app.sub.lang.string.container.buttons.search }}\">
                                <span title=\"{{ app.sub.lang.string.container.buttons.clear }}\"
                                    class=\"form-control-clear fas fa-times form-control-feedback d-none\"></span>
                                <div class=\"input-group-append\">
                                    <div class=\"app-post-manage d-flex\">
                                        <button class=\"btn btn-app-dd icon search no-anim-ui px-2 py-0\" type=\"button\">
                                            {{ app.sub.lang.string.container.buttons.search }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"app-sentenceList search-results w-100\"></div>
                </div>
            </div>
        </div>
    </aside>
{% endblock %}", "@ComponentBundle_Admin/Languages/search_sentences.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Mention\\Templates\\Admin\\Languages\\search_sentences.tpl");
    }
}
