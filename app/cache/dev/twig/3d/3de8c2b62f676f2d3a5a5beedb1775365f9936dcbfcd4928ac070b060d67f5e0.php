<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_c128ca10cf0bb7b3f11d097a0f53b07a8b7cb9d684bed3c5d143a6dc80d59fc7 extends Twig_Template
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
        $__internal_74b428e9461a2518240ef031b2b4d1bd2fb48681d7e39534e7d6c7bf11c52161 = $this->env->getExtension("native_profiler");
        $__internal_74b428e9461a2518240ef031b2b4d1bd2fb48681d7e39534e7d6c7bf11c52161->enter($__internal_74b428e9461a2518240ef031b2b4d1bd2fb48681d7e39534e7d6c7bf11c52161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_74b428e9461a2518240ef031b2b4d1bd2fb48681d7e39534e7d6c7bf11c52161->leave($__internal_74b428e9461a2518240ef031b2b4d1bd2fb48681d7e39534e7d6c7bf11c52161_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
