<?php

/* nhl/create.html.twig */
class __TwigTemplate_6ca0fbfe44bcbc3e6d78630a89d757f8391defeb4f73b59765830972c29af791 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "nhl/create.html.twig", 1);
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
        $__internal_393702f429b6ba8e6ffa9a9c554236a37297df554896ecd97bfdc90ea3b4f514 = $this->env->getExtension("native_profiler");
        $__internal_393702f429b6ba8e6ffa9a9c554236a37297df554896ecd97bfdc90ea3b4f514->enter($__internal_393702f429b6ba8e6ffa9a9c554236a37297df554896ecd97bfdc90ea3b4f514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nhl/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_393702f429b6ba8e6ffa9a9c554236a37297df554896ecd97bfdc90ea3b4f514->leave($__internal_393702f429b6ba8e6ffa9a9c554236a37297df554896ecd97bfdc90ea3b4f514_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0dca9bd619744cbad95b9573058fd5131b9ff3decc5481117b43fa2f8f312b6 = $this->env->getExtension("native_profiler");
        $__internal_e0dca9bd619744cbad95b9573058fd5131b9ff3decc5481117b43fa2f8f312b6->enter($__internal_e0dca9bd619744cbad95b9573058fd5131b9ff3decc5481117b43fa2f8f312b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">Add article</h2>
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
        
        $__internal_e0dca9bd619744cbad95b9573058fd5131b9ff3decc5481117b43fa2f8f312b6->leave($__internal_e0dca9bd619744cbad95b9573058fd5131b9ff3decc5481117b43fa2f8f312b6_prof);

    }

    public function getTemplateName()
    {
        return "nhl/create.html.twig";
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
/*     <h2 class="page-header">Add article</h2>*/
/*     {{form_start(form)}}*/
/*     {{form_widget(form)}}*/
/*     {{form_end(form)}}*/
/* {% endblock %}*/
