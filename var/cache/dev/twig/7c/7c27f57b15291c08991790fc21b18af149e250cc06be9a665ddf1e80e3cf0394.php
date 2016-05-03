<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3e6f0e312c081fbb3d9e3b27ca25afa07aa2c1ce07c3e27e0927dffa3713de8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_da1ea207349243754ce39a7ef25d723e18f216d203096bb881b91498fec13edc = $this->env->getExtension("native_profiler");
        $__internal_da1ea207349243754ce39a7ef25d723e18f216d203096bb881b91498fec13edc->enter($__internal_da1ea207349243754ce39a7ef25d723e18f216d203096bb881b91498fec13edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da1ea207349243754ce39a7ef25d723e18f216d203096bb881b91498fec13edc->leave($__internal_da1ea207349243754ce39a7ef25d723e18f216d203096bb881b91498fec13edc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_92c20db40fade84d7c47dc0fdae53889650489fb426ea49a947904dc95e40dc9 = $this->env->getExtension("native_profiler");
        $__internal_92c20db40fade84d7c47dc0fdae53889650489fb426ea49a947904dc95e40dc9->enter($__internal_92c20db40fade84d7c47dc0fdae53889650489fb426ea49a947904dc95e40dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_92c20db40fade84d7c47dc0fdae53889650489fb426ea49a947904dc95e40dc9->leave($__internal_92c20db40fade84d7c47dc0fdae53889650489fb426ea49a947904dc95e40dc9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
