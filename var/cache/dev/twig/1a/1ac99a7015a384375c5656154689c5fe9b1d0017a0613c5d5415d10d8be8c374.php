<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_5092daefe0a9414955194745e5c6deb88a8e9ab9004b28220ac81d28905893b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_13bd6bd17253b63a889803918b3f15175538f62c0baac2e63c4bd8c1f1bb6eae = $this->env->getExtension("native_profiler");
        $__internal_13bd6bd17253b63a889803918b3f15175538f62c0baac2e63c4bd8c1f1bb6eae->enter($__internal_13bd6bd17253b63a889803918b3f15175538f62c0baac2e63c4bd8c1f1bb6eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13bd6bd17253b63a889803918b3f15175538f62c0baac2e63c4bd8c1f1bb6eae->leave($__internal_13bd6bd17253b63a889803918b3f15175538f62c0baac2e63c4bd8c1f1bb6eae_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a3d2345167092e4580efb9694ac9761a3f018cdbfdef4e9616e5bd44f65d0105 = $this->env->getExtension("native_profiler");
        $__internal_a3d2345167092e4580efb9694ac9761a3f018cdbfdef4e9616e5bd44f65d0105->enter($__internal_a3d2345167092e4580efb9694ac9761a3f018cdbfdef4e9616e5bd44f65d0105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "

<div class=\"container\">
<form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-signin\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

        <h2 class=\"form-signin-heading\">Please Log in</h2>
        <label for=\"username\" class=\"sr-only\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"User name\" class=\"form-control\" required autofocus />

    <label for=\"password\" class=\"sr-only\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"password\" id=\"password\" class=\"form-control\"  name=\"_password\" placeholder=\"Password\" required>
        <div class=\"checkbox\">
            <label>
                <input type=\"checkbox\" value=\"remember-me\" id=\"remember_me\" name=\"_remember_me\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Remember Me", array(), "FOSUserBundle"), "html", null, true);
        echo "
            </label>
        </div>







    <input type=\"submit\" class=\"btn btn-lg btn-primary btn-block\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
    </div>
";
        
        $__internal_a3d2345167092e4580efb9694ac9761a3f018cdbfdef4e9616e5bd44f65d0105->leave($__internal_a3d2345167092e4580efb9694ac9761a3f018cdbfdef4e9616e5bd44f65d0105_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 33,  79 => 23,  72 => 19,  67 => 17,  63 => 16,  57 => 13,  53 => 12,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div class="alert alert-danger" role="alert">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* */
/* <div class="container">*/
/* <form action="{{ path("fos_user_security_check") }}" method="post" class="form-signin">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*         <h2 class="form-signin-heading">Please Log in</h2>*/
/*         <label for="username" class="sr-only">{{ 'Username'|trans }}</label>*/
/*         <input type="text" id="username" name="_username" value="{{ last_username }}" placeholder="User name" class="form-control" required autofocus />*/
/* */
/*     <label for="password" class="sr-only">{{ 'Password'|trans }}</label>*/
/*         <input type="password" id="password" class="form-control"  name="_password" placeholder="Password" required>*/
/*         <div class="checkbox">*/
/*             <label>*/
/*                 <input type="checkbox" value="remember-me" id="remember_me" name="_remember_me">{{ 'Remember Me'|trans }}*/
/*             </label>*/
/*         </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*     <input type="submit" class="btn btn-lg btn-primary btn-block" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/* </form>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
/* */
/* */
/* */
/* */
