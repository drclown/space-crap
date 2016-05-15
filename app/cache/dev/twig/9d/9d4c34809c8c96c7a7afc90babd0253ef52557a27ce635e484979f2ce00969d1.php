<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4a6488810b8972bf3cb2bed1fbf9cb5d06e5d0297db0067683fd7b1cbf9251a6 extends Twig_Template
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
        $__internal_941e015eb28745bb9e5be571813051e8acb3d3066dcb4b4992559168e979cc21 = $this->env->getExtension("native_profiler");
        $__internal_941e015eb28745bb9e5be571813051e8acb3d3066dcb4b4992559168e979cc21->enter($__internal_941e015eb28745bb9e5be571813051e8acb3d3066dcb4b4992559168e979cc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_941e015eb28745bb9e5be571813051e8acb3d3066dcb4b4992559168e979cc21->leave($__internal_941e015eb28745bb9e5be571813051e8acb3d3066dcb4b4992559168e979cc21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
