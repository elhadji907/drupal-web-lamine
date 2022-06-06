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

/* themes/contrib/druadmin_lte_theme/templates/layout/page.html.twig */
class __TwigTemplate_da8cbac78957813801f5a4112eebce385cf4646421515331d4c97a714e2dd5b3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'my_content' => [$this, 'block_my_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "
<style>
  [dir=\"rtl\"] .user-panel-custom .pull-left{
    float:right !important;
  }
</style>

<header class=\"main-header header-2\">
  <!-- Logo -->

  <a href=\"";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 61, $this->source), "html", null, true);
        echo "\" id=\"logo\" class=\"logo\" rel=\"home\">
      ";
        // line 62
        if (($context["relative_logo_url"] ?? null)) {
            // line 63
            echo "        <img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["relative_logo_url"] ?? null), 63, $this->source), "html", null, true);
            echo "\" alt=\"Site Logo\" style=\"max-width:100%;height:auto;max-height: 100%;\">
      ";
        } else {
            // line 65
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 65, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 67
        echo "
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class=\"navbar navbar-static-top\" role=\"navigation\">
    <!-- Sidebar toggle button-->
    ";
        // line 72
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 72)) {
            // line 73
            echo "    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
      <span class=\"sr-only\">Toggle navigation</span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </a>
    ";
        }
        // line 80
        echo "    <!-- User Account: style can be found in dropdown.less -->
    <div class=\"navbar-custom-menu\">
      <ul class=\"nav navbar-nav\">
        ";
        // line 83
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_right_notifications", [], "any", false, false, true, 83)) {
            // line 84
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_right_notifications", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 86
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "uid", [], "any", false, false, true, 86)) {
            // line 87
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "picture", [], "any", false, false, true, 87)) {
                // line 88
                echo "          <li class=\"dropdown user user-menu\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                <img src=\"";
                // line 90
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "picture", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
                echo "\" class=\"user-image\" alt=\"User Image\">
              <span class=\"hidden-xs\">";
                // line 91
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
                echo "</span>
            </a>
            <ul class=\"dropdown-menu\">
              <!-- User image -->
              <li class=\"user-header\">
                <img src=\"";
                // line 96
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "picture", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
                echo "\" class=\"img-circle\" alt=\"User Image\">
                <p>
                  ";
                // line 98
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
                echo "
                  <small>";
                // line 99
                echo t("Member since", array());
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "created", [], "any", false, false, true, 99), 99, $this->source), "M. Y"), "html", null, true);
                echo "</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class=\"user-footer\">
                <div class=\"pull-left\">
                  <a href=\"";
                // line 105
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 105, $this->source), "html", null, true);
                echo "user/";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "uid", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
                echo "/edit\" class=\"btn btn-default btn-flat\">";
                echo t("My account", array());
                echo "</a>
                </div>
                <div class=\"pull-right\">
                  <a href=\"";
                // line 108
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 108, $this->source), "html", null, true);
                echo "user/logout\" class=\"btn btn-default btn-flat\">";
                echo t("Log out", array());
                echo "</a>
                </div>
              </li>
            </ul>
          </li>
          ";
            } else {
                // line 114
                echo "            <li>
              <a href=\"";
                // line 115
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 115, $this->source), "html", null, true);
                echo "user/";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "uid", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
                echo "/edit\">
              ";
                // line 116
                echo t("My account", array());
                // line 117
                echo "              </a>
            </li>
            <li><a href=\"";
                // line 119
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 119, $this->source), "html", null, true);
                echo "user/logout\">";
                echo t("Log out", array());
                echo "</a></li>
          ";
            }
            // line 121
            echo "        ";
        } else {
            // line 122
            echo "          <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 122, $this->source), "html", null, true);
            echo "user/login\">";
            echo t("Log in", array());
            echo "</a></li>
        ";
        }
        // line 124
        echo "        
      </ul>
    </div>
  </nav>
</header>

<!-- =============================================== -->

";
        // line 132
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 132)) {
            // line 133
            echo "  <!-- Left side column. contains the sidebar -->
  <aside class=\"main-sidebar\">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class=\"sidebar\">
    ";
            // line 137
            if (($context["logged_in"] ?? null)) {
                // line 138
                echo "      <div class=\"user-panel user-panel-custom\">
        <div class=\"pull-left image\">
          <img src=\"";
                // line 140
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "picture", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
                echo "\" class=\"img-circle\" alt=\"User Image\">
        </div>
        <div class=\"pull-left info\">
          <p>";
                // line 143
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
                echo "</p>
          <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
        </div>
      </div>
    ";
            }
            // line 148
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
            echo "
  </section>
  <!-- /.sidebar -->
  </aside>
";
        }
        // line 153
        echo "
<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">

  <!-- Content Header (Page header) -->
  ";
        // line 160
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top", [], "any", false, false, true, 160)) {
            // line 161
            echo "    <section class=\"content-header\">
      ";
            // line 162
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
            echo "
    </section>
  ";
        }
        // line 165
        echo "
  <!-- Main content -->
  <section class=\"content\">
    ";
        // line 168
        $this->displayBlock('my_content', $context, $blocks);
        // line 173
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom", [], "any", false, false, true, 173)) {
            // line 174
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom", [], "any", false, false, true, 174), 174, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 176
        echo "  </section><!-- /.content -->

</div><!-- /.content-wrapper -->

";
        // line 180
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 180)) {
            // line 181
            echo "  <footer class=\"main-footer\">
    ";
            // line 182
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 182), 182, $this->source), "html", null, true);
            echo "
  </footer>
";
        }
    }

    // line 168
    public function block_my_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 169
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 169)) {
            // line 170
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 172
        echo "    ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/druadmin_lte_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 172,  306 => 170,  303 => 169,  299 => 168,  291 => 182,  288 => 181,  286 => 180,  280 => 176,  274 => 174,  271 => 173,  269 => 168,  264 => 165,  258 => 162,  255 => 161,  253 => 160,  244 => 153,  235 => 148,  227 => 143,  221 => 140,  217 => 138,  215 => 137,  209 => 133,  207 => 132,  197 => 124,  189 => 122,  186 => 121,  179 => 119,  175 => 117,  173 => 116,  167 => 115,  164 => 114,  153 => 108,  143 => 105,  132 => 99,  128 => 98,  123 => 96,  115 => 91,  111 => 90,  107 => 88,  104 => 87,  101 => 86,  95 => 84,  93 => 83,  88 => 80,  79 => 73,  77 => 72,  70 => 67,  64 => 65,  58 => 63,  56 => 62,  52 => 61,  40 => 51,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/druadmin_lte_theme/templates/layout/page.html.twig", "/var/www/html/drupal/themes/contrib/druadmin_lte_theme/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 62, "trans" => 99, "block" => 168);
        static $filters = array("escape" => 61, "date" => 99);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans', 'block'],
                ['escape', 'date'],
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
