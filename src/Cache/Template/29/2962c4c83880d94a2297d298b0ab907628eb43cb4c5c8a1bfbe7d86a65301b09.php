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

/* @ComponentBundle_Admin/Languages/import.tpl */
class __TwigTemplate_cb9be9a012c1038d2e0b8dab33d54ca86d4b2bd4f1bcab53abdce2dc76f1a3e2 extends Template
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
        $this->parent = $this->loadTemplate("@ComponentBundle_Admin/container.tpl", "@ComponentBundle_Admin/Languages/import.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "@ComponentBundle/admin/languages/import";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 5), "lang", [], "any", false, false, false, 5), "string", [], "any", false, false, false, 5), "admin", [], "any", false, false, false, 5), "languages", [], "any", false, false, false, 5), "import", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
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
        echo "?import\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 15), "lang", [], "any", false, false, false, 15), "string", [], "any", false, false, false, 15), "admin", [], "any", false, false, false, 15), "languages", [], "any", false, false, false, 15), "import", [], "any", false, false, false, 15), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t";
        // line 20
        $this->loadTemplate("usermenu_member.tpl", "@ComponentBundle_Admin/Languages/import.tpl", 20)->display($context);
        // line 21
        echo "\t\t</div>
\t</div>
\t";
        // line 23
        $this->loadTemplate("@ComponentBundle_Admin/Layout/sidebar.tpl", "@ComponentBundle_Admin/Languages/import.tpl", 23)->display($context);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 33), "lang", [], "any", false, false, false, 33), "string", [], "any", false, false, false, 33), "admin", [], "any", false, false, false, 33), "languages", [], "any", false, false, false, 33), "import", [], "any", false, false, false, 33), "title", [], "any", false, false, false, 33), "html", null, true);
        echo "</h5>
                        <small class=\"text-muted\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 34), "lang", [], "any", false, false, false, 34), "string", [], "any", false, false, false, 34), "admin", [], "any", false, false, false, 34), "languages", [], "any", false, false, false, 34), "import", [], "any", false, false, false, 34), "desc", [], "any", false, false, false, 34), "html", null, true);
        echo "</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 37), "buildLink", [0 => "adminLanguages", 1 => []], "method", false, false, false, 37), "html", null, true);
        echo "\" class=\"btn btn-app-discussion icon back\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 37), "lang", [], "any", false, false, false, 37), "string", [], "any", false, false, false, 37), "container", [], "any", false, false, false, 37), "buttons", [], "any", false, false, false, 37), "back", [], "any", false, false, false, 37), "html", null, true);
        echo "</a>
                    </div>
                </div>  
                <div class=\"d-flex flex-column align-items-center justify-content-center mt-3\">
                    <div class=\"service-list-area w-100\">
                        <form id=\"admin_language_install\" method=\"post\">
                            <div id=\"servicesAccordion\">
                                <div class=\"app-addon app-service bg-white shadow-sm position-relative mb-3 rounded\">
                                    <div class=\"app-post\">
                                        <div class=\"post-layout d-flex align-items-center border-top-0 px-2 p-1 collapse\" data-toggle=\"collapse\" data-target=\"#adminAddons_install\"
                                            aria-expanded=\"true\" aria-controls=\"adminAddons_install\">
                                            <div class=\"post-icon\">
                                                <i class=\"fas fa-language\"></i>
                                            </div>
                                            <div class=\"head-title d-flex flex-column ml-lg-0 ml-2 mr-auto\">
                                                <span class=\"font-weight-bold\">";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 52), "lang", [], "any", false, false, false, 52), "string", [], "any", false, false, false, 52), "admin", [], "any", false, false, false, 52), "languages", [], "any", false, false, false, 52), "import", [], "any", false, false, false, 52), "install", [], "any", false, false, false, 52), "title", [], "any", false, false, false, 52), "html", null, true);
        echo "</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"p-2\">
                                            <div class=\"app-addon-install d-flex flex-column align-items-center\">
                                                <input class=\"d-none\" name=\"file\" id=\"file\" type=\"file\" accept=\".zip\" />
                                                <label title=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 60), "lang", [], "any", false, false, false, 60), "string", [], "any", false, false, false, 60), "container", [], "any", false, false, false, 60), "buttons", [], "any", false, false, false, 60), "select_file", [], "any", false, false, false, 60), "html", null, true);
        echo "\" for=\"file\">
                                                    <i class=\"fas fa-upload\"></i>
                                                </label>
                                                <small class=\"font-weight-bold\">";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 63), "lang", [], "any", false, false, false, 63), "string", [], "any", false, false, false, 63), "admin", [], "any", false, false, false, 63), "languages", [], "any", false, false, false, 63), "import", [], "any", false, false, false, 63), "install", [], "any", false, false, false, 63), "file", [], "any", false, false, false, 63), "text", [], "any", false, false, false, 63), "html", null, true);
        echo "</small>
                                            </div>
                                            <div>
                                                <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon plus\">";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 66), "lang", [], "any", false, false, false, 66), "string", [], "any", false, false, false, 66), "container", [], "any", false, false, false, 66), "buttons", [], "any", false, false, false, 66), "install", [], "any", false, false, false, 66), "html", null, true);
        echo "</button>
                                            </div>
                                        </div>
                                    </div>
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
        return "@ComponentBundle_Admin/Languages/import.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 66,  168 => 63,  162 => 60,  151 => 52,  131 => 37,  125 => 34,  121 => 33,  110 => 24,  108 => 23,  104 => 21,  102 => 20,  92 => 15,  86 => 14,  80 => 13,  74 => 12,  68 => 8,  64 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/languages/import' %}

{% block title %}{{ app.sub.lang.string.admin.languages.import.title }}{{ \" - \" }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminIndex', {}) }}\">{{ app.sub.lang.string.admin.container.title }}</a></div>
\t\t\t\t\t<div><a href=\"{{ app.phrase.buildLink('adminLanguages', {}) }}\">{{ app.sub.lang.string.admin.languages.list.title }}</a></div>
                    <div><a href=\"{{ app.phrase.buildLink('adminLanguages', {}) }}?import\">{{ app.sub.lang.string.admin.languages.import.title }}</a></div>
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
\t\t<div class=\"app-box shadow rounded\" data-tab=\"languages\">
\t\t\t<div class=\"progress d-none\">
\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t</div>
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<div class=\"d-lg-flex align-items-lg-center\">
                    <div>
                        <h5 class=\"mb-0\">{{ app.sub.lang.string.admin.languages.import.title }}</h5>
                        <small class=\"text-muted\">{{ app.sub.lang.string.admin.languages.import.desc }}</small>
                    </div>
                    <div class=\"ml-auto mt-lg-0 mt-3\">
                        <a href=\"{{ app.phrase.buildLink('adminLanguages', {}) }}\" class=\"btn btn-app-discussion icon back\">{{ app.sub.lang.string.container.buttons.back }}</a>
                    </div>
                </div>  
                <div class=\"d-flex flex-column align-items-center justify-content-center mt-3\">
                    <div class=\"service-list-area w-100\">
                        <form id=\"admin_language_install\" method=\"post\">
                            <div id=\"servicesAccordion\">
                                <div class=\"app-addon app-service bg-white shadow-sm position-relative mb-3 rounded\">
                                    <div class=\"app-post\">
                                        <div class=\"post-layout d-flex align-items-center border-top-0 px-2 p-1 collapse\" data-toggle=\"collapse\" data-target=\"#adminAddons_install\"
                                            aria-expanded=\"true\" aria-controls=\"adminAddons_install\">
                                            <div class=\"post-icon\">
                                                <i class=\"fas fa-language\"></i>
                                            </div>
                                            <div class=\"head-title d-flex flex-column ml-lg-0 ml-2 mr-auto\">
                                                <span class=\"font-weight-bold\">{{ app.sub.lang.string.admin.languages.import.install.title }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"p-2\">
                                            <div class=\"app-addon-install d-flex flex-column align-items-center\">
                                                <input class=\"d-none\" name=\"file\" id=\"file\" type=\"file\" accept=\".zip\" />
                                                <label title=\"{{ app.sub.lang.string.container.buttons.select_file }}\" for=\"file\">
                                                    <i class=\"fas fa-upload\"></i>
                                                </label>
                                                <small class=\"font-weight-bold\">{{ app.sub.lang.string.admin.languages.import.install.file.text }}</small>
                                            </div>
                                            <div>
                                                <button type=\"submit\" class=\"btn btn-app-discussion no-anim-ui icon plus\">{{ app.sub.lang.string.container.buttons.install }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </aside>
{% endblock %}", "@ComponentBundle_Admin/Languages/import.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Mention\\Templates\\Admin\\Languages\\import.tpl");
    }
}
