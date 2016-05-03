<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_a3b9e75dd712cb71260e6e74f3d036139215140c55b76d78157c29e78227241d extends Twig_Template
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
        $__internal_9a5f7d9ab0536a09332e14c76b90f58cd3cf75a1557a599912954579a11ff727 = $this->env->getExtension("native_profiler");
        $__internal_9a5f7d9ab0536a09332e14c76b90f58cd3cf75a1557a599912954579a11ff727->enter($__internal_9a5f7d9ab0536a09332e14c76b90f58cd3cf75a1557a599912954579a11ff727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9a5f7d9ab0536a09332e14c76b90f58cd3cf75a1557a599912954579a11ff727->leave($__internal_9a5f7d9ab0536a09332e14c76b90f58cd3cf75a1557a599912954579a11ff727_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
