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

/* themes/contrib/firma/templates/page.html.twig */
class __TwigTemplate_1cf158bea8e28b9685b66964cb40dc1bbc3fb847a4d52f6282d56867a3c6b842 extends \Twig\Template
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
        // line 1
        echo "\t<div class=\"site-header\">
\t\t<div id=\"top-header\" class=\"uk-background-primary uk-padding-small uk-light\">
\t\t\t<div class=\"uk-container\">
\t\t\t\t<div class=\"uk-flex uk-flex-middle\">
\t\t\t\t\t<div class=\"uk-margin-auto-right uk-visible@m\">
\t\t\t\t\t\t";
        // line 6
        if (($context["show_contact"] ?? null)) {
            // line 7
            echo "\t\t\t\t\t\t<div uk-grid>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"uk-margin-small-right\" uk-icon=\"receiver\"></span>";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 9, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"uk-margin-small-right\" uk-icon=\"mail\"></span>";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 12, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 16
        echo "\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 17
        if (($context["show_social_icon"] ?? null)) {
            // line 18
            echo "\t\t\t\t\t<div class=\"uk-width-auto\">
\t\t\t\t\t\t<div class=\"right-header uk-text-right\">
\t\t\t\t\t\t\t<ul class=\"uk-flex-inline uk-flex-middle uk-flex-nowrap uk-grid-medium\" uk-grid>
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 21, $this->source), "html", null, true);
            echo "\" class=\"uk-icon-button\" uk-icon=\"facebook\"></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 22, $this->source), "html", null, true);
            echo "\" class=\"uk-icon-button\" uk-icon=\"instagram\"></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 23, $this->source), "html", null, true);
            echo "\" class=\"uk-icon-button\" uk-icon=\"twitter\"></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube_url"] ?? null), 24, $this->source), "html", null, true);
            echo "\" class=\"uk-icon-button\" uk-icon=\"youtube\"></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"main-header\" class=\"uk-card uk-card-default uk-section uk-section-default uk-section-xsmall\" uk-header uk-sticky=\"show-on-up: true; animation: uk-animation-slide-top\">
\t\t\t<div class=\"uk-container\">
\t\t\t\t<nav class=\"uk-navbar-container uk-navbar-transparent\" uk-navbar>
\t\t\t\t\t";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_left", [], "any", false, false, true, 35)) {
            // line 36
            echo "\t\t\t\t\t<div class=\"uk-navbar-left\">
\t\t\t\t\t\t";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_left", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_right", [], "any", false, false, true, 40)) {
            // line 41
            echo "\t\t\t\t\t<div class=\"uk-navbar-right\">
\t\t\t\t\t\t<div class=\"menu uk-text-right uk-visible@m\">
\t\t\t\t\t\t\t";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_right", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a class=\"uk-navbar-toggle uk-hidden@m\" uk-toggle href=\"#mobile-menu\">
\t\t\t\t\t\t\t<div uk-navbar-toggle-icon></div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 49
        echo " 
\t\t\t\t</nav>
\t\t\t\t<div class=\"responsive-menu text-right uk-hidden@m\">
\t\t\t\t\t<div id=\"mobile-menu\" class=\"menu\" uk-offcanvas>
\t\t\t\t\t\t<div class=\"uk-offcanvas-bar\">
\t\t\t\t\t\t\t";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_right", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t";
        // line 63
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 64
            echo "
\t<div id=\"slideshow\" class=\"uk-position-relative uk-visible-toggle\" tabindex=\"-1\" uk-slideshow=\"";
            // line 65
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slideshow_ratio"] ?? null), 65, $this->source), "html", null, true);
            echo "\">
\t\t<ul class=\"uk-slideshow-items\">
\t\t\t";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 68
                echo "\t\t\t";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 68, $this->source));
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "\t\t</ul>
\t\t<a class=\"uk-position-center-left uk-position-small uk-hidden-hover uk-label uk-light\" href=\"#\" uk-slidenav-previous uk-slideshow-item=\"previous\"></a>
\t\t<a class=\"uk-position-center-right uk-position-small uk-hidden-hover uk-label uk-light\" href=\"#\" uk-slidenav-next uk-slideshow-item=\"next\"></a>
\t</div>
\t";
        }
        // line 75
        echo "


\t";
        // line 78
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_up", [], "any", false, false, true, 78)) {
            // line 79
            echo "\t<div class=\"uk-section uk-section-default\">
\t\t<div class=\"uk-container\">
\t\t\t";
            // line 81
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_up", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
            echo "
\t\t</div>
\t</div>
\t";
        }
        // line 85
        echo "

\t";
        // line 87
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_down", [], "any", false, false, true, 87)) {
            // line 88
            echo "\t<div class=\"uk-section uk-section-secondary\">
\t\t<div class=\"uk-container\">
\t\t\t";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_down", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
            echo "
\t\t</div>
\t</div>
\t";
        }
        // line 94
        echo "

\t<!--- Start Content -->
\t";
        // line 97
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 97)) {
            // line 98
            echo "\t<div class=\"main-content\">
\t\t<div class=\"uk-section uk-section-default\">
\t\t\t<div class=\"uk-container\">
\t\t\t\t<div uk-grid>
\t\t\t\t\t";
            // line 102
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 102)) {
                // line 103
                echo "\t\t\t\t\t<div class=\"uk-width-1-4 uk-visible@m\">
\t\t\t\t\t\t";
                // line 104
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 107
            echo "\t\t\t\t\t<div class=\"uk-width-expand\">
\t\t\t\t\t\t";
            // line 108
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 110
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 110)) {
                // line 111
                echo "\t\t\t\t\t<div class=\"uk-width-1-4 uk-visible@m\">
\t\t\t\t\t\t";
                // line 112
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 115
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        // line 120
        echo "\t<!-- End: Content -->


\t";
        // line 123
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 123)) {
            // line 124
            echo "\t<div class=\"uk-section uk-section-muted\">
\t\t<div class=\"uk-container\">
\t\t\t";
            // line 126
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
            echo "
\t\t</div>
\t</div>
\t";
        }
        // line 130
        echo "

\t";
        // line 132
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 132)) {
            // line 133
            echo "\t<div class=\"uk-section uk-section-primary uk-section-xsmall\">
\t\t<div class=\"uk-container\">
\t\t\t<div class=\"uk-flex uk-flex-middle\">
\t\t\t\t<div class=\"uk-width-auto\">
\t\t\t\t\t";
            // line 137
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"uk-margin-auto-left uk-text-center\">
\t\t\t\t\t<a class=\"uk-icon-button\" href=\"\" uk-totop uk-scroll></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/firma/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 137,  289 => 133,  287 => 132,  283 => 130,  276 => 126,  272 => 124,  270 => 123,  265 => 120,  258 => 115,  252 => 112,  249 => 111,  247 => 110,  242 => 108,  239 => 107,  233 => 104,  230 => 103,  228 => 102,  222 => 98,  220 => 97,  215 => 94,  208 => 90,  204 => 88,  202 => 87,  198 => 85,  191 => 81,  187 => 79,  185 => 78,  180 => 75,  173 => 70,  164 => 68,  160 => 67,  155 => 65,  152 => 64,  150 => 63,  138 => 54,  131 => 49,  121 => 43,  117 => 41,  114 => 40,  108 => 37,  105 => 36,  103 => 35,  95 => 29,  87 => 24,  83 => 23,  79 => 22,  75 => 21,  70 => 18,  68 => 17,  65 => 16,  58 => 12,  52 => 9,  48 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/firma/templates/page.html.twig", "/var/www/html/drupal/themes/contrib/firma/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6, "for" => 67);
        static $filters = array("escape" => 9, "raw" => 68);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw'],
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
