<?php

/* themes/contrib/materialize/templates/form/input.html.twig */
class __TwigTemplate_91aef9105c228f6b2e56bc6dad5460cfabe77bb8fbea1d1c6b392da7bfa9497a extends Twig_Template
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
        $__internal_c79b3aea6f5f78445bca8e46032433f00b2155e294d648c39e96bbfac7678b25 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_c79b3aea6f5f78445bca8e46032433f00b2155e294d648c39e96bbfac7678b25->enter($__internal_c79b3aea6f5f78445bca8e46032433f00b2155e294d648c39e96bbfac7678b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/contrib/materialize/templates/form/input.html.twig"));

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

        // line 13
        echo "
";
        // line 14
        if ((($context["autocomplete"] ?? null) || ($context["input_group"] ?? null))) {
            // line 15
            echo "<div class=\"input-group\">
    ";
        }
        // line 17
        echo "    <input";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo " />";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        echo "
    ";
        // line 18
        if (($context["input_group"] ?? null)) {
            // line 19
            echo "</div>
";
        } elseif (        // line 20
($context["autocomplete"] ?? null)) {
            // line 21
            echo "    <span class=\"input-group-addon\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["autocomplete_icon"] ?? null), "html", null, true));
            echo "</span>
  </div>
  <input";
            // line 23
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["autocomplete_attributes"] ?? null), "html", null, true));
            echo ">
";
        }
        
        $__internal_c79b3aea6f5f78445bca8e46032433f00b2155e294d648c39e96bbfac7678b25->leave($__internal_c79b3aea6f5f78445bca8e46032433f00b2155e294d648c39e96bbfac7678b25_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/materialize/templates/form/input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 23,  69 => 21,  67 => 20,  64 => 19,  62 => 18,  55 => 17,  51 => 15,  49 => 14,  46 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/materialize/templates/form/input.html.twig", "/var/www/html/d8/web/themes/contrib/materialize/templates/form/input.html.twig");
    }
}
