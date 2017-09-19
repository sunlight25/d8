<?php

/* core/themes/stable/templates/user/user.html.twig */
class __TwigTemplate_e779bb063b37edb196b1cd29e1e0c8e1e451fb375e6c5cb0a30d6c79c43c8ef3 extends Twig_Template
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
        $__internal_83b1b9b965c222be7cb9482acd2208fd28a1037401eca2671bc0081513781706 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b1b9b965c222be7cb9482acd2208fd28a1037401eca2671bc0081513781706->enter($__internal_83b1b9b965c222be7cb9482acd2208fd28a1037401eca2671bc0081513781706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/user/user.html.twig"));

        $tags = array("if" => 20);
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

        // line 19
        echo "<article";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">
  ";
        // line 20
        if (($context["content"] ?? null)) {
            // line 21
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        }
        // line 23
        echo "</article>
";
        
        $__internal_83b1b9b965c222be7cb9482acd2208fd28a1037401eca2671bc0081513781706->leave($__internal_83b1b9b965c222be7cb9482acd2208fd28a1037401eca2671bc0081513781706_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/user/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 23,  53 => 21,  51 => 20,  46 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/stable/templates/user/user.html.twig", "/var/www/html/d8/web/core/themes/stable/templates/user/user.html.twig");
    }
}
