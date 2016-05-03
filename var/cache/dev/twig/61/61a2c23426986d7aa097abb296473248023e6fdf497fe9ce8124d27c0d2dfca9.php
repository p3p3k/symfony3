<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_1704f27640eb8004c927b998d531be13172e5113d7b55c77518e0d72f7e6562d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_10e7b4d2f8ba01589bb9fbaec91d92f857690a954174acb20e0a21610e8d6bd7 = $this->env->getExtension("native_profiler");
        $__internal_10e7b4d2f8ba01589bb9fbaec91d92f857690a954174acb20e0a21610e8d6bd7->enter($__internal_10e7b4d2f8ba01589bb9fbaec91d92f857690a954174acb20e0a21610e8d6bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10e7b4d2f8ba01589bb9fbaec91d92f857690a954174acb20e0a21610e8d6bd7->leave($__internal_10e7b4d2f8ba01589bb9fbaec91d92f857690a954174acb20e0a21610e8d6bd7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4da7ed222102eaabda231015e2128a272ce2860f253c87e440459038b8ed95d3 = $this->env->getExtension("native_profiler");
        $__internal_4da7ed222102eaabda231015e2128a272ce2860f253c87e440459038b8ed95d3->enter($__internal_4da7ed222102eaabda231015e2128a272ce2860f253c87e440459038b8ed95d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4da7ed222102eaabda231015e2128a272ce2860f253c87e440459038b8ed95d3->leave($__internal_4da7ed222102eaabda231015e2128a272ce2860f253c87e440459038b8ed95d3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
