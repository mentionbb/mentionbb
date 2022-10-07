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

/* @addon:gestures/contextmenu.tpl */
class __TwigTemplate_1867b6468254a37d26b0dcaa4433efa9ed12ee641a4de84f9a536b533ae01cf4 extends Template
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
        echo "<div class=\"dropdown\">
    <div class=\"js-AppGestures-ContextMenu dropdown-menu custom-menu custom-menu-md shadow p-0\"
        aria-labelledby=\"dropdownMenuButton\">
        <div class=\"scrollable\">
            <a class=\"notification quick-menu d-flex\" data-ui=\"mention-gesture\" data-mode=\"disable\" href=\"#\">
                <div class=\"text ml-3\">
                    <span class=\"icon bookmark active\">Koleksiyona eklendi</span>
                </div>
            </a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@addon:gestures/contextmenu.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"dropdown\">
    <div class=\"js-AppGestures-ContextMenu dropdown-menu custom-menu custom-menu-md shadow p-0\"
        aria-labelledby=\"dropdownMenuButton\">
        <div class=\"scrollable\">
            <a class=\"notification quick-menu d-flex\" data-ui=\"mention-gesture\" data-mode=\"disable\" href=\"#\">
                <div class=\"text ml-3\">
                    <span class=\"icon bookmark active\">Koleksiyona eklendi</span>
                </div>
            </a>
        </div>
    </div>
</div>", "@addon:gestures/contextmenu.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Gestures\\Templates\\contextmenu.tpl");
    }
}
