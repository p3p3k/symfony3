<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_fb50d2fa0340c5562eb5bd9bf6fc995aaeb78599d370b1db5f3bfd9ad932a56c extends Twig_Template
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
        $__internal_3ec44ae7e865fb0f56ee5c255984479f9478f48993078129cd8f601d5ac4ac5e = $this->env->getExtension("native_profiler");
        $__internal_3ec44ae7e865fb0f56ee5c255984479f9478f48993078129cd8f601d5ac4ac5e->enter($__internal_3ec44ae7e865fb0f56ee5c255984479f9478f48993078129cd8f601d5ac4ac5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
<h2 class=\"page-header\">Register</h2>


";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Register", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_3ec44ae7e865fb0f56ee5c255984479f9478f48993078129cd8f601d5ac4ac5e->leave($__internal_3ec44ae7e865fb0f56ee5c255984479f9478f48993078129cd8f601d5ac4ac5e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 11,  37 => 9,  32 => 7,  28 => 6,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <h2 class="page-header">Register</h2>*/
/* */
/* */
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'Register'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
