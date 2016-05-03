<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_c92d18345b22f1b97a1c265d2b72e8b6e5a9eec61e503dfb200eab404f322757 extends Twig_Template
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
        $__internal_4d44b287e9782094985bb77b65fc7ffc064faa725eb4669c3e816404c1cbb78e = $this->env->getExtension("native_profiler");
        $__internal_4d44b287e9782094985bb77b65fc7ffc064faa725eb4669c3e816404c1cbb78e->enter($__internal_4d44b287e9782094985bb77b65fc7ffc064faa725eb4669c3e816404c1cbb78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4d44b287e9782094985bb77b65fc7ffc064faa725eb4669c3e816404c1cbb78e->leave($__internal_4d44b287e9782094985bb77b65fc7ffc064faa725eb4669c3e816404c1cbb78e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
