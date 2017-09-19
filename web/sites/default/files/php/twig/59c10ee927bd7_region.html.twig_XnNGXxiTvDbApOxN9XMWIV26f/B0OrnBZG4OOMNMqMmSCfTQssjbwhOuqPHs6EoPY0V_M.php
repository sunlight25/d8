<?php

/* themes/contrib/materialize/templates/layout/region.html.twig */
class __TwigTemplate_8c4d0b47567259608d00109ff3c709e0748ad2e000f4bd966a58d24603438b90 extends Twig_Template
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
        $__internal_d0c9a528da3a1e03010de1800c2301bb9d45027364eea4df4696b125777672bf = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0c9a528da3a1e03010de1800c2301bb9d45027364eea4df4696b125777672bf->enter($__internal_d0c9a528da3a1e03010de1800c2301bb9d45027364eea4df4696b125777672bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/contrib/materialize/templates/layout/region.html.twig"));

        $tags = array("set" => 18, "if" => 23);
        $filters = array("clean_class" => 20);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class'),
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

        // line 18
        $context["classes"] = array(0 => "region", 1 => ("region-" . \Drupal\Component\Utility\Html::getClass(        // line 20
($context["region"] ?? null))));
        // line 23
        if (($context["content"] ?? null)) {
            // line 24
            echo "  <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">
    ";
            // line 25
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
            echo "
  </div>
";
        }
        
        $__internal_d0c9a528da3a1e03010de1800c2301bb9d45027364eea4df4696b125777672bf->leave($__internal_d0c9a528da3a1e03010de1800c2301bb9d45027364eea4df4696b125777672bf_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/materialize/templates/layout/region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 25,  51 => 24,  49 => 23,  47 => 20,  46 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/materialize/templates/layout/region.html.twig", "/var/www/html/d8/web/themes/contrib/materialize/templates/layout/region.html.twig");
    }
}
