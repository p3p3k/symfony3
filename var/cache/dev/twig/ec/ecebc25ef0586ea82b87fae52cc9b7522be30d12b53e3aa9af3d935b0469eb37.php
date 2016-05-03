<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_ba00b652e8937b29d9c22da6d7b073d19632f96144356e3b2a12905d7dd83616 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_346a57ea1de237ca26ab5eac0eb72788392a930c67e0bca0d6f4672d1f311249 = $this->env->getExtension("native_profiler");
        $__internal_346a57ea1de237ca26ab5eac0eb72788392a930c67e0bca0d6f4672d1f311249->enter($__internal_346a57ea1de237ca26ab5eac0eb72788392a930c67e0bca0d6f4672d1f311249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_346a57ea1de237ca26ab5eac0eb72788392a930c67e0bca0d6f4672d1f311249->leave($__internal_346a57ea1de237ca26ab5eac0eb72788392a930c67e0bca0d6f4672d1f311249_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e9fe274380f4cc4686fd9e259e00e9df04d498f448bbd7b2be7c9b313683dae = $this->env->getExtension("native_profiler");
        $__internal_2e9fe274380f4cc4686fd9e259e00e9df04d498f448bbd7b2be7c9b313683dae->enter($__internal_2e9fe274380f4cc4686fd9e259e00e9df04d498f448bbd7b2be7c9b313683dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2e9fe274380f4cc4686fd9e259e00e9df04d498f448bbd7b2be7c9b313683dae->leave($__internal_2e9fe274380f4cc4686fd9e259e00e9df04d498f448bbd7b2be7c9b313683dae_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f75cabdcb4a965f584b75a4faf5fdc184c8c44b52cf46f6c268e9d71e6fb9c16 = $this->env->getExtension("native_profiler");
        $__internal_f75cabdcb4a965f584b75a4faf5fdc184c8c44b52cf46f6c268e9d71e6fb9c16->enter($__internal_f75cabdcb4a965f584b75a4faf5fdc184c8c44b52cf46f6c268e9d71e6fb9c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f75cabdcb4a965f584b75a4faf5fdc184c8c44b52cf46f6c268e9d71e6fb9c16->leave($__internal_f75cabdcb4a965f584b75a4faf5fdc184c8c44b52cf46f6c268e9d71e6fb9c16_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
