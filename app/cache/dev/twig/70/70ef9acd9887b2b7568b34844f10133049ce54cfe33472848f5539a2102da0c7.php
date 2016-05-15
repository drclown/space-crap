<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_b495167c7f064616514afed701797cd867abd5c6621db14d9a3b1e43391400da extends Twig_Template
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
        $__internal_19c237a8ad34182bd7aad8478c8653231f66f10cd5a56efd582a5d07e3d57f0c = $this->env->getExtension("native_profiler");
        $__internal_19c237a8ad34182bd7aad8478c8653231f66f10cd5a56efd582a5d07e3d57f0c->enter($__internal_19c237a8ad34182bd7aad8478c8653231f66f10cd5a56efd582a5d07e3d57f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_19c237a8ad34182bd7aad8478c8653231f66f10cd5a56efd582a5d07e3d57f0c->leave($__internal_19c237a8ad34182bd7aad8478c8653231f66f10cd5a56efd582a5d07e3d57f0c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
