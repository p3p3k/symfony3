<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ea2468485ddbe4172f64dab727eb3fb0884608e731571313067b8643259a4086 extends Twig_Template
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
        $__internal_68fe26ed8d3514b27f8dd8dde9c2d63d26aaead2e4d1f979b6e01ccc4199381d = $this->env->getExtension("native_profiler");
        $__internal_68fe26ed8d3514b27f8dd8dde9c2d63d26aaead2e4d1f979b6e01ccc4199381d->enter($__internal_68fe26ed8d3514b27f8dd8dde9c2d63d26aaead2e4d1f979b6e01ccc4199381d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_68fe26ed8d3514b27f8dd8dde9c2d63d26aaead2e4d1f979b6e01ccc4199381d->leave($__internal_68fe26ed8d3514b27f8dd8dde9c2d63d26aaead2e4d1f979b6e01ccc4199381d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
