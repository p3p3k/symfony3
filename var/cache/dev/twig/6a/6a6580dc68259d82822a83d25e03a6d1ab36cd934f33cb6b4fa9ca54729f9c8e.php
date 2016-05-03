<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_64833e3f318003032d40e5793e6a12812db8872ad5b3cfd02517bb4dc95467a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_455f772007a168f849c96af51c8bbdf20006b0fb6f45d6505df29bfef69e9d8b = $this->env->getExtension("native_profiler");
        $__internal_455f772007a168f849c96af51c8bbdf20006b0fb6f45d6505df29bfef69e9d8b->enter($__internal_455f772007a168f849c96af51c8bbdf20006b0fb6f45d6505df29bfef69e9d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_455f772007a168f849c96af51c8bbdf20006b0fb6f45d6505df29bfef69e9d8b->leave($__internal_455f772007a168f849c96af51c8bbdf20006b0fb6f45d6505df29bfef69e9d8b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_286165cf50d220b22fac0e78f273d091de6ca3487d3a2ebdff97c78fbcf89b3a = $this->env->getExtension("native_profiler");
        $__internal_286165cf50d220b22fac0e78f273d091de6ca3487d3a2ebdff97c78fbcf89b3a->enter($__internal_286165cf50d220b22fac0e78f273d091de6ca3487d3a2ebdff97c78fbcf89b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_286165cf50d220b22fac0e78f273d091de6ca3487d3a2ebdff97c78fbcf89b3a->leave($__internal_286165cf50d220b22fac0e78f273d091de6ca3487d3a2ebdff97c78fbcf89b3a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
