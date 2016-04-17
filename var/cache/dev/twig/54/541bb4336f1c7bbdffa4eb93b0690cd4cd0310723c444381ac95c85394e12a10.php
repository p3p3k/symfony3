<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a79fa62d6e35c46ad1edf50d5999e4aa103c960296b0797173370bfff210f9f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_819b64396586731d0f9dc5389927c2ead14efe52345a10beb66951b2c08b13a1 = $this->env->getExtension("native_profiler");
        $__internal_819b64396586731d0f9dc5389927c2ead14efe52345a10beb66951b2c08b13a1->enter($__internal_819b64396586731d0f9dc5389927c2ead14efe52345a10beb66951b2c08b13a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_819b64396586731d0f9dc5389927c2ead14efe52345a10beb66951b2c08b13a1->leave($__internal_819b64396586731d0f9dc5389927c2ead14efe52345a10beb66951b2c08b13a1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1b532c020011ff947a917f068f7561e72a98cf967cbab5049c72cd3ac5361046 = $this->env->getExtension("native_profiler");
        $__internal_1b532c020011ff947a917f068f7561e72a98cf967cbab5049c72cd3ac5361046->enter($__internal_1b532c020011ff947a917f068f7561e72a98cf967cbab5049c72cd3ac5361046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1b532c020011ff947a917f068f7561e72a98cf967cbab5049c72cd3ac5361046->leave($__internal_1b532c020011ff947a917f068f7561e72a98cf967cbab5049c72cd3ac5361046_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_21bb9f899031cfc993e825796be90bef853f4fcccf786a113766a35c4beda3f7 = $this->env->getExtension("native_profiler");
        $__internal_21bb9f899031cfc993e825796be90bef853f4fcccf786a113766a35c4beda3f7->enter($__internal_21bb9f899031cfc993e825796be90bef853f4fcccf786a113766a35c4beda3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_21bb9f899031cfc993e825796be90bef853f4fcccf786a113766a35c4beda3f7->leave($__internal_21bb9f899031cfc993e825796be90bef853f4fcccf786a113766a35c4beda3f7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd6c00c977470483cca01de7e48f51bf7fce5949ea2472b4a95b8efd2d82c138 = $this->env->getExtension("native_profiler");
        $__internal_bd6c00c977470483cca01de7e48f51bf7fce5949ea2472b4a95b8efd2d82c138->enter($__internal_bd6c00c977470483cca01de7e48f51bf7fce5949ea2472b4a95b8efd2d82c138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bd6c00c977470483cca01de7e48f51bf7fce5949ea2472b4a95b8efd2d82c138->leave($__internal_bd6c00c977470483cca01de7e48f51bf7fce5949ea2472b4a95b8efd2d82c138_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
