<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_7cd05922c44285a12d7c82e4f91949bbf040016edefc04363883295d354ee125 extends Twig_Template
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
        $__internal_3a7109cb1afc262982e1f858d2da59c313f3860ac10b8999bd13d25b0e480af3 = $this->env->getExtension("native_profiler");
        $__internal_3a7109cb1afc262982e1f858d2da59c313f3860ac10b8999bd13d25b0e480af3->enter($__internal_3a7109cb1afc262982e1f858d2da59c313f3860ac10b8999bd13d25b0e480af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3a7109cb1afc262982e1f858d2da59c313f3860ac10b8999bd13d25b0e480af3->leave($__internal_3a7109cb1afc262982e1f858d2da59c313f3860ac10b8999bd13d25b0e480af3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
