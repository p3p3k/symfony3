<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_5cacb59d2be2878d52080d2f1456ec825224dc48f2bc99814d7bc7e328e9dab8 extends Twig_Template
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
        $__internal_d5d1d832db657d7c554150f631ab9cdc336bd3897dbc1ac23c6e88fd7c34f077 = $this->env->getExtension("native_profiler");
        $__internal_d5d1d832db657d7c554150f631ab9cdc336bd3897dbc1ac23c6e88fd7c34f077->enter($__internal_d5d1d832db657d7c554150f631ab9cdc336bd3897dbc1ac23c6e88fd7c34f077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d5d1d832db657d7c554150f631ab9cdc336bd3897dbc1ac23c6e88fd7c34f077->leave($__internal_d5d1d832db657d7c554150f631ab9cdc336bd3897dbc1ac23c6e88fd7c34f077_prof);

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
