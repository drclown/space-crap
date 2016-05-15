<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d639eecc86871113bcf31977c40dcb7b789a2e116523508ed2b784e99fd2a199 extends Twig_Template
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
        $__internal_cb8b40150d4c401c16cd53ee58f11338f344f3cd3c89f7eec500e29c591141b5 = $this->env->getExtension("native_profiler");
        $__internal_cb8b40150d4c401c16cd53ee58f11338f344f3cd3c89f7eec500e29c591141b5->enter($__internal_cb8b40150d4c401c16cd53ee58f11338f344f3cd3c89f7eec500e29c591141b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_cb8b40150d4c401c16cd53ee58f11338f344f3cd3c89f7eec500e29c591141b5->leave($__internal_cb8b40150d4c401c16cd53ee58f11338f344f3cd3c89f7eec500e29c591141b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
