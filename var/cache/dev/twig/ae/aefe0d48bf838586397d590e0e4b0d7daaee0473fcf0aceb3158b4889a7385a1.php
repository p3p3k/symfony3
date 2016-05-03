<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_b4a02a3781d61460add3986d23ca02dcc17c4d00b794a824a27bebe9b10c710f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_3fdec4038f9af9f3f2d032331dcb5f186650838401feac63eb0cbeafc85a0e05 = $this->env->getExtension("native_profiler");
        $__internal_3fdec4038f9af9f3f2d032331dcb5f186650838401feac63eb0cbeafc85a0e05->enter($__internal_3fdec4038f9af9f3f2d032331dcb5f186650838401feac63eb0cbeafc85a0e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fdec4038f9af9f3f2d032331dcb5f186650838401feac63eb0cbeafc85a0e05->leave($__internal_3fdec4038f9af9f3f2d032331dcb5f186650838401feac63eb0cbeafc85a0e05_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_91d1e65667e30f006ee62d0ce806e37be3655e470aaa3ac5331f07c5ae186a73 = $this->env->getExtension("native_profiler");
        $__internal_91d1e65667e30f006ee62d0ce806e37be3655e470aaa3ac5331f07c5ae186a73->enter($__internal_91d1e65667e30f006ee62d0ce806e37be3655e470aaa3ac5331f07c5ae186a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_91d1e65667e30f006ee62d0ce806e37be3655e470aaa3ac5331f07c5ae186a73->leave($__internal_91d1e65667e30f006ee62d0ce806e37be3655e470aaa3ac5331f07c5ae186a73_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
