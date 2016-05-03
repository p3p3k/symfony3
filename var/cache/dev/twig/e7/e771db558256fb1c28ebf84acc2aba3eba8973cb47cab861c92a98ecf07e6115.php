<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_9acd5726a8738b53d03f094252139288da6829a5296ff8d4cbb9d27610adb904 extends Twig_Template
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
        $__internal_561bbb3ccab0507504bb67e00bb913fae4df657a31e7535c898af1feb151e81a = $this->env->getExtension("native_profiler");
        $__internal_561bbb3ccab0507504bb67e00bb913fae4df657a31e7535c898af1feb151e81a->enter($__internal_561bbb3ccab0507504bb67e00bb913fae4df657a31e7535c898af1feb151e81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_561bbb3ccab0507504bb67e00bb913fae4df657a31e7535c898af1feb151e81a->leave($__internal_561bbb3ccab0507504bb67e00bb913fae4df657a31e7535c898af1feb151e81a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
