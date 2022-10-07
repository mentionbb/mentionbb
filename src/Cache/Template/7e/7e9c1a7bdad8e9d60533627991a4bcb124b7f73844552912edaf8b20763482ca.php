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

/* @ComponentBundle_Admin/Forums/remove_forum_modal.tpl */
class __TwigTemplate_aae49c33d212f10066bedfbfa91053fc7e7445ea3cf7ed69f0df78be78762ef9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"modal custom-modal animate slideIn\" id=\"forum-delete\" data-forum-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "forum_id", [], "any", false, false, false, 1), "html", null, true);
        echo "\" tabindex=\"-1\"
    role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content shadow-lg rounded\">
            <div class=\"modal-header justify-content-lg-center d-flex\">
                <span class=\"font-weight-bold h5 mb-0 ml-lg-auto mr-lg-auto\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 7
($context["app"] ?? null), "sub", [], "any", false, false, false, 7), "lang", [], "any", false, false, false, 7), "string", [], "any", false, false, false, 7), "admin", [], "any", false, false, false, 7), "forums", [], "any", false, false, false, 7), "remove", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</span>
                <span class=\"close d-lg-none ml-auto\" data-dismiss=\"modal\"
                    aria-label=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 9), "lang", [], "any", false, false, false, 9), "string", [], "any", false, false, false, 9), "container", [], "any", false, false, false, 9), "buttons", [], "any", false, false, false, 9), "close", [], "any", false, false, false, 9), "html", null, true);
        echo "\"></span>
            </div>
            <div class=\"modal-body\">
                <div class=\"big-icon confirmation text-center mb-3\"></div>
                <p class=\"font-weight-normal text-center\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 13), "lang", [], "any", false, false, false, 13), "string", [], "any", false, false, false, 13), "admin", [], "any", false, false, false, 13), "forums", [], "any", false, false, false, 13), "remove", [], "any", false, false, false, 13), "desc", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
                <form method=\"post\">
                    <button type=\"submit\" class=\"btn btn-app-complete icon no-anim-ui\"
                        data-complete-text=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 16), "lang", [], "any", false, false, false, 16), "string", [], "any", false, false, false, 16), "admin", [], "any", false, false, false, 16), "forums", [], "any", false, false, false, 16), "remove", [], "any", false, false, false, 16), "success", [], "any", false, false, false, 16), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 17
($context["app"] ?? null), "sub", [], "any", false, false, false, 17), "lang", [], "any", false, false, false, 17), "string", [], "any", false, false, false, 17), "container", [], "any", false, false, false, 17), "buttons", [], "any", false, false, false, 17), "approve", [], "any", false, false, false, 17), "html", null, true);
        echo "</button>
                </form>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@ComponentBundle_Admin/Forums/remove_forum_modal.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 17,  65 => 16,  59 => 13,  52 => 9,  47 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal custom-modal animate slideIn\" id=\"forum-delete\" data-forum-id=\"{{ string.forum_id }}\" tabindex=\"-1\"
    role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content shadow-lg rounded\">
            <div class=\"modal-header justify-content-lg-center d-flex\">
                <span class=\"font-weight-bold h5 mb-0 ml-lg-auto mr-lg-auto\">{{
                    app.sub.lang.string.admin.forums.remove.title }}</span>
                <span class=\"close d-lg-none ml-auto\" data-dismiss=\"modal\"
                    aria-label=\"{{ app.sub.lang.string.container.buttons.close }}\"></span>
            </div>
            <div class=\"modal-body\">
                <div class=\"big-icon confirmation text-center mb-3\"></div>
                <p class=\"font-weight-normal text-center\">{{ app.sub.lang.string.admin.forums.remove.desc }}</p>
                <form method=\"post\">
                    <button type=\"submit\" class=\"btn btn-app-complete icon no-anim-ui\"
                        data-complete-text=\"{{ app.sub.lang.string.admin.forums.remove.success }}\">{{
                        app.sub.lang.string.container.buttons.approve }}</button>
                </form>
            </div>
        </div>
    </div>
</div>", "@ComponentBundle_Admin/Forums/remove_forum_modal.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Mention\\Templates\\Admin\\Forums\\remove_forum_modal.tpl");
    }
}
