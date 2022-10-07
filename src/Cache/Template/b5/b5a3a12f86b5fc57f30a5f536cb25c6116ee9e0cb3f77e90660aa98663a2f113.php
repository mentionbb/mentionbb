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

/* @ComponentBundle_Admin/Languages/sentence_list.tpl */
class __TwigTemplate_71ec33336e515721b73643887112836867f192ef2fa7cfcf2d7cc1dd43292e80 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "sentences", [], "any", false, false, false, 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "    <div class=\"app-language-phrase setting-group list bg-white text-dark shadow-sm position-relative rounded\">
        <div class=\"nested-items\" data-language-id=\"";
            // line 3
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
            <div class=\"mx-2 mt-1\">
                <i class=\"fas fa-language h4 mb-0\"></i>
            </div>
            <div class=\"mx-2 mt-1\">
                <i class=\"far fa-edit h5 mb-0\"></i>
            </div>
            <a class=\"head-title d-flex flex-column justify-content-center mr-auto w-100\"
                href=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 11), "buildLink", [0 => "adminLanguages", 1 => []], "method", false, false, false, 11), "html", null, true);
            echo "?editPhrase/?f=[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "file", [], "any", false, false, false, 11), "html", null, true);
            echo "]&phrasePath=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "phraseNull", [], "any", false, false, false, 11), "html", null, true);
            echo "&phrase=[";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "]&language=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "language", [], "any", false, false, false, 11), "html", null, true);
            echo "&defaultNav=sentences\">
                <div class=\"text-break\">
                    <span class=\"phrase\" data-text=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "phrasePath", [], "any", false, false, false, 13), "html", null, true);
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "phrasePath", [], "any", false, false, false, 13), "html", null, true);
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</span>
                    <div class=\"text d-none\">";
            // line 14
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "sentences", [], "any", false, false, false, 14)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["item"]] ?? null) : null), "html", null, true);
            echo "</div>
                </div>
            </a>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@ComponentBundle_Admin/Languages/sentence_list.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 14,  68 => 13,  55 => 11,  44 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for item in string.sentences|keys %}
    <div class=\"app-language-phrase setting-group list bg-white text-dark shadow-sm position-relative rounded\">
        <div class=\"nested-items\" data-language-id=\"{{ item }}\">
            <div class=\"mx-2 mt-1\">
                <i class=\"fas fa-language h4 mb-0\"></i>
            </div>
            <div class=\"mx-2 mt-1\">
                <i class=\"far fa-edit h5 mb-0\"></i>
            </div>
            <a class=\"head-title d-flex flex-column justify-content-center mr-auto w-100\"
                href=\"{{ app.phrase.buildLink('adminLanguages', {}) }}?editPhrase/?f=[{{ string.file }}]&phrasePath={{ string.phraseNull }}&phrase=[{{ item }}]&language={{ string.language }}&defaultNav=sentences\">
                <div class=\"text-break\">
                    <span class=\"phrase\" data-text=\"{{ string.phrasePath }}{{ item }}\">{{ string.phrasePath }}{{ item }}</span>
                    <div class=\"text d-none\">{{ string.sentences[item] }}</div>
                </div>
            </a>
        </div>
    </div>
{% endfor %}", "@ComponentBundle_Admin/Languages/sentence_list.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Mention\\Templates\\Admin\\Languages\\sentence_list.tpl");
    }
}
