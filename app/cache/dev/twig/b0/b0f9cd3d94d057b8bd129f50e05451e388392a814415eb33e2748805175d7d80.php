<?php

/* ::base.html.twig */
class __TwigTemplate_6ea9512653369994812fabd27aa38511b484d72b30adc04955098ff24205ae74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b9bed00187dd5160fa576c46007a71b524e90c76d7b2ab467640f935396a25b = $this->env->getExtension("native_profiler");
        $__internal_4b9bed00187dd5160fa576c46007a71b524e90c76d7b2ab467640f935396a25b->enter($__internal_4b9bed00187dd5160fa576c46007a71b524e90c76d7b2ab467640f935396a25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html ng-app=\"spaceCrapApp\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
        ";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "516e19c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_516e19c_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/516e19c_space-crap_1.js");
            // line 10
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "516e19c_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_516e19c_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/516e19c_spaceCrap_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "516e19c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_516e19c") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/516e19c.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "
        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/angular/angular.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/angular-route/angular-route.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <nav>
            ";
        // line 24
        $this->loadTemplate("nav.html.twig", "::base.html.twig", 24)->display($context);
        // line 25
        echo "        </nav>
        <div class=\"container-fluid\">
            <div class=\"col-lg-12\">
                ";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "            </div>
        </div>
    </body>
</html>
";
        
        $__internal_4b9bed00187dd5160fa576c46007a71b524e90c76d7b2ab467640f935396a25b->leave($__internal_4b9bed00187dd5160fa576c46007a71b524e90c76d7b2ab467640f935396a25b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_459887cd37657bd842f799fe6ccb582bd517e9d3b897d2f94fb85dadfe1f5e0c = $this->env->getExtension("native_profiler");
        $__internal_459887cd37657bd842f799fe6ccb582bd517e9d3b897d2f94fb85dadfe1f5e0c->enter($__internal_459887cd37657bd842f799fe6ccb582bd517e9d3b897d2f94fb85dadfe1f5e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "space-crap Josay !";
        
        $__internal_459887cd37657bd842f799fe6ccb582bd517e9d3b897d2f94fb85dadfe1f5e0c->leave($__internal_459887cd37657bd842f799fe6ccb582bd517e9d3b897d2f94fb85dadfe1f5e0c_prof);

    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        $__internal_122b18c3a67f282397ed914fa492bdaaa8c375e8d20d70a97d0d8f729b0f8a1c = $this->env->getExtension("native_profiler");
        $__internal_122b18c3a67f282397ed914fa492bdaaa8c375e8d20d70a97d0d8f729b0f8a1c->enter($__internal_122b18c3a67f282397ed914fa492bdaaa8c375e8d20d70a97d0d8f729b0f8a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo "                ";
        
        $__internal_122b18c3a67f282397ed914fa492bdaaa8c375e8d20d70a97d0d8f729b0f8a1c->leave($__internal_122b18c3a67f282397ed914fa492bdaaa8c375e8d20d70a97d0d8f729b0f8a1c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 29,  130 => 28,  118 => 5,  107 => 30,  105 => 28,  100 => 25,  98 => 24,  91 => 20,  87 => 19,  83 => 18,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  63 => 12,  43 => 10,  39 => 8,  35 => 7,  30 => 5,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html ng-app="spaceCrapApp">*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}space-crap Josay !{% endblock %}</title>*/
/* */
/*         <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}" type="text/css">*/
/*         {% javascripts '@HomesoftPlatformFilesBundle/Resources/public/js/space-crap.js'*/
/*         '@HomesoftPlatformFilesBundle/Resources/public/js/spaceCrap.js' %}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/* */
/*         <script type="text/javascript" src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('assets/vendor/angular/angular.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('assets/vendor/angular-route/angular-route.min.js') }}"></script>*/
/* */
/*         <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*         <script src="{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}"></script>*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <nav>*/
/*             {% include "nav.html.twig" %}*/
/*         </nav>*/
/*         <div class="container-fluid">*/
/*             <div class="col-lg-12">*/
/*                 {% block body %}*/
/*                 {% endblock %}*/
/*             </div>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
