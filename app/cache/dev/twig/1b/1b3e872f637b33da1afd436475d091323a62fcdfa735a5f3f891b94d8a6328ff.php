<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_6c139fddf2f3481be45a3a54d155aad933a0381769d54af14d9ee8721d75c7d5 extends Twig_Template
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
        $__internal_cfba72558a149028319303ae2dfc9a18f605a3668d5ac158df817b0288c02ff4 = $this->env->getExtension("native_profiler");
        $__internal_cfba72558a149028319303ae2dfc9a18f605a3668d5ac158df817b0288c02ff4->enter($__internal_cfba72558a149028319303ae2dfc9a18f605a3668d5ac158df817b0288c02ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_cfba72558a149028319303ae2dfc9a18f605a3668d5ac158df817b0288c02ff4->leave($__internal_cfba72558a149028319303ae2dfc9a18f605a3668d5ac158df817b0288c02ff4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
