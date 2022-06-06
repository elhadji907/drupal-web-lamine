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

/* themes/contrib/druadmin_lte_theme/templates/block/block--system-main-block.html.twig */
class __TwigTemplate_a2ef03e628047b53584f199074abb487a904c25176ca2b4a0d651a83f0550401 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "<div class=\"tab-content\">
  <div class=\"tab-pane active\">
    ";
        // line 31
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "  </div>
</div>
";
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 31, $this->source), "html", null, true);
    }

    public function getTemplateName()
    {
        return "themes/contrib/druadmin_lte_theme/templates/block/block--system-main-block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 31,  46 => 32,  44 => 31,  40 => 29,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/druadmin_lte_theme/templates/block/block--system-main-block.html.twig", "/var/www/html/drupal/themes/contrib/druadmin_lte_theme/templates/block/block--system-main-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 31);
        static $filters = array("escape" => 31);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block'],
                ['escape'],
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
