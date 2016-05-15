<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_57379f4ac95fd7981bb4750ea615afbeb954aadc72635817eff651b58d7eb664 extends Twig_Template
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
        $__internal_18919611f82d429704f1ba1af7aa1758b6ae5165130da1c6f89945e9dd7cfe0b = $this->env->getExtension("native_profiler");
        $__internal_18919611f82d429704f1ba1af7aa1758b6ae5165130da1c6f89945e9dd7cfe0b->enter($__internal_18919611f82d429704f1ba1af7aa1758b6ae5165130da1c6f89945e9dd7cfe0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_18919611f82d429704f1ba1af7aa1758b6ae5165130da1c6f89945e9dd7cfe0b->leave($__internal_18919611f82d429704f1ba1af7aa1758b6ae5165130da1c6f89945e9dd7cfe0b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
