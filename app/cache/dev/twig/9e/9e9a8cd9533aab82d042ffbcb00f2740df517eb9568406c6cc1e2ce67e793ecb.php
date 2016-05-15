<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_8b9bf46c13037d8b60df6845c6566f0842b74710b447371914bdd9df61dec0f4 extends Twig_Template
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
        $__internal_f1547baa3d5971c3bc8b0e18b68c58d384a93e69600c27506068a9b8bb24f357 = $this->env->getExtension("native_profiler");
        $__internal_f1547baa3d5971c3bc8b0e18b68c58d384a93e69600c27506068a9b8bb24f357->enter($__internal_f1547baa3d5971c3bc8b0e18b68c58d384a93e69600c27506068a9b8bb24f357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f1547baa3d5971c3bc8b0e18b68c58d384a93e69600c27506068a9b8bb24f357->leave($__internal_f1547baa3d5971c3bc8b0e18b68c58d384a93e69600c27506068a9b8bb24f357_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
