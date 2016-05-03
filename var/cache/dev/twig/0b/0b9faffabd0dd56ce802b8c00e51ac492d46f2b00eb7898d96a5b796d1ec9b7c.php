<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_d72482cdb61d51cfb56a95b7505eb6c7bcd3886bd7124b5764278b794d274f29 extends Twig_Template
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
        $__internal_7bb27495dcad93f7defb726b7ad56fd758f43efdb9a2e1d436bb24ea360794e8 = $this->env->getExtension("native_profiler");
        $__internal_7bb27495dcad93f7defb726b7ad56fd758f43efdb9a2e1d436bb24ea360794e8->enter($__internal_7bb27495dcad93f7defb726b7ad56fd758f43efdb9a2e1d436bb24ea360794e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_7bb27495dcad93f7defb726b7ad56fd758f43efdb9a2e1d436bb24ea360794e8->leave($__internal_7bb27495dcad93f7defb726b7ad56fd758f43efdb9a2e1d436bb24ea360794e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
