<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_a3ec04b541201c291f7c5445d1fe690acadb7d26e1959647fc89fe4195dee1e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_ec367bb69da0b1c826f9a73488255fc5683d8949fe531d0711463f00951c7dd7 = $this->env->getExtension("native_profiler");
        $__internal_ec367bb69da0b1c826f9a73488255fc5683d8949fe531d0711463f00951c7dd7->enter($__internal_ec367bb69da0b1c826f9a73488255fc5683d8949fe531d0711463f00951c7dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec367bb69da0b1c826f9a73488255fc5683d8949fe531d0711463f00951c7dd7->leave($__internal_ec367bb69da0b1c826f9a73488255fc5683d8949fe531d0711463f00951c7dd7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f95765f2a4a552ee986e750c4eb29830d11ed1ba72ad5974a039665effe4cee2 = $this->env->getExtension("native_profiler");
        $__internal_f95765f2a4a552ee986e750c4eb29830d11ed1ba72ad5974a039665effe4cee2->enter($__internal_f95765f2a4a552ee986e750c4eb29830d11ed1ba72ad5974a039665effe4cee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_f95765f2a4a552ee986e750c4eb29830d11ed1ba72ad5974a039665effe4cee2->leave($__internal_f95765f2a4a552ee986e750c4eb29830d11ed1ba72ad5974a039665effe4cee2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
