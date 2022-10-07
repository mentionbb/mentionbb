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

/* report.tpl */
class __TwigTemplate_f30d22095f7765c134ad8b521078df54 extends Template
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
        echo "<div class=\"modal custom-modal animate slideIn\" id=\"post-report\" data-post-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post_id", [], "any", false, false, false, 1), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content shadow-lg rounded\">
      <div class=\"modal-header justify-content-lg-center d-flex\">
        <span class=\"font-weight-bold h5 mb-0 ml-lg-auto mr-lg-auto\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 5), "lang", [], "any", false, false, false, 5), "string", [], "any", false, false, false, 5), "discussion", [], "any", false, false, false, 5), "posts", [], "any", false, false, false, 5), "report", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</span>
        <span class=\"close d-lg-none ml-auto\" data-dismiss=\"modal\" aria-label=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 6), "lang", [], "any", false, false, false, 6), "string", [], "any", false, false, false, 6), "container", [], "any", false, false, false, 6), "buttons", [], "any", false, false, false, 6), "close", [], "any", false, false, false, 6), "html", null, true);
        echo "\"></span>
      </div>
      <div class=\"modal-body\">
        <div class=\"big-icon flag text-center mb-3\"></div>
        <p class=\"font-weight-normal text-center\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 10), "lang", [], "any", false, false, false, 10), "string", [], "any", false, false, false, 10), "discussion", [], "any", false, false, false, 10), "posts", [], "any", false, false, false, 10), "report", [], "any", false, false, false, 10), "text", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
        <div class=\"js-ClickableDivs mt-2\" data-ui=\"quick-reporting\">
          <div class=\"bg-white shadow-sm rounded pl-3 pr-3 pb-2 pt-2 mb-2\">Uygunsuz içerik.</div>
          <div class=\"bg-white shadow-sm rounded pl-3 pr-3 pb-2 pt-2 mb-2\">Yanlış veya eksik bilgi.</div>
          <div class=\"bg-white shadow-sm rounded pl-3 pr-3 pb-2 pt-2 mb-3\">Küfür, hakaret veya cinsel içerikli mesaj.</div>
        </div>
        <form method=\"post\">
          <div class=\"form-group\">
            <textarea name=\"report-text\" placeholder=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 18), "lang", [], "any", false, false, false, 18), "string", [], "any", false, false, false, 18), "discussion", [], "any", false, false, false, 18), "posts", [], "any", false, false, false, 18), "report", [], "any", false, false, false, 18), "placeholder", [], "any", false, false, false, 18), "content", [], "any", false, false, false, 18), "html", null, true);
        echo "\"></textarea>
          </div>
          <button type=\"submit\" class=\"btn btn-app-complete icon no-anim-ui\" data-complete-text=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 20), "lang", [], "any", false, false, false, 20), "string", [], "any", false, false, false, 20), "discussion", [], "any", false, false, false, 20), "posts", [], "any", false, false, false, 20), "report", [], "any", false, false, false, 20), "success", [], "any", false, false, false, 20), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 20), "lang", [], "any", false, false, false, 20), "string", [], "any", false, false, false, 20), "container", [], "any", false, false, false, 20), "buttons", [], "any", false, false, false, 20), "approve", [], "any", false, false, false, 20), "html", null, true);
        echo "</button>
        </form>
        <div class=\"error-message mt-4 text-danger d-none\">
          <span></span>
        </div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "report.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  67 => 18,  56 => 10,  49 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal custom-modal animate slideIn\" id=\"post-report\" data-post-id=\"{{ string.post_id }}\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content shadow-lg rounded\">
      <div class=\"modal-header justify-content-lg-center d-flex\">
        <span class=\"font-weight-bold h5 mb-0 ml-lg-auto mr-lg-auto\">{{ app.sub.lang.string.discussion.posts.report.title }}</span>
        <span class=\"close d-lg-none ml-auto\" data-dismiss=\"modal\" aria-label=\"{{ app.sub.lang.string.container.buttons.close }}\"></span>
      </div>
      <div class=\"modal-body\">
        <div class=\"big-icon flag text-center mb-3\"></div>
        <p class=\"font-weight-normal text-center\">{{ app.sub.lang.string.discussion.posts.report.text }}</p>
        <div class=\"js-ClickableDivs mt-2\" data-ui=\"quick-reporting\">
          <div class=\"bg-white shadow-sm rounded pl-3 pr-3 pb-2 pt-2 mb-2\">Uygunsuz içerik.</div>
          <div class=\"bg-white shadow-sm rounded pl-3 pr-3 pb-2 pt-2 mb-2\">Yanlış veya eksik bilgi.</div>
          <div class=\"bg-white shadow-sm rounded pl-3 pr-3 pb-2 pt-2 mb-3\">Küfür, hakaret veya cinsel içerikli mesaj.</div>
        </div>
        <form method=\"post\">
          <div class=\"form-group\">
            <textarea name=\"report-text\" placeholder=\"{{ app.sub.lang.string.discussion.posts.report.placeholder.content }}\"></textarea>
          </div>
          <button type=\"submit\" class=\"btn btn-app-complete icon no-anim-ui\" data-complete-text=\"{{ app.sub.lang.string.discussion.posts.report.success }}\">{{ app.sub.lang.string.container.buttons.approve }}</button>
        </form>
        <div class=\"error-message mt-4 text-danger d-none\">
          <span></span>
        </div>
      </div>
    </div>
  </div>
</div>", "report.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Post\\report.tpl");
    }
}
