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

/* @addon:gestures/doubletap_reactions.tpl */
class __TwigTemplate_7d9e2d7af385d82f85b568820d8aaa7d3f9e04aaf0a828e177d789d8d1509b60 extends Template
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
        echo "<div class=\"app-post-doubletap-like animate fadeIn d-none\">
    <div class=\"app-reactions reaction-md\">
        <div class=\"reaction like d-none\"></div>
        <div class=\"reaction love d-none\"></div>
        <div class=\"reaction haha d-none\"></div>
        <div class=\"reaction wow d-none\"></div>
        <div class=\"reaction sad d-none\"></div>
        <div class=\"reaction angry d-none\"></div>
        <div class=\"reaction dislike d-none\"></div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@addon:gestures/doubletap_reactions.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"app-post-doubletap-like animate fadeIn d-none\">
    <div class=\"app-reactions reaction-md\">
        <div class=\"reaction like d-none\"></div>
        <div class=\"reaction love d-none\"></div>
        <div class=\"reaction haha d-none\"></div>
        <div class=\"reaction wow d-none\"></div>
        <div class=\"reaction sad d-none\"></div>
        <div class=\"reaction angry d-none\"></div>
        <div class=\"reaction dislike d-none\"></div>
    </div>
</div>", "@addon:gestures/doubletap_reactions.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Gestures\\Templates\\doubletap_reactions.tpl");
    }
}
