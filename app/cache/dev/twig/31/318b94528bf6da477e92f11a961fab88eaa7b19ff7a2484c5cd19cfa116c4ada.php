<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_25bee2cbe6da7876d4ddc1812420d19b893ce05c2e0296639484f7f316dcb9c6 extends Twig_Template
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
        $__internal_3b9c6cbe16383d8dfb787ecf204b1339f9389119283c4f9b2f9bf385ddbe0f44 = $this->env->getExtension("native_profiler");
        $__internal_3b9c6cbe16383d8dfb787ecf204b1339f9389119283c4f9b2f9bf385ddbe0f44->enter($__internal_3b9c6cbe16383d8dfb787ecf204b1339f9389119283c4f9b2f9bf385ddbe0f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_3b9c6cbe16383d8dfb787ecf204b1339f9389119283c4f9b2f9bf385ddbe0f44->leave($__internal_3b9c6cbe16383d8dfb787ecf204b1339f9389119283c4f9b2f9bf385ddbe0f44_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/*         <traces>*/
/* {% for trace in exception.trace %}*/
/*             <trace>*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/*             </trace>*/
/* {% endfor %}*/
/*         </traces>*/
/* */
