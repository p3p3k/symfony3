<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0aac37f9004cb4fe9c481acf19400269fb8378be04793243328013b8a6ce3f77 extends Twig_Template
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
        $__internal_dea632ad75ae71e2c48b300814657a0dac3b8a9324a4a6ed287222459294018e = $this->env->getExtension("native_profiler");
        $__internal_dea632ad75ae71e2c48b300814657a0dac3b8a9324a4a6ed287222459294018e->enter($__internal_dea632ad75ae71e2c48b300814657a0dac3b8a9324a4a6ed287222459294018e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_dea632ad75ae71e2c48b300814657a0dac3b8a9324a4a6ed287222459294018e->leave($__internal_dea632ad75ae71e2c48b300814657a0dac3b8a9324a4a6ed287222459294018e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
