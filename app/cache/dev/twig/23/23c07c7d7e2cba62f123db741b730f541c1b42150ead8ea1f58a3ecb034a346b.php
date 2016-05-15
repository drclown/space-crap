<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_2a12659bf3a7c1ea22db5df425f9b0743415e51d3ff1bde727320464812bc228 extends Twig_Template
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
        $__internal_898eec38bdb9050d6d080c93f92f0cd7d539e656ebe6c103040763781f341bd3 = $this->env->getExtension("native_profiler");
        $__internal_898eec38bdb9050d6d080c93f92f0cd7d539e656ebe6c103040763781f341bd3->enter($__internal_898eec38bdb9050d6d080c93f92f0cd7d539e656ebe6c103040763781f341bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_898eec38bdb9050d6d080c93f92f0cd7d539e656ebe6c103040763781f341bd3->leave($__internal_898eec38bdb9050d6d080c93f92f0cd7d539e656ebe6c103040763781f341bd3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
