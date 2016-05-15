<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9e532ce1123a36d5b00cd3c9c742bbde1a6a46da1312eea52240d767919551ff extends Twig_Template
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
        $__internal_e1ac48e23712c7bd13992b2166eb6d16bd8fca4ae2fc6f2cc6f1843f46f620dc = $this->env->getExtension("native_profiler");
        $__internal_e1ac48e23712c7bd13992b2166eb6d16bd8fca4ae2fc6f2cc6f1843f46f620dc->enter($__internal_e1ac48e23712c7bd13992b2166eb6d16bd8fca4ae2fc6f2cc6f1843f46f620dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e1ac48e23712c7bd13992b2166eb6d16bd8fca4ae2fc6f2cc6f1843f46f620dc->leave($__internal_e1ac48e23712c7bd13992b2166eb6d16bd8fca4ae2fc6f2cc6f1843f46f620dc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
