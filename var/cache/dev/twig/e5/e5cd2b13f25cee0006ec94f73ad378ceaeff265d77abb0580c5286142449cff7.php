<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9aab44664c5344ca8b2a2f6b0c0d3bc44032fcf6426926c533faf9c44bfaa6d5 extends Twig_Template
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
        $__internal_6015ec7251b55cf2edbceb438d93f15114b73464620cc1e641111458547b5e79 = $this->env->getExtension("native_profiler");
        $__internal_6015ec7251b55cf2edbceb438d93f15114b73464620cc1e641111458547b5e79->enter($__internal_6015ec7251b55cf2edbceb438d93f15114b73464620cc1e641111458547b5e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6015ec7251b55cf2edbceb438d93f15114b73464620cc1e641111458547b5e79->leave($__internal_6015ec7251b55cf2edbceb438d93f15114b73464620cc1e641111458547b5e79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
