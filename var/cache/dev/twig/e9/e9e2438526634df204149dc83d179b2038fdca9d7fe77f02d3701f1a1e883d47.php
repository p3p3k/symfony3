<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_cc3991a007f9495a2c3554a5cd6a45eb394e7a09287b5e47537f290a1eff208f extends Twig_Template
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
        $__internal_b7e1cfa1288abab47a965c3cc4c2e1248039c8604706885f0af1f80edc0fb289 = $this->env->getExtension("native_profiler");
        $__internal_b7e1cfa1288abab47a965c3cc4c2e1248039c8604706885f0af1f80edc0fb289->enter($__internal_b7e1cfa1288abab47a965c3cc4c2e1248039c8604706885f0af1f80edc0fb289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b7e1cfa1288abab47a965c3cc4c2e1248039c8604706885f0af1f80edc0fb289->leave($__internal_b7e1cfa1288abab47a965c3cc4c2e1248039c8604706885f0af1f80edc0fb289_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
