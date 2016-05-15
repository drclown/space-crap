<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_e93e71d23268b52303306f5681fbbcb9b78d9eb58af27c289742c37456e6d0a5 extends Twig_Template
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
        $__internal_0f34380de462e33f0ceb4b8206655f2d5f36a3aad922d82277cd3cd145a36288 = $this->env->getExtension("native_profiler");
        $__internal_0f34380de462e33f0ceb4b8206655f2d5f36a3aad922d82277cd3cd145a36288->enter($__internal_0f34380de462e33f0ceb4b8206655f2d5f36a3aad922d82277cd3cd145a36288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_0f34380de462e33f0ceb4b8206655f2d5f36a3aad922d82277cd3cd145a36288->leave($__internal_0f34380de462e33f0ceb4b8206655f2d5f36a3aad922d82277cd3cd145a36288_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
