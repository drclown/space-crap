<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0ce4259a67535e576c331ceccf0b43f5588561fa34c22cb6498df9656dc31334 extends Twig_Template
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
        $__internal_6f1e65731d6885f624f1dab1a72125d58c4bb53b18d754e62b431ad54eb6332b = $this->env->getExtension("native_profiler");
        $__internal_6f1e65731d6885f624f1dab1a72125d58c4bb53b18d754e62b431ad54eb6332b->enter($__internal_6f1e65731d6885f624f1dab1a72125d58c4bb53b18d754e62b431ad54eb6332b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6f1e65731d6885f624f1dab1a72125d58c4bb53b18d754e62b431ad54eb6332b->leave($__internal_6f1e65731d6885f624f1dab1a72125d58c4bb53b18d754e62b431ad54eb6332b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
