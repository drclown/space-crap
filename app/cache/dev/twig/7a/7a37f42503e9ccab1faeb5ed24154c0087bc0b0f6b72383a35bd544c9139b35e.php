<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_45d12dbb9081c567a673a073b91e595d2248f0310f8ce3d26586bb8f7ede0bcc extends Twig_Template
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
        $__internal_3c2d4a1a2a72538453b02402e29c9693ab8a93fb4b2667d0d0c80e44ea2d2497 = $this->env->getExtension("native_profiler");
        $__internal_3c2d4a1a2a72538453b02402e29c9693ab8a93fb4b2667d0d0c80e44ea2d2497->enter($__internal_3c2d4a1a2a72538453b02402e29c9693ab8a93fb4b2667d0d0c80e44ea2d2497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_3c2d4a1a2a72538453b02402e29c9693ab8a93fb4b2667d0d0c80e44ea2d2497->leave($__internal_3c2d4a1a2a72538453b02402e29c9693ab8a93fb4b2667d0d0c80e44ea2d2497_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
