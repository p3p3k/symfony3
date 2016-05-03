<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_0a5d25e1a4864d5de7c0d48399ad97c10c85acb805a4225039be566ca7d78128 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_967ed7444f7314545fa653984a764fcb05ad71bea6cad7b8c22e7c5d539710c0 = $this->env->getExtension("native_profiler");
        $__internal_967ed7444f7314545fa653984a764fcb05ad71bea6cad7b8c22e7c5d539710c0->enter($__internal_967ed7444f7314545fa653984a764fcb05ad71bea6cad7b8c22e7c5d539710c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_967ed7444f7314545fa653984a764fcb05ad71bea6cad7b8c22e7c5d539710c0->leave($__internal_967ed7444f7314545fa653984a764fcb05ad71bea6cad7b8c22e7c5d539710c0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f2ea8e4f08d8309dc448a3b408e7b32d43089d2e11e72c47aa701e4e9e9b5b9 = $this->env->getExtension("native_profiler");
        $__internal_1f2ea8e4f08d8309dc448a3b408e7b32d43089d2e11e72c47aa701e4e9e9b5b9->enter($__internal_1f2ea8e4f08d8309dc448a3b408e7b32d43089d2e11e72c47aa701e4e9e9b5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_1f2ea8e4f08d8309dc448a3b408e7b32d43089d2e11e72c47aa701e4e9e9b5b9->leave($__internal_1f2ea8e4f08d8309dc448a3b408e7b32d43089d2e11e72c47aa701e4e9e9b5b9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
