<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_1d0d16d7e9150badebde9a677f08198dedb4620263e8b82f8c7d219c222ad7b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0fce933309348b2e6cbd756bec84562f2c9851b23d17e75c741fabf13d91ab1 = $this->env->getExtension("native_profiler");
        $__internal_a0fce933309348b2e6cbd756bec84562f2c9851b23d17e75c741fabf13d91ab1->enter($__internal_a0fce933309348b2e6cbd756bec84562f2c9851b23d17e75c741fabf13d91ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0fce933309348b2e6cbd756bec84562f2c9851b23d17e75c741fabf13d91ab1->leave($__internal_a0fce933309348b2e6cbd756bec84562f2c9851b23d17e75c741fabf13d91ab1_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f068a8c208e1cb8bb263a5d09bd0d00c0e665b6df067f65c496578a0a840507a = $this->env->getExtension("native_profiler");
        $__internal_f068a8c208e1cb8bb263a5d09bd0d00c0e665b6df067f65c496578a0a840507a->enter($__internal_f068a8c208e1cb8bb263a5d09bd0d00c0e665b6df067f65c496578a0a840507a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

";
        // line 7
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 8
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 9
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 10
                    echo "            <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                ";
                    // line 11
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 16
        echo "
<div>
    ";
        // line 18
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 20
        echo "</div>

";
        
        $__internal_f068a8c208e1cb8bb263a5d09bd0d00c0e665b6df067f65c496578a0a840507a->leave($__internal_f068a8c208e1cb8bb263a5d09bd0d00c0e665b6df067f65c496578a0a840507a_prof);

    }

    // line 18
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_63185824fe7a2bcf7cf9c02793e35a156d7884736afcde6fb6d8be845cc656e1 = $this->env->getExtension("native_profiler");
        $__internal_63185824fe7a2bcf7cf9c02793e35a156d7884736afcde6fb6d8be845cc656e1->enter($__internal_63185824fe7a2bcf7cf9c02793e35a156d7884736afcde6fb6d8be845cc656e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 19
        echo "    ";
        
        $__internal_63185824fe7a2bcf7cf9c02793e35a156d7884736afcde6fb6d8be845cc656e1->leave($__internal_63185824fe7a2bcf7cf9c02793e35a156d7884736afcde6fb6d8be845cc656e1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 19,  93 => 18,  84 => 20,  82 => 18,  78 => 16,  71 => 14,  62 => 11,  57 => 10,  52 => 9,  47 => 8,  45 => 7,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* {% if app.request.hasPreviousSession %}*/
/*     {% for type, messages in app.session.flashbag.all() %}*/
/*         {% for message in messages %}*/
/*             <div class="flash-{{ type }}">*/
/*                 {{ message }}*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endfor %}*/
/* {% endif %}*/
/* */
/* <div>*/
/*     {% block fos_user_content %}*/
/*     {% endblock fos_user_content %}*/
/* </div>*/
/* */
/* {% endblock %}*/
