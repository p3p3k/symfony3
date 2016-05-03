<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_5f25b1704c730d2daca7f738daa92560a618f79ee8d1aa4e6b7ede7333ec82e1 extends Twig_Template
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
        $__internal_c44d503087d83d079bfe87214090e25ac46acc5665fc5a643ef7217ef6b1c64f = $this->env->getExtension("native_profiler");
        $__internal_c44d503087d83d079bfe87214090e25ac46acc5665fc5a643ef7217ef6b1c64f->enter($__internal_c44d503087d83d079bfe87214090e25ac46acc5665fc5a643ef7217ef6b1c64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_c44d503087d83d079bfe87214090e25ac46acc5665fc5a643ef7217ef6b1c64f->leave($__internal_c44d503087d83d079bfe87214090e25ac46acc5665fc5a643ef7217ef6b1c64f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
