<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_5e198454a99e3c508f21f79a606768ddf28d24455aabd8d2b31523a34fbd7e6e extends Twig_Template
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
        $__internal_1ed5689eb249c078c5f1664c2e6c340f54bdcea2d4ff8b9d17de8b84bf52c622 = $this->env->getExtension("native_profiler");
        $__internal_1ed5689eb249c078c5f1664c2e6c340f54bdcea2d4ff8b9d17de8b84bf52c622->enter($__internal_1ed5689eb249c078c5f1664c2e6c340f54bdcea2d4ff8b9d17de8b84bf52c622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_1ed5689eb249c078c5f1664c2e6c340f54bdcea2d4ff8b9d17de8b84bf52c622->leave($__internal_1ed5689eb249c078c5f1664c2e6c340f54bdcea2d4ff8b9d17de8b84bf52c622_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
