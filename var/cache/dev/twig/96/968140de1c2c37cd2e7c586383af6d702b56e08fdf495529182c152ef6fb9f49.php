<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_adc197d3d4305659e7ed5008a1ccb76ed3f694a1a5de90d84b48cf1462507725 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_74b5db81eac08b96d2b4b486bd35ff0589724eca9d13ec17fb49d7ac5cafdd72 = $this->env->getExtension("native_profiler");
        $__internal_74b5db81eac08b96d2b4b486bd35ff0589724eca9d13ec17fb49d7ac5cafdd72->enter($__internal_74b5db81eac08b96d2b4b486bd35ff0589724eca9d13ec17fb49d7ac5cafdd72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74b5db81eac08b96d2b4b486bd35ff0589724eca9d13ec17fb49d7ac5cafdd72->leave($__internal_74b5db81eac08b96d2b4b486bd35ff0589724eca9d13ec17fb49d7ac5cafdd72_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_89ace710c4d26b085783e8ec08742037edbabc54f0778d235875fae918a0df89 = $this->env->getExtension("native_profiler");
        $__internal_89ace710c4d26b085783e8ec08742037edbabc54f0778d235875fae918a0df89->enter($__internal_89ace710c4d26b085783e8ec08742037edbabc54f0778d235875fae918a0df89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_89ace710c4d26b085783e8ec08742037edbabc54f0778d235875fae918a0df89->leave($__internal_89ace710c4d26b085783e8ec08742037edbabc54f0778d235875fae918a0df89_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
