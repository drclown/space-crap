<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_29a7905ce41d13f9d4ed125f9cf65eeb2fdd9220ff446fb4e283114efce49a31 extends Twig_Template
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
        $__internal_cef2b29ca77351b9c9a2c6b76f335b115168ab69774a7f0d8ec2421466de52ee = $this->env->getExtension("native_profiler");
        $__internal_cef2b29ca77351b9c9a2c6b76f335b115168ab69774a7f0d8ec2421466de52ee->enter($__internal_cef2b29ca77351b9c9a2c6b76f335b115168ab69774a7f0d8ec2421466de52ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cef2b29ca77351b9c9a2c6b76f335b115168ab69774a7f0d8ec2421466de52ee->leave($__internal_cef2b29ca77351b9c9a2c6b76f335b115168ab69774a7f0d8ec2421466de52ee_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
