<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_11cedaab03c9f4715b872865e3d82e843803d5b2b381fd93a5f5853f4dcf5f3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_1bbfce0c639f30fe801ad114e4e6e7a58db7b7aec94663b032badfdf7f494f3f = $this->env->getExtension("native_profiler");
        $__internal_1bbfce0c639f30fe801ad114e4e6e7a58db7b7aec94663b032badfdf7f494f3f->enter($__internal_1bbfce0c639f30fe801ad114e4e6e7a58db7b7aec94663b032badfdf7f494f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bbfce0c639f30fe801ad114e4e6e7a58db7b7aec94663b032badfdf7f494f3f->leave($__internal_1bbfce0c639f30fe801ad114e4e6e7a58db7b7aec94663b032badfdf7f494f3f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6ed5f309e9963006c65324c2cb32f17cd804aaf34b52e46508dc339a0041573c = $this->env->getExtension("native_profiler");
        $__internal_6ed5f309e9963006c65324c2cb32f17cd804aaf34b52e46508dc339a0041573c->enter($__internal_6ed5f309e9963006c65324c2cb32f17cd804aaf34b52e46508dc339a0041573c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6ed5f309e9963006c65324c2cb32f17cd804aaf34b52e46508dc339a0041573c->leave($__internal_6ed5f309e9963006c65324c2cb32f17cd804aaf34b52e46508dc339a0041573c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e5674fc2ab6106c4688701f84bf63ebb9f556c9765f70dd7f2973baf42341a47 = $this->env->getExtension("native_profiler");
        $__internal_e5674fc2ab6106c4688701f84bf63ebb9f556c9765f70dd7f2973baf42341a47->enter($__internal_e5674fc2ab6106c4688701f84bf63ebb9f556c9765f70dd7f2973baf42341a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e5674fc2ab6106c4688701f84bf63ebb9f556c9765f70dd7f2973baf42341a47->leave($__internal_e5674fc2ab6106c4688701f84bf63ebb9f556c9765f70dd7f2973baf42341a47_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_450557c527905267fc63e49d48b2aa65b7aabf8e0015564f205a3cb4ac93e50f = $this->env->getExtension("native_profiler");
        $__internal_450557c527905267fc63e49d48b2aa65b7aabf8e0015564f205a3cb4ac93e50f->enter($__internal_450557c527905267fc63e49d48b2aa65b7aabf8e0015564f205a3cb4ac93e50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_450557c527905267fc63e49d48b2aa65b7aabf8e0015564f205a3cb4ac93e50f->leave($__internal_450557c527905267fc63e49d48b2aa65b7aabf8e0015564f205a3cb4ac93e50f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
