<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_5d68ee24b1d1fc9e6447010b5fb4976bbccc543cb12d4d0877319d82f5d886f5 extends Twig_Template
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
        $__internal_c177f091de4926f6384d21c634457f184b9afd690530c595f2852c57baaa842c = $this->env->getExtension("native_profiler");
        $__internal_c177f091de4926f6384d21c634457f184b9afd690530c595f2852c57baaa842c->enter($__internal_c177f091de4926f6384d21c634457f184b9afd690530c595f2852c57baaa842c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c177f091de4926f6384d21c634457f184b9afd690530c595f2852c57baaa842c->leave($__internal_c177f091de4926f6384d21c634457f184b9afd690530c595f2852c57baaa842c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
