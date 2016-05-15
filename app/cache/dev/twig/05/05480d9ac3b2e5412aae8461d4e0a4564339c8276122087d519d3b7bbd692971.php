<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c3c6e1ae6bcb690a140235a090caba84178b90ba39a4430c958b78664857285c extends Twig_Template
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
        $__internal_dac615953cbc77f16edbbeebaef0e47a456a4f573428f9f990076a77222cbb07 = $this->env->getExtension("native_profiler");
        $__internal_dac615953cbc77f16edbbeebaef0e47a456a4f573428f9f990076a77222cbb07->enter($__internal_dac615953cbc77f16edbbeebaef0e47a456a4f573428f9f990076a77222cbb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_dac615953cbc77f16edbbeebaef0e47a456a4f573428f9f990076a77222cbb07->leave($__internal_dac615953cbc77f16edbbeebaef0e47a456a4f573428f9f990076a77222cbb07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
