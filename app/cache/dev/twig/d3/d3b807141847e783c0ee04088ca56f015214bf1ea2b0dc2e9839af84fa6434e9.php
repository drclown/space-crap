<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_80e06370093ea4bf865d4cf9046a04062ec062f1505b58e2990dfa52a357964b extends Twig_Template
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
        $__internal_6bcedfcaa472e2972433aef73eaa1ffd94f3c30c24e0ac6da15fab215c2f1d92 = $this->env->getExtension("native_profiler");
        $__internal_6bcedfcaa472e2972433aef73eaa1ffd94f3c30c24e0ac6da15fab215c2f1d92->enter($__internal_6bcedfcaa472e2972433aef73eaa1ffd94f3c30c24e0ac6da15fab215c2f1d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6bcedfcaa472e2972433aef73eaa1ffd94f3c30c24e0ac6da15fab215c2f1d92->leave($__internal_6bcedfcaa472e2972433aef73eaa1ffd94f3c30c24e0ac6da15fab215c2f1d92_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
