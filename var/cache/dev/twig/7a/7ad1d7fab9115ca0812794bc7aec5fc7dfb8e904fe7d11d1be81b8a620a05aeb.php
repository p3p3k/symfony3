<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_a7829580947ca2e23fc0a779c4d6c10675077d2354b3bfe501fa5b3a7212f38b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_5020fce79294c1e0aba602af5ab692df23cbc00e8db63610aed2e7549f1351f3 = $this->env->getExtension("native_profiler");
        $__internal_5020fce79294c1e0aba602af5ab692df23cbc00e8db63610aed2e7549f1351f3->enter($__internal_5020fce79294c1e0aba602af5ab692df23cbc00e8db63610aed2e7549f1351f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5020fce79294c1e0aba602af5ab692df23cbc00e8db63610aed2e7549f1351f3->leave($__internal_5020fce79294c1e0aba602af5ab692df23cbc00e8db63610aed2e7549f1351f3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e21ef8c64161124aea7878187ae9c8f932b41749992c12a4e16e8bb348753f0d = $this->env->getExtension("native_profiler");
        $__internal_e21ef8c64161124aea7878187ae9c8f932b41749992c12a4e16e8bb348753f0d->enter($__internal_e21ef8c64161124aea7878187ae9c8f932b41749992c12a4e16e8bb348753f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_e21ef8c64161124aea7878187ae9c8f932b41749992c12a4e16e8bb348753f0d->leave($__internal_e21ef8c64161124aea7878187ae9c8f932b41749992c12a4e16e8bb348753f0d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
