<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_ddb4cd3bcd5c47616396db2d677be2bfda2b07560a203bb1bec75703d6288bee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_e016292c49a2c286c4d19a77d1947784b9e1d027f1961399eb0be32cd2eac890 = $this->env->getExtension("native_profiler");
        $__internal_e016292c49a2c286c4d19a77d1947784b9e1d027f1961399eb0be32cd2eac890->enter($__internal_e016292c49a2c286c4d19a77d1947784b9e1d027f1961399eb0be32cd2eac890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e016292c49a2c286c4d19a77d1947784b9e1d027f1961399eb0be32cd2eac890->leave($__internal_e016292c49a2c286c4d19a77d1947784b9e1d027f1961399eb0be32cd2eac890_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e7e264a0c4cadf5dc97a82cf5df67134f14114132e9abcc4467d21904b12809f = $this->env->getExtension("native_profiler");
        $__internal_e7e264a0c4cadf5dc97a82cf5df67134f14114132e9abcc4467d21904b12809f->enter($__internal_e7e264a0c4cadf5dc97a82cf5df67134f14114132e9abcc4467d21904b12809f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_e7e264a0c4cadf5dc97a82cf5df67134f14114132e9abcc4467d21904b12809f->leave($__internal_e7e264a0c4cadf5dc97a82cf5df67134f14114132e9abcc4467d21904b12809f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
