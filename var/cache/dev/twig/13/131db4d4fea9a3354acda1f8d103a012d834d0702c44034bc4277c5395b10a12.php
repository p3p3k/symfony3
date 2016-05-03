<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_0833782faeb6f621407fad949e4338830d43acf90ea493ea15f407c1150a5a99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_ba9979b79ba82d4f1762a3ba1132bbcab87f5aa2256a6de8ccc9adc6a19e793d = $this->env->getExtension("native_profiler");
        $__internal_ba9979b79ba82d4f1762a3ba1132bbcab87f5aa2256a6de8ccc9adc6a19e793d->enter($__internal_ba9979b79ba82d4f1762a3ba1132bbcab87f5aa2256a6de8ccc9adc6a19e793d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba9979b79ba82d4f1762a3ba1132bbcab87f5aa2256a6de8ccc9adc6a19e793d->leave($__internal_ba9979b79ba82d4f1762a3ba1132bbcab87f5aa2256a6de8ccc9adc6a19e793d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6bc59914231fbc4db3cc7b95d578a4cbdd738807318544fd40d7504cdab947b2 = $this->env->getExtension("native_profiler");
        $__internal_6bc59914231fbc4db3cc7b95d578a4cbdd738807318544fd40d7504cdab947b2->enter($__internal_6bc59914231fbc4db3cc7b95d578a4cbdd738807318544fd40d7504cdab947b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6bc59914231fbc4db3cc7b95d578a4cbdd738807318544fd40d7504cdab947b2->leave($__internal_6bc59914231fbc4db3cc7b95d578a4cbdd738807318544fd40d7504cdab947b2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
