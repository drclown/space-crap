<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_4dc603b7b4df19a225f0172753c2910781cce1bf89e16113810149c702524253 extends Twig_Template
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
        $__internal_ddf4990f27bb8c691c564dd36263bfce39d9b1f3c2e625f90fdb1145acf117fd = $this->env->getExtension("native_profiler");
        $__internal_ddf4990f27bb8c691c564dd36263bfce39d9b1f3c2e625f90fdb1145acf117fd->enter($__internal_ddf4990f27bb8c691c564dd36263bfce39d9b1f3c2e625f90fdb1145acf117fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ddf4990f27bb8c691c564dd36263bfce39d9b1f3c2e625f90fdb1145acf117fd->leave($__internal_ddf4990f27bb8c691c564dd36263bfce39d9b1f3c2e625f90fdb1145acf117fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
