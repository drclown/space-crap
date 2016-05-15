<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4af37e2ea8564594a4f852b5b3f3e70001b3c1d03292e83cd2eecf357d2696a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_feccf1d873f8d700ef56b9931ea9c4fdc4f1c486a4cd01c3c25f6813a7b547a2 = $this->env->getExtension("native_profiler");
        $__internal_feccf1d873f8d700ef56b9931ea9c4fdc4f1c486a4cd01c3c25f6813a7b547a2->enter($__internal_feccf1d873f8d700ef56b9931ea9c4fdc4f1c486a4cd01c3c25f6813a7b547a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_feccf1d873f8d700ef56b9931ea9c4fdc4f1c486a4cd01c3c25f6813a7b547a2->leave($__internal_feccf1d873f8d700ef56b9931ea9c4fdc4f1c486a4cd01c3c25f6813a7b547a2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1af4ab2b1be022c7e2310d1db2496275072888e01cc3ef1bc95986af8597e723 = $this->env->getExtension("native_profiler");
        $__internal_1af4ab2b1be022c7e2310d1db2496275072888e01cc3ef1bc95986af8597e723->enter($__internal_1af4ab2b1be022c7e2310d1db2496275072888e01cc3ef1bc95986af8597e723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1af4ab2b1be022c7e2310d1db2496275072888e01cc3ef1bc95986af8597e723->leave($__internal_1af4ab2b1be022c7e2310d1db2496275072888e01cc3ef1bc95986af8597e723_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb4950e66594d60e284b38d8593c8a52aa17596e6d8d651ef9e3e6e5249f4d0f = $this->env->getExtension("native_profiler");
        $__internal_cb4950e66594d60e284b38d8593c8a52aa17596e6d8d651ef9e3e6e5249f4d0f->enter($__internal_cb4950e66594d60e284b38d8593c8a52aa17596e6d8d651ef9e3e6e5249f4d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_cb4950e66594d60e284b38d8593c8a52aa17596e6d8d651ef9e3e6e5249f4d0f->leave($__internal_cb4950e66594d60e284b38d8593c8a52aa17596e6d8d651ef9e3e6e5249f4d0f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
