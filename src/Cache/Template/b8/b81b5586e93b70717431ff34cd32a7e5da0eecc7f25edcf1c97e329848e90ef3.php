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
class __TwigTemplate_acc95e08e4709e11f9c27a4bea55a76fca0cd47feaf450ff2733e8d0918e1898 extends Template
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
        $context['_iterated'] = false;
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
            ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "sentences", [], "any", false, false, false, 10)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["item"]] ?? null) : null), "search", [], "any", false, false, false, 10)) {
                // line 11
                echo "                <div class=\"mx-2\">
                    <span data-language=\"";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "sentences", [], "any", false, false, false, 12)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["item"]] ?? null) : null), "language", [], "any", false, false, false, 12), "html", null, true);
                echo "\" class=\"fi\"></span>
                </div>
            ";
            }
            // line 15
            echo "            <a class=\"head-title d-flex flex-column justify-content-center mr-auto w-100\"
                href=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 16), "buildLink", [0 => "adminLanguages", 1 => []], "method", false, false, false, 16), "html", null, true);
            echo "?editPhrase/?q=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "sentences", [], "any", false, false, false, 16)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["item"]] ?? null) : null), "link", [], "any", false, false, false, 16), "html", null, true);
            echo "&defaultNav=sentences\">
                <div class=\"text-break\">
                    ";
            // line 18
            if (twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "sentences", [], "any", false, false, false, 18)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["item"]] ?? null) : null), "search", [], "any", false, false, false, 18)) {
                // line 19
                echo "                        <span class=\"phrase\" data-text=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "sentences", [], "any", false, false, false, 19)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[$context["item"]] ?? null) : null), "phrasePath", [], "any", false, false, false, 19), "html", null, true);
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "sentences", [], "any", false, false, false, 19)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[$context["item"]] ?? null) : null), "phrasePath", [], "any", false, false, false, 19), "html", null, true);
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</span>
                        <div class=\"text text-dark\">";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "sentences", [], "any", false, false, false, 20)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[$context["item"]] ?? null) : null), "text", [], "any", false, false, false, 20), "html", null, true);
                echo "</div>
                    ";
            } else {
                // line 22
                echo "                        <span class=\"phrase\" data-text=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "phrasePath", [], "any", false, false, false, 22), "html", null, true);
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "phrasePath", [], "any", false, false, false, 22), "html", null, true);
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</span>
                        <div class=\"text text-dark d-none\">";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "sentences", [], "any", false, false, false, 23)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[$context["item"]] ?? null) : null), "text", [], "any", false, false, false, 23), "html", null, true);
                echo "</div>
                    ";
            }
            // line 25
            echo "                </div>
            </a>
            ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "sentences", [], "any", false, false, false, 27)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[$context["item"]] ?? null) : null), "search", [], "any", false, false, false, 27)) {
                // line 28
                echo "                ";
                if ( !(twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "sentences", [], "any", false, false, false, 28)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[$context["item"]] ?? null) : null), "path", [], "any", false, false, false, 28) === "__null")) {
                    // line 29
                    echo "                    <div class=\"d-flex align-items-center mx-2\">
                        <i class=\"fas fa-puzzle-piece h5 mb-0 mr-1\"></i>
                        <span class=\"font-weight-bold\">";
                    // line 31
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "sentences", [], "any", false, false, false, 31)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[$context["item"]] ?? null) : null), "path", [], "any", false, false, false, 31), "html", null, true);
                    echo "</span>
                    </div>
                ";
                }
                // line 33
                echo "    
            ";
            }
            // line 35
            echo "        </div>
    </div>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "    <div class=\"d-flex justify-content-center align-items-center\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 38), "lang", [], "any", false, false, false, 38), "string", [], "any", false, false, false, 38), "admin", [], "any", false, false, false, 38), "languages", [], "any", false, false, false, 38), "sentences", [], "any", false, false, false, 38), "search", [], "any", false, false, false, 38), "no_results", [], "any", false, false, false, 38), "html", null, true);
            echo "</div>
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
        return array (  136 => 38,  129 => 35,  125 => 33,  119 => 31,  115 => 29,  112 => 28,  110 => 27,  106 => 25,  101 => 23,  92 => 22,  87 => 20,  78 => 19,  76 => 18,  69 => 16,  66 => 15,  60 => 12,  57 => 11,  55 => 10,  45 => 3,  42 => 2,  37 => 1,);
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
            {% if string.sentences[item].search %}
                <div class=\"mx-2\">
                    <span data-language=\"{{ string.sentences[item].language }}\" class=\"fi\"></span>
                </div>
            {% endif %}
            <a class=\"head-title d-flex flex-column justify-content-center mr-auto w-100\"
                href=\"{{ app.phrase.buildLink('adminLanguages', {}) }}?editPhrase/?q={{ string.sentences[item].link }}&defaultNav=sentences\">
                <div class=\"text-break\">
                    {% if string.sentences[item].search %}
                        <span class=\"phrase\" data-text=\"{{ string.sentences[item].phrasePath }}{{ item }}\">{{ string.sentences[item].phrasePath }}{{ item }}</span>
                        <div class=\"text text-dark\">{{ string.sentences[item].text }}</div>
                    {% else %}
                        <span class=\"phrase\" data-text=\"{{ string.phrasePath }}{{ item }}\">{{ string.phrasePath }}{{ item }}</span>
                        <div class=\"text text-dark d-none\">{{ string.sentences[item].text }}</div>
                    {% endif %}
                </div>
            </a>
            {% if string.sentences[item].search %}
                {% if not string.sentences[item].path is same as('__null') %}
                    <div class=\"d-flex align-items-center mx-2\">
                        <i class=\"fas fa-puzzle-piece h5 mb-0 mr-1\"></i>
                        <span class=\"font-weight-bold\">{{ string.sentences[item].path }}</span>
                    </div>
                {% endif %}    
            {% endif %}
        </div>
    </div>
{% else %}
    <div class=\"d-flex justify-content-center align-items-center\">{{ app.sub.lang.string.admin.languages.sentences.search.no_results }}</div>
{% endfor %}", "@ComponentBundle_Admin/Languages/sentence_list.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Mention\\Templates\\Admin\\Languages\\sentence_list.tpl");
    }
}
