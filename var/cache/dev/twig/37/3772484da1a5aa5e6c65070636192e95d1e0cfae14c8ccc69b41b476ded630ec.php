<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_16aca11abb0a0a4548e9ce4e83d60452dc75ef71e1d23f9258b92ee142a0d146 extends Twig_Template
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
        $__internal_76d4e143f1983a53ea43b37a223970d36fca6efda68d474b858178f0ef11d145 = $this->env->getExtension("native_profiler");
        $__internal_76d4e143f1983a53ea43b37a223970d36fca6efda68d474b858178f0ef11d145->enter($__internal_76d4e143f1983a53ea43b37a223970d36fca6efda68d474b858178f0ef11d145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_76d4e143f1983a53ea43b37a223970d36fca6efda68d474b858178f0ef11d145->leave($__internal_76d4e143f1983a53ea43b37a223970d36fca6efda68d474b858178f0ef11d145_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
