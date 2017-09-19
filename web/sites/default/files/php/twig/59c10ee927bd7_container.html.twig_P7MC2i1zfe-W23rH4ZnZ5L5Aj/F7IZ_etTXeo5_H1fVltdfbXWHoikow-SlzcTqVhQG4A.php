<?php

/* themes/contrib/materialize/templates/form/container.html.twig */
class __TwigTemplate_b6220c0ba5c9683e1e97b2aa557e13e902d4d977bbedc7273c012a37c29ddf2a extends Twig_Template
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
        $__internal_051b86737568fe67b3ad2f04e6be5c0dfa008b9f55161579f8ea0a2b069bb09f = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_051b86737568fe67b3ad2f04e6be5c0dfa008b9f55161579f8ea0a2b069bb09f->enter($__internal_051b86737568fe67b3ad2f04e6be5c0dfa008b9f55161579f8ea0a2b069bb09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/contrib/materialize/templates/form/container.html.twig"));

        $tags = array("set" => 19);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
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
        $context["classes"] = array(0 => ((        // line 20
($context["has_parent"] ?? null)) ? ("js-form-wrapper") : ("")), 1 => ((        // line 21
($context["has_parent"] ?? null)) ? ("form-wrapper") : ("")));
        // line 24
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        echo "</div>
";
        
        $__internal_051b86737568fe67b3ad2f04e6be5c0dfa008b9f55161579f8ea0a2b069bb09f->leave($__internal_051b86737568fe67b3ad2f04e6be5c0dfa008b9f55161579f8ea0a2b069bb09f_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/materialize/templates/form/container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 24,  48 => 21,  47 => 20,  46 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/materialize/templates/form/container.html.twig", "/var/www/html/d8/web/themes/contrib/materialize/templates/form/container.html.twig");
    }
}
