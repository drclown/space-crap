<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_c8e706f05201eff894f9eeb119b160376e91376078c27f951e5e4c8e8d318d43 extends Twig_Template
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
        $__internal_9334266de9a4e35325d8c4d1df81b4e1c07a60b04083d0afee6340d71f1f702d = $this->env->getExtension("native_profiler");
        $__internal_9334266de9a4e35325d8c4d1df81b4e1c07a60b04083d0afee6340d71f1f702d->enter($__internal_9334266de9a4e35325d8c4d1df81b4e1c07a60b04083d0afee6340d71f1f702d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_9334266de9a4e35325d8c4d1df81b4e1c07a60b04083d0afee6340d71f1f702d->leave($__internal_9334266de9a4e35325d8c4d1df81b4e1c07a60b04083d0afee6340d71f1f702d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
