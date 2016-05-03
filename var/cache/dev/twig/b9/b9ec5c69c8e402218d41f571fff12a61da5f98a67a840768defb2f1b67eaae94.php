<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_57707630199edc9a1e0d7b1600b23f48cc0c80b10946c334b56ce54863ca3118 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd8a63895ae8aae8d28ffc68030111358d405947b735a2b4d254cb279a2dc87a = $this->env->getExtension("native_profiler");
        $__internal_dd8a63895ae8aae8d28ffc68030111358d405947b735a2b4d254cb279a2dc87a->enter($__internal_dd8a63895ae8aae8d28ffc68030111358d405947b735a2b4d254cb279a2dc87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd8a63895ae8aae8d28ffc68030111358d405947b735a2b4d254cb279a2dc87a->leave($__internal_dd8a63895ae8aae8d28ffc68030111358d405947b735a2b4d254cb279a2dc87a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_28297598276ca8c9682ccfe414db08fe73fb640972d2b984a2060ce9806ffeb5 = $this->env->getExtension("native_profiler");
        $__internal_28297598276ca8c9682ccfe414db08fe73fb640972d2b984a2060ce9806ffeb5->enter($__internal_28297598276ca8c9682ccfe414db08fe73fb640972d2b984a2060ce9806ffeb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_28297598276ca8c9682ccfe414db08fe73fb640972d2b984a2060ce9806ffeb5->leave($__internal_28297598276ca8c9682ccfe414db08fe73fb640972d2b984a2060ce9806ffeb5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
