<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_6d88432aea75bef8502d7adbce0d87a0818313d9e49dfdad02366ec3d1db3401 extends Twig_Template
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
        $__internal_8cb66fa852195ef4852ca10da71b3aad2defdd868d3360044b3897090aa34e41 = $this->env->getExtension("native_profiler");
        $__internal_8cb66fa852195ef4852ca10da71b3aad2defdd868d3360044b3897090aa34e41->enter($__internal_8cb66fa852195ef4852ca10da71b3aad2defdd868d3360044b3897090aa34e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8cb66fa852195ef4852ca10da71b3aad2defdd868d3360044b3897090aa34e41->leave($__internal_8cb66fa852195ef4852ca10da71b3aad2defdd868d3360044b3897090aa34e41_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
