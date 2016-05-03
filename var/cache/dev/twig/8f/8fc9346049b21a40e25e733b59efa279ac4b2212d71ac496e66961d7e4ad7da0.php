<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_a2f443d5ed5613732557695b85f1d95ed987cf83fc73df81129e15572d7e5c7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_bdaff081e36fc3b372da57a9292bf1361d8df21e686eede53c5a6cb766ccb66f = $this->env->getExtension("native_profiler");
        $__internal_bdaff081e36fc3b372da57a9292bf1361d8df21e686eede53c5a6cb766ccb66f->enter($__internal_bdaff081e36fc3b372da57a9292bf1361d8df21e686eede53c5a6cb766ccb66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdaff081e36fc3b372da57a9292bf1361d8df21e686eede53c5a6cb766ccb66f->leave($__internal_bdaff081e36fc3b372da57a9292bf1361d8df21e686eede53c5a6cb766ccb66f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_91c4e9b9a5cf82845c1e066eb0bdc369e952d4d88891522c6964394f75fafc3d = $this->env->getExtension("native_profiler");
        $__internal_91c4e9b9a5cf82845c1e066eb0bdc369e952d4d88891522c6964394f75fafc3d->enter($__internal_91c4e9b9a5cf82845c1e066eb0bdc369e952d4d88891522c6964394f75fafc3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_91c4e9b9a5cf82845c1e066eb0bdc369e952d4d88891522c6964394f75fafc3d->leave($__internal_91c4e9b9a5cf82845c1e066eb0bdc369e952d4d88891522c6964394f75fafc3d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
