<?php

/* themes/contrib/materialize/templates/misc/status-messages.html.twig */
class __TwigTemplate_4c95b3b1132ea4d582ceda87b5439c851c6b187f9af9d23bc21a56788e16fee9 extends Twig_Template
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
        $__internal_419c1cae13a9fe1315d3ad8ac563237d792e1c8b67f50b0af2f7403531853884 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_419c1cae13a9fe1315d3ad8ac563237d792e1c8b67f50b0af2f7403531853884->enter($__internal_419c1cae13a9fe1315d3ad8ac563237d792e1c8b67f50b0af2f7403531853884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/contrib/materialize/templates/misc/status-messages.html.twig"));

        $tags = array("for" => 24, "if" => 27, "set" => 28);
        $filters = array("clean_class" => 25, "without" => 26, "length" => 46, "first" => 53);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'if', 'set'),
                array('clean_class', 'without', 'length', 'first'),
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

        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 25
            echo "<div class=\"row messages ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("messages--" . \Drupal\Component\Utility\Html::getClass($context["type"])), "html", null, true));
            echo "\">
  <div role=\"contentinfo\" aria-label=\"";
            // line 26
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["status_headings"] ?? null), $context["type"], array(), "array"), "html", null, true));
            echo "\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "message"), "method"), "role", "aria-label"), "html", null, true));
            echo ">
    ";
            // line 27
            if (($context["type"] == "error")) {
                // line 28
                echo "      ";
                $context["icon"] = "error_outline";
                // line 29
                echo "      <div role=\"alert\" class=\"row valign-wrapper\">
    ";
            } else {
                // line 31
                echo "       ";
                if (($context["type"] == "warning")) {
                    // line 32
                    echo "         ";
                    $context["icon"] = "warning";
                    // line 33
                    echo "       ";
                } else {
                    // line 34
                    echo "         ";
                    $context["icon"] = "done";
                    // line 35
                    echo "       ";
                }
                // line 36
                echo "      <div class=\"row valign-wrapper\">
    ";
            }
            // line 38
            echo "
      <div class=\"col s2 center-align\">
        <i class=\"material-icons\">";
            // line 40
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["icon"] ?? null), "html", null, true));
            echo "</i>
      </div>
      <div class=\"col s10\">
      ";
            // line 43
            if ($this->getAttribute(($context["status_headings"] ?? null), $context["type"], array(), "array")) {
                // line 44
                echo "        <h2 class=\"visually-hidden\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["status_headings"] ?? null), $context["type"], array(), "array"), "html", null, true));
                echo "</h2>
      ";
            }
            // line 46
            echo "      ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 47
                echo "        <ul>
          ";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 49
                    echo "            <li>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["message"], "html", null, true));
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "        </ul>
      ";
            } else {
                // line 53
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_first($this->env, $context["messages"]), "html", null, true));
                echo "
      ";
            }
            // line 55
            echo "      </div>
    </div>
  </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_419c1cae13a9fe1315d3ad8ac563237d792e1c8b67f50b0af2f7403531853884->leave($__internal_419c1cae13a9fe1315d3ad8ac563237d792e1c8b67f50b0af2f7403531853884_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/materialize/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 55,  130 => 53,  126 => 51,  117 => 49,  113 => 48,  110 => 47,  107 => 46,  101 => 44,  99 => 43,  93 => 40,  89 => 38,  85 => 36,  82 => 35,  79 => 34,  76 => 33,  73 => 32,  70 => 31,  66 => 29,  63 => 28,  61 => 27,  55 => 26,  50 => 25,  46 => 24,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/materialize/templates/misc/status-messages.html.twig", "/var/www/html/d8/web/themes/contrib/materialize/templates/misc/status-messages.html.twig");
    }
}
