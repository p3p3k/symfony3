<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_39917a301e7afe634273a733be8e5cb7ad4f1abab1f1715a0b52278e679dd485 extends Twig_Template
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
        $__internal_52882c96a60717b161fd3134ee74b2bc0a07756cf7ab22b652e05662a9d23dd4 = $this->env->getExtension("native_profiler");
        $__internal_52882c96a60717b161fd3134ee74b2bc0a07756cf7ab22b652e05662a9d23dd4->enter($__internal_52882c96a60717b161fd3134ee74b2bc0a07756cf7ab22b652e05662a9d23dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_52882c96a60717b161fd3134ee74b2bc0a07756cf7ab22b652e05662a9d23dd4->leave($__internal_52882c96a60717b161fd3134ee74b2bc0a07756cf7ab22b652e05662a9d23dd4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
