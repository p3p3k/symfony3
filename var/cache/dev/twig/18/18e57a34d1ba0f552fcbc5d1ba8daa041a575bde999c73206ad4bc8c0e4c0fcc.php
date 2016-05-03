<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_975146f4fa1a7dad04b3a3dab424740454906df86a5149b7359c4fe8b5608284 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_485dd5de44a766080f24a5a08bd00e30d3088fc4f72c950b40180dc5032bc51a = $this->env->getExtension("native_profiler");
        $__internal_485dd5de44a766080f24a5a08bd00e30d3088fc4f72c950b40180dc5032bc51a->enter($__internal_485dd5de44a766080f24a5a08bd00e30d3088fc4f72c950b40180dc5032bc51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_485dd5de44a766080f24a5a08bd00e30d3088fc4f72c950b40180dc5032bc51a->leave($__internal_485dd5de44a766080f24a5a08bd00e30d3088fc4f72c950b40180dc5032bc51a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca19b411415ed542081a1929ba50d1c4a3d65fb3bdad5ad1a168c29672786f67 = $this->env->getExtension("native_profiler");
        $__internal_ca19b411415ed542081a1929ba50d1c4a3d65fb3bdad5ad1a168c29672786f67->enter($__internal_ca19b411415ed542081a1929ba50d1c4a3d65fb3bdad5ad1a168c29672786f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_ca19b411415ed542081a1929ba50d1c4a3d65fb3bdad5ad1a168c29672786f67->leave($__internal_ca19b411415ed542081a1929ba50d1c4a3d65fb3bdad5ad1a168c29672786f67_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
