<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_b1a7188ed834d00d3b0dc25fdac06ce5ad44e88b7d07d930e0d0a05411c8b9a3 extends Twig_Template
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
        $__internal_690d7bc80632ea3510a9c88c6873a89c651e91be9b9c01c874c64edabbbffd20 = $this->env->getExtension("native_profiler");
        $__internal_690d7bc80632ea3510a9c88c6873a89c651e91be9b9c01c874c64edabbbffd20->enter($__internal_690d7bc80632ea3510a9c88c6873a89c651e91be9b9c01c874c64edabbbffd20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_690d7bc80632ea3510a9c88c6873a89c651e91be9b9c01c874c64edabbbffd20->leave($__internal_690d7bc80632ea3510a9c88c6873a89c651e91be9b9c01c874c64edabbbffd20_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
