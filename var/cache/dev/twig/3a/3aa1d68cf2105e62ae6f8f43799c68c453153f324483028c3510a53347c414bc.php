<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_039eefbd6cdf5ea243357fa9f922c522b908240ba7e2a12993524bdae4546caf extends Twig_Template
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
        $__internal_5e2b52f3012a6dbfc08a1d0b47e529c518d8e8a089d82eb03a7f2f81d67a9357 = $this->env->getExtension("native_profiler");
        $__internal_5e2b52f3012a6dbfc08a1d0b47e529c518d8e8a089d82eb03a7f2f81d67a9357->enter($__internal_5e2b52f3012a6dbfc08a1d0b47e529c518d8e8a089d82eb03a7f2f81d67a9357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5e2b52f3012a6dbfc08a1d0b47e529c518d8e8a089d82eb03a7f2f81d67a9357->leave($__internal_5e2b52f3012a6dbfc08a1d0b47e529c518d8e8a089d82eb03a7f2f81d67a9357_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0e9bd08758a300c925bb31ee0d5c3dfc6aa5ab4e62763f1e4b00e8c3689470d7 = $this->env->getExtension("native_profiler");
        $__internal_0e9bd08758a300c925bb31ee0d5c3dfc6aa5ab4e62763f1e4b00e8c3689470d7->enter($__internal_0e9bd08758a300c925bb31ee0d5c3dfc6aa5ab4e62763f1e4b00e8c3689470d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0e9bd08758a300c925bb31ee0d5c3dfc6aa5ab4e62763f1e4b00e8c3689470d7->leave($__internal_0e9bd08758a300c925bb31ee0d5c3dfc6aa5ab4e62763f1e4b00e8c3689470d7_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ba273bd9f3c240809ec90e1f4567daeb06ceee6a1bd0523c804adc845305a4ad = $this->env->getExtension("native_profiler");
        $__internal_ba273bd9f3c240809ec90e1f4567daeb06ceee6a1bd0523c804adc845305a4ad->enter($__internal_ba273bd9f3c240809ec90e1f4567daeb06ceee6a1bd0523c804adc845305a4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ba273bd9f3c240809ec90e1f4567daeb06ceee6a1bd0523c804adc845305a4ad->leave($__internal_ba273bd9f3c240809ec90e1f4567daeb06ceee6a1bd0523c804adc845305a4ad_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0906c23ac1d519ccef445df64acecf1b435f65d0f32825a67f31ca8457000302 = $this->env->getExtension("native_profiler");
        $__internal_0906c23ac1d519ccef445df64acecf1b435f65d0f32825a67f31ca8457000302->enter($__internal_0906c23ac1d519ccef445df64acecf1b435f65d0f32825a67f31ca8457000302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0906c23ac1d519ccef445df64acecf1b435f65d0f32825a67f31ca8457000302->leave($__internal_0906c23ac1d519ccef445df64acecf1b435f65d0f32825a67f31ca8457000302_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
