<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_e006f0cb3ddaa664effd4f51e3347288a029a153386004b6e83afd3e1eea2723 extends Twig_Template
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
        $__internal_04ed9aee1b6b4cda65c25fd46d977737091849113045a22118888b39ff59f8d7 = $this->env->getExtension("native_profiler");
        $__internal_04ed9aee1b6b4cda65c25fd46d977737091849113045a22118888b39ff59f8d7->enter($__internal_04ed9aee1b6b4cda65c25fd46d977737091849113045a22118888b39ff59f8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_04ed9aee1b6b4cda65c25fd46d977737091849113045a22118888b39ff59f8d7->leave($__internal_04ed9aee1b6b4cda65c25fd46d977737091849113045a22118888b39ff59f8d7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
