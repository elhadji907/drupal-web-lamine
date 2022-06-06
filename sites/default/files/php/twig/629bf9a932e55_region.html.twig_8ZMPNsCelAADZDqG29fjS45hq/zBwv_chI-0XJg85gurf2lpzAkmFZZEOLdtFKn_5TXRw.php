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

/* themes/contrib/ajans/templates/layout/region.html.twig */
class __TwigTemplate_02327bb1b47dbe9ceab4da9c39a25c1a97a66e7bf2d51675004f25ba467bc375 extends \Twig\Template
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
        // line 16
        $context["classes"] = [0 => "region", 1 => ("region-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 18
($context["region"] ?? null), 18, $this->source)))];
        // line 21
        echo "
";
        // line 22
        if (($context["content"] ?? null)) {
            // line 23
            echo "\t";
            if ((\Drupal\Component\Utility\Html::getClass(($context["region"] ?? null)) == "footer")) {
                // line 24
                echo "\t\t<div class=\"uk-child-width-expand\" uk-grid>
\t";
            } elseif ((\Drupal\Component\Utility\Html::getClass(            // line 25
($context["region"] ?? null)) == "footer-bottom")) {
                // line 26
                echo "\t\t<div class=\"uk-flex uk-flex-between\">
\t";
            } elseif ((\Drupal\Component\Utility\Html::getClass(            // line 27
($context["region"] ?? null)) == "navbar-center")) {
                // line 28
                echo "\t";
            } else {
                // line 29
                echo "\t\t<div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 29), 29, $this->source), "html", null, true);
                echo ">
\t";
            }
            // line 30
            echo "  
\t    ";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 31, $this->source), "html", null, true);
            echo "
\t ";
            // line 32
            if ((\Drupal\Component\Utility\Html::getClass(($context["region"] ?? null)) != "navbar-center")) {
                // line 33
                echo "  </div>
";
            }
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/ajans/templates/layout/region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 33,  76 => 32,  72 => 31,  69 => 30,  63 => 29,  60 => 28,  58 => 27,  55 => 26,  53 => 25,  50 => 24,  47 => 23,  45 => 22,  42 => 21,  40 => 18,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/ajans/templates/layout/region.html.twig", "/var/www/html/drupal/themes/contrib/ajans/templates/layout/region.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 22);
        static $filters = array("clean_class" => 18, "escape" => 29);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                []
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
