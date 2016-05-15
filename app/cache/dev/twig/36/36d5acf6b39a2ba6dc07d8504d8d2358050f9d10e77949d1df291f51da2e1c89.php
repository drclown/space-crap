<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_08f1a5b7f3b8e80e9514fc59561b7c0de44c5ff407d146448a266c26cb1d1d92 extends Twig_Template
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
        $__internal_bdfd0afd7ebc1b9024e81b0a7c6da5a97a1baffc00dd4c809ed38c7892f4e346 = $this->env->getExtension("native_profiler");
        $__internal_bdfd0afd7ebc1b9024e81b0a7c6da5a97a1baffc00dd4c809ed38c7892f4e346->enter($__internal_bdfd0afd7ebc1b9024e81b0a7c6da5a97a1baffc00dd4c809ed38c7892f4e346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bdfd0afd7ebc1b9024e81b0a7c6da5a97a1baffc00dd4c809ed38c7892f4e346->leave($__internal_bdfd0afd7ebc1b9024e81b0a7c6da5a97a1baffc00dd4c809ed38c7892f4e346_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
