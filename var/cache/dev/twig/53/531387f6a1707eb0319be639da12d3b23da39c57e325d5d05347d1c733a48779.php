<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_ec0f6906fe7ed0a2492eb93e8cbe5a20371baf1d93defacc89cbca950a3c739d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_a49effdf6cfda3bdacccfc56f3ea593ecbf435ec3e00400e88a7fdd3c558d6ea = $this->env->getExtension("native_profiler");
        $__internal_a49effdf6cfda3bdacccfc56f3ea593ecbf435ec3e00400e88a7fdd3c558d6ea->enter($__internal_a49effdf6cfda3bdacccfc56f3ea593ecbf435ec3e00400e88a7fdd3c558d6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a49effdf6cfda3bdacccfc56f3ea593ecbf435ec3e00400e88a7fdd3c558d6ea->leave($__internal_a49effdf6cfda3bdacccfc56f3ea593ecbf435ec3e00400e88a7fdd3c558d6ea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_03676f2a5c1d45700ee29b31a0975e5b71c8f6a49613d8a800f79b50700a98fc = $this->env->getExtension("native_profiler");
        $__internal_03676f2a5c1d45700ee29b31a0975e5b71c8f6a49613d8a800f79b50700a98fc->enter($__internal_03676f2a5c1d45700ee29b31a0975e5b71c8f6a49613d8a800f79b50700a98fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_03676f2a5c1d45700ee29b31a0975e5b71c8f6a49613d8a800f79b50700a98fc->leave($__internal_03676f2a5c1d45700ee29b31a0975e5b71c8f6a49613d8a800f79b50700a98fc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
