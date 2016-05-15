<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c326e80556865d88c7db6acc0a98ea0ba14cc99892a13a53a89edd0e12941e5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43c0cd941de1bdc6c0600191b665e4790e8682dca102aa47a3126bf5dbb0c57c = $this->env->getExtension("native_profiler");
        $__internal_43c0cd941de1bdc6c0600191b665e4790e8682dca102aa47a3126bf5dbb0c57c->enter($__internal_43c0cd941de1bdc6c0600191b665e4790e8682dca102aa47a3126bf5dbb0c57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43c0cd941de1bdc6c0600191b665e4790e8682dca102aa47a3126bf5dbb0c57c->leave($__internal_43c0cd941de1bdc6c0600191b665e4790e8682dca102aa47a3126bf5dbb0c57c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0732cb32c1d61ecb639dcc4edf3bda2cb3f2f545b12ad0d6c26309a16405cc10 = $this->env->getExtension("native_profiler");
        $__internal_0732cb32c1d61ecb639dcc4edf3bda2cb3f2f545b12ad0d6c26309a16405cc10->enter($__internal_0732cb32c1d61ecb639dcc4edf3bda2cb3f2f545b12ad0d6c26309a16405cc10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0732cb32c1d61ecb639dcc4edf3bda2cb3f2f545b12ad0d6c26309a16405cc10->leave($__internal_0732cb32c1d61ecb639dcc4edf3bda2cb3f2f545b12ad0d6c26309a16405cc10_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d726948074c36905cc509c3fcd5cae47daa3d2a8f056adf5ee1a8b690a723d8e = $this->env->getExtension("native_profiler");
        $__internal_d726948074c36905cc509c3fcd5cae47daa3d2a8f056adf5ee1a8b690a723d8e->enter($__internal_d726948074c36905cc509c3fcd5cae47daa3d2a8f056adf5ee1a8b690a723d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d726948074c36905cc509c3fcd5cae47daa3d2a8f056adf5ee1a8b690a723d8e->leave($__internal_d726948074c36905cc509c3fcd5cae47daa3d2a8f056adf5ee1a8b690a723d8e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5b13968e6a6127d3cde71570f9b65ca9706677ef7f58d6e6b5552a538dd5aed5 = $this->env->getExtension("native_profiler");
        $__internal_5b13968e6a6127d3cde71570f9b65ca9706677ef7f58d6e6b5552a538dd5aed5->enter($__internal_5b13968e6a6127d3cde71570f9b65ca9706677ef7f58d6e6b5552a538dd5aed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5b13968e6a6127d3cde71570f9b65ca9706677ef7f58d6e6b5552a538dd5aed5->leave($__internal_5b13968e6a6127d3cde71570f9b65ca9706677ef7f58d6e6b5552a538dd5aed5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
