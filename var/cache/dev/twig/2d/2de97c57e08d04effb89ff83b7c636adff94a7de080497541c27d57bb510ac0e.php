<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_a352910994e1e43618a51b44884b74268e207405b5b92b11f1556735ce7d9397 extends Twig_Template
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
        $__internal_b5823d2534967cf5a5ad70d7c5a2fb62cc6df6d80b615f32186ba582927a11c1 = $this->env->getExtension("native_profiler");
        $__internal_b5823d2534967cf5a5ad70d7c5a2fb62cc6df6d80b615f32186ba582927a11c1->enter($__internal_b5823d2534967cf5a5ad70d7c5a2fb62cc6df6d80b615f32186ba582927a11c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_b5823d2534967cf5a5ad70d7c5a2fb62cc6df6d80b615f32186ba582927a11c1->leave($__internal_b5823d2534967cf5a5ad70d7c5a2fb62cc6df6d80b615f32186ba582927a11c1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
