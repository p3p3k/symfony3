<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_55cb218d6e332d7488554cf08057b9aaf07d14a51803d9a1d5fc8614a9ce736d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_6ccd1e6905424b6d4bfaaca0ca69a93becd2bba950e1b14ad041879b3bafa9e4 = $this->env->getExtension("native_profiler");
        $__internal_6ccd1e6905424b6d4bfaaca0ca69a93becd2bba950e1b14ad041879b3bafa9e4->enter($__internal_6ccd1e6905424b6d4bfaaca0ca69a93becd2bba950e1b14ad041879b3bafa9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ccd1e6905424b6d4bfaaca0ca69a93becd2bba950e1b14ad041879b3bafa9e4->leave($__internal_6ccd1e6905424b6d4bfaaca0ca69a93becd2bba950e1b14ad041879b3bafa9e4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_119ede0db1dfffd13a8a4ead7dabf55fb937d7087a3aed4cb684aec5af165e13 = $this->env->getExtension("native_profiler");
        $__internal_119ede0db1dfffd13a8a4ead7dabf55fb937d7087a3aed4cb684aec5af165e13->enter($__internal_119ede0db1dfffd13a8a4ead7dabf55fb937d7087a3aed4cb684aec5af165e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_119ede0db1dfffd13a8a4ead7dabf55fb937d7087a3aed4cb684aec5af165e13->leave($__internal_119ede0db1dfffd13a8a4ead7dabf55fb937d7087a3aed4cb684aec5af165e13_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
