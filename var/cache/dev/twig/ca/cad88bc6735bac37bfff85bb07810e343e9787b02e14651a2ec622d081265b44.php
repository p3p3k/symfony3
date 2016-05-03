<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_da1501cb249e00ac1d712ac831d5ffe150b580aeb3badbb4708973de6f54c7db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0dc9c2adbfa36a16e28b52d871ac9005715f7489f747722ad07e30dbeea458da = $this->env->getExtension("native_profiler");
        $__internal_0dc9c2adbfa36a16e28b52d871ac9005715f7489f747722ad07e30dbeea458da->enter($__internal_0dc9c2adbfa36a16e28b52d871ac9005715f7489f747722ad07e30dbeea458da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_0dc9c2adbfa36a16e28b52d871ac9005715f7489f747722ad07e30dbeea458da->leave($__internal_0dc9c2adbfa36a16e28b52d871ac9005715f7489f747722ad07e30dbeea458da_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
