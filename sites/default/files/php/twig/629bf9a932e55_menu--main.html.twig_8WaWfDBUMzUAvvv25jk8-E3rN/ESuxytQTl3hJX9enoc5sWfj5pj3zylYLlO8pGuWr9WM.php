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

/* themes/contrib/ajans/templates/navigation/menu--main.html.twig */
class __TwigTemplate_b15e1e57453f1c373f559dc72e5effba6a27793caab22f06c1cbf31a4b6d0b0c extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 26
        echo "
";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 31, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 33
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 34
            echo "  ";
            $macros["menus"] = $this;
            // line 35
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 36
                echo "  
    ";
                // line 38
                $context["classes"] = [0 => (((                // line 39
($context["menu_level"] ?? null) == 0)) ? ("uk-navbar-nav") : ("")), 1 => (((                // line 40
($context["menu_level"] ?? null) > 0)) ? ("uk-nav") : ("")), 2 => (((                // line 41
($context["menu_level"] ?? null) > 0)) ? ("uk-navbar-dropdown-nav") : ("")), 3 => "uk-visible@m"];
                // line 45
                echo "


    ";
                // line 48
                if ((($context["menu_level"] ?? null) > 0)) {
                    // line 49
                    echo "      <div class=\"uk-navbar-dropdown\">
    ";
                }
                // line 51
                echo "
    <ul";
                // line 52
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 52), 52, $this->source), "html", null, true);
                echo ">
    ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 54
                    echo "      <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                    echo ">
        ";
                    // line 55
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "is_header", [], "any", false, false, true, 55)) {
                        // line 56
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                        echo "
        ";
                    } elseif ( !twig_get_attribute($this->env, $this->source,                     // line 57
$context["item"], "is_divider", [], "any", false, false, true, 57)) {
                        // line 58
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 58), 58, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 58), 58, $this->source)), "html", null, true);
                        echo "
        ";
                    }
                    // line 60
                    echo "        ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 60)) {
                        // line 61
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 61), twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 61), (($context["menu_level"] ?? null) + 1)], 61, $context, $this->getSourceContext()));
                        echo "
        ";
                    }
                    // line 63
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "    </ul>

    ";
                // line 67
                if ((($context["menu_level"] ?? null) > 0)) {
                    // line 68
                    echo "      </div>
    ";
                }
                // line 70
                echo "    
    
        ";
                // line 73
                $context["classesm"] = [0 => "uk-nav", 1 => "uk-navbar-dropdown-nav"];
                // line 78
                echo "
    <div class=\"uk-hidden@m\">
        <a class=\"uk-navbar-toggle\" uk-navbar-toggle-icon href=\"#\"></a>
        <div class=\"uk-navbar-dropdown\">
            <ul";
                // line 82
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 82), "addClass", [0 => ($context["classesm"] ?? null)], "method", false, false, true, 82), 82, $this->source), "html", null, true);
                echo ">
                ";
                // line 83
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 84
                    echo "                    <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                    echo ">
                        ";
                    // line 85
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "is_header", [], "any", false, false, true, 85)) {
                        // line 86
                        echo "                          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                        echo "
                        ";
                    } elseif ( !twig_get_attribute($this->env, $this->source,                     // line 87
$context["item"], "is_divider", [], "any", false, false, true, 87)) {
                        // line 88
                        echo "                          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 88), 88, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 88), 88, $this->source)), "html", null, true);
                        echo "
                        ";
                    }
                    // line 90
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 90)) {
                        // line 91
                        echo "                          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 91), twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 91), (($context["menu_level"] ?? null) + 1)], 91, $context, $this->getSourceContext()));
                        echo "
                        ";
                    }
                    // line 93
                    echo "                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                echo "            </ul>
        </div>
    </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/ajans/templates/navigation/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 95,  197 => 93,  191 => 91,  188 => 90,  182 => 88,  180 => 87,  175 => 86,  173 => 85,  168 => 84,  164 => 83,  160 => 82,  154 => 78,  152 => 73,  148 => 70,  144 => 68,  142 => 67,  138 => 65,  131 => 63,  125 => 61,  122 => 60,  116 => 58,  114 => 57,  109 => 56,  107 => 55,  102 => 54,  98 => 53,  94 => 52,  91 => 51,  87 => 49,  85 => 48,  80 => 45,  78 => 41,  77 => 40,  76 => 39,  75 => 38,  72 => 36,  69 => 35,  66 => 34,  51 => 33,  44 => 31,  41 => 26,  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/ajans/templates/navigation/menu--main.html.twig", "/var/www/html/drupal/themes/contrib/ajans/templates/navigation/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 25, "macro" => 33, "if" => 35, "set" => 38, "for" => 53);
        static $filters = array("escape" => 52);
        static $functions = array("link" => 58);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'set', 'for'],
                ['escape'],
                ['link']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
