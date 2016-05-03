<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_7155ad61d90f5073a3044772a5b1c00a8cfdaabc3eeeb987a6ca9d785242b661 extends Twig_Template
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
        $__internal_e6278a39ce3903d2de2d2cc5b72b2019fd0bfe71b32a8ee79b0e86ca2419918d = $this->env->getExtension("native_profiler");
        $__internal_e6278a39ce3903d2de2d2cc5b72b2019fd0bfe71b32a8ee79b0e86ca2419918d->enter($__internal_e6278a39ce3903d2de2d2cc5b72b2019fd0bfe71b32a8ee79b0e86ca2419918d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e6278a39ce3903d2de2d2cc5b72b2019fd0bfe71b32a8ee79b0e86ca2419918d->leave($__internal_e6278a39ce3903d2de2d2cc5b72b2019fd0bfe71b32a8ee79b0e86ca2419918d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
