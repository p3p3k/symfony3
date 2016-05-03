<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_14d8262816cb13f8fea06ab0fe3cec5977d3964214153ab6c82d96678c829b34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_eddd2cab888877f42c2d7838d2c68c20a724cd415fc1995f8cb7d9cb8f4d0c38 = $this->env->getExtension("native_profiler");
        $__internal_eddd2cab888877f42c2d7838d2c68c20a724cd415fc1995f8cb7d9cb8f4d0c38->enter($__internal_eddd2cab888877f42c2d7838d2c68c20a724cd415fc1995f8cb7d9cb8f4d0c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eddd2cab888877f42c2d7838d2c68c20a724cd415fc1995f8cb7d9cb8f4d0c38->leave($__internal_eddd2cab888877f42c2d7838d2c68c20a724cd415fc1995f8cb7d9cb8f4d0c38_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_07c9e475889b87ff501ea03f132fcb2257b70bee70163c296db88d643d338354 = $this->env->getExtension("native_profiler");
        $__internal_07c9e475889b87ff501ea03f132fcb2257b70bee70163c296db88d643d338354->enter($__internal_07c9e475889b87ff501ea03f132fcb2257b70bee70163c296db88d643d338354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_07c9e475889b87ff501ea03f132fcb2257b70bee70163c296db88d643d338354->leave($__internal_07c9e475889b87ff501ea03f132fcb2257b70bee70163c296db88d643d338354_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
