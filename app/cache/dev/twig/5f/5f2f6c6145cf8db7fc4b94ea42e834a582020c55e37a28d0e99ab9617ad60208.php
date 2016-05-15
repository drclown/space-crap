<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_625bbd6f1dbf1bbf3709532dea495fe2a4a7fd1a5e616be75ae6696d3bb63103 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_3d2e4b1873f055561ae0fd3256b3a46f7a3b51c9c936cae1a08de79860ca045c = $this->env->getExtension("native_profiler");
        $__internal_3d2e4b1873f055561ae0fd3256b3a46f7a3b51c9c936cae1a08de79860ca045c->enter($__internal_3d2e4b1873f055561ae0fd3256b3a46f7a3b51c9c936cae1a08de79860ca045c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d2e4b1873f055561ae0fd3256b3a46f7a3b51c9c936cae1a08de79860ca045c->leave($__internal_3d2e4b1873f055561ae0fd3256b3a46f7a3b51c9c936cae1a08de79860ca045c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d2a7cf8496859fbb8a330df24914c33620a139a2927836864f445db0873d0b6 = $this->env->getExtension("native_profiler");
        $__internal_5d2a7cf8496859fbb8a330df24914c33620a139a2927836864f445db0873d0b6->enter($__internal_5d2a7cf8496859fbb8a330df24914c33620a139a2927836864f445db0873d0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5d2a7cf8496859fbb8a330df24914c33620a139a2927836864f445db0873d0b6->leave($__internal_5d2a7cf8496859fbb8a330df24914c33620a139a2927836864f445db0873d0b6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e0a14b668901f9dae7f42ea23a70a03e33c3a43595f280ffb59611df9d0a70f = $this->env->getExtension("native_profiler");
        $__internal_1e0a14b668901f9dae7f42ea23a70a03e33c3a43595f280ffb59611df9d0a70f->enter($__internal_1e0a14b668901f9dae7f42ea23a70a03e33c3a43595f280ffb59611df9d0a70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1e0a14b668901f9dae7f42ea23a70a03e33c3a43595f280ffb59611df9d0a70f->leave($__internal_1e0a14b668901f9dae7f42ea23a70a03e33c3a43595f280ffb59611df9d0a70f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
