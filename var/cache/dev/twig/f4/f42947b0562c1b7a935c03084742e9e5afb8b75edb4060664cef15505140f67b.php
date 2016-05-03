<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_21690f560089aad80e49d27ce75ac543add1aea5a3a38cbf90e1cadd10b9d8e4 extends Twig_Template
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
        $__internal_b3160285eb4871801f075ca86670e4b5d99be19c2f8eb5066031ca121bf5c467 = $this->env->getExtension("native_profiler");
        $__internal_b3160285eb4871801f075ca86670e4b5d99be19c2f8eb5066031ca121bf5c467->enter($__internal_b3160285eb4871801f075ca86670e4b5d99be19c2f8eb5066031ca121bf5c467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_b3160285eb4871801f075ca86670e4b5d99be19c2f8eb5066031ca121bf5c467->leave($__internal_b3160285eb4871801f075ca86670e4b5d99be19c2f8eb5066031ca121bf5c467_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
