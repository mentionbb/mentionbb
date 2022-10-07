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

/* delete.tpl */
class __TwigTemplate_9b6518005a91cd7f8ddb8da4bb78dfe8 extends Template
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
        echo "<div class=\"modal custom-modal animate slideIn\" id=\"post-delete\" data-post-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post_id", [], "any", false, false, false, 1), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content shadow-lg rounded\">
      <div class=\"modal-header justify-content-lg-center d-flex\">
        <span class=\"font-weight-bold h5 mb-0 ml-lg-auto mr-lg-auto\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 5), "lang", [], "any", false, false, false, 5), "string", [], "any", false, false, false, 5), "discussion", [], "any", false, false, false, 5), "posts", [], "any", false, false, false, 5), "delete", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</span>
        <span class=\"close d-lg-none ml-auto\" data-dismiss=\"modal\" aria-label=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 6), "lang", [], "any", false, false, false, 6), "string", [], "any", false, false, false, 6), "container", [], "any", false, false, false, 6), "buttons", [], "any", false, false, false, 6), "close", [], "any", false, false, false, 6), "html", null, true);
        echo "\"></span>
      </div>
      <div class=\"modal-body\">
        <div class=\"big-icon confirmation text-center mb-3\"></div>
        <p class=\"font-weight-normal text-center\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 10), "lang", [], "any", false, false, false, 10), "string", [], "any", false, false, false, 10), "discussion", [], "any", false, false, false, 10), "posts", [], "any", false, false, false, 10), "delete", [], "any", false, false, false, 10), "text", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
        <form method=\"post\">
          <button type=\"submit\" class=\"btn btn-app-complete icon no-anim-ui\" data-complete-text=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 12), "lang", [], "any", false, false, false, 12), "string", [], "any", false, false, false, 12), "discussion", [], "any", false, false, false, 12), "posts", [], "any", false, false, false, 12), "delete", [], "any", false, false, false, 12), "success", [], "any", false, false, false, 12), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 12), "lang", [], "any", false, false, false, 12), "string", [], "any", false, false, false, 12), "container", [], "any", false, false, false, 12), "buttons", [], "any", false, false, false, 12), "approve", [], "any", false, false, false, 12), "html", null, true);
        echo "</button>
        </form>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "delete.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  56 => 10,  49 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal custom-modal animate slideIn\" id=\"post-delete\" data-post-id=\"{{ string.post_id }}\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content shadow-lg rounded\">
      <div class=\"modal-header justify-content-lg-center d-flex\">
        <span class=\"font-weight-bold h5 mb-0 ml-lg-auto mr-lg-auto\">{{ app.sub.lang.string.discussion.posts.delete.title }}</span>
        <span class=\"close d-lg-none ml-auto\" data-dismiss=\"modal\" aria-label=\"{{ app.sub.lang.string.container.buttons.close }}\"></span>
      </div>
      <div class=\"modal-body\">
        <div class=\"big-icon confirmation text-center mb-3\"></div>
        <p class=\"font-weight-normal text-center\">{{ app.sub.lang.string.discussion.posts.delete.text }}</p>
        <form method=\"post\">
          <button type=\"submit\" class=\"btn btn-app-complete icon no-anim-ui\" data-complete-text=\"{{ app.sub.lang.string.discussion.posts.delete.success }}\">{{ app.sub.lang.string.container.buttons.approve }}</button>
        </form>
      </div>
    </div>
  </div>
</div>", "delete.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Post\\delete.tpl");
    }
}
