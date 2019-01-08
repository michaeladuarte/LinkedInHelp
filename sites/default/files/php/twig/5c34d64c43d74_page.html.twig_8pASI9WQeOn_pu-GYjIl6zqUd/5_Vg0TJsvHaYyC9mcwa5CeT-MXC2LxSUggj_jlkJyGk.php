<?php

/* sites/all/themes/monoset-master/templates/page.html.twig */
class __TwigTemplate_f74d3870b241f73419fb507993f84ad7a2017e1c3da1af5586665b539de06814 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 23);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 7
        echo "
 <header class=\"header-main\">
  <div class=\"menu-btn open\" aria-hidden=\"true\">&#9776; Menu</div>
  <div class=\"contain\">
    <a  class =\"logo\" href=\"";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["front_page"] ?? null), "html", null, true));
        echo "\" title=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true));
        echo " » ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true));
        echo "\">
      <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:sketch=\"http://www.bohemiancoding.com/sketch/ns\" width=\"20px\" height=\"26px\" viewBox=\"0 0 20 26\" version=\"1.1\">
        <title>Logo</title>
        <description>Logo</description>
        <defs/>
        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\" sketch:type=\"MSPage\" class=\"logo-svg\">
          <g sketch:type=\"MSLayerGroup\" fill=\"\">
            <path d=\"M10.030309 0.4 C11.278764 2.5 12.8 4.1 14.3 5.8 C15.335503 6.9 16.4 8.1 17.4 9.4 L17.4504274 9.4 L17.457002 9.5 C18.9264957 11.3 19.7 13.7 19.6 16.1 C19.4360947 18.6 18.4 20.9 16.8 22.6 C14.9722551 24.5 12.6 25.5 10 25.5 C7.48330046 25.5 5.1 24.5 3.3 22.6 C1.61216305 20.9 0.6 18.6 0.5 16.1 C0.389020381 13.7 1.1 11.3 2.6 9.5 L2.60966469 9.4 L2.61617357 9.4 C3.66291913 8.1 4.7 6.9 5.8 5.8 C7.29664694 4.1 8.8 2.5 10 0.4 L10.030309 0.4 Z\" sketch:type=\"MSShapeGroup\"/>
          </g>
        </g>
      </svg>
    </a>
    ";
        // line 23
        if ($this->getAttribute(($context["page"] ?? null), "nav", array())) {
            // line 24
            echo "      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "nav", array()), "html", null, true));
            echo "
    ";
        }
        // line 26
        echo "  </div>
</header>

<div class=\"offcanvas pushy pushy-left\">
  <div class=\"menu-btn close\" aria-hidden=\"true\">&#10005; Menu</div>
  ";
        // line 31
        if ($this->getAttribute(($context["page"] ?? null), "nav", array())) {
            // line 32
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "nav", array()), "html", null, true));
            echo "
  ";
        }
        // line 34
        echo "</div>

<!-- Site Overlay -->
<div class=\"site-overlay\"></div>

<div id=\"container\" class=\"container-main\">
  <!-- Front Page -->

  ";
        // line 42
        if (($context["is_front"] ?? null)) {
            // line 43
            echo "    <div class=\"front\">

      <section class=\"cover\">
        <div class=\"contain\">
          ";
            // line 47
            if ($this->getAttribute(($context["page"] ?? null), "front_one", array())) {
                // line 48
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "front_one", array()), "html", null, true));
                echo "
          ";
            }
            // line 50
            echo "        </div>
      </section>

      <section id=\"features\" class=\"front-section features\">
        <div class=\"contain\">
          ";
            // line 55
            if ($this->getAttribute(($context["page"] ?? null), "front_two", array())) {
                // line 56
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "front_two", array()), "html", null, true));
                echo "
          ";
            }
            // line 58
            echo "        </div>
      </section>

      <section class=\"front-section icons\">
        <div class=\"contain\">
          ";
            // line 63
            if ($this->getAttribute(($context["page"] ?? null), "front_three", array())) {
                // line 64
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "front_three", array()), "html", null, true));
                echo "
          ";
            }
            // line 66
            echo "        </div>
      </section>

      <section class=\"front-section posts\">
        ";
            // line 70
            if ($this->getAttribute(($context["page"] ?? null), "front_four", array())) {
                // line 71
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "front_four", array()), "html", null, true));
                echo "
        ";
            }
            // line 73
            echo "      </section>

      <section class=\"front-section news\">
        <div class=\"contain\">
          ";
            // line 77
            if ($this->getAttribute(($context["page"] ?? null), "front_five", array())) {
                // line 78
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "front_five", array()), "html", null, true));
                echo "
          ";
            }
            // line 80
            echo "        </div>
      </section>

      <section class=\"front-section featured\">
        <div class=\"featured-box\">
          ";
            // line 85
            if ($this->getAttribute(($context["page"] ?? null), "front_six", array())) {
                // line 86
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "front_six", array()), "html", null, true));
                echo "
          ";
            }
            // line 88
            echo "        </div>
        <div class=\"featured-box\">
          ";
            // line 90
            if ($this->getAttribute(($context["page"] ?? null), "front_seven", array())) {
                // line 91
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "front_seven", array()), "html", null, true));
                echo "
          ";
            }
            // line 93
            echo "        </div>
      </section>

      <section class=\"front-section source\">
        <div class=\"contain\">
          ";
            // line 98
            if ($this->getAttribute(($context["page"] ?? null), "front_eight", array())) {
                // line 99
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "front_eight", array()), "html", null, true));
                echo "
          ";
            }
            // line 101
            echo "        </div>
      </section>

    </div>

    ";
        } else {
            // line 107
            echo "
    <!-- Main Content -->
    <div class=\"content contain\">
      <div class=\"page-content\">
        <div class=\"visually-hidden\"><a id=\"main-content\" tabindex=\"-1\"></a></div>
        ";
            // line 112
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["messages"] ?? null), "html", null, true));
            echo "
        ";
            // line 113
            if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
                // line 114
                echo "          <div class=\"help\">
            ";
                // line 115
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 118
            echo "        ";
            if (($context["action_links"] ?? null)) {
                // line 119
                echo "          <ul class=\"action-links\">
            ";
                // line 120
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true));
                echo "
          </ul>
        ";
            }
            // line 123
            echo "
        ";
            // line 124
            if (($context["secondary_local_tasks"] ?? null)) {
                // line 125
                echo "          <div class=\"tabs-secondary clearfix\" role=\"navigation\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["secondary_local_tasks"] ?? null), "html", null, true));
                echo "</div>
        ";
            }
            // line 127
            echo "
        ";
            // line 129
            echo "        ";
            // line 130
            echo "        ";
            // line 131
            echo "
        ";
            // line 132
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
            echo "
        ";
            // line 133
            if (($context["title"] ?? null)) {
                // line 134
                echo "          <h1 class=\"page-title\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "</h1>
        ";
            }
            // line 136
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "
        ";
            // line 137
            if (($context["primary_local_tasks"] ?? null)) {
                // line 138
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["primary_local_tasks"] ?? null), "html", null, true));
                echo "
        ";
            }
            // line 140
            echo "
        ";
            // line 141
            if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
                // line 142
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
                echo "
        ";
            }
            // line 144
            echo "
        ";
            // line 145
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "

        ";
            // line 147
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom", array())) {
                // line 148
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom", array()), "html", null, true));
                echo "
        ";
            }
            // line 150
            echo "
      ";
        }
        // line 152
        echo "
    </div>
  </div>
</div>
<footer class=\"footer-main\">
  <div class=\"contain\">
    ";
        // line 158
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 159
            echo "      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
    ";
        }
        // line 161
        echo "    <a class=\"twitter\" href=\"https://twitter.com/zetagraph\"><img class=\"twitter-icon inject-svg\" data-src=\"/themes/monoset/icons/twitter.svg\" alt=\"twitter\"></a>
    <a class=\"top-link\" href=\"#top\"><img class=\"arrow-up inject-svg\" data-src=\"/themes/monoset/icons/chevron-up.svg\" alt=\"chevron-up\"></a>
  </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "sites/all/themes/monoset-master/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 161,  346 => 159,  344 => 158,  336 => 152,  332 => 150,  326 => 148,  324 => 147,  319 => 145,  316 => 144,  310 => 142,  308 => 141,  305 => 140,  299 => 138,  297 => 137,  292 => 136,  286 => 134,  284 => 133,  280 => 132,  277 => 131,  275 => 130,  273 => 129,  270 => 127,  264 => 125,  262 => 124,  259 => 123,  253 => 120,  250 => 119,  247 => 118,  241 => 115,  238 => 114,  236 => 113,  232 => 112,  225 => 107,  217 => 101,  211 => 99,  209 => 98,  202 => 93,  196 => 91,  194 => 90,  190 => 88,  184 => 86,  182 => 85,  175 => 80,  169 => 78,  167 => 77,  161 => 73,  155 => 71,  153 => 70,  147 => 66,  141 => 64,  139 => 63,  132 => 58,  126 => 56,  124 => 55,  117 => 50,  111 => 48,  109 => 47,  103 => 43,  101 => 42,  91 => 34,  85 => 32,  83 => 31,  76 => 26,  70 => 24,  68 => 23,  49 => 11,  43 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "sites/all/themes/monoset-master/templates/page.html.twig", "/Users/michael.duarte/Sites/devdesktop/lightning-8.x-3.203/sites/all/themes/monoset-master/templates/page.html.twig");
    }
}
