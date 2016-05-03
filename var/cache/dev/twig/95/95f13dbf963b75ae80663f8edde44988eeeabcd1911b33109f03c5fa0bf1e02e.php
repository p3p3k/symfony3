<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_ed932f5804fdaaf8c4703805c291dbad15a08673b26e3a0c474eeda082aee25c extends Twig_Template
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
        $__internal_0a1e88d799857a7aa6975d601a61484323a797eb06ef0b174cbe9ecedc558a42 = $this->env->getExtension("native_profiler");
        $__internal_0a1e88d799857a7aa6975d601a61484323a797eb06ef0b174cbe9ecedc558a42->enter($__internal_0a1e88d799857a7aa6975d601a61484323a797eb06ef0b174cbe9ecedc558a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_0a1e88d799857a7aa6975d601a61484323a797eb06ef0b174cbe9ecedc558a42->leave($__internal_0a1e88d799857a7aa6975d601a61484323a797eb06ef0b174cbe9ecedc558a42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
