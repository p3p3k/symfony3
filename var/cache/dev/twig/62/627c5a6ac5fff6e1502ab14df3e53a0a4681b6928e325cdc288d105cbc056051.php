<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_39a5693e4b66bf89d3bee064e87cd1a78a09f54911cf66af8849bbb261b45d81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_78d80caf40be21464bd17e401033a93e319a310a36dcd64eb3278bcc0ac2a51c = $this->env->getExtension("native_profiler");
        $__internal_78d80caf40be21464bd17e401033a93e319a310a36dcd64eb3278bcc0ac2a51c->enter($__internal_78d80caf40be21464bd17e401033a93e319a310a36dcd64eb3278bcc0ac2a51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78d80caf40be21464bd17e401033a93e319a310a36dcd64eb3278bcc0ac2a51c->leave($__internal_78d80caf40be21464bd17e401033a93e319a310a36dcd64eb3278bcc0ac2a51c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_72b1ddb8399461a6538898c5e8188477919a615bfda61f4f667afa45db0916e3 = $this->env->getExtension("native_profiler");
        $__internal_72b1ddb8399461a6538898c5e8188477919a615bfda61f4f667afa45db0916e3->enter($__internal_72b1ddb8399461a6538898c5e8188477919a615bfda61f4f667afa45db0916e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_72b1ddb8399461a6538898c5e8188477919a615bfda61f4f667afa45db0916e3->leave($__internal_72b1ddb8399461a6538898c5e8188477919a615bfda61f4f667afa45db0916e3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8ec28d476863f2a5f59438d8aa80b8ffa0f71b051ea9f66fdfb6cc40ffec95c0 = $this->env->getExtension("native_profiler");
        $__internal_8ec28d476863f2a5f59438d8aa80b8ffa0f71b051ea9f66fdfb6cc40ffec95c0->enter($__internal_8ec28d476863f2a5f59438d8aa80b8ffa0f71b051ea9f66fdfb6cc40ffec95c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8ec28d476863f2a5f59438d8aa80b8ffa0f71b051ea9f66fdfb6cc40ffec95c0->leave($__internal_8ec28d476863f2a5f59438d8aa80b8ffa0f71b051ea9f66fdfb6cc40ffec95c0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_08d92c163b9b17658fc32a6eb66c6c068a38fe6b87d5c15a422644a5a50bc796 = $this->env->getExtension("native_profiler");
        $__internal_08d92c163b9b17658fc32a6eb66c6c068a38fe6b87d5c15a422644a5a50bc796->enter($__internal_08d92c163b9b17658fc32a6eb66c6c068a38fe6b87d5c15a422644a5a50bc796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_08d92c163b9b17658fc32a6eb66c6c068a38fe6b87d5c15a422644a5a50bc796->leave($__internal_08d92c163b9b17658fc32a6eb66c6c068a38fe6b87d5c15a422644a5a50bc796_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
