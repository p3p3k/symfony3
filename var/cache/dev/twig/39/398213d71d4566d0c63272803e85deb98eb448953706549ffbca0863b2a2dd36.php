<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ea4bd3cef55240a929cf124770b803e8256c93c81d2ffc1b8bf2ffd8cedc213b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25d72ae9bf54d252a1347706157bb33caa60a3c731dfbd429e3a52d03263db9c = $this->env->getExtension("native_profiler");
        $__internal_25d72ae9bf54d252a1347706157bb33caa60a3c731dfbd429e3a52d03263db9c->enter($__internal_25d72ae9bf54d252a1347706157bb33caa60a3c731dfbd429e3a52d03263db9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25d72ae9bf54d252a1347706157bb33caa60a3c731dfbd429e3a52d03263db9c->leave($__internal_25d72ae9bf54d252a1347706157bb33caa60a3c731dfbd429e3a52d03263db9c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9eb46ca3908bdf6c0d4ffc34ad12ca99d7ff2fdb9c9134cea18ed8c77b6db9e8 = $this->env->getExtension("native_profiler");
        $__internal_9eb46ca3908bdf6c0d4ffc34ad12ca99d7ff2fdb9c9134cea18ed8c77b6db9e8->enter($__internal_9eb46ca3908bdf6c0d4ffc34ad12ca99d7ff2fdb9c9134cea18ed8c77b6db9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9eb46ca3908bdf6c0d4ffc34ad12ca99d7ff2fdb9c9134cea18ed8c77b6db9e8->leave($__internal_9eb46ca3908bdf6c0d4ffc34ad12ca99d7ff2fdb9c9134cea18ed8c77b6db9e8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_aca9c7eeaa2bd36208fe9524702fce7ae46690eee700b6edad04f45ed08f44ad = $this->env->getExtension("native_profiler");
        $__internal_aca9c7eeaa2bd36208fe9524702fce7ae46690eee700b6edad04f45ed08f44ad->enter($__internal_aca9c7eeaa2bd36208fe9524702fce7ae46690eee700b6edad04f45ed08f44ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_aca9c7eeaa2bd36208fe9524702fce7ae46690eee700b6edad04f45ed08f44ad->leave($__internal_aca9c7eeaa2bd36208fe9524702fce7ae46690eee700b6edad04f45ed08f44ad_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_56d0d10157db1116d4fb05562272f52329d53e7228fdee8503268efbbeb9bde8 = $this->env->getExtension("native_profiler");
        $__internal_56d0d10157db1116d4fb05562272f52329d53e7228fdee8503268efbbeb9bde8->enter($__internal_56d0d10157db1116d4fb05562272f52329d53e7228fdee8503268efbbeb9bde8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_56d0d10157db1116d4fb05562272f52329d53e7228fdee8503268efbbeb9bde8->leave($__internal_56d0d10157db1116d4fb05562272f52329d53e7228fdee8503268efbbeb9bde8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
