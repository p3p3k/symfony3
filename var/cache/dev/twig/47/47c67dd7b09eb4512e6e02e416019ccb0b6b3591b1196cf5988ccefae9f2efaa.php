<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_3d515b603fe6465d989419d94748734dd74cb912679167b89d3e38d588d7b9ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_7fc0d1431def17a6819fd5a639f28b610f977228c4299cf57149ff94fe140589 = $this->env->getExtension("native_profiler");
        $__internal_7fc0d1431def17a6819fd5a639f28b610f977228c4299cf57149ff94fe140589->enter($__internal_7fc0d1431def17a6819fd5a639f28b610f977228c4299cf57149ff94fe140589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fc0d1431def17a6819fd5a639f28b610f977228c4299cf57149ff94fe140589->leave($__internal_7fc0d1431def17a6819fd5a639f28b610f977228c4299cf57149ff94fe140589_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f0374efd4e8095227c94e875616d78a6b312766a546991ab0137f4ee13aa274 = $this->env->getExtension("native_profiler");
        $__internal_4f0374efd4e8095227c94e875616d78a6b312766a546991ab0137f4ee13aa274->enter($__internal_4f0374efd4e8095227c94e875616d78a6b312766a546991ab0137f4ee13aa274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4f0374efd4e8095227c94e875616d78a6b312766a546991ab0137f4ee13aa274->leave($__internal_4f0374efd4e8095227c94e875616d78a6b312766a546991ab0137f4ee13aa274_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
