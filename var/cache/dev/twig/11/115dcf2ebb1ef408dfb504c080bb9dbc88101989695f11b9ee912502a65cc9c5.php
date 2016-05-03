<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_b36bdec8dad53dd9e2bd3a6ebb21ee6e094c65d0ba36b89b787c7d4b653906a7 extends Twig_Template
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
        $__internal_243c412e104cf3fb2db580f5c8c1b8b616ffabbb7fae338697c8052c4a93628b = $this->env->getExtension("native_profiler");
        $__internal_243c412e104cf3fb2db580f5c8c1b8b616ffabbb7fae338697c8052c4a93628b->enter($__internal_243c412e104cf3fb2db580f5c8c1b8b616ffabbb7fae338697c8052c4a93628b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_243c412e104cf3fb2db580f5c8c1b8b616ffabbb7fae338697c8052c4a93628b->leave($__internal_243c412e104cf3fb2db580f5c8c1b8b616ffabbb7fae338697c8052c4a93628b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
