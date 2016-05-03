<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9b0964ffef14c1110755902998fd9a5f4204d0dc5907e3a890bac205eb681941 extends Twig_Template
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
        $__internal_9c37556b4f8ac5d09e3cd34d5d7440ae143dd857e8571e4d558bdc6106b6371d = $this->env->getExtension("native_profiler");
        $__internal_9c37556b4f8ac5d09e3cd34d5d7440ae143dd857e8571e4d558bdc6106b6371d->enter($__internal_9c37556b4f8ac5d09e3cd34d5d7440ae143dd857e8571e4d558bdc6106b6371d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9c37556b4f8ac5d09e3cd34d5d7440ae143dd857e8571e4d558bdc6106b6371d->leave($__internal_9c37556b4f8ac5d09e3cd34d5d7440ae143dd857e8571e4d558bdc6106b6371d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
