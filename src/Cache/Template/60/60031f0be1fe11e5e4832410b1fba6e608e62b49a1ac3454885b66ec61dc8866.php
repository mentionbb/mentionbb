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

/* macro.editor.tpl */
class __TwigTemplate_fccfc92b0d096449f750d4e7e938c9a4d1b7cda7edcee1e5aec1a8e2a742e958 extends Template
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
    }

    // line 1
    public function macro_editor($__id__ = null, $__title__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "title" => $__title__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 2), "loggedIn", [], "method", false, false, false, 2)) {
                // line 3
                echo "\t\t";
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 3), "getActiveBan", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 3), "user_id", [], "any", false, false, false, 3)], "method", false, false, false, 3)) {
                    // line 4
                    echo "\t\t   <form method=\"post\" id=\"";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" enctype=\"multipart/form-data\">
\t\t\t   <div class=\"app-post app-post-create position-relative bg-light shadow rounded\">
\t\t\t\t   <div class=\"hide-editor d-none\">
\t\t\t\t\t   <div class=\"backdrop d-flex align-items-center justify-content-center\">";
                    // line 7
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 7), "lang", [], "any", false, false, false, 7), "string", [], "any", false, false, false, 7), "index", [], "any", false, false, false, 7), "search", [], "any", false, false, false, 7), "stop_search", [], "any", false, false, false, 7), "html", null, true);
                    echo "</div>
\t\t\t\t   </div>
\t\t\t\t   <div class=\"post-layout mt-2 mb-4\">
\t\t\t\t\t   <div class=\"progress d-none\">
\t\t\t\t\t\t   <div class=\"indeterminate\"></div>
\t\t\t\t\t   </div>
\t\t\t\t\t   <div class=\"post-user\">
\t\t\t\t\t\t   ";
                    // line 14
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 14), "user", [], "any", false, false, false, 14), "link", [], "any", false, false, false, 14), "setUser", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 14), "user_id", [], "any", false, false, false, 14)], "method", false, false, false, 14), "html", null, true);
                    echo "
\t\t\t\t\t\t   ";
                    // line 16
                    echo "\t\t\t\t\t\t\t   ";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 16), "user", [], "any", false, false, false, 16), "link", [], "any", false, false, false, 16), "getProfilePicture", [0 => false], "method", false, false, false, 16);
                    echo "
\t\t\t\t\t\t   ";
                    // line 18
                    echo "\t\t\t\t\t\t   ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 18), "user", [], "any", false, false, false, 18), "unsetUser", [], "method", false, false, false, 18), "html", null, true);
                    echo "
\t\t\t\t\t   </div>
\t\t\t\t\t   <div class=\"post-content pt-1\">
\t\t\t\t\t\t   ";
                    // line 21
                    if (($context["title"] ?? null)) {
                        // line 22
                        echo "\t\t\t\t\t\t\t   <div class=\"title-area d-flex flex-lg-row flex-column mb-2\">
\t\t\t\t\t\t\t\t   <textarea data-ui=\"show-editor\" rows=\"1\" wrap=\"soft\" name=\"post-title\" placeholder=\"";
                        // line 23
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 23), "lang", [], "any", false, false, false, 23), "string", [], "any", false, false, false, 23), "container", [], "any", false, false, false, 23), "editor", [], "any", false, false, false, 23), "placeholder", [], "any", false, false, false, 23), "title", [], "any", false, false, false, 23), "html", null, true);
                        echo "\" data-single-line=\"true\"></textarea>
\t\t\t\t\t\t\t\t   <select class=\"selectpicker ml-lg-auto pt-2 pt-lg-0\" data-live-search=\"true\" title=\"";
                        // line 24
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 24), "lang", [], "any", false, false, false, 24), "string", [], "any", false, false, false, 24), "container", [], "any", false, false, false, 24), "editor", [], "any", false, false, false, 24), "placeholder", [], "any", false, false, false, 24), "forum", [], "any", false, false, false, 24), "html", null, true);
                        echo "\" name=\"forum\">
\t\t\t\t\t\t\t\t\t   ";
                        // line 25
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 25), "forum", [], "any", false, false, false, 25), "getForumList", [], "method", false, false, false, 25));
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 26
                            echo "\t\t\t\t\t\t\t\t\t\t   <option value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "forum_id", [], "any", false, false, false, 26), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 26), "html", null, true);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t   ";
                            // line 27
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "string", [], "any", false, false, false, 27), "forum", [], "any", false, false, false, 27), "getForumList", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "forum_id", [], "any", false, false, false, 27)], "method", false, false, false, 27));
                            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                                // line 28
                                echo "\t\t\t\t\t\t\t\t\t\t\t   <option data-content=\"<span class='sub'>";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "title", [], "any", false, false, false, 28), "html", null, true);
                                echo "</span\" value=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "forum_id", [], "any", false, false, false, 28), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "title", [], "any", false, false, false, 28), "html", null, true);
                                echo "</option>
\t\t\t\t\t\t\t\t\t\t   ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 30
                            echo "\t\t\t\t\t\t\t\t\t   ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 31
                        echo "\t\t\t\t\t\t\t\t   </select>
\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t   ";
                    } else {
                        // line 34
                        echo "\t\t\t\t\t\t\t   <div class=\"title-area in-discussion d-flex mb-2\">
\t\t\t\t\t\t\t\t   <textarea class=\"w-100\" rows=\"1\" wrap=\"soft\" name=\"post-title\" placeholder=\"";
                        // line 35
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 35), "lang", [], "any", false, false, false, 35), "string", [], "any", false, false, false, 35), "container", [], "any", false, false, false, 35), "editor", [], "any", false, false, false, 35), "placeholder", [], "any", false, false, false, 35), "write", [], "any", false, false, false, 35), "html", null, true);
                        echo "\" data-ui=\"show-editor\" data-single-line=\"true\"></textarea>
\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t   ";
                    }
                    // line 38
                    echo "\t\t\t\t\t\t   <div class=\"app-writer-area animate slideIn d-none\">
\t\t\t\t\t\t\t   <textarea class=\"w-100\" id=\"post-editor\" name=\"content\"></textarea>
\t\t\t\t\t\t\t   <div class=\"mt-3\">
\t\t\t\t\t\t\t\t   <div class=\"js-appExpandNodes rounded shadow-sm mb-3 d-none\">
\t\t\t\t\t\t\t\t\t   <a data-toggle=\"collapse\" href=\"#appCollapsePost_Options\" role=\"button\" aria-expanded=\"true\"
\t\t\t\t\t\t\t\t\t\t       aria-controls=\"appCollapsePost_Options\">";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 43), "lang", [], "any", false, false, false, 43), "string", [], "any", false, false, false, 43), "container", [], "any", false, false, false, 43), "editor", [], "any", false, false, false, 43), "next", [], "any", false, false, false, 43), "text", [], "any", false, false, false, 43), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t\t   <div class=\"collapse show\" id=\"appCollapsePost_Options\">
\t\t\t\t\t\t\t\t\t   <div class=\"pl-0 pr-0 pt-0\">
\t\t\t\t\t\t\t\t\t\t   ";
                    // line 47
                    if (($context["title"] ?? null)) {
                        // line 48
                        echo "\t\t\t\t\t\t\t\t\t\t       ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 48), "loggedIn", [], "method", false, false, false, 48) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 48), "is_admin", [], "any", false, false, false, 48))) {
                            // line 49
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <div class=\"d-lg-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t   <div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   <input class=\"form-check-input mt-1\" type=\"checkbox\" id=\"is_pinned\" name=\"is_pinned\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"form-check-label\" for=\"is_pinned\">";
                            // line 52
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                             // line 53
($context["app"] ?? null), "sub", [], "any", false, false, false, 53), "lang", [], "any", false, false, false, 53), "string", [], "any", false, false, false, 53), "container", [], "any", false, false, false, 53), "editor", [], "any", false, false, false, 53), "next", [], "any", false, false, false, 53), "admin_options", [], "any", false, false, false, 53), "pinned", [], "any", false, false, false, 53), "html", null, true);
                            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t   <div class=\"form-check ml-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   <input class=\"form-check-input mt-1\" type=\"checkbox\" id=\"is_locked\" name=\"is_locked\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"form-check-label\" for=\"is_locked\">";
                            // line 57
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                             // line 58
($context["app"] ?? null), "sub", [], "any", false, false, false, 58), "lang", [], "any", false, false, false, 58), "string", [], "any", false, false, false, 58), "container", [], "any", false, false, false, 58), "editor", [], "any", false, false, false, 58), "next", [], "any", false, false, false, 58), "admin_options", [], "any", false, false, false, 58), "locked", [], "any", false, false, false, 58), "html", null, true);
                            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t   ";
                        }
                        // line 62
                        echo "\t\t\t\t\t\t\t\t\t\t   ";
                    }
                    // line 63
                    echo "\t\t\t\t\t\t\t\t\t\t   <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t   <div class=\"row ml-auto mr-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t   <label for=\"postAttachment\" class=\"col-sm-2 col-form-label\">";
                    // line 65
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 65), "lang", [], "any", false, false, false, 65), "string", [], "any", false, false, false, 65), "container", [], "any", false, false, false, 65), "editor", [], "any", false, false, false, 65), "next", [], "any", false, false, false, 65), "attachment", [], "any", false, false, false, 65), "title", [], "any", false, false, false, 65), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t   <div class=\"custom-file h-auto col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t   <input type=\"file\" class=\"custom-file-input\" id=\"discussionAttachment\" multiple=\"multiple\" name=\"discussion_attachment\" accept=\"";
                    // line 67
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 67), "editor", [], "any", false, false, false, 67), "attachments", [], "any", false, false, false, 67), "getAllowedExtensionsForInput", [], "method", false, false, false, 67), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"custom-file-label shadow-sm\" for=\"discussionAttachment\" data-text=\"";
                    // line 68
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 68), "lang", [], "any", false, false, false, 68), "string", [], "any", false, false, false, 68), "container", [], "any", false, false, false, 68), "buttons", [], "any", false, false, false, 68), "browse", [], "any", false, false, false, 68), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 68), "lang", [], "any", false, false, false, 68), "string", [], "any", false, false, false, 68), "container", [], "any", false, false, false, 68), "buttons", [], "any", false, false, false, 68), "select_file", [], "any", false, false, false, 68), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t   <small id=\"discussionAttachment_Size\" class=\"form-text text-muted mt-lg-1 mt-2\">";
                    // line 69
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 69), "lang", [], "any", false, false, false, 69), "parse", [], "any", false, false, false, 69), "Parse", [0 => "container.editor.next.attachment.max_size_text", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 69), "attachment_max_size", [], "any", false, false, false, 69)], "method", false, false, false, 69);
                    echo "</small>
\t\t\t\t\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t   <div class=\"d-flex align-items-center pt-3\">
\t\t\t\t\t\t\t\t   <p class=\"font-italic mb-0\">";
                    // line 77
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 77), "lang", [], "any", false, false, false, 77), "parse", [], "any", false, false, false, 77), "Parse", [0 => "container.editor.shared_by", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "visitor", [], "any", false, false, false, 77), "username", [], "any", false, false, false, 77)], "method", false, false, false, 77);
                    echo "</p>
\t\t\t\t\t\t\t\t   <div class=\"ml-auto\">
\t\t\t\t\t\t\t\t\t   <button type=\"submit\" class=\"btn btn-app-discussion icon send\">";
                    // line 79
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 79), "lang", [], "any", false, false, false, 79), "string", [], "any", false, false, false, 79), "container", [], "any", false, false, false, 79), "buttons", [], "any", false, false, false, 79), "submit", [], "any", false, false, false, 79), "html", null, true);
                    echo "</button>
\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t   </div>
\t\t\t\t\t   </div>
\t\t\t\t   </div>
\t\t\t   </div>
\t\t   </form>
\t\t";
                } else {
                    // line 88
                    echo "\t\t   <div class=\"text-center text-dark mb-3\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 88), "lang", [], "any", false, false, false, 88), "string", [], "any", false, false, false, 88), "container", [], "any", false, false, false, 88), "visitor", [], "any", false, false, false, 88), "ban_message", [], "any", false, false, false, 88), "html", null, true);
                    echo "</div>
\t\t";
                }
                // line 90
                echo "\t";
            } else {
                // line 91
                echo "\t\t<div class=\"app-post app-post-create guest bg-light shadow rounded\">
\t\t\t<div class=\"post-layout mt-2 mb-4\">
\t\t\t\t<div class=\"progress d-none\">
\t\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"post-user\">
\t\t\t\t\t<div class=\"guest-avatar\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"post-content pt-1\">
\t\t\t\t\t<div class=\"title-area mb-0\">
\t\t\t\t\t\t<textarea data-ui=\"login-attempt\" class=\"w-100\" rows=\"1\" wrap=\"soft\" name=\"post-title\" placeholder=\"";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 101), "lang", [], "any", false, false, false, 101), "string", [], "any", false, false, false, 101), "container", [], "any", false, false, false, 101), "editor", [], "any", false, false, false, 101), "placeholder", [], "any", false, false, false, 101), "new_post", [], "any", false, false, false, 101), "html", null, true);
                echo "\" maxlength=\"45\" minlength=\"10\" data-single-line=\"true\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "macro.editor.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 101,  252 => 91,  249 => 90,  243 => 88,  231 => 79,  226 => 77,  215 => 69,  209 => 68,  205 => 67,  200 => 65,  196 => 63,  193 => 62,  186 => 58,  185 => 57,  178 => 53,  177 => 52,  172 => 49,  169 => 48,  167 => 47,  160 => 43,  153 => 38,  147 => 35,  144 => 34,  139 => 31,  133 => 30,  120 => 28,  116 => 27,  109 => 26,  105 => 25,  101 => 24,  97 => 23,  94 => 22,  92 => 21,  85 => 18,  80 => 16,  76 => 14,  66 => 7,  59 => 4,  56 => 3,  53 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro editor(id, title = false) %}
\t{% if app.user.loggedIn() %}
\t\t{% if not app.user.getActiveBan(app.visitor.user_id) %}
\t\t   <form method=\"post\" id=\"{{ id }}\" enctype=\"multipart/form-data\">
\t\t\t   <div class=\"app-post app-post-create position-relative bg-light shadow rounded\">
\t\t\t\t   <div class=\"hide-editor d-none\">
\t\t\t\t\t   <div class=\"backdrop d-flex align-items-center justify-content-center\">{{ app.sub.lang.string.index.search.stop_search }}</div>
\t\t\t\t   </div>
\t\t\t\t   <div class=\"post-layout mt-2 mb-4\">
\t\t\t\t\t   <div class=\"progress d-none\">
\t\t\t\t\t\t   <div class=\"indeterminate\"></div>
\t\t\t\t\t   </div>
\t\t\t\t\t   <div class=\"post-user\">
\t\t\t\t\t\t   {{ app.sub.user.link.setUser(app.visitor.user_id) }}
\t\t\t\t\t\t   {% autoescape 'html' %}
\t\t\t\t\t\t\t   {{ app.sub.user.link.getProfilePicture(false)|raw }}
\t\t\t\t\t\t   {% endautoescape %}
\t\t\t\t\t\t   {{ app.sub.user.unsetUser() }}
\t\t\t\t\t   </div>
\t\t\t\t\t   <div class=\"post-content pt-1\">
\t\t\t\t\t\t   {% if title %}
\t\t\t\t\t\t\t   <div class=\"title-area d-flex flex-lg-row flex-column mb-2\">
\t\t\t\t\t\t\t\t   <textarea data-ui=\"show-editor\" rows=\"1\" wrap=\"soft\" name=\"post-title\" placeholder=\"{{ app.sub.lang.string.container.editor.placeholder.title }}\" data-single-line=\"true\"></textarea>
\t\t\t\t\t\t\t\t   <select class=\"selectpicker ml-lg-auto pt-2 pt-lg-0\" data-live-search=\"true\" title=\"{{ app.sub.lang.string.container.editor.placeholder.forum }}\" name=\"forum\">
\t\t\t\t\t\t\t\t\t   {% for item in app.string.forum.getForumList() %}
\t\t\t\t\t\t\t\t\t\t   <option value=\"{{ item.forum_id }}\">{{ item.title }}</option>
\t\t\t\t\t\t\t\t\t\t   {% for sub in app.string.forum.getForumList(item.forum_id) %}
\t\t\t\t\t\t\t\t\t\t\t   <option data-content=\"<span class='sub'>{{ sub.title }}</span\" value=\"{{ sub.forum_id }}\">{{ sub.title }}</option>
\t\t\t\t\t\t\t\t\t\t   {% endfor %}
\t\t\t\t\t\t\t\t\t   {% endfor %}
\t\t\t\t\t\t\t\t   </select>
\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t   {% else %}
\t\t\t\t\t\t\t   <div class=\"title-area in-discussion d-flex mb-2\">
\t\t\t\t\t\t\t\t   <textarea class=\"w-100\" rows=\"1\" wrap=\"soft\" name=\"post-title\" placeholder=\"{{ app.sub.lang.string.container.editor.placeholder.write }}\" data-ui=\"show-editor\" data-single-line=\"true\"></textarea>
\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t   {% endif %}
\t\t\t\t\t\t   <div class=\"app-writer-area animate slideIn d-none\">
\t\t\t\t\t\t\t   <textarea class=\"w-100\" id=\"post-editor\" name=\"content\"></textarea>
\t\t\t\t\t\t\t   <div class=\"mt-3\">
\t\t\t\t\t\t\t\t   <div class=\"js-appExpandNodes rounded shadow-sm mb-3 d-none\">
\t\t\t\t\t\t\t\t\t   <a data-toggle=\"collapse\" href=\"#appCollapsePost_Options\" role=\"button\" aria-expanded=\"true\"
\t\t\t\t\t\t\t\t\t\t       aria-controls=\"appCollapsePost_Options\">{{ app.sub.lang.string.container.editor.next.text }}</a>
\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t\t   <div class=\"collapse show\" id=\"appCollapsePost_Options\">
\t\t\t\t\t\t\t\t\t   <div class=\"pl-0 pr-0 pt-0\">
\t\t\t\t\t\t\t\t\t\t   {% if title %}
\t\t\t\t\t\t\t\t\t\t       {% if app.user.loggedIn() and app.visitor.is_admin %}
\t\t\t\t\t\t\t\t\t\t\t\t   <div class=\"d-lg-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t   <div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   <input class=\"form-check-input mt-1\" type=\"checkbox\" id=\"is_pinned\" name=\"is_pinned\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"form-check-label\" for=\"is_pinned\">{{
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   app.sub.lang.string.container.editor.next.admin_options.pinned }}</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t   <div class=\"form-check ml-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   <input class=\"form-check-input mt-1\" type=\"checkbox\" id=\"is_locked\" name=\"is_locked\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"form-check-label\" for=\"is_locked\">{{
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   app.sub.lang.string.container.editor.next.admin_options.locked }}</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t   {% endif %}
\t\t\t\t\t\t\t\t\t\t   {% endif %}
\t\t\t\t\t\t\t\t\t\t   <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t   <div class=\"row ml-auto mr-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t   <label for=\"postAttachment\" class=\"col-sm-2 col-form-label\">{{ app.sub.lang.string.container.editor.next.attachment.title }}</label>
\t\t\t\t\t\t\t\t\t\t\t\t   <div class=\"custom-file h-auto col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t   <input type=\"file\" class=\"custom-file-input\" id=\"discussionAttachment\" multiple=\"multiple\" name=\"discussion_attachment\" accept=\"{{ app.sub.editor.attachments.getAllowedExtensionsForInput() }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"custom-file-label shadow-sm\" for=\"discussionAttachment\" data-text=\"{{ app.sub.lang.string.container.buttons.browse }}\">{{ app.sub.lang.string.container.buttons.select_file }}</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t   <small id=\"discussionAttachment_Size\" class=\"form-text text-muted mt-lg-1 mt-2\">{{ app.sub.lang.parse.Parse('container.editor.next.attachment.max_size_text', app.settings.attachment_max_size)|raw }}</small>
\t\t\t\t\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t   <div class=\"d-flex align-items-center pt-3\">
\t\t\t\t\t\t\t\t   <p class=\"font-italic mb-0\">{{ app.sub.lang.parse.Parse('container.editor.shared_by', app.visitor.username)|raw }}</p>
\t\t\t\t\t\t\t\t   <div class=\"ml-auto\">
\t\t\t\t\t\t\t\t\t   <button type=\"submit\" class=\"btn btn-app-discussion icon send\">{{ app.sub.lang.string.container.buttons.submit }}</button>
\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t   </div>
\t\t\t\t\t   </div>
\t\t\t\t   </div>
\t\t\t   </div>
\t\t   </form>
\t\t{% else %}
\t\t   <div class=\"text-center text-dark mb-3\">{{ app.sub.lang.string.container.visitor.ban_message }}</div>
\t\t{% endif %}
\t{% else %}
\t\t<div class=\"app-post app-post-create guest bg-light shadow rounded\">
\t\t\t<div class=\"post-layout mt-2 mb-4\">
\t\t\t\t<div class=\"progress d-none\">
\t\t\t\t\t<div class=\"indeterminate\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"post-user\">
\t\t\t\t\t<div class=\"guest-avatar\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"post-content pt-1\">
\t\t\t\t\t<div class=\"title-area mb-0\">
\t\t\t\t\t\t<textarea data-ui=\"login-attempt\" class=\"w-100\" rows=\"1\" wrap=\"soft\" name=\"post-title\" placeholder=\"{{ app.sub.lang.string.container.editor.placeholder.new_post }}\" maxlength=\"45\" minlength=\"10\" data-single-line=\"true\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{% endif %}
{% endmacro %}", "macro.editor.tpl", "C:\\wamp64\\www\\mention\\src\\Templates\\Default\\Macros\\macro.editor.tpl");
    }
}
