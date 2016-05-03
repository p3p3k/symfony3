<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_66905b3a48d601c4e9f918e64e2776e45252ba488fa82b689b2e165867c03f55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d3e90719e9324670aed5fc44bb1243831b29b35dfdd0e066a87e04829e3ad68 = $this->env->getExtension("native_profiler");
        $__internal_6d3e90719e9324670aed5fc44bb1243831b29b35dfdd0e066a87e04829e3ad68->enter($__internal_6d3e90719e9324670aed5fc44bb1243831b29b35dfdd0e066a87e04829e3ad68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_6d3e90719e9324670aed5fc44bb1243831b29b35dfdd0e066a87e04829e3ad68->leave($__internal_6d3e90719e9324670aed5fc44bb1243831b29b35dfdd0e066a87e04829e3ad68_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
