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

/* themes/contrib/ajans/templates/layout/page--front.html.twig */
class __TwigTemplate_f5fa187b37e85e4b2b1485d8323ad836b18de7a5b1d14c0ca1be90688b888de2 extends \Twig\Template
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
        echo "<div class=\"uk-section uk-section-default uk-section-xsmall shadow\" uk-sticky=\"show-on-up: true\">
\t<div class=\"uk-container\">
\t\t<nav class=\"uk-navbar-container uk-navbar-transparent\" uk-navbar=\"dropbar: true; dropbar-mode: push; mode: click; boundary-align: true; align: center\">

\t\t\t";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_left", [], "any", false, false, true, 5)) {
            // line 6
            echo "\t\t\t\t<div class=\"uk-navbar-left\">
\t\t\t\t\t";
            // line 7
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_left", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 10
        echo "
\t\t\t";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_center", [], "any", false, false, true, 11)) {
            // line 12
            echo "\t\t\t\t<div class=\"uk-navbar-center\">
\t\t\t\t\t";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_center", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 16
        echo "
\t\t\t<div class=\"uk-navbar-right uk-visible@m\">
\t\t\t\t";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_right", [], "any", false, false, true, 18)) {
            // line 19
            echo "\t\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_right", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "
\t\t\t\t";
        } else {
            // line 21
            echo "\t\t\t\t\t<div class=\"uk-flex uk-flex-middle uk-visible@m\">
\t\t\t\t\t\t<a class=\"uk-icon-link uk-margin-right\" uk-icon=\"forward\"></a>
\t\t\t\t\t\t<a class=\"uk-icon-link uk-margin-right\" uk-icon=\"cog\"></a>
\t\t\t\t\t\t<a class=\"uk-icon-link uk-margin-right\" uk-icon=\"user\"></a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 27
        echo "\t\t\t</div>
\t\t</nav>
\t\t<div class=\"uk-navbar-dropbar\"></div>
\t</div>
</div>

\t";
        // line 33
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 34
            echo "<div class=\"uk-section uk-background-cover\" >
  <div id=\"slideshow\" class=\"uk-position-relative uk-visible-toggle\" tabindex=\"-1\" uk-slideshow=\"";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slideshow_ratio"] ?? null), 35, $this->source), "html", null, true);
            echo "\">
    <ul class=\"uk-slideshow-items\">
      ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slide"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 38
                echo "      <li>
      ";
                // line 39
                if (twig_get_attribute($this->env, $this->source, $context["slider_contents"], "image", [], "any", false, false, true, 39)) {
                    echo "<img src=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider_contents"], "image", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                    echo "\" alt=\"Image\">";
                }
                // line 40
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, $context["slider_contents"], "slide_desc", [], "any", false, false, true, 40) || twig_get_attribute($this->env, $this->source, $context["slider_contents"], "slide_head", [], "any", false, false, true, 40))) {
                    // line 41
                    echo "        <div class=\"banner-content uk-text-left uk-position-center\">
        <h1 class=\"banner-heading uk-h1 uk-text-secondary uk-text-light uk-heading-divider\">";
                    // line 42
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider_contents"], "slide_head", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                    echo "</h1>
        <p class=\"banner-body uk-text-muted uk-width-3-4 uk-margin-medium\">";
                    // line 43
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider_contents"], "slide_desc", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                    echo "</p>
        <a class=\"btn-main\" href=\"";
                    // line 44
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider_contents"], "slide_url", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider_contents"], "slide_url_text", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                    echo "</a>
        </div>
      ";
                }
                // line 47
                echo "      </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "    </ul>
    <a class=\"uk-position-center-left uk-position-large uk-text-primary\" href=\"#\" uk-slidenav-previous uk-slideshow-item=\"previous\"></a>
    <a class=\"uk-position-center-right uk-position-large uk-text-primary\" href=\"#\" uk-slidenav-next uk-slideshow-item=\"next\"></a>
  </div>
</div>
\t";
        }
        // line 55
        echo "
";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 56)) {
            // line 57
            echo "\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "
";
        }
        // line 59
        echo "
";
        // line 60
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 60)) {
            // line 61
            echo "\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
            echo "
";
        }
        // line 63
        echo "

\t";
        // line 65
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 65)) {
            // line 66
            echo "\t\t<div id=\"footer\" class=\"uk-section uk-section-secondary uk-section-small\">
\t\t\t<div class=\"uk-container\">
\t\t\t\t<div class=\"uk-child-width-expand\" uk-grid>
\t\t\t\t\t";
            // line 69
            if (($context["show_about_block"] ?? null)) {
                // line 70
                echo "\t\t\t\t\t\t<div class=\"uk-width-1-4\">
\t\t\t\t\t\t\t<div class=\"uk-panel block\">
\t\t\t\t\t\t\t\t<div class=\"uk-flex-middle\">
\t\t\t\t\t\t\t\t\t<span class=\"uk-margin-small-right uk-icon\" uk-icon=\"icon: nut; ratio: 2\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"first-word uk-h4 uk-text-light\">";
                // line 74
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 74, $this->source), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"uk-margin\">";
                // line 77
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (twig_slice($this->env, twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["about_us"] ?? null), 77, $this->source))), 0, 150) . "..."), "html", null, true);
                // line 78
                echo "</p>
\t\t\t\t\t\t\t\t<ul class=\"uk-child-width-auto uk-grid\" uk-grid=\"\">
\t\t\t\t\t\t\t\t\t<li class=\"uk-first-column\">
\t\t\t\t\t\t\t\t\t\t<a class=\"uk-icon-button uk-icon\" target=\"_blank\" href=\"";
                // line 81
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 81, $this->source), "html", null, true);
                echo "\" uk-icon=\"facebook\">
\t\t\t\t\t\t\t\t\t\t</svg></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"uk-icon-button uk-icon\" target=\"_blank\" href=\"";
                // line 85
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 85, $this->source), "html", null, true);
                echo "\" uk-icon=\"linkedin\"></a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"uk-icon-button uk-icon\" target=\"_blank\" href=\"";
                // line 89
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["whatsup_url"] ?? null), 89, $this->source), "html", null, true);
                echo "\" uk-icon=\"whatsapp\"></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"uk-icon-button uk-icon\" target=\"_blank\" href=\"";
                // line 92
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube_url"] ?? null), 92, $this->source), "html", null, true);
                echo "\" uk-icon=\"youtube\"></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 98
            echo "\t\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
            echo "
\t\t\t\t\t";
            // line 99
            if (($context["show_contact_block"] ?? null)) {
                // line 100
                echo "\t\t\t\t\t\t<div class=\"uk-width-1-4\">
\t\t\t\t\t\t\t<div class=\"uk-panel block\">
\t\t\t\t\t\t\t\t<h3 class=\"uk-h4 uk-text-light uk-margin-bottom\">";
                // line 102
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contact_title"] ?? null), 102, $this->source), "html", null, true);
                echo "</h3>

\t\t\t\t\t\t\t\t<ul class=\"uk-list\">
\t\t\t\t\t\t\t\t\t<li><span class=\"uk-margin-small-right uk-icon\" uk-icon=\"receiver\"></span>";
                // line 105
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 105, $this->source), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"uk-margin-small-right uk-icon\" uk-icon=\"mail\"></span>";
                // line 106
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 106, $this->source), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 111
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 115
        echo "
";
        // line 116
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 116)) {
            // line 117
            echo "\t<div class=\"uk-section uk-section-primary uk-section-small\">
\t\t<div class=\"uk-container\">
\t\t\t";
            // line 119
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
            echo "
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/ajans/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 119,  280 => 117,  278 => 116,  275 => 115,  269 => 111,  261 => 106,  257 => 105,  251 => 102,  247 => 100,  245 => 99,  240 => 98,  231 => 92,  225 => 89,  218 => 85,  211 => 81,  206 => 78,  204 => 77,  199 => 74,  193 => 70,  191 => 69,  186 => 66,  184 => 65,  180 => 63,  174 => 61,  172 => 60,  169 => 59,  163 => 57,  161 => 56,  158 => 55,  150 => 49,  143 => 47,  135 => 44,  131 => 43,  127 => 42,  124 => 41,  121 => 40,  115 => 39,  112 => 38,  108 => 37,  103 => 35,  100 => 34,  98 => 33,  90 => 27,  82 => 21,  76 => 19,  74 => 18,  70 => 16,  64 => 13,  61 => 12,  59 => 11,  56 => 10,  50 => 7,  47 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/ajans/templates/layout/page--front.html.twig", "/var/www/html/drupal/themes/contrib/ajans/templates/layout/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5, "for" => 37);
        static $filters = array("escape" => 7, "slice" => 77, "striptags" => 77, "render" => 77);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'slice', 'striptags', 'render'],
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
