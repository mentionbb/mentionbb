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

/* @Addon_PacmanGame/pacman.tpl */
class __TwigTemplate_e263ecd5ba1786967621af6074652d4c69f362260cc7d1039b2a7991fdd8755e extends Template
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
        echo "<!DOCTYPE html>
<html 
    lang=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 3), "lang", [], "any", false, false, false, 3), "default", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3), "html", null, true);
        echo "\" 
    dir=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 4), "lang", [], "any", false, false, false, 4), "default", [], "any", false, false, false, 4), "text_direction", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
<head>
    <link href=\"https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap\" rel=\"stylesheet\" />
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" />
</head>
<body>
    ";
        // line 11
        echo "    <div id=\"overflow-mask\" class=\"overflow-mask\">
        <img id=\"backdrop\" class=\"backdrop\" src='";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 12), "html", null, true);
        echo "/vendor/pacman/game/app/style/graphics/backdrop.png'>
    
        <div id=\"fps-display\" class=\"fps-display\"></div>
        <div id=\"preload-div\" class=\"preload-div\"></div>
    
        <div id=\"main-menu-container\" class=\"main-menu-container\">
            <img id=\"logo\" class=\"logo\" src='";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 18), "html", null, true);
        echo "/vendor/pacman/game/app/style/graphics/pacman_logo.png'>
            <button id=\"game-start\" class=\"game-start\">
                ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 20), "lang", [], "any", false, false, false, 20), "string", [], "any", false, false, false, 20), "pacman", [], "any", false, false, false, 20), "game", [], "any", false, false, false, 20), "play", [], "any", false, false, false, 20), "html", null, true);
        echo "
            </button>
        </div>
    
        <div class=\"header-buttons\">
            <button>
                <i id=\"pause-button\" class=\"material-icons\">
                    pause
                </i>
            </button>
            <button>
                <i id=\"sound-button\" class=\"material-icons\"></i>
            </button>
        </div>
    
        <div id=\"paused-text\" class=\"paused-text\">
            ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 36), "lang", [], "any", false, false, false, 36), "string", [], "any", false, false, false, 36), "pacman", [], "any", false, false, false, 36), "game", [], "any", false, false, false, 36), "paused", [], "any", false, false, false, 36), "html", null, true);
        echo "
        </div>
    
        <div id=\"game-ui\" class=\"game-ui\">
            <div id=\"row-top\" class=\"row top\">
                <div class=\"column _25\">
                    <div class=\"one-up\">1UP</div>
                    <div id=\"points-display\"></div>
                </div>
                <div class=\"column _50\">
                    <div>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 46), "lang", [], "any", false, false, false, 46), "string", [], "any", false, false, false, 46), "pacman", [], "any", false, false, false, 46), "game", [], "any", false, false, false, 46), "high_score", [], "any", false, false, false, 46), "html", null, true);
        echo "</div>
                    <div id=\"high-score-display\"></div>
                </div>
            </div>
    
            <div id=\"maze\" class=\"maze\">
                <img id=\"maze-img\" class=\"maze-img\" src='";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 52), "html", null, true);
        echo "/vendor/pacman/game/app/style//graphics/spriteSheets/maze/maze_blue.svg'>
                <div id=\"maze-cover\" class=\"maze-cover\"></div>
                <div id=\"dot-container\"></div>
                <p id=\"pacman\" class=\"pacman\"></p>
                <p id=\"pacman-arrow\" class=\"pacman\"></p>
                <p id=\"clyde\" class=\"ghost\"></p>
                <p id=\"inky\" class=\"ghost\"></p>
                <p id=\"pinky\" class=\"ghost\"></p>
                <p id=\"blinky\" class=\"ghost\"></p>
            </div>
    
            <div id=\"bottom-row\" class=\"row bottom\">
                <div id=\"extra-lives\" class=\"extra-lives\"></div>
                <div id=\"fruit-display\" class=\"fruit-display\"></div>
            </div>
        </div>
    
        <div id=\"movement-buttons\" class=\"movement-buttons\">
            <div class=\"row\">
                <button id=\"button-up\" class=\"button-up\">
                    <i class=\"material-icons\">keyboard_arrow_up</i>
                </button>
            </div>
            <div class=\"row\">
                <button id=\"button-left\" class=\"button-left\">
                    <i class=\"material-icons\">keyboard_arrow_left</i>
                </button>
                <button id=\"button-right\" class=\"button-right\">
                    <i class=\"material-icons\">keyboard_arrow_right</i>
                </button>
            </div>
            <div class=\"row\">
                <button id=\"button-down\" class=\"button-down\">
                    <i class=\"material-icons\">keyboard_arrow_down</i>
                </button>
            </div>
        </div>
    
        <div id=\"left-cover\" class=\"loading-cover left\"></div>
        <div id=\"right-cover\" class=\"loading-cover right\"></div>
        <div id=\"loading-container\" class=\"loading-container\">
            <div id=\"loading-pacman\" class=\"loading-pacman\"></div>
            <div id=\"loading-dot-mask\" class=\"loading-dot-mask\"></div>
            <div class=\"loading-dot _5\"></div>
            <div class=\"loading-dot _10\"></div>
            <div class=\"loading-dot _15\"></div>
            <div class=\"loading-dot _20\"></div>
            <div class=\"loading-dot _25\"></div>
            <div class=\"loading-dot _30\"></div>
            <div class=\"loading-dot _35\"></div>
            <div class=\"loading-dot _40\"></div>
            <div class=\"loading-dot _45\"></div>
            <div class=\"loading-dot _50\"></div>
            <div class=\"loading-dot _55\"></div>
            <div class=\"loading-dot _60\"></div>
            <div class=\"loading-dot _65\"></div>
            <div class=\"loading-dot _70\"></div>
            <div class=\"loading-dot _75\"></div>
            <div class=\"loading-dot _80\"></div>
            <div class=\"loading-dot _85\"></div>
            <div class=\"loading-dot _90\"></div>
            <div class=\"loading-dot _95\"></div>
        </div>
    
        <div id=\"error-message\" class=\"error-message\">
            <div class=\"header\">
                <div>";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 118), "lang", [], "any", false, false, false, 118), "string", [], "any", false, false, false, 118), "pacman", [], "any", false, false, false, 118), "game", [], "any", false, false, false, 118), "error", [], "any", false, false, false, 118), "title", [], "any", false, false, false, 118), "html", null, true);
        echo "</div>
                <div class=\"error-pacman\"></div>
            </div>
            <div class=\"body\">";
        // line 121
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "sub", [], "any", false, false, false, 121), "lang", [], "any", false, false, false, 121), "string", [], "any", false, false, false, 121), "pacman", [], "any", false, false, false, 121), "game", [], "any", false, false, false, 121), "error", [], "any", false, false, false, 121), "text", [], "any", false, false, false, 121);
        echo "</div>
        </div>
    
        <script>
            window.onload = () => {
                let gameCoordinator = new GameCoordinator();
            }
        </script>
    </div>
    <script type=\"text/javascript\" src=\"";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 130), "html", null, true);
        echo "/vendor/jquery/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 131), "html", null, true);
        echo "/vendor/pacman/game/build/app.js?v=1643546779\"></script>

    <script>
        var app = {};
        jQuery.extend(true, app, {
            config: {
\t\t\t    settings: {
\t\t\t\t    public_dir: \"";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "public_dir", [], "any", false, false, false, 138), "html", null, true);
        echo "\"
                }
            }
        });
    </script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "@Addon_PacmanGame/pacman.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 138,  203 => 131,  199 => 130,  187 => 121,  181 => 118,  112 => 52,  103 => 46,  90 => 36,  71 => 20,  66 => 18,  57 => 12,  54 => 11,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html 
    lang=\"{{ app.sub.lang.default.id }}\" 
    dir=\"{{ app.sub.lang.default.text_direction }}\">
<head>
    <link href=\"https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap\" rel=\"stylesheet\" />
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" />
</head>
<body>
    {# Thanks to, Pacman html/js created by: https://github.com/bward2/pacman-js #}
    <div id=\"overflow-mask\" class=\"overflow-mask\">
        <img id=\"backdrop\" class=\"backdrop\" src='{{ app.public_dir }}/vendor/pacman/game/app/style/graphics/backdrop.png'>
    
        <div id=\"fps-display\" class=\"fps-display\"></div>
        <div id=\"preload-div\" class=\"preload-div\"></div>
    
        <div id=\"main-menu-container\" class=\"main-menu-container\">
            <img id=\"logo\" class=\"logo\" src='{{ app.public_dir }}/vendor/pacman/game/app/style/graphics/pacman_logo.png'>
            <button id=\"game-start\" class=\"game-start\">
                {{ app.sub.lang.string.pacman.game.play }}
            </button>
        </div>
    
        <div class=\"header-buttons\">
            <button>
                <i id=\"pause-button\" class=\"material-icons\">
                    pause
                </i>
            </button>
            <button>
                <i id=\"sound-button\" class=\"material-icons\"></i>
            </button>
        </div>
    
        <div id=\"paused-text\" class=\"paused-text\">
            {{ app.sub.lang.string.pacman.game.paused }}
        </div>
    
        <div id=\"game-ui\" class=\"game-ui\">
            <div id=\"row-top\" class=\"row top\">
                <div class=\"column _25\">
                    <div class=\"one-up\">1UP</div>
                    <div id=\"points-display\"></div>
                </div>
                <div class=\"column _50\">
                    <div>{{ app.sub.lang.string.pacman.game.high_score }}</div>
                    <div id=\"high-score-display\"></div>
                </div>
            </div>
    
            <div id=\"maze\" class=\"maze\">
                <img id=\"maze-img\" class=\"maze-img\" src='{{ app.public_dir }}/vendor/pacman/game/app/style//graphics/spriteSheets/maze/maze_blue.svg'>
                <div id=\"maze-cover\" class=\"maze-cover\"></div>
                <div id=\"dot-container\"></div>
                <p id=\"pacman\" class=\"pacman\"></p>
                <p id=\"pacman-arrow\" class=\"pacman\"></p>
                <p id=\"clyde\" class=\"ghost\"></p>
                <p id=\"inky\" class=\"ghost\"></p>
                <p id=\"pinky\" class=\"ghost\"></p>
                <p id=\"blinky\" class=\"ghost\"></p>
            </div>
    
            <div id=\"bottom-row\" class=\"row bottom\">
                <div id=\"extra-lives\" class=\"extra-lives\"></div>
                <div id=\"fruit-display\" class=\"fruit-display\"></div>
            </div>
        </div>
    
        <div id=\"movement-buttons\" class=\"movement-buttons\">
            <div class=\"row\">
                <button id=\"button-up\" class=\"button-up\">
                    <i class=\"material-icons\">keyboard_arrow_up</i>
                </button>
            </div>
            <div class=\"row\">
                <button id=\"button-left\" class=\"button-left\">
                    <i class=\"material-icons\">keyboard_arrow_left</i>
                </button>
                <button id=\"button-right\" class=\"button-right\">
                    <i class=\"material-icons\">keyboard_arrow_right</i>
                </button>
            </div>
            <div class=\"row\">
                <button id=\"button-down\" class=\"button-down\">
                    <i class=\"material-icons\">keyboard_arrow_down</i>
                </button>
            </div>
        </div>
    
        <div id=\"left-cover\" class=\"loading-cover left\"></div>
        <div id=\"right-cover\" class=\"loading-cover right\"></div>
        <div id=\"loading-container\" class=\"loading-container\">
            <div id=\"loading-pacman\" class=\"loading-pacman\"></div>
            <div id=\"loading-dot-mask\" class=\"loading-dot-mask\"></div>
            <div class=\"loading-dot _5\"></div>
            <div class=\"loading-dot _10\"></div>
            <div class=\"loading-dot _15\"></div>
            <div class=\"loading-dot _20\"></div>
            <div class=\"loading-dot _25\"></div>
            <div class=\"loading-dot _30\"></div>
            <div class=\"loading-dot _35\"></div>
            <div class=\"loading-dot _40\"></div>
            <div class=\"loading-dot _45\"></div>
            <div class=\"loading-dot _50\"></div>
            <div class=\"loading-dot _55\"></div>
            <div class=\"loading-dot _60\"></div>
            <div class=\"loading-dot _65\"></div>
            <div class=\"loading-dot _70\"></div>
            <div class=\"loading-dot _75\"></div>
            <div class=\"loading-dot _80\"></div>
            <div class=\"loading-dot _85\"></div>
            <div class=\"loading-dot _90\"></div>
            <div class=\"loading-dot _95\"></div>
        </div>
    
        <div id=\"error-message\" class=\"error-message\">
            <div class=\"header\">
                <div>{{ app.sub.lang.string.pacman.game.error.title }}</div>
                <div class=\"error-pacman\"></div>
            </div>
            <div class=\"body\">{{ app.sub.lang.string.pacman.game.error.text|raw }}</div>
        </div>
    
        <script>
            window.onload = () => {
                let gameCoordinator = new GameCoordinator();
            }
        </script>
    </div>
    <script type=\"text/javascript\" src=\"{{ app.public_dir }}/vendor/jquery/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"{{ app.public_dir }}/vendor/pacman/game/build/app.js?v=1643546779\"></script>

    <script>
        var app = {};
        jQuery.extend(true, app, {
            config: {
\t\t\t    settings: {
\t\t\t\t    public_dir: \"{{ app.public_dir }}\"
                }
            }
        });
    </script>
</body>
</html>", "@Addon_PacmanGame/pacman.tpl", "C:\\wamp64\\www\\mention\\src\\Addons\\Pacman\\Templates\\pacman.tpl");
    }
}
