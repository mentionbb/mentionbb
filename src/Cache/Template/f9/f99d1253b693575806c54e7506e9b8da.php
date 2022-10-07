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

/* faq.tpl */
class __TwigTemplate_fee3d34c8f8025209f89190946528f89 extends Template
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
        $this->parent = $this->loadTemplate("container.tpl", "faq.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "faq";
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 13), "lang", [], "any", false, false, false, 13), "string", [], "any", false, false, false, 13), "pages", [], "any", false, false, false, 13), "breadcrumb", [], "any", false, false, false, 13), "faq", [], "any", false, false, false, 13), "html", null, true);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t";
        // line 18
        $this->loadTemplate("usermenu_member.tpl", "faq.tpl", 18)->display($context);
        // line 19
        echo "\t\t</div>
\t</div>
\t<aside class=\"col-sm-3 mb-4 pr-4\">
\t\t<div class=\"card app-forums bg-white rounded shadow mb-4\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<h6 class=\"font-weight-bold\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 24), "lang", [], "any", false, false, false, 24), "string", [], "any", false, false, false, 24), "pages", [], "any", false, false, false, 24), "faq", [], "any", false, false, false, 24), "tabs", [], "any", false, false, false, 24), "title", [], "any", false, false, false, 24), "html", null, true);
        echo "</h6>
\t\t\t</div>
\t\t\t<article class=\"card-group-item\">
\t\t\t\t<div class=\"filter-content\">
\t\t\t\t\t<div class=\"list-group list-group-flush\">
\t\t\t\t\t\t<a href=\"#\" data-tab=\"terms\" data-ui=\"account-tab-item\" class=\"list-group-item active\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 29), "lang", [], "any", false, false, false, 29), "string", [], "any", false, false, false, 29), "pages", [], "any", false, false, false, 29), "faq", [], "any", false, false, false, 29), "tabs", [], "any", false, false, false, 29), "privacy", [], "any", false, false, false, 29), "html", null, true);
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"list-group list-group-flush\">
\t\t\t\t\t\t<a href=\"#\" data-tab=\"resource-standarts\" data-ui=\"account-tab-item\" class=\"list-group-item\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 32), "lang", [], "any", false, false, false, 32), "string", [], "any", false, false, false, 32), "pages", [], "any", false, false, false, 32), "faq", [], "any", false, false, false, 32), "tabs", [], "any", false, false, false, 32), "resource_standarts", [], "any", false, false, false, 32), "html", null, true);
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</article>
\t\t</div>
\t</aside>
\t<aside class=\"col-sm-9\">
\t\t<div class=\"app-tab-container\">
\t\t\t<div class=\"tab-content terms\">
\t\t\t\t<div class=\"app-box shadow rounded animate slideIn\">
\t\t\t\t\t<div class=\"app-content pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t\t\t<h5 class=\"mb-3\">";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 43), "lang", [], "any", false, false, false, 43), "string", [], "any", false, false, false, 43), "pages", [], "any", false, false, false, 43), "faq", [], "any", false, false, false, 43), "tabs", [], "any", false, false, false, 43), "privacy", [], "any", false, false, false, 43), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t<p>Bu yazı biraz uzun olmakla birlikte detaylı bilgi içermektedir.Lütfen sabırlı olun her şey düzgün bir topluluğa sahip olmak içindir, teşekkürler.</p>
\t\t\t\t\t\t<p>Bu web sitesinde yazılan her içerikten ve kullanıcılardan sitenin yayıncısı sorumlu değildir.Gönderilen içerikler, yazılar kullanıcının kendi görüşleri ve ifadesidir.</p>
\t\t\t\t\t\t<p>Site, 13 yaş ve üzeri için uygundur eğer bu yaş altındaysanız lütfen kayıt olmayın kayıt olduğunuz takdirde bu yaştan daha büyük olduğunuzu beyan etmiş olursunuz.</p>
\t\t\t\t\t\t<p>Gönderdiğiniz içerikler ve yazılar bu sitenin yöneticileri ve onlara bağlı yöneticiler tarafından ihtiyaç durumunda kontrol edilebilir veya spam amaçlı üçüncü taraf uygulamalara gönderilebilir özel veya kişisel bir bilginizi lütfen yazmayın.</p>
\t\t\t\t\t\t<p>Bu web sitesi içinde küfür, hakaret, nefret, tehtid edici veya etnik kökenlere saygısızlık, siyasal, cinsiyet ve ırk ayrımı, telif unsuru içeren herhangi bir link, içerik, fotoğraf veya yasadışı faaliyet içeren, başkalarının kişisel bilgilerini içeren söz konusu içerik veya davranışın verdiği bütün zararlardan kullanıcı kendi sorumludur ve yöneticilerin bu mesajları istenilirse gerekli mecralara ileteceğini ve yayından kaldırabileceğini kabul etmiş olursunuz.</p>
\t\t\t\t\t\t<p>Yazmış olduğunuz bir yazıyı veya içeriği herhangi bir zamanda dilediğiniz takdirde kaldırabilir veya silebilirsiniz.İçeriğe müdahele hakkı site sahibi veya yöneticisi olsa dahi şartlar ve kurallara uygun hiç bir yazıyı değiştiremez veya kaldıramaz.</p>
\t\t\t\t\t\t<p>Herhangi bir içeriği, algoritmik yolla(Örneğin: bot yazılımları) erişemezsiniz.Bunun için gerekli api veya izinleri sağlamış olmanız gerekmektedir.</p>
\t\t\t\t\t\t<p>Bu şartlar ve kurallar bilgi sahibi olmaksınız değiştirilebilir veya kaldırılabilir.</p>
\t\t\t\t\t\t<p>Bu şartların tamamı ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 52), "site_title", [], "any", false, false, false, 52), "html", null, true);
        echo " sitesinin bir parçası olarak kabul edilir.</p>
\t\t\t\t\t\t<p>Şartları kabul etmiyorsanız lütfen kayıt olmayın ve siteyi kullanmayın.Kullandığınız takdirde şartları kabul ettiğiniz beyan olur.Hesabınızı veya hizmetinizi kapatmak için bizimle iletişime geçmelisiniz.</p>
\t\t\t\t\t\t<h5 class=\"font-weight-bold\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 54), "site_title", [], "any", false, false, false, 54), "html", null, true);
        echo " kuralları</h5>
\t\t\t\t\t\t<p>Her toplulukta olduğu gibi bu siteninde bir kuralları vardır.Bunlar toplulukların sorunsuz çalışması için son derece önemlidir.Topluluğumuz için yönetim gibi alanlar her daim önemli olsa da üyeler ve misafirler için hoş bir ortam bırakmak bizim için önemli ve zaruridir.Bu yüzden gönderdiğiniz her yazı, profil fotoğrafınız vs gibi detaylarda bu kurallara lütfen dikkat edin.</p>
\t\t\t\t\t\t<p>Kurallarımız sürekli güncellenmekle birlikte değiştirilebilir.</p>
\t\t\t\t\t\t<p>Topluluğumuzda bu kuralları sürekli ihlal eden kullanıcılar, yaptıkları katkılara veya yönetici olmasına bakılmaksınız topluluğumuzdan uyarı ve devamı halinde engellenme durumu yaşayacaklardır.</p>
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>Nazik olmaya özen gösterin, diğer üyelere davranışlarınızda saldırgan tavır göstermeniz kabul edilemez bir durumdur.</li>
\t\t\t\t\t\t\t\t\t<li>Bir kullanıcıya sürekli mesaj atmak, etiketlemek gibi kısaca kullanıcıyı rahatsız eden ve tahrik eden her eylemden uzak durulmalıdır.</li>
\t\t\t\t\t\t\t\t\t<li>Gönderiler veya yazılar konuya her zaman uygun olmalıdır ve yazı veya genel olarak tartışmalar uygun kategorilere açılmalıdır.</li>
\t\t\t\t\t\t\t\t\t<li>Yazılarınızda düzgün bir dil ve yapıcı olunmalıdır, yazılan mesajlarda sade bir dil kullanılmalıdır.</li>
\t\t\t\t\t\t\t\t\t<li>Bir kullanıcıdan kurallara uymayan bir mesaj aldığınızda veya başka bir kullanıcıya saldırganlık gösterdiğini sezdiyseniz mesaj bölümünden \"Rapor\" butonunu kullanabilirsiniz.</li>
\t\t\t\t\t\t\t\t\t<li>Yazılan dil, web sitesinin kendi dili olmalıdır aksi halde siteyi yönetmek mümkün değildir.</li>
\t\t\t\t\t\t\t\t\t<li>Aktif olmayan bir tartışmaya dahil olmak veya yanıtlamak bu tartışmaya bir şey katacak düzeyde değilse yazılmamalıdır.Aksi halde karmaşa yaşanabilir.</li>
\t\t\t\t\t\t\t\t\t<li>Bir yönetici bir önerge sunduğunda buna uymalısınız.Kararın yanlış olduğunu düşündüğünüzde raporlama yapabilirsiniz.</li>
\t\t\t\t\t\t\t\t\t<li>Her kullanıcının yalnızca bir hesabı olabilir, mükerrer hesaplar tespit edilirse engellenir.Ayrıca yasaklı bir üye tekrardan hesap açtığında sorgusuz sualsiz tekrar yasaklanır.</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tab-content resource-standarts\">
\t\t\t\t<div class=\"app-box shadow rounded animate slideIn\">
\t\t\t\t\t<div class=\"app-content pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t\t\t<h5 class=\"mb-3\">";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 79), "lang", [], "any", false, false, false, 79), "string", [], "any", false, false, false, 79), "pages", [], "any", false, false, false, 79), "faq", [], "any", false, false, false, 79), "tabs", [], "any", false, false, false, 79), "resource_standarts", [], "any", false, false, false, 79), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t<p>Bu sitedeki bütün içerikler, yazılar aşağıda yazan standartlara uymalıdır.</p>
\t\t\t\t\t\t<p>Standartlar <a href=\"#terms\">Şartlar ve kurallar</a> sekmesinde ek olarak dikkate alınmıştır.</p>
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>Başlıklar doğru ve sade bir dil ile oluşturulmalıdır.</li>
\t\t\t\t\t\t\t\t\t<li>Başlıkta link ve gereksiz tanıtım dili içermemelidir.</li>
\t\t\t\t\t\t\t\t\t<li>İçerikteki resimler, yazılar vs. site kuralları çerçevsince uygun olmalıdır.</li>
\t\t\t\t\t\t\t\t\t<li>Yazınızı bir kaynaktan aldıysanız bu kaynağı mesajda belirtmelisiniz.</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</aside>
\t";
        // line 98
        echo "\t<div hook-action=\"{Mention:App-domEvent-metacontents}\" data-title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 98), "lang", [], "any", false, false, false, 98), "string", [], "any", false, false, false, 98), "pages", [], "any", false, false, false, 98), "breadcrumb", [], "any", false, false, false, 98), "help", [], "any", false, false, false, 98), "html", null, true);
        echo "\"
\t\tdata-meta-description=\"";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 99), "meta_description", [], "any", false, false, false, 99), "html", null, true);
        echo "\"
\t\tdata-og-description=\"";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 100), "meta_description", [], "any", false, false, false, 100), "html", null, true);
        echo "\"
\t\tdata-twitter-description=\"";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 101), "meta_description", [], "any", false, false, false, 101), "html", null, true);
        echo "\" data-og-title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 101), "site_title", [], "any", false, false, false, 101), "html", null, true);
        echo "\"
\t\tdata-twitter-title=\"";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 102), "site_title", [], "any", false, false, false, 102), "html", null, true);
        echo "\" class=\"d-none\">
\t</div>
";
    }

    public function getTemplateName()
    {
        return "faq.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 102,  202 => 101,  198 => 100,  194 => 99,  189 => 98,  168 => 79,  140 => 54,  135 => 52,  123 => 43,  109 => 32,  103 => 29,  95 => 24,  88 => 19,  86 => 18,  78 => 13,  74 => 12,  70 => 11,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'container.tpl' %}

{% block app_template_name 'faq' %}

{% block content %}
\t<div class=\"app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4\">
\t\t<div class=\"d-flex\">
\t\t\t<div class=\"app-title\">
\t\t\t\t<div class=\"app-breadcrumb d-flex\">
\t\t\t\t\t<div class=\"home\"><a href=\"{{ app.phrase.buildLink('indexAction', {}) }}\">{{ app.settings.site_title }}</a></div>
\t\t\t\t\t<div>{{ app.sub.lang.string.pages.breadcrumb.pages }}</div>
\t\t\t\t\t<div>{{ app.sub.lang.string.pages.breadcrumb.help }}</div>
\t\t\t\t\t<div>{{ app.sub.lang.string.pages.breadcrumb.faq }}</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ml-lg-auto\">
\t\t\t{% include 'usermenu_member.tpl' %}
\t\t</div>
\t</div>
\t<aside class=\"col-sm-3 mb-4 pr-4\">
\t\t<div class=\"card app-forums bg-white rounded shadow mb-4\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<h6 class=\"font-weight-bold\">{{ app.sub.lang.string.pages.faq.tabs.title }}</h6>
\t\t\t</div>
\t\t\t<article class=\"card-group-item\">
\t\t\t\t<div class=\"filter-content\">
\t\t\t\t\t<div class=\"list-group list-group-flush\">
\t\t\t\t\t\t<a href=\"#\" data-tab=\"terms\" data-ui=\"account-tab-item\" class=\"list-group-item active\">{{ app.sub.lang.string.pages.faq.tabs.privacy }}</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"list-group list-group-flush\">
\t\t\t\t\t\t<a href=\"#\" data-tab=\"resource-standarts\" data-ui=\"account-tab-item\" class=\"list-group-item\">{{ app.sub.lang.string.pages.faq.tabs.resource_standarts }}</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</article>
\t\t</div>
\t</aside>
\t<aside class=\"col-sm-9\">
\t\t<div class=\"app-tab-container\">
\t\t\t<div class=\"tab-content terms\">
\t\t\t\t<div class=\"app-box shadow rounded animate slideIn\">
\t\t\t\t\t<div class=\"app-content pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t\t\t<h5 class=\"mb-3\">{{ app.sub.lang.string.pages.faq.tabs.privacy }}</h5>
\t\t\t\t\t\t<p>Bu yazı biraz uzun olmakla birlikte detaylı bilgi içermektedir.Lütfen sabırlı olun her şey düzgün bir topluluğa sahip olmak içindir, teşekkürler.</p>
\t\t\t\t\t\t<p>Bu web sitesinde yazılan her içerikten ve kullanıcılardan sitenin yayıncısı sorumlu değildir.Gönderilen içerikler, yazılar kullanıcının kendi görüşleri ve ifadesidir.</p>
\t\t\t\t\t\t<p>Site, 13 yaş ve üzeri için uygundur eğer bu yaş altındaysanız lütfen kayıt olmayın kayıt olduğunuz takdirde bu yaştan daha büyük olduğunuzu beyan etmiş olursunuz.</p>
\t\t\t\t\t\t<p>Gönderdiğiniz içerikler ve yazılar bu sitenin yöneticileri ve onlara bağlı yöneticiler tarafından ihtiyaç durumunda kontrol edilebilir veya spam amaçlı üçüncü taraf uygulamalara gönderilebilir özel veya kişisel bir bilginizi lütfen yazmayın.</p>
\t\t\t\t\t\t<p>Bu web sitesi içinde küfür, hakaret, nefret, tehtid edici veya etnik kökenlere saygısızlık, siyasal, cinsiyet ve ırk ayrımı, telif unsuru içeren herhangi bir link, içerik, fotoğraf veya yasadışı faaliyet içeren, başkalarının kişisel bilgilerini içeren söz konusu içerik veya davranışın verdiği bütün zararlardan kullanıcı kendi sorumludur ve yöneticilerin bu mesajları istenilirse gerekli mecralara ileteceğini ve yayından kaldırabileceğini kabul etmiş olursunuz.</p>
\t\t\t\t\t\t<p>Yazmış olduğunuz bir yazıyı veya içeriği herhangi bir zamanda dilediğiniz takdirde kaldırabilir veya silebilirsiniz.İçeriğe müdahele hakkı site sahibi veya yöneticisi olsa dahi şartlar ve kurallara uygun hiç bir yazıyı değiştiremez veya kaldıramaz.</p>
\t\t\t\t\t\t<p>Herhangi bir içeriği, algoritmik yolla(Örneğin: bot yazılımları) erişemezsiniz.Bunun için gerekli api veya izinleri sağlamış olmanız gerekmektedir.</p>
\t\t\t\t\t\t<p>Bu şartlar ve kurallar bilgi sahibi olmaksınız değiştirilebilir veya kaldırılabilir.</p>
\t\t\t\t\t\t<p>Bu şartların tamamı {{ app.settings.site_title }} sitesinin bir parçası olarak kabul edilir.</p>
\t\t\t\t\t\t<p>Şartları kabul etmiyorsanız lütfen kayıt olmayın ve siteyi kullanmayın.Kullandığınız takdirde şartları kabul ettiğiniz beyan olur.Hesabınızı veya hizmetinizi kapatmak için bizimle iletişime geçmelisiniz.</p>
\t\t\t\t\t\t<h5 class=\"font-weight-bold\">{{ app.settings.site_title }} kuralları</h5>
\t\t\t\t\t\t<p>Her toplulukta olduğu gibi bu siteninde bir kuralları vardır.Bunlar toplulukların sorunsuz çalışması için son derece önemlidir.Topluluğumuz için yönetim gibi alanlar her daim önemli olsa da üyeler ve misafirler için hoş bir ortam bırakmak bizim için önemli ve zaruridir.Bu yüzden gönderdiğiniz her yazı, profil fotoğrafınız vs gibi detaylarda bu kurallara lütfen dikkat edin.</p>
\t\t\t\t\t\t<p>Kurallarımız sürekli güncellenmekle birlikte değiştirilebilir.</p>
\t\t\t\t\t\t<p>Topluluğumuzda bu kuralları sürekli ihlal eden kullanıcılar, yaptıkları katkılara veya yönetici olmasına bakılmaksınız topluluğumuzdan uyarı ve devamı halinde engellenme durumu yaşayacaklardır.</p>
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>Nazik olmaya özen gösterin, diğer üyelere davranışlarınızda saldırgan tavır göstermeniz kabul edilemez bir durumdur.</li>
\t\t\t\t\t\t\t\t\t<li>Bir kullanıcıya sürekli mesaj atmak, etiketlemek gibi kısaca kullanıcıyı rahatsız eden ve tahrik eden her eylemden uzak durulmalıdır.</li>
\t\t\t\t\t\t\t\t\t<li>Gönderiler veya yazılar konuya her zaman uygun olmalıdır ve yazı veya genel olarak tartışmalar uygun kategorilere açılmalıdır.</li>
\t\t\t\t\t\t\t\t\t<li>Yazılarınızda düzgün bir dil ve yapıcı olunmalıdır, yazılan mesajlarda sade bir dil kullanılmalıdır.</li>
\t\t\t\t\t\t\t\t\t<li>Bir kullanıcıdan kurallara uymayan bir mesaj aldığınızda veya başka bir kullanıcıya saldırganlık gösterdiğini sezdiyseniz mesaj bölümünden \"Rapor\" butonunu kullanabilirsiniz.</li>
\t\t\t\t\t\t\t\t\t<li>Yazılan dil, web sitesinin kendi dili olmalıdır aksi halde siteyi yönetmek mümkün değildir.</li>
\t\t\t\t\t\t\t\t\t<li>Aktif olmayan bir tartışmaya dahil olmak veya yanıtlamak bu tartışmaya bir şey katacak düzeyde değilse yazılmamalıdır.Aksi halde karmaşa yaşanabilir.</li>
\t\t\t\t\t\t\t\t\t<li>Bir yönetici bir önerge sunduğunda buna uymalısınız.Kararın yanlış olduğunu düşündüğünüzde raporlama yapabilirsiniz.</li>
\t\t\t\t\t\t\t\t\t<li>Her kullanıcının yalnızca bir hesabı olabilir, mükerrer hesaplar tespit edilirse engellenir.Ayrıca yasaklı bir üye tekrardan hesap açtığında sorgusuz sualsiz tekrar yasaklanır.</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tab-content resource-standarts\">
\t\t\t\t<div class=\"app-box shadow rounded animate slideIn\">
\t\t\t\t\t<div class=\"app-content pl-4 pr-4 pt-3 pb-3\">
\t\t\t\t\t\t<h5 class=\"mb-3\">{{ app.sub.lang.string.pages.faq.tabs.resource_standarts }}</h5>
\t\t\t\t\t\t<p>Bu sitedeki bütün içerikler, yazılar aşağıda yazan standartlara uymalıdır.</p>
\t\t\t\t\t\t<p>Standartlar <a href=\"#terms\">Şartlar ve kurallar</a> sekmesinde ek olarak dikkate alınmıştır.</p>
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>Başlıklar doğru ve sade bir dil ile oluşturulmalıdır.</li>
\t\t\t\t\t\t\t\t\t<li>Başlıkta link ve gereksiz tanıtım dili içermemelidir.</li>
\t\t\t\t\t\t\t\t\t<li>İçerikteki resimler, yazılar vs. site kuralları çerçevsince uygun olmalıdır.</li>
\t\t\t\t\t\t\t\t\t<li>Yazınızı bir kaynaktan aldıysanız bu kaynağı mesajda belirtmelisiniz.</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</aside>
\t{# This is includes meta definitions. #}
\t<div hook-action=\"{Mention:App-domEvent-metacontents}\" data-title=\"{{ app.sub.lang.string.pages.breadcrumb.help }}\"
\t\tdata-meta-description=\"{{ app.settings.meta_description }}\"
\t\tdata-og-description=\"{{ app.settings.meta_description }}\"
\t\tdata-twitter-description=\"{{ app.settings.meta_description }}\" data-og-title=\"{{ app.settings.site_title }}\"
\t\tdata-twitter-title=\"{{ app.settings.site_title }}\" class=\"d-none\">
\t</div>
{% endblock %}", "faq.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Pages\\faq.tpl");
    }
}
