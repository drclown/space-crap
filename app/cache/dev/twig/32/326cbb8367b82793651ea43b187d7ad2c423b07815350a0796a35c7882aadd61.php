<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_a5406d4101b98efea49c07717439a71f272e0abdf61b76939f3d304b12a8f8bc extends Twig_Template
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
        $__internal_314768b46349f1bef399b18fc505c702fa2f6a21a5cd820b6c6910930772ee2b = $this->env->getExtension("native_profiler");
        $__internal_314768b46349f1bef399b18fc505c702fa2f6a21a5cd820b6c6910930772ee2b->enter($__internal_314768b46349f1bef399b18fc505c702fa2f6a21a5cd820b6c6910930772ee2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_314768b46349f1bef399b18fc505c702fa2f6a21a5cd820b6c6910930772ee2b->leave($__internal_314768b46349f1bef399b18fc505c702fa2f6a21a5cd820b6c6910930772ee2b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
