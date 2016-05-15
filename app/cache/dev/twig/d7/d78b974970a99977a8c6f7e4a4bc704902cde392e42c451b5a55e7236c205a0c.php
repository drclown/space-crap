<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_54c7937b6da0e91dba2f4445c1442178fcff03f5cde5900af35c33a70c0400bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd53d15ce0c7707459eaf9732455606ccd11febe6466446989621c24d6e989c0 = $this->env->getExtension("native_profiler");
        $__internal_bd53d15ce0c7707459eaf9732455606ccd11febe6466446989621c24d6e989c0->enter($__internal_bd53d15ce0c7707459eaf9732455606ccd11febe6466446989621c24d6e989c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_bd53d15ce0c7707459eaf9732455606ccd11febe6466446989621c24d6e989c0->leave($__internal_bd53d15ce0c7707459eaf9732455606ccd11febe6466446989621c24d6e989c0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_143cba7ec81b38d22f9794cbc26f714990e9a18d6b8936f714a4e782db403256 = $this->env->getExtension("native_profiler");
        $__internal_143cba7ec81b38d22f9794cbc26f714990e9a18d6b8936f714a4e782db403256->enter($__internal_143cba7ec81b38d22f9794cbc26f714990e9a18d6b8936f714a4e782db403256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_143cba7ec81b38d22f9794cbc26f714990e9a18d6b8936f714a4e782db403256->leave($__internal_143cba7ec81b38d22f9794cbc26f714990e9a18d6b8936f714a4e782db403256_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
