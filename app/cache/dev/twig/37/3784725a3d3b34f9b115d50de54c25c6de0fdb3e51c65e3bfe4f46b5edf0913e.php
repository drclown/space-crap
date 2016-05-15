<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_98b4cfede8da1a28839d042f63b0da48a6c045ee3ccf8f3cad84cfea890307b2 extends Twig_Template
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
        $__internal_a857a27982bd541f5d0bb5d719b892cf41eb3d6e3b50b3c8c75e0a12c2aee1d2 = $this->env->getExtension("native_profiler");
        $__internal_a857a27982bd541f5d0bb5d719b892cf41eb3d6e3b50b3c8c75e0a12c2aee1d2->enter($__internal_a857a27982bd541f5d0bb5d719b892cf41eb3d6e3b50b3c8c75e0a12c2aee1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a857a27982bd541f5d0bb5d719b892cf41eb3d6e3b50b3c8c75e0a12c2aee1d2->leave($__internal_a857a27982bd541f5d0bb5d719b892cf41eb3d6e3b50b3c8c75e0a12c2aee1d2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
