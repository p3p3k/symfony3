<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_fc2fdbcf0d12e6aa2d269fbd32b37d226794a8dc03e41001ccc3d223cd80f551 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2f802699e0790c7c598751c1c43792ca656cc73f754733e57824a00977286f6 = $this->env->getExtension("native_profiler");
        $__internal_c2f802699e0790c7c598751c1c43792ca656cc73f754733e57824a00977286f6->enter($__internal_c2f802699e0790c7c598751c1c43792ca656cc73f754733e57824a00977286f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c2f802699e0790c7c598751c1c43792ca656cc73f754733e57824a00977286f6->leave($__internal_c2f802699e0790c7c598751c1c43792ca656cc73f754733e57824a00977286f6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_17f1b1536bf01725d4ca2a5bc38d52733caebc595c303934450c3e50ffb7418a = $this->env->getExtension("native_profiler");
        $__internal_17f1b1536bf01725d4ca2a5bc38d52733caebc595c303934450c3e50ffb7418a->enter($__internal_17f1b1536bf01725d4ca2a5bc38d52733caebc595c303934450c3e50ffb7418a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_17f1b1536bf01725d4ca2a5bc38d52733caebc595c303934450c3e50ffb7418a->leave($__internal_17f1b1536bf01725d4ca2a5bc38d52733caebc595c303934450c3e50ffb7418a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
