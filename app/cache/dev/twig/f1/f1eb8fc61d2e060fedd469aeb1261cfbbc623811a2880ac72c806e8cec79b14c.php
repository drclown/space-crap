<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_847de468d55c581820366a75bf9923f5508cb7acb0ebf3c94f806057d620d166 extends Twig_Template
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
        $__internal_1c33a85c5d6ed351acfdf9845247c76aea4e18fa13f3248911419f4c28796d98 = $this->env->getExtension("native_profiler");
        $__internal_1c33a85c5d6ed351acfdf9845247c76aea4e18fa13f3248911419f4c28796d98->enter($__internal_1c33a85c5d6ed351acfdf9845247c76aea4e18fa13f3248911419f4c28796d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1c33a85c5d6ed351acfdf9845247c76aea4e18fa13f3248911419f4c28796d98->leave($__internal_1c33a85c5d6ed351acfdf9845247c76aea4e18fa13f3248911419f4c28796d98_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
