<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_70319b0c9138ee74a9dc887dd3f8b8cdc88eb6b73e01c62cb9b280bfb2b9f5ca extends Twig_Template
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
        $__internal_ee801d2aaece4a62c98a6df6b016960f2bbe08a3ceab14c254d30abd68118e98 = $this->env->getExtension("native_profiler");
        $__internal_ee801d2aaece4a62c98a6df6b016960f2bbe08a3ceab14c254d30abd68118e98->enter($__internal_ee801d2aaece4a62c98a6df6b016960f2bbe08a3ceab14c254d30abd68118e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_ee801d2aaece4a62c98a6df6b016960f2bbe08a3ceab14c254d30abd68118e98->leave($__internal_ee801d2aaece4a62c98a6df6b016960f2bbe08a3ceab14c254d30abd68118e98_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
