<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1d8a11d240f834facc43f2043a892efe3d93a79386662c66178d5a9311d3ac58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9248213bd4f67b9f8d8bc424da479230e19faa503602147a4ad112f543691516 = $this->env->getExtension("native_profiler");
        $__internal_9248213bd4f67b9f8d8bc424da479230e19faa503602147a4ad112f543691516->enter($__internal_9248213bd4f67b9f8d8bc424da479230e19faa503602147a4ad112f543691516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9248213bd4f67b9f8d8bc424da479230e19faa503602147a4ad112f543691516->leave($__internal_9248213bd4f67b9f8d8bc424da479230e19faa503602147a4ad112f543691516_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9c0917d4fcd5b2d56524baf26a03480bc92464b59c524c4547394b46520f136c = $this->env->getExtension("native_profiler");
        $__internal_9c0917d4fcd5b2d56524baf26a03480bc92464b59c524c4547394b46520f136c->enter($__internal_9c0917d4fcd5b2d56524baf26a03480bc92464b59c524c4547394b46520f136c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9c0917d4fcd5b2d56524baf26a03480bc92464b59c524c4547394b46520f136c->leave($__internal_9c0917d4fcd5b2d56524baf26a03480bc92464b59c524c4547394b46520f136c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_98cd2afe55b134d6d9796d7e71418af2226e3306f9c4ef02de81c839e2e1d6ee = $this->env->getExtension("native_profiler");
        $__internal_98cd2afe55b134d6d9796d7e71418af2226e3306f9c4ef02de81c839e2e1d6ee->enter($__internal_98cd2afe55b134d6d9796d7e71418af2226e3306f9c4ef02de81c839e2e1d6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_98cd2afe55b134d6d9796d7e71418af2226e3306f9c4ef02de81c839e2e1d6ee->leave($__internal_98cd2afe55b134d6d9796d7e71418af2226e3306f9c4ef02de81c839e2e1d6ee_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_29c4028d1710083662180f96c187e0bffff34aba79b36154019996724fa63d2d = $this->env->getExtension("native_profiler");
        $__internal_29c4028d1710083662180f96c187e0bffff34aba79b36154019996724fa63d2d->enter($__internal_29c4028d1710083662180f96c187e0bffff34aba79b36154019996724fa63d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_29c4028d1710083662180f96c187e0bffff34aba79b36154019996724fa63d2d->leave($__internal_29c4028d1710083662180f96c187e0bffff34aba79b36154019996724fa63d2d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
