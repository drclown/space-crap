<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_ed2f3c97d8456a2187ec4b24af84228cf02db531252da556beaba2f5e322bd19 extends Twig_Template
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
        $__internal_71b300d999efc8e0e18fb2144e0e79db247f4f3b5e25acd055dd24ce84c777a6 = $this->env->getExtension("native_profiler");
        $__internal_71b300d999efc8e0e18fb2144e0e79db247f4f3b5e25acd055dd24ce84c777a6->enter($__internal_71b300d999efc8e0e18fb2144e0e79db247f4f3b5e25acd055dd24ce84c777a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_71b300d999efc8e0e18fb2144e0e79db247f4f3b5e25acd055dd24ce84c777a6->leave($__internal_71b300d999efc8e0e18fb2144e0e79db247f4f3b5e25acd055dd24ce84c777a6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
