<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_2b95aaad905052f05d41e89fa4793a0308b7d90474df64903a85c94114520cb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e69d4155ed5e7e942df224824fd8c968bc289133ffc37582767e82aa0f62c42 = $this->env->getExtension("native_profiler");
        $__internal_9e69d4155ed5e7e942df224824fd8c968bc289133ffc37582767e82aa0f62c42->enter($__internal_9e69d4155ed5e7e942df224824fd8c968bc289133ffc37582767e82aa0f62c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9e69d4155ed5e7e942df224824fd8c968bc289133ffc37582767e82aa0f62c42->leave($__internal_9e69d4155ed5e7e942df224824fd8c968bc289133ffc37582767e82aa0f62c42_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2e53e8d6318bcf8c6376afa5049a6bb392585778c223bb04dec98b4623ee39dd = $this->env->getExtension("native_profiler");
        $__internal_2e53e8d6318bcf8c6376afa5049a6bb392585778c223bb04dec98b4623ee39dd->enter($__internal_2e53e8d6318bcf8c6376afa5049a6bb392585778c223bb04dec98b4623ee39dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_2e53e8d6318bcf8c6376afa5049a6bb392585778c223bb04dec98b4623ee39dd->leave($__internal_2e53e8d6318bcf8c6376afa5049a6bb392585778c223bb04dec98b4623ee39dd_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f293641d8d06c321ee13a2edcc4dc2c4b74268eaac96aa3cd247a43aa8ee7912 = $this->env->getExtension("native_profiler");
        $__internal_f293641d8d06c321ee13a2edcc4dc2c4b74268eaac96aa3cd247a43aa8ee7912->enter($__internal_f293641d8d06c321ee13a2edcc4dc2c4b74268eaac96aa3cd247a43aa8ee7912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f293641d8d06c321ee13a2edcc4dc2c4b74268eaac96aa3cd247a43aa8ee7912->leave($__internal_f293641d8d06c321ee13a2edcc4dc2c4b74268eaac96aa3cd247a43aa8ee7912_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b42925045fdcdea0ed0ceab47f4bb2e0692f32a8e6b9cc3e28c648370a074c13 = $this->env->getExtension("native_profiler");
        $__internal_b42925045fdcdea0ed0ceab47f4bb2e0692f32a8e6b9cc3e28c648370a074c13->enter($__internal_b42925045fdcdea0ed0ceab47f4bb2e0692f32a8e6b9cc3e28c648370a074c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b42925045fdcdea0ed0ceab47f4bb2e0692f32a8e6b9cc3e28c648370a074c13->leave($__internal_b42925045fdcdea0ed0ceab47f4bb2e0692f32a8e6b9cc3e28c648370a074c13_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
