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

/* updateAttachments.tpl */
class __TwigTemplate_e113e5eaf9b27fad7d1986222ad6f9da905ba0f90f43388ceb2c57fda19752a4 extends Template
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 1), "attachments", [], "any", false, false, false, 1), "getAttachmentsByPostId", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_id", [], "any", false, false, false, 1)], "method", false, false, false, 1)) {
            // line 2
            echo "    <hr>
\t<div class=\"attachment-container mt-3\">    
        <p>";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 4), "lang", [], "any", false, false, false, 4), "string", [], "any", false, false, false, 4), "discussion", [], "any", false, false, false, 4), "posts", [], "any", false, false, false, 4), "attachments", [], "any", false, false, false, 4), "text", [], "any", false, false, false, 4), "html", null, true);
            echo "</p>
        <div class=\"post-attachments d-flex flex-lg-row flex-wrap\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 6), "attachments", [], "any", false, false, false, 6), "getAttachmentsByPostId", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "post_id", [], "any", false, false, false, 6)], "method", false, false, false, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 7
                echo "                ";
                $context["mime"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 7), "attachments", [], "any", false, false, false, 7), "getMime", [0 => twig_get_attribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 7)], "method", false, false, false, 7);
                // line 8
                echo "                <div class=\"attachment d-flex align-items-center text-center shadow rounded mr-3 mb-3\" data-attachment-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "attach_id", [], "any", false, false, false, 8), "html", null, true);
                echo "\" data-owner-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "user_id", [], "any", false, false, false, 8), "html", null, true);
                echo "\" data-mime-type=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mime"] ?? null), "mime_type", [], "any", false, false, false, 8), "html", null, true);
                echo "\">
                    <div class=\"attachment-icon\">
                        ";
                // line 10
                if ((twig_get_attribute($this->env, $this->source, ($context["mime"] ?? null), "icon", [], "any", false, false, false, 10) === "")) {
                    // line 11
                    echo "                            <i class=\"far fa-file-alt\"></i>
                        ";
                } else {
                    // line 13
                    echo "                            <i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mime"] ?? null), "icon", [], "any", false, false, false, 13), "html", null, true);
                    echo "\"></i>
                        ";
                }
                // line 15
                echo "                    </div>
                    <div class=\"text-left ml-2\">
                        <span class=\"font-weight-bold mt-0 mb-0\">
                            <a title=\"";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 18), "html", null, true);
                echo "\" target=\"_blank\" class=\"no-tooltip text-dark\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 18), "buildLink", [0 => "attachment", 1 => ["section" => twig_get_attribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 18), "show" => twig_get_attribute($this->env, $this->source, $context["attachment"], "attach_id", [], "any", false, false, false, 18)]], "method", false, false, false, 18), "html", null, true);
                echo "\">
                                ";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 19), "html", null, true);
                echo "
                            </a>
                        </span>
                        <small class=\"text-muted d-block\">";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\Bytes']->formatBytes(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 22), "attachments", [], "any", false, false, false, 22), "getAttachmentSize", [0 => twig_get_attribute($this->env, $this->source, $context["attachment"], "attach_id", [], "any", false, false, false, 22)], "method", false, false, false, 22)), "html", null, true);
                echo "</small>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "updateAttachments.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 26,  94 => 22,  88 => 19,  82 => 18,  77 => 15,  71 => 13,  67 => 11,  65 => 10,  55 => 8,  52 => 7,  48 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if app.string.attachments.getAttachmentsByPostId(item.post_id) %}
    <hr>
\t<div class=\"attachment-container mt-3\">    
        <p>{{ app.sub.lang.string.discussion.posts.attachments.text }}</p>
        <div class=\"post-attachments d-flex flex-lg-row flex-wrap\">
            {% for attachment in app.string.attachments.getAttachmentsByPostId(item.post_id) %}
                {% set mime = app.string.attachments.getMime(attachment.filename) %}
                <div class=\"attachment d-flex align-items-center text-center shadow rounded mr-3 mb-3\" data-attachment-id=\"{{ attachment.attach_id }}\" data-owner-id=\"{{ attachment.user_id }}\" data-mime-type=\"{{ mime.mime_type }}\">
                    <div class=\"attachment-icon\">
                        {% if mime.icon is same as('') %}
                            <i class=\"far fa-file-alt\"></i>
                        {% else %}
                            <i class=\"{{ mime.icon }}\"></i>
                        {% endif %}
                    </div>
                    <div class=\"text-left ml-2\">
                        <span class=\"font-weight-bold mt-0 mb-0\">
                            <a title=\"{{ attachment.filename }}\" target=\"_blank\" class=\"no-tooltip text-dark\" href=\"{{ app.phrase.buildLink('attachment', {'section': attachment.filename, 'show': attachment.attach_id}) }}\">
                                {{ attachment.filename }}
                            </a>
                        </span>
                        <small class=\"text-muted d-block\">{{ app.string.attachments.getAttachmentSize(attachment.attach_id)|formatBytes }}</small>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
{% endif %}", "updateAttachments.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Post\\updateAttachments.tpl");
    }
}
