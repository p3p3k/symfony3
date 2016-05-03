<?php

/* :nhl:create.html.twig */
class __TwigTemplate_ca2b2fb82a98beb959ce34f9a0262a46cc2c48f416301700eb2cc08b53cec3a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":nhl:create.html.twig", 1);
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
        $__internal_92fa39be4720d6d3b16b8a432f9d2ce3bcc86b0421b0c463d2be46aacb050cb4 = $this->env->getExtension("native_profiler");
        $__internal_92fa39be4720d6d3b16b8a432f9d2ce3bcc86b0421b0c463d2be46aacb050cb4->enter($__internal_92fa39be4720d6d3b16b8a432f9d2ce3bcc86b0421b0c463d2be46aacb050cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":nhl:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92fa39be4720d6d3b16b8a432f9d2ce3bcc86b0421b0c463d2be46aacb050cb4->leave($__internal_92fa39be4720d6d3b16b8a432f9d2ce3bcc86b0421b0c463d2be46aacb050cb4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_221302b6c72d0f8d661bfc17142ded51ca767b5ebdb52d09fe9fe67946596ee3 = $this->env->getExtension("native_profiler");
        $__internal_221302b6c72d0f8d661bfc17142ded51ca767b5ebdb52d09fe9fe67946596ee3->enter($__internal_221302b6c72d0f8d661bfc17142ded51ca767b5ebdb52d09fe9fe67946596ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_221302b6c72d0f8d661bfc17142ded51ca767b5ebdb52d09fe9fe67946596ee3->leave($__internal_221302b6c72d0f8d661bfc17142ded51ca767b5ebdb52d09fe9fe67946596ee3_prof);

    }

    public function getTemplateName()
    {
        return ":nhl:create.html.twig";
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
