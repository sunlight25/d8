<?php

/* themes/contrib/materialize/templates/form/input--form-control.html.twig */
class __TwigTemplate_5a5281c2f53ee8a43b2390a60d7be13728710f2432262ad5e22accac3cb5485d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("input.html.twig", "themes/contrib/materialize/templates/form/input--form-control.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "input.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7606cf43311cdac07bb434fb7fd2a7ae02d81276885efb82ca04383faa30021 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7606cf43311cdac07bb434fb7fd2a7ae02d81276885efb82ca04383faa30021->enter($__internal_b7606cf43311cdac07bb434fb7fd2a7ae02d81276885efb82ca04383faa30021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/contrib/materialize/templates/form/input--form-control.html.twig"));

        $tags = array("spaceless" => 23, "set" => 25);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('spaceless', 'set'),
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

        // line 23
        ob_start();
        // line 25
        $context["classes"] = array(0 => "form-control");
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7606cf43311cdac07bb434fb7fd2a7ae02d81276885efb82ca04383faa30021->leave($__internal_b7606cf43311cdac07bb434fb7fd2a7ae02d81276885efb82ca04383faa30021_prof);

    }

    // line 29
    public function block_input($context, array $blocks = array())
    {
        $__internal_4234f2c7aeae32ec86bb2696ecffa94fe5b4e1a29939e47e7899eb7d4d2bad0d = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_4234f2c7aeae32ec86bb2696ecffa94fe5b4e1a29939e47e7899eb7d4d2bad0d->enter($__internal_4234f2c7aeae32ec86bb2696ecffa94fe5b4e1a29939e47e7899eb7d4d2bad0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "input"));

        // line 30
        echo "    <input";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo " />
  ";
        
        $__internal_4234f2c7aeae32ec86bb2696ecffa94fe5b4e1a29939e47e7899eb7d4d2bad0d->leave($__internal_4234f2c7aeae32ec86bb2696ecffa94fe5b4e1a29939e47e7899eb7d4d2bad0d_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/materialize/templates/form/input--form-control.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 30,  64 => 29,  57 => 1,  54 => 25,  52 => 23,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/materialize/templates/form/input--form-control.html.twig", "/var/www/html/d8/web/themes/contrib/materialize/templates/form/input--form-control.html.twig");
    }
}
