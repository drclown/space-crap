<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_ca2ddf1400a81e6463b73d8566f9d71ebff1552bb57707dc7443c09a49c6ee05 extends Twig_Template
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
        $__internal_ab4158f96aa6a24211b9e3195bd524c0b60ee5cddd35aa234943a2773393ebb1 = $this->env->getExtension("native_profiler");
        $__internal_ab4158f96aa6a24211b9e3195bd524c0b60ee5cddd35aa234943a2773393ebb1->enter($__internal_ab4158f96aa6a24211b9e3195bd524c0b60ee5cddd35aa234943a2773393ebb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ab4158f96aa6a24211b9e3195bd524c0b60ee5cddd35aa234943a2773393ebb1->leave($__internal_ab4158f96aa6a24211b9e3195bd524c0b60ee5cddd35aa234943a2773393ebb1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
