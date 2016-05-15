<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_a50f9df7f452157cc0b420ebc2aadb7839c0edcbcb7813765c132cc8582408cd extends Twig_Template
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
        $__internal_0043b7f86eef8187ee5386eb792c12b58e3a1d794275b4cca0fd9e10c6ef99d7 = $this->env->getExtension("native_profiler");
        $__internal_0043b7f86eef8187ee5386eb792c12b58e3a1d794275b4cca0fd9e10c6ef99d7->enter($__internal_0043b7f86eef8187ee5386eb792c12b58e3a1d794275b4cca0fd9e10c6ef99d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0043b7f86eef8187ee5386eb792c12b58e3a1d794275b4cca0fd9e10c6ef99d7->leave($__internal_0043b7f86eef8187ee5386eb792c12b58e3a1d794275b4cca0fd9e10c6ef99d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
