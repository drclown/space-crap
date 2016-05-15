<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_d71619802817ab91578be178735842187daefadbad2d3725d0524500c251fb51 extends Twig_Template
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
        $__internal_088b83bc67e5ddf60bb5b4ce65c1edd5a005849d7ed4cd92baecec2b43c4077e = $this->env->getExtension("native_profiler");
        $__internal_088b83bc67e5ddf60bb5b4ce65c1edd5a005849d7ed4cd92baecec2b43c4077e->enter($__internal_088b83bc67e5ddf60bb5b4ce65c1edd5a005849d7ed4cd92baecec2b43c4077e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_088b83bc67e5ddf60bb5b4ce65c1edd5a005849d7ed4cd92baecec2b43c4077e->leave($__internal_088b83bc67e5ddf60bb5b4ce65c1edd5a005849d7ed4cd92baecec2b43c4077e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
