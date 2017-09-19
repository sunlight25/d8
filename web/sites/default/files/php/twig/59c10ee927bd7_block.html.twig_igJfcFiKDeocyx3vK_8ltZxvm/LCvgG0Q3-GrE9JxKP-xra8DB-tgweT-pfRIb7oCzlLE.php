<?php

/* themes/contrib/materialize/templates/block/block.html.twig */
class __TwigTemplate_76997e93913b7e07b4488c1a84bb8160e18c76e4d0ff38bd29ce466e240fb350 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e057b4f4ed1c0841a4368a35f0b8e9700c0509c288e8ee8966ae650b005251b7 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_e057b4f4ed1c0841a4368a35f0b8e9700c0509c288e8ee8966ae650b005251b7->enter($__internal_e057b4f4ed1c0841a4368a35f0b8e9700c0509c288e8ee8966ae650b005251b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/contrib/materialize/templates/block/block.html.twig"));

        $tags = array("set" => 49, "if" => 57, "block" => 62);
        $filters = array("clean_class" => 51);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
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

        // line 49
        $context["classes"] = array(0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 51
($context["configuration"] ?? null), "provider", array()))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 52
($context["plugin_id"] ?? null))));
        // line 55
        echo "<section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 56
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
  ";
        // line 57
        if (($context["label"] ?? null)) {
            // line 58
            echo "    <h2";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "block-title"), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</h2>
  ";
        }
        // line 60
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

  ";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "</section>

";
        
        $__internal_e057b4f4ed1c0841a4368a35f0b8e9700c0509c288e8ee8966ae650b005251b7->leave($__internal_e057b4f4ed1c0841a4368a35f0b8e9700c0509c288e8ee8966ae650b005251b7_prof);

    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
        $__internal_abe1b7eea183410749b11d658368cb9f5c7b59eb6f25ba0154cc6508c1590636 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe1b7eea183410749b11d658368cb9f5c7b59eb6f25ba0154cc6508c1590636->enter($__internal_abe1b7eea183410749b11d658368cb9f5c7b59eb6f25ba0154cc6508c1590636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 63
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
  ";
        
        $__internal_abe1b7eea183410749b11d658368cb9f5c7b59eb6f25ba0154cc6508c1590636->leave($__internal_abe1b7eea183410749b11d658368cb9f5c7b59eb6f25ba0154cc6508c1590636_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/materialize/templates/block/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 63,  87 => 62,  78 => 65,  76 => 62,  70 => 60,  62 => 58,  60 => 57,  56 => 56,  51 => 55,  49 => 52,  48 => 51,  47 => 49,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/materialize/templates/block/block.html.twig", "/var/www/html/d8/web/themes/contrib/materialize/templates/block/block.html.twig");
    }
}
