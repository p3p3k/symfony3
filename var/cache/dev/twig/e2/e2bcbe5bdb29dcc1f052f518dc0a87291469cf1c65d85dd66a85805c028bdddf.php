<?php

/* :nhl:edit.html.twig */
class __TwigTemplate_2ed94aed007d49fac7bc29df40124637aaa9a37b3479317869e7a5976c9ddc9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":nhl:edit.html.twig", 1);
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
        $__internal_8ad77910a8c6c4c54a977e7459c29777d265aa9decd5dde1b94f02e99c0fe29d = $this->env->getExtension("native_profiler");
        $__internal_8ad77910a8c6c4c54a977e7459c29777d265aa9decd5dde1b94f02e99c0fe29d->enter($__internal_8ad77910a8c6c4c54a977e7459c29777d265aa9decd5dde1b94f02e99c0fe29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":nhl:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ad77910a8c6c4c54a977e7459c29777d265aa9decd5dde1b94f02e99c0fe29d->leave($__internal_8ad77910a8c6c4c54a977e7459c29777d265aa9decd5dde1b94f02e99c0fe29d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_71853c8ede65b760b78a2a7d9d343d8a2f10e3fdb456f94602f03dd674a8df99 = $this->env->getExtension("native_profiler");
        $__internal_71853c8ede65b760b78a2a7d9d343d8a2f10e3fdb456f94602f03dd674a8df99->enter($__internal_71853c8ede65b760b78a2a7d9d343d8a2f10e3fdb456f94602f03dd674a8df99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_71853c8ede65b760b78a2a7d9d343d8a2f10e3fdb456f94602f03dd674a8df99->leave($__internal_71853c8ede65b760b78a2a7d9d343d8a2f10e3fdb456f94602f03dd674a8df99_prof);

    }

    public function getTemplateName()
    {
        return ":nhl:edit.html.twig";
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
