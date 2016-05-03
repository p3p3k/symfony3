<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2933d3ddf6c8252b6daf225abcfc92a8d8c3d9bdeb5854371593b24feb254604 extends Twig_Template
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
        $__internal_5e1f94a5ce26bf90f41ca6dde8cb228fd49c5a466d8405d904cda52cfc02c709 = $this->env->getExtension("native_profiler");
        $__internal_5e1f94a5ce26bf90f41ca6dde8cb228fd49c5a466d8405d904cda52cfc02c709->enter($__internal_5e1f94a5ce26bf90f41ca6dde8cb228fd49c5a466d8405d904cda52cfc02c709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_5e1f94a5ce26bf90f41ca6dde8cb228fd49c5a466d8405d904cda52cfc02c709->leave($__internal_5e1f94a5ce26bf90f41ca6dde8cb228fd49c5a466d8405d904cda52cfc02c709_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
