<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_e5a0d99bc4ddb4e75479cad100f168ac9086f13527a7ff84aeb9d3d82e061a2d extends Twig_Template
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
        $__internal_4e362ed9b5794c0948adbb57af47a863a0c42a62c09d7ad069444ba92e1abac9 = $this->env->getExtension("native_profiler");
        $__internal_4e362ed9b5794c0948adbb57af47a863a0c42a62c09d7ad069444ba92e1abac9->enter($__internal_4e362ed9b5794c0948adbb57af47a863a0c42a62c09d7ad069444ba92e1abac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4e362ed9b5794c0948adbb57af47a863a0c42a62c09d7ad069444ba92e1abac9->leave($__internal_4e362ed9b5794c0948adbb57af47a863a0c42a62c09d7ad069444ba92e1abac9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
