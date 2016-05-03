<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ddf4d01003c2cd7dff6c4e4350325d8cc8b5c2af950186f35b8bcd3ff54004d8 extends Twig_Template
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
        $__internal_d74e381fba3d305c9824f547a209581390f5f70a2b1ef25863b6bed715665124 = $this->env->getExtension("native_profiler");
        $__internal_d74e381fba3d305c9824f547a209581390f5f70a2b1ef25863b6bed715665124->enter($__internal_d74e381fba3d305c9824f547a209581390f5f70a2b1ef25863b6bed715665124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d74e381fba3d305c9824f547a209581390f5f70a2b1ef25863b6bed715665124->leave($__internal_d74e381fba3d305c9824f547a209581390f5f70a2b1ef25863b6bed715665124_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
