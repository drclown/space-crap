<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_abf2f7dbba19fc5dfdfd993061eabe7e55ad80a9a15a9602ffd66d1a410b59a6 extends Twig_Template
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
        $__internal_d744b911fd200ff7a0e47902aa7cd438dea73517dc649c23b97228482b05c85f = $this->env->getExtension("native_profiler");
        $__internal_d744b911fd200ff7a0e47902aa7cd438dea73517dc649c23b97228482b05c85f->enter($__internal_d744b911fd200ff7a0e47902aa7cd438dea73517dc649c23b97228482b05c85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d744b911fd200ff7a0e47902aa7cd438dea73517dc649c23b97228482b05c85f->leave($__internal_d744b911fd200ff7a0e47902aa7cd438dea73517dc649c23b97228482b05c85f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
