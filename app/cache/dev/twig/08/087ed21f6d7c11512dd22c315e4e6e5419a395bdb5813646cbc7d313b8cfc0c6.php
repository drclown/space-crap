<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_58ea231a6527d4d431c132db5c96274f0f358f088aabb43da6e942bade0ee719 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_39fe08852ac92ddeb30a1a38b037fb4d1473e9a0b34f87722e28d2e2b2e47fb3 = $this->env->getExtension("native_profiler");
        $__internal_39fe08852ac92ddeb30a1a38b037fb4d1473e9a0b34f87722e28d2e2b2e47fb3->enter($__internal_39fe08852ac92ddeb30a1a38b037fb4d1473e9a0b34f87722e28d2e2b2e47fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39fe08852ac92ddeb30a1a38b037fb4d1473e9a0b34f87722e28d2e2b2e47fb3->leave($__internal_39fe08852ac92ddeb30a1a38b037fb4d1473e9a0b34f87722e28d2e2b2e47fb3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0f278fc82d018b8ead711cbf9a3e893f15b19925feb7043687bc6b8fa920cba2 = $this->env->getExtension("native_profiler");
        $__internal_0f278fc82d018b8ead711cbf9a3e893f15b19925feb7043687bc6b8fa920cba2->enter($__internal_0f278fc82d018b8ead711cbf9a3e893f15b19925feb7043687bc6b8fa920cba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0f278fc82d018b8ead711cbf9a3e893f15b19925feb7043687bc6b8fa920cba2->leave($__internal_0f278fc82d018b8ead711cbf9a3e893f15b19925feb7043687bc6b8fa920cba2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2dd35ada9131217df7db7535e982c0d531b9594893a32dcf14bec8bd225d1b2 = $this->env->getExtension("native_profiler");
        $__internal_b2dd35ada9131217df7db7535e982c0d531b9594893a32dcf14bec8bd225d1b2->enter($__internal_b2dd35ada9131217df7db7535e982c0d531b9594893a32dcf14bec8bd225d1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b2dd35ada9131217df7db7535e982c0d531b9594893a32dcf14bec8bd225d1b2->leave($__internal_b2dd35ada9131217df7db7535e982c0d531b9594893a32dcf14bec8bd225d1b2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0b558b6207a2af825ca9061a3639dd87985e8fcbea3806417061d413d29fca8 = $this->env->getExtension("native_profiler");
        $__internal_c0b558b6207a2af825ca9061a3639dd87985e8fcbea3806417061d413d29fca8->enter($__internal_c0b558b6207a2af825ca9061a3639dd87985e8fcbea3806417061d413d29fca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c0b558b6207a2af825ca9061a3639dd87985e8fcbea3806417061d413d29fca8->leave($__internal_c0b558b6207a2af825ca9061a3639dd87985e8fcbea3806417061d413d29fca8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
