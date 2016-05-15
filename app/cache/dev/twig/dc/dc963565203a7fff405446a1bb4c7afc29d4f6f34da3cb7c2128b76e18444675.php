<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_479d5945ad84b45b316bf844dbc451c297d7e44caa86b33b06a132b5673c89a1 extends Twig_Template
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
        $__internal_2130db3a8c5f032236789f9df3da410480e323d9d7f3783559c2bc209f9b1871 = $this->env->getExtension("native_profiler");
        $__internal_2130db3a8c5f032236789f9df3da410480e323d9d7f3783559c2bc209f9b1871->enter($__internal_2130db3a8c5f032236789f9df3da410480e323d9d7f3783559c2bc209f9b1871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2130db3a8c5f032236789f9df3da410480e323d9d7f3783559c2bc209f9b1871->leave($__internal_2130db3a8c5f032236789f9df3da410480e323d9d7f3783559c2bc209f9b1871_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
