<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a91ea65c1e8ba73cb97e057b730e1075f76576f4f39e4307797a59d94b596f61 extends Twig_Template
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
        $__internal_08ca62975e109a94667b35179e3d1f64c203818aeb12e6829700b05afba5deb2 = $this->env->getExtension("native_profiler");
        $__internal_08ca62975e109a94667b35179e3d1f64c203818aeb12e6829700b05afba5deb2->enter($__internal_08ca62975e109a94667b35179e3d1f64c203818aeb12e6829700b05afba5deb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_08ca62975e109a94667b35179e3d1f64c203818aeb12e6829700b05afba5deb2->leave($__internal_08ca62975e109a94667b35179e3d1f64c203818aeb12e6829700b05afba5deb2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
