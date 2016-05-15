<?php

/* HomesoftPlatformFilesBundle:Files:files.html.twig */
class __TwigTemplate_ecc2f0972496548fb3d7e470c5911332a79ebf4acfab018812400cbac9cd6b55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "HomesoftPlatformFilesBundle:Files:files.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5960c9a65b94842e9a8f787213073387a2d1a90204c291d52ff840881eb60b1 = $this->env->getExtension("native_profiler");
        $__internal_a5960c9a65b94842e9a8f787213073387a2d1a90204c291d52ff840881eb60b1->enter($__internal_a5960c9a65b94842e9a8f787213073387a2d1a90204c291d52ff840881eb60b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HomesoftPlatformFilesBundle:Files:files.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5960c9a65b94842e9a8f787213073387a2d1a90204c291d52ff840881eb60b1->leave($__internal_a5960c9a65b94842e9a8f787213073387a2d1a90204c291d52ff840881eb60b1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4317c736fbd4f798cb04810d0e394dd52689a3a262cd5919957b8d037f920f60 = $this->env->getExtension("native_profiler");
        $__internal_4317c736fbd4f798cb04810d0e394dd52689a3a262cd5919957b8d037f920f60->enter($__internal_4317c736fbd4f798cb04810d0e394dd52689a3a262cd5919957b8d037f920f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"row\">
    <section ng-controller=\"mediaCtrl\">
        <article ng-show=\"medias.length\">
            <ul>
                <li ng-repeat=\"media in medias\">{[{ media.title }]}</li>
            </ul>
        </article>
    </section>
</div>
<div class=\"row\">
    <div class=\"col-sm-12\">
        ";
        // line 16
        echo twig_include($this->env, $context, "HomesoftPlatformFilesBundle:Files:menu-video.html.twig");
        echo "
    </div>
</div>

";
        
        $__internal_4317c736fbd4f798cb04810d0e394dd52689a3a262cd5919957b8d037f920f60->leave($__internal_4317c736fbd4f798cb04810d0e394dd52689a3a262cd5919957b8d037f920f60_prof);

    }

    public function getTemplateName()
    {
        return "HomesoftPlatformFilesBundle:Files:files.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="row">*/
/*     <section ng-controller="mediaCtrl">*/
/*         <article ng-show="medias.length">*/
/*             <ul>*/
/*                 <li ng-repeat="media in medias">{[{ media.title }]}</li>*/
/*             </ul>*/
/*         </article>*/
/*     </section>*/
/* </div>*/
/* <div class="row">*/
/*     <div class="col-sm-12">*/
/*         {{ include("HomesoftPlatformFilesBundle:Files:menu-video.html.twig") }}*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
