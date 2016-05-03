<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_8efdefb22a1945862aa5a6297b8e23778269857188b9bc4208ad544fcdf203f4 extends Twig_Template
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
        $__internal_93a9e3ad931de28ad997152c8d5f352fe410cbf1fe0d69535f142ff9f52e733b = $this->env->getExtension("native_profiler");
        $__internal_93a9e3ad931de28ad997152c8d5f352fe410cbf1fe0d69535f142ff9f52e733b->enter($__internal_93a9e3ad931de28ad997152c8d5f352fe410cbf1fe0d69535f142ff9f52e733b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_93a9e3ad931de28ad997152c8d5f352fe410cbf1fe0d69535f142ff9f52e733b->leave($__internal_93a9e3ad931de28ad997152c8d5f352fe410cbf1fe0d69535f142ff9f52e733b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4b885145749ea6e6d09e4be385e53ef274e4510bd87ec864a59aa920da1ed09a = $this->env->getExtension("native_profiler");
        $__internal_4b885145749ea6e6d09e4be385e53ef274e4510bd87ec864a59aa920da1ed09a->enter($__internal_4b885145749ea6e6d09e4be385e53ef274e4510bd87ec864a59aa920da1ed09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4b885145749ea6e6d09e4be385e53ef274e4510bd87ec864a59aa920da1ed09a->leave($__internal_4b885145749ea6e6d09e4be385e53ef274e4510bd87ec864a59aa920da1ed09a_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_42797d3d49f2a6325dcc3fadd4c2a9f7f64b268b3d04ff6bd4fef30339552584 = $this->env->getExtension("native_profiler");
        $__internal_42797d3d49f2a6325dcc3fadd4c2a9f7f64b268b3d04ff6bd4fef30339552584->enter($__internal_42797d3d49f2a6325dcc3fadd4c2a9f7f64b268b3d04ff6bd4fef30339552584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_42797d3d49f2a6325dcc3fadd4c2a9f7f64b268b3d04ff6bd4fef30339552584->leave($__internal_42797d3d49f2a6325dcc3fadd4c2a9f7f64b268b3d04ff6bd4fef30339552584_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9400b58949dacde999f0b730813231416a898b1f9a0b0870ef6586a9c1f8b54e = $this->env->getExtension("native_profiler");
        $__internal_9400b58949dacde999f0b730813231416a898b1f9a0b0870ef6586a9c1f8b54e->enter($__internal_9400b58949dacde999f0b730813231416a898b1f9a0b0870ef6586a9c1f8b54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9400b58949dacde999f0b730813231416a898b1f9a0b0870ef6586a9c1f8b54e->leave($__internal_9400b58949dacde999f0b730813231416a898b1f9a0b0870ef6586a9c1f8b54e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
