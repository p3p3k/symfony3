<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_65cd341fbacaa956e36444aaa5ef231b7fabaa9d136b0727f97d794f45de3133 extends Twig_Template
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
        $__internal_b762216ab1871a6fd18c8007979a9bf135b9dd03c2b2626206c22d171c6a9c82 = $this->env->getExtension("native_profiler");
        $__internal_b762216ab1871a6fd18c8007979a9bf135b9dd03c2b2626206c22d171c6a9c82->enter($__internal_b762216ab1871a6fd18c8007979a9bf135b9dd03c2b2626206c22d171c6a9c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_b762216ab1871a6fd18c8007979a9bf135b9dd03c2b2626206c22d171c6a9c82->leave($__internal_b762216ab1871a6fd18c8007979a9bf135b9dd03c2b2626206c22d171c6a9c82_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
