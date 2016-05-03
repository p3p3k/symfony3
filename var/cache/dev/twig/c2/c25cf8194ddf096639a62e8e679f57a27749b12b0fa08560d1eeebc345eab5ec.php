<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c1684dcbf48dd81e26bedd716f7f4782daf3c0171cfaf77906c9b1a904acf048 extends Twig_Template
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
        $__internal_3d859d8491ac38bcdcf9bb64741092051f78d7c41f8de543bd9718a2185fa696 = $this->env->getExtension("native_profiler");
        $__internal_3d859d8491ac38bcdcf9bb64741092051f78d7c41f8de543bd9718a2185fa696->enter($__internal_3d859d8491ac38bcdcf9bb64741092051f78d7c41f8de543bd9718a2185fa696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3d859d8491ac38bcdcf9bb64741092051f78d7c41f8de543bd9718a2185fa696->leave($__internal_3d859d8491ac38bcdcf9bb64741092051f78d7c41f8de543bd9718a2185fa696_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
