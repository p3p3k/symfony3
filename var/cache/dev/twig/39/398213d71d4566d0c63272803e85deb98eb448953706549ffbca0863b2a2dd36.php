<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ea4bd3cef55240a929cf124770b803e8256c93c81d2ffc1b8bf2ffd8cedc213b extends Twig_Template
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
        $__internal_3edf74654568a4415d1b260220c37cf90b6d14be80a10ec82c12db7f167fb6db = $this->env->getExtension("native_profiler");
        $__internal_3edf74654568a4415d1b260220c37cf90b6d14be80a10ec82c12db7f167fb6db->enter($__internal_3edf74654568a4415d1b260220c37cf90b6d14be80a10ec82c12db7f167fb6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3edf74654568a4415d1b260220c37cf90b6d14be80a10ec82c12db7f167fb6db->leave($__internal_3edf74654568a4415d1b260220c37cf90b6d14be80a10ec82c12db7f167fb6db_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2ad02519e8dd05028f15fb675866db03be24112610e3af29524203418ff0e40d = $this->env->getExtension("native_profiler");
        $__internal_2ad02519e8dd05028f15fb675866db03be24112610e3af29524203418ff0e40d->enter($__internal_2ad02519e8dd05028f15fb675866db03be24112610e3af29524203418ff0e40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2ad02519e8dd05028f15fb675866db03be24112610e3af29524203418ff0e40d->leave($__internal_2ad02519e8dd05028f15fb675866db03be24112610e3af29524203418ff0e40d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8b0a5ee95f0060afbbd339f9e6f7e6e8ebbebb4718a29b935e3bbd75e63d24c = $this->env->getExtension("native_profiler");
        $__internal_e8b0a5ee95f0060afbbd339f9e6f7e6e8ebbebb4718a29b935e3bbd75e63d24c->enter($__internal_e8b0a5ee95f0060afbbd339f9e6f7e6e8ebbebb4718a29b935e3bbd75e63d24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e8b0a5ee95f0060afbbd339f9e6f7e6e8ebbebb4718a29b935e3bbd75e63d24c->leave($__internal_e8b0a5ee95f0060afbbd339f9e6f7e6e8ebbebb4718a29b935e3bbd75e63d24c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_62d4a3051b3f462d3f7976fdc6d874b5ba18173ac286cec7fd0e2775d194ffec = $this->env->getExtension("native_profiler");
        $__internal_62d4a3051b3f462d3f7976fdc6d874b5ba18173ac286cec7fd0e2775d194ffec->enter($__internal_62d4a3051b3f462d3f7976fdc6d874b5ba18173ac286cec7fd0e2775d194ffec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_62d4a3051b3f462d3f7976fdc6d874b5ba18173ac286cec7fd0e2775d194ffec->leave($__internal_62d4a3051b3f462d3f7976fdc6d874b5ba18173ac286cec7fd0e2775d194ffec_prof);

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
