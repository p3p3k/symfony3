<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_7324335d0e40a3c16de254b9d401d38fd91ba8fd7f9ceb4cfd18924627287cac extends Twig_Template
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
        $__internal_081c497ee30c1e92718d07b066420db3e47cd60fd4e3b57b3eadd37ddc7ce8a5 = $this->env->getExtension("native_profiler");
        $__internal_081c497ee30c1e92718d07b066420db3e47cd60fd4e3b57b3eadd37ddc7ce8a5->enter($__internal_081c497ee30c1e92718d07b066420db3e47cd60fd4e3b57b3eadd37ddc7ce8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        // line 1
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array())) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class", array()) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type", array())) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array()));
            echo "(";
            echo $this->env->getExtension('code')->formatArgsAsText($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args", array()));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file", array());
            echo " line ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line", array());
            echo "
";
        }
        
        $__internal_081c497ee30c1e92718d07b066420db3e47cd60fd4e3b57b3eadd37ddc7ce8a5->leave($__internal_081c497ee30c1e92718d07b066420db3e47cd60fd4e3b57b3eadd37ddc7ce8a5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  36 => 6,  32 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if trace.function %}*/
/*     at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args_as_text }})*/
/* {% else %}*/
/*     at n/a*/
/* {% endif %}*/
/* {% if trace.file is defined and trace.line is defined %}*/
/*         in {{ trace.file }} line {{ trace.line }}*/
/* {% endif %}*/
/* */
