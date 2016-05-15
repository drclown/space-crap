<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d3675bf67ceed846f4d8a313e9e85b24b305d1aa7dfe9f8a34d0f500490e3668 extends Twig_Template
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
        $__internal_ac9d3bd7967d2488ad06ccb4a8dfc78c27082bf90f69d84e93be2c88ea0049a8 = $this->env->getExtension("native_profiler");
        $__internal_ac9d3bd7967d2488ad06ccb4a8dfc78c27082bf90f69d84e93be2c88ea0049a8->enter($__internal_ac9d3bd7967d2488ad06ccb4a8dfc78c27082bf90f69d84e93be2c88ea0049a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ac9d3bd7967d2488ad06ccb4a8dfc78c27082bf90f69d84e93be2c88ea0049a8->leave($__internal_ac9d3bd7967d2488ad06ccb4a8dfc78c27082bf90f69d84e93be2c88ea0049a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
