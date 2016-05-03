<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_fee48e39ac5fff8a7c0eaeffbb4decdb7cc11fbfcb39f3908e48e3426262e4de extends Twig_Template
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
        $__internal_c9e86d578cd045aab7f5b7844037aa6f0540558ae006eb471bff8e13a82110ce = $this->env->getExtension("native_profiler");
        $__internal_c9e86d578cd045aab7f5b7844037aa6f0540558ae006eb471bff8e13a82110ce->enter($__internal_c9e86d578cd045aab7f5b7844037aa6f0540558ae006eb471bff8e13a82110ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c9e86d578cd045aab7f5b7844037aa6f0540558ae006eb471bff8e13a82110ce->leave($__internal_c9e86d578cd045aab7f5b7844037aa6f0540558ae006eb471bff8e13a82110ce_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
