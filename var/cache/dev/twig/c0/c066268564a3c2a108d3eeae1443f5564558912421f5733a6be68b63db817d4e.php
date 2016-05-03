<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_750ab0b118daea62f0901238947e14ebbd8c2836c8a26e9802106340fa3d97a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_dd00b3aa84755b10eae709c553618688670af5b9fae6a15b21a4ab6ff4cf78f2 = $this->env->getExtension("native_profiler");
        $__internal_dd00b3aa84755b10eae709c553618688670af5b9fae6a15b21a4ab6ff4cf78f2->enter($__internal_dd00b3aa84755b10eae709c553618688670af5b9fae6a15b21a4ab6ff4cf78f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd00b3aa84755b10eae709c553618688670af5b9fae6a15b21a4ab6ff4cf78f2->leave($__internal_dd00b3aa84755b10eae709c553618688670af5b9fae6a15b21a4ab6ff4cf78f2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc99b683a3e7f6d1721ab6640b018123b81672f30b870e189e85432d9cd37b2f = $this->env->getExtension("native_profiler");
        $__internal_cc99b683a3e7f6d1721ab6640b018123b81672f30b870e189e85432d9cd37b2f->enter($__internal_cc99b683a3e7f6d1721ab6640b018123b81672f30b870e189e85432d9cd37b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_cc99b683a3e7f6d1721ab6640b018123b81672f30b870e189e85432d9cd37b2f->leave($__internal_cc99b683a3e7f6d1721ab6640b018123b81672f30b870e189e85432d9cd37b2f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
