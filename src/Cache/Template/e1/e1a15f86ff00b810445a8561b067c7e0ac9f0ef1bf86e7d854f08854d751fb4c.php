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

/* @ComponentBundle_Admin/Theme/templates.tpl */
class __TwigTemplate_2da73aec862c0a3266dce8d9415748cd9410cc6222c107225d1a444f0cae75e3 extends Template
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
        $this->parent = $this->loadTemplate("@ComponentBundle_Admin/container.tpl", "@ComponentBundle_Admin/Theme/templates.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "@ComponentBundle/admin/theme/templates/editor";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 5), "lang", [], "any", false, false, false, 5), "string", [], "any", false, false, false, 5), "admin", [], "any", false, false, false, 5), "theme", [], "any", false, false, false, 5), "templates", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 5), "site_title", [], "any", false, false, false, 5), "html", null, true);
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $context["originalContent"] = twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "originalContent", [], "any", false, false, false, 8);
        // line 9
        echo "\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 13), "buildLink", [0 => "indexAction", 1 => []], "method", false, false, false, 13), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 13), "site_title", [], "any", false, false, false, 13), "html", null, true);
        echo "</a></div>
\t\t\t\t\t<div><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 14), "buildLink", [0 => "adminIndex", 1 => []], "method", false, false, false, 14), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 14), "lang", [], "any", false, false, false, 14), "string", [], "any", false, false, false, 14), "admin", [], "any", false, false, false, 14), "container", [], "any", false, false, false, 14), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "</a></div>
\t\t\t\t\t<div><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 15), "buildLink", [0 => "adminTemplates", 1 => []], "method", false, false, false, 15), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 15), "lang", [], "any", false, false, false, 15), "string", [], "any", false, false, false, 15), "admin", [], "any", false, false, false, 15), "theme", [], "any", false, false, false, 15), "templates", [], "any", false, false, false, 15), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t";
        // line 20
        $this->loadTemplate("usermenu_member.tpl", "@ComponentBundle_Admin/Theme/templates.tpl", 20)->display($context);
        // line 21
        echo "\t\t</div>
\t</div>
\t
\t<aside class=\"col-sm-12\">
\t\t<div class=\"app-box shadow rounded\" data-tab=\"theme.templates\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center\">
                    <div>
                        <h5 class=\"mb-0\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 32), "lang", [], "any", false, false, false, 32), "string", [], "any", false, false, false, 32), "admin", [], "any", false, false, false, 32), "theme", [], "any", false, false, false, 32), "templates", [], "any", false, false, false, 32), "title", [], "any", false, false, false, 32), "html", null, true);
        echo "</h5>
                        <small class=\"text-muted\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 33), "lang", [], "any", false, false, false, 33), "string", [], "any", false, false, false, 33), "admin", [], "any", false, false, false, 33), "theme", [], "any", false, false, false, 33), "templates", [], "any", false, false, false, 33), "desc", [], "any", false, false, false, 33), "html", null, true);
        echo "</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 36), "buildLink", [0 => "adminIndex", 1 => []], "method", false, false, false, 36), "html", null, true);
        echo "\" class=\"btn btn-app-discussion icon back\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 36), "lang", [], "any", false, false, false, 36), "string", [], "any", false, false, false, 36), "container", [], "any", false, false, false, 36), "buttons", [], "any", false, false, false, 36), "back", [], "any", false, false, false, 36), "html", null, true);
        echo "</a>
                    </div>
                </div>
                <div class=\"d-flex flex-column align-items-center justify-content-center mt-3\">
                    <div class=\"align-self-start col-lg-12 col-sm-12 mb-3\">
                        <div class=\"app-admin-template-selector js-AppAdmin_TemplateSelector position-relative row mx-auto\" data-default=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "name", [], "any", false, false, false, 41), "html", null, true);
        echo "\">
                            <div class=\"col-lg-3 col-sm-12\">
                                <ul class=\"directory-list scrollable shadow-sm rounded-bottom mr-lg-3\">
                                    ";
        // line 44
        $context["templates"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "template", [], "any", false, false, false, 44), "getTemplates", [], "method", false, false, false, 44);
        // line 45
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(($context["templates"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 46
            echo "                                        ";
            if ( !($context["item"] === "_file")) {
                // line 47
                echo "                                            <li class=\"folder\">
                                                <span class=\"folder-name text-dark\">";
                // line 48
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</span>
                                                <ul class=\"d-none\">
                                                    ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["templates"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["item"]] ?? null) : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 51
                    echo "                                                        ";
                    if ( !($context["child"] === "_file")) {
                        // line 52
                        echo "                                                            <li class=\"folder child\">
                                                                <span class=\"folder-name text-dark\">";
                        // line 53
                        echo twig_escape_filter($this->env, $context["child"], "html", null, true);
                        echo "</span>
                                                                <ul class=\"d-none\">
                                                                    ";
                        // line 55
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["templates"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["item"]] ?? null) : null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["child"]] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["files"]) {
                            // line 56
                            echo "                                                                        ";
                            if (twig_test_iterable($context["files"])) {
                                // line 57
                                echo "                                                                            <li>
                                                                                <span data-template=\"";
                                // line 58
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["files"], "name", [], "any", false, false, false, 58), "html", null, true);
                                echo "\" data-path=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["files"], "path", [], "any", false, false, false, 58), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["files"], "name", [], "any", false, false, false, 58), "html", null, true);
                                echo "</span>
                                                                            </li>
                                                                        ";
                            }
                            // line 61
                            echo "                                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['files'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 62
                        echo "                                                                </ul>
                                                            </li>
                                                        ";
                    } else {
                        // line 65
                        echo "                                                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["templates"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[$context["item"]] ?? null) : null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["_file"] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["files"]) {
                            // line 66
                            echo "                                                                ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["files"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                                // line 67
                                echo "                                                                    ";
                                if (twig_test_iterable($context["file"])) {
                                    // line 68
                                    echo "                                                                        <li>
                                                                            <span data-template=\"";
                                    // line 69
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "name", [], "any", false, false, false, 69), "html", null, true);
                                    echo "\" data-path=\"";
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "path", [], "any", false, false, false, 69), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "name", [], "any", false, false, false, 69), "html", null, true);
                                    echo "</span>
                                                                        </li>
                                                                    ";
                                }
                                // line 72
                                echo "                                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 73
                            echo "                                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['files'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 74
                        echo "                                                        ";
                    }
                    // line 75
                    echo "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "                                                </ul>
                                            </li>
                                        ";
            }
            // line 79
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                                </ul>
                            </div>
                            <div class=\"col-lg-9 col-sm-12\">
                                <div class=\"service-list-area w-100\">
                                    <form id=\"admin_template_editor\" method=\"post\">
                                        <div id=\"servicesAccordion\">
                                            <div class=\"app-template-editor app-service bg-white shadow-sm position-relative mb-3 rounded\">
                                                <div class=\"app-post\">
                                                    <div class=\"post-layout d-flex align-items-center border-top-0 px-2 p-1 collapse\">
                                                        <div class=\"post-icon\">
                                                            <i class=\"fas fa-code\"></i>
                                                        </div>
                                                        <div class=\"head-title d-flex flex-column ml-lg-0 ml-2 mr-auto\">
                                                            <span class=\"font-weight-bold\"></span>
                                                        </div>
                                                        <div class=\"mr-2 mr-lg-5 pr-lg-5 d-none\">
                                                            <a href=\"#\" class=\"text-dark h5\" data-ui=\"app-show-originalContent\"
                                                                title=\"";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 97), "lang", [], "any", false, false, false, 97), "string", [], "any", false, false, false, 97), "admin", [], "any", false, false, false, 97), "addons", [], "any", false, false, false, 97), "app", [], "any", false, false, false, 97), "buttons", [], "any", false, false, false, 97), "show_original_content", [], "any", false, false, false, 97), "html", null, true);
        echo "\">
                                                                <i class=\"far fa-eye\"></i>
                                                            </a>
                                                            <a href=\"#\" class=\"text-dark h5 d-none\" data-ui=\"app-show-content\"
                                                                title=\"";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 101), "lang", [], "any", false, false, false, 101), "string", [], "any", false, false, false, 101), "admin", [], "any", false, false, false, 101), "addons", [], "any", false, false, false, 101), "app", [], "any", false, false, false, 101), "buttons", [], "any", false, false, false, 101), "show_editor", [], "any", false, false, false, 101), "html", null, true);
        echo "\">
                                                                <i class=\"far fa-eye-slash\"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"scrollable\">
                                                    <div id=\"editor\"></div>
                                                    ";
        // line 109
        if (($context["originalContent"] ?? null)) {
            // line 110
            echo "                                                        <div id=\"originalContent-editor\"></div>
                                                    ";
        }
        // line 112
        echo "                                                </div>
                                            </div>   
                                        </div>
                                        <div class=\"w-100 d-inline-block\">
                                            <div class=\"sticky-button is-sticky shadow\">
                                                <div class=\"progress d-none\">
\t\t\t\t                                    <div class=\"indeterminate\"></div>
\t\t\t                                    </div>
                                                <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon send\">";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 120), "lang", [], "any", false, false, false, 120), "string", [], "any", false, false, false, 120), "container", [], "any", false, false, false, 120), "buttons", [], "any", false, false, false, 120), "update", [], "any", false, false, false, 120), "html", null, true);
        echo "</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <div class=\"modal custom-modal animate slideIn\" id=\"twig-syntax-exception\" tabindex=\"-1\"
        role=\"dialog\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content shadow-lg rounded\">
                <div class=\"modal-header justify-content-lg-center d-flex\">
                    <span class=\"font-weight-bold h5 mb-0 ml-lg-auto mr-lg-auto\">";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 138
($context["app"] ?? null), "sub", [], "any", false, false, false, 138), "lang", [], "any", false, false, false, 138), "string", [], "any", false, false, false, 138), "admin", [], "any", false, false, false, 138), "theme", [], "any", false, false, false, 138), "templates", [], "any", false, false, false, 138), "error", [], "any", false, false, false, 138), "title", [], "any", false, false, false, 138), "html", null, true);
        echo "</span>
                    <span class=\"close d-lg-none ml-auto\" data-dismiss=\"modal\"
                        aria-label=\"";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 140), "lang", [], "any", false, false, false, 140), "string", [], "any", false, false, false, 140), "container", [], "any", false, false, false, 140), "buttons", [], "any", false, false, false, 140), "close", [], "any", false, false, false, 140), "html", null, true);
        echo "\"></span>
                </div>
                <div class=\"modal-body\">
                    <div class=\"big-icon error text-center mb-3\"></div>
                    <p class=\"font-weight-normal text-center\">";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 144), "lang", [], "any", false, false, false, 144), "string", [], "any", false, false, false, 144), "admin", [], "any", false, false, false, 144), "theme", [], "any", false, false, false, 144), "templates", [], "any", false, false, false, 144), "error", [], "any", false, false, false, 144), "text", [], "any", false, false, false, 144), "html", null, true);
        echo "</p>
                    <div class=\"text-center\">
                        <code class=\"error\"></code>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@ComponentBundle_Admin/Theme/templates.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 144,  341 => 140,  336 => 138,  335 => 137,  315 => 120,  305 => 112,  301 => 110,  299 => 109,  288 => 101,  281 => 97,  262 => 80,  256 => 79,  251 => 76,  245 => 75,  242 => 74,  236 => 73,  230 => 72,  220 => 69,  217 => 68,  214 => 67,  209 => 66,  204 => 65,  199 => 62,  193 => 61,  183 => 58,  180 => 57,  177 => 56,  173 => 55,  168 => 53,  165 => 52,  162 => 51,  158 => 50,  153 => 48,  150 => 47,  147 => 46,  142 => 45,  140 => 44,  134 => 41,  124 => 36,  118 => 33,  114 => 32,  101 => 21,  99 => 20,  89 => 15,  83 => 14,  77 => 13,  71 => 9,  68 => 8,  64 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/theme/templates/editor' %}

{% block title %}{{ app.sub.lang.string.admin.theme.templates.title }}{{ \" - \" }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
    {% set originalContent = string.originalContent %}
\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminIndex', {}) }}\">{{ app.sub.lang.string.admin.container.title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminTemplates', {}) }}\">{{ app.sub.lang.string.admin.theme.templates.title }}</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t{% include 'usermenu_member.tpl' %}
\t\t</div>
\t</div>
\t
\t<aside class=\"col-sm-12\">
\t\t<div class=\"app-box shadow rounded\" data-tab=\"theme.templates\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center\">
                    <div>
                        <h5 class=\"mb-0\">{{ app.sub.lang.string.admin.theme.templates.title }}</h5>
                        <small class=\"text-muted\">{{ app.sub.lang.string.admin.theme.templates.desc }}</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"{{ app.phrase.buildLink('adminIndex', {}) }}\" class=\"btn btn-app-discussion icon back\">{{ app.sub.lang.string.container.buttons.back }}</a>
                    </div>
                </div>
                <div class=\"d-flex flex-column align-items-center justify-content-center mt-3\">
                    <div class=\"align-self-start col-lg-12 col-sm-12 mb-3\">
                        <div class=\"app-admin-template-selector js-AppAdmin_TemplateSelector position-relative row mx-auto\" data-default=\"{{ string.name }}\">
                            <div class=\"col-lg-3 col-sm-12\">
                                <ul class=\"directory-list scrollable shadow-sm rounded-bottom mr-lg-3\">
                                    {% set templates = string.template.getTemplates() %}
                                    {% for item in templates|keys %}
                                        {% if not item is same as('_file') %}
                                            <li class=\"folder\">
                                                <span class=\"folder-name text-dark\">{{ item }}</span>
                                                <ul class=\"d-none\">
                                                    {% for child in templates[item]|keys %}
                                                        {% if not child is same as('_file') %}
                                                            <li class=\"folder child\">
                                                                <span class=\"folder-name text-dark\">{{ child }}</span>
                                                                <ul class=\"d-none\">
                                                                    {% for files in templates[item][child] %}
                                                                        {% if files is iterable %}
                                                                            <li>
                                                                                <span data-template=\"{{ files.name }}\" data-path=\"{{ files.path }}\">{{ files.name }}</span>
                                                                            </li>
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                </ul>
                                                            </li>
                                                        {% else %}
                                                            {% for files in templates[item]['_file'] %}
                                                                {% for file in files %}
                                                                    {% if file is iterable %}
                                                                        <li>
                                                                            <span data-template=\"{{ file.name }}\" data-path=\"{{ file.path }}\">{{ file.name }}</span>
                                                                        </li>
                                                                    {% endif %}
                                                                {% endfor %}
                                                            {% endfor %}
                                                        {% endif %}
                                                    {% endfor %}
                                                </ul>
                                            </li>
                                        {% endif %}
                                    {% endfor %}
                                </ul>
                            </div>
                            <div class=\"col-lg-9 col-sm-12\">
                                <div class=\"service-list-area w-100\">
                                    <form id=\"admin_template_editor\" method=\"post\">
                                        <div id=\"servicesAccordion\">
                                            <div class=\"app-template-editor app-service bg-white shadow-sm position-relative mb-3 rounded\">
                                                <div class=\"app-post\">
                                                    <div class=\"post-layout d-flex align-items-center border-top-0 px-2 p-1 collapse\">
                                                        <div class=\"post-icon\">
                                                            <i class=\"fas fa-code\"></i>
                                                        </div>
                                                        <div class=\"head-title d-flex flex-column ml-lg-0 ml-2 mr-auto\">
                                                            <span class=\"font-weight-bold\"></span>
                                                        </div>
                                                        <div class=\"mr-2 mr-lg-5 pr-lg-5 d-none\">
                                                            <a href=\"#\" class=\"text-dark h5\" data-ui=\"app-show-originalContent\"
                                                                title=\"{{ app.sub.lang.string.admin.addons.app.buttons.show_original_content }}\">
                                                                <i class=\"far fa-eye\"></i>
                                                            </a>
                                                            <a href=\"#\" class=\"text-dark h5 d-none\" data-ui=\"app-show-content\"
                                                                title=\"{{ app.sub.lang.string.admin.addons.app.buttons.show_editor }}\">
                                                                <i class=\"far fa-eye-slash\"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"scrollable\">
                                                    <div id=\"editor\"></div>
                                                    {% if originalContent %}
                                                        <div id=\"originalContent-editor\"></div>
                                                    {% endif %}
                                                </div>
                                            </div>   
                                        </div>
                                        <div class=\"w-100 d-inline-block\">
                                            <div class=\"sticky-button is-sticky shadow\">
                                                <div class=\"progress d-none\">
\t\t\t\t                                    <div class=\"indeterminate\"></div>
\t\t\t                                    </div>
                                                <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon send\">{{ app.sub.lang.string.container.buttons.update }}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <div class=\"modal custom-modal animate slideIn\" id=\"twig-syntax-exception\" tabindex=\"-1\"
        role=\"dialog\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content shadow-lg rounded\">
                <div class=\"modal-header justify-content-lg-center d-flex\">
                    <span class=\"font-weight-bold h5 mb-0 ml-lg-auto mr-lg-auto\">{{
                        app.sub.lang.string.admin.theme.templates.error.title }}</span>
                    <span class=\"close d-lg-none ml-auto\" data-dismiss=\"modal\"
                        aria-label=\"{{ app.sub.lang.string.container.buttons.close }}\"></span>
                </div>
                <div class=\"modal-body\">
                    <div class=\"big-icon error text-center mb-3\"></div>
                    <p class=\"font-weight-normal text-center\">{{ app.sub.lang.string.admin.theme.templates.error.text }}</p>
                    <div class=\"text-center\">
                        <code class=\"error\"></code>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "@ComponentBundle_Admin/Theme/templates.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Mention\\Templates\\Admin\\Theme\\templates.tpl");
    }
}
