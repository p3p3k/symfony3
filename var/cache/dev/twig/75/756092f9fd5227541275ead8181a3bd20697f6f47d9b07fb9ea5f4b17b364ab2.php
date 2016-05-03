<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_0fcde8dc449ac75a4971f58bdb158b63bd103b3e47a7943c737623b84990f3ad extends Twig_Template
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
        $__internal_ae9d5280f76b320e9e102ec9b9e7594fa6e9c53be2ab5edd56a7d202c5d9afa1 = $this->env->getExtension("native_profiler");
        $__internal_ae9d5280f76b320e9e102ec9b9e7594fa6e9c53be2ab5edd56a7d202c5d9afa1->enter($__internal_ae9d5280f76b320e9e102ec9b9e7594fa6e9c53be2ab5edd56a7d202c5d9afa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ae9d5280f76b320e9e102ec9b9e7594fa6e9c53be2ab5edd56a7d202c5d9afa1->leave($__internal_ae9d5280f76b320e9e102ec9b9e7594fa6e9c53be2ab5edd56a7d202c5d9afa1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
