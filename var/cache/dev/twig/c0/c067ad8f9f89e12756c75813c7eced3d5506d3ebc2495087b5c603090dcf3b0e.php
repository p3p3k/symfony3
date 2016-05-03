<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_5753e60b66d16002d617a1b3dcf06693e61c6fd0c3a106b1781ed80367870c47 extends Twig_Template
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
        $__internal_4beed6f04851714a15b59fc576f3b4d62f66be252fb653134fa681004cd4795c = $this->env->getExtension("native_profiler");
        $__internal_4beed6f04851714a15b59fc576f3b4d62f66be252fb653134fa681004cd4795c->enter($__internal_4beed6f04851714a15b59fc576f3b4d62f66be252fb653134fa681004cd4795c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4beed6f04851714a15b59fc576f3b4d62f66be252fb653134fa681004cd4795c->leave($__internal_4beed6f04851714a15b59fc576f3b4d62f66be252fb653134fa681004cd4795c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
