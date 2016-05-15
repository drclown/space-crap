<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6d5658963d1e5b9c508316b956bb007fe6d4abff3c3c4aca85cdbb95f5d3ea05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_7280a2da43b09031c11f7591632f42de46d7c7ecd8530bc8aa8e84bb3eb23a2f = $this->env->getExtension("native_profiler");
        $__internal_7280a2da43b09031c11f7591632f42de46d7c7ecd8530bc8aa8e84bb3eb23a2f->enter($__internal_7280a2da43b09031c11f7591632f42de46d7c7ecd8530bc8aa8e84bb3eb23a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7280a2da43b09031c11f7591632f42de46d7c7ecd8530bc8aa8e84bb3eb23a2f->leave($__internal_7280a2da43b09031c11f7591632f42de46d7c7ecd8530bc8aa8e84bb3eb23a2f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dc987acd3eb179151a8466766cef4724be1c93cb374b5f19a043dfe84e613eb4 = $this->env->getExtension("native_profiler");
        $__internal_dc987acd3eb179151a8466766cef4724be1c93cb374b5f19a043dfe84e613eb4->enter($__internal_dc987acd3eb179151a8466766cef4724be1c93cb374b5f19a043dfe84e613eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dc987acd3eb179151a8466766cef4724be1c93cb374b5f19a043dfe84e613eb4->leave($__internal_dc987acd3eb179151a8466766cef4724be1c93cb374b5f19a043dfe84e613eb4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_81810d51cd6de52de059b2082b0ebc3ff21409d17cc2964dbfd1e5fb9899dc00 = $this->env->getExtension("native_profiler");
        $__internal_81810d51cd6de52de059b2082b0ebc3ff21409d17cc2964dbfd1e5fb9899dc00->enter($__internal_81810d51cd6de52de059b2082b0ebc3ff21409d17cc2964dbfd1e5fb9899dc00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_81810d51cd6de52de059b2082b0ebc3ff21409d17cc2964dbfd1e5fb9899dc00->leave($__internal_81810d51cd6de52de059b2082b0ebc3ff21409d17cc2964dbfd1e5fb9899dc00_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a20d6feb5a8dd38f8319a42b4fc81b7bc025ab9b1741ec4d402fc0f5baf7df2c = $this->env->getExtension("native_profiler");
        $__internal_a20d6feb5a8dd38f8319a42b4fc81b7bc025ab9b1741ec4d402fc0f5baf7df2c->enter($__internal_a20d6feb5a8dd38f8319a42b4fc81b7bc025ab9b1741ec4d402fc0f5baf7df2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a20d6feb5a8dd38f8319a42b4fc81b7bc025ab9b1741ec4d402fc0f5baf7df2c->leave($__internal_a20d6feb5a8dd38f8319a42b4fc81b7bc025ab9b1741ec4d402fc0f5baf7df2c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
