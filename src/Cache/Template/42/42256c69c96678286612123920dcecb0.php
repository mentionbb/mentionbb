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

/* @ComponentBundle_Admin/Languages/sentences.tpl */
class __TwigTemplate_044697230989b3578b341d3b889d49c8 extends Template
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
        $this->parent = $this->loadTemplate("@ComponentBundle_Admin/container.tpl", "@ComponentBundle_Admin/Languages/sentences.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "@ComponentBundle/admin/languages/sentences";
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
        echo "?sentences\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 15), "lang", [], "any", false, false, false, 15), "string", [], "any", false, false, false, 15), "admin", [], "any", false, false, false, 15), "languages", [], "any", false, false, false, 15), "sentences", [], "any", false, false, false, 15), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t";
        // line 20
        $this->loadTemplate("usermenu_member.tpl", "@ComponentBundle_Admin/Languages/sentences.tpl", 20)->display($context);
        // line 21
        echo "\t\t</div>
\t</div>
\t
\t<aside class=\"col-sm-12\">
\t\t<div class=\"app-box shadow rounded\" data-tab=\"languages\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center\">
                    <div>
                        <h5 class=\"mb-0\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 32), "lang", [], "any", false, false, false, 32), "string", [], "any", false, false, false, 32), "admin", [], "any", false, false, false, 32), "languages", [], "any", false, false, false, 32), "sentences", [], "any", false, false, false, 32), "title", [], "any", false, false, false, 32), "html", null, true);
        echo "</h5>
                        <small class=\"text-muted\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 33), "lang", [], "any", false, false, false, 33), "string", [], "any", false, false, false, 33), "admin", [], "any", false, false, false, 33), "languages", [], "any", false, false, false, 33), "sentences", [], "any", false, false, false, 33), "desc", [], "any", false, false, false, 33), "html", null, true);
        echo "</small>
                    </div>
                </div>  
                <div class=\"d-flex flex-column align-items-center justify-content-center mt-3\">
                    <div class=\"align-self-start col-lg-12 col-sm-12 mb-3\">
                        <div class=\"app-admin-language-selector js-AppAdmin_LanguagesSentence position-relative row mx-auto\" data-default=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "name", [], "any", false, false, false, 38), "html", null, true);
        echo "\">
                            <div class=\"col-lg-3 col-sm-12\">
                                <ul class=\"directory-list scrollable shadow-sm rounded-bottom mr-lg-3\">
\t\t\t\t\t\t\t\t\t";
        // line 41
        $context["languages"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 41), "getAllLanguageFiles", [], "method", false, false, false, 41);
        // line 42
        echo "\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(($context["languages"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 43
            echo "\t\t\t\t\t\t\t\t\t    <li class=\"folder\">
\t\t\t\t\t\t\t\t\t\t    <span class=\"folder-name text-dark\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 44), "filenameTranslator", [0 => $context["item"], 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 44), "lang", [], "any", false, false, false, 44), "string", [], "any", false, false, false, 44)], "method", false, false, false, 44), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t    <ul class=\"d-none\">
\t\t\t\t\t\t\t\t\t\t\t    ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((($__internal_compile_0 = ($context["languages"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["item"]] ?? null) : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 47
                echo "\t\t\t\t\t\t\t\t\t\t\t\t    ";
                if (twig_test_iterable((($__internal_compile_1 = (($__internal_compile_2 = ($context["languages"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["item"]] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["child"]] ?? null) : null))) {
                    // line 48
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t        <li class=\"folder child\">
\t\t\t\t\t\t\t\t\t\t\t\t\t        <span class=\"folder-name text-dark\">";
                    // line 49
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 49), "filenameTranslator", [0 => $context["child"], 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 49), "lang", [], "any", false, false, false, 49), "string", [], "any", false, false, false, 49)], "method", false, false, false, 49), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t        <ul class=\"d-none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t        ";
                    // line 51
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_compile_3 = (($__internal_compile_4 = ($context["languages"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["item"]] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["child"]] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["files"]) {
                        // line 52
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <span data-language=\"";
                        // line 53
                        echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                        echo "\" data-file=\"";
                        echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\Basename']->BasenameExtension($context["child"]), "html", null, true);
                        echo "\" data-path=\"";
                        echo twig_escape_filter($this->env, $context["files"], "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 53), "filenameTranslator", [0 => ("files." . $this->extensions['App\Template\Twig\Extension\Basename']->BasenameExtension($context["files"], true)), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 53), "lang", [], "any", false, false, false, 53), "string", [], "any", false, false, false, 53)], "method", false, false, false, 53), "html", null, true);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['files'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 56
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t        </ul>
\t\t\t\t\t\t\t\t\t\t\t\t        </li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 59
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-language=\"";
                    // line 60
                    echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                    echo "\" data-file=\"__null\" data-path=\"";
                    echo twig_escape_filter($this->env, (($__internal_compile_5 = (($__internal_compile_6 = ($context["languages"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[$context["item"]] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["child"]] ?? null) : null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 60), "filenameTranslator", [0 => ("files." . $this->extensions['App\Template\Twig\Extension\Basename']->BasenameExtension($context["child"], true)), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 60), "lang", [], "any", false, false, false, 60), "string", [], "any", false, false, false, 60)], "method", false, false, false, 60), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 63
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"js-AppAdmin_LanguagesSentence_List col-lg-9 col-sm-12\" data-default=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 69), "lang", [], "any", false, false, false, 69), "default", [], "any", false, false, false, 69), "path", [], "any", false, false, false, 69), "html", null, true);
        echo "/Container.yaml\">
\t\t\t\t\t\t\t\t<div class=\"app-phrase-search d-flex flex-lg-row flex-column align-items-lg-center w-100 mb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"app-admin-search js-AppAdmin_QuickSearchLanguage_Phrases search-container position-relative\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group has-feedback has-clear\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 74), "lang", [], "any", false, false, false, 74), "string", [], "any", false, false, false, 74), "admin", [], "any", false, false, false, 74), "languages", [], "any", false, false, false, 74), "search", [], "any", false, false, false, 74), "label", [], "any", false, false, false, 74), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\"
\t\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 77), "lang", [], "any", false, false, false, 77), "string", [], "any", false, false, false, 77), "admin", [], "any", false, false, false, 77), "languages", [], "any", false, false, false, 77), "search", [], "any", false, false, false, 77), "placeholder", [], "any", false, false, false, 77), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\taria-label=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 78), "lang", [], "any", false, false, false, 78), "string", [], "any", false, false, false, 78), "container", [], "any", false, false, false, 78), "buttons", [], "any", false, false, false, 78), "search", [], "any", false, false, false, 78), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span title=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 80), "lang", [], "any", false, false, false, 80), "string", [], "any", false, false, false, 80), "container", [], "any", false, false, false, 80), "buttons", [], "any", false, false, false, 80), "clear", [], "any", false, false, false, 80), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control-clear fas fa-times form-control-feedback d-none\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"search-results shadow d-none\">
\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"load-area bg-white pt-5 pb-5 d-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-loader-spin d-block\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                       </div>
\t\t\t\t\t</div>
                </div>
            </div>
        </div>
    </aside>
";
    }

    public function getTemplateName()
    {
        return "@ComponentBundle_Admin/Languages/sentences.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 80,  241 => 78,  237 => 77,  231 => 74,  223 => 69,  219 => 67,  211 => 64,  205 => 63,  195 => 60,  192 => 59,  187 => 56,  172 => 53,  169 => 52,  165 => 51,  160 => 49,  157 => 48,  154 => 47,  150 => 46,  145 => 44,  142 => 43,  137 => 42,  135 => 41,  129 => 38,  121 => 33,  117 => 32,  104 => 21,  102 => 20,  92 => 15,  86 => 14,  80 => 13,  74 => 12,  68 => 8,  64 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/languages/sentences' %}

{% block title %}{{ app.sub.lang.string.admin.languages.sentences.title }}{{ \" - \" }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminIndex', {}) }}\">{{ app.sub.lang.string.admin.container.title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminLanguages', {}) }}\">{{ app.sub.lang.string.admin.languages.list.title }}</a></div>
                    <div><a href=\"{{ app.phrase.buildLink('adminLanguages', {}) }}?sentences\">{{ app.sub.lang.string.admin.languages.sentences.title }}</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t{% include 'usermenu_member.tpl' %}
\t\t</div>
\t</div>
\t
\t<aside class=\"col-sm-12\">
\t\t<div class=\"app-box shadow rounded\" data-tab=\"languages\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center\">
                    <div>
                        <h5 class=\"mb-0\">{{ app.sub.lang.string.admin.languages.sentences.title }}</h5>
                        <small class=\"text-muted\">{{ app.sub.lang.string.admin.languages.sentences.desc }}</small>
                    </div>
                </div>  
                <div class=\"d-flex flex-column align-items-center justify-content-center mt-3\">
                    <div class=\"align-self-start col-lg-12 col-sm-12 mb-3\">
                        <div class=\"app-admin-language-selector js-AppAdmin_LanguagesSentence position-relative row mx-auto\" data-default=\"{{ string.name }}\">
                            <div class=\"col-lg-3 col-sm-12\">
                                <ul class=\"directory-list scrollable shadow-sm rounded-bottom mr-lg-3\">
\t\t\t\t\t\t\t\t\t{% set languages = string.language.getAllLanguageFiles() %}
\t\t\t\t\t\t\t\t\t{% for item in languages|keys %}
\t\t\t\t\t\t\t\t\t    <li class=\"folder\">
\t\t\t\t\t\t\t\t\t\t    <span class=\"folder-name text-dark\">{{ string.language.filenameTranslator(item, app.sub.lang.string) }}</span>
\t\t\t\t\t\t\t\t\t\t    <ul class=\"d-none\">
\t\t\t\t\t\t\t\t\t\t\t    {% for child in languages[item]|keys %}
\t\t\t\t\t\t\t\t\t\t\t\t    {% if languages[item][child] is iterable %}
\t\t\t\t\t\t\t\t\t\t\t\t        <li class=\"folder child\">
\t\t\t\t\t\t\t\t\t\t\t\t\t        <span class=\"folder-name text-dark\">{{ string.language.filenameTranslator(child, app.sub.lang.string) }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t        <ul class=\"d-none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t        {% for files in languages[item][child] %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <span data-language=\"{{ item }}\" data-file=\"{{ child|basename }}\" data-path=\"{{ files }}\">{{ string.language.filenameTranslator('files.' ~ files|basename(true), app.sub.lang.string) }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t        {% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t        </ul>
\t\t\t\t\t\t\t\t\t\t\t\t        </li>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-language=\"{{ item }}\" data-file=\"__null\" data-path=\"{{ languages[item][child] }}\">{{ string.language.filenameTranslator('files.' ~ child|basename(true), app.sub.lang.string) }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"js-AppAdmin_LanguagesSentence_List col-lg-9 col-sm-12\" data-default=\"{{ app.sub.lang.default.path }}/Container.yaml\">
\t\t\t\t\t\t\t\t<div class=\"app-phrase-search d-flex flex-lg-row flex-column align-items-lg-center w-100 mb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"app-admin-search js-AppAdmin_QuickSearchLanguage_Phrases search-container position-relative\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group has-feedback has-clear\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">{{ app.sub.lang.string.admin.languages.search.label }}</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\"
\t\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"{{ app.sub.lang.string.admin.languages.search.placeholder }}\"
\t\t\t\t\t\t\t\t\t\t\t\taria-label=\"{{ app.sub.lang.string.container.buttons.search }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span title=\"{{ app.sub.lang.string.container.buttons.clear }}\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control-clear fas fa-times form-control-feedback d-none\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"search-results shadow d-none\">
\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"load-area bg-white pt-5 pb-5 d-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-loader-spin d-block\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                       </div>
\t\t\t\t\t</div>
                </div>
            </div>
        </div>
    </aside>
{% endblock %}", "@ComponentBundle_Admin/Languages/sentences.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Mention\\Templates\\Admin\\Languages\\sentences.tpl");
    }
}
