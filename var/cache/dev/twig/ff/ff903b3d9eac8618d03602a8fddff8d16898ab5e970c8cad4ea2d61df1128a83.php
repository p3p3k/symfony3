<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_834f2b394e031d2abe55802d6ed54cf8e1589a57020771b9ada9ea6136a90945 extends Twig_Template
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
        $__internal_26388b0e58d3b501ef38d603e28d40165b20fdae61b09fc1127765124b86680e = $this->env->getExtension("native_profiler");
        $__internal_26388b0e58d3b501ef38d603e28d40165b20fdae61b09fc1127765124b86680e->enter($__internal_26388b0e58d3b501ef38d603e28d40165b20fdae61b09fc1127765124b86680e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_26388b0e58d3b501ef38d603e28d40165b20fdae61b09fc1127765124b86680e->leave($__internal_26388b0e58d3b501ef38d603e28d40165b20fdae61b09fc1127765124b86680e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
