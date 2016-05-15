<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_94c3fff9a62b974b9fb5ea70174670282ebab12c78c7d1735089658d91410d5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_74a4d946c345be2b3cdc0bc726725b80199707f84a9c1fdd0d7e1946daf43147 = $this->env->getExtension("native_profiler");
        $__internal_74a4d946c345be2b3cdc0bc726725b80199707f84a9c1fdd0d7e1946daf43147->enter($__internal_74a4d946c345be2b3cdc0bc726725b80199707f84a9c1fdd0d7e1946daf43147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74a4d946c345be2b3cdc0bc726725b80199707f84a9c1fdd0d7e1946daf43147->leave($__internal_74a4d946c345be2b3cdc0bc726725b80199707f84a9c1fdd0d7e1946daf43147_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7d30650702906111f162109946ac191cad6de776d88908018779dfaf6770a79c = $this->env->getExtension("native_profiler");
        $__internal_7d30650702906111f162109946ac191cad6de776d88908018779dfaf6770a79c->enter($__internal_7d30650702906111f162109946ac191cad6de776d88908018779dfaf6770a79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7d30650702906111f162109946ac191cad6de776d88908018779dfaf6770a79c->leave($__internal_7d30650702906111f162109946ac191cad6de776d88908018779dfaf6770a79c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca9f6436329cf08c100b7b75faa19a8d71b6a02db597928945a148606cf6b74a = $this->env->getExtension("native_profiler");
        $__internal_ca9f6436329cf08c100b7b75faa19a8d71b6a02db597928945a148606cf6b74a->enter($__internal_ca9f6436329cf08c100b7b75faa19a8d71b6a02db597928945a148606cf6b74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ca9f6436329cf08c100b7b75faa19a8d71b6a02db597928945a148606cf6b74a->leave($__internal_ca9f6436329cf08c100b7b75faa19a8d71b6a02db597928945a148606cf6b74a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f94d064648f5c34d0ecf37a51dd6df5dc3ecd172748a325a5f369b57957103bc = $this->env->getExtension("native_profiler");
        $__internal_f94d064648f5c34d0ecf37a51dd6df5dc3ecd172748a325a5f369b57957103bc->enter($__internal_f94d064648f5c34d0ecf37a51dd6df5dc3ecd172748a325a5f369b57957103bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f94d064648f5c34d0ecf37a51dd6df5dc3ecd172748a325a5f369b57957103bc->leave($__internal_f94d064648f5c34d0ecf37a51dd6df5dc3ecd172748a325a5f369b57957103bc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
