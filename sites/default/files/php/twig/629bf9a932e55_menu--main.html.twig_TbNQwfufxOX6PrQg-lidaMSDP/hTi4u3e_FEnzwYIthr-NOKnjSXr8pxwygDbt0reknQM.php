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

/* themes/contrib/firma/templates/menu--main.html.twig */
class __TwigTemplate_0f32f60eee64e3c886947711b613307359805b15d8792ff78392214dfe4fc9da extends \Twig\Template
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
                echo "    ";
                // line 37
                $context["classes"] = [0 => (((                // line 38
($context["menu_level"] ?? null) == 0)) ? ("uk-navbar-nav") : ("")), 1 => (((                // line 39
($context["menu_level"] ?? null) > 0)) ? ("uk-nav") : ("")), 2 => (((                // line 40
($context["menu_level"] ?? null) > 0)) ? ("uk-navbar-dropdown-nav") : ("")), 3 => "uk-visible@m"];
                // line 44
                echo "
    ";
                // line 46
                $context["classesm"] = [0 => "uk-list", 1 => "uk-list-divider", 2 => "uk-list-large", 3 => "uk-hidden@m", 4 => "uk-text-uppercase", 5 => "uk-margin-large-top"];
                // line 55
                echo "
    ";
                // line 56
                if ((($context["menu_level"] ?? null) > 0)) {
                    // line 57
                    echo "      <div class=\"uk-navbar-dropdown\">
    ";
                }
                // line 59
                echo "
    <ul";
                // line 60
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 60), 60, $this->source), "html", null, true);
                echo ">
    ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 62
                    echo "      <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                    echo ">
        ";
                    // line 63
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "is_header", [], "any", false, false, true, 63)) {
                        // line 64
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                        echo "
        ";
                    } elseif ( !twig_get_attribute($this->env, $this->source,                     // line 65
$context["item"], "is_divider", [], "any", false, false, true, 65)) {
                        // line 66
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 66), 66, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 66), 66, $this->source)), "html", null, true);
                        echo "
        ";
                    }
                    // line 68
                    echo "        ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 68)) {
                        // line 69
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 69), twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 69), (($context["menu_level"] ?? null) + 1)], 69, $context, $this->getSourceContext()));
                        echo "
        ";
                    }
                    // line 71
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "    </ul>

    <ul";
                // line 75
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 75), "addClass", [0 => ($context["classesm"] ?? null)], "method", false, false, true, 75), 75, $this->source), "html", null, true);
                echo ">
    ";
                // line 76
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 77
                    echo "      <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                    echo ">
        ";
                    // line 78
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "is_header", [], "any", false, false, true, 78)) {
                        // line 79
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                        echo "
        ";
                    } elseif ( !twig_get_attribute($this->env, $this->source,                     // line 80
$context["item"], "is_divider", [], "any", false, false, true, 80)) {
                        // line 81
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 81), 81, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 81), 81, $this->source)), "html", null, true);
                        echo "
        ";
                    }
                    // line 83
                    echo "        ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 83)) {
                        // line 84
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 84), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 84, $context, $this->getSourceContext()));
                        echo "
        ";
                    }
                    // line 86
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "    </ul>

    ";
                // line 90
                if ((($context["menu_level"] ?? null) > 0)) {
                    // line 91
                    echo "      </div>
    ";
                }
                // line 93
                echo "  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/firma/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 93,  194 => 91,  192 => 90,  188 => 88,  181 => 86,  175 => 84,  172 => 83,  166 => 81,  164 => 80,  159 => 79,  157 => 78,  152 => 77,  148 => 76,  144 => 75,  140 => 73,  133 => 71,  127 => 69,  124 => 68,  118 => 66,  116 => 65,  111 => 64,  109 => 63,  104 => 62,  100 => 61,  96 => 60,  93 => 59,  89 => 57,  87 => 56,  84 => 55,  82 => 46,  79 => 44,  77 => 40,  76 => 39,  75 => 38,  74 => 37,  72 => 36,  69 => 35,  66 => 34,  51 => 33,  44 => 31,  41 => 26,  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/firma/templates/menu--main.html.twig", "/var/www/html/drupal/themes/contrib/firma/templates/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 25, "macro" => 33, "if" => 35, "set" => 37, "for" => 61);
        static $filters = array("escape" => 60);
        static $functions = array("link" => 66);

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
