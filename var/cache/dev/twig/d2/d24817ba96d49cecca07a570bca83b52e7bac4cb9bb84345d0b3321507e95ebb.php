<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_c830a40465bc6f0d85dd375fb1f89c7fb8e7fd172400e36a7fe9071975d03534 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_044029e05cd1409ad9c11bd05f3102068163f16264290d99bf9db3567c05d933 = $this->env->getExtension("native_profiler");
        $__internal_044029e05cd1409ad9c11bd05f3102068163f16264290d99bf9db3567c05d933->enter($__internal_044029e05cd1409ad9c11bd05f3102068163f16264290d99bf9db3567c05d933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_044029e05cd1409ad9c11bd05f3102068163f16264290d99bf9db3567c05d933->leave($__internal_044029e05cd1409ad9c11bd05f3102068163f16264290d99bf9db3567c05d933_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e62efe65a61bfe450abf2a839ee6c9e33adbbb8ed642a208f58d7f193ca8cdf5 = $this->env->getExtension("native_profiler");
        $__internal_e62efe65a61bfe450abf2a839ee6c9e33adbbb8ed642a208f58d7f193ca8cdf5->enter($__internal_e62efe65a61bfe450abf2a839ee6c9e33adbbb8ed642a208f58d7f193ca8cdf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_e62efe65a61bfe450abf2a839ee6c9e33adbbb8ed642a208f58d7f193ca8cdf5->leave($__internal_e62efe65a61bfe450abf2a839ee6c9e33adbbb8ed642a208f58d7f193ca8cdf5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
