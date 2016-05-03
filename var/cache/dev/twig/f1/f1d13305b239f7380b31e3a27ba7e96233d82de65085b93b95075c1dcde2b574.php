<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bd77c181a6e4aca9c7640ccb4fc41082f3fa2759d43f564961f027f17379f04c extends Twig_Template
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
        $__internal_de0fe559b689a6681779cf1de14390d47fd5f0c22ab24b113efe823964e1e58c = $this->env->getExtension("native_profiler");
        $__internal_de0fe559b689a6681779cf1de14390d47fd5f0c22ab24b113efe823964e1e58c->enter($__internal_de0fe559b689a6681779cf1de14390d47fd5f0c22ab24b113efe823964e1e58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de0fe559b689a6681779cf1de14390d47fd5f0c22ab24b113efe823964e1e58c->leave($__internal_de0fe559b689a6681779cf1de14390d47fd5f0c22ab24b113efe823964e1e58c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7148f1edae43c721109f1d307bc86d993e0bf24b8028ea8c5505981d55ddbb11 = $this->env->getExtension("native_profiler");
        $__internal_7148f1edae43c721109f1d307bc86d993e0bf24b8028ea8c5505981d55ddbb11->enter($__internal_7148f1edae43c721109f1d307bc86d993e0bf24b8028ea8c5505981d55ddbb11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7148f1edae43c721109f1d307bc86d993e0bf24b8028ea8c5505981d55ddbb11->leave($__internal_7148f1edae43c721109f1d307bc86d993e0bf24b8028ea8c5505981d55ddbb11_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3eb38cc69a87da9c29dc30bff15c076322b60fdb37e6ea8291c5f119b9d943df = $this->env->getExtension("native_profiler");
        $__internal_3eb38cc69a87da9c29dc30bff15c076322b60fdb37e6ea8291c5f119b9d943df->enter($__internal_3eb38cc69a87da9c29dc30bff15c076322b60fdb37e6ea8291c5f119b9d943df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3eb38cc69a87da9c29dc30bff15c076322b60fdb37e6ea8291c5f119b9d943df->leave($__internal_3eb38cc69a87da9c29dc30bff15c076322b60fdb37e6ea8291c5f119b9d943df_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d699dda36e248c3f3b2bdf9b10405d903570520113a557203f8764af82d2ded4 = $this->env->getExtension("native_profiler");
        $__internal_d699dda36e248c3f3b2bdf9b10405d903570520113a557203f8764af82d2ded4->enter($__internal_d699dda36e248c3f3b2bdf9b10405d903570520113a557203f8764af82d2ded4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d699dda36e248c3f3b2bdf9b10405d903570520113a557203f8764af82d2ded4->leave($__internal_d699dda36e248c3f3b2bdf9b10405d903570520113a557203f8764af82d2ded4_prof);

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
