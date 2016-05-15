<?php

/* ::nav.html.twig */
class __TwigTemplate_6d91f9f8dfc1bc8edd3c1bb2c555615dbba2e06a375a3b8e51ca4ad42cddbb10 extends Twig_Template
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
        $__internal_b34947ae9dbdb33ff1ff77b65e343bed6aa6c8322d20c1e9c3b49454c6ad5ed0 = $this->env->getExtension("native_profiler");
        $__internal_b34947ae9dbdb33ff1ff77b65e343bed6aa6c8322d20c1e9c3b49454c6ad5ed0->enter($__internal_b34947ae9dbdb33ff1ff77b65e343bed6aa6c8322d20c1e9c3b49454c6ad5ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::nav.html.twig"));

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
        
        $__internal_b34947ae9dbdb33ff1ff77b65e343bed6aa6c8322d20c1e9c3b49454c6ad5ed0->leave($__internal_b34947ae9dbdb33ff1ff77b65e343bed6aa6c8322d20c1e9c3b49454c6ad5ed0_prof);

    }

    public function getTemplateName()
    {
        return "::nav.html.twig";
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
