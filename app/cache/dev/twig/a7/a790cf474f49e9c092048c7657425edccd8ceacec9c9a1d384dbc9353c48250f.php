<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_1aa49b0d58b2aeb2f137ddcd7e7d8aa6fdeb89f0d6b9a5884e32f8178319b82e extends Twig_Template
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
        $__internal_a3886ae8078b2ea555cfb26067fadfa6743e97137ee240e2a4ba8b0a4d52a625 = $this->env->getExtension("native_profiler");
        $__internal_a3886ae8078b2ea555cfb26067fadfa6743e97137ee240e2a4ba8b0a4d52a625->enter($__internal_a3886ae8078b2ea555cfb26067fadfa6743e97137ee240e2a4ba8b0a4d52a625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a3886ae8078b2ea555cfb26067fadfa6743e97137ee240e2a4ba8b0a4d52a625->leave($__internal_a3886ae8078b2ea555cfb26067fadfa6743e97137ee240e2a4ba8b0a4d52a625_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
