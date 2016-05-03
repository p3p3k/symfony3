<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_3d86935dbe67dddc68d3fe4be5706ca95a7d4a07d3a200444fe5e5d07cef54be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_c404b589cac7f8e4a5d03e2193e84619787d565b82b7ba24b9ed7959b94f0cbf = $this->env->getExtension("native_profiler");
        $__internal_c404b589cac7f8e4a5d03e2193e84619787d565b82b7ba24b9ed7959b94f0cbf->enter($__internal_c404b589cac7f8e4a5d03e2193e84619787d565b82b7ba24b9ed7959b94f0cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c404b589cac7f8e4a5d03e2193e84619787d565b82b7ba24b9ed7959b94f0cbf->leave($__internal_c404b589cac7f8e4a5d03e2193e84619787d565b82b7ba24b9ed7959b94f0cbf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_baf76feb84e9ab6432a3e1c0457899ff48eeaa883c7ae17e2aa28fef8041c73b = $this->env->getExtension("native_profiler");
        $__internal_baf76feb84e9ab6432a3e1c0457899ff48eeaa883c7ae17e2aa28fef8041c73b->enter($__internal_baf76feb84e9ab6432a3e1c0457899ff48eeaa883c7ae17e2aa28fef8041c73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 5)->display($context);
        
        $__internal_baf76feb84e9ab6432a3e1c0457899ff48eeaa883c7ae17e2aa28fef8041c73b->leave($__internal_baf76feb84e9ab6432a3e1c0457899ff48eeaa883c7ae17e2aa28fef8041c73b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* */
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
