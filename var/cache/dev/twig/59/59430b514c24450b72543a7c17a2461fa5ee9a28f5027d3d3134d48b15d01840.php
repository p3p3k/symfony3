<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_fed43a4a98d4251728e437bd42ef91b6223e0646db589f69bb6ea9e555ec472b extends Twig_Template
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
        $__internal_0663a34d82efd0be526ce9aaf5e7564e4187d553db6bb4f17d804ee530837f5f = $this->env->getExtension("native_profiler");
        $__internal_0663a34d82efd0be526ce9aaf5e7564e4187d553db6bb4f17d804ee530837f5f->enter($__internal_0663a34d82efd0be526ce9aaf5e7564e4187d553db6bb4f17d804ee530837f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_0663a34d82efd0be526ce9aaf5e7564e4187d553db6bb4f17d804ee530837f5f->leave($__internal_0663a34d82efd0be526ce9aaf5e7564e4187d553db6bb4f17d804ee530837f5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
