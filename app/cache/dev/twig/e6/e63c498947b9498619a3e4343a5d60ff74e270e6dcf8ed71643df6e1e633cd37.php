<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_f018d520ffb0b23e019d8f843442bc9120e6723493cdad3e896eabb0f4337101 extends Twig_Template
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
        $__internal_ad937641b536ea21bbf4d72e285bb0aeb5b3b7d2fd876d6e3a324f544c0f5a72 = $this->env->getExtension("native_profiler");
        $__internal_ad937641b536ea21bbf4d72e285bb0aeb5b3b7d2fd876d6e3a324f544c0f5a72->enter($__internal_ad937641b536ea21bbf4d72e285bb0aeb5b3b7d2fd876d6e3a324f544c0f5a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_ad937641b536ea21bbf4d72e285bb0aeb5b3b7d2fd876d6e3a324f544c0f5a72->leave($__internal_ad937641b536ea21bbf4d72e285bb0aeb5b3b7d2fd876d6e3a324f544c0f5a72_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
