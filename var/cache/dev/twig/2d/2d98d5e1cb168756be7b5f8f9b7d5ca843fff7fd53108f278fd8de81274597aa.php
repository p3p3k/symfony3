<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_f62f97a703e30bd4b1298bd9a4e4c264e80092a504a88512487a3dd869483c20 extends Twig_Template
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
        $__internal_9d02ceb12fc4ecb5388d3353b1d142c00fe71a6f1d1db005a1cdea3800413db2 = $this->env->getExtension("native_profiler");
        $__internal_9d02ceb12fc4ecb5388d3353b1d142c00fe71a6f1d1db005a1cdea3800413db2->enter($__internal_9d02ceb12fc4ecb5388d3353b1d142c00fe71a6f1d1db005a1cdea3800413db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9d02ceb12fc4ecb5388d3353b1d142c00fe71a6f1d1db005a1cdea3800413db2->leave($__internal_9d02ceb12fc4ecb5388d3353b1d142c00fe71a6f1d1db005a1cdea3800413db2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4fce148a00a67e0585a5b2a3294fedf1972e7f84dad9d652585650ff23496061 = $this->env->getExtension("native_profiler");
        $__internal_4fce148a00a67e0585a5b2a3294fedf1972e7f84dad9d652585650ff23496061->enter($__internal_4fce148a00a67e0585a5b2a3294fedf1972e7f84dad9d652585650ff23496061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_4fce148a00a67e0585a5b2a3294fedf1972e7f84dad9d652585650ff23496061->leave($__internal_4fce148a00a67e0585a5b2a3294fedf1972e7f84dad9d652585650ff23496061_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0a93ddeecd99f0edeccfc857402da93984e29da2b21b67560829fa601332a0f0 = $this->env->getExtension("native_profiler");
        $__internal_0a93ddeecd99f0edeccfc857402da93984e29da2b21b67560829fa601332a0f0->enter($__internal_0a93ddeecd99f0edeccfc857402da93984e29da2b21b67560829fa601332a0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0a93ddeecd99f0edeccfc857402da93984e29da2b21b67560829fa601332a0f0->leave($__internal_0a93ddeecd99f0edeccfc857402da93984e29da2b21b67560829fa601332a0f0_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d094a6e264a5a5d6b92fc5c8e16682ea4c9282ac265377d10ea4b01a98c471d9 = $this->env->getExtension("native_profiler");
        $__internal_d094a6e264a5a5d6b92fc5c8e16682ea4c9282ac265377d10ea4b01a98c471d9->enter($__internal_d094a6e264a5a5d6b92fc5c8e16682ea4c9282ac265377d10ea4b01a98c471d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d094a6e264a5a5d6b92fc5c8e16682ea4c9282ac265377d10ea4b01a98c471d9->leave($__internal_d094a6e264a5a5d6b92fc5c8e16682ea4c9282ac265377d10ea4b01a98c471d9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
