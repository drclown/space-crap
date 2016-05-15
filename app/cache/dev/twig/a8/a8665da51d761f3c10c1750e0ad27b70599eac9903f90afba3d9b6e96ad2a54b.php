<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ca2499f8bcc24216c20ef9cb9dcae9d8e76476454b180d92b56255e6631ee00d extends Twig_Template
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
        $__internal_b41f5c7138b6867ddf8d3f4879cbb6efe543eb6d2d85eeaf89496672d0c1778b = $this->env->getExtension("native_profiler");
        $__internal_b41f5c7138b6867ddf8d3f4879cbb6efe543eb6d2d85eeaf89496672d0c1778b->enter($__internal_b41f5c7138b6867ddf8d3f4879cbb6efe543eb6d2d85eeaf89496672d0c1778b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b41f5c7138b6867ddf8d3f4879cbb6efe543eb6d2d85eeaf89496672d0c1778b->leave($__internal_b41f5c7138b6867ddf8d3f4879cbb6efe543eb6d2d85eeaf89496672d0c1778b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
