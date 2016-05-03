<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_2139d28435f08508fabb2c2546fc8e177f925213cbf520a7bb2d7b54b0d9c8ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_fc22b18d92f35e3a8bc64841d0cf7cbd8f460609354e94230b5e480fb1c083e1 = $this->env->getExtension("native_profiler");
        $__internal_fc22b18d92f35e3a8bc64841d0cf7cbd8f460609354e94230b5e480fb1c083e1->enter($__internal_fc22b18d92f35e3a8bc64841d0cf7cbd8f460609354e94230b5e480fb1c083e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc22b18d92f35e3a8bc64841d0cf7cbd8f460609354e94230b5e480fb1c083e1->leave($__internal_fc22b18d92f35e3a8bc64841d0cf7cbd8f460609354e94230b5e480fb1c083e1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_99d5d62740efefce38200bdad16847426694e10cec6ac2be3186b70c26b67ad5 = $this->env->getExtension("native_profiler");
        $__internal_99d5d62740efefce38200bdad16847426694e10cec6ac2be3186b70c26b67ad5->enter($__internal_99d5d62740efefce38200bdad16847426694e10cec6ac2be3186b70c26b67ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_99d5d62740efefce38200bdad16847426694e10cec6ac2be3186b70c26b67ad5->leave($__internal_99d5d62740efefce38200bdad16847426694e10cec6ac2be3186b70c26b67ad5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
