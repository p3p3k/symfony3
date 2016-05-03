<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ce9f3be9fc1b8d44087fa71de2be0195f90157a0e360cadac5111be712af91a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_660d5095d0eda64e2b6d75c819e8057265ce8bfbc24954d686ec00ec54c7b275 = $this->env->getExtension("native_profiler");
        $__internal_660d5095d0eda64e2b6d75c819e8057265ce8bfbc24954d686ec00ec54c7b275->enter($__internal_660d5095d0eda64e2b6d75c819e8057265ce8bfbc24954d686ec00ec54c7b275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_660d5095d0eda64e2b6d75c819e8057265ce8bfbc24954d686ec00ec54c7b275->leave($__internal_660d5095d0eda64e2b6d75c819e8057265ce8bfbc24954d686ec00ec54c7b275_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d458afdb2d7f300254de75b027443204df6009b89c8c346d9a75c4fb5be62bb8 = $this->env->getExtension("native_profiler");
        $__internal_d458afdb2d7f300254de75b027443204df6009b89c8c346d9a75c4fb5be62bb8->enter($__internal_d458afdb2d7f300254de75b027443204df6009b89c8c346d9a75c4fb5be62bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d458afdb2d7f300254de75b027443204df6009b89c8c346d9a75c4fb5be62bb8->leave($__internal_d458afdb2d7f300254de75b027443204df6009b89c8c346d9a75c4fb5be62bb8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c7d7724f00e3cca73ea83bf7e1a380452d1e5b7f97f548720f537d84d48b91c = $this->env->getExtension("native_profiler");
        $__internal_5c7d7724f00e3cca73ea83bf7e1a380452d1e5b7f97f548720f537d84d48b91c->enter($__internal_5c7d7724f00e3cca73ea83bf7e1a380452d1e5b7f97f548720f537d84d48b91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5c7d7724f00e3cca73ea83bf7e1a380452d1e5b7f97f548720f537d84d48b91c->leave($__internal_5c7d7724f00e3cca73ea83bf7e1a380452d1e5b7f97f548720f537d84d48b91c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2344207258a047329a4fbbc2661c783b0ca58b5a9d16245414ac427a1cebd3f9 = $this->env->getExtension("native_profiler");
        $__internal_2344207258a047329a4fbbc2661c783b0ca58b5a9d16245414ac427a1cebd3f9->enter($__internal_2344207258a047329a4fbbc2661c783b0ca58b5a9d16245414ac427a1cebd3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2344207258a047329a4fbbc2661c783b0ca58b5a9d16245414ac427a1cebd3f9->leave($__internal_2344207258a047329a4fbbc2661c783b0ca58b5a9d16245414ac427a1cebd3f9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
