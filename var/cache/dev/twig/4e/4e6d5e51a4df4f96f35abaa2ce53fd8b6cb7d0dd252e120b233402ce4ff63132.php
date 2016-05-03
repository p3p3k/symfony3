<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_03a17c1f6f45ecaaf136f0c5a99e0292a7c22593ccaf829454c74299363611e5 extends Twig_Template
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
        $__internal_ff5fa31259f90f964cf4e1861c6f42f5f274da2c0fb6559b2252edc50664cb27 = $this->env->getExtension("native_profiler");
        $__internal_ff5fa31259f90f964cf4e1861c6f42f5f274da2c0fb6559b2252edc50664cb27->enter($__internal_ff5fa31259f90f964cf4e1861c6f42f5f274da2c0fb6559b2252edc50664cb27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ff5fa31259f90f964cf4e1861c6f42f5f274da2c0fb6559b2252edc50664cb27->leave($__internal_ff5fa31259f90f964cf4e1861c6f42f5f274da2c0fb6559b2252edc50664cb27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
