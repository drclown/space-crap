<?php

/* HomesoftPlatformFilesBundle:Files:menu-video.html.twig */
class __TwigTemplate_cc13d2929f5c3d2bc2fa84ef1e558e9440e31e2d643c7bd8737becf1729395b6 extends Twig_Template
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
        $__internal_7c2c18b6d92eb2214a462ec4d3af1ea062af8d49afe946e88fda6ee5ed2ef004 = $this->env->getExtension("native_profiler");
        $__internal_7c2c18b6d92eb2214a462ec4d3af1ea062af8d49afe946e88fda6ee5ed2ef004->enter($__internal_7c2c18b6d92eb2214a462ec4d3af1ea062af8d49afe946e88fda6ee5ed2ef004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HomesoftPlatformFilesBundle:Files:menu-video.html.twig"));

        // line 1
        echo "<div id=\"menu-video\">
    <div id=\"remote-control\">
        <div class=\"col-sm-8\">
            <div class=\"btn-group\">
                <a id=\"fast-backward\" class=\"execute-cmd btn btn-warning btn-lg\" href=\"#\"><span class=\"glyphicon glyphicon-fast-backward\"></span>&nbsp;</a>
                <a id=\"step-backward\" class=\"execute-cmd btn btn-info btn-lg\" href=\"#\"><span class=\"glyphicon glyphicon-step-backward\"></span>&nbsp;</a>
                <a id=\"backward\" class=\"execute-cmd btn btn-info btn-lg\" href=\"#\"><span class=\"glyphicon glyphicon-backward\"></span>&nbsp;</a>
                <a id=\"play\" class=\"execute-cmd btn btn-success btn-lg\" href=\"#\"><span class=\"glyphicon glyphicon-play\"></span>&nbsp;</a>
                <a id=\"pause\" class=\"execute-cmd btn btn-info btn-lg\" href=\"#\"><span class=\"glyphicon glyphicon-pause\"></span>&nbsp;</a>
                <a id=\"stop\" class=\"execute-cmd btn btn-danger btn-lg\" href=\"#\"><span class=\"glyphicon glyphicon-stop\"></span>&nbsp;</a>
                <a id=\"forward\" class=\"execute-cmd btn btn-info btn-lg\" href=\"#\"><span class=\"glyphicon glyphicon-forward\"></span>&nbsp;</a>
                <a id=\"step-forward\" class=\"execute-cmd btn btn-info btn-lg\" href=\"#\"><span class=\"glyphicon glyphicon-step-forward\"></span>&nbsp;</a>
                <a id=\"fast-forward\" class=\"execute-cmd btn btn-warning btn-lg\" href=\"#\"><span class=\"glyphicon glyphicon-fast-forward\"></span>&nbsp;</a>
            </div>
        </div>
        <div class=\"col-sm-3\">
            <div class=\"btn-group\">
                <a id=\"volume-down\" class=\"execute-cmd btn btn-default btn-lg\" href=\"#\"><span class=\"glyphicon glyphicon-volume-down\"></span>&nbsp;</a>
                <a id=\"volume-off\" class=\"execute-cmd btn btn-default btn-lg\" href=\"#\"><span class=\"glyphicon glyphicon-volume-off\"></span>&nbsp;</a>
                <a id=\"volume-up\" class=\"execute-cmd btn btn-default btn-lg\" href=\"#\"><span class=\"glyphicon glyphicon-volume-up\"></span>&nbsp;</a>
            </div>
        </div>
        <div class=\"col-sm-1\">
            <div class=\"btn-group\">
                <a id=\"load-subtitle\" alt=\"subtitle\" class=\"btn btn-default btn-lg\" href=\"#\"><span class=\"glyphicon glyphicon-subtitles\"></span>&nbsp;</a>
            </div>
        </div>
    </div>
</div>

<script>
\$( document ).ready(function() {
    \$(\".execute-cmd\").on(\"click\", function() {
        var id = \$(this).attr(\"id\");
        if(id === \"play\") {
            var pathVideo = \$(this).val();
            \$.ajax({
                type: \"POST\",
                data: {pathFile: pathVideo},
                url: Routing.generate(\"homesoft_platform_files_link_file\")
            });
        }
        \$.ajax({
            url: Routing.generate(\"homesoft_platform_files_cmd_ctrl\", {cmdCtrlVideo: id}),
            complete: function(data) {
                var playingFile = data.responseText;
                var text = \"\";
                console.log(text);
                if(playingFile !== '') {
                    text = \"Fichier en cour : \" + playingFile;
                }
                \$(\"#information-playing-file div\").html(text);
            }

        });
    });
});
</script>";
        
        $__internal_7c2c18b6d92eb2214a462ec4d3af1ea062af8d49afe946e88fda6ee5ed2ef004->leave($__internal_7c2c18b6d92eb2214a462ec4d3af1ea062af8d49afe946e88fda6ee5ed2ef004_prof);

    }

    public function getTemplateName()
    {
        return "HomesoftPlatformFilesBundle:Files:menu-video.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div id="menu-video">*/
/*     <div id="remote-control">*/
/*         <div class="col-sm-8">*/
/*             <div class="btn-group">*/
/*                 <a id="fast-backward" class="execute-cmd btn btn-warning btn-lg" href="#"><span class="glyphicon glyphicon-fast-backward"></span>&nbsp;</a>*/
/*                 <a id="step-backward" class="execute-cmd btn btn-info btn-lg" href="#"><span class="glyphicon glyphicon-step-backward"></span>&nbsp;</a>*/
/*                 <a id="backward" class="execute-cmd btn btn-info btn-lg" href="#"><span class="glyphicon glyphicon-backward"></span>&nbsp;</a>*/
/*                 <a id="play" class="execute-cmd btn btn-success btn-lg" href="#"><span class="glyphicon glyphicon-play"></span>&nbsp;</a>*/
/*                 <a id="pause" class="execute-cmd btn btn-info btn-lg" href="#"><span class="glyphicon glyphicon-pause"></span>&nbsp;</a>*/
/*                 <a id="stop" class="execute-cmd btn btn-danger btn-lg" href="#"><span class="glyphicon glyphicon-stop"></span>&nbsp;</a>*/
/*                 <a id="forward" class="execute-cmd btn btn-info btn-lg" href="#"><span class="glyphicon glyphicon-forward"></span>&nbsp;</a>*/
/*                 <a id="step-forward" class="execute-cmd btn btn-info btn-lg" href="#"><span class="glyphicon glyphicon-step-forward"></span>&nbsp;</a>*/
/*                 <a id="fast-forward" class="execute-cmd btn btn-warning btn-lg" href="#"><span class="glyphicon glyphicon-fast-forward"></span>&nbsp;</a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-3">*/
/*             <div class="btn-group">*/
/*                 <a id="volume-down" class="execute-cmd btn btn-default btn-lg" href="#"><span class="glyphicon glyphicon-volume-down"></span>&nbsp;</a>*/
/*                 <a id="volume-off" class="execute-cmd btn btn-default btn-lg" href="#"><span class="glyphicon glyphicon-volume-off"></span>&nbsp;</a>*/
/*                 <a id="volume-up" class="execute-cmd btn btn-default btn-lg" href="#"><span class="glyphicon glyphicon-volume-up"></span>&nbsp;</a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-1">*/
/*             <div class="btn-group">*/
/*                 <a id="load-subtitle" alt="subtitle" class="btn btn-default btn-lg" href="#"><span class="glyphicon glyphicon-subtitles"></span>&nbsp;</a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <script>*/
/* $( document ).ready(function() {*/
/*     $(".execute-cmd").on("click", function() {*/
/*         var id = $(this).attr("id");*/
/*         if(id === "play") {*/
/*             var pathVideo = $(this).val();*/
/*             $.ajax({*/
/*                 type: "POST",*/
/*                 data: {pathFile: pathVideo},*/
/*                 url: Routing.generate("homesoft_platform_files_link_file")*/
/*             });*/
/*         }*/
/*         $.ajax({*/
/*             url: Routing.generate("homesoft_platform_files_cmd_ctrl", {cmdCtrlVideo: id}),*/
/*             complete: function(data) {*/
/*                 var playingFile = data.responseText;*/
/*                 var text = "";*/
/*                 console.log(text);*/
/*                 if(playingFile !== '') {*/
/*                     text = "Fichier en cour : " + playingFile;*/
/*                 }*/
/*                 $("#information-playing-file div").html(text);*/
/*             }*/
/* */
/*         });*/
/*     });*/
/* });*/
/* </script>*/
