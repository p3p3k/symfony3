<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_17be04aebfe8d27c9572e1360d1f58ed60ec311725282b35d66bed1c57d4d3b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_b43f32dfbf47b2f20347269eb48bb44c1b4cfc7c97beba99cf4590dbfb538264 = $this->env->getExtension("native_profiler");
        $__internal_b43f32dfbf47b2f20347269eb48bb44c1b4cfc7c97beba99cf4590dbfb538264->enter($__internal_b43f32dfbf47b2f20347269eb48bb44c1b4cfc7c97beba99cf4590dbfb538264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b43f32dfbf47b2f20347269eb48bb44c1b4cfc7c97beba99cf4590dbfb538264->leave($__internal_b43f32dfbf47b2f20347269eb48bb44c1b4cfc7c97beba99cf4590dbfb538264_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_759c570d9606085eee26038d8611da88a2cbafe6cdb0d8e04769c4a1c335078e = $this->env->getExtension("native_profiler");
        $__internal_759c570d9606085eee26038d8611da88a2cbafe6cdb0d8e04769c4a1c335078e->enter($__internal_759c570d9606085eee26038d8611da88a2cbafe6cdb0d8e04769c4a1c335078e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 5)->display($context);
        
        $__internal_759c570d9606085eee26038d8611da88a2cbafe6cdb0d8e04769c4a1c335078e->leave($__internal_759c570d9606085eee26038d8611da88a2cbafe6cdb0d8e04769c4a1c335078e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* */
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
