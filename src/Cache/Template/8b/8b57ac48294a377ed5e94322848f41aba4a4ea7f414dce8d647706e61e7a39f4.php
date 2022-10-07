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

/* edit.tpl */
class __TwigTemplate_9a9daa8a6e6afd661796f4894b660f8f2f6f80efe105f0911c3bd0825597d07b extends Template
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
        echo "<div class=\"modal custom-modal animate slideIn\" id=\"post-edit\" data-post-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post_id", [], "any", false, false, false, 1), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content shadow-lg rounded\">
      <div class=\"modal-header justify-content-lg-center d-flex\">
        <span class=\"font-weight-bold h5 mb-0 ml-lg-auto mr-lg-auto\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 5), "lang", [], "any", false, false, false, 5), "string", [], "any", false, false, false, 5), "discussion", [], "any", false, false, false, 5), "posts", [], "any", false, false, false, 5), "edit", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</span>
        <span class=\"close d-lg-none ml-auto\" data-dismiss=\"modal\" aria-label=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 6), "lang", [], "any", false, false, false, 6), "string", [], "any", false, false, false, 6), "container", [], "any", false, false, false, 6), "buttons", [], "any", false, false, false, 6), "close", [], "any", false, false, false, 6), "html", null, true);
        echo "\"></span>
      </div>
      <div class=\"modal-body\">
        <form method=\"post\" enctype=\"multipart/form-data\">
          ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "is_firstpost", [], "any", false, false, false, 10)) {
            // line 11
            echo "            <div class=\"form-group\">
              <input tyoe=\"text\" name=\"post-title\" placeholder=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 12), "lang", [], "any", false, false, false, 12), "string", [], "any", false, false, false, 12), "discussion", [], "any", false, false, false, 12), "posts", [], "any", false, false, false, 12), "edit", [], "any", false, false, false, 12), "placeholder", [], "any", false, false, false, 12), "title", [], "any", false, false, false, 12), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "discussion", [], "any", false, false, false, 12), "title", [], "any", false, false, false, 12), "html", null, true);
            echo "\" />
            </div>
          ";
        }
        // line 15
        echo "          <div class=\"form-group\">
            <textarea id=\"edit_";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post_id", [], "any", false, false, false, 16), "html", null, true);
        echo "\" name=\"content\"></textarea>
          </div>
          ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 18), "attachments", [], "any", false, false, false, 18), "getAttachmentsByPostId", [0 => twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post_id", [], "any", false, false, false, 18)], "method", false, false, false, 18)) {
            // line 19
            echo "\t\t\t\t    <hr>
\t\t\t\t    <div class=\"attachment-container mt-3\">
\t\t\t\t      <p>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 21), "lang", [], "any", false, false, false, 21), "string", [], "any", false, false, false, 21), "discussion", [], "any", false, false, false, 21), "posts", [], "any", false, false, false, 21), "attachments", [], "any", false, false, false, 21), "text", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
\t\t\t\t      <div class=\"post-attachments edit-attachments d-flex flex-lg-row flex-wrap\">
\t\t\t\t\t      ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 23), "attachments", [], "any", false, false, false, 23), "getAttachmentsByPostId", [0 => twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post_id", [], "any", false, false, false, 23)], "method", false, false, false, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 24
                echo "\t\t\t\t\t        ";
                $context["mime"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 24), "attachments", [], "any", false, false, false, 24), "getMime", [0 => twig_get_attribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 24)], "method", false, false, false, 24);
                // line 25
                echo "\t\t\t\t\t        <div class=\"attachment d-flex align-items-center text-center shadow rounded mr-3 mb-3\" data-attachment-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "attach_id", [], "any", false, false, false, 25), "html", null, true);
                echo "\" data-owner-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "user_id", [], "any", false, false, false, 25), "html", null, true);
                echo "\" data-mime-type=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mime"] ?? null), "mime_type", [], "any", false, false, false, 25), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t      <div class=\"attachment-icon\">
\t\t\t\t\t\t\t\t        ";
                // line 27
                if ((twig_get_attribute($this->env, $this->source, ($context["mime"] ?? null), "icon", [], "any", false, false, false, 27) === "")) {
                    // line 28
                    echo "\t\t\t\t\t\t\t\t          <i class=\"far fa-file-alt\"></i>
\t\t\t\t\t\t\t\t        ";
                } else {
                    // line 30
                    echo "\t\t\t\t\t\t\t\t          <i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mime"] ?? null), "icon", [], "any", false, false, false, 30), "html", null, true);
                    echo "\"></i>
\t\t\t\t\t\t\t\t        ";
                }
                // line 32
                echo "\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t    \t<div class=\"overflow-hidden text-left ml-2\">
\t\t\t\t\t\t\t\t      <span title=\"";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 34), "html", null, true);
                echo "\" class=\"font-weight-bold mt-0 mb-0\">
\t\t\t\t\t\t\t\t          ";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 35), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t      </span>
\t\t\t\t\t\t\t\t      <small class=\"text-muted d-block\">";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\Bytes']->formatBytes(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 37), "attachments", [], "any", false, false, false, 37), "getAttachmentSize", [0 => twig_get_attribute($this->env, $this->source, $context["attachment"], "attach_id", [], "any", false, false, false, 37)], "method", false, false, false, 37)), "html", null, true);
                echo "</small>
\t\t\t\t\t\t\t      </div>
                    <div class=\"ml-auto\">
                      <a class=\"no-tooltip\" title=\"";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 40), "lang", [], "any", false, false, false, 40), "string", [], "any", false, false, false, 40), "container", [], "any", false, false, false, 40), "buttons", [], "any", false, false, false, 40), "delete", [], "any", false, false, false, 40), "html", null, true);
                echo "\" href=\"#\"></a>
                    </div>
\t\t\t\t\t\t      </div>
\t\t\t\t\t      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t\t\t\t      </div>
\t\t\t\t    </div>
\t\t\t\t  ";
        }
        // line 47
        echo "          <div class=\"form-group modal-file\">
            <div class=\"row ml-auto mr-auto\">
              <label for=\"postAttachment\" class=\"col-sm-2 col-form-label\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 49), "lang", [], "any", false, false, false, 49), "string", [], "any", false, false, false, 49), "container", [], "any", false, false, false, 49), "editor", [], "any", false, false, false, 49), "next", [], "any", false, false, false, 49), "attachment", [], "any", false, false, false, 49), "title", [], "any", false, false, false, 49), "html", null, true);
        echo "</label>
              <div class=\"custom-file h-auto col-sm-10\">
                <input type=\"file\" class=\"custom-file-input p-0\" id=\"discussionAttachment_";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post_id", [], "any", false, false, false, 51), "html", null, true);
        echo "\" multiple=\"multiple\" name=\"edit_post_attachment\" accept=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 51), "editor", [], "any", false, false, false, 51), "attachments", [], "any", false, false, false, 51), "getAllowedExtensionsForInput", [], "method", false, false, false, 51), "html", null, true);
        echo "\">
                <label class=\"custom-file-label shadow-sm\" for=\"discussionAttachment_";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post_id", [], "any", false, false, false, 52), "html", null, true);
        echo "\" data-text=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 52), "lang", [], "any", false, false, false, 52), "string", [], "any", false, false, false, 52), "container", [], "any", false, false, false, 52), "buttons", [], "any", false, false, false, 52), "browse", [], "any", false, false, false, 52), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 52), "lang", [], "any", false, false, false, 52), "string", [], "any", false, false, false, 52), "container", [], "any", false, false, false, 52), "buttons", [], "any", false, false, false, 52), "select_file", [], "any", false, false, false, 52), "html", null, true);
        echo "</label>
                <small id=\"discussionAttachment_Size\" class=\"form-text text-muted mt-lg-1 mt-2\">";
        // line 53
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 53), "lang", [], "any", false, false, false, 53), "parse", [], "any", false, false, false, 53), "Parse", [0 => "container.editor.next.attachment.max_size_text", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 53), "attachment_max_size", [], "any", false, false, false, 53)], "method", false, false, false, 53);
        echo "</small>
              </div>
            </div>
          </div>
          <button type=\"submit\" class=\"btn btn-app-complete icon no-anim-ui\" data-complete-text=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 57), "lang", [], "any", false, false, false, 57), "string", [], "any", false, false, false, 57), "discussion", [], "any", false, false, false, 57), "posts", [], "any", false, false, false, 57), "edit", [], "any", false, false, false, 57), "success", [], "any", false, false, false, 57), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 57), "lang", [], "any", false, false, false, 57), "string", [], "any", false, false, false, 57), "container", [], "any", false, false, false, 57), "buttons", [], "any", false, false, false, 57), "approve", [], "any", false, false, false, 57), "html", null, true);
        echo "</button>
        </form>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "edit.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 57,  174 => 53,  166 => 52,  160 => 51,  155 => 49,  151 => 47,  146 => 44,  136 => 40,  130 => 37,  125 => 35,  121 => 34,  117 => 32,  111 => 30,  107 => 28,  105 => 27,  95 => 25,  92 => 24,  88 => 23,  83 => 21,  79 => 19,  77 => 18,  72 => 16,  69 => 15,  61 => 12,  58 => 11,  56 => 10,  49 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal custom-modal animate slideIn\" id=\"post-edit\" data-post-id=\"{{ string.post_id }}\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content shadow-lg rounded\">
      <div class=\"modal-header justify-content-lg-center d-flex\">
        <span class=\"font-weight-bold h5 mb-0 ml-lg-auto mr-lg-auto\">{{ app.sub.lang.string.discussion.posts.edit.title }}</span>
        <span class=\"close d-lg-none ml-auto\" data-dismiss=\"modal\" aria-label=\"{{ app.sub.lang.string.container.buttons.close }}\"></span>
      </div>
      <div class=\"modal-body\">
        <form method=\"post\" enctype=\"multipart/form-data\">
          {% if string.is_firstpost %}
            <div class=\"form-group\">
              <input tyoe=\"text\" name=\"post-title\" placeholder=\"{{ app.sub.lang.string.discussion.posts.edit.placeholder.title }}\" value=\"{{ string.discussion.title }}\" />
            </div>
          {% endif %}
          <div class=\"form-group\">
            <textarea id=\"edit_{{ string.post_id }}\" name=\"content\"></textarea>
          </div>
          {% if app.string.attachments.getAttachmentsByPostId(string.post_id) %}
\t\t\t\t    <hr>
\t\t\t\t    <div class=\"attachment-container mt-3\">
\t\t\t\t      <p>{{ app.sub.lang.string.discussion.posts.attachments.text }}</p>
\t\t\t\t      <div class=\"post-attachments edit-attachments d-flex flex-lg-row flex-wrap\">
\t\t\t\t\t      {% for attachment in app.string.attachments.getAttachmentsByPostId(string.post_id) %}
\t\t\t\t\t        {% set mime = app.string.attachments.getMime(attachment.filename) %}
\t\t\t\t\t        <div class=\"attachment d-flex align-items-center text-center shadow rounded mr-3 mb-3\" data-attachment-id=\"{{ attachment.attach_id }}\" data-owner-id=\"{{ attachment.user_id }}\" data-mime-type=\"{{ mime.mime_type }}\">
\t\t\t\t\t\t\t      <div class=\"attachment-icon\">
\t\t\t\t\t\t\t\t        {% if mime.icon is same as('') %}
\t\t\t\t\t\t\t\t          <i class=\"far fa-file-alt\"></i>
\t\t\t\t\t\t\t\t        {% else %}
\t\t\t\t\t\t\t\t          <i class=\"{{ mime.icon }}\"></i>
\t\t\t\t\t\t\t\t        {% endif %}
\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t    \t<div class=\"overflow-hidden text-left ml-2\">
\t\t\t\t\t\t\t\t      <span title=\"{{ attachment.filename }}\" class=\"font-weight-bold mt-0 mb-0\">
\t\t\t\t\t\t\t\t          {{ attachment.filename }}
\t\t\t\t\t\t\t\t      </span>
\t\t\t\t\t\t\t\t      <small class=\"text-muted d-block\">{{ app.string.attachments.getAttachmentSize(attachment.attach_id)|formatBytes }}</small>
\t\t\t\t\t\t\t      </div>
                    <div class=\"ml-auto\">
                      <a class=\"no-tooltip\" title=\"{{ app.sub.lang.string.container.buttons.delete }}\" href=\"#\"></a>
                    </div>
\t\t\t\t\t\t      </div>
\t\t\t\t\t      {% endfor %}
\t\t\t\t      </div>
\t\t\t\t    </div>
\t\t\t\t  {% endif %}
          <div class=\"form-group modal-file\">
            <div class=\"row ml-auto mr-auto\">
              <label for=\"postAttachment\" class=\"col-sm-2 col-form-label\">{{ app.sub.lang.string.container.editor.next.attachment.title }}</label>
              <div class=\"custom-file h-auto col-sm-10\">
                <input type=\"file\" class=\"custom-file-input p-0\" id=\"discussionAttachment_{{ string.post_id }}\" multiple=\"multiple\" name=\"edit_post_attachment\" accept=\"{{ app.sub.editor.attachments.getAllowedExtensionsForInput() }}\">
                <label class=\"custom-file-label shadow-sm\" for=\"discussionAttachment_{{ string.post_id }}\" data-text=\"{{ app.sub.lang.string.container.buttons.browse }}\">{{ app.sub.lang.string.container.buttons.select_file }}</label>
                <small id=\"discussionAttachment_Size\" class=\"form-text text-muted mt-lg-1 mt-2\">{{ app.sub.lang.parse.Parse('container.editor.next.attachment.max_size_text', app.settings.attachment_max_size)|raw }}</small>
              </div>
            </div>
          </div>
          <button type=\"submit\" class=\"btn btn-app-complete icon no-anim-ui\" data-complete-text=\"{{ app.sub.lang.string.discussion.posts.edit.success }}\">{{ app.sub.lang.string.container.buttons.approve }}</button>
        </form>
      </div>
    </div>
  </div>
</div>", "edit.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Post\\edit.tpl");
    }
}
