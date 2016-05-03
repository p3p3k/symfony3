<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_ad2bf9ccb068dfa11c7e5f612e67ffa6b2cbf1085b906d37dc0adfc4535dd699 extends Twig_Template
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
        $__internal_b277860cda4f0f966ff62aee0a5428f839b7844a2e9f77d25a5cb78051dc7ec3 = $this->env->getExtension("native_profiler");
        $__internal_b277860cda4f0f966ff62aee0a5428f839b7844a2e9f77d25a5cb78051dc7ec3->enter($__internal_b277860cda4f0f966ff62aee0a5428f839b7844a2e9f77d25a5cb78051dc7ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b277860cda4f0f966ff62aee0a5428f839b7844a2e9f77d25a5cb78051dc7ec3->leave($__internal_b277860cda4f0f966ff62aee0a5428f839b7844a2e9f77d25a5cb78051dc7ec3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
