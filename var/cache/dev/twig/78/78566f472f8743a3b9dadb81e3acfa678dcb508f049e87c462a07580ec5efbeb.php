<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_d90ea9160f665196575f9fe5da16ea26ccd8151140ce8d5bf85659c85c715fff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_66042be359d422afe24855f0590c4eaf7274de369084ad4b8fd81d75f1b11e2f = $this->env->getExtension("native_profiler");
        $__internal_66042be359d422afe24855f0590c4eaf7274de369084ad4b8fd81d75f1b11e2f->enter($__internal_66042be359d422afe24855f0590c4eaf7274de369084ad4b8fd81d75f1b11e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66042be359d422afe24855f0590c4eaf7274de369084ad4b8fd81d75f1b11e2f->leave($__internal_66042be359d422afe24855f0590c4eaf7274de369084ad4b8fd81d75f1b11e2f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cb08f69f9d18b6226d39308f430ebe1d55e4fac9898e4ec6048b00d80bd79ae7 = $this->env->getExtension("native_profiler");
        $__internal_cb08f69f9d18b6226d39308f430ebe1d55e4fac9898e4ec6048b00d80bd79ae7->enter($__internal_cb08f69f9d18b6226d39308f430ebe1d55e4fac9898e4ec6048b00d80bd79ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_cb08f69f9d18b6226d39308f430ebe1d55e4fac9898e4ec6048b00d80bd79ae7->leave($__internal_cb08f69f9d18b6226d39308f430ebe1d55e4fac9898e4ec6048b00d80bd79ae7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
