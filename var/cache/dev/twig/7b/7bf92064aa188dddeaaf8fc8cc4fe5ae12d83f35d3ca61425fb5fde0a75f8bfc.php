<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_fd9829e9bab6e2b8274b965c00974ca6d6e7f103efb2cacd218bb68390330e06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_f300fc505bdad2e39e3fe83d3d8d939f92f059cd9f9e0f27dfba7ca5e6d15606 = $this->env->getExtension("native_profiler");
        $__internal_f300fc505bdad2e39e3fe83d3d8d939f92f059cd9f9e0f27dfba7ca5e6d15606->enter($__internal_f300fc505bdad2e39e3fe83d3d8d939f92f059cd9f9e0f27dfba7ca5e6d15606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f300fc505bdad2e39e3fe83d3d8d939f92f059cd9f9e0f27dfba7ca5e6d15606->leave($__internal_f300fc505bdad2e39e3fe83d3d8d939f92f059cd9f9e0f27dfba7ca5e6d15606_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_da31a9dcb8e1e0d959cfadec9bd37263fcbc39232c623444f356c08efcfc22d0 = $this->env->getExtension("native_profiler");
        $__internal_da31a9dcb8e1e0d959cfadec9bd37263fcbc39232c623444f356c08efcfc22d0->enter($__internal_da31a9dcb8e1e0d959cfadec9bd37263fcbc39232c623444f356c08efcfc22d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_da31a9dcb8e1e0d959cfadec9bd37263fcbc39232c623444f356c08efcfc22d0->leave($__internal_da31a9dcb8e1e0d959cfadec9bd37263fcbc39232c623444f356c08efcfc22d0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6604f949bb14ba3904d28ec39d40e8570cfe62d3618fb0c4dba7562a01297a66 = $this->env->getExtension("native_profiler");
        $__internal_6604f949bb14ba3904d28ec39d40e8570cfe62d3618fb0c4dba7562a01297a66->enter($__internal_6604f949bb14ba3904d28ec39d40e8570cfe62d3618fb0c4dba7562a01297a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6604f949bb14ba3904d28ec39d40e8570cfe62d3618fb0c4dba7562a01297a66->leave($__internal_6604f949bb14ba3904d28ec39d40e8570cfe62d3618fb0c4dba7562a01297a66_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
