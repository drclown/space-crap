<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_07a82caab65e004dd1258254579bba6f17d4c93969a463fe2eeabafdb2d3efc8 extends Twig_Template
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
        $__internal_c3b67b1c7b65297ccf0b21d70aad89e239f12af53d0f09ca734c0a24abcb89ef = $this->env->getExtension("native_profiler");
        $__internal_c3b67b1c7b65297ccf0b21d70aad89e239f12af53d0f09ca734c0a24abcb89ef->enter($__internal_c3b67b1c7b65297ccf0b21d70aad89e239f12af53d0f09ca734c0a24abcb89ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c3b67b1c7b65297ccf0b21d70aad89e239f12af53d0f09ca734c0a24abcb89ef->leave($__internal_c3b67b1c7b65297ccf0b21d70aad89e239f12af53d0f09ca734c0a24abcb89ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
