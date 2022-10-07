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

/* index.tpl */
class __TwigTemplate_1212067eed51e80d380fea4e8e52db3d8beba7b6706faef60312d5c3a0784bc4 extends Template
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
        $this->parent = $this->loadTemplate("container.tpl", "index.tpl", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_app_template_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "index";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t<div class=\"col-sm-12 title-mobile\">
\t\t<h5 class=\"app-title mobile\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 7), "site_title", [], "any", false, false, false, 7), "html", null, true);
        echo "</h5>
\t</div>
\t<aside class=\"col-sm-3 app-forums-area mb-4 pr-4 order-2 order-lg-1 sticky\">
\t\t<h5 class=\"app-title\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 10), "site_title", [], "any", false, false, false, 10), "html", null, true);
        echo "</h5>
\t\t<div class=\"d-lg-block d-none\">
\t\t\t<div class=\"card app-forums bg-white rounded shadow mt-2 mb-4\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<h6 class=\"font-weight-bold\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 14), "lang", [], "any", false, false, false, 14), "string", [], "any", false, false, false, 14), "index", [], "any", false, false, false, 14), "forums", [], "any", false, false, false, 14), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "</h6>
\t\t\t\t</div>
\t\t\t\t<article class=\"card-group-item\">
\t\t\t\t\t<div class=\"filter-content\">
\t\t\t\t\t\t<div class=\"list-group list-group-flush scrollable\">
\t\t\t\t\t\t\t";
        // line 19
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 19), "loggedIn", [], "method", false, false, false, 19)) {
            // line 20
            echo "\t\t\t\t\t\t\t\t<div class=\"d-none\" data-no-refresh=\"true\"></div>
\t\t\t\t\t\t\t";
        }
        // line 22
        echo "\t\t\t\t\t\t\t<a href=\"#\" data-forum-id=\"0\" data-ui=\"quick-forum-posts\" class=\"list-group-item active\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 22), "lang", [], "any", false, false, false, 22), "string", [], "any", false, false, false, 22), "index", [], "any", false, false, false, 22), "forums", [], "any", false, false, false, 22), "news", [], "any", false, false, false, 22), "html", null, true);
        echo "<span class=\"float-right badge badge-dark round\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 22), "getForumPostCount", [], "method", false, false, false, 22), "html", null, true);
        echo "</span>  </a>
\t\t\t\t\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 23), "forum", [], "any", false, false, false, 23), "getForumList", [], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            echo "\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 24), "setForumId", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "forum_id", [], "any", false, false, false, 24)], "method", false, false, false, 24), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t<a href=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 25), "buildLink", [0 => "forum", 1 => ["forum_id" => twig_get_attribute($this->env, $this->source, $context["item"], "forum_id", [], "any", false, false, false, 25), "title" => twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 25)]], "method", false, false, false, 25), "html", null, true);
            echo "\" data-forum-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "forum_id", [], "any", false, false, false, 25), "html", null, true);
            echo "\" data-ui=\"quick-forum-posts\" class=\"list-group-item\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 25), "html", null, true);
            echo " <span class=\"float-right badge badge-dark round\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 25), "getForumPostCount", [], "method", false, false, false, 25), "html", null, true);
            echo "</span>  </a>
\t\t\t\t\t\t\t\t";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 26), "unsetForumId", [], "method", false, false, false, 26), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 27), "forum", [], "any", false, false, false, 27), "getForumList", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "forum_id", [], "any", false, false, false, 27)], "method", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                // line 28
                echo "\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 28), "setForumId", [0 => twig_get_attribute($this->env, $this->source, $context["sub"], "forum_id", [], "any", false, false, false, 28)], "method", false, false, false, 28), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 29), "buildLink", [0 => "forum", 1 => ["forum_id" => twig_get_attribute($this->env, $this->source, $context["sub"], "forum_id", [], "any", false, false, false, 29), "title" => twig_get_attribute($this->env, $this->source, $context["sub"], "title", [], "any", false, false, false, 29)]], "method", false, false, false, 29), "html", null, true);
                echo "\" data-forum-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "forum_id", [], "any", false, false, false, 29), "html", null, true);
                echo "\" data-ui=\"quick-forum-posts\" class=\"sub list-group-item\">-- ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "title", [], "any", false, false, false, 29), "html", null, true);
                echo " <span class=\"float-right badge badge-dark round\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 29), "getForumPostCount", [], "method", false, false, false, 29), "html", null, true);
                echo "</span>  </a>
\t\t\t\t\t\t\t\t\t";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 30), "unsetForumId", [], "method", false, false, false, 30), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</article>
\t\t\t</div>
\t\t\t<div class=\"card app-forums app-search bg-white rounded shadow mb-4\">
\t\t\t\t<article class=\"card-group-item\">
\t\t\t\t\t<div class=\"p-3\">
\t\t\t\t\t\t<div id=\"quick-search\" class=\"form-inline my-2 my-lg-0\">
\t\t\t\t\t\t\t<div class=\"input-group has-feedback has-clear mb-2\">
\t\t\t\t\t\t\t\t<input name=\"keyword\" class=\"form-control\" type=\"text\" placeholder=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 42), "lang", [], "any", false, false, false, 42), "string", [], "any", false, false, false, 42), "index", [], "any", false, false, false, 42), "search", [], "any", false, false, false, 42), "placeholder", [], "any", false, false, false, 42), "html", null, true);
        echo "\" aria-label=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 42), "lang", [], "any", false, false, false, 42), "string", [], "any", false, false, false, 42), "container", [], "any", false, false, false, 42), "buttons", [], "any", false, false, false, 42), "search", [], "any", false, false, false, 42), "html", null, true);
        echo "\" aria-id=\"indexForumSearch\">
\t\t\t\t\t\t\t\t<span title=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 43), "lang", [], "any", false, false, false, 43), "string", [], "any", false, false, false, 43), "container", [], "any", false, false, false, 43), "buttons", [], "any", false, false, false, 43), "clear", [], "any", false, false, false, 43), "html", null, true);
        echo "\" class=\"form-control-clear fas fa-times form-control-feedback d-none\"></span>
\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-app-search icon search no-anim-ui\" aria-label=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 45), "lang", [], "any", false, false, false, 45), "string", [], "any", false, false, false, 45), "container", [], "any", false, false, false, 45), "buttons", [], "any", false, false, false, 45), "search", [], "any", false, false, false, 45), "html", null, true);
        echo "\" type=\"button\"></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-check mb-0\">
\t\t\t\t\t\t\t\t<input name=\"search-forum\" type=\"checkbox\" class=\"form-check-input\" id=\"searchForum\" checked=\"checked\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"searchForum\">";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 50), "lang", [], "any", false, false, false, 50), "string", [], "any", false, false, false, 50), "container", [], "any", false, false, false, 50), "search", [], "any", false, false, false, 50), "search_forums", [], "any", false, false, false, 50), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- <a class=\"text-dark\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 53), "buildLink", [0 => "search", 1 => []], "method", false, false, false, 53), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 53), "lang", [], "any", false, false, false, 53), "string", [], "any", false, false, false, 53), "container", [], "any", false, false, false, 53), "search", [], "any", false, false, false, 53), "advanced_search", [], "any", false, false, false, 53), "html", null, true);
        echo "</a> -->
\t\t\t\t\t</div>
\t\t\t\t</article>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"card app-forums app-stats bg-white rounded shadow\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<h6 class=\"font-weight-bold\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 60), "lang", [], "any", false, false, false, 60), "string", [], "any", false, false, false, 60), "index", [], "any", false, false, false, 60), "stats", [], "any", false, false, false, 60), "title", [], "any", false, false, false, 60), "html", null, true);
        echo "</h6>
\t\t\t</div>
\t\t\t<article class=\"card-group-item\">
\t\t\t\t<div class=\"list-group list-group-flush\">
\t\t\t\t\t<div class=\"list-group-item icon discussions\">";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 64), "lang", [], "any", false, false, false, 64), "string", [], "any", false, false, false, 64), "index", [], "any", false, false, false, 64), "stats", [], "any", false, false, false, 64), "discussion_count", [], "any", false, false, false, 64), "html", null, true);
        echo "
\t\t\t\t\t\t<span class=\"float-right badge badge-dark round\">";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\NumberFormat']->NumberFormatShorter(twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "discussion", [], "any", false, false, false, 65), "postCount", [], "method", false, false, false, 65))), "html", null, true);
        echo "</span> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"list-group-item icon posts\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 67), "lang", [], "any", false, false, false, 67), "string", [], "any", false, false, false, 67), "index", [], "any", false, false, false, 67), "stats", [], "any", false, false, false, 67), "total_posts", [], "any", false, false, false, 67), "html", null, true);
        echo "
\t\t\t\t\t\t<span class=\"float-right badge badge-dark round\">";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\NumberFormat']->NumberFormatShorter(twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "post", [], "any", false, false, false, 68), "getForumPostCount", [], "method", false, false, false, 68))), "html", null, true);
        echo "</span> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"list-group-item icon users\">";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 70), "lang", [], "any", false, false, false, 70), "string", [], "any", false, false, false, 70), "index", [], "any", false, false, false, 70), "stats", [], "any", false, false, false, 70), "user_count", [], "any", false, false, false, 70), "html", null, true);
        echo "
\t\t\t\t\t\t<span class=\"float-right badge badge-dark round\">";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['App\Template\Twig\Extension\NumberFormat']->NumberFormatShorter(twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "stats", [], "any", false, false, false, 71), "getUserCount", [], "method", false, false, false, 71))), "html", null, true);
        echo "</span> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"list-group-item icon last-user\">";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 73), "lang", [], "any", false, false, false, 73), "string", [], "any", false, false, false, 73), "index", [], "any", false, false, false, 73), "stats", [], "any", false, false, false, 73), "last_registered_user", [], "any", false, false, false, 73), "html", null, true);
        echo "
\t\t\t\t\t\t";
        // line 74
        $context["lastRegisterUser"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["string"] ?? null), "stats", [], "any", false, false, false, 74), "getLastRegistered", [], "method", false, false, false, 74);
        // line 75
        echo "\t\t\t\t\t\t<span class=\"float-right\">
\t\t\t\t\t\t\t";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 76), "user", [], "any", false, false, false, 76), "link", [], "any", false, false, false, 76), "setUser", [0 => twig_get_attribute($this->env, $this->source, ($context["lastRegisterUser"] ?? null), "user_id", [], "any", false, false, false, 76)], "method", false, false, false, 76), "html", null, true);
        echo "
\t\t\t\t\t\t\t";
        // line 78
        echo "\t\t\t\t\t\t\t\t<a class=\"text-dark font-weight-bold user-tooltip-link\" href=\"";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 78), "user", [], "any", false, false, false, 78), "link", [], "any", false, false, false, 78), "getOnlyLink", [], "method", false, false, false, 78);
        echo "\" data-user-id=\"";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 78), "user", [], "any", false, false, false, 78), "link", [], "any", false, false, false, 78), "getId", [], "method", false, false, false, 78);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 78), "user", [], "any", false, false, false, 78), "link", [], "any", false, false, false, 78), "getName", [], "method", false, false, false, 78);
        echo "</a>
\t\t\t\t\t\t\t";
        // line 80
        echo "\t\t\t\t\t\t\t";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 80), "user", [], "any", false, false, false, 80), "link", [], "any", false, false, false, 80), "unsetUser", [], "method", false, false, false, 80), "html", null, true);
        echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t</div> 
\t\t\t\t</div>
\t\t\t</article>
\t\t</div>
\t</aside>
\t<aside class=\"col-sm-9 app-discussions-area order-1 order-lg-2\">
\t\t<div class=\"app-post-manage d-flex flex-column flex-lg-row mb-3\">
\t\t\t<div class=\"order-2 order-lg-1 d-flex flex-row\">
\t\t\t\t<div class=\"app-order-post dropdown\">
\t\t\t\t\t<button class=\"btn btn-app-dd no-anim-ui icon order-newest dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-id=\"indexSelectOrder\">";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 91), "lang", [], "any", false, false, false, 91), "string", [], "any", false, false, false, 91), "container", [], "any", false, false, false, 91), "order", [], "any", false, false, false, 91), "new_message", [], "any", false, false, false, 91), "html", null, true);
        echo "</button>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-left custom-menu custom-menu-md shadow animate slideIn\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span>";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 95), "lang", [], "any", false, false, false, 95), "string", [], "any", false, false, false, 95), "container", [], "any", false, false, false, 95), "order", [], "any", false, false, false, 95), "title", [], "any", false, false, false, 95), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex active\" data-ui=\"order-index-posts\" data-order=\"newest\" href=\"";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 99), "buildLink", [0 => "indexAction", 1 => ["tab" => "newest"]], "method", false, false, false, 99), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t<span>";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 101), "lang", [], "any", false, false, false, 101), "string", [], "any", false, false, false, 101), "container", [], "any", false, false, false, 101), "order", [], "any", false, false, false, 101), "new_message", [], "any", false, false, false, 101), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"order-index-posts\" data-order=\"popular\" href=\"";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 104), "buildLink", [0 => "indexAction", 1 => ["tab" => "popular"]], "method", false, false, false, 104), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t<span>";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 106), "lang", [], "any", false, false, false, 106), "string", [], "any", false, false, false, 106), "container", [], "any", false, false, false, 106), "order", [], "any", false, false, false, 106), "popular", [], "any", false, false, false, 106), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"order-index-posts\" data-order=\"top-likes\" href=\"";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 109), "buildLink", [0 => "indexAction", 1 => ["tab" => "top-likes"]], "method", false, false, false, 109), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t<span>";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 111), "lang", [], "any", false, false, false, 111), "string", [], "any", false, false, false, 111), "container", [], "any", false, false, false, 111), "order", [], "any", false, false, false, 111), "top_likes", [], "any", false, false, false, 111), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"order-index-posts\" data-order=\"oldest\" href=\"";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "phrase", [], "any", false, false, false, 114), "buildLink", [0 => "indexAction", 1 => ["tab" => "oldest"]], "method", false, false, false, 114), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t<span>";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 116), "lang", [], "any", false, false, false, 116), "string", [], "any", false, false, false, 116), "container", [], "any", false, false, false, 116), "order", [], "any", false, false, false, 116), "oldest", [], "any", false, false, false, 116), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<button class=\"post-refresh ml-4\" data-ui=\"post-refresher\" aria-label=\"";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 122), "lang", [], "any", false, false, false, 122), "string", [], "any", false, false, false, 122), "container", [], "any", false, false, false, 122), "buttons", [], "any", false, false, false, 122), "refresh", [], "any", false, false, false, 122), "html", null, true);
        echo "\"></button>
\t\t\t\t<div class=\"d-flex flex-column align-self-center ml-4\">
\t\t\t\t\t<label class=\"app-switch switch active\">
\t\t\t\t\t\t<input type=\"checkbox\" checked=\"checked\">
\t\t\t\t\t\t<span class=\"slider\"></span>
\t\t\t\t\t</label>
\t\t\t\t\t<small class=\"text-dark font-weight-bold\">";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 128), "lang", [], "any", false, false, false, 128), "string", [], "any", false, false, false, 128), "index", [], "any", false, false, false, 128), "auto_refresher", [], "any", false, false, false, 128), "html", null, true);
        echo "</small>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"order-1 order-lg-2 ml-lg-auto mb-3 mb-lg-0\">
\t\t\t\t";
        // line 132
        $this->loadTemplate("usermenu_member.tpl", "index.tpl", 132)->display($context);
        // line 133
        echo "\t\t\t</div>
\t\t</div>
\t\t";
        // line 135
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 135), "loggedIn", [], "method", false, false, false, 135)) {
            // line 136
            echo "\t\t    ";
            $this->loadTemplate("guest_welcome.tpl", "index.tpl", 136)->display($context);
            // line 137
            echo "\t\t";
        }
        // line 138
        echo "\t\t";
        $macros["editor"] = $this->loadTemplate("macro.editor.tpl", "index.tpl", 138)->unwrap();
        // line 139
        echo "\t\t";
        echo twig_call_macro($macros["editor"], "macro_editor", ["app-create-post", true], 139, $context, $this->getSourceContext());
        echo "
\t\t<div class=\"app-forums-mobile mb-4 d-lg-none d-block\">
\t\t\t<small class=\"text-muted\">";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 141), "lang", [], "any", false, false, false, 141), "string", [], "any", false, false, false, 141), "index", [], "any", false, false, false, 141), "responsive_mode", [], "any", false, false, false, 141), "html", null, true);
        echo "</small>
\t\t\t<div class=\"post-loader-spin\"></div>
\t\t</div>
\t\t<div class=\"app-post-container animate slideIn\">
\t\t\t";
        // line 145
        $this->loadTemplate("index_posts.tpl", "index.tpl", 145)->display($context);
        // line 146
        echo "\t\t</div>
\t\t<div class=\"post-loader-spin\"></div>
\t</aside>
";
    }

    public function getTemplateName()
    {
        return "index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 146,  377 => 145,  370 => 141,  364 => 139,  361 => 138,  358 => 137,  355 => 136,  353 => 135,  349 => 133,  347 => 132,  340 => 128,  331 => 122,  322 => 116,  317 => 114,  311 => 111,  306 => 109,  300 => 106,  295 => 104,  289 => 101,  284 => 99,  277 => 95,  270 => 91,  255 => 80,  246 => 78,  242 => 76,  239 => 75,  237 => 74,  233 => 73,  228 => 71,  224 => 70,  219 => 68,  215 => 67,  210 => 65,  206 => 64,  199 => 60,  187 => 53,  181 => 50,  173 => 45,  168 => 43,  162 => 42,  151 => 33,  145 => 32,  137 => 30,  127 => 29,  122 => 28,  118 => 27,  114 => 26,  104 => 25,  99 => 24,  95 => 23,  88 => 22,  84 => 20,  82 => 19,  74 => 14,  67 => 10,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'container.tpl' %}

{% block app_template_name 'index' %}

{% block content %}
\t<div class=\"col-sm-12 title-mobile\">
\t\t<h5 class=\"app-title mobile\">{{ app.settings.site_title }}</h5>
\t</div>
\t<aside class=\"col-sm-3 app-forums-area mb-4 pr-4 order-2 order-lg-1 sticky\">
\t\t<h5 class=\"app-title\">{{ app.settings.site_title }}</h5>
\t\t<div class=\"d-lg-block d-none\">
\t\t\t<div class=\"card app-forums bg-white rounded shadow mt-2 mb-4\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<h6 class=\"font-weight-bold\">{{ app.sub.lang.string.index.forums.title }}</h6>
\t\t\t\t</div>
\t\t\t\t<article class=\"card-group-item\">
\t\t\t\t\t<div class=\"filter-content\">
\t\t\t\t\t\t<div class=\"list-group list-group-flush scrollable\">
\t\t\t\t\t\t\t{% if not app.user.loggedIn() %}
\t\t\t\t\t\t\t\t<div class=\"d-none\" data-no-refresh=\"true\"></div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<a href=\"#\" data-forum-id=\"0\" data-ui=\"quick-forum-posts\" class=\"list-group-item active\">{{ app.sub.lang.string.index.forums.news }}<span class=\"float-right badge badge-dark round\">{{ string.post.getForumPostCount() }}</span>  </a>
\t\t\t\t\t\t\t{% for item in app.string.forum.getForumList() %}
\t\t\t\t\t\t\t\t{{ string.post.setForumId(item.forum_id) }}
\t\t\t\t\t\t\t\t<a href=\"{{ app.phrase.buildLink('forum', {'forum_id': item.forum_id, 'title': item.title}) }}\" data-forum-id=\"{{ item.forum_id }}\" data-ui=\"quick-forum-posts\" class=\"list-group-item\">{{ item.title }} <span class=\"float-right badge badge-dark round\">{{ string.post.getForumPostCount() }}</span>  </a>
\t\t\t\t\t\t\t\t{{ string.post.unsetForumId() }}
\t\t\t\t\t\t\t\t{% for sub in app.string.forum.getForumList(item.forum_id) %}
\t\t\t\t\t\t\t\t\t{{ string.post.setForumId(sub.forum_id) }}
\t\t\t\t\t\t\t\t\t<a href=\"{{ app.phrase.buildLink('forum', {'forum_id': sub.forum_id, 'title': sub.title}) }}\" data-forum-id=\"{{ sub.forum_id }}\" data-ui=\"quick-forum-posts\" class=\"sub list-group-item\">-- {{ sub.title }} <span class=\"float-right badge badge-dark round\">{{ string.post.getForumPostCount() }}</span>  </a>
\t\t\t\t\t\t\t\t\t{{ string.post.unsetForumId() }}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</article>
\t\t\t</div>
\t\t\t<div class=\"card app-forums app-search bg-white rounded shadow mb-4\">
\t\t\t\t<article class=\"card-group-item\">
\t\t\t\t\t<div class=\"p-3\">
\t\t\t\t\t\t<div id=\"quick-search\" class=\"form-inline my-2 my-lg-0\">
\t\t\t\t\t\t\t<div class=\"input-group has-feedback has-clear mb-2\">
\t\t\t\t\t\t\t\t<input name=\"keyword\" class=\"form-control\" type=\"text\" placeholder=\"{{ app.sub.lang.string.index.search.placeholder }}\" aria-label=\"{{ app.sub.lang.string.container.buttons.search }}\" aria-id=\"indexForumSearch\">
\t\t\t\t\t\t\t\t<span title=\"{{ app.sub.lang.string.container.buttons.clear }}\" class=\"form-control-clear fas fa-times form-control-feedback d-none\"></span>
\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-app-search icon search no-anim-ui\" aria-label=\"{{ app.sub.lang.string.container.buttons.search }}\" type=\"button\"></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-check mb-0\">
\t\t\t\t\t\t\t\t<input name=\"search-forum\" type=\"checkbox\" class=\"form-check-input\" id=\"searchForum\" checked=\"checked\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"searchForum\">{{ app.sub.lang.string.container.search.search_forums }}</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- <a class=\"text-dark\" href=\"{{ app.phrase.buildLink('search', {}) }}\">{{ app.sub.lang.string.container.search.advanced_search }}</a> -->
\t\t\t\t\t</div>
\t\t\t\t</article>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"card app-forums app-stats bg-white rounded shadow\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<h6 class=\"font-weight-bold\">{{ app.sub.lang.string.index.stats.title }}</h6>
\t\t\t</div>
\t\t\t<article class=\"card-group-item\">
\t\t\t\t<div class=\"list-group list-group-flush\">
\t\t\t\t\t<div class=\"list-group-item icon discussions\">{{ app.sub.lang.string.index.stats.discussion_count }}
\t\t\t\t\t\t<span class=\"float-right badge badge-dark round\">{{ string.discussion.postCount()|number_format|numberFormatShorter }}</span> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"list-group-item icon posts\">{{ app.sub.lang.string.index.stats.total_posts }}
\t\t\t\t\t\t<span class=\"float-right badge badge-dark round\">{{ string.post.getForumPostCount()|number_format|numberFormatShorter }}</span> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"list-group-item icon users\">{{ app.sub.lang.string.index.stats.user_count }}
\t\t\t\t\t\t<span class=\"float-right badge badge-dark round\">{{ string.stats.getUserCount()|number_format|numberFormatShorter }}</span> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"list-group-item icon last-user\">{{ app.sub.lang.string.index.stats.last_registered_user }}
\t\t\t\t\t\t{% set lastRegisterUser = string.stats.getLastRegistered() %}
\t\t\t\t\t\t<span class=\"float-right\">
\t\t\t\t\t\t\t{{ app.sub.user.link.setUser(lastRegisterUser.user_id) }}
\t\t\t\t\t\t\t{% autoescape false %}
\t\t\t\t\t\t\t\t<a class=\"text-dark font-weight-bold user-tooltip-link\" href=\"{{ app.sub.user.link.getOnlyLink() }}\" data-user-id=\"{{ app.sub.user.link.getId() }}\">{{ app.sub.user.link.getName() }}</a>
\t\t\t\t\t\t\t{% endautoescape %}
\t\t\t\t\t\t\t{{ app.sub.user.link.unsetUser() }}
\t\t\t\t\t\t</span>
\t\t\t\t\t</div> 
\t\t\t\t</div>
\t\t\t</article>
\t\t</div>
\t</aside>
\t<aside class=\"col-sm-9 app-discussions-area order-1 order-lg-2\">
\t\t<div class=\"app-post-manage d-flex flex-column flex-lg-row mb-3\">
\t\t\t<div class=\"order-2 order-lg-1 d-flex flex-row\">
\t\t\t\t<div class=\"app-order-post dropdown\">
\t\t\t\t\t<button class=\"btn btn-app-dd no-anim-ui icon order-newest dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-id=\"indexSelectOrder\">{{ app.sub.lang.string.container.order.new_message }}</button>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-left custom-menu custom-menu-md shadow animate slideIn\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span>{{ app.sub.lang.string.container.order.title }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex active\" data-ui=\"order-index-posts\" data-order=\"newest\" href=\"{{ app.phrase.buildLink('indexAction', {'tab': 'newest'}) }}\">
\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t<span>{{ app.sub.lang.string.container.order.new_message }}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"order-index-posts\" data-order=\"popular\" href=\"{{ app.phrase.buildLink('indexAction', {'tab': 'popular'}) }}\">
\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t<span>{{ app.sub.lang.string.container.order.popular }}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"order-index-posts\" data-order=\"top-likes\" href=\"{{ app.phrase.buildLink('indexAction', {'tab': 'top-likes'}) }}\">
\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t<span>{{ app.sub.lang.string.container.order.top_likes }}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"notification quick-menu d-flex\" data-ui=\"order-index-posts\" data-order=\"oldest\" href=\"{{ app.phrase.buildLink('indexAction', {'tab': 'oldest'}) }}\">
\t\t\t\t\t\t\t\t<div class=\"text ml-3\">
\t\t\t\t\t\t\t\t\t<span>{{ app.sub.lang.string.container.order.oldest }}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<button class=\"post-refresh ml-4\" data-ui=\"post-refresher\" aria-label=\"{{ app.sub.lang.string.container.buttons.refresh }}\"></button>
\t\t\t\t<div class=\"d-flex flex-column align-self-center ml-4\">
\t\t\t\t\t<label class=\"app-switch switch active\">
\t\t\t\t\t\t<input type=\"checkbox\" checked=\"checked\">
\t\t\t\t\t\t<span class=\"slider\"></span>
\t\t\t\t\t</label>
\t\t\t\t\t<small class=\"text-dark font-weight-bold\">{{ app.sub.lang.string.index.auto_refresher }}</small>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"order-1 order-lg-2 ml-lg-auto mb-3 mb-lg-0\">
\t\t\t\t{% include 'usermenu_member.tpl' %}
\t\t\t</div>
\t\t</div>
\t\t{% if not app.user.loggedIn() %}
\t\t    {% include 'guest_welcome.tpl' %}
\t\t{% endif %}
\t\t{% import 'macro.editor.tpl' as editor %}
\t\t{{ editor.editor('app-create-post', true) }}
\t\t<div class=\"app-forums-mobile mb-4 d-lg-none d-block\">
\t\t\t<small class=\"text-muted\">{{ app.sub.lang.string.index.responsive_mode }}</small>
\t\t\t<div class=\"post-loader-spin\"></div>
\t\t</div>
\t\t<div class=\"app-post-container animate slideIn\">
\t\t\t{% include 'index_posts.tpl' %}
\t\t</div>
\t\t<div class=\"post-loader-spin\"></div>
\t</aside>
{% endblock %}", "index.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Index\\index.tpl");
    }
}
