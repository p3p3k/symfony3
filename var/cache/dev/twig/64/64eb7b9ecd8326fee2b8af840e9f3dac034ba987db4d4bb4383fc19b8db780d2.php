<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_7b722b935eb0bd8b3d2754126e93bce2d86313f16ae56ccc74348c81defd85d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_8074d0784e71074620f00c1333e98bb510411a115f6bcad3f740627235eb083d = $this->env->getExtension("native_profiler");
        $__internal_8074d0784e71074620f00c1333e98bb510411a115f6bcad3f740627235eb083d->enter($__internal_8074d0784e71074620f00c1333e98bb510411a115f6bcad3f740627235eb083d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8074d0784e71074620f00c1333e98bb510411a115f6bcad3f740627235eb083d->leave($__internal_8074d0784e71074620f00c1333e98bb510411a115f6bcad3f740627235eb083d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1c598e4ffd72c066cfc9a8c7f32fb8e380b138f69146397d9a4d67a274131b64 = $this->env->getExtension("native_profiler");
        $__internal_1c598e4ffd72c066cfc9a8c7f32fb8e380b138f69146397d9a4d67a274131b64->enter($__internal_1c598e4ffd72c066cfc9a8c7f32fb8e380b138f69146397d9a4d67a274131b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_1c598e4ffd72c066cfc9a8c7f32fb8e380b138f69146397d9a4d67a274131b64->leave($__internal_1c598e4ffd72c066cfc9a8c7f32fb8e380b138f69146397d9a4d67a274131b64_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
