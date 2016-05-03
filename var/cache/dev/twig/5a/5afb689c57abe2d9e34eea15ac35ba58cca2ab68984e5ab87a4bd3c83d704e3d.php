<?php

/* nhl/create.html.twig */
class __TwigTemplate_c1b557d7c05c8cc127491b43d81e32dfa32a794cde081869fe02e7ad506af737 extends Twig_Template
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
        $__internal_81fc282fbb44437f45b426a158afabcf359f0fb42172930bee884cc4e4070b78 = $this->env->getExtension("native_profiler");
        $__internal_81fc282fbb44437f45b426a158afabcf359f0fb42172930bee884cc4e4070b78->enter($__internal_81fc282fbb44437f45b426a158afabcf359f0fb42172930bee884cc4e4070b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nhl/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81fc282fbb44437f45b426a158afabcf359f0fb42172930bee884cc4e4070b78->leave($__internal_81fc282fbb44437f45b426a158afabcf359f0fb42172930bee884cc4e4070b78_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f2a440c1f195487c18d60980fa2a50c793001f8cf8afa58a4210390ac0b8929 = $this->env->getExtension("native_profiler");
        $__internal_0f2a440c1f195487c18d60980fa2a50c793001f8cf8afa58a4210390ac0b8929->enter($__internal_0f2a440c1f195487c18d60980fa2a50c793001f8cf8afa58a4210390ac0b8929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">Add article</h2>
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
        
        $__internal_0f2a440c1f195487c18d60980fa2a50c793001f8cf8afa58a4210390ac0b8929->leave($__internal_0f2a440c1f195487c18d60980fa2a50c793001f8cf8afa58a4210390ac0b8929_prof);

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
        return array (  55 => 8,  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h2 class="page-header">Add article</h2>*/
/*     {{ tinymce_init() }}*/
/*     {{form_start(form)}}*/
/*     {{form_widget(form)}}*/
/*     {{form_end(form)}}*/
/* {% endblock %}*/
