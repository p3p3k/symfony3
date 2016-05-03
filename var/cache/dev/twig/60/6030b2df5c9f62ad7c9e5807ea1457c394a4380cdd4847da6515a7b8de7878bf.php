<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_aad1e3602e91b35ca62f5f3afe3c58f597512061a51461bc15a5519fff913af8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_dbf8da6151446f0e46b75ea568059a96c4b7c459aa8a6a5efccec11a20fd561a = $this->env->getExtension("native_profiler");
        $__internal_dbf8da6151446f0e46b75ea568059a96c4b7c459aa8a6a5efccec11a20fd561a->enter($__internal_dbf8da6151446f0e46b75ea568059a96c4b7c459aa8a6a5efccec11a20fd561a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbf8da6151446f0e46b75ea568059a96c4b7c459aa8a6a5efccec11a20fd561a->leave($__internal_dbf8da6151446f0e46b75ea568059a96c4b7c459aa8a6a5efccec11a20fd561a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_324f96760798c1d38419884207551e9ea764595202222d80547665325817329f = $this->env->getExtension("native_profiler");
        $__internal_324f96760798c1d38419884207551e9ea764595202222d80547665325817329f->enter($__internal_324f96760798c1d38419884207551e9ea764595202222d80547665325817329f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_324f96760798c1d38419884207551e9ea764595202222d80547665325817329f->leave($__internal_324f96760798c1d38419884207551e9ea764595202222d80547665325817329f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
