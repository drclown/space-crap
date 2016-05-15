<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_860bf1cd12abafb03e1b31da4d8272444e1930e985d56c733209cf41ddbe0bd5 extends Twig_Template
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
        $__internal_9f8f08f98c5cd3d60ff8ab59e244e1f367e72ba541b0343c86baf0852b7e07a5 = $this->env->getExtension("native_profiler");
        $__internal_9f8f08f98c5cd3d60ff8ab59e244e1f367e72ba541b0343c86baf0852b7e07a5->enter($__internal_9f8f08f98c5cd3d60ff8ab59e244e1f367e72ba541b0343c86baf0852b7e07a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_9f8f08f98c5cd3d60ff8ab59e244e1f367e72ba541b0343c86baf0852b7e07a5->leave($__internal_9f8f08f98c5cd3d60ff8ab59e244e1f367e72ba541b0343c86baf0852b7e07a5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
