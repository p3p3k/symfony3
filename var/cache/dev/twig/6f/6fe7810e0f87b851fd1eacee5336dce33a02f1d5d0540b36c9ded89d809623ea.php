<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_633f94a2479f5054e12a7b96f4de04a1cec70bbfbf65b4e41208d45dd5905623 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_23487bd3588a4594620d5ffb6e63732cf33ce001f8ca9c0b2836b6ae687297a9 = $this->env->getExtension("native_profiler");
        $__internal_23487bd3588a4594620d5ffb6e63732cf33ce001f8ca9c0b2836b6ae687297a9->enter($__internal_23487bd3588a4594620d5ffb6e63732cf33ce001f8ca9c0b2836b6ae687297a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23487bd3588a4594620d5ffb6e63732cf33ce001f8ca9c0b2836b6ae687297a9->leave($__internal_23487bd3588a4594620d5ffb6e63732cf33ce001f8ca9c0b2836b6ae687297a9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0a67b75fe1ca0d574ee3637950c525fd9cc51f86ba960ca7e47b899360915e3f = $this->env->getExtension("native_profiler");
        $__internal_0a67b75fe1ca0d574ee3637950c525fd9cc51f86ba960ca7e47b899360915e3f->enter($__internal_0a67b75fe1ca0d574ee3637950c525fd9cc51f86ba960ca7e47b899360915e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_0a67b75fe1ca0d574ee3637950c525fd9cc51f86ba960ca7e47b899360915e3f->leave($__internal_0a67b75fe1ca0d574ee3637950c525fd9cc51f86ba960ca7e47b899360915e3f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
