<?php

/* core/themes/stable/templates/field/image-formatter.html.twig */
class __TwigTemplate_f5ba963e5a2fd4f7fdce51bedb86b1be36fc692e28a23f9115973c1f11ee7be6 extends Twig_Template
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
        $__internal_61bd526ebe59c68e5ec42a00a7313393127fa16037733ce253bb1423a2c02890 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_61bd526ebe59c68e5ec42a00a7313393127fa16037733ce253bb1423a2c02890->enter($__internal_61bd526ebe59c68e5ec42a00a7313393127fa16037733ce253bb1423a2c02890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/field/image-formatter.html.twig"));

        $tags = array("if" => 14);
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

        // line 14
        if (($context["url"] ?? null)) {
            // line 15
            echo "  <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["image"] ?? null), "html", null, true));
            echo "</a>
";
        } else {
            // line 17
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["image"] ?? null), "html", null, true));
            echo "
";
        }
        
        $__internal_61bd526ebe59c68e5ec42a00a7313393127fa16037733ce253bb1423a2c02890->leave($__internal_61bd526ebe59c68e5ec42a00a7313393127fa16037733ce253bb1423a2c02890_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/field/image-formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 17,  48 => 15,  46 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/stable/templates/field/image-formatter.html.twig", "/var/www/html/d8/web/core/themes/stable/templates/field/image-formatter.html.twig");
    }
}
