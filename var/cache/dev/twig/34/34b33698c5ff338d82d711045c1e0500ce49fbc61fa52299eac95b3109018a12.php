<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_b5937778cf8d3066ebe10c45e4d200247158f7baace19621d1371d0a1dab1d43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ddaae309e0ca4e36c12ed919e8e61f414c46e12df4a0081251fb92d268428b35 = $this->env->getExtension("native_profiler");
        $__internal_ddaae309e0ca4e36c12ed919e8e61f414c46e12df4a0081251fb92d268428b35->enter($__internal_ddaae309e0ca4e36c12ed919e8e61f414c46e12df4a0081251fb92d268428b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddaae309e0ca4e36c12ed919e8e61f414c46e12df4a0081251fb92d268428b35->leave($__internal_ddaae309e0ca4e36c12ed919e8e61f414c46e12df4a0081251fb92d268428b35_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c2480c195afd59d20d2c59d66fc55ecd98c5e5d3b89a0c151f4f01850e49d301 = $this->env->getExtension("native_profiler");
        $__internal_c2480c195afd59d20d2c59d66fc55ecd98c5e5d3b89a0c151f4f01850e49d301->enter($__internal_c2480c195afd59d20d2c59d66fc55ecd98c5e5d3b89a0c151f4f01850e49d301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_c2480c195afd59d20d2c59d66fc55ecd98c5e5d3b89a0c151f4f01850e49d301->leave($__internal_c2480c195afd59d20d2c59d66fc55ecd98c5e5d3b89a0c151f4f01850e49d301_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
