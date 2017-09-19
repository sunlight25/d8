<?php

/* themes/custom/school/templates/page.html.twig */
class __TwigTemplate_e952e7a1d428f7a15df58b166f5e206cd426c83db7be1c01c4f9e19296bfc2fa extends Twig_Template
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
        $__internal_4a59228cdef3eea40c4c3cee596ad05204411e792cdd077c849e6c93a95651a4 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a59228cdef3eea40c4c3cee596ad05204411e792cdd077c849e6c93a95651a4->enter($__internal_4a59228cdef3eea40c4c3cee596ad05204411e792cdd077c849e6c93a95651a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/custom/school/templates/page.html.twig"));

        $tags = array("if" => 3);
        $filters = array("raw" => 1, "t" => 11);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('raw', 't'),
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

        // line 1
        echo "<div class=\"page\" class=\"page\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["page_css"] ?? null)));
        echo ">

";
        // line 3
        if ($this->getAttribute(($context["page"] ?? null), "show_skins_menu", array())) {
            // line 4
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "show_skins_menu", array())));
            echo "
";
        }
        // line 6
        echo "  
<a name=\"Top\" id=\"Top\"></a>
<div class=\"navbar navbar-invers menu-wrap\">        
        <div class=\"navbar-header text-center\">
            ";
        // line 10
        if (($context["logo"] ?? null)) {
            // line 11
            echo "                <a class=\"brand-logo navbar-brand logo-right\" href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["front_page"] ?? null), "html", null, true));
            echo "\" title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\" rel=\"home\">
                  <img src=\"";
            // line 12
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["logo"] ?? null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\"/>
               </a>               
           ";
        }
        // line 14
        echo "                        
        </div>
        ";
        // line 16
        if ($this->getAttribute(($context["page"] ?? null), "top_bottom", array())) {
            // line 17
            echo "            <div class=\"top\">
               ";
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_bottom", array()), "html", null, true));
            echo "\t\t\t\t\t\t
            </div>    
            <button class=\"close-button\" id=\"close-button\">Close Menu</button>
       ";
        }
        // line 21
        echo "                   
</div>

<nav class=\"dark-red\" id=\"nav\" role=\"navigation\">
      <!-- teal lighten-1 -->
    <div class=\"nav-wrapper container-fluid\">      
    <div class=\"navbar-left\">
        ";
        // line 28
        if (($context["logo"] ?? null)) {
            // line 29
            echo "            <a class=\"brand-logo\" href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["front_page"] ?? null), "html", null, true));
            echo "\" title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\">      
                <img src=\"";
            // line 30
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["logo"] ?? null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\"/>
            </a>
        ";
        }
        // line 32
        echo "        
        <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\"><i class=\"mdi-navigation-menu\"></i></a>
       ";
        // line 34
        if ((($context["main_menu"] ?? null) || ($context["secondary_menu"] ?? null))) {
            // line 35
            echo "        <nav id=\"navigation\" class=\"hide-on-med-and-down main-menu\" >
          <div class=\"container\">
            ";
            // line 37
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_menu"] ?? null), "html", null, true));
            echo "
            ";
            // line 38
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["secondary_menu"] ?? null), "html", null, true));
            echo "
          </div>
        </nav>
        ";
        }
        // line 41
        echo "       
    </div>
    ";
        // line 43
        if ($this->getAttribute(($context["page"] ?? null), "top", array())) {
            echo "    
        <div class=\"navbar-right\">
            ";
            // line 45
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top", array()), "html", null, true));
            echo "          
        </div>
    ";
        }
        // line 47
        echo "     
    <button class=\"menu-icon\" id=\"open-button\" style=\"color:#ffffff !important;\">
        <i class=\"mdi-navigation-menu\"><img src=\"/img/menu-icon.png\" /></i>
    </button>                 
    </div>
  </nav> 
<div id=\"school-list\" class=\"content-wrap\">  
    ";
        // line 54
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 55
            echo "        <div class=\"top\">
           ";
            // line 56
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "\t\t\t\t\t\t
        </div>    
    ";
        }
        // line 58
        echo "   
    ";
        // line 59
        if ($this->getAttribute(($context["page"] ?? null), "homepagebanner", array())) {
            // line 60
            echo "       ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "homepagebanner", array()), "html", null, true));
            echo "
    ";
        }
        // line 61
        echo "           
    ";
        // line 62
        if (($context["messages"] ?? null)) {
            // line 63
            echo "          <section id=\"messages\" class=\"messages\">
            <div class=\"container\">
              ";
            // line 65
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["messages"] ?? null), "html", null, true));
            echo "
            </div>
          </section>
        ";
        }
        // line 69
        echo "
      ";
        // line 70
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 71
            echo "        <section id=\"help\" class=\"help\">
          <div class=\"container\">
            ";
            // line 73
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
            echo "
          </div>
        </section>
      ";
        }
        // line 76
        echo "    
  <div>
  <section id=\"main\" class=\"main\" role=\"main\">
    <a id=\"main-content\"></a>
    <div class=\"container\">
      <div class=\"row\">
        
        ";
        // line 83
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 84
            echo "          <aside class=\"sidebar-first sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
            ";
            // line 85
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
          </aside>
        ";
        }
        // line 88
        echo "\t\t
        <div class=\"content col-lg-";
        // line 89
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "main_content_width", array()), "html", null, true));
        echo " col-md-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "main_content_width", array()), "html", null, true));
        echo " col-sm-12 col-xs-12\">
          ";
        // line 90
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "

          ";
        // line 92
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
          ";
        // line 93
        if (($context["title"] ?? null)) {
            // line 94
            echo "            <h1>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h1>
          ";
        }
        // line 96
        echo "          ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

          ";
        // line 98
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["tabs"] ?? null), "html", null, true));
        echo "

          ";
        // line 100
        if (($context["action_links"] ?? null)) {
            // line 101
            echo "            <nav class=\"action-links\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true));
            echo "</nav>
          ";
        }
        // line 103
        echo "
          ";
        // line 104
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "

          <!--";
        // line 106
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["feed_icons"] ?? null), "html", null, true));
        echo "-->
        </div>

        ";
        // line 109
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 110
            echo "          <aside class=\"sidebar-second sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
            ";
            // line 111
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
          </aside>
        ";
        }
        // line 114
        echo "      </div>
    </div>
  </section>
 </div>                 
  ";
        // line 118
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom1", array())) {
            echo "    
       ";
            // line 119
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom1", array()), "html", null, true));
            echo "          
  ";
        }
        // line 121
        echo "  ";
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom2", array())) {
            echo "    
       ";
            // line 122
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom2", array()), "html", null, true));
            echo "          
  ";
        }
        // line 124
        echo "  ";
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom3", array())) {
            echo "    
       ";
            // line 125
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom3", array()), "html", null, true));
            echo "          
  ";
        }
        // line 127
        echo "  ";
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", array())) {
            echo "    
       ";
            // line 128
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom", array()), "html", null, true));
            echo "          
  ";
        }
        // line 130
        echo "   <section id=\"footer\">
 ";
        // line 131
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            echo "             
    <div class=\"container\">
      <div class=\"row\">            
        <div class=\"col-md-5 col-sm-12 col-xs-12 bor-right footer-minheight\">
            ";
            // line 135
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
                echo " 
                ";
                // line 136
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
                echo "                  
            ";
            }
            // line 138
            echo "        </div>                    
        <div class=\"col-md-2 col-sm-12 col-xs-12 bor-right footer-minheight\">
            ";
            // line 140
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", array())) {
                echo " 
                ";
                // line 141
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
                echo "                  
            ";
            }
            // line 142
            echo "            
        </div>        
        <div class=\"col-md-2 col-sm-12 col-xs-12 bor-right footer-minheight\">
            ";
            // line 145
            if ($this->getAttribute(($context["page"] ?? null), "footer_forth", array())) {
                echo " 
                ";
                // line 146
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_forth", array()), "html", null, true));
                echo "                  
            ";
            }
            // line 147
            echo "            
        </div>        
        <div class=\"col-md-3 col-sm-12 col-xs-12 footer-minheight\">
          ";
            // line 150
            if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", array())) {
                echo "               
                  ";
                // line 151
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fifth", array()), "html", null, true));
                echo "
            ";
            }
            // line 153
            echo "        </div>                
      </div>
  </div>    
  ";
        }
        // line 156
        echo "    
    <!-- Go to Top Link -->
    <div id=\"back-to-top-block\">
        <a href=\"#home\" class=\"btn-primary back-to-top\">
         <i class=\"fa fa-chevron-up\"></i>
       </a>
   <div>  
   </section> 
    <section id=\"copyright\">    
      <div class=\"container footer-copyright\">
      <div class=\"container row\">            \t
      \t<div class=\"col-md-12\"> 
            <?php if (!empty(\$page['footer'])): ?>                           
                <?php print render(\$page['footer']); ?>                
            <?php endif; ?>
        </div>
      </div>
    </div>
 </section>     
    ";
        // line 175
        if ($this->getAttribute(($context["page"] ?? null), "model_popup", array())) {
            echo "     
    <a href=\"#modal2\" id=\"open-model-compare\" class=\"compare-school\">";
            // line 176
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Compare")));
            echo "</a>
    <div id=\"modal2\" class=\"modal\">                   
        <div class=\"modal-content\">    \t\t                                                                            
            ";
            // line 179
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "model_popup", array()), "html", null, true));
            echo "            
          <div class=\"modal-footer border-none\">\t\t                                        
            <a class=\"btn btn-lg btn-primary mr15 modal-action modal-close\">";
            // line 181
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close")));
            echo "</a>            
        </div> 
        </div>\t \t
        
    </div>             
    ";
        }
        // line 186
        echo "   
</div>
</div>
";
        
        $__internal_4a59228cdef3eea40c4c3cee596ad05204411e792cdd077c849e6c93a95651a4->leave($__internal_4a59228cdef3eea40c4c3cee596ad05204411e792cdd077c849e6c93a95651a4_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/school/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  470 => 186,  461 => 181,  456 => 179,  450 => 176,  446 => 175,  425 => 156,  419 => 153,  414 => 151,  410 => 150,  405 => 147,  400 => 146,  396 => 145,  391 => 142,  386 => 141,  382 => 140,  378 => 138,  373 => 136,  369 => 135,  362 => 131,  359 => 130,  354 => 128,  349 => 127,  344 => 125,  339 => 124,  334 => 122,  329 => 121,  324 => 119,  320 => 118,  314 => 114,  308 => 111,  305 => 110,  303 => 109,  297 => 106,  292 => 104,  289 => 103,  283 => 101,  281 => 100,  276 => 98,  270 => 96,  264 => 94,  262 => 93,  258 => 92,  253 => 90,  247 => 89,  244 => 88,  238 => 85,  235 => 84,  233 => 83,  224 => 76,  217 => 73,  213 => 71,  211 => 70,  208 => 69,  201 => 65,  197 => 63,  195 => 62,  192 => 61,  186 => 60,  184 => 59,  181 => 58,  175 => 56,  172 => 55,  170 => 54,  161 => 47,  155 => 45,  150 => 43,  146 => 41,  139 => 38,  135 => 37,  131 => 35,  129 => 34,  125 => 32,  117 => 30,  110 => 29,  108 => 28,  99 => 21,  92 => 18,  89 => 17,  87 => 16,  83 => 14,  75 => 12,  68 => 11,  66 => 10,  60 => 6,  54 => 4,  52 => 3,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/school/templates/page.html.twig", "/var/www/html/d8/web/themes/custom/school/templates/page.html.twig");
    }
}
