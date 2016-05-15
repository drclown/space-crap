<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_82adf7bfb1bc3efd433520a03b087904c87eccf9b771a5b049e5181ecbb5f2fa extends Twig_Template
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
        $__internal_de90a6956021924728d8ada98c427c919dd21d2ad2b539a6bc98e4aca7fd487a = $this->env->getExtension("native_profiler");
        $__internal_de90a6956021924728d8ada98c427c919dd21d2ad2b539a6bc98e4aca7fd487a->enter($__internal_de90a6956021924728d8ada98c427c919dd21d2ad2b539a6bc98e4aca7fd487a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_de90a6956021924728d8ada98c427c919dd21d2ad2b539a6bc98e4aca7fd487a->leave($__internal_de90a6956021924728d8ada98c427c919dd21d2ad2b539a6bc98e4aca7fd487a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
