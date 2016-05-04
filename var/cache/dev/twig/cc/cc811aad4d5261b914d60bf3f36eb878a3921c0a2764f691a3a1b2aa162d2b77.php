<?php

/* nhl/edit.html.twig */
class __TwigTemplate_7c60ce4057f704d9ab06bf24d4a7606a847bb3e13b2acb58b24792ff60ffff41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "nhl/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25b1f514240cfefeb8c22ecf37801ae85f48a3fa3980ddd0881e1b1bde814805 = $this->env->getExtension("native_profiler");
        $__internal_25b1f514240cfefeb8c22ecf37801ae85f48a3fa3980ddd0881e1b1bde814805->enter($__internal_25b1f514240cfefeb8c22ecf37801ae85f48a3fa3980ddd0881e1b1bde814805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nhl/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25b1f514240cfefeb8c22ecf37801ae85f48a3fa3980ddd0881e1b1bde814805->leave($__internal_25b1f514240cfefeb8c22ecf37801ae85f48a3fa3980ddd0881e1b1bde814805_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_656a325bf7dc84759123eea5f582d42679358177ed5858363ecd63a20d64538b = $this->env->getExtension("native_profiler");
        $__internal_656a325bf7dc84759123eea5f582d42679358177ed5858363ecd63a20d64538b->enter($__internal_656a325bf7dc84759123eea5f582d42679358177ed5858363ecd63a20d64538b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">Edit article</h2>
    ";
        // line 5
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_656a325bf7dc84759123eea5f582d42679358177ed5858363ecd63a20d64538b->leave($__internal_656a325bf7dc84759123eea5f582d42679358177ed5858363ecd63a20d64538b_prof);

    }

    public function getTemplateName()
    {
        return "nhl/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h2 class="page-header">Edit article</h2>*/
/*     {{ tinymce_init() }}*/
/*     {{form_start(form)}}*/
/*     {{form_widget(form)}}*/
/*     {{form_end(form)}}*/
/* {% endblock %}*/
