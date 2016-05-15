<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_8688d3dfe091c84e869cf6c65f7f3914bfe1e43409e68dc4bf56e01dec412247 extends Twig_Template
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
        $__internal_3553467775a421543a9c92bbe1a08ef500082ceedc7d096b4523b19662bfa445 = $this->env->getExtension("native_profiler");
        $__internal_3553467775a421543a9c92bbe1a08ef500082ceedc7d096b4523b19662bfa445->enter($__internal_3553467775a421543a9c92bbe1a08ef500082ceedc7d096b4523b19662bfa445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3553467775a421543a9c92bbe1a08ef500082ceedc7d096b4523b19662bfa445->leave($__internal_3553467775a421543a9c92bbe1a08ef500082ceedc7d096b4523b19662bfa445_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
