<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_4f931df4d247ddd3d9cbd305fbbc3827d0fbc6edc2eec70c3f8c5456173c8683 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_096a46d8dc7dcc4a3b3e1669537710a84393d6774d70e9fec08e41cc59955e8c = $this->env->getExtension("native_profiler");
        $__internal_096a46d8dc7dcc4a3b3e1669537710a84393d6774d70e9fec08e41cc59955e8c->enter($__internal_096a46d8dc7dcc4a3b3e1669537710a84393d6774d70e9fec08e41cc59955e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_096a46d8dc7dcc4a3b3e1669537710a84393d6774d70e9fec08e41cc59955e8c->leave($__internal_096a46d8dc7dcc4a3b3e1669537710a84393d6774d70e9fec08e41cc59955e8c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_998179a3295358e33392697a8d61d2079bd8bb3fe0eeda55a6cd44c2ad375ae4 = $this->env->getExtension("native_profiler");
        $__internal_998179a3295358e33392697a8d61d2079bd8bb3fe0eeda55a6cd44c2ad375ae4->enter($__internal_998179a3295358e33392697a8d61d2079bd8bb3fe0eeda55a6cd44c2ad375ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_998179a3295358e33392697a8d61d2079bd8bb3fe0eeda55a6cd44c2ad375ae4->leave($__internal_998179a3295358e33392697a8d61d2079bd8bb3fe0eeda55a6cd44c2ad375ae4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8b29509b897cb822339d47930f7b884606c5a67dc09e8156d982f5adfd111892 = $this->env->getExtension("native_profiler");
        $__internal_8b29509b897cb822339d47930f7b884606c5a67dc09e8156d982f5adfd111892->enter($__internal_8b29509b897cb822339d47930f7b884606c5a67dc09e8156d982f5adfd111892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8b29509b897cb822339d47930f7b884606c5a67dc09e8156d982f5adfd111892->leave($__internal_8b29509b897cb822339d47930f7b884606c5a67dc09e8156d982f5adfd111892_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_76f6d08b664eb8b3b9ad54f87f00499cc543957e4ce591c04151ecfe943744db = $this->env->getExtension("native_profiler");
        $__internal_76f6d08b664eb8b3b9ad54f87f00499cc543957e4ce591c04151ecfe943744db->enter($__internal_76f6d08b664eb8b3b9ad54f87f00499cc543957e4ce591c04151ecfe943744db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_76f6d08b664eb8b3b9ad54f87f00499cc543957e4ce591c04151ecfe943744db->leave($__internal_76f6d08b664eb8b3b9ad54f87f00499cc543957e4ce591c04151ecfe943744db_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
