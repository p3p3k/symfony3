<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_51a31d9abcfa5a72312c0614c385e2a778d6b0cd53e15a87b930eeac775131f1 extends Twig_Template
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
        $__internal_2238cf5919fd0064cc0a236862413e7d2c875ddf7bfcba310c43cf0877f456f2 = $this->env->getExtension("native_profiler");
        $__internal_2238cf5919fd0064cc0a236862413e7d2c875ddf7bfcba310c43cf0877f456f2->enter($__internal_2238cf5919fd0064cc0a236862413e7d2c875ddf7bfcba310c43cf0877f456f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_2238cf5919fd0064cc0a236862413e7d2c875ddf7bfcba310c43cf0877f456f2->leave($__internal_2238cf5919fd0064cc0a236862413e7d2c875ddf7bfcba310c43cf0877f456f2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
