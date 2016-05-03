<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_c38e196016bb960d17b254ba1d1304eeaeee9ab66f6170f4108a78ff0b07ac30 extends Twig_Template
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
        $__internal_d5293220e14d8a08889e3185480b9df5d24716615f7a10dee2b205d180becc56 = $this->env->getExtension("native_profiler");
        $__internal_d5293220e14d8a08889e3185480b9df5d24716615f7a10dee2b205d180becc56->enter($__internal_d5293220e14d8a08889e3185480b9df5d24716615f7a10dee2b205d180becc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d5293220e14d8a08889e3185480b9df5d24716615f7a10dee2b205d180becc56->leave($__internal_d5293220e14d8a08889e3185480b9df5d24716615f7a10dee2b205d180becc56_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
