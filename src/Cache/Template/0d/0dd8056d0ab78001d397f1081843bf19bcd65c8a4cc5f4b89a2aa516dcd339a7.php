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

/* privacy.tpl */
class __TwigTemplate_a661219caf58da036e3f7b01bfa7fd3ffd61522afc39f74ab56a724e0f8ddc79 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'app_template_name' => [$this, 'block_app_template_name'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "container.tpl";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("container.tpl", "privacy.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "privacy";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 10), "buildLink", [0 => "indexAction", 1 => []], "method", false, false, false, 10), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 10), "site_title", [], "any", false, false, false, 10), "html", null, true);
        echo "</a></div>
\t\t\t\t\t<div>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 11), "lang", [], "any", false, false, false, 11), "string", [], "any", false, false, false, 11), "pages", [], "any", false, false, false, 11), "breadcrumb", [], "any", false, false, false, 11), "pages", [], "any", false, false, false, 11), "html", null, true);
        echo "</div>
\t\t\t\t\t<div>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 12), "lang", [], "any", false, false, false, 12), "string", [], "any", false, false, false, 12), "pages", [], "any", false, false, false, 12), "breadcrumb", [], "any", false, false, false, 12), "help", [], "any", false, false, false, 12), "html", null, true);
        echo "</div>
\t\t\t\t\t<div>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 13), "lang", [], "any", false, false, false, 13), "string", [], "any", false, false, false, 13), "pages", [], "any", false, false, false, 13), "breadcrumb", [], "any", false, false, false, 13), "privacy", [], "any", false, false, false, 13), "html", null, true);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t";
        // line 18
        $this->loadTemplate("usermenu_member.tpl", "privacy.tpl", 18)->display($context);
        // line 19
        echo "\t\t</div>
\t</div>
\t<aside class=\"col-sm-12\">
\t\t<div class=\"app-box shadow rounded animate slideIn\">
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<h5 class=\"mb-3\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 24), "lang", [], "any", false, false, false, 24), "string", [], "any", false, false, false, 24), "pages", [], "any", false, false, false, 24), "privacy", [], "any", false, false, false, 24), "title", [], "any", false, false, false, 24), "html", null, true);
        echo "</h5>
\t\t\t\t<p>Bu gizlilik politikası sitemizi kullanırken edindiği herhangi bir bilgiyi nasıl kullandığımızı ve nasıl korunduğunu açıklar.</p>
\t\t\t\t<p>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 26), "site_title", [], "any", false, false, false, 26), "html", null, true);
        echo " bilgilerinizi ve gizliliğinizi korumayı taahhüt eder.Siteye sağladığınız kimlik veya herhangi bir bilgi yalnızca bu gizlilik politikası çerçevesi içinde kullanılacaktır.</p>
\t\t\t\t<p>Site buradaki maddeleri veya başlıkları haber vermeksizin değiştirilebilir.Bunları kontrol etmek kullanıcının yükümlülüğüdür.</p>
\t\t\t\t<h5 class=\"font-weight-bold\">Hangi bilgilerinizi depoluyoruz?</h5>
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>İsminiz ve soyisminiz</li>
\t\t\t\t\t\t\t<li>Mail adresiniz</li>
\t\t\t\t\t\t\t<li>Telefon numaranız(istenirse)</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<p>Ek olarak web sitesini kullanırken şu bilgiler depolanır:</p>
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>İp adresiniz</li>
\t\t\t\t\t\t\t<li>Coğrafi konum(Ülke ve şehir bazında)</li>
\t\t\t\t\t\t\t<li>Kullanılan tarayıcı tipi ve versiyonu</li>
\t\t\t\t\t\t\t<li>İşletim sistemi adı ve versiyonu</li>
\t\t\t\t\t\t\t<li>Cihaz adı ve modeli</li>
\t\t\t\t\t\t\t<li>Ziyaret süreleri, site içinde hangi sayfayı gezdiğiniz, ziyaret sayısı</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<h5 class=\"font-weight-bold\">Topladığımız bilgilerle ne yapıyoruz?</h5>
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Dahili kayıt tutma</li>
\t\t\t\t\t\t\t<li>Hesap yönetimi ve kaydı</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<h5 class=\"font-weight-bold\">Güvenlik</h5>
\t\t\t\t<p>Toplanılan bilgilerin güvenliğini size taahhüt ediyoruz.Yetkisiz erişimler ve ifşayı önleme amaçlı çeşitli algoritmalar ve şifreleme prosedürleri uyguladık.</p>
\t\t\t\t<h5 class=\"font-weight-bold\">Çerezler ve İp adresinizi nasıl kullanıyoruz?</h5>
\t\t\t\t<p>Çerezleri, siteye kayıt olmak ve kaydı tarayıcınızda açık tutmak ayrıca iki faktörlü kimlik doğrulaması gibi temel şeyler için kullanıyoruz.Tarayıcınızdan çerezleri ayarlayabilir ve değiştirebilirsiniz fakat bu siteyi kullanmayı tamamen sıfırlayabilir veya hata kodları çıkarabilir.</p>
\t\t\t\t<p>İp adresinizi, mükerrer hesap bloklama, hesap yönetimi gibi temel şeylerde kullanıyoruz.Ip adresiniz asla açık bir şekilde gösterilmez.</p>
\t\t\t\t<h5 class=\"font-weight-bold\">Kişisel bilginizin kontrolü</h5>
\t\t\t\t<p>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 66), "site_title", [], "any", false, false, false, 66), "html", null, true);
        echo ", izniniz olmadıkça hiç bir bilgiyi yasalar gerektirmedikçe üçüncü şahıslara satmayacak, dağıtmayacak veya kiralamayacaktır.Kişisel bilgilerinizi sizin güvenliğiniz için, size bildirme amaçlı kullanabilir.</p>
\t\t\t\t<p>Saklanılan herhangi bir bilginin yanlışlığı, eksikliği için lütfen bizimle iletişime geçiniz.</p>
\t\t\t</div>
\t\t</div>
\t</aside>
\t";
        // line 72
        echo "\t<div hook-action=\"{Mention:App-domEvent-metacontents}\" data-title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 72), "lang", [], "any", false, false, false, 72), "string", [], "any", false, false, false, 72), "pages", [], "any", false, false, false, 72), "privacy", [], "any", false, false, false, 72), "title", [], "any", false, false, false, 72), "html", null, true);
        echo "\"
\t\tdata-meta-description=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 73), "meta_description", [], "any", false, false, false, 73), "html", null, true);
        echo "\"
\t\tdata-og-description=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 74), "meta_description", [], "any", false, false, false, 74), "html", null, true);
        echo "\"
\t\tdata-twitter-description=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 75), "meta_description", [], "any", false, false, false, 75), "html", null, true);
        echo "\" data-og-title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 75), "site_title", [], "any", false, false, false, 75), "html", null, true);
        echo "\"
\t\tdata-twitter-title=\"";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 76), "site_title", [], "any", false, false, false, 76), "html", null, true);
        echo "\" class=\"d-none\">
\t</div>
";
    }

    public function getTemplateName()
    {
        return "privacy.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 76,  164 => 75,  160 => 74,  156 => 73,  151 => 72,  143 => 66,  100 => 26,  95 => 24,  88 => 19,  86 => 18,  78 => 13,  74 => 12,  70 => 11,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'container.tpl' %}

{% block app_template_name 'privacy' %}

{% block content %}
\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div>{{ app.sub.lang.string.pages.breadcrumb.pages }}</div>
\t\t\t\t\t<div>{{ app.sub.lang.string.pages.breadcrumb.help }}</div>
\t\t\t\t\t<div>{{ app.sub.lang.string.pages.breadcrumb.privacy }}</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t{% include 'usermenu_member.tpl' %}
\t\t</div>
\t</div>
\t<aside class=\"col-sm-12\">
\t\t<div class=\"app-box shadow rounded animate slideIn\">
\t\t\t<div class=\"pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t<h5 class=\"mb-3\">{{ app.sub.lang.string.pages.privacy.title }}</h5>
\t\t\t\t<p>Bu gizlilik politikası sitemizi kullanırken edindiği herhangi bir bilgiyi nasıl kullandığımızı ve nasıl korunduğunu açıklar.</p>
\t\t\t\t<p>{{ app.settings.site_title }} bilgilerinizi ve gizliliğinizi korumayı taahhüt eder.Siteye sağladığınız kimlik veya herhangi bir bilgi yalnızca bu gizlilik politikası çerçevesi içinde kullanılacaktır.</p>
\t\t\t\t<p>Site buradaki maddeleri veya başlıkları haber vermeksizin değiştirilebilir.Bunları kontrol etmek kullanıcının yükümlülüğüdür.</p>
\t\t\t\t<h5 class=\"font-weight-bold\">Hangi bilgilerinizi depoluyoruz?</h5>
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>İsminiz ve soyisminiz</li>
\t\t\t\t\t\t\t<li>Mail adresiniz</li>
\t\t\t\t\t\t\t<li>Telefon numaranız(istenirse)</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<p>Ek olarak web sitesini kullanırken şu bilgiler depolanır:</p>
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>İp adresiniz</li>
\t\t\t\t\t\t\t<li>Coğrafi konum(Ülke ve şehir bazında)</li>
\t\t\t\t\t\t\t<li>Kullanılan tarayıcı tipi ve versiyonu</li>
\t\t\t\t\t\t\t<li>İşletim sistemi adı ve versiyonu</li>
\t\t\t\t\t\t\t<li>Cihaz adı ve modeli</li>
\t\t\t\t\t\t\t<li>Ziyaret süreleri, site içinde hangi sayfayı gezdiğiniz, ziyaret sayısı</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<h5 class=\"font-weight-bold\">Topladığımız bilgilerle ne yapıyoruz?</h5>
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Dahili kayıt tutma</li>
\t\t\t\t\t\t\t<li>Hesap yönetimi ve kaydı</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<h5 class=\"font-weight-bold\">Güvenlik</h5>
\t\t\t\t<p>Toplanılan bilgilerin güvenliğini size taahhüt ediyoruz.Yetkisiz erişimler ve ifşayı önleme amaçlı çeşitli algoritmalar ve şifreleme prosedürleri uyguladık.</p>
\t\t\t\t<h5 class=\"font-weight-bold\">Çerezler ve İp adresinizi nasıl kullanıyoruz?</h5>
\t\t\t\t<p>Çerezleri, siteye kayıt olmak ve kaydı tarayıcınızda açık tutmak ayrıca iki faktörlü kimlik doğrulaması gibi temel şeyler için kullanıyoruz.Tarayıcınızdan çerezleri ayarlayabilir ve değiştirebilirsiniz fakat bu siteyi kullanmayı tamamen sıfırlayabilir veya hata kodları çıkarabilir.</p>
\t\t\t\t<p>İp adresinizi, mükerrer hesap bloklama, hesap yönetimi gibi temel şeylerde kullanıyoruz.Ip adresiniz asla açık bir şekilde gösterilmez.</p>
\t\t\t\t<h5 class=\"font-weight-bold\">Kişisel bilginizin kontrolü</h5>
\t\t\t\t<p>{{ app.settings.site_title }}, izniniz olmadıkça hiç bir bilgiyi yasalar gerektirmedikçe üçüncü şahıslara satmayacak, dağıtmayacak veya kiralamayacaktır.Kişisel bilgilerinizi sizin güvenliğiniz için, size bildirme amaçlı kullanabilir.</p>
\t\t\t\t<p>Saklanılan herhangi bir bilginin yanlışlığı, eksikliği için lütfen bizimle iletişime geçiniz.</p>
\t\t\t</div>
\t\t</div>
\t</aside>
\t{# This is includes meta definitions. #}
\t<div hook-action=\"{Mention:App-domEvent-metacontents}\" data-title=\"{{ app.sub.lang.string.pages.privacy.title }}\"
\t\tdata-meta-description=\"{{ app.settings.meta_description }}\"
\t\tdata-og-description=\"{{ app.settings.meta_description }}\"
\t\tdata-twitter-description=\"{{ app.settings.meta_description }}\" data-og-title=\"{{ app.settings.site_title }}\"
\t\tdata-twitter-title=\"{{ app.settings.site_title }}\" class=\"d-none\">
\t</div>
{% endblock %}", "privacy.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Pages\\privacy.tpl");
    }
}
