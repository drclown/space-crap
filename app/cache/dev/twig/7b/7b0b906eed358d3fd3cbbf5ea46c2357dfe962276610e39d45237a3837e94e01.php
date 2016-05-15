<?php

/* nav.html.twig */
class __TwigTemplate_c4398a2702dd1c28d6ff448e28a543e756e983aa4c96f9e8571f4d525a10a6a2 extends Twig_Template
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
        $__internal_bd712bcb292aa3812fe2199a7b6f94f58fa60907ce2c6943ee4c834d9b6b6c51 = $this->env->getExtension("native_profiler");
        $__internal_bd712bcb292aa3812fe2199a7b6f94f58fa60907ce2c6943ee4c834d9b6b6c51->enter($__internal_bd712bcb292aa3812fe2199a7b6f94f58fa60907ce2c6943ee4c834d9b6b6c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nav.html.twig"));

        // line 1
        echo "<nav id=\"nav-space-crap\" class=\"navbar navbar-default\" ng-controller=\"externalDiskCtrl\">
    <div class=\"navbar-header active\">
        <a id=\"/media\" class=\"navbar-brand load-tree\" href=\"#\">/media</a>
    </div>
    <ul class=\"nav navbar-nav\">
        <li class=\"dropdown\" ng-show=\"!externalsDisks.length\">
            <a class=\"dropdown-toggle\">0 remote found</a>
        </li>
        <li ng-repeat=\"externalDisk in externalsDisks\" class=\"dropdown\">
            <a href=\"#\"  class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <span>{[{ externalDisk.name }]}</span>
                <span class=\"caret\"></span>
            </a>
            <!--<ul class=\"dropdown-menu\">
                <li ng-repeat=\"mediaDirectory in externalDisk.mediaDirectories\">
                    <a href=\"#\" ng-click=\"loadMedias(mediaDirectory.path)\">
                        <span class=\"basename\">{[{ mediaDirectory.basename }]}</span>
                    </a>
                </li>
            </ul>-->
        </li>
    </ul>
    <div class=\"pull-right col-sm-1\">
        <a href=\"#\" class=\"navbar-btn btn btn-default\" id=\"refresh\">
            <span class=\"glyphicon glyphicon-transfer\"></span>
        </a>
    </div>
</nav>";
        
        $__internal_bd712bcb292aa3812fe2199a7b6f94f58fa60907ce2c6943ee4c834d9b6b6c51->leave($__internal_bd712bcb292aa3812fe2199a7b6f94f58fa60907ce2c6943ee4c834d9b6b6c51_prof);

    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <nav id="nav-space-crap" class="navbar navbar-default" ng-controller="externalDiskCtrl">*/
/*     <div class="navbar-header active">*/
/*         <a id="/media" class="navbar-brand load-tree" href="#">/media</a>*/
/*     </div>*/
/*     <ul class="nav navbar-nav">*/
/*         <li class="dropdown" ng-show="!externalsDisks.length">*/
/*             <a class="dropdown-toggle">0 remote found</a>*/
/*         </li>*/
/*         <li ng-repeat="externalDisk in externalsDisks" class="dropdown">*/
/*             <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">*/
/*                 <span>{[{ externalDisk.name }]}</span>*/
/*                 <span class="caret"></span>*/
/*             </a>*/
/*             <!--<ul class="dropdown-menu">*/
/*                 <li ng-repeat="mediaDirectory in externalDisk.mediaDirectories">*/
/*                     <a href="#" ng-click="loadMedias(mediaDirectory.path)">*/
/*                         <span class="basename">{[{ mediaDirectory.basename }]}</span>*/
/*                     </a>*/
/*                 </li>*/
/*             </ul>-->*/
/*         </li>*/
/*     </ul>*/
/*     <div class="pull-right col-sm-1">*/
/*         <a href="#" class="navbar-btn btn btn-default" id="refresh">*/
/*             <span class="glyphicon glyphicon-transfer"></span>*/
/*         </a>*/
/*     </div>*/
/* </nav>*/
