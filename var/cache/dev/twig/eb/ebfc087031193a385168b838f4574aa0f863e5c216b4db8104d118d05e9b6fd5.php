<?php

/* nhl/edit.html.twig */
class __TwigTemplate_71d0c44151b0e9c764cdfe8757f0bbff8b1a6ae40b87098b51e0b40eb916a610 extends Twig_Template
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
        $__internal_97871e462426ccf30e64e9c826a3cc28cd6e5d798f5535cf881e6328e939be54 = $this->env->getExtension("native_profiler");
        $__internal_97871e462426ccf30e64e9c826a3cc28cd6e5d798f5535cf881e6328e939be54->enter($__internal_97871e462426ccf30e64e9c826a3cc28cd6e5d798f5535cf881e6328e939be54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nhl/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97871e462426ccf30e64e9c826a3cc28cd6e5d798f5535cf881e6328e939be54->leave($__internal_97871e462426ccf30e64e9c826a3cc28cd6e5d798f5535cf881e6328e939be54_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f1d078ea741a1c1cb81f3cb9f3e3c95b8db3e544a33c1c1e8d9eb7ea1f1d876 = $this->env->getExtension("native_profiler");
        $__internal_8f1d078ea741a1c1cb81f3cb9f3e3c95b8db3e544a33c1c1e8d9eb7ea1f1d876->enter($__internal_8f1d078ea741a1c1cb81f3cb9f3e3c95b8db3e544a33c1c1e8d9eb7ea1f1d876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">Edit article</h2>
    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_8f1d078ea741a1c1cb81f3cb9f3e3c95b8db3e544a33c1c1e8d9eb7ea1f1d876->leave($__internal_8f1d078ea741a1c1cb81f3cb9f3e3c95b8db3e544a33c1c1e8d9eb7ea1f1d876_prof);

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
        return array (  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h2 class="page-header">Edit article</h2>*/
/*     {{form_start(form)}}*/
/*     {{form_widget(form)}}*/
/*     {{form_end(form)}}*/
/* {% endblock %}*/
