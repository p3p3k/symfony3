<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_be4a9117b895425a34f84346d522d79cd9078aee92caf245b6f34ba23713003c extends Twig_Template
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
        $__internal_76eb8410aee0a91b5cd3ed8d6cfec41338e9ec0e52a634a3c712e50f1eb09fc3 = $this->env->getExtension("native_profiler");
        $__internal_76eb8410aee0a91b5cd3ed8d6cfec41338e9ec0e52a634a3c712e50f1eb09fc3->enter($__internal_76eb8410aee0a91b5cd3ed8d6cfec41338e9ec0e52a634a3c712e50f1eb09fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_76eb8410aee0a91b5cd3ed8d6cfec41338e9ec0e52a634a3c712e50f1eb09fc3->leave($__internal_76eb8410aee0a91b5cd3ed8d6cfec41338e9ec0e52a634a3c712e50f1eb09fc3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2fb2b1b7a259be9e7fac8c9cce7eec0f1b08bcf0c973ed667778589c45541db4 = $this->env->getExtension("native_profiler");
        $__internal_2fb2b1b7a259be9e7fac8c9cce7eec0f1b08bcf0c973ed667778589c45541db4->enter($__internal_2fb2b1b7a259be9e7fac8c9cce7eec0f1b08bcf0c973ed667778589c45541db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2fb2b1b7a259be9e7fac8c9cce7eec0f1b08bcf0c973ed667778589c45541db4->leave($__internal_2fb2b1b7a259be9e7fac8c9cce7eec0f1b08bcf0c973ed667778589c45541db4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
