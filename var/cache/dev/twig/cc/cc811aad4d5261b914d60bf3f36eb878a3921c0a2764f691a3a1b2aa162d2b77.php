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
        $__internal_6fb6ecb05652ca8b8b1e551f89252242e690654f902bca300a1bac2ddc07a0d8 = $this->env->getExtension("native_profiler");
        $__internal_6fb6ecb05652ca8b8b1e551f89252242e690654f902bca300a1bac2ddc07a0d8->enter($__internal_6fb6ecb05652ca8b8b1e551f89252242e690654f902bca300a1bac2ddc07a0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nhl/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fb6ecb05652ca8b8b1e551f89252242e690654f902bca300a1bac2ddc07a0d8->leave($__internal_6fb6ecb05652ca8b8b1e551f89252242e690654f902bca300a1bac2ddc07a0d8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_97c6c3a1be6ed4c474324a8e229e71dae14cf77392a169410cd15f94d3ab5019 = $this->env->getExtension("native_profiler");
        $__internal_97c6c3a1be6ed4c474324a8e229e71dae14cf77392a169410cd15f94d3ab5019->enter($__internal_97c6c3a1be6ed4c474324a8e229e71dae14cf77392a169410cd15f94d3ab5019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_97c6c3a1be6ed4c474324a8e229e71dae14cf77392a169410cd15f94d3ab5019->leave($__internal_97c6c3a1be6ed4c474324a8e229e71dae14cf77392a169410cd15f94d3ab5019_prof);

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
