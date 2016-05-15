<?php

/* @HomesoftPlatformFiles/Files/files.html.twig */
class __TwigTemplate_289445321768af603223c23402ab3c8277063b730c82fec9e6e3eb5eda641334 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@HomesoftPlatformFiles/Files/files.html.twig", 1);
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
        $__internal_f06864c5ac8722d8126895ad5bf4f7cbbfb0c538d2994fe408a06d81bd8d24b3 = $this->env->getExtension("native_profiler");
        $__internal_f06864c5ac8722d8126895ad5bf4f7cbbfb0c538d2994fe408a06d81bd8d24b3->enter($__internal_f06864c5ac8722d8126895ad5bf4f7cbbfb0c538d2994fe408a06d81bd8d24b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HomesoftPlatformFiles/Files/files.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f06864c5ac8722d8126895ad5bf4f7cbbfb0c538d2994fe408a06d81bd8d24b3->leave($__internal_f06864c5ac8722d8126895ad5bf4f7cbbfb0c538d2994fe408a06d81bd8d24b3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae79f57fb0bb4ce6e01302388e1a8389b7da0d516b2db555f774a22b66849b71 = $this->env->getExtension("native_profiler");
        $__internal_ae79f57fb0bb4ce6e01302388e1a8389b7da0d516b2db555f774a22b66849b71->enter($__internal_ae79f57fb0bb4ce6e01302388e1a8389b7da0d516b2db555f774a22b66849b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ae79f57fb0bb4ce6e01302388e1a8389b7da0d516b2db555f774a22b66849b71->leave($__internal_ae79f57fb0bb4ce6e01302388e1a8389b7da0d516b2db555f774a22b66849b71_prof);

    }

    public function getTemplateName()
    {
        return "@HomesoftPlatformFiles/Files/files.html.twig";
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
