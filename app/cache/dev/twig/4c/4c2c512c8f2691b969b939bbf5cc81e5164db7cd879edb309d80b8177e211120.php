<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_5f38665043487d0caeaedf5674d0e91a4b36bba169617263d6fb931ceefb8b94 extends Twig_Template
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
        $__internal_6da65af315b3cc128d6fb218a701f980a1a532910076388b29ac021a993186e4 = $this->env->getExtension("native_profiler");
        $__internal_6da65af315b3cc128d6fb218a701f980a1a532910076388b29ac021a993186e4->enter($__internal_6da65af315b3cc128d6fb218a701f980a1a532910076388b29ac021a993186e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6da65af315b3cc128d6fb218a701f980a1a532910076388b29ac021a993186e4->leave($__internal_6da65af315b3cc128d6fb218a701f980a1a532910076388b29ac021a993186e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
