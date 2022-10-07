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

/* move.tpl */
class __TwigTemplate_c4aaef5288e86c663a7cfa5697528a13 extends Template
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
        echo "<div class=\"modal custom-modal animate slideIn\" id=\"move-discussion\" data-discussion-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "discussion", [], "any", false, false, false, 1), "discussion_id", [], "any", false, false, false, 1), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content shadow-lg rounded\">
      <div class=\"modal-header justify-content-lg-center d-flex\">
        <span class=\"font-weight-bold h5 mb-0 ml-lg-auto mr-lg-auto\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 5), "lang", [], "any", false, false, false, 5), "string", [], "any", false, false, false, 5), "discussion", [], "any", false, false, false, 5), "moderation", [], "any", false, false, false, 5), "move", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</span>
        <span class=\"close d-lg-none ml-auto\" data-dismiss=\"modal\" aria-label=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 6), "lang", [], "any", false, false, false, 6), "string", [], "any", false, false, false, 6), "container", [], "any", false, false, false, 6), "buttons", [], "any", false, false, false, 6), "close", [], "any", false, false, false, 6), "html", null, true);
        echo "\"></span>
      </div>
      <div class=\"modal-body\">
        <div class=\"big-icon move text-center mb-3\"></div>
        <form method=\"post\">
          <div class=\"form-group\">
            <div>
              <select class=\"selectpicker ml-lg-auto w-100\" data-live-search=\"true\" title=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 13), "lang", [], "any", false, false, false, 13), "string", [], "any", false, false, false, 13), "container", [], "any", false, false, false, 13), "editor", [], "any", false, false, false, 13), "placeholder", [], "any", false, false, false, 13), "forum", [], "any", false, false, false, 13), "html", null, true);
        echo "\" name=\"forum\">
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 14), "forum", [], "any", false, false, false, 14), "getForumList", [], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "forum_id", [], "any", false, false, false, 15), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 15), "html", null, true);
            echo "</option>
                  ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 16), "forum", [], "any", false, false, false, 16), "getForumList", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "forum_id", [], "any", false, false, false, 16)], "method", false, false, false, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                // line 17
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "forum_id", [], "any", false, false, false, 17), "html", null, true);
                echo "\">-- ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "title", [], "any", false, false, false, 17), "html", null, true);
                echo "</option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "              </select>
            </div>
          </div>
          <button type=\"submit\" class=\"btn btn-app-complete icon no-anim-ui\" data-complete-text=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 23), "lang", [], "any", false, false, false, 23), "string", [], "any", false, false, false, 23), "discussion", [], "any", false, false, false, 23), "posts", [], "any", false, false, false, 23), "edit", [], "any", false, false, false, 23), "success", [], "any", false, false, false, 23), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 23), "lang", [], "any", false, false, false, 23), "string", [], "any", false, false, false, 23), "container", [], "any", false, false, false, 23), "buttons", [], "any", false, false, false, 23), "approve", [], "any", false, false, false, 23), "html", null, true);
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
        return "move.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 23,  95 => 20,  89 => 19,  78 => 17,  74 => 16,  67 => 15,  63 => 14,  59 => 13,  49 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal custom-modal animate slideIn\" id=\"move-discussion\" data-discussion-id=\"{{ string.discussion.discussion_id }}\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content shadow-lg rounded\">
      <div class=\"modal-header justify-content-lg-center d-flex\">
        <span class=\"font-weight-bold h5 mb-0 ml-lg-auto mr-lg-auto\">{{ app.sub.lang.string.discussion.moderation.move.title }}</span>
        <span class=\"close d-lg-none ml-auto\" data-dismiss=\"modal\" aria-label=\"{{ app.sub.lang.string.container.buttons.close }}\"></span>
      </div>
      <div class=\"modal-body\">
        <div class=\"big-icon move text-center mb-3\"></div>
        <form method=\"post\">
          <div class=\"form-group\">
            <div>
              <select class=\"selectpicker ml-lg-auto w-100\" data-live-search=\"true\" title=\"{{ app.sub.lang.string.container.editor.placeholder.forum }}\" name=\"forum\">
                {% for item in app.string.forum.getForumList() %}
                  <option value=\"{{ item.forum_id }}\">{{ item.title }}</option>
                  {% for sub in app.string.forum.getForumList(item.forum_id) %}
                    <option value=\"{{ sub.forum_id }}\">-- {{ sub.title }}</option>
                  {% endfor %}
                {% endfor %}
              </select>
            </div>
          </div>
          <button type=\"submit\" class=\"btn btn-app-complete icon no-anim-ui\" data-complete-text=\"{{ app.sub.lang.string.discussion.posts.edit.success }}\">{{ app.sub.lang.string.container.buttons.approve }}</button>
        </form>
        <div class=\"error-message mt-4 text-danger d-none\">
          <span></span>
        </div>
      </div>
    </div>
  </div>
</div>", "move.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Discussion\\move.tpl");
    }
}
