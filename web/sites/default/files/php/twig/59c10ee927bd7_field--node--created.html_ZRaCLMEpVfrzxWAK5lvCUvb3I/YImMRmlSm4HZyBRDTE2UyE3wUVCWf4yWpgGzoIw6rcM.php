<?php

/* core/themes/classy/templates/field/field--node--created.html.twig */
class __TwigTemplate_0b191b64b03368d8ec04cbfb1402a84fa16ace2e6412244629e726559c18b022 extends Twig_Template
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
        $__internal_7aea9f6bd1f52f2baf710c56c927b856fbee388dcac63be1730313c2d7a8d3c1 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aea9f6bd1f52f2baf710c56c927b856fbee388dcac63be1730313c2d7a8d3c1->enter($__internal_7aea9f6bd1f52f2baf710c56c927b856fbee388dcac63be1730313c2d7a8d3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/field/field--node--created.html.twig"));

        $tags = array("set" => 23, "for" => 31);
        $filters = array("clean_class" => 25);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'for'),
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

        // line 23
        $context["classes"] = array(0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass(        // line 25
($context["field_name"] ?? null))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass(        // line 26
($context["field_type"] ?? null))), 3 => ("field--label-" .         // line 27
($context["label_display"] ?? null)));
        // line 30
        echo "<span";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 32
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</span>
";
        
        $__internal_7aea9f6bd1f52f2baf710c56c927b856fbee388dcac63be1730313c2d7a8d3c1->leave($__internal_7aea9f6bd1f52f2baf710c56c927b856fbee388dcac63be1730313c2d7a8d3c1_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/field/field--node--created.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 34,  59 => 32,  55 => 31,  51 => 30,  49 => 27,  48 => 26,  47 => 25,  46 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/classy/templates/field/field--node--created.html.twig", "/var/www/html/d8/web/core/themes/classy/templates/field/field--node--created.html.twig");
    }
}
