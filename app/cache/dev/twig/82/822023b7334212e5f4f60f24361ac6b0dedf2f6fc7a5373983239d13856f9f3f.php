<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_70b11325e8c8ea61d01cd995454cf426781d0f1bccae0912b8dd3ddc91257cba extends Twig_Template
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
        $__internal_41da31c4bea773066c04fc4b24424da9163ca771db1b38717683494e1a01b7b2 = $this->env->getExtension("native_profiler");
        $__internal_41da31c4bea773066c04fc4b24424da9163ca771db1b38717683494e1a01b7b2->enter($__internal_41da31c4bea773066c04fc4b24424da9163ca771db1b38717683494e1a01b7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_41da31c4bea773066c04fc4b24424da9163ca771db1b38717683494e1a01b7b2->leave($__internal_41da31c4bea773066c04fc4b24424da9163ca771db1b38717683494e1a01b7b2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
