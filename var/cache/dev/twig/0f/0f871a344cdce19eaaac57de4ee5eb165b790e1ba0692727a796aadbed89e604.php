<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_4c6f550efb7adbec039939cee4b6b4bc00b19fd094995d8518ab26ec353c7e60 extends Twig_Template
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
        $__internal_4e5752a685541d79eb08fa92fd11c00f16880737e6ab6eabedacea2492141b0f = $this->env->getExtension("native_profiler");
        $__internal_4e5752a685541d79eb08fa92fd11c00f16880737e6ab6eabedacea2492141b0f->enter($__internal_4e5752a685541d79eb08fa92fd11c00f16880737e6ab6eabedacea2492141b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_4e5752a685541d79eb08fa92fd11c00f16880737e6ab6eabedacea2492141b0f->leave($__internal_4e5752a685541d79eb08fa92fd11c00f16880737e6ab6eabedacea2492141b0f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
