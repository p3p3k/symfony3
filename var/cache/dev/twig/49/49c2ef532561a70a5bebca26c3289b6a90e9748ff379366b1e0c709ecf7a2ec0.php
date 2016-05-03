<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_aeda30a30ef326c455f3923ec9b17645270dde8e24a9817352aa31cf19dde22b extends Twig_Template
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
        $__internal_cd27ec5afba569e538f35af7ba05cd01cf54f9c0f0da9f90700ed717f7aa29ed = $this->env->getExtension("native_profiler");
        $__internal_cd27ec5afba569e538f35af7ba05cd01cf54f9c0f0da9f90700ed717f7aa29ed->enter($__internal_cd27ec5afba569e538f35af7ba05cd01cf54f9c0f0da9f90700ed717f7aa29ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_cd27ec5afba569e538f35af7ba05cd01cf54f9c0f0da9f90700ed717f7aa29ed->leave($__internal_cd27ec5afba569e538f35af7ba05cd01cf54f9c0f0da9f90700ed717f7aa29ed_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
