<?php

/* core/themes/stable/templates/form/form.html.twig */
class __TwigTemplate_58e34a3b9032b8f81cf9db2a27e796e820b57b485ba6ef30a501d7abdd82ce92 extends Twig_Template
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
        $__internal_ff650a0901f1bd21e95f6fe8e03746bd5921f5ed22b79a203d4aeac2c0662970 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff650a0901f1bd21e95f6fe8e03746bd5921f5ed22b79a203d4aeac2c0662970->enter($__internal_ff650a0901f1bd21e95f6fe8e03746bd5921f5ed22b79a203d4aeac2c0662970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/form/form.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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
        echo "<form";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">
  ";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        echo "
</form>
";
        
        $__internal_ff650a0901f1bd21e95f6fe8e03746bd5921f5ed22b79a203d4aeac2c0662970->leave($__internal_ff650a0901f1bd21e95f6fe8e03746bd5921f5ed22b79a203d4aeac2c0662970_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/form/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  46 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/stable/templates/form/form.html.twig", "/var/www/html/d8/web/core/themes/stable/templates/form/form.html.twig");
    }
}
